const popup = document.getElementById("popupid");
const backBtn = document.getElementById("backBtn");
//const content = document.getElementById("loadHtml");
//document.getElementById('forecast_embed').contentDocument.location.reload(true);
const buttons = document.querySelectorAll('.btn');


// Loop through and add a click event listener to each one of tr
buttons.forEach(function(button) {
  button.addEventListener('click', function(event) {
    // Get the class of the clicked button
    //const clickedText = event.target.classList[1];
    
    // Log the clicked text to the console
   // console.log(clickedText);

    //change the html
    //content.src = 'http://venuraurc.epizy.com/publications/DNBGunawardane.html';
   
    //open popup
    popup.classList.add("open-popup");
  });
});

backBtn.addEventListener('click', function() {
  popup.classList.remove("open-popup");
});

