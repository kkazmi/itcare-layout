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
          <h1  class="text-center"><div class="operator pull-left"><i class="airtftt"></i></div> Mobile &amp; PayBills</h1>
          <div class="clearfix"></div>
          <hr>
      </div>      
      	
	
	
    <div class="recharge-bills">
      
     
      
      <div class="tab-content">
          <div role="tabpanel" class="tab-pane fade in active" id="mobile">
      <div id="mb-rec-sub-loader" class="popup-loader hide">
    <img alt="" src="public/images/loader.png">
</div>
    <form id="form-mobile-recharge" action="https://www.oxigenwallet.com/recharge/mobile-recharge/index" method="post">
<input type="hidden" name="_csrf" value="WERBVzZ4NmxoKiQEcyJAK3VpFAZbFmQzMwtsJkweBzw8LwZ6RwF.Bg==">        
        <div class="row">
            <div class="col-xs-12 col-sm-7 col-md-6 col-lg-6">
                <div class="radio">
                    <input class="recharge_mode" id="mobprepaid" type="radio" name="MobileRecharge[service]" value="prepaid" checked>
                    <label for="mobprepaid">Prepaid</label>
                    <input class="recharge_mode" id="monbpostpaid" type="radio" name="MobileRecharge[service]" value="postpaid">
                    <label for="monbpostpaid">Postpaid</label>
                </div>
            </div>
           
            <div class="clearfix"></div>
            <div class="space"></div>
            <div class="clearfix"></div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="form-group">
                        <div class="field-mobilerecharge-service_number required">
<div class="input-group"><span class="input-group-addon">+91</span><input type="text" id="mobilerecharge-service_number" class="form-control integerOnly nozero checkNumber" name="MobileRecharge[service_number]" value="" maxlength="10" placeholder="Enter Mobile No." data-number="mobile no." autocomplete="off"></div><div class="help-block"></div>
</div>                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="form-group">
                    <div class="field-mobilerecharge-operator required">
<select id="mobilerecharge-operator" class="form-control  with-arrow" name="MobileRecharge[operator]">
<option value="">Select Operator</option>
<option value="AIRC">Aircel</option>
<option value="AIRTFTT" selected>Airtel</option>
<option value="BSNL">BSNL</option>
<option value="IDEA">Idea</option>
<option value="MTNL">MTNL</option>
<option value="MTS">MTS</option>
<option value="RELG">Reliance GSM</option>
<option value="T24">T24</option>
<option value="DOCO">TATA Docomo</option>
<option value="INDI">Tata Indicom</option>
<option value="UNIN">Uninor</option>
<option value="VIDEOCON">Videocon</option>
<option value="VODA">Vodafone</option>
</select><div class="help-block"></div>
</div>                </div>
                <input id="service_circle" type="hidden" name="MobileRecharge[hidden_circle]">

                <input id="service_operator" type="hidden" name="MobileRecharge[hidden_operator]">
                <input id="service_operator_alias" type="hidden" name="MobileRecharge[hidden_operator_alias]">
                
                <input type="hidden" value="" name="MobileRecharge[alreadyFav]" class="form-control">
            </div>
            <div class="clearfix"></div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 hide">
                <div class="form-group">
                    <div class="field-mobilerecharge-circle required">
<div class="input-group"><span class="input-group-addon with-arrow"></span><select id="mobilerecharge-circle" class="form-control" name="MobileRecharge[circle]">
<option value="AP">ANDHRA PRADESH</option>
<option value="ASM">ASSAM</option>
<option value="BIH">BIHAR</option>
<option value="CHE">CHENNAI</option>
<option value="DEL">DELHI</option>
<option value="GUJ">GUJARAT</option>
<option value="HAR">HARYANA</option>
<option value="HP">HIMACHAL PRADESH</option>
<option value="JK">JAMMU AND KASHMIR</option>
<option value="KER">KERALA</option>
<option value="KK">KARNATAKA</option>
<option value="KOL">KOLKATA</option>
<option value="MAH">MAHARASHTRA</option>
<option value="MP">MADHYA PRADESH</option>
<option value="MUM">MUMBAI</option>
<option value="NE">NORTH EAST</option>
<option value="ORI">ORISSA</option>
<option value="PUN">PUNJAB</option>
<option value="RAJ">RAJASTHAN</option>
<option value="TN">TAMIL NADU</option>
<option value="UPE">UTTAR PRADESH (EAST)</option>
<option value="UPW">UTTAR PRADESH (WEST)</option>
<option value="WB">WEST BENGAL</option>
</select></div><div class="help-block"></div>
</div>                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 mobile-is-special hide">
                <div class="form-group">
                    <div class="field-mobilerecharge-hidden_is_special">
