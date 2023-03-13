<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plans extends Model
{
    use HasFactory;

    protected $fillable = [
        'plan_title',
        'plan_estimate_price',
        'category',
        'duration',
        'plan_status',
        'action'
    ];
}
