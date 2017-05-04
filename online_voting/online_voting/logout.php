<?php
session_start();
?>
<html><head>
<link href="css/user_styles.css" rel="stylesheet" type="text/css" />
<center><a href ="https://sourceforge.net/projects/pollingsystem/"><img src = "images/vote.png" alt="site logo"></a></center><br>   
</head><body bgcolor="tan">  
<center><b><font color = "brown" size="6">Polling System</font></b></center><br><br>
<div id="page">
<div id="header">
<h1>Logged Out Successfully </h1>
<p align="center">&nbsp;</p>
</div>
<?php
session_destroy();
?>
You have been successfully logged out.<br><br><br>
Return to <a href="index.php">Login</a>
<div id="footer">
<div class="bottom_addr">&copy; K@RAN Polling System. All Rights Reserved</div>
</div>
</div>
</body></html>