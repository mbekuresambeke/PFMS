<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
    use HasFactory;
    protected $fillable = ['budget_title', 'budget_amount', 'budget_type','budget_description','budget_status'];

    public function expenses()
    {
        return $this->hasMany(Expenses::class);
    }
    public function users()
    {
        return $this->belongsTo(User::class);
    }


}
