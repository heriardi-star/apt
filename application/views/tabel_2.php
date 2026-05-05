<table align="center" width="90%" class="table-bordered">
                    <tr>
                        <td align="center"><b>Lembaga Akreditasi</b></th>
                        <td align="center"><b>Jenis Sertifikasi</b></th>
                        <td align="center"><b>Lingkup (PT/Fakultas/Unit)</b></th>
                        <td align="center"><b>Tingkat (Nasional/Internasional)</b></th>
                        <td align="center"><b>Masa Berlaku</b></th>
                    </tr>

                    <?php foreach($data as $row): ?>
                    <tr>
                        <td align="center"><?php echo $row->lembaga_akreditasi; ?></td>
                        <td align="center"><?php echo $row->jenis_sertifikasi; ?></td>
                        <td align="center"><?php echo $row->lingkup; ?></td>
                        <td align="center"><?php echo $row->tingkat; ?></td>
                        <td align="center"><?php echo $row->masa_belaku; ?></td>
                    </tr>
                    <?php endforeach ?>
                </table>