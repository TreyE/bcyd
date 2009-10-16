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
	  color: #fff;">Other Democratic Sites:</span>
	<p>
		<p>
		<h3>State and National Links</h3>
		<a class="inside" href="http://www.democrats.org">Democratic National Committee</a><br />
		<a class="inside" href="http://www.demdays.org">Democratic Service Coalition</a><br />
		<a class="inside" href="http://www.democraticgain.org/">Democratic GAIN<a/><br />
		<a class="inside" href="http://www.mddems.org">Maryland Democratic Pary</a><br />

		<h3>Elected Officials</h3>
		<a class="inside" href="http://www.senatorbarb.com">Senator Mikulski</a>
		<br />
		<a class="inside" href="http://www.bencardin.com">Congressman Cardin</a>

		<br />
		<a class="inside" href="http://www.elijahcummings.com">Congressman Cummings</a>
		<br />
		<a class="inside" href="http://www.dutchforcongress.com">Congressman Ruppersburger</a>
		<br />
		<a class="inside" href="http://www.mddems.org/index.php?display=ReleaseDetails&id=554236">Maryland Democratic Party Chair 
		Terry Lierman</a>
		<br />
		<a class="inside" href="http://www.ericbromwell.com">Delegate Bromwell 8th District</a>
		<br />
		<a class="inside" href="http://www.bobbyzirkin.com">Delegate Robert Zirkin 11th District</a>
		<p>
		Look up your elected officials with <a class="inside" href="http://www.mdelect.net/">mdelect.net</a> 
		</p>
		
		<h3>Senate Candidates</h3>
		<a class="inside" href="http://www.bencardin.com">Congressman Cardin</a>
		<br />
		<a class="inside" href="http://www.allanlichtman.com">Allan Lichtman</a>

		<h3>Baltimore County Government</h3>
		<a class="inside" href="http://www.co.ba.md.us">Baltimore County Government Home Page</a><br />
		<a class="inside" href="http://www.baltimorecountycouncil.org">Baltimore County Council</a>

		
		<h3>Young Democrats</h3>
		<a class="inside" href="http://www.ydmaryland.org">Young Democrats of Maryland</a><br />
		<a class="inside" href="http://www.mcyd.org">Montgomery County Young Democrats</a><br />
		<a class="inside" href="http://www.pgcyd.org">Prince George's County Young Democrats</a><br />
		
		<h3>Baltimore County Democrats</h3>
		<a class="inside" href="http://www.baltcodems.org/">Baltimore County
 				Democratic Central Committee</a><br />
		<a class="inside" href="http://www.cbcdc.org/">Central Baltimore County
 			Democratic Club</a><br />
		<a class="inside" href="http://www.sbcdemclub.org/">Southwest Baltimore County
 		Democratic Club</a><br />
		</p>

		<p>
		If you are a Democratic elected official or are running for office as a
		Democrat and would like your personal page included in this listing, please
		email <a class="inside" href="mailto:webmaster@bcyd.org">webmaster@bcyd.org</a>
		</p>


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
