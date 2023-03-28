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

    <div class="btn-group d-flex justify-content-center" role="group" aria-label="Basic radio toggle button group">
  <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
  <label class="btn btn-outline-primary" for="btnradio1">Agriculture</label>

  <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
  <label class="btn btn-outline-primary" for="btnradio2">Allied Health Sciences</label>

  <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
  <label class="btn btn-outline-primary" for="btnradio3">Dental Sciences</label>

  <input type="radio" class="btn-check" name="btnradio" id="btnradio4" autocomplete="off">
  <label class="btn btn-outline-primary" for="btnradio4">Engineering</label>

  <input type="radio" class="btn-check" name="btnradio" id="btnradio5" autocomplete="off">
  <label class="btn btn-outline-primary" for="btnradio5">Medicine</label>

  <input type="radio" class="btn-check" name="btnradio" id="btnradio6" autocomplete="off">
  <label class="btn btn-outline-primary" for="btnradio6">Science</label>

  <input type="radio" class="btn-check" name="btnradio" id="btnradio7" autocomplete="off">
  <label class="btn btn-outline-primary" for="btnradio7">Veterinary Medicine </label>

  <input type="radio" class="btn-check" name="btnradio" id="btnradio8" autocomplete="off">
  <label class="btn btn-outline-primary" for="btnradio8">Arts</label>

  
</div>

    <div class="container">
        <h2>Tier 4* Researchers</h2>
        <hr />
        <div class="card" style="width: 500px;">
            <?php
                $sql = "SELECT id, honorific, initials, name, faculty, URL, details FROM cards";
                $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));			
                while( $record = mysqli_fetch_assoc($resultset) ) {
                ?>
            <div class="row no-gutters">
                <div class="col-sm-5">
                    <img alt="" src="<?php echo $record['URL']; ?>" height="200px">
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








<!--footer-->
<?php
      include('../../footer.html');
  ?>

