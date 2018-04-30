<?php
 session_start();
 include('./process/connect.php');

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  $data = htmlspecialchars($data, ENT_QUOTES);
  return $data;
}

 if(isset($_POST['submit']))
 {
      //to check whether name is blank


             //checking if it has the correct format and whether the email has already exist
              $email= test_input($_POST['email']);
	      $email= $email."@ktr.srmuniv.ac.in";
              $sql1 = "SELECT * FROM faculty WHERE email = '$email'";
              $result1 = mysqli_query($conn,$sql1) or die('Error: ' . mysqli_error($conn));
              if (mysqli_num_rows($result1) > 0)
               {
                 $_SESSION['error']['email'] = "This Email is already registered.";
               }
     //to check whether dob is blank



   if(isset($_SESSION['error']))
     {
       $_SESSION['error']['link'] = "http://www.srmiic.com/facultyRegistration.php";
       header("Location: error.php");
       exit;
     }
   else
        {
	     $fname = test_input($_POST['profile_name']);
	     $contact = test_input($_POST['phone_number']);
	     $email = test_input($_POST['user_email']);
	     $email= $email."@ktr.srmuniv.ac.in";
         $dob= $_POST['profile_dob'];
         $reg_no= test_input($_POST['profile_register']);
         $dept = $_POST['profile_department'];
         $user_password  = test_input($_POST['user_password']);
         $user_password_confirmation = test_input($_POST['user_password_confirmation']);
         $experience = test_input($_POST['profile_year']);
         $interest = test_input($_POST['profile_hobbies']);
         $specialisation = test_input($_POST['specialisation']);
         $knowledge = test_input($_POST['profile_skills']);
         $confirm_code = md5(uniqid(rand()));
         $sql2 = "INSERT INTO faculty (name,contact,email,dob,reg_no,department,experience,interest,soft_knowledge,uniq_code) VALUES ('$fname','$contact','$email','$dob','$reg_no','$dept','$experience','$interest','$knowledge','$confirm_code')";
         //$result2 = mysqli_query($conn,$sql2) or die('Error: ' . mysqli_error($conn));
         header("Location: index.php");
         $_SESSION['msg']['register'] = "Your Response has been successfully submitted";
         if(isset($_SESSION['msg']))
                           {
                            header("Location: ./index.php");
                            exit;
                           }

//          if($result2)
//             {
// 	         $last_id = $conn->insert_id;
//              $first_name = explode(' ',trim($fname));
//              $to = $email;
//              $subject = "Confirmation Mail from SIIC";
//              $message = "
//                                   <html>
//                                   <head>
//                                   <title>SIIC Confirmation Mail</title>
//                                   </head>
//                                   <body>
//                                   <p>Hi Sir/Ma'm , <br><br>
// We are extremely pleased to welcome you to the <b>SRM Innovation and Incubation Center</b>team.<br>
// Below you will find a link that will redirect you to a page that contains your Confirmation Reciept.<br>
// Kindly save this link for future reference.<br>
// <br><br>
// <b> <a href='http://srmiic.com/pageview1.php?pid=".$confirm_code."'>Click here</a></b> to view your confirmation receipt.
// <br><br>
// For any queries, write us at <b>support@srmiic.com<b>
// </p>
//                                   </body>
//                                   </html>";
//
//             // Always set content-type when sending HTML email
//              $headers = "SIIC: Confirmation from SRM Innovation and Incubation Center";
//              $headers .= "MIME-Version: 1.0" . "\r\n";
//              $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
//              $headers .= 'From: <support@srmiic.com>' . "\r\n";
//             //$headers .= 'Cc: myboss@example.com' . "\r\n";
//
//              $sentmail = mail($to,$subject,$message,$headers);
//
//             if($sentmail)
//                 {
//                   $_SESSION['msg']['register'] = "Your Response has been successfully submitted.</br> Please check your inbox for confirmation reciept.</br>In case you don't receive the email, please check your spam folder or write us at support@srmiic.com";
//                   if(isset($_SESSION['msg']))
//                   {
//                    header("Location: index.php");
//                    exit;
//                   }
//                 }
//             else
//                 {
//                  $_SESSION['error']['mail'] = "Your registration is successfull but there was some problem in sending the email.</br>Please contact our support team at <b>support@srmiic.com</b> for confirmation reciept.";
//                 if(isset($_SESSION['error']))
//                    {
//                     $_SESSION['error']['link'] = "http://www.srmiic.com/facultyRegistration.php";
//                     header("Location: index.php");
//                     exit;
//                     }
//                  }
//             }

        }
    }



?>
