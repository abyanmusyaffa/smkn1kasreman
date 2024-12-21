document.addEventListener("DOMContentLoaded", function() {
  // slide hero
  const slidesHero = document.querySelectorAll('[data-slide-hero]');
  let currentSlideHero = 0;
  
  function showNextSlideHero() {
      slidesHero[currentSlideHero].classList.add('opacity-0');
  
      currentSlideHero = (currentSlideHero + 1) % slidesHero.length;
  
      slidesHero[currentSlideHero].classList.remove('opacity-0');
  }
  
  setInterval(showNextSlideHero, 4000);
  // slide hero
});

// slide achieve
const slidesAchieve = document.querySelectorAll('[data-slide-achievement]');
let currentSlideAchieve = 0;

function showNextSlideAchieve() {
    slidesAchieve[currentSlideAchieve].classList.add('hidden');

    currentSlideAchieve = (currentSlideAchieve + 1) % slidesAchieve.length;

    slidesAchieve[currentSlideAchieve].classList.remove('hidden');
}

setInterval(showNextSlideAchieve, 4000);
// slide achieve


// drag to scroll alumni
let mouseDown = false;
let startX, scrollLeft;

const sliders = document.querySelectorAll('.drag-to-scroll');

const startDragging = (e, slider) => {
  mouseDown = true;
  startX = e.pageX - slider.offsetLeft;
  scrollLeft = slider.scrollLeft;
}

const stopDragging = () => {
  mouseDown = false;
}

const move = (e, slider) => {
  e.preventDefault();
  if(!mouseDown) { return; }
  const x = e.pageX - slider.offsetLeft;
  const scroll = x - startX;
  slider.scrollLeft = scrollLeft - scroll;
}

sliders.forEach(slider => {
  if (slider) {
    slider.addEventListener('mousemove', (e) => move(e, slider), false);
    slider.addEventListener('mousedown', (e) => startDragging(e, slider), false);
    slider.addEventListener('mouseup', stopDragging, false);
    slider.addEventListener('mouseleave', stopDragging, false);
  }
});
// drag to scroll alumni


// loading
window.addEventListener('load', function() {
  const overlay = document.getElementById('loading-overlay');
  overlay.classList.add('hidden');
});
// loading