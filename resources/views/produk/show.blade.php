<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk</title>
</head>
<body>
    <h1>Detail Produk</h1>
    <p>Nama Produk: {{ $product['nama_produk'] }}</p>
    <p>Kategori Produk: {{ $product['kategori_produk'] }}</p>
    <p>Harga Produk: Rp {{ number_format($product['harga_produk'], 0, ',', '.') }}</p>
    <p>Stok: {{ $product['stok'] }}</p>

    <a href="{{ url('/produk/create') }}">
        <button type="button">Kembali ke Form</button>
    </a>
</body>
</html>
