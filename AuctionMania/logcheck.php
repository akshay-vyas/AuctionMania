 <script type="text/javascript" src="js/jquery.mobile.customized.min.js"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
 <script src="bower_components/sweetalert/dist/sweetalert.min.js"></script>
  <link rel="stylesheet" href="bower_components/sweetalert/dist/sweetalert.css">
  <script src="https://unpkg.com/sweetalert2@7.17.0/dist/sweetalert2.all.js"></script>
  
  <script src="sweetalert.js"></script>

<?php
/*
include('dbconnect.php');
session_start();

if (isset($_POST['login']))
{
    $username=$_POST['email'];
    $userpass=$_POST['password'];
   // echo $username,$userpass;
    $sql="select * from user where email='$username' AND pwd='$userpass' ";

    $res=mysqli_query($conn,$sql);
    if($results=mysqli_fetch_assoc($res))
    {
        $type=$results['type'];
        if($type=="admin")
        {
           
               $_SESSION['uid'] = $results['uid'];
            $_SESSION['email'] = $results['email'];
            $_SESSION['uname'] = $results['uname'];
           // $_SESSION['company'] = $results['company'];
                $midd=$_SESSION['uid'] = $results['uid'];
                $type = $results['type'];
            ?>
            <script>
                document.location="auction/user/admin/main_home.php";
            </script>
            <?php
            
        }
        else if($type=="user")
        {
           
            $msql="select * from user where email='$username'";
            $mres=mysqli_query($conn,$msql);
            if($mresults=mysqli_fetch_assoc($mres))
            {
                   $_SESSION['uid'] = $results['uid'];
            $_SESSION['email'] = $results['email'];
            $_SESSION['uname'] = $results['uname'];
           // $_SESSION['company'] = $results['company'];
                $midd=$_SESSION['uid'] = $results['uid'];
                $type = $results['type'];
                
               
            }
            ?>
            <script>
                document.location="auction/user/main_home.php";
            </script>
            <?php
        }
     
        else
        {
            ?>
            <script>
                alert("Invalid Email & Password");
            </script>
            <?php
        }
        
    }
}

*/
?>












<?php

session_start();
include('dbconnect.php');

if (isset($_POST['register'])) 
{


	$name=$_POST["name"];
	$email=$_POST["email"];
	$contact=$_POST["contact"];
	$address=$_POST["address"];
	$pwd=$_POST["pwd"];
	$cpwd=$_POST["cpwd"];
    $test=0;
   if($pwd==$cpwd)
        {
            $sql="select * from user";
            $res=mysqli_query($conn,$sql);
            while($row=mysqli_fetch_assoc($res))
            {
                if($email==$row['email'])
                {
                    ?>
                    <script>
                    alert("This EMAIL is already registered");
                    window.location= "register.php";
                    </script>
                    <?php
                    $test=1;

                    break;
                }
            }
            if($test==1)
            {
                header('location:index.php');
            }
            if($test==0)
                {
                    $sql="insert into user values(null,'$name','$email','$contact','$address','','$pwd','user')";
                        //echo $sql;
                    $res=mysqli_query($conn,$sql);
                    header('location:index.php');
                }
            }
            else
            {

            ?> 

            <script>

            alert("Paswword mismatched");
            window.location= "register.php";
            </script>

            
            <?php
            //header('location:register.php');
        }

   
}

?>
