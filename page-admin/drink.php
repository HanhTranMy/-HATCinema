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
                    <i class="fas fa-edit" id="<?php $value['maBapNuoc'] ?>" data-toggle="modal" data-target="#addDataAdmin"></i>
                    <i class="fas fa-trash maBapNuoc bapnuoc" id="<?php $value['maBapNuoc'] ?>" onclick="deleteData(<?php echo $value['maBapNuoc'] ?>,3)"></i>
                </td>
            </tr>
        <?php endforeach; ?>

    </tbody>
</table>

<div class="box-model">
    <div class="modal fade" id="addDataAdmin" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="addDataAdmin" style="text-align: center; ">Update dữ liệu</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </div>
            <div class="modal-body">
                <form method="post" action="">
                    <div class="form-group">
                        <label for="tenSP" class="col-form-label">Tên sản phẩm</label>
                        <input name="tenSP" id="tenSP" class="form-control" type="text" placeholder="Tên sản phẩm">
                    </div>
                    <div class="form-group">
                        <label for="gia" class="col-form-label">Đạo diễn</label>
                        <input name="gia" id="gia" class="form-control" type="text" placeholder="Đạo diễn">
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