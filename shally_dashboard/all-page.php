<?php include "includes/header.php";?>


      <div class="content-dash">
          <div class="container-fluid">
              <div class="row">
                  <div class="col-lg-3">
                  <?php include "includes/sidebar.php";?>
                  </div>
                  <div class="col-lg-9">
                    <div class="all-page text-right">
                        <div class="container">
                            <h3>كل الصفحات</h3>

                            <form action="">
                                <input class="form-control" type="text" placeholder="بحث عن الصفحات">

                            </form>
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">عنوان الصفحه</th>
                                    <th scope="col">نشر</th>
                                    <th scope="col">تاريخ النشر</th>
                                    <th scope="col">الناشر</th>
                                    
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">الرئيسيه</th>
                                    <td><i class="fa fa-check"></i></td>
                                    <td>20 اكتوبر 2020</td>
                                    <td>admin</td>
                                    <td>
<!-- Button trigger modal -->
<button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModal">
تعديل</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> تعديل المقال</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
            
        <div class="form-group">
            <label for="exampleInputEmail1"> عنوان الصفحه   </label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <textarea class="form-control" name="editor1" id="exampleFormControlTextarea1" rows="3" placeholder="اضافه محتوي"></textarea>
            <script>
                    CKEDITOR.replace( 'editor1' );
            </script>
            </div>

        
    </form>
      </div>
      <div class="modal-footer">
      <button type="submit" class="btn btn-success">حفظ التغيرات</button>
        <button type="submit" class="btn btn-danger">الغاء </button>
      </div>
    </div>
  </div>
</div>                                          <button type="button" class="btn btn-danger">حذف</button>
                                    </td>
                                   
                                  </tr>
                                  <tr>
                                    <th scope="row">خضروات وفواكه</th>
                                    <td><i class="fa fa-check"></i></td>
                                    <td>20 اكتوبر 2020</td>
                                    <td>admin</td>
                                    <td>
<!-- Button trigger modal -->
<button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModal">
تعديل</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> تعديل المقال</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
            
        <div class="form-group">
            <label for="exampleInputEmail1"> عنوان الصفحه   </label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <textarea class="form-control" name="editor1" id="exampleFormControlTextarea1" rows="3" placeholder="اضافه محتوي"></textarea>
            <script>
                    CKEDITOR.replace( 'editor1' );
            </script>
            </div>

        
    </form>
      </div>
      <div class="modal-footer">
      <button type="submit" class="btn btn-success">حفظ التغيرات</button>
        <button type="submit" class="btn btn-danger">الغاء </button>
      </div>
    </div>
  </div>
</div>                                          <button type="button" class="btn btn-danger">حذف</button>
                                    </td>
                                    
                                  </tr>
                                  </tr>
                                  <tr>
                                    <th scope="row">اشهي الوصفات </th>
                                    <td><i class="fa fa-check"></i></td>
                                    <td>20 اكتوبر 2020</td>
                                    <td>admin</td>
                                    <td>
<!-- Button trigger modal -->
<button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModal">
تعديل</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> تعديل المقال</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
            
        <div class="form-group">
            <label for="exampleInputEmail1"> عنوان الصفحه   </label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <textarea class="form-control" name="editor1" id="exampleFormControlTextarea1" rows="3" placeholder="اضافه محتوي"></textarea>
            <script>
                    CKEDITOR.replace( 'editor1' );
            </script>
            </div>

        
    </form>
      </div>
      <div class="modal-footer">
      <button type="submit" class="btn btn-success">حفظ التغيرات</button>
        <button type="submit" class="btn btn-danger">الغاء </button>
      </div>
    </div>
  </div>
</div>                                          <button type="button" class="btn btn-danger">حذف</button>
                                    </td>
                                  </tr>
                                  </tr>
                                  <tr>
                                    <th scope="row">صيدليه</th>
                                    <td><i class="fa fa-check"></i></td>
                                    <td>20 اكتوبر 2020</td>
                                    <td>admin</td>
                                    <td>
