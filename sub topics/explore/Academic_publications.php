<!--header-->
<?php
      include('../../header.html');
    ?>

   <!--navbar-->
   <?php
   include('../../navbar.html');
    ?>

    <?php 
    include_once("../../db_connect.php");
    ?>

<?php

?>

<div class="btn-group d-flex justify-content-center static-top" role="group" aria-label="Basic radio toggle button group"  >

    <input type="radio" class="btn-check" name="btnradio" id="Agriculture" autocomplete="off" checked>
  <label class="btn btn-outline-primary" for="Agriculture">Agriculture</label>

  <input type="radio" class="btn-check" name="btnradio" id="Allied Health Sciences" autocomplete="off">
  <label class="btn btn-outline-primary" for="Allied Health Sciences">Allied Health Sciences</label>

  <input type="radio" class="btn-check" name="btnradio" id="Dental Sciences" autocomplete="off">
  <label class="btn btn-outline-primary" for="Dental Sciences">Dental Sciences</label>

  <input type="radio" class="btn-check" name="btnradio" id="Engineering" autocomplete="off">
  <label class="btn btn-outline-primary" for="Engineering">Engineering</label>

  <input type="radio" class="btn-check" name="btnradio" id="Medicine" autocomplete="off">
  <label class="btn btn-outline-primary" for="Medicine">Medicine</label>

  <input type="radio" class="btn-check" name="btnradio" id="Science" autocomplete="off">
  <label class="btn btn-outline-primary" for="Science">Science</label>

  <input type="radio" class="btn-check" name="btnradio" id="Veterinary Medicine and Animal Sciences" autocomplete="off">
  <label class="btn btn-outline-primary" for="Veterinary Medicine and Animal Sciences">Veterinary Medicine </label>

  <input type="radio" class="btn-check" name="btnradio" id="Arts" autocomplete="off">
  <label class="btn btn-outline-primary" for="Arts">Arts</label>


  

</div>
<div  id="test" class="container"  ></div>

<!--footer-->
<?php
      include('../../footer.html');
  ?>

