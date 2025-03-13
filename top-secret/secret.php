<?php

// Manually set $_COOKIE to reflect the new value immediately
$_COOKIE['admin'] = "false";

// Funny message if admin=true
if (isset($_COOKIE['admin']) && $_COOKIE['admin'] === 'true') {
    echo "<p style='color: green; font-weight: bold;'>👀 Whoa! Trying to play admin, huh? Nice try! 😆</p>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>You Found It!</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            padding: 50px;
        }
        img {
            width: 200px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <h1>🎉 Congratulations! 🎉</h1>
    <img src="https://media.giphy.com/media/3o7aD2saalBwwftBIY/giphy.gif" alt="Party">
    <p>You actually found the secret page! 😎</p>
    <p>But... there's nothing here. Or is there anything in the source? 🤔</p>
    <a href="/">Go back before it's too late! 🚀</a>
    
    <!-- 
    👀 If you're snooping here, you deserve a hint: 
    U29ycnksIHlvdSBmb3VuZCBub3RoaW5nLiBZb3Ugd2FzdGVkIHlvdXIgdGltZSBiZWNhdXNlIG9mIHlvdXIgY3VyaW9zaXR5IOKAlCBkb27igJl0IGJsYW1lIG1lLCB0aGF04oCZcyB5b3VyIGZhdWx0ISDwn5iO
    hint: I had Chicken 64 today. 🍗👀 
    -->
    
</body>
</html>
