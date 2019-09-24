<section class="covertop-products mb-3">
    <div class="prelatife container">
        <div class="row inners_section">
            <div class="col-md-20 my-auto align-middle py-5">
                <div class="description_text py-5">
                    <h3>Products</h3>
                    <p>Feel free to browse and download Dekkson’s product brochures for your references. </p>
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

<?php 
$str_category = $strCategory->description->name;
?>
<section class="breadcrumb-det">
    <div class="prelative container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo CHtml::normalizeUrl(array('/home/index')); ?>">Home</a></li>
                <li class="breadcrumb-item"><a href="<?php echo CHtml::normalizeUrl(array('/product/landing')); ?>">Products</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $str_category ?></li>
            </ol>
        </nav>
    </div>
</section>

<!-- KURANG FORM -->

<div class="prelatife container">
    <section class="block-top-filterblue p-5">
        <h3 class="text-center">Find Dekkson Products</h3>
        <div class="py-1"></div>
        <form method="post" action="#" onsubmit="alert('underconstruction'); return false;">
            <div class="row no-gutters justify-content-center">
                <div class="col">
                      <div class="form-group">
                        <label for="exampleIn1">Accessories type</label>
                        <select name="" id="" class="form-control">
                            <option value="">All</option>
                        </select>
                      </div>
                </div>
                <div class="col">
                      <div class="form-group">
                        <label for="exampleIn1">Material</label>
                        <select name="" id="" class="form-control">
                            <option value="">All</option>
                        </select>
                      </div>
                </div>
                <div class="col">
                      <div class="form-group">
                        <label for="exampleIn1">Finishing</label>
                        <select name="" id="" class="form-control">
                            <option value="">All</option>
                        </select>
                      </div>
                </div>
                <div class="col">
                      <div class="form-group">
                        <label for="exampleIn1">Keyword / Item Code</label>
                        <input type="text" class="form-control">
                      </div>
                </div>
                <div class="col col-2">
                    <div class="form-group lasts">
                        <label for="exampleIn1" class="n_hide">&nbsp;</label>
                        <button type="submit" class="btn btn-info d-block"><i class="fa fa-search"></i></button>
                      </div>
                </div>
            </div>
          </form>
        <div class="clear"></div>
    </section>
    <div class="py-3 my-2"></div>
</div>

<section class="products-list-sec-1">
    <div class="prelative container">
      <div class="row">
        <div class="col-md-30">
          <div class="glass">
            <h5><?php echo ucwords($str_category) ?></h5>
            <p>Found <?php echo $product->getTotalItemCount() ?> products</p>
          </div>
        </div>
        <div class="col-md-30">
          <div class="glass-kanan text-right">
            <ul>
              <li><a href="#">Material (All)&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</a></li>
              <li><a href="#">Finishing (All)&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</a></li>
              <li><a href="#">Keyword / Item Code (None)</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
</section>

<section class="products-list-sec-2">
  <div class="prelative container">
    <div class="row no-gutters">
      <?php foreach($product->getData() as $key => $value): ?>
        <div class="col-md-10 col-30">
          <div class="box-content">
            <div class="image">
                <a href="<?php echo CHtml::normalizeUrl(array('/product/detail', 'id'=> $value->id, 'categorys'=> $strCategory->id)); ?>">
                  <img class="w-100" src="<?php echo Yii::app()->baseUrl.ImageHelper::thumb(215,215, '/images/product/'. $value->image, array('method' => 'adaptiveResize', 'quality' => '90')) ?>" alt="">
                </a>
            </div>
            <div class="title">
              <a href="<?php echo CHtml::normalizeUrl(array('/product/detail', 'id'=> $value->id, 'categorys'=> $strCategory->id)); ?>">
              <p><?php echo $value->description->name ?></p>
              </a>
            </div>
            <div class="subtitle">
              <?php $datas = unserialize($value->data); ?>
              <a href="<?php echo CHtml::normalizeUrl(array('/product/detail', 'id'=> $value->id, 'categorys'=> $strCategory->id)); ?>">
              <p><?php echo $datas['material'] ?></p>
              </a>
            </div>
          </div>
        </div>
      <?php endforeach ?>
    </div>
    <?php if ($product->getTotalItemCount() > 15): ?>
    <div class="py-2"></div>
    <?php endif ?>    
    <div class="pagin-products page text-center pagination">
         <?php 
         $this->widget('CLinkPager', array(
            'pages' => $product->getPagination(),
            'header'=>'',
            'footer'=>'',
            'lastPageCssClass' => 'd-none',
            'firstPageCssClass' => 'd-none',
            'nextPageCssClass' => 'd-none',
            'previousPageCssClass' => 'd-none',
            'itemCount'=> $product->totalItemCount,
            'htmlOptions'=>array('class'=>'pagination pagination-sm'),
            'selectedPageCssClass'=>'active',
        ));
     ?>
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
<script type="text/javascript">
  $(document).ready(function(){

    $('.pagin-products ul.pagination li').addClass('page-item');
    $('.pagin-products ul.pagination li.page-item a').addClass('page-link');

  });
