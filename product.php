<!DOCTYPE html>
<html lang="en">
<head>
    <title>TheEnergyHub</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="https://fonts.googleapis.com/css?family=Francois+One&display=swap" rel="stylesheet">
  <link rel="icon" type="image/gif" href="https://cdn2.iconfinder.com/data/icons/health-exercise/64/1-512.png">
  <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Bangers|Monda|Permanent+Marker&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Cinzel|Maven|Pro+Monda|Orbitron|Rubik|Mono+One|Russo+One&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Maven|Pro|Rubik|Mono+One&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Rubik|Mono+One&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Fugaz+One" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
<!--Boostrap 4.3.1-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
</script>
<style>
#SLIDE_BG{
  background-image:   url('images/bg4.jpg');
  height: 100vh;
  width:100%;
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
  background-image:   url('images/bg4.jpg');
  }

  25%{
      background-image:   url('images/bg3.jpg');
      }
    50%{
        background-image:   url('images/bg3.jpg');
      }
75%{
       background-image:   url('images/bg4.jpg');  }
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
#body1{
padding:30px 0px;
}
#body2{
padding:30px 0px;
}
#body3{
padding:30px 0px;
}

div#fsk:hover {background-color:#DAE0E2;}
#col1,#col2,#col3,#col4{
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

#col1:hover{  box-shadow: 0 0px 0px 1.5px rgba(0, 0, 0, 0.2);}
#col2:hover{  box-shadow: 0 0px 0px 1.5px rgba(0, 0, 0, 0.2);}
#col3:hover{  box-shadow: 0  0px 0px 1.5px rgba(0, 0, 0, 0.2);}

#col4:hover{
  box-shadow: 0 0px 0px 1.5px rgba(0, 0, 0, 0.2);
}
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
  div#body21 {
     font-size: 28px;
     padding:15px 0px 0px 0px
  }
}

@media screen and (max-width: 721px) {
  div#body21{
  font-size:22px;
  padding:8px 0px 0px 0px
  }
}


@media screen and (min-width: 720px) {
  div#body22 {
 max-width:100%;height:194px;
  }
}

@media screen and (max-width: 721px) {
  div#body22{

  max-width:90%;height:180px;
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

/*SHOP NOW*/
@media screen and (min-width: 600px) {
  a#shop_now {
      background-color:#f5db18;
     color:black;
     font-size:14px;
     letter-spacing:1px;
    font-weight:600;
  }
}

@media screen and (max-width: 601px) {
  a#shop_now{
      background-color:#f5db18;
      color:black;
      font-size:11px;
      letter-spacing:1px;
      font-weight:600;
  }
}

/*SHOP NOW*/
@media screen and (min-width: 600px) {
  a#shop_now1 {
      background-color:#f5db18;
     color:black;
     font-size:13px;
     font-weight:600;
letter-spacing:1px;
margin-top:5px;
  }
}

@media screen and (max-width: 601px) {
  a#shop_now1{
      background-color:#f5db18;
      color:black;
      font-size:10px;
    font-weight:600;
letter-spacing:1px;
margin-top:2px;
  }
}



/*value name of card product*/
 @media screen and (min-width: 700px) {
  #value {
     font-size:19px;
     font-weight:600;
  }
}

@media screen and (max-width: 701px) {
  #value{
     font-size:15px;
     font-weight:500;
  }
}

/*value equipment name of card product*/
 @media screen and (min-width: 700px) {
  #value12 {
     font-size:17px;
     font-weight:600;
  }
}

@media screen and (max-width: 701px) {
  #value12{
     font-size:14px;
     font-weight:500;
  }
}

/*carrd row*/
@media screen and (min-width: 700px) {
  div#row-scroll {
    max-width:100%;
      max-height:360px;
      overflow-x: scroll;
      overflow-y: hidden;
      white-space:nowrap;
  }
}

@media screen and (max-width: 701px) {
  div#row-scroll{
       max-width:100%;
       max-height:410px;
       overflow-x: scroll;
       overflow-y: hidden;
         white-space:nowrap;

  }
}



#row-scroll::-webkit-scrollbar {
  display: none;
}
/*card*/
@media screen and (min-width: 700px) {
  div#col1 {
    width:25%;
      height: 92%;
      display: inline-block;
      padding-bottom: 5px;
  }
}


@media screen and (max-width: 701px) {
  div#col1{
         max-width:43%;
         height: 95%;
         display: inline-block;
         padding-bottom:  5px;
  }
}

/*poster_header*/
@media screen and (min-width: 700px) {
  #poster_header {
    font-size:30px;
    font-weight:500;
    font-family:monda;
  }
}


@media screen and (max-width: 701px) {
  #poster_header{
          font-size:24px;
          font-weight:550;
            font-family:monda;
  }
}

/*price*/
@media screen and (min-width: 700px) {
  #price{
    font-size:15px;
    font-weight:550;
      font-family:monda;

  }
}


@media screen and (max-width: 701px) {
  #price{
          font-size:12px;
          font-weight:550;
            font-family:monda;
  }
}
/*card equipment*/
@media screen and (min-width: 700px) {
  div#col2 {
    width:18%;
      height: 92%;
      display: inline-block;
      padding-bottom: 5px;
  }
}


