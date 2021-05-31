<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./signup.css">
    <title>管理者登録</title>
</head>
<body>
    <h1>管理者登録</h1>
    <form action="register.php" method="post">
        <div class="wrapper">
            <div>
                <label>名前<label>
                <input type="text" name="name" required>
            </div>
            <div>
                <label>メールアドレス<label>
                <input type="text" name="mail" required>
            </div>
            <div>
                <label>パスワード<label>
                <input type="password" name="pass" required>
            </div>
        </div>
        <input type="submit" value="新規登録" class="submit_btn">
        <p>すでに登録済みの方は<a href="input_questionnaire.php">こちら</a></p>
    </form>
</body>
</html>
