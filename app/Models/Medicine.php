<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    protected $fillable = [
        'druge_name', 'druge_type', 'made_in', 'company_name', 'type', 'description','expire_date',
    ];
}
