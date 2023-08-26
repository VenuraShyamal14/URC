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
			var keyword = $('#search_input1').val();
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



        <div class="container" style="margin-top:50px;">

          <input type="radio" class="btn-check " name="btnradio" id="Agriculture" autocomplete="off" checked>
            <label class="btn check_btn btn-outline-danger" for="Agriculture">Agriculture</label>

          <input type="radio" class="btn-check " name="btnradio" id="Allied Health Sciences" autocomplete="off">
            <label class="btn check_btn btn-outline-danger" for="Allied Health Sciences">Allied Health Sciences</label>

          <input type="radio" class="btn-check " name="btnradio" id="Dental Sciences" autocomplete="off">
            <label class="btn check_btn btn-outline-danger" for="Dental Sciences">Dental Sciences</label>

          <input type="radio" class="btn-check " name="btnradio" id="Engineering" autocomplete="off" >
            <label class="btn check_btn btn-outline-danger" for="Engineering">Engineering</label>

          <input type="radio" class="btn-check" name="btnradio" id="Medicine" autocomplete="off">
            <label class="btn check_btn btn-outline-danger" for="Medicine">Medicine</label>
  
          <input type="radio" class="btn-check" name="btnradio" id="Science" autocomplete="off">
          <label class="btn check_btn btn-outline-danger" for="Science">Science</label>
    
          <input type="radio" class="btn-check" name="btnradio" id="Veterinary Medicine and Animal Sciences" autocomplete="off">
            <label class="btn check_btn btn-outline-danger" for="Veterinary Medicine and Animal Sciences">Veterinary Medicine </label>
       
          <input type="radio" class="btn-check" name="btnradio" id="Arts" autocomplete="off">
           <label class="btn check_btn btn-outline-danger" for="Arts">Arts</label>
        

        
        </div>





	<div id="search_results"></div>




<!--footer-->
<?php
      include('../../footer.html');
  ?>

<script>
 //display search btn
document.getElementById('search_input1').style.display = 'flex';
document.getElementById('search_publication_btn').style.display = 'flex';

function handleButtonClick1(event) {
  event.preventDefault(); // prevent default behavior of the click event
  // your code to be executed when the button is clicked
  searchKeyword();
}


var outputDiv = document.getElementById('search_results');
const checkbuttons = document.querySelectorAll('.btn-check');


checkbuttons.forEach(function(checkbox) {
          if (checkbox.checked) {
            searchPublication("Agriculture");
            //alert('hi');
          }
});

checkbuttons.forEach(function(button) {
  button.addEventListener('click', function(event) {
        searchPublication(event.target.id);
  });
});

</script>