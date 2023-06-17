<x-layout>
    <x-swiper/>
    
    <section class="categories">
        <div class="container">
            <h2 class="title categories__title">Shop our latest offers and categories</h2>
            <p class="text categories__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Scelerisque in est dui, aliquam, tempor. Faucibus morbi turpis. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

            <div class="tables">
                <a class="table table-laptop" href="{{ route('products.index',3) }}">
                    <img class="table-laptop__image" src="{{ asset('images/table-laptop.png') }}" alt="">
                    <div class="table-laptop__body">
                        <h4 class="table__subtitle table-laptop__subtitle">Laptops</h4>
                        <h3 class="table__title table-laptop__title">True Laptop Solution</h3>
                    </div>
                </a>
                <a class="table table-phone" href="{{ route('products.index',6) }}">
                    <img class="table-phone__image" src="{{ asset('images/table-phone.png') }}" alt="">
                    <div class="table-phone__body">
                        <h4 class="table__subtitle table-phone__subtitle">Phones</h4>
                        <h3 class="table__title table-phone__title">Your day to day life</h3>
                    </div>
                </a>
                <a class="table table-tablet" href="{{ route('products.index',1) }}">
                    <img class="table-tablet__image" src="{{ asset('images/table-tablet.png') }}" alt="">
                    <div class="table-tablet__body">
                        <h4 class="table__subtitle table-tablet__subtitle">Tablet</h4>
                        <h3 class="table__title table-tablet__title">Empower your work</h3>
                    </div>
                </a>
                <a class="table table-watch" href="{{ route('products.index',4) }}">
                    <img class="table-watch__image" src="{{ asset('images/table-watch.png') }}" alt="">
                    <div class="table-watch__body">
                        <h4 class="table__subtitle table-watch__subtitle">Watch</h4>
                        <h3 class="table__title table-watch__title">Not just stylisht</h3>
                    </div>
                </a>
            </div>

        </div>
    </section>
    <section class="mostSelled">
        <div class="container">
            <h2 class="title mostSelled__title">Save on our most selled items</h2>
            <p class="text mostSelled__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Scelerisque in est dui, aliquam, tempor. Faucibus morbi turpis. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

            <div class="mostSelled__blocks">
                <a href="" class="block mostSelled__block">
                    <img src="{{ asset('images/mostSelled-macbook.png') }}" alt="" class="mostSelled__img">
                    <h3 class="mostSelled__name">MacBook Pro 13</h3>
                    <p class="mostSelled__description">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet</p>
                    <h4 class="mostSelled__price">$ 1,200.00 USD</h4>
                </a>
                <a href="" class="block mostSelled__block">
                    <img src="{{ asset('images/mostSelled-galaxy_watch.png') }}" alt="" class="mostSelled__img">
                    <h3 class="mostSelled__name">Smart Galaxy Watch 3</h3>
                    <p class="mostSelled__description">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet</p>
                    <h4 class="mostSelled__price">$ 199.00 USD</h4>
                </a>
                <a href="" class="block mostSelled__block">
                    <img src="{{ asset('images/mostSelled-macbook_air.png') }}" alt="" class="mostSelled__img">
                    <h3 class="mostSelled__name">MacBook Air M1</h3>
                    <p class="mostSelled__description">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet</p>
                    <h4 class="mostSelled__price">$ 1,009.00 USD</h4>
                </a>
                <a href="" class="block mostSelled__block">
                    <img src="{{ asset('images/mostSelled-ipad.png') }}" alt="" class="mostSelled__img">
                    <h3 class="mostSelled__name">iPad</h3>
                    <p class="mostSelled__description">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet</p>
                    <h4 class="mostSelled__price">$ 610.00 USD</h4>
                </a>
            </div>
        </div>
    </section>
    <section class="theBest">
        <div class="container">
            <h2 class="title theBest__title">See the best around here</h2>
            <p class="text theBest__text">Our new Limited Edition Winter Design BESPOKE 4-Door Flex™</p>

            <div class="theBest__blocks">
                <div class="theBest__block">
                    <h4 class="theBest__subtitle">Smart light bulb pack</h4>
                    <h3 class="theBest__title">Latest and gratest</h3>
                    <div><a href="#" class="theBest__button">Explore</a></div>                    
                    <img src="{{ asset('images/theBest-1.png') }}" alt="" class="theBest__img">
                </div>
                <div class="theBest__block">
                    <h4 class="theBest__subtitle">Smart light bulb pack</h4>
                    <h3 class="theBest__title">Best selling</h3>
                    <div><a href="#" class="theBest__button">Explore</a></div>                    
                    <img src="{{ asset('images/theBest-2.png') }}" alt="" class="theBest__img">
                </div>
                <div class="theBest__block">
                    <h4 class="theBest__subtitle">Smart light bulb pack</h4>
                    <h3 class="theBest__title">Every product</h3>
                    <div><a href="#" class="theBest__button">Explore</a></div>                    
                    <img src="{{ asset('images/theBest-3.png') }}" alt="" class="theBest__img">
                </div>
            </div>
        </div>
    </section>
    <section class="look">
        <div class="container">
            <h2 class="title look__title">Looking for anything else?</h2>


            <div class="look__miss">
                <div class="mini_container">
                    <h2 class="title miss__title">Never miss a thing</h2>
                    <p class="text miss__text">Sign up for texts to be notified about our best offers on the perfect gifts.</p>
                    <img src="images/miss.png" alt="" class="miss__img">
                    <div class="miss__signUp">
                        <input type="email" name="email" placeholder="Your email" class="miss__email">
                        <button type="submit" class="miss__button">Sign up</button>
                    </div>
                </div>
            </div>
        </div>
    </section>



</x-layout>