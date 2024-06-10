<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
    <meta name="author" content="NobleUI">
    <meta name="keywords" content="Admin">
    <title>TECH TRACE</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&amp;display=swap" rel="stylesheet">
    <!-- End fonts -->
    <!-- core:css -->
    <link rel="stylesheet" href={{asset("admin/assets/vendors/core/core.css")}}>
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href={{asset("admin/assets/vendors/flatpickr/flatpickr.min.css")}}>
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href={{asset("admin/assets/fonts/feather-font/css/iconfont.css")}}>
    <link rel="stylesheet" href={{asset("admin/assets/vendors/flag-icon-css/css/flag-icon.min.css")}}>
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href={{asset("admin/assets/css/demo1/style.min.css")}}>
    <!-- End layout styles -->
    <link rel="shortcut icon" href={{asset("admin/assets/images/favicon.png")}} />
    @yield('styles')
</head>
<body>
	<div class="main-wrapper">
		<div class="page-wrapper full-page">
			<div class="page-content d-flex align-items-center justify-content-center">

				<div class="row w-100 mx-0 auth-page">
					<div class="col-md-8 col-xl-6 mx-auto">
						<div class="card">
							<div class="row">
                <div class="col-md-4 pe-md-0">
                  <div class="auth-side-wrapper">
                  </div>
                </div>
                <div class="col-md-8 ps-md-0">
                  <div class="auth-form-wrapper px-4 py-5">
                    <a href="#" class="noble-ui-logo d-block mb-2">INSCRIPTION SUR <span><b style="color: #C8773A">TECH TRACE</b></span></a>
                    <h5 class="text-muted fw-normal mb-4">Inscrivez pour ontenir un compte et faprofiter pleinement de notre solution.</h5>
                    <form class="forms-sample" method="POST" action="{{ route('register') }}">
                        @csrf
                      <div class="mb-3">
                        <label for="exampleInputUsername1" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" id="name" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Nom">
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                      </div>
                      <div class="mb-3">
                        <label for="userEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="userEmail" name="email" :value="old('email')" required autocomplete="username" placeholder="exemple@gmail.com">
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                      </div>
                      <div class="mb-3">
                        <label for="userPassword" class="form-label">Mot de passe</label>
                        <input type="password" class="form-control" id="password" name="password" required autocomplete="new-password" placeholder="Mot de passe">
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                      </div>
                      <div class="mb-3">
                        <label for="re-Password" class="form-label">Confirmer le mot de passe</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required autocomplete="new-password" placeholder="confirmer le mot de passe">
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                      </div>
                      <div class="flex Fitems-center justify-end mt-4">
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                                {{ __('Connexion') }}
                            </a>

                            <x-primary-button class="ms-4">
                                {{ __('Inscription') }}
                            </x-primary-button>
                        </div>
                      <a href="{{route('login')}}" class="d-block mt-3 text-muted">Vous avez déja un compte ? <b style="color: #C8773A">connectez-vous</b></a>
                    </form>
                  </div>
                </div>
              </div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

  <!-- core:js -->
  <script src={{asset("admin/assets/vendors/core/core.js")}}></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src={{asset("admin/assets/vendors/flatpickr/flatpickr.min.js")}}></script>
  <script src={{asset("admin/assets/vendors/apexcharts/apexcharts.min.js")}}></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src={{asset("admin/assets/vendors/feather-icons/feather.min.js")}}></script>
  <script src={{asset("admin/assets/js/template.js")}}></script>
  <!-- endinject -->
  <!-- Custom js for this page -->
  <script src={{asset("admin/assets/js/dashboard-light.js")}}></script>
  <!-- End custom js for this page -->
  @yield('scripts')

</body>


</html>






