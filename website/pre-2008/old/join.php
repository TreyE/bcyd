<? require('include/header_bcyd.php'); ?>

<body style="background-color: rgb(255, 255, 238);">
<center>
<table style="text-align: left; width: 750px;" border="0"
 cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td style="vertical-align: top;">
<? require('include/top_nav.php'); ?>
      </td>
    </tr>
    <tr>
      <td style="vertical-align: top;">
      <table style="text-align: left; width: 750px;" border="0"
 cellspacing="0" cellpadding="0">
        <tbody>
          <tr>
            <td style="vertical-align: top; width: 150px;">
            <table style="text-align: left; width: 146px;" border="0"
 cellspacing="0" cellpadding="0">
              <tbody>
                <tr>
                  <td style="vertical-align: top;"><img
 style="width: 146px; height: 15px;" alt="formating image"
 src="img/top_left_rounded.jpg"><br>
                  </td>
                </tr>
                <tr>
                  <td
 style="vertical-align: top; width: 146px; background-image: url(img/middle_left_bar.jpg); background-repeat: repeat-y;">
	<center>	
	<span class="left_col">
	<?php
	$textfile ="http://www.bcyd.org/dev/random.txt"; 

	$f = implode('', file("$textfile"));
	#print "$f";
	$quotes = explode("****", $f);
	$quote = rand(0, sizeof($quotes)-1);
	$tmp = str_replace("\n", "<br>\n", $quotes[$quote]);
	$content = $tmp;
	print "$content";
	
	?>
	</span>
	<center><br>
                  </td>
                </tr>
                <tr>
                  <td style="vertical-align: top;"><img
 style="width: 146px; height: 15px;" alt="formatting"
 src="img/bottom_left_rounded.jpg"><br>
                  </td>
                </tr>
              </tbody>
            </table>
            </td>
            <td style="vertical-align: top; width: 450px;">
            <table style="width: 446px;" border="0" cellspacing="0"
 cellpadding="0">
              <tbody>
                <tr>
                  <td style="vertical-align: top;"><img
 style="width: 446px; height: 10px;" alt="formatting"
 src="img/top_middle_rounded.jpg"><br> </td>
                </tr>
                <tr>
                  <td
 style="vertical-align: top; background-image: url(img/middle_middle.jpg); background-repeat: repeat-y;">

	<span class="mid_col">
	<span style="font-size: 25px;
	  font-weight: bold;
	  color: #fff;">Join BCYD's listserve:</span>
	<p>
<form name="" method="post" action="http://www.ydmaryland.org/newsroom/mailinglist/box.php">
<table width="212" border="0" cellspacing="0" cellpadding="0">
<tr> 
<td width="75"><div align="right" style="color:#fff;">E-mail</div></td>

<td><div align="right"> 
<input name="email" type="text" id="email" value="" size="16">
</div></td>
</tr>
<tr> 
<td width="75"><div align="right" style="color:#fff;">Name</div></td>

<td><div align="right"> 
<input name="name" type="text" id="name" value="" size="16">
</div></td>
</tr>

<tr> 
<td width="75"><div align="right"> </div></td>
<td> <div align="left"> &nbsp; &nbsp; 

<input name="funcml" type="radio" value="add" checked style="color:#fff;">
Subscribe </div></td>
</tr>
<tr> 

<td width="75"><div align="right"> </div></td>
<td> <div align="left"> &nbsp;&nbsp;&nbsp; 
<input name="funcml" type="radio" value="unsub2" style="color:#fff;">
Unsubscribe </div></td>
</tr>
<tr> 
<td width="75"><div align="right">
<input name="p" type="hidden" id="p" value="10">

<input type="hidden" name="nlbox[1]" value="16">
</div></td>
<td> <div align="right"> 

<br> 
<input type="submit" name="Submit" value="Submit">
</div></td>
</tr>
</table>
</form> 

	</p>
</span>
</td>
                </tr>
                <tr>
                  <td style="vertical-align: top;"><img
 style="width: 446px; height: 10px;" alt="formatting"
 src="img/bottom_middle_rounded.jpg"></td>
                </tr>
              </tbody>
            </table>
            </td>
            <td style="vertical-align: top; width: 146px;">
            <table style="width: 146px; text-align: left;" border="0"
 cellspacing="0" cellpadding="0">
              <tbody>
                <tr>
                  <td style="vertical-align: top;"><img
 style="width: 146px; height: 15px;" alt="formating image"
 src="img/top_left_rounded.jpg"><br></td>
                </tr>
                <tr>
                  <td
 style="vertical-align: top; width: 146px; background-image: url(img/middle_left_bar.jpg); background-repeat: repeat-y;">
                  <center>
			<a href="http://www.bcyd.org/news/current_ass.pdf" class="ass">
			<img style="width:144px; border:0px;" src="img/county_ass.jpg" alt="bcyd news letter" />
			<span style="text-decoration:underline">Our most recent newsletter.</span>
			</a>
			</center>
			<br>
                  </td>
                </tr>
                <tr>
                  <td style="vertical-align: top;"><img
 style="width: 146px; height: 15px;" alt="formatting"
 src="img/bottom_left_rounded.jpg"><br></td>
                </tr>
              </tbody>
            </table>
            </td>
          </tr>
        </tbody>
      </table>
      </td>
    </tr>
    <tr>
      <td style="vertical-align: top;">
      <table style="width: 750px; text-align: left;" border="0"
 cellspacing="0" cellpadding="0">
        <tbody>
          <tr>
            <td style="vertical-align: top; width: 146px;"> <br>
            </td>
            <td style="vertical-align: top; width: 446px;"> &copy;2004
Baltimore County Democrats<br>
            </td>
            <td style="vertical-align: top; width: 146px;"> <br>
            </td>
          </tr>
        </tbody>
      </table>
      </td>
    </tr>
  </tbody>
</table>
<br>
<br>
</center>
</body>
</html>
