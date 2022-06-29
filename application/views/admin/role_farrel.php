<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <?= form_error('menu', '<div class="alert alert-danger" role="alert">','
            
          </div>'); ?>
          
          <?= $this->session->flashdata('message'); ?>

    <iv class="row">
        
    <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newRoleModal">Add New Role</a>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Role</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $ifarrel = 1; ?>
                <?php foreach ($role as $r_farrel) : ?>
                    <tr>
                        <th scope="row"><?= $ifarrel; ?></th>
                        <td><?= $r_farrel['role']; ?></td>
                        <td>
                            <a href="<?= base_url('admin_farrel/roleaccess/') . $r_farrel['id']; ?>" class="btn btn-warning btn-sm">Access</a>
                            
                        </td>
                    </tr>
                    <?php $ifarrel++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
        
    </div>
</div>



<!-- Modal -->
<div class="modal fade" id="newRoleModal" tabindex="-1" role="dialog" aria-labelledby="newRoleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newRoleModalLabel">Add New Role</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('admin_farrel/role'); ?>" method="post">
      <div class="modal-body">
      <div class="form-group">
    <input type="text" class="form-control" id="role" name="role" placeholder="Role Name">
      </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add</button>
      </div>
      </form>
    </div>
  </div>
</div>