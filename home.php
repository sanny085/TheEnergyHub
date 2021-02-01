
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
<link href="https://fonts.googleapis.com/css?family=Francois+One&display=swap" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Cinzel|Maven+Pro|Monda|Orbitron|Rubik|Mono+One|Russo+One&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Maven+Pro|Rubik|Mono+One&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Rubik+Mono+One&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Fugaz+One" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <!--bootstrap 4-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">


<style>
#SLIDE_BG{
  background-image: url('images/bg1.jpg');
  height: 100vh;
  max-width:100%;
  background-repeat:no-repeat;
  backface-visibility: hidden;
  animation: slideBg 5s linear infinite 0s;
  animation-timing-function: linear;
  background-size:cover;
  background-position:center center;
  margin:0px;
}


@keyframes slideBg
{
  0%{
  background-image: url('images/bg1.jpg');
  }
  25%{
      background-image: url('images/bg2.jpg');
      }
    50%{
        background-image: url('images/bg2.jpg');
      }
          75%{
                background-image: url('images/bg1.jpg');
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


#body3{
padding:30px 0px;
}
.welcome{
  padding: 30px 0px;
}
div#fsk:hover {
     background-color:#DAE0E2;
   }


#car022,#car023,#car024,#car025,#car026,#car027,#car028,#car029,#car030,#car031,#car032,#car033{
  max-width:100%;
  margin:15px 0px;
}
#join:hover{
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
  div#body12 {
    font-size: 70px;
 padding:150px 0px 0px 0px;
  }
}

@media screen and (max-width: 721px) {
  div#body12{
    font-size:46px;
     padding:150px 0px  0px 0px;

  }
}


@media screen and (min-width: 720px) {
  div#body21 {
    font-size: 30px;
    padding:5px  ;
  }
}

@media screen and (max-width: 721px) {
  div#body21{
  font-size:25px;
padding:50px 5px;
  }
}

#Sign_in{

  font-size: 18px;
  font-family:Oswald;
  padding:10px 0px;
  word-spacing:1px
}

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


.stat{
  background-image:url('https://ak0.picdn.net/shutterstock/videos/26952190/thumb/1.jpg');
  background-attachment: fixed;
}


.stat i{
  font-size:55px;
  color:#ffffff;
}


.stat-items h2{
  font-size:38px;
  font-weight:bold;
  color:#524646;
}

h5{
  color:#c2c2c2;
  letter-spacing:1px;
  font-size:25px;

}
@media screen and (min-width: 720px) {
  div#community {
    margin:0%;
    padding-top:100px;
    padding-bottom:100px;
    padding-left:25px;
    padding-right:25px;
  }
}

@media screen and (max-width: 721px) {
  div#community{
    margin:0%;
    padding:20px;



  }
}


.media-custom {
  background: #fff;
  -webkit-transition: .2s all ease;
  -o-transition: .2s all ease;
  transition: .2s all ease;
  margin-bottom: 20px;
  position: relative;
  top: 0;
}

.media-custom > a {
  position: relative;
  overflow: hidden;
  display: inline-block;
}

.media-custom img {
  -webkit-transition: .3s all ease;
  -o-transition: .3s all ease;
  transition: .3s all ease;
}

.media-custom:focus img, .media-custom:hover img {
  -webkit-transform: scale(1.1);
  -ms-transform: scale(1.1);
  transform: scale(1.1);
}

