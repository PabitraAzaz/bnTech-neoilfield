<?= $this->extend('admin/components/assemble') ?>

<?= $this->section('p_name') ?>Gallery|Create<?= $this->endSection() ?>

<?= $this->section('content') ?>




<main>
    <?php $session = session() ?>

    <?php $invalidCreds = session()->get('invalid_creds'); ?>
    <?php $errors = $invalidCreds['errors'] ?? []; ?>


    <?php if ($session->get('invalid_creds') !== null) : ?>
        <div class="card card-<?= $session->get('invalid_creds')['type'] ?>">
            <div class="card-header">
                <h3 class="card-title"> <?php foreach (array_keys($session->get('invalid_creds')['errors']) as $item) : ?>
                        <?= $session->get('invalid_creds')['errors'][$item] ?><br>
                    <?php endforeach; ?></h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                    </button>
                </div>
                <!-- /.card-tools -->
            </div>
        </div>

    <?php endif; ?>




    <form method="post" action=<?= base_url('admin/galleries/create') ?> enctype="multipart/form-data">
        <?= csrf_field() ?>

        <div class="mb-3">
            <div id="img-container" class="mb-1 border-danger">
                <label for="service_image" class="form-label">Image</label>
                <?php if (!empty($errors['service_image'])) : ?>
                    <span class="bg-danger">** <?= esc($errors['service_image']) ?></span>
                <?php endif; ?>
                <input type="file" name="service_image" class="form-control" accept="image/png, image/jpeg, image/jpg, image/webp">
                <!-- <small class="text-warning">Please provide image size: 1042 × 730 pixels</small> -->
            </div>
        </div>



        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <?php if (!empty($errors['title'])) : ?>
                <span class="bg-danger"> ** <?= esc($errors['title']) ?></span>
            <?php endif; ?>
            <input type="text" name="title" class="form-control" value="<?= esc(set_value('title')) ?>">
        </div>





        <button type="submit" class="btn btn-primary">Create</button>

    </form>

</main>



<?= $this->endSection() ?>

<!-- /.content -->

</div>

<!-- /.content-wrapper -->



<!-- Control Sidebar -->

<aside class="control-sidebar control-sidebar-dark">

    <!-- Control sidebar content goes here -->

</aside>

<!-- /.control-sidebar -->