<x-guest-layout>
    <section class="min-h-screen flex items-stretch text-white ">
        <div class="lg:flex w-1/2 hidden bg-gray-500 bg-no-repeat bg-cover relative items-center"
            style="background-image: url('{{ asset('images/login.jpeg') }}');">
            <div class="absolute bg-black opacity-80 inset-0 z-0"></div>
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
                <form method="POST" action="{{ route('register') }}" class="sm:w-2/3 w-full px-4 lg:px-0 mx-auto">
                    @csrf
                    <div class="pb-2 pt-4">
                        <input type="text" name="name" :value="old('name')" required autofocus
                            autocomplete="name" placeholder="Nama" id="name"
                            class="block w-full p-4 text-lg rounded-xl bg-transparent focus:border max-lg:bg-black max-lg:bg-opacity-30 focus:border-white focus:ring-white">

                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
                    <div class="pb-2 pt-4">
                        <input
                            class="block w-full p-4 text-lg rounded-xl bg-transparent focus:border max-lg:bg-black max-lg:bg-opacity-30 focus:border-white focus:ring-white"
                            type="email" name="email" :value="old('email')" id="email" placeholder="Email"
                            required autocomplete="username">

                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                    <div class="pb-2 pt-4">
                        <input
                            class="block w-full p-4 text-lg rounded-xl bg-transparent focus:border max-lg:bg-black max-lg:bg-opacity-30 focus:border-white focus:ring-white"
                            type="password" name="password" required autocomplete="new-password" placeholder="Password"
                            id="password">

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                    <div class="pb-2 pt-4">
                        <input
                            class="block w-full p-4 text-lg rounded-xl bg-transparent focus:border max-lg:bg-black max-lg:bg-opacity-30 focus:border-white focus:ring-white"
                            type="password" id="password_confirmation" placeholder="Konfirmasi Password"
                            name="password_confirmation" required autocomplete="new-password">

                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>
                    <div class="text-right text-gray-400 py-2 hover:underline  hover:text-gray-100">
                        <a class="underline text-sm" href="{{ route('login') }}">
                            {{ __('Apakah sudah pernah mendaftar?') }}
                        </a>


                    </div>
                    <div class=" pb-2 pt-4">
                        <x-primary-button class="">
                            {{ __('Register') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</x-guest-layout>
