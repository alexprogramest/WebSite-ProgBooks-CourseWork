@extends('layouts.app')

@section('css-file')
	searchbook
@endsection
@section('main-content')
	<section class="main-section">
			<div class="search-whole-form">
				<form>
					<input type="search" autofocus placeholder="Шукати книгу..." 
					value ="{{$params}}" class="search-text-field" name="search_string">
					<button class="searchBooksBtn" type="submit">
						<img src="/images/search_book_page/premium-icon-magnifying-glass-4426017.png">
					</button>
				</form>
			</div>
			<div class="popular-books-content" id="seacrhbook-page-popular-books-content">
				<div class="popular-books-text">
					@if (isset($params))
					Результат пошуку
					@else
					Найпопулярніші книги
					@endif
				</div>
				<div class="popular-books-cards">
					@if (isset($params))
						@php
							$all_books = App\Models\Book::all();
							$seacrh_right_books = array();
							foreach ($all_books as $one_book) {
								if (str_contains($one_book->name, $params)) {
									array_push($seacrh_right_books, $one_book);
								}
							}
						@endphp
						@for ($i = 0; $i < count($seacrh_right_books); $i++)
							<div class="card-pare">
								<div class="first card-element">
									<div class="card-element-content">
										<img src="/images/allbooks/{{$seacrh_right_books[$i]->file_image_name}}" alt="">
										<div class="card-element-description">
											<div class="card-element-text">
												<b>Назва</b>: {{$seacrh_right_books[$i]->name}}<br>
												<b>Автор</b>: {{$seacrh_right_books[$i]->author}}<br>
												<b>Ціна</b>: {{$seacrh_right_books[$i]->price}}<br>
											</div>
											<div class="book-valuation">
												<div>
													<b>Відгук</b>:
												</div>
												@for ($k = 0; $k < $seacrh_right_books[$i]->review; $k++)
													<img src="/images/search_book_page/free-icon-star-143547.png" alt="">
												@endfor
												@for ($k = 0; $k < 5 - $seacrh_right_books[$i]->review; $k++)
													<img src="/images/search_book_page/free-icon-star-1828970 1.png" alt="">
												@endfor
											</div>
											@if ($seacrh_right_books[$i]->is_premium)
												<div class="premium-book">
													<img src="/images/search_book_page/premium (1) 4-2.png" alt="">
												</div>
											@endif
										</div>
									</div>
								</div>
								@php
									$i++;
								@endphp
								@if ($i >= count($seacrh_right_books))
									@break
								@endif
								<div class="second card-element">
									<div class="card-element-content">
										<img src="/images/allbooks/{{$seacrh_right_books[$i]->file_image_name}}" alt="">
										<div class="card-element-description">
											<div class="card-element-text">
												<b>Назва</b>: {{$seacrh_right_books[$i]->name}}<br>
												<b>Автор</b>: {{$seacrh_right_books[$i]->author}}<br>
												<b>Ціна</b>: {{$seacrh_right_books[$i]->price}}<br>
											</div>
											<div class="book-valuation">
												<div>
													<b>Відгук</b>:
												</div>
												@for ($k = 0; $k < $seacrh_right_books[$i]->review; $k++)
													<img src="/images/search_book_page/free-icon-star-143547.png" alt="">
												@endfor
												@for ($k = 0; $k < 5 - $seacrh_right_books[$i]->review; $k++)
													<img src="/images/search_book_page/free-icon-star-1828970 1.png" alt="">
												@endfor
											</div>
											@if ($seacrh_right_books[$i]->is_premium)
												<div class="premium-book">
													<img src="/images/search_book_page/premium (1) 4-2.png" alt="">
												</div>
											@endif
										</div>
									</div>
								</div>
							</div>
						@endfor
					@else
					<div class="first card-pare">
						<div class="first card-element">
							<div class="card-element-content">
								<img src="/images/search_book_page/61-ZAFCWcLL 1.png" alt="">
								<div class="card-element-description">
									<div class="card-element-text">
										<b>Назва</b>:  Tkinking in java<br>
										<b>Автор</b>:  Bruce Eckel<br>
										<b>Ціна</b>:  10.25 $<br>
									</div>
									<div class="book-valuation">
										<div>
											<b>Відгук</b>:
										</div>
										<img src="/images/search_book_page/free-icon-star-143547.png" alt="">
										<img src="/images/search_book_page/free-icon-star-143547.png" alt="">
										<img src="/images/search_book_page/free-icon-star-143547.png" alt="">
										<img src="/images/search_book_page/free-icon-star-143547.png" alt="">
										<img src="/images/search_book_page/free-icon-star-143547.png" alt="">
									</div>
									<div class="premium-book">
										<img src="/images/search_book_page/premium (1) 4-2.png" alt="">
									</div>
								</div>
							</div>
						</div>
						<div class="second card-element">
							<div class="card-element-content">
								<img src="/images/search_book_page/design-pattern 1.png" alt="">
								<div class="card-element-description">
									<div class="card-element-text">
										<b>Назва</b>:  Design Patterns <br>
										<b>Автор</b>:  Erich Gamm<br>
										<b>Ціна</b>:  15.34 $<br>
									</div>
									<div class="book-valuation">
										<div>
											<b>Відгук</b>:
										</div>
										<img src="/images/search_book_page/free-icon-star-143547.png" alt="">
										<img src="/images/search_book_page/free-icon-star-143547.png" alt="">
										<img src="/images/search_book_page/free-icon-star-143547.png" alt="">
										<img src="/images/search_book_page/free-icon-star-143547.png" alt="">
										<img src="/images/search_book_page/free-icon-star-1828970 1.png" alt="">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="second card-pare">
						<div class="third card-element">
							<div class="card-element-content">
								<img src="/images/search_book_page/the-pragmatic-programmer-your-journey-to-mastery-20th-anniversary-edition-2nd-edition-2nd-edition 1.png" alt="">
								<div class="card-element-description">
									<div class="card-element-text">
										<b>Назва</b>:  The Pragmatic Programmer<br>
										<b>Автор</b>:  Andrew Hunt<br>
										<b>Ціна</b>:  23.40 $<br>
									</div>
									<div class="book-valuation">
										<div>
											<b>Відгук</b>:
										</div>
										<img src="/images/search_book_page/free-icon-star-143547.png" alt="">
										<img src="/images/search_book_page/free-icon-star-143547.png" alt="">
										<img src="/images/search_book_page/free-icon-star-143547.png" alt="">
										<img src="/images/search_book_page/free-icon-star-143547.png" alt="">
										<img src="/images/search_book_page/free-icon-star-143547.png" alt="">
									</div>
									<div class="premium-book">
										<img src="/images/search_book_page/premium (1) 4-2.png" alt="">
									</div>
								</div>
							</div>
						</div>
						<div class="fourth card-element">
							<div class="card-element-content">
								<img src="/images/search_book_page/introduction-to-algorithms-eastern-economy-edition 1.png" alt="">
								<div class="card-element-description">
									<div class="card-element-text">
										<b>Назва</b>:  Introduction to Algorithms<br>
										<b>Автор</b>:  Thomas H.<br>
										<b>Ціна</b>:  8.29 $<br>
									</div>
									<div class="book-valuation">
										<div>
											<b>Відгук</b>:
										</div>
										<img src="/images/search_book_page/free-icon-star-143547.png" alt="">
										<img src="/images/search_book_page/free-icon-star-143547.png" alt="">
										<img src="/images/search_book_page/free-icon-star-143547.png" alt="">
										<img src="/images/search_book_page/free-icon-star-143547.png" alt="">
										<img src="/images/search_book_page/free-icon-star-143547.png" alt="">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="third card-pare">
						<div class="fifth card-element">
							<div class="card-element-content">
								<img src="/images/search_book_page/41nvEPEagML 1.png" alt="">
								<div class="card-element-description">
									<div class="card-element-text">
										<b>Назва</b>:  Code Complete: A Practical Handbook of Software Construction<br>
										<b>Автор</b>:  Steve McConnell<br>
										<b>Ціна</b>:  19.87 $<br>
									</div>
									<div class="book-valuation">
										<div>
											<b>Відгук</b>:
										</div>
										<img src="/images/search_book_page/free-icon-star-143547.png" alt="">
										<img src="/images/search_book_page/free-icon-star-143547.png" alt="">
										<img src="/images/search_book_page/free-icon-star-143547.png" alt="">
										<img src="/images/search_book_page/free-icon-star-143547.png" alt="">
										<img src="/images/search_book_page/free-icon-star-143547.png" alt="">
									</div>
								</div>
							</div>
						</div>
					</div>
					@endif
				</div>
			</div>
		</section>
@endsection