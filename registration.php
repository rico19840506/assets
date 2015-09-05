<?php require_once('../Connections/User_registration.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

mysql_select_db($database_User_registration, $User_registration);
$query_user_regestration = "SELECT * FROM users";
$user_regestration = mysql_query($query_user_regestration, $User_registration) or die(mysql_error());
$row_user_regestration = mysql_fetch_assoc($user_regestration);
$totalRows_user_regestration = mysql_num_rows($user_regestration);
?>
<!DOCTYPE html> 
<html>
<head>
<meta charset="UTF-8">
<title>jQuery Mobile Web App</title>
<link href="../jquery-mobile/jquery.mobile-1.0.min.css" rel="stylesheet" type="text/css"/>
<script src="../jquery-mobile/jquery-1.6.4.min.js" type="text/javascript"></script>
<script src="../jquery-mobile/jquery.mobile-1.0.min.js" type="text/javascript"></script>
</head> 
<body>
<div data-role="header" data-theme="b">
  <h1>registration</h1>
        
        
           <form name="form" method="POST">
		Username: <input type="text" name="username" /><br />
		Password: <input type="password" name="password" /><br />
		First name: <input type="text" name="first_name" /><br />
		Last name: <input type="text" name="last_name" /><br />
		   Email:
		<input type="text"name="email" /><br />
	" 
 
		<input name="submit" type="submit" value="Register" data-theme="e" />
    </form>
</div>
	<div data-role="content">	
	  <p>if you have become our friend <a href="login.php" title="login" target="_self" class="fade" accesskey="2" tabindex="b">login</a></p>
	</div>
<div data-role="footer">   
</html>
<?php
mysql_free_result($user_regestration);
?>
