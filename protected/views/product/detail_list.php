<script src="<?php echo Yii::app()->baseUrl ?>/asset/js/sweetalert/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl ?>/asset/js/sweetalert/sweetalert.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.css" />
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.js"></script>

<section class="product-det-sec-1">
  <div class="prelative container">
    <div class="row">
      <div class="col-md-60">
        <div class="box-content"> 
          <div class="title">
            <h3>Products</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="breadcrumb-det">
    <div class="prelative container">
      <div class="row">
        <div class="col-md-45">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo CHtml::normalizeUrl(array('/home/index')); ?>">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo CHtml::normalizeUrl(array('/product/landing')); ?>">Products</a></li>
                    <li class="breadcrumb-item"><a href="#"><?php echo ucwords($category->description->name) ?></a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo ucwords($data->description->name); ?></li>
                </ol>
            </nav>
        </div>
        <div class="col-md-15">
          <div class="block-back-link text-right">
            <a href="#" onclick="window.history.back()">Back</a>
          </div>
          <div class="d-block d-sm-none py-2"></div>
        </div>
      </div>
      <div class="py-2"></div>
    </div>
</section>

<section class="product-det-sec-2">
  <div class="prelative container">
    <div class="row box-content no-gutters">
      <div class="col-md-60">
        <div class="box-conten">
          <div class="title">
            <h2><?php echo ucwords($data->description->name); ?></h2>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="product-det-sec-3">
  <div class="prelative container">
    <div class="row">
        <div class="col-md-25">
          <div class="images">
            <img class="w-100 img img-fluid" src="<?php echo Yii::app()->baseUrl.'/images/product/'. $data->image ?>" alt="">
          </div>
          <div class="row pt-2">
            <div class="col-md-15 col-20">
              <img class="img img-fluid" src="<?php echo Yii::app()->baseUrl.'/images/product/'. $data->image ?>" alt="">
            </div>
            <div class="col-md-15 col-20">
              <img src="#" alt="" class="img img-fluid">
            </div>
          </div>
        </div>
        <div class="col-md-35">
          <?php 
          $datas = unserialize($data->data);
          ?>
          <div class="d-block d-sm-none py-3"></div>
          <div class="row">
            <div class="col-md-20">
              <div class="title">
                <p>Item Code</p>
              </div>
              <div class="isi">
                <p><?php echo $data->kode ?></p>
              </div>
            </div>
            <div class="col-md-20">
              <div class="title">
                <p>Category</p>
              </div>
              <div class="isi">
                <p><?php echo $category->description->name; ?></p>
              </div>
            </div>
            <div class="col-md-20">
              <div class="title">
                <p>Material</p>
              </div>
              <div class="isi">
                <p><?php echo $datas['material'] ?></p>
              </div>
            </div>
          </div>
          <div class="row pt-3">
            <div class="col-md-20">
              <div class="title">
                <p>Finishing</p>
              </div>
              <div class="isi">
                <p><?php echo $datas['finish'] ?></p>
              </div>
            </div>
            <div class="col-md-20">
              <div class="title">
                <p>Color</p>
              </div>
              <div class="isi">
                <p><?php echo $datas['color'] ?></p>
              </div>
            </div>
            <div class="col-md-20">
              <div class="title">
                <p>Dimension</p>
              </div>
              <div class="isi">
                <p><?php echo $datas['size'] ?></p>
              </div>
            </div>
          </div>
          <div class="row pt-3">
            <div class="col-md-60">
              <div class="title">
                <p>Descrption</p>
              </div>
              <div class="isi">
                <?php echo $data->description->desc; ?>
              </div>
            </div>
          </div>
          <div class="garis-proddd"></div>
          <div class="row">
            <div class="col-md-60">
              <div class="titleeee">
                <p>Interested in this product? Feel free to inquire</p>
              </div>
            </div>
          </div>
          <form method="post" action="#" onsubmit="alert('underconstruction'); return false;">
            <div class="form-row">
              <div class="form-group col-md-18">
                <input type="Your Name" class="form-control" id="inputYourName4" placeholder="Your Name">
              </div>
              <div class="form-group col-md-18">
                <input type="Your Mobile Phone" class="form-control" id="inputPassword4" placeholder="Your Mobile Phone">
              </div>
              <div class="form-group col-md-18">
                <input type="Your Email" class="form-control" id="inputPassword4" placeholder="Your Email">
              </div>
              <div class="form-group col-md-5">
                  <img src="<?php echo $this->assetBaseurl; ?>click.png" alt="">
                  <!-- <a href="#"><p> Submit</p></a> -->
              </div>
            </div>
          </form>
          <div class="garis-proddd"></div>
          <div class="row">
            <div class="col-md-60">
              <div class="dekssss">
                <p>Dekkson offer special quality architectural hardware and interior furnishing accessories with high quality and high grade materials - providing sustainability and durability. Dekkson’s expertise is has proven in all fields and sectors of infrastructure building / developments. Please consult to our specialist to find the right products for your project.</p>
              </div>
            </div>
          </div>
        </div>
    </div>
    <div class="row"></div>
  </div>
</section>

<div class="yaya">
  <div class="prelative container">
    <div class="garis-prodddsssss"></div>
  </div>
</div>