@media screen and (max-width: 701px) {
  div#col2{
         max-width:32%;
         height: 95%;
         display: inline-block;
         padding-bottom:  5px;
  }
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
      <nav  id="navbar" class="navbar   navbar-expand-md navbar-dark sticky-top "  style="padding:0px;background-color:#EAF0F1">
          <div class="collapse navbar-collapse" id="fsk" >
            <span class="mr-auto"></span>
                      <ul class="navbar-nav"   style="margin:20px 0px 0px 0px;padding:0px 4px 10px 15px">
                    <li class="nav-item">
                      <a href="home.php" class="nav-link " id="nav21" >HOME</a>
                    </li>
                    <li class="nav-item">
                      <a href="product.php" class="nav-link " id="nav22" ><span class="text-warning">PRODUCT</span></a>
                    </li>
                    <li class="nav-item">
                      <a href="program.php" class="nav-link " id="nav23" >PROGRAM</a>
                    </li>
                    <li class="nav-item">
                      <a href="schedule.php" class="nav-link " id="nav24" >SCHEDULE</a>
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

                               <div class="modal-body" style="background-color: rgba(51, 56, 68, .85);border-radius: 0px 0px 20px 20px" >

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
<!--banner upper-->
  <div class="container">
      <div class="row">
           <div class="col-md-6 text-center">
             <div  id="body22">
                <img src="https://www.gymsource.com/media/original/images/landing/201906/summer-msg.png" class="mx-auto d-block img-fluid" alt="summer_sale" >
            </div>
             <div id="body21"><p class="text-white text-center" style="word-spacing:-2px"><strong>Up to 45% off fitness favorites</strong></p></div>

                <a href="#hotdeals" class="btn btn-warning ">Get hot deals</a>
           </div>
             <div class="col-md-3"></div>
             <div class="col-md-3"></div>
      </div>
  </div>
</div>
<br>
<!--search bar-->
<div class="container input-group md-form form-sm form-2 pl-0">
 <input class="form-control my-0 py-1 lime-border"  id="myInput" type="text" placeholder="Search" aria-label="Search">
  <div class="input-group-append">
    <span class="input-group-text" >
      <i class="fas fa-search " aria-hidden="true"></i>
    </span>
  </div>
</div>


