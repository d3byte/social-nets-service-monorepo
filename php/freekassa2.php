<?
$fk_merchant_id = '1'; //merchant_id ID мазагина в free-kassa.ru http://free-kassa.ru/merchant/cabinet/help/
$fk_merchant_key = 'secret'; //Секретное слово http://free-kassa.ru/merchant/cabinet/profile/tech.php

if (isset($_GET['prepare_once'])) {
    $hash = md5($fk_merchant_id.":".$_GET['oa'].":".$fk_merchant_key.":".$_GET['l']);
    echo '<hash>'.$hash.'</hash>';
    exit;
}
?>
<script src="http://yandex.st/jquery/1.6.0/jquery.min.js"></script>
<script type="text/javascript">
var min = 1;
function calculate() {
    var re = /[^0-9\.]/gi;
    var url = window.location.href;
    var desc = $('#desc').val();
    var sum = $('#sum').val();
    if (re.test(sum)) {
        sum = sum.replace(re, '');
        $('#oa').val(sum);
    }
    if (sum < min) {
        $('#error').html('Сумма должна быть больше '+min);
        $('#submit').attr("disabled", "disabled");
        return false;
    } else {
        $('#error').html('');
    }
    if (desc.length < 1) {
        $('#error').html('Необходимо ввести номер заявки');
        return false;
    }
    $.get(url+'?prepare_once=1&l='+desc+'&oa='+sum, function(data) {
         var re_anwer = /<hash>([0-9a-z]+)<\/hash>/gi;
         $('#s').val(re_anwer.exec(data)[1]);
         $('#submit').removeAttr("disabled");
    });
}
</script>

<h2>Оплата через <a href="http://wwww.free-kassa.ru">free-kassa.ru</a></h2>
<div id="error"></div>
<form method=GET action="http://www.free-kassa.ru/merchant/cash.php">
    <input type="hidden" name="m" value="<?=$fk_merchant_id?>">
    <input type="text" name="oa" id="sum" id="oa" onchange="calculate()" onkeyup="calculate()" onfocusout="calculate()" onactivate="calculate()" ondeactivate="calculate()"> Введите сумму для оплаты
    <input type="hidden" name="s" id="s" value="0">
    <br>
    <input type="text" name="o" id="desc" value="" onchange="calculate()" onkeyup="calculate()" onfocusout="calculate()" onactivate="calculate()" ondeactivate="calculate()"> Номер заявки*
    <br>
    <input type="submit" id="submit" value="Оплатить" disabled>
</form>

