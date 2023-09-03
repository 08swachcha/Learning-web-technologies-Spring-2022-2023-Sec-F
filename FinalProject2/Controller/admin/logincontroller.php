<?php 
    session_start();
    include('../../Model/db.php');

    if ($_SERVER['REQUEST_METHOD'] === 'POST') 
    {

        
        $username = $_POST['uname']; 
        $password = $_POST['pass'];
        $type = 'admin';
        $flag = false; 

       if($username == "" || $password == "") {
            header('location: ../../view/adminlogin.php?msg=null');
        }else{
             $username = validate($username);
             $password = validate($password);
            
             $sql = "select * from user where username='{$username}' and password='{$password}' and type='{$type}'";
             $result = mysqli_query($con, $sql);
             $count = mysqli_num_rows($result);

                if($count == 1){
               
               
                $_SESSION['username'] = $username;
                $_SESSION['pass'] = $password;
                $_SESSION['type'] = $type;
                header('location: ../../view/admin/home.php');
             
                }
            else{
                header('location: ../../view/adminlogin.php?msg=error');
            }

            //echo  "invalid user!";
        }
    }else{
        echo "invalid request...";
    }


      function validate($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
    
?>