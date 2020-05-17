$(function () {
    let errors = ['10', '11', '20', '21'];
    // 10 - Success in submitting a review
    // 11 - failure to submit review
    // 20 - successful attempt to send an application
    // 21 - unsuccessful attempt to submit an application

    let ppdiv = document.getElementsByClassName("popupBody")[0];

    // function that returns data from url after site name
    let params = window.location.search.replace('?', '').split('&').reduce(
        function (p, e) {
            let a = e.split('=');
            p[decodeURIComponent(a[0])] = decodeURIComponent(a[1]);
            return p;
        }, {}
    );

    // Checking for codes in url
    for (var i = errors.length - 1; i >= 0; i--) {
        if (params['data'] === errors[i]) {
            Popup(params['data']);
            break;
        }
    }


    // function that depending on params ['data'] displays a green / red pop-up window about the successful / unsuccessful form submission
    function Popup(err) {
        let popup = document.getElementsByClassName("popupContent")[0];

        if (err === '10') {
            popup.classList.add('ppContGreen');
            $(".popupBody").html("Zgłoszenie pana/pani zostało zaakceptowane przez moderatora! Wkrótce odpowiemy na twoją pocztę.");
        } else if (err === '11') {
            popup.classList.add('ppContRed');
            $(".popupBody").html("Wystąpił błąd na serwerze. Przepraszamy.");
        } else if (err === "20") {
            popup.classList.add('ppContGreen');
            $(".popupBody").html("Komentarz został pomyślnie pozostawiony.");
        } else if (err === "21") {
            popup.classList.add('ppContRed');
            $(".popupBody").html("Wystąpił błąd na serwerze. Przepraszamy.");
        } else
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

    // hide pop up when you click on it
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
