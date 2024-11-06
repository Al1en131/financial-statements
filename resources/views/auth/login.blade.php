<x-guest-layout>
    <section class="min-h-screen flex items-stretch text-white ">
        <div class="lg:flex w-1/2 hidden bg-gray-500 bg-no-repeat bg-cover relative items-center"
           style="background-image: url('{{ asset('images/login.jpeg') }}');">
            <div class="absolute bg-black opacity-85 inset-0 z-0"></div>
            <div class="w-full px-24 z-10">
                <h1 class="text-7xl"><span class="text-[#FC9E2D] font-bold ">fin</span>Track</h1>
                <p class="text-3xl my-4">Dengan finTrack urusan keuangan organisasimu pasti beres
                </p>
            </div>
        </div>
        <div class="lg:w-1/2 w-full flex items-center justify-center text-center md:px-16 px-0 z-0"
            style="background: linear-gradient(243deg, #20374D 0%, #1A2B3C 39.87%, #1A2B3C 70.96%);">
            <div class="absolute lg:hidden z-10 inset-0 bg-gray-500 bg-no-repeat bg-cover items-center"
               style="background-image: url('{{ asset('images/login.jpeg') }}');">
                <div class="absolute bg-[#20223A] opacity-60 inset-0 z-0"></div>
            </div>
            <div class="w-full py-6 z-20">
                <form method="POST" action="{{ route('login') }}" class="sm:w-2/3 w-full px-4 lg:px-0 mx-auto">
                    @csrf
                    <div class="pb-2 pt-4">
                        <input type="email" name="email" :value="old('email')" required autofocus
                            autocomplete="username" id="email" placeholder="Email"
                            class="block w-full p-4 text-lg rounded-xl bg-transparent focus:border max-lg:bg-black max-lg:bg-opacity-30 focus:border-white focus:ring-white">

                        <x-input-error :messages="$errors->get('email')" class="mt-2 " />
                    </div>
                    <div class="pb-2 pt-4">
                        <input
                            class="block w-full p-4 text-lg rounded-xl bg-transparent focus:border max-lg:bg-black max-lg:bg-opacity-30 focus:border-white focus:ring-white"
                            type="password" name="password" required autocomplete="current-password" id="password"
                            placeholder="Password">

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                    <div class="text-right text-gray-400 py-2 hover:underline hover:text-gray-100">
                        @if (Route::has('password.request'))
                            <a class="" href="{{ route('password.request') }}">
                                {{ __('Lupa password?') }}
                            </a>
                        @endif

                    </div>
                    <div class=" pb-2 pt-4">
                        <x-primary-button class="">
                            {{ __('Log in') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</x-guest-layout>
