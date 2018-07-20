<?php
include_once ('include/header.php');
?>


    <div class="container pad-150">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">

                <section style="overflow: hidden;position: relative;">
                    <div class="flipcard effect__click">
                        <div class="card__front posrel">

                            <div class="recharge-bills recharge-bills-home">
                                <div class="heading">
                                    <h1 class="pull-left">Recharge &amp; PayBills</h1>
                                    <span class="pull-right hide"> <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Pay for bills & recharges in 2 quick steps." class="pull-right"><i class="sprite info"></i></a> </span>
                                    <div class="clearfix"></div>
                                    <hr>
                                </div>
                                <div class="tabs">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" class="active"><a href="#mobile" aria-controls="mobile" role="tab" data-toggle="tab"><i class="icon-bg sprite mobile"></i>Mobile</a></li>
                                        <li role="presentation"><a href="#landline" aria-controls="landline" role="tab" data-toggle="tab"><i class="icon-bg sprite landline"></i>Landline</a></li>
                                        <li role="presentation"><a href="#dth" aria-controls="dth" role="tab" data-toggle="tab"><i class="icon-bg sprite dth"></i>DTH</a></li>
                                        <li role="presentation"><a href="#datacard" aria-controls="datacard" role="tab" data-toggle="tab"><i class="icon-bg sprite datacard"></i>Datacard</a></li>
                                        <li role="presentation"><a href="#gas" aria-controls="gas" role="tab" data-toggle="tab"><i class="icon-bg sprite gas"></i>Gas</a></li>
                                        <li role="presentation"><a href="#electricity" aria-controls="electricity" role="tab" data-toggle="tab"><i class="icon-bg sprite electricity"></i>Electricity</a></li>

                                        <li role="presentation">
                                            <a data-toggle="tab" role="tab" aria-controls="broadband" href="#broadband">
                                    <i class="icon-bg sprite broadband"></i>Broadband
                                </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="mobile">
                                        <div id="mb-rec-sub-loader" class="popup-loader hide">
                                            <img alt="" src="public/images/loader.png">
                                        </div>
                                        <form id="form-mobile-recharge" action="" method="post">
                                            <input type="hidden" name="_csrf" value="#">
                                            <div class="row electricity-overflow">
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
                                                            <div class="input-group"><span class="input-group-addon">+91</span><input type="text" id="mobilerecharge-service_number" class="form-control integerOnly nozero checkNumber" name="MobileRecharge[service_number]" maxlength="10"
                                                                    placeholder="Enter Mobile No." data-number="mobile no." autocomplete="off"></div>
                                                            <div class="help-block"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                                    <div class="form-group">
                                                        <div class="field-mobilerecharge-operator required">
                                                            <select id="mobilerecharge-operator" class="form-control  with-arrow" name="MobileRecharge[operator]">
                                                            <option value="">Select Operator</option>
                                                            <option value="AIRC">Aircel</option>
                                                            <option value="AIRTFTT">Airtel</option>
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
                                                            </select>
                                                            <div class="help-block"></div>
                                                        </div>
                                                    </div>
                                                    <input id="service_circle" type="hidden" name="MobileRecharge[hidden_circle]">

                                                    <input id="service_operator" type="hidden" name="MobileRecharge[hidden_operator]">
                                                    <input id="service_operator_alias" type="hidden" name="MobileRecharge[hidden_operator_alias]">

                                                    <input type="hidden" value="1" name="MobileRecharge[alreadyFav]" class="form-control">
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 hide">
                                                    <div class="form-group">
                                                        <div class="field-mobilerecharge-circle required">
                                                            <div class="input-group"><span class="input-group-addon with-arrow"></span>
                                                                <select id="mobilerecharge-circle" class="form-control" name="MobileRecharge[circle]">
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
                                                                </select></div>
                                                            <div class="help-block"></div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 mobile-is-special hide">
                                                    <div class="form-group">
                                                        <div class="field-mobilerecharge-hidden_is_special">
                                                            <select id="hidden_is_special" class="form-control" name="MobileRecharge[hidden_is_special]">
                                                            <option value="0">TopUp</option>
                                                            <option value="1">Special</option>
                                                            </select>
                                                            <div class="help-block"></div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                                                    <input id="mobilerecharge-plan" type="hidden" name="MobileRecharge[plan_id]">

                                                    <div class="form-group operator-name">
                                                        <div class="field-mobilerecharge-amount required">
                                                            <div class="input-group"><span class="input-group-addon rupee">₹</span><input type="text" id="mobilerecharge-amount" class="form-control integerOnly nozero" name="MobileRecharge[amount]" maxlength="5" placeholder="Enter Amount">
                                                                <span
                                                                    class="input-group-btn browse-plan" id="mb-rechrge-plans"><a class="btn btn-default disabled" role="button" href="javascript:void(0);">Browse Plans</a></span>
                                                            </div>
                                                            <div class="help-block"></div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="clearfix"></div>
                                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="mb_recharge_sub_container">
                                                    <button type="button" id="button-mobile-recharge" class="btn btn-primary btn-block ">Recharge Now</button> </div>
                                                <div id="mb_recharge_conf_container" class="hide">
                                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 mar-bottom">
                                                        <button type="submit" id="button-mobile-confirm-recharge" class="btn btn-primary btn-block">Confirm Now</button> </div>
                                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 text-left">
                                                        <a id="frm_btn_skip" href="javascript:void(0);" class="btn btn-edit-skip">Edit</a>
                                                    </div>
                                                </div>


                                            </div>
                                        </form>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="landline">
                                        <div id="ll-rec-sub-loader" class="popup-loader hide">
                                            <img alt="" src="public/images/loader.png">
                                        </div>
                                        <form id="form-ll-recharge" action="" method="post">
                                            <input type="hidden" name="_csrf" value="">
                                            <div class="row electricity-overflow">
                                               
                                                <div class="clearfix"></div>
                                                <div class="space"></div>
                                                <div class="clearfix"></div>

                                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                                    <div class="form-group">
                                                        <div class="field-landlinerecharge-operator required">

                                                            <select id="landlinerecharge-operator" class="form-control" name="LandLineRecharge[operator]">
                                                            <option value="">Select Operator</option>
                                                            <option value="AIRTFTT">AIRTEL</option>
                                                            <option value="TATA">Tata Docomo</option>
                                                            <option value="MTNL">MTNL</option>
                                                            <option value="BSNL">BSNL</option>
                                                            </select>

                                                            <div class="help-block"></div>
                                                        </div>
                                                    </div>
                                                    <input id="service_circle" type="hidden" name="LandLineRecharge[hidden_circle]">

                                                    <input id="service_operator" type="hidden" name="LandLineRecharge[hidden_operator]">
                                                    <input id="service_operator_alias" type="hidden" name="LandLineRecharge[hidden_operator_alias]">
                                                    <input type="hidden" value="1" name="LandLineRecharge[alreadyFav]">
                                                </div>

                                                <span id="bsnl-ll-services" class="hide">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="form-group">
                    <div class="field-landlinerecharge-type">

                    <select id="landlinerecharge-type" class="form-control" name="LandLineRecharge[type]">
                    <option value="">Select Type</option>
                    <option value="1">Corporate Account</option>
                    <option value="2">Individual Account</option>
                    </select>

