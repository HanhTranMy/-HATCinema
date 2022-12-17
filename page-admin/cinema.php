<?php
require_once('../utils.php');

$statementGetCinema = "SELECT maRap, diachi, COUNT(maPhong) AS 'sophong' FROM rap GROUP BY maRap";
$dataGetCinema = getAllData($statementGetCinema, 1); ?>
<h2 class="header-admin">QUẢN LÝ RẠP PHIM</h2>

<div class="info d-flex justify-content-end">
    <a class="btn-infomation box-shadow">Thêm thông tin</a>
</div>

<table class="table table-light table-hover">
    <thead class="thead-purple ">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Địa chỉ</th>
            <th scope="col">Số lượng phòng</th>
            <th scope="col"></th>

        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($dataGetCinema as $value) :  ?>
            <tr>
                <th scope="col"><?php echo $value['maRap']; ?></th>
                <td><?php echo $value['diachi']; ?></td>
                <td><?php echo $value['sophong']; ?></td>
                <td>
                    <i class="fas fa-edit" id="<?php $value['maRap'] ?>"></i>
                    <i class="fas fa-trash" id="<?php $value['maRap'] ?>"></i>
                </td>
            </tr>
        <?php endforeach; ?>

    </tbody>
</table>


<?php ?>