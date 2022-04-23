<?php
require_once 'class_pasien.php';
require_once 'class_BMI.php';
require_once 'class_BMIPasien.php';
?>

<form method="POST">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form>
  <div class="form-group row">
    <label for="tanggal" class="col-4 col-form-label">Tanggal Periksa</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-calendar"></i>
          </div>
        </div> 
        <input id="tanggal" name="tanggal" placeholder="tanggal periksa" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="kode" class="col-4 col-form-label">Kode Pasien</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-code"></i>
          </div>
        </div> 
        <input id="kode" name="kode" placeholder="kode pasien" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Pasien</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="nama" name="nama" placeholder="nama Pasien" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Gender</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="gender" id="gender_0" type="radio" class="custom-control-input" value="P" aria-describedby="genderHelpBlock"> 
        <label for="gender_0" class="custom-control-label">Perempuan</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="gender" id="gender_1" type="radio" class="custom-control-input" value="L" aria-describedby="genderHelpBlock"> 
        <label for="gender_1" class="custom-control-label">Laki-laki</label>
      </div> 
    </div>
  </div>
  <div class="form-group row">
    <label for="berat" class="col-4 col-form-label">Berat (kg)</label> 
    <div class="col-8">
      <input id="berat" name="berat" placeholder="berat badan" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="tinggi" class="col-4 col-form-label">Tinggi (cm)</label> 
    <div class="col-8">
      <input id="tinggi" name="tinggi" placeholder="tinggi badan" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

<?php
$pasien1 = new Pasien();
$pasien1->kode = $_POST['kode'];
$pasien1->nama = $_POST['nama'];
$pasien1->gender = $_POST['gender'];
$pasien1->tanggal = $_POST['tanggal'];

$bmi1 = new BMI($_POST['berat'], $_POST['tinggi']);
$bmipasien1 = new BMIPasien($bmi1, $pasien1);
$ar_bmi = [$bmipasien1];
?>

<table class="table">
    <thead>
        <tr>
            <th>NO</th>
            <th>Tanggal Periksa</th>
            <th>Kode Pasien</th>
            <th>Nama Pasien</th>
            <th>Gender</th>
            <th>Berat(kg)</th>
            <th>Tinggi(cm)</th>
            <th>Nilai BMI</th>
            <th>Status BMI</th>
        </tr>
    </thead>

    <?php $nomor = 1;
          foreach($ar_bmi as $objek){
    ?>  
        <tr>
            <td><?= $nomor;?></td>
            <td><?= $objek->pasien->tanggal; ?></td>
            <td><?= $objek->pasien->kode; ?></td>
            <td><?= $objek->pasien->nama; ?></td>
            <td><?= $objek->pasien->gender; ?></td>
            <td><?= $objek->bmi->berat; ?></td>
            <td><?= $objek->bmi->tinggi; ?></td>
            <td><?= $objek->bmi->nilaiBMI(); ?></td>
            <td><?= $objek->bmi->statusBMI(); ?></td>
        </tr>        
    <?php
        $nomor++;
        }
    ?>
    </tbody>
</table>
<?php
include_once'bawah.php';
?>
