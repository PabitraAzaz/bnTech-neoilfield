<?= $this->extend('admin/components/assemble') ?>

<?= $this->section('p_name') ?>Services|Create<?= $this->endSection() ?>

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




    <form method="post" action=<?= base_url('admin/services/create') ?> enctype="multipart/form-data">
        <?= csrf_field() ?>

        <div class="mb-3">
            <div id="img-container" class="mb-1 border-danger">
                <label for="service_image" class="form-label">Services Image</label>
                <?php if (!empty($errors['service_image'])) : ?>
                    <span class="bg-danger">** <?= esc($errors['service_image']) ?></span>
                <?php endif; ?>
                <input type="file" name="service_image" class="form-control" accept="image/png, image/jpeg, image/jpg, image/webp">
                <!-- <small class="text-warning">Please provide image size: 1042 × 730 pixels</small> -->
            </div>
        </div>



        <div class="mb-3">
            <label for="title" class="form-label">Service Title</label>
            <?php if (!empty($errors['title'])) : ?>
                <span class="bg-danger"> ** <?= esc($errors['title']) ?></span>
            <?php endif; ?>
            <input type="text" name="title" class="form-control" value="<?= esc(set_value('title')) ?>">
        </div>



        <div class="mb-3">
            <label for="description" class="form-label">Service Description</label>
            <?php if (!empty($errors['description'])) : ?>
                <span class="bg-danger"> ** <?= esc($errors['description']) ?></span>
            <?php endif; ?>
            <textarea name="description" class="form-control" rows="10"><?= esc(set_value('description')) ?></textarea>
        </div>

        <!--  -->
        <div class="mb-3">
            <label for="why_choose" class="form-label">Why Choose</label>
            <?php if (!empty($errors['why_choose'])) : ?>
                <span class="bg-danger"> ** <?= esc($errors['why_choose']) ?></span>
            <?php endif; ?>
            <textarea name="why_choose" class="form-control" rows="10"><?= esc(set_value('why_choose')) ?></textarea>
        </div>


        <div class="mb-3">
            <label for="other_info" class="form-label">Other Information</label>
            <?php if (!empty($errors['other_info'])) : ?>
                <span class="bg-danger"> ** <?= esc($errors['other_info']) ?></span>
            <?php endif; ?>
            <textarea name="other_info" class="form-control" rows="10"><?= esc(set_value('other_info')) ?></textarea>
        </div>





        <!-- <div class="row">
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
        </div> -->


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