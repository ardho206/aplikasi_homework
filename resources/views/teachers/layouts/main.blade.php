<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <title>Homework</title>
</head>

<body class="font-poppins max-w-full h-screen overflow-x-hidden">

    <div x-data="{ sidebarOpen: true }" class="before:absolute before:left-0 before:top-0 before:-z-50 before:bg-[#5E72E4] before:h-[25rem] before:w-full relative flex">
        <x-sidebar-guru />

        <div x-data="getJurusans()" class="flex-1">
            <x-navbar-guru />

            <main class="antialiased">
                @yield('content')
            </main>
            <x-add-class-modal />
        </div>
    </div>

    <button class="fixed px-3 py-4 rounded-full shadow-lg bottom-8 right-8 bg-neutral-100">
        {{-- settings icon --}}
        <svg class="text-gray-600 w-9 h-9 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
            <g stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
              <path d="M19 11V9a1 1 0 0 0-1-1h-.757l-.707-1.707.535-.536a1 1 0 0 0 0-1.414l-1.414-1.414a1 1 0 0 0-1.414 0l-.536.535L12 2.757V2a1 1 0 0 0-1-1H9a1 1 0 0 0-1 1v.757l-1.707.707-.536-.535a1 1 0 0 0-1.414 0L2.929 4.343a1 1 0 0 0 0 1.414l.536.536L2.757 8H2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h.757l.707 1.707-.535.536a1 1 0 0 0 0 1.414l1.414 1.414a1 1 0 0 0 1.414 0l.536-.535L8 17.243V18a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-.757l1.707-.708.536.536a1 1 0 0 0 1.414 0l1.414-1.414a1 1 0 0 0 0-1.414l-.535-.536.707-1.707H18a1 1 0 0 0 1-1Z"/>
              <path d="M10 13a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
            </g>
        </svg>
    </button>

    <script>
        function getJurusans() {
            return {
                search: '',
                allData: jurusanData,
                get filteredJurusan() {
                    if (this.search === '') {
                        return this.allData;
                    }
                    return this.allData.filter((jurusan) => {
                        return (jurusan.jurusan + jurusan.kepanjangan)
                            .replace(/ /g, '')
                            .toLowerCase()
                            .includes(this.search.replace(/ /g, '').toLowerCase());
                    });
                },
                updateURL() {
                    if (this.search === '') {
                        history.pushState(null, '', window.location.pathname);
                    } else {
                        history.pushState(null, '', `?search=${this.search}`);
                    }
                }
            };
        }

        const jurusanData = [
            {
                jurusan: 'RPL',
                kepanjangan: 'Rekayasa Perangkat Lunak',
                slug: 'rekayasa-perangkat-lunak',
            },
            {
                jurusan: 'TKJ',
                kepanjangan: 'Teknik Komputer dan Jaringan',
                slug: 'teknik-komputer-dan-jaringan'
            },
            {
                jurusan: 'TKR',
                kepanjangan: 'Teknik Kendaraan Ringan',
                slug: 'teknik-kendaraan-ringan'
            },
            {
                jurusan: 'TSM',
                kepanjangan: 'Teknik Sepeda Motor',
                slug: 'teknik-sepeda-motor'
            },
            {
                jurusan: 'TITL',
                kepanjangan: 'Teknik Instalasi Tenaga Listrik',
                slug: 'teknik-instalasi-tenaga-listrik'
            },
            {
                jurusan: 'TP',
                kepanjangan: 'Teknik Pemesinan',
                slug: 'teknik-pemesinan'
            }
        ];
    </script>

</body>

</html>
