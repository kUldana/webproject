<!DOCTYPE html>
<html lang="com">
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
<meta charset="UTF-8">
<link href="https://fonts.googleapis.com/css?family=Maven+Pro" rel="stylesheet">
<link rel="stylesheet" href="main.css">
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
<h1>Dear residents of Almaty!</h1>
<p>The doors of the European chain of beauty salons have opened for you!</p>
</div>
<div class="main-arrow">
</div>
</div>
<div class="table">
<div class="table-header">
	<span class="table-subtitle"> OUR PRINCIPLES </span>
</div>
<div class="price-tags">
<div class="price-tag">
<img src="https://salonfamilia.eu/upload/iblock/656/65658e6ec2fbbcae5ff43a61684e068f.png" alt="">
<span>CREATE
FRIENDLY ATMOSPHERE</span>
<p>Not many salons can boast a truly high-quality service and friendly atmosphere. In the beauty salons Familia we do everything so that you can relax and have a good time. Familia - a place where you want to return. See for yourself!</p>

</div>
<div class="price-tag">
<img src="https://salonfamilia.eu/upload/iblock/a80/a80130bf8478e815c562aaf409295399.png" alt="">
<span>SAVE YOUR TIME</span>
<p>Beauty salons Familia created for modern people who value their time. With us you will not be languishing in the queue or nervous because of the slowness of the master. All our specialists provide services not only with high quality, but also quickly.</p>

</div>
<div class="price-tag">
<img src="https://salonfamilia.eu/upload/iblock/ac0/ac060ff7bfa8aba7ae0302ef384d002d.png" alt="">
<span>TO RENDER QUALITY SERVICES INDEPENDENT OF THE CLIENT'S INCOME LEVEL</span>
<p>The network of beauty salons Familia develops and improves its business processes. We constantly improve the professionalism of our employees and the quality of our services, while maintaining low prices and availability for all our clients.</p>

</div>

</div>
</div>
<footer> 
@familiaalmaty 
</footer> =] 