/*  Navbar JS  */

var prevScrollpos = window.scrollY;
window.addEventListener("scroll", function () {
    var currentScrollPos = window.scrollY;
    if (prevScrollpos > currentScrollPos) {
        document.getElementById("navbar").style.top = "0";
    } else {
        document.getElementById("navbar").style.top = "-144px";
    }
    prevScrollpos = currentScrollPos;
});

/*  Tabs JS  */

function openTab(tabName) {
    var tabs = document.querySelectorAll('.tab div[class^="tab-"]');
    var contents = document.querySelectorAll('.tab-content[class^="tab-"]');

    tabs.forEach(function(tab) {
        tab.classList.remove('active');
    });
    contents.forEach(function(content) {
        content.classList.remove('active');
    });

    document.querySelector('.tab-' + tabName).classList.add('active');
    document.querySelector('.tab-content.tab-' + tabName).classList.add('active');
}


/* ------------ */

/*  Modal Popup JS   */

const modalOverlay = document.querySelector('.modal-overlay');
const modal = document.querySelector('.modal');

modalOverlay.addEventListener('click', () => {
    modalOverlay.style.display = 'none';
});

modal.addEventListener('click', (event) => {
    event.stopPropagation();
});

window.addEventListener('load', () => {
    modalOverlay.style.display = 'flex';
});

/* ------------ */



/*  Carousel  JS   */



