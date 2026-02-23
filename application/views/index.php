<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
</head>
<body>
    <table width="90%" align="center">
        <tr>
            <td>
                <h2>Data Dukung APT UNNES 2026</h2>
                <h4><i>Sumber UNNES Feeder</i></h4>
            </td>
        <tr>
            <td bgcolor="#E1E1E1">
                <h6>Tabel 1. Akreditasi Program Studi</h6>
            </td>
        </tr>                  
            <td>
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
            </td>
        </tr>
        <tr>
            <td bgcolor="#E1E1E1"><h6>Tabel 2. Sertifikasi Eksternal </h6></td>
        </tr>
        <tr>
            <td bgcolor="#E1E1E1"><h6>Tabel 3. Akreditasi Internasional Program Studi</h6></td>
        </tr>
        <tr>
            <td bgcolor="#E1E1E1"><h6>Tabel II-1.A.1. Rasio Mahasiswa terhadap Dosen</h6></td>
        </tr>
        <tr>
            <td bgcolor="#E1E1E1"><h6>Tabel II-1.A.4. Kecukupan Jumlah Dosen/Tenaga Pendidik Tetap Perguruan Tinggi</h6></td>
        </tr>
        <tr>
            <td bgcolor="#E1E1E1"><h6>Tabel II-1.A.2. Kecukupan Jumlah Dosen/Tenaga Pendidik Tidak Tetap Perguruan Tinggi</h6></td>
        </tr>
        <tr>
            <td bgcolor="#E1E1E1"><h6>Tabel II-1.A.3. Jabatan Akademik Guru Besar Program Studi Jenjang Doktor</h6></td>
        </tr>
        <tr>
            <td bgcolor="#E1E1E1"><h6>Tabel II-1.C.1. Jabatan Akademik Dosen Tetap Perguruan Tinggi</h6></td>
        </tr>
        <tr>
            <td bgcolor="#E1E1E1"><h6>Tabel II-1.C.4. Trend penurunan lulusan Program Studi jenjang S1, D4, D3</h6></td>
        </tr>
        <tr>
            <td bgcolor="#E1E1E1"><h6>Tabel II-1.C.2. Rasio kelulusan tepat masa tempuh kurikulum pada program Sarjana/Sarjana Terapan</h6></td>
        </tr>
        <tr>
            <td bgcolor="#E1E1E1"><h6>Tabel II-1.C.5. Rasio kelulusan tepat masa tempuh kurikulum pada program Diploma Tiga</h6></td>
        </tr>
        <tr>
            <td bgcolor="#E1E1E1"><h6>Tabel II-1.C.3. Rasio kelulusan dalam dua kali masa tempuh kurikulum pada program Sarjana/Sarjana Terapan</h6></td>
        </tr>
        <tr>
            <td bgcolor="#E1E1E1"><h6>Tabel II-1.C.6. Rasio kelulusan dalam dua kali masa tempuh kurikulum pada program Diploma Tiga</h6></td>
        </tr>
        <tr>
            <td bgcolor="#E1E1E1"><h6>Tabel II-1.D.1. Kepuasan Pengguna Lulusan </h6></td>
        </tr>
        <tr>
            <td bgcolor="#E1E1E1"><h6>Tabel 2c. Tren penurunan mahasiswa baru pada jenjang S1, D4, D3</h6></td>
        </tr>
        <tr>
            <td bgcolor="#E1E1E1"><h6>Tabel II-1.D.2. Prestasi Akademik/Non Akademik Mahasiswa</h6></td>
        </tr>
        <tr>
            <td bgcolor="#E1E1E1"><h6>Tabel II-1.D.3. Waktu Tunggu Lulusan</h6></td>
        </tr>
        <tr>
            <td bgcolor="#E1E1E1"><h6>Tabel II-2.C.1. Produktivitas Penelitian Dosen Tetap </h6></td>
        </tr>
        <tr>
            <td bgcolor="#E1E1E1"><h6>Tabel II-2.C.2. Luaran Penelitian Dosen Tetap dalam bentuk publikasi artikel dalam 3 tahun saat TS </h6></td>
        </tr>
        <tr>
            <td bgcolor="#E1E1E1"><h6>Tabel II-2.D.1. Judul artikel karya ilmiah dosen tetap yang disitasi dalam 3 (tiga) tahun terakhir </h6></td>
        </tr>
        <tr>
            <td bgcolor="#E1E1E1"><h6>Tabel II-3.C.1. Produktivitas PkM Dosen Tetap </h6></td>
        </tr>
        <tr>
            <td bgcolor="#E1E1E1"><h6>Tabel 22. Tabel Karya Dosen Tetap yang terekognisi/diterapkan masyarakat </h6></td>
        </tr>
        <tr>
            <td bgcolor="#E1E1E1"><h6>Tabel 23. Kepesertaan mahasiswa yang eligible yang mengikuti MBKM saat TS </h6></td>
        </tr>
        <tr>
            <td bgcolor="#E1E1E1"><h6>Tabel 24. Pengukuran kepuasan stakeholder </h6></td>
        </tr>
        <tr>
            <td bgcolor="#E1E1E1"><h6>Tabel 25. Audit Eksternal Keuangan </h6></td>
        </tr>
    </table>
</body>
</html>