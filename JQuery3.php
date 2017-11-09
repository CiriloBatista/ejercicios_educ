<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.10.1/bootstrap-table.min.js"></script>
    <script>
		$(document).ready(function(){
			$.get("https://restcountries.eu/rest/v2/region/americas", function(data){
			console.log("hola");
					$(data).each(function(index,val){
						$("#codalfa").append( "<div class='row'> <div class='col-md-12' style='background-color:lightblue;'>"+ val.alpha3Code +"</div> </div>" );
					});
			});
		});
    </script>
    <script>
		$(document).ready(function(){
			$.get("https://restcountries.eu/rest/v2/region/americas", function(data){
			console.log("hola");
					$(data).each(function(index,val){
						$("#name").append( "<div class='row'> <div class='col-md-12' style='background-color:lightblue;'>"+ val.name +"</div> </div>" );
					});
			});
		});
    </script>
</head>
<body>
	<div class="row">
		<div id="codalfa" class="col-md-6" style="background-color:lightgreen; text-align: center;">Alpha Code
			
		</div>
		<div id="name" class="col-md-6" style="background-color:lightgreen; text-align: center;">Nombre de Pa&iacute;s
			
		</div>
	</div>

</body>
</html>