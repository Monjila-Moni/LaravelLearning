<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; // Import the HasFactory trait
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory; // Use the HasFactory trait

    // Optionally, define fillable attributes to protect against mass assignment vulnerabilities
    protected $fillable = ['name', 'age', 'email', 'address', 'city', 'phone', 'password'];
}
