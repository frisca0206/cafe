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
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="<?= url_to('order-store')?>" method="POST">
                                <?= csrf_field() ?>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="drink_name">Drink</label>
                                            <select id="drink_name" name="drink_name" class="form-control">
                                                <option value=""></option>
                                                <?php foreach ($drinks as $key => $drink) : ?>
                                                <option value="<?php echo $drink['id']; ?>">
                                                    <?php echo $drink['drink_name']; ?>
                                                </option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="food_name">Food</label>
                                            <select id="food_name" name="food_name" class="form-control">
                                                <option value=""></option>
                                                <?php foreach ($foods as $key => $food) : ?>
                                                <option value="<?php echo $food['id']; ?>">
                                                    <?php echo $food['food_name']; ?>
                                                </option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="date">Date</label>
                                            <input type="date" class="form-control" id="date" name="date" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="items">Item</label>
                                            <input type="number" class="form-control" id="items" name="items" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="total_price">Total Price</label>
                                            <input type="number" class="form-control" id="total_price"
                                                name="total_price" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="total_paid">Total Paid </label>
                                            <input type="number" class="form-control" id="total_paid" name="total_paid"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <label for="total_return">Total Return </label>
                                            <input type="number" class="form-control" id="total_return"
                                                name="total_return" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 text-right">
                                    <a href="<?= url_to('order') ?>" type="button" class="btn btn-secondary">Cancel</a>
                                    <button type="submit" class="btn btn-primary" id="btn_submit">Create Order</button>
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