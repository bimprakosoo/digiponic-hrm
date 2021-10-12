<?php echo form_open_multipart('pelamar/create'); ?>
<table>
    <tr>
        <td>NAMA</td>
        <td><?php echo form_input('nama'); ?></td>
    </tr>
    <tr>
        <td>provinsi</td>
        <td><?php echo form_input('provinsi'); ?></td>
    </tr>
    <tr>
        <td colspan="2">
            <?php echo form_submit('submit', 'Simpan'); ?>
    </tr>
</table>
<?php
echo form_close();
?>