<!--featured product-->
<div class="container-fluid" id="myDIV">
  <div class="container-fluid " style="margin:24px 0px 15px 0px">

        <h2 class="text-left header" id="poster_header" >Featured Products</h2>

  </div>
  <div class=" container-fluid">


      <div  id="row-scroll" class="pb-2">

      <div class="card  "  id="col1">


          <div class="card-body">
            <a href="https://www.amazon.com/XTERRA-Fitness-TR150-Folding-Treadmill/dp/B01M0L0D90/ref=sxin_0_ac_d_pm?keywords=treadmill&pd_rd_i=B01M0L0D90&pd_rd_r=c52c060b-0bda-494b-848d-2a4b8c1f97e5&pd_rd_w=kxsya&pd_rd_wg=67cBg&pf_rd_p=be5d8dec-444e-4770-91df-1e16a8c46da8&pf_rd_r=80TZ51WSR2V3QAMVNJVN&qid=1562610311&s=hpc-intl-ship">
            <img class="img-fluid mx-auto d-block" src="https://images-na.ssl-images-amazon.com/images/I/81IUB4l-9KL._SL1500_.jpg" alt="Card image cap">
          </a>

                  <h6 id="value"><a href="https://www.amazon.com/XTERRA-Fitness-TR150-Folding-Treadmill/dp/B01M0L0D90/ref=sxin_0_ac_d_pm?keywords=treadmill&pd_rd_i=B01M0L0D90&pd_rd_r=c52c060b-0bda-494b-848d-2a4b8c1f97e5&pd_rd_w=kxsya&pd_rd_wg=67cBg&pf_rd_p=be5d8dec-444e-4770-91df-1e16a8c46da8&pf_rd_r=80TZ51WSR2V3QAMVNJVN&qid=1562610311&s=hpc-intl-ship"
                    class="card-title stretched-link" style="text-decoration:none">Treadmill</a>
                  </h6>
                    <p class="text-dark card-subtitle">
                    <span class="text-dark" id="price">Above &#8377;23,531</span>
                      <a id="shop_now" href="#" class="btn-sm btn  float-right "><span style="font-family: 'Oswald', sans-serif ;">SHOP NOW</span></a>
                    </p>

              </div>
        </div>

     <div class="card"  id="col1">

      <div class="card-body ">
        <a href="https://www.amazon.com/Schwinn-100515-270-Recumbent-Bike/dp/B01MS7EWR9/ref=sxin_0_ac_d_pm?keywords=gym+bike&pd_rd_i=B01MS7EWR9&pd_rd_r=bd68bac3-71c5-48de-8a9c-c06dfd931832&pd_rd_w=CssfZ&pd_rd_wg=HOu41&pf_rd_p=be5d8dec-444e-4770-91df-1e16a8c46da8&pf_rd_r=4FR65X10ANRXWG2CKT99&qid=1562611393&s=hpc-intl-ship">
        <img class="img-fluid mx-auto d-block" src="https://images-na.ssl-images-amazon.com/images/I/81NxLxJEqGL._SL1500_.jpg" alt="Card image cap">
        </a>

              <h6 id="value"><a href="https://www.amazon.com/Schwinn-100515-270-Recumbent-Bike/dp/B01MS7EWR9/ref=sxin_0_ac_d_pm?keywords=gym+bike&pd_rd_i=B01MS7EWR9&pd_rd_r=bd68bac3-71c5-48de-8a9c-c06dfd931832&pd_rd_w=CssfZ&pd_rd_wg=HOu41&pf_rd_p=be5d8dec-444e-4770-91df-1e16a8c46da8&pf_rd_r=4FR65X10ANRXWG2CKT99&qid=1562611393&s=hpc-intl-ship"
                class="card-title stretched-link" style="text-decoration:none" >Cycling</a>
              </h6>
               <p class="text-dark card-subtitle">
                <span class="text-dark" id="price">Above &#8377;27,442</span>
                <a id="shop_now" href="#" class="btn-sm btn   float-right "><span style="font-family: 'Oswald', sans-serif ;">SHOP NOW</span></a>
              </p>
          </div>
    </div>

 <div class="card"  id="col1">
      <div class="card-body">
        <a href="https://www.amazon.com/gp/slredirect/picassoRedirect.html/ref=sspa_dk_detail_4?ie=UTF8&adId=A09484893VNCF8OF6VP1G&qualifier=1562612009&id=310944539256490&widgetName=sp_detail&url=%2Fdp%2FB07GDJG324%2Fref%3Dsspa_dk_detail_4%3Fpsc%3D1%26pd_rd_i%3DB07GDJG324%26pd_rd_w%3DRtiw4%26pf_rd_p%3D8a8f3917-7900-4ce8-ad90-adf0d53c0985%26pd_rd_wg%3DWgSiK%26pf_rd_r%3DDQY0Y7Z1ZPE3JJSMYKAP%26pd_rd_r%3Dacdfc457-a1b1-11e9-b928-890269d88dbc">
        <img class="img-fluid mx-auto d-block" src="https://images-na.ssl-images-amazon.com/images/I/71ywsRjqf5L._SL1500_.jpg" alt="Card image cap">
      </a>
              <h6 id="value"><a href="https://www.amazon.com/gp/slredirect/picassoRedirect.html/ref=sspa_dk_detail_4?ie=UTF8&adId=A09484893VNCF8OF6VP1G&qualifier=1562612009&id=310944539256490&widgetName=sp_detail&url=%2Fdp%2FB07GDJG324%2Fref%3Dsspa_dk_detail_4%3Fpsc%3D1%26pd_rd_i%3DB07GDJG324%26pd_rd_w%3DRtiw4%26pf_rd_p%3D8a8f3917-7900-4ce8-ad90-adf0d53c0985%26pd_rd_wg%3DWgSiK%26pf_rd_r%3DDQY0Y7Z1ZPE3JJSMYKAP%26pd_rd_r%3Dacdfc457-a1b1-11e9-b928-890269d88dbc"
                class="card-title stretched-link" style="text-decoration:none" >Roller</a>
              </h6>
              <p class="text-dark card-subtitle">
                <span class="text-dark" id="price" >Above &#8377;959.81</span>
                <a id="shop_now" href="#" class="btn-sm btn float-right "><span style="font-family: 'Oswald', sans-serif ;">SHOP NOW</span></a>
              </p>
          </div>
    </div>

 <div class="card"  id="col1">
      <div class="card-body">
        <a href="https://www.amazon.com/Magnetic-Elliptical-Machine-Trainer-Sunny/dp/B002R8CPRY/ref=sr_1_3?crid=24Y1ZL6SFM35Z&keywords=eliptical+exercise+machine&qid=1562612371&s=gateway&sprefix=eliptical%2Caps%2C499&sr=8-3">
        <img class="img-fluid mx-auto d-block" src="https://images-na.ssl-images-amazon.com/images/I/81FfxAS-jTL._SL1500_.jpg" alt="Card image cap">
      </a>
              <h6 id="value"><a href="https://www.amazon.com/Magnetic-Elliptical-Machine-Trainer-Sunny/dp/B002R8CPRY/ref=sr_1_3?crid=24Y1ZL6SFM35Z&keywords=eliptical+exercise+machine&qid=1562612371&s=gateway&sprefix=eliptical%2Caps%2C499&sr=8-3"
                class="card-title stretched-link" style="text-decoration:none" >Elliptical</a>
              </h6>
              <p  class="text-dark card-subtitle">
                <span class="text-dark" id="price">Above &#8377;9,604</span>
                <a id="shop_now" href="#" class="btn-sm btn float-right "><span style="font-family: 'Oswald', sans-serif ;">SHOP NOW</span></a>
              </p>
          </div>
    </div>


</div>
</div>
</div>

<br>

