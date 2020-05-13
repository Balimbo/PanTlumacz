 var modal = document.getElementById("modal__request");
 var btn = document.getElementById("modal__request__open");
 var span = document.getElementsByClassName("modal__request__close")[0];

 btn.onclick = function () {
    modal.style.display = "block";
 }

 span.onclick = function () {
    modal.style.display = "none";
 }

 window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
