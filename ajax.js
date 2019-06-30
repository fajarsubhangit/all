var button = document.getElementById("click");

function newAjax() {
  var request = new XMLHttpRequest();
      request.open("POST","json.js",true);
      request.setRequestHeader("Content-type","applications/x-www-form-urlencoded");
      request.send();
      request.onreadystatechange = function() {
        if(request.readyState === 4 && request.status === 200) {
          alert(JSON.stringify(object,["nama"]));
        }
    }
}

button.addEventListener("click",newAjax);
