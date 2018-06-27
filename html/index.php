<html>
<head>

	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/	bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous">
	</script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<script type="text/javascript">

		$(document).ready(function(){
			$('#clickON').click(function(){

				$.get("functions/ledOn.php")
				console.log("ON");

			});

			$('#clickOFF').click(function(){
				$.get("functions/ledOff.php")
				console.log("OFF");
			});

			$('#clickOnOff').click(function(){
				$.get("functions/pin_13.php");
			});
		});

	</script>
	<style type="text/css">

		body{
			background-color: rgba(0, 0, 0, .8);
		}

		h2{
			margin-top: 150px;
			margin-bottom: 40px;
			color:white;
		}

		*{
			padding: 0;
			margin: 0;
		}

		.mybtn{
			width: 150px;
			text-align: center;
		}

		.content{
			margin-top: 10px;
			display: block;
			width: 100%;
			text-align: center;
			margin-bottom: 10px;
		}

	</style>
</head>
<body>


<div class="content">
	<h2>Control simple de led</h2>
	<input type="button" id="clickON" class="btn btn-lg btn-secondary mybtn" value="Encender" />
	<input type="button" id="clickOFF" class="btn btn-lg btn-secondary mybtn" value="Apagar" />
</div>
<div class="content">
	<input type="button" id="clickOnOff" class="btn btn-lg btn-secondary mybtn" value="On / Off" />
</div>
</body>
</html>