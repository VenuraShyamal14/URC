<!--header-->
<?php
      include('../../header.html');
  ?>
  

   <!--navbar-->
   <?php
   include('../../navbar.html');
    ?>
    
    <?php
// Create an array for titles
$title = array(
    "1. Applications of White Light Images and Artificial Intelligence for the Early Detection of Oral Cancer in Sri Lanka", 
" 2. Development of a Rapid Molecular Tool for Detection and Accurate Identification of Quarantine Weeds", 
"3. Morphological, Biochemical, and Molecular Characterization of Nutmeg (Myristica fragrans Houtt.) Germplasm in Sri Lanka", 
"4. A Wearable Device for Real-Time Monitoring of Biometric Signals of Pregnant Women, Athletes, and Other Persons", 
"5. Internet of Things (IoT) for Smart Agriculture: Assessment of a Low-Cost Low-Power IoT System Using Agronomic Parameters, Image Analysis, and Machine Learning",
"6. Design and Implementation of Microenvironment Conditions for Tea and Ornamental Foliage Plants Using Precision Agriculture Systems Powered by Solar Photovoltaics", 
"7. Radiation Shielding for Medical Procedures: Synthesis of Cost-Effective, Lead-Free Material", 
"8. Impacts of Land-Use Changes and Soil Erosion on Water Quality and Aquatic Macroinvertebrate Community Responses in a Small Mountainous Catchment in Mahaweli River Basin", 
"9. Aims of Organizing the Peradeniya University Research Excellence Showcase – PURES 2022",
"10. Non-Invasive System to Determine Biometrics", 
" 11. Cost-Effective and Sensitive COVID-19 Test Kit", 
"12. Oral Health Protection Effect of Traditional Medication in Sri Lanka", 
"13. Development of an Automatic Urinal Flow Measurement Device Targeting Dengue Patients",
"14. E-Wheeler with Swappable Battery Option and IoT Network", 
"15. Projects Carried Out at the Agricultural Bio-Technology Centre", 
"16. Concluding Remarks at PURES 2022");

// Create an array of prasenters
$presenter = array(
    "Prof. Ruwan Jayasinghe", 
    " Dr. Vithanage Sirimalwatta", 
    "Dr. Dimanthi Jayatilake", 
    "Prof. Parakrama Ekanayake", 
    "Dr. Asitha Bandaranayake",
    "Prof. Janaki Mohotti", 
    "Dr. Velautham Sivakumar", 
    "Prof. Tilak Hewawasam", 
    "Prof. Janaka Ekanayake, Director, University Research Council",
    "Research Assistant from the Faculty of Engineering", 
    " Dr. Ruchika Fernando", 
    "Dr. Madhavi Paranagama", 
    "Dr. Ruwan Ranaweera",
    "Prof. Lilantha Samaranayake", 
    " Prof. Pradeepa Bandaranayake", 
    "Prof. Janaka Ekanayake, Director, University Research Council");

// Create an array for linka
$link = array(
    "https://drive.google.com/file/d/1fVIweN67u5HnCjrCHKbQDRWLf7j-lfLG/preview",
 " https://drive.google.com/file/d/15AvmFpqXdquCgDhflHIY8xgZkgAh2fwL/preview", 
 "https://drive.google.com/file/d/1lQCuWwsgMubuqpN1CknsuAuN5hfs1qV0/preview", 
 "https://drive.google.com/file/d/1BiGJ4jDtH65U-D9qQWuCzZdFc5lBZX7r/preview", 
 "https://drive.google.com/file/d/1w0yi8UHmH402bwjb5-V_bSe1Jb7mXzPu/preview",
 "https://drive.google.com/file/d/1ojtMaOBqHak4m2plLk9OWbgb0Ab9JgEm/preview", 
 "https://drive.google.com/file/d/13YWZxVg_AaiAJp7PvIeQJ6htzDstd5An/preview", 
 "https://drive.google.com/file/d/15mUrtJHQj5BeItU_Zh_ewH2E5NKaFXFt/preview", 
 "https://drive.google.com/file/d/1WU1IyK9fPUt90fnDMH3itZVUIms8diFm/preview",
 "https://drive.google.com/file/d/1DOTZc9yGfvYOeR3FscKXI_QYiTmdvczW/preview", 
 "https://drive.google.com/file/d/1L5QWyV0lFxlMQYoPnGWk4T1aRFLHSeID/preview", 
 "https://drive.google.com/file/d/1QzeQ1GylYyPEKXhZqrl999kz1t-UUM8Y/preview", 
 "https://drive.google.com/file/d/1mtJfi45xgelxjZKoh6o1leWYzeRn42OB/preview",
 "https://drive.google.com/file/d/1M2f94mcQd2tFWuePIapmvRIDoiSMhgzT/preview", 
 "https://drive.google.com/file/d/1o0pC8ua7N1tYMpFpt6wRMDmlu7Ee7yuU/preview", 
 "https://drive.google.com/file/d/1thZUU6YZz4xEUQKOPzLXMk9PkSJIuNwK/preview");

      echo '<br><br><br>';
      echo '<div class="container">';
      echo '<div class="row" style="justify-content: space-between;">';
 // Loop through the arrays and create cards for each entry
    for ($i = 0; $i < count($title); $i++) {
      
      echo '<div class="col-md-6">';
      echo '<div class="card mb-4">';
      echo '<h5 class="card-title" style="margin-left:20px;margin-top:25px;">' . $title[$i] . '</h5>';
      echo '<h6 class="card-subtitle mb-2 text-muted" style="margin-left:20px;">' . $presenter[$i] . '</h6>';

      echo '<div class="card-body">';
      echo '<iframe class="embed-responsive-item" src="' . $link[$i] . '" width="100%" height="300" allow="autoplay"></iframe>';



      echo '</div>';
      echo '</div>';
      echo '</div>';
    }
    echo '</div>';
      echo '</div>';
?>



    

<!--footer-->
<?php
      include('../../footer.html');
  ?>
