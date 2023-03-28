const popup = document.getElementById("popupid");
const nav_publication_btn = document.getElementById("nav_publication");
const backBtn = document.getElementById("backBtn");
//const content = document.getElementById("loadHtml");
//document.getElementById('forecast_embed').contentDocument.location.reload(true);
const buttons = document.querySelectorAll('.detail_btn');
const checkbuttons = document.querySelectorAll('.btn-check');


// Loop through and add a click event listener to each one of tr
buttons.forEach(function(button) {
  button.addEventListener('click', function(event) {
    // Get the class of the clicked button
    //const clickedText = event.target.classList[1];
    //sendData(event.target.id);
    // Log the clicked text to the console
   // console.log(clickedText);

    //change the html
    //content.src = 'http://venuraurc.epizy.com/publications/DNBGunawardane.html';
   
    //open popup
    popup.classList.add("open-popup");
  });
});


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


backBtn.addEventListener('click', function() {
  popup.classList.remove("open-popup");
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
            const myObj = JSON.parse(this.responseText);
            displayData(myObj);
            //alert(myObj[0].faculty);
            //paragraph.innerHTML=xhr.responseText;
        }
        xmlhttp.open("GET", "search_data.php");
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

if (data.length>0){
  // iterate through the data and create a card for each item
  for (var i = 0; i < data.length; i++) {
    var item = data[i];

    //paragraph.innerHTML=item.name;
    //researcher_img.src="item.URL";
    // create a new card
    var card = document.createElement('div');
    card.classList.add('card', 'col-md-3');

    //create img
    var cardImg= document.createElement('img');
    cardImg.classList.add('card-img-top');
    cardImg.src=item.URL ;
    cardImg.height=250;
    cardImg.width=250;
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
    b1.classList.add('btn','btn-primary');
    b1.classList.add('detail_btn')
    b1.innerHTML = 'view profile';
    cardBody.appendChild(b1);

    //add the card body to the card
    card.appendChild(cardBody);

    //add the card to the row
    row.appendChild(card);

    // if two cards have been added to the row, create a new row
    if ((i + 1) % 3 === 0) {
      outputDiv.appendChild(row);
      row = document.createElement('div');
      row.classList.add('row', 'row-cols-3', 'g-4', 'py-3');
    }
  }
}

  // if there is an odd number of cards, add the last row
  if (data.length % 3 === 2) {
    outputDiv.appendChild(row);
  }
  if (data.length % 3 === 1) {
    outputDiv.appendChild(row);
  }
}