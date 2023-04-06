<?php 
    session_start();
    include('../Model/db.php');
    
    if ($_SERVER['REQUEST_METHOD'] === "POST"){  
        $id  = $_REQUEST['id'];     
        
    

               $sql = "DELETE FROM product where Id=$id";
                $stmt = $con->query($sql);
    
                if ($stmt ===true )
                 {
            
                header('location: ../views/views.php');
            }else{
                echo "DB error, please try again";
            }
        }
    
    
?>