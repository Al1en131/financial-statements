<button id="sidebar-toggle" class="fixed top-4 right-4 z-40 p-2 bg-[#1A2B3C] text-white rounded-md sm:hidden">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 448 512">
        <path
            d="M0 96C0 78.3 14.3 64 32 64l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 128C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 288c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32L32 448c-17.7 0-32-14.3-32-32s14.3-32 32-32l384 0c17.7 0 32 14.3 32 32z" />
    </svg>
</button>
<aside id="logo-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full bg-white max-lg:bg-opacity-85 max-lg:bg-[#1A2B3C] bg-opacity-5 rounded-r-3xl sm:translate-x-0"
    aria-label="Sidebar">
    <div class="h-full px-4 pt-24 sm:px-6 lg:px-8 pb-4 overflow-y-auto ">
        <ul class="space-y-6 font-medium">
            <li>
                <a href="{{ route('dashboard') }}"
                    class="flex items-center p-3 text-sm text-white rounded-lg 
                    hover:text-[#63C3FF] hover:bg-[#20223A]
                    {{ request()->routeIs('dashboard') ? 'text-[#63C3FF] bg-[#20223A]' : '' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none">
                        <path d="M2 5C2 3.89543 2.89543 3 4 3H10V21H4C2.89543 21 2 20.1046 2 19V5Z"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M14 3H20C21.1046 3 22 3.89543 22 5V10H14V3Z" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M14 14H22V19C22 20.1046 21.1046 21 20 21H14V14Z" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <span class="ms-3">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ route('financial.index') }}"
                    class="flex items-center p-3 text-sm text-white rounded-lg 
                   hover:text-[#63C3FF] hover:bg-[#20223A]
                   {{ request()->routeIs(['financial.index', 'financial.showStatements']) ? 'text-[#63C3FF] bg-[#20223A]' : '' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="flex flex-shrink-0" width="24" height="24"
                        viewBox="0 0 24 24" fill="none">
                        <g clip-path="url(#clip0_53_151)">
                            <path d="M13.5 13.5H7.5V15H13.5V13.5Z" fill="currentColor" />
                            <path d="M16.5 9.75H7.5V11.25H16.5V9.75Z" fill="currentColor" />
                            <path d="M11.25 17.25H7.5V18.75H11.25V17.25Z" fill="currentColor" />
                            <path
                                d="M18.75 3.75H16.5V3C16.5 2.60218 16.342 2.22064 16.0607 1.93934C15.7794 1.65804 15.3978 1.5 15 1.5H9C8.60218 1.5 8.22064 1.65804 7.93934 1.93934C7.65804 2.22064 7.5 2.60218 7.5 3V3.75H5.25C4.85218 3.75 4.47064 3.90804 4.18934 4.18934C3.90804 4.47064 3.75 4.85218 3.75 5.25V21C3.75 21.3978 3.90804 21.7794 4.18934 22.0607C4.47064 22.342 4.85218 22.5 5.25 22.5H18.75C19.1478 22.5 19.5294 22.342 19.8107 22.0607C20.092 21.7794 20.25 21.3978 20.25 21V5.25C20.25 4.85218 20.092 4.47064 19.8107 4.18934C19.5294 3.90804 19.1478 3.75 18.75 3.75ZM9 3H15V6H9V3ZM18.75 21H5.25V5.25H7.5V7.5H16.5V5.25H18.75V21Z"
                                fill="currentColor" />
                        </g>
                        <defs>
                            <clipPath id="clip0_53_151">
                                <rect width="24" height="24" fill="currentColor" />
                            </clipPath>
                        </defs>
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Laporan Keuangan</span>
                </a>
            </li>

            <li>
                <a href="{{ route('cashfunds.index') }}"
                    class="flex items-center p-3 text-sm text-white rounded-lg 
                hover:text-[#63C3FF] hover:bg-[#20223A]
                {{ request()->routeIs(['cashfunds.index', 'cashfunds.informations.index', 'cashfund_informations.member_cash.index']) ? 'text-[#63C3FF] bg-[#20223A]' : '' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none">
                        <path
                            d="M2 3C2 2.44772 2.44772 2 3 2H21C21.5523 2 22 2.44772 22 3V13C22 13.5523 21.5523 14 21 14H3C2.44772 14 2 13.5523 2 13V3Z"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M22 18H2" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M22 22H2" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path
                            d="M12 10C13.1046 10 14 9.10457 14 8C14 6.89543 13.1046 6 12 6C10.8954 6 10 6.89543 10 8C10 9.10457 10.8954 10 12 10Z"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M6.01611 8.01611L6 8" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M18.0161 8.01611L18 8" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Uang Kas</span>
                </a>
            </li>
            <li>
                <a href="{{ route('profile.edit') }}"
                    class="flex items-center p-3 text-sm text-white rounded-lg 
                hover:text-[#63C3FF] hover:bg-[#20223A]
                {{ request()->routeIs(['profile.edit']) ? 'text-[#63C3FF] bg-[#20223A]' : '' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none">
                        <g clip-path="url(#clip0_53_164)">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M18.884 14.469C19.0119 14.2486 19.219 14.0854 19.4632 14.0126C19.7073 13.9397 19.9701 13.9629 20.1978 14.0772C20.4254 14.1916 20.6009 14.3885 20.6883 14.6279C20.7757 14.8672 20.7684 15.1308 20.668 15.365L20.616 15.469L20.281 16.049C20.4807 16.2835 20.6432 16.5473 20.763 16.831L20.829 17H21.5C21.7549 17.0003 22 17.0979 22.1854 17.2728C22.3707 17.4478 22.4822 17.687 22.4972 17.9414C22.5121 18.1958 22.4293 18.4464 22.2657 18.6418C22.1021 18.8373 21.8701 18.9629 21.617 18.993L21.5 19H20.829C20.7311 19.2774 20.593 19.5388 20.419 19.776L20.281 19.95L20.616 20.531C20.7446 20.752 20.7836 21.0138 20.7251 21.2627C20.6667 21.5116 20.5151 21.7286 20.3015 21.8692C20.088 22.0098 19.8287 22.0632 19.5769 22.0185C19.3252 21.9739 19.1001 21.8345 18.948 21.629L18.884 21.531L18.549 20.951C18.256 21.005 17.959 21.014 17.669 20.981L17.452 20.949L17.116 21.531C16.9881 21.7514 16.781 21.9146 16.5368 21.9874C16.2927 22.0603 16.0299 22.0371 15.8022 21.9228C15.5746 21.8084 15.3991 21.6115 15.3117 21.3721C15.2243 21.1328 15.2316 20.8692 15.332 20.635L15.384 20.531L15.719 19.95C15.5196 19.716 15.3571 19.453 15.237 19.17L15.171 19H14.5C14.2451 18.9997 14 18.9021 13.8146 18.7272C13.6293 18.5522 13.5178 18.313 13.5028 18.0586C13.4879 17.8042 13.5707 17.5536 13.7343 17.3582C13.8979 17.1627 14.1299 17.0371 14.383 17.007L14.5 17H15.172C15.2699 16.7226 15.408 16.4612 15.582 16.224L15.719 16.05L15.384 15.469C15.2554 15.248 15.2164 14.9862 15.2749 14.7373C15.3333 14.4884 15.4849 14.2714 15.6985 14.1308C15.912 13.9902 16.1713 13.9368 16.4231 13.9815C16.6748 14.0261 16.8999 14.1655 17.052 14.371L17.116 14.469L17.451 15.049C17.744 14.995 18.041 14.986 18.331 15.019L18.548 15.05L18.884 14.469ZM11 13C11.447 13 11.887 13.024 12.316 13.07C12.5798 13.098 12.8216 13.2296 12.9883 13.4359C13.155 13.6422 13.233 13.9062 13.205 14.17C13.177 14.4338 13.0454 14.6756 12.8391 14.8423C12.6328 15.009 12.3688 15.087 12.105 15.059C11.745 15.02 11.375 15 11 15C8.977 15 7.157 15.59 5.864 16.379C5.217 16.773 4.729 17.201 4.414 17.601C4.09 18.011 4 18.321 4 18.5C4 18.622 4.037 18.751 4.255 18.926C4.504 19.126 4.937 19.333 5.599 19.508C6.917 19.858 8.811 20 11 20L11.658 19.995C11.9232 19.9914 12.179 20.0933 12.3691 20.2783C12.5591 20.4634 12.6679 20.7163 12.6715 20.9815C12.6751 21.2467 12.5732 21.5025 12.3882 21.6926C12.2031 21.8826 11.9502 21.9914 11.685 21.995L11 22C8.771 22 6.665 21.86 5.087 21.442C4.302 21.234 3.563 20.936 3.003 20.486C2.41 20.01 2 19.345 2 18.5C2 17.713 2.358 16.977 2.844 16.361C3.338 15.736 4.021 15.161 4.822 14.671C6.425 13.695 8.605 13 11 13ZM18 17C17.7348 17 17.4804 17.1054 17.2929 17.2929C17.1054 17.4804 17 17.7348 17 18C17 18.2652 17.1054 18.5196 17.2929 18.7071C17.4804 18.8946 17.7348 19 18 19C18.2652 19 18.5196 18.8946 18.7071 18.7071C18.8946 18.5196 19 18.2652 19 18C19 17.7348 18.8946 17.4804 18.7071 17.2929C18.5196 17.1054 18.2652 17 18 17ZM11 2C12.3261 2 13.5979 2.52678 14.5355 3.46447C15.4732 4.40215 16 5.67392 16 7C16 8.32608 15.4732 9.59785 14.5355 10.5355C13.5979 11.4732 12.3261 12 11 12C9.67392 12 8.40215 11.4732 7.46447 10.5355C6.52678 9.59785 6 8.32608 6 7C6 5.67392 6.52678 4.40215 7.46447 3.46447C8.40215 2.52678 9.67392 2 11 2ZM11 4C10.606 4 10.2159 4.0776 9.85195 4.22836C9.48797 4.37913 9.15726 4.6001 8.87868 4.87868C8.6001 5.15726 8.37913 5.48797 8.22836 5.85195C8.0776 6.21593 8 6.60603 8 7C8 7.39397 8.0776 7.78407 8.22836 8.14805C8.37913 8.51203 8.6001 8.84274 8.87868 9.12132C9.15726 9.3999 9.48797 9.62087 9.85195 9.77164C10.2159 9.9224 10.606 10 11 10C11.7956 10 12.5587 9.68393 13.1213 9.12132C13.6839 8.55871 14 7.79565 14 7C14 6.20435 13.6839 5.44129 13.1213 4.87868C12.5587 4.31607 11.7956 4 11 4Z"
                                fill="currentColor" />
                        </g>
                        <defs>
                            <clipPath id="clip0_53_164">
                                <rect width="24" height="24" fill="currentColor" />
                            </clipPath>
                        </defs>
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Pengaturan</span>
                </a>
            </li>
            <li>
                <a href="#"
                    class="flex items-center p-3 text-sm text-white hover:text-[#63C3FF] rounded-lg hover:bg-[#20223A] group">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none">
                        <path
                            d="M20.3433 17.1562H18.6956C18.5831 17.1562 18.4777 17.2055 18.4074 17.2922C18.2433 17.4914 18.0675 17.6836 17.8824 17.8664C17.1251 18.6244 16.2281 19.2285 15.2409 19.6453C14.2183 20.0773 13.1191 20.2989 12.0089 20.2969C10.8863 20.2969 9.79876 20.0766 8.77689 19.6453C7.78977 19.2285 6.89276 18.6244 6.13548 17.8664C5.37685 17.1109 4.77193 16.2155 4.35423 15.2297C3.92064 14.2078 3.70267 13.1227 3.70267 12C3.70267 10.8773 3.92298 9.79219 4.35423 8.77031C4.77142 7.78359 5.37142 6.89531 6.13548 6.13359C6.89954 5.37187 7.78783 4.77187 8.77689 4.35468C9.79876 3.92343 10.8863 3.70312 12.0089 3.70312C13.1316 3.70312 14.2191 3.92109 15.2409 4.35468C16.23 4.77187 17.1183 5.37187 17.8824 6.13359C18.0675 6.31875 18.241 6.51093 18.4074 6.70781C18.4777 6.79453 18.5855 6.84375 18.6956 6.84375H20.3433C20.4909 6.84375 20.5824 6.67969 20.5003 6.55547C18.7027 3.76172 15.5574 1.9125 11.9831 1.92187C6.36751 1.93593 1.86517 6.49453 1.92142 12.1031C1.97767 17.6227 6.47298 22.0781 12.0089 22.0781C15.5738 22.0781 18.705 20.2312 20.5003 17.4445C20.58 17.3203 20.4909 17.1562 20.3433 17.1562ZM22.4269 11.8523L19.1011 9.22734C18.9769 9.1289 18.7964 9.21797 18.7964 9.375V11.1562H11.437C11.3339 11.1562 11.2495 11.2406 11.2495 11.3437V12.6562C11.2495 12.7594 11.3339 12.8437 11.437 12.8437H18.7964V14.625C18.7964 14.782 18.9792 14.8711 19.1011 14.7727L22.4269 12.1477C22.4493 12.1301 22.4674 12.1077 22.4799 12.0821C22.4924 12.0565 22.4988 12.0285 22.4988 12C22.4988 11.9715 22.4924 11.9435 22.4799 11.9179C22.4674 11.8923 22.4493 11.8699 22.4269 11.8523Z"
                            fill="currentColor" />
                    </svg>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <span class="flex-1 ms-3 whitespace-nowrap" href="route('logout')"
                            onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </span>
                    </form>
                </a>
            </li>
        </ul>
    </div>
    <script>
        const sidebar = document.getElementById('logo-sidebar');
        const toggleButton = document.getElementById('sidebar-toggle');
        toggleButton.addEventListener('click', () => {
            sidebar.classList.toggle('-translate-x-full');
            sidebar.classList.toggle('translate-x-0');
        });
    </script>


</aside>
