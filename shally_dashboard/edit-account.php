<?php include "includes/header.php";?>
<div class="edit-account text-right">
    <div class="container">
    <div class="row flex-lg-nowrap">


    <div class="col">
        <div class="row">
        <div class="col mb-3">
            <div class="card ">
            <div class="card-body">
                <div class="e-profile">
                <div class="row">
                    <div class="col-12 col-sm-auto mb-3">
                    <div class="mx-auto" style="width: 140px;">
                        <div class="d-flex justify-content-center align-items-center rounded" style="height: 140px; background-color: rgb(233, 236, 239);">
                        <span style="color: rgb(166, 168, 170); font: bold 8pt Arial;">140x140</span>
                        </div>
                    </div>
                    </div>
                    <div class=" text-right col d-flex flex-column flex-sm-row justify-content-between mb-3">
                    <div class="text-center text-sm-left mb-2 mb-sm-0">
                        <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap text-right">محمد علي  </h4>
                        <p class="mb-0 text-right">@mo.ali</p>
                        <div class="text-muted text-right"><small>اخر ظهور من ساعتين </small></div>
                        <div class="mt-2">
                        <inp class="btn btn-primary " type="button">
                            <i class="fa fa-fw fa-camera"></i>
                            <span>تغيير الصوره</span>
                        </inp>
                        </div>
                    </div>
                    <div class="text-center text-sm-right">
                        <span class="badge badge-secondary">المدير</span>
                        <div class="text-muted"><small>انضم في 09 ديسمبر 2017</small></div>
                    </div>
                    </div>
                </div>
                <ul class="nav nav-tabs">
                    <li class="nav-item"><a href="" class="active nav-link">الاعدادات</a></li>
                </ul>
                <div class="tab-content pt-3">
                    <div class="tab-pane active">
                    <form class="form" novalidate="">
                        <div class="row">
                        <div class="col">
                            <div class="row">
                            <div class="col">
                                <div class="form-group">
                                <label>الاسم  </label>
                                <input class="form-control" type="text" name="name" placeholder="John Smith" value="John Smith">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                <label>اسم المستخدم </label>
                                <input class="form-control" type="text" name="username" placeholder="johnny.s" value="johnny.s">
                                </div>
                            </div>
                            </div>
                            <div class="row">
                            <div class="col">
                                <div class="form-group">
                                <label>الايميل </label>
                                <input class="form-control" type="text" placeholder="user@example.com">
                                </div>
                            </div>
                            </div>
                            <div class="row">
                            <div class="col mb-3">
                                <div class="form-group">
                                <label>نبذه عني</label>
                                <textarea class="form-control" rows="5" placeholder="نبذه عني"></textarea>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-12 col-sm-6 mb-3">
                            <div class="mb-2"><b>تغيير كلمه المرور</b></div>
                            <div class="row">
                            <div class="col">
                                <div class="form-group">
                                <label> كلمه السر الحاليه </label>
                                <input class="form-control" type="password" placeholder="••••••">
                                </div>
                            </div>
                            </div>
                            <div class="row">
                            <div class="col">
                                <div class="form-group">
                                <label>كلمه السر الجديده   </label>
                                <input class="form-control" type="password" placeholder="••••••">
                                </div>
                            </div>
                            </div>
                            <div class="row">
                            <div class="col">
                                <div class="form-group">
                                <label>تأكيد  <span class="d-none d-xl-inline">كلمه المرور</span></label>
                                <input class="form-control" type="password" placeholder="••••••"></div>
                            </div>
                            </div>
                        </div>
                  
                        </div>
                        <div class="row">
                        <div class="col d-flex justify-content-end">
                            <button class="btn btn-primary" type="submit"> حفظ التغييرات </button>
                        </div>
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
    </div>
</div>

<?php include "includes/footer.php";?>