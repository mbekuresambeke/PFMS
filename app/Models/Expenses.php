<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expenses extends Model
{
    use HasFactory;
    protected  $fillable = ['user_id
         budget_id','expenses_category_id',
        'expenses_title','expenses_amount',
        'expenses_description', 'expenses_date',];

    public function budget()
    {
        return $this->belongsTo(Budget::class);
    }

    public function ExpensesCategory()
    {
        return $this->belongsTo(ExpensesCategory::class);
    }
    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
