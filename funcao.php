<?php
function route(){
$rota = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
$path = explode("/",$rota['path']);

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
        if(empty($path[1]))
        {
           require_once("home.php");
            break;
        }
        require_once("error.php");

}
}
?>
