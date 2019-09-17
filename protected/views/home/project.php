<section class="covertop-products mb-3">
    <div class="prelatife container">
        <div class="row inners_section">
            <div class="col-md-20 my-auto align-middle py-5">
                <div class="description_text py-5">
                    <h3>Project References</h3>
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
                <li class="breadcrumb-item active" aria-current="page">Project References</li>
            </ol>
        </nav>
    </div>
</section>

<section class="project-sec-1">
    <div class="prelative container">
        <div class="row">
        <ul class="d-none d-sm-block">
            <li><p>BROWSE TYPE OF PROJECT</p></li>
            <li><a href="#">All</a></li>
            <li><a href="#">Apartement</a></li>
            <li><a href="#">Education</a></li>
            <li><a href="#">Hospital</a></li>
            <li><a href="#">Hotel</a></li>
            <li><a href="#">ISEO</a></li>
            <li><a href="#">Mall</a></li>
            <li><a href="#">Office</a></li>
            <li><a href="#">Residence</a></li>
            <li><a href="#">Shopping Centre</a></li>
        </ul>
        <div class="d-block d-none-block py-3 px-3 w-100">
            <select name="change_url_prd" id="" class="change_url_prd form-control">
            <option value="">BROWSE TYPE OF PROJECT</option>
            <option value="">All</option>
            <option value="">Apartement</option>
            <option value="">Education</option>
            <option value="">Hospital</option>
            <option value="">Hotel</option>
            <option value="">ISEO</option>
            <option value="">Mall</option>
            <option value="">Office</option>
            <option value="">Residence</option>
            <option value="">Shopping Centre</option>
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
$projects = [
    1 => [
        'images' => 'p1.png',
        'title' => 'Green Lake City',
        'subtitle' => 'Residence',
    ],
    [
        'images' => 'p2.png',
        'title' => 'PIK Fish Market',
        'subtitle' => 'Shopping Centre',        
    ],
    [
        'images' => 'p3.png',
        'title' => 'Wooland Park Residence',
        'subtitle' => 'Residence',        
    ],
    [
        'images' => 'p4.png',
        'title' => 'Green Lake City',
        'subtitle' => 'Residence',
    ],
    [
        'images' => 'p5.png',
        'title' => 'PIK Fish Market',
        'subtitle' => 'Shopping Centre',        
    ],
    [
        'images' => 'p6.png',
        'title' => 'Wooland Park Residence',
        'subtitle' => 'Residence',        
    ],
    [
        'images' => 'p7.png',
        'title' => 'Green Lake City',
        'subtitle' => 'Residence',
    ],
    [
        'images' => 'p8.png',
        'title' => 'PIK Fish Market',
        'subtitle' => 'Shopping Centre',        
    ],
    [
        'images' => 'p9.png',
        'title' => 'Wooland Park Residence',
        'subtitle' => 'Residence',        
    ],
];
?>

<section class="project-sec-2">
    <div class="prelative container">
        <div class="content-box">
            <div class="row">
                <?php foreach($projects as $key => $value): ?>
                <div class="col-md-20 col-30">
                    <div class="box-content">
                        <div class="image"><img src="<?php echo $this->assetBaseurl; ?><?php echo $value['images'] ?>" alt=""></div>
                        <div class="contentttt">
                            <div class="title">
                                <a href="#">
                                <p><?php echo $value['title']?></p>
                                </a>
                            </div>
                            <div class="subtitle">
                                <a href="#">
                                <p><?php echo $value['subtitle']?></p>
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