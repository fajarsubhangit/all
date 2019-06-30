var button = document.getElementById("click");
var hasil = document.getElementById("hasil");

function newAjax() {
  var request = new XMLHttpRequest();
      request.open("POST","tampil.php",true);
      request.setRequestHeader("Content-type","applications/x-www-form-urlencoded");
      request.send();
      request.onreadystatechange = function() {
        if(request.readyState === 4 && request.status === 200) {
          hasil.innerHTML = request.responseText;
        }
    }
}

button.addEventListener("click",newAjax);
