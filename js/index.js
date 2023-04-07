
function search(pub) {
  var data = {
      publication: pub,
      
   
  };

  var xhr = new XMLHttpRequest();

  // set the PHP page you want to send data to
  xhr.open("POST", "../../search.php", true);
  xhr.setRequestHeader("Content-Type", "application/json");

  // what to do when you receive a response
  xhr.onreadystatechange = function () {
      if (xhr.readyState == XMLHttpRequest.DONE) {
          
          var returned_data=xhr.responseText;
          //alert(returned_data);
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



