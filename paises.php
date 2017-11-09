<!DOCTYPE html>
<html>
<head>
  <title></title>
  <?php
  //error_reporting(E_ALL);
  ini_set('display_errors', '1');
  ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script>
  	$(document).ready(function(){
  		$("select[name=conti]").change(function(){
			$("#paises").empty();
  			$.get("https://restcountries.eu/rest/v2/region/" +$("#conti option:selected").text(), function(data){
  			console.log(data); 
				$(data).each(function( index , val ) {		
			  		$("#paises").append( "<option>" +val.name+'. Alpha code: "'+ val.alpha3Code +'" </option>' );
				});
			});
		});
	});
   </script>
  <script>
  	$(document).ready(function(){
  		$("select[name=conti]").change(function(){
			$(".result").empty();
  			$.get("https://restcountries.eu/rest/v2/region/" +$("#conti option:selected").text(), function(data){
  			console.log(data); 
				$(data).each(function( index , val ) {		
			  		$(".result").append( "<li>" +val.name+'. Alpha code: "'+ val.alpha3Code +'" </li>' );
				});
			});
		});
	});
    </script>
  
</head>
<body>
	<select name="conti" id="conti">
		<option id=""></option>
		<option id="nom_cont" value="americas">Americas</option>
		<option id="nom_cont" value="africa">Africa</option>
		<option id="nom_cont" value="europa">Europe</option>
		<option id="nom_cont" value="asia">Asia</option>
	</select>

	<p>Sus paises son: </p>
	<select name="paises" id="paises">

	</select>

	<ul class="result">
	</ul>

</body>
</html>

