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
                                                    data-drink-price="<?= $drink['price'];?>"
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
                                                    data-food-price="<?= $food['price'];?>"
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
                                            <label for="total_price"> Total Price </label>
                                            <input type="number" class="form-control" id="total_price"
                                                name="total_price" value="<?= $order['total_price'] ?>" required readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="total_paid"> Total Paid</label>
                                            <input type="number" class="form-control" id="total_paid" name="total_paid"
                                                value="<?= $order['total_paid'] ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="total_return"> Total Return </label>
                                            <input type="number" class="form-control" id="total_return"
                                                name="total_return" value="<?= $order['total_return'] ?>" required readonly>
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

<?= $this->Section('page_script'); ?>

<script type="text/javascript">
let total_price = "<?= $order['total_price'] ?>";

$('#drink_name, #food_name').on('change', function(){
    let drink_price = $('#drink_name option:selected').attr('data-drink-price');
    let food_price = $('#food_name option:selected').attr('data-food-price');

    drink_price = drink_price ? drink_price : 0;
    food_price = food_price ? food_price : 0;

    total_price = parseInt(drink_price) + parseInt(food_price);
    $('#total_price').val(total_price);
    $('#total_paid').trigger('change');
})

$('#total_paid').on('change', function() {
    let total_paid = this.value;
    total_return = total_paid - total_price;
    $('#total_return').val(total_return);
});
</script>

<?= $this->endSection('page_script'); ?>