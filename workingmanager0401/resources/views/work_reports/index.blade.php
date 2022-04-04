<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>全社員の打刻履歴</title>
        <link rel="stylesheet" href="/workingmanager0401/resources/css/style.css">
    </head>
    <body>
    <div class="work-reports-index">
        <h1>全社員の打刻履歴</h1>
        <table class="work-reports-table">
            <tr>
                <th>ID</th>
                <th>従業員ID</th>
                <th>作業日付</th>
                <th>開始時間</th>
                <th>終了時間</th>
                <th>作業時間</th>
                <th>一言メモ</th>
            </tr>
            @foreach ($work_reports as $work_report)
                <tr>
                    <td>{{ $work_report->id }}</td>
                    <td>{{ $work_report->employee_id }}</td>
                    <td>{{ $work_report->date }}</td>
                    <td>{{ $work_report->start_time }}</td>
                    <td>{{ $work_report->end_time }}</td>
                    <td>{{ $work_report->hour }}時間</td>
                    <td>{{ $work_report->summary }}</td>
                </tr>
            @endforeach
        </table>
        <a class="return" href="/workingmanager0401/public/employees">社員一覧へ</a>
        <a class="return return02" href="/workingmanager0401/public/work_reports/create">本日の打刻を打つ</a>
    </div>
    </body>
</html>
