<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 20px 10px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }
}
</style>
</head>

<body style="margin: 50px ;  background: #ddd"  >
<?php
// define variables and set to empty values
$appstatusErr = $courseErr = $levelErr = $GPAErr = $awardErr = $participatedErr = $collegeErr = $yearErr=$firstNameErr = $middleNameErr = $lastNameErr = $emailErr = $tellNoErr = $addressErr = $genderErr = $educationErr =$dobErr = "";
$appstatus = $course = $level = $GPA = $award = $participated = $college = $year = $firstName = $middleName = $lastName = $email = $tellNo = $address = $gender = $education =$dob = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["firstName"])) {
    $firstNameErr = "First Name is required";
  } else {
    $firstName = test_input($_POST["firstName"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$firstName)) {
      $firstNameErr = "Only letters and white space allowed";
    }
  }
}

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["middleName"])) {
      $middleNameErr = "Middle Name is required";
    } else {
      $middleName = test_input($_POST["middleName"]);
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z-' ]*$/",$middleName)) {
        $middleNameErr = "Only letters and white space allowed";
      }
    }
  }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (empty($_POST["lastName"])) {
        $lastNameErr = "Last Name is required";
      } else {
        $lastName = test_input($_POST["lastName"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/",$lastName)) {
          $lastNameErr = "Only letters and white space allowed";
        }
      }
    }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
  if (empty($_POST["tellNo"])) {
    $tellNo = "";
  } else {
    $tellNo = test_input($_POST["tellNo"]);
    if (!preg_match("/^[0-9]{10}+$/",$tellNo)) {
        $tellNoErr = "Enter the valid number";
      }
   
    
  }

  if (empty($_POST["address"])) {
    $address = "";
  } else {
    $addressErr = test_input($_POST["address"]);
  }

  

  if (empty($_POST["position"])) {
    $position = "";
  } else {
    $position = test_input($_POST["position"]);
  }

  

  if (empty($_POST["location"])) {
    $locationErr = "Gender is required";
  } else {
    $location = test_input($_POST["location"]);
  }




function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


<a href="https://th.bing.com/th/id/R.fd087c0d1e46e77e6b65ca7fa6d5aec6?rik=B2ftiyCeyFf5uw&pid=ImgRaw&r=0" style= " background: #07073b; color: white; display: block; padding: 1em 0; text-align: center; "><img alt="" border="0" width="230" data-original-height="102" data-original-width="800" src="https://th.bing.com/th/id/R.fd087c0d1e46e77e6b65ca7fa6d5aec6?rik=B2ftiyCeyFf5uw&pid=ImgRaw&r=0"/></a>
  
<center>
        <a class="navbar-brand ml-3" href="">
           
        </a>
</center>
       

<div style=" background: #07073b; color: white" class="header">

</center>
  <div class="header-right">

  </div>
</div>



<form action="sendmail.php" method="post" >
<br>
<H1 style=" background: #07073b; color: white" >Personal  Details</H1> 
<table>
<p><span class="error">* required field</span></p>
    <tr>
        <td>
        First Name: <input type="text" name="firstName" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter the First Name" value="<?php echo $firstName;?>">
  <span class="error">* <?php echo $firstNameErr;?></span>
 
        </td>

        <td>
       Middle Name: <input type="text" name="middleName" class="form-control" id="nameq" aria-describedby="emailHelp" placeholder="Enter the Middle Name" value="<?php echo $middleName;?>">
  <span class="error">* <?php echo $middleNameErr;?></span>
 
        </td>
        <td>
       Last Name: <input type="text" name="lastName" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter the Last Name" value="<?php echo $lastName;?>">
       <span class="error">* <?php echo $lastNameErr;?></span>
        </td>
    </tr>
</table>

  E-mail: <input type="email" name="email" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter the Email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br>
  <br>
  Telephone No: <input type="text" name="tellNo" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter the Phone number" value="<?php echo $tellNo;?>">
  <span class="error">* <?php echo $tellNoErr;?></span>
  <br>

