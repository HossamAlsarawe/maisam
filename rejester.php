
<!doctype html>
<html>
<head>





<title>مكتبة ميسم سنتر </title>
<meta charset="utf-8">
<style type="text/css">
input:hover{color: red}
p:hover{color: black }
img {border-radius: 30px  }
body{font-family:simplified    }
table {background-color:white ;background-image: url(image-7p-e392.png) }
li{font-size: 25pt   }
nav ul ul {
    display: none;

}
nav ul li:hover > ul {
    display: block;
}
nav ul {

float:none;
    
    box-shadow: 10px 10px 5px rgba(0,30,0,0.15);
    padding:15px 20px;
    border-radius: 30px;
    list-style: none;
    
    display: inline-table;
}


nav ul li:hover {
 
   position: relative;
   padding: 3px 10px 
}

nav ul li {
    float: left;
   
}
nav ul li:hover a {
    color: black;
}
nav ul li a {
    display: block;
     padding:10px 60px;
    color: black ;
     text-decoration: none; }<!--  --> 
     nav ul ul {
    background: #FF99CC; 
    border-radius: 20px; 
    padding: 0;
    position: absolute; 
    top: 100%;
}
nav ul ul li {
    float: left;

      border-top: 1px solid black;
  
    position: relative;
}
nav ul ul li a {
    padding: 30px 60px;
    color: white;
}

</style>
</head>
<body style="background-color: #A8A8A8 ;background-image: url(img/image-7p-e392.png) ;background-attachment: scroll; "> 

<?php
extract($_POST);
$db=mysql_connect("localhost","root","12345678");


mysql_select_db("rejster",$db);
$h="SELECT * FROM information";
$h1=mysql_query($h,$db);
 while ($f=mysql_fetch_row($h1)) {
        foreach ($f as $value) {
            if($email==$value)
                die("your email is used befor");
 }
                   
}


                   


if ($password==$repassword) {
    $q0="INSERT INTO `information` (`fname`, `Lname`, `username`, `Password`, `repassword`, `Email`, `birthday`, `Countrycode`, `phoneno`, `Addres`) VALUES ('$fname', '$lname', '$username', '$password', '$repassword', '$email', '$Birthday', '$countryCode', '$tel', '$addres')";
    mysql_query($q0,$db); 
   
}else{
    die("error");
}
   

    
mysql_close($db);



print("<th style='position: relative;left: 1670px; top:-50px'> <h1 style=font-size: 70px ;font-family: Times , Times, serif '>".$fname." ". $lname."</h1></th>");

 
?>

<header style="background-image: url(img/image-7p-e392.png);height: 280pt  ;background-attachment: fixed;" >
 

<form>
<table style="position: relative;right:130px ;background-image: url(img/image-7p-e392.png);padding-left: 10px"> 
<tr>
 <th style="position: relative;left: 1340px"> <a href="http://localhost/bootstrap/bootstrap/css/login.html" style="font-size: 25pt ;font-family: Times , Times, serif "> <img id = "img1" src="img/student-zone.png" style="width: 110px ; height: 40px  "></a></th>


  <th ><a href="#" style="font-size: 10pt"> اتصل بنا || </a> <a href="https://www.google.jo/maps/place/%D9%85%D9%8A%D8%B3%D9%85+%D8%B3%D9%86%D8%AA%D8%B1%E2%80%AD/@32.086779,36.1006102,15z/data=!4m5!3m4!1s0x0:0x7a55d4355ff632b!8m2!3d32.086779!4d36.1006102" style="font-size: 10pt"> فروعنا </a><label >
 
   <input type="text" name="text1" style="border-radius: 30px ;width: 150pt ; height: 15pt;border-color: pink">    </label>
   <label>
    <input type="submit" name="" value="  بحث " style=" background-color: pink ; border-radius: 30px ;width: 50pt ; height: 20pt ">  </th></tr>

</table>


<center>
<img src="img/Untitled.png"  id="img1" style=" width: 150px ; height: 110px ;position:relative;top: -30px"> 
<h1 class="h11" style="color: red ; font-family: arial  ; font-size:50pt ;position:relative;top: -80px"> <font face="traditional arabic ">ميسم سنتر</font>  </h1>

