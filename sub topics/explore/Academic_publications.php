<!--header-->
<?php
      include('../../header.html');
  ?>

   <!--navbar-->
   <?php
   include('../../navbar.html');
    ?>


<!-- popup wenne meke tika-->
    <div class="popup" id="popupid">
        <img src="/img/publications.jpg" alt="publications Icon" width="100" height="100" >
        <h2>PUBLICATIONS</h2>
        <div class="publication-content">
            <?php
                include('../../'+button_name+'.html');
            ?>
        
            
            </div>
        <button type="button" class="btn btn-primary" onclick="closePopup()">back</button>
    </div>



<!--table-->
    <h4 class="row justify-content-md-center table-title">
        Tier 4* Researchers Awrdees-2022
    </h4>
    <div class="row justify-content-center tablediv">
        <div class="col-auto">
          <table class="table table-responsive table-hover table-bordered border-dark">
            <thead>
                <tr>
                  <th scope="col">NO</td>
                  <th scope="col">NAME</th>
                  <th scope="col">FACULTY</th>
                </tr>
              </thead>
              <tbody>
                <tr onclick="openPopup()">
                  <td scope="row">01</td>
                  <td>Dr. SAHA Suraweera</td>
                  <td>Engineering</td>
                </tr>
                <tr onclick="openPopup()">
                  <td scope="row">02</td>
                  <td>Prof. BC Jayawardana</td>
                  <td>Agriculture</td>
                </tr>
                <tr onclick="openPopup()">
                    <td scope="row">03</td>
                    <td>Prof. KMS Wimalasiri</td>
                    <td>Agriculture</td>
                </tr>
                <tr onclick="openPopup()">
                    <td scope="row">04</td>
                    <td>Prof. DNB Gunawardane</td>
                    <td>Arts</td>
                </tr>
              </tbody>
          </table>
        </div>
    </div>

<!--footer-->
<?php
      include('../../footer.html');
  ?>

<script>
    let popup=document.getElementById("popupid");

    function openPopup(){
        popup.classList.add("open-popup");
    }

    function closePopup(){
        popup.classList.remove("open-popup");
    }

</script>