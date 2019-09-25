<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>

<?php echo $this->renderPartial('//layouts/_header', array()); ?>

<?php
    $criteria=new CDbCriteria;
    $criteria->with = array('description');
    $criteria->addCondition('description.language_id = :language_id');
    $criteria->addCondition('active = 1');
    $criteria->params[':language_id'] = $this->languageID;
    $criteria->group = 't.id';
    $criteria->order = 't.id ASC';
    $slide = Slide::model()->with(array('description'))->findAll($criteria);
?>
<div class="fcs-wrapper outers_fcs_wrapper prelatife wrapper-slide">

    <div id="myCarousel_home" class="carousel carousel-fade" data-ride="carousel" data-interval="45000000000">
        <div class="carousel-inner">
          <?php foreach ($slide as $key => $value): ?>
          <div class="carousel-item <?php if($key == 0): ?>active<?php endif ?> home-slider-new">
              <!--<img class="w-100 d-none d-sm-block" src="<?php echo $this->assetBaseurl2; ?>slide-1.jpg" alt="">-->
              <!--<img class="w-100 d-block d-sm-none" src="<?php echo $this->assetBaseurl2; ?>slide-1-mob.jpg" alt="">-->
              <img class="w-100 d-none d-sm-block" src="<?php echo Yii::app()->baseUrl.ImageHelper::thumb(1920,776, '/images/slide/'. $value->image , array('method' => 'adaptiveResize', 'quality' => '90')) ?>" alt="">
                    <img class="w-100 d-block d-sm-none" src="<?php echo Yii::app()->baseUrl.ImageHelper::thumb(774,867, '/images/slide/'. $value->image2 , array('method' => 'adaptiveResize', 'quality' => '90')) ?>" alt="">
              <div class="carousel-caption caption-slider-home mx-auto">
                <div class="prelatife container">
                  <div class="bxsl_tx_fcs">
                    <div class="row no-gutters">
                      <div class="col-md-60 mx-auto pt-3 text-left">
                        <h5><?php echo $value->description->title; ?></h5>
                        <p><?php echo nl2br($value->description->subtitle); ?></p>
                      </div>
                      <div class="col-md-60 mx-auto pt-3">
                        <a href="<?php echo $value->description->url ?>" class="profil mx-auto text-left d-block"><img src="<?php echo $this->assetBaseurl2; ?>ln_icon-chevron.png" alt="" class="img img-fluid d-inline-block pr-1"> View product range</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
         </div>
         <?php endforeach; ?>

	     </div>
        <ol class="carousel-indicators">
          <?php foreach ($slide as $key => $value): ?>
            <li data-target="#myCarousel_home" data-slide-to="<?php echo $key ?>" <?php if ($key == 0): ?>class="active"<?php endif ?>></li>
          <?php endforeach; ?>
        </ol>
    </div>

</div>

<?php echo $content ?>

<script type="text/javascript">
    $(document).ready(function(){
        
        if ($(window).width() >= 768) {
            var $item = $('#myCarousel_home.carousel .carousel-item'); 
            var $wHeight = $(window).height();
            $item.eq(0).addClass('active');
            $item.height($wHeight); 
            $item.addClass('full-screen');

            $('#myCarousel_home.carousel img.d-none.d-sm-block').each(function() {
              var $src = $(this).attr('src');
              var $color = $(this).attr('data-color');
              $(this).parent().css({
                'background-image' : 'url(' + $src + ')',
                'background-color' : $color
              });
              $(this).remove();
            });

            $(window).on('resize', function (){
              $wHeight = $(window).height();
              $item.height($wHeight);
            });

            $('#myCarousel_home.carousel').carousel({
              interval: 4000,
              pause: "false"
            });
        }

    });
</script>
<?php echo $this->renderPartial('//layouts/_footer2', array()); ?>
<?php $this->endContent(); ?>
