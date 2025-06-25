<?= $this->extend('admin/components/assemble') ?>

<?= $this->section('p_name') ?>Products|Create<?= $this->endSection() ?>

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




    <form method="post" action=<?= base_url('admin/products/create') ?> enctype="multipart/form-data">
        <?= csrf_field() ?>

        <div class="mb-3">
            <div id="img-container" class="mb-1 border-danger">
                <label for="p_main_img" class="form-label">Product Image</label>
                <?php if (!empty($errors['p_main_img'])) : ?>
                    <span class="bg-danger">** <?= esc($errors['p_main_img']) ?></span>
                <?php endif; ?>
                <input type="file" name="p_main_img" class="form-control" accept="image/png, image/jpeg, image/jpg, image/webp">
                <small class="text-warning">Please provide image size: 1042 × 730 pixels</small>
            </div>



        </div>
        <div class="mb-3">
            <div id="multi-img-container" class="mb-1 border-success">
                <label for="p_other_img" class="form-label">Other Image Product Images</label>

                <?php if (!empty($errors['p_other_img'])) : ?>
                    <span class="bg-danger"> ** <?= esc($errors['p_other_img']) ?></span>
                <?php endif; ?>

                <input type="file" name="p_other_img[]" class="form-control" accept="image/png, image/jpeg, image/jpg, image/webp" multiple>
            </div>
        </div>



        <div class="mb-3">
            <label for="p_title" class="form-label"> Product Name</label>

            <?php if (!empty($errors['p_title'])) : ?>
                <span class="bg-danger"> ** <?= esc($errors['p_title']) ?></span>
            <?php endif; ?>

            <input type="text" name="p_title" class="form-control" value="<?= esc(set_value('p_title')) ?>">
        </div>


        <div class="row">
            <div class="col-lg-6">
                <div class="mb-3">
                    <label for="p_actual_price" class="form-label">Actual Price</label>

                    <?php if (!empty($errors['p_actual_price'])) : ?>
                        <span class="bg-danger"> ** <?= esc($errors['p_actual_price']) ?></span>
                    <?php endif; ?>

                    <input type="number" name="p_actual_price" class="form-control" value="<?= esc(set_value('p_actual_price')) ?>">
                </div>
                <!-- /input-group -->
            </div>
            <div class="col-lg-6">
                <div class="mb-3">
                    <label for="p_offer_price" class="form-label">Offer Price</label>

                    <?php if (!empty($errors['p_offer_price'])) : ?>
                        <span class="bg-danger"> ** <?= esc($errors['p_actual_price']) ?></span>
                    <?php endif; ?>

                    <input type="number" name="p_offer_price" class="form-control" value="<?= esc(set_value('p_offer_price')) ?>">
                </div>
                <!-- /input-group -->
            </div>
        </div>




        <div class="mb-3">
            <label for="p_description" class="form-label">Product Description</label>
            <?php if (!empty($errors['p_description'])) : ?>
                <span class="bg-danger"> ** <?= esc($errors['p_description']) ?></span>
            <?php endif; ?>
            <textarea type="number" name="p_description" class="form-control"><?= esc(set_value('p_description')) ?></textarea>
        </div>


        <div class="row">
            <div class="col-lg-6">
                <div class="mb-3">
                    <label for="p_star" class="form-label">Rating</label>
                    <?php if (!empty($errors['p_star'])) : ?>
                        <span class="bg-danger"> ** <?= esc($errors['p_star']) ?></span>
                    <?php endif; ?>
                    <input type="number" name="p_star" value="<?= esc(set_value('p_star')) ?>" class="form-control">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="mb-3">
                    <label for="p_total_review" class="form-label">Total Review</label>
                    <?php if (!empty($errors['p_total_review'])) : ?>
                        <span class="bg-danger"> ** <?= esc($errors['p_total_review']) ?></span>
                    <?php endif; ?>
                    <input type="number" name="p_total_review" value="<?= esc(set_value('p_total_review')) ?>" class="form-control">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="mb-3">
                    <label for="sku" class="form-label">Sku</label>
                    <?php if (!empty($errors['sku'])) : ?>
                        <span class="bg-danger"> ** <?= esc($errors['sku']) ?></span>
                    <?php endif; ?>
                    <input type="text" name="sku" value="<?= esc(set_value('sku')) ?>" class="form-control">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="mb-3">


                    <label for="status" class="form-label">Status</label>
                    <?php if (!empty($errors['status'])) : ?>
                        <span class="bg-danger"> ** <?= esc($errors['status']) ?></span>
                    <?php endif; ?>
                    <select name="status" class="form-control">
                        <option selected value="active" <?= set_select('status', 'active'); ?>>Active</option>
                        <option value="inactive" <?= set_select('status', 'inactive'); ?>>Inactive</option>
                    </select>
                </div>
            </div>
        </div>


        <div class="mb-3">
            <label for="tag" class="form-label">Tags</label>



            <?php if (!empty($errors['tag'])) : ?>
                <span class="bg-danger"> ** <?= esc($errors['tag']) ?></span>
            <?php endif; ?>

            <select name="tags" class="form-control">
                <option disabled selected>Choose a Tag</option>
                <option value="Bestseller" <?= set_select('tags', 'Bestseller'); ?>>Bestseller</option>
                <option value="Latest" <?= set_select('tags', 'Latest'); ?>>Latest</option>
                <option value="Offer" <?= set_select('tags', 'Offer'); ?>>Offer</option>
                <option value="None" <?= set_select('tags', 'None'); ?>>None</option>
            </select>
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