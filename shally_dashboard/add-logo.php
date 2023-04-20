<?php include "includes/header.php";?>


      <div class="content-dash">
          <div class="container-fluid">
              <div class="row">
                  <div class="col-lg-3">
                  <?php include "includes/sidebar.php";?>
                  </div>
                  <div class="col-lg-9">
                   <div class="add-logo text-right">
                       <div class="container">
                         <h3 >اضافه لوجو او عنوان الموقع</h3>
                           <div class="row">
                               <div class="col-lg-6 m-auto">
                                    <form action="">
                                        <label for=""> عنوان الموقع</label>
                                        <input class="form-control" type="text">

                                        <label for=""> وصف الموقع  ( اختياري )</label>
                                        <input class="form-control" type="text">

                                            <label for=""> لوجو الموقع</label>
                                            <input class="form-control" type="file">

                                            <div class="control">
                                                <button type="button" class="btn btn-success">حفظ التغيرات </button>
                                                <button type="button" class="btn btn-danger"> الغاء </button>
                                            </div>
                                    </form>
                               </div>
                    
                           </div>
                 
                       </div>
                   </div>

                </div>
              </div>
          </div>
      </div>
 

    

<?php include "includes/footer.php";?>