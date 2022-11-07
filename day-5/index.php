<?php
require_once "vendor/autoload.php";
use App\classes\Home;
use App\classes\Hello;

$home=new Home();
$home->index();

$world=new Hello();
$world->index();