<!DOCTYPE html>
<html lang="en">

<head>
  <title>TheEnergyHub</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" type="image/gif" href="https://cdn2.iconfinder.com/data/icons/health-exercise/64/1-512.png">

<link href="https://fonts.googleapis.com/css?family=Bangers|Monda|Permanent+Marker&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Rubik+Mono+One&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Cairo|Monda|Orbitron&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Cairo|Orbitron&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Fugaz+One" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/stylesschedule.css">



<style>

  #SLIDE_BG{
    background-image: url('images/bg5.jpg');
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

    background-image: url('images/bg5.jpg');

    }

    25%{
        background-image: url('images/bg7.jpg');

      }

      50%{
          background-image: url('images/bg7.jpg');

        }

    75%{
      background-image: url('images/bg5.jpg');
    }

  }


  #nav21,#nav22,#nav23,#nav24,#nav25,#nav26,#nav27{
    font-size:18px;
    font-weight:bold;
    font-family:Nanum Gothic;
    color:#47535E;
  }
  #nav21:hover,#nav22:hover,#nav23:hover,#nav24:hover,#nav25:hover,#nav26:hover {
    color:#FAC42F;
    text-shadow: -1px  -1px 0 #2F363F;
  }


  #sign{
    margin:10px ;
  }
  #footer{
    margin:0px 0px 0px 0px;
  }

  #footer1,#footer2,#footer3
  {
  margin:0px 0px 30px 0px;
  }




div#fsk:hover {background-color:#DAE0E2;}
  #join1 {
    background-color: #f52f07;
  }
#classes-name{
  text-decoration:none;
}

#join2 {
  background-color: #f52f07;
}



.sticky{
  position: fixed;
  top: 0;
  width: 100%;
}
@media screen and (min-width: 720px) {
  div#body21 {
    font-size: 70px;
     padding: 150px 0px 0px 0px;
  }
}

@media screen and (max-width: 721px) {
  div#body21{

  font-size:60px ;
   padding: 150px 0px 0px 0px;
  }
}

@media screen and (min-width: 720px) {
  div#body22 {
    font-size:26px;
    padding:5px 0px;
  }
}

