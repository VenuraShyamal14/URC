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



    <div class="container bcontent">
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
					
                    <a href="#" id="<?php echo $record['id']?>" class="btn btn-primary">View Profile</a>
                </div>
            </div>
            
            <!-- popup wenne meke tika-->
            <div class="popup" id="popupid">
                <img src="<?php echo $record['URL']; ?>" alt="publications Icon" width="100" height="100" >
                <h2>PUBLICATIONS</h2>
                
    
                <p><?php echo $record['details']; ?></p>
 
                <button id="backBtn" type="button" class="btn btn-primary">back</button>
            </div>

            <?php } ?>
        </div>
    </div>












<!--footer-->
<?php
      include('../../footer.html');
  ?>

