document.addEventListener("livewire:navigated", function() {
    let activated = false;
    const container = document.querySelector(".counter-container");
    const counters = document.querySelectorAll(".counters");

    if (!container || counters.length === 0) {
      console.warn('Counter elements tidak ditemukan');
      return;
    }

    function animateCounter(counter, target) {
      let current = 0;
      const duration = 2000;
      const stepTime = 20; 
      const steps = duration / stepTime;
      const increment = target / steps;

      const timer = setInterval(() => {
        current += increment;
        
        if (current >= target) {
          clearInterval(timer);
          counter.textContent = Math.round(target);
        } else {
          counter.textContent = Math.round(current);
        }
      }, stepTime);
    }

    // function resetCounters() {
    //   counters.forEach(counter => {
    //     counter.textContent = '0';
    //   });
    //   activated = false;
    // }

    let ticking = false;

    window.addEventListener("scroll", () => {
      if (!ticking) {
        window.requestAnimationFrame(() => {
          const triggerPoint = container.offsetTop - (window.innerHeight * 1);

          if (window.scrollY > triggerPoint && !activated) {
            counters.forEach(counter => {
              const target = parseInt(counter.dataset.count) || 0;
              animateCounter(counter, target);
            });
            activated = true;
          } 
          // Reset jika scroll ke atas jauh
          // else if (window.scrollY < triggerPoint - 300) {
          //   resetCounters();
          // }
          
          ticking = false;
        });
        
        ticking = true;
      }
    });

    window.dispatchEvent(new Event('scroll'));
});

document.addEventListener("livewire:navigated", function () {
    // slide hero
    const slidesHero = document.querySelectorAll("[data-slide-hero]");
    let currentSlideHero = 0;

    function showNextSlideHero() {
        slidesHero[currentSlideHero].classList.add("opacity-0");

        currentSlideHero = (currentSlideHero + 1) % slidesHero.length;

        slidesHero[currentSlideHero].classList.remove("opacity-0");
    }

    setInterval(showNextSlideHero, 4000);
    // slide hero

    // slide achieve
    const slidesAchieve = document.querySelectorAll("[data-slide-achievement]");
    let currentSlideAchieve = 0;

    function showNextSlideAchieve() {
        slidesAchieve[currentSlideAchieve].classList.add("hidden");

        currentSlideAchieve = (currentSlideAchieve + 1) % slidesAchieve.length;

        slidesAchieve[currentSlideAchieve].classList.remove("hidden");
    }

    setInterval(showNextSlideAchieve, 4000);
    // slide achieve

    // drag to scroll alumni
    let mouseDown = false;
    let startX, scrollLeft;

    const sliders = document.querySelectorAll(".drag-to-scroll");

    const startDragging = (e, slider) => {
        mouseDown = true;
        startX = e.pageX - slider.offsetLeft;
        scrollLeft = slider.scrollLeft;
    };

    const stopDragging = () => {
        mouseDown = false;
    };

    const move = (e, slider) => {
        e.preventDefault();
        if (!mouseDown) {
            return;
        }
        const x = e.pageX - slider.offsetLeft;
        const scroll = x - startX;
        slider.scrollLeft = scrollLeft - scroll;
    };

    sliders.forEach((slider) => {
        if (slider) {
            slider.addEventListener("mousemove", (e) => move(e, slider), false);
            slider.addEventListener(
                "mousedown",
                (e) => startDragging(e, slider),
                false
            );
            slider.addEventListener("mouseup", stopDragging, false);
            slider.addEventListener("mouseleave", stopDragging, false);
        }
    });
    // drag to scroll alumni

    // logo animation
    const logoContainer = document.querySelector('.logo-container');
    const originalLogo = document.querySelector('.logo-animation');

    for (let i = 0; i < 2; i++) {
        const clonedLogo = originalLogo.cloneNode(true);
        logoContainer.appendChild(clonedLogo);
    }
    // logo animation






    
});