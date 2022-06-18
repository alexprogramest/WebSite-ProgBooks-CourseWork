@extends('layouts.app')

@section('css-file')
home
@endsection

@if ($whole_message_info !== "")
	@include('additions.message_for_home_page')
@endif
@section('header')
	@parent
	<section class="lending-main-content">
				<div class="left-side">
					<div class="title-website">
						Найбільша бібліотека для програміста
					</div>
					<div class="description-website">
						Шукаєш доволі рідкісну книгу? Наша бібліотека налічує приблизно 5 тисяч книг, а також збирає дані про все, що в ній знаходиться!
					</div>
					<form action="searchbook">
    					<button type="submit" class="seacrhBtn">Пошук книги</button>
					</form>
				</div>
				<div class="right-image">
					<img src="/images/lending/BookIconLanding.png" alt="">
				</div>
			</section>
			<div class="icons-images">
				<img src="/images/lending/4177619_bulb_idea_light_thought_icon 1.png" class="first-icon">
				<img src="/images/lending/753918_library_book_books_education_study_icon 1.png" class="second-icon">
				<img src="/images/lending/753918_library_book_books_education_study_icon 2.png" class="third-icon">
				<img src="/images/lending/5355692_code_coding_development_programming_web_icon 1.png" class="fourth-icon">
				<img src="/images/lending/4177619_bulb_idea_light_thought_icon 2.png" class="fifth-icon">
				<img src="/images/lending/103415_text_book_settings_icon 1.png" class="sixth-icon">
				<img src="/images/lending/7857148_github_programming_code_hub_git_icon.png" class="seventh-icon">
				<img src="/images/lending/8333841_custom_coding_programming_development_icon.png" class="eighth-icon">
			</div>
@endsection

