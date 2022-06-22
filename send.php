<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$msg = $_POST['msg'];

$token = "5510048278:AAFjK9N-49Vw9yyiEtSAFCLzCDwj_1fzCRA";
$chat_id = "663800460";

$arr = array(
    'Имя: ' => $name,
    'Телефон: ' => $phone,
    'Сообщение: ' => $msg
);

foreach($arr as $key => $value) {
    $txt .= "<b>".$key."</b>".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}", "r");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/redirect.css">
    <link rel="stylesheet" href="css/medias.css">

    <title>Alina Tsilenko</title>
</head>
<body>
    <div class="block_msg">
        <div class="block_cover">
            <img src="img/success.png" class="success">
            <a href="index.html"><button class="success-btn">Готово</button></a>
        </div>
    </div>
</body>
</html>