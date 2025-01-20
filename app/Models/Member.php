<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = [
        'membership_number',    // Unique membership number
        'first_name',           // First name
        'last_name',            // Last name
        'personal_number',      // Personal number (unique)
        'address',              // Address
        'postal_code',          // Postal code
        'city',                 // City
        'mobile_phone',         // Mobile phone number (unique)
        'email',                // Email (unique)
        'citizenship',          // Citizenship
        'mission_society',      // Mission society (nullable)
        'consent_to_share',     // Consent to share data
        'signature_date',       // Date of signature
        'signature',            // Signature data (binary)
        'created_at',           // Timestamp
        'updated_at',           // Timestamp
    ];
}
