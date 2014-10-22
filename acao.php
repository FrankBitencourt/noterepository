<?php require_once("header.php"); ?>
<h4><span class="label label-success"><strong>Dados enviados com sucesso, abaixo seguem os dados que você enviou</strong></span></h4>
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
<?php require_once("footer.php"); ?>