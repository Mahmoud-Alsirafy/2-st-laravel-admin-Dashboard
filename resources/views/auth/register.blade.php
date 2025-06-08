{{-- <x-guest-layout>
</x-guest-layout> --}}
@include('project.layout.navbar')
<div class="breadcrumbs">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="breadcrumbs-content">
                    <h1 class="page-title">Registration</h1>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <ul class="breadcrumb-nav">
                    <li>
                        <a href="{{ route('index')}}"><i class="lni lni-home"></i> Home</a>
                    </li>
                    <li>Registration</li>
                </ul>
            </div>
        </div>
    </div>
</div>
{{-- <form method="POST" action="{{ route('register') }}">
    @csrf

    <!-- Name -->
    <div>
        <x-input-label for="name" :value="__('Name')" />
        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>

    <!-- Email Address -->
    <div class="mt-4">
        <x-input-label for="email" :value="__('Email')" />
        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>

    <!-- Password -->
    <div class="mt-4">
        <x-input-label for="password" :value="__('Password')" />

        <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />

        <x-input-error :messages="$errors->get('password')" class="mt-2" />
    </div>

    <!-- Confirm Password -->
    <div class="mt-4">
        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

        <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />

        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
    </div>

    <div class="flex items-center justify-end mt-4">
        <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
            {{ __('Already registered?') }}
        </a>

        <x-primary-button class="ms-4">
            {{ __('Register') }}
        </x-primary-button>
    </div>
    </form> --}}
<div class="account-login section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12">
                <div class="register-form">
                    <div class="title">
                        <h3>No Account? Register</h3>
                        <p>
                            Registration takes less than a minute but gives you full
                            control over your orders.
                        </p>
                    </div>
                    <form class="row" method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="col-sm-6">
                            <div class="form-group">
                            {{-- <div>
                                @error('name')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                                @enderror
                                <label for="reg-fn">First Name</label>
                                <input class="form-control" name="name" type="text" id="reg-fn" required />
                            </div> --}}

                                <x-input-label for="name" :value="__('Name')" />
                                <x-text-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                {{-- <div>
                                        @error('email')
                                    <div class="alert alert-danger" role="alert">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                    <label for="reg-email">E-mail Address</label>
                                    <input class="form-control" type="email" name="email" id="reg-email" required />
                                </div> --}}
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autocomplete="username" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                        </div>
                        {{-- <div class="col-sm-6">
                            <div class="form-group">
                                <label for="reg-phone">Phone Number</label>
                                <input class="form-control" type="text" name="phone" id="reg-phone" required />
                            </div>
                        </div> --}}
                        <div class="col-sm-6">
                            <div class="form-group">
                               {{-- <div>
                                    @error('password')
                                    <div class="alert alert-danger" role="alert">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                    <label for="reg-pass">Password</label>
                                    <input class="form-control" type="password" name="password" id="reg-pass" required />
                               </div> --}}
                                <x-input-label for="password" :value="__('Password')" />

                                <x-text-input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" />

                                <x-input-error :messages="$errors->get('password')" class="mt-2" />

                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                {{-- <div>
                                    @error('password_confirmation')
                                    <div class="alert alert-danger" role="alert">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                    <label for="reg-pass-confirm">Confirm Password</label>
                                    <input class="form-control" type="password" name="password_confirmation" id="reg-pass-confirm" required />
                                </div> --}}
                                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                                <x-text-input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />

                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </div>
                        </div>
                        <div class="button">
                            <button class="btn" type="submit">Register</button>
                        </div>
                        <p class="outer-link">
                            Already have an account? <a href="{{ route('login') }}">Login Now</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@include('project.layout.footer')
