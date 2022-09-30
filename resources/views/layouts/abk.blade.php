@extends('../home')

@section('main')
<section class="inner-page">
	<div class="container">
		<div class="section-title">
			<h2>Analisis Beban Kerja</h2>
			<p>
				Analisis Beban Kerja digunakan untuk menghitung jumlah
				kebutuhan pegawai atau Pemangku Jabatan berdasarkan
				sejumlah target pekerjaan yang harus diselesaikan pada
				satuan waktu tertentu. Pendekatan yang digunakan dalam melakukan
				penghitungan kebutuhan jumlah dan jenis Jabatan terdiri
				atas:
			</p>
		</div>
	</div>

	<div class="container">
		<div class="card text-center">
			<div class="card-header">
				<ul class="nav nav-pills card-header-pills">
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#home">Pendekatan</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#menu1">Aspek Melaksanakan ABK</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#menu2">Tahapan Melaksanakan ABK</a>
					</li>
				</ul>
			</div>
			<div class="tab-content">
				<div id="home" class="tab-pane fade in active">
					<div class="row">
						<div class="col-lg-3">
							<ul class="nav nav-tabs flex-column">
								<li class="nav-item">
									<a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Hasil Kerja</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-bs-toggle="tab" href="#tab-2">Objek Kerja</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-bs-toggle="tab" href="#tab-3">Peralatan Kerja</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-bs-toggle="tab" href="#tab-4">Tugas per tugas Jabatan</a>
								</li>
							</ul>
						</div>
						<div class="col-lg-9">
							<div class="tab-content">
								<div class="tab-pane active show" id="tab-1">
									<div class="row gy-4">
										<div class="col-lg-8 details order-2 order-lg-1">
											<h3>Hasil Kerja</h3>
											<p class="fst-italic" style="text-align: justify">Analisis Beban Kerja dengan menggunakan pendekatan hasil
												kerja dilakukan untuk jabatan yang produk atau output jabatannya
												satu jenis dan sifat dari produk yang dihasilkannya dapat
												diukur. Dalam mengunakan pendekatan hasil kerja, informasi yang diperlukan adalah sebagai 
												<a href="" class="btn btn-primary">berikut</a></p>
											</div>
										<div class="col-lg-4 text-center order-1 order-lg-2">
											<img src="assets/img/departments-1.jpg" alt="" class="img-fluid">
										</div>
									</div>
								</div>
								<div class="tab-pane" id="tab-2">
									<div class="row gy-4">
										<div class="col-lg-8 details order-2 order-lg-1">
											<h3>Et blanditiis nemo veritatis excepturi</h3>
											<p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
											<p>Ea ipsum voluptatem consequatur quis est. Illum error ullam omnis quia et reiciendis sunt sunt est. Non aliquid repellendus itaque accusamus eius et velit ipsa voluptates. Optio nesciunt eaque beatae accusamus lerode pakto madirna desera vafle de nideran pal</p>
										</div>
										<div class="col-lg-4 text-center order-1 order-lg-2">
											<img src="assets/img/departments-2.jpg" alt="" class="img-fluid">
										</div>
									</div>
								</div>
								<div class="tab-pane" id="tab-3">
									<div class="row gy-4">
										<div class="col-lg-8 details order-2 order-lg-1">
											<h3>Impedit facilis occaecati odio neque aperiam sit</h3>
											<p class="fst-italic">Eos voluptatibus quo. Odio similique illum id quidem non enim fuga. Qui natus non sunt dicta dolor et. In asperiores velit quaerat perferendis aut</p>
											<p>Iure officiis odit rerum. Harum sequi eum illum corrupti culpa veritatis quisquam. Neque necessitatibus illo rerum eum ut. Commodi ipsam minima molestiae sed laboriosam a iste odio. Earum odit nesciunt fugiat sit ullam. Soluta et harum voluptatem optio quae</p>
										</div>
										<div class="col-lg-4 text-center order-1 order-lg-2">
											<img src="assets/img/departments-3.jpg" alt="" class="img-fluid">
										</div>
									</div>
								</div>
								<div class="tab-pane" id="tab-4">
									<div class="row gy-4">
										<div class="col-lg-8 details order-2 order-lg-1">
											<h3>Fuga dolores inventore laboriosam ut est accusamus laboriosam dolore</h3>
											<p class="fst-italic">Totam aperiam accusamus. Repellat consequuntur iure voluptas iure porro quis delectus</p>
											<p>Eaque consequuntur consequuntur libero expedita in voluptas. Nostrum ipsam necessitatibus aliquam fugiat debitis quis velit. Eum ex maxime error in consequatur corporis atque. Eligendi asperiores sed qui veritatis aperiam quia a laborum inventore</p>
										</div>
										<div class="col-lg-4 text-center order-1 order-lg-2">
											<img src="assets/img/departments-4.jpg" alt="" class="img-fluid">
										</div>
									</div>
								</div>
							</div>
						</div>
						
					</div>
				</div>
				<div id="menu1" class="tab-pane fade">
					<h3>Menu 1</h3>
					<p>Tutorial pemrograman web, mobile dan design</p>
				</div>
				<div id="menu2" class="tab-pane fade">
					<h3>Menu 2</h3>
					<p>Membuat navigasi tabs dan pills bootstrap.</p>
				</div>
			</div>
		</div>
	</div>
</section>


@endsection