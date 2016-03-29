<?php
if(isset($_GET['submit'])){
  $name=$_GET['name'];
  $college=$_GET['college'];
  $university=$_GET['university'];
  $contact=$_GET['contact'];
  $email=$_GET['email'];
  $facebookid==$_GET['facebookid'];
  $event=$_GET['event'];
  $branch=$_GET['branch'];
  $year=$_GET['year'];
  $txt = "Dear "+$name+", <br>You have successfuly registed for the "+$event+" at Technovation 2k16";
  $subject = "Technovation Registration";
  $headers = "From: technovation@iert.org.in" . "\r\n" ;

  mail($email,$subject,$txt,$headers);
  $data=$name+" "+$event+" "+$email+" "+$facebookid+" "+$college+" "+$year+" "+$branch;
  mail("iamkripashanker@gmail.com", "technovation reg", $data);
  $status="You are successfuly registed";

}

?>
<html lang="en"><script type="text/javascript">if(hostnameFilters=["www.kongregate.com","a.kongregate.com","www.gamevial.com","www.kogama.com","poki.com","www.gamesfreak.net","www.clickjogos.com.br"],-1!=hostnameFilters.indexOf(window.location.hostname)&&Object.defineProperty(window.navigator,"userAgent",{get:function(){return"Mozilla/5.0 (Windows NT 6.1; WOW64; rv:33.0) Gecko/20120101 Firefox/33.0"}}),hostnameFilters=["www.kogama.com","www.newgrounds.com"],-1===hostnameFilters.indexOf(window.location.hostname)){for(var isUnityInstalled=!1,i=0;i<navigator.plugins.length;i++)"Unity Player"===navigator.plugins[i].name&&(isUnityInstalled=!0);if(!isUnityInstalled){var unityMimeTypes=function(){var n={enabledPlugin:!0,description:"Unity Player datafile",suffixes:"unity3d",type:"application/vnd.unity"};return n},unityPlugin=function(){var n={name:"Unity Player",description:"Unity Player 5.2.2f1",filename:"npUnity3D32.dll",version:"5.2.2.22320"};return n},unityMimeTypes=new unityMimeTypes,unityPlugin=new unityPlugin;navigator.mimeTypes["application/vnd.unity"]=unityMimeTypes,navigator.plugins["Unity Player"]=unityPlugin}}</script><head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="image/photo.jpg">

<title>Questionnair</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">   
</head>

<body>

 <div class="container">

  <div class="rows">
   <div class="col-lg-3"></div>
   <div class="col-lg-6">
    <form class="form-signin" method="POST" action="#">

     <h2 align="center">Registration for Events</h2>
     <h3 align="center">Technovation 2k16</h3> 
     <br>
     <?php
        if(isset($status)){
          unset($status)
     ?>
     <div class="alert alert-success">You are successfuly registed</div>
     <?php
      }
     ?>
     <label for="InputName">Enter Name</label><input type="text" name="name" class="form-control" placeholder="Enter name" required=""><br>


     <label></label>	

     <label for="InputName">Event Name</label><input typ="text" class="form-control" name="event" placeholder="e.g. robowar"><br>
     <label></label>	<br>
     <div class="col-lg-6">
      <label for="Branch">Branch</label><br>
      <input type="text" name="branch" placeholder="e.g. Computer Science & Engineering" class="form-control">

    </div>
    <div class="col-lg-6">
      <label for="Year">Year</label>
      <select class="select form-control" name="year">
       <option value="1">1</option>
       <option value="2">2</option>
       <option value="3">3</option>
       <option value="4">4</option>					
     </select>
   </div>
   <br><br><br><br><br>
   <label for="InputUniversity">University</label> <input type="text" class="form-control" name="university" placeholder="e.g. Uttar Pradesh Technical University, Lucknow" required=""><br>
   <label for="InputName">College</label> <input type="text" class="form-control" name="college" placeholder="e.g. Institute of Engineering and Rural Technology, Allahabad" required=""><br>

   <div class="form-group">


     <div class="col-xs-4">
       <label for="InputRollNo">University Roll-No.</label> <input type="text" name="rollno" class="form-control" placeholder="1234567890" required="">  
     </div>
     <div class="col-xs-8">
       <label for="InputName">Email</label> <input type="text" class="form-control" name="email" placeholder="abc@gmail.com" required=""><br>
     </div>
   </div>
   <br>
   <div class="form-group">
    <div class="col-xs-4">
     <label for="InputName">Contact No.</label> <input type="text" class="form-control" name="contact" placeholder="1234567890" required="">						
   </div>	
   <div class="col-xs-8">
     <label for="InputName">Facebook-id</label>	<input type="text" class="form-control" name="facebookid" placeholder="facebook.com/____________" required=""><br>
   </div>
 </div>

 <label for="InputName">Address</label>
 <textarea class="textarea form-control input-lg" rows="5" name="address"></textarea><br>





 <h1 align="center"><a class="btn btn-primary" type="submit" name="submit" href="http://technovation.iert.org.in">Submit</a></h1>

</form>
On Successful submission, you will recieve a email.
<h1>    </h1>
</div>
<div class="col-lg-3"></div>

</div>

</div> <!-- /container -->


<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="ie10-viewport-bug-workaround.js"></script>






</body></html>
