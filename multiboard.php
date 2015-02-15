<?php
    
?>

<html>
<head>
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8">
    
    <title>Testing</title>
    
    <link rel="stylesheet" type="text/css" href="/jsPlugins/reset.css"/> <!-- Reset for all browsers -->
    <link rel="stylesheet" type="text/css" href="/jsPlugins/multiboard/css/multiboard.css"/> <!-- Multi-Language Keyboard -->
    <style>
        html, body
        {
            background-color: #eeeeee;
        }
        
        h1
        {
            font-size: 32px;
        }
        
        #pageWrapper
        {
            position: relative;
            padding: 10px;
            top: 10%;
            width: 80%;
            height: 80%;
            margin: 0 auto;
            border: 1px solid black;
            background-color: #ffffff;
        }
        
        #inputBox1, #inputBox2, #inputBox3, #inputBox4
        {
            position: absolute;
            margin: 10px;
            padding: 10px;
            width: 400px;
            height: 100px;
            border: 1px solid black;
            background-color: #ffffff;
            resize: none;
        }
        
        #inputBox1 {
            top: 0;
            left: 0;
        }
        
        #inputBox2 {
            top: 0;
            right: 0;
        }
        
        #inputBox3 {
            bottom: 0;
            left: 0;
        }
        
        #inputBox4 {
            bottom: 0;
            right: 0;
        }
        
    </style>
</head>

<body>
<div class="mkb-wrap">
    <div class="mkb-container">
        <ul class="mkb-hlist mkb-lang-list">
            <li><a href="#">English</a></li>
            <li><a href="#">Spanish</a></li>
            <li><a href="#">French</a></li>
            <li><a href="#">German</a></li>
            <li><a href="#">Custom</a></li>
        </ul>
    </div>
    <div class="mkb-container">
        <ul class="mkb-keys">
            <li><a href="#">Tab</a></li>
            <li><a href="#">Q</a></li>
            <li><a href="#">W</a></li>
            <li><a href="#">E</a></li>
            <li><a href="#">R</a></li>
            <li><a href="#">T</a></li>
            <li><a href="#">Y</a></li>
            <li><a href="#">U</a></li>
            <li><a href="#">I</a></li>
            <li><a href="#">O</a></li>
            <li><a href="#">P</a></li>
            <li><a href="#">[</a></li>
            <li><a href="#">]</a></li>
            <li><a href="#">\</a></li>
        </ul>
        <ul class="mkb-keys">
            <li><a href="#">Caps</a></li>
            <li><a href="#">A</a></li>
            <li><a href="#">S</a></li>
            <li><a href="#">D</a></li>
            <li><a href="#">F</a></li>
            <li><a href="#">G</a></li>
            <li><a href="#">H</a></li>
            <li><a href="#">J</a></li>
            <li><a href="#">K</a></li>
            <li><a href="#">L</a></li>
            <li><a href="#">;</a></li>
            <li><a href="#">'</a></li>
        </ul>
        <ul class="mkb-keys">
            <li><a href="#">Shift</a></li>
            <li><a href="#">Z</a></li>
            <li><a href="#">X</a></li>
            <li><a href="#">C</a></li>
            <li><a href="#">V</a></li>
            <li><a href="#">B</a></li>
            <li><a href="#">N</a></li>
            <li><a href="#">M</a></li>
            <li><a href="#">,</a></li>
            <li><a href="#">.</a></li>
            <li><a href="#">/</a></li>
            <li><a href="#">Shift</a></li>
        </ul>
    </div>
</div>

<div id="pageWrapper">
    <div>
        <textarea id="inputBox1" placeholder="TEST MESSAGE PENDING..."></textarea>
    </div>
    <div>
        <textarea id="inputBox2" placeholder="TEST MESSAGE PENDING..."></textarea>
    </div>
    <div>
        <textarea id="inputBox3" placeholder="TEST MESSAGE PENDING..."></textarea>
    </div>
    <div>
        <textarea id="inputBox4" placeholder="TEST MESSAGE PENDING..."></textarea>
    </div>
</div>
</body>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="js/multiboard.js"></script>

<script>
(function($)
{
    $('textarea[id^=inputBox]').multiboard();
}(jQuery));
</script>

</html>