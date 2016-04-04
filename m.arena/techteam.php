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
		<h1>Technical Team</h1>
		<span class='sectionline'></span>
		<em>We know our stuff!</em>
	</div> 
	
	<div class='row-fluid   jeg_animate_sequence jeg_animate_fast fast '  data-speed='150' data-offset='90' > 
	<?php details('default.png','Aadil Srivastava',' ');?>
	<?php details('default.png','Ajay Pandey',' ');?>
	<?php details('default.png','Amit K. Yadav',' ');?>
	</div>
	<div class='row-fluid   jeg_animate_sequence jeg_animate_fast fast '  data-speed='150' data-offset='90' >
	<?php details('default.png','Kripashanker Tiwari',' ');?>
	<?php details('default.png','Mayank Kumar',' ');?>
	<?php details('default.png','Prakhar Srivastava',' ');?>
	</div>
	<div class='row-fluid   jeg_animate_sequence jeg_animate_fast fast '  data-speed='150' data-offset='90' >
	<?php details('default.png','Rakesh',' ');?>
	<?php details('default.png','Ravi Singh Kushwaha',' ');?>
	<?php details('default.png','Ravishanker Chaubey',' ');?>
	</div><div class='row-fluid   jeg_animate_sequence jeg_animate_fast fast '  data-speed='150' data-offset='90' >
	<?php details('default.png','Sanjay Patel',' ');?>
	<?php details('default.png','Shubham Singh',' ');?>
	</div>

	
	</section>
	
	</div>

<?php
include_once 'ft.php';
?>