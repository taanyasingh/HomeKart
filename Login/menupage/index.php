<?php 
   session_start();
   unset($_SESSION['javastop']);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>HomeKart</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="description" content="HomeKart Happy Home" />
        <meta name="keywords" content="jquery, circular menu, navigation, round, bubble"/>
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
        <style>
            *{
                margin:0;
                padding:0;
            }
            body{
                font-family:Arial;
                background: url('images/home.jpg') no-repeat top left;
            }
            .title{
                width:600px;
                height:300px;
                position:absolute;
                top:330px;
                left:160px;
                background:transparent url(title.png) no-repeat top left;
            }
            a.back{
                background:transparent url('images/home.jpg') no-repeat top left;
                position:fixed;
                width:150px;
                height:27px;
                outline:none;
                bottom:0px;
                left:0px;
            }
            #content{
                margin:0 auto;
            }


        </style>
    </head>

    <body >

        <div id="content">
           
            <div class="title"></div> 
            <div style="width:200px; height: 40px;text-align: center;              
        position: fixed;top:20px;right:10px;">    
          
         <h3><A href="../../logout.php" ><font color="black">Logout</font></A></h3>
         <br>
            <h5><p class=" text-info"><font color="black"><?php echo date("Y-m-d h:i:sa") ;?></font></p>    <p class=" text-info"></h5>
         </div>

            <div class="navigation" id="nav">
                <div class="item user">
                    <img src="images/bg_user.png" alt="" width="199" height="199" class="circle"/>
                    <a href="#" class="icon"></a>
                    <h2>Electrician</h2>
                    <ul>
                        <li><a href="http://localhost/homekart/request/Electician.php">Book</a></li>
                        <li><a href="http://localhost/homekart/track/electician.php" >track</a></li>
                    </ul>
                </div>
                <div class="item home">
                    <img src="images/bg_home.png" alt="" width="199" height="199" class="circle"/>
                    <a href="#" class="icon"></a>
                    <h2>Mechanic</h2>
                    <ul>
                        <li><a href="http://localhost/homekart/request/Mechanic.php">Book</a></li>
                        
                        <li><a href="http://localhost/homekart/track/mechanic.php">Track</a></li>
                    </ul>
                </div>
                <div class="item shop">
                    <img src="images/bg_shop.png" alt="" width="199" height="199" class="circle"/>
                    <a href="#" class="icon"></a>
                    <h2>Carpenter</h2>
                    <ul>
                        <li><a href="http://localhost/homekart/request/Carpainter.php">Book</a></li>
                        
                        <li><a href="http://localhost/homekart/track/carpainter.php">Track</a></li>
                    </ul>
                </div>
                <div class="item camera">
                    <img src="images/bg_camera.png" alt="" width="199" height="199" class="circle"/>
                    <a href="#" class="icon"></a>
                    <h2>Painter</h2>
                    <ul>
                        <li><a href="http://localhost/homekart/request/Painter.php">Book</a></li>
                        
                        <li><a href="http://localhost/homekart/track/painter.php">Track</a></li>
                    </ul>
                </div>
                <div class="item fav">
                    <img src="images/bg_fav.png" alt="" width="199" height="199" class="circle"/>
                    <a href="#" class="icon"></a>
                    <h2>Plumber</h2>
                    <ul>
                        <li><a href="http://localhost/homekart/request/Plumber.php">Book</a></li>
                        
                        <li><a href="http://localhost/homekart/track/plumber.php">Track</a></li>
                    </ul>
                </div>
            </div>
        	
        </div>
        
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script type="text/javascript" src="jquery.easing.1.3.js"></script>
        <script type="text/javascript">
            $(function() {
                $('#nav > div').hover(
                function () {
                    var $this = $(this);
                    $this.find('img').stop().animate({
                        'width'     :'199px',
                        'height'    :'199px',
                        'top'       :'-25px',
                        'left'      :'-25px',
                        'opacity'   :'1.0'
                    },500,'easeOutBack',function(){
                        $(this).parent().find('ul').fadeIn(700);
                    });

                    $this.find('a:first,h2').addClass('active');
                },
                function () {
                    var $this = $(this);
                    $this.find('ul').fadeOut(500);
                    $this.find('img').stop().animate({
                        'width'     :'52px',
                        'height'    :'52px',
                        'top'       :'0px',
                        'left'      :'0px',
                        'opacity'   :'0.1'
                    },5000,'easeOutBack');

                    $this.find('a:first,h2').removeClass('active');
                }
            );
            });
        </script>
    </body>
</html>