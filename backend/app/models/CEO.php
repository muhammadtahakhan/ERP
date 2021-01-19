<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CEO extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name', 'company_name', 'year', 'company_headquarters', 'what_company_does'
    ];
}
