<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
  <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '
            
          </div>'); ?>

  <?= $this->session->flashdata('message'); ?>

  <iv class="row">

    <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newMenuModal">Add New Menu</a>
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Menu</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php $ifarrel = 1; ?>
        <?php foreach ($menu as $m) : ?>
          <tr>
            <th scope="row"><?= $ifarrel; ?></th>
            <td><?= $m['menu']; ?></td>
            <td>
              <a onclick="return confirm('Are you sure want to delete this menu?')" href="<?= base_url('menu_farrel/delete_farrel') ?>" class="btn btn-danger btn-sm">Delete</a>
            </td>
          </tr>
          <?php $ifarrel++; ?>
        <?php endforeach; ?>
      </tbody>
    </table>

</div>
</div>



<!-- Modal -->
<div class="modal fade" id="newMenuModal" tabindex="-1" role="dialog" aria-labelledby="newMenuModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newMenuModalLabel">Add New Menu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('menu_farrel'); ?>" method="post">
        <div class="modal-body">
          <div class="form-group">
            <input type="text" class="form-control" id="menu" name="menu" placeholder="Menu Name">
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