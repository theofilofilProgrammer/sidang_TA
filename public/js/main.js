// Script untuk menampilkan waktu saat ini
function updateTime() {
    const now = new Date();
    const hours = String(now.getHours()).padStart(2, '0');
    const minutes = String(now.getMinutes()).padStart(2, '0');
    const seconds = String(now.getSeconds()).padStart(2, '0');
    document.getElementById('currentTime').textContent = `${hours}:${minutes}:${seconds}`;
}

// Update waktu setiap detik
setInterval(updateTime, 1000);
// Panggil sekali saat halaman dimuat untuk menampilkan waktu awal
updateTime();
