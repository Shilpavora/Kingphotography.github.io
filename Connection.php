<?php

$user="root";
$host="localhost";
$pswd="";
$dbname="king";

$connect=mysqli_connect($host,$user,$pswd,$dbname);

class con_data
{
    function  con_data()
    {
        if($GLOBALS['connect'])
        {
            // echo "Database is Connected";
        }
        else{
            echo "Database is not Connected";
        }
    }
    function run_qry($qry)
    {
        $res=mysqli_query($GLOBALS['connect'],$qry);
        return $res;
    }
}
?>