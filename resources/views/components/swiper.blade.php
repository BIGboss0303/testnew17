<script type="module">
    import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.esm.browser.min.js'
  
    const swiper = new Swiper('.swiper',{
        navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
        },
        pagination: {
        el: '.swiper-pagination',
        clickable:true,
        type:'bullets',
        },
        simulateTouch:false,
        keyboard:{
            enabled:true,
            onlyInViewPort:true
        },
        autoplay:{
            delay:8000,
            disableOnInteraction:false,
            pauseOnMouseEnter:true,
        },
        speed:1000
        })
</script>
<div class="swiper">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
      <!-- Slides -->
       <div class="swiper-slide slide1">
        <div class="swiper__body">
            <h1 class="swiper__title">The new phones are here take a look.</h1>
            <p class="swiper__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Scelerisque in est dui, aliquam, tempor. Faucibus morbi turpis.</p>
            <div ><a href="#" class="swiper__button">Explore</a></div>
        </div>
        
      </div>
    <div class="swiper-slide slide2">
        <div class="swiper__body">
            <h1 class="swiper__title">Looking for new powerful tablets?</h1>
            <p class="swiper__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Scelerisque in est dui, aliquam, tempor. Faucibus morbi turpis.</p>
            <div ><a href="#" class="swiper__button">Explore</a></div>
        </div>
        
    </div>
      <div class="swiper-slide slide3">
        <div class="swiper__body">
            <h1 class="swiper__title">Do you want to feel a real power?</h1>
            <p class="swiper__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Scelerisque in est dui, aliquam, tempor. Faucibus morbi turpis.</p>
            <div ><a href="#" class="swiper__button">Explore</a></div>
        </div>
      </div>
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>
  
    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
  
    <!-- If we need scrollbar -->
    {{-- <div class="swiper-scrollbar"></div> --}}
</div>