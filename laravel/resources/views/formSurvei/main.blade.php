<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head>
		<title>Lembaga Survei</title>
		<meta charset="utf-8" />
		<meta name="description" content="Ini untuk survei." />
		<meta name="keywords" content="lembaga, survei, lembaga survei" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="id_ID" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Lembaga survei independen" />
		<meta property="og:url" content="https://keenthemes.com/metronic" />
		<meta property="og:site_name" content="Lembaga Survei" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
		<link rel="shortcut icon" href="{{ asset('media/logos/favicon.ico') }}" />
		<!--begin::Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="{{ asset('plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
		<script>// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }</script>
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="app-blank">
		<!--begin::Theme mode setup on page load-->
		<script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script>
		<!--end::Theme mode setup on page load-->

        <!--begin::Root-->
		<div class="d-flex flex-column flex-root" id="kt_app_root">
			<!--begin::Authentication - Multi-steps-->
			<div class="d-flex flex-column flex-lg-row flex-column-fluid stepper stepper-pills stepper-column stepper-multistep" id="kt_stepper_example_clickable">
				<!--begin::Aside-->
				<div class="d-flex flex-column flex-lg-row-auto w-lg-350px w-xl-500px">
					<div class="d-flex flex-column position-lg-fixed top-0 bottom-0 w-lg-350px w-xl-500px scroll-y bgi-size-cover bgi-position-center" style="background-image: url({{ asset('media/misc/auth-bg.png') }})">
						<!--begin::Header-->
						<div class="d-flex flex-center py-10 py-lg-20 mt-lg-20">
							<!--begin::Logo-->
							<a href="#" class="text-center">
								<img alt="Logo" src="{{ asset('media/logos/8064607-ai.png') }}" style="width:50%" />
							</a>
							<!--end::Logo-->
						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="d-flex flex-row-fluid justify-content-center p-10">


							<!--begin::Nav-->
							<div class="stepper-nav">
								<!--begin::Step 1-->
								<div class="stepper-item current" data-kt-stepper-element="nav">
									<!--begin::Wrapper-->
									<div class="stepper-wrapper">
										<!--begin::Icon-->
										<div class="stepper-icon rounded-3">
											<i class="ki-outline ki-check fs-2 stepper-check"></i>
											<span class="stepper-number">1</span>
										</div>
										<!--end::Icon-->
										<!--begin::Label-->
										<div class="stepper-label">
											<h3 class="stepper-title fs-2">Data Diri</h3>
											<div class="stepper-desc fw-normal">Masukkan data diri Anda</div>
										</div>
										<!--end::Label-->
									</div>
									<!--end::Wrapper-->
									<!--begin::Line-->
									<div class="stepper-line h-40px"></div>
									<!--end::Line-->
								</div>
								<!--end::Step 1-->
								<!--begin::Step 2-->
								<div class="stepper-item" data-kt-stepper-element="nav">
									<!--begin::Wrapper-->
									<div class="stepper-wrapper">
										<!--begin::Icon-->
										<div class="stepper-icon rounded-3">
											<i class="ki-outline ki-check fs-2 stepper-check"></i>
											<span class="stepper-number">2</span>
										</div>
										<!--end::Icon-->
										<!--begin::Label-->
										<div class="stepper-label">
											<h3 class="stepper-title fs-2">Alamat Memilih</h3>
											<div class="stepper-desc fw-normal">Masukkan lokasi Anda akan memilih</div>
										</div>
										<!--end::Label-->
									</div>
									<!--end::Wrapper-->
									<!--begin::Line-->
									<div class="stepper-line h-40px"></div>
									<!--end::Line-->
								</div>
								<!--end::Step 2-->
								<!--begin::Step 3-->
								<div class="stepper-item" data-kt-stepper-element="nav">
									<!--begin::Wrapper-->
									<div class="stepper-wrapper">
										<!--begin::Icon-->
										<div class="stepper-icon">
											<i class="ki-outline ki-check fs-2 stepper-check"></i>
											<span class="stepper-number">3</span>
										</div>
										<!--end::Icon-->
										<!--begin::Label-->
										<div class="stepper-label">
											<h3 class="stepper-title fs-2">Pilihan</h3>
											<div class="stepper-desc fw-normal">Tentukan pilihan Anda</div>
										</div>
										<!--end::Label-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Step 3-->
							</div>
							<!--end::Nav-->
						</div>
						<!--end::Body-->
						<!--begin::Footer-->
						<div class="d-flex flex-center flex-wrap px-5 py-10">
							<!--begin::Links-->
							<div class="d-flex fw-normal">
								<a href="#" class="text-success px-5" target="_blank">Terms</a>
								<a href="#" class="text-success px-5" target="_blank">Plans</a>
								<a href="#" class="text-success px-5" target="_blank">Contact Us</a>
							</div>
							<!--end::Links-->
						</div>
						<!--end::Footer-->
					</div>
				</div>
				<!--begin::Aside-->
				<!--begin::Body-->
				<div class="d-flex flex-column flex-lg-row-fluid py-10">
					<!--begin::Content-->
					<div class="d-flex flex-center flex-column flex-column-fluid">
						<!--begin::Wrapper-->
						<div class="w-lg-650px w-xl-700px p-10 p-lg-15 mx-auto">
							<!--begin::Form-->
							<div class="my-auto pb-5" novalidate="novalidate" id="kt_stepper_example_basic">
								<!--begin::Step 1-->
								<form class="current" data-kt-stepper-element="content" id="step1">
									<!--begin::Wrapper-->
									<div class="w-100">
										<!--begin::Heading-->
										<div class="pb-10 pb-lg-15">
											<!--begin::Title-->
											<h2 class="fw-bold d-flex align-items-center text-dark">Lengkapi Data Diri
											<span class="ms-1" data-bs-toggle="tooltip" title="Kami akan menjaga kerahasiaan informasi pribadi Anda.">
												<i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
											</span></h2>
											<!--end::Title-->
											<!--begin::Notice-->
											<div class="text-muted fw-semibold fs-6">Masukkan data diri Anda</div>
											<!--end::Notice-->
										</div>
										<!--end::Heading-->

										<!--begin::Input group-->
										<div class="mb-10 fv-row">
											<!--begin::Label-->
											<label class="form-label mb-3 required">NIK</label>
											<!--end::Label-->
											<!--begin::Input-->
											<input type="text" class="form-control form-control-lg form-control-solid" name="survei_nik" placeholder="321706XXXX" value="" minlength="16" maxlength="16" required />
											<!--end::Input-->
										</div>
										<!--end::Input group-->

										<!--begin::Input group-->
										<div class="mb-10 fv-row">
											<!--begin::Label-->
											<label class="form-label mb-3 required">Nama Lengkap</label>
											<!--end::Label-->
											<!--begin::Input-->
											<input type="text" class="form-control form-control-lg form-control-solid" name="survei_nama" placeholder="" value="" minlength="2" maxlength="50" required />
											<!--end::Input-->
										</div>
										<!--end::Input group-->

										<!--begin::Input group-->
										<div class="mb-10 fv-row">
											<!--begin::Label-->
											<label class="form-label mb-3 required">No Telp.</label>
											<!--end::Label-->
											<!--begin::Input-->
											<input type="text" class="form-control form-control-lg form-control-solid" name="survei_telp" placeholder="0857XXXXXXXX" value="" minlength="10" maxlength="15" required/>
											<!--end::Input-->
										</div>
										<!--end::Input group-->

										<!--begin::Input group-->
										<div class="mb-10 fv-row">
											<!--begin::Label-->
											<label class="form-label mb-3 required">Uang Elektronik</label>
											<!--end::Label-->

                                            <!--begin::Input group-->
                                            <div class="fv-row">
                                                <!--begin::Row-->
                                                <div class="row">
                                                    <!--begin::Col-->
                                                    <div class="col-lg-3">
                                                        <!--begin::Option-->
                                                        <input type="radio" class="btn-check" name="survei_emoney" value="gopay" id="gopay" required />
                                                        <label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-2 d-flex align-items-center mb-10" for="gopay">
                                                            <!--begin::Info-->
                                                            <span class="d-block fw-semibold text-start">
                                                                <img src="{{ asset('media/app/gopay.jpeg') }}" alt="" width="100%" style="br-2"/>
                                                            </span>
                                                            <!--end::Info-->
                                                        </label>
                                                        <!--end::Option-->
                                                    </div>
                                                    <!--end::Col-->
                                                    <!--begin::Col-->
                                                    <div class="col-lg-3">
                                                        <!--begin::Option-->
                                                        <input type="radio" class="btn-check" name="survei_emoney" value="ovo" id="ovo" required />
                                                        <label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-2 d-flex align-items-center mb-10" for="ovo">
                                                            <!--begin::Info-->
                                                            <span class="d-block fw-semibold text-start">
                                                                <img src="{{ asset('media/app/ovo.jpeg') }}" alt="" width="100%" style="br-2"/>
                                                            </span>
                                                            <!--end::Info-->
                                                        </label>
                                                        <!--end::Option-->
                                                    </div>
                                                    <!--end::Col-->
                                                    <!--begin::Col-->
                                                    <div class="col-lg-3">
                                                        <!--begin::Option-->
                                                        <input type="radio" class="btn-check" name="survei_emoney" value="dana" id="dana" required />
                                                        <label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-2 d-flex align-items-center mb-10" for="dana">
                                                            <!--begin::Info-->
                                                            <span class="d-block fw-semibold text-start">
                                                                <img src="{{ asset('media/app/dana.png') }}" alt="" width="100%" style="br-2"/>
                                                            </span>
                                                            <!--end::Info-->
                                                        </label>
                                                        <!--end::Option-->
                                                    </div>
                                                    <!--end::Col-->
                                                    <!--begin::Col-->
                                                    <div class="col-lg-3">
                                                        <!--begin::Option-->
                                                        <input type="radio" class="btn-check" name="survei_emoney" value="shopeepay" id="shopeepay" required />
                                                        <label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-2 d-flex align-items-center mb-10" for="shopeepay">
                                                            <!--begin::Info-->
                                                            <span class="d-block fw-semibold text-start">
                                                                <img src="{{ asset('media/app/shopeepay.jpeg') }}" alt="" width="100%" style="br-2"/>
                                                            </span>
                                                            <!--end::Info-->
                                                        </label>
                                                        <!--end::Option-->
                                                    </div>
                                                    <!--end::Col-->
                                                </div>
                                                <!--end::Row-->
                                            </div>
                                            <!--end::Input group-->
										</div>
										<!--end::Input group-->

									</div>
									<!--end::Wrapper-->
								</form>
								<!--end::Step 1-->
								<!--begin::Step 2-->
								<form class="" data-kt-stepper-element="content" id="step2">
									<!--begin::Wrapper-->
									<div class="w-100">
										<!--begin::Heading-->
										<div class="pb-10 pb-lg-15">
											<!--begin::Title-->
											<h2 class="fw-bold text-dark">Alamat Memilih</h2>
											<!--end::Title-->
											<!--begin::Notice-->
											<div class="text-muted fw-semibold fs-6">Masukkan alamat Anda akan melakukan pemilih</div>
											<!--end::Notice-->
										</div>
										<!--end::Heading-->

										<!--begin::Input group-->
										<div class="fv-row mb-10">
											<!--begin::Label-->
											<label class="form-label required">Provinsi</label>
											<!--end::Label-->
											<!--begin::Input-->
											<select name="survei_prov_kode" class="form-select form-select-lg form-select-solid" data-control="select2" data-placeholder="Select..." data-allow-clear="true" required>
												<option></option>
											</select>
											<!--end::Input-->
										</div>
										<!--end::Input group-->

										<!--begin::Input group-->
										<div class="fv-row mb-10">
											<!--begin::Label-->
											<label class="form-label required">Kota/ Kab.</label>
											<!--end::Label-->
											<!--begin::Input-->
											<select name="survei_kab_kode" class="form-select form-select-lg form-select-solid" data-control="select2" data-placeholder="Select..." data-allow-clear="true" required>
												<option></option>
											</select>
											<!--end::Input-->
										</div>
										<!--end::Input group-->

										<!--begin::Input group-->
										<div class="fv-row mb-10">
											<!--begin::Label-->
											<label class="form-label required">Kecamatan</label>
											<!--end::Label-->
											<!--begin::Input-->
											<select name="survei_kec_kode" class="form-select form-select-lg form-select-solid" data-control="select2" data-placeholder="Select..." data-allow-clear="true" required>
												<option></option>
											</select>
											<!--end::Input-->
										</div>
										<!--end::Input group-->

										<!--begin::Input group-->
										<div class="fv-row mb-10">
											<!--begin::Label-->
											<label class="form-label required">Kel./ Desa</label>
											<!--end::Label-->
											<!--begin::Input-->
											<select name="survei_kel_kode" class="form-select form-select-lg form-select-solid" data-control="select2" data-placeholder="Select..." data-allow-clear="true" required>
												<option></option>
											</select>
											<!--end::Input-->
										</div>
										<!--end::Input group-->
                                        
									</div>
									<!--end::Wrapper-->
								</form>
								<!--end::Step 2-->
								<!--begin::Step 3-->
								<form class="" data-kt-stepper-element="content" id="step3">
									<!--begin::Wrapper-->
									<div class="w-100">
										<!--begin::Heading-->
										<div class="pb-10 pb-lg-12">
											<!--begin::Title-->
											<h2 class="fw-bold text-dark">Pilihan</h2>
											<!--end::Title-->
											<!--begin::Notice-->
											<div class="text-muted fw-semibold fs-6">Tentukan pilihan Anda</div>
											<!--end::Notice-->
										</div>
										<!--end::Heading-->
										
                                        <!--begin::Input group-->
										<div class="fv-row">
											<!--begin::Row-->
											<div class="row">
												<!--begin::Col-->
												<div class="col-lg-4">
													<!--begin::Option-->
													<input type="radio" class="btn-check" name="survei_pilih" value="1" id="pilih_01" />
													<label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-2 d-flex align-items-center mb-10" for="pilih_01">
														<!--begin::Info-->
														<span class="d-block fw-semibold text-start">
															<img src="{{ asset('media/app/01.jpg') }}" alt="" width="100%" style="br-2"/>
														</span>
														<!--end::Info-->
													</label>
													<!--end::Option-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-lg-4">
													<!--begin::Option-->
													<input type="radio" class="btn-check" name="survei_pilih" value="2" id="pilih_02" />
													<label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-2 d-flex align-items-center mb-10" for="pilih_02">
														<!--begin::Info-->
														<span class="d-block fw-semibold text-start">
															<img src="{{ asset('media/app/02.jpg') }}" alt="" width="100%" style="br-2"/>
														</span>
														<!--end::Info-->
													</label>
													<!--end::Option-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-lg-4">
													<!--begin::Option-->
													<input type="radio" class="btn-check" name="survei_pilih" value="3" id="pilih_03" />
													<label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-2 d-flex align-items-center mb-10" for="pilih_03">
														<!--begin::Info-->
														<span class="d-block fw-semibold text-start">
															<img src="{{ asset('media/app/03.jpg') }}" alt="" width="100%" style="br-2"/>
														</span>
														<!--end::Info-->
													</label>
													<!--end::Option-->
												</div>
												<!--end::Col-->
											</div>
											<!--end::Row-->
										</div>
										<!--end::Input group-->

									</div>
									<!--end::Wrapper-->
								</form>
								<!--end::Step 3-->
								<!--begin::Actions-->
								<div class="d-flex flex-stack pt-15">
									<div class="mr-2">
										<button type="button" class="btn btn-lg btn-light-primary me-3" data-kt-stepper-action="previous">
										<i class="ki-outline ki-arrow-left fs-4 me-1"></i>Previous</button>
									</div>
									<div>
										<button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="submit" id="submit">
											<span class="indicator-label">Submit
											<i class="ki-outline ki-arrow-right fs-4 ms-2"></i></span>
											<span class="indicator-progress">Please wait...
											<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
										</button>
										<button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="next">Continue
										<i class="ki-outline ki-arrow-right fs-4 ms-1"></i></button>
									</div>
								</div>
								<!--end::Actions-->
							</div>
							<!--end::Form-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Content-->
				</div>
				<!--end::Body-->
			</div>
			<!--end::Authentication - Multi-steps-->
		</div>
		<!--end::Root-->

		<!--begin::Javascript-->
		<script>
			var hostUrl = "{{ url('/') }}/";
		</script>
		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="{{ asset('plugins/global/plugins.bundle.js') }}"></script>
		<script src="{{ asset('js/scripts.bundle.js') }}"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Custom Javascript(used for this page only)-->
		<script src="{{ asset('js/lokasi.js') }}"></script>
		<!--end::Custom Javascript-->
		<!--end::Javascript-->

        <script>

			Swal.fire({
				imageUrl: "{{ asset('media/app/hadiah.png') }}",
				imageAlt: "Hadiah",
				width: 600,
				padding: "1em",
				background: "transparent",
				confirmButtonText: "Ok, got it!",
				customClass: {
					confirmButton: "btn btn-primary"
				}
			});

			$.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
			
            var element = document.querySelector("#kt_stepper_example_clickable");
            var stepper = new KTStepper(element);

            // Handle navigation click
            stepper.on("kt.stepper.click", function (stepper) {
                stepper.goTo(stepper.getClickedStepIndex()); // go to clicked step
            });

            // Handle next step
            stepper.on("kt.stepper.next", function (stepper) {
                if(stepper.currentStepIndex == 1){
					var survei_nik = $('input[name="survei_nik"]').val();
					var survei_nama = $('input[name="survei_nama"]').val();
					var survei_telp = $('input[name="survei_telp"]').val();
					var survei_emoney = $('input[name="survei_emoney"]:checked').val();

                    if($('#step1')[0].checkValidity()){
						$.post("{{ route('formSurvei.cekNik') }}", {survei_nik: survei_nik}, function(data) {
							stepper.goNext();
						}, "JSON").fail(function(data){
							console.log(data);
							Swal.fire({
								text: data.responseJSON.message,
								icon: "error",
								buttonsStyling: false,
								confirmButtonText: "Ok, got it!",
								customClass: {
									confirmButton: "btn btn-primary"
								}
							});
							$('#submit').attr("data-kt-indicator", "off").removeAttr('disabled');
						});
					}

					if(survei_nik != "" && survei_nama != "" && survei_telp != "" &&survei_emoney == undefined){
						Swal.fire({
							text: "Silahkan pilih uang elektronik Anda.",
							icon: "error",
							buttonsStyling: false,
							confirmButtonText: "Ok, got it!",
							customClass: {
								confirmButton: "btn btn-primary"
							}
						});
						return false;
					}
					$('#step1').addClass('was-validated');
				} else if(stepper.currentStepIndex == 2){
					if($('#step2')[0].checkValidity()){
						stepper.goNext();
					}

					var survei_prov_kode = $('select[name="survei_prov_kode"]').val();
					var survei_kab_kode = $('select[name="survei_kab_kode"]').val();
					var survei_kec_kode = $('select[name="survei_kec_kode"]').val();
					var survei_kel_kode = $('select[name="survei_kel_kode"]').val();

					if(survei_prov_kode == "" || survei_kab_kode == "" || survei_kec_kode == "" || survei_kel_kode == ""){
						Swal.fire({
							text: "Silahkan pilih alamat Anda akan memilih.",
							icon: "error",
							buttonsStyling: false,
							confirmButtonText: "Ok, got it!",
							customClass: {
								confirmButton: "btn btn-primary"
							}
						});
						return false;
					}

					$('#step2').addClass('was-validated');
				}
			});

			stepper.on("kt.stepper.previous", function (stepper) {
				stepper.goPrevious(); // go previous step
			});

			$('#submit').on('click', function(e){
				var survei_pilih = $('input[name="survei_pilih"]:checked').val();
				if(survei_pilih == undefined){
					Swal.fire({
						text: "Silahkan pilih pilihan Anda.",
						icon: "error",
						buttonsStyling: false,
						confirmButtonText: "Ok, got it!",
						customClass: {
							confirmButton: "btn btn-primary"
						}
					});
					return false;
				}

				if($('#step3')[0].checkValidity()){
					$('#submit').attr("data-kt-indicator", "on").prop("disabled", true);

					$.post("{{ route('formSurvei.create') }}", $('#step1, #step2, #step3').serialize(), function(data) {
						Swal.fire({
							icon: "success",
							buttonsStyling: false,
							confirmButtonText: data.message,
							timer: 3000,
							customClass: {
								confirmButton: "btn btn-primary"
							}
						}).then(function(result) {
							window.location.href = "{{ route('formSurvei.index') }}";
						});
					}, "JSON").fail(function(data){
						Swal.fire({
							text: data.responseJSON.message,
							icon: "error",
							buttonsStyling: false,
							confirmButtonText: "Ok, got it!",
							customClass: {
								confirmButton: "btn btn-primary"
							}
						});
						$('#submit').attr("data-kt-indicator", "off").removeAttr('disabled');
					});
				}

				$('#step3').addClass('was-validated');
			});
        </script>
	</body>
</html>