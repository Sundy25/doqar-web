<?php
//include("ripcord-master/ripcord.php");
include("config.php");
include("odoo-lib.php");

$action = $_REQUEST['action'];
$odoo_client = new odoo_client($url,$db,$username,$password);
$odoo_client->$action();


