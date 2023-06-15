// Recommendations
let recommendations = document.querySelectorAll('.council');

recommendations.forEach((block) => {
    let title = block.querySelector('.title');

    title.addEventListener('click', () => {
        block.classList.toggle('active');
    });
})


// calculator

const num_1 = document.querySelector('.input_num_1')
const num_2 = document.querySelector('.input_num_2')
const sim = document.querySelector('.select_sim')
const calcResult = document.querySelector('.calc_res')

const calc = (num1, num2, sim)=>{
    num1 = num1 ? num1 : 0
    num2 = num2 ? num2 : 0
    sim = sim ? sim : '+'
    const result = eval(num1 + sim + num2)
    return Number.isInteger(result) ? result : result.toFixed(2)
}

num_1.addEventListener('input',() => {
    calcResult.innerText = calc(num_1.value, num_2.value, sim.value);
})
num_2.addEventListener('input',() => {
    calcResult.innerText = calc(num_1.value, num_2.value, sim.value);
})
sim.addEventListener('change',() => {
    calcResult.innerText = calc(num_1.value, num_2.value, sim.value);
})

// Swiper
const swiper = new Swiper('.slider_banner', {
    // Optional parameters
    loop: true,
    slidesPerView: 1,

    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
      type: "fraction",
      renderFraction: function (currentClass, totalClass) {
        return( '<div class="pgn_num">0<span class="' + currentClass + '"></span></div>' +
                '<div class="pagination_line"><div class="pagination_line_while"></div></div> ' +
                '<div class="pgn_num">0<span class="' + totalClass + '"></span></div>');
              },
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

  });
  

    const swiperArrowNext = document.querySelector('.swiper-button-next')
    if(swiperArrowNext) {
        const swiperArrowPrev = document.querySelector('.swiper-button-prev')
        const swiperSlides = document.querySelectorAll('.swiper-slide')
        const procentSwiperSlides = (100 / swiperSlides.length).toFixed(4)
     
        swiperArrowPrev.addEventListener('click', () => {
             const paginationLine = document.querySelector('.pagination_line_while')
             
            swiperSlides.forEach((slide, index) => {
                if(slide.classList.contains('swiper-slide-active')) {
                    const slideIndex = index + 1;
                    
                    const resultProcent = procentSwiperSlides * slideIndex;
                    paginationLine.style.height = resultProcent + '%'
                }
            })
        })
        swiperArrowNext.addEventListener('click', () => {
             const paginationLine = document.querySelector('.pagination_line_while')
             
            swiperSlides.forEach((slide, index) => {
                if(slide.classList.contains('swiper-slide-active')) {
                    const slideIndex = index + 1;
                    
                    const resultProcent = procentSwiperSlides * slideIndex;
                    paginationLine.style.height = resultProcent + '%'
                }
            })
        })
    }


  // menu
    const menuToggle = document.querySelector('.menu_toggle');
    const menuNav = document.querySelector('.menu');
    const menuItems = document.querySelectorAll('.menu-item a')
        menuToggle.addEventListener('click', () => {
        menuNav.classList.toggle('active');
        menuToggle.classList.toggle('active');
        })

    menuItems.forEach((item)=>{
        item.addEventListener('click', (e) => {
            menuNav.classList.remove('active');
            menuToggle.classList.remove('active');
        })
    })



