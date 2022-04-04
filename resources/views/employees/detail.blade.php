<?php
$count_time=0;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>勤怠表</title>
        <link rel="stylesheet" href="/workingmanager0401/resources/css/style.css">
    </head>
    <body>
      <div class="kintai">
        <div class="kintai-header">
          <h1>勤怠表</h1>
          @foreach ($work_reports_employees as $work_reports_employee)
          <p>{{ $work_reports_employee->employee_name }}さん</p>
          @endforeach
        </div>
        <div class="kintai-table-wrapper">
        <table class="kintai-table">
            <tr>
                <th>社員ID</th>
                <th>氏名</th>
                <th>部署</th>
                <th>総稼働時間</th>
            </tr>
            @foreach ($work_reports as $work_report)
              <?php $count_time+=$work_report->hour;?>
            @endforeach
            @foreach ($work_reports_employees as $work_reports_employee)
                <tr>
                    <td>{{ $work_reports_employee->id }}</td>
                    <td>{{ $work_reports_employee->employee_name }}</td>
                    <td>{{ $work_reports_employee->section }}</td>
                    <td><?php echo $count_time;?></td>
                </tr>
            @endforeach
        </table>
          <table class="kintai-table">
            <tr>
                <th>編集</th>
                <th>削除</th>
                <th>稼働日付</th>
                <th>開始時間</th>
                <th>終了時間</th>
                <th>稼働時間</th>
                <th>一言メモ</th>
            </tr>
            @foreach ($work_reports as $work_report)
              <tr>
                    <td class="edit">
                    <form action="/workingmanager0401/public/employees/edit" method="post">
                    @csrf
                      <input class="edit-btn" type="submit" value="編集">
                      <input type="hidden" name="id" value="{{$work_report->id}}">
                      <input type="hidden" name="employee_id" value="{{$work_report->employee_id}}">
                    </form>
                    </td>
                    <td class="delete">
                    <form action="/workingmanager0401/public/employees/delete" method="post">
                    @csrf
                      <input class="delete-btn" type="submit" value="削除">
                      <input type="hidden" name="id" value="{{$work_report->id}}">
                      <input type="hidden" name="employee_id" value="{{$work_report->employee_id}}">
                    </form>
                    </td>
                    <td>{{ $work_report->date }}</td>
                    <td>{{ $work_report->start_time }}</td>
                    <td>{{ $work_report->end_time }}</td>
                    <td>{{ $work_report->hour }}</td>
                    <td>{{ $work_report->summary }}</td>
                </tr>
            @endforeach
          </table>
        </form>
        </div>
        <a class="return" href="/workingmanager0401/public/employees/">社員一覧へ</a>
        <a class="return return02" href="/workingmanager0401/public/work_reports/create">本日の打刻を打つ</a>
      </div>
    </body>
</html>
