<? require('include/header.php'); ?>


<div class="main_body">
	<div class="right_col">	
	<? require('include/right_col.php'); ?>
	</div><!-- right column -->

	<div class="left_col">
		<div style="float:left; width: 146px;">
			<? require('include/left_col.php'); ?>
		</div> <!-- left left side -->
		<div class="left_col_content">

	
	<span class="top">Join</span>

<FORM METHOD="POST"
 ACTION="http://www.bcyd.org/cgi-bin/cgiemail/join.txt">    

<INPUT TYPE="hidden" NAME="success" VALUE="http://www.bcyd.org/thanks.php">

<table align="left" width="400" border="0">
  <tr>
    <td align="right">Name:</td>
    <td align="left"><input name="name" type="text" size="40" maxlength="100" /></td>
  </tr>
  <tr>
    <td align="right">Email Address:</td>

    <td align="left"><input name="email" type="text" size="40" maxlength="100" /></td>
  </tr>
  <tr>
    <td align="right">Phone Number:</td>

    <td align="left"><input name="phone" type="text" size="40" maxlength="15" /></td>
  </tr>
  <tr>
    <td align="right">Street Address:</td>

    <td align="left"><input name="street" type="text" size="40" maxlength="15" /></td>
  </tr>
  <tr>
    <td align="right">City:</td>

    <td align="left"><input name="city" type="text" size="40" maxlength="15" /></td>
  </tr>
  <tr>
    <td align="right">Zip:</td>

    <td align="left"><input name="zip" type="text" size="40" maxlength="15" /></td>
  </tr>
	<tr>
	<td></td>
	<td align="left">
	</td>
	</tr>

  <td align="center" colspan="2"><input name="" type="submit" value="Send" /></td>

  </tr>
</table>
</form>

		</div><!-- right left side -->
	</div><!-- left column -->
</div><!-- main body -->

<? require('include/footer.php'); ?>