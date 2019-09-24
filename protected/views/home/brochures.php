<section class="covertop-products mb-3">
    <div class="prelatife container">
        <div class="row inners_section">
            <div class="col-md-20 my-auto align-middle py-5">
                <div class="description_text py-5">
                    <h3><?php echo $this->setting['brochure_hero_title'] ?></h3>
                    <p><?php echo $this->setting['brochure_hero_subtitle'] ?></p>
                </div>
            </div>
            <div class="col-md-40">
                <div class="banner_picture">
                    <img src="<?php echo Yii::app()->baseUrl.'/images/static/'. $this->setting['brochure_hero_image'] ?>" alt="" class="img img-fluid"></div>
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
                <li class="breadcrumb-item active" aria-current="page">Brochure</li>
            </ol>
        </nav>
    </div>
</section>


<?php
// $brochures = [
//     1 => [
//         'images' => 'Layer-26.png',
//         'title' => 'Acessories for Door & Window',
//     ],
//         [
//             'images' => 'Layer-28.png',
//             'title' => 'Acessories for Glass',     
//         ],
//         [
//             'images' => 'Layer-28-copy.png',
//             'title' => 'Acessories for Steel Door',    
//         ],
//         [
//             'images' => 'Layer-28-copy-2.png',
//             'title' => 'Acessories for Slide & Fold Door',    
//         ],
//         [
//             'images' => 'Layer-26.png',
//             'title' => 'Acessories for Door & Window',
//         ],
//         [
//             'images' => 'Layer-28-copy.png',
//             'title' => 'Acessories for Glass',     
//         ],
//         [
//             'images' => 'Layer-28-copy.png',
//             'title' => 'Acessories for Steel Door',    
//         ],
//         [
//             'images' => 'Layer-28-copy-2.png',
//             'title' => 'Acessories for Slide & Fold Door',    
//         ],
//         [
//             'images' => 'Layer-26.png',
//             'title' => 'Acessories for Door & Window',
//         ],
//         [
//             'images' => 'Layer-28.png',
//             'title' => 'Acessories for Glass',     
//         ],
//         [
//             'images' => 'Layer-28-copy.png',
//             'title' => 'Acessories for Steel Door',    
//         ],
//         [
//             'images' => 'Layer-28-copy-2.png',
//             'title' => 'Acessories for Slide & Fold Door',    
//         ],
//         [
//             'images' => 'Layer-26.png',
//             'title' => 'Acessories for Steel Door',    
//         ],
//         [
//             'images' => 'Layer-28.png',
//             'title' => 'Acessories for Slide & Fold Door',    
//         ]
// ];
?>
<?php 
$data_brosur = TbBrosur::model()->findAll();
?>
<section class="brochures-sec-2">
    <div class="prelative container">
        <div class="content-box">
            <div class="row">
                <?php foreach($data_brosur as $key => $value): ?>
                <div class="col-md-15 col-30">
                    <div class="box-content">
                        <div class="image"><img class="img img-fluid" src="<?php echo Yii::app()->baseUrl.'/images/brosur/'. $value->image ?>" alt=""></div>
                        <div class="contenttt">
                            <div class="title">
                                <a href="#">
                                    <p><?php echo $value->titles ?></p>
                                </a>
                            </div>
                            <div class="subtitleeeee">
                                <a download target="_blank" href="<?php echo Yii::app()->baseUrl.'/images/brosur/'. $value->files ?>"><p>Download</p></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</section>