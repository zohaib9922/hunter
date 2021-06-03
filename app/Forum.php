<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    protected $fillable = [
        'postalcode', 'email', 'number', 'number','insurancetype'
    ];
}
