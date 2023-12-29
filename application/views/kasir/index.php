<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kue Serba 1000</title>
</head>

<body>

    <h1>Kue Serba 1000</h1>

    <ul>
        <li>Onde - <a href="<?php echo base_url('kasir/add_to_cart/1'); ?>">Tambah ke Keranjang</a></li>
        <li>Lapis legit - <a href="<?php echo base_url('kasir/add_to_cart/2'); ?>">Tambah ke Keranjang</a></li>
        <li>Putu Ayu - <a href="<?php echo base_url('kasir/add_to_cart/3'); ?>">Tambah ke Keranjang</a></li>
        <li>Bugis - <a href="<?php echo base_url('kasir/add_to_cart/4'); ?>">Tambah ke Keranjang</a></li>
        <li>Ongol-ongol - <a href="<?php echo base_url('kasir/add_to_cart/5'); ?>">Tambah ke Keranjang</a></li>

    </ul>


    <h2>Keranjang Belanja</h2>
    <?php if ($this->session->userdata('cart')) : ?>
        <ul>
            <?php foreach ($this->session->userdata('cart') as $index => $item) : ?>
                <li><?php echo $item['name']; ?> - <?php echo $item['quantity']; ?>
                    <a href="<?php echo base_url('kasir/remove_from_cart/' . $index); ?>">Hapus</a>
                </li>
            <?php endforeach; ?>
        </ul>

        <p>Total Harga: <?php echo array_sum(array_column($this->session->userdata('cart'), 'price')); ?></p>

        <p><a href="<?php echo base_url('kasir/checkout'); ?>">Checkout</a></p>
    <?php else : ?>
        <p>Keranjang belanja kosong.</p>
    <?php endif; ?>

</body>

</html>