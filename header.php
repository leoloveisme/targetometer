<table width=100%>
<tr>
<td align=left>
<a href="index.php" target="" title="">Logotype and link to the index page</a>
<br><br>
Search <input>
</td>
<td align=right valign=top>
<?php 
$current_page_name=basename($_SERVER['PHP_SELF']);
echo 'Hello, <b>guest</b>. ';

if ($current_page_name=="register.php") echo 'Register ';
else
echo '<a href="register.php" title="" target="">Register</a> ';

if ($current_page_name=="login.php") echo 'Login ';
else
echo '<a href="login.php" title="" target="">Login</a> ';
?>
</td>
</tr>
</table>
