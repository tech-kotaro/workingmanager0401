<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>本日の打刻 | Employees</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="/workingmanager0401/resources/css/style.css">
    </head>
    <body>
      <div class="work_reports">
      <h1>本日の打刻</h1>
      <?php
if ($errors->any()) {
    foreach($errors->all() as $error) {
        echo '<p style="color:red;">'.e($error).'</p>';
    }
}
?>
        <form action="/workingmanager0401/public/work_reports/store" method="post">
            @csrf
            <table class="work_reports-create-table">
                <tr>
                    <th>従業員ID</th>
                    <td><input type="text" name="employee_id"></td>
                </tr>
                <tr>
                    <th>日付</th>
                    <td><input type="text" name="date"></td>
                </tr>
                <tr>
                    <th>開始時間</th>
                    <td><input type="text" name="start_time"></td>
                </tr>
                <tr>
                    <th>終了時間</th>
                    <td><input type="text" name="end_time"></td>
                </tr>
                <tr>
                    <th>概要</th>
                    <td><textarea name="summary" id="" cols="30" rows="10" class="summary"></textarea></td>
                </tr>
                </table>
                <input type="submit" value="登録する" class="register">
              </form>
      </div>
    </body>
</html>
