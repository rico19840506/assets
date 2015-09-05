<?php
//initialize the session
if (!isset($_SESSION)) {
  session_start();
}

// ** Logout the current user. **
$logoutAction = $_SERVER['PHP_SELF']."?doLogout=true";
if ((isset($_SERVER['QUERY_STRING'])) && ($_SERVER['QUERY_STRING'] != "")){
  $logoutAction .="&". htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_GET['doLogout'])) &&($_GET['doLogout']=="true")){
  //to fully log out a visitor we need to clear the session varialbles
  $_SESSION['MM_Username'] = NULL;
  $_SESSION['MM_UserGroup'] = NULL;
  $_SESSION['PrevUrl'] = NULL;
  unset($_SESSION['MM_Username']);
  unset($_SESSION['MM_UserGroup']);
  unset($_SESSION['PrevUrl']);
	
  $logoutGoTo = "login.php";
  if ($logoutGoTo) {
    header("Location: $logoutGoTo");
    exit;
  }
}
?>
<!DOCTYPE html> 
<html>

<style>

@chareset "UTF-8";
/* css Document*/


</style>

<script type="text/javascript">
function MM_goToURL() { //v3.0
  var i, args=MM_goToURL.arguments; document.MM_returnValue = false;
  for (i=0; i<(args.length-1); i+=2) eval(args[i]+".location='"+args[i+1]+"'");
}
</script>

<head>

<title>Geolocaton API:</title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="../css/phonegap/PhoneGapBuildPlugin 2.css">
<link rel="stylesheet" type="text/css" href="../css/phonegap/PhoneGapBuildPlugin.css">
<link rel="stylesheet" type="text/css" href="../css/phonegap/style.css">
<script type="text/javascript" charset="utf-8"
src="phonegap.js"></script>

<script src="../css/phonegap/PhoneGapPlugin 2.js"></script>
<script src="scripts/accelater.js"></script>
<script src="scripts/conection01.js"></script>


<link rel="stylesheet" type="text/css" href="../css/@mediastylesheet.css">
<script src="http://maps.google.com/maps/api/js?sensore=true"></script>

<link href="../jquery-mobile/jquery.mobile-1.0.min.css" rel="stylesheet" type="text/css"/>
<script src="../jquery-mobile/jquery-1.6.4.min.js" type="text/javascript"></script>
<script src="../jquery-mobile/jquery.mobile-1.0.min.js" type="text/javascript"></script>
<script src="">
<script src="scripts/mapscript.js"></script>
</script>
<script src="scripts/@mediascript01.js"></script>
<script src="scripts/validationzipcodescript.js"></script>
<script>[2013-03-07 19:55:07 - SDK Manager] Error parsing C:\Users\sr\.android\devices.xml, backing up to C:\Users\sr\.android\devices.xml.old
[2013-03-07 19:55:15 - SDK Manager] Error parsing C:\Users\sr\.android\devices.xml, backing up to C:\Users\sr\.android\devices.xml.old
</script>
<body>
<plugin name="Geolocation" value="org.apache.cordova.GeoBroker" />


<uses-permission android:name="android.permission.ACCESS_COARSE_LOCATION" />
<uses-permission android:name="android.permission.ACCESS_FINE_LOCATION" />
<uses-permission android:name="android.permission.ACCESS_LOCATION_EXTRA_COMMANDS" />

<plugin name="Geolocation" value="org.apache.cordova.geolocation.Geolocation" />

<rim:permissions>
    <rim:permit>read_geolocation</rim:permit>
</rim:permissions>

<plugin name="Geolocation" value="CDVLocation" />


<Capabilities>
    <Capability Name="ID_CAP_LOCATION" />
</Capabilities>



<div data-role="page" id="page">
<div data-role="header" data-theme="a">
		<h1>location</h1>
        <p>
   
  <input type="submit" name="submit" value="location" />
  
 <a href="comment.php" title="coment" target="_blank" accesskey="4" tabindex="h" onClick="MM_goToURL('parent','comment.php');return document.MM_returnValue"> <input type="submit" name="submit" value="post coments" /></a>
   <p>A dialog box will report the network state.</p>

  
 
     
<a href="<?php echo $logoutAction ?>">Log out</a>        </p>
      


			</div>
<div data-role="footer" data-theme="e">
		<h4>Page Footer</h4>
	</div>




</body>
</html>



  
<div data-role="content">	