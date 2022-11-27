<!doctype html>
<html lang="en">

<head>
    <title>United College</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        
</head>

<style>
body {
    width: 100%;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background: rgb(131, 58, 180);
    background: linear-gradient(90deg, rgba(131, 58, 180, 1) 0%, rgba(253, 29, 29, 1) 50%, rgba(252, 176, 69, 1) 100%);
}

#main {
    width: 600px;
    height: 400px;
    border-radius: 35px;
    box-shadow: 3px 3px 20px 0px #940000;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-around;
}
</style>
 <br>
 <body>
      
 <div id = "frm">  
 <a href="https://az184419.vo.msecnd.net/canadore-college/Attachments/person-writing-bg_20161018132944_0.jpg?q=80" style="display: block; padding: 1em 0; text-align: center; "><img alt="" border="0" width="480" data-original-height="282" data-original-width="800" src="https://college.united.edu.np/images/uc-banner-bg-video.mp4"/></a>
<video poster="images/banner-img.jpg" preload="auto" muted="" autoplay="" loop="">
        <source src="https://college.united.edu.np/images/uc-banner-bg-video.mp4" type="video/mp4">
    </video>
<br><br><br>


<div class="container">
  <table><tr>
    <td style='padding: 80px'>
<form name="f1" action = "Welcomepage.php" onsubmit = "return validation()" method = "POST">  
    <div class="row">
    <div class="col">
        <div class="hide-md-lg">
        <h2 style="text-align:center">Student Login</h2>
        </div>

        <input class="form-control" type="text" name="username" placeholder="Username" required><br>
        <input class="form-control" type="password" name="password" placeholder="Password" required><br>
        <button type="submit" class="btn btn-primary">Login</button>
      </div>
      </div>
      <a href="#" style="color:white" class="btn">Sign up</a>
    
  
  

      </td>
     
  </div>
</div>
  <td style='padding: 80px'>  
  </form>
  <form name="f1" action = "admin.php" onsubmit = "return validation()" method = "POST">  
    <div class="row">
    <div class="col">
        <div class="hide-md-lg">
        <h2 style="text-align:center">Staff Login</h2>
        </div>

        <input class="form-control" type="text" name="username" placeholder="Username" required><br>
        <input class="form-control" type="password" name="password" placeholder="Password" required><br>
        <button type="submit" class="btn btn-primary">Login</button>
      </div>
      </div>

      
      <a href="#" style="color:white" class="btn">Forgot password?</a>
  </form>
  </td>  
  </tr></table>
</div>



</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
    </div>  
    
    <script>  
            function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>  
      
   </body>

</html>