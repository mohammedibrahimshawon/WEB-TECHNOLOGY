<?php
    $conn= new mysqli("localhost","root","","bookshopseller");


    function execute($sql)
    {
        global $conn;
        $res= $conn->query($sql);
        return $res;
    }
   
?>