<x-layout>
	<section class="form">
		<div class="container">
				<div class="form__body">
						<h1 class="form__title">Log in</h1>
						<form action="{{ route('users.login') }}" method="POST">
							@csrf
							<div class="form__block">

								<label for="name" class="form__label" >Name</label>
								<input type="text" id="name" class="form__input" name="user_name" value="{{old('user_name')}}" >
								@error('user_name')
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
								<button type="submit" class="form__button form__button_login">login</button>
						</form>
				</div>
		</div>
	</section>
</x-layout>
