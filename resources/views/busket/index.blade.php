<x-layout>
	<section class="busket">
		<div class="container">
            <div class="busket__flex">
                <div class="busket__main">
                    @foreach ($buskets as $busket)
                        <div class="busket__body">
                                <div class="busket__img">
                                    <img src="https://c.dns-shop.ru/thumb/st4/fit/200/200/35d35f63eb073f09a4de67f1b1de7971/589b75ea7c70cea68ee89bef1708fecc8e15acf638d14a6d6a1e0659ffaa2bcb.jpg.webp" alt="">
                                </div>
                                <div class="busket__info">
                                    <h3 class="busket__product_name">
                                        {{ $busket->product_name }}
                                    </h3>
                                    <p class="busket__product_description">
                                        {{ $busket->product_description }}
                                    </p>
                                    <div class="product__promotions">
                                        @if ($busket->product_bonus)
                                            <div class="product__bonus">bonus</div>
                                        @endif
                                        @if ($busket->product_discount > 0)
                                        <div class="product__discount">-{{ $busket->product_discount }}%</div>
                                        @endif

                                    </div>
                                    <div class="products__rates">{{ $busket->product_rates }}</div>
                                </div>
                                <div class="busket__product_quantity">
                                    {{ $busket->busket_quantity }}
                                </div>
                                <div class="busket__product_price">
                                    {{ $busket->product_price }}$
                                </div>

                        </div>
                    @endforeach
                .</div>
                <form action="" class="busket__form">
                    <h3 class="busket__total">Total price:</h3>
                    <div class="busket__total_price">10000$</div>
                    <button type="submit" class="busket__total_submit">Buy</button>
                </form>
            </div>
		</div>
	</section>
</x-layout>
