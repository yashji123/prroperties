$('#allData').DataTable({
    destroy: true, 
    columns: [
        {
            "data": null,
            "defaultContent": '<span class="iconify pay-icon" data-icon="fa-solid:money-bill-wave" data-toggle="modal" data-target="#bankDetailsModal"></span>',
            "orderable": false,
            "searchable": false
        }
    ],

});

// Event delegation to handle click event on dynamically added pay icons
$('#allData tbody').on('click', 'span.pay-icon', function () {
    var data = $('#allData').DataTable().row($(this).parents('tr')).data();

    // Assuming `data` contains the bank information
    $('#bankAccountHolder').text(`Account Holder: ${data.account_holder_name}`);
    $('#bankAccountNumber').text(`Account Number: ${data.account_number}`);
    $('#bankIFSCCode').text(`IFSC Code: ${data.ifsc_code}`);
    $('#bankName').text(`Bank Name: ${data.bank_name}`);

    // Show the modal
    $('#bankDetailsModal').modal('show');
});
