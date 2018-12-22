<!DOCTYPE html>
<html lang="ru">
<head>
 <script src="js1.js" defer></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script> 
$(document).ready(function(){
    $("#flip1").click(function(){
        $("#panel1").slideToggle("slow");
    });
});
$(document).ready(function(){
    $("#flip2").click(function(){
        $("#panel2").slideToggle("slow");
    });
});
$(document).ready(function(){
    $("#flip3").click(function(){
        $("#panel3").slideToggle("slow");
    });
});
</script>
<meta charset="UTF-8">
<link href="https://fonts.googleapis.com/css?family=Maven+Pro" rel="stylesheet">
<link rel="stylesheet" href="main2.css">
</head>
<body>
<div class="main">
<div class="main-overlay"></div>
<div class="header">
<div class="logo">
</div>
<div class="menu">
<ul>
<li><a href="http://localhost/webproject/main.php" class="menu-link">Our salon</a></li>
<li><a href="http://localhost/webproject/main2.php" class="menu-link">Services</a></li>
<li><a href="http://localhost/webproject/main3.php" class="menu-link">Products</a></li>
<li><a href="http://localhost/webproject/main7.php" class="menu-link">Master</a></li>
<li><a href="http://localhost/webproject/main6.php" class="registration">Registration</a></li>
</ul>
</div>

</div>
<div class="main-text">
<span>------- carpe diem -------</span>
<h1>Services and prices</h1>
<p>Beauty Salons Familia in Almaty provide a wide range of beauty services </p>
<p>for customers of all ages. Masters of our salons are ready for anti-crisis</p>
<p>prices to realize any dreams and create for you a new, attractive image.</p>
</div>
<div class="main-arrow">
</div>
</div>
    <div id="bigImage">
      <img id="i1" src="https://www.howtobecomeahairdresser.com.au/wp-content/uploads/2015/12/Teaching-Training-Hairdressers-1024x569.jpg"/>
    </div>

    <div id="carousel">
          <img id="i1" onclick='clickMe("https://www.howtobecomeahairdresser.com.au/wp-content/uploads/2015/12/Teaching-Training-Hairdressers-1024x569.jpg")' src="https://www.howtobecomeahairdresser.com.au/wp-content/uploads/2015/12/Teaching-Training-Hairdressers-1024x569.jpg"/>
          <img id="i2" onclick='clickMe("https://www.thetrendspotter.net/wp-content/uploads/2018/04/3D-Nails-to-Inspire-Your-Next-Manicure-1.jpg")' src="https://www.thetrendspotter.net/wp-content/uploads/2018/04/3D-Nails-to-Inspire-Your-Next-Manicure-1.jpg"/>
          <img id="i3" onclick='clickMe("https://files.kstatecollegian.com/2018/02/Augu.jpg")' src="https://files.kstatecollegian.com/2018/02/Augu.jpg"/>
          <img id="i4" onclick='clickMe("https://uploads.dailyvanity.sg/wp-content/uploads/2016/12/gradient-lips.jpeg")' src="https://uploads.dailyvanity.sg/wp-content/uploads/2016/12/gradient-lips.jpeg"/>
          <img id="i5" onclick='clickMe("https://imagecdn3.luxnet.ua/tv24/resources/photos/news/620_DIR/201803/941845_2144188.png?201803155851")' src="https://imagecdn3.luxnet.ua/tv24/resources/photos/news/620_DIR/201803/941845_2144188.png?201803155851"/>
    </div>
    
<div id="flip1">Hairdresser</div>
<div id="panel1">

<table>
<tr>
    <th>Hair length</th>
    <th>Short
        (up to 25 cm)</th>
    <th>Medium
         (up to 35 cm)</th>
    <th>Long
     (over 35 cm)</th>
   </tr>
   <tr><td>Model haircut (wash + styling)</td>
   <td>3000 </td>
   <td>4000</td>
   <td>5000</td>
   </tr>
    <tr><td>Creative haircut (wash + styling)</td>
   <td>3500 </td>
   <td>4500</td>
   <td>5500</td>
   </tr>
    <tr><td>Haircut / bang correction</td>
   <td>1000 </td>
   </tr>
   <tr><td>Trimming with one cut</td>
   <td>1000 </td>
   </tr>
   <tr><td>Hair polishing (washing + styling)</td>
   <td>3000 </td>
   <td>4000</td>
   <td>5000</td>
   </tr>
   <tr><td>Hair dryer (wash + styling)</td>
   <td>3000 </td>
   <td>4000</td>
   <td>5000</td>
   </tr>
   <tr><td>Hair styling with thermo tools (washing + styling)</td>
   <td>3000 </td>
   <td>4000</td>
   <td>5000</td>
   </tr>


</table>
</div>
<div id="flip2">Manicure</div>
<div id="panel2">

<table>
   <tr><td>Manicure (combined)</td>
   <td>5000</td>
   </tr>
    <tr><td>Strengthening the nail plate</td>
   <td>3500 </td>
   </tr>
    <tr><td>Alignment</td>
   <td>1000 </td>
   </tr>
   <tr><td>Gel polish coating</td>
   <td>3000 </td>
   </tr>
   <tr><td>Design</td>
   <td>1000</td>
   </tr>
   <tr><td>Nail extensions (gel)</td>
   <td>4000</td>
   </tr>
   


</table>
</div>
<div id="flip3">Make up</div>
<div id="panel3">

<table>

   <tr><td>Night make-up</td>
   <td>5000</td>
   </tr>
    <tr><td>Smooky eyes</td>
   <td>5500</td>
   </tr>
    <tr><td>CAT EYE</td>
   <td>6000 </td>
   </tr>
   <tr><td>CUT CREASE</td>
   <td>6000 </td>
   </tr>
  


</table>
</div><footer> 
@familiaalmaty
</footer>


	


</body>
</html>