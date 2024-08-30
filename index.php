<?php

use Hunterbr\DB\Page;
use Hunterbr\DB\Sql;

require_once("vendor/autoload.php");

$app = new \Slim\Slim();

$app->config('debug', true);

$app->get('/', function() {
    
	$page = new Page();
	$page->setTpl("index");

	// $sql = new Sql;
	// echo json_encode($sql->select("SELECT * FROM tb_users"));

});

$app->run();

 ?>