<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Assistant extends Model
{
    //
    protected $fillable = [
        'name',
        'date_created',
        'partner_companies',
        'status',
    ];


    protected $casts = [
        'partner_company_ids' => 'array',
        'is_active' => 'boolean',
    ];

}