</style>
</head>
<body>
<div id="SLIDE_BG" class="img-fluid mx-auto d-block ">
  <nav class="navbar  navbar-expand-md navbar-dark" style="padding:2px;background-color:#47535E;"  >
      <a class="navbar-brand text-light " href="#" style="font-family:'Fugaz One'; font-size:35px;padding:15px"><span class="text-info">The</span><span class="text-light">Energy</span><span class="text-warning">Hub</span></a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#fsk">
              <span class="navbar-toggler-icon  "></span>
            </button>
  </nav>

    <nav  id="navbar" class="navbar navbar-expand-md navbar-dark sticky-top"  style="padding:0px;background-color:#EAF0F1">
          <div class="collapse navbar-collapse" id="fsk" >
            <span class="mr-auto"></span>
              <ul class="navbar-nav"   style="margin:20px 0px 0px 0px;padding:0px 4px 10px 15px">
                    <li class="nav-item ">
                      <a href="home.php" class="nav-link  " id="nav21"  ><span class="text-warning"> HOME</span></a>
                    </li>

                    <li class="nav-item">
                      <a href="product.php" class="nav-link" id="nav22" >PRODUCT</a>
                    </li>

                    <li class="nav-item">
                      <a href="program.php" class="nav-link  " id="nav23" >PROGRAM</a>
                    </li>
                  <li class="nav-item">
                      <a href="schedule.php" class="nav-link  " id="nav24" >SCHEDULE</a>
                    </li>

                    <li class="nav-item">
                      <a href="about.php" class="nav-link  " id="nav25" >ABOUT</a>
                    </li>

                    <li class="nav-item">
                      <a href="contact.php" class="nav-link " id="nav26" >CONTACT</a>
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

                     <div class="modal-body  " style="background-color: rgba(51, 56, 68, .85);border-radius: 0px 0px 20px 20px" >

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


<div class="container text-center">
      <div id="body12"><center><p class="text-center"  style="font-family: 'Rubik Mono One' ;color:white ;letter-spacing:-3px;"><i>CHALLENGE <span class="text-warning">YOURSELF</span></i></p></center></div>
  </div>

  <div class="container text-center">
        <div id="body21" > <p class="text-center "   style="font-family: 'Monda', sans-serif;color:white;word-spacing:5px;">GET YOUR BODY FIT</p></div>
  </div>


</div>

<br>


<!--what we do -->
<div class="container-fluid">
    <div class="row">

        <div class="col-md-6">
           <div class="container">
                 <img src="https://colorlib.com/preview/theme/muscle/images/about.jpg"  class="img-fluid mx-auto d-block" alt="">
            </div>
        </div>
    <div class="col-md-6">
            <div class="container-fluid ">
                <br><br>
                        <h2 class="text sub-heading" style="font-family: 'Maven Pro', sans-serif; color:black;font-size:25px ;font-weight:bold;word-spacing:6px;">
                        <i>SHAPE YOUR BODY</i>
                      </h2>
        <h2  class="head" style="font-size:40px;font-family:'Francois One';line-height: 45px; font-weight:bold ">WHAT WE DO?</h2>
<div>
                    <div class="media  p-1">
                            <img src="https://cdn0.iconfinder.com/data/icons/startup-and-new-business-3/24/target-512.png" alt="YOUR GOAL" class="mr-4 mt-2 rounded" style="width:70px;">
                              <div class="media-body">
                              <h5  style="color:#2C3335;letter-spacing:1px; ">ANALYZE YOUR GOAL </h5>
                              <p> Ready to start a fitness program.Measure your fitness level with  a few simple tests.Then use the results to set fitness goals and track your progress. </p>
                            </div>

                        </div>
                  <br>
                      <div class="media  p-1">
                         <img src="https://cdn0.iconfinder.com/data/icons/fitness-and-spa-1/66/13-512.png" alt="WORK HARD" class="mr-4 mt-2 rounded " style="width:70px;">
                           <div class="media-body">
                         <h5  style="color:#2C3335;letter-spacing:1px; ">WORK HARD ON IT</h5>
                         <p> Stay true to yourself,Always be open to learn. Work hard, and never give up on your dreams, even nobody else believes they can come true but you.
                              </p>
                      </div>
                    </div>
                <br>
                    <div class="media  p-1">
                      <img src="https://png.pngtree.com/png-vector/20190215/ourlarge/pngtree-vector-speedometer-icon-png-image_533247.jpg" alt="PERFORMANCE" class="mr-4 mt-2 rounded-circle  " style="width:70px;">
                        <div class="media-body">
                        <h5  style="color:#2C3335;letter-spacing:1px; ">IMPROVE PERFORMANCE</h5>
                        <p> Including improvement in overall performance,the recognition of possible employment actions such as a transfer, demotion or termination. </p>
                      </div>
                    </div>
                 <br>
                <div class="media  p-1">
                       <img src="https://cdn0.iconfinder.com/data/icons/fitness-and-spa-1/66/4-512.png"  alt="PERFECT_BODY" class="mr-4 mt-2 rounded " style="width:70px;">
                        <div class="media-body">
                          <h5  style="color:#2C3335;letter-spacing:1px; ">ACHIEVE YOUR PERFECT BODY</h5>
                           <p> We have all done it. Tried different diets, joined new and better gyms, experimented with alternative methods of losing weight
         </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>


