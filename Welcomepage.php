<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css">

    <title>United College Online Admission</title>
    
</head>

<body >
<center>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">

        <a class="navbar-brand ml-3" href="">
            <h1 style="font-size: 1.5rem; padding: auto;">United Online Admission</h1>
        </a>
        </nav>
</center>
       
<img src="https://eduethic.com/upload/images/slider/1248313041_2019-06-28.jpg"  width="100%" alt="banner">



    <div class="container">
    <hr>

    <hr>
    <form name="f1" action = "Form.php" onsubmit = "return validation()" method = "POST">  

   <P  >Welcome to the United College International Student Application form. We are pleased that you have decided to apply to United College! This form is to be used by international students to apply directly to United College. If you are a Canadian Citizen or Permanent Resident (PR) of Canada, do not use this form and visit http://ontariocolleges.ca for information on how to apply.</P>
    <button style=" background: #07073b; color: white" type="submit" class="btn btn-primary">Start Application</button> <br><br><br><br>
   </form>
</body>

</html>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the chat form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup chat - hidden by default */
.chat-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width textarea */
.form-container textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  resize: none;
  min-height: 200px;
}

/* When the textarea gets focus, do something */
.form-container textarea:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/send button */
.form-container .btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>
</head>
<body>


<button style=" background: #07073b; color: white" class="open-button" onclick="openForm()">Chat</button>

<div class="chat-popup" id="myForm">
    
  <form action="popup.php" class="form-container">
    <h1>Chat</h1>

    <label for="msg"><b>Message</b></label>
    <textarea placeholder="Type message.." name="msg" required></textarea>

    <button style=" background: #07073b; color: white" type="submit" class="btn">Send</button>
    <button style=" background: #07073b; color: white" type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

</body>
</html>