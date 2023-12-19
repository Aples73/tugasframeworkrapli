<!DOCTYPE html>
<html>

<head>
    <title>Daftar ATK</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css'); ?>">
</head>

<body>

    <h1>Daftar Alat Tulis Kantor</h1>

    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Jumlah</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($atk_items as $atk) : ?>
                <tr>
                    <td><?php echo $atk['name']; ?></td>
                    <td><?php echo $atk['quantity']; ?></td>
                    <td><?php echo $atk['price']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <a href="<?php echo site_url('atk/add'); ?>">Tambah ATK</a>

</body>

</html>