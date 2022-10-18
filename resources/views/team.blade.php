@extends('home')

@section('main')
<section id="team" class="team section-bg">
	<div class="container" data-aos="fade-up">

		<div class="section-title">
			<h2>Team</h2>
			<p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
		</div>

		
		<div class="row">
			<div class="col-md-6">
				<h3 class="section-title">Struktur Organisasi</h3>
				<img src="{{asset('bkn/struktur.jpg')}}" width="160%" height="auto" alt="">
			</div>
			<div class="col-md-6">
				<h3 class="section-title">Daftar PIC</h3>
				<img src="{{asset('bkn/pic.jpg')}}" width="220%"  height="auto" alt="">
			</div>
		</div>
	
	</div>
</section>
		
@endsection
