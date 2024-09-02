CREATE TABLE tb_category (
      cat_id INT(11) NOT NULL AUTO_INCREMENT,
      cat_kategori VARCHAR(100) NOT NULL,
      cat_tanggal DATE DEFAULT NULL,
      PRIMARY KEY(cat_id),
      UNIQUE KEY(cat_kategori)
);

CREATE TABLE tb_produk (
      produk_id INT(11) NOT NULL AUTO_INCREMENT,
      produk_nama VARCHAR(20) NOT NULL,
      produk_harga INT(11) NOT NULL,
      produk_stok INT(11) NOT NULL,
      PRIMARY KEY(produk_id),
      UNIQUE KEY(produk_nama) 
)

CREATE TABLE tb_penjualanan (
      jual_id INT(11) NOT NULL AUTO_INCREMENT,
      jual_nama VARCHAR(100) NOT NULL,
      jual_jmlh VARCHAR(12) NOT NULL,
      jual_total VARCHAR(100) NOT NULL,
      jual_admin TEXT DEFAULT NULL,
      jual_tgl TEXT DEFAULT NULL,
      PRIMARY KEY(jual_id)
) 