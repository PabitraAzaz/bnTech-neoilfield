<?= $this->extend('admin/components/assemble') ?>

<?= $this->section('title') ?>Tours<?= $this->endSection() ?>

<?= $this->section('content') ?>



<main>

    <?= $this->include('/admin/components/alert_message'); ?>

    <div>

        <a href="<?= base_url('admin/products/create') ?>">
            <button type="button" class="btn btn-primary m-2">
                Add
            </button>
        </a>

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Products</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Image</th>
                            <th>Product Name</th>
                            <th>A Price</th>
                            <th>O Price</th>
                            <th>SKU</th>
                            <th>Actions</th>
                            <th>Actions</th>

                        </tr>

                    </thead>

                    <tbody>

                        <?php foreach ($prod as $key => $p):
                        ?>

                            <tr>

                                <th scope="row"><?= $key + 1 ?></th>

                                <td> <img src="<?= base_url('uploads/products/main-product/' . $p['p_main_img']) ?>"

                                        class="img-circle elevation-2" style="height :50px ; width:50px"> </td>

                                <td><?= $p['p_title'] ?></td>

                                <td><?= $p['p_actual_price'] ?></td>
                                <td><?= $p['p_offer_price'] ?></td>
                                <td><?= $p['sku'] ?></td>

                                <td><a href="<?= base_url("/admin/products/edit/" . $p["p_id"]) ?>" class="text-white"><button
                                            class="btn-success btn">View</button></a></td>
                                <td><a href="<?= base_url("/admin/products/delete/" . $p['p_id']) ?>" class="text-white"
                                        onclick="return confirm('Are you sure to delete <?= $p['p_title'] ?>?')"><button
                                            class="btn-danger btn">Delete</button></a></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>


                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Image</th>
                            <th>Product Name</th>
                            <th>A Price</th>
                            <th>O Price</th>
                            <th>SKU</th>
                            <th>Actions</th>
                            <th>Actions</th>
                        </tr>

                    </tfoot>

                </table>

            </div>

            <!-- /.card-body -->

        </div>

    </div>

</main>



<?= $this->endSection() ?>

<!-- /.content -->

</div>

<!-- /.content-wrapper -->



<!-- Control Sidebar -->



<!-- /.control-sidebar -->