@media screen and (max-width: 721px) {
  div#body22{


  font-size:23px;
padding:12px 0px;
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
  <div id="SLIDE_BG" class="img-fluid mx-auto d-block ">
    <nav class="navbar  navbar-expand-md navbar-dark" style="padding:2px;background-color:#47535E;">
        <a class="navbar-brand text-light" href="#" style="font-family:'Fugaz One'; font-size:35px;padding:15px"><span class="text-info">The</span><span class="text-light">Energy</span><span class="text-warning">Hub</span></a>
              <button class="navbar-toggler" data-toggle="collapse" data-target="#fsk">
                <span class="navbar-toggler-icon  "></span>
              </button>
    </nav>
        <nav  id="navbar" class="navbar   navbar-expand-md navbar-dark sticky-top "  style="padding:0px;background-color:#EAF0F1">
            <div class="collapse navbar-collapse" id="fsk" >
              <span class="mr-auto"></span>
                    <ul class="navbar-nav"   style="margin:20px 0px 0px 0px;padding:0px 4px 10px 15px">
                      <li class="nav-item ">
                        <a href="home.php" class="nav-link" id="nav21" >HOME</a>
                      </li>

                      <li class="nav-item">
                        <a href="product.php" class="nav-link" id="nav22" >PRODUCT</a>
                      </li>

                      <li class="nav-item">
                        <a href="program.php" class="nav-link" id="nav23" >PROGRAM</a>
                      </li>
                    <li class="nav-item">
                        <a href="schedule.php" class="nav-link" id="nav24" ><span class="text-warning">SCHEDULE</span></a>
                      </li>

                      <li class="nav-item">
                        <a href="about.php" class="nav-link" id="nav25" >ABOUT</a>
                      </li>

                      <li class="nav-item">
                        <a href="contact.php" class="nav-link" id="nav26" >CONTACT</a>
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



<div class="container-fluid">
  <div class="row"  >
  <div class="container">
  <center> <div id="body21"> <p class="text-center" style="font-family:Fugaz One;color: white;letter-spacing:1px">SCHEDULE</p></center>
       </div>
  </div>



    <div class="container">
          <div id="body22">    <p class="text-center"  style="font-family: 'Monda', sans-serif;color:white;word-spacing:2px;"><span style="background-color:#636262;padding:7px  ">FIND THE HEALTHY WAY</span></p>
    </div>
  </div>

   </div>
  </div>
</div>





<!--schedule-->
<section class="ftco-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12 ftco-animate">
        <div class="sched-list">
          <table class="table">
            <thead class="thead-primary">
              <tr class="text-center">
                <th>&nbsp;</th>
                <th>Monday</th>
                <th>Tuesday</th>
                <th>Wednesday</th>
                <th>Thursday</th>
                <th>Friday</th>
                <th>Saturday</th>
                <th>Sunday</th>
              </tr>
            </thead>
            <tbody>
              <tr class="text-center">
                <td class="color">
                  <p class="time">6:00am</p>
                </td>

                <td class="color-1">
                  <h3><a href="#" id="classes-name">Morning Flow</a></h3>
                  <span class="at">Regular Sequence</span>
                  <p class="time">6:00am - 8:30am</p>
                  <span class="trainer">(Manish,Sneha)</span>
                </td>

                <td class="color-1">
                  <h3><a href="#" id="classes-name">Cardio Program</a></h3>
                  <span class="at">Weight Loss</span>
                  <span class="at">Skipping</span>
                  <p class="time">6:00am - 8:30am</p>
                  <span class="trainer" style="letter-spacing:1px">(Anpurna,Deepak)</span>
                </td>

                <td class="color-2">
                  <h3><a href="#" id="classes-name">Body Building</a></h3>
                  <span class="at">Weight gain</span>
                  <span class="at">Weight Loss</span>
                  <p class="time">6:00am - 8:30am</p>
                  <span class="trainer" style="letter-spacing:1px">(Rajhansh,jack)</span>
                </td>

                <td class="color-3">
                  <h3><a href="#" id="classes-name">Bicep Pro</a></h3>
                  <span class="at">Weight Loss</span>
                  <p class="time">6:00am - 8:30am</p>
                  <span class="trainer">(Mike Vacanti)</span>
                </td>

                <td class="color-1">
                  <h3><a href="#" id="classes-name">Leg Strengthening</a></h3>
                  <span class="at">Weight Loss</span>
                  <p class="time">6:00am - 8:30am</p>
                  <span class="trainer">(Maricar Collins)</span>
                </td>

                <td class="color-4">
                  <h3><a href="#" id="classes-name">Muscle Relax</a></h3>
                  <span class="at">Weight Loss</span>
                  <p class="time">6:00am - 9:00am</p>
                  <span class="trainer">(Natu Myers)</span>
                </td>

                <td class="color-5">
                  <h3><a href="#" id="classes-name">Yoga Program</a></h3>
                  <span class="at">Weight Loss</span>
                  <p class="time">6:30am - 10:30am</p>
                  <span class="trainer">(Katie Crewe)</span>
                </td>
              </tr><!-- END TR-->

              <tr class="text-center">
                <td class="color">
                  <p class="time">3:00pm</p>
                </td>

                <td class="color-1">
                </td>

                <td class="color-2">
                  <h3><a href="#" id="classes-name">Cardio Program</a></h3>
                  <span class="at">Weight Loss</span>
                  <span class="at">Skipping</span>
                  <p class="time">3:00pm - 5:30pm</p>
                  <span class="trainer" style="letter-spacing:1px">(Anpurna,Deepak)</span>
                </td>

                <td class="color-3">
                  <h3><a href="#" id="classes-name">Body Building</a></h3>
                  <span class="at">Weight gain</span>
                  <span class="at">Weight Loss</span>
                  <p class="time">3:00pm - 5:30pm</p>
                  <span class="trainer" style="letter-spacing:1px">(Rajhansh,jack)</span>
                  </td>

                <td class="color-3">
                </td>

                <td class="color-1">
                  <h3><a href="#" id="classes-name">Leg Strengthening</a></h3>
                  <span class="at">Weight Loss</span>
                  <p class="time">3:00pm - 5:30pm</p>
                  <span class="trainer">(Maricar Collins)</span>
                  </td>

                <td class="color-5">
                  <h3><a href="#" id="classes-name">Muscle Relax</a></h3>
                  <span class="at">Weight Loss</span>
                  <p class="time">3:00pm - 5:00pm</p>
                  <span class="trainer">(Natu Myers)</span>
                  </td>

                <td class="color-4">
                  <h3><a href="#" id="classes-name">Yoga Program</a></h3>
                  <span class="at">Weight Loss</span>
                  <p class="time">3:00pm - 5:30pm</p>
                  <span class="trainer">(Katie Crewe)</span>
                </td>
              </tr><!-- END TR-->

              <tr class="text-center">
                <td class="color">
                  <p class="time">7:00pm</p>
                </td>

                <td class="color-3">
                  <h3><a href="#" id="classes-name">Evening Flow</a></h3>
                  <span class="at">Regular Sequence</span>
                  <p class="time">7:00pm - 9:00pm</p>
                  <span class="trainer">(Manish,Sneha)</span>
            </td>

                <td class="color-1">
                  <h3><a href="#" id="classes-name">Cardio Program</a></h3>
                  <span class="at">Weight Loss</span>
                  <span class="at">Skipping</span>
                  <p class="time">7:00pm - 9:00pm</p>
                  <span class="trainer" style="letter-spacing:1px">(Anpurna,Deepak)</span>
                  </td>

                <td class="color-2">
                  <h3><a href="#" id="classes-name" >Body Building</a></h3>
                  <span class="at">Weight gain</span>
                  <span class="at">Weight Loss</span>
                  <p class="time">7:00pm - 9:00pm</p>
                  <span class="trainer" style="letter-spacing:1px">(Rajhansh,jack)</span>
                    </td>

                <td class="color-1">
                  <h3><a href="#" id="classes-name">Bicep Pro</a></h3>
                  <span class="at">Weight Loss</span>
                  <p class="time">7:00pm - 9:00pm</p>
                  <span class="trainer">(Mike Vacanti)</span>
                </td>

                <td class="color-1">
                  <h3><a href="#" id="classes-name">Leg Strengthening</a></h3>
                  <span class="at">Weight Loss</span>
                  <p class="time">7:00pm - 9:00pm</p>
                  <span class="trainer">(Maricar Collins)</span>
                </td>

                <td class="color-4">
                  <h3><a href="#" id="classes-name">Muscle Relax</a></h3>
                  <span class="at">Weight Loss</span>
                  <p class="time">7:00pm -9:00pm</p>
                  <span class="trainer">(Natu Myers)</span>
                  </td>

                <td class="color-5">
                  <h3><a href="#" id="classes-name">Yoga Program</a></h3>
                  <span class="at">Weight Loss</span>
                  <p class="time">7:00pm - 9:00pm</p>
                  <span class="trainer">(Katie Crewe)</span>

                </td>
              </tr><!-- END TR-->

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>








<!--footer-->

<div class="jumbotron-fluid bg-dark"  >
  <div class="jumbotron bg-dark" id="footer" >
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
 <script src="js/jquery.min.js"></script>
 <script src="js/jquery-migrate-3.0.1.min.js"></script>
 <script src="js/jquery.waypoints.min.js"></script>
 <script src="js/jquery.stellar.min.js"></script>
 <script src="js/owl.carousel.min.js"></script>
 <script src="js/aos.js"></script>
 <script src="js/scrollax.min.js"></script>
 <script src="js/main.js"></script>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


</body>
</html>
