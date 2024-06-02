          <!-- Modal -->
          <div class="modal fade" id="edit<?php echo $service->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                      <form action="/update-services" method="post" autocomplete="off">
                          <div class="modal-body">
                              <label for="exampleInputPassword1">Service Name</label>
                              <input type="text" name="name" class="form-control" value="<?php echo $service->name; ?>"><br>
                              <?php if (app()->session->hasFlash('errors')) { ?>
                                    <?php if (isset(app()->session->getFlash('errors')['name'])) { ?>
                                      <p class="has-text-danger">
                                          <?php echo app()->session->getFlash('errors')['name'][0]; ?>
                                          
                                      </p>
                                    <?php } ?>
                                <?php } ?>

            <input type="hidden" name="id" value="<?php echo $service->id; ?>">

                              <label for="exampleInputPassword1">Details</label>
                              <textarea name="details" class="form-control" cols="30"><?php echo $service->details; ?></textarea>
                              <?php if (app()->session->hasFlash('errors')) { ?>
                                    <?php if (isset(app()->session->getFlash('errors')['details'])) { ?>
                                      <p class="has-text-danger">
                                          <?php echo app()->session->getFlash('errors')['details'][0]; ?>
                                          
                                      </p>
                                    <?php } ?>
                                <?php } ?>
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary">submit</button>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