<!--Best Selling Products-->
<div class="container-fluid pt-1 pb-3"  style="background-color:#f2f2f2" id="myDIV">
  <div class="container-fluid  pt-3" >
         <h2 class="text-left header" id="poster_header" >Best Selling Products </h2>

    <br>
  </div>
  <div class="container-fluid" >
   <div  id="row-scroll" class="pb-2" >
         <div class="card"  id="col1">
          <div class="card-body">
            <a href="https://www.amazon.in/Vector-VXF-684-Skipping-Rope/dp/B015E1JVN6/ref=lp_3404669031_1_4?s=sports&ie=UTF8&qid=1562652879&sr=1-4">
            <img class="img-fluid mx-auto d-block" src="https://images-na.ssl-images-amazon.com/images/I/5172%2BsxfAYL.jpg" alt="Card image cap">
          </a>
                  <h6 id="value"><a href=" https://www.amazon.in/Vector-VXF-684-Skipping-Rope/dp/B015E1JVN6/ref=lp_3404669031_1_4?s=sports&ie=UTF8&qid=1562652879&sr=1-4"
                    class="card-title stretched-link" style="text-decoration:none">Rope</a>
                  </h6>
                  <p  class="text-dark card-subtitle">
                    <span class="text-dark" id="price">Price:	₹155.00 </span>
                    <a id="shop_now" href="#" class="btn-sm btn float-right "><span style="font-family: 'Oswald', sans-serif ;">SHOP NOW</span></a>
                  </p>
                </div>
        </div>
  <div class="card"  id="col1">
      <div class="card-body">
        <a href="https://www.amazon.in/AURION-HANDGRIP1040-Adjustable-Hand-Multicolor/dp/B01N6KYJWS/ref=sr_1_5?keywords=wrist+exercise&qid=1562649699&s=gateway&sr=8-5">
           <img class="img-fluid mx-auto d-block" src="https://images-na.ssl-images-amazon.com/images/I/61zR-oP%2BEtL._SL1242_.jpg" alt="Card image cap">
        </a>
              <h6 id="value"><a href="https://www.amazon.in/AURION-HANDGRIP1040-Adjustable-Hand-Multicolor/dp/B01N6KYJWS/ref=sr_1_5?keywords=wrist+exercise&qid=1562649699&s=gateway&sr=8-5"
                class="card-title stretched-link" style="text-decoration:none;word-spacing:-3px">Hand Grip</a>
              </h6>
              <p class="text-dark card-subtitle">
                  <span class="text-dark" id="price">Price:	₹215.00</span>
                 <a id="shop_now" href="#" class="btn-sm btn  float-right "><span style="font-family: 'Oswald', sans-serif ;">SHOP NOW</span></a>
              </p>
          </div>
    </div>
   <div class="card"  id="col1">
      <div class="card-body">
        <a href="https://www.amazon.in/EasyHealth-Trimmer-Waist-Trimmer-Abs-Exerciser-Body-Multipurpose/dp/B01N7E3E21/ref=sr_1_4?keywords=waist+reducer&qid=1562650303&s=sports&sr=1-4">
          <img class="img-fluid mx-auto d-block" src="https://images-na.ssl-images-amazon.com/images/I/61CKc87natL._SL1000_.jpg" alt="Card image cap">
       </a>
              <h6 id="value"><a href="https://www.amazon.in/EasyHealth-Trimmer-Waist-Trimmer-Abs-Exerciser-Body-Multipurpose/dp/B01N7E3E21/ref=sr_1_4?keywords=waist+reducer&qid=1562650303&s=sports&sr=1-4"
                class="card-title stretched-link" style="text-decoration:none">Tummy</a>
              </h6>
              <p class="text-dark card-subtitle">
                <span class="text-dark" id="price">Price: ₹375.00</span>
                <a id="shop_now" href="#" class="btn-sm btn float-right "><span style="font-family: 'Oswald', sans-serif ;">SHOP NOW</span></a>
                </p>
          </div>
    </div>
    <div class="card"  id="col1">
      <div class="card-body">
        <a href="https://www.amazon.in/Dr-Physio-Electric-Massager-Relief/dp/B076ZRH5WQ/ref=sr_1_18?adgrpid=60624532044&gclid=CjwKCAjw04vpBRB3EiwA0Iieapudxe17m-Rso01YcTWZuhu9huHaste1lDYYcfq9KpdWmwhYAQ5whhoCV3gQAvD_BwE&hvadid=294149361061&hvdev=c&hvlocphy=1007749&hvnetw=g&hvpos=1t1&hvqmt=b&hvrand=3558394644903260663&hvtargid=kwd-250523712&hydadcr=25057_1776245&keywords=body+massage+machine&qid=1562648762&s=gateway&sr=8-18">
        <img class="img-fluid mx-auto d-block" src="https://images-na.ssl-images-amazon.com/images/I/81z5VGrvWkL._SL1500_.jpg" alt="Card image cap">
      </a>
                <h6 id="value"><a href="https://www.amazon.in/Dr-Physio-Electric-Massager-Relief/dp/B076ZRH5WQ/ref=sr_1_18?adgrpid=60624532044&gclid=CjwKCAjw04vpBRB3EiwA0Iieapudxe17m-Rso01YcTWZuhu9huHaste1lDYYcfq9KpdWmwhYAQ5whhoCV3gQAvD_BwE&hvadid=294149361061&hvdev=c&hvlocphy=1007749&hvnetw=g&hvpos=1t1&hvqmt=b&hvrand=3558394644903260663&hvtargid=kwd-250523712&hydadcr=25057_1776245&keywords=body+massage+machine&qid=1562648762&s=gateway&sr=8-18"
                class="card-title stretched-link" style="text-decoration:none">Massager</a>
              </h6>
              <p class="text-dark card-subtitle">
                <span class="text-dark" id="price">Price: ₹999.00</span>
                <a id="shop_now" href="#" class="btn-sm btn float-right "><span style="font-family: 'Oswald', sans-serif ;">SHOP NOW</span></a>
             </p>
          </div>
    </div>


