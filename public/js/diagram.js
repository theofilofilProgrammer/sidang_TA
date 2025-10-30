google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
    // Data untuk chart Statistik Data Dosen
    var dataDosen = google.visualization.arrayToDataTable([
        ['Jenis Kelamin', 'Persentase'],
        ['Pria', 60],
        ['Wanita', 40]
    ]);

    var optionsDosen = {
        title: 'STATISTIK DATA DOSEN',
        pieHole: 0.4, // Untuk membuat donat chart
        colors: ['#4285F4', '#FF4081'], // Warna biru dan magenta
        legend: {
            position: 'right',
            alignment: 'center',
            textStyle: {
                color: '#333',
                fontSize: 14
            }
        },
        chartArea: {
            left: '5%',
            top: '15%',
            width: '90%',
            height: '70%'
        },
        pieSliceText: 'percentage', // Menampilkan persentase di irisan
        tooltip: {
            text: 'percentage'
        }
    };

    // Gambar chart Statistik Data Dosen
    var chartDosen = new google.visualization.PieChart(document.getElementById('chart_div_dosen'));
    chartDosen.draw(dataDosen, optionsDosen);

    // Data dan opsi untuk chart lainnya (contoh: Statistik Data Mahasiswa)
    var dataMahasiswa = google.visualization.arrayToDataTable([
        ['Angkatan', 'Jumlah Mahasiswa'],
        ['2021', 150],
        ['2022', 180],
        ['2023', 200],
        ['2024', 220]
    ]);

    var optionsMahasiswa = {
        title: 'STATISTIK DATA MAHASISWA BERDASARKAN ANGKATAN',
        curveType: 'function',
        legend: { position: 'bottom' },
        colors: ['#33b5e5'],
        chartArea: {
            left: '10%',
            top: '15%',
            width: '80%',
            height: '70%'
        }
    };

    // Gambar chart Statistik Data Mahasiswa
    var chartMahasiswa = new google.visualization.LineChart(document.getElementById('chart_div_mahasiswa'));
    // chartMahasiswa.draw(dataMahasiswa, optionsMahasiswa); // Akan digambar saat dipilih


    // Fungsi untuk menggambar chart berdasarkan pilihan dropdown
    window.drawSelectedChart = function() {
        var selectedReport = document.getElementById('pilihanLaporan').value;
        document.getElementById('chart_div_dosen').style.display = 'none';
        document.getElementById('chart_div_mahasiswa').style.display = 'none';
        document.getElementById('chart_div_matkul').style.display = 'none';
        document.getElementById('chart_div_pengumuman').style.display = 'none';
        document.getElementById('chart_div_berita').style.display = 'none';
        document.getElementById('data_table_dosen').style.display = 'none';
        document.getElementById('data_table_mahasiswa').style.display = 'none';
        document.getElementById('data_table_matkul').style.display = 'none';
        document.getElementById('data_table_pengumuman').style.display = 'none';
        document.getElementById('data_table_berita').style.display = 'none';


        // Sembunyikan semua tombol export
        document.getElementById('export_csv_btn').style.display = 'none';
        document.getElementById('export_pdf_btn').style.display = 'none';


        if (selectedReport === 'Statistik Data Dosen') {
            document.getElementById('chart_div_dosen').style.display = 'block';
            document.getElementById('data_table_dosen').style.display = 'block';
            chartDosen.draw(dataDosen, optionsDosen);
            document.getElementById('export_csv_btn').style.display = 'inline-block';
            document.getElementById('export_pdf_btn').style.display = 'inline-block';
        } else if (selectedReport === 'Statistik Data Mahasiswa') {
            document.getElementById('chart_div_mahasiswa').style.display = 'block';
            document.getElementById('data_table_mahasiswa').style.display = 'block';
            chartMahasiswa.draw(dataMahasiswa, optionsMahasiswa);
            document.getElementById('export_csv_btn').style.display = 'inline-block';
            document.getElementById('export_pdf_btn').style.display = 'inline-block';
        } else if (selectedReport === 'Statistik Data Mata Kuliah') {
            document.getElementById('chart_div_matkul').style.display = 'block';
            document.getElementById('data_table_matkul').style.display = 'block';
            // Contoh data dan chart untuk Mata Kuliah (bisa disesuaikan)
            var dataMatkul = google.visualization.arrayToDataTable([
                ['Keterangan', 'Jumlah'],
                ['Wajib', 15],
                ['Pilihan', 5],
                ['Tidak Wajib', 2]
            ]);
            var optionsMatkul = {
                title: 'STATISTIK DATA MATA KULIAH',
                is3D: true,
                colors: ['#FF9800', '#4CAF50', '#F44336'],
                chartArea: {
                    left: '5%',
                    top: '15%',
                    width: '90%',
                    height: '70%'
                }
            };
            var chartMatkul = new google.visualization.PieChart(document.getElementById('chart_div_matkul'));
            chartMatkul.draw(dataMatkul, optionsMatkul);
            document.getElementById('export_csv_btn').style.display = 'inline-block';
            document.getElementById('export_pdf_btn').style.display = 'inline-block';
        } else if (selectedReport === 'Statistik Data Pengumuman') {
            document.getElementById('chart_div_pengumuman').style.display = 'block';
            document.getElementById('data_table_pengumuman').style.display = 'block';
            // Contoh data dan chart untuk Pengumuman (bisa disesuaikan)
            var dataPengumuman = google.visualization.arrayToDataTable([
                ['Bulan', 'Jumlah Pengumuman'],
                ['Jan', 5],
                ['Feb', 8],
                ['Mar', 12],
                ['Apr', 7]
            ]);
            var optionsPengumuman = {
                title: 'STATISTIK DATA PENGUMUMAN',
                hAxis: {title: 'Bulan'},
                vAxis: {title: 'Jumlah'},
                colors: ['#00BCD4'],
                chartArea: {
                    left: '10%',
                    top: '15%',
                    width: '80%',
                    height: '70%'
                }
            };
            var chartPengumuman = new google.visualization.ColumnChart(document.getElementById('chart_div_pengumuman'));
            chartPengumuman.draw(dataPengumuman, optionsPengumuman);
            document.getElementById('export_csv_btn').style.display = 'inline-block';
            document.getElementById('export_pdf_btn').style.display = 'inline-block';
        } else if (selectedReport === 'Statistik Data Berita') {
            document.getElementById('chart_div_berita').style.display = 'block';
            document.getElementById('data_table_berita').style.display = 'block';
            // Contoh data dan chart untuk Berita (bisa disesuaikan)
            var dataBerita = google.visualization.arrayToDataTable([
                ['Kategori', 'Jumlah Berita'],
                ['Akademik', 10],
                ['Kemahasiswaan', 7],
                ['Penelitian', 5],
                ['Umum', 8]
            ]);
            var optionsBerita = {
                title: 'STATISTIK DATA BERITA',
                isStacked: true,
                colors: ['#E91E63', '#9C27B0', '#673AB7', '#2196F3'],
                chartArea: {
                    left: '10%',
                    top: '15%',
                    width: '80%',
                    height: '70%'
                }
            };
            var chartBerita = new google.visualization.BarChart(document.getElementById('chart_div_berita'));
            chartBerita.draw(dataBerita, optionsBerita);
            document.getElementById('export_csv_btn').style.display = 'inline-block';
            document.getElementById('export_pdf_btn').style.display = 'inline-block';
        }
    }
}