<?= $this->extend('admin/components/assemble') ?>
<?= $this->section('title') ?>Services<?= $this->endSection() ?>
<?= $this->section('content') ?>



<main>
    <?= $this->include('/admin/components/alert_message'); ?>
    <div>

        <a href="<?= base_url('admin/services/create') ?>">
            <button type="button" class="btn btn-primary m-2">
                Add
            </button>
        </a>

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Services</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Image</th>
                            <th>Services Title</th>
                            <th>Description</th>
                            <th>Actions</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php foreach ($serviceD as $key => $p): ?>
                            <tr>
                                <th scope="row"><?= $key + 1 ?></th>
                                <td> <img src="<?= base_url('uploads/service_image/' . $p['service_image']) ?>"
                                        class="img-circle elevation-2" style="height :50px ; width:50px"> </td>
                                <td><?= $p['title'] ?></td>

                                <td>
                                    <?php
                                    $full = strip_tags($p['description']);
                                    $words = explode(' ', $full);
                                    $short = implode(' ', array_slice($words, 0, 20));
                                    $id = uniqid('desc_');
                                    ?>
                                    <span id="<?= $id ?>_short">
                                        <?= $short ?><?php if (count($words) > 20): ?>...
                                        <a href="#" onclick="document.getElementById('<?= $id ?>_short').style.display='none';document.getElementById('<?= $id ?>_full').style.display='inline';return false;">Read more</a>
                                    <?php endif; ?>
                                    </span>
                                    <span id="<?= $id ?>_full" style="display:none;">
                                        <?= $full ?>
                                        <a href="#" onclick="document.getElementById('<?= $id ?>_short').style.display='inline';document.getElementById('<?= $id ?>_full').style.display='none';return false;">Show less</a>
                                    </span>
                                </td>


                                <td><a href="<?= base_url("/admin/services/edit/" . $p["id"]) ?>" class="text-white"><button
                                            class="btn-success btn">View</button></a></td>
                                <td><a href="<?= base_url("/admin/services/delete/" . $p['id']) ?>" class="text-white"
                                        onclick="return confirm('Are you sure to delete <?= $p['title'] ?>?')"><button
                                            class="btn-danger btn">Delete</button></a></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>


                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Image</th>
                            <th>Services Title</th>
                            <th>Description</th>
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