<!DOCTYPE html>
<html>
<head>
	<title>Sentence Search</title>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script>
		function searchKeyword() {
			var keyword = $('#keyword').val();
			$.ajax({
				type: 'POST',
				url: 'search.php',
				data: { keyword: keyword },
				success: function(response) {
					$('#results').html(response);
				}
			});
			return false;
		}
	</script>
</head>
<body>
	<form onsubmit="return searchKeyword();">
		<label for="keyword">Enter keyword:</label>
		<input type="text" name="keyword" id="keyword">
		<button type="submit">Search</button>
	</form>
	<div id="results"></div>
</body>
</html>
