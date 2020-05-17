 $(function () {
     function Sleep(ms) {
         ms += new Date().getTime();
         while (new Date() < ms) {}
     }
     // variable initialization
     let modal = document.getElementById("modal__request");
     let btn = document.getElementById("modal__request__open");
     let span = document.getElementsByClassName("modal__request__close")[0];
     let spanM = document.getElementsByClassName("modal__request__mobile__close")[0];

     // the appearance of a modal window when you click on the button in the header
     btn.onclick = function () {
         $('.modal__request').fadeIn().end().delay(400).fadeOut('slow');
         modal.style.display = "block";
     }

     // closing the modal window by clicking on the cross
     span.onclick = function () {
         $('.modal__request').fadeOut().end().delay(400).fadeOut('slow');
     }

     // closing the modal window by clicking on the mobile cross
     spanM.onclick = function () {
         $('.modal__request').fadeOut().end().delay(400).fadeOut('slow');
     }

     // closing the modal window when clicking on the darkened area
     window.onclick = function (event) {
         if (event.target == modal) {
             $('.modal__request').fadeOut().end().delay(400).fadeOut('slow');
         }
     }
 });
