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
              <li class="list-inline-item">WHATSAPP <i class="fa fa-whatsapp"></i> 081 2235 57575</li>
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
            <span>PRODUCT<br>CATEGORY</span>
          </div>
          <div class="d-inline-block align-middle lines_bc_agrt">
            <img src="<?php echo $this->assetBaseurl2; ?>backs_lin_separators.jpg" alt="" class="img img-fluid">
          </div>
          <div class="menu_rightsl d-inline-block align-middle">
            <ul class="list-inline">
              <li class="list-inline-item"><a href="<?php echo CHtml::normalizeUrl(array('/home/product')); ?>">Door & Window</a></li>
              <li class="list-inline-item"><a href="<?php echo CHtml::normalizeUrl(array('/home/product')); ?>">Slide & Fold Door</a></li>
              <li class="list-inline-item"><a href="<?php echo CHtml::normalizeUrl(array('/home/product')); ?>">Glass</a></li>
              <li class="list-inline-item"><a href="<?php echo CHtml::normalizeUrl(array('/home/product')); ?>">Aluminum</a></li>
              <li class="list-inline-item"><a href="<?php echo CHtml::normalizeUrl(array('/home/product')); ?>">Steel Door</a></li>
              <li class="list-inline-item"><a href="<?php echo CHtml::normalizeUrl(array('/home/product')); ?>">Furniture</a></li>
              <li class="list-inline-item"><a href="<?php echo CHtml::normalizeUrl(array('/home/product')); ?>">Electronic Lock</a></li>
              <li class="list-inline-item"><a href="<?php echo CHtml::normalizeUrl(array('/home/product')); ?>">Others</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="clear"></div>
  </div>
  
  <div class="d-block d-sm-none">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <a class="navbar-brand" href="#">
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
              <a class="dropdown-item" href="<?php echo CHtml::normalizeUrl(array('/home/product')); ?>">Door & Window</a>
              <a class="dropdown-item" href="<?php echo CHtml::normalizeUrl(array('/home/product')); ?>">Slide & Fold Door</a>
              <a class="dropdown-item" href="<?php echo CHtml::normalizeUrl(array('/home/product')); ?>">Glass</a>
              <a class="dropdown-item" href="<?php echo CHtml::normalizeUrl(array('/home/product')); ?>">Aluminum</a>
              <a class="dropdown-item" href="<?php echo CHtml::normalizeUrl(array('/home/product')); ?>">Steel Door</a>
              <a class="dropdown-item" href="<?php echo CHtml::normalizeUrl(array('/home/product')); ?>">Furniture</a>
              <a class="dropdown-item" href="<?php echo CHtml::normalizeUrl(array('/home/product')); ?>">Electronic Lock</a>
              <a class="dropdown-item" href="<?php echo CHtml::normalizeUrl(array('/home/product')); ?>">Others</a>
            </div>
          </li>

          <li class="nav-item"><a class="nav-link" href="<?php echo CHtml::normalizeUrl(array('/home/project')); ?>">PROJECT REFERENCES</a></li>
          <li class="nav-item"><a class="nav-link" href="<?php echo CHtml::normalizeUrl(array('/home/brochrues')); ?>">BROCHURE</a></li>
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
          <a href="#">
            <img src="<?php echo $this->assetBaseurl2; ?>lgo-heads-lic.pn" alt="" class="img img-fluid">
          </a>
        </div>
      </div>
      <div class="col-md-45 col-sm-45">
        <div class="text-right"> 
          <div class="menu-taffix">
            <ul class="list-inline d-inline">
              <li class="list-inline-item"><a href="<?php echo CHtml::normalizeUrl(array('/home/index')); ?>">HOME</a></li>
              <li class="list-inline-item"><a href="<?php echo CHtml::normalizeUrl(array('/home/product')); ?>">PRODUCTS</a></li>
              <li class="list-inline-item"><a class="nav-link" href="<?php echo CHtml::normalizeUrl(array('/home/project')); ?>">PROJECT REFERENCES</a></li>
              <li class="list-inline-item"><a class="nav-link" href="<?php echo CHtml::normalizeUrl(array('/home/brochrues')); ?>">BROCHURE</a></li>
              <li class="list-inline-item"><a class="nav-link" href="<?php echo CHtml::normalizeUrl(array('/home/showroom')); ?>">SHOWROOM</a></li>
              <li class="list-inline-item"><a class="nav-link" href="<?php echo CHtml::normalizeUrl(array('/home/contact')); ?>">CONTACT US</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="clear"></div>
  </div>
</section>

<script type="text/javascript">
  $(document).ready(function(){
      // $('.nl_popup a').live('hover', function(){
      //     $('.popup_carts_header').fadeIn();
      // });
      // $('.popup_carts_header').live('mouseleave', function(){
      //   setTimeout(function(){ 
      //       $('.popup_carts_header').fadeOut();
      //   }, 500);
      // });
  });
</script>


<script type="text/javascript">
  $(document).ready(function(){

  var sn_width = $(window).width();
  var offset = $('body').scrollTop();

  if (sn_width > 1150) {
      $(window).scroll(function(){
        var sntop1 = $(window).scrollTop();
        console.log(sntop1);

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
