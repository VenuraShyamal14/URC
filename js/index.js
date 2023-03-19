const popup = document.getElementById("popupid");
const backBtn = document.getElementById("backBtn");
const content = document.getElementById("loadHtml");
const buttons = document.querySelectorAll('.clickname');


// Loop through and add a click event listener to each one of tr
buttons.forEach(function(button) {
  button.addEventListener('click', function(event) {
    // Get the class of the clicked button
    const clickedText = event.target.classList[1];
    
    // Log the clicked text to the console
    console.log(clickedText);

    //change the html
    content.src = '/new.html';

    //open popup
    popup.classList.add("open-popup");
  });
});

backBtn.addEventListener('click', function() {
  popup.classList.remove("open-popup");
});

