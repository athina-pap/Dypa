<?php header("content-type: text/html;charset=utf-8") ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />

<title>Untitled 3</title>
</head>

<body>

	<table>
		<tr>
			<th>Name</th>
		</tr>
		<tbody id="m"> <!----- data will be display here --->
		</tbody>
	</table>
	<script type="text/javascript">
		//call ajax
		var ajax = new XMLHttpRequest();
		var method = "GET";
		var url = "data.php";
		var asynchronous = true;
		ajax.open(method, url, asynchronous);
		ajax.send();
		
		ajax.onreadystatechange = function()
		{
			if(this.readyState == 4 && this.status == 200)
			{
				var data = JSON.parse(this.responseText);
				console.log(data);
				var html ="";
				for(var a = 0; a < data.length; a++)
				{
					var name = data[a].name;
					html += "<tr>";
						html += "<a href='#'>" + name + "</a>";
					html += "</tr>"; 
				}
				document.getElementById("m").innerHTML = html;
			}
		}
	</script>
</body>

</html>
