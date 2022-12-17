<?php
require_once('../utils.php');

$statementGetAccount = "SELECT email,ten,admin,sdt FROM taikhoan";
$dataGetAccount = getAllData($statementGetAccount, 1); ?>
<h2 class="header-admin">QUẢN LÝ TÀI KHOẢN</h2>

<div class="info d-flex justify-content-end">
    <a class="btn-infomation box-shadow">Thêm thông tin</a>
</div>

<table class="table table-light table-hover">
    <thead class="thead-purple ">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Tên người dùng</th>
            <th scope="col">Email</th>
            <th scope="col">Số điện thoại</th>
            <th scope="col">Loại tài khoản</th>
            <th scope="col"></th>

        </tr>
    </thead>
    <tbody>
        <?php
        $count = 0;
        foreach ($dataGetAccount as $value) :  ?>
            <tr>
                <th scope="col"><?php $count += 1;
                                echo $count; ?></th>
                <td><?php echo $value['ten']; ?></td>
                <td><?php echo $value['email']; ?></td>
                <td><?php echo $value['sdt']; ?></td>
                <td><?php if ($value['admin'] == 0) echo "User";
                    else echo "Admin"; ?></td>
                <td>
                    <i class="fas fa-edit" id="<?php $count ?>"> </i>
                    <i class="fas fa-trash" id="<?php $count ?>"></i>
                </td>
            </tr>
        <?php endforeach; ?>

    </tbody>
</table>


<?php ?>