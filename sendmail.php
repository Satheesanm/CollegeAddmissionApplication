<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>United College</title>
</head>
<body style= "background: #Add8e6; color: black;">

<a href="https://th.bing.com/th/id/R.fd087c0d1e46e77e6b65ca7fa6d5aec6?rik=B2ftiyCeyFf5uw&pid=ImgRaw&r=0" style="display: block; padding: 1em 0; text-align: center; "><img alt="" border="0" width="230" data-original-height="102" data-original-width="800" src="https://th.bing.com/th/id/R.fd087c0d1e46e77e6b65ca7fa6d5aec6?rik=B2ftiyCeyFf5uw&pid=ImgRaw&r=0"/></a>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
<center>
        <a class="navbar-brand ml-3" href="">
           
        </a>
</center>
       
    </nav>
<div class="header">
<center> <h1  style="background: #07073b; color: white;" img="https://blogger.googleusercontent.com/img/a/AVvXsEjHPhqWyUPKhY8i37pmrACjhQxIUZHAqWmgMxLmMeQJ5cp5NJcZRiutFL3aefhRdvQUSfOp06zA7fbvj7-V-DZNJJZOWSpaTXMFUJ5WVi441hGGZVkAIHzQtwQAtr8buYJZ_ymPric8FTKHPmV1D9FP--6hRGiQysROiL82rYX6b_cEvxPGZQQCASd1" class="logo">United College</h1></center>
  
  <div class="header-right">

  </div>
</div><center>
    <?php
$message1 = $_POST["firstName"] ;
$message2 = $_POST["lastName"];
$email = $_POST["email"];
$tellNo = $_POST["tellNo"];
$address = $_POST["address"];
$gender = $_POST["gender"];
$dob = $_POST["dob"];
$appstatus = $_POST["appstatus"];
$course = $_POST["course"];
$level = $_POST["level"];
$GPA = $_POST["GPA"];
$Award = $_POST["award"];


echo 
'<h1> Congratulation!! We have received you application which is under progress. </h1> <br> <h2>We have received following Personal Details  </h2><br>  <h3>First Name :' .$message1 . '<br>Last Name :' .$message2 . '<br> Email : ' . $email . '<br>  Contact Number :' .$tellNo . '<br> Address :' . $address . '<br> Gender : ' . $gender .  '<br> DOB :' . $dob  . '<br>The Educational Details are <br>' .$appstatus . '<br> Course : ' . $course . '<br> Higher Educational Level :'  . $level. '<br> GPA:' . $GPA . '<br> Award received :' .$Award ;


    ?></center>

    
<?php
$servername = 'localhost';
$username = 'root';
$password = "";
$dbname = "admission";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "INSERT INTO applications (FirstName, LastName, Email, TellNo, Address, Gender, DOB, Aappstatus, Course, Level,GPA,Aaward)
VALUES ('$message1', '$message2', '$email', '$tellNo', '$address', '$gender','$dob', '$appstatus', '$course', ' $level ', '$GPA ', '$Award')";




if ($conn->query($sql) === TRUE) {
  //echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
</body>
</html>


<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
   // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'testemail24291@gmail.com';                     //SMTP username
    $mail->Password   = 'ghoiwcvqgofubmja';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('noreply@united.com', 'United College');
    $mail->addAddress($_POST["email"] );     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject='Congratulations!! We have received you application- Under review';

 $message1 = $_POST["firstName"] ;
$message2 = $_POST["lastName"];
$email = $_POST["email"];
$tellNo = $_POST["tellNo"];
$address = $_POST["address"];
$dob = $_POST["dob"];
$appstatus = $_POST["appstatus"];
$course = $_POST["course"];
$level = $_POST["level"];
$GPA = $_POST["GPA"];
$Award = $_POST["award"];

    $mail->Body=  'Dear  ' . $message1 . '<br> <br>Congratulation!! We have received you application which is under progress. We have received following Personal Details  <br><br> First Name :' .$message1 . '<br>Last Name :' .$message2 . '<br> Email : ' . $email . '<br>  Contact Number :' .$tellNo . '<br> Address :' . $address .  '<br> DOB :' . $dob  . ' <br><br>The Educational Details are <br><br>  Applition for: ' .$appstatus . '<br> Course : ' . $course . '<br> Higher Educational Level :'  . $level. '<br> GPA:' . $GPA . '<br> Award received :' .$Award;
    $mail->AltBody = '';

    $mail->send();
    echo ' <h4> The confirmation mail  has been sent </h4>';
} catch (Exception $e) {
   // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}