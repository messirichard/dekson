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
        <ul>
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
        </div>
    </div>
</section>

<?php
$projects = [
    1 => [
        'images' => 'category1.jpg',
        'title' => 'Green Lake City',
        'subtitle' => 'Residence',
    ],
    [
        'images' => 'details1.jpg',
        'title' => 'PIK Fish Market',
        'subtitle' => 'Shopping Centre',        
    ],
    [
        'images' => 'details2.jpg',
        'title' => 'Wooland Park Residence',
        'subtitle' => 'Residence',        
    ]
];
?>

<section class="project-sec-2">
    <div class="prelative container">
        <div class="row">
			<?php foreach($projects as $key => $value): ?>
            <div class="col-md-20">
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