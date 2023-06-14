<?php
$mysqli = new mysqli('localhost', 'root', '', 'data');
if ($mysqli->connect_errno != 0) {
    echo $mysqli->connect_error;
}

$json_data = file_get_contents("produk.json");
$products =  json_decode($json_data, JSON_OBJECT_AS_ARRAY);

$stmt = $mysqli->prepare("
        INSERT INTO produk(id_produk,nama_produk,harga,kategori,status)
        VALUES(?,?,?,?,?)
");

$stmt->bind_param("issss", $id_produk, $nama_produk, $harga, $kategori, $status);

$inserted_rows = 0;
foreach ($products as $product) {
    $id_produk = $product["id_produk"];
    $nama_produk = $product["nama_produk"];
    $harga = $product["harga"];
    $kategori = $product["kategori"];
    $status = $product["status"];

    $stmt->execute();
    $inserted_rows++;
}

if (count($product) == $inserted_rows) {
    echo "sukses";
} else {
    echo "error";
}
