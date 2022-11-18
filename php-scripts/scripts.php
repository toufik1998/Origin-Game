<?php

include("../assets/database/database.php");

session_start();

if(isset($_POST['save']))               saveUser();
if(isset($_POST['login']))              getUser();



function saveUser(){
    $conn = connection();

    $fname = $lname = $email = $password = $pwd = '';


    $fname = $_POST['first-name'];
    $lname = $_POST['last-name'];
    $email = $_POST['email'];
    $pwd = $_POST['password'];
    $password = md5($pwd);

    $admin_img = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "../image" . $admin_img;

    $sql = "INSERT INTO admins (first_name,last_name,email,password,admin_img) VALUES ('$fname','$lname','$email','$password', '$admin_img')";
    $result = mysqli_query($conn, $sql);

    if($result)
    {
        header("Location: ../View/sign-in.php");
    }
    else
    {
        echo "Error :".$sql;
    }

    // Now let's move the uploaded image into the folder: image
    if (move_uploaded_file($tempname, $folder)) {
        echo "<h3>  Image uploaded successfully!</h3>";
    } else {
        echo "<h3>  Failed to upload image!</h3>";
    }

}


function getUser(){
    $conn = connection();

    $email = $password = $pwd = '';
    $email = $_POST['email'];
    $pwd = $_POST['password'];
    $password = MD5($pwd);

    $sql = "SELECT * FROM admins WHERE email='$email' AND password='$password'";

    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result))
            {
                $id = $row["id"];
                $email = $row["email"];
                $admin_image = $row["admin_img"];
                $_SESSION['id'] = $id;
                $_SESSION['email'] = $email;
                $_SESSION['admin_image'] = $admin_image;
            }
            header("Location: ../View/welcome.php");
        }
        else
        {
            echo "Invalid email or password";
        }

}
?>