<x-layout>
    <section class="catalog">
        <div class="container">
            <div class="catalog__flex">
                <section class="catalog__filter">
                    <form action="{{ route('products.filter') }}" method="POST">
                        @CSRF
                        <h5 class="filter__title">Filter</h2>
                        <h6 class="filter__title">The order</h6>
                        <div class="filter__order filter__block">
                            <select name="order" id="" class="select-css">
                                <option value="updated_at">Last Updated</option>
                                <option value="popular">Most Popular</option>
                                <option value="price_lesser">Price <</option>
                                <option value="price_bigger">Price ></option>

                            </select>
                        </div>
                        <h6 class="filter__subtitle">Availability</h6>
                        <div class="filter__availability filter__block">
                            <input class="custom-radio" type="radio" id="all_availability" name="Availability" value="all">
                            <label for="all_availability">All</label>
                            <br>
                            <input class="custom-radio" type="radio" id="available" name="availability" value="available">
                            <label for="available">Available</label>
                            <br>
                            <input class="custom-radio" type="radio" id="order" name="availability" value="order">
                            <label for="order">Order</label>
                            <br>
                            <input class="custom-radio" type="radio" id="not_available" name="availability" value="not available">
                            <label for="not_available">Not available</label>
                        </div>
                        <h6 class="filter__subtitle">Rating</h6>
                        <div class="filter__rating filter__block">
                            <input class="custom-radio" type="radio" id="all_rating" name="rating" value="0">
                            <label for="all_rating">All</label>
                            <br>
                            <input class="custom-radio" type="radio" id="5" name="rating" value="5">
                            <label for="5">Only with rating 5</label>
                            <br>
                            <input class="custom-radio" type="radio" id="4" name="rating" value="4">
                            <label for="4">rating higher than 4</label>
                            <br>
                            <input class="custom-radio" type="radio" id="3" name="rating" value="3">
                            <label for="3">rating higher than 3</label>
                        </div>
                        <h6 class="filter__subtitle">Promotions</h6>
                        <div class="filter__promotions filter__block">
                            <input class="custom-radio" type="checkbox" id="discount" name="discount" value="true">
                            <label for="discount">Discount</label>
                            <br>
                            <input class="custom-radio" type="checkbox" id="bonus" name="bonus" value="true">
                            <label for="bonus">Other Bonuses</label>
                        </div>
                        <h6 class="filter__subtitle">Price</h6>
                        <div class="filter__wrapper-range filter__block">
                            <div class="filter__values-range">
                                <span id="range1">
                                    0
                                </span>
                                <span> &dash; </span>
                                <span id="range2">
                                    100
                                </span>
                            </div>
                            <div class="filter__container-range">
                                <div class="slider-track"></div>
                                <input name="min" type="range" min="0" max="10000" value="0" step="100" id="slider-1" oninput="slideOne()">
                                <input name="max" type="range" min="0" max="10000" value="10000" step="100" id="slider-2" oninput="slideTwo()">
                            </div>
                        </div>
                        
                        <button type="submit" class="filter__button"
                        name="filter" value="go">Apply</button>
                    </form>
                </section>
                <section class="catalog__body">
                    @foreach ($products as $product)
                        <div class="product__body">
                            <div class="product__img">
                                <img src="https://c.dns-shop.ru/thumb/st4/fit/200/200/35d35f63eb073f09a4de67f1b1de7971/589b75ea7c70cea68ee89bef1708fecc8e15acf638d14a6d6a1e0659ffaa2bcb.jpg.webp" alt="">
                            </div>
                            <div class="product__info">
                                <h6 class="product__name">{{ $product->name }}</h6>
                                <p class="product__description">{{ $product->description }}</p>
                                <p class="product__company">{{ $product->company }}</p>

                                <div class="product__promotions">
                                    @if ($product->bonus)
                                        <div class="product__bonus">bonus</div>
                                    @endif
                                    @if ($product->discount > 0)
                                    <div class="product__discount">-{{ $product->discount }}%</div>
                                    @endif
                                    
                                </div>
                                <div class="products__rates">{{ $product->rates }}</div>
                                <div class="products__availability">We have:{{ $product->quantity }}</div>
                            </div>
                            <div class="product__buy">
                                <p class="product__price"> {{ $product->price }} $</p>
                                <div class="product__buttons">
                                    <a href="#">fsakfh</a>
                                    <a href="3">asfasf</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    
                </section>
        </div>
        </div>

        <script src="{{ asset('js/script.js') }}"></script>
    </section>
</x-layout>