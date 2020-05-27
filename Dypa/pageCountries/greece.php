<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="stylePop.css">

<title>Greece</title>
</head>

<body>
<!-- Navbar (top part) -->
<div id="navbar" class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="../arxiki.html" class="w3-bar-item w3-button w3-padding-large">Αρχική</a>
    <a href="../locations.html" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Τοποθεσίες</a>
    <a href="../museums" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Μουσεία</a>
    <a href="../loginregister.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Log in/Register</a>
    <a href="contact" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Επικοινωνία</a>
    <div class="w3-dropdown-hover w3-hide-small"></div>
  </div>
</div>  
<div class="row no-gutters" style="padding-top:5%">
	<div class="col-md-6 no-gutters" >
		<div class="leftside d-flex justify-content-center align-items-center">
			<img src="image/greece.jpg" usemap="#greeceMap">
			<map name="greeceMap">
				<area shape="rect" coords="357,388,253,322" id="akropoli" onmouseover="popup()" style="cursor:pointer">
				<area shape="rect" coords="329,163,225,97" id="leykos" onmouseover="popup1()" style="cursor:pointer" >
			</map>
			<div class="popup">
			  <span class="popuptext" id="myPopup">
			  	<a href="https://el.wikipedia.org/wiki/%CE%91%CE%BA%CF%81%CF%8C%CF%80%CE%BF%CE%BB%CE%B7_%CE%91%CE%B8%CE%B7%CE%BD%CF%8E%CE%BD">Ακρόπολη</a><br>
			  	Περιοχή: Αθηνά
			  </span>
			  <span class="popuptext" id="myPopup1">
			  	Λευκός Πύργος 
			  	Περιοχή: Θεσσαλονίκη
			  </span>
		
			</div>
		</div>
	</div>
	<div class="col-md-6 no-gutters">
		<div class="rightside d-flex justify-content-center align-items-center">
			<div class="mus">
				 <input class="btn btn-outline-dark" type="button" id="clickme" value="see museums" />
			</div>
			<div id="displaytable" class="placeholder"  style="display:none;">
			  <table class="table table-striped table-dark" id="displaytable2"  width="100%" cellpadding="1" cellspacing="0" border="3">
			    <tr align="center">
			      <td class="lbl">name</td>
			      <td class="lbl">region</td>
			      <td class="lbl">country</td>

			    </tr>
					<?php
						
						$con = mysqli_connect("localhost","root","");
						$db = mysqli_select_db($con,"museums");
						mysqli_set_charset($con, "utf8");
						if($con-> connect_error) 
						{
							die("Connection failed:". $con-> connect_error);
						}
						$result = mysqli_query($con, "SELECT name, region, country from museum WHERE country = 'Greece'");
						while($row = mysqli_fetch_assoc($result))
							{
								echo "<tr><td>" . $row["name"] . "</td><td>" . $row["region"] . "</td><td>" . $row["country"] . "</td></tr>";
							}
							echo "</table>";
						
						$con-> close();
			
					 ?>			      
			   
			  </table>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	function popup()
	{
		var popup = document.getElementById("myPopup");
  		popup.classList.toggle("show");	
  	}
	function popup1()
	{
		var popup = document.getElementById("myPopup1");
  		popup.classList.toggle("show");	
  	}
   	var click = document.getElementById('clickme');
	click.addEventListener('click', myfunction);

	function myfunction() {
	  document.getElementById('displaytable').style.display = "block";
	  var x = document.getElementById("clickme");
  	  if (x.style.display === "none") {
  	  	x.style.display = "block";
  	} else {
  		  x.style.display = "none";
 		 }
	};	

</script>
</body>

</html>
