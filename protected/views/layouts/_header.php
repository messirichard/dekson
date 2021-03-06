<?php
$e_activemenu = $this->action->id;
$controllers_ac = $this->id;
$session=new CHttpSession;
$session->open();
$login_member = $session['login_member'];

$active_menu_pg = $controllers_ac.'/'.$e_activemenu;
?>

<header class="head headers <?php if ($active_menu_pg == 'home/index'): ?>homes_head<?php endif ?>">
  <div class="prelatife container d-none d-sm-block">
    <div class="tops_section">
      <div class="row">
        <div class="col-md-20"></div>
        <div class="col-md-40">
          <div class="rights_txt_info text-right">
            <ul class="list-inline">
              <?php
              $nums_wa = str_replace('08', '628',  str_replace(' ', '', $this->setting['contact_wa']) );
              ?>
              <li class="list-inline-item">WHATSAPP <i class="fa fa-whatsapp"></i> <a href="https://wa.me/<?php echo $nums_wa ?>"><?php echo $this->setting['contact_wa'] ?></a></li>
              <li class="list-inline-item"><a href="<?php echo CHtml::normalizeUrl(array('/home/project')); ?>">PROJECT REFERENCES</a></li>
              <li class="list-inline-item"><a href="<?php echo CHtml::normalizeUrl(array('/home/brochures')); ?>">BROCHURE</a></li>
              <li class="list-inline-item"><a href="<?php echo CHtml::normalizeUrl(array('/home/showroom')); ?>">SHOWROOM</a></li>
              <li class="list-inline-item"><a href="<?php echo CHtml::normalizeUrl(array('/home/contact')); ?>">CONTACT US</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="bottom_section">
      <div class="row">
        <div class="col-md-14">
          <div class="logo_head"><a href="<?php echo CHtml::normalizeUrl(array('/home/index')); ?>"><img src="<?php echo $this->assetBaseurl2; ?>lgo-heads-lic.png" alt="" class="img img-fluid"></a></div>
        </div>
        <div class="col-md-46">
          <div class="d-inline-block align-middle nbloc_steg">
            <span><a href="<?php echo CHtml::normalizeUrl(array('/product/landing')); ?>">PRODUCT<br>CATEGORY</a></span>
          </div>
          <div class="d-inline-block align-middle lines_bc_agrt">
            <img src="<?php echo $this->assetBaseurl2; ?>backs_lin_separators.jpg" alt="" class="img img-fluid">
          </div>
          <div class="menu_rightsl d-inline-block align-middle">
            <?php 
            // lim 8
            $criteria = new CDbCriteria;
            $criteria->with = array('description');
            $criteria->addCondition('t.parent_id = :parent_id');
            $criteria->params[':parent_id'] = 0;
            $criteria->addCondition('t.type = :type');
            $criteria->params[':type'] = 'category';
            $criteria->limit = 8;
            $criteria->order = 'sort ASC';
            $findCategorys_alln = PrdCategory::model()->findAll($criteria);
            ?>
            <ul class="list-inline">
              <?php foreach ($findCategorys_alln as $key => $value): ?>
              <li class="list-inline-item">
                <a href="<?php echo CHtml::normalizeUrl(array('/product/index', 'category'=> $value->id)); ?>"><?php echo ucwords($value->description->name) ?></a>
              </li>
              <?php endforeach ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="clear"></div>
  </div>
  
  <div class="d-block d-sm-none">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
      <a class="navbar-brand" href="<?php echo CHtml::normalizeUrl(array('/home/index')); ?>">
        <img src="<?php echo $this->assetBaseurl2 ?>lgo-heads-lic.png" alt="" class="img img-fluid">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item"><a class="nav-link" href="<?php echo CHtml::normalizeUrl(array('/home/index')); ?>">HOME</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              PRODUCTS
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <?php 
              // lim 8
              $criteria = new CDbCriteria;
              $criteria->with = array('description');
              $criteria->addCondition('t.parent_id = :parent_id');
              $criteria->params[':parent_id'] = 0;
              $criteria->addCondition('t.type = :type');
              $criteria->params[':type'] = 'category';
              $criteria->order = 'sort ASC';
              $findCategorys_alln = PrdCategory::model()->findAll($criteria);
              ?>
              <?php foreach ($findCategorys_alln as $key => $value): ?>
              <a class="dropdown-item" href="<?php echo CHtml::normalizeUrl(array('/product/index', 'category'=> $value->id)); ?>"><?php echo ucwords($value->description->name) ?></a>
              <?php endforeach ?>
            </div>
          </li>

          <li class="nav-item"><a class="nav-link" href="<?php echo CHtml::normalizeUrl(array('/home/project')); ?>">PROJECT REFERENCES</a></li>
          <li class="nav-item"><a class="nav-link" href="<?php echo CHtml::normalizeUrl(array('/home/brochures')); ?>">BROCHURE</a></li>
          <li class="nav-item"><a class="nav-link" href="<?php echo CHtml::normalizeUrl(array('/home/showroom')); ?>">SHOWROOM</a></li>
          <li class="nav-item"><a class="nav-link" href="<?php echo CHtml::normalizeUrl(array('/home/contact')); ?>">CONTACT US</a></li>
        </ul>
      </div>
    </nav>
  </div>
</header>


<section id="myAffix" class="header-affixs affix-top">
  <div class="clear height-15"></div>
  <div class="prelatife container">
    <div class="row">
      <div class="col-md-15 col-sm-15">
        <div class="lgo_web_headrs_wb">
          <a href="<?php echo CHtml::normalizeUrl(array('/home/index')); ?>">
            <img src="<?php echo $this->assetBaseurl2; ?>lgo-heads-lic.png" alt="" class="img img-fluid">
          </a>
        </div>
      </div>
      <div class="col-md-45 col-sm-45">
        <div class="text-right"> 
          <div class="menu-taffix">
            <ul class="list-inline d-inline">
              <li class="list-inline-item"><a href="<?php echo CHtml::normalizeUrl(array('/home/index')); ?>">HOME</a></li>
              <li class="list-inline-item"><a href="<?php echo CHtml::normalizeUrl(array('/product/landing')); ?>">PRODUCTS</a></li>
              <li class="list-inline-item"><a href="<?php echo CHtml::normalizeUrl(array('/home/project')); ?>">PROJECT REFERENCES</a></li>
              <li class="list-inline-item"><a href="<?php echo CHtml::normalizeUrl(array('/home/brochures')); ?>">BROCHURE</a></li>
              <li class="list-inline-item"><a href="<?php echo CHtml::normalizeUrl(array('/home/showroom')); ?>">SHOWROOM</a></li>
              <li class="list-inline-item"><a href="<?php echo CHtml::normalizeUrl(array('/home/contact')); ?>">CONTACT US</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="clear"></div>
  </div>
</section>


<script type="text/javascript">
  $(document).ready(function() {

  var sn_width = $(window).width();

  // console.log($(document).scrollTop());
  if (sn_width > 1150) {
      $('body').scroll(function(){

        var sntop1 = $(this).scrollTop();
        // console.log(sntop1);

        if(sntop1 > 115){
          $('.header-affixs').removeClass('affix-top').addClass('affix');
          // $('.header-affixs').addClass('affix');
        }else{
          $('.header-affixs.affix').removeClass('affix').addClass('affix-top');
          // $('body').css('padding-top', '0px');
        }
      });

    }

  });
</script>
