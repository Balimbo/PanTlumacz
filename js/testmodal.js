 $(function () {
     function Sleep(ms) {
         ms += new Date().getTime();
         while (new Date() < ms) {}
     }
     var modal = document.getElementById("modal__request");
     var btn = document.getElementById("modal__request__open");
     var span = document.getElementsByClassName("modal__request__close")[0];
     var spanM = document.getElementsByClassName("modal__request__mobile__close")[0];

     btn.onclick = function () {
         $('.modal__request').fadeIn().end().delay(400).fadeOut('slow');
         modal.style.display = "block";
     }

     span.onclick = function () {
         $('.modal__request').fadeOut().end().delay(400).fadeOut('slow');
     }

     spanM.onclick = function () {
         $('.modal__request').fadeOut().end().delay(400).fadeOut('slow');
     }

     window.onclick = function (event) {
         if (event.target == modal) {
             $('.modal__request').fadeOut().end().delay(400).fadeOut('slow');
         }
     }
 });
