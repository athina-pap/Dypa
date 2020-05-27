<script type="text/javascript">
	$(document).ready(function()
	{
		$('#insertbtn').click(function(e) 
		{
			e.preventDefault();
			$.ajax
			({
				method: "post",
				url: "data.php",
				data: $('#vedformid').serialize(),
				dataType: "text",
				success: function (response) 
				{
					$('#messagedisplay').text(response);
				}
			})
		})
	})
	
	
	
	
	
	$(document).ready(function(){
		$(selector).click(function (e){		
			//e.preventDefault();
		})
	})
 </script>
