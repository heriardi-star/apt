<table align="center" width="90%" class="table-bordered">
                    <tr>
                        <td align="center"><b>Status/Peringkat</b></th>
                        <td align="center"><b>Profesi</b></th>
                        <td align="center"><b>Diploma</b></th>
                        <td align="center"><b>Sarjana</b></th>
                        <td align="center"><b>Magister</b></th>
                        <td align="center"><b>Doktor</b></th>
                    </tr>

                    <!--UNGGUL-->
                    <tr>
                        <td align="center">Unggul</td>
                        <td align="center">
                            <?php 
                            $koneksi=mysqli_connect("localhost","root","");
                            mysqli_select_db($koneksi,"apt");

                            $query=mysqli_query($koneksi,"select peringkat from prodi where peringkat='Unggul' and strata='Profesi'");                            
                            $jumlah=mysqli_num_rows($query);
                            echo $jumlah;
                            ?>
                        </td>
                        <td align="center">
                            <?php 
                            $koneksi=mysqli_connect("localhost","root","");
                            mysqli_select_db($koneksi,"apt");

                            $query=mysqli_query($koneksi,"select peringkat from prodi where peringkat='Unggul' and strata='D3'");                            
                            $jumlah=mysqli_num_rows($query);
                            echo $jumlah;
                            ?>
                        </td>
                        <td align="center">
                            <?php 
                            $koneksi=mysqli_connect("localhost","root","");
                            mysqli_select_db($koneksi,"apt");

                            $query=mysqli_query($koneksi,"select peringkat from prodi where peringkat='Unggul' and strata='S1'");                            
                            $jumlah=mysqli_num_rows($query);
                            echo $jumlah;
                            ?>
                        </td>
                        <td align="center">
                            <?php 
                            $koneksi=mysqli_connect("localhost","root","");
                            mysqli_select_db($koneksi,"apt");

                            $query=mysqli_query($koneksi,"select peringkat from prodi where peringkat='Unggul' and strata='S2'");                            
                            $jumlah=mysqli_num_rows($query);
                            echo $jumlah;
                            ?>
                        </td>
                        <td align="center">
                            <?php 
                            $koneksi=mysqli_connect("localhost","root","");
                            mysqli_select_db($koneksi,"apt");

                            $query=mysqli_query($koneksi,"select peringkat from prodi where peringkat='Unggul' and strata='S3'");                            
                            $jumlah=mysqli_num_rows($query);
                            echo $jumlah;
                            ?>
                        </td>

                    </tr>


                    <!--BAIK SEKALI-->
                    <tr>
                        <td align="center">Baik Sekali</td>
                        <td align="center">
                            <?php 
                            $koneksi=mysqli_connect("localhost","root","");
                            mysqli_select_db($koneksi,"apt");

                            $query=mysqli_query($koneksi,"select peringkat from prodi where peringkat='Baik Sekali' and strata='Profesi'");                            
                            $jumlah=mysqli_num_rows($query);
                            echo $jumlah;
                            ?>
                        </td>
                        <td align="center">
                            <?php 
                            $koneksi=mysqli_connect("localhost","root","");
                            mysqli_select_db($koneksi,"apt");

                            $query=mysqli_query($koneksi,"select peringkat from prodi where peringkat='Baik Sekali' and strata='D3'");                            
                            $jumlah=mysqli_num_rows($query);
                            echo $jumlah;
                            ?>
                        </td>
                        <td align="center">
                            <?php 
                            $koneksi=mysqli_connect("localhost","root","");
                            mysqli_select_db($koneksi,"apt");

                            $query=mysqli_query($koneksi,"select peringkat from prodi where peringkat='Baik Sekali' and strata='S1'");                            
                            $jumlah=mysqli_num_rows($query);
                            echo $jumlah;
                            ?>
                        </td>
                        <td align="center">
                            <?php 
                            $koneksi=mysqli_connect("localhost","root","");
                            mysqli_select_db($koneksi,"apt");

                            $query=mysqli_query($koneksi,"select peringkat from prodi where peringkat='Baik Sekali' and strata='S2'");                            
                            $jumlah=mysqli_num_rows($query);
                            echo $jumlah;
                            ?>
                        </td>
                        <td align="center">
                            <?php 
                            $koneksi=mysqli_connect("localhost","root","");
                            mysqli_select_db($koneksi,"apt");

                            $query=mysqli_query($koneksi,"select peringkat from prodi where peringkat='Baik Sekali' and strata='S3'");                            
                            $jumlah=mysqli_num_rows($query);
                            echo $jumlah;
                            ?>
                        </td>
                    </tr>

                    <!--BAIK-->
                    <tr>
                        <td align="center">Baik</td>
                        <td align="center">
                            <?php 
                            $koneksi=mysqli_connect("localhost","root","");
                            mysqli_select_db($koneksi,"apt");

                            $query=mysqli_query($koneksi,"select peringkat from prodi where peringkat='Baik' and strata='Profesi'");                            
                            $jumlah=mysqli_num_rows($query);
                            echo $jumlah;
                            ?>
                        </td>
                        <td align="center">
                            <?php 
                            $koneksi=mysqli_connect("localhost","root","");
                            mysqli_select_db($koneksi,"apt");

                            $query=mysqli_query($koneksi,"select peringkat from prodi where peringkat='Baik' and strata='D3'");                            
                            $jumlah=mysqli_num_rows($query);
                            echo $jumlah;
                            ?>
                        </td>
                        <td align="center">
                            <?php 
                            $koneksi=mysqli_connect("localhost","root","");
                            mysqli_select_db($koneksi,"apt");

                            $query=mysqli_query($koneksi,"select peringkat from prodi where peringkat='Baik' and strata='S1'");                            
                            $jumlah=mysqli_num_rows($query);
                            echo $jumlah;
                            ?>
                        </td>
                        <td align="center">
                            <?php 
                            $koneksi=mysqli_connect("localhost","root","");
                            mysqli_select_db($koneksi,"apt");

                            $query=mysqli_query($koneksi,"select peringkat from prodi where peringkat='Baik' and strata='S2'");                            
                            $jumlah=mysqli_num_rows($query);
                            echo $jumlah;
                            ?>
                        </td>
                        <td align="center">
                            <?php 
                            $koneksi=mysqli_connect("localhost","root","");
                            mysqli_select_db($koneksi,"apt");

                            $query=mysqli_query($koneksi,"select peringkat from prodi where peringkat='Baik' and strata='S3'");                            
                            $jumlah=mysqli_num_rows($query);
                            echo $jumlah;
                            ?>
                        </td>
                    </tr>

                    <!--A-->
                    <tr>
                        <td align="center">A</td>
                        <td align="center">
                            <?php 
                            $koneksi=mysqli_connect("localhost","root","");
                            mysqli_select_db($koneksi,"apt");

                            $query=mysqli_query($koneksi,"select peringkat from prodi where peringkat='A' and strata='Profesi'");                            
                            $jumlah=mysqli_num_rows($query);
                            echo $jumlah;
                            ?>
                        </td>
                        <td align="center">
                            <?php 
                            $koneksi=mysqli_connect("localhost","root","");
                            mysqli_select_db($koneksi,"apt");

                            $query=mysqli_query($koneksi,"select peringkat from prodi where peringkat='A' and strata='D3'");                            
                            $jumlah=mysqli_num_rows($query);
                            echo $jumlah;
                            ?>
                        </td>
                        <td align="center">
                            <?php 
                            $koneksi=mysqli_connect("localhost","root","");
                            mysqli_select_db($koneksi,"apt");

                            $query=mysqli_query($koneksi,"select peringkat from prodi where peringkat='A' and strata='S1'");                            
                            $jumlah=mysqli_num_rows($query);
                            echo $jumlah;
                            ?>
                        </td>
                        <td align="center">
                            <?php 
                            $koneksi=mysqli_connect("localhost","root","");
                            mysqli_select_db($koneksi,"apt");

                            $query=mysqli_query($koneksi,"select peringkat from prodi where peringkat='A' and strata='S2'");                            
                            $jumlah=mysqli_num_rows($query);
                            echo $jumlah;
                            ?>
                        </td>
                        <td align="center">
                            <?php 
                            $koneksi=mysqli_connect("localhost","root","");
                            mysqli_select_db($koneksi,"apt");

                            $query=mysqli_query($koneksi,"select peringkat from prodi where peringkat='A' and strata='S3'");                            
                            $jumlah=mysqli_num_rows($query);
                            echo $jumlah;
                            ?>
                        </td>
                    </tr>

                    <!--B-->
                    <tr>
                        <td align="center">B</td>
                        <td align="center">
                            <?php 
                            $koneksi=mysqli_connect("localhost","root","");
                            mysqli_select_db($koneksi,"apt");

                            $query=mysqli_query($koneksi,"select peringkat from prodi where peringkat='B' and strata='Profesi'");                            
                            $jumlah=mysqli_num_rows($query);
                            echo $jumlah;
                            ?>
                        </td>
                        <td align="center">
                            <?php 
                            $koneksi=mysqli_connect("localhost","root","");
                            mysqli_select_db($koneksi,"apt");

                            $query=mysqli_query($koneksi,"select peringkat from prodi where peringkat='B' and strata='D3'");                            
                            $jumlah=mysqli_num_rows($query);
                            echo $jumlah;
                            ?>
                        </td>
                        <td align="center">
                            <?php 
                            $koneksi=mysqli_connect("localhost","root","");
                            mysqli_select_db($koneksi,"apt");

                            $query=mysqli_query($koneksi,"select peringkat from prodi where peringkat='B' and strata='S1'");                            
                            $jumlah=mysqli_num_rows($query);
                            echo $jumlah;
                            ?>
                        </td>
                        <td align="center">
                            <?php 
                            $koneksi=mysqli_connect("localhost","root","");
                            mysqli_select_db($koneksi,"apt");

                            $query=mysqli_query($koneksi,"select peringkat from prodi where peringkat='B' and strata='S2'");                            
                            $jumlah=mysqli_num_rows($query);
                            echo $jumlah;
                            ?>
                        </td>
                        <td align="center">
                            <?php 
                            $koneksi=mysqli_connect("localhost","root","");
                            mysqli_select_db($koneksi,"apt");

                            $query=mysqli_query($koneksi,"select peringkat from prodi where peringkat='B' and strata='S3'");                            
                            $jumlah=mysqli_num_rows($query);
                            echo $jumlah;
                            ?>
                        </td>
                    </tr>

                    <!--C-->
                    <tr>
                        <td align="center">C</td>
                        <td align="center">
                            <?php 
                            $koneksi=mysqli_connect("localhost","root","");
                            mysqli_select_db($koneksi,"apt");

                            $query=mysqli_query($koneksi,"select peringkat from prodi where peringkat='C' and strata='Profesi'");                            
                            $jumlah=mysqli_num_rows($query);
                            echo $jumlah;
                            ?>
                        </td>
                        <td align="center">
                            <?php 
                            $koneksi=mysqli_connect("localhost","root","");
                            mysqli_select_db($koneksi,"apt");

                            $query=mysqli_query($koneksi,"select peringkat from prodi where peringkat='C' and strata='D3'");                            
                            $jumlah=mysqli_num_rows($query);
                            echo $jumlah;
                            ?>
                        </td>
                        <td align="center">
                            <?php 
                            $koneksi=mysqli_connect("localhost","root","");
                            mysqli_select_db($koneksi,"apt");

                            $query=mysqli_query($koneksi,"select peringkat from prodi where peringkat='C' and strata='S1'");                            
                            $jumlah=mysqli_num_rows($query);
                            echo $jumlah;
                            ?>
                        </td>
                        <td align="center">
                            <?php 
                            $koneksi=mysqli_connect("localhost","root","");
                            mysqli_select_db($koneksi,"apt");

                            $query=mysqli_query($koneksi,"select peringkat from prodi where peringkat='C' and strata='S2'");                            
                            $jumlah=mysqli_num_rows($query);
                            echo $jumlah;
                            ?>
                        </td>
                        <td align="center">
                            <?php 
                            $koneksi=mysqli_connect("localhost","root","");
                            mysqli_select_db($koneksi,"apt");

                            $query=mysqli_query($koneksi,"select peringkat from prodi where peringkat='C' and strata='S3'");                            
                            $jumlah=mysqli_num_rows($query);
                            echo $jumlah;
                            ?>
                        </td>
                    </tr>

                    <!--Terakreditasi Sementara-->
                    <tr>
                        <td align="center">Terakreditasi Sementara</td>
                        <td align="center">
                            <?php 
                            $koneksi=mysqli_connect("localhost","root","");
                            mysqli_select_db($koneksi,"apt");

                            $query=mysqli_query($koneksi,"select peringkat from prodi where peringkat='Terakreditasi Sementara' and strata='Profesi'");                            
                            $jumlah=mysqli_num_rows($query);
                            echo $jumlah;
                            ?>
                        </td>
                        <td align="center">
                            <?php 
                            $koneksi=mysqli_connect("localhost","root","");
                            mysqli_select_db($koneksi,"apt");

                            $query=mysqli_query($koneksi,"select peringkat from prodi where peringkat='Terakreditasi Sementara' and strata='D3'");                            
                            $jumlah=mysqli_num_rows($query);
                            echo $jumlah;
                            ?>
                        </td>
                        <td align="center">
                            <?php 
                            $koneksi=mysqli_connect("localhost","root","");
                            mysqli_select_db($koneksi,"apt");

                            $query=mysqli_query($koneksi,"select peringkat from prodi where peringkat='Terakreditasi Sementara' and strata='S1'");                            
                            $jumlah=mysqli_num_rows($query);
                            echo $jumlah;
                            ?>
                        </td>
                        <td align="center">
                            <?php 
                            $koneksi=mysqli_connect("localhost","root","");
                            mysqli_select_db($koneksi,"apt");

                            $query=mysqli_query($koneksi,"select peringkat from prodi where peringkat='Terakreditasi Sementara' and strata='S2'");                            
                            $jumlah=mysqli_num_rows($query);
                            echo $jumlah;
                            ?>
                        </td>
                        <td align="center">
                            <?php 
                            $koneksi=mysqli_connect("localhost","root","");
                            mysqli_select_db($koneksi,"apt");

                            $query=mysqli_query($koneksi,"select peringkat from prodi where peringkat='Terakreditasi Sementara' and strata='S3'");                            
                            $jumlah=mysqli_num_rows($query);
                            echo $jumlah;
                            ?>
                        </td>
                    </tr>

                    <!--Terakreditasi Pertama-->
                    <tr>
                        <td align="center">Terakreditasi Pertama</td>
                        <td align="center">
                            <?php 
                            $koneksi=mysqli_connect("localhost","root","");
                            mysqli_select_db($koneksi,"apt");

                            $query=mysqli_query($koneksi,"select peringkat from prodi where peringkat='Terakreditasi Pertama' and strata='Profesi'");                            
                            $jumlah=mysqli_num_rows($query);
                            echo $jumlah;
                            ?>
                        </td>
                        <td align="center">
                            <?php 
                            $koneksi=mysqli_connect("localhost","root","");
                            mysqli_select_db($koneksi,"apt");

                            $query=mysqli_query($koneksi,"select peringkat from prodi where peringkat='Terakreditasi Pertama' and strata='D3'");                            
                            $jumlah=mysqli_num_rows($query);
                            echo $jumlah;
                            ?>
                        </td>
                        <td align="center">
                            <?php 
                            $koneksi=mysqli_connect("localhost","root","");
                            mysqli_select_db($koneksi,"apt");

                            $query=mysqli_query($koneksi,"select peringkat from prodi where peringkat='Terakreditasi Pertama' and strata='S1'");                            
                            $jumlah=mysqli_num_rows($query);
                            echo $jumlah;
                            ?>
                        </td>
                        <td align="center">
                            <?php 
                            $koneksi=mysqli_connect("localhost","root","");
                            mysqli_select_db($koneksi,"apt");

                            $query=mysqli_query($koneksi,"select peringkat from prodi where peringkat='Terakreditasi Pertama' and strata='S2'");                            
                            $jumlah=mysqli_num_rows($query);
                            echo $jumlah;
                            ?>
                        </td>
                        <td align="center">
                            <?php 
                            $koneksi=mysqli_connect("localhost","root","");
                            mysqli_select_db($koneksi,"apt");

                            $query=mysqli_query($koneksi,"select peringkat from prodi where peringkat='Terakreditasi Pertama' and strata='S3'");                            
                            $jumlah=mysqli_num_rows($query);
                            echo $jumlah;
                            ?>
                        </td>
                    </tr>

                    <!--Terkreditasi Internasional-->
                    <tr>
                        <td align="center">Terakreditasi Internasional</td>
                        <td align="center">
                            <?php 
                            $koneksi=mysqli_connect("localhost","root","");
                            mysqli_select_db($koneksi,"apt");

                            $query=mysqli_query($koneksi,"select peringkat from prodi where level='Internasional' and strata='Profesi'");                            
                            $jumlah=mysqli_num_rows($query);
                            echo $jumlah;
                            ?>
                        </td>
                        <td align="center">
                            <?php 
                            $koneksi=mysqli_connect("localhost","root","");
                            mysqli_select_db($koneksi,"apt");

                            $query=mysqli_query($koneksi,"select peringkat from prodi where level='Internasional' and strata='D3'");                            
                            $jumlah=mysqli_num_rows($query);
                            echo $jumlah;
                            ?>
                        </td>
                        <td align="center">
                            <?php 
                            $koneksi=mysqli_connect("localhost","root","");
                            mysqli_select_db($koneksi,"apt");

                            $query=mysqli_query($koneksi,"select peringkat from prodi where level='Internasional' and strata='S1'");                            
                            $jumlah=mysqli_num_rows($query);
                            echo $jumlah;
                            ?>
                        </td>
                        <td align="center">
                            <?php 
                            $koneksi=mysqli_connect("localhost","root","");
                            mysqli_select_db($koneksi,"apt");

                            $query=mysqli_query($koneksi,"select peringkat from prodi where level='Internasional' and strata='S2'");                            
                            $jumlah=mysqli_num_rows($query);
                            echo $jumlah;
                            ?>
                        </td>
                        <td align="center">
                            <?php 
                            $koneksi=mysqli_connect("localhost","root","");
                            mysqli_select_db($koneksi,"apt");

                            $query=mysqli_query($koneksi,"select peringkat from prodi where level='Internasional' and strata='S3'");                            
                            $jumlah=mysqli_num_rows($query);
                            echo $jumlah;
                            ?>
                        </td>
                    </tr>

                    <!--Belum Terakreditasi-->
                    <tr>
                        <td align="center">Belum Terakreditasi</td>
                        <td align="center">
                            <?php 
                            $koneksi=mysqli_connect("localhost","root","");
                            mysqli_select_db($koneksi,"apt");

                            $query=mysqli_query($koneksi,"select peringkat from prodi where peringkat='Belum Terakreditasi' and strata='Profesi'");                            
                            $jumlah=mysqli_num_rows($query);
                            echo $jumlah;
                            ?>
                        </td>
                        <td align="center">
                            <?php 
                            $koneksi=mysqli_connect("localhost","root","");
                            mysqli_select_db($koneksi,"apt");

                            $query=mysqli_query($koneksi,"select peringkat from prodi where peringkat='Belum Terakreditasi' and strata='D3'");                            
                            $jumlah=mysqli_num_rows($query);
                            echo $jumlah;
                            ?>
                        </td>
                        <td align="center">
                            <?php 
                            $koneksi=mysqli_connect("localhost","root","");
                            mysqli_select_db($koneksi,"apt");

                            $query=mysqli_query($koneksi,"select peringkat from prodi where peringkat='Belum Terakreditasi' and strata='S1'");                            
                            $jumlah=mysqli_num_rows($query);
                            echo $jumlah;
                            ?>
                        </td>
                        <td align="center">
                            <?php 
                            $koneksi=mysqli_connect("localhost","root","");
                            mysqli_select_db($koneksi,"apt");

                            $query=mysqli_query($koneksi,"select peringkat from prodi where peringkat='Belum Terakreditasi' and strata='S2'");                            
                            $jumlah=mysqli_num_rows($query);
                            echo $jumlah;
                            ?>
                        </td>
                        <td align="center">
                            <?php 
                            $koneksi=mysqli_connect("localhost","root","");
                            mysqli_select_db($koneksi,"apt");

                            $query=mysqli_query($koneksi,"select peringkat from prodi where peringkat='Belum Terakreditasi' and strata='S3'");                            
                            $jumlah=mysqli_num_rows($query);
                            echo $jumlah;
                            ?>
                        </td>
                    </tr>
                    

                    <!--<?//php foreach($apt as $row): ?>
                    <tr>
                        <td><?//php echo $row->fakultas; ?></td>
                        <td><?//php echo $row->prodi; ?></td>
                        <td><?//php echo $row->strata; ?></td>
                        <td><?//php echo $row->peringkat; ?></td>
                    </tr>
                    <?php //endforeach ?>-->
                </table>