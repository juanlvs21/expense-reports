<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\ExpenseReport;
use App\Mail\SummaryReport;

class ExpenseReportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('expenseReport.index', ['expenseReports' => ExpenseReport::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('expenseReport.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validaData = $request->validate([
            'title' => 'required|min:3'
        ]);

        $report = new ExpenseReport();
        $report->title = $validaData['title'];
        $report->save();

        return redirect('/reports');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //public function show($id) // Forma standar
    public function show(ExpenseReport $report) //Otra alternativa
    {
        //$report = ExpenseReport::findOrFail($id);
        return view('expenseReport.show',['report' => $report]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $report = ExpenseReport::findOrFail($id);
        return view('expenseReport.edit',['report' => $report]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validaData = $request->validate([
            'title' => 'required|min:3'
        ]);

        $report = ExpenseReport::findOrFail($id);
        $report->title = $validaData['title'];
        $report->save();

        return redirect('/reports');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $report = ExpenseReport::findOrFail($id);
        $report->delete();

        return redirect('/reports');
    }

    public function confirmDelete($id)
    {
        $report = ExpenseReport::findOrFail($id);
        return view('expenseReport.confirmDelete',['report' => $report]);
    }
    
    public function confirmSendEmail($id)
    {
        $report = ExpenseReport::findOrFail($id);
        return view('expenseReport.confirmSendEmail',['report' => $report]);
    }
    
    public function sendEmail(Request $request, $id)
    {
        $report = ExpenseReport::findOrFail($id);
        Mail::to($request->get('email'))->send(new SummaryReport($report));

        return redirect('/reports/'.$id);
    }
}
