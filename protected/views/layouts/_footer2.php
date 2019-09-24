<section class="footer-sec-1">
    <div class="prelative container">
        <div class="row">
            <div class="col-md-20">
                <div class="box-content">
                    <div class="image"><img class="img img-fluid" src="<?php echo $this->assetBaseurl; ?>location.png" alt=""></div>
                    <div class="title">
                        <p>Showroom</p>
                    </div>
                    <div class="subtitle">
                        <p><a target="_blank" href="<?php echo $this->setting['contact_map_link'] ?>">view on google map</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-20">
                <div class="box-content">
                    <div class="image"><img class="img img-fluid" src="<?php echo $this->assetBaseurl; ?>wa.png" alt=""></div>
                    <div class="title">
                        <p>Whatsapp</p>
                    </div>
                    <div class="subtitle">
                        <?php
                        $nums_wa = str_replace('08', '628',  str_replace(' ', '', $this->setting['contact_wa']) );
                        ?>
                        <p><a href="https://wa.me/<?php echo $nums_wa ?>"><?php echo $this->setting['contact_wa'] ?></a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-20">
                <div class="box-content-kanan">
                    <div class="image"><img class="img img-fluid" src="<?php echo $this->assetBaseurl; ?>mail.png" alt=""></div>
                    <div class="title">
                        <p>Email</p>
                    </div>
                    <div class="subtitle">
                        <p><a href="mailto:<?php echo $this->setting['email'] ?>"><?php echo $this->setting['email'] ?></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="footer-sec-2">
    <div class="prelative container">
        <div class="row">
            <div class="col-md-10">
                <div class="image"><img class="img img-fluid" src="<?php echo $this->assetBaseurl; ?>logo-fot.png" alt=""></div>
            </div>
            <div class="col-md-40">
                <div class="box-content">
                    <div class="present">
                        <p>Dekkson presents the high quality product range of architectural accessories - mechanism - electronics - and many more.</p>
                    </div> 
                    <div class="copyright">
                        <p>&copy; COPYRIGHT 2019 - DEKKSON ARCHITECTURE ACCESSORIES. ALL RIGHTS RESERVED. WEBSITE DESIGN BY <a target="_blank" title="Website Design Surabaya" href="http://markdesign.net/">MARKDESIGN</a>.</p>
                    </div>   
                </div>
            </div>
            <div class="col-md-10">
                <div class="social-footer">
                    <a target="_blank" href="<?php echo $this->setting['url_facebook'] ?>"><i class="fa fa-instagram"></i></a>
                    &nbsp;
                    <a target="_blank" href="<?php echo $this->setting['url_instagram'] ?>"><i class="fa fa-facebook"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>