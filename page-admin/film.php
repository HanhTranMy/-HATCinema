<?php
require_once('../utils.php');

$statementGetFlim = "SELECT * FROM phim";
$dataGetFlim = getAllData($statementGetFlim, 1); ?>
<h2 class="header-admin">QUẢN LÝ PHIM</h2>

<div class="info d-flex justify-content-end">
    <a class="btn-infomation box-shadow">Thêm thông tin</a>
</div>

<table class="table table-light table-hover">
    <thead class="thead-purple ">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Tên phim</th>
            <th scope="col">Đạo diễn</th>
            <th scope="col">Diễn viên</th>
            <th scope="col">Thể loại</th>
            <th scope="col">Quốc gia</th>
            <th scope="col">Phiên bản</th>
            <th scope="col">Thời lượng</th>
            <th scope="col">Giá</th>
            <th scope="col">Hãng phim</th>
            <th scope="col">Ngày bắt đầu</th>
            <th scope="col">Ngày Kết thúc</th>
            <th scope="col">Ảnh</th>
            <th scope="col"></th>

        </tr>
    </thead>
    <tbody>
        <?php foreach ($dataGetFlim as $value) :  ?>
            <tr>
                <th scope="col"><?php echo $value['maPhim'] ?></th>
                <td><?php echo $value['tenPhim'] ?></td>
                <td><?php echo $value['daoDien'] ?></td>
                <td><?php echo $value['dienVien'] ?></td>
                <td><?php echo $value['theLoai'] ?></td>
                <td><?php echo $value['quocGia'] ?></td>
                <td><?php echo $value['phienBan'] ?></td>
                <td><?php echo $value['thoiLuong'] ?></td>
                <td><?php echo $value['gia'] ?></td>
                <td><?php echo $value['hangPhim'] ?></td>
                <td><?php echo $value['ngayBD'] ?></td>
                <td><?php echo $value['ngayKT'] ?></td>
                <td><?php echo $value['anh'] ?></td>
                <td><i class="fas fa-edit" id="<?php $value['maPhim'] ?>"></i>
                <i class="fas fa-trash" id="<?php $value['maPhim'] ?>"></i></td>

            </tr>
        <?php endforeach; ?>

    </tbody>
</table>


<?php ?>