<!--our community-->
<div class="stat container-fluid" >
    <div class="content-box">
        <br><br>
     <div class="container">
       <div class="row text-center">

           <div class="col-md-3" id="community">
               <div class="stat-items">
                 <i class="material-icons">people</i>
               <h2>
                <span class=" text-center">34248</span><span>+</span>
                      </h2>
                 <p><h5>Happy Customers</h5></p>

             </div>
         </div>


         <div class="col-md-3" id="community">
           <div class="stat-items">
             <i class="material-icons">fitness_center</i>
             <h2>
              <span class=" text-center">45468</span><span>+</span>
              </h2>
               <p><h5>Perfect Bodies</h5></p>

           </div>
       </div>

       <div class="col-md-3" id="community">
         <div class="stat-items">
           <i class="material-icons">airline_seat_recline_normal</i>
           <h2>
            <span class=" text-center">13909</span><span>+</span>
                </h2>
             <p><h5>Working Hours</h5></p>

         </div>
     </div>

     <div class="col-md-3" id="community">
       <div class="stat-items">
         <i class="material-icons">add_a_photo</i>
         <h2>
          <span class=" text-center">9709</span><span>+</span>
              </h2>
           <p><h5>Success Stories</h5></p>

       </div>
   </div>


      </div>
    </div>
 </div>
</div>





<!-- welcome gym-->
<div class="container-fluid ">
  <div class="row">
     <div class="col-md-6" style="margin:0px;padding:0px">

       <div class ="embed-responsive embed-responsive-16by9" >
         <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/utJH2okiZGc"></iframe>
         </div>

    </div>
<div class="col-md-6">
      <div class="container ">
        <br>  <br>
        <div class="media">
          <div class="media-body">
      <h2 class="text  heading" style="font-family:Francois One;color:#2F363F;font-size:35px ;font-weight:bold; ">WELCOME TO OUR GYM</h2>
            <small>
              <span class="sub-heading text-secondary" style="font-family:'Maven Pro',sans-serif;font-size:22px ; ;font-weight:bold;word-spacing:6px;">
                   <i>ABOUT MUSCLE</i>
             </span>
          </small>
  <p class="text-justify"> Nothing stops the man who desires to achieve. Every obstacle is simply a course to develop his achievement muscle. It's a strengthening of his powers of accomplishment.  Everyone has the ability to accomplish unique feats, everyone. You choose this. Become someone great in one other life. Forget about failing to many. Who cares? Doesn't matter when you start or finish, just start, no deviations, no excuses.
    </p>
        </div>
      </div>
     <br>
   </div>
  </div>
 </div>
</div>
<br><br><br><br>



 <!--OUR COACHES-->
