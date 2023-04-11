<!--header-->
<?php
      include('../../header.html');
    ?>

   <!--navbar-->
   <?php
   include('../../navbar.html');
    ?>



<?php

?>
<div class='row mx-auto'>
<form method="POST" action="submit.php" enctype="multipart/form-data">
		<label>Name:</label><br>
		<input type="text" name="name"><br>
		<label>Faculty:</label><br>
		<input type="text" name="faculty"><br><br>
		<label>Image:</label><br>
		<input type="file" name="image"><br><br>
        <label>Publications:</label><br>
		<input type="number" name="publications" min="0" onchange="addFields()"><br><br>
        <div id="textFields"></div>
		<input type="submit" value="Submit">
</form>


</div>



<!--footer-->
<?php
      include('../../footer.html');
  ?>


<script >
	function addFields() {
		// Get the number of publications entered by the user
		var numPublications = document.getElementsByName("publications")[0].value;
		// Get the div element where the text fields will be added
		var textFieldsDiv = document.getElementById("textFields");
		// Reset the contents of the div
		textFieldsDiv.innerHTML = "";

		// Create the text fields and add them to the div
		for (var i = 1; i <= numPublications; i++) {
			var label = document.createElement("label");
			label.innerHTML = "Publication " + i + ": ";
			var textField = document.createElement("input");
			textField.type = "text";
            textField.size="100";
			textField.name = "publication" + i;
			textFieldsDiv.appendChild(label);
			textFieldsDiv.appendChild(textField);
			textFieldsDiv.appendChild(document.createElement("br"));
		}
	}
</script>