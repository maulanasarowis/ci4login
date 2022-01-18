<?= $this->extend('templates/user/index'); ?>

<?= $this->section('content'); ?>
    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container pt-lg-4 mt-5">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title text-center text-primary text-uppercase mb-5">
            Pemesanan Kamar
            </h6>
            
        </div>
        <div class="row g-5">
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
                </div>
            </div>
            <div class="col-lg-6">
                <div class="wow fadeInUp" data-wow-delay="0.2s">
                    <form action="" method="POST">
                        
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input
                                    type="text"
                                    class="form-control"
                                    id="jenis_kamar"
                                    name="jenis_kamar"
                                    value="<?= $kamar['jenis_kamar'] ?>" disabled
                                    />
                                    <label for="jenis_kamar">Tipe Kamar</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input
                                    type="text"
                                    class="form-control"
                                    id="harga"
                                    name="harga"
                                    value="<?= $kamar['harga'] ?>K" disabled
                                    />
                                    <label for="harga">Harga per malam</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating date" data-target-input="nearest">
                                    <input
                                    type="text"
                                    class="form-control datepicker"
                                    
                                    data-provide="datepicker"
                                    name="checkin"
                                    />
                                    <label for="checkin">Check In</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating date" data-target-input="nearest">
                                    <input
                                    type="text"
                                    class="form-control datepicker"
                                    
                                    data-provide="datepicker"
                                    name="checkout"
                                    />
                                    <label for="checkout">Check Out</label>
                                </div>
                            </div>
                            <div class="col-12">
                                
                                <button type="submit" class="btn btn-primary text-capitalize text-light w-100" name="check">Check</button>
                            </div>
                            <small><a href="/">&laquo; kembali ke Home</a></small>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-muted">
                    <?php
                        if(isset($_POST["check"])){
                            $tgl1=$_POST['checkin'];
                            $tgl2=$_POST['checkout'];
                            $datetime1 = new DateTime($tgl1);
                            $datetime2 = new DateTime($tgl2);
                            $difference = $datetime2->diff($datetime1);
                            echo "Lama menginap : ". $difference->d ." Hari";
                        }
                    ?>
                </div>
            </div>
        </div>
        </div>
    </div>
    <!-- Service End -->
<?= $this->endSection(); ?> 