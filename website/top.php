<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

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
    <link rel="stylesheet" type="text/css" href="http://bcyd.org/css/main.css" />
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
	<script defer type="text/javascript" src="http://bcyd.org/scripts/pngfix.js"></script>
	<![endif]-->

  </head>

  <body onload="load()" onunload="GUnload()"><table cellpadding=0 cellspacing=0 border=0 height=100% width=100%><tr><td align=center height=100%>
    <div id="MainColumn">
      <img src="http://bcyd.org/images/bcyd.png" width=120 style="padding-left: 10px; position: absolute">
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
