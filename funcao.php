<?php
$rota = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
$path = explode("/",$rota['path']);
?>

<?php
$validas = array("home","contato","empresa","produtos","servicos");
switch ($path[1]) {
    case $validas[0]:
    case $validas[1]:
    case $validas[2]:
    case $validas[3]:
    case $validas[4]:
        require_once("$path[1].php");
        break;
    default:
        require_once("error.php");
}
//Obs: Estou aprendendo a linguagem Php,e programação, não sei ainda muita coisa , mas consegui fazer a fase 2 dessa maneira, não consegui usar funçoes.
?>
