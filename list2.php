<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/website69b/includes/";
?> 

<?xml version="1.0" encoding="iso-8859-1" ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<HEAD>
<TITLE>OT for Kids - Children's Occupational Therapy Services</TITLE>


<meta name="viewport" content="width=device-width, initial-scale=1">
<meta NAME="keywords" CONTENT="...">
<meta NAME="description" CONTENT="...">
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />

<link rel="stylesheet" type="text/css" href="/website69b/css/style2.css" media="screen" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
<script src="js/jquery.flexslider-min.js"></script>
<script>
    $(document).ready(function () {
        $('.flexslider').flexslider({
            animation: 'fade',
            controlsContainer: '.flexslider'
        });
    });
</script>

</HEAD>
<body>
<div class="flex-container">
    <div class="flexslider">
        <ul class="slides">
            <li class="slide1">
                <div class="slider_content_box">
                <h2 class="title">Our services</h2>
                    <p>See what groups your school can benefit from:</p>
                    <ul>
                        <li>Handwriting improvement group</li>
                        <li>Fine motor group</li>
                        <li>Movement and co-ordination group</li>
                        <li>Concentration and memory group</li>
                    </ul>
                </div>        
            </li>
 
            <li>
                <div class="slider_jump_container">
                        <div class="slide_jump1 jump">
                             <h2>Reports</h2>
                             <p>Assessments are available on a wide range of conditions and difficulties and can be completed at home, in clinic or at school, including handwriting, autistic spectrum, movement and concentration.</p>
                             <button><a href="/website69b/services/assessments/index.php">Find out more &raquo;</a></button>
                        </div>
                    <div class="slide_jump2 jump">
                             <h2>Assessments</h2>
                             <p>We offer the option of a report to summarise an assessment, identify problems and provide written recommendations for your child. We also offer medico-legal reports.</p>
                             <button><a href="/website69b/services/reports/index.php">Find out more &raquo;</a></button>                 
                    </div>
                    <div class="slide_jump3 jump">
                             <h2>Treatment </h2>
                             <p>We provide treatment for a variety of difficulties ranging from poor handwriting to un-coordinated movements, and from poor attention to low confidence. We can offer these treatments at home, in clinic or in school, which ever is easiest for you!</p>
                             <button><a href="/website69b/services/treatment/index.php">Find out more &raquo;</a></button>            
                    </div>
                    <div class="clear"></div>
                </div>
            </li>
 
            <li class="slide3"> 
            <div class="slide3_container">   
            <h2>Don't be shy, say hello...</h2>
                        <form name="aform" method="POST" action="http://plus.allforms.mailjol.net/u/71115c50.php">
                        <div class="form_left">
                        <input name="name" class="input" type="text" value="Name:" onblur="if(this.value == '') { this.value='Name:'}" onfocus="if (this.value == 'Name:') {this.value=''}">
                        <input name="email"  class="input" type="text" value="Email:" onblur="if(this.value == '') { this.value='Email:'}" onfocus="if (this.value == 'Email:') {this.value=''}">
                        <input name="phone"   class="input"type="text"  value="Phone:" onblur="if(this.value == '') { this.value='Phone:'}" onfocus="if (this.value == 'Phone:') {this.value=''}">
                        </div>
                        <textarea class="input2" name="query" style="font-family: 'Arial', sans-serif; font-size:13px; height:80px; margin-top: 9px;" onblur="if(this.value == '') { this.value='Message:'}" onfocus="if (this.value == 'Message:') {this.value=''}">Message:</textarea>
                        <div id="send_button3" style="cursor:pointer; float: left;" onclick="javascript:document.aform.submit();"><p align="center" style="background: #F1C702; padding: 6px 0; width: 163px; float: left; margin-top: 7px; border-radius: 5px;">Send</p></div>   
                        </form>
            </div>
            </li>
            <li>
                <div class="slide4_container">
                    <div class="panel1 panel">
                    <h2>Handwriting</h2>
                    <p>Treatment for children who have:</p>
                    <ul>
                    <li>Messy, illegible writing</li>
                    <li>Poor pencil grip</li>
                    <li>Pain when writing</li>
                    </ul>
                    <button><a href="/website69b/groups/in-clinic/handwriting-improvement-group.php">Find out more &raquo;</a></button>
                    </div>

                    <div class="panel2 panel">
                    <h2>Fine motor</h2>
                    <p>For children who are:</p>
                    <ul>
                    <li>Slow and inaccurate when cutting</li>
                    <li>Slow getting dressed</li>
                    <li>Finding completing craft activities difficult</li>
                    </ul>
                    <button><a href="/website69b/groups/in-clinic/handwriting-improvement-group.php">Find out more &raquo;</a></button>
                    </div>

                    <div class="panel3 panel">
                    <h2>Movement </h2>
                    <p>For children who:</p>
                    <ul>
                    <li>Have difficulty throwing and catching</li>
                    <li>Poor balance and co-ordination</li>
                    <li>Find P.E and sports hard</li>
                    </ul>
                    <button><a href="/website69b/groups/in-clinic/handwriting-improvement-group.php">Find out more &raquo;</a></button>
                    </div>

                    <div class="panel4 panel">
                    <h2>Concentration </h2>
                    <p>Is your child:</p>
                    <ul>
                    <li>Fidgety and cannot sit still</li>
                    <li>Easily distracted</li>
                    <li>Forgetful</li>
                    </ul>
                    <button><a href="/website69b/groups/in-clinic/handwriting-improvement-group.php">Find out more &raquo;</a></button>
                    </div> 
                    <div class="clear"></div>                   
                </div>
            </li>
        </ul>
    </div>
</div>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-43312517-1', 'otforkids.co.uk');
  ga('send', 'pageview');

</script>
</BODY>