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
<div class="container">
        <h2>Tier 4* Researchers</h2>
        <hr />
        <div class="card" style="width: 500px;">
            <?php
               
               
                $sql = "SELECT id, honorific, initials, name, faculty, URL, details FROM cards where faculty='Agriculture'";
                $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));			
                while( $record = mysqli_fetch_assoc($resultset) ) {
                ?>
            <div class="row no-gutters">
                <div class="col-sm-5">
                    <img id='researcher_img'alt="" src="<?php echo $record['URL']; ?>" height="200px">
                </div>
                <div class="col-sm-7">
                    <div class="title">
                        <?php echo $record['honorific']; ?>
                        <?php echo $record['initials']; ?>
                        <?php echo $record['name']; ?>
                    </div>
						
                    <div class="desc"><?php echo $record['faculty']; ?></div>      
					
                    <a href="#" id="<?php echo $record['id']?>" class="btn btn-primary detail_btn">View Profile</a>
                </div>
            </div>

            <?php } ?>
        </div>
    </div>



            <!-- popup wenne meke tika-->
            <div class="popup" id="popupid">
                <img src="../../img/publications.jpg" alt="publications Icon" width="100" height="100" >
                <h2>PUBLICATIONS</h2>
                
    
                <p id="popup_p"><?php echo $record['details']; ?></p>
 
                <button id="backBtn" type="button" class="btn btn-primary">back</button>
            </div>


</div>

<!--footer-->
<?php
      include('../../footer.html');
  ?>

