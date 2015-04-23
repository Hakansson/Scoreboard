<head>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<BODY>
<TABLE CELLSPACING=9>
	<TR>	
		<TD>
			<DIV CLASS=target>
				<?php
				echo "hello world";
				?>
			</DIV>
		</TD>
		<TD>
			<DIV CLASS="target goal">
				Goals
				<TABLE WIDTH=100% CELLPADDING=3>
				<TR><TD>2014</TD><TD></TD><TD>2015</TD></TR>
				<TR><TD CLASS=square>84</TD><TD ALIGN=CENTER><-></TD><TD CLASS=square>53</TD></TR>
				</TABLE>
				<?php
				$colors = array("darkgreen","green","lightgreen","lightyellow","yellow","orange","red","darkred");
				$pos = 5;
				foreach($colors as $color){
					echo "<DIV CLASS=\"temp\" style=\"background-color:". $color .";position:absolute; left:". $pos .";\"> &nbsp;</DIV>";
					$pos = $pos + 35;
				}
				?>
			</DIV>
		</TD>
		<TD WIDTH=100%>
			<DIV CLASS="target activities">
				<p><SPAN CLASS="plupp" style="background-color:green;">&nbsp;&nbsp;&nbsp;</SPAN>&nbsp;&nbsp;&nbsp;This action is greene this month.b</p>
				<SPAN CLASS="plupp" style="background-color:green;">&nbsp;&nbsp;&nbsp;</SPAN>&nbsp;&nbsp;&nbsp;This action is greene this month<p>
				<SPAN CLASS="plupp" style="background-color:green;">&nbsp;&nbsp;&nbsp;</SPAN>&nbsp;&nbsp;&nbsp;This action is greene this month<p>
				<SPAN CLASS="plupp" style="background-color:green;">&nbsp;&nbsp;&nbsp;</SPAN>&nbsp;&nbsp;&nbsp;This action is greene this month
			</DIV>
		</TD>
	</TR>
</TABLE>