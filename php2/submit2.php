<?php
session_start();
  include "db_conn.php";
    $success = TRUE;
    $date = $_POST['datee'];
    $tokennumber = $_POST['tokennumber'];
    $printtype = $_POST['printtype'];
    $cusname = $_POST['username'];
    $cusnumber = $_POST['cusnumber'];
    $cusemail = $_POST['cusemail'];
    $cusstate = $_POST['userstate'];
    $cusdistrict = $_POST['userdistrict'];
    $cusaadress = $_POST['useraddress'];
    $cuspincode = $_POST['userpincode'];

    $_SESSION['cusemail']  = $$cusemail;
    $_SESSION['contactno'] = $cusname;
    


if($success = TRUE)

{

    $sql = "INSERT INTO aadharcstdata(tkno,datee,username,usernum,cusemail, userstate,userdist,useraddress,userpin,userprinttype) VALUES ('$tokennumber','$date','$cusname','$cusnumber','$cusemail','$cusstate','$cusdistrict',' $cusaadress','$cuspincode','$printtype')";
    if(mysqli_query($conn, $sql)){

        echo"successful";

        $_SESSION['uploadmessage'] = $success ;
        header("Location: coast.php?");
        
        
    }

    else{
        $em = '<span style="color:rgb(228, 6, 5);text-align:center;,font-weight: bold;,">Something Went Wrong ,Error</span>';
        header("Location: ../order.php?error=$em");
    }




                

}


			
?>