<select id="hidden_is_special" class="form-control" name="MobileRecharge[hidden_is_special]">
<option value="0">TopUp</option>
<option value="1">Special</option>
</select><div class="help-block"></div>
</div>                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <input id="mobilerecharge-plan" type="hidden" name="MobileRecharge[plan_id]">
                <div class="form-group operator-name">
                        <div class="field-mobilerecharge-amount required">
<div class="input-group"><span class="input-group-addon rupee">₹</span><input type="text" id="mobilerecharge-amount" class="form-control integerOnly nozero" name="MobileRecharge[amount]" value="" maxlength="5" placeholder="Enter Amount"><span class="input-group-btn browse-plan" id="mb-rechrge-plans"><a class="btn btn-default disabled flip" role="button" data-toggle="collapse" href="#browseplan" aria-expanded="false" aria-controls="browseplan">Browse Plans</a></span><span class="browse-plan-disable"></span></div><div class="help-block"></div>
</div>                </div>
            </div>

           <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <span class="offset-setter-browse"></span>
    <div class="browseplan mar-bottom hide collapse" id="browseplan" tabindex="0" aria-expanded="true">
    <div class="heading-inner">
      <h2 class="pull-left">Browse Plans</h2>
      <span class="pull-right"><a href="javascript:void(0);" class="close-browse close-flip">x</a></span>
      <div class="clearfix"></div>
      <hr>
    </div>
    <div class="row" id="customPlans">
      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
        <div class="form-group">
            <select class="form-control with-arrow fixedMobileOperators" id="selected-mobile-operators">
                      </select>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
        <div class="form-group">
            <select class="form-control  with-arrow" id="browse-plan-circle">
            
          </select>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
        <div class="form-group">
          <select class="form-control  with-arrow" id="browse-plan-options">
            <option>All Plans</option>
          </select>
        </div>
      </div>
    </div>
    </div>
</div>            
                        

            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="mb_recharge_sub_container">
                <span id="mobileRechargePlan" data-recharge-plan=""></span>
                <button type="button" id="button-mobile-recharge" class="btn btn-primary btn-block ">Recharge Now</button>            </div>

            <div id="mb_recharge_conf_container" class="hide">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 mar-bottom">
                <button type="submit" id="button-mobile-confirm-recharge" class="btn btn-primary btn-block">Confirm Now</button>                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 text-left">
                    <a id="frm_btn_skip" href="javascript:void(0);" class="btn btn-edit-skip">Edit</a>
                </div>
            </div>
            

        </div>
    </form>           </div>
      </div>
      
        		  
				<div class='heading-inner mar-top-30'><div class="mar-bottom-30">
<p><strong>Airtel Prepaid Online Recharge</strong></p>

<p>Bharti Airtel, popularly known as Airtel, is the largest mobile network operator in India. The company operating in India from over 3 decades has a subscriber base of 200+ million and expanding. Having said that, Airtel is one of the most preferred and used telecom service in India.</p>

<p><strong>Airtel Recharge Plans &amp; Services </strong></p>

<p>With Airtel, customers can avail the best pre-paid and internet services across all the major Indian cities viz. Delhi-NCR, Bangalore, Hyderabad &amp; more. Moreover, they can get additional benefits such as lifetime prepaid services, budget-friendly talking and messaging plans and now the superfast 4G internet. Also, they can download games, wallpapers and other mobile-goodies to their phones.</p>

<p>No matter what you need and what you opt for, ItCare  lets you browse Airtel recharge plans and recharge the one that best suits you in just a few clicks.</p>

<p><strong>Easy to access, uninterrupted services available 24*7 </strong></p>

<p>Get ahead with Oxigen Wallet&rsquo;s easy to use interface and safe and secured platform when recharging your mobile connection. You can avail our services 24*7 through our website, mobile site, and mobile App (Android, iOS, and Windows).</p>
</div>



<h2 class="prepaidrecharge">Online Mobile Recharge</h2>

<div class="clearfix">&nbsp;</div>

<hr/>
<div class="row">
<div class="col-xs-12 col-sm-4 col-md-2 col-lg-2">
<div class="box"><a href="aircel"><img alt="" class="img-responsive" src="public/images/operators/aircel.jpg"/></a></div>
</div>

<div class="col-xs-12 col-sm-4 col-md-2 col-lg-2">
<div class="box"><a href="airtel"><img alt="" class="img-responsive" src="public/images/operators/airtel.jpg"/></a></div>
</div>

