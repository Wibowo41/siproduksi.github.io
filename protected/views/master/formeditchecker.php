
<?php
if (isset($_GET['auth'])){
    
$idchecker = $this->base64_decrypt($_GET['auth'], $this->key());

$query= Yii::app()->db->createCommand("SELECT * FROM master_checker WHERE id_checker = '$idchecker'")->queryAll();

$array=array();
foreach($query as $row){
?>
<H5 style="color: grey;">Master / Checker</H5>
<div class="page-loader">
    <img src="images/loader.gif" style="position:absolute; margin:auto; top:0; left:0; right:0; bottom:0;" width="70" alt="Loading">
</div>
<form action="index.php?r=master/proseseditchecker" method="post">
<input type="hidden" name="auth" value="<?php echo $_GET['auth']; ?>">
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Basic form</h4>
                <div class="col-md-4">
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <label>Code Checker</label>
                            <input type="text" value="<?php echo $array[]=$row['barcode']; ?>" name="code" class="form-control" placeholder="Barcode" readonly="true">
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <label>Nama Checker</label>
                            <input type="text" value="<?php echo $array[]=$row['nama_checker']; ?>" name="nama" class="form-control" placeholder="Nama Checker">
                        </div>
                    </div>
                </div>
            
            <button class="btn btn-primary mr-2">Submit</button>
      </div>
    </div>
</div>
</form>
<?php }} else { ?>
<script type="text/javascript">
window.location = "index.php";
</script>
<?php } ?>


 

    