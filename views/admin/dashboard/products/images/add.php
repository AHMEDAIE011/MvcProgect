          <!-- Modal -->
          <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">ADD</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                      <form action="/add-img" method="post" autocomplete="off"  enctype="multipart/form-data">
                          <div class="modal-body">

                <input type="hidden" name="id" class="form-control" value="<?php echo request('id'); ?>"><br>
                             
                                <div class="form-group">
                                    <label for="exampleInputFile"><h4>Upload img</h4></label>
                                    <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file"  name="name" class="custom-file-input" id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                 </div>
                                </div>
                              <?php if (app()->session->hasFlash('errors')) { ?>
                                    <?php if (isset(app()->session->getFlash('errors')['name'])) { ?>
                                      <p class="has-text-danger">
                                          <?php echo app()->session->getFlash('errors')['name'][0]; ?>
                                          
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
