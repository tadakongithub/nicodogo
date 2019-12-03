<?php

    session_start();

    $email = 'konnotadashi47@yahoo.co.jp';

    mb_language('japanese');
    mb_internal_encoding('UTF-8');

    $subject = 'nicodogoからのメッセージ';

    function h($value){
        return htmlspecialchars($value, ENT_QUOTES);
    }

    $name = h($_SESSION['mail']['name']);
    $evaluation = h($_SESSION['mail']['evaluation']);
    $message = h($_SESSION['mail']['comments']);

    $body = '名前: '.$name.'<br>'.'メール: '.$evaluation.'<br>'.'メッセージ: '.$message;

    $success = mb_send_mail($email, $subject, $body);

    session_unset();
?>

<html>
    <head>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="sent">
        <?php if($success): ?>
        <p>We will get back to you as soon as possible.</p>
        <div><a href="reviews.php">Return to My Website</a></div>
        <?php else: ?>
        <p>I'm sorry, but the message didn't get sent correctly. Please fill out the form again.</p>
        <div><a href="reviews.php">Return to My Website</a></div>
        <?php endif; ?>
        </div>
    </body>
</html>