<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $flag = false; 

       if($username == "" || $password == "") {
            header('location: login.php?msg=null');
        }else{
             
            $file = fopen('User.txt', 'r');
            
            while(!feof($file)){
                $data = fgets($file);
                $user = explode('|', $data);
                if($username == trim($user[0]) && $password == trim($user[1])){
                    $flag = true; 
                }
            }

            if($flag==1){
                
                header('location: Dashboard.php');
                $flag = false; 
            }else{
                header('location: login.php?msg=error');
            }

        }
    }else{
        echo "invalid request...";
    }

    
?>
