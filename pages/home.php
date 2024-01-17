<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>EZfare Bus and Ticket Booking</title>
    <link rel="stylesheet" href="../css/nav.css">
    <link rel="stylesheet" href="../css/footer.css">
  <!--  <link rel="stylesheet" type="text/css" href="../css/container.css">-->
   <link rel="stylesheet" type="text/css" href="../css/videoedit.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
   <!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">-->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <style type="text/css">

      body{


           background-image: url(../images/1.jpg);
           background-size: cover;
          background-repeat: no-repeat;
          background-attachment: fixed;





      
                margin: 0;
                padding: 0;
                width: 100%;
                height: 100%;
                background-color: black;
            }
              #container{

                height: 100vh;
                width: 100%;
                background-image: url(../images/3.jpg);
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                background-attachment: fixed;
                transition: 2s;
                font-family: cursive;
                animation-name: animate;
                animation-direction: alternate-reverse;
                animation-duration: 40s;
                animation-fill-mode: forwards;
                animation-iteration-count: infinite;
                animation-play-state: running;
                animation-timing-function: ease-in-out;


            }

            @keyframes animate{

                0%{
                    background-image: url(../images/1.jpg);
                }
                10%{
                    background-image: url(../images/2.jpg);
                }
                20%{
                    background-image: url(../images/3.jpg);
                }
                30%{
                    background-image: url(../images/4.jpg);
                }
                40%{
                    background-image: url(../images/5.jpg);
                }
                50%{
                    background-image: url(../images/6.jpg);
                }
                60%{
                    background-image: url(../images/7.jpg);
                }
                70%{
                    background-image: url(../images/8.jpg);
                }
                80%{
                    background-image: url(../images/9.jpg);
                }
                90%{
                    background-image: url(../images/11.jpg);
                }
                100%{
                    background-image: url(../images/1.jpg);
                }


            }
.home_details{
  color: #fff;
  font-family: inherit;
  font-size: 74px;
  padding: 162px 5px 5px 185px;

}
.font{

  color: #F9522E;
}
.btnHome{

    font-family: inherit;
    background-color: #F9522E;
    padding: 13px 44px 13px 44px;
    font-size: 18px;
    border-style: none;

}
.btnHome:hover{
  background-color: orange;
  cursor: pointer;
}
      
    </style>

  </head>
  <body>



  <div id="container">


              <!--this is the header callling(nav bar)-->

            <?php include("nav.php");
             ?>



             


                  <h1 class="home_details">Your Bus Pass.Anytime. <br><font class="font">Anywhere..</font>

                  <br>


                       <a href="signUp.php">     <button class="btnHome">SIGN UP NOW</button></a>



                  </h1>










  </div>



            
 

            <!--this is the footer calling-->
            <?php include("footer.php");
             ?>



  </body>
</html>
