<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\WorkReportsRequest;
// add
use Illuminate\Support\Facades\DB;
use App\Models\WorkReports;
use App\Models\WorkReportsEmployee;
use LDAP\Result;

class WorkReportsController extends Controller
{
    public function login(){
        return view('work_reports.login');
    }
    public function login_check(WorkReportsRequest $request){
        $work_report->employee_id=$request->input('employee_id');
    }
    //add
    public function index(){
        $work_reports=WorkReports::all();
        return view('work_reports.index',['work_reports'=>$work_reports]);
    }
    public function create(){
        return view('work_reports.create');
    }
    public function store(WorkReportsRequest $request){
        $work_report=new WorkReports;
        $work_report->employee_id=$request->input('employee_id');
        $work_report->date=$request->input('date');
        $work_report->start_time=$request->input('start_time');
        $work_report->end_time=$request->input('end_time');
        $WorkTime = (strtotime($request->input('end_time'))-strtotime($request->input('start_time')))/3600;
        $work_report->hour=$WorkTime;
        $work_report->summary=$request->input('summary');
        $work_report->save();
        $employee_id=$request->input('employee_id');
        return view('work_reports.store',['employee_id'=>$employee_id]);
    }
    public function employees(){
        $work_reports_employees=WorkReportsEmployee::all();
        return view('employees.index',['work_reports_employees'=>$work_reports_employees]);
    }

    public function detail(Request $request){
        $id=$request->input('id');
        $work_reports_employees=DB::table('work_reports_employees')->where('id','=',$id)->get();
        $work_reports=DB::table('work_reports')->where('employee_id','=',$id)->get(); 
        return view('employees.detail',['work_reports_employees'=>$work_reports_employees,'work_reports'=>$work_reports,'id'=>$id]);
        /*
        $work_reports_employees=WorkReportsEmployee::all();
        $id=$_POST['id'];
        $work_reports_details=WorkReports::where('id','==',$id)->get();
        return view('employees.detail',['work_reports_employees'=>$work_reports_employees,'work_reports_detail'=>$work_reports_details]);
        */
    }
    public function edit(Request $request){
        $id=$request->input('id');
        $work_reports=DB::table('work_reports')->where('id','=',$id)->get();
        return view('employees.edit',['work_reports'=>$work_reports]);
    }
    public function delete(Request $request){
        $id=$request->input('id');
        $employee_id=$request->input('employee_id');
        $work_reports=DB::table('work_reports')->where('id','=',$id)->delete();
        return view('employees.delete',['employee_id'=>$employee_id]);
    }
    public function update(Request $request){
        $id=$request->input('id');
        $date=$request->input('date');
        $start_time=$request->input('start_time');
        $end_time=$request->input('end_time');
        $hour = (strtotime($end_time)-strtotime($start_time))/3600;
        $summary=$request->input('summary');
        $work_reports=DB::table('work_reports')->where('id','=',$id)->update(['date'=>$date,'start_time'=>$start_time,'end_time'=>$end_time,'hour'=>$hour,'summary'=>$summary]);
        $employee_id=$request->input('employee_id');
        return view('employees.update',['employee_id'=>$employee_id]);
    }
}