<div class="container-fluid" style="max-width:100%">
  <h2 class="text text-center" style="font-family:Francois One;color:#2F363F;font-size:44px ;font-weight:bold; ">OUR COACHES</h2>
  <br>
      <div class="container-fluid ">
     <div class="row">

     <div class="col-md-3">
         <div class="media d-block media-custom text-center">
           <a href="#"><img src="images/coaches1.jpg" alt="Natu Myers" class="img-fluid"></a>
         </div>
     </div>

  <div class="col-md-3" >
         <div class="media-body">
           <h3 class="card-title">Natu Myers</h3>

           <small>
             <span class="text-secondary" style="font-family:'Maven Pro',sans-serif;font-size:18px ; ;font-weight:bold;word-spacing:6px;">
                  <i>OWNER / FITNESS TRAINER</i>
            </span>
         </small>

      <p class="text-justify">Natu is a software engineer and bodybuilder. His attention to detail in the books has transitioned flawlessly into the weight room.

      If you are looking to clean up your diet and develop to that next level, then Natu is the guy to take you there.</p>
      <a href="#"> <img src="images/facebook-icon.png" alt="facebook" style="width:45px;height:45px"></a>
      <a href="#"><img src="images/instagram-icon.png" alt="instagram" style="width:45px;height:45px"></a>

              <a href="#"> <img src="images/twitter-icon.png" alt="twitter" style="width:45px;height:45px"></a>
    </div>

    </div>



       <div class="col-md-3">
           <div class="media d-block media-custom text-center">
             <a href="#"><img src="images/coaches2.jpg" alt="Joe_Pitt" class="img-fluid "></a>
           </div>
       </div>


       <div class="col-md-3" >
         <div class="media-body">
			  <h3 class="card-title">Joe Pitt</h3>

            <small>
              <span class=" text-secondary" style="font-family:'Maven Pro',sans-serif;font-size:18px ; ;font-weight:bold;word-spacing:6px;">
                   <i>FITNESS INSTRUCTOR</i>
             </span>
          </small>

       <p class="text-justify">

       Joe has spent years researching and analyzing nutrition and how diet affects the body. He is now a thriving online coach who has dedicated himself to his clients so much that he no longer competes just so he can provide the best possible service..</p>
       <a href="#"> <img src="images/facebook-icon.png" alt="facebook" style="width:45px;height:45px"></a>
        <a href="#"><img src="images/instagram-icon.png" alt="instagram" style="width:45px;height:45px"></a>

      <a href="#"> <img src="images/twitter-icon.png" alt="twitter" style="width:45px;height:45px"></a>

       </div>
</div>

</div>







     <div class="row">
       <div class="col-md-3" STYLE="padding:30PX 0PX 0PX 10PX">
         <div class="media-body">
    <h3 class="card-title">Katie Crewe</h3>

        <small>
          <span class=" text-secondary" style="font-family:'Maven Pro',sans-serif;font-size:18px  ;font-weight:bold;word-spacing:6px;">
               <i>FITNESS EXPERT (FEMALE) </i>
         </span>
      </small>

 <p class="text-justify">
Crewe is a nutritionist and she puts her skills to good use with her customized diet and lifestyle plan services. Not only does she make these services custom, but she checks in with you as accountability so you really do stick to the plan.</p>
<a href="#"> <img src="images/facebook-icon.png" alt="facebook" style="width:45px;height:45px"></a>
<a href="#"><img src="images/instagram-icon.png" alt="instagram" style="width:45px;height:45px"></a>

      <a href="#"> <img src="images/twitter-icon.png" alt="twitter" style="width:45px;height:45px"></a>
 </div>
  </div>

       <div class="col-md-3">
           <div class="media d-block media-custom text-center">
             <a href="#"><img src="images/coaches3.jpg" alt="Katie_Crewe" class="img-fluid"></a>
           </div>
       </div>

       <div class="col-md-3" STYLE="padding:30PX 0PX 0PX 10PX">
         <div class="media-body">
<h3 class="card-title">Mike Vacanti</h3>

    <small>
      <span class="text-secondary" style="font-family:'Maven Pro',sans-serif;font-size:18px;font-weight:bold;word-spacing:6px">
           <i>FITNESS TRAINER (MALE) </i>
     </span>
  </small>

<p class="text-justify">
Starting in the corporate life and switching to the fitness life.He is a bold person.

Mike is an in-person and online trainer who is here to make your life better.

He says  “I’m here to serve you and make your life better.”</p>
<a href="#"> <img src="images/facebook-icon.png" alt="facebook" style="width:45px;height:45px"></a>
<a href="#"><img src="images/instagram-icon.png" alt="instagram" style="width:45px;height:45px"></a>

  <a href="#"> <img src="images/twitter-icon.png" alt="twitter" style="width:45px;height:45px"></a>

