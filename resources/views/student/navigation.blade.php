<nav class="shadow-md bg-primary max-2xl:hidden h-screen w-[335px] p-2 flex flex-col text-white fixed top-0 left-0">
    <div class="px-3 py-2 h-20 flex justify-between items-center">
        <img src="" alt="STUDENT MAS BAGO">
    </div>

    <ul class="mt-12 flex-1 text-[18px]">
        <!-- Dashboard -->
        <li>
            <a href="{{ url('student/dashboard') }}" class="flex items-center justify-between px-3 py-4 transition-all duration-200 hover:text-secondary
                {{ Request::is('student/dashboard') ? 'text-secondary' : '' }}">
                <i class="bi bi-file-earmark-bar-graph-fill"></i>
                <span class="w-full flex justify-between items-center px-3">Dashboard</span>
            </a>
        </li>
        <!-- Submit Forms -->
        <li>
            <a href="{{ url('student/submit-forms') }}" class="flex items-center justify-between px-3 py-4 transition-all duration-200 hover:text-secondary 
                {{ Request::is('student/submit-forms') ? 'text-secondary' : '' }}">
                <i class="bi bi-file-earmark-fill"></i>
                <span class="w-full flex justify-between items-center px-3">Submit Forms</span>
            </a>
        </li>
        <!-- Download Forms -->
        <li>
            <a href="{{ url('student/download-forms') }}" class="flex items-center justify-between px-3 py-4 transition-all duration-200 hover:text-secondary 
                {{ Request::is('student/download-forms') || Request::is('student/forms/*') ? 'text-secondary' : '' }}">
                <i class="bi bi-file-earmark-fill"></i>
                <span class="w-full flex justify-between items-center px-3">Download Forms</span>
            </a>
        </li>
        <!-- Submit Tickets -->
        <li>
            <a href="{{ url('student/submit-tickets') }}" class="flex items-center justify-between px-3 py-4 transition-all duration-200 hover:text-secondary
                {{ Request::is('student/submit-tickets') ? 'text-secondary' : '' }}">
                <i class="bi bi-file-earmark-fill"></i>
                <span class="w-full flex justify-between items-center px-3">Submit Tickets</span>
            </a>
        </li>
        <!-- Settings -->
        <li>
            <a href="{{ url('student/settings') }}" class="flex items-center justify-between px-3 py-4 transition-all duration-200 hover:text-secondary 
                {{ Request::is('student/settings') ? 'text-secondary' : '' }}">
                <i class="bi bi-gear-wide-connected"></i>
                <span class="w-full flex justify-between items-center px-3">Settings</span>
            </a>
        </li>
        <!-- Profile Information -->
        <li class="fixed h-[60px] w-[300px] left-0 bottom-0 py-1.5 px-3.5 overflow-hidden ease-in-out duration-200">
            <div class="flex items-center flex-nowrap">
                <img src="" alt="" class="h-[45px] w-[45px] object-cover rounded-[50%] mr-[10px] border-2 border-white">
                <div class="">
                    <div class="text-[16px] whitespace-nowrap" name="userName">{{ Auth::user()->user_Fname }} {{ Auth::user()->user_MI }} {{ Auth::user()->user_Lname }}</div>
                    <div class="text-[14px] whitespace-nowrap" name="">Student</div>
                </div>
            </div>
            <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <button type="submit" class="duration-200 hover:text-secondary p-0 m-0 bg-transparent border-0">
                        <i class="bi bi-box-arrow-left text-2xl absolute right-0 top-[45%] -translate-y-1/2"></i>
                    </button>
            </form>
        </li>
    </ul>
