<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>勤怠報告削除</title>
        <link rel="stylesheet" href="/workingmanager0401/resources/css/style.css">
    </head>
    <body>
      <div class="work_reports-end">
        <form method="post" action="/workingmanager0401/public/employees/detail">
        @csrf
        <p>削除しました。</p>
        <input type="submit" class="return" value="戻る">
        <input type="hidden" name="id" value="<?php echo $employee_id;?>">
        </form>
        </div>
    </body>
</html>
