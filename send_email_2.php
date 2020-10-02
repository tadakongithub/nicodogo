<?php

    if(isset($_POST['username'])){
        $email = 'konnotadashi47@yahoo.co.jp';

        mb_language('japanese');
        mb_internal_encoding('UTF-8');
    
        $subject = 'nicodogoからの問い合わせ';
    
        function h($value){
            return htmlspecialchars($value, ENT_QUOTES);
        }
    
        $name = h($_POST['username']);
        $usermail = h($_POST['usermail']);
        $message = h($_POST['inquiry']);
    
        $body = '名前: '.$name.'<br>'.'メール: '.$usermail.'<br>'.'メッセージ: '.$message;
    
        $success = mb_send_mail($email, $subject, $body);
    }

    

?>

<html>
    <head>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="sent">
        <?php if($success): ?>
        <p>We will get back to you as soon as possible.</p>
        <div><a href="contact.php">Return to My Website</a></div>
        <?php else: ?>
        <p>I'm sorry, but the message didn't get sent correctly. Please fill out the form again.</p>
        <div><a href="contact.php">Return to My Website</a></div>
        <?php endif; ?>
        </div>
    </body>
</html>