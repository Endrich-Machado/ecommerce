<?php

use Hunterbr\DB\Sql;

require_once("vendor/autoload.php");

$app = new \Slim\Slim();

$app->config('debug', true);

$app->get('/', function() {
    
	$sql = new Sql();
	$query= json_encode($sql->select("SELECT * FROM tb_users"));
echo $query;

});

$app->run();

 ?>