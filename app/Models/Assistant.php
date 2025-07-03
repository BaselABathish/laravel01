<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Assistant extends Model
{
    //fillable inserts as is
    protected $fillable = [
        'name',
        'date_created',
        'partner_companies',
        'status',
    ];

//casts converts data type, both are reserved variable names
    protected $casts = [
        'partner_companies' => 'array',
        'status' => 'boolean',
    ];

}
