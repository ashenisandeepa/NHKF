<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Withdrawal extends Model
{
    protected $fillable = [
        'society_name',      // Name of the society
        'society_address',   // Address of the society
        'member_name',       // Name of the member requesting withdrawal
        'personal_number',   // Unique personal number of the member
        'place',             // Place of the withdrawal
        'date',              // Date of the withdrawal request
        'signature',         // Signature data (binary)
        'created_at',        // Timestamp
        'updated_at',        // Timestamp
    ];
}
