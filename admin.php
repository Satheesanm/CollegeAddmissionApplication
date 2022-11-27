

     

<!DOCTYPE html>
<html>
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>United College</title>
</head>
<body style= "background: #Add8e6; color: black;">

<a href="https://th.bing.com/th/id/R.fd087c0d1e46e77e6b65ca7fa6d5aec6?rik=B2ftiyCeyFf5uw&pid=ImgRaw&r=0" style="display: block; padding: 1em 0; text-align: center; "><img alt="" border="0" width="230" data-original-height="102" data-original-width="800" src="https://th.bing.com/th/id/R.fd087c0d1e46e77e6b65ca7fa6d5aec6?rik=B2ftiyCeyFf5uw&pid=ImgRaw&r=0"/></a>

<center>
        <a class="navbar-brand ml-3" href="">
           
        </a>
</center>
 
<div class="header">
<center> <h1  style="background: #07073b; color: white;" img="https://blogger.googleusercontent.com/img/a/AVvXsEjHPhqWyUPKhY8i37pmrACjhQxIUZHAqWmgMxLmMeQJ5cp5NJcZRiutFL3aefhRdvQUSfOp06zA7fbvj7-V-DZNJJZOWSpaTXMFUJ5WVi441hGGZVkAIHzQtwQAtr8buYJZ_ymPric8FTKHPmV1D9FP--6hRGiQysROiL82rYX6b_cEvxPGZQQCASd1" class="logo">United College</h1></center>
  
  <div class="header-right">

  </div>
</div><center>


<div class="thead-dark">
<br>
 
  <h1> List of Admissions</h1>
<br>
       <table class="table table-hover"> 
    <thread  class="thead-dark">
      <tr>
      <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>TellNo</th>
        <th>Address</th>
        <th>Gender</th>
        <th>DOB</th>
        <th>Application Status </th>
        <th>Course</th>
        <th>Educational Level</th>
        <th>GPA</th>
        <th>Award</th>     
      <tr>
</thread>
 <tbody>
 <?php
      $server_name='localhost';
      $user_name='root';
      $password="";
      $database="admission";
      $connection=new mysqli($server_name,$user_name,$password,$database);
     
      if ($connection->connect_error) {
      	die("Unableto connect".$connection->connect_error);
      }
      //read
      $sql = "SELECT * FROM applications";
      $result = $connection->query($sql);

      if(!$result){
        die("Inalid query: " . $connection_error);
      }
      

      while($row = $result->fetch_assoc()){ 

        echo "<tr>
        
        <td>" . $row["FirstName"] . "</td>
        <td>" . $row["LastName"] . "</td>
        <td>" . $row["Email"] . "</td>
        <td>" . $row["TellNo"] . "</td>
        <td>" . $row["Address"] . "</td>
        <td>" . $row["Gender"] . "</td>
        <td>" . $row["DOB"] . "</td>
        <td>" . $row["Aappstatus"] . "</td>
        <td>" . $row["Course"] . "</td>
        <td>" . $row["Level"] . "</td>
        <td>" . $row["GPA"] . "</td>
        <td>" . $row["Aaward"] . "</td>
        <td>
          <a class='btn btnp=rimary btn-sm' id='myBtn' href='accept.html'>Accept</a>
          <a class='btn btn-danger btn-sm'href='Reject.html'>Reject</a>
          </td>
          </tr>";
   
    }
       ?>

       
       </tbody>

</table>
  </div>


<script>
// Get the button, and when the user clicks on it, execute myFunction
document.getElementById("myBtn").onclick = function() {myFunction()};

/* myFunction toggles between adding and removing the show class, which is used to hide and show the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}
</script>

</body>
</html>

