<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>社員一覧</title>
        <link rel="stylesheet" href="/workingmanager0401/resources/css/style.css">
    </head>
    <body>
    <div class="employee-index">
        <div class="employee-index-header">
            <h1>社員一覧</h1>
        </div>
        <table  class="employee-index-table">
            <tr>
                <th>社員ID</th>
                <th>氏名</th>
                <th>部署</th>
                <th></th>
            </tr>
            @foreach ($work_reports_employees as $work_reports_employee)
            <form action="/workingmanager0401/public/employees/detail" method="post">
                @csrf    
                <tr>
                    <td><input type="hidden" name="id" value="{{$work_reports_employee->id}}">{{$work_reports_employee->id}}</td>
                    <td><input type="hidden" name="employee_name" value="{{$work_reports_employee->employee_name}}">{{$work_reports_employee->employee_name}}</td>
                    <td><input type="hidden" name="section" value="{{$work_reports_employee->section}}">{{$work_reports_employee->section}}</td>
                    <td class="submit-td"><input type="submit" value="自分の勤怠表を見る" class="detail-btn"></td>
                    <!--<input type="hidden" name="id" value="{{$work_reports_employee->id}}">-->
                </tr>
            </form>
            @endforeach
        </table>   
        <a class="return" href="/workingmanager0401/public/work_reports">勤怠報告一覧へ</a>
        </div>
    </body>
</html>
