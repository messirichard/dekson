
<div class="py-4"></div>

<section class="home-sec-1">
    <div class="prelative container">
        <div class="row">
            <?php 
            $criteria = new CDbCriteria;
            $criteria->with = array('description');
            $criteria->addCondition('t.type = :type');
            $criteria->params[':type'] = 'filtercat';
            $criteria->order = 't.sort ASC';
            $criteria->limit = 2;
            $filterCat_par = PrdCategory::model()->findAll($criteria);
            ?>
            <?php foreach ($filterCat_par as $key => $value): ?>
            <div class="col-md-30">
                <div class="box-content">
                    <div class="image">
                        <img class="gambar img img-fluid" src="<?php echo Yii::app()->baseUrl.'/images/category/'. $value->image ?>" alt="">
                        <div class="judul"> <p><?php echo nl2br($value->description->name); ?></p> </div>

                        <div class="subjudul">
                            <p><?php echo $value->description->desc; ?></p>
                        </div>

                        <div class="click">
                            <a href="<?php echo CHtml::normalizeUrl(array('/product/index', 'filtercat'=> $value->id)); ?>">
                            <img src="<?php echo $this->assetBaseurl; ?>click.png" alt="">
                            <p>View product range</p>
                            </a>
                        </div>
                    </div>    
                </div>
            </div>
            <?php endforeach ?>

            <div class="col-md-60">
                <div class="box-content banner-full prelative">
                    <div class="image middle">
                        <img class="img img-fluid" src="<?php echo Yii::app()->baseUrl.'/images/static/'. $this->setting['home_banner1_pict'] ?>" alt="">
                    </div>
                    <div class="box-description-mid">
                        <p><?php echo $this->setting['home_banner1_title'] ?></p>
                        <div class="click-about-us">
                            <a href="<?php echo $this->setting['home_banner1_link'] ?>">
                            <img src="<?php echo $this->assetBaseurl; ?>click0.png" alt="">
                            </a>
                            <a data-fancybox href="https://www.youtube.com/watch?v=YCRgpZAWL20">See our video</a>
                        </div>
                    </div>
                </div>
            </div>

            <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
            <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

            <?php for ($i=1; $i < 4; $i++) { ?>
            <div class="col-md-20">
                <div class="box-content">
                    <div class="image bottom">
                        <img class="gambar img img-fluid" src="<?php echo Yii::app()->baseUrl.'/images/static/'. $this->setting['home2_icons_picture_'. $i] ?>" alt="">
                            <div class="judul1">
                                <p><?php echo nl2br($this->setting['home2_icons_title_'. $i]) ?></p>
                            </div>
                            <div class="subjudul1">
                                <p><?php echo nl2br($this->setting['home2_icons_info_'. $i]) ?></p>
                            </div>
                            <div class="klik">
                            <img src="<?php echo $this->assetBaseurl; ?>click.png" alt="">
                            <a href="<?php echo $this->setting['home2_icons_link_'. $i] ?>"><p> Click Here</p></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>

        </div>
    </div>
</section>

<?php 
$criteria=new CDbCriteria;
$criteria->with = array('description');
$criteria->addCondition('description.language_id = :language_id');
$criteria->params[':language_id'] = $this->languageID;
// $criteria->group = 't.id';
$criteria->order = 't.id ASC';
$lists_brand = Brand::model()->findAll($criteria);
?>
<section class="home-sec-2">
    <div class="prelative container2">
        <div class="row">
            <div class="col-md-60">
                <div class="our">
                    <p>OUR PARTNERS BRAND</p>
                </div>
            </div>

            <?php foreach ($lists_brand as $key => $value): ?>
            <div class="col-md-10 col-30">
                <div class="logo">
                    <img class="img img-fluid" src="<?php echo Yii::app()->baseUrl.'/images/brand/'. $value->image ?>" alt="">
                </div>
            </div>
            <?php endforeach ?>
    </div>
</section>