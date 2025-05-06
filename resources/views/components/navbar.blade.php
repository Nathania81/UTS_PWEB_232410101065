<aside id="sidebar" class="bg-planetary text-white shadow-lg fixed h-full w-64 z-50 transition-transform duration-300 ease-in-out transform -translate-x-full lg:translate-x-0">
    <div class="flex flex-col h-full">
        {{-- Header --}}
        <div class="flex items-center justify-between bg-[#081F5C] p-4 border-b border-planetary">
            <span class="text-xl font-bold flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
                </svg>
                Book Tracker
            </span>
            <button id="closeSidebar" class="lg:hidden text-milkyway focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        
        {{-- Nav --}}
        <nav class="flex-grow bg-[#334EAC] p-4 overflow-y-auto">
            <ul class="space-y-2">
                <li>
                    <a href="{{ route('dashboard') }}" class="flex items-center p-3 rounded-lg hover:bg-[#4561c4] transition duration-200">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                        </svg>
                        <span class="ml-3">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('pengelolaan') }}" class="flex items-center p-3 rounded-lg hover:bg-[#4561c4] transition duration-200">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0 1 11.186 0Z" />
                        </svg>
                        <span class="ml-3">Tracker</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('profile') }}" class="flex items-center p-3 rounded-lg hover:bg-[#4561c4] transition duration-200">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                        </svg>
                        <span class="ml-3">Profile</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('login') }}" class="flex items-center p-3 rounded-lg hover:bg-[#4561c4] transition duration-200">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15m3 0 3-3m0 0-3-3m3 3H9" />
                        </svg>
                        <span class="ml-3">Logout</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>

{{-- Responsive Mobile Header --}}
<header class="lg:hidden bg-planetary text-white p-4 flex items-center justify-between sticky top-0 z-40">
    <button id="mobileMenuToggle" class="text-[#334EAC] focus:outline-none">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
    </button>
    <span class="text-[#334EAC] font-bold">Book Tracker</span>
    <div class="w-6"></div>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const mobileMenuToggle = document.getElementById('mobileMenuToggle');
        const closeSidebar = document.getElementById('closeSidebar');
        const sidebar = document.getElementById('sidebar');
        
        //Open sidebar mobile
        mobileMenuToggle?.addEventListener('click', function() {
            sidebar.classList.remove('-translate-x-full');
        });
        
        //Close sidebar mobile
        closeSidebar?.addEventListener('click', function() {
            sidebar.classList.add('-translate-x-full');
        });
        
        //Close luar sidebar mobile
        document.addEventListener('click', function(event) {
            if (window.innerWidth <= 992) {
                if (!sidebar.contains(event.target) && 
                    !mobileMenuToggle.contains(event.target)) {
                    sidebar.classList.add('-translate-x-full');
                }
            }
        });
        
        //Resize content
        window.addEventListener('resize', function() {
            if (window.innerWidth > 992) {
                sidebar.classList.remove('-translate-x-full');
            }
        });
    });
</script>