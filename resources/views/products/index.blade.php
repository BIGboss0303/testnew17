<x-layout>
    <section class="catalog">
        <div class="container">
            <div class="catalog__flex">
                <section class="catalog__filter">
                    <form action="">
                        @CSRF
                        <h5 class="filter__title">Filter</h2>

                        <h6 class="filter__subtitle">Search</h6>
                        <div class="filter__block search__block">
                            <input class="filter__search" type="text" id="search" name="search" placeholder="Search">
                            <button type="submit" class="filter__search-button" name="filter" value="go"><img src="{{ asset('images/icon-search.svg') }}" alt=""></button>
                        </div>




                        <h6 class="filter__subtitle">The order</h6>
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
                            <input class="custom-radio" type="radio" id="all_availability" name="availability" value="all" >
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
                                <input name="min" type="range" min="0" max="5000" value="0" step="100" id="slider-1" oninput="slideOne()">
                                <input name="max" type="range" min="0" max="5000" value="5000" step="100" id="slider-2" oninput="slideTwo()">
                            </div>
                        </div>

                        <button type="submit" class="filter__button"
                        name="filter" value="go">Apply</button>
                        <button type="submit" class="filter__button"
                        name="cancel" value="true">Cancel</button>
                    </form>
                </section>
                <section class="catalog__body">
                    @foreach ($products as $product)
                        <div class="product__body" >
                            <div class="product__img">
                                <img src="https://c.dns-shop.ru/thumb/st4/fit/200/200/35d35f63eb073f09a4de67f1b1de7971/589b75ea7c70cea68ee89bef1708fecc8e15acf638d14a6d6a1e0659ffaa2bcb.jpg.webp" alt="">
                            </div>
                            <div class="product__info">
                                <h6 class="product__name">{{ $product->product_name }}</h6>
                                <p class="product__description">{{ $product->product_description }}</p>
                                <p class="product__company">{{ $product->product_company }}</p>

                                <div class="product__promotions">
                                    @if ($product->product_bonus)
                                        <div class="product__bonus">bonus</div>
                                    @endif
                                    @if ($product->product_discount > 0)
                                    <div class="product__discount">-{{ $product->product_discount }}%</div>
                                    @endif

                                </div>
                                <div class="products__rates">{{ $product->product_rates }}</div>
                                <div class="products__availability">We have:{{ $product->product_quantity }}</div>
                            </div>
                            <div class="product__buy">
                                <p class="product__price"> {{ $product->product_price }} $</p>
                                <div class="product__buttons">
                                    <a class="product__button" href="#">Buy</a>
                                    <a class="product__button" id="more" href="{{ route('products.show',$product->id) }}">More</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    @if ($products->hasPages())
                        <ul class="pagination">
                            @if ($products->onFirstPage())
                                <li class="page-item disabled" aria-disabled="true">
                                    <span class="page-link">Previous</span>
                                </li>
                            @else
                                <li class="page-item">
                                    <a class="page-link" href="{{ $products->previousPageUrl('taf=fsaf') }}" rel="prev">Previous</a>
                                </li>
                            @endif

                            @foreach ($elements as $element)
                                {{-- "Three Dots" Separator --}}
                                @if (is_string($element))
                                    <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
                                @endif

                                {{-- Array Of Links --}}
                                @if (is_array($element))
                                    @foreach ($element as $page => $url)
                                        @if ($page<=$products->currentPage()+2 && $page>=$products->currentPage()-2)


                                            @if ($page == $products->currentPage())
                                                <li class="page-item active" aria-current="page"><span class="page-link">{{ $page }}</span></li>
                                            @else
                                                <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                                            @endif
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach

                            @if ($products->hasMorePages())
                                <li class="page-item">
                                    <a class="page-link" href="{{ $products->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">Next</a>
                                </li>
                            @else
                                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                                    <span class="page-link" aria-hidden="true">Next</span>
                                </li>
                            @endif
                        </ul>
                    @endif


                </section>
        </div>






        </div>








        <script src="{{ asset('js/script.js') }}"></script>
    </section>
</x-layout>
