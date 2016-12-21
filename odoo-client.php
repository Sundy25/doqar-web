<?php
include("ripcord-master/ripcord.php");

$action = $_REQUEST['action'];
$odoo_client = new odoo_client();
$odoo_client->$action();



class odoo_client {

    var $username 	= "admin";
    var $password 	= "1";
    var $url 		= "http://127.0.0.1:8010";
    var $db  		= "doqar";
    var $uid;

    /* login */
    function login(){
        $username = $_REQUEST['email'];
        $password = $_REQUEST['password'];

        $common = ripcord::client("$this->url/xmlrpc/2/common");
        $this->uid = $common->authenticate($this->db, $username, $password, array());

        $return = array('uid'=>$this->uid, "username"=>$username);

        echo json_encode($return);
    }


    function contact(){
        $models = ripcord::client("$this->url/xmlrpc/2/object");
        $balance = $models->execute_kw($this->db, $this->uid, $this->password,
            'res.partner', 'get_partner_data',
            array(
            )
        );
    }
}

