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
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="<?= url_to('food-update')?>" method="POST">
                                <?= csrf_field() ?>
                                <input type="hidden" name="food_id" value="<?= $food['id'] ?>">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="food_name"> Food</label>
                                            <input type="text" class="form-control" id="food_name" name="food_name"
                                                value="<?= $food['food_name'] ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="description"> Description </label>
                                            <input name="text" class="form-control" id="description" name="description"
                                                value="<?= $food['description'] ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="price"> Price </label>
                                            <input type="number" class="form-control" id="price" name="price"
                                                value="<?= $food['price'] ?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 text-right">
                                    <a href="<?= url_to('food') ?>" type="button" class="btn btn-secondary">Cancel</a>
                                    <button type="submit" class="btn btn-primary" id="btn_submit">Update Food</button>
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