
/**
 * SendMoney page js handler
 *
 * @author Shashi Ranjan Mishra <shashi.mishra@myoxigen.com>
 *
 */
;
(function(OXIGENWALLET, $, undefined) {
    OXIGENWALLET.beneficiary = (function() {
        function _beneficiary() {

       
        
        /**
         * @author Shashi Ranjan Mishra <shashi.mishra@myoxigen.com>
         * 
         * @param {type} obj
         * @returns {undefined}
         */
        function setBankName(obj)
        {
            selectedBankIfsc = $('#beneficiaryform-beneficiary_bank_name').val();
            selectedBankName = $('#beneficiaryform-beneficiary_bank_name :selected').text();
            if (selectedBankIfsc) {
                $('#beneficiaryform-beneficiary_ifsc_code').val(selectedBankIfsc);
                //$('#selected_bank_ifsc').val(selectedBankIfsc);
                $('#beneficiaryform-beneficiary_ifsc_code').on('keypress, keydown', function(event) {
                   if ((event.which != 37 && (event.which != 39))
                        && ((this.selectionStart < 4)
                        || ((this.selectionStart == 4) && (event.which == 8)))) {
                        return false;
                    }
                });
            } else {
                $('#beneficiaryform-beneficiary_ifsc_code').val('');
                //$('#selected_bank_ifsc').val('');
            }            
            if (selectedBankName) {
                $('#beneficiaryform-hidden_bank_name').val(selectedBankName);
            } else {
                $('#beneficiaryform-hidden_bank_name').val('');
            }
        }
        function validateBeneficiaryInfo()
        {
            var errorCnt = 0 ;
            $('#form-add-beneficiary :input[type=text],select').each(function(index,val){
                if($(this).val() == '' && $(this).attr('id') != 'beneficiaryform-beneficiary_nick_name') {
                    errorCnt++;
                }
            });
            if((errorCnt == 0) && ($('#form-add-beneficiary').find('.has-error').length == 0)){         
                $('#beneficiary-submit-loader').removeClass('hide');
            }
        }
        
        function validateBeneficiaryDetails() {
                var _mmid_amount = ($('#mmid-beneficiaryform-amount').val()),
                _mmid_beneficary_name = $('#bene_mmid_beneficiary_name').val(),
                _mmid_beneficiary_mdn = $('#beneficiaryform-mmid-mdn').val(),
                _mmid_beneficiary = $('#beneficiaryform_mmid_no').val();
                _error_count = 0;                
                if (_mmid_amount == '') {
                    _error_count++;
                    $('#mmid-beneficiaryform-amount').parent('div').parent('div').addClass('has-error');
                    $('#mmid-beneficiaryform-amount').parent('div').parent('div').find('.help-block').html('Amount cannot be blank.');
                }
                if (_mmid_beneficary_name == '') {
                    _error_count++;
                    $('#bene_mmid_beneficiary_name').parent('div').parent('div').addClass('has-error');
                    $('#bene_mmid_beneficiary_name').parent('div').parent('div').find('.help-block').html('Please enter beneficiary name.');
                }
                if (_mmid_beneficiary_mdn == '') {
                    _error_count++;
                    $('#beneficiaryform-mmid-mdn').parent('div').parent('div').addClass('has-error');
                    $('#beneficiaryform-mmid-mdn').parent('div').parent('div').find('.help-block').html('Please enter beneficiary mdn.');
                }
                else if ( _mmid_beneficiary_mdn.length != 10) {
                    _error_count++;
                    $('#beneficiaryform-mmid-mdn').parent('div').parent('div').addClass('has-error');
                }                
                if (_mmid_beneficiary == '') {
                    _error_count++;
                    $('#beneficiaryform_mmid_no').parent('div').addClass('has-error');
                    $('#beneficiaryform_mmid_no').parent('div').parent('div').find('.help-block').html('Please enter mmid number.');
                }
                if (_error_count > 0) {
                    return false;
                } else {
                    $('#form-beneficiary-mmid').submit();
                }
                
        }

        function manageBlurEvent(obj) {
            _elem   = obj.data.elem;
            _elemId = $('#' + _elem);
            if (_elem == 'beneficiaryform_mmid_no') {
                if (_elemId.val() == '' || _elemId.val().length != 7 || parseInt(_elemId.val()) == 0) {
                    $(_elemId).parent('div').parent('div').removeClass('has-success').addClass('has-error');
                    $(_elemId).parent('div').parent('div').find('.help-block').html('Please enter valid mmid number.');
                } else {
                    $(_elemId).parent('div').removeClass('has-error');
                    $(_elemId).parent('div').parent('div').removeClass('has-error').addClass('has-success');
                }
            } else if (_elem == 'beneficiaryform-mmid-mdn') {
                _mb = _elemId.val();
                if (_mb == '' || _mb.length != 10 ) {
                    $(_elemId).parent('div').parent('div').removeClass('has-success').addClass('has-error');
                    $(_elemId).parent('div').parent('div').find('.help-block').html('Please enter valid mdn.');
                } else {
                    $(_elemId).parent('div').parent('div').removeClass('has-error');
                    $(_elemId).parent('div').removeClass('has-error').addClass('has-success');
                    $(_elemId).parent('div').parent('div').find('.help-block').empty(); 
                }
            } else {
                if (_elemId.val() == '') {
                    $(_elemId).parent('div').parent('div').removeClass('has-success').addClass('has-error');
                    $(_elemId).parent('div').parent('div').find('.help-block').html(obj.data.error);
                }else if (_elemId.val().length < 2 && _elem == 'mmid-beneficiaryform-amount') {
                    $(_elemId).parent('div').parent('div').removeClass('has-success').addClass('has-error');
                    $(_elemId).parent('div').parent('div').find('.help-block').html('Amount should contain at least 2 characters.');
                } else {
                    $(_elemId).parent('div').parent('div').removeClass('has-error').addClass('has-success');
                    $(_elemId).parent('div').parent('div').find('.help-block').empty();
                }
            }
            
        }
        
        /**
          * @author Shashi Ranjan Mishra <shashi.mishra@myoxigen.com>
          * @returns {undefined}
          */
         function bindEvents() {
             var $integerOnly = $('.integerOnly');
             
             $('#beneficiaryform-beneficiary_bank_name').on('change',{default : false}, setBankName);
             $('#form-add-beneficiary').on('submit', {default: false}, validateBeneficiaryInfo);
             $('#beneficiary-mmid-submit-button').on('click', validateBeneficiaryDetails);
             $('#mmid-beneficiaryform-amount').on('blur', 
                {'elem' : 'mmid-beneficiaryform-amount', 'error' : "Amount cannot be blank."},
                 manageBlurEvent);
             $('#bene_mmid_beneficiary_name').on('blur', 
                {'elem' : 'bene_mmid_beneficiary_name', 'error' : 'Please enter beneficiary mdn.'}, manageBlurEvent);
             $('#beneficiaryform-mmid-mdn').on('blur', 
                {'elem' : 'beneficiaryform-mmid-mdn', 'error': 'Please enter beneficiary mdn.'}, manageBlurEvent);
             $('#beneficiaryform_mmid_no').on('blur', 
                {'elem' : 'beneficiaryform_mmid_no', 'error' : 'Please enter mmid number'}, manageBlurEvent);
             

         }
            /*!
             * Main initilize function
             */
            this.init = function() {
                bindEvents();
            };

        }

        return new _beneficiary();
    })();



    $(document).ready(function() {
        OXIGENWALLET.beneficiary.init();
    });

})(window.OXIGENWALLET = window.OXIGENWALLET || {}, jQuery);
