<html>
<body>
    <h1 align="center">Aplikasi upload gambar</h1>
    <h2 align="center">data pdf</h2>
    <p align="center"><a href="input.php">upload pdf</a> | <a href"data_pdf.php">
<table width="600" border="1"align="center">
    <tr>
        <th>no</th>
        <th>pdf</th>
        <th>keterangan</th>
        <th>action</th>
    </tr>
    <?php
        include "koneksi.php";
        $no=1;
        $data =mysqli_query($kokensi,"select* from tb_pdf")";
        while ($baris = mysqli_fetch_array($data)) {
            
        ?>


    <tr>
        <td><?php echo $no++; ?></td>
        <td><pdf src="pdf/<?php echo $ baris['pdf'];?>"width="100"height="100"></td>
        <td><php echo $baris ['keterangan']; ?></td>
        <td>HAPUS</td>
    </tr>
     <?php } ?>       

</table>
<p align="center">&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>

