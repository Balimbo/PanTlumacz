var popup = document.getElementsByClassName("popupContent")[0];

var ppbtn = document.getElementById("popupBtn");

var ppdiv = document.getElementsByClassName("popupBody")[0];

ppbtn.onclick = function () {
    let ppcheck = false;
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
    }, 3000);
}

ppdiv.onclick = function () {
    ppcheck = true;
    popup.classList.add('popupVisuallyHidden');
    popup.addEventListener('transitionend', function (e) {
        popup.classList.add('popupHidden');
    }, {
        capture: false,
        once: true,
        passive: false
    });
}
