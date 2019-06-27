<?php include 'lib/common/header.php'; ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard
            <small>Version 2.0</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">List users</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table class="table table-bordered">
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Username</th>
                                <th>Gender</th>
                                <th>City</th>
                                <th>Avatar</th>
                                <th>Action</th>
                            </tr>
                            <?php
                            if ($home->num_rows > 0) {
                                while ($row = $home->fetch_assoc()) {
                                    $id = $row['id'];
                                    ?>
                                    <tr>
                                        <td><?php echo $row['id'] ?></td>
                                        <td><?php echo $row['username'] ?></td>
                                        <td>
                                            <?php echo $gender[$row['gender']] ?>
                                        </td>
                                        <td>
                                            <?php echo $city[$row['city']] ?>
                                        </td>
                                        <td><img src="uploads/avatar/<?php echo $row['avatar'] ?>" alt="avatar" class="avatar_user"></td>
                                        <td><a href="index.php?action=edit_user&id=<?php echo $id ?>">Edit</a> | <a href="index.php?action=delete_user&id=<?php echo $id ?>">Delete</a></td>
                                    </tr>
                                <?php
                            }
                        } else { ?>
                                <tr>
                                    <td colspan="5">Khong co user nao</td>
                                </tr>
                            <?php } ?>
                        </table>
                    </div>
                </div>
                <!-- /.box -->
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include 'lib/common/footer.php'; ?>