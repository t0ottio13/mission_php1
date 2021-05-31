<?php
    // if(isset($_POST["question1"])
    //     &&($_POST["question1"]==1
    //     ||$_POST["question1"]==2
    //     ||$_POST["question1"]==3
    //     ||$_POST["question1"]==4
    //     ||$_POST["question1"]==5))
    //     {
    //         print "回答：";
    //         print $_POST["question1"];
    // }else{
    //         print "回答が未入力です";
    // }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./input_questionnaire.css">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Modaal/0.4.4/css/modaal.min.css">
    <link rel="stylesheet" href="./modal.css">
    <title>アンケート入力</title>
</head>
<body>
    <header>
    <div><h1>カベ打ち感想アンケート</h1></div>
    <div class="login_sign_up">
        <a href="#login" class="modal-open">ログイン</a>
        <a href="./signup.php">管理者登録</a>
    </div>

    <section id="login">
        <ul>
            <li>
                <label for="name">管理者名 </label>
                <input type="name" id="name">
            </li>
            <li>
                <label for="email">メールアドレス</label>
                <input type="email" id="email">
            </li>
            <li>
                <label for="password">パスワード</label>
                <input type="password" id="password">
            </li>
            <li>
                <input type="button" value="ログインする" id="login_btn">
            </li>
        </ul>
    </section>
    </header>
    <main>
        <form action="./questionnaire.php" method="POST">
        <fieldset>
            <legend>回答欄</legend>
            <div>
                <ul>
                    <li>
                        <p>1. Why me? は伝わりましたか？</p>
                        <!-- <div id="question1_plus_btn"><span class="fas fa-plus-circle"></span></div>
                        <div id="question1_count" name="question1">0</div> -->
                        <input name="question1" type= "radio" value="1">
                        <input name="question1" type= "radio" value="2">
                        <input name="question1" type= "radio" value="3">
                        <input name="question1" type= "radio" value="4">
                        <input name="question1" type= "radio" value="5">
                    </li>
                    <li>
                        <p>2. Who／What は明確でしたか？</p>
                        <input name="question2" type= "radio" value="1">
                        <input name="question2" type= "radio" value="2">
                        <input name="question2" type= "radio" value="3">
                        <input name="question2" type= "radio" value="4">
                        <input name="question2" type= "radio" value="5">
                    </li>
                    <li>
                        <p>3. How は伝わりましたか？</p>
                        <input name="question3" type= "radio" value="1">
                        <input name="question3" type= "radio" value="2">
                        <input name="question3" type= "radio" value="3">
                        <input name="question3" type= "radio" value="4">
                        <input name="question3" type= "radio" value="5">
                    </li>
                    <li>
                        <p>4. 問題点、課題点 は整理されてましたか？</p>
                        <input name="question4" type= "radio" value="1">
                        <input name="question4" type= "radio" value="2">
                        <input name="question4" type= "radio" value="3">
                        <input name="question4" type= "radio" value="4">
                        <input name="question4" type= "radio" value="5">
                    </li>
                    <li>
                        <p>5. 解決策 は適切でしたか？</p>
                        <input name="question5" type= "radio" value="1">
                        <input name="question5" type= "radio" value="2">
                        <input name="question5" type= "radio" value="3">
                        <input name="question5" type= "radio" value="4">
                        <input name="question5" type= "radio" value="5">
                    </li>
                    <li>
                        <p>アドバイス</p>
                        <textarea type="text" name="advise_text"></textarea>
                    </li>
                </ul>
            </div>
            <div>
                回答者: <input type="name" name="adviser_name">
            </div>
            <div>
                <button>送信</button>
            </div>
        </fieldset>
        </form>
    </main>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Modaal/0.4.4/js/modaal.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js"></script>
    <script src="./input_questionnaire.js"></script>
    <script>
        var access = $.cookie('access')
            if(!access){
                flag = true;
                $.cookie('access', false);
            }else{
                flag = false  
            }
        //モーダル表示
        $(".modal-open").modaal({
            start_open:flag, // ページロード時に表示するか
            overlay_close:true,//モーダル背景クリック時に閉じるか
            before_open:function(){// モーダルが開く前に行う動作
                $('html').css('overflow-y','hidden');/*縦スクロールバーを出さない*/
            },
            after_close:function(){// モーダルが閉じた後に行う動作
                $('html').css('overflow-y','scroll');/*縦スクロールバーを出す*/
            }
        });
    </script>
</body>
</html>