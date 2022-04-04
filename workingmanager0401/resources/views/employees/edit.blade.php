<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>勤怠編集</title>
        <link rel="stylesheet" href="/workingmanager0401/resources/css/style.css">
    </head>
    <body>
    <div class="work_reports-edit">
      <h2>勤怠報告の変更</h2>
        <form action="/workingmanager0401/public/employees/update" method="post">
            @csrf
            <table class="work_reports-edit-table">
            @foreach ($work_reports as $work_report)
              <input type="hidden" name="employee_id" value="{{$work_report->employee_id}}">
                <tr>
                    <th>作業日付</th>
                    <td><input type="text" name="date" value="{{ $work_report->date }}"></td>
                </tr>
                <tr>
                    <th>開始時間</th>
                    <td><input type="text" name="start_time"  value="{{ $work_report->start_time }}"></td>
                </tr>
                <tr>
                    <th>終了時間</th>
                    <td><input type="text" name="end_time"  value="{{ $work_report->end_time }}"></td>
                </tr>
                <tr>
                    <th>一言メモ</th>
                    <td><textarea name="summary" id="" cols="" rows="" value="">{{ $work_report->summary }}</textarea></td>
                </tr>
                <input type="hidden" name="id" value="{{$work_report->id}}">
              @endforeach
              </table>
                <input type="submit" value="更新する" class="update">
              </form>
        </div>
    </body>
</html>
