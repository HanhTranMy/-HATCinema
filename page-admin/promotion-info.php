<?php
require_once('../utils.php');

$statementGetPromotion = "SELECT * FROM khuyenmai";
$dataGetPromotion = getAllData($statementGetPromotion, 1); ?>
print_r($dataGetPromotion);
<h2 class="header-admin">QUẢN LÝ KHUYẾN MÃI</h2>

<div class="info d-flex justify-content-end">
    <a class="btn-infomation box-shadow">Thêm thông tin</a>
</div>

<table class="table table-light table-hover">
    <thead class="thead-purple ">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Tên khuyến mãi</th>
            <th scope="col">Nội dung</th>
            <th scope="col">Ảnh</th>
            <th scope="col">Ngày bắt đầu</th>
            <th scope="col">Ngày kết thúc</th>
            <th scope="col"></th>

        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($dataGetPromotion as $value) :  ?>
            <tr>
                <th scope="col"><?php echo $value['maKM']; ?></th>
                <td><?php echo $value['chuDe']; ?></td>
                <td><?php echo $value['noiDung']; ?></td>
                <td><?php echo $value['anh']; ?></td>
                <td><?php echo $value['ngayBD']; ?></td>
                <td><?php echo $value['ngayKT']; ?></td>
                <td>
                    <i class="fas fa-edit" id="<?php $value['maKM'] ?>"> </i>
                    <i class="fas fa-trash" id="<?php $value['maKM'] ?>"></i>
                </td>
            </tr>
        <?php endforeach; ?>

    </tbody>
</table>


<?php ?>