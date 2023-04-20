<!-- START HEADER -->
<?php  include 'includes/header.php';  ?>
<!-- END HEADER -->
<div class="add-card text-right">

    <div class="head-cards text-center">
        <img src="images/pay/pay.png" alt="payment">
    </div>
    <div class="card-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <form class="form-group">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="text">الاسم الاول</label>
                                <input type="text" class="form-control" id="text" placeholder="من فضلك ادخل الاسم">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="text">اسم العائله </label>
                                <input type="text" class="form-control" id="text" placeholder=" من فضلك ادخل اسم العائله  ">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">رقم الكارت</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="ادخل رقم الكارت">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress2">تاريخ الانتهاء </label>
                            <input type="text" class="form-control" id="inputAddress2" placeholder="سنه/ شهر">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputCity">البلد</label>
                                <input type="text" class="form-control" id="inputCity" placeholder="ادخل اسم البلد">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputZip">رقم cvv</label>
                                <input type="text" class="form-control" id="inputZip" placeholder="cvv">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-warning"> اضافه كارت </button>
                    </form>
                </div>
                <div class="col-lg-6">
                    <img src="images/pay/pay2.jpg" alt="payment">
                </div>
            </div>
        </div>
    </div>

</div>
<!-- START FOTER -->
<?php  include 'includes/footer.php';  ?>
<!-- END FOTER -->