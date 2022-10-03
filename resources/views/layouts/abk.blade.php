@extends('../home')

@section('main')
<section class="inner-page">
	<div class="container">
		<div class="section-title">
			<h2>Analisis <b>Beban Kerja</b></h2>
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
							<ul class="nav nav-tabs flex-column" style="text-align: left">
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
										<div class="col-lg-12 details order-2 order-lg-1">
											<h3>Hasil Kerja</h3>
											<p class="fst-italic m-2" style="text-align: justify">Analisis Beban Kerja dengan menggunakan pendekatan hasil
												kerja dilakukan untuk jabatan yang produk atau output jabatannya
												satu jenis dan sifat dari produk yang dihasilkannya dapat
												diukur. Dalam mengunakan pendekatan hasil kerja, informasi yang diperlukan adalah sebagai 
												<a href="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#subtab1" style="cursor: pointer">berikut</a></p>
											</div>

											<div class="modal fade" id="subtab1" tabindex="-1" aria-labelledby="subtab-1" aria-hidden="true">
												<div class="modal-dialog modal-dialog-scrollable">
													<div class="modal-content">
														<div class="modal-header">
															<h5 class="modal-title bold" id="subtab-1">Informasi yang diperlukan</h5>
															<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
														</div>
														<div class="modal-body">
															<p style="text-align: justify">
																a. hasil kerja dan satuannya; <br>
																b. jumlah beban kerja yang tercermin dari target hasil kerja
																yang harus dicapai; dan <br>
																c. standar kemampuan rata rata pegawai dalam Jabatan
																yang sama untuk memperoleh hasil kerja. <br>
															</p>
															<br>
															<p style="text-align: justify">
																Rumus penghitungan jumlah kebutuhan pegawai dengan
																pendekatan hasil kerja
																adalah jumlah beban kerja dibagi dengan standar kemampuan
																rata rata.
															</p>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Ok</button>
														</div>
													</div>
												</div>
											</div>
										
									</div>
								</div>
								<div class="tab-pane" id="tab-2">
									<div class="row gy-4">
										<div class="col-lg-12 details order-2 order-lg-1">
											<h3>Objek Kerja</h3>
											<p class="fst-italic m-4">
												Analisis Beban Kerja dengan menggunakan pendekatan
												objek kerja ayat merupakan
												beban kerja yang dapat berupa orang atau wilayah.
												Dalam mengunakan pendekatan objek kerja, informasi yang diperlukan adalah sebagai 
												<a href="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#subtab2" style="cursor: pointer">berikut</a>
											</p>
											</div>
											
											<div class="modal fade" id="subtab2" tabindex="-1" aria-labelledby="subtab-2" aria-hidden="true">
												<div class="modal-dialog modal-dialog-scrollable">
													<div class="modal-content">
														<div class="modal-header">
															<h5 class="modal-title bold" id="subtab-2">Informasi yang diperlukan</h5>
															<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
														</div>
														<div class="modal-body">
															<p style="text-align: justify">
																a. objek dan satuan kerja <br>
																b. jumlah beban kerja yang tercermin dari banyaknya
																objek yang harus dilayani; dan <br>
																c. standar kemampuan rata rata pegawai untuk
																melayani objek kerja yang telah ditetapkan
																sebelumnya. <br>
															</p>
															<br>
															<p style="text-align: justify">
																Rumus penghitungan jumlah kebutuhan pegawai dengan
																pendekatan objek kerja 
																yaitu jumlah objek kerja dibagi dengan standar kemampuan
																rata rata pegawai
															</p>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Ok</button>
														</div>
													</div>
												</div>
											</div>
									</div>
								</div>
								<div class="tab-pane" id="tab-3">
									<div class="row gy-4">
										<div class="col-lg-8 details order-2 order-lg-1">
											<h3>Peralatan Kerja</h3>
											<p class="fst-italic m-4" style="text-align: justify">
												Analisis Beban Kerja dengan menggunakan pendekatan
												peralatan kerja dilaksanakan untuk Jabatan yang pekerjaannya
												bergantung pada alat kerja yang tersedia. <br>
												Dalam menggunakan pendekatan peralatan kerja
												sebagaimana dimaksud, informasi yang
												diperlukan yaitu <br>
												a. alat kerja dan satuannya; <br>
												b. Jabatan yang diperlukan untuk pengoperasian alat
												kerja; <br>
												c. jumlah alat kerja yang dioperasikan; dan <br>
												d. rasio jumlah pegawai per jabatan per alat kerja <br>
												<a href="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#subtab2" style="cursor: pointer">berikut</a>
											</p>
										</div>
										<div class="col-lg-4 text-center order-1 order-lg-2">
											<img src="assets/img/departments-3.jpg" alt="" class="img-fluid">
										</div>
									</div>
								</div>
								<div class="tab-pane" id="tab-4">
									<div class="row gy-4">
										<div class="col-lg-8 details order-2 order-lg-1">
											<h3>Tugas Per Jabatan</h3>
											<p class="fst-italic m-4" style="text-align: justify">
												Analisis Beban Kerja dengan menggunakan pendekatan
												peralatan kerja dilaksanakan untuk Jabatan yang hasil
												kerja dan objek kerjanya beragam atau banyak jenisnya.<br>
												Dalam menggunakan pendekatan tugas per tugas Jabatan
												sebagaimana dimaksud, informasi yang
												diperlukan yaitu <br>
												a. uraian tugas; <br>
												b. jumlah beban untuk setiap tugas; <br>
												c. waktu penyelesaian rata rata untuk setiap beban;
												dan <br>
												d. jumlah jam kerja efektif. <br>
											</p>
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
					<div class="row">
						<div class="col-lg-3">
							<ul class="nav nav-tabs flex-column" style="text-align: left">
								<li class="nav-item">
									<a class="nav-link active show" data-bs-toggle="tab" href="#tabaspek-1">Uraian Tugas</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-bs-toggle="tab" href="#tabaspek-2">Volume Kerja</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-bs-toggle="tab" href="#tabaspek-3">Norma Waktu</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-bs-toggle="tab" href="#tabaspek-4">Waktu Kerja Efektif</a>
								</li>
							</ul>
						</div>
						<div class="col-lg-9">
							<div class="tab-content">
								<div class="tab-pane active show" id="tabaspek-1">
									<div class="row gy-4">
										<div class="col-lg-12 details order-2 order-lg-1">
											<h3>Hasil Kerja</h3>
											<p class="fst-italic m-2" style="text-align: justify">Analisis Beban Kerja dengan menggunakan pendekatan hasil
												kerja dilakukan untuk jabatan yang produk atau output jabatannya
												satu jenis dan sifat dari produk yang dihasilkannya dapat
												diukur. Dalam mengunakan pendekatan hasil kerja, informasi yang diperlukan adalah sebagai 
												<a href="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#subtab1" style="cursor: pointer">berikut</a></p>
											</div>

											<div class="modal fade" id="subtab1" tabindex="-1" aria-labelledby="subtab-1" aria-hidden="true">
												<div class="modal-dialog modal-dialog-scrollable">
													<div class="modal-content">
														<div class="modal-header">
															<h5 class="modal-title bold" id="subtab-1">Informasi yang diperlukan</h5>
															<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
														</div>
														<div class="modal-body">
															<p style="text-align: justify">
																a. hasil kerja dan satuannya; <br>
																b. jumlah beban kerja yang tercermin dari target hasil kerja
																yang harus dicapai; dan <br>
																c. standar kemampuan rata rata pegawai dalam Jabatan
																yang sama untuk memperoleh hasil kerja. <br>
															</p>
															<br>
															<p style="text-align: justify">
																Rumus penghitungan jumlah kebutuhan pegawai dengan
																pendekatan hasil kerja
																adalah jumlah beban kerja dibagi dengan standar kemampuan
																rata rata.
															</p>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Ok</button>
														</div>
													</div>
												</div>
											</div>
										
									</div>
								</div>
								<div class="tab-pane" id="tabaspek-2">
									<div class="row gy-4">
										<div class="col-lg-12 details order-2 order-lg-1">
											<h3>Objek Kerja</h3>
											<p class="fst-italic m-4">
												Analisis Beban Kerja dengan menggunakan pendekatan
												objek kerja ayat merupakan
												beban kerja yang dapat berupa orang atau wilayah.
												Dalam mengunakan pendekatan objek kerja, informasi yang diperlukan adalah sebagai 
												<a href="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#subtab2" style="cursor: pointer">berikut</a>
											</p>
											</div>
											
											<div class="modal fade" id="subtab2" tabindex="-1" aria-labelledby="subtab-2" aria-hidden="true">
												<div class="modal-dialog modal-dialog-scrollable">
													<div class="modal-content">
														<div class="modal-header">
															<h5 class="modal-title bold" id="subtab-2">Informasi yang diperlukan</h5>
															<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
														</div>
														<div class="modal-body">
															<p style="text-align: justify">
																a. objek dan satuan kerja <br>
																b. jumlah beban kerja yang tercermin dari banyaknya
																objek yang harus dilayani; dan <br>
																c. standar kemampuan rata rata pegawai untuk
																melayani objek kerja yang telah ditetapkan
																sebelumnya. <br>
															</p>
															<br>
															<p style="text-align: justify">
																Rumus penghitungan jumlah kebutuhan pegawai dengan
																pendekatan objek kerja 
																yaitu jumlah objek kerja dibagi dengan standar kemampuan
																rata rata pegawai
															</p>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Ok</button>
														</div>
													</div>
												</div>
											</div>
									</div>
								</div>
								<div class="tab-pane" id="tabaspek-3">
									<div class="row gy-4">
										<div class="col-lg-8 details order-2 order-lg-1">
											<h3>Peralatan Kerja</h3>
											<p class="fst-italic m-4" style="text-align: justify">
												Analisis Beban Kerja dengan menggunakan pendekatan
												peralatan kerja dilaksanakan untuk Jabatan yang pekerjaannya
												bergantung pada alat kerja yang tersedia. <br>
												Dalam menggunakan pendekatan peralatan kerja
												sebagaimana dimaksud, informasi yang
												diperlukan yaitu <br>
												a. alat kerja dan satuannya; <br>
												b. Jabatan yang diperlukan untuk pengoperasian alat
												kerja; <br>
												c. jumlah alat kerja yang dioperasikan; dan <br>
												d. rasio jumlah pegawai per jabatan per alat kerja <br>
												<a href="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#subtab2" style="cursor: pointer">berikut</a>
											</p>
										</div>
										<div class="col-lg-4 text-center order-1 order-lg-2">
											<img src="assets/img/departments-3.jpg" alt="" class="img-fluid">
										</div>
									</div>
								</div>
								<div class="tab-pane" id="tabaspek-4">
									<div class="row gy-4">
										<div class="col-lg-8 details order-2 order-lg-1">
											<h3>Tugas Per Jabatan</h3>
											<p class="fst-italic m-4" style="text-align: justify">
												Analisis Beban Kerja dengan menggunakan pendekatan
												peralatan kerja dilaksanakan untuk Jabatan yang hasil
												kerja dan objek kerjanya beragam atau banyak jenisnya.<br>
												Dalam menggunakan pendekatan tugas per tugas Jabatan
												sebagaimana dimaksud, informasi yang
												diperlukan yaitu <br>
												a. uraian tugas; <br>
												b. jumlah beban untuk setiap tugas; <br>
												c. waktu penyelesaian rata rata untuk setiap beban;
												dan <br>
												d. jumlah jam kerja efektif. <br>
											</p>
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
				<div id="menu2" class="tab-pane fade">
					<div class="row">
						<div class="col-lg-3">
							<ul class="nav nav-tabs flex-column" style="text-align: left">
								<li class="nav-item">
									<a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Persiapan</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-bs-toggle="tab" href="#tab-2">pengumpulan data dan informasi jumlah beban kerja
										dan waktu penyelesaian setiap uraian tugas</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-bs-toggle="tab" href="#tab-3">Pengolahan Data</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-bs-toggle="tab" href="#tab-4">verifikasi dan validasi hasil penghitungan kebutuhan
										pegawai.</a>
								</li>
							</ul>
						</div>
						<div class="col-lg-9">
							<div class="tab-content">
								<div class="tab-pane active show" id="tab-1">
									<div class="row gy-4">
										<div class="col-lg-12 details order-2 order-lg-1">
											<h3>Hasil Kerja</h3>
											<p class="fst-italic m-2" style="text-align: justify">Analisis Beban Kerja dengan menggunakan pendekatan hasil
												kerja dilakukan untuk jabatan yang produk atau output jabatannya
												satu jenis dan sifat dari produk yang dihasilkannya dapat
												diukur. Dalam mengunakan pendekatan hasil kerja, informasi yang diperlukan adalah sebagai 
												<a href="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#subtab1" style="cursor: pointer">berikut</a></p>
											</div>

											<div class="modal fade" id="subtab1" tabindex="-1" aria-labelledby="subtab-1" aria-hidden="true">
												<div class="modal-dialog modal-dialog-scrollable">
													<div class="modal-content">
														<div class="modal-header">
															<h5 class="modal-title bold" id="subtab-1">Informasi yang diperlukan</h5>
															<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
														</div>
														<div class="modal-body">
															<p style="text-align: justify">
																a. hasil kerja dan satuannya; <br>
																b. jumlah beban kerja yang tercermin dari target hasil kerja
																yang harus dicapai; dan <br>
																c. standar kemampuan rata rata pegawai dalam Jabatan
																yang sama untuk memperoleh hasil kerja. <br>
															</p>
															<br>
															<p style="text-align: justify">
																Rumus penghitungan jumlah kebutuhan pegawai dengan
																pendekatan hasil kerja
																adalah jumlah beban kerja dibagi dengan standar kemampuan
																rata rata.
															</p>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Ok</button>
														</div>
													</div>
												</div>
											</div>
										
									</div>
								</div>
								<div class="tab-pane" id="tab-2">
									<div class="row gy-4">
										<div class="col-lg-12 details order-2 order-lg-1">
											<h3>Objek Kerja</h3>
											<p class="fst-italic m-4">
												Analisis Beban Kerja dengan menggunakan pendekatan
												objek kerja ayat merupakan
												beban kerja yang dapat berupa orang atau wilayah.
												Dalam mengunakan pendekatan objek kerja, informasi yang diperlukan adalah sebagai 
												<a href="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#subtab2" style="cursor: pointer">berikut</a>
											</p>
											</div>
											
											<div class="modal fade" id="subtab2" tabindex="-1" aria-labelledby="subtab-2" aria-hidden="true">
												<div class="modal-dialog modal-dialog-scrollable">
													<div class="modal-content">
														<div class="modal-header">
															<h5 class="modal-title bold" id="subtab-2">Informasi yang diperlukan</h5>
															<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
														</div>
														<div class="modal-body">
															<p style="text-align: justify">
																a. objek dan satuan kerja <br>
																b. jumlah beban kerja yang tercermin dari banyaknya
																objek yang harus dilayani; dan <br>
																c. standar kemampuan rata rata pegawai untuk
																melayani objek kerja yang telah ditetapkan
																sebelumnya. <br>
															</p>
															<br>
															<p style="text-align: justify">
																Rumus penghitungan jumlah kebutuhan pegawai dengan
																pendekatan objek kerja 
																yaitu jumlah objek kerja dibagi dengan standar kemampuan
																rata rata pegawai
															</p>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Ok</button>
														</div>
													</div>
												</div>
											</div>
									</div>
								</div>
								<div class="tab-pane" id="tab-3">
									<div class="row gy-4">
										<div class="col-lg-8 details order-2 order-lg-1">
											<h3>Peralatan Kerja</h3>
											<p class="fst-italic m-4" style="text-align: justify">
												Analisis Beban Kerja dengan menggunakan pendekatan
												peralatan kerja dilaksanakan untuk Jabatan yang pekerjaannya
												bergantung pada alat kerja yang tersedia. <br>
												Dalam menggunakan pendekatan peralatan kerja
												sebagaimana dimaksud, informasi yang
												diperlukan yaitu <br>
												a. alat kerja dan satuannya; <br>
												b. Jabatan yang diperlukan untuk pengoperasian alat
												kerja; <br>
												c. jumlah alat kerja yang dioperasikan; dan <br>
												d. rasio jumlah pegawai per jabatan per alat kerja <br>
												<a href="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#subtab2" style="cursor: pointer">berikut</a>
											</p>
										</div>
										<div class="col-lg-4 text-center order-1 order-lg-2">
											<img src="assets/img/departments-3.jpg" alt="" class="img-fluid">
										</div>
									</div>
								</div>
								<div class="tab-pane" id="tab-4">
									<div class="row gy-4">
										<div class="col-lg-8 details order-2 order-lg-1">
											<h3>Tugas Per Jabatan</h3>
											<p class="fst-italic m-4" style="text-align: justify">
												Analisis Beban Kerja dengan menggunakan pendekatan
												peralatan kerja dilaksanakan untuk Jabatan yang hasil
												kerja dan objek kerjanya beragam atau banyak jenisnya.<br>
												Dalam menggunakan pendekatan tugas per tugas Jabatan
												sebagaimana dimaksud, informasi yang
												diperlukan yaitu <br>
												a. uraian tugas; <br>
												b. jumlah beban untuk setiap tugas; <br>
												c. waktu penyelesaian rata rata untuk setiap beban;
												dan <br>
												d. jumlah jam kerja efektif. <br>
											</p>
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
			</div>
		</div>
	</div>
</section>


@endsection