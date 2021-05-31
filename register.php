<?php

// var_dump($_POST);
// exit;
//フォームからの値をそれぞれ変数に代入
$name = $_POST['name'];
$mail = $_POST['mail'];
$pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);

$users_info = "{$name} {$mail} {$pass} \n";

$already_signup_alert = "<script type='text/javascript'>alert('このメールアドレスはすでに登録されています');</script>";

$file = fopen('data/users_info.txt', 'a+');
flock($file, LOCK_EX);
if($file){
    while($line= fgets($file)){
        $users_info_email = explode(' ',$line);
        if($mail == $users_info_email[1]){
            echo $already_signup_alert;
            flock($file, LOCK_UN);
            fclose($file);
            exit();
            header('Location:signup.php');
        }else{
            fwrite($file, $users_info);
            flock($file, LOCK_UN);
            fclose($file);
            header('Location:admin_show.php');
        }

    }
}
// var_dump($users_info_email[1]);
// exit;



// var_dump($users_info);
// exit;
// $username = "xxx";
// $password = "xxx";
// try {
//     $dbh = new PDO($dsn, $username, $password);
// } catch (PDOException $e) {
//     $msg = $e->getMessage();
// }

// //フォームに入力されたmailがすでに登録されていないかチェック
// $sql = "SELECT * FROM users WHERE mail = :mail";
// $stmt = $dbh->prepare($sql);
// $stmt->bindValue(':mail', $mail);
// $stmt->execute();
// $member = $stmt->fetch();
// if ($member['mail'] === $mail) {
//     $msg = '同じメールアドレスが存在します。';
//     $link = '<a href="signup.php">戻る</a>';
// } else {
//     //登録されていなければinsert 
//     $sql = "INSERT INTO users(name, mail, pass) VALUES (:name, :mail, :pass)";
//     $stmt = $dbh->prepare($sql);
//     $stmt->bindValue(':name', $name);
//     $stmt->bindValue(':mail', $mail);
//     $stmt->bindValue(':pass', $pass);
//     $stmt->execute();
//     $msg = '会員登録が完了しました';
//     $link = '<a href="login.php">ログインページ</a>';
// }
// ?>

// <h1><?php echo $msg; ?></h1><!--メッセージの出力-->
// <?php echo $link; ?>