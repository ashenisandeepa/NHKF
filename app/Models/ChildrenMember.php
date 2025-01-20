<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChildrenMember extends Model
{
    protected $fillable = [
        'membership_number',        // Membership number for child
        'child_first_name',         // Child's first name
        'child_last_name',          // Child's last name
        'child_personal_number',    // Unique personal number for child
        'child_address',            // Child's address
        'child_postal_code',        // Child's postal code
        'child_city',               // Child's city
        'baptism_date',             // Baptism date (nullable)
        'baptism_place',            // Baptism place (nullable)
        'mission_society',          // Mission society (nullable)
        'guardian1_first_name',     // First name of guardian 1
        'guardian1_last_name',      // Last name of guardian 1
        'guardian1_personal_number',// Unique personal number for guardian 1
        'guardian1_address',        // Guardian 1 address
        'guardian1_postal_code',    // Guardian 1 postal code
        'guardian1_city',           // Guardian 1 city
        'guardian2_first_name',     // First name of guardian 2 (nullable)
        'guardian2_last_name',      // Last name of guardian 2 (nullable)
        'guardian2_personal_number',// Unique personal number for guardian 2 (nullable)
        'guardian2_address',        // Guardian 2 address (nullable)
        'guardian2_postal_code',    // Guardian 2 postal code (nullable)
        'guardian2_city',           // Guardian 2 city (nullable)
        'consent_to_share',         // Consent to share data (default false)
        'signature_date',           // Signature date
        'signatures',               // Signatures data (binary)
        'created_at',               // Timestamp
        'updated_at',               // Timestamp
    ];
}