</div>

       </div>

       <div class="col-md-3">
           <div class="media d-block media-custom text-center">
             <a href="#"><img src="images/coaches4.jpg" alt="Mike_Vacanti" class="img-fluid"></a>
           </div>
       </div>

     </div>
</div>
</div>
 <br><br><br><br><br>



 <!--WORKOUT CLASSES-->
<div class="container-fluid">
  <h2 class="text-center text-secondary" style="font-family:'Maven Pro',sans-serif;font-size:22px ;  font-weight:bold;word-spacing:6px ">
         <i>GYM CLASSES</i>
   </h2>
    <h2 class="text text-center" style="font-family:Francois One;color:#2F363F;font-size:44px ;font-weight:bold">WORKOUT CLASSES</h2>
  <br>

  <div class="container-fluid">
    <div class="row">
<div class="col-md-3">
      <div id="car" class="carousel slide" data-ride="carousel" data-interval="3000">
       <div class="carousel-inner">
   <div class="carousel-item active">
      <div class="card" id="car022">
          <div class="card-body text-center" >
          <img class="mx-auto d-block img-fluid " src="images/class1.jpg" alt="AEROBIC_CLASSES" >
          <br>
               <h4 class="card-title text-center">AEROBIC CLASSES</h4>

                <a href="#" class="btn btn-outline-danger text" id="join"><span >Join Now</span></a>
             </div>
       </div>
     </div>
      <div class="carousel-item">
        <div class="card" id="car023" >
          <div class="card-body text-center"  >
          <img class="mx-auto d-block img-fluid" src="images/class1a.jpg" alt="BODY_BUILDING"  >
            <br>
               <h4 class="card-title text-center">AEROBIC CLASSES</h4>

             <a href="#" class="btn btn-outline-danger text" id="join">Join Now</a>
             </div>
       </div>
    </div>
  <div class="carousel-item">
        <div class="card" id="car024" >
          <div class="card-body text-center">
                <img class="mx-auto d-block img-fluid " src="images/class1b.jpg" alt="YOGA_CLASSES" >
                <br>
               <h4 class="card-title text-center">AEROBIC CLASSES</h4>

                <a href="#" class="btn btn-outline-danger text" id="join">Join Now</a>
           </div>
       </div>
    </div>
  </div>

  <a class="carousel-control-prev" href="#car"   data-slide="prev">
      <span class="carousel-control-prev-icon text-dark"></span>
  </a>
    <a class="carousel-control-next" href="#car"  data-slide="next">
      <span class="carousel-control-next-icon text-dark"  ></span>
      </a>
  </div>
</div>
<div class="col-md-3">
   <div id="car01" class="carousel slide" data-ride="carousel" data-interval="3000">
    <div class="carousel-inner">
<div class="carousel-item active">
    <div class="card" id="car025">
       <div class="card-body text-center" >
       <img class="mx-auto d-block img-fluid " src="images/class2.jpg" alt="BODY_BUILDING"   >
<br>
            <h4 class="card-title text-center">BODY BUILDING</h4>
      <a href="#" class="btn btn-outline-danger text" id="join">Join Now</a>
          </div>
    </div>
  </div>
   <div class="carousel-item">
     <div class="card" id="car026" >
       <div class="card-body text-center">
       <img class="mx-auto d-block img-fluid " src="images/class2a.jpg" alt="YOGA_CLASSES"   >
         <br>
            <h4 class="card-title text-center">BODY BUILDING</h4>

          <a href="#" class="btn btn-outline-danger text" id="join">Join Now</a>
          </div>
    </div>
 </div>
<div class="carousel-item">
     <div class="card" id="car027" >
       <div class="card-body text-center">
           <img class="mx-auto d-block img-fluid " src="images/class2b.jpg" alt="WEIGHT_LIFTING">
             <br>
            <h4 class="card-title text-center">BODY BUILDING</h4>

          <a href="#" class="btn btn-outline-danger text" id="join">Join Now</a>
        </div>
    </div>
 </div>
