<!-- START HEADER -->
<?php  include 'includes/header.php';  ?>
<!-- END HEADER -->

<div class="buy-home text-right">
  <div class="container">
  <form class="form-group">
                        <div>
                          <label>تصنيف العقار</label>
                          <select class="form-control">
                            <option>اختر عقار </option>
                            <option>اراضي</option>
                            <option> استراحات</option>
                            <option>نحلات تجاريه</option>
                            <option>مكاتب اداريه</option>
                            <option>فلل</option>
                            <option>قصور</option>
                            <option>عمائر</option>
                            <option>شقق</option>
                            <option>شاليهات علي البحر</option>
                          </select>
                        </div>
                        <div>
                          <label>عنوان العرض</label>
                          <input class="form-control" type="text" name="add">
                        </div>
                        <div>
                          <label> الغرض</label>
                          <select class="form-control">
                            <option> ايجار </option>
                            <option>بيع</option>
                            <option> شراء</option>
                          </select>
                        </div>
                        <div>
                          <label>المساحه الكليه</label>
                          <input class="form-control" type="text" name="add">
                        </div>
                        <div>
                          <label> السعر</label>
                          <input class="form-control" type="text" name="add">
                        </div>
                        <div>
                          <label> سعر المتر</label>
                          <input class="form-control" type="text" name="add">
                        </div>
                        <div>
                          <label>  البلد</label>
                          <input class="form-control" type="text" name="add">
                        </div>
                        <div>
                          <label>  الحي</label>
                          <input class="form-control" type="text" name="add">
                        </div>
                      </form>
                      <div class="featch">
                        <div>
                          <h2>الخصائص</h2>
                        </div>
                        <form class="form-group">
                          <div>
                            <label> رقم القطعه</label>
                            <input class="form-control" type="text" name="add">
                          </div>
                          <div>
                            <label>  واجهه الارض</label>
                            <input class="form-control" type="text" name="add">
                          </div>
                          <div>
                            <label> الموقع</label>
                            <select class="form-control">
                              <option> سكني </option>
                              <option>تجاري</option>
                              <option> صناعي</option>
                              <option> زراعي </option>
                              <option>مستودعات</option>
                              <option> غير معروف</option>
                            </select>
                          </div>
                          <div>
                            <label> مده العرض</label>
                            <select class="form-control">
                              <option> شهر </option>
                              <option>شهرين</option>
                              <option> سته اشهر</option>
                              <option> سنه </option>
                            </select>
                          </div>
                          <div>
                            <label>   ارفاق صوره</label>
                            <input class="form-control" type="file" name="add">
                          </div>
                        </form>
                        <div class="data-conection">
                          <div>
                            <h2>بيانات الاتصال</h2>
                          </div>
                          <form class="form-group">
                            <div>
                              <label> الاسم بالكامل </label>
                              <input class="form-control" type="text" name="add">
                            </div>
                            <div>
                              <label>   رقم التواصل 1</label>
                              <input class="form-control" type="text" name="add">
                            </div>
                            <div>
                              <label>    رقم التواصل 2</label>
                              <input class="form-control" type="text" name="add">
                            </div>
                            <div>
                              <label>تفاصيل اخري</label>
                              <textarea class="form-control" name="other"  cols="30" rows="10"></textarea>
                            </div>
                            <div>
                              <label>  المعلن</label>
                              <select class="form-control">
                                <option> مالك </option>
                                <option>وسيط</option>
                              </select>
                            </div>
                            <div>
                             
                            </div>
                            <button class="btn btn-warning"> ارسال </button>
                          </form>
</div>
  </div>
</div>





<!-- START FOTER -->
<?php  include 'includes/footer.php';  ?>
<!-- END FOTER -->