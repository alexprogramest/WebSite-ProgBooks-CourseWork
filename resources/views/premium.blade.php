@extends('layouts.app')

@section('css-file')
premium
@endsection

@section('main-content')
		@php
			if (session()->has('current_user_name') && 
					session()->has('current_user_password')) {
					$appropriate_page = '';
					$appropriate_method = 'post';
					$user_can_buy = $token_must_be = true;
				}
				else {
					$appropriate_page = 'sign_in_or_sign_up';
					$appropriate_method = 'get';
					$user_can_buy = $token_must_be = false;
				}
		@endphp
		<section class="premium-main-section">
			<div class="title-text">
				Преміум. Обери власний план, за яким триватиме твоя підписка. Відминити її можна у будь-який момент
			</div>
			<div class="main-content">
				<div class="first card">
					<div class="title-card-block">
						Для читачів
					</div>
					<div class="usual-benefits">
						<ul>
							<li>
								<img src="images/premium/premium-icon-check-mark-5291043 1.png">
								<div class="benefit-text">
										Читати унікальні книги
								</div>
							</li>
								<li>
								<img src="images/premium/premium-icon-check-mark-5291043 1.png">
								<div class="benefit-text">
									Завантажувати будь-які книги
								</div>
							</li>
							<li>
								<img src="images/premium/premium-icon-check-mark-5291043 1.png">
								<div class="benefit-text">
									Запропоновані книги швидше будуть проходити перевірку
								</div>
							</li>
							<li>
								<img src="images/premium/premium-icon-check-mark-5291043 1.png">
								<div class="benefit-text">
									Слухати аудіокнигу
								</div>
							</li>
						</ul>
					</div>
					<div class="price-per-month">
						Усього 10 грн/місяць
					</div>
					@php
						$btn_premium_label = 'Оплатити';
						$additional_page_params = "";
						if ($user_can_buy) {
							if (session('premium_user_type') == 1) {
								$additional_page_params = '?option_cancel=true';
								$btn_premium_label = 'Скасувати';
							} else {
								$additional_page_params = '?typeprem=1';
							}
						}
					@endphp
					<form action="{{$appropriate_page . $additional_page_params}}" method="{{$appropriate_method}}">
						@if ($token_must_be)
							@csrf
						@endif
						<button type="submit" class="btn-for-buy">{{$btn_premium_label}}</button>
					</form>
				</div>
				<div class="second card">
					<div class="title-card-block">
						Для “фанатів”
					</div>
					<div class="usual-benefits">
						<ul>
							<li>
								<img src="images/premium/premium-icon-check-mark-5291043 1.png">
								<div class="benefit-text">
										Читати унікальні книги
								</div>
							</li>
								<li>
								<img src="images/premium/premium-icon-check-mark-5291043 1.png">
								<div class="benefit-text">
									Завантажувати будь-які книги
								</div>
							</li>
							<li>
								<img src="images/premium/premium-icon-check-mark-5291043 1.png">
								<div class="benefit-text">
									Запропоновані книги швидше будуть проходити перевірку
								</div>
							</li>
							<li>
								<img src="images/premium/premium-icon-check-mark-5291043 1.png">
								<div class="benefit-text">
									Слухати адіокнигу
								</div>
							</li>
						</ul>
					</div>
					<div class="special-benefits">
						<ul>
							<li>
								<img src="images/premium/premium-icon-checkmark-3960210 1.png">
								<div class="benefit-text">
										Читати у будь-якому перекладі
								</div>
							</li>
								<li>
								<img src="images/premium/premium-icon-checkmark-3960210 1.png">
								<div class="benefit-text">
									Ділитися книгами*
								</div>
							</li>
						</ul>
					</div>
					<div class="price-per-month">
						Усього 30 грн/місяць
					</div>
					@php
						$btn_premium_label = 'Оплатити';
						$additional_page_params = "";
						if ($user_can_buy) {
							if (session('premium_user_type') == 2) {
								$additional_page_params = '?option_cancel=true';
								$btn_premium_label = 'Скасувати';
							} else {
								$additional_page_params = '?typeprem=2';
							}
						}
					@endphp
					<form action="{{$appropriate_page . $additional_page_params}}" method="{{$appropriate_method}}">
						@if ($token_must_be)
							@csrf
						@endif
						<button type="submit" class="btn-for-buy">{{$btn_premium_label}}</button>
					</form>
				</div>
			</div>
			<div class="additional-info">
				<div class="text-addition">
					<div class="the-text">
						* Ділитися можна з будь-якими користувачами (які зареєстровані), але не більше 2 книг на місяць.
					</div>
				</div>
			</div>
		</section>
@endsection