<?php
include_once 'atas.php';
include_once 'sidebar.php';
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Luas Persegi Panjang</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Layout</a></li>
              <li class="breadcrumb-item active">Fixed Layout</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Praktikum 04</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">

        <?php
        // memanggil file atau class_PersegiPanjang.php
        require_once 'class_PersegiPanjang.php';
        $persegipanjang1 = new PersegiPanjang(6, 4);
        $persegipanjang2 = new PersegiPanjang(2, 8);
        // menghitung luas
        echo "Luas Persegi Panjang I adalah = " .$persegipanjang1->getluas();
        echo "<br>Luas Persegi Panjang II adalah = " .$persegipanjang2->getluas();
        echo "<br>";
        // menghitung keliling 
        echo "<br> Keliling Persegi Panjang I adalah = " .$persegipanjang1->getKeliling();
        echo "<br> Keliling Persegi Panjang II adalah = " .$persegipanjang2->getKeliling(); 
        ?>
   

 </div>
</div>
</div>
              <!-- /.card-body -->
              
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php
include_once 'bawah.php';
?>
            