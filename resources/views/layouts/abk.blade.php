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
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#menu3">Pelaksanaan</a>
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
								<div class="tab-pane active show" id="tabaspek-2">
									<div class="row gy-4">
										<div class="col-lg-12 details order-2 order-lg-1">
											<h3>Volume Kerja</h3>
											<p class="fst-italic m-2" style="text-align: justify">
												Volume kerja atau beban kerja diperoleh dari target
												pekerjaan yang harus dilakukan untuk memperoleh hasil
												kerja atau produk kerja suatu tugas tertentu dalam satu
												tahun. <br>
												Volume kerja atau beban kerja merupakan variabel tidak tetap dalam
												pelaksanaan Analisis Beban Kerja <br>
												Volume kerja atau beban kerja dapat dihitung berdasarkan: <br>
												a. hasil kerja; <br>
												b. objek kerja; <br>
												c. alat kerja; atau <br>
												d. tugas yang harus diselesaikan. <br>
											</div>
									</div>
								</div>
								<div class="tab-pane" id="tabaspek-3">
									<div class="row gy-4">
										<div class="col-lg-12 details order-2 order-lg-1">
											<h3>Norma Waktu</h3>
											<p class="fst-italic m-4" style="text-align: left">
												Norma waktu merupakan waktu yang dipergunakan untuk
												menghasilkan atau menyelesaikan produk atau hasil
												kerja. <br>
												Norma waktu
												bersifat tetap dan merupakan variabel tetap dalam
												pelaksanaan Analisis Beban Kerja <br>
												Norma waktu 
												ditetapkan dalam standar waktu kerja atau standar
												kemampuan rata rata yang dapat diukur berdasarkan
												jumlah produk yang dihasilkan dalam jangka waktu
												tertentu yang dibutuhkan untuk menghasilkan setiap
												produk. <br>
												Norma waktu
												merupakan standar kemampuan rata rata yang
												dipengaruhi oleh faktor sebagai berikut <br>
												a. perubahan kebijakan <br>
												b. perangkat kerja <br>
												c. prosedur kerja ; dan <br>
												d. kompetensi Pemangku Jabatan <br>
											</p>
										</div>
											
									</div>
								</div>
								<div class="tab-pane" id="tabaspek-4">
									<div class="row gy-4">
										<div class="col-lg-8 details order-2 order-lg-1">
											<h3>Waktu Kerja Efektif</h3>
											<p class="fst-italic m-4" style="text-align: justify">
												Waktu kerja efektif merupakan waktu yang secara efektif
												digunakan untuk melaksanakan tugas Jabatan, yang
												terdiri atas hari kerja efektif dan jam kerja efektif pada
												Instansi Pemerintah sesuai dengan ketentuan peraturan
												perundang undangan. <br>
												Hari kerja efektif pada Instansi Pemerintah sebagaimana
												merupakan hari kerja yang
												digunakan P egawai ASN untuk melaksanakan tugas
												selama satu tahun setelah dikurangi hari libur , cuti
												bersama dan cuti tahunan sesuai dengan ketentuan
												peraturan perundang undangan. <br>
												Jam kerja efektif pada Instansi Pemerintah 
												selama satu tahun yaitu jam kerja
												Instansi Pemerintah selama hari kerja efektif 
												dikurangi waktu yang hilang karena
												tidak dapat melaksanakan tugas pada jam kerja. <br>
												Persentase waktu yang hilang
												yang diizinkan bagi Pegawai ASN yaitu sebesar 30
												(tiga puluh) persen dari jam kerja Pegawai ASN sesuai dengan
												ketentuan peraturan perundang undangan. <br>

											</p>
										</div>
										<div class="col-lg-4 text-center order-1 order-lg-2">
											<img src="assets/img/departments-3.jpg" alt="" class="img-fluid">
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
									<a class="nav-link active show" data-bs-toggle="tab" href="#tabtahap-1">Persiapan</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-bs-toggle="tab" href="#tabtahap-2">pengumpulan data dan informasi jumlah beban kerja
										dan waktu penyelesaian setiap uraian tugas</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-bs-toggle="tab" href="#tabtahap-3">Pengolahan Data</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-bs-toggle="tab" href="#tabtahap-4">verifikasi dan validasi hasil penghitungan kebutuhan
										pegawai.</a>
								</li>
							</ul>
						</div>
						<div class="col-lg-9">
							<div class="tab-content">
								<div class="tab-pane active show" id="tabtahap-1">
									<div class="row gy-4">
										<div class="col-lg-12 details order-2 order-lg-1">
											<h3>Persiapan</h3>
											<p class="fst-italic m-2" style="text-align: justify">
												Persiapan sebagaimana dimaksud terdiri atas: <br>
												a. perencanaan proses Analisis Beban Kerja <br>
												b. pembentukan Tim; <br>
												c. pelaksanaaan pengkajian organisasi mengenai tugas
												pokok dan fungsi, rincian tugas dan rincian kegiatan <br>
												d. pemberitahuan kepada unit organisasi yang akan menjadi
												sasaran; dan <br>
												e. penyampaian formulir Analisis Beban Kerja dan petunjuk
												pengisian. <br>
											</p>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="tabtahap-2">
									<div class="row gy-4">
										<div class="col-lg-12 details order-2 order-lg-1">
											<h3>Pengumpulan Data</h3>
											<p class="fst-italic m-4" style="text-align: justify">
												Pengumpulan data dan informasi jumlah beban kerja dan
												waktu penyelesaian setiap uraian tugas dapat dilakukan melalui: <br>
												a. kuesioner atau daftar pertanyaan tertulis; <br>
												b. wawancara atau pertanyaan yang disampaikan melalui
												tanya jawab ; dan/atau <br>
												c. observasi atau pengamatan secara langsung. <br>
											</p>
										</div>
											
									</div>
								</div>
								<div class="tab-pane" id="tabtahap-3">
									<div class="row gy-4">
										<div class="col-lg-8 details order-2 order-lg-1">
											<h3>Pengolahan Data</h3>
											<p class="fst-italic m-4" style="text-align: justify">
												Pengolahan data terdiri atas: <br>
												a. penyusunan target pekerjaan atau hasil kerja secara
												kuantitas maupun kualitas yang harus dipenuhi dalam
												melakukan suatu pekerjaan untuk setiap jabatan; <br>
												b. penyusunan standar kemampuan rata rata pegawai
												diukur dari satuan hasil atau satuan waktu; <br>
												c. penyusunan waktu kerja efektif dan jam kerja efektif; dan <br>
												d. penyusunan Analisis Beban Kerja dengan pendekatan
												metode perhitungan kebutuhan pegawai
											</p>
										</div>
										<div class="col-lg-4 text-center order-1 order-lg-2">
											<img src="assets/img/departments-3.jpg" alt="" class="img-fluid">
										</div>
									</div>
								</div>
								<div class="tab-pane" id="tabtahap-4">
									<div class="row gy-4">
										<div class="col-lg-8 details order-2 order-lg-1">
											<h3>Verifikasi dan Validasi</h3>
											<p class="fst-italic m-4" style="text-align: justify">
												Verifikasi dan validasi hasil penghitungan kebutuhan
												pegawai dilaksanakan untuk memastikan kebenaran melalui
												pengecekan ulang hasil penghitungan beban kerja untuk
												mengetahui kebenaran sesuai dengan syarat yang ditentukan
												dan memastikan perhitungan kebutuhan terhadap hasil
												penyusunan Analisis Beban Kerja. <br>
												Adapun proses verifikasi dan validasi dilakukan paling sedikit terhadap: <br>
												a. nomenklatur Jabatan <br>
												b. ikhtisar Jabatan <br>
												c. target pekerjaan <br>
												d. jumlah beban kerja; <br>
												e. standar kemampuan rata rata pegawai dan <br>
												f. waktu kerja efektif dan jam kerja efektif <br>
												Adapun tahapan Verifikasi dan validasi meliputi:
												a. mengumpulkan data hasil penghitungan kebutuhan
												pegawai <br>
												b. mengklasifikasi data hasil penghitungan kebutuhan
												pegawai <br>
												c. menganalisis data hasil penyusunan kebutuhan
												pegawai ; dan <br>
												d. merekomendasikan hasil analisis penghitungan
												kebutuhan pegawai <br>
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
				<div id="menu3" class="tab-pane fade">
					<div class="row">
						<div class="col-lg-4">
							<div class="tab-content">
								<div class="card m-2">
									<div class="card-header">
										Pelaksanaan ABK
									</div>
									<div class="card-body">
										{{-- <h5 class="card-title">Special title treatment</h5> --}}
										<p class="card-text">
											Pelaksanaan Analisis Beban Kerja menggunakan
											penetapan alat ukur dan dilakukan secara transparan, obyektif, dan akuntabel
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="tab-content">
								<div class="card m-2">
									<div class="card-header">
										Tolak Ukur
									</div>
									<div class="card-body">
										{{-- <h5 class="card-title">Special title treatment</h5> --}}
										<p class="card-text" style="text-align: left">
											Kriteria alat ukur yang dimaksud
											terdiri atas <br>
											a. valid; <br>
											b. konsisten; dan <br>
											c. universal <br>
										</p>
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