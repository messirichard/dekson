<section class="covertop-products mb-3">
    <div class="prelatife container">
        <div class="row inners_section">
            <div class="col-md-20 my-auto align-middle py-5">
                <div class="description_text py-5">
                    <h3>Brochure</h3>
                    <p>Feel free to browse and download Dekkson’s product brochures for your references. </p>
                </div>
            </div>
            <div class="col-md-40">
                <div class="banner_picture">
                    <img src="<?php echo $this->assetBaseurl ?>Layer-291.png" alt="" class="img img-fluid"></div>
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
                <li class="breadcrumb-item active" aria-current="page">Brochure</li>
            </ol>
        </nav>
    </div>
</section>


<?php
$brochures = [
    1 => [
        'images' => 'Layer-26.png',
        'title' => 'Acessories for Door & Window',
    ],
    [
        'images' => 'Layer-28.png',
        'title' => 'Acessories for Glass',     
    ],
    [
        'images' => 'Layer-28-copy.png',
        'title' => 'Acessories for Steel Door',    
    ],
    [
        'images' => 'Layer-28-copy-2.png',
        'title' => 'Acessories for Slide & Fold Door',    
    ],
    [
        'images' => 'Layer-26.png',
        'title' => 'Acessories for Door & Window',
    ],
    [
        'images' => 'Layer-28-copy.png',
        'title' => 'Acessories for Glass',     
    ],
    [
        'images' => 'Layer-28-copy.png',
        'title' => 'Acessories for Steel Door',    
    ],
    [
        'images' => 'Layer-28-copy-2.png',
        'title' => 'Acessories for Slide & Fold Door',    
    ],
    [
        'images' => 'Layer-26.png',
        'title' => 'Acessories for Door & Window',
    ],
    [
        'images' => 'Layer-28.png',
        'title' => 'Acessories for Glass',     
    ],
    [
        'images' => 'Layer-28-copy.png',
        'title' => 'Acessories for Steel Door',    
    ],
    [
        'images' => 'Layer-28-copy-2.png',
        'title' => 'Acessories for Slide & Fold Door',    
    ],
    [
        'images' => 'Layer-26.png',
        'title' => 'Acessories for Steel Door',    
    ],
    [
        'images' => 'Layer-28.png',
        'title' => 'Acessories for Slide & Fold Door',    
    ]
];
?>

<section class="brochures-sec-2">
    <div class="prelative container">
        <div class="content-box">
            <div class="row">
                <?php foreach($brochures as $key => $value): ?>
                <div class="col-md-15">
                    <div class="box-content">
                        <div class="image"><img src="<?php echo $this->assetBaseurl; ?><?php echo $value['images'] ?>" alt=""></div>
                        <div class="contenttt">
                            <div class="title">
                                <a href="#">
                                    <p><?php echo $value['title']?></p>
                                </a>
                            </div>
                            <div class="subtitleeeee">
                                <a href="#"><p>Download</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</section>