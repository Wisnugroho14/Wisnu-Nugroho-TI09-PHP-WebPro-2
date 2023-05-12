<main id="main">


  <br>

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container">

      <div class="row">
        <div class="col-lg-6">
          <img src="assets/img/portfolio/logo-dieng.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0">
          <h3>Tentang</h3>
          <p>
            Dieng adalah tempat wisata yang berada di provinsi Jawa Tengah, lebih tepatnya berada di Kabupaten Wonosobo, Maka dari itu Website PESONADIENG memfasilitasi orang-orang yang ingin berkunjung ke dieng dengan harga murah dan terpercaya
          </p>
          <ul>
            <li><i class="bx bx-check-double"></i> Termasuk kedalam tempat wisata di Indonesia yang wajib dikunjungi</li>
            <li><i class="bx bx-check-double"></i> Salah satu dataran tinggi Terindah di Indonesia</li>
          </ul>
          <div class="row icon-boxes">
            <div class="col-md-6">
              <i class="bx bx-receipt"></i>
              <h4>Harga Murah dan Terjangkau</h4>
              <p>Hanya di Website PESONA DIENG memberikan harga Murah</p>
            </div>
            <div class="col-md-6 mt-4 mt-md-0">
              <i class="bx bx-cube-alt"></i>
              <h4>Terpecaya dan Terjamin</h4>
              <p>Sudah banyak yang Mereview Website PESONADIENG</p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End About Section -->

  <!-- ======= Services Section ======= -->
  <section id="services" class="services section-bg">
    <div class="container">

      <div class="section-title">
        <h2>Layanan</h2>
        <p>PESONADIENG akan menyediakan pelayanan terbaik</p>
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="icon-box">
            <i class="bi bi-briefcase"></i>
            <h4><a href="#">Menyediakan Peralatan</a></h4>
            <p>Kami menyediakan perlengkapan yang anda butuhkan</p>
          </div>
        </div>
        <div class="col-md-6 mt-4 mt-lg-0">
          <div class="icon-box">
            <i class="bi bi-card-checklist"></i>
            <h4><a href="#">Menyediakan Penginapan</a></h4>
            <p>Kami menyediakan penginapan yang super nyaman</p>
          </div>
        </div>
        <div class="col-md-6 mt-4">
          <div class="icon-box">
            <i class="bi bi-bar-chart"></i>
            <h4><a href="#">Menyediakan Restoran</a></h4>
            <p>Anda tidak perlu khawatir ketika anda lapar</p>
          </div>
        </div>
        <div class="col-md-6 mt-4">
          <div class="icon-box">
            <i class="bi bi-binoculars"></i>
            <h4><a href="#">Menyediakan Rental Mobil</a></h4>
            <p>Anda tak perlu ribet untuk masalah transportasi saat mengeksplor Dieng.</p>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Services Section -->

  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container">

      <div class="section-title">
        <h2>Paket Wisata</h2>
        <p>Contoh Paket Wisata yang ditawarkan </p>
      </div>

      <div class="row">
        <div class="col-lg-12">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-camping-ground">Camping Ground</li>
            <li data-filter=".filter-wisata-alam">Wisata Alam</li>
            <li data-filter=".filter-outbound">Outbound</li>
          </ul>
        </div>
      </div>

      <div class="row portfolio-container">

        <?php

        // Panggil data produk
        $new = new Produk();
        $data = $new->dataProdukCamping();

        // Jadikan data produk menjadi array
        foreach ($data as $produk) {
          echo "<div class='col-lg-4 col-md-6 portfolio-item filter-camping-ground wow fadeInUp'>";
          echo "<div class='portfolio-wrap'>";
          echo "<figure>";
          echo "<img src='assets/img/portfolio/$produk[gambar]' class='img-fluid' alt=''>";
          echo "<a href='assets/img/portfolio/$produk[gambar]' data-gallery='portfolioGallery' class='link-preview portfolio-lightbox' title='$produk[deskripsi]'><i class='bx bx-plus'></i></a>";
          echo "</figure>";
          echo "<div class='portfolio-info'>";
          echo "<h4><a href='#'>$produk[nama]</a></h4>";
          echo "<h4><a href='#'>Rp" . number_format($produk['harga_jual'], 0, ', ', '.') . "</a></h4>";

          // Panggil data kategori produk
          $new = new Kategori_produk();
          $data_kategori = $new->dataKategori_produkID1();

          // Jadikan data kategori produk menjadi array
          foreach ($data_kategori as $kategori) {
            echo "<p>$kategori[nama]</p>";
          }

          echo "</div>";
          echo "</div>";
          echo "</div>";
        }

        ?>

        <?php

        // Panggil data produk
        $new = new Produk();
        $data = $new->dataProdukWisata();

        // Jadikan data produk menjadi array
        foreach ($data as $produk) {
          echo "<div class='col-lg-4 col-md-6 portfolio-item filter-wisata-alam wow fadeInUp'>";
          echo "<div class='portfolio-wrap'>";
          echo "<figure>";
          echo "<img src='assets/img/portfolio/$produk[gambar]' class='img-fluid' alt=''>";
          echo "<a href='assets/img/portfolio/$produk[gambar]' data-gallery='portfolioGallery' class='link-preview portfolio-lightbox' title='$produk[deskripsi]'><i class='bx bx-plus'></i></a>";
          echo "</figure>";
          echo "<div class='portfolio-info'>";
          echo "<h4><a href='#'>$produk[nama]</a></h4>";
          echo "<h4><a href='#'>Rp" . number_format($produk['harga_jual'], 0, ', ', '.') . "</a></h4>";

          // Panggil data kategori produk
          $new = new Kategori_produk();
          $data_kategori = $new->dataKategori_produkID2();

          // Jadikan data kategori produk menjadi array
          foreach ($data_kategori as $kategori) {
            echo "<p>$kategori[nama]</p>";
          }

          echo "</div>";
          echo "</div>";
          echo "</div>";
        }

        ?>

        <?php

        // Panggil data produk
        $new = new Produk();
        $data = $new->dataProdukOutbound();

        // Jadikan data produk menjadi array
        foreach ($data as $produk) {
          echo "<div class='col-lg-4 col-md-6 portfolio-item filter-outbound wow fadeInUp'>";
          echo "<div class='portfolio-wrap'>";
          echo "<figure>";
          echo "<img src='assets/img/portfolio/$produk[gambar]' class='img-fluid' alt=''>";
          echo "<a href='assets/img/portfolio/$produk[gambar]' data-gallery='portfolioGallery' class='link-preview portfolio-lightbox' title='$produk[deskripsi]'><i class='bx bx-plus'></i></a>";
          echo "</figure>";
          echo "<div class='portfolio-info'>";
          echo "<h4><a href='#'>$produk[nama]</a></h4>";
          echo "<h4><a href='#'>Rp" . number_format($produk['harga_jual'], 0, ', ', '.') . "</a></h4>";

          // Panggil data kategori produk
          $new = new Kategori_produk();
          $data_kategori = $new->dataKategori_produkID3();

          // Jadikan data kategori produk menjadi array
          foreach ($data_kategori as $kategori) {
            echo "<p>$kategori[nama]</p>";
          }

          echo "</div>";
          echo "</div>";
          echo "</div>";
        }

        ?>




        <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
          <div class="portfolio-wrap">
            <figure>
              <img src="assets/img/portfolio/siulet-sikunir.jpg" class="img-fluid" alt="">
              <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="link-preview portfolio-lightbox" title="Preview"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
            </figure>

            <div class="portfolio-info">
              <?php
              // $data = $data[0];
              // echo "<h4><a href='#'>$data[nama]</a></h4>";
              ?>

              <p>Camping Ground</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
          <div class="portfolio-wrap">
            <figure>
              <img src="assets/img/portfolio/outbound-candi-arjuna.jpg" class="img-fluid" alt="">
              <a href="assets/img/portfolio/portfolio-2.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Preview"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
            </figure>

            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">Outbound Candi Arjuna</a></h4>
              <p>Outbound</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
          <div class="portfolio-wrap">
            <figure>
              <img src="assets/img/portfolio/dieng plateau.jpg" class="img-fluid" alt="">
              <a href="assets/img/portfolio/portfolio-3.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Preview"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
            </figure>

            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">Bukit Dieng Plateau</a></h4>
              <p>Camping Ground</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
          <div class="portfolio-wrap">
            <figure>
              <img src="assets/img/portfolio/4.-kebun-teh-tambi-dieng.jpg" class="img-fluid" alt="">
              <a href="assets/img/portfolio/portfolio-4.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Preview"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
            </figure>

            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">Kebun Teh Tambi</a></h4>
              <p>Wisata Alam</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
          <div class="portfolio-wrap">
            <figure>
              <img src="assets/img/portfolio/Dieng Candi Arjuna.jpg" class="img-fluid" alt="">
              <a href="assets/img/portfolio/portfolio-5.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Preview"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
            </figure>

            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">Dieng Serayu</a></h4>
              <p>Outbound</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
          <div class="portfolio-wrap">
            <figure>
              <img src="assets/img/portfolio/bukit-scooter.jpg" class="img-fluid" alt="">
              <a href="assets/img/portfolio/portfolio-6.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Preview"><i class="bx bx-plus"></i></a>
            </figure>

            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">Bukit Scooter Dieng</a></h4>
              <p>Camping Ground</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
          <div class="portfolio-wrap">
            <figure>
              <img src="assets/img/portfolio/Telaga_Warna_Dieng-2021_11_17-09_59_36_c337787a1e40c4ab5485e8051f92f2f9.jpg" class="img-fluid" alt="">
              <a href="assets/img/portfolio/portfolio-7.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Preview"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
            </figure>

            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">Telaga Warna</a></h4>
              <p>Wisata Alam</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp" data-wow-delay="0.1s">
          <div class="portfolio-wrap">
            <figure>
              <img src="assets/img/portfolio/Kawah SIkidang.jpg" class="img-fluid" alt="">
              <a href="assets/img/portfolio/portfolio-8.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Preview"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
            </figure>

            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">Kawah Sikidang</a></h4>
              <p>Wisata Alam</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.2s">
          <div class="portfolio-wrap">
            <figure>
              <img src="assets/img/portfolio/jembatan dieng.jpg" class="img-fluid" alt="">
              <a href="assets/img/portfolio/portfolio-9.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Preview"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
            </figure>

            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">Jembatan Merah Putih Dieng</a></h4>
              <p>Outbound</p>
            </div>
          </div>
        </div> -->

      </div>

    </div>
  </section><!-- End Portfolio Section -->

  <!-- ======= Testimonials Section ======= -->
  <section id="testimonials" class="testimonials section-bg">
    <div class="container">

      <div class="section-title">
        <h2>Testimoni</h2>
      </div>

      <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Luar biasa petualangan ekstrim namun menyenangkan. Dieng sangat indah. Pelayanannya Juara dan semua Tempat Wisata nya Terbaikk!!!
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
              <h3>Ten Hag</h3>
              <h4>Ceo &amp; Founder</h4>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                It's a nice place. The most interesting place from my travel destination to Dieng is the time to Sikunir Hill to hunt for the golden sunrise.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
              <h3>Sara Wilsson</h3>
              <h4>Ibu Rumah Tangga</h4>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Wonderfull Indonesia, MasyaAllah indah banget pemandangan alam nya alami banget pokoknya superr kerennn. Destinasi wisata di Pulau Jawa yang paling juara.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
              <h3>Jeha Anais</h3>
              <h4>Store Owner</h4>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Pemandangan nya asli indah banget, benar-benar menghipnotis mata. Hawa nya sejuk seperti air es, dan untuk wisata kesini harus hati-hati karena jalannya terjal.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
              <h3>Matt Brandon</h3>
              <h4>Freelancer</h4>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Biaya nya murah, cocok untuk liburan keluarga dan anak-anak. Ada Camp Grounnd dengan fasilitas toilet dan mushola juga ada beberapa penginapan yang murah.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
              <h3>John Larson</h3>
              <h4>Programmer</h4>
            </div>
          </div><!-- End testimonial item -->
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </section><!-- End Testimonials Section -->

  <!-- ======= Team Section ======= -->
  <section id="team" class="team">
    <div class="container">

      <div class="section-title">
        <h2>Team</h2>
      </div>

      <div class="row">
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="member">
            <img src="assets/img/team/rafli.jpeg" alt="">
            <h4>Rafli Suyaka</h4>
            <span>Direktur</span>
            <p>
              "Yesterday Is History, Tommorow Is Mystery"
            </p>
            <div class="social">
              <a href=""><i class="bi bi-twitter"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="member">
            <img src="assets/img/team/wisnu.jpeg" alt="">
            <h4>Wisnu Nugroho</h4>
            <span>Chief Executive Officer</span>
            <p>
              "Di hidup ini kita butuh orang lain kita butuh sesama, Tapi untuk kesuksesan dan keberhasilan diri kita sendiri jangan pernah mengandalkan orang lain"
            </p>
            <div class="social">
              <a href=""><i class="bi bi-twitter"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="member">
            <img src="assets/img/team/Cahyo.jpeg" alt="">
            <h4>Dwi Cahyo</h4>
            <span>Manager</span>
            <p>
              "Hidup ini memang sulit tapi harus kita hadapi, Kita yang memulai kita juga yang harus menyelesaikannya. Karena sejatinya masalah bukan untuk dihindari tapi dihadapi"
            </p>
            <div class="social">
              <a href=""><i class="bi bi-twitter"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Team Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact section-bg">
    <div class="container">

      <div class="section-title">
        <h2>Kontak</h2>
      </div>

      <div class="row mt-5 justify-content-center">

        <div class="col-lg-10">

          <div class="info-wrap">
            <div class="row">
              <div class="col-lg-4 info">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Jl. Akses UI <br>Jawa Barat, 16451</p>
              </div>

              <div class="col-lg-4 info mt-4 mt-lg-0">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>pesonadieng@gmail.com<br>diengasik@gmail.com</p>
              </div>

              <div class="col-lg-4 info mt-4 mt-lg-0">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>0896 3956 9432<br>0858 8904 1270</p>
              </div>
            </div>
          </div>

        </div>

      </div>

      <div class="row mt-5 justify-content-center">
        <div class="col-lg-10">
          <form action="pesan.php" method="post" role="form" class="">
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="date" name="tanggal" class="form-control" id="tanggal" placeholder="Tanggal" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="text" class="form-control" name="nama_pemesan" id="nama_pemesan" placeholder="Nama" required>
              </div>
            </div>
            <div class="row">
              <div class="form-group mt-3 col-md-6">
                <input type="text" class="form-control" name="alamat_pemesan" id="alamat_pemesan" placeholder="Alamat" required>
              </div>
              <div class="col-md-6 form-group mt-3">
                <input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="Nomor Handphone" required>
              </div>
            </div>
            <div class="row">
              <div class="form-group mt-3 col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
              </div>
              <div class="form-group mt-3 col-md-6">
                <input type="text" class="form-control" name="jumlah_pesanan" id="jumlah_pesanan" placeholder="Jumlah Pesanan" required>
              </div>
            </div>
            <div class="row">
              <div class="form-group mt-3 col-md-6">
                <textarea class="form-control" name="deskripsi" id="deskripsi" rows="5" placeholder="Deskripsi" required></textarea>
              </div>
              <div class="form-group mt-3 col-md-6">
              <select class="form-control" name="produk_id" id="produk_id" required>
              <option value="">Select Wisata</option>
              <?php
              $sql = "SELECT id, nama FROM produk";
              $stmt = $dbh->prepare($sql);
              $stmt->execute();
              while ($row = $stmt->fetch()) {
                echo "<option value='" . $row['id'] . "'>" . $row['nama'] . "</option>";
              }
              ?>
            </select>
              </div>
            </div>
            <div class="text-center"><input type="submit" name="proses" value="Pesan Sekarang!" class="btn btn-primary"></div>
          </form>
        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->