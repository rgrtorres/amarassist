<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = "book";
    public $fillable = ['name', 'email', 'phone_number', 'postal_code'];
}
