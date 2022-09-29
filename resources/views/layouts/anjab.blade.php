@extends('../home')

@section('main')

<section class="inner-page">
	<div class="container">
		<div class="section-title">
			<h2>Analisis Jabatan</h2>
			<p>
				Berdasarakan Peraturan BKN No 9 Tahun 2022 tentang Tata Cara Penyusunan Kebutuhan ASN,
				Analisis Jabatan adalah proses pengumpulan, pencatatan, pengolahan, dan penyusunan data 
				jabatan menjadi informasi jabatan. Analisis Jabatan harus memuat informasi sebagai berikut:
				
			</p>
		</div>

		<div class="row gy-4">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Identitas Jabatan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Ikhtisar Jabatan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Kualifikasi Jabatan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Tugas Pokok</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Hasil Kerja</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-9">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row gy-4">
                  <div class="col-lg-12 details order-2 order-lg-1">
                    <h4>Identitas Jabatan</h4>
                    <p class="fst-italic-bold">Identitas Jabatan merupakan kumpulan informasi yang terdiri atas</p>
										<ul class=" nav nav-tabs flex-column">
											<li class="nav-item">
												<a class="nav-link" data-bs-toggle="modal" data-bs-target="#subtab1" style="cursor: pointer">Nama Jabatan atau Nomenklatur Jabatan</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" data-bs-toggle="modal" data-bs-target="#subtab2" style="cursor: pointer">Kode Jabatan</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" data-bs-toggle="modal" data-bs-target="#subtab3" style="cursor: pointer">Unit Kerja</a>
											</li>
										</ul>
									</div>
                </div>
              </div>

							<div class="modal fade" id="subtab1" tabindex="-1" aria-labelledby="subtab-1" aria-hidden="true">
								<div class="modal-dialog modal-dialog-scrollable">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title bold" id="subtab-1">Nama Jabatan</h5>
											<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
										</div>
										<div class="modal-body">
											<p style="text-align:justify">
												Nama Jabatan atau Nomenklatur Jabatan dirumuskan berdasarkan
												tindak kerja, <br> bahan kerja, <br>perangkat kerja, dan <br> hasil kerja
												yang mencerminkan tugas yang dilakukan serta
												disesuaikan dengan tugas dan fungsi unit kerja. Dengan Ketentuan sebagai berikut
												<br>
												a. untuk JPT , JA , dan JF disesuaikan dengan
												nomenklatur abatan dalam struktur organisasi dan
												tata kerja Instansi Pemerintah yang bersangkutan <br>
												b. untuk JF disesuaikan dengan nomenklatur Jabatan
												yang ditetapkan dalam peraturan yang mengatur
												mengenai penetapan JF ; dan <br>
												c. untuk Jabatan pelaksana disesuaikan dengan
												nomenklatur Jabatan yang ditetapkan dalam
												peraturan Menteri yang mengatur mengenai
												penetapan nomenklatur Jabatan pelaksana
											</p>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Ok</button>
										</div>
									</div>
								</div>
							</div>

							<div class="modal fade" id="subtab2" tabindex="-1" aria-labelledby="subtab-2" aria-hidden="true">
								<div class="modal-dialog modal-dialog-scrollable">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title bold" id="subtab-2">Kode Jabatan</h5>
											<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
										</div>
										<div class="modal-body">
											<p style="text-align:justify">
												Kode Jabatan dibuat sesuai dengan ketentuan peraturan perundang
												undangan.
											</p>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Ok</button>
										</div>
									</div>
								</div>
							</div>

							<div class="modal fade" id="subtab3" tabindex="-1" aria-labelledby="subtab-3" aria-hidden="true">
								<div class="modal-dialog modal-dialog-scrollable">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title bold" id="subtab-3">Unit Kerja</h5>
											<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
										</div>
										<div class="modal-body">
											<p style="text-align:justify">
												Unit kerja sebagaimana dimaksud 
												menunjukkan kedudukan Jabatan yang akan dianalisis mulai
												dari unit kerja yang paling tinggi sampai dengan unit kerja
												atasan langsung Jabatan yang akan dianalisis dalam struktur
												organisasi.
											</p>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Ok</button>
										</div>
									</div>
								</div>
							</div>

              <div class="tab-pane" id="tab-2">
                <div class="row gy-4">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Ikhtisar Jabatan</h3>
                    <p class="fst-italic">Ikhtisar Jabatan merupakan ringkasan dari tugas yang
											dilakukan Pemangku Jabatan, yang tersusun dalam satu
											kalimat yang mencerminkan pokok
											tugas Jabatan.
										</p>
                    <p>
											Penyusunan ikhtisar Jabatan harus memenuhi kriteria: <br>
											a. apa yang dikerjakan; <br> 
											b. bagaimana cara mengerjakan; dan <br>
											c. mengapa tugas tersebut harus dikerjakan. <br>
										</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/departments-2.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-3">
                <div class="row gy-4">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Kualifikasi Jabatan</h3>
                    <p class="fst-italic">
											Kualifikasi Jabatan merupakan kualifikasi minimal yang harus
											dimiliki Pemangku Jabatan sesuai dengan tugas dan fungsi
											Jabatan yang terdiri atas:
										</p>
										<p>
											<ul class=" nav nav-tabs flex-column">
												<li class="nav-item">
													<a class="nav-link" data-bs-toggle="modal" data-bs-target="#kualjab1" style="cursor: pointer">Pendidikan</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-bs-toggle="modal" data-bs-target="#kualjab2" style="cursor: pointer">Pelatihan</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-bs-toggle="modal" data-bs-target="#kualjab3" style="cursor: pointer">Pengalaman</a>
												</li>
											</ul>
										</p>
									</div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/departments-3.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>

							<div class="modal fade" id="kualjab1" tabindex="-1" aria-labelledby="kualjab-1" aria-hidden="true">
								<div class="modal-dialog modal-dialog-scrollable">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title bold" id="kualjab-1">Pendidikan</h5>
											<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
										</div>
										<div class="modal-body">
											<p style="text-align:justify">
												Pendidikan merupakan pendidikan formal minimal yang harus dimiliki
												Pemangku Jabatan untuk menduduki suatu Jabatan disertai
												dengan jurusan yang sesuai dengan kebutuhan Jabatan.
											</p>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Ok</button>
										</div>
									</div>
								</div>
							</div>

							<div class="modal fade" id="kualjab2" tabindex="-1" aria-labelledby="kualjab-2" aria-hidden="true">
								<div class="modal-dialog modal-dialog-scrollable">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title bold" id="kualjab-2">Pelatihan</h5>
											<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
										</div>
										<div class="modal-body">
											<p style="text-align:justify">
												Pelatihan merupakan pelatihan yang dibutuhkan Pemangku
												Jabatan untuk meningkatkan kemampuan dan
												menunjang pelaksanaan tugas Jabatan. <br>
												Pelatihan yang dimaksud adalah <br>
												a. pelatihan kepemimpinan ; <br>
												b. pelatihan fungsional dan/ atau <br>
												c. pelatihan teknis. <br>
											</p>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Ok</button>
										</div>
									</div>
								</div>
							</div>

							<div class="modal fade" id="kualjab3" tabindex="-1" aria-labelledby="kualjab-3" aria-hidden="true">
								<div class="modal-dialog modal-dialog-scrollable">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title bold" id="kualjab-3">Pengalaman</h5>
											<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
										</div>
										<div class="modal-body">
											<p style="text-align:justify">
												merupakan pengalaman kerja Pemangku Jabatan pada bidang
												tertentu yang linier dan/atau berkaitan dengan tugas Jabatan.
											</p>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Ok</button>
										</div>
									</div>
								</div>
							</div>


              <div class="tab-pane" id="tab-4">
                <div class="row gy-4">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Tugas Pokok</h3>
                    <p class="fst-italic" style="text-align: justify">Tugas pokok uf d merupakan papar an atau uraian atas semua
											tugas Jabatan yang harus dilakukan oleh Pemangku
											Jabatan dalam memproses bahan kerja menjadi hasil kerja
											atau output dengan menggunakan peralatan kerja atau
											sarana prasarana sesuai dengan ketentuan peraturan
											perundang undangan. <br>
											Penyusunan tugas pokok sebagaimana dimaksud mengikuti kaidah sebagai berikut
										</p>
											<p>
												a. tersusun dalam susunan kalimat yang memuat apa
												yang dikerjakan, bagaimana cara mengerjakan, dan
												mengapa tugas tersebut harus dikerjakan <br>
												b. tugas JF disesuaikan dengan butir kegiatan JF , tugas
												dan/atau fungsi unit organisasi tempat JF tersebut
												bertugas <br>
												c. tugas Jabatan pelaksana terdiri dari tugas teknis
												sebagai turunan dari tugas teknis atasan
												langsungnya <br>
												d. tugas JPT , Jabatan administrator , dan Jabatan
												p engawas terdiri atas tugas manajerial dan tugas
												teknis <br>
												e. penyusunan tugas manajerial menggambarkan
												perencanaan, pengorganisasian, dan pengawasan ;
												dan <br>
												f. penyusunan tugas teknis menggambarkan distribusi
												peran dari Jabatan yang paling tinggi sampai dengan
												Jabatan yang paling rendah dalam satu unit
												organisasi.
											</p>
										</div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/departments-4.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-5">
                <div class="row gy-4">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Hasil Kerja</h3>
                    <p class="fst-italic" style="text-align: justify">Hasil kerja sebagaimana dimaksud merupakan suatu keluaran atau output dari
											pelaksanaan tugas Jabatan yang dapat diukur atau
											dihitung berdasarkan bukti fisik kegiatan. Satuan hasil kerja dapat 
											berupa dokumen, data, laporan, dan/atau surat.</p>
                    </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/departments-5.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
	</div>
</section>



@endsection
{{-- <img src="assets/img/departments-1.jpg" alt="" class="img-fluid"> --}}