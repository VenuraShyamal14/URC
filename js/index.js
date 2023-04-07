

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
            //alert(myPub);
            //displayData(myPub);
            //alert(myObj[0].faculty);
            //search_results.innerHTML=myPub;
            let text1="<hr>";
            for (let k = 0; k < myPub.length; k++) {
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