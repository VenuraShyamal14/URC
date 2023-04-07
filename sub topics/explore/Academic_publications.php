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

    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent" aria-expanded="false"      
        aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent1">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <input type="radio" class="btn-check " name="btnradio" id="Agriculture" autocomplete="off" checked>
            <label class="btn check_btn btn-outline-danger" for="Agriculture">Agriculture</label>
        </li>
        <li class="nav-item">
          <input type="radio" class="btn-check " name="btnradio" id="Allied Health Sciences" autocomplete="off">
            <label class="btn check_btn btn-outline-danger" for="Allied Health Sciences">Allied Health Sciences</label>
        </li>
        <li class="nav-item">
          <input type="radio" class="btn-check " name="btnradio" id="Dental Sciences" autocomplete="off">
            <label class="btn check_btn btn-outline-danger" for="Dental Sciences">Dental Sciences</label>
        </li>
        <li class="nav-item">
          <input type="radio" class="btn-check " name="btnradio" id="Engineering" autocomplete="off">
            <label class="btn check_btn btn-outline-danger" for="Engineering">Engineering</label>
        </li>
        <li class="nav-item">
          <input type="radio" class="btn-check" name="btnradio" id="Medicine" autocomplete="off">
            <label class="btn check_btn btn-outline-danger" for="Medicine">Medicine</label>
        </li>
        <li class="nav-item">
          <input type="radio" class="btn-check" name="btnradio" id="Science" autocomplete="off">
          <label class="btn check_btn btn-outline-danger" for="Science">Science</label>
        </li>
        <li class="nav-item">
          <input type="radio" class="btn-check" name="btnradio" id="Veterinary Medicine and Animal Sciences" autocomplete="off">
            <label class="btn check_btn btn-outline-danger" for="Veterinary Medicine and Animal Sciences">Veterinary Medicine </label>
        </li>
        <li class="nav-item">
          <input type="radio" class="btn-check" name="btnradio" id="Arts" autocomplete="off">
           <label class="btn check_btn btn-outline-danger" for="Arts">Arts</label>
        </li>
      </ul>
      
        </div>
        <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search publication" id="search_input1" aria-label="Search">
        <button class="btn" id="search_publication_btn" type="submit" onclick="handleButtonClick1(event)">Search</button>
        </form>
        </div>
    </nav>


	<div id="search_results"></div>




<!--footer-->
<?php
      include('../../footer.html');
  ?>

<script>
function handleButtonClick1(event) {
  event.preventDefault(); // prevent default behavior of the click event
  // your code to be executed when the button is clicked
  searchKeyword();
}
</script>