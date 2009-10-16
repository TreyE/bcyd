<?php

$installer = 0;
$install_msg = "";
if(!is_writable("forms"))
{
$install_msg .= "<li>The <b>forms</b> directory is not writeable.";
$installer = 1;
}
if(!is_writeable("forms/admin"))
{
$install_msg .= "<li>The <b>forms/admin</b> directory is not writeable.";
$installer = 1;
}
if(!is_writeable("use"))
{
$install_msg .= "<li>The <b>use</b> directory is not writeable.";
$installer = 1;
}
if(!is_writeable("forms/admin/config.inc.php"))
{
$install_msg .= "<li>The <b>forms/admin/config.inc.php</b> file is not writeable.";
$installer = 1;
}
if(!is_writeable("forms/admin/data.dat"))
{
$install_msg .= "<li>The <b>forms/admin/data.dat</b> file is not writeable.";
$installer = 1;
}
if(!is_writeable("forms/form1.html"))
{
$install_msg .= "<li>The <b>forms/form1.html</b> file is not writeable.";
$installer = 1;
}
if(!is_writeable("forms/process.php"))
{
$install_msg .= "<li>The <b>forms/process.php</b> file is not writeable.";
$installer = 1;
}

if($installer == 1)
{
echo "<table border=0 width=50% align=center>";
echo "<tr><td width=100% bgcolor='#000000'><center><font face='arial' size=2 color='#ffffff'><b>phpFormGenerator <font color='#ff0000'>installation verification</td></tr>";
echo "<tr><td width=100%><br><font face='arial' size=2>You are seeing this page because you did not follow the steps mentioned in the README file that comes with this program. This page is for installation verification, and will ensure that you have performed all the steps required for this program to work properly. Please take a look at the following message and fix any errors.<br><br></td></tr>";
echo "<tr><td width=100% bgcolor='#c0c0c0'><b><font face='arial' size=2 color='#000000'>File and Directory permissions</td></tr>";
echo "<tr><td width=100% bgcolor='#dddddd'><font face='arial' size=2>".$install_msg."</ul>Please give read+write permissions to all the files and directories mentioned above. Refresh this page after you have done so.<br><br></td></tr>";
echo "<tr><td width=100% bgcolor='#000000'><font face='arial' size=2>.</td><tr>";
echo "<table>";
}
else
{
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
	<title>phpFormGenerator v2.09</title>

<link rel="stylesheet" href="style.css" >

</head>

<body bgcolor="#eeeeee">

<center>
<table cellspacing="20" >
<tr><td>

<!----this is the top navigation bar----->
<table cellspacing="0" cellpadding="1" border="0" bgcolor="333333" ><tr><td>
	<table cellspacing="0" cellpadding="1" border="0" bgcolor="cccccc"><tr><td>
		<table cellspacing="0" cellpadding="3" border="0" bgcolor="white"><tr><td>
			<table cellspacing="0" cellpadding="1" border="0" bgcolor="333333"><tr><td>
			 <table cellspacing="0" cellpadding="5" border="0" bgcolor="#ff9900" width="510">
			  <tr>
			   <td> <p><b>phpFormGenerator</b></p></td>
			   <td valign="bottom" align="right">

				  <table border="0" cellspacing="0" cellpadding="1" bgcolor="#333333"><tr><td>
				  <table height="20" border="0" cellspacing="0" cellpadding="1" bgcolor="#ffcc00">
				   <tr>
				     <td class="small">&nbsp;&nbsp;&nbsp;[
                     <a href="http://phpformgen.sourceforge.net">home</a> ]&nbsp;&nbsp;&nbsp;[<a href="https://sourceforge.net/project/showfiles.php?group_id=45605">update</a>]&nbsp;&nbsp;&nbsp;[<a href="http://sourceforge.net/docman/?group_id=45605">support</a>]&nbsp;&nbsp;&nbsp;[<a href="mailto:musawir@gmail.com">contact</a>]&nbsp;&nbsp;&nbsp;
					 </td>
				   </tr>
				  </table>
				  </td></tr></table>

			   </td>
			  </tr>
			 </table>
			</td></tr></table>
		</td></tr></table>
	</td></tr></table>
</td></tr></table>

</td></tr>
<tr><td>
<!----this is the bottom section where all the content goes----->


<table cellspacing="0" cellpadding="1" border="0" bgcolor="333333" ><tr><td>
	<table cellspacing="0" cellpadding="1" border="0" bgcolor="cccccc"><tr><td>
		<table cellspacing="0" cellpadding="3" border="0" bgcolor="white"><tr><td>
			<table cellspacing="0" cellpadding="1" border="0" bgcolor="333333"><tr><td>
			 <table cellspacing="0" cellpadding="3" border="0" bgcolor="#ff9900" width="510">
				<tr>
				    <td valign="top">
					   <!----Side Navigation and Links----->
					<table>
					  <tr>
					    <td>

	                      <table cellpadding="1" cellspacing="0" border="0" bgcolor="#333333"><tr><td>
						  <table cellspacing="0" cellpadding="2"  bgcolor="#333333" border="0" width="100">
						   <tr><td class="small" align="center">
						   <font color="#FFFFFF"><b>quick links</b></font>
						   </td></tr>
						   <tr>
						   <td class="small" bgcolor="#ffcc00">
						   -
                           <a href="http://sourceforge.net/projects/phpformgen/">project web</a><br>
						   - <a href="http://www.sourceforge.net/">sourceforge</a><br>
						   - <a href="http://www.linux.com">linux.com</a><br>
						   - <a href="http://www.php.net/">php.net</a><br>
						   - <a href="http://www.mysql.com">mysql.com</a><br>
						   - <a href="http://www.apache.org">apache.org</a><br>

						   </td>
						   </tr>
						  </table>
  						  </td></tr></table>



						</td>
					  </tr>
					  <tr>
					    <td><br>
						  <table cellpadding="1" cellspacing="0" border="0" bgcolor="#333333"><tr><td>
						  <table cellspacing="0" cellpadding="2"  bgcolor="#333333" border="0" width="100">
						   <tr><td class="small" align="center">
						   <font color="#FFFFFF"><b>powered by</b></font>
						   </td></tr>
						   <tr>
						   <td class="small" bgcolor="#ffcc00">
						   h4x0rs.us<br>
						   </td>
						   </tr>
						  </table>
  						  </td></tr></table>




						</td>
					   </tr>
					   <tr>
					    <td>

						<br>
						  <table cellpadding="1" cellspacing="0" border="0" bgcolor="#333333"><tr><td>
						  <table cellspacing="0" cellpadding="2" bgcolor="cccccc" border="0" width="100">
						   <tr><td bgcolor="#333333" class="small" align="center">
						   <b><font color="white">wise words</font></b>
						   </td></tr>
						   <tr>
						   <td class="small" bgcolor="#eeeeee">
						 What is the difference between genius and stupidity? Genius has limits. - Albert Einstein.
						   </td>
						   </tr>
						  </table>
  						  </td></tr></table>




						</td>
					  </tr>
					</table>




					</td>
				    <td rowspan="2" align="right">
					   <!----Item boxes for daily news events or whatever you want to talk about, i have included three.----->

					<table><tr><td>

						  <table border="0" cellspacing="0" cellpadding="1" bgcolor="#333333"><tr><td>
						  <table border="0" cellspacing="0" cellpadding="2" bgcolor="#ffcc00" width="380">
						   <tr>
						     <td  bgcolor="#333333"><font color="#FFFFFF"><b>
                             Step 1: number of fields</b></font></td>
						    <td  bgcolor="#333333"  align="right" class="small">
                            <font color="#FFFFFF">v2.09</font> </td>
						   </tr>
						   <tr>
						     <td colspan="2" class="small">
							 please enter the number of fields your form is
                             going to have. enter only numeric digits. the
                             number should be between 1 - 99<br><br>


<p>
<?php
include("copyfunc.php");
$dir_list = ls_a("use/");
if(sizeof($dir_list)>0)
{
if($dir_list[0]!= "")
{
echo "You have created the following forms:<ul>";
for($i=0;$i<sizeof($dir_list);$i++)
echo "<li>".$dir_list[$i]." ... <a href='del_form.php?id=".($i+1)."'>delete?</a>";
echo "</ul>";
echo "<br>Continue with creating a new form:";
}
}
?>
</p>
							 <form action="fields.php" method=post>
Enter the number of fields: <input type=text name="fields">
<br><br><input type=submit value="next">

<br>
<br><br>
<small>note: Depending on your browser's cache settings, the list of forms above might not be correct. Press the refresh button if the list looks wierd.
							 </td>
						   </tr>
						  </table>
						  </td></tr></table><br>

					  </td>
					</tr>
					<tr>
					 <td align="right" class="small">opensource design &copy; 2001
					 </td>
					</tr>
				</table>


			   </td> </tr></table>
			</td></tr></table>
		</td></tr></table>
	</td></tr></table>
</td></tr></table>

</td></tr></table>
<A href="http://sourceforge.net"> <IMG src="http://sourceforge.net/sflogo.php?group_id=45605&amp;type=5" width="210" height="62" border="0" alt="SourceForge Logo"></A>

</center>
</body>
</html>
<?php
}
?>
