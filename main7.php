<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<link href="https://fonts.googleapis.com/css?family=Maven+Pro" rel="stylesheet">
<link rel="stylesheet" href="main.css">
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
h2{
  padding-left: 600px;
}
p{
  padding-left: 300px;
}
table {
    border-collapse: collapse;
    display: flex;
    justify-content: space-around;
    background-color: DarkSalmon; 
}
table, th, td {
   border: 5px solid white;
   padding: 20px 20px 20px 20px;
   color:white;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
#myInput{
  margin-left: 600px;
}
</style>
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
<h1>Dear </h1>
<p>The doors of the European chain of beauty salons have opened for you!</p>
</div>
<div class="main-arrow">
</div>
</div>
<h2>Filterable Table</h2>
<p>Type something in the input field to search the table for first names, last names or emails:</p>  
<input id="myInput" type="text" placeholder="Search..">
<br><br>
<table>
  <?php 
    $con=mysqli_connect("127.0.0.1","root","","matrixdb");
    $pos="select * from masters";
    $nag=mysqli_query($con,$pos);
  
 
    for ($i=0; $i < mysqli_num_rows($nag); $i++) { 
      $result=mysqli_fetch_array($nag);
      $title=$result['formal_title'];
      $first=$result['name_first'];
      $last = $result['name_last'];
	  $mail= $result['email_address'];
      print'
         <tbody id="myTable">
         <tr> <td>'.$title.'</td></tr>
		 <tr> <td>'.$result['name_first'].'</td></tr>
         <tr><td>'.$result['name_last'].'</td></tr>
         <tr><td>'.$result['email_address'].'</td></tr>
			
          
			 
          </tbody>';

 
    }

    ?>
</table> 
<footer> 
@familiaalmaty
</footer> 


  


</body>
</html>