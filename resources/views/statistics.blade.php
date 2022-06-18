@extends('layouts.app')

@section('css-file')
statistics
@endsection

@section('main-content')
		<section class="first-main-section" id="statistics-page-first-section">
			<div class="own-title">
				<div class="title-text">
					Статистичні дані нашої бібліотеки
				</div>
				<div class="title-image">
					<img src="images/statistics/Line 14.png">
				</div>
			</div>
			<div class="main-content">
				<div class="main-text">
					<div class="text-header">
						Книги ріхних категорій  
					</div>
					<div class="text-discription">
						У нашій бібліотеці знаходяться книги різних видів (категорій). 
						Звичайно, усі категорії належать до одної головної області: <b><i>програмування</i></b>. 
					</div>	
				</div>
				<div class="informative-part">
					<div class="diagram-information">
						<ul>
							<li class="first">
								<div class="percentage">
									31%
								</div>
								<div class="square-color"></div>
								<div class="text-category">
									Патерни програмування
								</div>
							</li>
							<li class="second">
								<div class="percentage">
									22%
								</div>
								<div class="square-color"></div>
								<div class="text-category">
									Java алгоритми
								</div>
							</li>
							<li class="third">
								<div class="percentage">
									18%
								</div>
								<div class="square-color"></div>
								<div class="text-category">
									Python
								</div>
							</li>
							<li class="fourth">
								<div class="percentage">
									11%
								</div>
								<div class="square-color"></div>
								<div class="text-category">
									Scala
								</div>
							</li>
							<li class="fifth">
								<div class="percentage">
									6%
								</div>
								<div class="square-color"></div>
								<div class="text-category">
									JavaScript
								</div>
							</li>
							<li class="sixth">
								<div class="percentage">
									5%
								</div>
								<div class="square-color"></div>
								<div class="text-category">
									HTML та CSS 
								</div>
							</li>
							<li class="seventh">
								<div class="percentage">
									4%
								</div>
								<div class="square-color"></div>
								<div class="text-category">
									Чистий код
								</div>
							</li>
							<li class="eighth">
								<div class="percentage">
									3%
								</div>
								<div class="square-color"></div>
								<div class="text-category">
									Інше
								</div>
							</li>
						</ul>
					</div>
					<div class="diagram-image">
						<img src="images/statistics/Графік_1.png">
					</div>
				</div>
			</div>
		</section>
		<section class="second-main-section" id="statistics-page-second-section">
			<div class="main-img">
				<img src="images/statistics/Графік_2.png">
			</div>
			<div class="main-text">
				<div class="text-header">
					Кількість прочитаних книг 
				</div>
				<div class="text-discription">
					На даний момент прочитаними книгами (хоча б один раз) є <b>5673</b> книг. 
				</div>
			</div>
		</section>
		<section class="third-main-section" id="statistics-page-third-section">
			<div class="main-text">
				<div class="text-header">
					Усього користувачів  
				</div>
				<div class="text-discription">
					Справа - графік загальної кількості користувачів, з 2017 року.
					<br>
					Користувачами ми вважаємо усіх, кто зареєструвався на нашому сайті. 
				</div>
			</div>
			<div class="main-img">
				<img src="images/statistics/Усі дані.png" alt="">
			</div>
		</section>
@endsection