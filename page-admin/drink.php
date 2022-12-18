<?php
require_once('../utils.php');

$statementGetDrink = "SELECT * FROM bapnuoc";
$dataGetDrink = getAllData($statementGetDrink, 1); ?>


<h2 class="header-admin">QUẢN LÝ BẮP NƯỚC</h2>

<div class="info d-flex justify-content-end">
    <a class="btn-infomation box-shadow">Thêm thông tin</a>
</div>

<table class="table table-light table-hover">
    <thead class="thead-purple ">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Tên sản phẩm</th>
            <th scope="col">Giá</th>
            <th scope="col"></th>

        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($dataGetDrink as $value) :  ?>
            <tr>
                <th scope="col"><?php echo $value['maBapNuoc']; ?></th>
                <td><?php echo $value['tenSP']; ?></td>
                <td><?php echo $value['gia']; ?></td>
                <td>
                    <i class="fas fa-edit" id="<?php $value['maBapNuoc'] ?>"> </i>
                    <i class="fas fa-trash" id="<?php $value['maBapNuoc'] ?>"></i>
                </td>
            </tr>
        <?php endforeach; ?>

    </tbody>
</table>


<?php ?>