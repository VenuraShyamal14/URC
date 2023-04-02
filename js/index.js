
const nav_publication_btn = document.getElementById("nav_publication");

const temp_popup = document.getElementById("temp_popup");

const checkbuttons = document.querySelectorAll('.btn-check');





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




function sendData(id) {
    var data = {
        faculty: id,
        
     
    };

    var xhr = new XMLHttpRequest();

    // set the PHP page you want to send data to
    xhr.open("POST", "get_data.php", true);
    xhr.setRequestHeader("Content-Type", "application/json");

    // what to do when you receive a response
    xhr.onreadystatechange = function () {
        if (xhr.readyState == XMLHttpRequest.DONE) {
            
            var returned_data=xhr.responseText;
            alert(returned_data);
            //alert(xhr.responseText);
            //paragraph.innerHTML=xhr.responseText;
        }
    };

    // send the data
    xhr.send(JSON.stringify(data));
}


let myObj;
function searchData(id) {
    var data = {
        Id: id,
    };

    var xhr1 = new XMLHttpRequest();

    // set the PHP page you want to send data to
    xhr1.open("POST", "search_data.php", true);
    xhr1.setRequestHeader("Content-Type", "application/json");

    // what to do when you receive a response
    xhr1.onreadystatechange = function () {
        if (xhr1.readyState == XMLHttpRequest.DONE) {
            
            //var returned_data=xhr.responseText;
            //alert(returned_data);
            myObj = JSON.parse(this.responseText);
            displayData(myObj);
            //alert(myObj[0].faculty);
            //paragraph.innerHTML=xhr.responseText;
        }
        //xhr1.open("GET", "search_data.php");
    };

    // send the data
    xhr1.send(JSON.stringify(data));
}



function displayData(data) {
  // find the HTML element where you want to display the data
  var outputDiv = document.getElementById('test');
    outputDiv.innerHTML = '';
  // create a new row to hold the cards
  var row = document.createElement('div');
  row.classList.add('row', 'row-cols-3', 'g-4', 'py-3');
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
    card.appendChild(cardImg);

    // create the card body
    var cardBody = document.createElement('div');
    cardBody.classList.add('card-body');


    //add the name to the card body
    var name = document.createElement('h5');
    name.classList.add('card-text');
    name.innerHTML = item.honorific+ item.initials+item.name;
    cardBody.appendChild(name);

    //add the faculty to the card body
    var faculty = document.createElement('p');
    faculty.classList.add('card-text');
    faculty.innerHTML = 'Faculty of ' + item.faculty;
    cardBody.appendChild(faculty);

    var b1 = document.createElement('button');
    b1.classList.add('btn','btn-primary','detail_btn1');
    b1.setAttribute("id", i);
    b1.innerHTML = 'view profile';
    b1.addEventListener('click', function() {
        displayPopup(event.target.id);
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
      row.classList.add('row', 'row-cols-3', 'g-4', 'py-3');
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
    //alert(myObj[content].name);
  
    var temp = document.createElement('div');
    temp.setAttribute("id", "temp_popup");
    temp.classList.add('position-fixed');
    temp.style.overflow='scroll';
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
  name1.textContent = myObj[content].honorific + myObj[content].initials + myObj[content].name;
  var description = document.createElement('p');
  description.textContent = myObj[content].details;
  var temp_button= document.createElement('button');
  temp_button.classList.add('btn','btn-primary');
  temp_button.textContent='back';
  temp_button.addEventListener("click",function(){
      removepopup(temp);
  });

  // Add the content elements to the popup
  temp.appendChild(name1);
  temp.appendChild(description);
  temp.appendChild(temp_button);
  // Add the popup to the page
  document.body.appendChild(temp);
}

function removepopup(temp){
    temp.remove();
}