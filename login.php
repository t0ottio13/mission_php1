<?php
    // var_dump($_POST);
    // exit;
//フォームからの値をそれぞれ変数に代入
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
// $password = password_hash($_POST['password'], PASSWORD_DEFAULT);


$login_alert = "<script type='text/javascript'>alert('ログインに成功しました');</script>";

$file = fopen('data/users_info.txt', 'a+');
flock($file, LOCK_EX);
if($file){
    while($line= fgets($file)){
        $users_info = explode(' ',$line);

        if(
            $email == $users_info[1]
            && $name == $users_info[0]
            && password_verify ($_POST['password'] , $users_info[2] )
        ){
            echo $login_alert;
            flock($file, LOCK_UN);
            fclose($file);
            header('Location:admin_show.php');
            exit();
        }else{
            flock($file, LOCK_UN);
            fclose($file);
            header('Location:input_questionnaire.php');
        }

    }
}
// var_dump(explode('\n',$users_info[2]));
// exit;


?>