</div>
</div>

</div>

<!--Equipment-->
 <div class="container-fluid pt-1  "  id="myDIV">
    <div class="container-fluid  mb-0 pt-3" >
           <h2 class="text-left header " id="poster_header" >Equipment</h2>

      <br>
    </div>

  <div class="container-fluid" >
    <div  id="row-scroll" class="pb-2" >

    <div class="card "  id="col2">
          <div class="card-body ">
            <a href="https://www.amazon.in/Kore-K-PVC-Combo-Leather-Fitness/dp/B01N0TFA7M/ref=sr_1_1?keywords=Kore+K-PVC+20kg+Combo+3+Leather+Home+Gym+and+Fitness+Kit&qid=1562662746&s=sports&smid=AT95IG9ONZD7S&sr=1-1">
            <img class="img-fluid mx-auto d-block"  src="https://images-na.ssl-images-amazon.com/images/I/51JLQlLki4L.jpg"   alt="Card image cap">
          </a>

                  <h6 id="value12"><a href="https://www.amazon.in/Kore-K-PVC-Combo-Leather-Fitness/dp/B01N0TFA7M/ref=sr_1_1?keywords=Kore+K-PVC+20kg+Combo+3+Leather+Home+Gym+and+Fitness+Kit&qid=1562662746&s=sports&smid=AT95IG9ONZD7S&sr=1-1"
                    class="card-title  stretched-link" style="text-decoration:none; "><center>Fitness Kit</center></a>
                  </h6>
                    <p class="text-dark card-subtitle text-center">
                  <a id="shop_now1" href="#" class="btn-sm btn "><span style="font-family: 'Oswald', sans-serif ;"><strong>SHOP NOW</strong></span></a>
                </p>
                </div>
        </div>

      <div class="card "  id="col2">
        <div class="card-body ">
        <a href="https://www.amazon.in/GOCART-Antiperspirant-Portable-Push-up-Black/dp/B0772H49B3/ref=sr_1_5?crid=2VXBILVS3M1SW&keywords=push+up+bars+for+men&qid=1562661140&s=gateway&sprefix=push%2Caps%2C849&sr=8-5">
        <img class="img-fluid mx-auto d-block" src="https://img.scoop.it/sqqkAvYM0YqwpmVK4PJUZTl72eJkfbmt4t8yenImKBVvK0kTmF0xjctABnaLJIm9" alt="Card image cap">
      </a>

              <h6 id="value12"><a href="https://www.amazon.in/GOCART-Antiperspirant-Portable-Push-up-Black/dp/B0772H49B3/ref=sr_1_5?crid=2VXBILVS3M1SW&keywords=push+up+bars+for+men&qid=1562661140&s=gateway&sprefix=push%2Caps%2C849&sr=8-5"
                class="card-title stretched-link" style="text-decoration:none;"><center>Push-up bar</center></a>
              </h6>
                <p class="text-dark card-subtitle text-center">
                <a id="shop_now1" href="#" class="btn-sm btn  "><span style="font-family: 'Oswald', sans-serif ;"><strong>SHOP NOW</strong></span></a>
              </p>
          </div>
      </div>
    <div class="card"  id="col2">
      <div class="card-body">
        <a href="https://www.google.com/url?sa=i&source=images&cd=&ved=2ahUKEwj0oqn5r6jjAhWRXCsKHWdnCCAQjRx6BAgBEAU&url=https%3A%2F%2Fwww.amazon.com%2FHampton-Dura-Bell-Urethane-Pro-Hex-Dumbbell%2Fdp%2FB003SGA9KY&psig=AOvVaw1ekPUPxIF2xS5awvmCD3fK&ust=1562780147114110">
        <img class="img-fluid mx-auto d-block" src="https://images-na.ssl-images-amazon.com/images/I/414PaVd2bDL._SX425_.jpg" alt="Card image cap">
      </a>
             <h6 id="value12"><a href="https://www.google.com/url?sa=i&source=images&cd=&ved=2ahUKEwj0oqn5r6jjAhWRXCsKHWdnCCAQjRx6BAgBEAU&url=https%3A%2F%2Fwww.amazon.com%2FHampton-Dura-Bell-Urethane-Pro-Hex-Dumbbell%2Fdp%2FB003SGA9KY&psig=AOvVaw1ekPUPxIF2xS5awvmCD3fK&ust=1562780147114110"
                class="card-title stretched-link" style="text-decoration:none; "><center>Dumbbell</center></a>
              </h6>

            <p class="text-dark card-subtitle text-center">
              <a id="shop_now1" href="#" class="btn-sm btn  "><span style="font-family: 'Oswald', sans-serif ;"><strong>SHOP NOW</strong></span></a>
            </p>
      </div>
    </div>
    <div class="card"  id="col2">
      <div class="card-body">
        <a href="https://www.googleadservices.com/pagead/aclk?sa=L&ai=DChcSEwjznLvytKjjAhWDCysKHTvyDFAYABAHGgJzZg&ohost=www.google.com&cid=CAESEeD2eQjpliXqKH-2fKQ_vV5j&sig=AOD64_3Nz8ML4NxcvQALL5wyyxyLM2ju_Q&ctype=5&q=&ved=0ahUKEwjKnLHytKjjAhXIX30KHalHDScQ9aACCDc&adurl=">
        <img class="img-fluid mx-auto d-block" src="https://images-na.ssl-images-amazon.com/images/I/41mvK6W5UOL._SX425_.jpg" alt="Card image cap">
      </a>

              <h6 id="value12"><a href="https://www.googleadservices.com/pagead/aclk?sa=L&ai=DChcSEwjznLvytKjjAhWDCysKHTvyDFAYABAHGgJzZg&ohost=www.google.com&cid=CAESEeD2eQjpliXqKH-2fKQ_vV5j&sig=AOD64_3Nz8ML4NxcvQALL5wyyxyLM2ju_Q&ctype=5&q=&ved=0ahUKEwjKnLHytKjjAhXIX30KHalHDScQ9aACCDc&adurl="
                class="card-title stretched-link" style="text-decoration:none;"><center>Flooring</center></a>
              </h6>
              <p class="text-dark card-subtitle text-center">
               <a id="shop_now1" href="#" class="btn-sm btn  "><span style="font-family: 'Oswald', sans-serif ;"><strong>SHOP NOW</strong></span></a>
             </p>
      </div>
    </div>
    <div class="card"  id="col2">
      <div class="card-body">
        <a href="https://www.google.com/aclk?sa=L&ai=DChcSEwjK1aevuKjjAhVODCsKHU6tDFAYABACGgJzZg&sig=AOD64_2BvsRVbfwaSrzio_I8UQqyoEXEgQ&ctype=5&q=&ved=0ahUKEwiT4aCvuKjjAhVFb30KHddbA30Q9aACCDo&adurl=">
        <img class="img-fluid mx-auto d-block" src="https://images-na.ssl-images-amazon.com/images/I/31JqLdIeCQL._SX425_.jpg" alt="Card image cap">
      </a>

              <h6 id="value12"><a href="https://www.google.com/aclk?sa=L&ai=DChcSEwjK1aevuKjjAhVODCsKHU6tDFAYABACGgJzZg&sig=AOD64_2BvsRVbfwaSrzio_I8UQqyoEXEgQ&ctype=5&q=&ved=0ahUKEwiT4aCvuKjjAhVFb30KHddbA30Q9aACCDo&adurl="
                class="card-title stretched-link" style="text-decoration:none;"><center>Accessories</center></a>
              </h6>
              <p class="text-dark card-subtitle text-center">
                 <a id="shop_now1" href="#" class="btn-sm btn"><span style="font-family: 'Oswald', sans-serif ;"><strong>SHOP NOW</strong></span></a>
             </p>
      </div>
    </div>
    <div class="card"  id="col2">
      <div class="card-body">
       <a href="https://www.google.com/url?sa=i&source=images&cd=&ved=2ahUKEwjrj46zuqjjAhUJVH0KHdfOCIUQjRx6BAgBEAU&url=https%3A%2F%2Fwww.amazon.in%2FJoxan-Leather-Weight-Lifting-Gloves%2Fdp%2FB076TXX17B&psig=AOvVaw0CMM8DYZet7LM1MNMkhiXp&ust=1562782973681504">
          <img class="img-fluid mx-auto d-block"   src="https://images-na.ssl-images-amazon.com/images/I/81HZ4XijHXL._SL1500_.jpg" alt="Card image cap">
      </a>

              <h6 id="value12"><a href="https://www.google.com/url?sa=i&source=images&cd=&ved=2ahUKEwjrj46zuqjjAhUJVH0KHdfOCIUQjRx6BAgBEAU&url=https%3A%2F%2Fwww.amazon.in%2FJoxan-Leather-Weight-Lifting-Gloves%2Fdp%2FB076TXX17B&psig=AOvVaw0CMM8DYZet7LM1MNMkhiXp&ust=1562782973681504"
                class="card-title stretched-link" style="text-decoration:none;"><center>Gloves</center></a>
              </h6>
            <p class="text-dark card-subtitle text-center">
               <a id="shop_now1" href="#" class="btn-sm btn  "><span style="font-family: 'Oswald', sans-serif ;"><strong>SHOP NOW</strong></span></a>
            </p>
        </div>
  </div>
