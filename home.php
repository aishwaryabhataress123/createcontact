<html>
<head>
<style>
.header{

}
.logo{

}
.menu{
background-color:#04C5F9;
width:100%;
height:40px;
color:white;
}
ul{
 list-style-type:none;
}
li a{
float:left;
  display: block;
  text-align: center;
  padding: 12px 25px;
}
li a:hover{
  background-color:white;
  color:#04C5F9;
}
a.active{
      background-color:white;
  color:#04C5F9;
}
.mainframe{

}
</style>
</head>
<body>
<div class="header">
<div class="logo">
<img src="https://image3.mouthshut.com/images/imagesp/925609709s.jpg" alt="Aress Picture" style="height:100px;width:200px;">
</div>
</div>
<div class="menu">
<ul>
  <li><input type="button" onclick="CreateCase.php"><a class="active">HOME</a></button></li>
</ul>
 <ul>
  <li><a href="CreateCase.php"><a class="active">Raise Case</a></a></li>
  </ul>
</div>
<div class="mainframe">
 <p>Welcome <?php echo $_POST['email']; ?> </p>
</div>
</body>
</html>
