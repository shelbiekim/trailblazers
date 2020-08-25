<?php
    require_once('db_credentials.php');

    function db_connect(){
        $connection = mysqli_connect(DB_server,DB_user,DB_password,DB_name);
        return $connection;
    }

    function db_disconnect($connection){
        if(isset($connection)){
        mysqli_close($connection);
        }
    }
?>