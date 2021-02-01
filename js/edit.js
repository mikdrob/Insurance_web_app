// block "edit" button with optional parametr "refresh" in case data has been modified and we need
// to upload data to db
function blockEditing(refresh) {
    var x = document.getElementsByClassName("formm");
    for (var i = 0; i < x.length; i++) {
      x[i].disabled = true;
      x[i].style.borderColor = "transparent";
      x[i].style.background = "transparent";
    }
    document.getElementById("sumbitButton").style.display = "none";
    document.getElementById("cancel").style.display = "none";
    if (refresh) {
      location.reload();
    }
  }
  // the function enables editing
  function enableEditing() {
    document.getElementById("sumbitButton").style.display = "block";
    document.getElementById("cancel").style.display = "block";
    var x = document.getElementsByClassName("formm");
    for (var i = 0; i < x.length; i++) {
      x[i].disabled = false;
      x[i].style.borderColor = "lightgrey";
    }
  }
  blockEditing(false);