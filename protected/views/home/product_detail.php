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
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Products</a></li>
                    <li class="breadcrumb-item"><a href="#">Glass</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Glass Suction GSC 3S</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-15">
          <div class="block-back-link text-right">
            <a href="#">Back</a>
          </div>
        </div>
      </div>
      <div class="py-2"></div>
    </div>
</section>

<section class="product-det-sec-2">
  <div class="prelative container">
    <div class="row">
      <div class="col-md-60">
        <div class="box-content">
          <div class="title">
            <h2>Glass Suction GSC 3S</h2>
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
          <div class="images"><img class="w-100" src="<?php echo $this->assetBaseurl; ?>utama.png" alt=""></div>
          <div class="row pt-2">
            <div class="col-md-20"><img class="w-100" src="<?php echo $this->assetBaseurl; ?>sub1.png" alt=""></div>
            <div class="col-md-20"><img class="w-100" src="<?php echo $this->assetBaseurl; ?>sub2.png" alt=""></div>
            <div class="col-md-20"><img class="w-100" src="<?php echo $this->assetBaseurl; ?>sub3.png" alt=""></div>
          </div>
        </div>
        <div class="col-md-35">
          <div class="row">
            <div class="col-md-20">
              <div class="title">
                <p>Item Code</p>
              </div>
            </div>
            <div class="col-md-20">
              <div class="title">
                <p>Category</p>
              </div>
            </div>
            <div class="col-md-20">
              <div class="title">
                <p>Material</p>
              </div>
            </div>
          </div>
        </div>
    </div>
    <div class="row"></div>
  </div>
</section>

<?php
$products = [
    1 => [
        'images' => 'category1.jpg',
        'title' => 'Advertising Screw ADV 19x30MM PSS',
        'subtitle' => 'SUS 316',
    ],
    [
        'images' => 'details1.jpg',
        'title' => 'Advertising Screw ADV 32x10MM PSS',
        'subtitle' => 'Brass',        
    ],
    [
        'images' => 'details2.jpg',
        'title' => 'Clip Seal CS 8907',
        'subtitle' => 'Brass',        
    ],
    [
        'images' => 'details2.jpg',
        'title' => 'Clip Seal CS 8908',
        'subtitle' => 'SUS 304 - Deluxe',        
    ],
    [
        'images' => 'details2.jpg',
        'title' => 'Glass Clip GC 804140F SSS',
        'subtitle' => 'SUS 304 - Deluxe',        
    ],
    [
        'images' => 'details2.jpg',
        'title' => 'Glass Clip GC ART00016 G (GG) CP',
        'subtitle' => 'SUS 304 - Deluxe',        
    ]
];
?>

<section class="product-det-sec-4">
  <div class="prelative container">
    <div class="row">
      <div class="col-md-60">
        <div class="box-content">
          <div class="title">
            <h3></h3>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <?php foreach($products as $key => $value): ?>
      <div class="col-md-10">
        <div class="box-content">
          <div class="image"><img src="<?php echo $this->assetBaseurl; ?><?php echo $value['images'] ?>" alt=""></div>
          <div class="title">
            <p><?php echo $value['title']?></p>
          </div>
          <div class="subtitle">
            <p><?php echo $value['subtitle']?></p>
          </div>
        </div>
      </div>
      <?php endforeach ?>
    </div>
  </div>
</section>

<section class="products-sec-3">
  <div class="prelative container">
    <div class="row">
      <div class="col-md-60">
        <div class="box-content">
          <div class="title">
            <h3>our partner brands</h3>
          </div>
        </div>    
      </div>
      <div class="col-md-60">
        <div class="box-content">
          <div class="image"><a href="#"><img src="" alt=""></a></div>
          <div class="image"><a href="#"><img src="" alt=""></a></div>
          <div class="image"><a href="#"><img src="" alt=""></a></div>
          <div class="image"><a href="#"><img src="" alt=""></a></div>
          <div class="image"><a href="#"><img src="" alt=""></a></div>
          <div class="image"><a href="#"><img src="" alt=""></a></div>
        </div>
      </div>
    </div>
  </div>
</section>