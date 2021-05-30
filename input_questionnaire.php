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
    <link rel="stylesheet" href="./index.css">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <h1>壁打ちアンケート</h1>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="./input_questionnaire.js"></script>
</body>
</html>