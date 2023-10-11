  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <form id="insert">
                      <div class="mb-3">
                          <label for="cate_name" class="form-label">ຊື່ສິ້ນຄ້າ :</label>
                          <input type="text" class="form-control" name="cate_name" required>
                      </div>

                      <div class="mb-3">
                          <label for="remark">ລາຍລະອຽດ :</label>
                          <textarea name="remark" cols="30" rows="10" class="form-control" required></textarea>
                      </div>
                      <button type="submit" class="btn btn-success">Insert</button>
                  </form>
              </div>

          </div>
      </div>
  </div>



  <div class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <form id="update">

                      <div class="mb-3">
                          <!-- <label for="cate_id" class="form-label">ລະຫັດສິ້ນຄ້າ :</label> -->
                          <input type="hidden" class="form-control" name="cate_id" required>
                      </div>
                      <div class="mb-3">
                          <label for="cate_name" class="form-label">ຊື່ສິ້ນຄ້າ :</label>
                          <input type="text" class="form-control" name="cate_name" required>
                      </div>

                      <div class="mb-3">
                          <label for="remark">ລາຍລະອຽດ :</label>
                          <textarea name="remark" cols="30" rows="10" class="form-control" required></textarea>
                      </div>
                      <button type="submit" class="btn btn-success">update</button>
                  </form>
              </div>

          </div>
      </div>
  </div>