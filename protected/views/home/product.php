<section class="covertop-products mb-5">
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
        'images' => 'Layer-111.png',
        'title' => 'BLACK SERIES STYLE <br> COLLECTION',
        'subtitle' => 'A selection of expertly crafted accessories tinted in charming and solid black color, combining leading-edge matte spotless technology with enduring style.',
    ],
    [
        'images' => 'Layer-121.png',
        'title' => 'ELECTRONIC LOCK <br> PRODUCTS',
        'subtitle' => 'Smart and reliable solutions from Dekkson for the practical living and keyless secure solution for your home.',        
    ],
    [
        'images' => 'Layer-33.png',
        'title' => 'VINTAGE SERIES<br> COLLECTION',
        'subtitle' => 'A selection of expertly crafted accessories tinted in charming and solid black color, combining leading-edge matte spotless technology with enduring style.',        
    ],
    [
        'images' => 'Layer-34.png',
        'title' => 'DEKKSON NEO SERIES<br> COLLECTION',
        'subtitle' => 'Smart and reliable solutions from Dekkson for the practical living and keyless secure solution for your home.',
    ],
    [
        'images' => 'Layer-35.png',
        'title' => 'THE LUXURIOUS PRESTIGE<br> SERIES COLLECTION',
        'subtitle' => 'A selection of expertly crafted accessories tinted in charming and solid black color, combining leading-edge matte spotless technology with enduring style.',   
    ],
    [
        'images' => 'Layer-37.png',
        'title' => 'DEKKSON HOTEL SERIES <br>COLLECTION',
        'subtitle' => 'Smart and reliable solutions from Dekkson for the practical living and keyless secure solution for your home.',        
    ]
];
?>

<section class="product-sec-2">
    <div class="prelative container">
        <div class="row no-gutters">
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
            <div class="col-md-10">
                <div class="logo">
                    <img src="<?php echo $this->assetBaseurl; ?>iseo.png" alt="">
                </div>
            </div>
            <div class="col-md-10">
                <div class="logo">
                    <img src="<?php echo $this->assetBaseurl; ?>tormax.png" alt="">
                </div> 
            </div>
            <div class="col-md-10">
                <div class="logo">
                    <img src="<?php echo $this->assetBaseurl; ?>bremen.png" alt="">
                </div>
            </div>
            <div class="col-md-10">
                <div class="logo">
                    <img src="<?php echo $this->assetBaseurl; ?>vallen.png" alt="">
                </div>
            </div>
            <div class="col-md-10">
                <div class="logo">
                    <img src="<?php echo $this->assetBaseurl; ?>gbd.png" alt="">
                </div>
            </div>
            <div class="col-md-10">
                <div class="logo">
                    <img src="<?php echo $this->assetBaseurl; ?>frascio.png" alt="">
                </div>
            </div>
    </div>
</section>