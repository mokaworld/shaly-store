<!DOCTYPE html >
<html lang="ar" dir="rtl">

<head>
    <title>Shally.Com</title>
    <meta name="viewport" content="width=device-width" />
    <meta name="utf-8">
    <meta name="descriton" content="متجر اليكتروني متخصص في بيغ وشراء جميع انواع المنتجات(ملابساكسسوارات موبايل - عقارات - اغذية - مستحضرات تجميل - اجهزه منزليه - ادوات صحيه)">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/skitter.css" media="all">
    <link rel="stylesheet" href="css/uikit.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media.css">
</head>

<body>
    <!-- START HEADER  -->
    
    <div class="upper-bar">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="add-ads.php">اضافه اعلان</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="promo.php"> عروضنا</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="blog.php"> بلوج</a>
                        </li>
                      
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">تواصل معنا</a>
                        </li>
                      
                    </ul>
                </div>
                <div class="col-lg-6 make-acc">

                    <div class="modals text-right">

                        <div class="modal-2">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#signin">
                        <i class="fa fa-user"></i>
                        </button>

                            <!-- Start  Modal -->
                            <div class="modal fade" id="signin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="signin">تسجيل الدخول</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        </button>
                                        </div>
                                        <div class="modal-body text-right">
                                            <form>
                                                <div class="form-group">
                                                    <label>الاسم او البريد الاليكتروني </label>
                                                    <input type="email" class="form-control" aria-describedby="emailHelp">
                                                    <small class="form-text text-muted">لن نشارك بريدك الإلكتروني مع أي شخص آخر</small>
                                                </div>
                                                <div class="form-group">
                                                    <label>كلمه المرور</label>
                                                    <input type="password" class="form-control">
                                                </div>
                                                <div class="forget-password">
                                                    <a href="forget-pass.php">اعاده تعيين كلمه المرور </a>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer text-right">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal"> الغاء</button>
                                            <button type="button" class="btn btn-secondary">دخول </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Modal -->
                        </div>
                        <div class="modal-1">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#register">
         <i class="fa fa-user-plus"></i>
        </button>

                            <!-- Start  Modal -->
                            <div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="register" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="register"> انشاء حساب </h5>
                                            <button type="button " class="close" data-dismiss="modal" aria-label="Close">
       
                </button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="form-group">
                                                    <label> الاسم  </label>
                                                    <input type="text" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>البريد الاليكتروني </label>
                                                    <input type="email" class="form-control" aria-describedby="emailHelp">
                                                    <small id="emailHelp" class="form-text text-muted">لن نشارك بريدك الإلكتروني مع أي شخص آخر</small>
                                                </div>
                                                <div class="form-group">
                                                    <label>كلمه المرور</label>
                                                    <input type="password" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>تأكيد كلمه المرور</label>
                                                    <input type="password" class="form-control">
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer text-right">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">الغاء</button>
                                            <button type="button" class="btn btn-secondary">انشاء </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Modal -->
                        </div>

                    </div>

                    <div class="search-icon">
                        <i class="fas fa-search"></i>
                    </div>
                    <div class="shop-icon">
                 

                        <a href="view-cart.php">
                         <img src="images/cart.png" alt="cart">
                        </a> 
                        <button class="uk-button uk-button-default" type="button">
                            <i class="fa fa-wallet"></i>
                        </button>
                        <div uk-drop="animation: uk-animation-slide-top-small; duration: 1000">
                            <div class="uk-card uk-card-body uk-card-default">
                            <div class="card mb-3" style="max-width: 540px;">
                            <div class="row no-gutters text-right cart-list">
                                <div class="col-md-4">
                                <img src="images/accs-mobiles/7.jpg" class="card-img" alt="wallet">
                                </div>
                                <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">هاندفري</h5>
                                    <p class="card-text">  1 قطعه ب 250 جنيه مصري </p>
                                    <i class="far fa-times-circle"></i>
                                </div>
                                <div class="card-footer">
                                    <p>الاجمالي : <span>250 جنيه مصري </span></p>
                                    <div class="cards">
                                        <a href="view-cart.php">
                                        <button class="btn btn-warning">اضافه كارت</button>
                                        </a>
                                        <a href="checkout.php">
                                        <button class="btn btn-warning">دفع</button>
                                        </a>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                            </div>
                        </div> 
                    </div>
               
    
                </div>
            </div>
        </div>

    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-light text-right ">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"> <img src="images/logo/logo.png" alt="logo"> </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active ">
                        <a class="nav-link" href="index.php"> الرئيسية <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="aghzia.php"> خضروات وفواكه</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="specs-food.php"> اشهي الوصفات </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sicknote.php"> صيدليه</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="clothes.php"> ملابس</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="acc-mobiles.php">اكسسوارات موبايل</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class=" dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      عقارات
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="sale-devlop.php">بيع وشراء العقارات </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="development.php">عروض عقارات </a>
                    </div>
                </li>

                    <li class="nav-item">
                        <a class="nav-link" href="makeup.php"> مستحضرات تجميل  </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="home-app.php">اجهزه منزليه</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="healthy-tools.php">ادوات صحيه</a>
                    </li>
                   
    

                </ul>


            </div>
        </div>
    </nav>

    <!-- START HEADER  -->