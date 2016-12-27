<?php
include("ripcord-master/ripcord.php");
include("odoo-lib.php");

$action = $_REQUEST['action'];
$odoo_client = new odoo_client();
$odoo_client->$action();


