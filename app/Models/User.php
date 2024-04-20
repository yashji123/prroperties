<?php

namespace App\Models;
use App\Models\BankAccount;
// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Illuminate\Support\Str;
class User extends Authenticatable

{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [];

    public function tenant(): HasOne
    {
        return $this->hasOne(Tenant::class, 'user_id', 'id');
    }

    public function maintainer(): HasOne
    {
        return $this->hasOne(Maintainer::class, 'user_id', 'id');
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getNameAttribute(): string
    {
        return $this->first_name . ' ' . $this->last_name;
    }
    
     
    

    public function getImageAttribute(): string
    {
        if ($this->fileAttach) {
            return $this->fileAttach->FileUrl;
        }
        return asset('assets/images/no-image.jpg');
    }

    public function fileAttach()
    {
        return $this->morphOne(FileManager::class, 'origin');
    }
    
      protected static function boot()
    {
        parent::boot();

        static::creating(function ($user) {
            // Generate a unique referral code
            $user->referral_code = User::generateUniqueReferralCode();
        });
    }

    /**
     * Generate a unique referral code.
     *
     * @return string
     */
    public static function generateUniqueReferralCode()
    {
        do {
            $referralCode = Str::random(10); // Generate a random string of 10 characters
        } while (User::where('referral_code', $referralCode)->exists()); // Check if the code already exists

        return $referralCode;
    }



    public function bankAccount()
    {
        return $this->hasOne(BankAccount::class);
    }
    
    
    
}