@section('main-content')
		<section class="second-part">
			<div class="whole-start-text">
				<div class="main-text">
					У нашій колекції серед інших можна знайти  такі відомі книги:
				</div>
				<div class="additional-info">
					<img src="/images/lending/premium (1) 4-2.png" alt="premium" class="premium-icon-add-info">
					<p>
						Для того щоб прочитати деякі книги потрібно оформити преміум підписку!
					</p>
					
					<div class="ref-premium">
						<a href="premium">Дізнатися більше ></a>
					</div>
				</div>
			</div>
			<div class="main-content">
				<img src="/images/lending/Стрілка 1.png" class="arrow-scroll" id="arrow-left">
				<ul class="book-list">
					<li>
						<div class="card-info">
							<img src="/images/lending/61-ZAFCWcLL 1.jpg" alt="" class="book-image">
							<div class="book-description">
								<b>Tkinking in java</b>
								<br>
								Автор: Bruce Eckel
							</div>
							<img src="/images/lending/premium (1) 1.png" alt="" class="premium-icon">
						</div>
					</li>
					<li>
						<div class="card-info">
							<img src="/images/lending/learning-python 1.jpg" alt="" class="book-image">
							<div class="book-description">
								<b>Learning python</b>
								<br>
								Автор: Mark 
								<br>Lutz
							</div>
						</div>
					</li>
					<li>
						<div class="card-info">
							<img src="/images/lending/the-clean-coder 1.jpg" alt="" class="book-image">
							<div class="book-description">
								<b>The Clean Coder</b>
								<br>Автор: Robert C. Martin
							</div>
							<img src="/images/lending/premium (1) 1.png" alt="" class="premium-icon">
						</div>
					</li>
					<li>
						<div class="card-info">
							<img src="/images/lending/refactoring-improving-the-design-of-existing-code-2nd-edition-addison-wesley-signature-series-fowler-2nd-edition 1.jpg" alt="" class="book-image">
							<div class="book-description">
								<b>Refactoring</b>
								<br>
								Автор: Martin Fowler
							</div>
						</div>
					</li>
				</ul>
				<img src="/images/lending/Стрілка 2.png" class="arrow-scroll" id="arrow-right">
			</div>
		</section>
		<section class="third-part" id="third-part-index-page">
			<div class="left-content">
				<form action="sign_in_or_sign_up">
					<button type="submit" class="regBtn">Зареєструватися</button>
				</form>
				<div class="whole-description">
					<div class="title-description">
						Авторизація 
						<br>
						та преміум
						<div class="text-images">
							<img src="/images/lending/premium-icon-verified-user-3736531 1.png" alt="">
							<img src="/images/lending/premium (1) 4.png" alt="">
						</div>
					</div>
					<div class="main-description">
						У нашій бібліотеці багато книжок, які можна читати навіть просто зайшовши на сайт. Але авторизація на сайті дозволить більше. А преміум ще більше!
					</div>

				</div>
			</div>
			<div class="right-content">
				<table class="content-table">
					<thead>
						<tr>
							<th class="first-head-category">
								<div>
									Можливості
								</div>
							</th>
							<th class="head-category">
								<div>
									<img src="/images/lending/free-icon-user-456141 1.png" alt="">
									<div class="additional-info-category">
										Без авторизації
									</div>
								</div>
							</th>
							<th class="head-category">
								<div>
									<img src="/images/lending/premium-icon-verified-user-changed 1.png" alt="">
									<div class="additional-info-category">
										З авторизацією
									</div>
								</div>
							</th>
							<th class="head-category">
								<div>
									<img src="/images/lending/premium (1) 4.png" alt="">
									<div class="additional-info-category">
										Покупка преміуму
									</div>
								</div>
							</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="first-cell">
								<div>
									Відвідувати сайт коли завгодно та читати загальнодоступні книжки
								</div>
							</td>
							<td>
								<img src="/images/lending/premium-icon-check-mark-4225683.png">
							</td>
							<td>
								<img src="/images/lending/premium-icon-check-mark-4225683.png">
							</td>
							<td>
								<img src="/images/lending/premium-icon-check-mark-4225683.png">
							</td>
						</tr>
						<tr>
							<td class="first-cell">
								<div>
									Купувати книжки
								</div>
							</td>
							<td>
								<img src="/images/lending/premium-icon-cross-mark-4225690.png">
							</td>
							<td>
								<img src="/images/lending/premium-icon-check-mark-4225683.png">
							</td>
							<td>
								<img src="/images/lending/premium-icon-check-mark-4225683.png">
							</td>
						</tr>
						<tr>
							<td class="first-cell">
								<div>
									Відмічати улюблені книги 
								</div>
							</td>
							<td>
								<img src="/images/lending/premium-icon-cross-mark-4225690.png">
							</td>
							<td>
								<img src="/images/lending/premium-icon-check-mark-4225683.png">
							</td>
							<td>
								<img src="/images/lending/premium-icon-check-mark-4225683.png">
							</td>
						</tr>
						<tr>
							<td class="first-cell">
								<div>
									Залишити відгук
								</div>
							</td>
							<td>
								<img src="/images/lending/premium-icon-cross-mark-4225690.png">
							</td>
							<td>
								<img src="/images/lending/premium-icon-check-mark-4225683.png">
							</td>
							<td>
								<img src="/images/lending/premium-icon-check-mark-4225683.png">
							</td>
						</tr>
						<tr>
							<td class="first-cell">
								<div>
									Скачивати загальнодоступні книги коли завгодно
								</div>
							</td>
							<td>
								<img src="/images/lending/premium-icon-cross-mark-4225690.png">
							</td>
							<td>
								<img src="/images/lending/premium-icon-cross-mark-4225690.png">
							</td>
							<td>
								<img src="/images/lending/premium-icon-check-mark-4225683.png">
							</td>
						</tr>
						<tr>
							<td class="first-cell">
								<div>
									Читати преміум книги 
								</div>
							</td>
							<td>
								<img src="/images/lending/premium-icon-cross-mark-4225690.png">
							</td>
							<td>
								<img src="/images/lending/premium-icon-cross-mark-4225690.png">
							</td>
							<td>
								<img src="/images/lending/premium-icon-check-mark-4225683.png">
							</td>
						</tr>
					</tbody>
				</table>							
			</div>
		</section>
@endsection