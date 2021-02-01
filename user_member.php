
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





#footer{
  margin:15px 0px 0px 0px;
}

  #footer1{
      margin:0px 0px 50px 0px;
      }







  div#SLIDE_BG {

    height: 20vh;
    width:100%;
     margin:0px;




}







 /*registered member*/
 /*Forget password background*/
 @media screen and (min-width: 720px) {
   div#forget2341 {
     margin-top:3px;

      max-width:100%;

      padding-bottom:12px;


   }
 }

 @media screen and (max-width:721px) {
   div#forget2341 {
     margin-top: -45px;
     max-width:100%;
    padding-top:15px;
    padding-bottom:8px;
   }
 }


 /*Forget password*/
 @media screen and (min-width: 720px) {
   h4#forget {
    font-size:22px ;
     letter-spacing:1px;
     color:#2ecc72;
   }
 }

 @media screen and (max-width: 721px) {
   h4#forget {
  font-size:19px;
  color:#2ecc72;
}
 }

 /*Forget1 password*/
 @media screen and (min-width: 720px) {
   h4#forget1 {
    font-size:19px ;
     letter-spacing:1px;
      color:#616C6F;
   }
 }

 @media screen and (max-width: 721px) {
   h4#forget1 {
  font-size:16px; color:#616C6F;
}
 }










 .sched-list {
   overflow-x: scroll; }



</style>
</head>

<body>

  <div id="SLIDE_BG" class="img-fluid d-block mx-auto  ">

    <nav class="navbar  navbar-expand-md navbar-dark  " style="padding:2px;background-color:#47535E;"  >

          <a class="navbar-brand text-light" href="#" style="font-family:'Fugaz One'; font-size:35px;padding:15px"><span class="text-info">The</span><span class="text-light">Energy</span><span class="text-warning">Hub</span></a>



    </nav>
</div>
<!--Rgistered Member-->
<center>
  <div class="container  text-center" id="forget2341">
    <div class="container  m-0 bg-white">
      <h2 class="text-center" id="forget"><span  style="font-family: 'monda', sans-serif ;color:#4834DF"><strong>Admin Panel</strong></span></h3>
    </div>
  </div>
</center>




<!--members-->
<div class="container-fluid pt-4  pb-4 bg-light ">

 <ul class="nav nav-tabs">
   <li class="nav-item" style="	box-shadow: 0 -3px 4px -1px #333; ">
    <a class="nav-link active " href="user_member.php"><h4 class="text-left  " id="forget"><span  style="font-family: 'rubik', sans-serif;">Members</span></h4></a>
   </li>
   <li class="nav-item  ">
  <a class="nav-link " href="user_appointment.php"> <h4 class="text-left  pl-1" id="forget1"><span  style="font-family: 'rubik', sans-serif;">Appointment</span></h4></a>
   </li>
   <li class="nav-item">
    <a class="nav-link " href="user_contact.php"><h4 class="text-left  pl-1" id="forget1"><span  style="font-family: 'rubik', sans-serif;">Contact</span></h4></a>
   </li>

 </ul>

      <div class="container-fluid   bg-white pl-4 pr-4">
           <div class="sched-list">
          <table class="table table-hover">
            <thead  style="word-spacing:0px">
              <tr>
                <th class="pr-3  pl-0"> First Name </th>
                <th class="pr-3  pl-0"> Last Name </th>
                <th class="pr-4  pl-3"> Email </th>
                <th class="pr-4  pl-3" >Password1</th>
                <th class="pr-4  pl-3">Password2</th>
              </tr>
            </thead>

              <?php

                        //database connection
                        $con=mysqli_connect("localhost","id10103188_sanny","12345","id10103188_theenergyhub");

                        // select data from database
                        $query=mysqli_query($con,"select * from REGISTRATION");

                        while($row=mysqli_fetch_array($query))
                          {


              ?>
          <tbody>
             <tr>
                <td class="pr-4  pl-2"><?php echo $row['Fname']; ?></td>
                <td class="pr-4  pl-2"><?php echo $row['Lname']; ?></td>
                <td class="pr-4  pl-3" style="color:#E8290B"><strong><?php echo $row['Email']; ?></strong></td>
                <td class="pr-4 text-muted pl-3"><s><?php echo $row['Password']; ?></s></td>
                <td class="pr-4 text-muted pl-3"><s><?php echo $row['RePassword']; ?></s></td>
              </tr>
            <?php }  ?>
            </tbody>
          </table>

      </div>
  </div>



</div>








<!--footer-->
<div class="jumbotron-fluid bg-dark mt-5" >
<div class="jumbotron  bg-dark  " id="footer">
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



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


</body>
</html>
