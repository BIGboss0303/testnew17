<x-layout>
    <x-swiper/>
    <section class="sort">
        <div class="container">
            <h2 class="title sort__title">Which category do you want to choose?</h2>
            <div class="sort__body">
                @foreach ($categories as $category)
                    <a href="{{ route('products.index',$category->id)}}" class="sort__block table">
                        <h4 class="sort__block-title">{{ $category->category_name }}</h4>
                        <img src="{{ asset($category->category_image_path) }}" alt="" class="sort__block-image">
                    </a>
                @endforeach
                {{-- <a href="{{ route('products.index') }}" class="sort__block table">
                    <h4 class="sort__block-title">Phone</h4>
                    <img src="{{ asset("images/sort-phone.png") }}" alt="" class="sort__block-image sort__block-image-phone">
                </a>
                <a href="{{ route('products.index') }}" class="sort__block table">
                    <h4 class="sort__block-title">Watch</h4>
                    <img src="{{ asset("images/sort-watch.png") }}" alt="" class="sort__block-image sort__block-image-watch">
                </a>
                <a href="{{ route('products.index') }}" class="sort__block table">
                    <h4 class="sort__block-title">Laptop</h4>
                    <img src="{{ asset("images/sort-laptop.png") }}" alt="" class="sort__block-image">
                </a>
                <a href="{{ route('products.index') }}" class="sort__block table">
                    <h4 class="sort__block-title">Personal computer</h4>
                    <img src="{{ asset("images/sort-pc.png") }}" alt="" class="sort__block-image">
                </a>
                <a href="{{ route('products.index') }}" class="sort__block table">
                    <h4 class="sort__block-title">Tablet</h4>
                    <img src="{{ asset("images/sort-tablet.png") }}" alt="" class="sort__block-image">
                </a>
                <a href="{{ route('products.index') }}" class="sort__block table">
                    <h4 class="sort__block-title">Monitor</h4>
                    <img src="{{ asset("images/sort-monitor2.png") }}" alt="" class="sort__block-image">
                </a> --}}
            </div>
        </div>
    </section>
</x-layout>
