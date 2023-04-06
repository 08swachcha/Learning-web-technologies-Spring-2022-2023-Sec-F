<?php 
    session_start();
    include('../Model/db.php');
    
    if ($_SERVER['REQUEST_METHOD'] === "POST"){  
        $id  = $_REQUEST['id'];     
        $name = $_REQUEST['name'];
        $buying = $_REQUEST['buying'];
        $selling = $_REQUEST['Selling'];
    

        if($name == "" && $buying == "" && $selling == ""){
            echo "null data found...";
        }else{

           $sql = "UPDATE product SET name='$name', buying='$buying', Selling='$selling'  where Id=$id";
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