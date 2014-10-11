<html>
<head>

    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">

</head>
<body>

<?php require_once("index.php"); ?>

<div>
    <h3> Contato </h3>
    <p> Entre em contato conosco </p>

    <form action="acao.php" method="get">

        <div class="col-lg-3">
        <label  class="col-lg-3 control-label">Nome: </label>
        <div><input class="form-control" type="text" name="username"placeholder="Digite Seu Nome"/><div/>
        </div><br />

        <div class="form-group">
        <label  class="col-lg-3 control-label">Email: </label>
        <div><input class="form-control" type="text" name="email" placeholder="mail@exemplo.com"/><div/>
        </div><br />

        <div class="form-group">
        <label  class="col-lg-4 control-label">Assunto: </label>
       <div><input class="form-control" type="text" name="assunto"/>
         </div><br />


        <div class="form-group">

            <label  class="col-lg-4 control-label">Mensagem: </label>
        <div><textarea placeholder="Escreva sua mensagem" name="msg" /></textarea></div>
        </div>

        <input type="submit" name="submit" value="Enviar" />
          <div/>
    </form>

    </div>

</body>

</html>


