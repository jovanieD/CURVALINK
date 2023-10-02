@extends('layouts.student')

@section('student')
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <div class="content-wrapper">
                {{-- <script src="https://cdn02.jotfor.ms/static/prototype.forms.js?3.3.45945" type="text/javascript"></script> --}}
                {{-- <script src="https://cdn03.jotfor.ms/static/jotform.forms.js?3.3.45945" type="text/javascript"></script> --}}
                <script src="https://cdn01.jotfor.ms/js/vendor/jquery-1.8.0.min.js?v=3.3.45945" type="text/javascript"></script>
                <script defer src="https://cdn02.jotfor.ms/js/vendor/maskedinput.min.js?v=3.3.45945" type="text/javascript"></script>
                <script defer src="https://cdn03.jotfor.ms/js/vendor/jquery.maskedinput.min.js?v=3.3.45945" type="text/javascript">
                </script>
                <script defer src="https://cdn01.jotfor.ms//js/punycode-1.4.1.min.js"></script>
                <script src="https://cdn02.jotfor.ms/js/payments/validategateways.js?v=3.3.45945" type="text/javascript"></script>
                <script src="https://cdn01.jotfor.ms/s/umd/004f5dc805a/for-form-branding-footer.js?v=3.3.45945" type="text/javascript"
                    defer></script>
                <style type="text/css">
                    @media print {
                        .form-section {
                            display: inline !important
                        }

                        .form-pagebreak {
                            display: none !important
                        }

                        .form-section-closed {
                            height: auto !important
                        }

                        .page-section {
                            position: initial !important
                        }
                    }
                </style>
                <link type="text/css" rel="stylesheet"
                    href="https://cdn01.jotfor.ms/themes/CSS/5e6b428acc8c4e222d1beb91.css?v=3.3.45945&themeRevisionID=5eb3b4ae85bd2e1e2966db96" />
                <link type="text/css" rel="stylesheet"
                    href="https://cdn02.jotfor.ms/css/styles/payment/payment_styles.css?3.3.45945" />
                <link type="text/css" rel="stylesheet"
                    href="https://cdn03.jotfor.ms/css/styles/payment/payment_feature.css?3.3.45945" />
                <link type="text/css" rel="stylesheet"
                    href="https://cdn01.jotfor.ms/stylebuilder/donationBox.css?v=3.3.45945">
                <style type="text/css" id="form-designer-style">
                    /* Injected CSS Code */
                    /*PREFERENCES STYLE*/
                    .form-all {
                        font-family: Inter, sans-serif;
                    }

                    .form-label.form-label-auto {

                        display: block;
                        float: none;
                        text-align: left;
                        width: 100%;

                    }

                    .form-line {
                        margin-top: 12px 36px 12px 36px px;
                        margin-bottom: 12px 36px 12px 36px px;
                        padding-top: 0;
                        padding-bottom: 0;
                    }

                    .form-all {
                        max-width: 752px;
                        width: 100%;
                    }

                    .form-label.form-label-left,
                    .form-label.form-label-right,
                    .form-label.form-label-left.form-label-auto,
                    .form-label.form-label-right.form-label-auto {
                        width: 230px;
                    }

                    .form-all {
                        font-size: 16px
                    }

                    .supernova .form-all,
                    .form-all {
                        background-color: #fff;
                    }

                    .form-all {
                        color: #2C3345;
                    }

                    .form-header-group .form-header {
                        color: #2C3345;
                    }

                    .form-header-group .form-subHeader {
                        color: #2C3345;
                    }

                    .form-label-top,
                    .form-label-left,
                    .form-label-right,
                    .form-html,
                    .form-checkbox-item label,
                    .form-radio-item label,
                    span.FITB .qb-checkbox-label,
                    span.FITB .qb-radiobox-label,
                    span.FITB .form-radio label,
                    span.FITB .form-checkbox label,
                    [data-blotid][data-type=checkbox] [data-labelid],
                    [data-blotid][data-type=radiobox] [data-labelid],
                    span.FITB-inptCont[data-type=checkbox] label,
                    span.FITB-inptCont[data-type=radiobox] label {
                        color: #2C3345;
                    }

                    .form-sub-label {
                        color: #464d5f;
                    }

                    .supernova {
                        background-color: #f3f3fe;
                    }

                    .supernova body {
                        background: transparent;
                    }

                    .form-textbox,
                    .form-textarea,
                    .form-dropdown,
                    .form-radio-other-input,
                    .form-checkbox-other-input,
                    .form-captcha input,
                    .form-spinner input {
                        background-color: #FFFFFF;
                    }


                    .supernova {
                        background-repeat: no-repeat;
                        background-size: cover;
                        background-attachment: fixed;
                        background-position: center top;
                    }

                    .supernova,
                    #stage {
                        background-image: none;
                    }

                    .form-all {
                        background-image: none;
                    }

                    .form-all:before {
                        content: none;
                    }

                    .form-all {
                        margin-top: 72px;
                    }

                    /*PREFERENCES STYLE*/
                    /*__INSPECT_SEPERATOR__*/
                    .form-header-group.header-small {
                        padding: 20px 52px !important;
                        border-radius: 6px 6px 0 0;
                        border-top: 1px solid #eee;
                        margin: 0 -38px;
                        border-bottom: 0;
                    }

                    .form-header-group.header-small h3 {
                        text-transform: uppercase;
                        font-size: 26px;
                        font-weight: 400;
                        text-align: left;
                    }

                    /* Injected CSS Code */
                </style>

                <form class="jotform-form" action="https://submit.jotform.com/submit/232737763133458" method="post"
                    name="form_232737763133458" id="232737763133458" accept-charset="utf-8" autocomplete="on"><input
                        type="hidden" name="formID" value="232737763133458" /><input type="hidden" id="JWTContainer"
                        value="" /><input type="hidden" id="cardinalOrderNumber" value="" />
                    <div role="main" class="form-all">
                        <ul class="form-section page-section">
                            <li class="form-line form-line-column form-col-1" data-type="control_image" id="id_21">
                                <div id="cid_21" class="form-input-wide" data-layout="full"> <img
                                        alt="Dummy company logo named ACME global" loading="lazy" class="form-image"
                                        style="border:0"
                                        src="https://www.jotform.com/uploads/Dasian/form_files/Screenshot%202023-10-02%20084604.651a12fe46a4f8.12743394.png"
                                        tabindex="0" height="106px" width="420px" data-component="image" /> </div>
                            </li>
                            <li class="form-line form-line-column form-col-2" data-type="control_text" id="id_18">
                                <div id="cid_18" class="form-input-wide" data-layout="full">
                                    <div id="text_18" class="form-html" data-component="text" tabindex="0">
                                        <div style="line-height: 18px; text-align: right; padding-top: 24px;">
                                            <div style="font-size: 12pt;"><strong>Curava National High School</strong></div>
                                            <div style="font-size: 10pt;">42R2+224, Medellin, Cebu 6012</div>
                                            <div style="line-height: 14px;">
                                                <div style="font-size: 8pt;"><a href="mailto:curvanationalhighschool@gmail"
                                                        target="_blank" rel="nofollow">curvanationalhighschool@gmail</a>.com
                                                </div>
                                                <div style="font-size: 8pt;">curvalink.online</div>
                                                <div style="font-size: 8pt;"> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li id="cid_1" class="form-input-wide" data-type="control_head">
                                <div class="form-header-group  header-small">
                                    <div class="header-text httal htvam">
                                        <h3 id="header_1" class="form-header" data-component="header">REQUEST FOR
                                            CERTIFICATION
                                        </h3>
                                    </div>
                                </div>
                            </li>
                            <li class="form-line jf-required" data-type="control_fullname" id="id_3"><label
                                    class="form-label form-label-top form-label-auto" id="label_3" for="first_3"
                                    aria-hidden="false"> Full Name<span class="form-required">*</span> </label>
                                <div id="cid_3" class="form-input-wide jf-required" data-layout="full">
                                    <div data-wrapper-react="true"><span class="form-sub-label-container"
                                            style="vertical-align:top" data-input-type="first"><input type="text"
                                                id="first_3" name="q3_fullName3[first]"
                                                class="form-textbox validate[required]" data-defaultvalue=""
                                                autoComplete="section-input_3 given-name" size="10" value=""
                                                data-component="first" aria-labelledby="label_3 sublabel_3_first"
                                                required="" /><label class="form-sub-label" for="first_3"
                                                id="sublabel_3_first" style="min-height:13px" aria-hidden="false">First
                                                Name</label></span><span class="form-sub-label-container"
                                            style="vertical-align:top" data-input-type="last"><input type="text"
                                                id="last_3" name="q3_fullName3[last]"
                                                class="form-textbox validate[required]" data-defaultvalue=""
                                                autoComplete="section-input_3 family-name" size="15" value=""
                                                data-component="last" aria-labelledby="label_3 sublabel_3_last"
                                                required="" /><label class="form-sub-label" for="last_3"
                                                id="sublabel_3_last" style="min-height:13px" aria-hidden="false">Last
                                                Name</label></span></div>
                                </div>
                            </li>
                            <li class="form-line jf-required" data-type="control_address" id="id_4"><label
                                    class="form-label form-label-top form-label-auto" id="label_4"
                                    for="input_4_addr_line1" aria-hidden="false"> Address<span
                                        class="form-required">*</span> </label>
                                <div id="cid_4" class="form-input-wide jf-required" data-layout="full">
                                    <div summary="" class="form-address-table jsTest-addressField">
                                        <div class="form-address-line-wrapper jsTest-address-line-wrapperField"><span
                                                class="form-address-line form-address-street-line jsTest-address-lineField"><span
                                                    class="form-sub-label-container" style="vertical-align:top"><input
                                                        type="text" id="input_4_addr_line1"
                                                        name="q4_address4[addr_line1]"
                                                        class="form-textbox validate[required] form-address-line"
                                                        data-defaultvalue="" autoComplete="section-input_4 address-line1"
                                                        value="" data-component="address_line_1"
                                                        aria-labelledby="label_4 sublabel_4_addr_line1"
                                                        required="" /><label class="form-sub-label"
                                                        for="input_4_addr_line1" id="sublabel_4_addr_line1"
                                                        style="min-height:13px" aria-hidden="false">Street
                                                        Address</label></span></span></div>
                                        <div class="form-address-line-wrapper jsTest-address-line-wrapperField"><span
                                                class="form-address-line form-address-city-line jsTest-address-lineField "><span
                                                    class="form-sub-label-container" style="vertical-align:top"><input
                                                        type="text" id="input_4_city" name="q4_address4[city]"
                                                        class="form-textbox validate[required] form-address-city"
                                                        data-defaultvalue="" autoComplete="section-input_4 address-level2"
                                                        value="" data-component="city"
                                                        aria-labelledby="label_4 sublabel_4_city" required="" /><label
                                                        class="form-sub-label" for="input_4_city" id="sublabel_4_city"
                                                        style="min-height:13px"
                                                        aria-hidden="false">City</label></span></span><span
                                                class="form-address-line form-address-state-line jsTest-address-lineField "><span
                                                    class="form-sub-label-container" style="vertical-align:top"><input
                                                        type="text" id="input_4_state" name="q4_address4[state]"
                                                        class="form-textbox validate[required] form-address-state"
                                                        data-defaultvalue="" autoComplete="section-input_4 address-level1"
                                                        value="" data-component="state"
                                                        aria-labelledby="label_4 sublabel_4_state" required="" /><label
                                                        class="form-sub-label" for="input_4_state" id="sublabel_4_state"
                                                        style="min-height:13px" aria-hidden="false">State /
                                                        Province</label></span></span></div>
                                        <div class="form-address-line-wrapper jsTest-address-line-wrapperField"><span
                                                class="form-address-line form-address-zip-line jsTest-address-lineField "><span
                                                    class="form-sub-label-container" style="vertical-align:top"><input
                                                        type="text" id="input_4_postal" name="q4_address4[postal]"
                                                        class="form-textbox validate[required] form-address-postal"
                                                        data-defaultvalue="" autoComplete="section-input_4 postal-code"
                                                        value="" data-component="zip"
                                                        aria-labelledby="label_4 sublabel_4_postal"
                                                        required="" /><label class="form-sub-label"
                                                        for="input_4_postal" id="sublabel_4_postal"
                                                        style="min-height:13px" aria-hidden="false">Postal / Zip
                                                        Code</label></span></span></div>
                                    </div>
                                </div>
                            </li>
                            <li class="form-line form-line-column form-col-1 jf-required" data-type="control_phone"
                                id="id_5"><label class="form-label form-label-top form-label-auto" id="label_5"
                                    for="input_5_full"> Phone Number<span class="form-required">*</span> </label>
                                <div id="cid_5" class="form-input-wide jf-required" data-layout="half"> <span
                                        class="form-sub-label-container" style="vertical-align:top"><input type="tel"
                                            id="input_5_full" name="q5_phoneNumber5[full]" data-type="mask-number"
                                            class="mask-phone-number form-textbox validate[required, Fill Mask]"
                                            data-defaultvalue="" autoComplete="section-input_5 tel" style="width:310px"
                                            data-masked="true" value="" placeholder="0000-000-0000"
                                            data-component="phone" aria-labelledby="label_5" required="" /></span>
                                </div>
                            </li>
                            <li class="form-line form-line-column form-col-2" data-type="control_email" id="id_6">
                                <label class="form-label form-label-top form-label-auto" id="label_6" for="input_6"
                                    aria-hidden="false"> E-mail </label>
                                <div id="cid_6" class="form-input-wide" data-layout="half"> <span
                                        class="form-sub-label-container" style="vertical-align:top"><input type="email"
                                            id="input_6" name="q6_email6" class="form-textbox validate[Email]"
                                            data-defaultvalue="" style="width:310px" size="310" value=""
                                            placeholder="ex: email@yahoo.com" data-component="email"
                                            aria-labelledby="label_6 sublabel_input_6" /><label class="form-sub-label"
                                            for="input_6" id="sublabel_input_6" style="min-height:13px"
                                            aria-hidden="false">example@example.com</label></span> </div>
                            </li>
                            <li class="form-line" data-type="control_button" id="id_25">
                                <div id="cid_25" class="form-input-wide" data-layout="full">
                                    <div data-align="auto"
                                        class="form-buttons-wrapper form-buttons-auto   jsTest-button-wrapperField"><button
                                            id="input_25" type="submit"
                                            class="form-submit-button form-submit-button-orange-500 submit-button jf-form-buttons jsTest-submitField"
                                            data-component="button" data-content="">Submit</button></div>
                                </div>
                            </li>
                            <li style="display:none">Should be Empty: <input type="text" name="website"
                                    value="" />
                            </li>
                        </ul>
                    </div>
                    {{-- <script>
                        JotForm.showJotFormPowered = "new_footer";
                    </script>
                    <script>
                        JotForm.poweredByText = "Powered by Jotform";
                    </script><input type="hidden" class="simple_spc" id="simple_spc" name="simple_spc"
                        value="232737763133458" />
                    <script type="text/javascript">
                        var all_spc = document.querySelectorAll("form[id='232737763133458'] .si" + "mple" + "_spc");
                        for (var i = 0; i < all_spc.length; i++) {
                            all_spc[i].value = "232737763133458-232737763133458";
                        }
                    </script> --}}
                </form>
                {{-- <script type="text/javascript">
                    JotForm.ownerView = true;
                </script>
                <script src="https://static-interlogyllc.netdna-ssl.com//js/vendor/smoothscroll.min.js?v=3.3.45945"></script>
                <script src="https://static-interlogyllc.netdna-ssl.com//js/errorNavigation.js?v=3.3.45945"></script>
                <script type="text/javascript">
                    JotForm.isNewSACL = true;
                </script> --}}
            </div>
        </div>
    </div>
@endsection
