<!-- START HEADER -->
<?php  include 'includes/header.php';  ?>
<!-- END HEADER -->

<div class="add-ads-page text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 text-right">
                <h3>اضافه اعلان </h3>
                <form>
                    <div class="form-group">
                        <label> الاسم</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="من فضلك ادخل الاسم ">
                    </div>
                    <div class="form-group">
                        <label>البريد الاليكتروني</label>
                        <input type="email" class="form-control" id="exampleInputPassword1" placeholder="من فضلك ادخل البريد الاليكتروني ">
                    </div>
                    <div class="form-group">
                        <label>العنوان</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="من فضلك ادخل عنوان الاعلان  ">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">القسم</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                    <option>اختار القسم</option>
                    <option> خضروات وفواكه</option>
                    <option>ملابس</option>
                    <option>عقارات</option>
                    <option>اكسسوارات موبايل</option>
                    <option>اجهزه منزليه</option>
                    <option>ادوات صحيه</option>
                    <option> مستحضرات تجميل</option>
                    <option>اشهي الاكلات</option>
                    <option>صيدليه</option>
                    </select>
                    </div>
                    <div class="form-group">
                        <label>وصف الاعلان </label>
                        <textarea class="form-control" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        <label>اضافه صور</label>
                        <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="اختار صور">
                    </div>

                    <button type="submit" class="btn btn-warning d-block">اضافه</button>
                </form>
            </div>
            <div class="col-lg-6">
                <img src="images/ads/ads.svg" alt="ads">
            </div>
        </div>
    </div>
</div>

<!-- START FOTER -->
<?php  include 'includes/footer.php';  ?>
<!-- END FOTER -->