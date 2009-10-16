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
	  color: #fff;">BCYD Supporters:</span>
	<p>

	<img src="img/cardin_jay_tee.jpg" alt="Delegate Cardin with his tee shirt" style="float:right" />
	<ul>
	<li>US Senator Barbara Mikulski</li>
	<li>Congressman Ben Cardin</li>

	<li>Congressman Elijah Cummings</li>
	<li>Congressman Dutch Ruppersberger</li>
	<li>County Executive Jim Smith</li>

	<li>Senator Jim Brochin</li>
	<li>Senator Paula Hollinger</li>
	<li>Senator Edward Kasemeyer</li>

	<li>Senator Delores Kelley</li>
	<li>Senator Kathy Klausmeier</li>
	<li>Senator Norman Stone</li>

	<li>Delegate Eric Bromwell</li>
	<li>Delegate Jon Cardin</li>

	<li>Delegate Steven DeBoy</li>

	<li>Delegate Adrienne Jones</li>
	<li>Delegate Jimmy Malone</li>
	<li>Delegate Dan Morhain</li>

	<li>Councilman Sam Moxley</li>

	</ul>
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
