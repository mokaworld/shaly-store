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
                             <h3 >اضافه قسم جديد</h3>
                             <form>
                                 
                                 <div class="form-group">
                                   <label for="exampleInputEmail1"> العنوان  </label>
                                   <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                 </div>
                                 <div class="form-group">

                                    <div class="form-group">
                                        <label for="inputState">تصنيف الصفحه</label>
                                        <select id="inputState" class="form-control">
                                        <option selected>الصفحه الرئيسية</option>
                                            <option>خضروات وفواكه</option>
                                            <option>اشهي الوصفات</option>
                                            <option>صيدليه</option>
                                            <option>ملابس</option>
                                            <option>اكسسوارات موبايل</option>
                                            <option>عقارات </option>
                                            <option>مستحضرات تجميل</option>
                                            <option>اجهزه منزليه</option>
                                            <option>بلوج</option>
                                            <option>تواصل معنا </option>
                                            
                                        </select>
                                        </div>
                                    </div>
                                 <div class="form-group">
                                 <div class="form-group ">
                                     <label for="inputState">نوع القسم </label>
                                     <select id="inputState" class="form-control">
                                             <option>خضروات وفواكه</option>
                                            <option>اشهي الوصفات</option>
                                            <option>صيدليه</option>
                                            <option>ملابس</option>
                                            <option>اكسسوارات موبايل</option>
                                            <option>عقارات </option>
                                            <option>مستحضرات تجميل</option>
                                            <option>اجهزه منزليه</option>


                                     </select>
                                     </div>
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