$(function () {
    let errors = ['10', '11', '20', '21'];

    let ppdiv = document.getElementsByClassName("popupBody")[0];

    var params = window.location.search.replace('?','').split('&').reduce(
        function(p,e){
            var a = e.split('=');
            p[ decodeURIComponent(a[0])] = decodeURIComponent(a[1]);
            return p;
        },
        {}
    );
    for (var i = errors.length - 1; i >= 0; i--) {
        if(params['data'] === errors[i] )
            {
                Popup(params['data']);
                break;
            }
    }
      


    function Popup(err) {
        let popup = document.getElementsByClassName("popupContent")[0];

        if(err == '10')
        {
            popup.classList.add('ppContGreen');
            $(".popupBody").html("Zgłoszenie pana/pani zostało zaakceptowane przez moderatora! Wkrótce odpowiemy na twoją pocztę.");
        }
        else if (err === '11')
        {
            popup.classList.add('ppContRed');
            $(".popupBody").html("Wystąpił błąd na serwerze. Przepraszamy.");
        }
        else if(err === "20")
        {
            popup.classList.add('ppContGreen');
            $(".popupBody").html("Komentarz został pomyślnie pozostawiony.");
        }
        else if(err === "21")
        {
            popup.classList.add('ppContRed');
            $(".popupBody").html("Wystąpił błąd na serwerze. Przepraszamy.");
        }
        else 
            return;

        popup.classList.remove('popupHidden');
        setTimeout(function () {
            popup.classList.remove('popupVisuallyHidden');
        }, 20);

        setTimeout(function () {
            popup.classList.add('popupVisuallyHidden');
            popup.addEventListener('transitionend', function (e) {
                popup.classList.add('popupHidden');
            }, {
                capture: false,
                once: true,
                passive: false
            });
        }, 7000);
    }

    ppdiv.onclick = function () {
        let popup = document.getElementsByClassName("popupContent")[0];

        popup.classList.add('popupVisuallyHidden');
        popup.addEventListener('transitionend', function (e) {
            popup.classList.add('popupHidden');
        }, {
            capture: false,
            once: true,
            passive: false
        });
    }
});