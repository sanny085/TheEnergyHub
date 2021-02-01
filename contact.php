<?php
$msg="";

        if(isset($_POST['submit']))

    {

        $Name=$_POST['name'];
        $Email=$_POST['email_id'];
        $Subject=$_POST['subject'];
        $Message=$_POST['message'];


        $conn=mysqli_connect("localhost","id10103188_sanny","12345","id10103188_theenergyhub");
        //$db=mysql_select_db("bakery");
        $qry="insert into CONTACT values('$Name','$Email','$Subject','$Message')";
        $exec=mysqli_query($conn,$qry);
        if($exec)
        {
            $msg="Thank You! Our Team will be contact within 24hrs";
        }
        else
        {
            $msg="Envalid! Name";
        }

    }


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>TheEnergyHub</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/gif" href="https://cdn2.iconfinder.com/data/icons/health-exercise/64/1-512.png">

    <link href="https://fonts.googleapis.com/css?family=Bangers|Monda|Permanent+Marker&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Fugaz+One" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<style>

  #SLIDE_BG{
    background-image: url('images/bg11.jpg');
    height: 100vh;
    width:100%;
    background-repeat:no-repeat;
    backface-visibility: hidden;
    animation: slideBg 5s linear infinite 0s;
    animation-timing-function: easy-in-out;
    background-size:cover;
    background-position:center center;

  margin:0px;
  }
  @keyframes slideBg
  {

    0%{

    background-image: url('images/bg11.jpg');

    }

    25%{
        background-image: url('images/bg12.jpg');

      }

      50%{
          background-image: url('images/bg12.jpg');

        }

    75%{
      background-image: url('images/bg11.jpg');
    }





  }

  #nav21,#nav27{
    font-size:18px;
    font-weight:bold;
    font-family:Nanum Gothic;
    color:#47535E;
  }
  #nav21:hover {
    color:#FAC42F;
    text-shadow: -1px  -1px 0 #2F363F;
  }



 #marg{
  margin:10px;
}
#sign{
  margin:0px ;
}
#footer{
  margin:15px 0px 0px 0px;
}






      #footer1{
      margin:0px 0px 50px 0px;
      }

div#fsk:hover {background-color:#DAE0E2;}
#join1 {
  background-color: #f52f07;
}
#join2 {
  background-color: #f52f07;
}

.sticky{
  position: fixed;
  top: 0;
  width: 100%;
}


@media screen and (min-width: 720px)
{
  div#body23 {
font-size:70px;
     padding: 6% 0%  0% 0%;
  }
}

@media screen and (max-width: 721px)
{
  div#body23{

    font-size:55px;
     padding:20% 0%  0% 0%;
  }
}

#Sign_in{

  font-size: 18px;
  font-family:Oswald;
  padding:10px 0px;
  word-spacing:1px
}

/*Welcoe login*/
@media screen and (min-width: 720px) {
  h3#welcome_log {
    font-size: 27px;
   }
}

@media screen and (max-width: 721px) {
  h3#welcome_log{
  font-size:19px;

  }
}

</style>
</head>

