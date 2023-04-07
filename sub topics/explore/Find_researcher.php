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
        <input class="form-control me-2" type="search" placeholder="Search Researcher" id="search_input" aria-label="Search">
        <button class="btn" id="search_researcher_btn" type="submit" onclick="handleButtonClick(event)">Search</button>
    </form>
  </div>
</nav>

<div  id="test" class="container "  ></div>

<div id='search_results1'>

</div>

<!--footer-->
<?php
      include('../../footer.html');
  ?>


<script>
var outputDiv = document.getElementById('test');
const checkbuttons = document.querySelectorAll('.btn-check');

function handleButtonClick(event) {
  event.preventDefault(); // prevent default behavior of the click event
  // your code to be executed when the button is clicked
    search_researcher();
}

checkbuttons.forEach(function(checkbox) {
          if (checkbox.checked) {
            searchData('Agriculture');
            
          }
});


checkbuttons.forEach(function(button) {
  button.addEventListener('click', function(event) {
        searchData(event.target.id);
  });
});



function displayData(data) {
  // find the HTML element where you want to display the data
  
    outputDiv.innerHTML = '';
  // create a new row to hold the cards
  var row = document.createElement('div');
  row.classList.add('row', 'g-4', 'py-3');
  row.style.justifyContent = "space-evenly";

  

    if (data.length>0){
  // iterate through the data and create a card for each item
         for (var i = 0; i < data.length; i++) {
        var item = data[i];

    //paragraph.innerHTML=item.name;
    //researcher_img.src="item.URL";
    // create a new card
    var card = document.createElement('div');
    card.classList.add('card', 'col-md-3');
    card.style.boxShadow='5px 10px 8px 10px #888888';
    //card.style.marginRight = "50px";
    //card.style.marginleft = "50px";

    //create img
    var cardImg= document.createElement('img');
    cardImg.classList.add('card-img-top', 'mx-30');
    cardImg.src=item.URL ;
    cardImg.style.objectFit='contain';
    cardImg.style.paddingLeft='10px';
    cardImg.style.paddingRight='10px';
    cardImg.height=250;
    cardImg.width='auto';
    //cardImg.style.borderRadius='50%';
    card.appendChild(cardImg);

    // create the card body
    var cardBody = document.createElement('div');
    cardBody.classList.add('card-body');


    //add the name to the card body
    var name = document.createElement('h5');
    name.classList.add('card-text');
    name.innerHTML =item.name;
    cardBody.appendChild(name);

    //add the faculty to the card body
    var faculty = document.createElement('h6');
    faculty.classList.add('card-text');
    faculty.innerHTML = 'Faculty of ' + item.faculty;
    cardBody.appendChild(faculty);

    var b1 = document.createElement('button');
    b1.classList.add('btn','detail_btn1');
    b1.setAttribute("id", item.name);
    b1.innerHTML = 'view profile';
    b1.addEventListener('click', function() {
        search_publication(event.target.id);
        });
    cardBody.appendChild(b1);

    //add the card body to the card
    card.appendChild(cardBody);

    //add the card to the row
    row.appendChild(card);

    // if 3 cards have been added to the row, create a new row
    if ((i + 1) % 3 === 0) {
      outputDiv.appendChild(row);
      row = document.createElement('div');
      row.classList.add('row', 'g-4', 'py-3');
      row.style.justifyContent = "space-evenly";
    }

     // if there is 2  number of cards, add the last row
  if (data.length % 3 === 2) {
    outputDiv.appendChild(row);
  }
  if (data.length % 3 === 1) {
    outputDiv.appendChild(row);
  }
    }

 
  }
}




function displayPopup(content){ 
    var temp = document.createElement('div');
    temp.setAttribute("id", "temp_popup");
    temp.classList.add('position-fixed');
    
    temp.style.top='30%';
    temp.style.left='15%';
    temp.style.backgroundColor='#ECF9FF';
    temp.style.width='70vw';
    temp.style.height='50vh';
    temp.style.padding='50px';
    temp.style.borderRadius='10px';
    temp.style.boxShadow='5px 10px 8px 10px #888888';

    //document.body.classList.add('bg-secondary','bg-gradient');

  // Create a content element with name and description
  var name1 = document.createElement('h2');
  name1.textContent = content[0].name;
  var name2 = document.createElement('h5');
  name2.innerHTML = "<u>total publications : " + content.length +"</u>";
  var description = document.createElement('h6');
  //var withoutQuotes = formattedData.substring(1, formattedData.length - 1);
  //description.innerHTML =JSON.stringify(content.length, null, 2);
  let text="";
  for (let j = 0; j < content.length; j++) {
        text =text.concat(content[j].publication);
        text =text.concat("<hr>");
    }
  description.innerHTML =text;
  description.style.height='25vh';
  description.style.overflowY='scroll';
  var temp_button= document.createElement('button');
  temp_button.classList.add('btn');
  temp_button.textContent='back';
  temp_button.style.position='absolute';
  temp_button.style.right='0';
  temp_button.style.marginRight='50px';
  temp_button.addEventListener("click",function(){
      removepopup(temp);
  });

  

  // Add the content elements to the popup
  temp.appendChild(name1);
  temp.appendChild(name2);
  temp.appendChild(description);
  temp.appendChild(temp_button);
  // Add the popup to the page
  document.body.appendChild(temp);

}

function removepopup(temp){
    temp.remove();
}


function search_researcher() {
			var keyword = $('#search_input').val();
			$.ajax({
				type: 'POST',
				url: '../../search_by_name.php',
				data: { keyword: keyword },
				success: function(response) {
					//$('#search_results1').html(response);
                    myObj = JSON.parse(response);

                    if (myObj.length != 0) {
                            displayData(myObj);
                    } else {
                            //alert('no data');
                            outputDiv.innerHTML=" No results found....";
                    }
                    //displayData(myObj);
                    //alert(response);
				}
			});
			return false;
}


function search_publication(keyword) {
			
			$.ajax({
				type: 'POST',
				url: '../../search_for_publication.php',
				data: { keyword: keyword },
				success: function(response) {
					//$('#search_results1').html(response);
                    myObj1 = JSON.parse(response);

                    if (myObj1.length != 0) {
                            displayPopup(myObj1);
                            //alert(myObj1.length);
                    } else {
                            alert('no data');
                            //outputDiv.innerHTML=" No results found....";
                    }
                    //displayData(myObj);
                    //alert(response);
				}
			});
			return false;
}


</script>




        
        
		