<!-- Button trigger modal -->
<button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModal">
تعديل</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> تعديل المقال</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
            
        <div class="form-group">
            <label for="exampleInputEmail1"> عنوان الصفحه   </label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <textarea class="form-control" name="editor1" id="exampleFormControlTextarea1" rows="3" placeholder="اضافه محتوي"></textarea>
            <script>
                    CKEDITOR.replace( 'editor1' );
            </script>
            </div>

        
    </form>
      </div>
      <div class="modal-footer">
      <button type="submit" class="btn btn-success">حفظ التغيرات</button>
        <button type="submit" class="btn btn-danger">الغاء </button>
      </div>
    </div>
  </div>
</div>                                          <button type="button" class="btn btn-danger">حذف</button>
                                    </td>
                                  </tr>
                                  </tr>
                                  <tr>
                                    <th scope="row">ملابس</th>
                                    <td><i class="fa fa-check"></i></td>
                                    <td>20 اكتوبر 2020</td>
                                    <td>admin</td>
                                    <td>
<!-- Button trigger modal -->
<button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModal">
تعديل</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> تعديل المقال</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
            
        <div class="form-group">
            <label for="exampleInputEmail1"> عنوان الصفحه   </label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <textarea class="form-control" name="editor1" id="exampleFormControlTextarea1" rows="3" placeholder="اضافه محتوي"></textarea>
            <script>
                    CKEDITOR.replace( 'editor1' );
            </script>
            </div>

        
    </form>
      </div>
      <div class="modal-footer">
      <button type="submit" class="btn btn-success">حفظ التغيرات</button>
        <button type="submit" class="btn btn-danger">الغاء </button>
      </div>
    </div>
  </div>
</div>                                          <button type="button" class="btn btn-danger">حذف</button>
                                    </td>
                                  </tr>
                                  </tr>
                                  <tr>
                                    <th scope="row">اكسسوارات</th>
                                    <td><i class="fa fa-check"></i></td>
                                    <td>20 اكتوبر 2020</td>
                                    <td>admin</td>
                                    <td>
<!-- Button trigger modal -->
<button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModal">
تعديل</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> تعديل المقال</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
            
        <div class="form-group">
            <label for="exampleInputEmail1"> عنوان الصفحه   </label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <textarea class="form-control" name="editor1" id="exampleFormControlTextarea1" rows="3" placeholder="اضافه محتوي"></textarea>
            <script>
                    CKEDITOR.replace( 'editor1' );
            </script>
            </div>

        
    </form>
      </div>
      <div class="modal-footer">
      <button type="submit" class="btn btn-success">حفظ التغيرات</button>
        <button type="submit" class="btn btn-danger">الغاء </button>
      </div>
    </div>
  </div>
</div>                                          <button type="button" class="btn btn-danger">حذف</button>
                                    </td>
                                  </tr>
                                  </tr>
                                  <tr>
                                    <th scope="row">عقارات</th>
                                    <td><i class="fa fa-check"></i></td>
                                    <td>20 اكتوبر 2020</td>
                                    <td>admin</td>
                                    <td>
<!-- Button trigger modal -->
<button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModal">
تعديل</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> تعديل المقال</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
            
        <div class="form-group">
            <label for="exampleInputEmail1"> عنوان الصفحه   </label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <textarea class="form-control" name="editor1" id="exampleFormControlTextarea1" rows="3" placeholder="اضافه محتوي"></textarea>
            <script>
                    CKEDITOR.replace( 'editor1' );
            </script>
            </div>

        
    </form>
      </div>
      <div class="modal-footer">
      <button type="submit" class="btn btn-success">حفظ التغيرات</button>
        <button type="submit" class="btn btn-danger">الغاء </button>
      </div>
    </div>
  </div>
</div>                                          <button type="button" class="btn btn-danger">حذف</button>
                                    </td>
                                  </tr>
                                  </tr>
                                  <tr>
                                    <th scope="row">مستحضرات تجميل </th>
                                    <td><i class="fa fa-check"></i></td>
                                    <td>20 اكتوبر 2020</td>
                                    <td>admin</td>
                                    <td>
