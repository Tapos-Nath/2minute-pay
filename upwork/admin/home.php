<?php
$page=$_GET['page'];


?>
<!DOCTYPE html>
<html lang="en">

  <head>  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>octopus</title>
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">    
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
    <script src="assets/js/chart-master/Chart.js"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
   <style >
  .mid
  {
    width:867px;
    height: auto;
    background:#ccc;
    margin-top:60px;
    float: left;
  }
  .left
  {
    float:right;
   width:300px;
   height:900px;
   margin-top:60px;
   background:#fff;
  }
       .nav a{
           margin-top:-15px;
       }
  </style> 
  </head>

  <body> 
    
  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
<!--            <a href="index.html" class="logo"><b>octopus</b></a>-->
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->
                    
                    <!-- settings end -->
                    
                    <!-- inbox dropdown end -->
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-menu">
              <ul class="nav pull-right top-menu nav nav-pills" role="tablist">
                    
                  <li role="presentation" style="margin-top:15px;color:white;"><a href="#" style="color:white;background:#FF865C;">Doctor <span class="badge" style="background:white;color:black;">3</span></a></li>
                  <li role="presentation" style="margin-top:15px;color:white;"><a href="#" style="color:white;background:#FF865C;">Driver <span class="badge" style="background:white;color:black;">3</span></a></li>
                  <li role="presentation" style="margin-top:15px;color:white;"><a href="#" style="color:white;background:#FF865C;">teacher <span class="badge" style="background:white;color:black;">3</span></a></li>
                  <li role="presentation" style="margin-top:15px;color:white;"><a href="#" style="color:white;background:#FF865C;">home w <span class="badge" style="background:white;color:black;">3</span></a></li>
                  <li role="presentation" style="margin-top:15px;color:white;"><a href="#" style="color:white;background:#FF865C;">ac <span class="badge" style="background:white;color:black;">3</span></a></li>
                  <li role="presentation" style="margin-top:15px;color:white;"><a href="#" style="color:white;background:#FF865C;">tv/r <span class="badge" style="background:white;color:black;">3</span></a></li>
                  <li role="presentation" style="margin-top:15px;color:white;"><a href="#" style="color:white;background:#FF865C;">londry <span class="badge" style="background:white;color:black;">3</span></a></li>
                  <li role="presentation" style="margin-top:15px;color:white;"><a href="#" style="color:white;background:#FF865C;">elc <span class="badge" style="background:white;color:black;">3</span></a></li>
                  <li role="presentation" style="margin-top:15px;color:white;"><a href="#" style="color:white;background:#FF865C;">computer <span class="badge" style="background:white;color:black;">3</span></a></li>
                  <li role="presentation" style="margin-top:15px;color:white;"><a href="#" style="color:white;background:#FF865C;">plumb <span class="badge" style="background:white;color:black;">3</span></a></li>
                  <li role="presentation" style="margin-top:15px;color:white;"><a href="#" style="color:white;background:#FF865C;">paint <span class="badge" style="background:white;color:black;">3</span></a></li>
                  <li role="presentation" style="margin-top:15px;color:white;"><a href="#" style="color:white;background:#FF865C;">food <span class="badge" style="background:white;color:black;">3</span></a></li>
                  <li role="presentation" style="margin-top:15px;color:white;"><a href="#" style="color:white;background:#FF865C;">car s <span class="badge" style="background:white;color:black;">3</span></a></li>
                    <li><a class="logout" href="form.php">Logout</a></li>
              </ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
                  <p class="centered"><a href="profile.html"><img src="../image/<?php print $all_s_p[0];?>.jpg" class="img-circle" width="60" height="60"></a></p>
                  <h5 class="centered"><?php print $all_s_pall_s_pall_s_p[0];?></h5>
                  <h5 class="centered"><?php print $all_s_p[1];?></h5>
                  <h5 class="centered"><?php print $all_s_p[2];?></h5> 
                  
                  <li class="mt">
                      <a class="active" href="index.html">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                          <img style="hight:36px;width:53px;" src="a2z-shopping.png">
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>Element</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="home.php?&page=home_worker">Home Worker</a></li>
                          <li><a  href="home.php?page=home_teacher">Home Teacher</a></li>
                          <li><a  href="home.php?&page=home_doctor">Home Doctor</a></li>
                          <li><a  href="home.php?&page=driver">Driver</a></li>
                          <li><a  href="home.php?&page=electrician">Electrician</a></li>
                          <li><a  href="home.php?&page=food_menu">Food Menu</a></li>
                          <li><a  href="home.php?&page=food_item">Food Item</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Components</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="calendar.html">Calendar</a></li>
                          <li><a  href="gallery.html">Gallery</a></li>
                          <li><a  href="todo_list.html">Todo List</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Extra Pages</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="blank.html">Blank Page</a></li>
                          <li><a  href="login.php">Login</a></li>
                          <li><a  href="lock_screen.php">Lock Screen</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-tasks"></i>
                          <span>Forms</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="form_component.html">Form Components</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-th"></i>
                          <span>Data Tables</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="basic_table.html">Basic Table</a></li>
                          <li><a  href="responsive_table.html">Responsive Table</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class=" fa fa-bar-chart-o"></i>
                          <span>Charts</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="morris.html">Morris</a></li>
                          <li><a  href="chartjs.html">Chartjs</a></li>
                      </ul>
                  </li>

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT  
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <div class="mid">
                  <?php
                    
             switch ($page)
              {
               case'home_worker':
               include"home_worker.php";
                 break;
                case'home_teacher':
               include"home_teacher.php";
                 break;
                 case'home_doctor':
               include"home_doctor.php";
                 break;
                case'driver':
               include"driver.php";
                 break;
                 case'electrician':
               include"electrician.php";
                 break;
                 case'food_menu':
               include"food_menu.php";
                 break;
                 case'food_item':
               include"food_item.php";
                 break;
               
               default:
                 # code...
                 break;
             }


               ?>
                  
              </div>
           <div class="col-lg-3 ds" style="margin-top:60px;">
                    <!--COMPLETED ACTIONS DONUTS CHART-->
            <h3>NOTIFICATIONS</h3>
                                        
                    <!--COMPLETED ACTIONS DONUTS CHART-->
           
                                        
                      <!-- First Action -->
                    
                      <div class="desc">
                        <div class="thumb">
                          <img src="../image/<?php print $all_s_p[0];?>.jpg" height="30px" width="30px" style="border-radius:100px;">
                        </div>
                        <div class="details">
                          <a href="home.php?page=message&email=<?php print $fetch_feedback[0];?>&name=<?php print $fetch_feedback[1]; ?>"><?php print $fetch_feedback[1]; ?></a> <br/>
                             <?php print $fetch_feedback[2]; ?><br/>
                          </p>
                        </div>
                      </div>
                      

                       <!-- USERS ONLINE SECTION -->
           
                  
                <!-- /col-lg-3 -->
              <! --/row -->
                  
                      <!--custom chart end-->
        <!-- /row --> 
          
                  </div><!-- /col-lg-9 END SECTION MIDDLE -->
                  
                  
      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->                  
 
          </section>
      </section>

      <!--main content end-->  
      <!--footer start-->
      
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-1.8.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="assets/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="assets/js/sparkline-chart.js"></script>    
  <script src="assets/js/zabuto_calendar.js"></script>  
  
  <script type="text/javascript">
        $(document).ready(function () {
        var unique_id = $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'Welcome to  octopus!',
            // (string | mandatory) the text inside the notification
            text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo. Free version for <a href="http://blacktie.co" target="_blank" style="color:#ffd777">BlackTie.co</a>.',
            // (string | optional) the image to display on the left
            image: '../image/<?php print $all_s_p[0];?>.jpg',
            
            // (bool | optional) if you want it to fade out on its own or just sit there
            sticky: true,
            // (int | optional) the time you want it to be alive for before fading out
            time: '',
            // (string | optional) the class name you want to apply to that specific message
            class_name: 'my-sticky-class'
        });

        return false;
        });
  </script>
  
  <script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
        
            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });
        
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>
  

  </body>

</html>
