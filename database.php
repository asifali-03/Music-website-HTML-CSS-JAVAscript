<?php


    $FirstName=$_POST["FirstName"];
    $LastName=$_POST['LastName'];
    $EmailId=$_POST['EmailId'];
    $Password=$_POST['Password'];
    


    $conn = mysqli_connect('localhost','root','','music_Website');
    if(mysqli_connect_error()){
        exit("Error connecting to database".mysqli_connect_error());
    }

    if(!isset($FirstName,$LastName,$EmailId,$Password)){
        exit("Empty Field(s)");
    }
    
    if(empty($FirstName) || empty($LastName) || empty($EmailId) || empty($Password)){
        exit('Values Empty');
    }

    if($stmt=$conn->prepare('SELECT id, Password FROM registrations WHERE Emailid=?')){
        $stmt->bind_param('s',$EmailId);
        $stmt->execute();
        $stmt->store_result();

        if($stmt->num_rows>0){
            echo 'User already Exists';
        }
        else{
            if($stmt=$conn->prepare('INSERT INTO registrations(FirstName,Lastname,Emailid,Password) VALUES (?,?,?,?)')){
                //$Password=password_hash($Password,PASSWORD_DEFAULT);
                $stmt->bind_param('ssss',$FirstName,$LastName,$EmailId,$Password);
                $stmt->execute();
                //session_start();
                //$_SESSION['registration_successful'] = true;
                header("Location: music.html");
                

            }

        }
        $stmt->close();
    }
    else{
        echo 'Error Occurred';
    }
    $conn->close();

?>


