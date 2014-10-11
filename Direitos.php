<html>
<head>
    <style type="text/css" media="screen">

        html, body, #wrap {height: 100%;}


        #wrap {height: auto; min-height: 80%;}

        #main {overflow:auto;
            padding-bottom: 150px;}  /* deve ter a mesma altura do rodapé */


        body:before {
            content:"";
            height:100%;
            float:left;
            width:0;
            margin-top:-32767px;/
        }
    </style>

</head>
<body>
<div id="wrap">

    <div id="main">

    </div>

</div>

    <div class="container">

            <p> Todos os direitos reservados.<?php
                date_default_timezone_set('UTC');
                echo date( 'Y' );
             ?></p>

</div>
</body>
</html>
