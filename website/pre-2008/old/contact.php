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
    </tr>    <tr>
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
	<span style="color:#fff;">

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
	</center><br>
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
	<p>
	<span class="mid_col">
	<span style="font-size: 25px;
	  font-weight: bold;
	  color: #fff;">Executive Board:</span>
	<br />
		<table padding="0" c border="0" width="100%" style="color:#fff;">

			<tr>
			<td>
		<p>
		<strong>President</strong><br>

		Todd Metcalfe<br>
		<a class="inside" href="mailto:president@bcyd.org">president@bcyd.org</a>
		</p>

		</td>
		<td>
		<p>
		<strong>Vice President</strong><br>

		Betsy Fox<br>
		<a class="inside" href="mailto:vp@bcyd.org">vp@bcyd.org</a>
		</p>

		</td>
		</tr>
		<tr>
		<td>

		<p>
		<strong>Treasurer</strong><br>
		Kate Skilton<br>

		<a class="inside" href="mailto:treasurer@bcyd.org">treasurer@bcyd.org</a>
		</p>
		</td>

		<td>
		<p>
		<strong>Secretary</strong><br>
		Frank Amtmann<br>

		<a class="inside" href="mailto:secretary@bcyd.org">secretary@bcyd.org</a>
		</p>

		</td>
		</tr>
		<tr>
		<td>
		<p>
		<strong>Parliamentarian</strong><br>
		Vacant<br>

		<!-- <a class="inside" href="mailto:parliamentarian@bcyd.org">parliamentarian@bcyd.org</a> -->
		</p>
		</td>
		<td>
		<p>
		<strong>Communications Director</strong><br>

		Stephanie Dray<br>
		<a class="inside" href="mailto:communications@bcyd.org">communications@bcyd.org</a>
		</p>
		</td>
		</tr>

		<tr>
		<td>

		<p>
		<strong>Programs Director</strong><br>
		Puja Gupta<br>
		<a class="inside" href="mailto:pd@bcyd.org">programs@bcyd.org</a>
		</p>

		</td>

		<td>
		<p>
		<strong>Political Director</strong><br>
		Hugh Williams<br>
		<a class="inside" href="mailto:political@bcyd.org">political@bcyd.org</a>

		</p>

		
		</td>
		</tr>
		<tr>
		<td>

		<p>
		<strong>Immediate Past President</strong>

		<br />

		Jayson Williams
		<br />
		<a class="inside" href="mailto:ipp@bcyd.org">ipp@bcyd.org</a>
		</p>
		</td>

		<td>

		<p>
		<strong>Webmaster</strong>

		<br />

		Adam Dray
		<br />
		<a class="inside" href="mailto:webmaster@bcyd.org">webmaster@bcyd.org</a>
		</p>
		</td>
		</tr>

		</table>
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
