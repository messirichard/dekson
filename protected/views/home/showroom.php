<section class="breadcrumb-det">
    <div class="prelative container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo CHtml::normalizeUrl(array('/home/index')); ?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Showroom</li>
            </ol>
        </nav>
    </div>
</section>

<section class="showroom-sec-1">
    <div class="prelative container">
        <div class="row no-gutters">
            <div class="col-md-20">
                <div class="images"><img class="img img-fluid w-100" src="<?php echo Yii::app()->baseUrl.'/images/static/'. $this->setting['showroom_picture'] ?>" alt=""></div>
            </div>
            <div class="col-md-40">
                <div class="box-content">
                    <div class="caption">
                        <p><?php echo $this->setting['showroom_content'] ?></p>
                    </div>
                    <div class="arrange">
                        <p><?php echo $this->setting['showroom_content_btm'] ?></p>
                    </div>
                    <div class="contact">
                        <h5>Email.</h5>
                        <a href="mailto:<?php echo $this->setting['showroom_email'] ?>"><p><?php echo $this->setting['showroom_email'] ?> or</p></a>
                        <h5>Whatsapp </h5>
                        <?php
                        $nums_wa = str_replace('08', '628',  str_replace(' ', '', $this->setting['showroom_wa']) );
                        ?>
                        <a href="https://wa.me/<?php echo $nums_wa ?>"><p><?php echo $this->setting['showroom_wa'] ?> (Click to chat)</p></a>
                    </div>
                    <div class="see-you">
                        <p>See you soon at Dekkson showroom!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="showroom-sec-2 inners_page">
    <div class="prelative container">
        <div class="row no-gutters">
           
            <?php for ($i=1; $i < 4; $i++) { ?>
            <div class="col-md-20">
                <div class="box-content">
                    <div class="image bottom">
                        <img class="gambar img img-fluid" src="<?php echo Yii::app()->baseUrl.'/images/static/'. $this->setting['home2_icons_picture_'. $i] ?>" alt="">
                            <div class="judul1">
                                <p><?php echo nl2br($this->setting['home2_icons_title_'. $i]) ?></p>
                            </div>
                            <div class="subjudul1">
                                <p><?php echo nl2br($this->setting['home2_icons_info_'. $i]) ?></p>
                            </div>
                            <div class="klik">
                            <img src="<?php echo $this->assetBaseurl; ?>click.png" alt="">
                            <a href="<?php echo $this->setting['home2_icons_link_'. $i] ?>"><p> Click Here</p></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>

        </div>
    </div>
</section>