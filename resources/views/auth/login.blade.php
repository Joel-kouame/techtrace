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
                    <a href="#" class="noble-ui-logo d-block mb-2">BIENVENUE SUR <span><b style="color: #C8773A">TECH TRACE</b></span></a>
                    <h5 class="text-muted fw-normal mb-4">Bienvenue à nouveau ! Connectez-vous à votre compte.</h5>
                    <form class="forms-sample"  method="POST" action="{{ route('login') }}" >
                        @csrf
                      <div class="mb-3">
                        <label for="userEmail" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label for="password" class="form-label">Mot de passe</label>
                        <input type="password" class="form-control" id="password" name="password" autocomplete="current-password" placeholder="Password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                      <div class="form-check mb-3">
                        <input type="checkbox" class="form-check-input" id="authCheck">
                        <label class="form-check-label" for="authCheck">
                            Se souvenir de moi
                        </label>
                      </div>
                      <div>
                        <button type="submit" class="btn btn-success me-2 mb-2 mb-md-0 text-white">Se connecter</button>
                      </div>
                      <a href="{{route('register')}}" class="d-block mt-3 text-muted">Vous n'êtes pas utilisateur ? <b style="color :#C8773A">S'inscrire</b></a>
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






{{--
<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
