function setParams(sliderId, containerId, btnClass) {
    var container = document.getElementById(containerId);
    var slider = document.getElementById(sliderId);
    var buttons = document.getElementsByClassName(btnClass);

    var containerWidth = container.offsetWidth;
    var slidesPerPage = 0;

    if (containerWidth < 551) {
        slidesPerPage = 1;
    } else if (containerWidth < 901) {
        slidesPerPage = 2;
    } else if (containerWidth < 1101) {
        slidesPerPage = 3;
    } else {
        slidesPerPage = 4;
    }

    var slides = slider.getElementsByClassName('slide').length;
    var slidesCount = slides - slidesPerPage;
    var currentPosition = 0;
    var currentMargin = 0;

    if (currentPosition > slidesCount) {
        currentPosition -= slidesPerPage;
    }

    currentMargin = -currentPosition * (100 / slidesPerPage);
    slider.style.marginLeft = currentMargin + '%';

    if (currentPosition > 0) {
        buttons[0].classList.remove('inactive');
    }
    if (currentPosition < slidesCount) {
        buttons[1].classList.remove('inactive');
    }
    if (currentPosition >= slidesCount) {
        buttons[1].classList.add('inactive');
    }

    return {
        currentPosition: currentPosition,
        currentMargin: currentMargin,
        slidesPerPage: slidesPerPage,
        slidesCount: slidesCount,
        buttons: buttons
    };
}

function slideRight(sliderId, containerId, btnClass) {
    var params = setParams(sliderId, containerId, btnClass);
    var slider = document.getElementById(sliderId);
    var buttons = params.buttons;

    if (params.currentPosition != 0) {
        slider.style.marginLeft = params.currentMargin + (100 / params.slidesPerPage) + '%';
        params.currentMargin += (100 / params.slidesPerPage);
        params.currentPosition--;
    }
    if (params.currentPosition === 0) {
        buttons[0].classList.add('inactive');
    }
    if (params.currentPosition < params.slidesCount) {
        buttons[1].classList.remove('inactive');
    }
}

function slideLeft(sliderId, containerId, btnClass) {
    var params = setParams(sliderId, containerId, btnClass);
    var slider = document.getElementById(sliderId);
    var buttons = params.buttons;

    if (params.currentPosition != params.slidesCount) {
        slider.style.marginLeft = params.currentMargin - (100 / params.slidesPerPage) + '%';
        params.currentMargin -= (100 / params.slidesPerPage);
        params.currentPosition++;
    }
    if (params.currentPosition == params.slidesCount) {
        buttons[1].classList.add('inactive');
    }
    if (params.currentPosition > 0) {
        buttons[0].classList.remove('inactive');
    }
}

// Sélectionner tous les boutons
const buttons = document.querySelectorAll('.btn');

// Itérer sur les boutons et ajouter des écouteurs d'événements de clic
buttons.forEach((button) => {
  button.addEventListener('click', (event) => {
    const sliderId = event.target.dataset.slider;
    const containerId = event.target.dataset.container;
    const btnClass = event.target.dataset.btn;
    const action = event.target.dataset.action;

    // Appeler la fonction correspondante en fonction de l'action
    if (action === 'slideLeft') {
      slideLeft(sliderId, containerId, btnClass);
    } else if (action === 'slideRight') {
      slideRight(sliderId, containerId, btnClass);
    }
  });
});

window.addEventListener("resize", function() {
    setParams('slider1', 'container1', 'btn1');
    setParams('slider2', 'container2', 'btn2');
    setParams('slider3', 'container3', 'btn3');
    setParams('slider4', 'container4', 'btn4');
});

document.addEventListener("DOMContentLoaded", function() {
    setParams('slider1', 'container1', 'btn1');
    setParams('slider2', 'container2', 'btn2');
    setParams('slider3', 'container3', 'btn3');
    setParams('slider4', 'container4', 'btn4');
});