</div>
</div>

<!--Equipment 2nd row-->
<div class="container-fluid pb-0" >
        <div  id="row-scroll" class="pb-2" >
        <div class="card"  id="col2">
          <div class="card-body">
            <a href="https://www.google.com/url?sa=i&source=images&cd=&ved=2ahUKEwi-upiGvajjAhVCXn0KHY1fDGkQjRx6BAgBEAU&url=https%3A%2F%2Fwww.amazon.ae%2FLifting-Neoprene-Dumbbell-Bodybuilding-Training%2Fdp%2FB07N7YDRGJ&psig=AOvVaw19QzBY4OL5RXrlQXG9yLJw&ust=1562783684043801">
            <img class="img-fluid mx-auto d-block" src="https://images-na.ssl-images-amazon.com/images/I/41nZxKuvJ4L._SX425_.jpg"   alt="Card image cap">
          </a>

                  <h6 id="value12"><a href="https://www.google.com/url?sa=i&source=images&cd=&ved=2ahUKEwi-upiGvajjAhVCXn0KHY1fDGkQjRx6BAgBEAU&url=https%3A%2F%2Fwww.amazon.ae%2FLifting-Neoprene-Dumbbell-Bodybuilding-Training%2Fdp%2FB07N7YDRGJ&psig=AOvVaw19QzBY4OL5RXrlQXG9yLJw&ust=1562783684043801"
                    class="card-title stretched-link" style="text-decoration:none; "><center>Hooks</center></a>
                  </h6>
                  <p class="text-dark card-subtitle text-center">
                   <a id="shop_now1" href="#" class="btn-sm btn  "><span style="font-family: 'Oswald', sans-serif ;"><strong>SHOP NOW</strong></span></a>
                </p>
                </div>
        </div>
    <div class="card"  id="col2">
      <div class="card-body">
        <a href="https://www.google.com/url?sa=i&source=images&cd=&ved=2ahUKEwjXv4CEv6jjAhXCSH0KHVRlBZQQjRx6BAgBEAU&url=https%3A%2F%2Fwww.amazon.co.uk%2FEVO-Fitness-Leather-Weightlifting-Bodybuilding%2Fdp%2FB016S9FDGC&psig=AOvVaw08Ye-0801OAvyja3itatEK&ust=1562784217048596">
        <img class="img-fluid mx-auto d-block" src="https://images-na.ssl-images-amazon.com/images/I/81fE9l9bWrL._SX425_.jpg" alt="Card image cap">
      </a>

            <h6 id="value12"><a href="https://www.google.com/url?sa=i&source=images&cd=&ved=2ahUKEwjXv4CEv6jjAhXCSH0KHVRlBZQQjRx6BAgBEAU&url=https%3A%2F%2Fwww.amazon.co.uk%2FEVO-Fitness-Leather-Weightlifting-Bodybuilding%2Fdp%2FB016S9FDGC&psig=AOvVaw08Ye-0801OAvyja3itatEK&ust=1562784217048596"
                class="card-title stretched-link" style="text-decoration:none; "><center>Belt</center></a>
              </h6>
            <p class="text-dark card-subtitle text-center">
              <a id="shop_now1" href="#" class="btn-sm btn  "><span style="font-family: 'Oswald', sans-serif ;"><strong>SHOP NOW</strong></span></a>
            </p>
                  </div>
          </div>
    <div class="card"  id="col2">
      <div class="card-body">
        <a href="https://www.google.com/url?sa=i&source=images&cd=&ved=2ahUKEwjP25Kzv6jjAhVaAXIKHQ2xAskQjRx6BAgBEAU&url=https%3A%2F%2Fwww.amazon.co.uk%2FManduka-Belong-Body-Roller%2Fdp%2FB01LB2ZITS&psig=AOvVaw3I2lwiEoANZGrxm-2wobhO&ust=1562784315853287">
        <img class="img-fluid mx-auto d-block" src="https://images-na.ssl-images-amazon.com/images/I/81cCkIk5ZhL._SX425_.jpg" alt="Card image cap">
      </a>

              <h6 id="value12"><a href="https://www.google.com/url?sa=i&source=images&cd=&ved=2ahUKEwjP25Kzv6jjAhVaAXIKHQ2xAskQjRx6BAgBEAU&url=https%3A%2F%2Fwww.amazon.co.uk%2FManduka-Belong-Body-Roller%2Fdp%2FB01LB2ZITS&psig=AOvVaw3I2lwiEoANZGrxm-2wobhO&ust=1562784315853287"
                class="card-title stretched-link" style="text-decoration:none; "><center>Body Roller</center></a>
            </h6>
            <p class="text-dark card-subtitle text-center">
              <a id="shop_now1" href="#" class="btn-sm btn  "><span style="font-family: 'Oswald', sans-serif ;"><strong>SHOP NOW</strong></span></a>
            </p>
              </div>
    </div>
    <div class="card"  id="col2">
      <div class="card-body">
        <a href="https://www.google.com/url?sa=i&source=images&cd=&ved=2ahUKEwiftanVwajjAhUUQH0KHTeQBk4QjRx6BAgBEAU&url=https%3A%2F%2Fwww.amazon.in%2FInditradition-Exerciser-Abdominal-Resistance-Black%2Fdp%2FB071FNLXHX&psig=AOvVaw1xtn7J2-UNIxXRN24nmT7I&ust=1562784680392704">
        <img class="img-fluid mx-auto d-block" src="https://images-na.ssl-images-amazon.com/images/I/51oY7ZbiHZL._SX425_.jpg" alt="Card image cap">
      </a>

              <h6 id="value12"><a href="https://www.google.com/url?sa=i&source=images&cd=&ved=2ahUKEwiftanVwajjAhUUQH0KHTeQBk4QjRx6BAgBEAU&url=https%3A%2F%2Fwww.amazon.in%2FInditradition-Exerciser-Abdominal-Resistance-Black%2Fdp%2FB071FNLXHX&psig=AOvVaw1xtn7J2-UNIxXRN24nmT7I&ust=1562784680392704"
                class="card-title stretched-link" style="text-decoration:none; "><center>Strength</center></a>
            </h6>
              <p class="text-dark card-subtitle text-center">
              <a id="shop_now1" href="#" class="btn-sm btn  "><span style="font-family: 'Oswald', sans-serif ;"><strong>SHOP NOW</strong></span></a>
            </p>
              </div>
    </div>
    <div class="card"  id="col2">
      <div class="card-body">
        <a href="https://www.google.com/url?sa=i&source=images&cd=&ved=2ahUKEwjZkou2wqjjAhUQQH0KHSDYBOEQjRx6BAgBEAU&url=https%3A%2F%2Fwww.amazon.in%2FNational-Bodyline-Motorized-Treadmill-Function%2Fdp%2FB07BVRWJ3C&psig=AOvVaw3zwQf6AeCGF9FhyTnnJmSP&ust=1562785112362965">
        <img class="img-fluid mx-auto d-block" src="https://images-na.ssl-images-amazon.com/images/I/41C8k4nbJnL._SX425_.jpg" alt="Card image cap">
      </a>

              <h6 id="value12"><a href="https://www.google.com/url?sa=i&source=images&cd=&ved=2ahUKEwjZkou2wqjjAhUQQH0KHSDYBOEQjRx6BAgBEAU&url=https%3A%2F%2Fwww.amazon.in%2FNational-Bodyline-Motorized-Treadmill-Function%2Fdp%2FB07BVRWJ3C&psig=AOvVaw3zwQf6AeCGF9FhyTnnJmSP&ust=1562785112362965"
                class="card-title stretched-link" style="text-decoration:none; "><center>Cardio</center></a>
            </h6>
              <p class="text-dark card-subtitle text-center">
              <a id="shop_now1" href="#" class="btn-sm btn  "><span style="font-family: 'Oswald', sans-serif ;"><strong>SHOP NOW</strong></span></a>
            </p>
              </div>
    </div>
    <div class="card"  id="col2">
      <div class="card-body">
        <a href="https://www.google.com/url?sa=i&source=images&cd=&ved=2ahUKEwii0LuRw6jjAhWRaCsKHVOuCggQjRx6BAgBEAU&url=https%3A%2F%2Fwww.amazon.com%2FStepper-Machine-Stomach-Fitness-Exercise%2Fdp%2FB077KR4ZKS&psig=AOvVaw3fRbnKbmpUIi_SGqU7in2p&ust=1562785297397829">
        <img class="img-fluid mx-auto d-block" src="https://images-na.ssl-images-amazon.com/images/I/713AiMOvS1L._SX425_.jpg" alt="Card image cap">
      </a>

            <h6 id="value12"><a href="https://www.google.com/url?sa=i&source=images&cd=&ved=2ahUKEwii0LuRw6jjAhWRaCsKHVOuCggQjRx6BAgBEAU&url=https%3A%2F%2Fwww.amazon.com%2FStepper-Machine-Stomach-Fitness-Exercise%2Fdp%2FB077KR4ZKS&psig=AOvVaw3fRbnKbmpUIi_SGqU7in2p&ust=1562785297397829"
                class="card-title stretched-link" style="text-decoration:none; "><center>Stepper</center></a>
            </h6>
            <p class="text-dark card-subtitle text-center">
              <a id="shop_now1" href="#" class="btn-sm btn  "><span style="font-family: 'Oswald', sans-serif ;"><strong>SHOP NOW</strong></span></a>
            </p>
        </div>
    </div>
 </div>


   </div>
 </div>
 <!--more program-->
 <div class="container-fluid" style="margin:70px 0px">
   <div class="conatiner">
   <div class="d-flex justify-content-around  mb-3">
       <div class="p-3" style="background-color:#f01313">
         <a href="home.php" style="text-decoration:none;font-family: 'Monda', sans-serif">
           <span class="text-center text-light" style="font-size:14px">&nbsp;&nbsp;HOME&nbsp;&nbsp;</span>
        </a>
       </div>
       <div class="p-3" style="background-color:#f01313">
         <a href="program.php" style="text-decoration:none;font-family: 'Monda', sans-serif">
               <span  class="text-center   text-light"  style="font-size:14px">MORE PROGRAM</span>
         </a>
       </div>
       <div class="p-3" style="background-color:#f01313">
         <a href="contact.php" style="text-decoration:none;font-family: 'Monda', sans-serif">
             <span class="text-center  text-light"  style="font-size:14px">CONTACT US</span>
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
          <a href="#"> <img src="images/twitter1.png" alt="twitter" style="width:50px;height:47px"></a>
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


<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myDIV *").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
</body>
</html>
