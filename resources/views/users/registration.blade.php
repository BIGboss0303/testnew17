<x-layout>
    <section class="form">
        <div class="container">
            <div class="form__body">
                <h1 class="form__title">Registration</h1>
                <form action="{{ route('users.store') }}" method="POST">
									@csrf
									<div class="form__block">

										<label for="name" class="form__label" >Name</label>
                    <input type="text" id="name" class="form__input" name="user_name" value="{{old('user_name')}}" >
										@error('user_name')
											<p class="form__error">{{$message}}</p>
										@enderror
									</div>
									<div class="form__block">
										<label for="email" class="form__label">Email</label>
                    <input type="email" id="email" class="form__input" name="user_email" value="{{old('user_email')}}">
										@error('user_email')
											<p class="form__error">{{$message}}</p>
										@enderror
									</div>
									<div class="form__block">
										<label for="password" class="form__label">Password</label>
                    <input type="password" id="password" class="form__input" name="password">
										@error('password')
											<p class="form__error">{{$message}}</p>
										@enderror
									</div>
									<div class="form__block">
										<label for="password_confirm" class="form__label">Confirm password</label>
                    <input type="password" id="password_confirm" class="form__input" name="password_confirmation">
									</div>





										<button type="submit" class="form__button">registrate</button>
                </form>
            </div>
        </div>
    </section>
</x-layout>
