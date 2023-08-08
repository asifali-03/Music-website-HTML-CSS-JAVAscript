<?php
    
    session_start();
    
    $EmailId=$_POST['Email'];
    $Password=$_POST['pass'];
    $conn = mysqli_connect('localhost','root','','music_Website');
    if(mysqli_connect_error()){
        exit("Error connecting to database".mysqli_connect_error());
    }
    

    if(isset($EmailId) && isset($Password)){
        function validate($data){
            $data=trim($data);
            $data = stripslashes($data);
            $data=htmlspecialchars($data);
            return $data;
        }
    }
    $EmailId=validate($EmailId);
    $Password=validate($Password);
    $sql="SELECT * FROM registrations WHERE Emailid='$EmailId' AND Password='$Password'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)===1){
        $row=mysqli_fetch_assoc($result);
        if($row['Emailid']===$EmailId && $row['Password']===$Password){
            $_SESSION["Emailid"]=$row['Emailid'];
            $_SESSION["FirstName"]=$row['FirstName'];
            $_SESSION['Password']=$row['Password'];
            $_SESSION['id']=$row['id'];
            header("Location:musicpage.php");
            exit();
        }
        else{
            header("Location:index.html?error=Incorrect email id and password");
        }
    }
    else{
        header('Location: index.html?error=User does not exist SIGNUP NOW');
    }



?>