<div class="help-block"></div>
</div>                </div>
            </div>
            <div class="clearfix"></div>
            
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="form-group">
                        <div class="field-landlinerecharge-account_number">
<input type="text" id="landlinerecharge-account_number" class="form-control integerOnly checkVaidNumber" name="LandLineRecharge[account_number]" maxlength="10" placeholder="Enter Account No." data-number="account no." autocomplete="off"><div class="help-block"></div>
</div>                </div>
            </div>
            </span>


                                                <span id="show-bsnl-ll-service-no" class=""><div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="form-group positionrelative">
                        <div class="field-landlinerecharge-service_number">
<input type="text" id="landlinerecharge-service_number" class="form-control integerOnly checkVaidNumber" name="LandLineRecharge[service_number]" maxlength="10" placeholder="Enter Land Line No." data-number="land line no." autocomplete="off"><div class="help-block"></div>
</div>                </div>
            </div>
            <div class="clearfix"></div>
            </span>


                                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                                    <div class="form-group">
                                                        <div class="field-landlinerecharge-circle required">

                                                            <select id="landlinerecharge-circle" class="form-control" name="LandLineRecharge[circle]">
                                                            <option value="">Select Circle</option>
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
                                                            </select>

                                                            <div class="help-block"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="addClearfix "></div>

                                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                                    <div id="lopn" class="form-group">
                                                        <div class="field-landlinerecharge-amount required">
                                                            <div class="input-group"><span class="input-group-addon rupee">₹</span><input type="text" id="landlinerecharge-amount" class="form-control  rsval nozero" name="LandLineRecharge[amount]" maxlength="7" placeholder="Enter Amount">
                                                                <span
                                                                    style="display:none" id="biller_bill_fetch" class="input-group-btn browse-plan  biller_bill_fetch"><a class="btn btn-default disabled" id="btn_bbfetch" role="button" tabindex="-1" href="javascript:void(0);">Bill fetch</a></span>
                                                            </div>
                                                            <div class="help-block"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div id="land-line-recharge-ca-number" class="col-xs-12 col-sm-6 col-md-6 col-lg-6 hide">
                                                    <div class="form-group">
                                                        <div class="field-landlinerecharge-ca_number">
                                                            <input type="text" id="landlinerecharge-ca_number" class="form-control integerOnly" name="LandLineRecharge[ca_number]" maxlength="10" placeholder="Enter CA No." autocomplete="off">
                                                            <div class="help-block"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>




                                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="ll_recharge_sub_container">
                                                    <button type="button" id="button-ll-recharge" class="btn btn-primary btn-block">Pay Now</button> </div>
                                                <div id="ll_recharge_conf_container" class="hide">
                                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 mar-bottom">
                                                        <button type="submit" id="button-ll-confirm-recharge" class="btn btn-primary btn-block">Confirm Now</button> </div>
                                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 text-left">
                                                        <a id="frm_btn_skip" href="javascript:void(0);" class="btn btn-edit-skip">Edit</a>
                                                    </div>
                                                </div>


                                            </div>
                                        </form>

                                        <script type="text/javascript">
                                            var fetchbill=["BSNL"];
                                        </script>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="dth">
                                        <div id="dth-rec-sub-loader" class="popup-loader hide">
                                            <img alt="" src="public/images/loader.png">
                                        </div>
                                        <form id="form-dth-recharge" action="" method="post">
                                            <input type="hidden" name="_csrf" value="">
                                            <div class="row electricity-overflow">
                                                
                                                <div class="clearfix"></div>
                                                <div class="space"></div>
                                                <div class="clearfix"></div>
                                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                                    <div class="form-group positionrelative">
                                                        <div class="field-dthrecharge-service_number required">
                                                            <input type="text" id="dthrecharge-service_number" class="form-control integerOnly checkCardNumber" name="DthRecharge[service_number]" maxlength="12" placeholder="Subscriber ID" data-number="subscriber ID." autocomplete="off">
                                                            <div
                                                                class="help-block"></div>
                                                    </div>
                                                </div>
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
                                                    </div>
                                                </div>
                                                <input id="service_circle" type="hidden" name="DthRecharge[hidden_circle]">
                                                <input id="service_operator" type="hidden" name="DthRecharge[hidden_operator]">
                                                <input id="service_operator_alias" type="hidden" name="DthRecharge[hidden_operator_alias]">
                                                <input type="hidden" value="1" name="DthRecharge[alreadyFav]">
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                                <div class="form-group">
                                                    <div class="field-dthrecharge-amount required">
                                                        <div class="input-group"><span class="input-group-addon rupee">₹</span><input type="text" id="dthrecharge-amount" class="form-control integerOnly nozero" name="DthRecharge[amount]" maxlength="5" placeholder="Enter Amount"></div>
                                                        <div
                                                            class="help-block"></div>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="clearfix"></div>



                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="dth_recharge_sub_container">
                                        <button type="button" id="button-dth-recharge" class="btn btn-primary btn-block">Recharge Now</button> </div>
                                    <div id="dth_recharge_conf_container" class="hide">
                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 mar-bottom">
                                            <button type="submit" id="button-dth-confirm-recharge" class="btn btn-primary btn-block">Confirm Now</button> </div>
                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 text-left">
                                            <a id="frm_btn_skip" href="javascript:void(0);" class="btn btn-edit-skip">Edit</a>
                                        </div>
                                    </div>


                                </div>
                                </form>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="datacard">
                                <div id="dc-rec-sub-loader" class="popup-loader hide">
                                    <img alt="" src="public/images/loader.png">
                                </div>
                                <form id="form-data-card-recharge" action="" method="post">
                                    <input type="hidden" name="_csrf" value="">

                                    <div class="row electricity-overflow">
                                        <div class="col-xs-12 col-sm-7 col-md-6 col-lg-6">
                                            <div class="radio">
                                                <input id="mobprepaidd" type="radio" name="DataCardRecharge[service]" value="prepaid" checked>
                                                <label for="mobprepaidd">Prepaid</label>
                                                <input id="monbpostpaidd" type="radio" name="DataCardRecharge[service]" value="postpaid">
                                                <label for="monbpostpaidd">Postpaid</label>
                                            </div>
                                        </div>
                                       
                                        <div class="clearfix"></div>
                                        <div class="space"></div>
                                        <div class="clearfix"></div>
                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <div class="form-group field-datacardrecharge-service_number required">
                                                    <div class="input-group"><span class="input-group-addon">+91</span><input type="text" id="datacardrecharge-service_number" class="form-control integerOnly nozero checkNumber" name="DataCardRecharge[service_number]" maxlength="10"
                                                            placeholder="Datacard No" data-number="datacard no." autocomplete="off"></div>
                                                    <div class="help-block"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <div class="field-datacardrecharge-operator required">

                                                    <select id="datacardrecharge-operator" class="form-control" name="DataCardRecharge[operator]">
                                                    <option value="">Select Operator</option>
                                                    <option value="MTSNET">MTS Blaze</option>
                                                    <option value="RELNET">Reliance Net Connect</option>
                                                    <option value="PHOTON">Tata Photon</option>
                                                    </select>

                                                    <div class="help-block"></div>
                                                </div>
                                            </div>
                                            <input id="service_circle" type="hidden" name="DataCardRecharge[hidden_circle]">
                                            <input id="service_operator" type="hidden" name="DataCardRecharge[hidden_operator]">
                                            <input id="service_operator_alias" type="hidden" name="DataCardRecharge[hidden_operator_alias]">
                                            <input type="hidden" value="1" name="DataCardRecharge[alreadyFav]">
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 hide">
                                            <div class="form-group">
                                                <div class="field-datacardrecharge-circle required">

                                                    <select id="datacardrecharge-circle" class="form-control" name="DataCardRecharge[circle]">
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
                                                        </select>

                                                    <div class="help-block"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <div class="field-datacardrecharge-amount required">
                                                    <div class="input-group"><span class="input-group-addon rupee">₹</span><input type="text" id="datacardrecharge-amount" class="form-control integerOnly nozero" name="DataCardRecharge[amount]" maxlength="5" placeholder="Enter Amount"></div>
                                                    <div
                                                        class="help-block"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="clearfix"></div>



                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="dc_recharge_sub_container">
                                        <button type="button" id="button-dc-recharge" class="btn btn-primary btn-block">Recharge Now</button> </div>
                                    <div id="dc_recharge_conf_container" class="hide">
                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 mar-bottom">
                                            <button type="submit" id="button-dc-confirm-recharge" class="btn btn-primary btn-block">Confirm Now</button> </div>
                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 text-left">
                                            <a id="frm_btn_skip" href="javascript:void(0);" class="btn btn-edit-skip">Edit</a>
                                        </div>
                                    </div>

                            </div>
                            </form>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="gas">
                            <div class="row">
                               
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div id="elc-gas-sub-loader" class="popup-loader hide">
                                        <img alt="" src="public/images/loader.png">
                                    </div>
                                    <form id="form-pay-gas-bill" action="" method="post">
                                        <input type="hidden" name="_csrf" value="">

                                        <div class="row electricity-overflow gas-overflow">

                                            <div class="clearfix"></div>
                                            <div class="space"></div>
                                            <div class="clearfix"></div>

                                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                                <div class="form-group">
                                                    <div class="field-gasbillpayment-operator required">

                                                        <select id="gasbillpayment-operator" class="form-control" name="GasBillPayment[operator]">
                                                        <option value="">Select Operator</option>
                                                        <option value="2020">BPCL</option>
                                                        <option value="2021">HPCL</option>
                                                        <option value="1993">INDANE GAS</option>
                                                        <option value="1987">SANWARIYA GAS LTD (SGL)</option>
                                                        </select>

                                                        <div class="help-block"></div>
                                                    </div> <input type="hidden" name="GasBillPayment[hide_gas_operator]" id="hide_gas_operator">
                                                    <input type="hidden" value="1" name="GasBillPayment[alreadyFav]">
                                                </div>

                                            </div>

                                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 " id="gas_amount">
                                                <div class="form-group operator-name">
                                                    <div class="field-gasbillpayment-amount required">
                                                        <div class="input-group"><span class="input-group-addon rupee">₹</span><input type="text" id="gasbillpayment-amount" class="form-control nozero rsval" name="GasBillPayment[amount]" maxlength="7" placeholder="Enter Amount">
                                                            <span
                                                                class="input-group-btn browse-plan biller_bill_fetch"><a class="btn btn-default disabled" role="button" tabindex="-1" href="javascript:void(0);">Bill fetch</a></span>
                                                        </div>
                                                        <div class="help-block"></div>
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="clearfix"></div>
                                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="gas_recharge_sub_container">
                                                <button type="button" id="button-pay-gas-bill" class="btn btn-primary btn-block">Pay Now</button> </div>
                                            <div id="gas_recharge_conf_container" class="hide">
                                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 mar-bottom">
                                                    <button type="submit" id="button-gas-confirm-recharge" class="btn btn-primary btn-block">Confirm Now</button> </div>
                                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 text-left">
                                                    <a id="frm_btn_skip" href="javascript:void(0);" class="btn btn-edit-skip">Edit</a>
                                                </div>
                                            </div>

                                        </div>
                                        
                                    </form>
                                </div>

                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="electricity">
                            <div class="row">
                               
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div id="elc-rec-sub-loader" class="popup-loader hide">
                                        <img alt="" src="public/images/loader.png">
                                    </div>
                                    <form id="form-pay-electricity-bill" action="" method="post">
                                        <input type="hidden" name="_csrf" value="">

                                        <div class="row electricity-overflow broadband-overflow">

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
                                                    </div> <input type="hidden" name="ElectricityBillPayment[hide_ele_operator]" id="hide_ele_operator">
                                                    <input type="hidden" value="1" name="ElectricityBillPayment[alreadyFav]">
                                                </div>

                                            </div>

                                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 " id="electricity_amount">
                                                <div class="form-group operator-name">
                                                    <div class="field-electricitybillpayment-amount required">
                                                        <div class="input-group"><span class="input-group-addon rupee">₹</span><input type="text" id="electricitybillpayment-amount" class="form-control nozero rsval" name="ElectricityBillPayment[amount]" maxlength="7" placeholder="Enter Amount">
                                                            <span
                                                                class="input-group-btn browse-plan biller_bill_fetch"><a class="btn btn-default disabled" role="button" tabindex="-1" href="javascript:void(0);">Bill fetch</a></span>
                                                        </div>
                                                        <div class="help-block"></div>
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="clearfix"></div>
                                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="el_recharge_sub_container">
                                                <button type="button" id="button-pay-electricity-bill" class="btn btn-primary btn-block">Pay Now</button> </div>
                                            <div id="el_recharge_conf_container" class="hide">
                                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 mar-bottom">
                                                    <button type="submit" id="button-el-confirm-recharge" class="btn btn-primary btn-block">Confirm Now</button> </div>
                                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 text-left">
                                                    <a id="frm_btn_skip" href="javascript:void(0);" class="btn btn-edit-skip">Edit</a>
                                                </div>
                                            </div>

                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="insurance">
                            <div class="alert alert-danger">Service not available.</div>
                        </div>

                        <div role="tabpanel" class="tab-pane fade in" id="broadband">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div id="elc-rec-sub-loader" class="popup-loader hide">
                                        <img alt="" src="public/images/loader.png">
                                    </div>
                                    <form id="form-pay-bb-bill" action="" method="post">
                                        <input type="hidden" name="_csrf" value="">

                                        <div class="row">
                                            <div class="col-xs-12 col-sm-7 col-md-6 col-lg-6">
                                                <div class="radio">
                                                    <input class="bb_recharge_mode" id="bb_prepaid" type="radio" name="BroadbandBillPayment[service]" value="prepaid" checked>
                                                    <label for="bb_prepaid">Topup</label>
                                                    <input class="bb_recharge_mode" id="bb_postpaid" type="radio" name="BroadbandBillPayment[service]" value="postpaid">
                                                    <label for="bb_postpaid">Recharge</label>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="row electricity-overflow broadband-overflow">
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
                                                    </div> <input type="hidden" name="BroadbandBillPayment[hidden_bb_operator]" id="hidden_bb_operator">
                                                    <input type="hidden" value="1" name="BroadbandBillPayment[alreadyFav]">
                                                </div>
                                            </div>

                                            <div class="col-xs-12 col-sm-6 col-md-8 col-lg-8 " id="broadband_amount">
                                                <div class="form-group operator-name">
                                                    <div class="field-broadbandbillpayment-amount required">
                                                        <div class="input-group"><span class="input-group-addon rupee">Rs</span><input type="text" id="broadbandbillpayment-amount" class="form-control nozero rsval" name="BroadbandBillPayment[amount]" maxlength="7" placeholder="Enter Amount">
                                                            <span
                                                                class="input-group-btn browse-plan biller_bill_fetch"><a class="btn btn-default disabled" role="button" tabindex="-1" href="javascript:void(0);">Bill fetch</a></span>
                                                        </div>
                                                        <div class="help-block"></div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="clearfix"></div>
                                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="bb_recharge_sub_container">
                                                <button type="button" id="button-pay-bb-bill" class="btn btn-primary btn-block">Pay Now</button> </div>
                                            <div id="bb_recharge_conf_container" class="hide">
                                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 mar-bottom">
                                                    <button type="submit" id="button-bb-confirm-recharge" class="btn btn-primary btn-block">Confirm Now</button> </div>
                                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 text-left">
                                                    <a id="frm_btn_skip" href="javascript:void(0);" class="btn btn-edit-skip">Edit</a>
                                                </div>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>

                        <div id="testimonial-hr"></div>




                    </div>
            </div>

        </div>
        <div class="card__back">
            <div class="row">
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
            </div>
        </div>
    </div>
    </section>
   <!--  <section class="white shadow hover" id="offer_banner">
        <div class="loader"><img src="public/images/loader.png" alt=""></div>
    </section> -->
    </div>
    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 " style="min-height: 395px;">
        <span id="banner-cache" data-banner-cache="1"></span>
        <section id="promotion_banner" class="white shadow pad-null">
           
              <div id="myCarousel" class="carousel slide" data-ride="carousel">
                
                <div class="carousel-inner">
                  <div class="item active">
                    <img src="public/images/11.jpg" alt="Itcare" >
                  </div>

                  <div class="item">
                    <img src="public/images/22.jpg" alt="Itcare" >
                  </div>
                
                  <div class="item">
                    <img src="public/images/33.jpg" alt="New Itcare" >
                  </div>
                </div>
              </div>
        </section>
        <section id="promotion_banner" class="white shadow pad-null">
           
              <div id="myCarousel" class="carousel slide" data-ride="carousel">
                
                <div class="carousel-inner">
                  <div class="item active">
                    <img src="public/images/44.jpg" alt="Itcare" >
                  </div>

                  <div class="item">
                    <img src="public/images/55.jpg" alt="Itcare" >
                  </div>
                
                  <div class="item">
                    <img src="public/images/66.jpg" alt="New Itcare" >
                  </div>
                  <div class="item">
                    <img src="public/images/77.jpg" alt="New Itcare" >
                  </div>
                </div>
              </div>
        </section>
    </div>


   
     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <span id="merchant-cache" data-merchant-cache="1"></span>
        <section class="white shadow">
        <div class="heading">
            <h2 class="pull-left">Book on Itcare</h2>
           <div class="clearfix"></div>
            <hr>
               <div class="row" id="mData" data-mData="1">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-pad-right">
                    <div  class=" pull-left">
                        <div class="col-xs-1 col-sm-1 book-icon">
                            <a target="_blank" href="#" target="_blank">
                              <img src="public/iconitcare/water.png" title="" class="itcare-img-responsive"></a>
                              <p class="BookOnItcare">Water</p>
                        </div>
                        <div class="col-xs-1 col-sm-1 book-icon">
                            <a target="_blank" href="#" target="_blank">
                              <img src="public/iconitcare/mobile.png" title="" class="itcare-img-responsive"></a>
                              <p class="BookOnItcare">Mobile</p>
                        </div>
                        <div class="col-xs-1 col-sm-1 book-icon">
                            <a target="_blank" href="#" target="_blank">
                              <img src="public/iconitcare/car.png" title="" class="itcare-img-responsive"></a>
                              <p class="BookOnItcare">Car</p>
                        </div>
                        <div class="col-xs-1 col-sm-1 book-icon">
                            <a target="_blank" href="#" target="_blank">
                              <img src="public/iconitcare/DTH.png" title="" class="itcare-img-responsive"></a>
                              <p class="BookOnItcare">DTH</p>
                        </div>
                        <div class="col-xs-1 col-sm-1 book-icon">
                            <a target="_blank" href="#" target="_blank">
                              <img src="public/iconitcare/invoice.png" title="" class="itcare-img-responsive"></a>
                              <p class="BookOnItcare">Payment</p>
                        </div>
                        <div class="col-xs-1 col-sm-1 book-icon">
                            <a target="_blank" href="#" target="_blank">
                              <img src="public/iconitcare/caravan.png" title="" class="itcare-img-responsive"></a>
                              <p class="BookOnItcare">Tour</p>
                        </div>
                        <div class="col-xs-1 col-sm-1 book-icon">
                            <a target="_blank" href="#" target="_blank">
                              <img src="public/iconitcare/train.png" title="" class="itcare-img-responsive"></a>
                              <p class="BookOnItcare">Train</p>
                        </div>
                        <div class="col-xs-1 col-sm-1 book-icon">
                            <a target="_blank" href="#" target="_blank">
                              <img src="public/iconitcare/motorbike.png" title="" class="itcare-img-responsive"></a>
                              <p class="BookOnItcare">Bike</p>
                        </div>
                         <div class="col-xs-1 col-sm-1 book-icon">
                            <a target="_blank" href="#" target="_blank">
                              <img src="public/iconitcare/gas.png" title="" class="itcare-img-responsive"></a>
                              <p class="BookOnItcare">Gas Bill</p>
                        </div>
                        <div class="col-xs-1 col-sm-1 book-icon">
                            <a target="_blank" href="#" target="_blank">
                              <img src="public/iconitcare/light-bul.png" title="" class="itcare-img-responsive"></a>
                              <p class="BookOnItcare">Electricity</p>
                        </div>
                        <div class="col-xs-1 col-sm-1 book-icon">
                            <a target="_blank" href="#" target="_blank">
                              <img src="public/iconitcare/tickets.png" title="" class="itcare-img-responsive"></a>
                              <p class="BookOnItcare">Flights</p>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
       </section>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <span id="merchant-cache" data-merchant-cache="1"></span>
        <section class="white shadow">
        <div class="heading">
            <h2 class="pull-left">ItCare Mall</h2>
           <div class="clearfix"></div>
            <hr>
            <div class="row">
              <div class="col-md-7 text-center">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="item active">
                      <img src="public/images/shopping1.jpg" alt="Los Angeles" style="width: 100%">
                    </div>

                    <div class="item">
                      <img src="public/images/shopping2.jpg" alt="Chicago" style="width: 100%">
                    </div>
                     <div class="item">
                      <img src="public/images/shopping3.jpg" alt="Chicago" style="width: 100%">
                    </div>

                    <div class="item">
                      <img src="public/images/shopping4.jpg" alt="New York" style="width: 100%">
                    </div>
                    <div class="item">
                      <img src="public/images/shopping5.jpg" alt="New York" style="width: 100%">
                    </div>
                  </div>

                </div>
              </div>
         
              <div class="col-md-5">
              <div class="row">
                <div class="col-md-6 thumbnailProduct">
                  <div class="thumbnail">
                  <img src="public/images/product1.jpg" alt="...">
                  <div class="caption">
                    
                    <p>Mobiles</p>
                    <a href="">Add to card</a>
                  </div>
                </div>
                </div>
              
                <div class="col-md-6 thumbnailProduct">
                    <div class="thumbnail">
                      <img src="public/images/product2.jpg" alt="...">
                      <div class="caption">
                        
                        <p>Electronic</p>
                        <a href="">Add to card</a>
                      </div>
                    </div>
                </div>
                <div class="col-md-6 thumbnailProduct">
                    <div class="thumbnail">
                  <img src="public/images/product3.jpg" alt="...">
                  <div class="caption">
                    
                    <p>T-Sharts</p>
                    <a href="">Add to card</a>
                  </div>
                </div>
                </div>
                <div class="col-md-6 thumbnailProduct">
                    <div class="thumbnail">
                  <img src="public/images/product4.jpg" alt="...">
                  <div class="caption">
                   <p>Grocery</p>
                    <a href="">Add to card</a>
                  </div>
                </div>
                </div>
                
                <div class="col-md-6 thumbnailProduct">
                  <div class="thumbnail">
                  <img src="public/images/product5.jpg" alt="...">
                  <div class="caption">
                    
                    <p>Stationery</p>
                    <a href="">Add to card</a>
                  </div>
                </div>
                </div>
              
                <div class="col-md-6 thumbnailProduct">
                    <div class="thumbnail">
                      <img src="public/images/product6.jpg" alt="...">
                      <div class="caption">
                        
                        <p>World Store</p>
                        <a href="">Add to card</a>
                      </div>
                    </div>
                </div>
               
                </div>
              </div>
            </div>
               
        </div>
         </section>
    </div>



    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <section class="white shadow">
            <div class="heading">
                <h3 class="pull-left">Why IT-Care Is Best</h3>
                <h3 class="pull-right">Leatest news</h3>
                <div class="clearfix"></div>
                <hr>
            </div>
            <div class="use-oxigen">
                <div class="row">
                  <div class="col-md-6 col-lg-6">
                    <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3"> <span class="icon-bg"><i class="sprite certify"></i></span>
                        <p class="text-center">Approved by RBI</p>
                    </div>
                    <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3"> <span class="icon-bg"><i class="sprite robust"></i></span>
                        <p class="text-center">Safe &amp; Secure</p>
                    </div>
                    <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3"> <span class="icon-bg"><i class="sprite self-secure"></i></span>
                        <p class="text-center">Trust</p>
                    </div>
                    <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3"> <span class="icon-bg"><i class="sprite care"></i></span>
                        <p class="text-center">24X7 Support</p>
                    </div>
                  </div>
                  <div class=" col-md-6 col-lg-6">
                    <h5 class="pull-right">
                        <marquee class="pull-right" direction="up" style="height: 72px; text-align: right;"> Welcome to Itcare Infotech.
                            <br>
                        Online Bill Payments &amp; Recharge offers, Mobile Payments | IT-Care Wallet</marquee>
                    </h5>

                  </div>
                </div>
            </div>
        </section>
        
    </div>
        <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
            <section class="white shadow customer-speak">

                <div class="heading">
                    <h4><i></i>Client Feedback</h4>
                    <hr>
                    <div class="slick-initialized slick-slider slick-vertical">
                       <div class=" client-feedback">
                          <img src="public/images/team1.jpg" alt="Avatar" style="width:90px">
                          <p><span>Parteek Varma</span> 24-4-2018</p>
                          <p>No one is better than  It-care</p>
                        </div> 
                         <div class=" client-feedback">
                          <img src="public/images/team.jpg" alt="Avatar" style="width:90px">
                          <p><span>Anshuman</span> 12-6-2018</p>
                          <p>No one is better than It-care</p>
                        </div> 
                         <div class=" client-feedback">
                          <img src="public/images/team4.jpg" alt="Avatar" style="width:90px">
                          <p><span>Kashif Kazmi</span> 20-7-2018</p>
                          <p>No one is better than  It-care</p>
                        </div>                                                      
                    </div>
    
                </div>
            </section>
        </div>
        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
            <section class="white shadow map-white">
                 <div class="heading">
                    <h4><i></i>Gift Cards</h4>
                    <hr>
                </div>
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="item active">
                      <img src="public/images/gift1.jpg" alt="Los Angeles" style="width: 100%">
                    </div>

                    <div class="item">
                      <img src="public/images/gift2.jpg" alt="Chicago" style="width: 100%">
                    </div>
                     <div class="item">
                      <img src="public/images/gift3.jpg" alt="Chicago" style="width: 100%">
                    </div>

                    <div class="item">
                      <img src="public/images/gift4.png" alt="New York" style="width: 100%">
                    </div>
                  </div>

                </div>
               
            </section>
        </div>
        

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <span id="merchant-cache" data-merchant-cache="1"></span>
        <section class="white shadow">
            <div class="row" id="mData" data-mData="1">
                <div class="col-xs-7 col-sm-10 col-md-10 col-lg-10 no-pad-right">
                    <div id="merchant-slider" class="merchant-slider pull-left">
                        <div class="col-xs-12 col-sm-12">
                            <a target="_blank" href="%23login.html" target="_blank">
                              <img src="merchants/images/ccr-small.png" title="" class="img-responsive"></a>
                        </div>
                        <div class="col-xs-12 col-sm-12">
                            <a target="_blank" href="%23login.html" target="_blank">
                              <img src="merchants/images/cilory-small.png" title="" class="img-responsive"></a>
                        </div>
                        <div class="col-xs-12 col-sm-12">
                            <a target="_blank" href="%23login.html" target="_blank">
                              <img src="merchants/images/creditnation-small.png" title="" class="img-responsive"></a>
                        </div>
                        <div class="col-xs-12 col-sm-12">
                            <a target="_blank" href="%23login.html" target="_blank">
                              <img src="merchants/images/damroobox-small.png" title="" class="img-responsive"></a>
                        </div>
                        <div class="col-xs-12 col-sm-12">
                            <a target="_blank" href="%23login.html" target="_blank">
                              <img src="merchants/images/dish-tv-small.png" title="" class="img-responsive"></a>
                        </div>
                        <div class="col-xs-12 col-sm-12">
                            <a target="_blank" href="%23login.html" target="_blank">
                              <img src="merchants/images/dream11-small.png" title="" class="img-responsive"></a>
                        </div>
                        <div class="col-xs-12 col-sm-12">
                            <a target="_blank" href="%23login.html" target="_blank">
                              <img src="merchants/images/droom-small.png" title="" class="img-responsive"></a>
                        </div>
                        <div class="col-xs-12 col-sm-12">
                            <a target="_blank" href="%23login.html" target="_blank">
                              <img src="merchants/images/easycab-small.png" title="" class="img-responsive"></a>
                        </div>
                        <div class="col-xs-12 col-sm-12">
                            <a target="_blank" href="%23login.html" target="_blank">
                              <img src="merchants/images/ebay-small.png" title="" class="img-responsive"></a>
                        </div>
                        <div class="col-xs-12 col-sm-12">
                            <a target="_blank" href="%23login.html" target="_blank">
                              <img src="merchants/images/GX-small.png" title="" class="img-responsive"></a>
                        </div>
                        <div class="col-xs-12 col-sm-12">
                            <a target="_blank" href="%23login.html" target="_blank">
                              <img src="merchants/images/goibibo-small.png" title="" class="img-responsive"></a>
                        </div>
                        <div class="col-xs-12 col-sm-12">
                            <a target="_blank" href="%23login.html" target="_blank">
                              <img src="merchants/images/india-times-small.png" title="" class="img-responsive"></a>
                        </div>
                        <div class="col-xs-12 col-sm-12">
                            <a target="_blank" href="%23login.html" target="_blank">
                              <img src="merchants/images/jabong-small.png" title="" class="img-responsive"></a>
                        </div>
                        <div class="col-xs-12 col-sm-12">
                            <a target="_blank" href="%23login.html" target="_blank">
                              <img src="merchants/images/justdial-small.png" title="" class="img-responsive"></a>
                        </div>
                        <div class="col-xs-12 col-sm-12">
                            <a target="_blank" href="%23login.html" target="_blank">
                              <img src="merchants/images/kfc-small.png" title="" class="img-responsive"></a>
                        </div>
                       
                        <div class="col-xs-12 col-sm-12">
                            <a target="_blank" href="%23login.html" target="_blank">
                              <img src="merchants/images/shopclues-small.png" title="" class="img-responsive"></a>
                        </div>
                        <div class="col-xs-12 col-sm-12">
                            <a target="_blank" href="%23login.html" target="_blank">
                              <img src="merchants/images/srs-grocery-small.png" title="" class="img-responsive"></a>
                        </div>
                        <div class="col-xs-12 col-sm-12">
                            <a target="_blank" href="%23login.html" target="_blank">
                              <img src="merchants/images/trendybharat-small.png" title="" class="img-responsive"></a>
                        </div>
                        <div class="col-xs-12 col-sm-12">
                            <a target="_blank" href="%23login.html" target="_blank">
                              <img src="merchants/images/vuliv-small.png" title="" class="img-responsive"></a>
                        </div>
                        <div class="col-xs-12 col-sm-12">
                            <a target="_blank" href="%23login.html" target="_blank">
                              <img src="merchants/images/yatra-small.png" title="" class="img-responsive"></a>
                        </div>
                        
                        <div class="col-xs-12 col-sm-12">
                            <a target="_blank" href="%23login.html" target="_blank">
                              <img src="merchants/images/gingerhotel-small.png" title="" class="img-responsive"></a>
                        </div>
                        <div class="col-xs-12 col-sm-12">
                            <a target="_blank" href="%23login.html" target="_blank">
                              <img src="merchants/images/itraveller-small.png" title="" class="img-responsive"></a>
                        </div>
                        <div class="col-xs-12 col-sm-12">
                            <a target="_blank" href="%23login.html" target="_blank">
                              <img src="merchants/images/johrishop-small.png" title="" class="img-responsive"></a>
                        </div>
                        <div class="col-xs-12 col-sm-12">
                            <a target="_blank" href="%23login.html" target="_blank">
                              <img src="merchants/images/deobazar-small.png" title="" class="img-responsive"></a>
                        </div>
                        <div class="col-xs-12 col-sm-12">
                            <a target="_blank" href="%23login.html" target="_blank">
                              <img src="merchants/images/ajio-small.png" title="" class="img-responsive"></a>
                        </div>
                        <div class="col-xs-12 col-sm-12">
                            <a target="_blank" href="%23login.html" target="_blank">
                              <img src="merchants/images/titan-small.png" title="" class="img-responsive"></a>
                        </div>
                        <div class="col-xs-12 col-sm-12">
                            <a target="_blank" href="%23login.html" target="_blank">
                              <img src="merchants/images/voylla-small.png" title="" class="img-responsive"></a>
                        </div>
                        <div class="col-xs-12 col-sm-12">
                            <a target="_blank" href="%23login.html" target="_blank">
                              <img src="merchants/images/goibibo-small.png" title="" class="img-responsive"></a>
                        </div>
                        <div class="col-xs-12 col-sm-12">
                            <a target="_blank" href="merchant/online/highway%20saathi.html" target="_blank">
                              <img src="merchants/images/highwaysaathi-small.png" title="" class="img-responsive"></a>
                        </div>
                    </div>
                </div>

                <div class="col-xs-5 col-sm-2 col-md-2 col-lg-2 no-pad-left more-merchants">
                    <div class="pull-right"><a href="merchant.html" class="pull-right"><i class="more-merchants-icon sprite pull-right"></i>View More</a></div>
                </div>

            </div>
        </section>
    </div>
    </div>
    </div>
    



    <script type="text/javascript">
    window.__lc = window.__lc || {};
    window.__lc.license = 9885535;
    (function() {
    var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
    lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
    })();
    </script>

   <?php
include_once ('include/footer.php');
?>