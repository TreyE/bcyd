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
                             Step 2: describe the fields</b></font></td>
						    <td  bgcolor="#333333"  align="right" class="small">
                            <font color="#FFFFFF">v2.09</font> </td>
						   </tr>
						   <tr>
						     <td colspan="2" class="small">
							 now please enter the specific information for each
                             field. check the required check box if you want
                             this form field to be required (users who don't
                             enter this field will get an error and will be
                             prompted to try again). the field size 1 and size 2
                             are flexible. if you choose text box as your field
                             type, then field size 1 is optional and field size
                             2 is not required. the value of field size 1 will
                             be applied to your text box, if left blank the
                             default value will be used. if you choose drop down
                             select or radio button, field size 1 is required in
                             that case and they denote the number of options for
                             those two fields. if you choose text area, then
                             size 1 and size 2 are both required and they denote
                             rows and columns of the text area. if you choose file upload, then size 1 becomes the maximum file size that can be uploaded (if this is left blank, then any file size can be uploaded).<br><br>

<!-- The form stuff -->
<?php

// Global registers by pass

include("global.inc.php");
pt_register('POST','fields');

// Start regular stuff

$errors=0;
$error.="The following errors occured while processing your request:<ul>";
if(!ereg("^([1-9]{1})([0-9]{0,1})([0-9]{0,1})$",$fields))
{
$errors++;
$error.="<li> You did not enter a valid number. Please use a number between 1 and 99.";
}

if($errors!=0)
echo $error;
else
{
echo "<form action='process.php' method=post>";
echo "<table width=100%>";
echo "<tr><td class='small'>Field No.</td><td class='small'>Required?</td><td class='small'>Field Name</td><td class='small'>Field type</td><td class='small'>Field size1</td><td class='small'>Field size2</td></tr>";
for($i=0;$i<$fields;$i++)
{
echo "<tr><td>".($i+1)."</td><td><input type=checkbox name='required[$i]' value='on'></td><td><input type='name' name='name[$i]' size='20'></td>";
echo "<td><select name='type[$i]'>";
echo "<option value='checkbox'> Check Box";
echo "<option value='text'> Text Box";
echo "<option value='email'> Email";
echo "<option value='password'> Password";
echo "<option value='radio'> Radio Button";
echo "<option value='select'> Drop Down Select";
echo "<option value='textarea'> Text Area";
echo "<option value='file_upload'> File Upload";
echo "<option value='hidden'> Hidden Field";
echo "<option value='ENV'> Env. Variable";
echo "</select></td>";
echo "<td><input type=text name='size1[$i]' size=2></td>";
echo "<td><input type=text name='size2[$i]' size=2></td></tr>";
}
echo "</table><br><input type=submit value='next'>";
}

?>

<!-- end stuff -->


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
