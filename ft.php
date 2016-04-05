<?php
function details($img,$name,$mob)
{

	if($img==null)
	{
		$img="default.png";
	}

	echo "<img style='border-radius:50%'  width='150' src='coordinator_image/$img' />
	<p style='text-align: center;'><strong>$name</strong><br>$mob</p>";
}
?>
<script>
	(function($) {
		$(document).ready(function() {
			$(".landingpagewrapper").jnormalblog();
			$(".landingpagewrapper").jlanding();
		});
	})(jQuery);
</script>
</div> <!-- .content -->
</div> <!-- contentholder -->
</div> <!-- #rightsidecontainer -->
</div> <!-- .containerwrapper -->
<div class="contentoverflow"></div> 
</div> <!-- .container -->
</div> <!-- .jviewport --> 		 				
<div class="rightclickoverlay">
	<div class="creditcontainer">
		<p class='top'>Web Team, IERT</p>
		<p class='name'>Explore youre potential</p>


		<p class='title'>CODE BY</p>
		<?php details('kripa.jpg','Kripashanker','');?>



		<p class='title'>DESIGN BY</p>
		<?php details('prakhar.jpg','Prakhar Srivastava','');?>


		<p class='title'>Image Credits</p>

		<?php details('ajay.jpg','Ajay Pandey','');?>
		<?php details('shubham.jpg','shubham Singh','');?>
		<?php details('ravi.jpg','Ravi','');?>

		<p class='title'>Special Thanks </p>
		<?php details('sanjay.jpg','Sanjay Patel','');?>
		



		<span class='break'></span>
		<p class='top'>Thank you</p>	
	</div>

		<div class="roverlayclose"></div>

		<div class="creditaudio">
			<audio id="creditaudioplayer" loop>
				<source src="http://jegtheme.com/asset/jphotolio/ttfid.mp3" type="audio/mpeg">

					<source src="http://jegtheme.com/asset/jphotolio/ttfid.ogg" type="audio/ogg">

					</audio>
				</div> 
			</div>
			
			<script type='text/javascript' src='wp-content/themes/jkreativ/public/js/internalmin/jquery.jcommon254d.js?ver=2.3.1'></script>
			<script type='text/javascript' src='wp-content/themes/jkreativ/public/js/internalmin/main254d.js?ver=2.3.1'></script>
			<script type='text/javascript' src='wp-content/themes/jkreativ/public/mediaelementjs/mediaelement-and-player.min254d.js?ver=2.3.1'></script>
			<script type='text/javascript'>
				/* <![CDATA[ */
				var joption = {
					"rightclick":"1",
					"rightclickmsg":"",
					"enablemegamenu":"0",
					"menucollapsed":"300",
					"smallmenuheight":"50",
					"loaderbackground":"#ffffff",
					"loaderlinecolor":"#020000"};
					/* ]]> */
				</script>
				<script type='text/javascript' src='wp-content/themes/jkreativ/public/js/external/essencialplugin254d.js?ver=2.3.1'></script>
				<script type='text/javascript' src='wp-content/themes/jkreativ/public/js/internalmin/jquery.jpageload254d.js?ver=2.3.1'></script>
				<script type='text/javascript' src='wp-content/themes/jkreativ/public/js/external/code.photoswipe.jquery-3.0.5.1.min254d.js?ver=2.3.1'></script>
				<script type='text/javascript' src='wp-content/themes/jkreativ/public/js/internalmin/jquery.jnormalblog254d.js?ver=2.3.1'></script>
				<script type='text/javascript' src='wp-content/themes/jkreativ/public/js/external/waypoints254d.js?ver=2.3.1'></script>
				<script type='text/javascript' src='wp-content/themes/jkreativ/public/js/external/jquery.typer254d.js?ver=2.3.1'></script>
				<script type='text/javascript' src='wp-content/themes/jkreativ/public/js/internalmin/jquery.jlanding254d.js?ver=2.3.1'></script>
			</body>

			</html>