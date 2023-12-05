<?= $this->extend('layouts/template'); ?>

<?= $this->Section('content'); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><?= $page_title ?></h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
    <!-- /.content-header -->

    <!-- Main Content -->
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Manage Order List</h3>
                            <div class="d-flex justify-content-end mb-1">
                                <a href="<?= url_to('order-create') ?>" class="btn btn-success mb-2"
                                    id="btn_modal_create">Create</a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="order_table" class="table table-bordered table-hover masterdata-datatable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Drink</th>
                                        <th>Food</th>
                                        <th>Date</th>
                                        <th>Item</th>
                                        <th>Total Price</th>
                                        <th>Total Paid</th>
                                        <th>Total Return</th>
                                        <th width="150">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($orders as $key => $order) : ?>
                                    <tr>
                                        <td><?= $key + 1 ?></td>
                                        <td><?= $order['drink_name'] ?></td>
                                        <td><?= $order['food_name'] ?></td>
                                        <td><?= $order['date'] ?></td>
                                        <td><?= $order['items'] ?></td>
                                        <td><?= $order['total_price'] ?></td>
                                        <td><?= $order['total_paid'] ?></td>
                                        <td><?= $order['total_return'] ?></td>
                                        <td>
                                            <a href="<?= url_to('order-edit', $order['id'])?>"
                                                class="btn btn-primary btn-sm">Edit</a>
                                            <a href="<?= url_to('order-delete', $order['id'])?>"
                                                class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-boody -->
                    </div>
                    <!-- /.card -->

                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

</div>



<?= $this->endSection('content'); ?>