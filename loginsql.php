<?php
session_start();

// $_REQUEST['Username']=$_POST['Username'];
$conn=new mysqli("localhost","root","","loginserver") or die("Connection failed:".mysqli_connect_error());
if(isset($_POST['submit']))
{
    $username=$_POST['Username'];
    $password=$_POST['Password'];
    $_SESSION['name']=$_POST['Username'];
    
    $sql="select * from user_details where username='$username' and password='$password'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count=mysqli_num_rows($result);
    if($count==1)
    {
        header("location:welcome.php");
        
    }
    else
    {
        echo '<script>
               window.location.href="index.php";
               alert("Login failed. Invalid username or password")
               </script>';
        
    }
    
}

 

// $sql="insert into user_details(username,password)values('$username','$password')";
//  if(mysqli_query($conn,$sql))
//  {
//     echo "welcome";
//  }
//  else
//  {
//     echo "incorrect";
//  }


// echo $_SESSION[$Username];
 mysqli_close($conn);
?>