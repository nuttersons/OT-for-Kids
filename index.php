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
<?php 
    include_once($path."header.php"); 
?>


<div class="slide1-alt"><img src="/website69b/images/slides/school-bg.png"></div>

<div class="flex-container">
    <div class="flexslider">
        <ul class="slides">
            <li class="slide1">
                <div class="slider_content_box">
                <h2 class="title">OT Groups in School!</h2>
                <div id="slide_spacer"></div>
                <div id="slide_dots"></div>
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
                        <div class="height1">
                             <h2>Reports</h2>
                             <p>Assessments are available on a wide range of conditions and difficulties and can be completed at home, in clinic or at school, including handwriting, autistic spectrum, movement and concentration.</p>
                             </div>
                             <button><a href="/website69b/services/assessments/index.php">Find out more &raquo;</a></button>
                        </div>
                    <div class="slide_jump2 jump">
                    <div class="height1">
                             <h2>Assessments</h2>
                             <p>We offer the option of a report to summarise an assessment, identify problems and provide written recommendations for your child. We also offer medico-legal reports.</p>
                    </div>           
                             <button><a href="/website69b/services/reports/index.php">Find out more &raquo;</a></button>                                            
                    </div>
                    <div class="slide_jump3 jump">
                    <div class="height1">
                             <h2>Treatment </h2>
                             <p>We provide treatment for a variety of difficulties ranging from poor handwriting to un-coordinated movements, and from poor attention to low confidence. We can offer these treatments at home, in clinic or in school, which ever is easiest for you!</p>
                     </div>           
                             <button><a href="/website69b/services/treatment/index.php">Find out more &raquo;</a></button>                 
                    </div>
                    <div class="clear"></div>
                </div>
            </li>
 
            <li class="slide3"> 
            <div class="slide3_container">   
            <h2>Don't be shy, say hello...</h2>
            <div id="slide_spacer"></div>
            <div id="slide_dots"></div>
                        <form name="aform" method="POST" class="form_white" action="http://plus.allforms.mailjol.net/u/71115c50.php">
                        <div class="form_left">
                        <input name="name" class="input" type="text" value="Name:" onblur="if(this.value == '') { this.value='Name:'}" onfocus="if (this.value == 'Name:') {this.value=''}" style="background: #aa0000; border-color: #7A0606; margin-right: 8px;margin-top: 0; color:#fff;">
                        <input name="email"  class="input" type="text" value="Email:" onblur="if(this.value == '') { this.value='Email:'}" onfocus="if (this.value == 'Email:') {this.value=''}"  style="background: #aa0000; border-color: #7A0606; margin-right: 8px;">
                        <input name="phone"   class="input"type="text"  value="Phone:" onblur="if(this.value == '') { this.value='Phone:'}" onfocus="if (this.value == 'Phone:') {this.value=''}"  style="background: #aa0000; border-color: #7A0606; margin-right: 8px;">
                        </div>
                        <textarea class="input3" name="query" style="font-family: 'Arial', sans-serif; font-size:13px; height:80px; /* margin-top: 9px; */ margin-left 9px" onblur="if(this.value == '') { this.value='Message:'}" onfocus="if (this.value == 'Message:') {this.value=''}">Message:</textarea>
                        <div id="send_button4" style="cursor:pointer; float: left;display: inline-blck;width: 100%;max-width: 50%;/* overflow: hidden; */" onclick="javascript:document.aform.submit();"><p align="center" style="background: #F1C702; padding: 6px 0; width: 89%; float: left; max-width: 100%;margin-top: 7px; border-radius: 5px; margin-left: 21px;color: #000;font-weight: bold;"><button class="form_button">Send</button></p></div>   
                        </form>
            </div>
            </li>
            <li>
                <div class="slide4_container">
                    <div class="panel1 panel">
                    <h2>Handwriting</h2>
                    <p>Treatment for children who have:</p>
                    <div class="height">
                    <ul>
                    <li>Messy, illegible writing</li>
                    <li>Poor pencil grip</li>
                    <li>Pain when writing</li>
                    </ul>
                    </div>
                    <button><a href="/website69b/groups/ot-groups-for-schools/handwriting-group.php">Find out more &raquo;</a></button>
                    </div>

                    <div class="panel2 panel">
                    <h2>Fine motor</h2>
                    <p>For children who are:</p>
                    <div class="height">
                    <ul>
                    <li>Slow and inaccurate when cutting</li>
                    <li>Slow getting dressed</li>
                    <li>Finding completing craft activities difficult</li>
                    </ul>
                    </div>
                    <button><a href="/website69b/groups/ot-groups-for-schools/fine-motor-group.php">Find out more &raquo;</a></button>
                    </div>

                    <div class="panel3 panel">
                    <h2>Movement </h2>
                    <p>For children who:</p>
                    <div class="height">
                    <ul>
                    <li>Have difficulty throwing and catching</li>
                    <li>Poor balance and co-ordination</li>
                    <li>Find P.E and sports hard</li>
                    </ul>
                    </div>
                    <button><a href="/website69b/groups/ot-groups-for-schools/movement-group.php">Find out more &raquo;</a></button>
                    </div>

                    <div class="panel4 panel">
                    <h2>Concentration </h2>
                    <p>Is your child:</p>
                    <div class="height">
                    <ul>
                    <li>Fidgety and cannot sit still</li>
                    <li>Easily distracted</li>
                    <li>Forgetful</li>
                    </ul>
                    </div>
                    <button><a href="/website69b/groups/ot-groups-for-schools/concentration-group.php">Find out more &raquo;</a></button>
                    </div> 
                    <div class="clear"></div>                   
                </div>
            </li>
            <li class="slide5">
                <div class="slide5_container">
                       <p>"OT for Kids have been a great help in aiding my son Jake with coping with his dyspraxia both at home and in school. They came out to our house and completed the assessment at home."</p> 
                       <p class="quote_author">Jackie, parent.</p>
                </div>
            </li>    
        </ul>
    </div>
