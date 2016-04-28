<?php
use app\assets\PromotionNewsIndexAsset;
use yii\helpers\Url;

PromotionNewsIndexAsset::register($this);
$this->title = 'Vé máy bay Hải Phi Yến | Khuyến mãi';
?>
<div class="container">
    <div class="row">
        <div id="promotions-slider" class="carousel slide hidden-xs" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#promotions-slider" data-slide-to="0" class="active"></li>
                <li data-target="#promotions-slider" data-slide-to="1"></li>
                <li data-target="#promotions-slider" data-slide-to="2"></li>
                <li data-target="#promotions-slider" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <a href="<?= Url::toRoute(['promotion-news/info', 'alias' => 'lorem-ipsum-dolor-sit-amet-consectetuer-adipiscing-elit']) ?>"><img src="http://placehold.it/1600x600"></a>
                </div>
                <div class="item">
                    <a href="<?= Url::toRoute(['promotion-news/info', 'alias' => 'lorem-ipsum-dolor-sit-amet-consectetuer-adipiscing-elit']) ?>"><img src="http://placehold.it/1600x600"></a>
                </div>
                <div class="item">
                    <a href="<?= Url::toRoute(['promotion-news/info', 'alias' => 'lorem-ipsum-dolor-sit-amet-consectetuer-adipiscing-elit']) ?>"><img src="http://placehold.it/1600x600"></a>
                </div>
                <div class="item">
                    <a href="<?= Url::toRoute(['promotion-news/info', 'alias' => 'lorem-ipsum-dolor-sit-amet-consectetuer-adipiscing-elit']) ?>"><img src="http://placehold.it/1600x600"></a>
                </div>
            </div>
            <a class="left carousel-control" href="#promotions-slider" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Trước</span>
            </a>
            <a class="right carousel-control" href="#promotions-slider" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Sau</span>
            </a>
        </div>
        <div id="left-side" class="col-md-3 hidden-sm hidden-xs">
            <div class="row" style="margin-right: -7px">
                <div id="panel-box">
                    <div class="panel">
                        <img src="http://placehold.it/600x900">
                    </div>
                    <div class="panel">
                        <img src="http://placehold.it/600x900">
                    </div>
                </div>
            </div>
        </div>
        <div id="right-side" class="col-md-9">
            <div class="row">
                <div id="promotion-news-box">
                    <div class="promotion-news bg-white">
                        <img src="http://placehold.it/1600x600">
                        <h2><a class="color-blue" href="<?= Url::toRoute(['promotion-news/info', 'alias' => 'lorem-ipsum-dolor-sit-amet-consectetuer-adipiscing-elit']) ?>">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a></h2>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean commodo ligula eget dolor.</p>
                        <a class="btn btn-danger btn-fab pull-right" href="<?= Url::toRoute(['promotion-news/info', 'alias' => 'lorem-ipsum-dolor-sit-amet-consectetuer-adipiscing-elit']) ?>" role="button"><i class="material-icons">near_me</i></a>
                    </div>
                    <div class="promotion-news bg-white">
                        <img src="http://placehold.it/1600x600">
                        <h2><a class="color-blue" href="<?= Url::toRoute(['promotion-news/info', 'alias' => 'lorem-ipsum-dolor-sit-amet-consectetuer-adipiscing-elit']) ?>">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a></h2>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean commodo ligula eget dolor.</p>
                        <a class="btn btn-danger btn-fab pull-right" href="<?= Url::toRoute(['promotion-news/info', 'alias' => 'lorem-ipsum-dolor-sit-amet-consectetuer-adipiscing-elit']) ?>" role="button"><i class="material-icons">near_me</i></a>
                    </div>
                    <div class="promotion-news bg-white">
                        <img src="http://placehold.it/1600x600">
                        <h2><a class="color-blue" href="<?= Url::toRoute(['promotion-news/info', 'alias' => 'lorem-ipsum-dolor-sit-amet-consectetuer-adipiscing-elit']) ?>">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a></h2>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean commodo ligula eget dolor.</p>
                        <a class="btn btn-danger btn-fab pull-right" href="<?= Url::toRoute(['promotion-news/info', 'alias' => 'lorem-ipsum-dolor-sit-amet-consectetuer-adipiscing-elit']) ?>" role="button"><i class="material-icons">near_me</i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
