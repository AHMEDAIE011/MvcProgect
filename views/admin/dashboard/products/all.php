  
<div class="">
  <div class="row">
    <div class="col-md-12 col-sm-12 ">
      <div class="x_panel">
        <div class="x_title">
          <h2>Button Example <small>Users</small></h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="#">Settings 1</a>
                  <a class="dropdown-item" href="#">Settings 2</a>
                </div>
            </li>
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="row">
                <div class="col-sm-12">
                  <div class="card-box table-responsive">
                    <!--            Sccess submet          -->
                      <?php if (app()->session->hasFlash('success')) { ?>
                      <p class="has-text-success">
                          <?php echo app()->session->getFlash('success'); ?>
                      </p>
                      <?php } ?>

                      <?php if (app()->session->hasFlash('errorImages')) { ?>
                      <p class="has-text-success">
                          <?php echo app()->session->getFlash('errorImages'); ?>
                      </p>
                      <?php } ?>

                      
                        <div class="d-flex justify-content-between">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add">
                                Add Service
                            </button>
                        </div>
                      <!-- Modal -->
                      <?php include base_path().'views/admin/dashboard/products/add.php'; ?>



                    <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Name</th>
                          <th>Title</th>
                          <th>Service id</th>
                          <th>Details</th>
                          <th>Update</th>
                          <th>Delete</th>
                          <th>images</th>
                        
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($products as $product) { ?>
                              <tr>
                                <td><?php echo $product->id; ?></td>
                                <td><?php echo $product->name; ?></td>
                                <td><?php echo $product->title; ?></td>
                                <td><?php echo $product->service_id; ?></td>
                                <td><?php echo $product->details; ?></td>
                                <td><a class="modal-effect btn btn-sm btn-info" data-effect="effect-scale"  data-toggle="modal" href="#edit<?php echo $product->id; ?>">Update<i class="las la-pen"></i></a></td>
                                <td><a href="/delete-product?id=<?php echo $product->id; ?>" class=" btn btn-danger">Delete</a></td>
                                <td><a href="/product-img?id=<?php echo $product->id; ?>" class=" btn btn-danger">ALL images</a></td>
                              </tr>
                              <?php include base_path().'views/admin/dashboard/products/edit.php'; ?>
                              <?php }?>

                      </tbody>
                    </table>
        </div>
      </div>
    </div>
  </div>
      </div>
    </div>
  </div>
</div>

