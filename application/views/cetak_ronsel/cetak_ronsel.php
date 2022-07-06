
<link href="<?=base_url('assets/');?>css/sb-admin-2.min.css" rel="stylesheet">

<table class="table table-sm table-bordered table-striped text-center text-dark">
<?php foreach($data_ronsel as $data){ ?>

    <tr>
        <th>Keterangan</th>
        <th>Data</th>
    <tr>
        <td>Barcode</td>
        <td><img width='200' height='80' src="<?=base_url('assets/phpbarcode/barcode.php?text='.$data->kode);?>"/></td>
    </tr>
    <tr>
        <td>ID Sampel</td>
        <td><?=$data->kode;?></td>
    </tr>
    <tr>
        <td>Masakan</td>
        <td><?=$data->masakan;?></td>
    </tr>
    <tr>
        <td>Jam Masak</td>
        <td><?=date("H:i", strtotime($data->j_masuk));?></td>
    </tr>
    <tr>
        <td>Jam Turun</td>
        <td><?=date("H:i", strtotime($data->j_turun));?></td>
    </tr>
    <tr>
        <td>Pan</td>
        <td><?=$data->pan;?></td>
    </tr>
    <tr>
        <td>Palung</td>
        <td><?=$data->palung;?></td>
    </tr>
    <tr>
        <td>Tukang Masak</td>
        <td><?=ucfirst($data->opr);?></td>
    </tr>
    <tr>
        <td>Paraf Chemiker</td>
        <td>
            <p>Dicetak pada<br>
                <?= date('d-m-Y', strtotime($data->waktu)); ?><br>
                <?= date('H:i', strtotime($data->waktu)); ?>
            </p>
            <br>
            <br>
            <br>
            <br>
            (-----------------------)
        </td>
    </tr>
<?php } ?>
</table>

<script>
    window.print();
</script>