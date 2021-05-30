let question1_count = 0;

$('#question1_plus_btn').on('click', () => {
    if (question1_count == 5) {
        alert('5以上は評価できません');
    }
    question1_count++
    $('#question1_count').text(question1_count);

    alert($('#question1_count').val());
})