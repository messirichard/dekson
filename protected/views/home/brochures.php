<section class="breadcrumb-det">
    <div class="prelative container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Brochure</li>
            </ol>
        </nav>
    </div>
</section>


<?php
$brochures = [
    1 => [
        'images' => 'category1.jpg',
        'title' => 'Acessories for Door & Window',
    ],
    [
        'images' => 'details1.jpg',
        'title' => 'Acessories for Glass',     
    ],
    [
        'images' => 'details2.jpg',
        'title' => 'Acessories for Steel Door',    
    ],
    [
        'images' => 'details2.jpg',
        'title' => 'Acessories for Slide & Fold Door',    
    ]
];
?>

<section class="brochures-sec-2">
    <div class="prelative container">
        <div class="row">
			<?php foreach($brochures as $key => $value): ?>
            <div class="col-md-30">
                <div class="box-content">
                    <div class="image"><img src="<?php echo $this->assetBaseurl; ?><?php echo $value['images'] ?>" alt=""></div>
                    <div class="title">
                        <p><?php echo $value['title']?></p>
                    </div>
                    <div class="subtitle">
                        <a href="#"><p>Download</p></a>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </div>
</section>