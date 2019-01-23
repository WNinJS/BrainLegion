var menuElem = document.getElementById('dropdown-menu');
    var titleElem = menuElem.querySelector('.title');

    titleElem.onclick = function() {
      menuElem.classList.toggle('open');
    };