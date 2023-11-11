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
