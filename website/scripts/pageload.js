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
/*
      if (GBrowserIsCompatible()) {
        var map = new GMap2(document.getElementById("map"));
        map.setCenter(new GLatLng(39.4781565,-76.67204), 9);
        map.addControl(new GSmallMapControl());
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
*/
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
