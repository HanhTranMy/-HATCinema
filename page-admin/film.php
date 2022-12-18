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
                <td><i class="fas fa-edit" data-toggle="modal" data-target="#addDataAdmin"></i>
                <i class="fas fa-trash maPhim phim" id="<?php echo $value['maPhim'] ?>"></i></td>

            </tr>
        <?php endforeach; ?>

    </tbody>
</table>

    <div class="box-model" >
        <div class="modal fade" id="addDataAdmin" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header" >
                <h4 class="modal-title" id="addDataAdmin" style="text-align: center; ">Update dữ liệu</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </div>
            <div class="modal-body"> 
                <form method="post" action="">
                    <div class="form-group">
                    <label for="tenPhim" class="col-form-label">Tên Phim</label>
                    <input name="tenPhim" id="tenPhim" class="form-control" type="text" placeholder="Tên Phim">
                    </div>
                    <div class="form-group">
                    <label for="daoDien" class="col-form-label">Đạo diễn</label>
                    <input name="daoDien" id="daoDien" class="form-control" type="text" placeholder="Đạo diễn">
                    </div>
                    <div class="form-group">
                    <label for="dienVien" class="col-form-label">Diễn viên</label>
                    <input name="dienVien" id="dienVien" class="form-control" type="text" placeholder="Diễn viên">
                    </div>
                    <div class="form-group">
                    <label for="theLoai" class="col-form-label">Thể Loại</label>
                    <input name="theLoai" id="theLoai" class="form-control" type="text" placeholder="Thể Loại">
                    </div>
                    <div class="form-group">
                    <label for="quocGia" class="col-form-label">Quốc Gia</label>
                    <input name="quocGia" id="quocGia" class="form-control" type="text" placeholder="Quốc Gia">
                    </div>
                    <div class="form-group">
                    <label for="phienBan"class="col-form-label">Phiên Bản</label>
                    <input name="phienBan" id="phienBan" class="form-control" type="text" placeholder="Phiên Bản">
                    </div>
                    <div class="form-group">
                    <label for="thoiLuong"class="col-form-label">Thời Lượng</label>
                    <input name="thoiLuong" id="thoiLuong" class="form-control" type="text" placeholder="Thời lượng">
                    </div>
                    <div class="form-group">
                    <label for="gia"class="col-form-label">Giá</label>
                    <input name="gia" id="gia" class="form-control" type="text" placeholder="Giá">
                    </div>
                    <div class="form-group">
                    <label for="hangPhim"class="col-form-label">Hãng Phim</label>
                    <input name="hangPhim" id="hangPhim" class="form-control" type="text" placeholder="Hãng Phim">
                    </div>
                    <div class="form-group">
                    <label for="ngayBD" class="col-form-label">Ngày bắt đầu</label>
                    <input name="ngayBD" id="ngayBD" class="form-control" type="date" placeholder="Ngày bắt đầu">
                    </div>
                    <div class="form-group">
                    <label for="ngayKT" class="col-form-label">Ngày kết thúc</label>
                    <input name="ngayKT" id="ngayKT" class="form-control" type="date" placeholder="Ngày kết thúc">
                    </div>
                    <div class="form-group">
                    <label for="anh" class="col-form-label">Link file ảnh</label>
                    <input name="anh" id="anh" class="form-control" type="text" placeholder="Link ảnh">
                    </div>
                </form>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-modal">Send</button>
                </div>
            </div>
          </div>
          </div>
        </div>
    </div>

<script src="./js/admin.js">


<?php ?>