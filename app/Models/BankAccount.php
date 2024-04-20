<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BankAccount extends Model
{
    use HasFactory;

    // Specify the table if it's not the plural form of the model name
    // protected $table = 'bank_accounts';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'account_holder_name',
        'account_number',
        'ifsc_code',
        'bank_name',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        // Add casts if necessary, for example:
        // 'created_at' => 'datetime',
        // 'updated_at' => 'datetime',
    ];

    /**
     * Get the user that owns the bank account.
     */
    public function user()
    {
        return $this->belongsTo(User::class); // Ensure User class is imported at the top
    }

    // Add any additional methods or relationships below this comment.
    
    
    public function bankAccount()
{
    return $this->hasOne(BankAccount::class);
}

    
    
}
