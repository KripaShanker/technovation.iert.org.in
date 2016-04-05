<?php
function details($img,$name,$mob)
{

	if($img==null)
	{
		$img="default.png";
	}

	echo "<div class='span4  jeg_do_animate'  data-animation='janimate-fadein'   data-transform='janimate-scale'   data-position='janimpos-bottom' ><img style='border-radius:50%' class='aligncenter size-full wp-image-90' width='150' src='coordinator_image/$img' /></p>
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
			<?php details('aadil.jpg','Aadil Srivastava',' ');?>
			<?php details('ajay.jpg','Ajay Pandey',' ');?>
			<?php details('amit.jpg','Amit K. Yadav',' ');?>
		</div>
		<div class='row-fluid   jeg_animate_sequence jeg_animate_fast fast '  data-speed='150' data-offset='90' >
			<?php details('kripa.jpg','Kripashanker Tiwari',' ');?>
			<?php details('mayank.jpg','Mayank Kumar',' ');?>
			<?php details('prakhar.jpg','Prakhar Srivastava',' ');?>
		</div>
		<div class='row-fluid   jeg_animate_sequence jeg_animate_fast fast '  data-speed='150' data-offset='90' >
			<?php details('rakesh.jpg','Rakesh',' ');?>
			<?php details('ravi.jpg','Ravi Singh Kushwaha',' ');?>
			<?php details('ravishankar.jpg','Ravishankar Chaubey',' ');?>
		</div><div class='row-fluid   jeg_animate_sequence jeg_animate_fast fast '  data-speed='150' data-offset='90' >
		<?php details('sanjay.jpg','Sanjay Patel',' ');?>
		<?php details('shubham.jpg','Shubham Singh',' ');?>
		<?php details('shubham_verma.jpg','Shubham Verma',' ');?>
	</div>

	
</section>

</div>

<?php
include_once 'ft.php';
?>