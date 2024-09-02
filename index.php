<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Blog | Toko Perhiasan</title>

      <link rel="icon" href="layouts/assets/img/favicon.ico" type="image/png">
      <link rel="stylesheet" href="layouts/assets/css/style.css">
</head>

<body>

      <aside>

            <header>
                  <img src="layouts/assets/img/logo.png" class="brand">
                  <div class="user">ZIRA'S JEWELRY</div>
            </header>

            <nav>
                  <ul>
                        <li>
                              <a href="index.php">
                                    <img class="icon" src="layouts/assets/img/diamond.png" alt=""> Dashboard
                              </a>
                        </li>
                        <li>
                              <a href="index.php?hal=kat_tampil">
                                    <img class="icon" src="layouts/assets/img/diamond.png" alt=""> Kategori
                              </a>
                        </li>
                        <li>
                              <a href="index.php?hal=produk_tampil">
                                    <img class="icon" src="layouts/assets/img/diamond.png" alt=""> Produk
                              </a>
                        </li>
                        <li>
                              <a href="index.php?hal=penjualanan_tampil">
                                    <img class="icon" src="layouts/assets/img/diamond.png" alt=""> Penjualanan
                              </a>
                        </li>
                  </ul>
            </nav>

      </aside>

      <main>
            <article>
                  <?php

                  require_once "vendor/autoload.php";
                  require_once "inc/Koneksi.php";

                  if (isset($_GET['hal'])) {
                        require $_GET['hal'] . ".php";
                  } else {
                        require "main.php";
                  }
                  ?>
            </article>

            <footer>
                  Copyright &copy; 2023. Designed by Fazira Syafitri.
            </footer>
      </main>

</body>

</html>