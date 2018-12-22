<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<link href="https://fonts.googleapis.com/css?family=Maven+Pro" rel="stylesheet">
<style >
.container_demo{
  display:flex;
  justify-content: center;
  align-content: center;
}
#subscribe, 
#login{
  display: flex;
  position: absolute;
  top: 200px;
  left: 320px;
  width: 88%; 
  padding: 18px 6% 60px 6%;
 
}
#login{
  z-index: 22;
}
#wrapper h1{
  font-size: 48px;
  color: rgb(6, 106, 117);
  padding: 2px 0 10px 0;
  font-family: 'FranchiseRegular','Arial Narrow',Arial,green;
  font-weight: bold;
  text-align: center;
  padding-bottom: 30px;
}


  body{
  margin: 0;
  font-family: 'Maven Pro';
 }

.main{
  color: white;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  align-items: center;
  height: 100vh;
  min-height: 600px;
  background-image: url("http://dezhur.com/uploads/721c90712a2a1c2f8611dd59896ce073.jpg");  
  background-size: cover;
  position: relative;
}
html{
  font-size: 20px;
}
.del{
  text-decoration: none;
}
.main-overlay{
  position: absolute;
  left: 0;
  top:0;
  width: 100%;
  height: 100%;
  opacity: 0.7;
  z-index: 0;
  background-image: url("http://www.solidbackgrounds.com/images/2880x1800/2880x1800-olive-drab-number-seven-solid-color-background.jpg"); 
  background-size: cover;



}

.header{
  display: flex;
  justify-content: space-between;
  height: 10vh;
  align-items: center;
  width: 90%;
  position: relative;
  z-index: 2;
  
}
.menu{
  width: 100%;
}

.menu ul{
  display: flex;
  justify-content: space-around;
  list-style: none;


}
.menu-link{
  color:white;
  border: 1px ;
  text-decoration: none;
  font-weight:bold;
}
.menu a:hover {  
color: white; 
opacity: 0.8;
} 
.registration{
  margin-left: 50px; 
  border: 1px solid white;
  text-decoration: none;
  padding: 10px 20px;
  border-radius: 10px;
  color: white;
  text-transform: uppercase;
  font-weight:bold;
}
.main-text{
  display: flex;
  flex-direction: column;
  justify-content: center;

  position: relative;
  z-index:2;
  text-align: center;
}
.main-text span{
  position: relative;
  z-index:2;
  text-align: center;

}
.main-text h1{
  font-size: 50px;
}
.main-arrow{
  position: relative;
  height: 10vh;
  display: flex;
  justify-content: center;
  align-items: center;
  z-index: 2;
  

}
.table{
  background-image: url("https://images.unsplash.com/photo-1493515694075-fff2d464227d?auto=format&fit=crop&w=1050&q=80&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D"); 
  opacity: 0.9;
  height: 100vh;
  min-height: 600px;
  padding: 3rem;
  z-index: 0;

}
.table-header{
  text-align: center;
  margin-bottom: 2rem;
}
.table-header span{
  text-transform: uppercase;
  font-size: 2rem;
  color: #9fa4af;
}


.price-tags{
  display: flex;
  justify-content: space-between;
  text-align: center;
  v

}
.price-tag{
  border-radius: 10%;
  background-color: white;
  padding: 1rem;
  display: flex;
  justify-content: space-around;
  flex-direction: column;
  align-items: center;
  text-align: center;
    border:1px solid red;
    width: 300px;
    transition: 1s;
  
  
}
.price-tag:hover{
  cursor: pointer;
   box-shadow: 0px 0px 81.88px 10.12px rgba(204,204,223,0.71)

}
.price-tag span{
  font-size: 1rem;
  padding-top: 2rem; 
}
.price-tag p{
  color: #9fa4af;
}

img{
  height: 75px;
  width: 100px;
}
footer { 
color: rgba(255, 255, 255, 0.9); 
background: black; 
width: 100%; 
text-align: center; 
padding: 12px 0; 

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
<li><a href="http://localhost/webproject/main.php" class="menu-link">Наш салон</a></li>
<li><a href="http://localhost/webproject/main2.php" class="menu-link">Услуги</a></li>
<li><a href="http://localhost/webproject/main3.php" class="menu-link">Товары</a></li>
<li><a href="http://localhost/webproject/main7.php" class="menu-link">Мастер</a></li>
<li><a href="http://localhost/webproject/main5.php" class="registration">запись</a></li>
</ul>
</div>

</div>
<div id="container_demo" >
  <a class="hiddenanchor" id="toregister"></a>
  <a class="hiddenanchor" id="tologin"></a>
  <div id="wrapper">
    <div id="login" class="animate form">
      <form  action="mysuperscript.php" autocomplete="on"> 
        <h1>Registration</h1> 
        <p> 
          <label for="username" class="uname" data-icon="u" > Name Surname </label>
          <input id="username" name="username" required="required" type="text" placeholder="Name Surname"/>
        </p>
        <p> 
          <label for="price" class="uprice" data-icon="p"> contacts</label>
          <input id="price" name="price" required="required" type="text" placeholder="+8778 191 4070" /> 
        </p>
        <p> 
          <label for="password" class="youpasswd" data-icon="p"> type of procedure </label>
          <input id="procedure" name="pros" required="required" type="text" placeholder="matrix" /> 
        </p>
        <p class="keeplogin"> 
          <input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
          <label for="loginkeeping">SAVE</label>
        </p>
        <p class="login button"> 
          <input type="submit" value="Login" /> 
        </p>
      </form>
    </div>
    
  </div>
</div>
<div class="main-arrow">
</div>
</div>
</div> 
</div> 
</header>



</div>
<?php
    $con=mysqli_connect("127.0.0.1","root","matrixdb");
    INSERT INTO procedure(procedure_id, procedure_nam, procedure_contact, procedure_name) VALUES (null,['username'],['price'],['procedure']);
    
   
?>

<footer> 
@familiaastana 
</footer>


  


</body>
</html>