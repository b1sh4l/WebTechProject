<?php
$fname=$lname=$uname=$pass=$cpass=$age=$gender=$mobileNo=$email="";
$fnameerr=$lnameerr=$unameerr=$passerr=$cpasserr=$ageerr=$gendererr=$mobileNoerr=$emailerr="";

$count=$count2=0;
session_start();

if(isset($_POST["SignUp"])){

    $uname=$_POST["uname"];
    $data = file_get_contents("../Model/BorrowerList.json");
        $mydata = json_decode($data);
        foreach($mydata as $myobject){
                if($myobject->uname == $uname ){
                   $count2++;
                }

        }
 
$fname=$_POST["fname"];

if(empty($fname)|| !preg_match ("/^[a-zA-z]*$/", $fname) || strlen($fname)<3){

$fnameerr= " Please enter a valid name!";

}
else{
    $_SESSION["fname"]=$fname;
    $count++;
}

    $lname=$_POST["lname"];

    if(empty($lname)|| !preg_match ("/^[a-zA-z]*$/", $lname) || strlen($lname)<3)
    {
    $lnameerr= " Please enter a valid name!";
    }

    else
    {
    $_SESSION["lname"]=$lname;
    $count++;
    }

    $uname=$_POST["uname"];

    if(empty($uname)|| !preg_match ("/^[a-zA-z]*$/", $uname) || strlen($uname)<4)
    {
    $unameerr= " Please enter an username!";
    }

    else if(strlen($uname)!=4)
    {
        $unameerr="Admin Id must be 5 Numbers";
    }
    else if ($count2==1)
    {
        $unameerr ="Please enter a unique id!This is already exist!!";
    }

    else
    {
    $_SESSION["uname"]=$uname;
    $count++;
    
    }


    $pass=$_POST["pass"];
    $uppercase = preg_match('@[A-Z]@', $pass);
    $lowercase = preg_match('@[a-z]@', $pass);
    $number    = preg_match('@[0-9]@', $pass);

    if(empty($pass) || !$uppercase || !$lowercase || !$number  || strlen($pass) < 8 ){

        $passerr= "Password should have at least 8 characters and include at least one upper case letter, one number, and one special character!";
        
        }
        else{
            $count++;
           
        }

        $cpass=$_POST["cpass"];
        if($cpass != $pass  || empty($cpass)){
            $cpass="Passwords have not matched!";
            $count++;
        }
        else{
            $count++; 
        }

        $age=$_POST["age"];
        if(empty("$age")){

        $ageerr= " Please enter age!";
    
       }
       else{
        $_SESSION["age"]=$age;
        $count++;
        
    }

   
    
    if(isset($_POST["gender"])){
       
        $_SESSION["gender"]=$_POST["gender"];
        $count++;
    }
    else{
       
        $gendererr=" Please select gender!";
    }


    $mobileNo=$_POST["mobileNo"];
if(empty("$mobileNo")){

    $mobileNoerr= " Please enter Contact No!";
    
    }
    else if(strlen($mobileNo)!=11){
        $mobileNoerr= " Please enter Valid Contact No!";
    }
    else{
        $_SESSION["mobileNo"]=$mobileNoerr;
        $count++;
        
    }


    $email=$_POST["email"];
    if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
{
    $emailerr="Please enter a valid email!";
}
else{
    $count++;
    $_SESSION["email"]=$email;
}
if ($_FILES["myfile"]["type"]=="image/jpeg" ){
    
if(move_uploaded_file($_FILES["myfile"]["tmp_name"], "../Images/".$fname.$lname."Admin".date("Y-m-d").".jpg")){
    $count++;
    
}
else{
    $fileerr="Please choose a jpg file!";
}
}
else{
    $fileerr="Please choose a jpg file!";
}


if($count==3){
        $formdata=array(
            'firstname'=>$_SESSION["fname"],
            'lastname'=>$_SESSION["lname"],
            'age'=>$_SESSION["age"],
            'gender'=> $_SESSION["gender"],
            'contNo'=> $_SESSION["contNo"],
            'email'=>$_SESSION["email"],
            'uname'=>$uname,
            'pass'=>$pass
     
     
        );
        $existingdata = file_get_contents('../Files/Admin.json');
        $tempJSONdata = json_decode($existingdata);
        $tempJSONdata[] =$formdata;
        $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
        if(file_put_contents("../Files/Admin.json", $jsondata)) {
         $dataerr= "Successfully Registered!! <br>";
         session_destroy();
        
         
     }
     else {
         $dataerr= "Registration unsucessfull!! Please try again!!";
     }

 /*
       if($count==7){
           header("location: ../View/AdminRegistrationPage2.php");
       }*/
   }

?>