<section class="breadcrumb-det">
    <div class="prelative container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
            </ol>
        </nav>
    </div>
</section>

<section class="contact-sec-1">
  <div class="prelative container">
    <div class="row no-gutters">
      <div class="col-md-20">
        <div class="images"><img class="img img-fluid w-100" src="<?php echo Yii::app()->baseUrl.'/images/static/'. $this->setting['contact_picture'] ?>" alt=""></div>
      </div>
      <div class="col-md-40">
        <div class="box-content">
          <div class="caption">
            <p><?php echo $this->setting['contact_content'] ?></p>
          </div>
          <div class="headquarter">
            <h5>Headquarter</h5>
            <p><?php echo $this->setting['contact_address'] ?></p>
          </div>
          <div class="contact">
            <h5>Email.</h5>
            <p><?php echo $this->setting['email'] ?> or </p>
            <h5>Whatsapp </h5>
            <?php
            $nums_wa = str_replace('08', '628',  str_replace(' ', '', $this->setting['contact_wa']) );
            ?>
            <a href="https://wa.me/<?php echo $nums_wa ?>"><p><?php echo $this->setting['contact_wa'] ?> (Click to chat)</p></a>
          </div>
          <div class="telephone">
            <h5>Telephone. </h5>
            <p><?php echo $this->setting['contact_phone'] ?></p>
          </div>

          <div class="hr-garis"></div>

          <div class="inquiry">
              <h4>Dekkson Inquiry Form</h4>
            </div>
          <form>
            <div class="form-row">
              <div class="form-group col-md-20">
                <input type="Your Name" class="form-control" id="inputYourName4" placeholder="Your Name">
              </div>
              <div class="form-group col-md-20">
                <input type="Your Mobile Phone" class="form-control" id="inputPassword4" placeholder="Your Mobile Phone">
              </div>
              <div class="form-group col-md-20">
                <input type="Your Email" class="form-control" id="inputPassword4" placeholder="Your Email">
              </div>
              <div class="form-group col-md-40">
                <textarea type="Message" class="form-control" id="inputPassword4" placeholder="Message" rows="3"></textarea>
              </div>
              <div class="form-group col-md-20">
                <div class="submit">
                  <img src="<?php echo $this->assetBaseurl; ?>click.png" alt="">
                  <a href="#"><p> Submit</p></a>
                </div>
              </div>
            </div>
          </form>
  
          <div class="opening">
            <p>*We are operting on GMT +7 operation hours. All inquiries are valueable to us and will be responded accordingly.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


