@section('header')
	<header class="header">
		<nav>
			<a href="home"><img src="images/lending/Logo.png" class="logo"></a>
			<div class="nameCompany">
				<a href="home">ProgBooks</a>
			</div>
			<ul class="other-pages">
				<li><a href="home">Головна</a></li>
				<li><a href="statistics">Статистичні дані</a></li>
				<li><a href="about">Про нас</a></li>
				<li><a href="premium">Преміум</a></li>
			</ul>
			@php
				if (session()->has('current_user_name') && 
					session()->has('current_user_password')) {
					$img_user = 'Somereader.png';
					$btn_option = 'Вийти';
				}
				else {
					$img_user = 'AvatarIcon.png';
					$btn_option = 'Увійти';
				}	
			@endphp
			<img src="images/lending/{{$img_user}}" class="accountImage">
			<form action="sign_in_or_sign_up">
				<input type="submit" value="{{$btn_option}}" class="accountBtn" />
			</form>
			<div class="lang-menu">
				<div class="selected-lang">
					<img src="images/lending/premium-icon-ukraine-53157031.png" class="current-lang">
				</div>
				<div class="list-icon-and-whole-list">
					<div class="list-lang-icon-div">
						<img src="images/lending/select-lang.png" class="list-lang-icon">
					</div>
					<div class="list-lang-div">
						<ul class="other-langs">
							<li>
								<div class="main-content-lang-list">
									<div class="icon-lang-select">
										<a href="searchbook.html">
											<img src="images/lending/premium-icon-ukraine-53157031.png" class="first-lang">
										</a>
									</div>
									<div class="name-lang-select">
										<a href="">
											Українська
										</a>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="additional-menu">
				<img src="images/search_book_page/free-icon-menu-483345 2.png" alt="">
				<div class="list-options-menu">
					<ul class="list-options">
						<li><a href="home">Головна</a></li>
						<li><a href="statistics">Статистичні дані</a></li>
						<li><a href="about">Про нас</a></li>
						<li><a href="premium">Преміум</a></li>
					</ul>
				</div>
			</div>
		</nav>
		@show
	</header>