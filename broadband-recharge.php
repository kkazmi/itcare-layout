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
              <h1 class="text-center">Broadband &amp; Pay Bills</h1>
              <div class="clearfix"></div>
              <hr>
      </div>
                
          <div class="recharge-bills">
            
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="broadband">
                    <div id="elc-rec-sub-loader" class="popup-loader hide">
    <img alt="" src="/public/images/loader.png">
</div>
<form id="form-pay-bb-bill" action="/paybills/broadband-bill-payment/index" method="post">
<input type="hidden" name="_csrf" value="NkFXZ3VmaDNsJgQLDBIHVQUKORBMDB8Dcw4tPTk1DXRecwEjETcPQQ==">
        
        <div class="row">
            <div class="col-xs-12 col-sm-7 col-md-6 col-lg-6">
                <div class="radio">
                    <input class="bb_recharge_mode" id="bb_prepaid" type="radio" name="BroadbandBillPayment[service]" value="prepaid" checked>
                    <label for="bb_prepaid">Topup</label>
                    <input class="bb_recharge_mode" id="bb_postpaid" type="radio" name="BroadbandBillPayment[service]" value="postpaid">
                    <label for="bb_postpaid">Recharge</label>
                </div>
            </div>
                 <div class="clearfix"></div>
            <div class="space"></div>
            <div class="clearfix"></div>            

            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="form-group">                    
                    <div class="field-broadbandbillpayment-operator required">

<select id="broadbandbillpayment-operator" class="form-control" name="BroadbandBillPayment[operator]">
<option value="">Select Operator</option>
<option value="1663">DEN</option>
<option value="923">TIKONA</option>
</select>

<div class="help-block"></div>
</div>                <input type="hidden" name="BroadbandBillPayment[hidden_bb_operator]" id="hidden_bb_operator">
                <input type="hidden" name="BroadbandBillPayment[alreadyFav]" value="1">
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 " id="broadband_amount">
                <div class="form-group operator-name">
                    <div class="field-broadbandbillpayment-amount required">
<div class="input-group"><span class="input-group-addon rupee">₹</span><input type="text" id="broadbandbillpayment-amount" class="form-control nozero rsval" name="BroadbandBillPayment[amount]" value="" maxlength="7" placeholder="Enter Amount"><span class="input-group-btn browse-plan biller_bill_fetch"><a class="btn btn-default disabled" role="button" tabindex="-1" href="javascript:void(0);">Bill fetch</a></span></div><div class="help-block"></div>
</div>                </div>
            </div>


            <div class="clearfix"></div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="bb_recharge_sub_container">
                <button type="button" id="button-pay-bb-bill" class="btn btn-primary btn-block">Pay Now</button>            </div>
            <div id="bb_recharge_conf_container" class="hide">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 mar-bottom">
                <button type="submit" id="button-bb-confirm-recharge" class="btn btn-primary btn-block">Confirm Now</button>                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 text-left">
                    <a id="frm_btn_skip" href="javascript:void(0);" class="btn btn-edit-skip">Edit</a>
                </div>
            </div>
            
        </div>
</form>                </div>
            </div>

          

            <div class="clearfix"></div>
            		  
				<div class='heading-inner mar-top-30'><h2">Broadband Payment</h2>
<hr>
<div class="clearfix"></div>
<div class="row">
  <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
    <div class="box"><a href="/den-broadband-bill-payment"><img src="public/images/operators/den.jpg" alt="" class="img-responsive"></a></div>
  </div>
  <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
    <div class="box"><a href="/tikona-broadband-bill-payment"><img src="public/images/operators/tikona.jpg" alt="" class="img-responsive"></a></div>
  </div>
</div>
<p>Jump the queues. Now make your monthly broadband bill payments quickly and safely using It-Care.</p>
</div>
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