<body>

  <div id="SLIDE_BG" class="img-fluid d-block mx-auto">



    <nav class="navbar  navbar-expand-md navbar-dark  " style="padding:2px;background-color:#47535E;"  >

          <a class="navbar-brand text-light" href="#" style="font-family:'Fugaz One'; font-size:35px;padding:15px"><span class="text-info">The</span><span class="text-light">Energy</span><span class="text-warning">Hub</span></a>

              <button class="navbar-toggler" data-toggle="collapse" data-target="#fsk">
                <span class="navbar-toggler-icon  "></span>
              </button>

    </nav>

            <nav  id="navbar" class="navbar   navbar-expand-md navbar-dark sticky-top "  style="padding:0px;background-color:#EAF0F1">
              <div class="collapse navbar-collapse" id="fsk" >
                <span class="mr-auto"></span>


                          <ul class="navbar-nav"   style="margin:20px 0px 0px 0px;padding:0px 4px 10px 15px">
                        <li class="nav-item">
                          <a href="home.php" class="nav-link" id="nav21">HOME</a>
                        </li>

                        <li class="nav-item">
                          <a href="product.php" class="nav-link" id="nav21">PRODUCT</a>
                        </li>

                        <li class="nav-item">
                          <a href="program.php" class="nav-link" id="nav21">PROGRAM</a>
                        </li>



                        <li class="nav-item">
                          <a href="schedule.php" class="nav-link" id="nav21">SCHEDULE</a>
                        </li>

                        <li class="nav-item">
                          <a href="about.php" class="nav-link" id="nav21" >ABOUT</a>
                        </li>

                        <li class="nav-item">
                          <a href="contact.php" class="nav-link" id="nav21" ><span class="text-warning">CONTACT</span></a>
                        </li>

                              <li class="nav-item">
                                <a href="#" class="nav-link"><span  id="nav27"  class="nav   navbar-collapse navbar  text-secondary navbar-toggler"  data-toggle="modal" data-target="#md1"> LOGIN </span></a>
                              </li>


                      </ul>

                    </div>


              </nav>
              <div class="modal fade" id="md1"  >
                  <div class="modal-dialog">
                       <div class="modal-content" style="background-color: transparent;border-radius: 20px 20px 20px 20px;">
                          <div class="modal-header " style="border:none;margin:0px;border-radius: 20px 20px 0px 0px;background: #333844;box-shadow: 0 18px 20px -6px #000;">
                          <br>
                            <div class="container pt-3 pb-2" >
                                <div class="pr-2">
                                  <button class="btn text-white float-right" id="join2" data-dismiss="modal"><strong>X</strong></button>
                                </div>
                                 <h3 id="welcome_log" class="modal-title text-light text-center" style="font-family: 'Monda', sans-serif; ">Welcome To TheEnergyHub</h3>

                                </div>

                        </div>

                         <div class="modal-body " style="background-color: rgba(51, 56, 68, .85);border-radius: 0px 0px 20px 20px" >

                           <div class="container pt-4">
                             <form   method = "POST">
                                    <div  class="input-group pl-3 pr-3 pb-1">
                                         <div class="input-group-prepend">
                                         <span class="input-group-text" style="font-size:24px;background-color:#e6e6e6;border:none;border-radius:18px 0px 0px 18px" ><i class="fa fa-user" style="font-size:18px;" ></i></span>
                                            </div>
                                         <input type="text" class="form-control input-lg "  placeholder="Username" style="border-radius: 0px 18px 18px  0px;background-color:#e6e6e6; border:none">
                                      </div>
                                       <br>
                                        <div class="input-group pl-3 pr-3 pb-1">
                                             <div class="input-group-prepend">
                                                  <span class="input-group-text" style="font-size:24px;background-color:#e6e6e6;border:none;border-radius:18px 0px 0px 18px"><i class="fa fa-lock" style="font-size:18px" ></i> </span>
                                             </div>
                                             <input type="password" class="form-control input-lg" placeholder="Password" style="border-radius: 0px 18px 18px  0px;background-color:#e6e6e6; border:none">
                                         </div>
                                      <br>
                                        <div class="input-container pl-3 pr-3  ">
                                          <a href="#"   id="join2" class="btn p-1 btn-block" name="btn"><span id="Sign_in" class="text text-white p-1" style=" font-size:21px;letter-spacing:1px;">SIGN-IN</span>
                                          </a>
                                        </div>
                                        <br>
                                              <div class="input-container pt-2 text-center">
                                                <div class="text-center ">
                                              <p class="text-light" style="font-size:15px;word-spacing:2px;letter-spacing:1px">DON'T HAVE AN ACCOUNT?</p>

                                               <a href="registration.php" class="   text   btn btn-outline-info">
                                                <span class="text text-light" style="font-size:18px;font-family: Nanum Gothic">sign up</span>
                                              </a>

                                                 <a href="forget.php"  class="btn btn-outline-warning  " name="btn">
                                                   <span class="text" style="font-size:18px ">Forget Password?</span>
                                                 </a>

                                               </div>
                                              </div>

                                  </form>
                               </div>
                           </div>
                         </div>
                       </div>
                     </div>

 <br>

 <br><br><br>




      <div class="container-fluid">
      <center> <div id="body23"> <p class="text-center" style="font-family:Fugaz One;color: white">CONTACT <span class="text-warning">US</span></p></center>
           </div>
      </div>

</div>



<br>
<br>


