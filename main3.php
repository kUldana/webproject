<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<link href="https://fonts.googleapis.com/css?family=Maven+Pro" rel="stylesheet">
<link rel="stylesheet" href="main3.css">

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
<span>HAIR CARE</span>
<h1>MATRIX</h1>
<p>Love MATRIX adds the fact that the brand always pays great </p>
<p> attention to the training of hairdressers. More than 200 technologists  </p>
<p>across the country are training masters in studios and at retreats.  </p>
<p>Choosing a MATRIX stylist, you can be sure that this master knows </p>
<p> all the specifics of working with your hair.</p>

</div>
<div class="main-arrow">
</div>
</div>
</div> 
</div> 
</header>



</div>
<section class="main_section1">
<?php 
		$con=mysqli_connect("127.0.0.1","root","","matrixdb");
		$pos="select * from prods";
		//$sql="select * from cars
		$nag=mysqli_query($con,$pos);
	
		
		
		for ($i=0; $i < mysqli_num_rows($nag); $i++) { 
			$result=mysqli_fetch_array($nag);
			$img=$result['product_img'];
			$img2=base64_encode($img);
			$maker=$result['product_id'];
			$r=$result['product_name'];
			$type=$result['product_type'];
			$price=$result['product_price'];
			$des = $result['product_info'];
			echo '
			<div class="main1">
				<img src="data:image;base64,'.$img2.'" width=250 height=200/>
				<div class="left">
					<p> '.$r.' '.$type.'</p>
					<p> Year: 2018 </p>
					<p> Price: '.$price.'tg.</p>
					<p> Description: '.$des.'</p>
				</div>
			</div><br/>
			</div>';
		}

		?>

</section> 








	


</body>
</html>