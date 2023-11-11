<aside class="hidden lg:block ml-4 my-4 px-3 py-5 rounded-xl bg-white h-[calc(100vh-32px)] shadow-xl transition-all duration-300" :class="sidebarOpen ? 'w-64' : 'w-[70px]' ">
    <nav class="flex flex-col w-full space-y-4 font-montserrat">
        <div class="flex items-center w-auto space-x-4 overflow-hidden">
            <img class="w-14 h-16 ml-[2px]" src="{{ asset('img/homework.png') }}" alt="">
            <h3 class="text-2xl font-semibold">Homework</h3>
        </div>
        <div class="divider"></div>
        <div  :class="!sidebarOpen ? 'tooltip tooltip-right' : '' " :data-tip="!sidebarOpen ? 'Beranda' : '' ">
            <a href="{{ url('/guru') }}" class="relative flex {{ Request::is('guru') ? 'bg-[#5E72E4] text-white' : 'text-gray-600 bg-neutral-100 hover:bg-neutral-300 hover:text-gray-700' }} text-lg font-semibold p-4 overflow-hidden rounded-lg">
                <svg class="w-6 h-6 absolute top-1/2 -translate-y-1/2 left-[11px]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8v10a1 1 0 0 0 1 1h4v-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v5h4a1 1 0 0 0 1-1V8M1 10l9-9 9 9"/>
                </svg>
                <span class="ml-8">Beranda</span>
            </a>
        </div>
        <div  :class="!sidebarOpen ? 'tooltip tooltip-right' : '' " :data-tip="!sidebarOpen ? 'Tugas' : '' ">
            <a href="{{ url('/tugas') }}" class="relative flex {{ Request::is('tugas*') ? 'bg-[#5E72E4] text-white' : 'text-gray-600 bg-neutral-100 hover:bg-neutral-300 hover:text-gray-700' }} text-lg font-semibold p-4 overflow-hidden rounded-lg">
                <svg class="w-6 h-6 absolute top-1/2 -translate-y-1/2 left-[11px]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                    <path d="M9 1.334C7.06.594 1.646-.84.293.653a1.158 1.158 0 0 0-.293.77v13.973c0 .193.046.383.134.55.088.167.214.306.366.403a.932.932 0 0 0 .5.147c.176 0 .348-.05.5-.147 1.059-.32 6.265.851 7.5 1.65V1.334ZM19.707.653C18.353-.84 12.94.593 11 1.333V18c1.234-.799 6.436-1.968 7.5-1.65a.931.931 0 0 0 .5.147.931.931 0 0 0 .5-.148c.152-.096.279-.235.366-.403.088-.167.134-.357.134-.55V1.423a1.158 1.158 0 0 0-.293-.77Z"/>
                </svg>
                <span class="ml-8">Tugas</span>
            </a>
        </div>
        <div  :class="!sidebarOpen ? 'tooltip tooltip-right' : '' " :data-tip="!sidebarOpen ? 'Kelas' : '' ">
            <a href="{{ url('/kelas') }}" class="relative flex {{ Request::is('kelas*') ? 'bg-[#5E72E4] text-white' : 'text-gray-600 bg-neutral-100 hover:bg-neutral-300 hover:text-gray-700' }} text-lg font-semibold p-4 overflow-hidden rounded-lg">
                <svg class="w-6 h-6 absolute top-1/2 -translate-y-1/2 left-[11px]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.333 6.764a3 3 0 1 1 3.141-5.023M2.5 16H1v-2a4 4 0 0 1 4-4m7.379-8.121a3 3 0 1 1 2.976 5M15 10a4 4 0 0 1 4 4v2h-1.761M13 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm-4 6h2a4 4 0 0 1 4 4v2H5v-2a4 4 0 0 1 4-4Z"/>
                </svg>
                <span class="ml-8">Kelas</span>
            </a>
        </div>
        <div  :class="!sidebarOpen ? 'tooltip tooltip-right' : '' " :data-tip="!sidebarOpen ? 'Siswa' : '' ">
            <a href="" class="relative flex p-4 overflow-hidden text-lg font-semibold text-gray-600 rounded-lg bg-neutral-100 hover:bg-neutral-300 hover:text-gray-700">
                <svg class="w-6 h-6 absolute top-1/2 -translate-y-1/2 left-[11px]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 18">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm-2 3h4a4 4 0 0 1 4 4v2H1v-2a4 4 0 0 1 4-4Z"/>
                </svg>
                <span class="ml-8">Siswa</span>
            </a>
        </div>
        <div  :class="!sidebarOpen ? 'tooltip tooltip-right' : '' " :data-tip="!sidebarOpen ? 'Absensi' : '' ">
            <a href="" class="relative flex p-4 overflow-hidden text-lg font-semibold text-gray-600 rounded-lg bg-neutral-100 hover:bg-neutral-300 hover:text-gray-700">
                <svg class="w-6 h-6 absolute top-1/2 -translate-y-1/2 left-[11px]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18">
                    <path fill="currentColor" d="M13 5.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0ZM7.565 7.423 4.5 14h11.518l-2.516-3.71L11 13 7.565 7.423Z"/>
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 1H2a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1Z"/>
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0ZM7.565 7.423 4.5 14h11.518l-2.516-3.71L11 13 7.565 7.423Z"/>
                </svg>
                <span class="ml-8">Absensi</span>
            </a>
        </div>
    </nav>
</aside>
