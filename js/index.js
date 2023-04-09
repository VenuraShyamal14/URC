

let myObj;
function searchData(id) {
    var data = {
        Id: id,
    };

    var xhr1 = new XMLHttpRequest();

    // set the PHP page you want to send data to
    xhr1.open("POST", "search_by_faculty.php", true);
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



let myPub;
function searchPublication(id) {
    var data = {
        Id: id,
    };

    var xhr2 = new XMLHttpRequest();

    // set the PHP page you want to send data to
    xhr2.open("POST", "search_for_publication.php", true);
    xhr2.setRequestHeader("Content-Type", "application/json");

    // what to do when you receive a response
    xhr2.onreadystatechange = function () {
        if (xhr2.readyState == XMLHttpRequest.DONE) {
            
            //var returned_data=xhr.responseText;
            //alert(returned_data);
            myPub = JSON.parse(this.responseText);

            let text1="";
            for (let k = 0; k < myPub.length; k++) {
                let buttonClass = myPub[k].name;
                text1 += "<button class='"+ buttonClass + " btn"+" 'onclick='clickedname(this)'>" + myPub[k].name + "</button><br>";
                text1 =text1.concat("<br>");
                text1 =text1.concat(myPub[k].publication);
                text1 =text1.concat("<hr>");
            }
            search_results.innerHTML =text1;
        }
        //xhr1.open("GET", "search_data.php");
    };

    // send the data
    xhr2.send(JSON.stringify(data));
}

function clickedname(button) {
   //alert(button.classList[0]);
  // Do something with the button here
  var keyword = button.classList[0];
			$.ajax({
				type: 'POST',
				url: '../../search_by_name.php',
				data: { keyword: keyword },
				success: function(response) {
					//$('#search_results1').html(response);
                    myObj = JSON.parse(response);

                    if (myObj.length != 0) {
                            //displayData(myObj);
                            //alert(myObj[0].URL);
                            // Create the popup card container element
                            const popupCard = document.createElement("div");

                            popupCard.setAttribute("id", "temp_popup1");
                            popupCard.classList.add('position-fixed');
    
                            popupCard.style.top='30%';
                            popupCard.style.left='40%';
                            popupCard.style.backgroundColor='#ECF9FF';
                            popupCard.style.width='auto';
                            popupCard.style.height='auto';
                            popupCard.style.textAlign='center';
                            popupCard.style.padding='50px';
                            popupCard.style.borderRadius='10px';
                            popupCard.style.boxShadow='5px 10px 8px 10px #888888';
                            


                            // Create the image element
                            const popupImage = document.createElement("img");
                            popupImage.classList.add("popup-image");
                            popupImage.src = myObj[0].URL;
                            popupImage.height='250';
                            popupCard.appendChild(popupImage);

                            // Create the name element
                            const popupName = document.createElement("h3");
                            popupName.classList.add("popup-name");
                            popupName.innerText=myObj[0].name;
                            popupCard.appendChild(popupName);

                            const popupFaculty = document.createElement("h6");
                            popupFaculty.classList.add("popup-name");
                            popupFaculty.innerText="faculty of "+myObj[0].faculty;
                            popupCard.appendChild(popupFaculty);

                            const popupclosebtn = document.createElement("button");
                            popupclosebtn.classList.add("btn");
                            popupclosebtn.innerText='close';
                            popupCard.appendChild(popupclosebtn);
                            popupclosebtn.addEventListener("click", function() {
                            // Code to close the popup
                            popupCard.style.display='none';
                            });

                            // Add the popup card to the document body
                            document.body.appendChild(popupCard);

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

