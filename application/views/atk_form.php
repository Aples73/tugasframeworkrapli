<!DOCTYPE html>
<html>

<head>
    <title>Form ATK</title>
</head>

<body>

    <h1>Form Alat Tulis Kantor</h1>

    <?php echo form_open('atk/save'); ?>
    <label for="name">Nama ATK:</label>
    <input type="text" name="name" required>

    <label for="quantity">Jumlah:</label>
    <input type="number" name="quantity" required>

    <label for="price">Harga:</label>
    <input type="number" name="price" required>

    <input type="submit" value="Simpan">
    <?php echo form_close(); ?>

    <a href="<?php echo site_url('atk'); ?>">Kembali ke Daftar ATK</a>

</body>

</html>