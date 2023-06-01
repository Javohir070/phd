<?

use yii\data\ActiveDataProvider;
use yii\widgets\LinkPager;
?>
<style type="text/css">
	
</style>
        
        <div class="content-body"><!-- eCommerce statistic -->
            
            
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
                                            <td class="">
                                                Payme
                                            </td>
                                            <td class="">
                                                <?=$model->user->makeFIO()?>
                                                (<?=$model->user->region->viloyat_nomi?>)
                                            </td>
                                            <td class="">
                                                <?

                                                foreach ($model->korzinka as $k){
                                                    echo "<b> ";
                                                    echo $k->p_type . ": " ??"";
                                                    echo " </b>:";
                                                    echo (($k->p_type == 'kitob')? ($k->kitob->nomi ?? '') :(($k->p_type == 'hujjat')?($k->hujjat->title ?? '') : $k->mahsulot->nomi));
                                                    echo "</br>";

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
                                        </tr>
                                    <?endforeach;?>
                                    </tbody>
                                    <tfooter>
                                        <th colspan="7">
                                            <?=LinkPager::widget(['pagination'=>$orderProvider->pagination])?>
                                        </th>
                                    </tfooter>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            

        </div>
        <style type="text/css">
            .pagination li a{
                line-height: 1.8;
                padding: 6px 10px;
                font-size: 18px;
                border: 1px solid #669ff4;
                margin-left: 3px;
            }
            .pagination li a:hover{
                background-color: #669ff4;
                color: black;
            }
            .pagination{
                margin-left: 25px;
            }
        </style>