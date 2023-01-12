<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <title>CONTACT US</title>
    <link rel="stylesheet" href="contactUsStyle.css">
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
            <li> <a href="contactus.php">CONTACT US</a></li>
            <li> <a href="blog-home.html">BLOG</a></li>
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















    <!-- Top section of contact us page  -->
    <div class="top">

        <div class="lefttop">
            <h1>Contact US</h1>
        </div>

        <div class="righttop">
            <input type="button" value="get in touch">
        </div>
        
        
    </div>


    <!-- getin section of a contact us page  -->
    <div class="getin">

        <div class="leftgetin">
            <h1>GET IN <span style="color:green">&#x2618;Touch</span></h1>
        </div>
        
        <div class="rightgetin">
            <p>It’s our pleasure to answer any inquiry you might have about landscaping or gardening questions,
                 just use the form below or choose one of the alternative methods of communication.
                  We’re available from Monday to Friday, 07:30-19:00 to take your call.</p>
    
        </div>
    </div>
        
    <!-- this is the main section where you can enter your details -->
    <div class="main">
      <div class="leftmain">
       <h1 style="color:black">Need Our Service Or Have Queries ?</h1>
        <h2 style="color:black">&#x2617; Address</h2>
        <p>220A lake city Street 6, SC m7, lahore pakistan</p>
        <h2 style="color:black">&#x1F4DE;Contact Details</h2>
        <p>&#x260E;  Troll Free: +923300030003</p>
        <p>&#9993;  codemind@gmail.com</p>
        <h2 style="color:black">&#x1F550; Working Hours</h2>
        <table>
            <thead>
            </thead>
           <tbody>
            <tr>
             <td>Monday</td>
             <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
             <td>07:00-17:00</td>
            </tr>

            <tr>
                <td>Monday</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td>07:00-17:00</td>
            </tr>

            <tr>
                <td>Tuesday</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td>07:00-17:00</td>
            </tr>

            <tr>
                <td>Wednesday</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td>07:00-17:00</td>
            </tr>

            <tr>
                <td>Thursday</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td>07:00-17:00</td>
            </tr>

            <tr>
                <td>Friday</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td>07:00-17:00</td>
            </tr>

            <tr>
                <td>Saturday</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td>07:00-17:00</td>
            </tr>

            <tr>
                <td>Sunday</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td><span style="color:green">Cloced</span></td>
            </tr>

           </tbody>
        </table>
      </div>

      <div class="rightmain">
         <form action="insert2.php" method="POST">

           <input type="text" name="fname" id="fname" placeholder="First Name*" required on 
           invalid="this.setCustomValidity('Please Enter your first Name')" on input="this.setCustomValidity('')">

           <input type="text" name="lname" id="lname" placeholder=" Last Name*" required on 
           invalid="this.setCustomValidity('Please Enter your last name')" on input="this.setCustomValidity('')"><br>

           <input type="email" name="email" placeholder="Email(optional)">

           <input type="number" name="phone" id="phone" placeholder="Phone No*" required on 
           invalid="this.setCustomValidity('Please Enter your phone number')" on input="this.setCustomValidity('')"><br>
           <div class="addressClass">
            <input   type="text" name="address" placeholder="Address*" required on 
            invalid="this.setCustomValidity('Please Enter your address')" on input="this.setCustomValidity('')"><br>
 
           </div>
           
           <input type="text" name="city" id="city" placeholder="City*" required on 
           invalid="this.setCustomValidity('Please Enter your city')" on input="this.setCustomValidity('')">

           <input type="number" name="zipcode" placeholder="ZipCode*" required on 
           invalid="this.setCustomValidity('Please Enter your zip code')" on input="this.setCustomValidity('')" pattern="[0-9]{4}[0-9]{7}"><br>

           <select name="services" id="services" required >
            <option value="services" disabled selected>Services</option>
            <option value="awesome">Awesome services</option>
            <option value="good">Good services</option>
            <option value="average">Average services</option>
            <option value="poor">Poor services</option>
          </select><br>
          <input type="text"name="message" id="message" cols="10" rows="5" placeholder="How can We Help?" required on 
          invalid="this.setCustomValidity('Please Enter your message')" on input="this.setCustomValidity('')">
        <br>
          <input type="submit" value="Send Now" >
        

         </form>
      </div>
    </div >
        









    <!-- map of riu -->
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3406.332815417563!2d74.228565914479!3d31.37738546132943!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3918fde312bd5bf9%3A0xfa85cd464c551ad2!2sRiphah%20International%20University%20-%20Lahore%20Campus!5e0!3m2!1sen!2s!4v1657862957203!5m2!1sen!2s" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>







     <!-- regional office -->
     <div class="container1">
        <h1 style="color:green">Regional Offices</h1>
        <hr class="col_orange">
        <div class="leftbox">
           <h2 style="color:green">lahore:</h2>
           <p>&#x2617; Address 	&rArr; 130-Madina Market, Ravi Link Road, Lahore</p>
           <p>&#x260E; Phone 	&rArr; +92 42 37701650</p>
            
        </div>
        <div class="middlebox">
            <h2 style="color:green">Chiniot:</h2>
            <p>&#x2617; Address 	&rArr; Chiniot Shalimar Building, Lahore Road, Chiniot.</p>
            <p>&#x260E; Phone 	&rArr; +92 42 37701650</p>
            <p>&#x260E; Phone 	&rArr; +92 42 37701650</p>
        </div>
        <div class="rightbox">
            <h2 style="color:green"> Gujranwala :</h2>
            <p>&#x2617; Address 	&rArr;  Gujranwala Mini Stadium Seikhupura Road, Gujranwala.</p>
            <p>&#x260E; Phone 	&rArr; +92 42 37701650</p>
            <p>&#x260E; Phone 	&rArr; +92 42 37701650</p>

        </div>
        <div class="left2box">
            <h2 style="color:green">Multan:</h2>
            <p>&#x2617; Address 	&rArr; 1st Floor, Peerzada Pharmacy, Chowk Qazafi Multan</p>
            <p>&#x260E; Phone 	&rArr; +92 42 37701650</p>
            <p>&#x260E; Phone 	&rArr; +92 42 37701650</p>
        </div>
        <div class="middle2box">
            <h2 style="color:green"> Hyderabad:</h2>
            <p>&#x2617; Address 	&rArr;  A-42, S.I.T.E Hyderabad.</p>
            <p>&#x260E; Phone 	&rArr; +92 42 37701650</p>
            <p>&#x260E; Phone	&rArr; +92 42 37701650</p>
            
    
        </div>
    </div>



    <!-- farms -->

    <div class="container2">
        
        <h1 style="color:green; margin-top: 20px;" >Farms</h1>
        <hr class="col_orange">
        
        <div class="fleftbox">
           <h2 style="color:green"> Chiniot Farm:</h2>
           <p>&#x2617; Address 	&rArr; Farm 5Km Link Motorway Road Chiniot.</p>
           <p>&#x260E; Phone 	&rArr; +92 42 37701650</p>
            
        </div>
        <div class="fmiddlebox">
            <h2 style="color:green">Sharaqpur Farm:</h2>
            <p>&#x2617; Address 	&rArr; 1 Km, 23 Chak Road,Jaranwala Road, Sharqpur Shareef.</p>
            <p>&#x260E; Phone 	&rArr; +92 42 37701650</p>
        
        </div>
       
       
    </div>











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