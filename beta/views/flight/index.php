<?php
use app\assets\FlightIndexAsset;

$bundle = FlightIndexAsset::register($this);
$this->title = 'Vé máy bay Hải Phi Yến';
?>
<div class="container-fluid">
    <div id="content-page-container" class="row hidden-xs">
        <div id="promotions-slider" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#promotions-slider" data-slide-to="0" class="active"></li>
                <li data-target="#promotions-slider" data-slide-to="1"></li>
                <li data-target="#promotions-slider" data-slide-to="2"></li>
                <li data-target="#promotions-slider" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="http://placehold.it/1600x600" alt="Chania">
                </div>
                <div class="item">
                    <img src="http://placehold.it/1600x600" alt="Chania">
                </div>
                <div class="item">
                    <img src="http://placehold.it/1600x600" alt="Flower">
                </div>
                <div class="item">
                    <img src="http://placehold.it/1600x600" alt="Flower">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#promotions-slider" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Trước</span>
            </a>
            <a class="right carousel-control" href="#promotions-slider" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Sau</span>
            </a>
        </div>
        <div id="book-form-large" class="col-sm-3">
            <form role="form">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="radio">
                            <label class="color-black">
                                <input class="linked" type="radio" name="round-trip" value="0" checked>Một chiều
                            </label>
                        </div>
                        <div class="radio">
                            <label class="color-black">
                                <input class="linked" type="radio" name="round-trip" value="1">Khứ hồi
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group label-floating col-sm-6">
                            <div class="row" style="margin-right: 5px">
                                <label class="control-label">Điểm đi</label>
                                <input class="form-control linked" type="text" name="place-from">
                            </div>
                        </div>
                        <div class="form-group label-floating col-sm-6">
                            <div class="row">
                                <label class="control-label">Điểm đến</label>
                                <input class="form-control linked" type="text" name="place-to">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group label-floating col-sm-6">
                            <div class="row" style="margin-right: 5px">
                                <label class="control-label">Ngày đi</label>
                                <div class="input-group date" data-provide="datepicker">
                                    <input class="form-control datepicker linked" type="text" readonly name="date-depart">
                                    <div class="input-group-addon">
                                        <span class="fa fa-calendar"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group label-floating col-sm-6">
                            <div class="row show-unless-round-trip" style="display: none">
                                <label class="control-label">Ngày về</label>
                                <div class="input-group date" data-provide="datepicker">
                                    <input class="form-control datepicker linked" type="text" readonly name="date-return">
                                    <div class="input-group-addon">
                                        <span class="fa fa-calendar"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group label-static col-sm-4">
                            <div class="row" style="margin-right: 5px">
                                <label class="control-label color-black">Người lớn</label>
                                <select class="select form-control linked" name="adult">
                                    <?php foreach (range(1, 30) as $index) : ?>
                                    <option value="<?= $index ?>"><?= $index ?></option>
                                    <?php endforeach ?>
                                </select>
                                <span class="help-block"><code>trên 12 tuổi</code></span>
                            </div>
                        </div>
                        <div class="form-group label-static col-sm-4">
                            <div class="row" style="margin-right: 5px">
                                <label class="control-label color-black">Trẻ em</label>
                                <select class="select form-control linked" name="child">
                                    <?php foreach (range(0, 30) as $index) : ?>
                                    <option value="<?= $index ?>"><?= $index ?></option>
                                    <?php endforeach ?>
                                </select>
                                <span class="help-block"><code>2 đến 12 tuổi</code></span>
                            </div>
                        </div>
                        <div class="form-group label-static col-sm-4">
                            <div class="row">
                                <label class="control-label color-black">Em bé</label>
                                <select class="select form-control linked" name="infant">
                                    <?php foreach (range(0, 30) as $index) : ?>
                                    <option value="<?= $index ?>"><?= $index ?></option>
                                    <?php endforeach ?>
                                </select>
                                <span class="help-block"><code>dưới 2 tuổi</code></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: 15px">
                    <div class="col-sm-12">
                        <button class="btn btn-primary btn-raised pull-right" role="button">Tìm vé</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div id="book-form-small" class="visible-xs-block">
            <form role="form">
                <div class="row">
                    <div class="form-group col-sm-12">
                        <div class="radio">
                            <label class="color-black">
                                <input class="linked" type="radio" name="round-trip" value="0" checked>Một chiều
                            </label>
                        </div>
                        <div class="radio">
                            <label class="color-black">
                                <input class="linked" type="radio" name="round-trip" value="1">Khứ hồi
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group label-floating col-sm-6">
                            <div class="row">
                                <label class="control-label">Điểm đi</label>
                                <input class="form-control linked" type="text" name="place-from">
                            </div>
                        </div>
                        <div class="form-group label-floating col-sm-6">
                            <div class="row">
                                <label class="control-label">Điểm đến</label>
                                <input class="form-control linked" type="text" name="place-to">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group label-floating col-sm-6">
                            <div class="row">
                                <label class="control-label">Ngày đi</label>
                                <div class="input-group date" data-provide="datepicker">
                                    <input class="form-control datepicker linked" type="text" readonly name="date-depart">
                                    <div class="input-group-addon">
                                        <span class="fa fa-calendar"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group label-floating col-sm-6">
                            <div class="row show-unless-round-trip" style="display: none">
                                <label class="control-label">Ngày về</label>
                                <div class="input-group date" data-provide="datepicker">
                                    <input class="form-control datepicker linked" type="text" readonly name="date-return">
                                    <div class="input-group-addon">
                                        <span class="fa fa-calendar"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group label-static col-sm-4">
                            <div class="row">
                                <label class="control-label color-black">Người lớn <code>trên 12 tuổi</code></label>
                                <select class="select form-control linked" name="adult">
                                    <?php foreach (range(1, 30) as $index) : ?>
                                    <option value="<?= $index ?>"><?= $index ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group label-static col-sm-4">
                            <div class="row">
                                <label class="control-label color-black">Trẻ em <code>2 đến 12 tuổi</code></label>
                                <select class="select form-control linked" name="child">
                                    <?php foreach (range(0, 30) as $index) : ?>
                                    <option value="<?= $index ?>"><?= $index ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group label-static col-sm-4">
                            <div class="row">
                                <label class="control-label color-black">Em bé <code>dưới 2 tuổi</code></label>
                                <select class="select form-control linked" name="infant">
                                    <?php foreach (range(0, 30) as $index) : ?>
                                    <option value="<?= $index ?>"><?= $index ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <button class="btn btn-primary btn-raised pull-right" role="button">Tìm vé</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