</div>
 <a class="carousel-control-prev" href="#car01"   data-slide="prev">
   <span class="carousel-control-prev-icon text-dark"></span>
</a>
 <a class="carousel-control-next" href="#car01"  data-slide="next">
   <span class="carousel-control-next-icon text-dark"  ></span>
   </a>
</div>
</div>
<div class="col-md-3">
   <div id="car02" class="carousel slide" data-ride="carousel" data-interval="3000">
    <div class="carousel-inner">
  <div class="carousel-item active">
   <div class="card" id="car028">
       <div class="card-body text-center" >
       <img class="mx-auto d-block img-fluid " src="images/class3.jpg" alt="YOGA_CLASSES"  >
<br>
            <h4 class="card-title text-center">YOGA CLASSES</h4>
    <a href="#" class="btn btn-outline-danger text " id="join">Join Now</a>
          </div>
    </div>
  </div>
   <div class="carousel-item">
     <div class="card" id="car029" >
       <div class="card-body text-center"  >
       <img class="mx-auto d-block img-fluid " src="images/class3a.jpg" alt="WEIGHT_LIFTING" >
         <br>
            <h4 class="card-title text-center">YOGA CLASSES</h4>

          <a href="#" class="btn btn-outline-danger text" id="join">Join Now</a>
          </div>
    </div>
 </div>
<div class="carousel-item">
     <div class="card" id="car030" >
       <div class="card-body text-center">
           <img class="mx-auto d-block img-fluid " src="images/class3b.jpg" alt="AEROBIC_CLASSES"  >
             <br>
            <h4 class="card-title text-center">YOGA CLASSES</h4>

            <a href="#" class="btn btn-outline-danger text" id="join">Join Now</a>
        </div>
    </div>
 </div>

</div>
<a class="carousel-control-prev" href="#car02"   data-slide="prev">
   <span class="carousel-control-prev-icon text-dark"></span>

 </a>
 <a class="carousel-control-next" href="#car02"  data-slide="next">
   <span class="carousel-control-next-icon text-dark"  ></span>
   </a>
</div>
</div>
<div class="col-md-3">
   <div id="car03" class="carousel slide" data-ride="carousel" data-interval="2000">
    <div class="carousel-inner">


   <div class="carousel-item active">

     <div class="card" id="car031">
       <div class="card-body text-center" >
       <img class="mx-auto d-block img-fluid " src="images/class4.jpg" alt="WEIGHT_LIFTING"  >
<br>
            <h4 class="card-title text-center">WEIGHT LIFTING</h4>

          <a href="#" class="btn btn-outline-danger text" id="join">Join Now</a>
          </div>
    </div>
  </div>
   <div class="carousel-item">
     <div class="card"  id="car032">
       <div class="card-body text-center"  >
       <img class="mx-auto d-block img-fluid " src="images/class4a.jpg" alt="AEROBIC_CLASSES">
         <br>
            <h4 class="card-title text-center">WEIGHT LIFTING</h4>

          <a href="#" class="btn btn-outline-danger text" id="join">Join Now</a>
          </div>
    </div>
 </div>
 <div class="carousel-item">
   <div class="card"  id="car033">
     <div class="card-body text-center"  >
     <img class="mx-auto d-block img-fluid " src="images/class4b.jpg" alt="AEROBIC_CLASSES">
       <br>
          <h4 class="card-title text-center">WEIGHT LIFTING</h4>

        <a href="#" class="btn btn-outline-danger text" id="join">Join Now</a>
        </div>
  </div>
</div>
</div>
<a class="carousel-control-prev" href="#car03"   data-slide="prev">
   <span class="carousel-control-prev-icon text-dark"></span>

 </a>
 <a class="carousel-control-next" href="#car03"  data-slide="next">
   <span class="carousel-control-next-icon text-dark"  ></span>
   </a>
</div>
</div>
</div>
</div>
</div><br>



