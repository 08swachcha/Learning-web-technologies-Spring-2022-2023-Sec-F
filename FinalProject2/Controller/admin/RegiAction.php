<?php 
    session_start();
    include('../../Model/db.php');
    
    if(isset($_REQUEST['submit'])){

        //print_r($_GET);
        $username = $_REQUEST['uname']; 
        $password = $_REQUEST['pass']; 
        $type = $_REQUEST['type'];
        $fname = $_REQUEST['firstname']; 
        $lname = $_REQUEST['lastname']; 
        $gender = $_REQUEST['gender']; 
        $dob = $_REQUEST['dob']; 
        $address = $_REQUEST['add']; 
        $phn =$_REQUEST['phn'];
        $email = "";
        

       
        if($username == "" || $password == ""  || $fname == "" || $lname == "" || $gender == "" || $dob == "" || $address == "") {
            header('location: ../../view/admin/ptreg.php?msg=null');
            }
        else
        {

            $username = validate($username); 
            $password = validate($password); 
            $type =  validate($type);
            $fname = validate($fname); 
            $lname = validate($lname);  
            $dob = validate($dob);
            $address = validate($address);
            
             $sql = "INSERT INTO user (username, password,type, firstname, lastname,dob,Gender,phone, email,address ) VALUES ('$username','$password','$type','$fname','$lname','$dob','$gender','$phn','$email','$address')";
                $stmt = $con->query($sql);
    
                if ($stmt ===true )
                 {
            
             
            header('location: ../../view/admin/home.php');
        }
    else{
        echo "invalid request...";
    }
}
}

     function validate($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
?>