<?php
/**
 * Created by PhpStorm.
 * User: akhmaddanielsembiring
 * Date: 12/27/16
 * Time: 12:49 PM
 */

class odoo_client {

    var $username;
    var $password;
    var $url;
    var $db;
    var $uid;
    var $common;
    var $models;

    function __construct($url="http://127.0.0.1:8010", $db="doqar", $username= "admin", $password="1") {
        $this->url=$url;
        $this->db=$db;
        $this->username=$username;
        $this->password=$password;
    }

    /* login */
    function login( ){
        $username = $_REQUEST['email'];
        $password = $_REQUEST['password'];

        $this->common = ripcord::client("$this->url/xmlrpc/2/common");
        $this->uid = $this->common->authenticate($this->db, $username, $password, array());

        $return = array('uid'=>$this->uid, "username"=>$username);

        echo json_encode($return);
    }
    /* login from coding */
    function back_login( ){
        $this->common = ripcord::client("$this->url/xmlrpc/2/common");
        $this->uid = $this->common->authenticate($this->db, $this->username, $this->password, array());
        $this->models = ripcord::client("$this->url/xmlrpc/2/object");
        $return = array('uid'=>$this->uid, "username"=>$this->username);
        return $return;
    }


    function contact(){
        $this->models = ripcord::client("$this->url/xmlrpc/2/object");
        $balance = $this->models->execute_kw($this->db, $this->uid, $this->password,
            'res.partner', 'get_partner_data',
            array(
            )
        );
    }

    function sign_up(){
        $this->common = ripcord::client("$this->url/xmlrpc/2/common");
        $this->uid = $this->common->authenticate($this->db, $this->username, $this->password, array());
        $this->models = ripcord::client("$this->url/xmlrpc/2/object");


        foreach($_REQUEST['ride_sharing_ids'] as $key=>$rs){
            $rs_ids[] = array(4,$rs);
        }
        $_REQUEST['ride_sharing_ids'] = $rs_ids;

        $_REQUEST['is_dempulan'] =  $_REQUEST['is_dempulan']=="1"?"y":"n";
        $_REQUEST['is_cat_orisinil'] =  $_REQUEST['is_cat_orisinil']=="1"?"y":"n";
        $_REQUEST['vehicle_year'] =  $_REQUEST['vehicle_year']+0;

        $car = $this->models->execute_kw($this->db, $this->uid, $this->password,
            'doqar.car_owner', 'sign_up',
            array(
                false,
                $_REQUEST
            )
        );

        if ($car['faultCode'] != 0){
            $return = array(
                'success'=> false,
                'message'=> $car['faultString'],
            );

        } else {
            $return = array(
                'success'=> true,
                'car'=> 'car owner created',
            );
        }

        echo json_encode($return);

    }


    function get_ride_sharings(){

        $ride_sharings = $this->models->execute_kw($this->db, $this->uid, $this->password,
            'doqar.ride_sharing', 'search_read',
            array(array()),
            array('fields'=>array("id","name"))

        );
        return $ride_sharings;

    }
    function get_info_sources(){

        $info_source = $this->models->execute_kw($this->db, $this->uid, $this->password,
            'doqar.info_source', 'search_read',
            array(array()),
            array('fields'=>array("id","name"))
        );
        return $info_source;
    }
    function get_vehicle_makes(){

        $vehicle_makes = $this->models->execute_kw($this->db, $this->uid, $this->password,
            'fleet.vehicle.model.brand', 'search_read',
            array(array()),
            array('fields'=>array("id","name"))

        );
        return $vehicle_makes;
    }
    function get_vehicle_models(){
        $this->back_login();
        $vehicle_make_id=$_REQUEST['vehicle_make_id']+0;
        $vehicle_models = $this->models->execute_kw($this->db, $this->uid, $this->password,
            'fleet.vehicle.model', 'search_read',
            array(array(array('brand_id','=',$vehicle_make_id))),
            array('fields'=>array("id","name"))
        );
        echo json_encode($vehicle_models);
    }

    function get_vehicle_colors(){

        $vehicle_colors = $this->models->execute_kw($this->db, $this->uid, $this->password,
            'doqar.vehicle_color', 'search_read',
            array(array()),
            array('fields'=>array("id","name"))
        );
        return $vehicle_colors;
    }

}

