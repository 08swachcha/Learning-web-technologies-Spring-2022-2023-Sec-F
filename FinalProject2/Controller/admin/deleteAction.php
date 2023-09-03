<?php 
    session_start();
     include('../../Model/db.php');
    
    if ($_SERVER['REQUEST_METHOD'] === "POST"){  
        $id  = $_REQUEST['id'];     
        
    

               $sql = "DELETE FROM user where Id=$id";
                $stmt = $con->query($sql);
    
                if ($stmt ===true )
                 {
            header('location: ../../view/admin/home.php');
            }else{
                echo "DB error, please try again";
            }
        }
    
    
?>