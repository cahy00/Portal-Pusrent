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
												<a class="nav-link" data-bs-toggle="tab" href="#subtab2">Kode Jabatan</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" data-bs-toggle="tab" href="#subtab-2">Unit Kerja</a>
											</li>
										</ul>
									</div>
                </div>
              </div>

							<div class="modal fade" id="subtab1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-dialog-scrollable">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title bold" id="exampleModalLabel">Nama Jabatan</h5>
											<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
										</div>
										<div class="modal-body">
											<p style="text-align:justify">
												Nama Jabatan atau Nomenklatur Jabatan Pasal 4 huruf a dirumuskan berdasarkan
												tindak kerja, bahan kerja, perangkat kerja, dan hasil kerja
												yang mencerminkan tugas yang dilakukan serta
												disesuaikan dengan tugas dan fungsi unit kerja. Dengan Ketentuan sebagai berikut
												<br>
												a. untuk JPT , JA , dan JF disesuaikan dengan
												nomenklatur J abatan dalam struktur organisasi dan
												tata kerja I nstansi Pemerintah yang bersangkutan <br>
												b. untuk JF disesuaikan dengan nomenklatur J abatan
												yang ditetapkan dalam peraturan yang mengatur
												mengenai penetapan JF ; dan <br>
												c. untuk Jabatan pelaksana disesuaikan dengan
												nomenklatur J abatan yang ditetapkan dalam
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

							<div class="modal fade" id="subtab2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-dialog-scrollable">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title bold" id="exampleModalLabel">Kode Jabatan</h5>
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
              <div class="tab-pane" id="tab-5">
                <div class="row gy-4">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Est eveniet ipsam sindera pad rone matrelat sando reda</h3>
                    <p class="fst-italic">Omnis blanditiis saepe eos autem qui sunt debitis porro quia.</p>
                    <p>Exercitationem nostrum omnis. Ut reiciendis repudiandae minus. Omnis recusandae ut non quam ut quod eius qui. Ipsum quia odit vero atque qui quibusdam amet. Occaecati sed est sint aut vitae molestiae voluptate vel</p>
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