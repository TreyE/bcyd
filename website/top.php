<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>Baltimore County Young Democrats</title>
    <script src="http://maps.google.com/maps?file=api&amp;v=2&key=ABQIAAAAnQzIqJHItncPDxttGR_QZBQCIzHPQofR_yBdnKyvV-Ffs-ezBxTPpj19drDUhaZLAFhGsRn6SMySbQ"
      type="text/javascript"></script>
    <style type="text/css">
    v\:* {
      behavior:url(#default#VML);
    }
    </style>
    <style>
      a {
        color: blue;
      }
      body {
        height: 100%;
        margin: 0px;
        background: #dedede;
        font-family: Arial, Helvetica;
      }
      #MainColumn {
        width: 800px;
        height: 100%;
        border-left: 3px black solid;
        border-right: 3px black solid;
        background: white; 
        text-align: left;
      }
      #Header {
        background: #FDD017;
        font-size: 40px;
        padding: 10px;
        padding-left: 15px;
        padding-left: 115px;
        text-align: left;
      }
      #MenuRow {
        background: black;
        text-align: left;
        padding-left: 130px;
      }
      #MenuRow td {
        cursor: hand;
        color: #FDD017;
        padding: 5px;
        padding-left: 15px;
        padding-right: 15px;
      }
      #TitleRow {
        text-align: left;
        padding: 10px;
        padding-left: 130px;
        font-size: 30px;
      }
      #Content {
        text-align: left;
        padding: 10px;
      }
      #Subscribe {
        background: #deffde;
        position: absolute;
        margin-left: 200px;
        width: 400px;
        padding: 20px;
        padding-top: 0px;
        text-align: center;
        border: 3px solid #007800;
      }
    </style>
    <script type="text/javascript">
    //<![CDATA[


    function ShowEvent(map,address,what) {
      var geocoder = new GClientGeocoder();

      geocoder.getLatLng(address,
        function(point) {
          if (!point) {
            alert(address + " not found");
          } else {
            var marker = createMarker(point,'<b><u>'+address+'</u></b><br/>'+what);
//            var marker = new GMarker(point);
//            map.addOverlay(marker);
            map.addOverlay(marker);
          }
        }
      );
    }
 
    function load() {
      if (GBrowserIsCompatible()) {
        var map = new GMap2(document.getElementById("map"));
        map.setCenter(new GLatLng(39.4781565,-76.67204), 9);
        map.addControl(new GSmallMapControl());
//        map.addControl(new GMapTypeControl());
      }
      var kml = new GGeoXml("http://www.bcyd.org/BaltimoreCounty.kml");
      map.addOverlay(kml)

      ShowEvent(map,"300 Lennox Ave, Towson MD","2008-01-10 BCYD Election");
      ShowEvent(map,"8141 Honeygo Blvd, White Marsh, MD","2008-01-13 Charlie Wilson's War");
      ShowEvent(map,"106 Bloomsbury Ave, Catonsville, MD","2008-01-14 Certification to Register Voters");
      ShowEvent(map,"2027 Jolly Rd, Baltimore, MD","2008-02-04 Super Tuesday Watch Party<br/>2008-01-22 BCYD Executive Board Meeting");
      ShowEvent(map,"318 Limestone Valley Dr, Cockeysville, MD","2008-02-17 All the President's Men");
      ShowEvent(map,"55 Wade Ave, Catonsville MD","2008-01-26 Volunteering at Homeless Shelter");
      ShowEvent(map,"63 E Padonia Rd, Timonium, MD 21093","2008-02-12 Maryland Primary Closure HH");
    }

    // Function Creates a marker whose infowindow displays descrip, uses icon
    function createMarker(point, descr, icn) {
            var marker = new GMarker(point, icn);

            // Show this marker's index in the info window when it is clicked
            var html = '<div style="width: 10em">'+'<b> <font size=-8 face="Arial">' + descr + '</font> </b>' + '</div>';
            GEvent.addListener(marker, "click", function() {
            marker.openInfoWindowHtml(html);
        });

        return marker;
    }

    //]]>

    </script>
	<!--[if lt IE 7.]>
	<script defer type="text/javascript" src="pngfix.js"></script>
	<![endif]-->

  </head>

  <body onload="load()" onunload="GUnload()"><table cellpadding=0 cellspacing=0 border=0 height=100% width=100%><tr><td align=center height=100%>
    <div id="MainColumn">
      <img src="bcyd.png" width=120 style="padding-left: 10px; position: absolute">
      <div id="Header">
        Baltimore County Young Democrats
      </div>
      <div id="MenuRow">
        <table cellpadding=0 cellspacing=0 border=0><tr>		
          <td onmouseover="this.style.background='#555'" onmouseout="this.style.background='#000'" onclick="document.location='/'">Join Us</td>
          <td onmouseover="this.style.background='#555'" onmouseout="this.style.background='#000'" onclick="document.location='/Projects.php'">Projects</td>
          <td onmouseover="this.style.background='#555'" onmouseout="this.style.background='#000'" onclick="document.location='/Context.php'">Context</td>
          <td onmouseover="this.style.background='#555'" onmouseout="this.style.background='#000'" onclick="document.location='/Governance.php'">Governance</td>
          <td onmouseover="this.style.background='#555'" onmouseout="this.style.background='#000'" onclick="document.location='/Press.php'">Press</td>
        </tr></table>
      </div>
