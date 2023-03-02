<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form handling</title>
</head>
<body>
    <h1>Form Pendaftaran Mahasiswa</h1>
    <form action="belajar_post.php" method="post">
        <!-- tipe teks -->
        <label for="">Nama Mahasiswa : </label><br>
        <input type="text" name="nama"><br><br>
        <!-- tipe radio -->
        <label for="">Jenis Kelamin</label><br>
        <input type="radio" name="jenis_kelamin" value="Laki-laki">
            <label for="">Laki-laki</label>
        <input type="radio" name="jenis_kelamin" value="Perempuan">
            <label for="">Perempuan</label><br><br>

            <label for="">Hobi</label><br>
            <input type="checkbox" name="hobi" value="Masak" >
                <label for="">Masak</label><br>
            <input type="checkbox" name="hobi" value="Nyanyi" >
                <label for="">Nyanyi</label><br>
            <input type="checkbox" name="hobi" value="Berenang" >
                <label for="">Berenang</label><br><br>

            <label for="">NIM : </label><br>
            <input type="Number" name="nim"><br><br>
            <!-- select -->
            <label for="">Prodi : </label><br>
            <select name="prodi">
                <option value="Teknik Informatika">Teknik Informatika</option>
                <option value="Sistem Informasi">Sistem Informasi</option>
                <option value="Bisnis Digital">Bisnis Digital</option>
            </select><br><br>

            <button type="submit">Kirim</button>
            <button type="reset">Reset</button>
    </form> 
</body>
</html>