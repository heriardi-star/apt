<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APT UNNES 2026</title>
    <link rel="icon" type="image/x-icon" href="picture/unnes.png" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">

    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f7f6;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        .container {
            width: 90%;
            max-width: 1000px;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        .accordion-item {
            border-bottom: 1px solid #ddd;
        }
        .accordion-header {
            width: 100%;
            padding: 15px;
            text-align: left;
            background: #fff;
            border: none;
            outline: none;
            cursor: pointer;
            font-size: 18px;
            font-weight: bold;
            color: #444;
            transition: background 0.3s;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .accordion-header:hover {
            background: #f9f9f9;
        }
        .accordion-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out;
            background: #fafafa;
        }
        .content-inner {
            padding: 15px;
            color: #666;
            line-height: 1.6;
        }
        .accordion-header::after {
            content: '\002B'; /* Simbol Plus (+) */
            font-size: 20px;
        }
        .active .accordion-header::after {
            content: '\2212'; /* Simbol Minus (-) */
        }
        .active .accordion-content {
            max-height: 1000px; /* Sesuaikan jika konten lebih panjang */
        }
    </style>

</head>
<body>


<div class="container">
    <h1>Data Dukung APT UNNES 2026</h1>

    <div class="accordion-item" id="item1">
        <button class="accordion-header" onclick="toggleAccordion('item1')">Tabel 1. Akreditasi Program Studi</button>
        <div class="accordion-content">
            <div class="content-inner">
                <table align="center" width="90%" class="table-bordered">
                    <tr>
                        <th>Fakultas</th>
                        <th>Prodi</th>
                        <th>Jenjang</th>
                        <th>Peringkat</th>
                    </tr>
                    <?php foreach($apt as $row): ?>
                    <tr>
                        <td><?php echo $row->fakultas; ?></td>
                        <td><?php echo $row->prodi; ?></td>
                        <td><?php echo $row->strata; ?></td>
                        <td><?php echo $row->peringkat; ?></td>
                    </tr>
                    <?php endforeach ?>
                </table>
            </div>
        </div>
    </div>

    <div class="accordion-item" id="item2">
        <button class="accordion-header" onclick="toggleAccordion('item2')">Tabel 2. Sertifikasi Eksternal </button>
        <div class="accordion-content">
            <div class="content-inner">
                Kami memiliki sertifikasi internasional dari lembaga ternama seperti <strong>ABET</strong> atau <strong>AUN-QA</strong> untuk menjamin kualitas global.
            </div>
        </div>
    </div>

    <div class="accordion-item" id="item3">
        <button class="accordion-header" onclick="toggleAccordion('item3')">Tabel 3. Akreditasi Internasional Program Studi</button>
        <div class="accordion-content">
            <div class="content-inner">
                Didukung oleh tenaga pengajar profesional dengan kualifikasi Doktor (S3) dari universitas dalam dan luar negeri.
            </div>
        </div>
    </div>

    <div class="accordion-item" id="item4">
        <button class="accordion-header" onclick="toggleAccordion('item4')">Tabel II-1.A.1. Rasio Mahasiswa terhadap Dosen</button>
        <div class="accordion-content">
            <div class="content-inner">
                Mahasiswa kami aktif dalam berbagai kompetisi nasional maupun internasional serta organisasi kemahasiswaan yang dinamis.
            </div>
        </div>
    </div>

    <div class="accordion-item" id="item5">
        <button class="accordion-header" onclick="toggleAccordion('item5')">Tabel II-1.A.4. Kecukupan Jumlah Dosen/Tenaga Pendidik Tetap Perguruan Tinggi</button>
        <div class="accordion-content">
            <div class="content-inner">
                Tenaga Kependidikan (Tendik) yang handal dan responsif dalam memberikan pelayanan administrasi dan teknis terbaik.
            </div>
        </div>
    </div>

    <div class="accordion-item" id="item4">
        <button class="accordion-header" onclick="toggleAccordion('item4')">Tabel II-1.A.2. Kecukupan Jumlah Dosen/Tenaga Pendidik Tidak Tetap Perguruan Tinggi</button>
        <div class="accordion-content">
            <div class="content-inner">
                Mahasiswa kami aktif dalam berbagai kompetisi nasional maupun internasional serta organisasi kemahasiswaan yang dinamis.
            </div>
        </div>
    </div>

    <div class="accordion-item" id="item4">
        <button class="accordion-header" onclick="toggleAccordion('item4')">Tabel II-1.A.2. Kecukupan Jumlah Dosen/Tenaga Pendidik Tidak Tetap Perguruan Tinggi</button>
        <div class="accordion-content">
            <div class="content-inner">
                Mahasiswa kami aktif dalam berbagai kompetisi nasional maupun internasional serta organisasi kemahasiswaan yang dinamis.
            </div>
        </div>
    </div>

    <div class="accordion-item" id="item4">
        <button class="accordion-header" onclick="toggleAccordion('item4')">Tabel II-1.A.3. Jabatan Akademik Guru Besar Program Studi Jenjang Doktor</button>
        <div class="accordion-content">
            <div class="content-inner">
                Mahasiswa kami aktif dalam berbagai kompetisi nasional maupun internasional serta organisasi kemahasiswaan yang dinamis.
            </div>
        </div>
    </div>

    <div class="accordion-item" id="item4">
        <button class="accordion-header" onclick="toggleAccordion('item4')">Tabel II-1.C.1. Jabatan Akademik Dosen Tetap Perguruan Tinggi</button>
        <div class="accordion-content">
            <div class="content-inner">
                Mahasiswa kami aktif dalam berbagai kompetisi nasional maupun internasional serta organisasi kemahasiswaan yang dinamis.
            </div>
        </div>
    </div>

    <div class="accordion-item" id="item4">
        <button class="accordion-header" onclick="toggleAccordion('item4')">Tabel II-1.C.4. Trend penurunan lulusan Program Studi jenjang S1, D4, D3</button>
        <div class="accordion-content">
            <div class="content-inner">
                Mahasiswa kami aktif dalam berbagai kompetisi nasional maupun internasional serta organisasi kemahasiswaan yang dinamis.
            </div>
        </div>
    </div>

    <div class="accordion-item" id="item4">
        <button class="accordion-header" onclick="toggleAccordion('item4')">Tabel II-1.C.2. Rasio kelulusan tepat masa tempuh kurikulum pada program Sarjana/Sarjana Terapan</button>
        <div class="accordion-content">
            <div class="content-inner">
                Mahasiswa kami aktif dalam berbagai kompetisi nasional maupun internasional serta organisasi kemahasiswaan yang dinamis.
            </div>
        </div>
    </div>
    
    <div class="accordion-item" id="item4">
        <button class="accordion-header" onclick="toggleAccordion('item4')">Tabel II-1.C.5. Rasio kelulusan tepat masa tempuh kurikulum pada program Diploma Tiga</button>
        <div class="accordion-content">
            <div class="content-inner">
                Mahasiswa kami aktif dalam berbagai kompetisi nasional maupun internasional serta organisasi kemahasiswaan yang dinamis.
            </div>
        </div>
    </div>

    <div class="accordion-item" id="item4">
        <button class="accordion-header" onclick="toggleAccordion('item4')">Tabel II-1.C.3. Rasio kelulusan dalam dua kali masa tempuh kurikulum pada program Sarjana/Sarjana Terapan</button>
        <div class="accordion-content">
            <div class="content-inner">
                Mahasiswa kami aktif dalam berbagai kompetisi nasional maupun internasional serta organisasi kemahasiswaan yang dinamis.
            </div>
        </div>
    </div>
    
    <div class="accordion-item" id="item4">
        <button class="accordion-header" onclick="toggleAccordion('item4')">Tabel II-1.C.6. Rasio kelulusan dalam dua kali masa tempuh kurikulum pada program Diploma Tiga</button>
        <div class="accordion-content">
            <div class="content-inner">
                Mahasiswa kami aktif dalam berbagai kompetisi nasional maupun internasional serta organisasi kemahasiswaan yang dinamis.
            </div>
        </div>
    </div>

    <div class="accordion-item" id="item4">
        <button class="accordion-header" onclick="toggleAccordion('item4')">Tabel II-1.D.1. Kepuasan Pengguna Lulusan </button>
        <div class="accordion-content">
            <div class="content-inner">
                Mahasiswa kami aktif dalam berbagai kompetisi nasional maupun internasional serta organisasi kemahasiswaan yang dinamis.
            </div>
        </div>
    </div>

    <div class="accordion-item" id="item4">
        <button class="accordion-header" onclick="toggleAccordion('item4')">Tabel 2c. Tren penurunan mahasiswa baru pada jenjang S1, D4, D3</button>
        <div class="accordion-content">
            <div class="content-inner">
                Mahasiswa kami aktif dalam berbagai kompetisi nasional maupun internasional serta organisasi kemahasiswaan yang dinamis.
            </div>
        </div>
    </div>

    <div class="accordion-item" id="item4">
        <button class="accordion-header" onclick="toggleAccordion('item4')">Tabel II-1.D.2. Prestasi Akademik/Non Akademik Mahasiswa</button>
        <div class="accordion-content">
            <div class="content-inner">
                Mahasiswa kami aktif dalam berbagai kompetisi nasional maupun internasional serta organisasi kemahasiswaan yang dinamis.
            </div>
        </div>
    </div>

    <div class="accordion-item" id="item4">
        <button class="accordion-header" onclick="toggleAccordion('item4')">Tabel II-1.D.3. Waktu Tunggu Lulusan</button>
        <div class="accordion-content">
            <div class="content-inner">
                Mahasiswa kami aktif dalam berbagai kompetisi nasional maupun internasional serta organisasi kemahasiswaan yang dinamis.
            </div>
        </div>
    </div>

    <div class="accordion-item" id="item4">
        <button class="accordion-header" onclick="toggleAccordion('item4')">Tabel II-2.C.1. Produktivitas Penelitian Dosen Tetap </button>
        <div class="accordion-content">
            <div class="content-inner">
                Mahasiswa kami aktif dalam berbagai kompetisi nasional maupun internasional serta organisasi kemahasiswaan yang dinamis.
            </div>
        </div>
    </div>

    <div class="accordion-item" id="item4">
        <button class="accordion-header" onclick="toggleAccordion('item4')">Tabel II-2.C.2. Luaran Penelitian Dosen Tetap dalam bentuk publikasi artikel dalam 3 tahun saat TS </button>
        <div class="accordion-content">
            <div class="content-inner">
                Mahasiswa kami aktif dalam berbagai kompetisi nasional maupun internasional serta organisasi kemahasiswaan yang dinamis.
            </div>
        </div>
    </div>

    <div class="accordion-item" id="item4">
        <button class="accordion-header" onclick="toggleAccordion('item4')">Tabel II-2.D.1. Judul artikel karya ilmiah dosen tetap yang disitasi dalam 3 (tiga) tahun terakhir </button>
        <div class="accordion-content">
            <div class="content-inner">
                Mahasiswa kami aktif dalam berbagai kompetisi nasional maupun internasional serta organisasi kemahasiswaan yang dinamis.
            </div>
        </div>
    </div>

    <div class="accordion-item" id="item4">
        <button class="accordion-header" onclick="toggleAccordion('item4')">Tabel II-3.C.1. Produktivitas PkM Dosen Tetap </button>
        <div class="accordion-content">
            <div class="content-inner">
                Mahasiswa kami aktif dalam berbagai kompetisi nasional maupun internasional serta organisasi kemahasiswaan yang dinamis.
            </div>
        </div>
    </div>

    <div class="accordion-item" id="item4">
        <button class="accordion-header" onclick="toggleAccordion('item4')">Tabel 22. Tabel Karya Dosen Tetap yang terekognisi/diterapkan masyarakat </button>
        <div class="accordion-content">
            <div class="content-inner">
                Mahasiswa kami aktif dalam berbagai kompetisi nasional maupun internasional serta organisasi kemahasiswaan yang dinamis.
            </div>
        </div>
    </div>

    <div class="accordion-item" id="item4">
        <button class="accordion-header" onclick="toggleAccordion('item4')">Tabel 23. Kepesertaan mahasiswa yang eligible yang mengikuti MBKM saat TS</button>
        <div class="accordion-content">
            <div class="content-inner">
                Mahasiswa kami aktif dalam berbagai kompetisi nasional maupun internasional serta organisasi kemahasiswaan yang dinamis.
            </div>
        </div>
    </div>

    <div class="accordion-item" id="item4">
        <button class="accordion-header" onclick="toggleAccordion('item4')">Tabel 24. Pengukuran kepuasan stakeholder </button>
        <div class="accordion-content">
            <div class="content-inner">
                Mahasiswa kami aktif dalam berbagai kompetisi nasional maupun internasional serta organisasi kemahasiswaan yang dinamis.
            </div>
        </div>
    </div>

    <div class="accordion-item" id="item4">
        <button class="accordion-header" onclick="toggleAccordion('item4')">Tabel 25. Audit Eksternal Keuangan </button>
        <div class="accordion-content">
            <div class="content-inner">
                Mahasiswa kami aktif dalam berbagai kompetisi nasional maupun internasional serta organisasi kemahasiswaan yang dinamis.
            </div>
        </div>
    </div>

</div>

<script>
    function toggleAccordion(id) {
        const items = document.querySelectorAll('.accordion-item');
        const currentItem = document.getElementById(id);
        const isActive = currentItem.classList.contains('active');

        // Tutup semua item terlebih dahulu
        items.forEach(item => {
            item.classList.remove('active');
        });

        // Jika item yang diklik sebelumnya tidak aktif, maka buka
        if (!isActive) {
            currentItem.classList.add('active');
        }
    }
</script>

</body>
</html>