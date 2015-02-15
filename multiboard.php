<?php
    
?>

<html>
<head>
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8">
    
    <title>Testing</title>
    
    <link rel="stylesheet" type="text/css" href="/jsPlugins/reset.css"/> <!-- Reset for all browsers -->
    <link rel="stylesheet" type="text/css" href="/jsPlugins/Multi-Board/css/multiboard.css"/> <!-- Multi-Language Keyboard -->
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
<div class="mkb-wrap mkb-shadow">
    <div class="mkb-container">
        <ul class="mkb-hlist mkb-lang-list">
            <li>Languages:</li>
            <li><a href="#">English</a></li>
            <li><a href="#">Spanish</a></li>
            <li><a href="#">French</a></li>
            <li><a href="#">German</a></li>
            <li><a href="#">Custom</a></li>
        </ul>
    </div>
    <div class="mkb-container">
        <ul class="mkb-keys">
            <li><a href="#">`</a></li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">6</a></li>
            <li><a href="#">7</a></li>
            <li><a href="#">8</a></li>
            <li><a href="#">9</a></li>
            <li><a href="#">0</a></li>
            <li><a href="#">-</a></li>
            <li><a href="#">=</a></li>
            <li><a href="#">Backspace</a></li>
        </ul>
        <ul class="mkb-keys">
            <li><a href="#">Tab</a></li>
            <li><a href="#">q</a></li>
            <li><a href="#">w</a></li>
            <li><a href="#">e</a></li>
            <li><a href="#">r</a></li>
            <li><a href="#">t</a></li>
            <li><a href="#">y</a></li>
            <li><a href="#">u</a></li>
            <li><a href="#">i</a></li>
            <li><a href="#">o</a></li>
            <li><a href="#">p</a></li>
            <li><a href="#">[</a></li>
            <li><a href="#">]</a></li>
            <li><a href="#">\</a></li>
        </ul>
        <ul class="mkb-keys">
            <li><a href="#">Caps</a></li>
            <li><a href="#">a</a></li>
            <li><a href="#">s</a></li>
            <li><a href="#">d</a></li>
            <li><a href="#">f</a></li>
            <li><a href="#">g</a></li>
            <li><a href="#">h</a></li>
            <li><a href="#">j</a></li>
            <li><a href="#">k</a></li>
            <li><a href="#">l</a></li>
            <li><a href="#">;</a></li>
            <li><a href="#">'</a></li>
        </ul>
        <ul class="mkb-keys">
            <li><a href="#">Shift</a></li>
            <li><a href="#">z</a></li>
            <li><a href="#">x</a></li>
            <li><a href="#">c</a></li>
            <li><a href="#">v</a></li>
            <li><a href="#">b</a></li>
            <li><a href="#">n</a></li>
            <li><a href="#">m</a></li>
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
    $('textarea[id^=inputBox]').multiboard({
        language: 'english',
        some: {
            thing: 'cool',
            man: 'yeah'
        },
        wat: 12345,
        hey: {
            lets: {
                check: {
                    out: 'testing'
                }
            },
            buddy: 999
        }
    });
}(jQuery));
</script>

</html>