</nav>
<!-- Mobile Sidebar -->
<div id="sidebar"
    class="fixed top-0 left-0 h-full w-80 bg-primary 2xl:hidden shadow transform -translate-x-full transition-transform duration-300 z-50">
    <nav class="flex flex-col p-2">
        <ul class="text-white max-2xl:mt-[65px] max-sm:mt-[55px]">
            <!-- Dashboard -->
            <li>
                <a href="{{ url('student/dashboard') }}" class="flex items-center justify-between px-3 py-4 transition-all duration-200 hover:text-secondary
                {{ Request::is('student/dashboard') ? 'text-secondary' : '' }}">
                    <i class="bi bi-file-earmark-bar-graph-fill"></i>
                    <span class="w-full flex justify-between items-center px-3">Dashboard</span>
                </a>
            </li>
            <!-- Submit Forms -->
            <li>
                <a href="{{ url('student/submit-forms') }}" class="flex items-center justify-between px-3 py-4 transition-all duration-200 hover:text-secondary 
                {{ Request::is('student/submit-forms') ? 'text-secondary' : '' }}">
                    <i class="bi bi-file-earmark-fill"></i>
                    <span class="w-full flex justify-between items-center px-3">Submit Forms</span>
                </a>
            </li>
            <!-- Download Forms -->
            <li>
                <a href="{{ url('student/download-forms') }}" class="flex items-center justify-between px-3 py-4 transition-all duration-200 hover:text-secondary 
                {{ Request::is('student/download-forms') || Request::is('student/forms/*') ? 'text-secondary' : '' }}">
                    <i class="bi bi-file-earmark-fill"></i>
                    <span class="w-full flex justify-between items-center px-3">Download Forms</span>
                </a>
            </li>
            <!-- Submit Tickets -->
            <li>
                <a href="{{ url('student/submit-tickets') }}" class="flex items-center justify-between px-3 py-4 transition-all duration-200 hover:text-secondary
                {{ Request::is('student/submit-tickets') ? 'text-secondary' : '' }}">
                    <i class="bi bi-file-earmark-fill"></i>
                    <span class="w-full flex justify-between items-center px-3">Submit Tickets</span>
                </a>
            </li>
            <!-- Settings -->
            <li>
                <a href="{{ url('student/settings') }}" class="flex items-center justify-between px-3 py-4 transition-all duration-200 hover:text-secondary 
                {{ Request::is('student/settings') ? 'text-secondary' : '' }}">
                    <i class="bi bi-gear-wide-connected"></i>
                    <span class="w-full flex justify-between items-center px-3">Settings</span>
                </a>
            </li>
            <!-- Profile Information -->
            <li class="fixed h-[60px] w-[300px] left-0 bottom-0 py-1.5 px-3.5 overflow-hidden ease-in-out duration-200">
                <div class="flex items-center flex-nowrap">
                    <img src="" alt=""
                        class="h-[45px] w-[45px] object-cover rounded-[50%] mr-[10px] border-2 border-white">
                    <div class="">
                        <div class="text-[16px] whitespace-nowrap" name="userName">{{ Auth::user()->user_Fname }} {{ Auth::user()->user_MI }}{{ Auth::user()->user_Lname }}</div>
                        <div class="text-[14px] whitespace-nowrap" name="">Student</div>
                    </div>
                </div>
                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <button type="submit" class="duration-200 hover:text-secondary p-0 m-0 bg-transparent border-0">
                        <i class="bi bi-box-arrow-left text-2xl absolute right-0 top-[45%] -translate-y-1/2"></i>
                    </button>
                </form>
            </li>
        </ul>
    </nav>
</div>

<div id="overlay" class="fixed inset-0 hidden z-40" onclick="toggleSidebar()"></div>
<!-- Header -->
<header
    class="sticky top-0 z-50 p-4 bg-primary text-white border-b border-white shadow flex justify-between items-center 2xl:hidden">
    <button onclick="toggleSidebar()" class="text-white focus:outline-none">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
            stroke-linecap="round" stroke-linejoin="round">
            <path d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
    </button>
    <!-- Page Title (centered) -->
    <h1 id="page-title" class="max-2xl:text-[23px] max-sm:text-[15px] font-normal mx-auto">Loading...</h1>
    <img src="" alt="a">
</header>