<!-- Button trigger modal -->
<button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModal">
تعديل</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> تعديل المقال</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
            
        <div class="form-group">
            <label for="exampleInputEmail1"> عنوان الصفحه   </label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <textarea class="form-control" name="editor1" id="exampleFormControlTextarea1" rows="3" placeholder="اضافه محتوي"></textarea>
            <script>
                    CKEDITOR.replace( 'editor1' );
            </script>
            </div>

        
    </form>
      </div>
      <div class="modal-footer">
      <button type="submit" class="btn btn-success">حفظ التغيرات</button>
        <button type="submit" class="btn btn-danger">الغاء </button>
      </div>
    </div>
  </div>
</div>                                          <button type="button" class="btn btn-danger">حذف</button>
                                    </td>
                                  </tr>
                                  </tr>
                                  <tr>
                                    <th scope="row">اجهزه منزليه</th>
                                    <td><i class="fa fa-check"></i></td>
                                    <td>20 اكتوبر 2020</td>
                                    <td>admin</td>
                                    <td>
<!-- Button trigger modal -->
<button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModal">
تعديل</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> تعديل المقال</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
            
        <div class="form-group">
            <label for="exampleInputEmail1"> عنوان الصفحه   </label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <textarea class="form-control" name="editor1" id="exampleFormControlTextarea1" rows="3" placeholder="اضافه محتوي"></textarea>
            <script>
                    CKEDITOR.replace( 'editor1' );
            </script>
            </div>

        
    </form>
      </div>
      <div class="modal-footer">
      <button type="submit" class="btn btn-success">حفظ التغيرات</button>
        <button type="submit" class="btn btn-danger">الغاء </button>
      </div>
    </div>
  </div>
</div>                                          <button type="button" class="btn btn-danger">حذف</button>
                                    </td>
                                  </tr>
                                  </tr>
                                  <tr>
                                    <th scope="row">ادوات صحيه</th>
                                    <td><i class="fa fa-check"></i></td>
                                    <td>20 اكتوبر 2020</td>
                                    <td>admin</td>
                                    <td>
<!-- Button trigger modal -->
<button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModal">
تعديل</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> تعديل المقال</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
            
        <div class="form-group">
            <label for="exampleInputEmail1"> عنوان الصفحه   </label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <textarea class="form-control" name="editor1" id="exampleFormControlTextarea1" rows="3" placeholder="اضافه محتوي"></textarea>
            <script>
                    CKEDITOR.replace( 'editor1' );
            </script>
            </div>

        
    </form>
      </div>
      <div class="modal-footer">
      <button type="submit" class="btn btn-success">حفظ التغيرات</button>
        <button type="submit" class="btn btn-danger">الغاء </button>
      </div>
    </div>
  </div>
</div>                                          <button type="button" class="btn btn-danger">حذف</button>
                                    </td>
                                  </tr>
                                  <tr>
                                    <th scope="row"> بدون عنوان </th>
                                    <td><i class="fa fa-times"></i></td>
                                    <td>20 اكتوبر 2020</td>
                                    <td>admin</td>
                                    <td>
<!-- Button trigger modal -->
<button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModal">
تعديل</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> تعديل المقال</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
            
        <div class="form-group">
            <label for="exampleInputEmail1"> عنوان الصفحه   </label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <textarea class="form-control" name="editor1" id="exampleFormControlTextarea1" rows="3" placeholder="اضافه محتوي"></textarea>
            <script>
                    CKEDITOR.replace( 'editor1' );
            </script>
            </div>

        
    </form>
      </div>
      <div class="modal-footer">
      <button type="submit" class="btn btn-success">حفظ التغيرات</button>
        <button type="submit" class="btn btn-danger">الغاء </button>
      </div>
    </div>
  </div>
</div>                                          <button type="button" class="btn btn-danger">حذف</button>
                                    </td>
                                  </tr>

                                  </tr>
                                </tbody>
                              </table>
                        </div>
                    </div>
                    <nav aria-label="...">
                      <ul class="pagination">
                        <li class="page-item disabled">
                          <span class="page-link">السابق</span>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active" aria-current="page">
                          <span class="page-link">
                            2
                            <span class="sr-only">(current)</span>
                          </span>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                          <a class="page-link" href="#">التالي</a>
                        </li>
                      </ul>
                    </nav>
              
                </div>
              </div>
          </div>
      </div>
 
      <?php include "includes/footer.php";?>