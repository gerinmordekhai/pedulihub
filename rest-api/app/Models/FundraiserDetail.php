<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class FundraiserDetail extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'user_id',
        'full_name',
        'address',
        'selfie_img',
        'nik_ktp',
        'ktp_img',
        'phone_number',
        'bank_name',
        'bank_account',
        'contract_file',
    ];

    /**
     * The relation between tables.
     * 
     */
    public function fundraiser()
    {
        return $this->belongsTo(Fundraiser::class);
    }
}