<div class="container-fluid  ">
<div class="row"  style="margin:0px;padding:0px 0px 0px 0px;">
<br>

  <div class="col-md-5" >
   <div class=" container " style="background-color:#EAF0F1" >
      <br>
          <h2 class="text-capatilize"  style="font-size:30px;font-family: 'Oswald', sans-serif ;"> Contact Information</h2>
           <br>
        <div class="text" >
          <p><text class="text-dark">Address </text> : F02,Energy Plaza,Bhagalpur,Bihar </p><br>
            <p><text class="text-dark"> Phone </text> :<span  class="text-danger"> +91 7061400417</span></p><br>
              <p><text class="text-dark">Email </text> : <span  class="text-danger">sannykumar085@gmail.com </span></p> <br>
                <p class="text-dark">Website: </p><br><br>
                              <br>
         </div>
    </div>
 </div>



  <div class="col-md-7" margin:"0px">
           <div class="container-">

                       <div class="text text-dark" >
                             <?php echo "".$msg;?>
                         </div>
                         <p>
                      <form method="POST">




                            <div class="input-container  ">
                            <input class="form-control input-lg" type="text"  placeholder="Your Name" name="name" required="">
                              </div>
                               <br>

                              <div class="input-container">
                                <input class="form-control input-lg" type="email" placeholder="Your Email" name="email_id" required="" >
                              </div>
                              <br>

                              <div class="input-container">
                                <input class="form-control input-lg" type="text" placeholder="Subject" name="subject" >
                              </div>
                             <br>

                            <div class="input-container">
                               <textarea class="form-control input-lg" type="text" rows="5" placeholder="Messege"  name="message" required=""></textarea>
                              </div>
                           <br>

                             <div class="input-container">
                            <a href="#" style="text-decoration:none">
                                <button type="submit"   name="submit"  class="btn btn-lg btn-block" style="background-color:#f52f07;color:white">Send Message</button></a>
                              </div>

                      </form></p>
                      </div>

                </div>

      </div>
</div>


 <br><br><br>



<!--footer-->
<div class="jumbotron-fluid bg-dark" >
<div class="jumbotron  bg-dark" id="footer">
<div class="row">

  <div class="col-md-4" id="footer1">
    <h1 class=" text-warning" style="font-size:25px" >ABOUT US</h1>

        <a href="https://www.facebook.com/campaign/landing.php?&campaign_id=973072061&extra_1=s|c|256741341326|e|facebook|&placement=&creative=256741341326&keyword=facebook&partner_id=googlesem&extra_2=campaignid%3D973072061%26adgroupid%3D54006406691%26matchtype%3De%26network%3Dg%26source%3Dnotmobile%26search_or_content%3Ds%26device%3Dc%26devicemodel%3D%26adposition%3D1t1%26target%3D%26targetid%3Dkwd-297690534863%26loc_physical_ms%3D1007749%26loc_interest_ms%3D%26feeditemid%3D%26param1%3D%26param2%3D&gclid=Cj0KCQjwu-HoBRD5ARIsAPIPendfFmWpfabgUXhv5rnqAA5ZOgyvSaELs0G6PSxmBVjOS8WDyWAQeewaAgjZEALw_wcB"> <img src="images/fb1.png" alt=" facebook  " width="43px" height="40px"></a>
        <a href="https://www.instagram.com/?hl=en">  <img src="images/insta1.png" alt=" instagram "width="53px" height="50px"></a>

        <a href="#"> <img src="images/twitter1.png " alt="twitter" width="50px" height="47px"></a>
        <a href="#">  <img src="images/google+1.png" alt=" googleplus" width="65px" height="65px"></a>
    </div>




    <div class="col-md-4" id="footer1">
            <h1 class=" text-warning" style="font-size:25px" >SERVICES</h1>

            <p class="text text-light" >Boost Your Body</p>
          <p class="text text-light" >Achieve Your Goal</p>
          <p class="text text-light" >Analyze Your Goal</p>
        <p class="text text-light" >Improve Your Performance</p>


    </div>

    <div class="col-md-4" id="footer1">
      <div class="footer">
        <h1 class=" text-warning" style="font-size:25px" >ANY QUESTIONS?</h1>

          <p> <i class="material-icons" style="font-size:22px;color:red">location_on</i>
            <span class="text-light" style="font-size:18px;" >&nbsp203 Salt Lake Kolkata,West Bengal</span>
          </p>
            <p>
               <i class="material-icons" style="font-size:22px;color:red">call</i>
               	<span class="text-light" style="font-size:18px;" >&nbsp  +2 392 3929 210</span>
            </p>
            <p>
              <i class="material-icons" style="font-size:22px;color:red;">email</i>
              <span class="text-light"   style="font-size:18px;" >&nbsp theeneryhub02@gmail.com</span>
            </p>



    </div>




    </div>
</div>

<center><span class="text-info">Copyright ©2019 All rights reserved  <br> | This  is made by sannykumar085@gmail.com |</span>
</center>


</div>
</div>

<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


</body>
</html>
