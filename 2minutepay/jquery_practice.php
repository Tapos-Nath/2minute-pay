<?php
   session_start();
  include("database/connection.php");
?>
<!doctype html>
<html>
<head>

<style type="text/css" rel="stylesheet">
.comment
{
	height:270px;
	width:1350px;
	float:left;
}

#jquery-script-menu {
position: fixed;
height: 90px;
width: 100%;
top: 0;
left: 0;
border-top: 5px solid #316594;
background: #fff;
-moz-box-shadow: 0 2px 3px 0px rgba(0, 0, 0, 0.16);
-webkit-box-shadow: 0 2px 3px 0px rgba(0, 0, 0, 0.16);
box-shadow: 0 2px 3px 0px rgba(0, 0, 0, 0.16);
z-index: 999999;
padding: 10px 0;
-webkit-box-sizing:content-box;
-moz-box-sizing:content-box;
box-sizing:content-box;
}

.jquery-script-center {
width: 960px;
margin: 0 auto;
}
.jquery-script-center ul {
width: 212px;
float:left;
line-height:45px;
margin:0;
padding:0;
list-style:none;
}
.jquery-script-center a {
	text-decoration:none;
}
.jquery-script-ads {
width: 728px;
height:90px;
float:right;
}
.jquery-script-clear {
clear:both;
height:0;
}

#carousel {
  position: relative;
  width:900px;
  height:400px;
  margin: 0 auto;
}

#slides {
  overflow: hidden;
  position: relative;
  width: 100%;
  height: 250px;
}

#slides ul {
  list-style: none;
  width: 100%;
  height: 250px;
  margin: 0;
  padding: 0;
  position: relative;
}

#slides li {
  width: 100%;
  height: 250px;
  float: left;
  text-align: center;
  position: relative;
  font-family: lato, sans-serif;
}

/* Styling for prev and next buttons */

.btn-bar {
  width: 60%;
  margin: 0 auto;
  display: block;
  position: relative;
  top: 40px;
}

#buttons {
  padding: 0 0 5px 0;
  float: right;
}



a#prev:hover,
a#next:hover {
  color: #FFF;
  text-shadow: .5px 0px #b14943;
}

.quote-phrase,
.quote-author {
  font-family: sans-serif;
  font-weight: 300;
  display: table-cell;
  vertical-align: middle;
  padding: 5px 20px;
  font-family: 'Lato', Calibri, Arial, sans-serif;
}

.quote-phrase {
  height: 92px;
  font-size: 18px;
  color: #333;
  font-style: italic;
  text-shadow: .5px 0px #b14943;
}

.quote-marks {
  font-size: 30px;
  padding: 0 3px 3px;
  position: inherit;
}

.quote-author {
  font-style: normal;
  font-size: 20px;
  color: #b14943;
  font-weight: 400;
  height: 30px;
}

.quoteContainer,
.authorContainer {
  display: table;
  width: 100%;
}


</style>

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>

<script>
$(document).ready(function () {
    //rotation speed and timer
    var speed = 1000;
    
    var run = setInterval(rotate, speed);
    var slides = $('.slide');
    var container = $('#slides ul');
    var elm = container.find(':first-child').prop("tagName");
    var item_width = container.width();
    var previous = 'prev'; //id of previous button
    var next = 'next'; //id of next button
    slides.width(item_width); //set the slides to the correct pixel width
    container.parent().width(item_width);
    container.width(slides.length * item_width); //set the slides container to the correct total width
    container.find(elm + ':first').before(container.find(elm + ':last'));
    resetSlides();
    
    
    //if user clicked on prev button
    
    $('#buttons a').click(function (e) {
        //slide the item
        
        if (container.is(':animated')) {
            return false;
        }
        if (e.target.id == previous) {
            container.stop().animate({
                'left': 0
            }, 1500, function () {
                container.find(elm + ':first').before(container.find(elm + ':last'));
                resetSlides();
            });
        }
        
        if (e.target.id == next) {
            container.stop().animate({
                'left': item_width * -2
            }, 1500, function () {
                container.find(elm + ':last').after(container.find(elm + ':first'));
                resetSlides();
            });
        }
        
        //cancel the link behavior            
        return false;
        
    });
    
    //if mouse hover, pause the auto rotation, otherwise rotate it    
    container.parent().mouseenter(function () {
        clearInterval(run);
    }).mouseleave(function () {
        run = setInterval(rotate, speed);
    });
    
    
    function resetSlides() {
        //and adjust the container so current is in the frame
        container.css({
            'left': -1 * item_width
        });
    }
    
});
//a simple function to click next link
//a timer will call this function, and the rotation will begin

function rotate() {
    $('#next').click();
}
</script>
</head>

<body>
<div class="wrapper">
<div class="banner">
		     <div class="comment">
			     <div id="carousel">
  <div class="btn-bar">
    <div id="buttons"><a id="prev" href="#"><</a><a id="next" href="#">></a> </div>
  </div>
  <div id="slides">
    <ul>
      <?php
           $select_comment=mysql_query("SELECT * FROM comment_info");
             while($fetch_c=mysql_fetch_array($select_comment))
             {
      ?>
      <li class="slide">
	   <img src="user_img/<?php print $fetch_c[1]; ?>.jpg" height="100px" width="100px" style="border-radius:100px; float:left;">
	    <a style="color:#333333; font-family:monospace; margin-left:15px; margin-top:30px; text-shadow:1px 1px 1px #333; font-size:18px; float:left;"><?php print $fetch_c[2]; ?></a>
        <div class="quoteContainer">
          <p class="quote-phrase"><span class="quote-marks">"</span> <?php print $fetch_c[3]; ?><span class="quote-marks">"</span> </p>
        </div>
        
      </li>
      <?php
         }
      ?>

    </ul>
  </div>
</div>
 </a>
 </div>
</body>
</html>
