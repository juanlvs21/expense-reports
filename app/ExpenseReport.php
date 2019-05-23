<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExpenseReport extends Model
{
    /* Relación con Expenses */
    public function expenses() 
    {
        return $this->hasMany(Expense::class);
    }
}
