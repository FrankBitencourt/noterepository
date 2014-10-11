<?php

echo "Dados enviados com sucesso, abaixo seguem os dados que você enviou";

echo "<br \>Seu Nome: <br\>\n";
echo $_GET['username'];
echo "<br \>E-mail: <br\>";
echo $_GET['email'];
echo "<br \>Assunto: <br\>";
echo $_GET['assunto'];
echo "<br \>Mensagem: <br\>";
echo $_GET['msg'];

?>
<br />
<a href="Home.php">Volte para Página Inicial</a>