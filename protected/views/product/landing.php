<section class="covertop-products mb-3">
    <div class="prelatife container"> 
        <div class="row inners_section">
            <div class="col-md-20 my-auto align-middle py-5">
                <div class="description_text py-5">
                    <h3>Products</h3>
                    <p>Dekkson is the best partner you’ll ever need for any projects that needs specific architectural hardware and accesories in various type of infrastructure.</p>
                </div>
            </div>
            <div class="col-md-40">
                <div class="banner_picture">
                    <img src="<?php echo $this->assetBaseurl2 ?>ill-pict-products.jpg" alt="" class="img img-fluid"></div>
            </div>
        </div>
        <div class="clear clearfix"></div>
    </div>    
</section>

<section class="breadcrumb-det">
    <div class="prelative container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo CHtml::normalizeUrl(array('/home/index')); ?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Products</li>
            </ol>
        </nav>
    </div>
</section>

<?php echo $this->renderPartial('//layouts/_top_filters_product', array()); ?>

<section class="product-sec-1">
  <div class="prelative container">
    <div class="row">
      <div class="col-md-60">
        <div class="box-content">
          <div class="title">
            <h3>Browse Dekkson Collection Series</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="product-sec-2">
    <div class="prelative container">
        <div class="row no-gutters">
			<?php foreach($m_filter as $n_key => $n_value): ?>
            <div class="col-md-30">
                <div class="box-content">
                    <div class="image">
                    	<img class="gambar img img-fluid" src="<?php echo Yii::app()->baseUrl.'/images/category/'. $n_value->image ?>" alt="">
                    </div>
                    <div class="title">
                        <p><?php echo nl2br($n_value->description->name); ?></p>
                    </div>
                    <div class="subtitle">
                        <p><?php echo $n_value->description->desc; ?></p>
                    </div>
                    <div class="klik">
                        <img src="<?php echo $this->assetBaseurl; ?>click.png" alt="">
                        <a href="<?php echo CHtml::normalizeUrl(array('/product/index', 'filtercat'=> $n_value->id)); ?>"><p> View product range</p></a>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
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
<!-- <div class="py-5"></div> -->
<div class="py-5"></div>
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


<?php
/*
<div class="clear"></div>
<div class="subpage defaults_static">
  <div class="top_title_page margin-bottom-40">
    <div class="prelatife container">
      <h2 class="title_pg">Lihat Kategori Produk Aldo Tools & Hardware</h2>
    </div>
  </div>

  <div class="middle inside_content">
    <div class="prelatife container">

    	<div class="lists_subCategory_dataLanding">
    		<div class="row">
    			<?php foreach ($subCategory as $key => $value): ?>
    			<div class="col-lg-3 col-md-4 col-sm-6">
    				<div class="items text-center">
    					<div class="pict"><a href="<?php echo CHtml::normalizeUrl(array('/product/index', 'category'=>$value->id)); ?>"><img src="<?php echo Yii::app()->baseUrl.ImageHelper::thumb(319,365, '/images/category/'.$value->image , array('method' => 'adaptiveResize', 'quality' => '90')) ?>" alt="" class="img-responsive"></a></div>
    					<div class="titles">
    						<a href="<?php echo CHtml::normalizeUrl(array('/product/index', 'category'=>$value->id)); ?>"><?php echo $value->description->name ?></a>
    					</div>
    					<div class="clear"></div>
    				</div>
    			</div>
    			<?php endforeach ?>
    		</div>
    	</div>
    	<div class="clear height-20"></div>

    	<div class="lists_banner_home_dt new_picture">
			<div class="row">
				<div class="col-md-3 col-sm-6">
					<div class="items prelatife">
						<div class="pict">
							<img src="<?php echo $this->assetBaseurl ?>banner_atHome_1.jpg" alt="" class="img-responsive">
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="items prelatife">
						<div class="pict">
							<img src="<?php echo $this->assetBaseurl ?>banner_atHome_2.jpg" alt="" class="img-responsive">
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="items prelatife">
						<div class="pict">
							<img src="<?php echo $this->assetBaseurl ?>banner_atHome_3.jpg" alt="" class="img-responsive">
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="items prelatife">
						<div class="pict">
							<img src="<?php echo $this->assetBaseurl ?>banner_atHome_4.jpg" alt="" class="img-responsive">
						</div>
					</div>
				</div>
			</div>
		</div>

    	<!-- End landing product -->
    	<div class="clear"></div>
    </div>

    <div class="clear"></div>
  </div>

  <div class="clear"></div>
</div>
*/ ?>