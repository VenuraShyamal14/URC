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


    <div class="checkbox-container" style="padding-top:50px; margin-left:50px;" >
        <?php
            for ($i = 0; $i < 26; $i++) {
                $letter = chr(65 + $i); // A-Z
                echo '<input type="radio" class="btn-check " name="btnradio" id=' . $letter . ' autocomplete="off"  >
            <label class="btn check_btn btn-outline-danger" for=' . $letter . ' ><span>' . $letter . '</span></label>';
            }
        ?>
    </div>
    


<div  id="find_researcher_result" class="container "  ></div>

<div id='search_results1'>

</div>

<!--footer-->
<?php
      include('../../footer.html');
  ?>


<script>
 //display search btn
document.getElementById('search_input').style.display = 'flex';
document.getElementById('search_researcher_btn').style.display = 'flex';

var outputDiv = document.getElementById('find_researcher_result');
const checkbuttons = document.querySelectorAll('.btn-check');

function handleButtonClick(event) {
  event.preventDefault(); // prevent default behavior of the click event
  // your code to be executed when the button is clicked
    search_researcher();
}

checkbuttons.forEach(function(checkbox) {
          if (!checkbox.checked) {
              document.getElementById('A').checked = true;
            searchData('a');
            
          }
});


checkbuttons.forEach(function(button) {
  button.addEventListener('click', function(event) {
        searchData(event.target.id);
  });
});



function displayData(data) {
    outputDiv.innerHTML = '';

    if (data.length === 0) {
        var noData = document.createElement('h3');
        noData.style.textAlign = 'center';
        noData.style.marginTop = '100px';
        noData.style.marginBottom = '100px';
        noData.innerHTML = 'No Data Found';
        outputDiv.appendChild(noData);
    }

    if (data.length > 0) {
        // Calculate the number of columns based on available width and desired card width
        var availableWidth = outputDiv.offsetWidth; // You may need to adjust this based on your layout
        var cardWidth = 300; // Adjust this to your desired card width
        var numColumns = Math.floor(availableWidth / cardWidth);

        // Create a new row to hold the cards
        var row = document.createElement('div');
        row.classList.add('row', 'g-4', 'py-3');
        row.style.justifyContent = "space-evenly";

        for (var i = 0; i < data.length; i++) {
            var item = data[i];

            // Create a new card
            var card = document.createElement('div');
            card.classList.add('card', 'col-md-' + (12 / numColumns), 'col-sm-5');
            card.style.boxShadow = '5px 10px 8px 10px #888888';
            card.style.marginRight = "20px";
            card.style.marginLeft = "20px";

            // Create img
            var cardImg = document.createElement('img');
            cardImg.classList.add('card-img-top', 'mx-30');
            cardImg.src = item.URL;
            cardImg.style.objectFit = 'contain';
            cardImg.style.paddingLeft = '10px';
            cardImg.style.paddingRight = '10px';
            cardImg.height = 250;
            cardImg.width = 'auto';
            card.appendChild(cardImg);

            // Create the card body
            var cardBody = document.createElement('div');
            cardBody.classList.add('card-body');

            // Add the name to the card body
            var name = document.createElement('h5');
            name.classList.add('card-text');
            name.innerHTML = item.name;
            cardBody.appendChild(name);

            // Add the faculty to the card body
            var faculty = document.createElement('h6');
            faculty.classList.add('card-text');
            faculty.innerHTML = 'Faculty of ' + item.faculty;
            cardBody.appendChild(faculty);

            var b1 = document.createElement('button');
            b1.classList.add('btn', 'detail_btn1');
            b1.setAttribute("id", item.name);
            b1.innerHTML = 'view profile';

            b1.addEventListener('click', function () {
                search_publication(event.target.id);
            });
            cardBody.appendChild(b1);
            cardBody.style.textAlign = "center";

            // Add the card body to the card
            card.appendChild(cardBody);

            // Add the card to the row
            row.appendChild(card);

            // If the row is full or we have reached the end of the data, add the row to the outputDiv
            if ((i + 1) % numColumns === 0 || i === data.length - 1) {
                outputDiv.appendChild(row);

                // Create a new row
                row = document.createElement('div');
                row.classList.add('row', 'g-4', 'py-3');
                row.style.justifyContent = "space-evenly";
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
  name1.style.display='inline';
  var name2 = document.createElement('h5');
  name2.style.display='inline';
  name2.style.float='right';
  name2.innerHTML = "<u>total publications : " + content.length +"</u>";
  var description = document.createElement('h6');
  //var withoutQuotes = formattedData.substring(1, formattedData.length - 1);
  //description.innerHTML =JSON.stringify(content.length, null, 2);
  let text="<hr>";
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
                            outputDiv.innerHTML=" ";
                            var noData = document.createElement('h3');
                            noData.style.textAlign = 'center';
                            noData.style.marginTop = '100px';
                            noData.style.marginBottom = '100px';
                            noData.innerHTML = 'No Data Found';
                            outputDiv.appendChild(noData);
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
                            alert('database is not updated for this researcher');
                            //outputDiv.innerHTML=" No results found....";
                    }
                    //displayData(myObj);
                    //alert(response);
				}
			});
			return false;
}


</script>




        
        
		
