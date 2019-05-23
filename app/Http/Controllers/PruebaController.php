<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ExpenseReport;

class PruebaController extends Controller
{
    public function list () {
        return ExpenseReport::all();
    }
}
