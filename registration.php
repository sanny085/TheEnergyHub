<?php
$msg1="";
$msg2="";
$msg3="";
$wel="";
if(isset($_POST['submit']))
      {
      $Fname=$_POST['fname'];
      $Lname=$_POST['lname'];
      $Email=$_POST['email'];
      $Password=$_POST['password'];
      $RePassword=$_POST['repassword'];
      if (((strlen($Fname)>16) || (strlen($Lname)>16)) ||($Fname===$Lname))
         {
             $msg3="Please! Enter a valid Name";
         }
       elseif(strlen($Email)>30)
           {
             $msg3="Please! Enter a valid Email Id";
           }
       elseif((strlen($Password)>8) || (strlen($RePassword)>8)|| ($Password!==$RePassword))
           {
             $msg3="Password must be max 8 characters at least one Special character!";
           }
      else
         {
          $conn=mysqli_connect("localhost","id10103188_sanny","12345","id10103188_theenergyhub");
          //$db=mysql_select_db("id10103188_theenergyhub");
          $qry="insert into REGISTRATION values('$Fname','$Lname','$Email','$Password','$RePassword')";
          $exec=mysqli_query($conn,$qry);
          if($exec )
            {
              $msg1="Hi $Fname !";
              $wel="Your account has been successfully created.";

            }
          else
              {
                 $msg2="*Fill up the form";


              }

         }
}
else{
    $msg2="*Fill up the form";
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

 <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bangers|Monda|Permanent+Marker&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Fugaz+One" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<style>
#nav21,#nav27{
  font-size:18px;
  font-weight:bold;
  font-family:Nanum Gothic;
  color:#47535E;
}
#nav21:hover  {
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

@media screen and (min-width: 720px) {
  div#SLIDE_BG {

     background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url('images/bg13.jpg');
    height: 88vh;
    width:100%;
    background-repeat:no-repeat;
    backface-visibility: hidden;

    background-size:cover;
    background-position:center center;

  margin:0px;
  }
}

@media screen and (max-width: 721px) {
  div#SLIDE_BG{
    background-image: url('images/bg13.jpg');
    height: 36vh;
    width:100%;
    background-repeat:no-repeat;
    backface-visibility: hidden;

    background-size:cover;
    background-position:center center;

  margin:0px;
  }
}
@media screen and (min-width: 720px) {
  div#body1 {
    font-size:70px;
   padding:13% 0%  0% 0%;
   letter-spacing:2px;
   margin-top: 0px;
  }
}

@media screen and (max-width: 721px) {
  div#body1{
  font-size:40px;
   padding:20% 0%  2% 0%;
   letter-spacing:1px;
  }
}

/* Thick black border */
hr.new4 {
  border: 1px solid black;
}

#detail_label{
  font-size:17px;
  color:;
  font-weight: 600;
color:#0091e6;
}

#Sign_in{
  background-color:#f52f07;
  font-size: 19px;
  font-family:Oswald;
  padding:10px 0px;
  word-spacing:1px
}


@media screen and (min-width: 720px) {
  div.grp1  {
padding:2px ;
  }
}

