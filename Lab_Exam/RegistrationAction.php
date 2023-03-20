<?php 
    session_start();
    if(isset($_REQUEST['submit'])){

        //print_r($_GET);
        $username = $_REQUEST['uname']; 
        $password = $_REQUEST['pass']; 
        $fname = $_REQUEST['firstname']; 
        $lname = $_REQUEST['lastname']; 
        $gender = $_REQUEST['gender']; 
        $dob = $_REQUEST['dob']; 
        $address = $_REQUEST['add'];
        $contact = $_REQUEST['phone']; 
        

        if($username == "" || $password == ""  || $fname == "" || $lname == "" || $gender == "" || $dob == "" || $address == ""|| $contact == "") {
           header('location: registration.php?msg=null');
        }else{

            
            $file = fopen('User.txt', 'a');
            $user = $username."|".$password."|".$fname."|".$lname."|".$gender."|".$dob."|".$address."|".$contact."\r\n";
            fwrite($file, $user);
            header('location: login.php');
        }
    }else{
        echo "invalid request...";
    }

    
?>