@extends('app')

@section('content')
<div class="portfolio">
	<div class="row">
		<div class="col s12 m8 l12">
			<h2>Portfolio</h2>
			<div class="scrollable" style="padding-bottom: 250px">
				<div class="portfolio-container">
					<img src="{{ asset('public/img/wallpaper-min.png') }}" alt="">
					<div class="portfolio-body">
						<h4>Aplikasi Jadwal Pelajaran</h4>
						<h6>Android Apps</h6>
						<p>Aplikasi jadwal pelajaran yang bersifat insert data (not editable runTime) ini di buat hanya untuk belajar dan mengisi waktu tidak untuk di perjual belikan atau di jadikan komersil, Project ini di buat sejak tahun 2017 dari versi BETA hingga Stable di tahun 2018.</p>
						<span class="new badge white" data-badge-caption="Java" style="margin:0"></span><span class="new badge white" data-badge-caption="XML"></span>
					</div>
				</div>
				<hr>
				<div class="portfolio-container">
					<img src="{{ asset('public/img/cntechnews.png') }}" alt="">
					<div class="portfolio-body">
						<h4>CNPLUS Tech News</h4>
						<h6>Web</h6>
						<p>Project ini dilakukan untuk menggantikan website news tangerang yang sudah tidak aktif (bentengnews), CNPLUS Tech News dikembangkan pada masa pkl saya di <a href="http://cnplus.co.id">CNPLUS</a> pada tahun 2019.</p>
						<span class="new badge white" data-badge-caption="Laravel" style="margin:0"></span><span class="new badge white" data-badge-caption="PHP"></span></span><span class="new badge white" data-badge-caption="HTML"></span></span><span class="new badge white" data-badge-caption="REST API"></span>
					</div>
				</div>
				<hr>
				<div class="portfolio-container">
					<img src="{{ asset('public/img/gleamwear.png') }}" alt="">
					<div class="portfolio-body">
						<h4>Bug Fix at gleamwear.id</h4>
						<h6>Web</h6>
						<p><a href="http://gleamwear.id/">http://gleamwear.id/</a></p>
						<span class="new badge white" data-badge-caption="Laravel" style="margin:0"></span><span class="new badge white" data-badge-caption="PHP"></span></span><span class="new badge white" data-badge-caption="HTML"></span></span><span class="new badge white" data-badge-caption="REST API"></span>
					</div>
				</div>
				<hr>
				<div class="portfolio-container">
					<img src="{{ asset('public/img/indihome.png') }}" alt="">
					<div class="portfolio-body">
						<h4>Bug Fix and create Landing Page at indihomewifi.co.id</h4>
						<h6>Web</h6>
						<p><a href="https://indihomewifi.co.id/">https://indihomewifi.co.id/</a></p>
						<span class="new badge white" data-badge-caption="Laravel" style="margin:0"></span><span class="new badge white" data-badge-caption="PHP"></span></span><span class="new badge white" data-badge-caption="HTML"></span></span><span class="new badge white" data-badge-caption="REST API"></span>
					</div>
				</div>
				<h4>Achievement</h4>
					<h6 style="margin-bottom: 10px">- 2nd Place in Web Technologies Competition at LKS Tangerang District (2019)</h6>
					<h6 style="margin-bottom: 10px">- 2nd Place in Software Engineering at Bina Sarana Global Tangerang Raya Competent (2019)</h6>
					<h6 style="margin-bottom: 10px">- 9th Place in Asian Skill Competitor at Bina Nusantara University (2020)</h6>
			</div>
		</div>
	</div>
</div>
@endsection