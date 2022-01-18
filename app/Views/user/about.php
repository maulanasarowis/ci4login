<?= $this->extend('templates/user/index'); ?>

<?= $this->section('content'); ?>
    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container pt-lg-5 mt-4">
            <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <h6 class="section-title text-start text-primary text-uppercase">
                Tentang Kami
                </h6>
                <h1 class="mb-4">
                Selamat datang di
                <span class="text-primary text-uppercase">Nginap</span>
                </h1>
                <p class="mb-4">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa
                consequatur vero labore itaque voluptatum ratione alias
                dignissimos aliquid molestiae delectus aspernatur distinctio
                provident consectetur placeat, aliquam, inventore fugiat maxime
                amet.
                </p>
                <div class="row g-3 pb-4">
                <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="border rounded p-1">
                    <div class="border rounded text-center p-4">
                        <i class="fa fa-hotel fa-2x text-primary mb-2"></i>
                        <h2 class="mb-1" data-toggle="counter-up">1234</h2>
                        <p class="mb-0">Kamar</p>
                    </div>
                    </div>
                </div>
                <div class="col-sm-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="border rounded p-1">
                    <div class="border rounded text-center p-4">
                        <i class="fa fa-users-cog fa-2x text-primary mb-2"></i>
                        <h2 class="mb-1" data-toggle="counter-up">1234</h2>
                        <p class="mb-0">Karyawan</p>
                    </div>
                    </div>
                </div>
                <div class="col-sm-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="border rounded p-1">
                    <div class="border rounded text-center p-4">
                        <i class="fa fa-users fa-2x text-primary mb-2"></i>
                        <h2 class="mb-1" data-toggle="counter-up">1234</h2>
                        <p class="mb-0">Pengguna</p>
                    </div>
                    </div>
                </div>
                </div>
                <a class="btn btn-primary py-3 px-5 mt-2" href=""
                >Jelajahi Lebih Banyak</a
                >
            </div>
            <div class="col-lg-6">
                <div class="row g-3">
                <div class="col-6 text-end">
                    <img
                    class="img-fluid rounded w-75 wow zoomIn"
                    data-wow-delay="0.1s"
                    src="<?= base_url(); ?>/img/about-1.jpg"
                    style="margin-top: 25%"
                    />
                </div>
                <div class="col-6 text-start">
                    <img
                    class="img-fluid rounded w-100 wow zoomIn"
                    data-wow-delay="0.3s"
                    src="<?= base_url(); ?>/img/about-2.jpg"
                    />
                </div>
                <div class="col-6 text-end">
                    <img
                    class="img-fluid rounded w-50 wow zoomIn"
                    data-wow-delay="0.5s"
                    src="<?= base_url(); ?>/img/about-3.jpg"
                    />
                </div>
                <div class="col-6 text-start">
                    <img
                    class="img-fluid rounded w-75 wow zoomIn"
                    data-wow-delay="0.7s"
                    src="<?= base_url(); ?>/img/about-4.jpg"
                    />
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <!-- About End -->
<?= $this->endSection(); ?> 