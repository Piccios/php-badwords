<?php

$text = "<strong>Jules</strong>: What does Marcellus look like. <br>
<strong>Scared Guy</strong>: What?<br>
<strong>Jules</strong>: (flips table) What country you from?!<br>
<strong>Scared Guy</strong>: What?<br>
<strong>Jules</strong>: What ain't no country I've ever heard of! They speak English in What?<br>
<strong>Scared Guy</strong>: What?<br>
<strong>Jules</strong>: English motherfucker do you speak it!?<br>
<strong>Scared Guy</strong>: Yes!<br>
<strong>Jules</strong>: Then you know what I am saying?<br>
<strong>Scared Guy</strong>: Yes!<br>
<strong>Jules</strong>: Describe what Marcellus Wallace looks like.<br>
<strong>Scared Guy</strong>:.. What?<br>
<strong>Jules</strong>: (points gun) Say what again. SAY WHAT again! And I dare you, I double dare you motherfucker! Say what one more time.";

$TextChar = strlen($text);
$censored_text = str_ireplace(
    $_POST['censored'],
    '***',
    $text
);
$CensoredTextChar = strlen($censored_text);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
</head>
<body>
    <main>
        <h1>Exemple text:</h1>
        <h2>Select a word in this text to be censured</h2>
        <p>
            <?php echo $text ?>
        </p>
        <h3>Number of characters in this text: <?php echo $TextChar ?></h3>
        <p>
            <?php echo $censored_text ?>
        </p>
        <h3>Number of characters in this text: <?php echo $CensoredTextChar ?></h3>
        <form action='./index.php' method="POST">
            <input type='text' name='censored' id='censored-text' placeholder='Insert a word to be censored!'>
            <button type='submit'>Submit</button>
        </form>
    </main>
</body>
</html>