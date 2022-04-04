<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>勤怠更新完了</title>
        <link rel="stylesheet" href="/workingmanager0401/resources/css/style.css">
    </head>
    <body>
      <div class="work_reports-end">
      <h1>勤怠更新完了</h1>
      <form method="post" action="/workingmanager0401/public/employees/detail">
        @csrf
        <p>勤怠更新完了しました。</p>
        <input type="submit" class="return" value="戻る">
        <input type="hidden" name="id" value="<?php echo $employee_id;?>">
       </form>
        </div>
    </body>
</html>
