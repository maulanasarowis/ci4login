<?= $this->extend('templates/admin/index'); ?>

<?= $this->section('content'); ?>    
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">User List</h1>
        <div class="row">
            <div class="col-lg-8">
                <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1 ?>
                    <?php foreach ($users as $user) : ?>
                    <tr>
                    <th scope="row"><?= $i++; ?></th>
                    <td><?= $user->username; ?></td>
                    <td><?= $user->email; ?></td>
                    <td><?= $user->name; ?></td>
                    <td>
                        <a href="<?= base_url('admin/' . $user->userid); ?>" class="btn btn-info">Detail</a>
                    </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
                </table>
            </div>
        </div>

        <!-- Page Heading
        <h1 class="h3 mb-4 text-gray-800">My Profile</h1>
        <div class="row">
            <div class="col-lg-8">
            <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                        <img src="<?= base_url('/img/' . user()->user_image); ?>" class="img-fluid rounded-start my-3 mx-3" alt="<?= user()->username; ?>">
                        </div>
                        <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= user()->username; ?></h5>
                            <p class="card-text"><?= user()->email;; ?></p>
                            <a href="" class="btn btn-warning">Edit</a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>

        </div> -->
    </div>
<?= $this->endSection(); ?> 