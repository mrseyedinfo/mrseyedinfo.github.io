<!DOCTYPE html>
<html dir="rtl" lang="fa">
<head>

<meta id="mtKeywords" name="KEYWORDS" content="">

<meta property="og:type" content="article" />
<meta property="og:url" content="https;//mrseyed.github.io" />
<meta property="og:locale" content="fa_IR" />
<meta property="og:site_name" content="https://mrseyed.github.io" />
<meta property="og:title" content="آقاسیــد" />
<meta property="og:description" content="
ارائه کلیه خدمات تخصصی سیستم عامل اندروید و اینترنتی و فروسگاه اینترنتی محصولات مرتبط
" />
<meta property="og:image" content="https://mrseyed.github.io/media/mrseyed.jpg">
<title>آقــا  سـیـــد</title>


<meta http-equiv="Content-Type" content="text/html; charset:utf-8" />
<meta http-equiv="Content-language" content="fa" />
<meta name="viewport" content="width=device-width">


<link rel="stylesheet" type="text/css" href="./css/mrseyed.css">
 <link rel="stylesheet" type="text/css" href="./fonts/icofont.min.css">
  <link rel="stylesheet" type="text/css" href="./fonts/fa.min.css">
 <link rel="stylesheet" type="text/css" href="./fonts/fonts.css">
  <link rel="stylesheet" type="text/css" href="./fonts/bs icons/bootstrap-icons.min.css">
  <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">

<script type="text/javascript" src="./js/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("body").show(function(){
       $("#bk1").hide();
       $("#bk2").hide();
       $("#bk3").hide();
       $("#bk4").hide();
       $("#bk5").hide();
       $("#bk6").hide();
       $("#bk7").hide();
       $("#bk8").hide();
       
    });
   $("#btn1").click(function(){
      $("#bk1").toggle(1000);
   });
   $("#btn2").click(function(){
      $("#bk2").toggle(1000);
   });
   $("#btn3").click(function(){
      $("#bk3").toggle(1000);
   });
   $("#btn4").click(function(){
      $("#bk4").toggle(1000);
   });
   $("#btn5").click(function(){
      $("#bk5").toggle(1000);
   });
   $("#btn6").click(function(){
      $("#bk6").toggle(1000);
   });
   $("#btn7").click(function(){
      $("#bk7").toggle(1000);
   });
   $("#btn8").click(function(){
      $("#bk8").toggle(1000);
   });
   
});
</script>

</head>
<style type="text/css">
header {
width:390px;
height:60px;
border:3px groove gray;
border-radius:3px 3px 15px 15px;
background-image:linear-gradient(180deg, blue, black);
}
.aa {
   
   font-f
}
.slide {

}
	.slide .kadr {
			position:absolute;
			width:378px;
			height:240px;
			margin-right:-375px;
			}

.dor1 {
width:380px;
border: 2px solid gray;
border-radius:6pt;
min-height:300px;
}
	.dor1 .dor2 {
			width:340px;
			border:1px groove silver;
			border-radius:3pt;
			min-height:260px;
			margin:-30px 20px 10px 20px;
			background-image:linear-gradient(180deg, green, white, white, red);
			}
	.dor1 .dor2 .bt {
			border:1.5px groove black;			border-radius:10px 10px 3px 3px;
			font-family:farnaz;
			font-size:25px;
			margin-top:5px;
			height:45px;
			}
	.dor1 .dor2 .bt1 {
			width:270px;
			margin-right:-2.5px;
			height:43px;
			border-radius:20px 2px 2px 2px;
			}
	.dor1 .dor2 .bt2 {
			width:42px;
			border-radius:2px 20px 2px 2px;
			height:42px;
			}
	.dor1 .dor2 .line {
			width:99%;
			border:1px ridge yellow;
			min-height:30px;
			border-radius:4px;
			background-color:black;
			color:white;
			font-family:tanha;
			font-weight:1000;
			font-size:20px;
			margin-top:20px;
			}
.myalert {
			width:93%;
			min-height:40px;
			border:2px solid black;
			border-radius:3px 3px 10px 10px;
			margin-top:1px;
			background-color:lightyellow;
			font-family:irslight;
			font-size:16px;
}
</style>

<body onshow="">
 <center>
 
 <header>
 <p class="fs36 white titr2 pd5" >
 بانک ملی ایران
 </p>
 </header>



</center>
<center>
 <div class="dor1 b-black" >
  <p style="color:red" class="fs36 titr1 lime pd10 center" >
  نشد
<?php
$host = "sql101.infinityfree.com";
$user = "if0_40212319";
$pass = "Mrz137076";
$db = "if0_40212319_mysql";
$conn = mysqli_connect($host, $user, $pass, $db);  
if(!$conn )  
{  
  die('Could not connect: ' . mysqli_error());  
}  
echo 'Connected successfully';  

$sql = 'INSERT INTO BANK (id, B_NAME, B_CODE) VALUES ("111", "تجاررتا ", "98k")';
if(mysqli_query($conn, $sql)){  
 echo "Record inserted successfully";  
}else{  
echo "Could not insert record: ". mysqli_error($conn);  
}  
mysqli_close($conn);  
?>  
 
  </p>
  <div class="dor2 b-silver">
  <form action="newb.php" method="GET" >
  <p style="color:white"> 
  <input type="text" name="bank"> 
   </p>
   </form>
  </div>
 </div>



<hr>
 </center>
 
</body>