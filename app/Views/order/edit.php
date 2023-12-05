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

    <!-- Main content -->
    <Section class="content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="<?= url_to('order-update')?>" method="POST">
                                <?= csrf_field() ?>
                                <input type="hidden" name="order_id" value="<?= $order['id'] ?>">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="drink_name">Drink</label>
                                            <select id="drink_name" name="drink_name" class="form-control">
                                                <option value=""></option>
                                                <?php foreach ($drinks as $key => $drink) : ?>
                                                <option value="<?= $drink['id']; ?>"
                                                    <?php if($order['drink_name_id'] == $drink['id']) echo "selected"; ?>>
                                                    <?= $drink['drink_name']; ?></option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label> Food </label>
                                            <select id="food_name" name="food_name" class="form-control">
                                                <option value=""></option>
                                                <?php foreach ($foods as $key => $food) : ?>
                                                <option value="<?= $food['id']; ?>"
                                                    <?php if($order['food_name_id'] == $food['id']) echo "selected"; ?>>
                                                    <?= $food['food_name']; ?></option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="date"> Date </label>
                                            <input type="date" class="form-control" id="date" name="date"
                                                value="<?= $order['date'] ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="items"> Item </label>
                                            <input type="number" class="form-control" id="items" name="items"
                                                value="<?= $order['items'] ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="total_price"> Total Price </label>
                                            <input type="number" class="form-control" id="total_price"
                                                name="total_price" value="<?= $order['total_price'] ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="total_paid"> Total Paid</label>
                                            <input type="number" class="form-control" id="total_paid" name="total_paid"
                                                value="<?= $order['total_paid'] ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="total_return"> Total Return </label>
                                            <input type="number" class="form-control" id="total_return"
                                                name="total_return" value="<?= $order['total_return'] ?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 text-right">
                                    <a href="<?= url_to('order') ?>" type="button" class="btn btn-secondary">Cancel</a>
                                    <button type="submit" class="btn btn-primary" id="btn_submit">Update Order</button">
                                </div>
                            </form>
                        </div>
                        <!-- /.card-body -->
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