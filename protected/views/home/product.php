<section class="breadcrumb-det">
    <div class="prelative container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Products</li>
            </ol>
        </nav>
    </div>
</section>

<!-- KURANG FORM -->

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

<?php
$products = [
    1 => [
        'images' => 'category1.jpg',
        'title' => 'BLACK SERIES STYLE COLLECTION',
        'subtitle' => 'A selection of expertly crafted accessories tinted in charming and solid black color, combining leading-edge matte spotless technology with enduring style.',
    ],
    [
        'images' => 'details1.jpg',
        'title' => 'ELECTRONIC LOCK PRODUCTS',
        'subtitle' => 'Smart and reliable solutions from Dekkson for the practical living and keyless secure solution for your home.',        
    ],
    [
        'images' => 'details2.jpg',
        'title' => 'VINTAGE SERIES COLLECTION',
        'subtitle' => 'A selection of expertly crafted accessories tinted in charming and solid black color, combining leading-edge matte spotless technology with enduring style.',        
    ],
    [
        'images' => 'category1.jpg',
        'title' => 'DEKKSON NEO SERIES COLLECTION',
        'subtitle' => 'Smart and reliable solutions from Dekkson for the practical living and keyless secure solution for your home.',
    ],
    [
        'images' => 'details1.jpg',
        'title' => 'THE LUXURIOUS PRESTIGE SERIES COLLECTION',
        'subtitle' => 'A selection of expertly crafted accessories tinted in charming and solid black color, combining leading-edge matte spotless technology with enduring style.',   
    ],
    [
        'images' => 'details2.jpg',
        'title' => 'DEKKSON HOTEL SERIES COLLECTION',
        'subtitle' => 'Smart and reliable solutions from Dekkson for the practical living and keyless secure solution for your home.',        
    ]
];
?>

<section class="product-sec-2">
    <div class="prelative container">
        <div class="row">
			      <?php foreach($products as $key => $value): ?>
            <div class="col-md-30">
                <div class="box-content">
                    <div class="image"><img src="<?php echo $this->assetBaseurl; ?><?php echo $value['images'] ?>" alt=""></div>
                    <div class="title">
                        <p><?php echo $value['title']?></p>
                    </div>
                    <div class="subtitle">
                        <p><?php echo $value['subtitle']?></p>
                    </div>
                    <div class="klik">
                        <img src="<?php echo $this->assetBaseurl; ?>click.png" alt="">
                        <a href=""><p> View product range</p></a>
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