<?php
	$db = getConnection('scoreboard');
?>
<head>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<BODY>
<TABLE CLASS="scoreboard" CELLSPACING=9 WIDTH="100%">
<?php
	$sql = "SELECT * FROM targets";
	$res = mysql_query($sql);
	while($row = mysql_fetch_assoc($res)){
		// get the activities 
		$sql = "SELECT * FROM activities WHERE target = ". $row[id] ." ";
		$res2 = mysql_query($sql);
		while($row2 = mysql_fetch_assoc($res2)){
			$activities[] = $row2;
		}
		$out .= "<TR><TD class=\"bluebox target\">";
		$out .= $row['Name'] ."<p>". $row['targettext'] ."</TD>";
		$out .= "<TD CLASS=\"bluebox goal\">";
		$out .= "Goals";
			$out .= "<TABLE WIDTH=100% CELLPADDING=3>";
				$out .= "<TR><TD>2014</TD><TD></TD><TD>2015</TD></TR>";
				$out .= "<TR><TD CLASS=square>84</TD><TD ALIGN=CENTER><-></TD><TD CLASS=square>53</TD></TR>"; //goals
			$out .= "</TABLE>";
				
			$colors = array("darkgreen","green","lightgreen","lightyellow","yellow","orange","red","darkred");
			$pos = 5;
			foreach($colors as $color){
				$out .= "<DIV CLASS=\"temp\" style=\"background-color:". $color .";position:absolute; left:". $pos .";\"> &nbsp;</DIV>";
				$pos = $pos + 35;
			}
			
	$out .= "</TD>";
	$out .= "<TD CLASS=\"bluebox activities\" WIDTH=\"100%\">activities<p>";
		if($activities){
			foreach($activities as $activity){
				$out .= "<SPAN CLASS=\"plupp\" style=\"background-color:green;\">&nbsp;&nbsp;&nbsp;</SPAN>&nbsp;&nbsp;&nbsp;This action is greene this month.b</p>";	
			}	
		}
		$out .= "</TD>";
$out .= "</TR>";

}

$out .= "</TABLE>";

echo "$out";	

function getConnection($database){
	$seting = parse_ini_file("/etc/settings.ini.php",true);
	error_reporting(3);
	  //change to your database server/user name/password
		$db = mysql_connect($seting['SQL']['host'],$seting['SQL']['user'],$seting['SQL']['password']) or
         die("Could not connect: " . mysql_error());
    //change to your database name
		mysql_select_db($database,$db) or 
		     die("Could not select database: " . mysql_error());
		return $db;
}
?>