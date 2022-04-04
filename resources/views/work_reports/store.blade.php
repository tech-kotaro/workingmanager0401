<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>打刻完了</title>
        <link rel="stylesheet" href="/workingmanager0401/resources/css/style.css">
    </head>
    <body>
      <div class="work_reports-end">
        <h1>打刻完了</h1>
        <p>打刻完了しました。</p>
        <form method="post" action="/workingmanager0401/public/employees/detail">
        @csrf
        <input type="submit" class="return" value="過去の勤怠表を見る">
        <input type="hidden" name="id" value="<?php echo $employee_id;?>">
        </form>
        </div>
    </body>
</html>
