<?= $this->extend('layouts/default') ?>
<?= $this->section('content') ?>
<?php
$alertType = "";
if($type == 'success'){
    $alertType = "alert alert-success";
}else {
    $alertType = "alert alert-danger";
}
?>
<div class="<?php echo $alertType ?>">
    <?php echo $message; ?>
    <a href="<?php echo $url ?>" class="btn btn-primary">Kembali</a>
</div>
<?= $this->endSection() ?>  