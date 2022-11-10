<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExpensesCategory extends Model
{
    use HasFactory;
    protected $fillable = ['expenses_category_name', 'expenses_category_desc', 'user_id'];

    public function expenses()
    {
        return $this->hasMany(Expenses::class);
    }
    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
