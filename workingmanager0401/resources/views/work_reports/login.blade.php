<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>ログイン画面</title>
        <link rel="stylesheet" href="/workingmanager0401/resources/css/style.css">
    </head>
    <body>
      <div class="work_reports-login">
        <h1>打刻アプリ</h1>
        <form method="post" action="/workingmanager0401/public/employees/create">
        @csrf
        <div class="login_id_wrapper">
        <label for="login_id">従業員ID</label>
        <input class="login_id" type="text"name="login_id">  
        </div>
        <div class="password_wrapper">
        <label for="password">パスワード</label>
        <input class="password" type="text"name="password">
        </div>
        <br>
        <input type="submit" class="login-btn" value="ログイン">
        </form>
        </div>
    </body>
</html>
