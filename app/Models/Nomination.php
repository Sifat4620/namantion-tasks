<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nomination extends Model
{
    use HasFactory;

    protected $fillable = [
        'committee_type',
        'election_name',
        'nominee_name',
        'district',
        'constituency',
        'dob',
        'nid_number',
        'mobile_number',
        'email',
        'nid_file',
        'tin_file',
        'symbol_file',
        'other_file',
    ];
}
