

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title></title> -->
    <style>
         header{
    /* height: 80px; */
    width: 100%;
    
  }
.headerleft{
    width: 50%;
    float: left;
}
.headerright{
    width: 50%;
    float: left;
    padding: 30px;
    
}
.nevbar{
    float: left;
    width: 100%;
    position:sticky;
    background-color: black;
    
    
}
    nevbar ul{ 
        list-style-type:none;
        margin:0px;
        padding:0px;
        background-color:black;
        overflow:hidden;
       
    }
    .nevbar li{
        float:left;
      

    }
    
     li a , .dropbtn{
        display:inline-block;
        padding:10px 10px;
        font-size:15px;
        margin-left: 20px;
        text-transform:uppercase;
        text-align:center;
        text-decoration:none;
        color: #f1f1f1;
     }
    li a:hover , .dropdown:hover .dropbtn{
        color: #459431;
        
    }
    li .dropdown{
        display: inline-block;
    }
   
    .dropdown-content{
        display:none;
        position:absolute;
       
        min-width:160px;
        background-color: black;
        box-shadow:  0px 8px 16px 0px rgba(0,0,0,0.2);
        /* z-index:1; */
    }
    .dropdown:hover .dropdown-content
    {
        display:block;
    
    } 
    .dropdown-content a{
        display:block;
        text-decoration: none;
        color:#f1f1f1;
       
        text-align:left;
    }
    .dropdown-content a:hover{
        background-color:#459431;
        color: #f1f1f1;
    }

    </style>
</head>
<body>
    <!-- header section -->
<header>
    <div class="headerleft">
        <img src="logo.jpeg" alt="logo is here" width="370px" height="95px">
    </div>
    <div class="headerright">
       
        <span>Integrated Provider of Agricultural Solutions</span><br>
        
       
        <p>Seedling | Irrigation | Fertilizers | Pesticides</p>
    </div>
       <div class="container">
    <div class="nevbar">
        <ul>
            <li> <a href="index.html">HOME</a></li>
            <li class="dropdown">

                <a class="dropbtn" href="seed.html">OUR PRODUCT</a>
                <div class="dropdown-content">
                    <a href="seed.html">Seeds</a>
                    <a href="handlascoop.jpg">hardware Product</a>
                </div>
                </li>
            <li> <a href="contactus.html">CONTACT US</a></li>
            <li> <a href="#">BLOG</a></li>
            <li class="dropdown"> 
                <a class="dropbtn" href="aboutus.html">ABOUT US</a>
                
            <div class="dropdown-content">
                <a href="#">Research & development</a>
                <a href="#">Exports</a>
                <a href="#">Farms</a>
                <a href="#">Success stories</a>
                <a href="#">Field activities</a>
           </div>
        </li>
          
            
            
        </ul>
    </div>
    </header>		



</body>
</html>


<!-- php code for order -->
<?php
include'connection.php';
$fname= $_POST['fname'];
$lname= $_POST['lname'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$address= $_POST['address'];
$city=$_POST['city'];
$zipcode=$_POST['zipcode'];
// $service= $_POST['service'];
$message= $_POST['message'];


$sql="INSERT INTO contactform(fname,lname,email,phone,address,city,zipcode,message) VALUES ('$fname','$lname','$email','$phone','$address','$city','$zipcode','$message')";

if(mysqli_query($conn,$sql))
{
	// echo"data insert";
    echo"data inserted";
}
else{
	echo"error";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        
  /*
 ============================================================================================
                                         styling of footer
   ============================================================================================
    */
 .footer
 {
width: 100%;
margin-top: 20px;
padding: 30px;
height: 600px;
color: gray;
background-color: black;
float: left;
 }

 .col1,.col2,.col3,.col4{
    float: left;
    height: 400px;
    width: 25%;
    margin-top: 0px;

 }

 .lastrow{
    width: 100%;
    height: 20px;
    padding: 30px;
    float: left;
    color: aliceblue;
    margin-top: 20px;
    

 }
.col1 p:hover{
    color: #459431;
}
.col3  p:hover{
    color: #459431;
}
.col4 p:hover{
    color: #459431;
}
 .col2 a{
    text-decoration: none;
    color:gray;
    
 }
 .col2 a:hover{
color: #459431;
 }
 
 .footer h2{
    color: white;
 }
    </style>
    <!-- <title>Document</title> -->
</head>
<body>
    <p style="color:green; font: size:20px;"> your feedback  is successfully receive thank you   <br> your team contact your very soon<br> for more go to home page</p>


     
    <!-- footer of the websiter -->
    <footer>
        <div class="footer">
            <div class="col1">
                    <h2>Get in <span style="color:green">Touch</span></h2>
                     <p>&#x2617;  Address: 220A lake city Street 6, SC m7, lahore pakistan </p>
                    <p>&#x260E;   Phone No : +9231799922229 </p>
                    <p>&#9993; Email:riu@gmail.com</p>
                    <p>&#x1F550;Timeing: Mon to Sat 7.00 - 17.00</p>
                    <p>sunday - <span style="color:green">Cloced</span></p>
            </div>
            <div class="col2">
             <h2>Usefull Links</h2> <br>
                <p><a href="index.css">Home</a></p> 
                <p><a href="seed.html">Product</a></p>
                <p><a href="">blog</a></p>
                <p><a href="aboutus.html">About US</a></p>
                <p><a href="contactus.html">contact Us</a></p> 
             
            </div>
            <div class="col3">
                <h2>Regional offices</h2>
                <h3>Lahore: </h3>
                <p>&#x2617;  Address &rArr; 130-Madina Market, <br>
                    Ravi Link Road.</p>
                <p>&#x260E;  phone No &rArr; +92888820020</p>
            </div>
            <div class="col4">
            <h2>Farms</h2>
                    <h3>Sharqpur: </h3>
                    <p>&#x2617;  Address &rArr; 1 Km, 23 Chak Road,Jaranwala Road, Sharqpur Shareef.</p>
                    <p>&#x260E;  phone No &rArr; +92888820020</p>
            </div>
            <div class="lastrow">
                <hr>
                <p>© 2022 Peak And Planting website is Designed by Ahmed & M yousaf</p>
            </div>
        </div>
    </footer>
    
</body>
</html>
