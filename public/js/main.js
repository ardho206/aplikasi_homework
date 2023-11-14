function mergeData() {
    const jurusans = getJurusans();
    const kelas = getKelas();

    // Merge the data objects
    const mergedData = {
        ...jurusans,
        ...kelas,
        updateURL: function() {
            jurusans.updateURL.call(this);
            kelas.updateURL.call(this);
        }
    };

    return mergedData;
}

function getJurusans() {
    return {
        search: '',
        allData: jurusanData,
        get filteredJurusan() {
            if (this.search === '') {
                return this.allData;
            }
            return this.allData.filter((jurusan) => {
                return (
                    (jurusan.jurusan + jurusan.kepanjangan)
                        .replace(/ /g, '')
                        .toLowerCase()
                        .includes(this.search.replace(/ /g, '').toLowerCase())
                );
            });
        },
        updateURL() {
            if (this.search === '') {
                history.pushState(null, '', window.location.pathname);
            } else {
                history.pushState(null, '', `?search=${this.search}`);
            }
        },
    };
}

function getKelas() {
    return {
        selectedKelas: '',
        allData: [],
        // async init() {
        //     // Fetch kelas data from the Laravel API endpoint
        //     const response = await fetch('/api/kelas');
        //     this.allData = await response.json();

        //     // Check if there is a selected kelas in the URL and set it
        //     const urlParams = new URLSearchParams(window.location.search);
        //     const kelasParam = urlParams.get('kelas');
        //     if (kelasParam) {
        //         this.selectedKelas = kelasParam;
        //     }
        // },
        get filteredKelas() {
            if (this.selectedKelas === '') {
                return this.allData;
            }
            return this.allData.filter((kelas) => {
                return kelas.kelas == this.selectedKelas;
            });
        },
        updateURL() {
            if (this.selectedKelas === '') {
                history.pushState(null, '', window.location.pathname);
            } else {
                history.pushState(null, '', `?kelas=${this.selectedKelas}`);
            }
        },
    };
}

const jurusanData = [
    {
        jurusan: 'RPL',
        kepanjangan: 'Rekayasa Perangkat Lunak',
        slug: 'rekayasa-perangkat-lunak',
        banner: 'banner_rpl.png'
    },
    {
        jurusan: 'TKJ',
        kepanjangan: 'Teknik Komputer dan Jaringan',
        slug: 'teknik-komputer-jaringan',
        banner: 'banner_tkj.png'
    },
    {
        jurusan: 'TKR',
        kepanjangan: 'Teknik Kendaraan Ringan',
        slug: 'teknik-kendaraan-ringan',
        banner: 'banner_tkr.png'
    },
    {
        jurusan: 'TBSM',
        kepanjangan: 'Teknik Bisnis Sepeda Motor',
        slug: 'teknik-sepeda-motor',
        banner: 'banner_tbsm.png'
    },
    {
        jurusan: 'TITL',
        kepanjangan: 'Teknik Instalasi Tenaga Listrik',
        slug: 'teknik-instalasi-tenaga-listrik',
        banner: 'banner_titl.png'
    },
    {
        jurusan: 'TP',
        kepanjangan: 'Teknik Pemesinan',
        slug: 'teknik-pemesinan',
        banner: 'banner_tp.png'
    }
];