</div>

<div class="main-wrapper">

<div class="clear"></div>
<!--Page breadcrumbs-->


<div class="main-content">
	<div id="bread_crumbs">You are here  &raquo;
		<a href="/website69b/index.php" class="active">Home</a> 
    </div>

<!--Add main page content here-->
 <h2>Paediatric Occupational Therapy</h2> 
 <br>
<b>We deliver children's Occupational Therapy that produces positive results for every child, parent teacher, organisation and school that accesses our services.</b>
<br><br>
<b>Our sole purpose is to produce positive results for every child who accesses our service. </b>
<br><br>

 
<div class="jumps_half">
    <div class="jump">
        <a href="/website69b/about-us/index.php" class="jump_link">About us</a>
    </div>
        <div class="jump">
        <a href="/website69b/about-us/index.php" class="jump_link">Services</a>
    </div>
        <div class="jump">
        <a href="/website69b/about-us/index.php" class="jump_link">Groups</a>
    </div>
</div>
<div class="jumps_half1">
    <div class="jump">
        <a href="/website69b/about-us/index.php" class="jump_link">Conditions</a>
    </div>
        <div class="jump">
        <a href="/website69b/about-us/index.php" class="jump_link">Problems we help</a>
    </div>
        <div class="jump">
        <a href="/website69b/about-us/index.php" class="jump_link">Who we work with</a>
    </div>
</div> 
<div class="clear"></div>
   
<br>


OT for Kids are a nationwide, specialised private Occupational Therapy service for children. Our friendly and caring occupational therapists have vast experience in providing a wide range of services to many different children. Whether we work with mainstream children or those children with special educational needs, we will have the right occupational therapist to meet their needs.
<br><br>
Occupational therapy is a branch of medical healthcare that centre on improving the ability and function of people across both activities we use every day and activities we enjoy.  Our occupational therapists aim to help not only the children we work with but provide a supporting, understanding and caring environment for the parents/guardians involved with the child. <br><br>
OT for Kids provide a professional, client centred service without long waiting lists. Our core values are to ensure a fast, effective and reliable service in striving to provide a better future for your child. <br><br>
OT for Kids work alongside other allied health professionals including speech and language therapists and physiotherapists to provide you with the best level of care possible. We offer a diverse service ranging from one on one therapy to group based therapy in clinic, at home or in school depending upon which suits you best.	   
<br><br>

	<a class="back_to_top_link" href="#top">&uarr; Back to Top</a>

			<div id="call_to_action">
					<img src="/website69b/images/butterfly.png" border="0" class="butterfly" alt="Butterfly" title="Butterfly">
					<a class="title">Next steps:</a><br><br>
					Please contact one of our experienced occupational therapists today and we will gladly discuss how we can help and what services we can offer you.
					<ul>
					<li class="phone">0330 223 0888</li>
					<li class="email"><a href="/website69b/mailto:&#111;&#102;&#102;&#105;&#099;&#101;&#064;&#111;&#116;&#102;&#111;&#114;&#107;&#105;&#100;&#115;&#046;&#099;&#111;&#046;&#117;&#107;">&#111;&#102;&#102;&#105;&#099;&#101;&#064;&#111;&#116;&#102;&#111;&#114;&#107;&#105;&#100;&#115;&#046;&#099;&#111;&#046;&#117;&#107;</a></li>
					<li class="address">3-5 St John Street, Manchester, M3 4DN &nbsp; [<a href="/website69b/about-us/our-clinics/index.php#map">map</a>]</li>
					</ul>
				</div>

	</div>

	<!--Left Side Column Content-->

	<div class="left-side-column">
		<h3 class="next-title"><a href="/website69b/services/index.php">Our Services &raquo;</a></h3>
		<ul class="left-side-column-list">
		<div class="branch-1" href="/website69b/#">&nbsp;</div>
			<li><a href="/website69b/services/assessments/index.php">Assessments</a></li>
			<li><a href="/website69b/services/reports/index.php">Reports</a></li>
			<li><a href="/website69b/services/treatment/index.php">Treatment</a></li>
			<li><a href="/website69b/services/consultancy.php">Consultancy </a></li>
			<li><a href="/website69b/groups/ot-groups-for-schools/index.php">OT Groups for Schools</a></li>
			<li><a href="/website69b/groups/in-clinic/fine-motor-group.php">Fine motor group</a></li>
			<li><a href="/website69b/groups/in-clinic/handwriting-improvement-group.php">Handwriting improvement group</a></li>
			<li><a href="/website69b/groups/in-clinic/concentration-and-memory-group.php">Concentration and memory group</a></li>
			<li><a href="/website69b/groups/in-clinic/movement-and-co-ordination-group.php">Movement and Co-ordination group</a></li>
		</ul>
	</div>

</div>


<!--Right Side Column Content-->

<?php 
    include_once($path."footer.php"); 
?>
	