Address: <input type="text" name="address" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter the address" value="<?php echo $address;?>">
  <span class="error">* <?php echo $addressErr;?></span>

  <br>
  
    Gender:
    <br>
  <input class="form-check-input" type="radio" name="gender" id="Male"  <?php if (isset($location) && $location=="Male") echo "checked";?> value="Male">Male
  <input class="form-check-input" type="radio" name="gender" <?php if (isset($location) && $location=="Female") echo "checked";?> value="Female">Female
  <span class="error">* <?php echo $locationErr;?></span>
  <br><br>
  <label  for="cars">Education:</label>

<select class="form-select" name="position" id="education" >
  <option value="HS">Higher School</option>
  <option value="UG">Under Graduate</option>
  <option value="PG">Post Graduate</option>
  <option value="PHD">PHD</option>

</select>
<br>
DOB:
  <input class="form-control"  type="date" id="birthday" name="dob" value="<?php echo $dob;?>">

<br><br>



<H1  style=" background: #07073b; color: white">Educational Details</H1> 
<br>

Admission Application For :
  <input class="form-check-input" type="radio" name="appstatus" id="singapore"  <?php if (isset($appstatus) && $appstatus=="Full Time") echo "checked";?> value="Full Time">Full Time
  <input class="form-check-input" type="radio" name="appstatus" <?php if (isset($appstatus) && $appstatus=="Part Time") echo "checked";?> value="Part Time">Part Time
  <span class="error">* <?php echo $appstatusErr;?></span>
  <br> <br>
  
  <label  for="cars">Course Applied For:</label>
<br>
<select class="form-select" name="course" id="position">
  <option value="AU">Academic Upgrading</option>
  <option value="AS">Aircraft Structural Repair Technician</option>
  <option value="AF">Aviation Fundamentals</option>
  <option value="BT">Biotechnology - Technician</option>
  <option value="PM">Project Management</option>
  <option value="BM">Business Management</option>
  <option value="MAD">Mobile App Development</option>
  <option value="HRM">Human Resource management</option>
  <option value="SCM">Supply Chain Management</option>
  <option value="CS">Cyber security</option>
  <option value="CSTN">Computer Systems Technician - Networking</option>
  <option value="DH">Dental Hygiene</option>

</select>
<br>
<label  for="cars">Previous High Education level:</label>

<select class="form-select" name="level" id="level">
  <option value="HS">Higher School</option>
  <option value="UG">Under Graduate</option>
  <option value="PG">Post Graduate</option>
  <option value="PHD">PHD</option>

</select>
<br>
Previous High Education GPA: <input type="text" name="GPA" class="form-control" id="Gpa" aria-describedby="emailHelp" placeholder="Enter the GPA" >
  <span class="error">* <?php echo $GPAErr;?></span>
  <br>
  Have you received any recognition, citation, or awards during high school?: <TextArea type="text" name="award" class="form-control" id="award" aria-describedby="emailHelp" placeholder="Enter the awards" value=""></TextArea>
  <br>
  Have you participated in any organization in your school?: <TextArea type="text" name="participated" class="form-control" id="partici" aria-describedby="emailHelp" placeholder="Enter the participation" value=""></TextArea>
<br>
Name of College Last Attended: <input type="text" name="college" class="form-control" id="college" aria-describedby="emailHelp" placeholder="Last Attended college" >
  <span class="error">* <?php echo $collegeErr;?></span> </input>
  <br>
  Academic Year Last Attended: <input type="text" name="year" class="form-control" id="year" aria-describedby="emailHelp" placeholder="Last attended Year" >
  <span class="error">* <?php echo $yearErr;?></span> </input>
  <br>
 
  <button style=" background: #07073b; color: white" type="submit" class="btn btn-primary">Submit</button>
  
</form>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
</div>

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}


// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>


<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>



</body>


</html>





<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  font-size: 20px;
}

#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: red;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #555;
}
</style>
</head>
<body>

<button STYLE=" background: #07073b; color: white" onclick="topFunction()" id="myBtn" title="Go to top">Top</button>


<script>
// Get the button
let mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>

</body>
</html>
