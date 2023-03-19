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
        
        <div id="pubConId" class="publication-content">
            <iframe id="loadHtml" width="100%" height="100%" src="/publications.html"></iframe>
        </div>
        
        <button id="backBtn" type="button" class="btn btn-primary">back</button>
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
                <tr >
                  <td scope="row">01</td>
                  <td class="clickname SAHASuraweera">Dr. SAHA Suraweera</td>
                  <td>Engineering</td>
                </tr>
                <tr>
                  <td scope="row">02</td>
                  <td class="clickname BCJayawardana">Prof. BC Jayawardana</td>
                  <td>Agriculture</td>
                </tr>
                <tr>
                    <td scope="row">03</td>
                    <td class="clickname KMSWimalasiri">Prof. KMS Wimalasiri</td>
                    <td>Agriculture</td>
                </tr>
                <tr>
                    <td scope="row">04</td>
                    <td class="clickname DNBGunawardane">Prof. DNB Gunawardane</td>
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