</center>
<center >
<nav>
    <ul style="background-color: #FF3399 ;position:relative;top: -145px">
        <li><a href="#">المكتبيات </a> <ul>
                        <li><a href="file:///C:/Users/hossam/Desktop/bootstrap/css/page%207.html">اكسسوارات_مكاتب </a></li>
                        <li><a href="file:///C:/Users/hossam/Desktop/bootstrap/css/page%206.html">اطقم_مكاتب </a></li>
                    </ul></li>
        <li><a href="file:///C:/Users/hossam/Desktop/bootstrap/css/page%207.html">القرطاسية</a>
            <ul>
                <li><a href="file:///C:/Users/hossam/Desktop/bootstrap/css/page%204%20.html">اقلام  </a></li>
             
                <li><a href="file:///C:/Users/hossam/Desktop/bootstrap/css/page%205.html">شنط_مدرسية </a>
                   
                </li>
            </ul>
        </li>
        <li style="font-color: red "><a href="#"> الالعاب</a>
            <ul>
                <li ><a href="file:///C:/Users/hossam/Desktop/bootstrap/css/page%201%20.html">صوفيات </a></li>
                <li><a href="file:///C:/Users/hossam/Desktop/bootstrap/css/page%203.html">العاب_بنات </a></li>
                 <li><a href="file:///C:/Users/hossam/Desktop/bootstrap/css/page2.html">العاب_اولاد </a></li>
            </ul>
        </li>
        <li><a href="file:///C:/Users/hossam/Desktop/bootstrap/css/project.html#">الرئيسية </a></li>
    </ul>
</nav>


 
</header>
</center>
</form>
<center>


  


<table style="background-image: url(img/image-7p-e392.png);">

  <tr>
  <th><button onclick="back()" style="border: none ;background-image: url(img/image-7p-e392.png)" ><img src="img/medium-arrow-pointing-up-66.6-12278 - Copy.png" style="width: 100px;height: 350px">  </button></th>
    <th><img src="img/1234.png" id="i1"> </th>
   <th><button onclick="chingimg()" style=" border: none ;background-image: url(img/image-7p-e392.png)"> <img src="img/medium-arrow-pointing-up-66.6-12278.png" style="width: 100px;height: 350px"></button></th>
  </tr>


</table>
<script type="text/javascript">
  var x = document.getElementById('i1');
  var imagaray=["img/1496199_1155526641154474_520446971401910831_o.png","img/10549219_921893984517742_8996881569007771615_o.jpg","img/12140057_1157042457669559_9083581606262476509_o.png","img/12615559_1125078070865998_2535054480056144519_o.png","img/12973347_1180933491947122_564841175043253390_o.png"

  ,"img/123.png"];
  var indx = 0 ; 
function chingimg(){

  x.setAttribute("src",imagaray[indx]); 
  indx=indx+1;
  if (indx>5) {   indx=0;}}
function back(){
  x.setAttribute("src",imagaray[indx]); 
  indx=indx-1;
  if (indx<0) {   indx=5;}}
</script>
<br>

<table style="position: relative;right: 150px " >
    <th>
        



    


    <tr>
     <img src="img/16807142_1538165229557278_4546299001383977932_n.png" style="width:500px ;height: 400px ">  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      
    <img src="img/16831154_1538169252890209_2767712110738628221_n.png" style="width:500px ;height: 400px "> 


    </tr></th>
    <br><br><br><br>
    
    <th><tr>
         <img src="img/16508159_1517426328297835_4185234919406048203_n.jpg" style="width:500px ;height: 400px ">  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      
    <img src="img/16649379_1527471470626654_4101485537078429514_n.png" style="width:500px ;height: 400px "> 


    </tr>
</th>
    <br><br><br><br>
        <tr>
      <img src="img/15822589_1472357459471389_2048778050351560338_n.jpg" style="width:500px ;height: 400px ">  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      
    <img src="img/16508033_1517426321631169_103229398934790947_n.jpg" style="width:500px ;height: 400px "> 

    </tr>
</table>
</center>
<br>
<br>
<br>
<center>
<footer style="background-image: url(img/img/image-7p-e392.png)    ; height:170pt ;">
<br>
 
<table > 
<tr>
<a href="#img1">
<img src="img/home-icon2.png" style=" width: 90px ; height: 100px ; position: relative;left: 440pt ">
</a>
 
<table   > 
<tr >

    <a href="https://www.facebook.com/almaisam/"><img src="img/facebook-logo-EPS-AI1.png1_.png" style=" width:55px ; height: 50px ;border-radius: 0px"> </a>&nbsp;&nbsp;&nbsp;
    <img src="img/img_v.png" style=" width:70px ; height: 50px ;border-radius: 0px">&nbsp;&nbsp;&nbsp;
    <img src="img/mastercard.gif" style=" width:70px ; height: 50px ;border-radius: 0px">
    
    
    
</tr>

  </table>
 </footer></center>
</body>
</html>