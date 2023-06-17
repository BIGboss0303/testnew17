<x-layout>
    <section class='show'>
        <div class="container">
            <div class="show__body">
                <div class="show__img"><img src="https://c.dns-shop.ru/thumb/st4/fit/200/200/35d35f63eb073f09a4de67f1b1de7971/589b75ea7c70cea68ee89bef1708fecc8e15acf638d14a6d6a1e0659ffaa2bcb.jpg.webp" alt=""></div>
                <div class="show__info">
                    <h3 class="show__title">{{ $product->name }}</h3>
                    <a href="#" class="show__company">{{ $product->company }}</a>
                    <p class="show__description">{{ $product->description }}</p>
                    <div class="show__tables">
                    </div>
                    <div class="show__buy">
                        <p class="show__price">{{ $product->price }} $</p>
                        <a href="#" class="show__button">Buy</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>