<?php include "includes/header.php";?>

      <div class="content-dash">
          <div class="container-fluid">
              <div class="row">
                  <div class="col-lg-3">
                  <?php include "includes/sidebar.php";?>
                  </div>
                  <div class="col-lg-9">
                     <div class="add-user text-right ">
                         <div class="container">
                             <h3 >اضافه مستخدم </h3>
                            <form>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                    <label for="inputEmail4">اسم المستخدم</label>
                                    <input type="text" class="form-control" placeholder="من فضلط اكتب الاسم " >
                                    </div>

                                    <div class="form-group col-md-6">
                                    <label for="inputPassword4">كلمه المرور</label>
                                    <input type="password" class="form-control" id="inputPassword4" placeholder="ادخل كلمه المرور">
                                    </div>
                                    <div class="form-group col-md-6">
                                    <label for="inputPassword4"> تاكيد كلمه المرور</label>
                                    <input type="password" class="form-control" id="inputPassword4" placeholder="تأكيد كلمه المرور">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress">البريد الاليكتروني</label>
                                    <input type="email" class="form-control" id="inputAddress" placeholder="ادخل البريد الاليكتروني">
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress2"> اضافه صوره</label>
                                    <input type="file" class="form-control" id="inputAddress2" placeholder="اضافه صوره">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                    <label for="inputCity">المدينه</label>
                                    <input type="text" class="form-control" id="inputCity" placeholder="من فضلك ادخل المدينه\اسم البلد">
                                    </div>
                                    <div class="form-group col-md-4">
                                    <label for="inputState">الوظيفه</label>
                                    <select id="inputState" class="form-control">
                                        <option selected>مسؤول</option>
                                        <option>مساهم</option>
                                        <option>محرر</option>
                                        <option>مؤلف</option>
                                        <option>مشترك</option>
                                    </select>
                                    </div>

                                </div>
                            
                                <button type="submit" class="btn btn-primary"> اضافه</button>
                                </form>
                         </div>
                     </div>

                 
              
                </div>
              </div>
          </div>
      </div>
 

    


<?php include "includes/footer.php";?>