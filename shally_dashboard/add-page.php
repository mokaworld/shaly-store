<?php include "includes/header.php";?>

      <div class="content-dash">
          <div class="container-fluid">
              <div class="row">
                  <div class="col-lg-3">
                  <?php include "includes/sidebar.php";?>
                  </div>
                  <div class="col-lg-9">
                     <div class="add-page text-right ">
                         <div class="container">
                             <h3 >اضافه صفحه جديده</h3>

                             <form>
                                 
                                <div class="form-group">
                                  <label for="exampleInputEmail1"> العنوان  </label>
                                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="editor1" id="exampleFormControlTextarea1" rows="3" placeholder="اضافه محتوي"></textarea>
                                    <script>
                                            CKEDITOR.replace( 'editor1' );
                                    </script>
                                  </div>
                                <button type="submit" class="btn btn-success">حفظ التغيرات</button>
                                <button type="submit" class="btn btn-danger">الغاء </button>
                              
                            </form>
                         </div>
                     </div>

                 
              
                </div>
              </div>
          </div>
      </div>
 

    


<?php include "includes/footer.php";?>