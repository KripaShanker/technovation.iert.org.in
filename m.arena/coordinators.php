<?php
function details($img,$name,$mob)
{

if($img==null)
{
	$img="default.png";
}

echo "<div class='span4  jeg_do_animate'  data-animation='janimate-fadein'   data-transform='janimate-scale'   data-position='janimpos-bottom' ><img class='aligncenter size-full wp-image-90' width='100' src='coordinator_image/$img' /></p>
	<p style='text-align: center;'><strong>$name</strong><br>$mob</p>
	</div>";
}
?>

<?php
include_once 'hd.php';
?>


<div class="landingpagewrapper ">
	<div class="contentheaderspace"></div>


<section 
		class="doubletopmargin doublebottommargin  light   " 
		data-id="page-blog-layout" 
		data-title="Blog & Page Layout"
		 
		style="background-image : url(wp-content/uploads/2014/05/pagelayout_bg.png);background-position : center center;background-repeat	: repeat;">
		
				
				<div class='parallaxoverlay' style='background:rgba(255,255,255,0);'></div>		
			
		
		<div class="sectioncontainer">		
			<div class='section-header  position-center'>
			<p id="sponsors"></p>
		<h1>Scheduling Team</h1>
		<span class='sectionline'></span>
		<em>Space-Time Management!</em>
	</div> 
	
	<div class='row-fluid   jeg_animate_sequence jeg_animate_fast fast '  data-speed='150' data-offset='90' > 
	<?php details('default.png','Dhananjay','8948321455');?>
	<?php details('default.png','Abhishek','9457605352');?>
	<?php details('default.png','Himmayat','7052601459');?>
	</div>
	<div class='row-fluid   jeg_animate_sequence jeg_animate_fast fast '  data-speed='150' data-offset='90' >
	<?php details('default.png','Shashwat','7408165484');?>
	<?php details('default.png','Paritosh','9793861928');?>
	<?php details('default.png','Kripashanker','8896608650');?>
	</div>
	<div class='row-fluid   jeg_animate_sequence jeg_animate_fast fast '  data-speed='150' data-offset='90' >
	<?php details('default.png','Shruti Sahu',' ');?>
	<?php details('default.png','Divyam','8605180061');?>
	<?php details('default.png','Nitish',' ');?>
	</div><div class='row-fluid   jeg_animate_sequence jeg_animate_fast fast '  data-speed='150' data-offset='90' >
	<?php details('default.png','Sachin Pandey',' ');?>
	</div>

	<div class="sectioncontainer">		
			<div class='section-header  position-center'>
			<p id="sponsors"></p>
		<h1>Registration Team - College</h1>
		<span class='sectionline'></span>
		<em>Trackers of local participation</em>
	</div> 
	
	<div class='row-fluid   jeg_animate_sequence jeg_animate_fast fast '  data-speed='150' data-offset='90' > 
	<?php details('default.png','Reyansh (EL)','9005472398');?>
	<?php details('default.png','Shubham Desai (ME)','8874511497');?>
	<?php details('default.png','Shashwat (EL)','7408165484');?>
	</div>
	<div class='row-fluid   jeg_animate_sequence jeg_animate_fast fast '  data-speed='150' data-offset='90' > 
	<?php details('default.png','Ravishankar (CS)','8896101102');?>
	</div>
	
	<div class="sectioncontainer">		
			<div class='section-header  position-center'>
			<p id="sponsors"></p>
		<h1>Registration Team - Promotion</h1>
		<span class='sectionline'></span>
		<em>Trackers of foreign participation</em>
	</div> 
	
	<div class='row-fluid   jeg_animate_sequence jeg_animate_fast fast '  data-speed='150' data-offset='90' > 
	<?php details('default.png','Rajat (CE)','8543044314');?>
	<?php details('default.png','Shanatanu (EL)','8563019639');?>
	</div>
		
	<div class="sectioncontainer">		
			<div class='section-header  position-center'>
			<p id="sponsors"></p>
		<h1>Web Team</h1>
		<span class='sectionline'></span>
		<em>Connecting us all!</em>
	</div> 
	
	<div class='row-fluid   jeg_animate_sequence jeg_animate_fast fast '  data-speed='150' data-offset='90' > 
	<?php details('default.png','Ajay Pandey','9125580401');?>
	<?php details('default.png','Kripashanker','8896608650');?>
	<?php details('default.png','Prakhar Srivastava','9369168442');?>
	</div>
	<div class='row-fluid   jeg_animate_sequence jeg_animate_fast fast '  data-speed='150' data-offset='90' > 
	<?php details('default.png','Ravi Singh Kushwaha','8303210846');?>
	</div>	
	
	<div class="sectioncontainer">		
			<div class='section-header  position-center'>
			<p id="sponsors"></p>
		<h1>Accounts Team</h1>
		<span class='sectionline'></span>
		<em>The financial authority..</em>
	</div> 
	
	<div class='row-fluid   jeg_animate_sequence jeg_animate_fast fast '  data-speed='150' data-offset='90' > 
	<?php details('default.png','Mohit (ME)',' ');?>
	<?php details('default.png','Pragya Kaushik',' ');?>
	<?php details('default.png','Abhsihek (CE)',' ');?>
	</div>
	<div class='row-fluid   jeg_animate_sequence jeg_animate_fast fast '  data-speed='150' data-offset='90' > 
	<?php details('default.png','Shubhi (ME)',' ');?>
	<?php details('default.png','Gyandeep (CS)',' ');?>
	<?php details('default.png','Paritosh (CS)',' ');?>
	</div>
	
	<div class="sectioncontainer">		
			<div class='section-header  position-center'>
			<p id="sponsors"></p>
		<h1>Sponsors Team</h1>
		<span class='sectionline'></span>
		<em>The awesome advertisers..</em>
	</div> 
	
	<div class='row-fluid   jeg_animate_sequence jeg_animate_fast fast '  data-speed='150' data-offset='90' > 
	<?php details('default.png','Abhishek (CE)','9457605352');?>
	<?php details('default.png','Rajat (CE)','8543044314');?>
	<?php details('default.png','Gyandeep (CS)','9889389190');?>
	</div>
	<div class='row-fluid   jeg_animate_sequence jeg_animate_fast fast '  data-speed='150' data-offset='90' > 
	<?php details('default.png','Sujeet (IP)','9506715996');?>
	<?php details('default.png','Pragya Kaushik (ME)',' ');?>
	</div>
	
	<div class="sectioncontainer">		
			<div class='section-header  position-center'>
			<p id="sponsors"></p>
		<h1>Poster &amp; Team</h1>
		<span class='sectionline'></span>
		<em>The presenters of Technovation on canvas..</em>
	</div> 
	
	<div class='row-fluid   jeg_animate_sequence jeg_animate_fast fast '  data-speed='150' data-offset='90' > 
	<?php details('default.png','Pragyat (IC)','9376519544');?>
	<?php details('default.png','Shubham Singh (CS)','8726609870');?>
	<?php details('default.png','Atif (ME)','8181036038');?>
	</div>
	<div class='row-fluid   jeg_animate_sequence jeg_animate_fast fast '  data-speed='150' data-offset='90' > 
	<?php details('default.png','Devendra (ME)','9795697646');?>
	</div>
	
	<div class="sectioncontainer">		
			<div class='section-header  position-center'>
			<p id="sponsors"></p>
		<h1>Promotion Team</h1>
		<span class='sectionline'></span>
		<em>Look out for us; We will persuade you to participate</em>
	</div> 
	
	<div class='row-fluid   jeg_animate_sequence jeg_animate_fast fast '  data-speed='150' data-offset='90' > 
	<?php details('default.png','Atif (ME)','8181036038');?>
	<?php details('default.png','Meenakshi (CS)',' ');?>
	<?php details('default.png','Vibhor (EL)','8896328804');?>
	</div>
	<div class='row-fluid   jeg_animate_sequence jeg_animate_fast fast '  data-speed='150' data-offset='90' > 
	<?php details('default.png','Shantanu (EL)','8563019639');?>
	<?php details('default.png','Shashwat (EL)','7408165484');?>
	<?php details('default.png','Vaishali (ME)',' ');?>
	</div>
	<div class='row-fluid   jeg_animate_sequence jeg_animate_fast fast '  data-speed='150' data-offset='90' > 
	<?php details('default.png','Shubhi (ME)',' ');?>
	<?php details('default.png','Rajat (CE)','8543044314');?>
	<?php details('default.png','Kalpana (EL)',' ');?>
	</div>
	<div class='row-fluid   jeg_animate_sequence jeg_animate_fast fast '  data-speed='150' data-offset='90' > 
	<?php details('default.png','Harshit Gupta (CS)','8765630745');?>
	</div>
	
	</section>
	
	</div>

<?php
include_once 'ft.php';
?>