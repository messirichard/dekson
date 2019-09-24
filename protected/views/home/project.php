<section class="covertop-products mb-3">
    <div class="prelatife container">
        <div class="row inners_section">
            <div class="col-md-20 my-auto align-middle py-5">
                <div class="description_text py-5">
                    <h3><?php echo $this->setting['project_hero_title'] ?></h3>
                    <p><?php echo $this->setting['project_hero_subtitle'] ?></p>
                </div>
            </div>
            <div class="col-md-40">
                <div class="banner_picture">
                    <img src="<?php echo Yii::app()->baseUrl.'/images/static/'. $this->setting['project_hero_image'] ?>" alt="" class="img img-fluid"></div>
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
                <?php if ( !isset($_GET['cat']) ): ?>
                <li class="breadcrumb-item active" aria-current="page">Project References</li>
                <?php else: ?>
                <li class="breadcrumb-item"><a href="<?php echo CHtml::normalizeUrl(array('/home/project')); ?>">Project References</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo str_replace('-', ' ', $_GET['slug']); ?></li>
                <?php endif ?>
            </ol>
        </nav>
    </div>
</section>

<?php 
$models_nfilter = TipeGallery::model()->findAll();
?>
<section class="project-sec-1">
    <div class="prelative container">
        <div class="row">
        <ul class="d-none d-sm-block">
            <li><p>BROWSE TYPE OF PROJECT</p></li>
            <li><a href="<?php echo CHtml::normalizeUrl(array('/home/project')); ?>">All</a></li>
            <?php foreach ($models_nfilter as $key => $value): ?>
            <li><a href="<?php echo CHtml::normalizeUrl(array('/home/project', 'cat'=> $value->id, 'slug'=>str_replace(" ", "-", $value->nama) )); ?>"><?php echo $value->nama ?></a></li>
            <?php endforeach ?>
        </ul>
        <div class="d-block d-sm-none py-3 px-3 w-100">
            <select name="change_url_prd" id="" class="change_url_prd form-control">
            <option value="">BROWSE TYPE OF PROJECT</option>
            <option value="<?php echo CHtml::normalizeUrl(array('/home/project')); ?>">All</option>
            <?php foreach ($models_nfilter as $key => $value): ?>
            <option value="<?php echo CHtml::normalizeUrl(array('/home/project', 'cat'=> $value->id, 'slug'=>str_replace(" ", "-", $value->nama) )); ?>"><?php echo $value->nama; ?></option>
            <?php endforeach ?>
          </select>
        </div>
        </div>
    </div>
</section>
<script type="text/javascript">
$(function(){
  
  $('.change_url_prd').change(function(){
    var s_idsL = $(this).val();
    window.open(s_idsL, '_SELF');
    return false;
  });

});
</script>

<?php
    // $projects = [
    //     1 => [
    //         'images' => 'p1.png',
    //         'title' => 'Green Lake City',
    //         'subtitle' => 'Residence',
    //     ],
    //     [
    //         'images' => 'p2.png',
    //         'title' => 'PIK Fish Market',
    //         'subtitle' => 'Shopping Centre',        
    //     ],
    //     [
    //         'images' => 'p3.png',
    //         'title' => 'Wooland Park Residence',
    //         'subtitle' => 'Residence',        
    //     ],
    //     [
    //         'images' => 'p4.png',
    //         'title' => 'Green Lake City',
    //         'subtitle' => 'Residence',
    //     ],
    //     [
    //         'images' => 'p5.png',
    //         'title' => 'PIK Fish Market',
    //         'subtitle' => 'Shopping Centre',        
    //     ],
    //     [
    //         'images' => 'p6.png',
    //         'title' => 'Wooland Park Residence',
    //         'subtitle' => 'Residence',        
    //     ],
    //     [
    //         'images' => 'p7.png',
    //         'title' => 'Green Lake City',
    //         'subtitle' => 'Residence',
    //     ],
    //     [
    //         'images' => 'p8.png',
    //         'title' => 'PIK Fish Market',
    //         'subtitle' => 'Shopping Centre',        
    //     ],
    //     [
    //         'images' => 'p9.png',
    //         'title' => 'Wooland Park Residence',
    //         'subtitle' => 'Residence',        
    //     ],
    // ];
?>
<?php

if (!isset($_GET['cat'])) {
    $projects = ViewGallery::model()->findAll();
} else {
    $topik_id = $_GET['cat'];
    $projects = ViewGallery::model()->findAll('topik_id = :topik', array(':topik'=>$topik_id));
}

?>
<section class="project-sec-2">
    <div class="prelative container">
        <div class="content-box">
            <div class="row">
                <?php foreach($projects as $key => $value): ?>
                <div class="col-md-20 col-30">
                    <div class="box-content">
                        <div class="image"><img class="img img-fluid" src="<?php echo Yii::app()->baseUrl.'/images/gallery/'. $value->image ?>" alt=""></div>
                        <div class="contentttt">
                            <div class="title">
                                <a href="#">
                                <p><?php echo $value->title ?></p>
                                </a>
                            </div>
                            <div class="subtitle">
                                <a href="#">
                                <p><?php echo $value->sub_title ?></p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</section>