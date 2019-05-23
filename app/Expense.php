<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    /* Relación con Expense Report */
    public function expenseReport() 
    {
        return $this->belongsTo(ExpenseReport::class);
    }
}
