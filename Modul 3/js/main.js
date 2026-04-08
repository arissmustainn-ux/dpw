// 1. Ambil elemen canvas
const canvas = document.getElementById("canvas");
const ctx = canvas.getContext("2d");

// 2. Gambar persegi panjang merah
ctx.fillStyle = "red";
ctx.fillRect(20, 20, 150, 100);

// 3. Gambar lingkaran kuning
ctx.beginPath(); // Sangat penting untuk memulai path baru
ctx.arc(300, 80, 50, 0, 2 * Math.PI);
ctx.fillStyle = "yellow";
ctx.fill();
ctx.strokeStyle = "white";
ctx.lineWidth = 2; // Tambahkan sedikit ketebalan agar terlihat
ctx.stroke();

// 4. Gambar garis putih
ctx.beginPath(); 
ctx.moveTo(0, 200);
ctx.lineTo(400, 200);
ctx.strokeStyle = "white";
ctx.lineWidth = 3;
ctx.stroke();

// 5. Tulis teks
ctx.font = "20px Arial";
ctx.fillStyle = "white";
ctx.fillText("Hello Canvas!", 120, 250);

// 6. Gambar segitiga hijau
ctx.beginPath();
ctx.moveTo(200, 280);
ctx.lineTo(150, 370);
ctx.lineTo(250, 370);
ctx.closePath(); // Menutup segitiga kembali ke titik (200, 280)
ctx.fillStyle = "lime";
ctx.fill();