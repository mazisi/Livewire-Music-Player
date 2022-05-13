@extends('layouts.app')
@section('content')
<main class="main">
	<div class="container-fluid">
	

		<!-- releases -->
	@livewire('release')
		<!-- end releases -->

		{{-- <section class="row row--grid">
			<div class="col-12 col-xl-8">
				<div class="row row--grid">
					<!-- title -->
					<div class="col-12">
						<div class="main__title">
							<h2><a href="#">Upcoming events</a></h2>
						</div>
					</div>
					<!-- end title -->

					<div class="col-12 col-md-6">
						<div class="event" data-bg="{{ asset('public/img/events/event1.jpg') }}">
							<a href="#modal-ticket" class="event__ticket open-modal"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M9,10a1,1,0,0,0-1,1v2a1,1,0,0,0,2,0V11A1,1,0,0,0,9,10Zm12,1a1,1,0,0,0,1-1V6a1,1,0,0,0-1-1H3A1,1,0,0,0,2,6v4a1,1,0,0,0,1,1,1,1,0,0,1,0,2,1,1,0,0,0-1,1v4a1,1,0,0,0,1,1H21a1,1,0,0,0,1-1V14a1,1,0,0,0-1-1,1,1,0,0,1,0-2ZM20,9.18a3,3,0,0,0,0,5.64V17H10a1,1,0,0,0-2,0H4V14.82A3,3,0,0,0,4,9.18V7H8a1,1,0,0,0,2,0H20Z"/></svg> Buy ticket</a>
							<span class="event__date">March 14, 2021</span>
							<span class="event__time">8:00 pm</span>
							<h3 class="event__title"><a href="event.html">Sorry Babushka</a></h3>
							<p class="event__address">1 East Plumb Branch St.Saint Petersburg, FL 33702</p>
						</div>
					</div>

					<div class="col-12 col-md-6">
						<div class="event" data-bg="img/events/event2.jpg">
							<a href="#modal-ticket" class="event__ticket open-modal"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M9,10a1,1,0,0,0-1,1v2a1,1,0,0,0,2,0V11A1,1,0,0,0,9,10Zm12,1a1,1,0,0,0,1-1V6a1,1,0,0,0-1-1H3A1,1,0,0,0,2,6v4a1,1,0,0,0,1,1,1,1,0,0,1,0,2,1,1,0,0,0-1,1v4a1,1,0,0,0,1,1H21a1,1,0,0,0,1-1V14a1,1,0,0,0-1-1,1,1,0,0,1,0-2ZM20,9.18a3,3,0,0,0,0,5.64V17H10a1,1,0,0,0-2,0H4V14.82A3,3,0,0,0,4,9.18V7H8a1,1,0,0,0,2,0H20Z"/></svg> Buy ticket</a>
							<span class="event__date">March 16, 2021</span>
							<span class="event__time">7:00 pm</span>
							<h3 class="event__title"><a href="event.html">Big Daddy</a></h3>
							<p class="event__address">71 Pilgrim Avenue Chevy Chase, MD 20815</p>
						</div>
					</div>
				</div>
			</div>

			<div class="col-12 col-xl-4">
				<div class="row row--grid">
					<!-- title -->
					<div class="col-12">
						<div class="main__title">
							<h2><a href="#">New Singles</a></h2>
						</div>
					</div>
					<!-- end title -->

					<div class="col-12">
						<ul class="main__list">
							<li class="single-item">
								<a data-link data-title="Got What I Got" data-artist="Jason Aldean" data-img="img/covers/cover.svg" href="audio/12071151_epic-cinematic-trailer_by_audiopizza_preview.mp3" class="single-item__cover">
									<img src="img/covers/cover.svg" alt="">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M16,2a3,3,0,0,0-3,3V19a3,3,0,0,0,6,0V5A3,3,0,0,0,16,2Zm1,17a1,1,0,0,1-2,0V5a1,1,0,0,1,2,0ZM8,2A3,3,0,0,0,5,5V19a3,3,0,0,0,6,0V5A3,3,0,0,0,8,2ZM9,19a1,1,0,0,1-2,0V5A1,1,0,0,1,9,5Z"/></svg>
								</a>
								<div class="single-item__title">
									<h4><a href="#">Got What I Got</a></h4>
									<span><a href="artist.html">Jason Aldean</a></span>
								</div>
								<span class="single-item__time">2:58</span>
							</li>
							<li class="single-item">
								<a data-link data-title="Supalonely" data-artist="BENEE Featuring" data-img="img/covers/cover7.jpg" href="audio/9106709_epic-adventure-cinematic-trailer_by_audiopizza_preview.mp3" class="single-item__cover">
									<img src="img/covers/cover7.jpg" alt="">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M16,2a3,3,0,0,0-3,3V19a3,3,0,0,0,6,0V5A3,3,0,0,0,16,2Zm1,17a1,1,0,0,1-2,0V5a1,1,0,0,1,2,0ZM8,2A3,3,0,0,0,5,5V19a3,3,0,0,0,6,0V5A3,3,0,0,0,8,2ZM9,19a1,1,0,0,1-2,0V5A1,1,0,0,1,9,5Z"/></svg>
								</a>
								<div class="single-item__title">
									<h4><a href="#">Supalonely</a></h4>
									<span><a href="artist.html">BENEE Featuring</a></span>
								</div>
								<span class="single-item__time">3:14</span>
							</li>
							<li class="single-item">
								<a data-link data-title="Girls In The Hood" data-artist="Megan Thee" data-img="img/covers/cover8.jpg" href="audio/10938456_inspiring-epic-motivational-cinematic-trailer_by_audiopizza_preview.mp3" class="single-item__cover">
									<img src="img/covers/cover8.jpg" alt="">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M16,2a3,3,0,0,0-3,3V19a3,3,0,0,0,6,0V5A3,3,0,0,0,16,2Zm1,17a1,1,0,0,1-2,0V5a1,1,0,0,1,2,0ZM8,2A3,3,0,0,0,5,5V19a3,3,0,0,0,6,0V5A3,3,0,0,0,8,2ZM9,19a1,1,0,0,1-2,0V5A1,1,0,0,1,9,5Z"/></svg>
								</a>
								<div class="single-item__title">
									<h4><a href="#">Girls In The Hood</a></h4>
									<span><a href="artist.html">Megan Thee</a></span>
								</div>
								<span class="single-item__time">3:21</span>
							</li>
							<li class="single-item">
								<a data-link data-title="Got It On Me" data-artist="Summer Walker" data-img="img/covers/cover9.jpg" href="audio/16412111_upbeat-rock_by_audiopizza_preview.mp3" class="single-item__cover">
									<img src="img/covers/cover9.jpg" alt="">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M16,2a3,3,0,0,0-3,3V19a3,3,0,0,0,6,0V5A3,3,0,0,0,16,2Zm1,17a1,1,0,0,1-2,0V5a1,1,0,0,1,2,0ZM8,2A3,3,0,0,0,5,5V19a3,3,0,0,0,6,0V5A3,3,0,0,0,8,2ZM9,19a1,1,0,0,1-2,0V5A1,1,0,0,1,9,5Z"/></svg>
								</a>
								<div class="single-item__title">
									<h4><a href="#">Got It On Me</a></h4>
									<span><a href="artist.html">Summer Walker</a></span>
								</div>
								<span class="single-item__time">3:12</span>
							</li>
							<li class="single-item">
								<a data-link data-title="Righteous" data-artist="Juice WRLD" data-img="img/covers/cover10.jpg" href="audio/19478377_ambient-pop_by_audiopizza_preview.mp3" class="single-item__cover">
									<img src="img/covers/cover10.jpg" alt="">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M16,2a3,3,0,0,0-3,3V19a3,3,0,0,0,6,0V5A3,3,0,0,0,16,2Zm1,17a1,1,0,0,1-2,0V5a1,1,0,0,1,2,0ZM8,2A3,3,0,0,0,5,5V19a3,3,0,0,0,6,0V5A3,3,0,0,0,8,2ZM9,19a1,1,0,0,1-2,0V5A1,1,0,0,1,9,5Z"/></svg>
								</a>
								<div class="single-item__title">
									<h4><a href="#">Righteous</a></h4>
									<span><a href="artist.html">Juice WRLD</a></span>
								</div>
								<span class="single-item__time">5:04</span>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</section> --}}		
	</div>
</main>
@endsection