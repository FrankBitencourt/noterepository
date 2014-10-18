<html>
<head>
    <style link href="css/bootstrap.min.css" rel="stylesheet" media="screen">

        html, body, #wrap {height: 100%;}


        #wrap {height: auto; min-height: 80%;}

        #main {overflow:auto; padding-bottom: 250px;}  /* deve ter a mesma altura do rodapé */

    </style>
</head>
<body>
<div id="wrap">
    <div id="main">
    </div>
</div>
<div class="container">
       <p> Todos os direitos reservados.
            <?php date_default_timezone_set('UTC');
            echo date( 'Y' )?></p>
</div>
</body>
</html>