<section class="product-det-sec-4">
  <div class="prelative container">
    <div class="row">
      <div class="col-md-60">
        <div class="box-contentsss">
          <div class="title">
            <h3>OUR DEKKSON PRODUCTS YOU MIGHT WANT TO LOOK</h3>
          </div>
        </div>
      </div>
    </div>
    <div class="row pt-4 mt-2">
      <?php foreach($product as $key => $value): ?>
      <div class="col-md-10 col-30">
        <div class="box-content">
          <div class="image">
            <a href="<?php echo CHtml::normalizeUrl(array('/product/detail', 'id'=> $value->id)); ?>"><img class="w-100" src="<?php echo Yii::app()->baseUrl.'/images/product/'. $value->image; ?>" alt=""></a>
            </div>
          <div class="title">
            <a href="<?php echo CHtml::normalizeUrl(array('/product/detail', 'id'=> $value->id)); ?>">
            <p><?php echo $value->description->name ?></p>
            </a>
          </div>
          <div class="subtitle">
            <?php $datas2 = unserialize($value->data); ?>
            <a href="<?php echo CHtml::normalizeUrl(array('/product/detail', 'id'=> $value->id)); ?>">
            <p><?php echo $datas2['material'] ?></p>
            </a>
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
<script src="<?php echo Yii::app()->baseUrl ?>/asset/js/sweetalert/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl ?>/asset/js/sweetalert/sweetalert.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.css" />
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.js"></script>

<section class="produk-detail-sec-1 pt-5">
  <div class="py-5"></div>
  <div class="prelative container pt-4">
    <div class="row">
      <div class="col-md-15">
        <div class="title-produk">
          <div class="title">
            <p>Kategori produk arsimetris djaja</p>
            <hr>
            <ul>
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
              <?php foreach ($dCategory as $key => $value): ?>
              <li <?php if ($value->id ==  $_GET['category']): ?>class="active"<?php endif ?>><a href="<?php echo CHtml::normalizeUrl(array('/product/index', 'category'=> $value->id)); ?>"><?php echo ucwords(strtolower( $value->description->name )); ?></a></li>
              <?php endforeach ?>

            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-45 rights_det_product">
        <div class="title-produk-right">
          <div class="title-left">
            <p>HOME > Produk Bahan Bangunan Kami >  <span><?php echo $data->description->name ?></span></p>
          </div>
          <div class="title-right">
            <p></p>
          </div>
          <hr>
        </div>
        <div class="row box-produk pt-3 pb-5 py-2">
            <div class="col-md-30">
                <div class="image">
                    <img src="<?php echo $this->assetBaseurl; ?>2-produk-detail_03.jpg" class="img img-fluid" alt="">
                </div>
            </div>
            <div class="col-md-30 pl-4 ">
              <?php if(Yii::app()->user->hasFlash('success')): ?>
              <script type="text/javascript">
              swal({
                title: "<?php echo Yii::app()->user->getFlash('success') ?>",
                text: "Do you want to continue shopping?",
                type: "success",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, Continue Shopping",
                cancelButtonText: "Go to Cart",
                // closeOnConfirm: false,
                closeOnCancel: false
              },
              function(isConfirm){
                if (isConfirm) {
                  
                } else {
                  window.location.href = '<?php echo CHtml::normalizeUrl(array('/cart/shop')); ?>';
                }
              });
              </script>
              <?php endif; ?>

              <?php if(Yii::app()->user->hasFlash('danger')): ?>
                  <?php $this->widget('bootstrap.widgets.TbAlert', array(
                      'alerts'=>array('danger'),
                  )); ?>
              <?php endif; ?>

              <form action="<?php echo CHtml::normalizeUrl(array('addcart', 'category'=>$_GET['category'])); ?>" method="post">
              <input type="hidden" id="price-item" value="<?php echo $data->harga ?>">
              <input type="hidden" name="id" value="<?php echo $data->id ?>">
              <input type="hidden" name="option" class="form_size_id" value="">

                <div class="title">
                    <p><?php echo ucwords($data->description->name); ?></p>
                </div>
                <div class="kategori pt-2">
                    <p><?php echo ucwords(strtolower($category->description->name)); ?></p>
                </div>
                <hr>
                <div class="harga">
                    <p>Rp <?php echo number_format($data->harga) ?></p>
                </div>
                <hr>
                <?php 
                $datas = unserialize($data->data);
                ?>
                <div class="warna">
                    <div class="row">
                        <div class="col-md-15">
                            <p class="warna-kiri">
                                Warna
                            </p>
                        </div>
                        <div class="col-md-45">
                            <p class="warna-kanan">
                                <?php echo $datas['warna'] ?>
                            </p>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="warna">
                    <div class="row">
                        <div class="col-md-15">
                            <p class="warna-kiri">
                                Kemasan
                            </p>
                        </div>
                        <div class="col-md-45">
                            <p class="warna-kanan">
                                <?php echo $datas['kemasan'] ?>
                            </p>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="warna">
                    <div class="row">
                        <div class="col-md-15">
                            <p class="warna-kiri">
                                Kuantiti
                            </p>
                        </div>
                        <div class="col-md-5">
                            <p class="warna-kanan">
                                <input type="number" name="qty" value="1">
                            </p>
                        </div>
                        <div class="col-md-40 pl-5">
                              <button type="submit">MASUKKAN KERANJANG</button>
                        </div>
                    </div>
                </div>
                </form>
                <hr>
                <div class="warna">
                    <div class="row">
                        <div class="col-md-15">
                            <p class="warna-kiri">
                                Deskripsi
                            </p>
                        </div>
                        <div class="col-md-45">
                            <p class="warna-kanan">
                            <?php echo $data->description->desc ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lainnya">
          <div class="kategori-bottom">
          <p>Produk Bahan Bangunan Kami yang lain</p>
          </div>
          <hr>

          <div class="blog-box-container pb-5">
          <div class="row">
          <?php if (count($product) > 0): ?>
            <?php foreach ($product as $key => $value): ?>
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
        </div>
      </div>
    </div>
    </div>
  </div>
</section>
*/ ?>