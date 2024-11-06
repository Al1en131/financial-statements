<x-app-layout>
    <div class="mx-auto sm:pl-6 lg:pl-8">
        <div class="relative mt-6 max-lg:mt-0 mb-14 max-lg:mb-8">
            <div class="bg-white bg-opacity-5 overflow-hidden shadow-sm rounded-2xl">
                <div class="pt-7 pb-14 px-12 text-white">
                    <h1 class="text-4xl mb-4 max-lg:mb-2 max-lg:text-2xl">Hi, {{ Auth::user()->name }}</h1>
                    <p class="text-base">Ayo pantau keuangan organisasimu, sudah berapa tuh
                        pengeluarannya?</p>
                </div>
            </div>
            <div class="absolute -top-16 -right-10 max-lg:top-[70px] max-md:hidden max-lg:-right-4 max-lg:w-60 max-lg:h-60">
                <img src="{{ asset('/images/card-dashboard-1.png') }}" class="" alt="">
            </div>
        </div>
        <p class="text-base text-white max-lg:justify-center max-lg:text-center mb-4">
            Aktivitas terbaru di <a href="{{ route('financial.index') }}" class="text-[#EC8305]">Laporan
                Keuangan</a></p>
        <div class="justify-between flex gap-4 max-lg:justify-center max-lg:block">
            <div class="bg-white bg-opacity-5 p-4 w-7/12 max-lg:w-full max-lg:mb-8 rounded-2xl">
                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left rtl:text-right">
                        <thead class="text-xs text-white uppercase bg-[#20223A] bg-opacity-80">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-center rounded-s-full">
                                    Kategori
                                </th>
                                <th scope="col" class="px-6 py-3 text-center ">
                                    Tanggal
                                </th>
                                <th scope="col" class="px-6 py-3 text-center ">
                                    Keterangan
                                </th>
                                <th scope="col" class="px-6 py-3 text-center ">
                                    Kredit
                                </th>
                                <th scope="col" class="px-6 py-3 text-center rounded-e-full">
                                    Debit
                                </th>
                            </tr>
                        </thead>
                        <tbody class="">
                            @foreach ($recentFinancialStatements as $statement)
                                <tr class="border-b border-white">
                                    <td class="px-6 py-4 font-medium text-center text-white whitespace-nowrap">
                                        {{ Str::limit($statement->financial->financial_name ?? 'N/A', 10) }} </td>
                                    <td class="px-6 py-4 text-white text-center">{{ $statement->date }}</td>
                                    <td class="px-6 py-4 text-white text-center">
                                        {{ Str::limit($statement->information, 10) }}
                                    </td>
                                    <td class="px-6 py-4 text-white text-center">
                                        Rp.{{ number_format($statement->credit, 0, ',', '.') }}
                                    </td>
                                    <td class="px-6 py-4 text-white text-center">
                                        Rp.{{ number_format($statement->debit, 0, ',', '.') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="grid grid-cols-2 max-lg:grid-cols-1 max-lg:gap-6 w-5/12 max-lg:mb-8 max-lg:w-full gap-2">
                <div class="flex justify-between items-center p-4 rounded-2xl"
                    style="background: linear-gradient(252deg, rgba(252, 158, 45, 0.65) 38.45%, rgba(150, 94, 27, 0.65) 98.48%);">
                    <svg xmlns="http://www.w3.org/2000/svg" width="85" height="85"
                        class="flex flex-shrink-0 w-1/2" viewBox="0 0 85 85" fill="none">
                        <g clip-path="url(#clip0_53_61)">
                            <path d="M47.8125 47.8125H26.5625V53.125H47.8125V47.8125Z" fill="white" />
                            <path d="M58.4375 34.5312H26.5625V39.8438H58.4375V34.5312Z" fill="white" />
                            <path d="M39.8438 61.0938H26.5625V66.4062H39.8438V61.0938Z" fill="white" />
                            <path
                                d="M66.4062 13.2812H58.4375V10.625C58.4375 9.21604 57.8778 7.86478 56.8815 6.86849C55.8852 5.87221 54.534 5.3125 53.125 5.3125H31.875C30.466 5.3125 29.1148 5.87221 28.1185 6.86849C27.1222 7.86478 26.5625 9.21604 26.5625 10.625V13.2812H18.5938C17.1848 13.2812 15.8335 13.841 14.8372 14.8372C13.841 15.8335 13.2813 17.1848 13.2812 18.5938V74.375C13.2813 75.784 13.841 77.1352 14.8372 78.1315C15.8335 79.1278 17.1848 79.6875 18.5938 79.6875H66.4062C67.8152 79.6875 69.1665 79.1278 70.1628 78.1315C71.159 77.1352 71.7188 75.784 71.7188 74.375V18.5938C71.7188 17.1848 71.159 15.8335 70.1628 14.8372C69.1665 13.841 67.8152 13.2812 66.4062 13.2812ZM31.875 10.625H53.125V21.25H31.875V10.625ZM66.4062 74.375H18.5938V18.5938H26.5625V26.5625H58.4375V18.5938H66.4062V74.375Z"
                                fill="white" />
                        </g>
                        <defs>
                            <clipPath id="clip0_53_61">
                                <rect width="85" height="85" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                    <div class="flex flex-col text-white w-1/2 text-center justify-center">
                        <h1 class="text-4xl">{{ $financialCount }}</h1>
                        <p class="text-base leading-5">Laporan keuangan </p>
                    </div>
                </div>
                <div class="flex justify-between items-center p-4 rounded-2xl"
                    style="background: linear-gradient(250deg, rgba(99, 195, 255, 0.32) 36.74%, rgba(59, 117, 153, 0.32) 97.67%);">
                    <svg xmlns="http://www.w3.org/2000/svg" class="flex flex-shrink-0 w-1/2" width="85"
                        height="85" viewBox="0 0 85 85" fill="none">
                        <path
                            d="M7.08301 10.625C7.08301 8.66905 8.66868 7.08337 10.6247 7.08337H74.3747C76.3307 7.08337 77.9163 8.66905 77.9163 10.625V46.0417C77.9163 47.9978 76.3307 49.5834 74.3747 49.5834H10.6247C8.66868 49.5834 7.08301 47.9978 7.08301 46.0417V10.625Z"
                            stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M77.9163 63.75H7.08301" stroke="white" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M77.9163 77.9166H7.08301" stroke="white" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path
                            d="M42.5003 35.4167C46.4123 35.4167 49.5837 32.2454 49.5837 28.3333C49.5837 24.4213 46.4123 21.25 42.5003 21.25C38.5883 21.25 35.417 24.4213 35.417 28.3333C35.417 32.2454 38.5883 35.4167 42.5003 35.4167Z"
                            stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M21.2984 28.3818L21.25 28.3334" stroke="white" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M63.7984 28.3818L63.75 28.3334" stroke="white" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    <div class="flex flex-col text-white w-1/2 text-center justify-center">
                        <h1 class="text-4xl">{{ $cashfundCount }}</h1>
                        <p class="text-base leading-5">Uang Kas</p>
                    </div>
                </div>
                <div class="flex justify-between items-center p-4 rounded-2xl"
                    style="background: linear-gradient(249deg, rgba(220, 158, 160, 0.50) 35.42%, rgba(118, 85, 86, 0.50) 97.74%);">
                    <svg xmlns="http://www.w3.org/2000/svg" class="flex flex-shrink-0 w-1/2" width="85"
                        height="85" viewBox="0 0 85 85" fill="none">
                        <path d="M10.625 10.625V67.2917C10.625 71.2038 13.7963 74.375 17.7083 74.375H74.375"
                            stroke="white" stroke-width="2" stroke-miterlimit="5.75877" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M24.792 31.875L38.9587 46.0417L53.1253 31.875L74.3753 53.125" stroke="white"
                            stroke-width="2" stroke-miterlimit="5.75877" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M63.75 53.125H74.375V42.5" stroke="white" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    <div class="flex flex-col text-white w-1/2 text-center justify-center">
                        <h1 class="text-4xl">
                            {{ $percentPengeluaran }}%
                        </h1>
                        <p class="text-base leading-5">Pengeluaran</p>
                    </div>
                </div>
                <div class="flex justify-between items-center p-4 rounded-2xl"
                    style="background: linear-gradient(249deg, rgba(164, 221, 193, 0.50) 42.13%, rgba(88, 119, 104, 0.50) 93.83%);">
                    <svg xmlns="http://www.w3.org/2000/svg" class="flex flex-shrink-0 w-1/2" width="85"
                        height="85" viewBox="0 0 85 85" fill="none">
                        <path d="M10.625 10.625V67.2917C10.625 71.2038 13.7963 74.375 17.7083 74.375H74.375"
                            stroke="white" stroke-width="2" stroke-miterlimit="5.75877" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M24.792 49.5833L38.9587 35.4166L53.1253 49.5833L74.3753 28.3333" stroke="white"
                            stroke-width="2" stroke-miterlimit="5.75877" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M63.75 28.3333H74.375V38.9583" stroke="white" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <div class="flex flex-col text-white text-center w-1/2 justify-center">
                        <h1 class="text-4xl"> {{ $percentPengeluaran }}%
                            <p class="text-base leading-5">Pemasukan</p>
                    </div>
                </div>
            </div>
        </div>
        <p class="text-base text-white mt-10 max-lg:mt-8 mb-4 max-lg:text-center">Aktivitas terbaru di <a href="{{ route('cashfunds.index') }}"
                class="text-[#EC8305]">Uang
                Kas</a></p>
        <div class="justify-between flex gap-4 max-lg:justify-center max-lg:block">
            <div class="bg-white bg-opacity-5 p-4 w-7/12 max-lg:mb-8 max-lg:w-full rounded-2xl">
                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left rtl:text-right">
                        <thead class="text-xs text-white uppercase bg-[#20223A] bg-opacity-80">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-center rounded-s-full">
                                    Kategori
                                </th>
                                <th scope="col" class="px-6 py-3 text-center">
                                    Bulan
                                </th>
                                <th scope="col" class="px-6 py-3 text-center ">
                                    Nama
                                </th>
                                <th scope="col" class="px-6 py-3 rounded-e-full text-center ">
                                    Status Pembayaran
                                </th>
                            </tr>
                        </thead>
                        <tbody class="">
                            @foreach ($cashFunds as $fund)
                                @foreach ($fund->cashFundInformations as $info)
                                    @foreach ($info->memberCash as $member)
                                        <tr class="border-b border-white">
                                            <td
                                                class="px-6 py-4 font-medium  text-center text-white whitespace-nowrap">
                                                {{ Str::limit($fund->cash_fund_name, 15) }}</td>
                                            <td class="px-6 py-4 text-white text-center">
                                                {{ $info->date ? \Carbon\Carbon::parse($info->date)->format('F Y') : 'Invalid Date' }}
                                            </td>
                                            <td class="px-6 py-4 text-white text-center">
                                                {{ Str::limit($member->member_name, 15) }}</td>
                                            <td class="px-6 py-4 text-white text-center">
                                                @if ($member->week_1_status && $member->week_2_status && $member->week_3_status && $member->week_4_status)
                                                    Lunas
                                                @else
                                                    Belum Lunas
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                @endforeach
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
            <div class="flex flex-col justify-center items-center max-lg:mb-8 gap-2 w-5/12 max-lg:w-full">
                <div
                    class="bg-white bg-opacity-25 px-10 mb-4 py-4 w-full max-lg:w-full text-base text-center rounded-lg text-white">
                    Pakai <span class="text-[#EC8305]">fin</span>Track, belajar oke, organisasi oke
                </div>
                <div class="flex">
                    <img src="{{ asset('/images/card-dashboard-2.png') }}" class="" alt="">
                    <div class="flex flex-col text-xs max-lg:text-[8px] relative">
                        <div class="bg-[#282E64] px-4 py-2 max-lg:py-1 max-lg:px-3 text-white rounded-tl-3xl rounded-br-3xl">
                            <p>
                                Gak ada tuh pusing mikirin keuangan <span class="text-[#CF0]">organisasi</span> yang
                                ganggu
                                aktivitas <span class="text-[#DC9EA0]">belajar</span> kamu
                            </p>
                        </div>
                        <div
                            class="bg-[#282E64] absolute bottom-20 px-4 max-lg:py-1 max-lg:px-3 max-lg:bottom-20 py-2 mt-2 text-white rounded-tl-3xl rounded-br-3xl">
                            <p>
                                Sama <span class="text-[#EC8305]">fin</span>Track urusan keuangan organisasimu pasti
                                beres meow~~
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
