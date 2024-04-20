$('#addPackage').on('click', function () {
    var selector = $('#addPackageModal');
    selector.find('.is-invalid').removeClass('is-invalid');
    selector.find('.error-message').remove();
    selector.find('form').trigger('reset');
    selector.modal('show')
})

// $('#allData').DataTable({
//     processing: true,
//     serverSide: true,
//     pageLength: 25,
//     responsive: true,
//     ajax: $('#partnerOwnerRoute').val(),
//     order: [1, 'desc'],
//     ordering: false,
//     autoWidth: false,
//     drawCallback: function () {
//         $(".dataTables_length select").addClass("form-select form-select-sm");
//     },
//     language: {
//         'paginate': {
//             'previous': '<span class="iconify" data-icon="icons8:angle-left"></span>',
//             'next': '<span class="iconify" data-icon="icons8:angle-right"></span>'
//         }
//     },
//     columns: [
//         { "data": 'DT_RowIndex', "name": 'DT_RowIndex', orderable: false, searchable: false, },
//         { "data": "user_name", "name": "users.first_name" },
         
//         { "data": "email", "name": "users.email" },
//         { "data": "package_name", "name": "packages.name" },
//         { "data": "gatewaysName", "name": "gateways.title" },
//         { "data": "start_date", "name": "owner_packages.start_date" },
//         { "data": "end_date", "name": "owner_packages.end_date" },
//         { "data": "payment_status", "name": "subscription_orders.payment_status" },
//         { "data": "status", "name": "owner_packages.status" },
//         { "data": "referral_code", "name": "users.referral_code" },
        
//         {
//     "data": "referralCount",
//     "name": "users.referralCount",
//     "render": function(data, type, row) {
//         // Check if the data type is display, to avoid processing for other data types like sorting or filtering
//         if (type === 'display') {
//             // Assuming data holds the referralCount, calculate points
//             var points = data * 10; // Each referral is worth 10 points
//             return points + ' Points'; // Display points with a label
//         }
//         return data; // For other data types, return data unmodified
//     }
// },

// { "data": "account_holder_name", "name": "bank_accounts.account_holder_name" },
//         { "data": "account_number", "name": "bank_accounts.account_number" },
//         { "data": "ifsc_code","name": "bank_accounts.ifsc_code"},
//         { "data": "bank_name", "name": "bank_accounts.bank_name"}

//     ]
// });


$(document).ready(function() {
    // Initialize the DataTable
    var table = $('#allData').DataTable({
        processing: true,
        serverSide: true,
        pageLength: 25,
        responsive: true,
        ajax: $('#partnerOwnerRoute').val(), // Replace with your AJAX data source URL
        order: [[1, 'desc']],
        ordering: false,
        autoWidth: false,
        drawCallback: function() {
            $(".dataTables_length select").addClass("form-select form-select-sm");
        },
        language: {
            paginate: {
                previous: '<span class="iconify" data-icon="icons8:angle-left"></span>',
                next: '<span class="iconify" data-icon="icons8:angle-right"></span>'
            }
        },
        columns: [
        { "data": 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
         { "data": "user_name", name: "users.first_name" },
            
            { "data": "email", "name": "users.email" },
        { "data": "package_name", "name": "packages.name" },
        { "data": "gatewaysName", "name": "gateways.title" },
                {
                // Merging start date and end date
                "data": null,
                "render": function(data, type, row) {
                    if (type === 'display') {
                        return row.start_date + ' <br/> ' + row.end_date;
                    }
                    return data;
                }
            },

        { "data": "referral_code", "name": "users.referral_code" },
        
        {
    "data": "referralCount",
    "name": "users.referralCount",
    "render": function(data, type, row) {
        // Check if the data type is display, to avoid processing for other data types like sorting or filtering
        if (type === 'display') {
            // Assuming data holds the referralCount, calculate points
            var points = data * 10; // Each referral is worth 10 points
            return points + ' Points'; // Display points with a label
        }
        return data; // For other data types, return data unmodified
    }
},
           
           
            
           {
    "data": null,
    "defaultContent": '<i class="fas fa-university pay-icon" data-bs-toggle="modal" data-bs-target="#bankDetailsModal"></i>',
    "orderable": false,
    "searchable": false
},
       {
                // Merging status and payment status
                "data": null,
                "render": function(data, type, row) {
                    if (type === 'display') {
                        return '<div>' + row.status + '<br/>' + row.payment_status + '</div>';
                    }
                    return data;
                }
            },
            
        ]
    });

    // Handle click event on dynamically added pay icons
    $('#allData tbody').on('click', 'i.pay-icon', function() {
        var data = table.row($(this).parents('tr')).data();

        // Update the modal with bank information
        $('#bankAccountHolder').text(data.account_holder_name || 'N/A');
        $('#bankAccountNumber').text(data.account_number || 'N/A');
        $('#bankIFSCCode').text(data.ifsc_code || 'N/A');
        $('#bankName').text(data.bank_name || 'N/A');


        // Show the modal
        $('#bankDetailsModal').modal('show');
    });
});
