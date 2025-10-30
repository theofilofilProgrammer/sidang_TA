<!-- Bootstrap JS, Popper.js, jQuery (wajib untuk fitur Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" xintegrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" xintegrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" xintegrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6Q" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Javascript (JS) -->
    {{-- <script src="js/main.js"></script> --}}


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Script untuk Toggle Tema Gelap/Terang -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const themeToggle = document.getElementById('theme-toggle');
        const themeIcon = document.getElementById('theme-icon');

        // Cek preferensi tema dari sistem
        const prefersDarkScheme = window.matchMedia('(prefers-color-scheme: dark)');

        // Cek apakah ada preferensi tema yang tersimpan
        let currentTheme = localStorage.getItem('theme');

        // Jika tidak ada tema tersimpan, gunakan preferensi sistem
        if (!currentTheme) {
            currentTheme = prefersDarkScheme.matches ? 'dark' : 'light';
        }

        // Terapkan tema
        if (currentTheme === 'dark') {
            document.documentElement.setAttribute('data-theme', 'dark');
            if (themeIcon) {
                themeIcon.classList.replace('fa-moon', 'fa-sun');
            }
        } else {
            document.documentElement.setAttribute('data-theme', 'light');
            if (themeIcon) {
                themeIcon.classList.replace('fa-sun', 'fa-moon');
            }
        }

        // Fungsi untuk toggle tema
        function toggleTheme() {
            if (document.documentElement.getAttribute('data-theme') === 'dark') {
                document.documentElement.setAttribute('data-theme', 'light');
                localStorage.setItem('theme', 'light');
                themeIcon.classList.replace('fa-sun', 'fa-moon');
            } else {
                document.documentElement.setAttribute('data-theme', 'dark');
                localStorage.setItem('theme', 'dark');
                themeIcon.classList.replace('fa-moon', 'fa-sun');
            }
        }

        // Event listener untuk tombol toggle tema
        if (themeToggle) {
            themeToggle.addEventListener('click', toggleTheme);
        }

        // Event listener untuk perubahan preferensi sistem
        prefersDarkScheme.addEventListener('change', function(e) {
            // Hanya ubah tema jika pengguna belum memilih tema secara manual
            if (!localStorage.getItem('theme')) {
                if (e.matches) {
                    document.documentElement.setAttribute('data-theme', 'dark');
                    if (themeIcon) {
                        themeIcon.classList.replace('fa-moon', 'fa-sun');
                    }
                } else {
                    document.documentElement.setAttribute('data-theme', 'light');
                    if (themeIcon) {
                        themeIcon.classList.replace('fa-sun', 'fa-moon');
                    }
                }
            }
        });
    });


</script>

