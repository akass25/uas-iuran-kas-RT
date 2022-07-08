<?= $this->extend('partials/main') ?>

<?= $this->section('content') ?>
    <?= $this->include('parts/modals')?>
   <center> <h4> SELAMAT DATANG DI HALAMAN UTAMA<br>APLIKASI IURAN KAS RT
        </h4></center>
        <br>
    <div class="row">
      
        <div class="col-lg-6 col-6">
         
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?= $warga ?></h3>

                <p>Data Warga</p>
              </div>
              <div class="icon">
              <i class="fas fa-chalkboard-teacher"></i>
              </div>
              <a href="<?= route_to('warga') ?>" class="small-box-footer">Lihat Data <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
         
          <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                <h3><?= $iuran ?></h3>

                <p>Iuran Kas</p>
              </div>
              <div class="icon">
                <i class="fas fa-cash-register"></i>
              </div>
              <a href="<?= route_to('iuran') ?>" class="small-box-footer">Lihat Data <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          
        <!-- /.col -->
    </div>
<!-- /.row -->

<?= $this->endSection() ?>


<?= $this->section('extra-js') ?>
<script>
$(document).ready(function () {

    $.ajaxSetup({
	    headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf_token_name"]').attr('content')
	    }
	});

});
</script>

<?= $this->endSection() ?>