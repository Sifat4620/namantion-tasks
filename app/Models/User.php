<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable; // Use Authenticatable
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable // Extend Authenticatable
{
    use Notifiable;

    // Specify the table name if it doesn't follow Laravel's default pluralization
    protected $table = 'users';

    // Specify the fillable fields (columns that can be mass-assigned)
    protected $fillable = ['username', 'password'];

    // If you want to hide certain attributes (for example, sensitive fields)
    protected $hidden = ['password'];

    // If you need custom timestamps format or want to disable them, modify this:
    public $timestamps = true; // Or set to false if you don't want timestamps
}
