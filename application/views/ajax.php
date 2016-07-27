<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Ajax Exercise</title>
	<link rel="stylesheet" href="../../assets/style.css">
	<script src="https://code.jquery.com/jquery-3.1.0.min.js" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" crossorigin="anonymous"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			
			$.get('/posts/partial_view', function(res) {
				console.log(res);
       			$('#body').append(res);
        	});

        	 $('form').submit(function(){
         
		          $.post('/posts/send_to_db', $(this).serialize(), function(res) {
		          	console.log(res);
		            $('#body').html(res);
		          });
		          
		          return false;

		     });
        });

	</script>
</head>
<body>

<div id="container">
	<h1>My Posts:</h1>
	<div id="body">
			
	</div>
	<form action="/posts/send_to_db" method="post">
		<p>Add a note:</p>
		<input type="text" name="description">
		<p><button>Post It!</button></p>
	</form>

</div>

</body>
</html>
