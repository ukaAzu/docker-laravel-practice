<?php

namespace App\Http\Controllers;

use App\Models\Models\WorkReport as ModelsWorkReport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\WorkReport;
use App\Http\Requests\WorkReportsRequest;

class WorkReportsController extends Controller
{
    public function index()
    {
        $work_reports = WorkReport::all();
        return view('work_reports.index',['work_reports' => $work_reports]);
    }

    public function create()
    {
        return view('work_reports.create');
    }

    public function store(WorkReportsRequest $request)
    {
        $work_report = new WorkReport;
        $work_report->employee_id = $request->input('employee_id');
        $work_report->work_date = $request->input('work_date');
        $work_report->work_time = $request->input('work_time');
        $work_report->summary = $request->input('summary');
        $work_report->save();

        return view('work_reports.store');
    }
}
