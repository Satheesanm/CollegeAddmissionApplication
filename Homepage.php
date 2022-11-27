<!DOCTYPE html>
<html>
<head>
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
<body>

<div class="header">
  <a img="https://blogger.googleusercontent.com/img/a/AVvXsEjHPhqWyUPKhY8i37pmrACjhQxIUZHAqWmgMxLmMeQJ5cp5NJcZRiutFL3aefhRdvQUSfOp06zA7fbvj7-V-DZNJJZOWSpaTXMFUJ5WVi441hGGZVkAIHzQtwQAtr8buYJZ_ymPric8FTKHPmV1D9FP--6hRGiQysROiL82rYX6b_cEvxPGZQQCASd1" class="logo">United College</a>
  
  <div class="header-right">
  <a class="tablinks" onclick="openCity(event, 'London')" >Home</a>
  <a class="tablinks" onclick="openCity(event, 'Paris')">Contact</a>
  <a class="tablinks" onclick="openCity(event, 'Tokyo')">About</a>
  </div>
</div>
<div id="London" class="tabcontent">
  <br><br>
<center>
<form name="f1" action = "Login.php" onsubmit = "return validation()" method = "POST">  
<button style="padding: 10px;  margin-bottom: 10px;
  border-radius: 2px;  color: white; background-color:#0262DE;" type="submit" class="btn btn-primary">Sing In</button>
</form>

<b> <h1>United College of Science and Technology</h1><b>
</center>
<br><br><br>
<br>


<div class="slideshow-container">

<div class="mySlides fade">

  <img style="display: block;-webkit-user-select: none;margin: auto;cursor: zoom-in;background-color: hsl(0, 0%, 90%);transition: background-color 300ms;" src="https://d.ibtimes.co.uk/en/full/1588195/university-students.jpg" width="100%" height="25%">

</div>

<div class="mySlides fade">
 
  <img style="display: block;-webkit-user-select: none;margin: auto;cursor: zoom-in;background-color: hsl(0, 0%, 90%);transition: background-color 300ms;" src="https://th.bing.com/th/id/R.e84f9b4d6af4fecfe343b1d407463fbf?rik=xzrDdTlg5X8syg&pid=ImgRaw&r=0" width="100%" height="25%">

 
</div>

<div class="mySlides fade">

  <img style="display: block;-webkit-user-select: none;margin: auto;cursor: zoom-in;background-color: hsl(0, 0%, 90%);transition: background-color 300ms;" src="https://th.bing.com/th/id/R.6fde7ffe546cf1a83d3c0d10c38d5ad1?rik=z8rikFQGAJMbJw&pid=ImgRaw&r=0" width="100%" height="25%">

</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
</div>

<div id="Paris" class="tabcontent"> <br><br><br><br><br>
<Center><h1>Contact</h1>
 <b><p>      Dr. E. Sathish - Placement & Corporate Affairs <br>                             
United college of Science and Technology,  <br>   No 1322, Scarborough, Toronto, Canada.<br>   
E-mail:  test@united.ca<br>   
Phone: 123456789<br>   
Fax: 789456123
</p><b>
</Center>
</div>

<div id="Tokyo" class="tabcontent"> <br><br><br><br><br>
  <Center><h1>About Us</h1></Center>
  <br><br>
  <p>United College is a prestigious institution which excels in the fields of Engineering, Science and  Technology for more than three successful decades. It offers multi-disciplinary academic programmes in various fields of Engineering, Science, Technology, law, Dental Science, Pharmacy, Nursing, Management, Arts and Science and Allied Health Sciences.  It is established under Sec.3 of UGC Act, 1956 and is been Accredited with ‘A’ Grade by the National Accreditation and Assessment council. The Institution persistently seeks and adopts innovative methods to improve the quality of higher education and is responsive to the changes taking place in the field of education on a global scale. The Institution has a team of dynamic and outstanding faculty, innovative pedagogical practices , state of the art infrastructure and world class Research Facilities. 
<br>
<br>
United College has a good presence in rankings and ratings at National and International level. The Institution has been ranked in 43rd position by the National Institutional Ranking Framework (NIRF), Government of Canada among the Universities in Canada for the year 2022 and ranked one among the top 50 Universities for seven consecutive years. United College is ranked among the Top 5 Institutions in the Country for Innovation by ATAL ranking of Institution for Innovation Achievements, Govt. of Canada. Times Higher Education and QS has ranked United College among the top Institutions worldwide. United College Institute of Science & Technology has alliances with leading Universities and research establishments at National and International Level. It is a research intensive University with world class laboratories and research facilities and is involved in research in the emerging areas of Science and Technology. United College has undertaken various sponsored and collaborative R&D projects funded by National and International Organizations. United College has written a special page in the history of space research on 22nd June 2016 with the launch of “UNITED COLLEGE” in association with ISRO.
</Center>
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

  // Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
}
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


