@extends('layouts.admin')

@section('title')
    Monitoring Laporan | Program Studi D3 Teknologi Informasi PSDKU Politeknik Negeri Pontianak Di Kabupaten Sukamara
@endsection

@section('content')
<div class="content-wrapper col-lg-10 px-0 mx-4">
    <section class="monitoring-laporan-section container col-lg-12 d-flex flex-column py-5 px-3 mx-0 my-5">
        <div class="welcome-section text-justify container px-0 mx-0 col-lg-12 mb-2">
            <h3 class="section-title my-0">LAPORAN DAN MONITORING</h3>
            <p class="current-time my-0" id="currentTime" style="font-size: 1.5rem;">12:00:00</p>
        </div>
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div class="form-group mb-0 d-flex col-10 px-0 align-items-center">
                <label for="pilihanLaporan" class="col-2 px-0 mr-0 mb-0">Pilihan Laporan :</label>
                <select class="form-control col-8 px-0 mb-0" id="pilihanLaporan">
                    <option value="dosen">Statistik Data Dosen</option>
                    <option value="mahasiswa_nim">Statistik Data Mahasiswa berdasarkan NIM</option>
                    {{-- <option value="mahasiswa">Statistik Data Mahasiswa</option> --}}
                    <option value="matkul">Statistik Data Mata Kuliah</option>
                    <option value="kegiatan">Statistik Data Kegiatan</option>
                    <option value="jaringan_kerjasama_jenis">Statistik Data Jaringan Kerjasama</option>
                    {{-- <option value="jaringan_kerjasama">Statistik Data Jaringan Kerjasama</option> --}}
                    <option value="saran_status">Statistik Status Saran</option>
                    {{-- <option value="saran">Statistik Data Saran</option> --}}
                    <option value="pengumuman">Statistik Data Pengumuman</option>
                    {{-- <option value="berita">Statistik Data Berita</option> --}}
                </select>
            </div>
            <button type="button" class="btn btn-primary generate-report-btn col-md-2 px-0" onclick="drawSelectedChart()">GENERATE LAPORAN</button>
        </div>

        <div class="report-display-area">
            <h4 class="report-title mb-4">TAMPILAN LAPORAN :</h4>
            <div class="chart-container">
                {{-- Div untuk menampilkan chart Google Charts --}}
                <div id="chart_div" style="height: 500px;"></div>
                <div id="chart_div_dosen" class="chart-placeholder chart-animation"></div>
                <div id="chart_div_mahasiswa_nim" class="chart-placeholder chart-animation" style="display: none;"></div>
                <div id="chart_div_matkul" class="chart-placeholder chart-animation" style="display: none;"></div>
                <div id="chart_div_kegiatan" class="chart-placeholder chart-animation" style="display: none;"></div>
                <div id="chart_div_jaringan_kerjasama_jenis" class="chart-placeholder chart-animation" style="display: none;"></div>
                <div id="chart_div_saran_status" class="chart-placeholder chart-animation" style="display: none;"></div>
                <div id="chart_div_pengumuman" class="chart-placeholder chart-animation" style="display: none;"></div>
            </div>

            <div class="table-responsive mt-5">
                {{-- Tabel untuk Statistik Data Dosen --}}
                <table class="table table-bordered table-striped data-table" id="data_table_dosen" style="display: none;">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Keterangan</th>
                            <th>Jumlah</th>
                            <th>Persentase</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($dosenStats as $jenis => $data)
                        <tr>
                            <td>{{ $loop->iteration }}.</td>
                            <td>{{ $jenis }}</td>
                            <td>{{ $data['jumlah'] }}</td>
                            <td>{{ $data['persentase'] }}%</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                {{-- Tabel untuk Statistik Data Mahasiswa --}}
                <table class="table table-bordered table-striped data-table" id="data_table_mahasiswa" style="display: none;">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Angkatan</th>
                            <th>Jumlah Mahasiswa</th>
                            <th>Persentase</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($mahasiswaStats as $angkatan => $data)
                        <tr>
                            <td>{{ $loop->iteration }}.</td>
                            <td>{{ $angkatan }}</td>
                            <td>{{ $data['jumlah'] }}</td>
                            <td>{{ $data['persentase'] }}%</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                {{-- Tabel untuk Statistik Data Mata Kuliah --}}
                <table class="table table-bordered table-striped data-table" id="data_table_matkul" style="display: none;">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Keterangan</th>
                            <th>Jumlah</th>
                            <th>Persentase</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($matkulStats as $keterangan => $data)
                        <tr>
                            <td>{{ $loop->iteration }}.</td>
                            <td>{{ $keterangan }}</td>
                            <td>{{ $data['jumlah'] }}</td>
                            <td>{{ $data['persentase'] }}%</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                {{-- Tabel untuk Statistik Data Kegiatan --}}
                <table class="table table-bordered table-striped data-table" id="data_table_kegiatan" style="display: none;">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Tahun</th>
                            <th>Jumlah Kegiatan</th>
                            <th>Persentase</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($kegiatanStats as $tahun => $data)
                        <tr>
                            <td>{{ $loop->iteration }}.</td>
                            <td>{{ $tahun }}</td>
                            <td>{{ $data['jumlah'] }}</td>
                            <td>{{ $data['persentase'] }}%</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                {{-- Tabel untuk Statistik Data Jaringan Kerjasama --}}
                <table class="table table-bordered table-striped data-table" id="data_table_jaringan_kerjasama" style="display: none;">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Tahun</th>
                            <th>Jumlah Jaringan Kerjasama</th>
                            <th>Persentase</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($jaringanKerjasamaStats as $tahun => $data)
                        <tr>
                            <td>{{ $loop->iteration }}.</td>
                            <td>{{ $tahun }}</td>
                            <td>{{ $data['jumlah'] }}</td>
                            <td>{{ $data['persentase'] }}%</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                {{-- Tabel untuk Statistik Jenis Kemitraan (PIE CHART) --}}
                <table class="table table-bordered table-striped data-table" id="data_table_jaringan_kerjasama_jenis" style="display: none;">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Jenis Kemitraan</th>
                            <th>Jumlah</th>
                            <th>Persentase</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($jaringanKerjasamaJenisStats as $jenis => $data)
                        <tr>
                            <td>{{ $loop->iteration }}.</td>
                            <td>{{ $jenis }}</td>
                            <td>{{ $data['jumlah'] }}</td>
                            <td>{{ $data['persentase'] }}%</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                {{-- Tabel untuk Statistik Mahasiswa berdasarkan NIM (PIE CHART) --}}
                <table class="table table-bordered table-striped data-table" id="data_table_mahasiswa_nim" style="display: none;">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Pola NIM</th>
                            <th>Jumlah Mahasiswa</th>
                            <th>Persentase</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($mahasiswaNimStats as $pattern => $data)
                        <tr>
                            <td>{{ $loop->iteration }}.</td>
                            <td>{{ $pattern }}</td>
                            <td>{{ $data['jumlah'] }}</td>
                            <td>{{ $data['persentase'] }}%</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                {{-- Tabel untuk Statistik Data Saran --}}
                <table class="table table-bordered table-striped data-table" id="data_table_saran" style="display: none;">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Tahun</th>
                            <th>Jumlah Saran</th>
                            <th>Persentase</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($saranStats as $tahun => $data)
                        <tr>
                            <td>{{ $loop->iteration }}.</td>
                            <td>{{ $tahun }}</td>
                            <td>{{ $data['jumlah'] }}</td>
                            <td>{{ $data['persentase'] }}%</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                {{-- Tabel untuk Statistik Status Saran (PIE CHART) --}}
                <table class="table table-bordered table-striped data-table" id="data_table_saran_status" style="display: none;">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Status</th>
                            <th>Jumlah Saran</th>
                            <th>Persentase</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($saranStatusStats as $status => $data)
                        <tr>
                            <td>{{ $loop->iteration }}.</td>
                            <td>{{ $status }}</td>
                            <td>{{ $data['jumlah'] }}</td>
                            <td>{{ $data['persentase'] }}%</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                {{-- Tabel untuk Statistik Data Pengumuman --}}
                <table class="table table-bordered table-striped data-table" id="data_table_pengumuman" style="display: none;">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Bulan</th>
                            <th>Jumlah Pengumuman</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pengumumanPerBulan as $i => $item)
                        <tr>
                            <td>{{ $i+1 }}.</td>
                            <td>{{ \Carbon\Carbon::create()->month($item->bulan)->format('F') }}</td>
                            <td>{{ $item->jumlah }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                {{-- Tabel untuk Statistik Data Berita --}}
                <table class="table table-bordered table-striped data-table" id="data_table_berita" style="display: none;">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Kategori</th>
                            <th>Jumlah Berita</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($beritaPerKategori as $i => $item)
                        <tr>
                            <td>{{ $i+1 }}.</td>
                            <td>{{ $item->kategori }}</td>
                            <td>{{ $item->jumlah }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="d-flex justify-content-center mt-4 export-buttons-container">
                <button type="button" class="btn btn-success mr-3 export-btn col-6 py-3" id="export_csv_btn" style="display: none;">
                    <i class="fas fa-file-csv mr-2"></i> EXPORT KE CSV
                </button>
                {{-- <button type="button" class="btn btn-danger export-btn col-6 py-3" id="export_pdf_btn" style="display: none;">
                    <i class="fas fa-file-pdf mr-2"></i> EXPORT KE PDF
                </button> --}}
            </div>
        </div>
    </section>
</div>
@endsection

@push('pagescript')
<!-- jsPDF Library for PDF export -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.28/jspdf.plugin.autotable.min.js"></script>
<script>
    // Pastikan Google Charts dimuat dengan benar
    if (typeof google !== 'undefined' && google.charts) {
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawCharts);
    } else {
        console.error('Google Charts tidak tersedia. Memuat ulang library...');
        // Coba muat ulang library jika tidak tersedia
        var script = document.createElement('script');
        script.type = 'text/javascript';
        script.src = 'https://www.gstatic.com/charts/loader.js';
        script.onload = function() {
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawCharts);
        };
        document.head.appendChild(script);
    }

    function drawCharts() {
        // Data for charts
        const dosenData = google.visualization.arrayToDataTable([
            ['Jenis Kelamin', 'Jumlah Dosen'],
            @foreach($dosenJenisKelamin as $dosen)
                ['{{ $dosen->jenis_kelamin }}', {{ $dosen->jumlah }}],
            @endforeach
        ]);

        const mahasiswaData = google.visualization.arrayToDataTable([
            ['Angkatan', 'Jumlah Mahasiswa'],
            @foreach($angkatanMahasiswa as $angkatan)
                ['{{ $angkatan->angkatan }}', {{ $angkatan->jumlah }}],
            @endforeach
        ]);

        const matkulData = google.visualization.arrayToDataTable([
            ['Keterangan', 'Jumlah'],
            @foreach($matkulStats as $keterangan => $data)
                ['{{ $keterangan }}', {{ $data['jumlah'] }}],
            @endforeach
        ]);

        const kegiatanData = google.visualization.arrayToDataTable([
            ['Tahun', 'Jumlah Kegiatan'],
            @foreach($kegiatanTahun as $item)
                ['{{ $item->tahun }}', {{ $item->jumlah }}],
            @endforeach
        ]);

        const jaringanKerjasamaData = google.visualization.arrayToDataTable([
            ['Tahun', 'Jumlah Jaringan Kerjasama'],
            @foreach($jaringanKerjasamaTahun as $item)
                ['{{ $item->tahun }}', {{ $item->jumlah }}],
            @endforeach
        ]);

        const saranData = google.visualization.arrayToDataTable([
            ['Tahun', 'Jumlah Saran'],
            @foreach($saranTahun as $item)
                ['{{ $item->tahun }}', {{ $item->jumlah }}],
            @endforeach
        ]);

        // NEW: Data for Jaringan Kerjasama Jenis (PIE CHART)
        const jaringanKerjasamaJenisData = google.visualization.arrayToDataTable([
            ['Jenis Kemitraan', 'Jumlah'],
            @foreach($jaringanKerjasamaJenis as $item)
                ['{{ $item->jenis_kemitraan }}', {{ $item->jumlah }}],
            @endforeach
        ]);

        // NEW: Data for Mahasiswa NIM Patterns (PIE CHART)
        const mahasiswaNimData = google.visualization.arrayToDataTable([
            ['Pola NIM', 'Jumlah Mahasiswa'],
            @foreach($mahasiswaNimPatterns as $item)
                ['{{ $item->nim_pattern }}', {{ $item->jumlah }}],
            @endforeach
        ]);

        // NEW: Data for Saran Status (PIE CHART)
        const saranStatusData = google.visualization.arrayToDataTable([
            ['Status', 'Jumlah Saran'],
            @foreach($saranStatus as $item)
                ['{{ $item->status }}', {{ $item->jumlah }}],
            @endforeach
        ]);

        const pengumumanData = google.visualization.arrayToDataTable([
            ['Bulan', 'Jumlah Pengumuman'],
            @foreach($pengumumanPerBulan as $item)
                ['{{ \Carbon\Carbon::create()->month($item->bulan)->format('M') }}', {{ $item->jumlah }}],
            @endforeach
        ]);

        const beritaData = google.visualization.arrayToDataTable([
            ['Kategori', 'Jumlah Berita'],
            @foreach($beritaPerKategori as $item)
                ['{{ $item->kategori }}', {{ $item->jumlah }}],
            @endforeach
        ]);

        // Options for charts
        const optionsDosen = {
            title: 'STATISTIK DATA DOSEN (BERDASARKAN JENIS KELAMIN)',
            titleTextStyle: {
                fontSize: 18,
                bold: true,
                color: '#333'
            },
            legend: {
                position: 'bottom',
                textStyle: { fontSize: 14 }
            },
            is3D: true,
            colors: ['#4285F4', '#EA4335'],
            pieSliceTextStyle: { fontSize: 14 },
            tooltip: { showColorCode: true, textStyle: { fontSize: 14 } },
            chartArea: { width: '90%', height: '80%' }
        };

        const optionsMahasiswa = {
            title: 'STATISTIK DATA MAHASISWA (BERDASARKAN ANGKATAN)',
            legend: { position: 'bottom' },
            hAxis: { title: 'Angkatan' },
            vAxis: { title: 'Jumlah Mahasiswa' },
            colors: ['#34A853']
        };

        const optionsMatkul = {
            title: 'STATISTIK DATA MATA KULIAH (BERDASARKAN SEMESTER)',
            titleTextStyle: {
                fontSize: 18,
                bold: true,
                color: '#333'
            },
            legend: {
                position: 'bottom',
                textStyle: { fontSize: 14 }
            },
            is3D: true,
            colors: ['#FBBC04', '#EA4335', '#34A853'],
            pieSliceTextStyle: { fontSize: 14 },
            tooltip: { showColorCode: true, textStyle: { fontSize: 14 } },
            chartArea: { width: '90%', height: '80%' }
        };

        const optionsKegiatan = {
            title: 'STATISTIK DATA KEGIATAN (BERDASARKAN TAHUN)',
            legend: { position: 'bottom' },
            hAxis: { title: 'Tahun' },
            vAxis: { title: 'Jumlah Kegiatan' },
            colors: ['#9C27B0']
        };

        const optionsJaringanKerjasama = {
            title: 'STATISTIK DATA JARINGAN KERJASAMA (BERDASARKAN TAHUN)',
            legend: { position: 'bottom' },
            hAxis: { title: 'Tahun' },
            vAxis: { title: 'Jumlah Jaringan Kerjasama' },
            colors: ['#FF9800']
        };

        const optionsSaran = {
            title: 'STATISTIK DATA SARAN (BERDASARKAN TAHUN)',
            legend: { position: 'bottom' },
            hAxis: { title: 'Tahun' },
            vAxis: { title: 'Jumlah Saran' },
            colors: ['#607D8B']
        };

        // NEW: Options for Jaringan Kerjasama Jenis (PIE CHART)
        const optionsJaringanKerjasamaJenis = {
            title: 'STATISTIK JENIS KEMITRAAN',
            titleTextStyle: {
                fontSize: 18,
                bold: true,
                color: '#333'
            },
            legend: {
                position: 'bottom',
                textStyle: { fontSize: 14 }
            },
            is3D: true,
            colors: ['#FF6B6B', '#4ECDC4', '#45B7D1', '#96CEB4', '#FFEAA7', '#DDA0DD', '#98D8C8'],
            pieSliceTextStyle: { fontSize: 14 },
            tooltip: { showColorCode: true, textStyle: { fontSize: 14 } },
            chartArea: { width: '90%', height: '80%' }
        };

        // NEW: Options for Mahasiswa NIM (PIE CHART)
        const optionsMahasiswaNim = {
            title: 'STATISTIK MAHASISWA BERDASARKAN POLA NIM',
            titleTextStyle: {
                fontSize: 18,
                bold: true,
                color: '#333'
            },
            legend: {
                position: 'bottom',
                textStyle: { fontSize: 14 }
            },
            is3D: true,
            colors: ['#FF9F43', '#10AC84', '#EE5A24', '#0984E3', '#6C5CE7', '#A29BFE'],
            pieSliceTextStyle: { fontSize: 14 },
            tooltip: { showColorCode: true, textStyle: { fontSize: 14 } },
            chartArea: { width: '90%', height: '80%' }
        };

        // NEW: Options for Saran Status (PIE CHART)
        const optionsSaranStatus = {
            title: 'STATISTIK STATUS SARAN',
            titleTextStyle: {
                fontSize: 18,
                bold: true,
                color: '#333'
            },
            legend: {
                position: 'bottom',
                textStyle: { fontSize: 14 }
            },
            is3D: true,
            colors: ['#00B894', '#FDCB6E', '#E17055', '#74B9FF', '#A29BFE'],
            pieSliceTextStyle: { fontSize: 14 },
            tooltip: { showColorCode: true, textStyle: { fontSize: 14 } },
            chartArea: { width: '90%', height: '80%' }
        };

        const optionsPengumuman = {
            title: 'STATISTIK DATA PENGUMUMAN',
            titleTextStyle: {
                fontSize: 18,
                bold: true,
                color: '#333'
            },
            hAxis: {
                title: 'Bulan',
                titleTextStyle: { fontSize: 14, italic: false, bold: true },
                textStyle: { fontSize: 12 }
            },
            vAxis: {
                title: 'Jumlah Pengumuman',
                titleTextStyle: { fontSize: 14, italic: false, bold: true },
                textStyle: { fontSize: 12 }
            },
            colors: ['#00BCD4'],
            animation: {
                startup: true,
                duration: 1000,
                easing: 'out'
            },
            chartArea: { width: '80%', height: '70%' },
            legend: { position: 'none' }
        };

        const optionsBerita = {
            title: 'STATISTIK DATA BERITA',
            hAxis: { title: 'Jumlah Berita' },
            vAxis: { title: 'Kategori' },
            colors: ['#795548']
        };

        // Fungsi untuk menggambar chart dengan pengecekan container dan animasi
        function drawChart(containerId, chartType, data, options) {
            const container = document.getElementById(containerId);
            if (container) {
                try {
                    // Tambahkan animasi saat chart digambar
                    if (!options.animation) {
                        options.animation = {
                            startup: true,
                            duration: 1000,
                            easing: 'out'
                        };
                    }

                    const chart = new google.visualization[chartType](container);
                    chart.draw(data, options);

                    // Tambahkan event listener untuk resize chart saat window resize
                    window.addEventListener('resize', function() {
                        chart.draw(data, options);
                    });

                    return chart;
                } catch (e) {
                    console.error(`Error saat menggambar chart ${containerId}:`, e);
                    return null;
                }
            } else {
                console.error(`Container ${containerId} tidak ditemukan`);
                return null;
            }
        }

        // Draw charts (initially hidden)
        const chartDosen = drawChart('chart_div_dosen', 'PieChart', dosenData, optionsDosen);

        // Matkul chart
        const chartMatkul = drawChart('chart_div_matkul', 'PieChart', matkulData, optionsMatkul);

        // Kegiatan chart
        const chartKegiatan = drawChart('chart_div_kegiatan', 'ColumnChart', kegiatanData, optionsKegiatan);

        // NEW: Jaringan Kerjasama Jenis Pie Chart
        const chartJaringanKerjasamaJenis = drawChart('chart_div_jaringan_kerjasama_jenis', 'PieChart', jaringanKerjasamaJenisData, optionsJaringanKerjasamaJenis);

        // NEW: Mahasiswa NIM Patterns Pie Chart
        const chartMahasiswaNim = drawChart('chart_div_mahasiswa_nim', 'PieChart', mahasiswaNimData, optionsMahasiswaNim);

        // NEW: Saran Status Pie Chart
        const chartSaranStatus = drawChart('chart_div_saran_status', 'PieChart', saranStatusData, optionsSaranStatus);

        // Pengumuman chart
        const chartPengumuman = drawChart('chart_div_pengumuman', 'ColumnChart', pengumumanData, optionsPengumuman);
    }

    // Tambahkan HTML untuk loading spinner
    const loadingSpinner = document.createElement('div');
    loadingSpinner.className = 'loading-spinner';
    loadingSpinner.innerHTML = '<div class="spinner"></div><p>Memuat data...</p>';
    document.querySelector('.chart-container').appendChild(loadingSpinner);

    window.drawSelectedChart = function() {
        const selectedReport = document.getElementById('pilihanLaporan').value;
        const charts = document.querySelectorAll('.chart-placeholder');
        const tables = document.querySelectorAll('.data-table');
        const spinner = document.querySelector('.loading-spinner');

        // Tampilkan loading spinner
        spinner.style.display = 'flex';

        // Hide all charts and tables
        charts.forEach(chart => {
            chart.style.display = 'none';
            chart.style.opacity = '0'; // Reset opacity for animation
        });
        tables.forEach(table => table.style.display = 'none');

        // Simulasi loading (bisa dihapus jika tidak diperlukan)
        setTimeout(() => {
            // Sembunyikan spinner setelah loading
            spinner.style.display = 'none';

            // Show the selected chart and table with animation
            const chartContainer = document.getElementById(`chart_div_${selectedReport}`);
            const dataTable = document.getElementById(`data_table_${selectedReport}`);

            if (chartContainer) {
                // Trigger reflow to restart animation
                chartContainer.classList.remove('chart-animation');
                void chartContainer.offsetWidth; // Force reflow
                chartContainer.classList.add('chart-animation');
                chartContainer.style.display = 'block';

                // Trigger resize event to ensure chart renders properly
                setTimeout(() => {
                    window.dispatchEvent(new Event('resize'));
                }, 100);
            } else {
                console.error(`Container chart_div_${selectedReport} tidak ditemukan`);
            }

            if (dataTable) {
                dataTable.style.display = 'block';
                // Add fade-in effect to table
                dataTable.style.opacity = '0';
                setTimeout(() => {
                    dataTable.style.transition = 'opacity 0.5s ease';
                    dataTable.style.opacity = '1';
                }, 100);
            } else {
                console.error(`Container data_table_${selectedReport} tidak ditemukan`);
            }

            // Tampilkan tombol export
            const exportButtons = document.querySelectorAll('.export-btn');
            exportButtons.forEach(btn => {
                btn.style.display = 'block';
                btn.style.opacity = '0';
                setTimeout(() => {
                    btn.style.transition = 'opacity 0.5s ease';
                    btn.style.opacity = '1';
                }, 300);
            });
        }, 800); // Simulasi loading selama 800ms
    }

    // Tampilkan tombol export dengan pengecekan keberadaan elemen
    const exportCsvBtn = document.getElementById('export_csv_btn');
    // const exportPdfBtn = document.getElementById('export_pdf_btn');

    if (exportCsvBtn) {
        exportCsvBtn.style.display = 'inline-block';

        // Tambahkan event listener untuk export CSV
        exportCsvBtn.addEventListener('click', function() {
            const selectedReport = document.getElementById('pilihanLaporan').value;
            const tableId = 'data_table_' + selectedReport;
            const table = document.getElementById(tableId);

            if (table) {
                exportTableToCSV(table, 'laporan_' + selectedReport + '.csv');
            } else {
                alert('Tidak ada data untuk diekspor ke CSV');
            }
        });
    } else {
        console.error('Tombol export CSV tidak ditemukan');
    }

    // if (exportPdfBtn) {
    //     exportPdfBtn.style.display = 'inline-block';

    //     // Tambahkan event listener untuk export PDF
    //     exportPdfBtn.addEventListener('click', function() {
    //         const selectedReport = document.getElementById('pilihanLaporan').value;
    //         const chartId = 'chart_div_' + selectedReport;
    //         const tableId = 'data_table_' + selectedReport;
    //         const chart = document.getElementById(chartId);
    //         const table = document.getElementById(tableId);

    //         if (chart && table) {
    //             exportToPDF(chart, table, 'laporan_' + selectedReport + '.pdf');
    //         } else {
    //             alert('Tidak ada data untuk diekspor ke PDF');
    //         }
    //     });
    // } else {
    //     console.error('Tombol export PDF tidak ditemukan');
    // }

    // Fungsi untuk export tabel ke CSV
    function exportTableToCSV(table, filename) {
        let csv = [];
        const rows = table.querySelectorAll('tr');

        for (let i = 0; i < rows.length; i++) {
            const row = [], cols = rows[i].querySelectorAll('td, th');

            for (let j = 0; j < cols.length; j++) {
                // Escape double quotes and add quotes around each field
                let data = cols[j].innerText.replace(/"/g, '""');
                row.push('"' + data + '"');
            }

            csv.push(row.join(','));
        }

        // Download CSV file
        downloadCSV(csv.join('\n'), filename);
    }

    function downloadCSV(csv, filename) {
        const csvFile = new Blob([csv], {type: 'text/csv'});
        const downloadLink = document.createElement('a');

        // Create a download link
        downloadLink.download = filename;
        downloadLink.href = window.URL.createObjectURL(csvFile);
        downloadLink.style.display = 'none';

        // Add to DOM, trigger click, and remove
        document.body.appendChild(downloadLink);
        downloadLink.click();
        document.body.removeChild(downloadLink);

        // Show success message
        showSuccessMessage('File CSV berhasil diunduh!');
    }

    // Function to show success message
    function showSuccessMessage(message) {
        // Create success message element
        const successMsg = document.createElement('div');
        successMsg.className = 'alert alert-success export-success-message';
        successMsg.innerHTML = `<i class="fas fa-check-circle mr-2"></i> ${message}`;
        successMsg.style.position = 'fixed';
        successMsg.style.top = '20px';
        successMsg.style.right = '20px';
        successMsg.style.zIndex = '9999';
        successMsg.style.opacity = '0';
        successMsg.style.transition = 'opacity 0.3s ease';

        // Add to DOM
        document.body.appendChild(successMsg);

        // Fade in
        setTimeout(() => {
            successMsg.style.opacity = '1';
        }, 10);

        // Remove after 3 seconds
        setTimeout(() => {
            successMsg.style.opacity = '0';
            setTimeout(() => {
                document.body.removeChild(successMsg);
            }, 300);
        }, 3000);
    }

    // Fungsi untuk export ke PDF
    // function exportToPDF(chart, table, filename) {
    //     // Check if jsPDF is available
    //     if (typeof jsPDF === 'undefined') {
    //         alert('Library jsPDF tidak tersedia. Mohon muat ulang halaman.');
    //         return;
    //     }

    //     // Notify user that PDF generation is in progress
    //     const loadingSpinner = document.querySelector('.loading-spinner');
    //     loadingSpinner.style.display = 'flex';
    //     loadingSpinner.querySelector('p').innerText = 'Membuat PDF...';

    //     setTimeout(() => {
    //         try {
    //             // Create a new jsPDF instance
    //             const { jsPDF } = window.jspdf;
    //             const doc = new jsPDF('p', 'mm', 'a4');

    //             // Add title
    //             const title = document.querySelector('.report-title').innerText;
    //             doc.setFontSize(16);
    //             doc.setFont('helvetica', 'bold');
    //             doc.text(title, 105, 20, { align: 'center' });

    //             // Add chart image
    //             const chartImg = chart.querySelector('svg');
    //             if (chartImg) {
    //                 const svgData = new XMLSerializer().serializeToString(chartImg);
    //                 const canvas = document.createElement('canvas');
    //                 const ctx = canvas.getContext('2d');
    //                 const img = new Image();
    //                 img.onload = function() {
    //                     canvas.width = img.width;
    //                     canvas.height = img.height;
    //                     ctx.drawImage(img, 0, 0);
    //                     const imgData = canvas.toDataURL('image/png');
    //                     doc.addImage(imgData, 'PNG', 20, 30, 170, 100);

    //                     // Add table data
    //                     doc.setFontSize(12);
    //                     doc.text('Data Tabel:', 20, 140);

    //                     // Convert table to PDF
    //                     doc.autoTable({
    //                         html: '#' + table.id,
    //                         startY: 145,
    //                         theme: 'grid',
    //                         headStyles: { fillColor: [75, 80, 151], textColor: 255 },
    //                         bodyStyles: { textColor: 50 },
    //                         alternateRowStyles: { fillColor: [245, 245, 245] }
    //                     });

    //                     // Save PDF
    //                      doc.save(filename);

    //                      // Hide loading spinner
    //                      loadingSpinner.style.display = 'none';

    //                      // Show success message
    //                      showSuccessMessage('File PDF berhasil diunduh!');
    //                 };
    //                 img.src = 'data:image/svg+xml;base64,' + btoa(unescape(encodeURIComponent(svgData)));
    //             } else {
    //                 // If SVG not available, just export the table
    //                 doc.setFontSize(12);
    //                 doc.text('Data Tabel:', 20, 40);

    //                 doc.autoTable({
    //                     html: '#' + table.id,
    //                     startY: 45,
    //                     theme: 'grid',
    //                     headStyles: { fillColor: [75, 80, 151], textColor: 255 },
    //                     bodyStyles: { textColor: 50 },
    //                     alternateRowStyles: { fillColor: [245, 245, 245] }
    //                 });

    //                 doc.save(filename);
    //                 loadingSpinner.style.display = 'none';

    //                 // Show success message
    //                 showSuccessMessage('File PDF berhasil diunduh!');
    //             }
    //         } catch (error) {
    //             console.error('Error generating PDF:', error);
    //             alert('Gagal membuat PDF. Pastikan library jsPDF tersedia.');
    //             loadingSpinner.style.display = 'none';
    //         }
    //     }, 500);
    // }

    // Redraw chart jika diperlukan
    if (typeof google !== 'undefined' && google.visualization) {
        try {
            // Trigger window resize untuk memastikan chart dirender dengan benar
            window.dispatchEvent(new Event('resize'));
        } catch (e) {
            console.error('Error saat mencoba redraw chart:', e);
        }
    }
</script>
@endpush
