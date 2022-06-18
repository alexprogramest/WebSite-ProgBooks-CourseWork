<footer>
	<div class="footer-main-content">
		<div class="social-network-info">
			<div class="call-to-action">
				Слідкуй за нами у соц. мережах
			</div>
			<div class="social-networks">
				<a href="https://www.youtube.com"><img src="/images/lending/Ютуб.png"></a>
				<a href="https://www.facebook.com"><img src="/images/lending/Фейсбук.png"></a>
				<a href="https://www.twitter.com/"><img src="/images/lending/Твіттер.png"></a>
				<a href="https://www.instagram.com/"><img src="/images/lending/Інстаграм.png"></a>
			</div>
			@php
				$email_link = 'mailto:someexample@gmail.com';
			@endphp
			<a href="{{$email_link}}"><img src="/images/lending/Пошта.png"></a>
		</div>
		<div class="additional-options">
			<div class="account-options">
				<div class="header-options">
					Акаунт
				</div>
				<div class="option"><a href="sign_in_or_sign_up">Зареєструватися</a></div>
				<div class="option"><a href="statistics#statistics-page-third-section">Усього користувачів</a></div>
				<div class="option"><a href="home#third-part-index-page">Переваги</a></div>
				<div class="option"><a href="premium">Преміум</a></div>
			</div>
			<div class="book-options">
				<div class="header-options">
					Книги
				</div>
				<div class="option"><a href="searchbook#seacrhbook-page-popular-books-content">Популярні книги</a></div>
				<div class="option"><a href="statistics#statistics-page-first-section">Статистика тем книг</a></div>
				<div class="option"><a href="searchbook">Знайти книгу</a></div>
				<div class="option"><a href="statistics#statistics-page-second-section">Прочитані книги</a></div>
			</div>
		</div>
	</div>
</footer>
