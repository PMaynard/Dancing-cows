<html>
<head>
	<title>#:Port 22</title>
	<script type="text/javascript" src="neo.js"></script>
	<link rel="stylesheet" href="TheOneRing.css" type="text/css" media="screen" />
	
	<script type="text/javascript">
	$(function() {	
	$("#spork").bind("click", function(e){
		e.preventDefault();
		if($("#msg").val() != ""){
			$.ajax({
				type: "POST",
				url: "dancingcows.php",
				data: "spork=FIREFLY&msg=" + $("#msg").val()
			}).done(function( msg ) {
				 $("p").html(msg);
				$('#mew').fadeOut('slow', function() {
				});
			});
		}else{ $("p").text("Only if you Dance for me!!"); }
	});
	});
	</script>   
	
</head>
<body> 

<h1>#:Port22</h1>
<div>
<form id="mew">
	<textarea name="msg" id="msg" rows="10" cols="50" autofocus>OUT OF ORDER</textarea><br />
	<input class="button" type="submit" name="spork" id="spork" value="Send Wave" />
</form>
</div>
<p><?php echo "<b>Source</b>: ".gethostbyaddr($_SERVER['REMOTE_ADDR']) . " (". $_SERVER['REMOTE_ADDR'] .")"; ?></p>

</body> 
</html>
