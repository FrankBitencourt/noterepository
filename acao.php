<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<h3><span class="label label-success"><strong>Dados enviados com sucesso, abaixo seguem os dados que você enviou</strong></span></h3>
<?php

echo "<br \>Seu Nome: <br\>\n";
echo $_GET['username'];
echo "<br \>E-mail: <br\>";
echo $_GET['email'];
echo "<br \>Assunto: <br\>";
echo $_GET['assunto'];
echo "<br \>Mensagem: <br\>";
echo $_GET['msg'];

?>
    <p><a href="home" class="btn btn-primary btn-lg" role="button">
            <span class="glyphicon glyphicon-circle-arrow-left"></span> Voltar para Home</a></p>

<?php require_once("rodape.php"); ?>