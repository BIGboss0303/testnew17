<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Readex+Pro&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>


    
    {{-- <script src="{{ asset('js/slider.js') }}"></script> --}}
    <title>California</title>
</head>
<body>
    <div class="wrapper">
        <header class="header">
            <div class="container">
                <div class="header__inner">
                    <div class="logo">
                        <a href="http://localhost/dashboard/laravelapp/public/"><img src="{{ asset('images/logo.svg') }}" alt="logo"></a>
                        
                    </div>
                    <nav >
											<ul class="menu">
												<li>
													<a href="{{ route('products.sort') }}" class="menu__item">All products</a>
												</li>
												<li>
													<a href="#" class="menu__item">Support</a>
													
												</li>
												@auth
													<li>
														<a href="{{route('busket.index')}}"class="menu__item">Busket</a>
													</li>
													<li>
														<form action="http://localhost/dashboard/laravelapp/public/logout" method="POST">
															@csrf
															<button type="submit"  class="menu__logout menu__item">
																Logout
															</button>
														</form>
													</li>
												@else
												<li>
														<a href="{{ route('users.registre') }}" class="menu__item">Registration</a>

												</li>
												<li>
														<a href="{{ route('users.login') }}" class="menu__item">Log in</a>

												</li>
													@endauth
											</ul>
                    </nav>
                    <div class="quick-icons">
                        <a href="#" class="header__icon"><img src="{{ asset('images/icon-search.svg') }}" alt=""></a>
                        <a href="#" class="header__icon"><img src="{{ asset('images/icon-busket.svg') }}" alt=""></a>

                    </div>
                </div>
            </div>
        </header>
        <main class="main">
					<x-flash-message/>
					{{-- <div class="flash__message">You logged out</div> --}}
            {{ $slot }}
        </main>
        <footer class="footer">
                <div class="container">
                    <div class="footer__upper">
                        <div class="footer__info">
                            <h3 class="footer__logo"><img src="{{ asset('images/logo.svg') }}" alt=""></h3> 
                            <p class="footer__text">Sign up for texts to be notified about<br>our best offers on the perfect gifts.</p>

                        </div>
                        <table class="footer__table">
                            <tr>
                                <th><a href="#">All products</a></th>
                                <th><a href="#">Company</a></th>
                                <th><a href="#">Support</a></th>
                                <th><a href="#">Follow us</a></th> 
                            </tr>
                            <tr>
                                <td><a href="">смартфоны</a></td>
                                <td><a href="#">О нас</a></td>
                                <td><a href="#">Licensing</a></td>
                                <td><a href="">Instagram</a></td>
                            </tr>
                            <tr>
                                <td><a href="">планшеты</a></td>
                                <td><a href=""></a></td>
                                <td><a href="#">Change Log</a></td>
                                <td><a href="">Facebook</a></td>
                            </tr>
                            <tr>
                                <td><a href="">ноутбуки</a></td>
                                <td><a href=""></a></td>
                                <td><a href="#">Контакты</a></td>
                                <td><a href="">YouTube</a></td>
                            </tr>
                        </table>
                    </div>
                    <div class="footer__lower">
                        <div class="made"><span>Made By: </span>Bullguchev Mansiuuuur</div>
                    </div>
                </div>
        </footer>
    </div>
</body>
</html>
</html>