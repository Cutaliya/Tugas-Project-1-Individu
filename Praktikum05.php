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
            <h1>Class Account</h1>
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
                <h3 class="card-title">Praktikum 05</h3>

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
              <div class="container-fluid">
        <div class="row">
          <div class="col-12">
        <h1 class="h1 text-center">BANK MILIK KITA YANG LAIN NGONTRAK</h1>
        <?php
            class Account{
                public $nomor;
                protected $saldo;

                function __construct($nomor,$saldo){
                    $this->nomor = $nomor;
                    $this->saldo = $saldo;
                }
                public function deposit($uang){
                    $this->saldo = $this->saldo + $uang;
                }
                public function witdrawl($uang){
                    $this->saldo = $this->saldo - $uang;
                }
                public function cetak(){
                    echo 'Nomor Account : '.$this->nomor;
                    echo '<br>Saldonya : '.$this->saldo;
                }
                public function getSaldo(){
                    return $this->saldo;
                }
            }
            class AccountBank extends Account{
                public $customer;
                // static $biaya_admin = 6500;

                function __construct($nomor,$saldo,$pemilik){
                    parent::__construct($nomor,$saldo);
                    $this->pemilik = $pemilik;
                }
                public function transfer($pmlk_tujuan,$uang){
                    $pmlk_tujuan->deposit($uang);
                    $this->witdrawl($uang);
                    // $this->witdrawl(self::$biaya_admin);
                }
                public function cetak(){
                    parent::cetak();
                    echo '<br>Pemilik : '.$this->pemilik;
                }
            }
                $pmlk1 = new AccountBank("C001", 6000000, "Cut");
                $pmlk2 = new AccountBank("C002", 5350000, "Malika");
                $pmlk3 = new AccountBank("C003", 2500000, "Rachmah");
                
                // $ab->cetak();
                // echo '<hr>';
                // $bc->cetak();
                // echo '<br>ronaldo transfer uang ke rooney 1250000';
                
                // $ab->cetak();
                // echo '<hr>';
                // $bc->cetak();

                $ar_pmlk = [$pmlk1,$pmlk2,$pmlk3];
        ?>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th><th>No.Rekening</th><th>Pemilik</th><th>Saldo</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $nomor = 1;
                    foreach($ar_pmlk as $obj){
                ?>    
                    <tr>
                        <td><?= $nomor?></td>
                        <td><?=$obj->nomor?></td>
                        <td><?=$obj->pemilik?></td>
                        <td><?=$obj->getSaldo()?></td>
                    </tr>
                <?php
                    $nomor++;    
                    }
                ?>
            </tbody>
        </table>
            <?php
            $pmlk1->deposit(1000000);
            $pmlk1->transfer($pmlk3, 1500000);
            $pmlk1->transfer($pmlk2, 500000);
            $pmlk2->witdrawl(2500000);
            echo "<hr>Cut nabung 1.000.000";
            echo "<br>Cut transfer 1.500.000 ke Rachmah dan 500.000 ke Malika";
            echo "<br>Malika tarik uang 2.500.000";
            echo "<br>";
            ?>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th><th>No.Rekening</th><th>Customer</th><th>Saldo</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $nomor = 1;
                    foreach($ar_pmlk as $obj){
                ?>    
                    <tr>
                        <td><?= $nomor?></td>
                        <td><?=$obj->nomor?></td>
                        <td><?=$obj->pemilik?></td>
                        <td><?=$obj->getSaldo()?></td>
                    </tr>
                <?php
                    $nomor++;    
                    }
                ?>
                </div>
                </div>
            </tbody>
        </table>
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