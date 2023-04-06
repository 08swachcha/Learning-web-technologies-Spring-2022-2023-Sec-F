<?php 
    session_start();
    include('../Model/db.php');
    
    if ($_SERVER['REQUEST_METHOD'] === "POST"){        
        $name = $_REQUEST['name'];
        $buying = $_REQUEST['buying'];
        $selling = $_REQUEST['selling'];
        $display = $_REQUEST['display'];

        if($name == "" && $buying == "" && $selling == ""){
            echo "null data found...";
        }else{

           $sql = "INSERT INTO product (name, buying, Selling, display) VALUES ('$name','$buying','$selling','$display')";
                $stmt = $con->query($sql);
    
                if ($stmt ===true )
                 {
            
                header('location: ../views/views.php');
            }else{
                echo "DB error, please try again";
            }
        }
    
    }
?>