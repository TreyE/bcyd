<?php
// Global registers by pass

include("global.inc.php");
pt_register('GET','id');

// Start regular stuff

if($id=="")
header("Refresh: 0;url=index.php");
else
{
$file = fopen("data.dat","r+") or die ("Could not open file!");
$garbage = fgets($file,4096);
$i=0;
while(!feof($file))
{
$temp = fgets($file,4096);
if($temp!="")
{
$records[$i]=$temp;
$i++;
}

}
$top_line = $garbage;
ftruncate($file,0);
fseek($file,0);
fwrite($file,$top_line);
for($i=0;$i<sizeof($records);$i++)
{
if($i!=$id)
fwrite($file,$records[$i]);
}

header("Refresh: 0;url=index.php");
}
?>