<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ユーザー管理リスト（入力画面）</title>
</head>

<body>
  <form action="todo_create.php" method="POST">
    <fieldset>
      <legend>ユーザー管理リスト（入力画面）</legend>
      <a href="todo_read.php">一覧画面</a>
      <div>
        ユーザー名: <input type="text" name="todo">
      </div>
      password:<input type="text" name="password">
      </div>
      <div>
        登録日: <input type="date" name="deadline">
      </div>
      <div>
        <button>submit</button>
      </div>
    </fieldset>
  </form>

</body>

</html>