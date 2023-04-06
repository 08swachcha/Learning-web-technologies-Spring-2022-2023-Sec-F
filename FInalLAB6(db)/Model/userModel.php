<?php 
    include('db.php');


    function addProduct($product){
        $conn = getConnection();
        $sql = "insert into product values('', '{$product['name']}', '{$product['buying']}', '{$product['Selling']}','{$product['display']}'";
        $stmt = $conn->query($sql);
        return $stmt;
    }


?>