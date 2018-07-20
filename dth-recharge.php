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
              <h1 class="text-center">Dth Reachge </h1>
              <div class="clearfix"></div>
              <hr>
      </div>
      		
        <div class="recharge-bills">
           
            
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="mobile">
                    <div id="dth-rec-sub-loader" class="popup-loader hide">
    <img alt="" src="/public/images/loader.png">
</div>
    <form id="form-dth-recharge" action="/recharge/dth-recharge/index" method="post">
<input type="hidden" name="_csrf" value="QVRmd2o2Y2EbMzUbE0IMB3IfCABTXBRRBBscLSZlBiYpZjAzDmcEEw==">        
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                


            </div>
            <div class="clearfix"></div>
            <div class="space"></div>
            <div class="clearfix"></div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="form-group positionrelative">
                        <div class="field-dthrecharge-service_number required">
<input type="text" id="dthrecharge-service_number" class="form-control integerOnly checkCardNumber" name="DthRecharge[service_number]" value="" maxlength="12" placeholder="Subscriber ID" data-number="subscriber ID." autocomplete="off"><div class="help-block"></div>
</div>                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="form-group">
                    <div class="field-dthrecharge-operator required">

<select id="dthrecharge-operator" class="form-control" name="DthRecharge[operator]">
<option value="">Select Operator</option>
<option value="AIRTELTV">AIRTEL TV</option>
<option value="BIGTV">BIG TV</option>
<option value="SUNTV">SUN TV</option>
<option value="TATASKY">TATA SKY</option>
<option value="VIDEOCOND2H">VIDEOCON D2H</option>
<option value="DISHTV">DISH TV</option>
</select>

<div class="help-block"></div>
</div>                </div>
                <input id="service_circle" type="hidden" name="DthRecharge[hidden_circle]">
                <input id="service_operator" type="hidden" name="DthRecharge[hidden_operator]">
                <input id="service_operator_alias" type="hidden" name="DthRecharge[hidden_operator_alias]">
                <input type="hidden" value="1" name="DthRecharge[alreadyFav]" class="form-control">
            </div>
            <div class="clearfix"></div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="form-group">
                        <div class="field-dthrecharge-amount required">
<div class="input-group"><span class="input-group-addon rupee">₹</span><input type="text" id="dthrecharge-amount" class="form-control integerOnly nozero" name="DthRecharge[amount]" value="" maxlength="5" placeholder="Enter Amount"></div><div class="help-block"></div>
</div>
                </div>
            </div>
            <div class="clearfix"></div>
            
                        

            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="dth_recharge_sub_container">
                <button type="button" id="button-dth-recharge" class="btn btn-primary btn-block">Recharge Now</button>            </div>
            <div id="dth_recharge_conf_container" class="hide">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 mar-bottom">
                <button type="submit" id="button-dth-confirm-recharge" class="btn btn-primary btn-block">Confirm Now</button>                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 text-left">
                    <a id="frm_btn_skip" href="javascript:void(0);" class="btn btn-edit-skip">Edit</a>
                </div>
            </div>
            

        </div>
    </form>                </div>
            </div>
            <div class="clearfix"></div>
            		  
				<div class='heading-inner mar-top-30'><h2 class="dthrecharge">Select Your DTH Service Provider and Pay Bills</h2>
<hr>
<div class="clearfix"></div>
<div class="row">
  <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
    <div class="box"><a href="/airtel-tv-dth-recharge-packages"><img src="public/images/operators/airtel-tv.jpg" alt="" class="img-responsive"></a></div>
  </div>
  <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
    <div class="box"><a href="/big-tv-dth-recharge-packages"><img src="public/images/operators/big-tv.jpg" alt="" class="img-responsive"></a></div>
  </div>
  <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
    <div class="box"><a href="/dish-tv-dth-recharge-packages"><img src="public/images/operators/dish-tv.jpg" alt="" class="img-responsive"></a></div>
  </div>
  <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
    <div class="box"><a href="/sun-tv-dth-recharge-packages"><img src="public/images/operators/sun-tv.jpg" alt="" class="img-responsive"></a></div>
  </div>
  <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
    <div class="box"><a href="tata-sky-dth-recharge-packages"><img src="public/images/operators/tata-sky.jpg" alt="" class="img-responsive"></a></div>
  </div>
  <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
    <div class="box"><a href="/videocon-d2h-dth-recharge-packages"><img src="public/images/operators/videocon-d2h.jpg" alt="" class="img-responsive"></a></div>
  </div>
</div>
<p>Never miss out on your favorite TV show. Recharge your DTH instantly right from your living room using ItCare.</p>
</div>          </div>
           
          
        </section>
      </div>

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