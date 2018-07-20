  <?php
include_once ('include/header.php');
?>  
        
        <div class="container pad-150">
            <div class="row">
                <div id="service-tabs">
                    <div class="clearfix"></div>
                        
                        

<style type="text/css">.service-tabs li i.etn,.service-tabs i.rupaycard-m{background-position:7px -153px}</style>
<?php
include_once ('include/services-offer-list.php');
?>
                        
                              <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
        <section class="white shadow">
            <div class="heading-inner">
              <h1 class="text-center">Electricity &amp; Bills</h1>
              <div class="clearfix"></div>
              <hr>
      </div>
                
          <div class="recharge-bills">
            
          
            
            <div class="tab-content">
               
                
                <div role="tabpanel" class="tab-pane fade in active" id="datacard">
                    <div id="elc-rec-sub-loader" class="popup-loader hide">
    <img alt="" src="/public/images/loader.png">
</div>
<form id="form-pay-electricity-bill" action="#" method="post">
<input type="hidden" name="_csrf" value="TFNGYklRT2MWNBUOMCUgBX8YKBVwOzhTCRw8OAUCKiQkYRAmLQAoEQ==">
        
        <div class="row">

                        <div class="clearfix"></div>
            <div class="space"></div>
            <div class="clearfix"></div>
            
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="form-group">
                    <div class="field-electricitybillpayment-operator required">

<select id="electricitybillpayment-operator" class="form-control" name="ElectricityBillPayment[operator]">
<option value="">Select Operator</option>
<option value="909">BSES RAJDHANI</option>
<option value="1506">BSES YAMUNA</option>
<option value="2012">MSPDCL</option>
<option value="1446">NOIDA POWER COMPANY LTD (NPCL)</option>
<option value="1111">TATA POWER DELHI</option>
</select>

<div class="help-block"></div>
</div>                <input type="hidden" name="ElectricityBillPayment[hide_ele_operator]" id="hide_ele_operator">
                <input type="hidden" name="ElectricityBillPayment[alreadyFav]" value="1">
                </div>
               
            </div>
           
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 " id="electricity_amount">
                <div class="form-group operator-name">
                    <div class="field-electricitybillpayment-amount required">
<div class="input-group"><span class="input-group-addon rupee">₹</span><input type="text" id="electricitybillpayment-amount" class="form-control nozero rsval" name="ElectricityBillPayment[amount]" value="" maxlength="7" placeholder="Enter Amount"><span class="input-group-btn browse-plan biller_bill_fetch"><a class="btn btn-default disabled" role="button" tabindex="-1" href="javascript:void(0);">Bill fetch</a></span></div><div class="help-block"></div>
</div>                </div>
            </div>

            
                        
            <div class="clearfix"></div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="el_recharge_sub_container">
                <button type="button" id="button-pay-electricity-bill" class="btn btn-primary btn-block">Pay Now</button>            </div>
            <div id="el_recharge_conf_container" class="hide">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 mar-bottom">
                <button type="submit" id="button-el-confirm-recharge" class="btn btn-primary btn-block">Confirm Now</button>                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 text-left">
                    <a id="frm_btn_skip" href="javascript:void(0);" class="btn btn-edit-skip">Edit</a>
                </div>                
            </div>
            
        </div>
</form>                </div>
            </div>
            <div class="clearfix"></div>
            		  
				<div class='heading-inner mar-top-30'><h2>Electricity Bills Payment</h2>
<hr>
<div class="clearfix"></div>
<div class="row">
  <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
    <div class="box"><a href="/bses-rajdhani-electricity-bill-payment"><img src="public/images/operators/bses-rajdhani.jpg" alt="" class="img-responsive"></a></div>
  </div>
  <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
    <div class="box"><a href="/bses-yamuna-electricity-bill-payment"><img src="public/images/operators/bses-yamuna.jpg" alt="" class="img-responsive"></a></div>
  </div>
  <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
    <div class="box"><a href="/nesco-electricity-bill-payment"><img src="public/images/operators/nesco.jpg" alt="" class="img-responsive"></a></div>
  </div>
  <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
    <div class="box"><a href="/nbpdcl-electricity-bill-payment"><img src="public/images/operators/nbpdcl.jpg" alt="" class="img-responsive"></a></div>
  </div>
  <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
    <div class="box"><a href="/sbpdcl-electricity-bill-payment"><img src="public/images/operators/sbpdcl.jpg" alt="" class="img-responsive"></a></div>
  </div>
  <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
    <div class="box"><a href="/npcl-electricity-bill-payment"><img src="public/images/operators/npcl.jpg" alt="" class="img-responsive"></a></div>
  </div>
  <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
    <div class="box"><a href="/reliance-energy-electricity-bill-payment"><img src="public/images/operators/reliance-energy.jpg" alt="" class="img-responsive"></a></div>
  </div>
  <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
    <div class="box"><a href="/tata-power-electricity-bill-payment"><img src="public/images/operators/tata-power.jpg" alt="" class="img-responsive"></a></div>
  </div>
</div>
<p>It is quick &amp; hassle-free to pay your monthly electricity bills using Oxigen Wallet. A few simple clicks and you are done.</p>
</div>          </div>
           
          
        </section>
      </div>
			
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        
        
        
        <span id="footer-cache" data-footer-link-cache="1"></span>
<div class="popup-loader" id="submit-loader" style="display:none;">
            <img src="/public/images/loader.png" alt=""></div>
    <noscript>
    <meta http-equiv="refresh" content="1; URL=https://www.oxigenwallet.com/site/error-page?message=js_disabled&title=Javascript%20Disabled"/>
    </noscript>
  <?php
include_once ('include/footer.php');
?>