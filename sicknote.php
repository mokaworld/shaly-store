<!-- START HEADER -->
<?php  include 'includes/header.php';  ?>
<!-- END HEADER -->

<div class="sicknote">
    <div class="container">
        <div class="header-sicknote text-center">
            <img src="images/sickness/sick.png" alt="sickness">
            <h5>دلوقتى تقدر تبعتلنا روشتتك و هنوفرلك كل اللى انت محتاجة منها</h5>

        </div>
        <div class="row">
            <div class="col-lg-6">
                <img src="images/sickness/medicine.svg" alt="medicine">
            </div>
            <div class="col-lg-6 text-right">
                <form>
                    <div class="form-group">
                        <label> الاسم</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="من فضلك ادخل الاسم ">
                    </div>
                    <div class="form-group">
                        <label>العنوان</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="من فضلك ادخل عنوان   ">
                    </div>
                    <div class="form-group">
                        <label>رقم التليفون</label>
                        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="من فضلك ادخل رقم التليفون  ">
                    </div>
                    <div class="form-group">
                        <label>اضافه الروشته</label>
                        <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" اضافه الروشته">
                    </div>

                    <div class="form-group">
                        <label> تعليفات اضافيه  </label>
                        <textarea class="form-control" cols="30" rows="10"></textarea>
                    </div>

                    <button type="submit" class="btn btn-warning d-block">اضافه</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- START FOTER -->
<?php  include 'includes/footer.php';  ?>
<!-- END FOTER -->