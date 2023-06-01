<style type="text/css">
	
</style>
        
        <div class="content-body"><!-- eCommerce statistic -->
            
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-12">
                    <div class="card pull-up">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="media-body text-left">
                                        <h3 class="info">450</h3>
                                        <h6>Barcha sotilgan mahsulotlar</h6>
                                    </div>
                                    <div>
                                        <i class="icon-basket-loaded info font-large-2 float-right"></i>
                                    </div>
                                </div>
                                <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                    <div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 80%"
                                         aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-12">
                    <div class="card pull-up">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="media-body text-left">
                                        <h3 class="warning">74</h3>
                                        <h6>Barcha yuklangan mahsulotlar</h6>
                                    </div>
                                    <div>
                                        <i class="icon-pie-chart warning font-large-2 float-right"></i>
                                    </div>
                                </div>
                                <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                    <div class="progress-bar bg-gradient-x-warning" role="progressbar"
                                         style="width: 65%" aria-valuenow="65" aria-valuemin="0"
                                         aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-12">
                    <div class="card pull-up">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="media-body text-left">
                                        <h3 class="success">46</h3>
                                        <h6>Barcha foydalanuvchilar</h6>
                                    </div>
                                    <div>
                                        <i class="icon-user-follow success font-large-2 float-right"></i>
                                    </div>
                                </div>
                                <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                    <div class="progress-bar bg-gradient-x-success" role="progressbar"
                                         style="width: 75%" aria-valuenow="75" aria-valuemin="0"
                                         aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-12">
                    <div class="card pull-up">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="media-body text-left">
                                        <h3 class="danger">89</h3>
                                        <h6>Almashinilgan mahsulotlar</h6>
                                    </div>
                                    <div>
                                        <i class="icon-heart danger font-large-2 float-right"></i>
                                    </div>
                                </div>
                                <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                    <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 85%"
                                         aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ eCommerce statistic -->

            <!-- Products sell and New Orders -->
            <!-- <div class="row match-height">
                <div class="col-xl-8 col-12" id="ecommerceChartView">
                    <div class="card card-shadow">
                        <div class="card-header card-header-transparent py-20">
                            <div class="btn-group dropdown">
                                <a href="#" class="text-body dropdown-toggle blue-grey-700" data-toggle="dropdown">MAHSULOTLAR SOTILISHI</a>
                                <div class="dropdown-menu animate" role="menu">
                                    <a class="dropdown-item" href="#" role="menuitem">Sotish</a>
                                    <a class="dropdown-item" href="#" role="menuitem">Umumiy sotish</a>
                                    <a class="dropdown-item" href="#" role="menuitem">foyda</a>
                                </div>
                            </div>
                            <ul class="nav nav-pills nav-pills-rounded chart-action float-right btn-group" role="group">
                                <li class="nav-item"><a class="active nav-link" data-toggle="tab"
                                                        href="#scoreLineToDay">Kunlik</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab"
                                                        href="#scoreLineToWeek">Haftalik</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#scoreLineToMonth">Oylik</a>
                                </li>
                            </ul>
                        </div>
                        <div class="widget-content tab-content bg-white p-20">
                            <div class="ct-chart tab-pane active scoreLineShadow" id="scoreLineToDay"></div>
                            <div class="ct-chart tab-pane scoreLineShadow" id="scoreLineToWeek"></div>
                            <div class="ct-chart tab-pane scoreLineShadow" id="scoreLineToMonth"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Oxirgi sotuvlar</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content">
                            <div id="new-orders" class="media-list position-relative">
                                <div class="table-responsive">
                                    <table id="new-orders-table" class="table table-hover table-xl mb-0">
                                        <thead>
                                        <tr>
                                            <th class="border-top-0">Mahsulot</th>
                                            <th class="border-top-0">Oluvchi</th>
                                            <th class="border-top-0">Barchasi</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="text-truncate">Psixologik to'plam</td>
                                            <td class="text-truncate p-1">
                                                <ul class="list-unstyled users-list m-0">
                                                    <li data-toggle="tooltip" data-popup="tooltip-custom"
                                                        data-original-title="Jonibek" class="avatar avatar-sm pull-up">
                                                        <img class="media-object rounded-circle"
                                                             src="/web/backend/app-assets/images/portrait/small/avatar-s-19.png"
                                                             alt="Avatar">
                                                    </li>
                                                    <li data-toggle="tooltip" data-popup="tooltip-custom"
                                                        data-original-title="Kaniza"
                                                        class="avatar avatar-sm pull-up">
                                                        <img class="media-object rounded-circle"
                                                             src="/web/backend/app-assets/images/portrait/small/avatar-s-18.png"
                                                             alt="Avatar">
                                                    </li>
                                                    <li data-toggle="tooltip" data-popup="tooltip-custom"
                                                        data-original-title="Davron"
                                                        class="avatar avatar-sm pull-up">
                                                        <img class="media-object rounded-circle"
                                                             src="/web/backend/app-assets/images/portrait/small/avatar-s-17.png"
                                                             alt="Avatar">
                                                    </li>
                                                    <li class="avatar avatar-sm">
                                                        <span class="badge badge-info">+4 ko'proq</span>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td class="text-truncate">800999</td>
                                        </tr>
                                        <tr>
                                            <td class="text-truncate">Pedagogik to'plam</td>
                                            <td class="text-truncate p-1">
                                                <ul class="list-unstyled users-list m-0">
                                                    <li data-toggle="tooltip" data-popup="tooltip-custom"
                                                        data-original-title="Gulmira"
                                                        class="avatar avatar-sm pull-up">
                                                        <img class="media-object rounded-circle"
                                                             src="/web/backend/app-assets/images/portrait/small/avatar-s-16.png"
                                                             alt="Avatar">
                                                    </li>
                                                    <li data-toggle="tooltip" data-popup="tooltip-custom"
                                                        data-original-title="Doston"
                                                        class="avatar avatar-sm pull-up">
                                                        <img class="media-object rounded-circle"
                                                             src="/web/backend/app-assets/images/portrait/small/avatar-s-15.png"
                                                             alt="Avatar">
                                                    </li>
                                                </ul>
                                            </td>
                                            <td class="text-truncate">550050</td>
                                        </tr>
                                        <tr>
                                            <td class="text-truncate">Bolajonlarga</td>
                                            <td class="text-truncate p-1">
                                                <ul class="list-unstyled users-list m-0">
                                                    <li data-toggle="tooltip" data-popup="tooltip-custom"
                                                        data-original-title="Diyorbek"
                                                        class="avatar avatar-sm pull-up">
                                                        <img class="media-object rounded-circle"
                                                             src="/web/backend/app-assets/images/portrait/small/avatar-s-11.png"
                                                             alt="Avatar">
                                                    </li>
                                                    <li data-toggle="tooltip" data-popup="tooltip-custom"
                                                        data-original-title="Sadoqat"
                                                        class="avatar avatar-sm pull-up">
                                                        <img class="media-object rounded-circle"
                                                             src="/web/backend/app-assets/images/portrait/small/avatar-s-10.png"
                                                             alt="Avatar">
                                                    </li>
                                                    <li data-toggle="tooltip" data-popup="tooltip-custom"
                                                        data-original-title="Sabina"
                                                        class="avatar avatar-sm pull-up">
                                                        <img class="media-object rounded-circle"
                                                             src="/web/backend/app-assets/images/portrait/small/avatar-s-9.png"
                                                             alt="Avatar">
                                                    </li>
                                                    <li class="avatar avatar-sm">
                                                        <span class="badge badge-info">+3 ko'proq</span>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td class="text-truncate">900 000</td>
                                        </tr>
                                        <tr>
                                            <td class="text-truncate">Terapiya</td>
                                            <td class="text-truncate p-1">
                                                <ul class="list-unstyled users-list m-0">
                                                    <li data-toggle="tooltip" data-popup="tooltip-custom"
                                                        data-original-title="Shoxrux"
                                                        class="avatar avatar-sm pull-up">
                                                        <img class="media-object rounded-circle"
                                                             src="/web/backend/app-assets/images/portrait/small/avatar-s-14.png"
                                                             alt="Avatar">
                                                    </li>
                                                    <li data-toggle="tooltip" data-popup="tooltip-custom"
                                                        data-original-title="Behruz"
                                                        class="avatar avatar-sm pull-up">
                                                        <img class="media-object rounded-circle"
                                                             src="/web/backend/app-assets/images/portrait/small/avatar-s-13.png"
                                                             alt="Avatar">
                                                    </li>
                                                    <li data-toggle="tooltip" data-popup="tooltip-custom"
                                                        data-original-title="Shoxruz"
                                                        class="avatar avatar-sm pull-up">
                                                        <img class="media-object rounded-circle"
                                                             src="/web/backend/app-assets/images/portrait/small/avatar-s-12.png"
                                                             alt="Avatar">
                                                    </li>
                                                </ul>
                                            </td>
                                            <td class="text-truncate">750 000</td>
                                        </tr>
                                        <tr>
                                            <td class="text-truncate">Psixogimnastika</td>
                                            <td class="text-truncate p-1">
                                                <ul class="list-unstyled users-list m-0">
                                                    <li data-toggle="tooltip" data-popup="tooltip-custom"
                                                        data-original-title="Jamshid"
                                                        class="avatar avatar-sm pull-up">
                                                        <img class="media-object rounded-circle"
                                                             src="/web/backend/app-assets/images/portrait/small/avatar-s-8.png"
                                                             alt="Avatar">
                                                    </li>
                                                    <li data-toggle="tooltip" data-popup="tooltip-custom"
                                                        data-original-title="Asror"
                                                        class="avatar avatar-sm pull-up">
                                                        <img class="media-object rounded-circle"
                                                             src="/web/backend/app-assets/images/portrait/small/avatar-s-7.png"
                                                             alt="Avatar">
                                                    </li>
                                                    <li data-toggle="tooltip" data-popup="tooltip-custom"
                                                        data-original-title="Abror"
                                                        class="avatar avatar-sm pull-up">
                                                        <img class="media-object rounded-circle"
                                                             src="/web/backend/app-assets/images/portrait/small/avatar-s-6.png"
                                                             alt="Avatar">
                                                    </li>
                                                    <li class="avatar avatar-sm">
                                                        <span class="badge badge-info">+1 ko'proq</span>
                                                    </li>
                                                </ul>
                                            </td>
                                            <td class="text-truncate">850000</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!--/ Products sell and New Orders -->

            <!-- Recent Transactions -->
            <div class="row">
                <div id="recent-transactions" class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Oxirgi bitimlar</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a class="btn btn-sm btn-danger box-shadow-2 round btn-min-width pull-right"
                                           href="#" target="_blank">Hisob -faktura xulosasi</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="table-responsive">
                                <table id="recent-orders" class="table table-hover table-xl mb-0">
                                    <thead>
                                    <tr>
                                        <th class="border-top-0">Holat</th>
                                        <th class="border-top-0">Payme Click</th>
                                        <th class="border-top-0">Mijoz ismi</th>
                                        <th class="border-top-0">Mahsulotlar</th>
                                        <th class="border-top-0">Miqdori</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?foreach ($orderProvider->models as $model):?>
                                    <tr>
                                        <td class="text-truncate">
                                            <?if($model->state == 2):?>
                                            <i class="la la-dot-circle-o success font-medium-1 mr-1"></i> To'langan
                                            <?else:?>
                                                <i class="la la-dot-circle-o danger font-medium-1 mr-1"></i> To'lanmagan
                                            <?endif;?>
                                        </td>
                                        <td class="text-truncate">
                                            Payme
                                        </td>
                                        <td class="text-truncate">
                                            <?=$model->user->makeFIO()?>
                                            (<?=$model->user->region->viloyat_nomi?>)
                                        </td>
                                        <td class="text-truncate p-1">
                                            <?
                                                foreach ($model->korzinka as $k){
                                                    echo "<b>" . $k->p_type . "</b>:".(($k->p_type == 'kitob')? ($k->kitob->nomi ?? '') :(($k->p_type == 'hujjat')?($k->hujjat->title ?? '') : $k->mahsulot->nomi))."</br>";
                                                }
                                            ?>
                                        </td>
                                        <td>
                                            <?=$model->amount?>
                                        </td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <a href="/site/removeorder/<?=$model->id?>" class="btn btn-danger">
                                                    O'chirish
                                                </a>
                                            </div>
                                        </td>
                                        <td class="text-truncate"></td>
                                    </tr>
                                    <?endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Recent Transactions -->

            <!--Recent Orders & Monthly Sales -->
            <!-- <div class="row match-height">
                <div class="col-xl-8 col-lg-12">
                    <div class="card">
                        <div class="card-content ">
                            <div id="cost-revenue" class="height-250 position-relative"></div>
                        </div>
                        <div class="card-footer">
                            <div class="row mt-1">
                                <div class="col-3 text-center">
                                    <h6 class="text-muted">Jami mahsulotlar</h6>
                                    <h2 class="block font-weight-normal">18.6 mln</h2>
                                    <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                        <div class="progress-bar bg-gradient-x-info" role="progressbar"
                                             style="width: 70%" aria-valuenow="70" aria-valuemin="0"
                                             aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="col-3 text-center">
                                    <h6 class="text-muted">Umumiy sotuvlar</h6>
                                    <h2 class="block font-weight-normal">64.54 mln</h2>
                                    <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                        <div class="progress-bar bg-gradient-x-warning" role="progressbar"
                                             style="width: 60%" aria-valuenow="60" aria-valuemin="0"
                                             aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="col-3 text-center">
                                    <h6 class="text-muted">Umumiy xarajatlar</h6>
                                    <h2 class="block font-weight-normal">24.38 mln</h2>
                                    <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                        <div class="progress-bar bg-gradient-x-danger" role="progressbar"
                                             style="width: 40%" aria-valuenow="40" aria-valuemin="0"
                                             aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="col-3 text-center">
                                    <h6 class="text-muted">Jami daromad</h6>
                                    <h2 class="block font-weight-normal">36.72 mln</h2>
                                    <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                        <div class="progress-bar bg-gradient-x-success" role="progressbar"
                                             style="width: 90%" aria-valuenow="90" aria-valuemin="0"
                                             aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body sales-growth-chart">
                                <div id="monthly-sales" class="height-250"></div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="chart-title mb-1 text-center">
                                <h6>Jami oylik sotish.</h6>
                            </div>
                            <div class="chart-stats text-center">
                                <a href="#" class="btn btn-sm btn-danger box-shadow-2 mr-1">Statistika <i
                                        class="ft-bar-chart"></i></a> <span class="text-muted">oxirgi yil uchun.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!--/Recent Orders & Monthly Sales -->

        </div>