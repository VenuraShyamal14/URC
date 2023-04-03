<!--header-->
<?php
      include('../../header.html');
  ?>

   <!--navbar-->
   <?php
   include('../../navbar.html');
    ?>
    <script>
		function searchKeyword() {
			var keyword = $('#keyword').val();
			$.ajax({
				type: 'POST',
				url: '../../search.php',
				data: { keyword: keyword },
				success: function(response) {
					$('#search_results').html(response);
				}
			});
			return false;
		}
	</script>

    <form id="search_form" onsubmit="return searchKeyword();">
		<label for="keyword">Field of interest:</label>
		<input type="text" name="keyword" id="keyword">
		<button type="submit">Search</button>
	</form>
	<div id="search_results"></div>

<!--footer-->
<?php
      include('../../footer.html');
  ?>
