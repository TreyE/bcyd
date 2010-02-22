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
    <script type="text/javascript" src="http://bcyd.org/scripts/pageload.js"></script>
    <script type="text/javascript" src="http://bcyd.org/scripts/prototype.js"></script>
	<!--[if lt IE 7.]>
	<script defer="defer" type="text/javascript" src="http://bcyd.org/scripts/pngfix.js"></script>
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
          <td onmouseover="this.style.background='#555'" onmouseout="this.style.background='#000'" onclick="document.location='/'">Home</td>
          <td onmouseover="this.style.background='#555'" onmouseout="this.style.background='#000'" onclick="document.location='/Projects.php'">Projects</td>
          <td onmouseover="this.style.background='#555'" onmouseout="this.style.background='#000'" onclick="document.location='/Context.php'">Context</td>
          <td onmouseover="this.style.background='#555'" onmouseout="this.style.background='#000'" onclick="document.location='/Governance.php'">Governance</td>
          <td onmouseover="this.style.background='#555'" onmouseout="this.style.background='#000'" onclick="document.location='/Press.php'">Press</td>
          <td onmouseover="this.style.background='#555'" onmouseout="this.style.background='#000'" onclick="document.location='/BCYDConstitution.html'">Constitution</td>
        </tr></table>
      </div>
<div id="pageHome">
<? include("Home.php") ?>
</div>
<div id="pageProjects" style="display:none">
<? include("Projects.php") ?>
</div>
<div id="pageContext" style="display:none">
<? include("Context.php") ?>
</div>
<div id="pageGovernance" style="display:none">
<? include("Governance.php") ?>
</div>
<div id="pagePress" style="display:none">
<? include("Press.php") ?>
</div>
</div>
</td></tr></table>
</body>
</html>