<div class="col-xs-12 col-sm-4 col-md-2 col-lg-2">
<div class="box"><a href="bsnl"><img alt="" class="img-responsive" src="public/images/operators/bsnl.jpg"/></a></div>
</div>

<div class="col-xs-12 col-sm-4 col-md-2 col-lg-2">
<div class="box"><a href="idea"><img alt="" class="img-responsive" src="public/images/operators/idea.jpg"/></a></div>
</div>

<div class="col-xs-12 col-sm-4 col-md-2 col-lg-2">
<div class="box"><a href="mtnl"><img alt="" class="img-responsive" src="public/images/operators/mtnl.jpg"/></a></div>
</div>

<div class="col-xs-12 col-sm-4 col-md-2 col-lg-2">
<div class="box"><a href="mts"><img alt="" class="img-responsive" src="public/images/operators/mts.jpg"/></a></div>
</div>


<div class="col-xs-12 col-sm-4 col-md-2 col-lg-2">
<div class="box"><a href="t24"><img alt="" class="img-responsive" src="public/images/operators/t24.jpg"/></a></div>
</div>


<div class="col-xs-12 col-sm-4 col-md-2 col-lg-2">
<div class="box"><a href="uninor"><img alt="" class="img-responsive" src="public/images/operators/uninor.jpg"/></a></div>
</div>

<div class="col-xs-12 col-sm-4 col-md-2 col-lg-2">
<div class="box"><a href="videocon"><img alt="" class="img-responsive" src="public/images/operators/videocon.jpg"/></a></div>
</div>

<div class="col-xs-12 col-sm-4 col-md-2 col-lg-2">
<div class="box"><a href="vodafone"><img alt="" class="img-responsive" src="public/images/operators/vodaphone.jpg"/></a></div>
</div>
</div>


<div class="clearfix">&nbsp;</div>
<h2 class="prepaid recharge">Online Mobile Pay Bills</h2>



<div class="clearfix">&nbsp;</div>

<hr/>
<div class="row">
<div class="col-xs-12 col-sm-4 col-md-2 col-lg-2">
<div class="box"><a href="aircel"><img alt="" class="img-responsive" src="public/images/operators/aircel.jpg"/></a></div>
</div>

<div class="col-xs-12 col-sm-4 col-md-2 col-lg-2">
<div class="box"><a href="airtel"><img alt="" class="img-responsive" src="public/images/operators/airtel.jpg"/></a></div>
</div>

<div class="col-xs-12 col-sm-4 col-md-2 col-lg-2">
<div class="box"><a href="bsnl"><img alt="" class="img-responsive" src="public/images/operators/bsnl.jpg"/></a></div>
</div>

<div class="col-xs-12 col-sm-4 col-md-2 col-lg-2">
<div class="box"><a href="idea"><img alt="" class="img-responsive" src="public/images/operators/idea.jpg"/></a></div>
</div>

<div class="col-xs-12 col-sm-4 col-md-2 col-lg-2">
<div class="box"><a href="mts"><img alt="" class="img-responsive" src="public/images/operators/mts.jpg"/></a></div>
</div>

<div class="col-xs-12 col-sm-4 col-md-2 col-lg-2">
<div class="box"><a href="reliance-cdma"><img alt="" class="img-responsive" src="public/images/operators/reliance.jpg"/></a></div>
</div>

<div class="col-xs-12 col-sm-4 col-md-2 col-lg-2">
<div class="box"><a href="reliance-gsm"><img alt="" class="img-responsive" src="public/images/operators/reliance.jpg"/></a></div>
</div>

<div class="col-xs-12 col-sm-4 col-md-2 col-lg-2">
<div class="box"><a href="tata-docomo"><img alt="" class="img-responsive" src="public/images/operators/tata-docomo.jpg"/></a></div>
</div>

<div class="col-xs-12 col-sm-4 col-md-2 col-lg-2">
<div class="box"><a href="vodafone"><img alt="" class="img-responsive" src="public/images/operators/vodaphone.jpg"/></a></div>
</div>
</div>
</div>    </div>
     

  </section>
</div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        
        
        
        <span id="footer-cache" data-footer-link-cache="1"></span>
<div class="popup-loader" id="submit-loader" style="display:none;">
            <img src="public/images/loader.png" alt=""></div>
    <noscript>
    <meta http-equiv="refresh" content="1; URL=site/error-page575b.html?message=js_disabled&amp;title=Javascript%20Disabled"/>
    </noscript>
   <?php
include_once ('include/footer.php');
?>