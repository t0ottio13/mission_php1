<?php
    $str='';
    $questionnaire_result = [];

    $file = fopen('./data/questionnaire_data.txt','r');
    flock($file, LOCK_EX);

    if($file){
        while($line= fgets($file)){
            $result_all = explode(' ',$line);

            $str .= "<tr><td>{$result_all[0]}</td><td>  {$result_all[6]}</td></tr>";
            array_push($questionnaire_result, $line);
        }
    }

    flock($file, LOCK_UN);
    fclose($file);

//   var_dump($str);
//   exit();
//   var_dump($result_all);
//   exit();
    // var_dump($questionnaire_result);
    // exit();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./admin_show.css">
    <title>アンケート結果確認</title>
</head>
<body>
    <h1>アンケート結果確認画面</h1>
    <h2>質問別 伝わった度</h2>
    <canvas id="result_chart"></canvas>
    <h2>アドバイス一覧</h2>
    <div class="advise">
        <table>
            <tbody>
                <?=$str?>
            </tbody>
        </table>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
    <script>
        const i = <?= json_encode($questionnaire_result) ?>;

        const questionnaire_result = i.map(e=>{
            return {
                answer_name: e.split(' ')[0],
                answer1: e.split(' ')[1],
                answer2: e.split(' ')[2],
                answer3: e.split(' ')[3],
                answer4: e.split(' ')[4],
                answer5: e.split(' ')[5],
                advise: e.split(' ')[6].split('\n').join('')
            }
        })
        // console.log(questionnaire_result);
        let sum_answer_name = [];
        let sum_question1_result = [];
        let sum_question2_result = [];
        let sum_question3_result = [];
        let sum_question4_result = [];
        let sum_question5_result = [];
        for(let i = 0; i < questionnaire_result.length ; i++){
            sum_answer_name.push(questionnaire_result[i].answer_name);
        }
        for(let i = 0; i < questionnaire_result.length ; i++){
            sum_question1_result.push(parseInt(questionnaire_result[i].answer1));
        }
        for(let i = 0; i < questionnaire_result.length; i++){
            sum_question2_result.push(parseInt(questionnaire_result[i].answer2));
        }
        for(let i = 0; i < questionnaire_result.length ; i++){
            sum_question3_result.push(parseInt(questionnaire_result[i].answer3));
        }
        for(let i = 0; i < questionnaire_result.length ; i++){
            sum_question4_result.push(parseInt(questionnaire_result[i].answer4));
        }
        for(let i = 0; i < questionnaire_result.length ; i++){
            sum_question5_result.push(parseInt(questionnaire_result[i].answer5));
        }
        const ctx = document.getElementById("result_chart");
        const myLIne = new Chart(ctx, {
            type:'bar',
            data: {
                labels: sum_answer_name,
                datasets: [
                    {
                        // 質問1 のグラフ
                        label: "question1",
                        data: sum_question1_result,
                        // backgroundColor: "#d3381c"
                        backgroundColor: "#d0576b"
                        // backgroundColor: "#00A7EA"
                    },
                    {
                        // 質問2 のグラフ
                        label: "question2",
                        data: sum_question2_result,
                        backgroundColor: "#f6ad49"
                    },
                    {
                        // 質問3のグラフ
                        label: "question3",
                        data: sum_question3_result,
                        backgroundColor: "#769164"
                    },
                    {
                        // 質門4 のグラフ
                        label: "question4",
                        data: sum_question4_result,
                        // backgroundColor: "#5a544b"
                        backgroundColor: "#00A7EA"
                        // backgroundColor: "#f8f4e6"
                    },
                    {
                        // 質問5 のグラフ
                        label: "question5",
                        data: sum_question5_result,
                        // backgroundColor: "#d0576b"
                        backgroundColor: "#C4C4C4"
                        // backgroundColor: "#f8f4e6"
                        
                    }
                ]
            },
            options: {
                title: {
                display: true,
                text: ''
                    },
            scales: {
                yAxes: [{
                    ticks: {
                        suggestedMax: 5,
                        suggestedMin: 0,
                        stepSize: 1,
                        callback: function(value, index, values){
                            return  value +  '点'
                        }
                    }
                }]
            },
            }
        })
        console.log(sum_question1_result);
    </script>
</body>
</html>