<!--more program-->
<div class="container-fluid" style="margin:100px 0px">
  <div class="conatiner">
  <div class="d-flex justify-content-around  mb-3">
      <div class="p-3" style="background-color:#f01313">
        <a href="product.php" style="text-decoration:none;font-family: 'Monda', sans-serif">
           <span class="text-center text-light  " style="font-size:13px">PRODUCT</span>
       </a>
      </div>
      <div class="p-3" style="background-color:#f01313">
        <a href="program.php" style="text-decoration:none;font-family: 'Monda', sans-serif">
              <span  class="text-center   text-light"  style="font-size:13px">MORE PROGRAM</span>
        </a>
      </div>

      <div class="p-3" style="background-color:#f01313">
        <a href="contact.php" style="text-decoration:none;font-family: 'Monda', sans-serif">
            <span class="text-center  text-light"  style="font-size:13px" >CONTACT US</span>
        </a>
      </div>
  </div>
</div>
</div>
<br>
<!--footer-->
<div class="jumbotron-fluid bg-dark">
  <div class="jumbotron  bg-dark" id="footer">
  <div class="row">
    <div class="col-md-4" id="footer1">
      <h1 class=" text-warning" style="font-size:25px" >ABOUT US</h1>

          <a href="https://www.facebook.com/campaign/landing.php?&campaign_id=973072061&extra_1=s+c+256741341326+e+facebook+&placement=&creative=256741341326&keyword=facebook&partner_id=googlesem&extra_2=campaignid%3D973072061%26adgroupid%3D54006406691%26matchtype%3De%26network%3Dg%26source%3Dnotmobile%26search_or_content%3Ds%26device%3Dc%26devicemodel%3D%26adposition%3D1t1%26target%3D%26targetid%3Dkwd-297690534863%26loc_physical_ms%3D1007749%26loc_interest_ms%3D%26feeditemid%3D%26param1%3D%26param2%3D&gclid=Cj0KCQjwu-HoBRD5ARIsAPIPendfFmWpfabgUXhv5rnqAA5ZOgyvSaELs0G6PSxmBVjOS8WDyWAQeewaAgjZEALw_wcB"> <img src="images/fb1.png" alt="facebook" style="width:43px;height:40px"></a>
          <a href="https://www.instagram.com/?hl=en">  <img src="images/insta1.png" alt="instagram" style="width:53px;height:50px"></a>

          <a href="#"> <img src="images/twitter1.png " alt="twitter" style="width:50px;height:47px"></a>
          <a href="#">  <img src="images/google+1.png" alt="googleplus" style="width:65px;height:65px"></a>
      </div>
      <div class="col-md-4" id="footer2">
           <h1 class=" text-warning" style="font-size:25px" >SERVICES</h1>
              <p class="text text-light" >Boost Your Body</p>
            <p class="text text-light" >Achieve Your Goal</p>
            <p class="text text-light" >Analyze Your Goal</p>
          <p class="text text-light" >Improve Your Performance</p>
      </div>
      <div class="col-md-4" id="footer3">
        <div class="footer">
          <h1 class=" text-warning" style="font-size:25px" >ANY QUESTIONS?</h1>

            <p> <i class="material-icons" style="font-size:22px;color:red">location_on</i>
              <span class="text-light" style="font-size:18px" >&nbsp;203 Salt Lake Kolkata,West Bengal</span>
            </p>
              <p>
                 <i class="material-icons" style="font-size:22px;color:red">call</i>
                 	<span class="text-light" style="font-size:18px" >&nbsp;  +2 392 3929 210</span>
              </p>
              <p>
                <i class="material-icons" style="font-size:22px;color:red;">email</i>
                <span class="text-light"   style="font-size:18px" >&nbsp; theeneryhub02@gmail.com</span>
              </p>
        </div>
     </div>
  </div>
<div class="container-fluid">
<p class="text-center text-info">Copyright &copy;2019 All rights reserved  <br> | This  is made by sannykumar085@gmail.com |</p>
</div>
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
