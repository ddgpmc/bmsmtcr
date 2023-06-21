<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ordinance extends Model
{
    protected $fillable = [
        'title',
        'description',
        // Add any other fillable fields for your ordinance model
    ];
}
