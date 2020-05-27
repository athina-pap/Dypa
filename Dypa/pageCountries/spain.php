<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<link rel="stylesheet" href="bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="font-awesome.min.css">
<link rel="stylesheet" href="stylePop.css">
<title>Spain</title>
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
			<img src="image/spain.jpg" usemap="#greeceMap">
			<map name="greeceMap">
				<area shape="rect" coords="404,104,462,153" id="sgrada" onmouseover="popup()" style="cursor:pointer">
				<area shape="rect" coords="88,326,129,370" id="alkathar" onmouseover="popup1()" style="cursor:pointer" >
					
		</map>
			<div class="popup">
			  <span class="popuptext" id="myPopup">
			  	<a href="https://el.wikipedia.org/wiki/%CE%A3%CE%B1%CE%B3%CF%81%CE%AC%CE%B4%CE%B1_%CE%A6%CE%B1%CE%BC%CE%AF%CE%BB%CE%B9%CE%B1">Σαγράδα Φαμίλια</a><br>
			  	Περιοχή:Βαρκελώνη 
			  </span>
			  <span class="popuptext" id="myPopup1">
			  	<a href="https://el.wikipedia.org/wiki/%CE%91%CE%BB%CE%BA%CE%AC%CE%B8%CE%B1%CF%81_%CF%84%CE%B7%CF%82_%CE%A3%CE%B5%CE%B2%CE%AF%CE%BB%CE%BB%CE%B7%CF%82">Αλκάθαρ της Σεβίλλης</a><br>
			  	Περιοχή: Σεβίλη
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
						$result = mysqli_query($con, "SELECT name, region, country from museum WHERE country = 'SPAIN'");
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
  	function popup2()
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
