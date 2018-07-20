<?php
include_once ('include/header.php');
?>    
        <div class="container pad-150">
  <div class="row">
    <div id="service-tabs">
      <div class="clearfix"></div>
      <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 service-tabs service-tabs-mob"><a href="#" class="previous direction-arrow hide"></a>
        <section class="white shadow pad-null">
          <ul style="width: auto;">
           
            <li class="active"><a href="contact.php"><i class="sprite-icon icon-bg contact-us"></i>Contact Us</a></li>
            
            
            
            
          </ul>
        </section>
      <a href="#" class="next direction-arrow"></a>
</div>      
      <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
        <section class="white shadow no-pad-bottom">
          <div class="heading-inner">
            <h1 class="text-center">Got Some Questions?</h1>
            <div class="clearfix"></div>
            <hr>
          </div>
          <p><strong>Write to us and we'll get back to you soon.!!!</strong></p>

          <div class="space"></div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="row">
                <form id="contact-form" action="" method="post" role="form">
<input type="hidden" name="_csrf" value="RTd5RVJ1VlF1WRwWFy8gFmgaLBQ/GwQOLnhUNCgTZwEhXD5oIwweOw==">              <div class="form-group">
                    <div class="form-group field-contactus-mobile required">
<div class="input-group"><span class="input-group-addon"><i class="form-icon sprite mobile-number"></i></span><input type="text" id="contactus-mobile" class="form-control integerOnly checkNumber" name="ContactUs[mobile]" maxlength="10" placeholder="Enter mobile number" onkeypress="return isNumberKey(event)"></div><p class="help-block help-block-error"></p>
</div>              </div>
              <div class="form-group">
                  <div class="form-group field-contactus-email required">
<div class="input-group"><span class="input-group-addon"><i class="form-icon sprite email-id"></i></span><input type="text" id="contactus-email" class="form-control nozero" name="ContactUs[email]" maxlength="64" placeholder="Enter email"></div><p class="help-block help-block-error"></p>
</div>              </div>
                <div class="clearfix"></div>
              <div class="form-group">
                  <div class="form-group field-contactus-topic_id required">
<div class="input-group"><span class="input-group-addon"><i class="form-icon sprite help-topics"></i></span><select id="contactus-topic_id" class="form-control" name="ContactUs[topic_id]">
<option value="">Select Help Topic</option>
<option value="1">Transaction Failed</option>
<option value="2">Refund Related Queries</option>
<option value="3">Itcare Wallet Related Issues</option>
<option value="4">Shop &amp; Earn Related Queries</option>
<option value="5">Itcare Point Related Issues</option>
<option value="6">Suggestions/Feedback</option>
<option value="7">Partnership/Alliances</option>
<option value="8">Coupons/Vouchers</option>
<option value="9">Mobile App/SMS Keywords</option>
<option value="10">General Issues</option>
<option value="11">Amazon Gift Card Query</option>
</select></div><p class="help-block help-block-error"></p>
</div>              </div>
              <div class="form-group">
                  <div class="form-group field-contactus-transaction_no">
<div class="input-group"><span class="input-group-addon"><i class="form-icon sprite transaction-no"></i></span><input type="text" id="contactus-transaction_no" class="form-control" name="ContactUs[transaction_no]" maxlength="20" placeholder="Enter Transaction ID" onkeypress="return isNumberKey(event)"></div><p class="help-block help-block-error"></p>
</div>              </div>
                <div class="clearfix"></div>
              <div class="form-group">
                    <div class="form-group field-contactus-query">
<div class="input-group"><span class="input-group-addon"><i class="form-icon sprite comments"></i></span><textarea id="contactus-query" class="form-control nozero" name="ContactUs[query]" maxlength="250" placeholder="Please write your query here."></textarea></div><p class="help-block help-block-error"></p>
</div>              </div>
              <div class="row captcha-code">
              <div class="col-xs-12 col-sm-12 col-md-8 col-lg-7">
                        <div class="form-group field-contactus-verifycode required">

<div class="clearfix"></div>

<p class="help-block help-block-error"></p>
</div>              </div>
              
              </div>
              <div class="clearfix"></div>  
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block" id="disable-btn">Submit</button>
              </div>
              </form>            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 pull-right mar-bottom">
            <div class="row">
              <div class="address-bg">
                <h3>Corporate Office:</h3>
                <p><i class="sprite address"></i><span>ITCARE INFOTECH
                8TH Floor Unit No :853 , Spaze I- Tech Park,Sohna Road, Gurgaon Hr.122018</span></p>
                <p><i class="sprite phone-number"></i>Phone Number: +91 9999417007</p>
                <p><i class="sprite phone-number"></i>Toll Free Number: 1800-2702-853 </p>
                <p><i class="sprite email"></i>Email: <a href="mailto:info@itcareapi.in" style="color: #d32f2f;">info@itcareapi.in</a></p>
              </div>
            </div>
          </div>          
          <div class="clearfix"></div>
          
                      <br>
        </section>
      </div>
    </div>
    <div class="clearfix"></div>
  </div>
</div>
        
        
        <span id="footer-cache" data-footer-link-cache="1"></span>
<div class="popup-loader" id="submit-loader" style="display:none;">
            <img src="../public/images/loader.png" alt=""></div>
 <?php
include_once ('include/footer.php');
?>