</script>


















<?php /*
<section class="cover-produk">
  <div class="prelative container py-5">
    <div class="container2 mx-auto py-5">
      <div class="row py-5">
        <div class="col-md-60 text-center pt-3">
          <button class="produk mx-auto">Produk Bahan Bangunan Kami</button>
        </div>
        <div class="col-md-60 text-center pt-4">
          <h2 class="mx-auto">Aneka merk yang tergabung di Arsimetris Djaja dan peluang bekerjasama / keagenan.</h2>  
        </div>
      </div>
    </div>
  </div>
</section>

<section class="produk-sec-1">
  <div class="prelative container">
    <div class="row">
      <div class="col-md-15">
        <div class="title-produk">
          <div class="title">
            <p>Kategori produk arsimetris djaja</p>
            <hr>
            <?php
              $criteria = new CDbCriteria;
              $criteria->with = array('description');
              $criteria->addCondition('t.type = :type');
              $criteria->params[':type'] = 'category';
              $criteria->addCondition('description.language_id = :language_id');
              $criteria->params[':language_id'] = $this->languageID;
              $criteria->order = 'sort ASC';

              $dCategory = PrdCategory::model()->findAll($criteria);
            ?>
            <ul>
              <?php foreach ($dCategory as $key => $value): ?>
              <li <?php if ($value->id ==  $_GET['category']): ?>class="active"<?php endif ?>><a href="<?php echo CHtml::normalizeUrl(array('/product/index', 'category'=> $value->id)); ?>"><?php echo ucwords(strtolower( $value->description->name )); ?></a></li>
              <?php endforeach ?>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-45">
        <div class="title-produk-right">
          <div class="title-left">
            <p>Menampilkan: <span>Semua Produk (<?php echo $product->getTotalItemCount(); ?> items)</span></p>
          </div>
          <div class="title-right">
            <p></p>
          </div>
          <hr>
        </div>

        <div class="row box-produk pt-3">

          <?php if ($product->getTotalItemCount() > 0): ?>
          <?php foreach ($product->getData() as $key => $value): ?>
            <div class="col-md-20">
              <div class="produk-box-container pb-5">
                <div class="frame_picture">
                  <a href="<?php echo CHtml::normalizeUrl(array('/product/detail', 'id'=> $value->id, 'category'=> isset($_GET['category']) ? $_GET['category']: '' )); ?>">
                    <img src="<?php echo Yii::app()->baseUrl.ImageHelper::thumb(342,342, '/images/product/'. $value->image, array('method' => 'adaptiveResize', 'quality' => '90')) ?>" alt="" class="img img-fluid">
                  </a>
                </div>
                <div class="title-produk pt-4">
                  <a href="<?php echo CHtml::normalizeUrl(array('/product/detail', 'id'=> $value->id, 'category'=> isset($_GET['category']) ? $_GET['category']: '' )); ?>">
                    <h1><?php echo $value->description->name ?></h1>
                  </a>
                </div>
                <div class="kategori-produk">
                  <p>Hardware</p>
                </div>
                <div class="harga">
                  <p>Rp <?php echo number_format($value->harga) ?></p>
                </div>
              </div>
            </div>
          <?php endforeach ?>
          <?php endif ?>

        </div>

         <div class="pagin-products page text-center pagination">
               <?php 
               $this->widget('CLinkPager', array(
                  'pages' => $product->getPagination(),
                  'header'=>'',
                  'footer'=>'',
                  'lastPageCssClass' => 'd-none',
                  'firstPageCssClass' => 'd-none',
                  'nextPageCssClass' => 'd-none',
                  'previousPageCssClass' => 'd-none',
                  'itemCount'=> $product->totalItemCount,
                  'htmlOptions'=>array('class'=>'pagination pagination-sm'),
                  'selectedPageCssClass'=>'active',
              ));
           ?>
          </div>
          <div class="py-4"></div>

      </div>
    </div>
  </div>
</section>
<script type="text/javascript">
  $(document).ready(function(){

    $('.pagin-products ul.pagination li').addClass('page-item');
    $('.pagin-products ul.pagination li.page-item a').addClass('page-link');

  });
</script>
*/ ?>