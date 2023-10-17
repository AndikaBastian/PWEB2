<div class="px-5 py-5">
    <h3>tambah data mahasiswa</h3>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<form action="proses_mhs.php?aksi=tambah" method="post">
    <table>
        <tr>
            <td>nim</td>
            <td><input type="text" name="nim"></td>
        </tr>    
        <tr>
            <td>nama</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>alamat</td>
            <td><textarea name="alamat" cols="30" rows="5"></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><button type="submit" class="btn btn-success" value="simpan">Simpan</button></td>
        </tr>
    </table>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</div>