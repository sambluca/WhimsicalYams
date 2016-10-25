<?php
if ($_SESSION['yamyn']== 'yes') //If the session variable yamyn (Yam Yes Or No) equals yes, it means the user is an admin so do this
{echo'
<li style="float:right"><a href=" postingarticle.php">Post</a></li>  <li style="float:right"><a href="yamzone.php">Yam Zone</a> </li><li style="float:right"><a href="goodbye.php">Logout</a></li>';}
else{
echo"
<p>You are now logged in,
{$_SESSION['first_name']} {$_SESSION['last_name']}
</p>";
echo'<p>
 <a href="yamzone.php">Yam Zone</a>&nbsp <a href="goodbye.php">Logout</a>
</p>';
}
?>
