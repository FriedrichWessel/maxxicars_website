<html>
	<head>
		<title>maxxicars-dresden</title>
		<meta name="description" content="">
		<meta name="author" content="Friedrich Wessel">
		<meta name="keywords" content="Flughafen. Berlin, Dresden. Taxi. Mietwagen">
		<meta name="generator" content="">
		<link rel="stylesheet" href="../layout/mc_layout.css" type="text/css"></link>


                 <script language="Javascript">

                var imageId;
                var f_step = 5;
                var f_position = 0;
	       var f_num=8;
                var f_min = -400;
                var f_max = 10;
		var f_size = f_num;
                 var f_activU;
                 var f_avtivD;

                 function mc_move_down()
                 {
                        if (f_position<f_min) return;

                         f_size=f_size+1;
                         f_position = f_position-f_step;
			document.getElementById("mc_impressum_ID").style.top=(f_position); f_activD = window.setTimeout("mc_move_down()", 75);
                 }
                 function mc_move_up()
                 {
                         if (f_position>f_max) return;
                        f_size=f_size-1;
                        f_position = f_position+f_step;
                        document.getElementById("mc_impressum_ID").style.top=(f_position);f_activU = window.setTimeout("mc_move_up()", 75);
                 }





         </script>

	</head>

<body bgcolor="#ffcc33">

<p style="font-size:12px; color: #000033; font-family:'Arial'; width:350px; position:absolute; top: 10px; text-align:justify; margin-left:25px; margin-right:25px" id="mc_impressum_ID">
<?php include("impressum.inc");?>
</p>
<img src="../mc_images/mc_scrollUp.jpg" width="19" height="13" border="0" style="position:absolute; left: 428px; top:115px;" onmousedown="Javascript: mc_move_up()" onmouseup="Javascript: window.clearTimeout(f_activU)">
<img src="../mc_images/mc_scrollDown.jpg" width="19" height="13" border="0" style="position:absolute; left: 428px; top:128px;" onmousedown="Javascript: mc_move_down()" onmouseup="Javascript: window.clearTimeout(f_activD)">

</body>
</html>