@media screen and (max-width: 721px) {
  div.grp1{
padding:0px;
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

/*Welcoe login*/
@media screen and (min-width: 720px) {
  div.fsk123{
    font-size: 20px;
    font-weight: 300;
  }
}

@media screen and (max-width: 721px) {
  div.fsk123{
  font-size: 17px;
font-weight: 200;
  }
}


/*elogin portion*/
@media screen and (min-width: 720px) {
  div.fsk124 {
    font-size: 16px;
    font-weight: 300;
  }
}

@media screen and (max-width: 721px) {
  div.fsk124 {fsk124
  font-size: 14px;
font-weight: 200;
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
                          <a href="home.php" class="nav-link" id="nav21" >HOME</a>
                        </li>

                        <li class="nav-item">
                          <a href="product.php" class="nav-link" id="nav21" >PRODUCT</a>
                        </li>

                        <li class="nav-item">
                          <a href="program.php" class="nav-link" id="nav21" >PROGRAM</a>
                        </li>



                        <li class="nav-item">
                          <a href="schedule.php" class="nav-link" id="nav21" >SCHEDULE</a>
                        </li>

                        <li class="nav-item">
                          <a href="about.php" class="nav-link" id="nav21" >ABOUT</a>
                        </li>

                        <li class="nav-item">
                          <a href="contact.php" class="nav-link" id="nav21" >CONTACT</a>
                        </li>

                        <li class="nav-item">
                           <a href="#" class="nav-link"><span  id="nav27"  class="nav navbar-collapse navbar text-secondary navbar-toggler"  data-toggle="modal" data-target="#md1">LOGIN</span></a>
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

      <div class="container-fluid" >
     <div id="body1"><p class="text-center"  style="font-family:Fugaz One;color: white;">LOGIN / REGISTER</p>
        </div>
    </div>
</div>



 <!--GET STARTED TODAY-->

 <div class="container-fluid mt-4">
   <div class="row ">

     <div class="col-md-6 ">
       <div class="container  mt-4">
         <h2 class="text-dark text-left   "><span class="pb-2" style="font-family: 'Oswald', sans-serif ;font-size:32px;letter-spacing:1px;"><strong>GET STARTED TODAY</strong></span></h2>
          <hr  class="new4 " width="100%">


  <div class="text fsk124  " style="font-family: 'Monda', sans-serif;color:#210000;"><?php echo"".$msg3;?></div>
          <div class="text   " style="font-family: 'Monda', sans-serif; color:#0A79DF;font-size:22px;font-weight: 700;word-spacing:2px;"><?php echo"".$msg1;?></div>
            <div class="text fsk123 " style="font-family: 'Monda', sans-serif; color:#2ecc72;word-spacing:1px;"><?php echo"".$wel;?></div>


          <div class="text fsk123  " style="font-family: 'Monda', sans-serif; color:#e6ca05;word-spacing:2px;font-weight: 800;"><?php echo"".$msg2;?></div>
          <form action="registration.php" class="pt-2" method="POST">

              <div class="form-row  ">
                <div class="form-group grp1 col-md-6">
                  <label id="detail_label" >First Name</label>
                  <input style="border:0.5px solid #807f7a" type="text" class="form-control" id="inputfirstname" name="fname" required="" placeholder="first name">
                </div>


                <div class="form-group grp1  col-md-6">
                  <label id="detail_label" >Last Name</label>
                  <input  style="border:0.5px solid #807f7a" type="text" class="form-control" id="inputlastname" name="lname" required="" placeholder="last name">
                </div>
              </div>

              <div class="form-group grp1 ">
                <label for="inputEmail4" id="detail_label"  >Email / Account *</label>
                <input  style="border:0.5px solid #807f7a" type="email" class="form-control" id="inputemail" name="email" required="" placeholder="johnd0e@sample.com">
              </div>

              <div class="form-row">
                  <div class="form-group grp1  col-md-6">
                    <label for="inputPassword4 " id="detail_label" >Password * </label>
                    <input  style="border:0.5px solid #807f7a" type="password" class="form-control" id="inputpassword" name="password" required="" placeholder="********">
                  </div>

                  <div class="form-group grp1 col-md-6">
                       <label for="inputCity" id="detail_label" >Repeat Password *</label>
                      <input  style="border:0.5px solid #807f7a" type="password" class="form-control" id="inputpassword" name="repassword" required="" placeholder="********">
                 </div>
            </div>

              <button type="submit" class="btn btn-block btn-danger" name="submit" id="Sign_in"><span class="p-2" id="Sign_in1">SIGN UP<span></button>
                <p style="font-size:14px" class="text-muted pt-2 ">By clicking SIGN UP you agree to accept both the <a href="#"> Privacy Policy</a> and <a href="#">Terms of Use</a> for this site.</p>
            </form>

     </div>


    </div>
        <div class="col-md-6">
            <div class="container mt-4">
            <img src="http://dgalleria.co/wp-content/uploads/2018/09/trx-training-certification-suspension-training-certification.jpg" class="img-fluid mx-auto d-block" alt="">

            <p class="text-dark pt-4 " ><span style="font-family: 'Oswald', sans-serif ;font-size:32px;letter-spacing:1px;word-spacing:3px"><strong>MY LOCKER</strong></span>
            </p>
            <div class="media p-0">
                 <li  style="font-size:16px"></li>
                <div class="media-body">
                    <span class="text  text-justify" style="font-size:16px ;">
                       Get all the latest tips news and workouts
                    </span>
                </div>
             </div>

             <div class="media p-0">
                  <li  style="font-size:16px"></li>
                 <div class="media-body">
                     <span class="text  text-justify" style="font-size:16px ;">
                      One spot for all of your workouts and other training content
                     </span>
                 </div>
              </div>

              <div class="media p-0">
                   <li  style="font-size:16px"></li>
                  <div class="media-body">
                      <span class="text  text-justify" style="font-size:16px ;">
                        Bring your life with fresh content
                      </span>
                  </div>
               </div>








            <p class="text-dark pt-4 " ><span style="font-family: 'Oswald', sans-serif ;font-size:32px;letter-spacing:1px;word-spacing:3px"><strong>MY DIRECTORY</strong></span>
            </p>
            <div class="media p-0">
                   <li  style="font-size:16px"></li>
                  <div class="media-body">
                      <span class="text  text-justify" style="font-size:16px ;">
                       Connect with Qualified TheEnergyHub coaches
                      </span>
                  </div>
               </div>
               <div class="media p-0">
                    <li  style="font-size:16px"></li>
                   <div class="media-body">
                       <span class="text  text-justify" style="font-size:16px ;">
                        Locate the official TheEnergyHub Facilities close to you
                       </span>
                   </div>
                </div>
                <div class="media p-0">
                     <li  style="font-size:16px"></li>
                    <div class="media-body">
                        <span class="text  text-justify" style="font-size:16px ;">
                         Find the coach that’s right for you through custom profiles
                        </span>
                    </div>
                 </div>





          </div>
        </div>


 </div>
 </div>
 <br> <br><br><br><br><br>
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
