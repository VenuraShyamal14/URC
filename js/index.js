const popup = document.getElementById("popupid");
const paragraph = document.getElementById("popup_p");
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
    sendData(event.target.id);
    // Log the clicked text to the console
   // console.log(clickedText);

    //change the html
    //content.src = 'http://venuraurc.epizy.com/publications/DNBGunawardane.html';
   
    //open popup
    popup.classList.add("open-popup");
  });
});


checkbuttons.forEach(function(button) {
  button.addEventListener('click', function(event) {
    // Get the class of the clicked button
    //const clickedText = event.target.classList[1];
    searchData(event.target.id);
    // Log the clicked text to the console
   // console.log(clickedText);

    //change the html
    //content.src = 'http://venuraurc.epizy.com/publications/DNBGunawardane.html';
   
    //open popup
  });
});


backBtn.addEventListener('click', function() {
  popup.classList.remove("open-popup");
});


function sendData(id) {
    var data = {
        Id: id,
        
     
    };

    var xhr = new XMLHttpRequest();

    // set the PHP page you want to send data to
    xhr.open("POST", "get_data.php", true);
    xhr.setRequestHeader("Content-Type", "application/json");

    // what to do when you receive a response
    xhr.onreadystatechange = function () {
        if (xhr.readyState == XMLHttpRequest.DONE) {
            
            var returned_data=xhr.responseText;
            //alert(returned_data);
            //alert(xhr.responseText);
            paragraph.innerHTML=xhr.responseText;
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
            alert(myObj[0].name);
            //paragraph.innerHTML=xhr.responseText;
        }
        xmlhttp.open("GET", "search_data.php");
    };

    // send the data
    xhr1.send(JSON.stringify(data));
}


