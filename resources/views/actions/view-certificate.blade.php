@extends('layouts.student-dashboard')

@section('student')
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <div class="content-wrapper">
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
                    href="https://cdn01.jotfor.ms/themes/CSS/5e6b428acc8c4e222d1beb91.css?v=3.3.45947&themeRevisionID=5eb3b4ae85bd2e1e2966db96" />
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
                </style>
                <form action="/update/request" method="post" accept-charset="utf-8" autocomplete="on">
                    @csrf
                    <div role="main" class="form-all">
                        <ul class="form-section page-section">
                            <li class="form-line" data-type="control_image" id="id_3">
                                <div id="cid_3" class="form-input-wide" data-layout="full">
                                    <div style="text-align:center"><img alt="Image-3" loading="lazy" class="form-image"
                                            style="border:0"
                                            src="{{asset('images/header.png')}}"
                                            tabindex="0" height="176px" width="659px" data-component="image"
                                            role="presentation" /></div>
                                </div>
                            </li>
                            <li class="form-line jf-" data-type="control_fullname" id="id_3"><label
                                    class="form-label form-label-top form-label-auto" id="label_3" for="first_3"
                                    aria-hidden="false"> Full Name </label>
                                <div id="cid_3" class="form-input-wide jf-" data-layout="full">
                                    <div data-wrapper-react="true"><span class="form-sub-label-container"
                                            style="vertical-align:top" data-input-type="first"><input readonly=""
                                                type="text" id="first_3" name="firstname"
                                                class="form-textbox validate[]" autoComplete="section-input_3 given-name"
                                                size="10" data-component="first" value="{{ $data['firstname'] }}"
                                                aria-labelledby="label_3 sublabel_3_first" /><label class="form-sub-label"
                                                for="first_3" id="sublabel_3_first" style="min-height:13px"
                                                aria-hidden="false">First
                                                Name</label></span><span class="form-sub-label-container"
                                            style="vertical-align:top" data-input-type="last"><input readonly=""
                                                type="text" value="{{ $data['lastname'] }}" id="last_3"
                                                name="lastname" class="form-textbox validate[]"
                                                autoComplete="section-input_3 family-name" size="15" placeholder=""
                                                data-component="last" aria-labelledby="label_3 sublabel_3_last" /><label
                                                class="form-sub-label" for="last_3" id="sublabel_3_last"
                                                style="min-height:13px" aria-hidden="false">Last
                                                Name</label></span></div>
                                </div>
                            </li>
                            <li class="form-line jf-" data-type="control_address" id="id_4"><label
                                    class="form-label form-label-top form-label-auto" id="label_4"
                                    for="input_4_addr_line1" aria-hidden="false"> Address </label>
                                <div id="cid_4" class="form-input-wide jf-" data-layout="full">
                                    <div summary="" class="form-address-table jsTest-addressField">
                                        <div class="form-address-line-wrapper jsTest-address-line-wrapperField"><span
                                                class="form-address-line form-address-street-line jsTest-address-lineField"><span
                                                    class="form-sub-label-container" style="vertical-align:top"><input
                                                        readonly="" value="{{ $data['address'] }}" type="text"
                                                        id="input_4_addr_line1" name="address"
                                                        class="form-textbox validate[] form-address-line"
                                                        autoComplete="section-input_4 address-line1"
                                                        data-component="address_line_1"
                                                        aria-labelledby="label_4 sublabel_4_addr_line1" /><label
                                                        class="form-sub-label" for="input_4_addr_line1"
                                                        id="sublabel_4_addr_line1" style="min-height:13px"
                                                        aria-hidden="false">Street
                                                        Address</label></span></span></div>
                                        <div class="form-address-line-wrapper jsTest-address-line-wrapperField"><span
                                                class="form-address-line form-address-city-line jsTest-address-lineField "><span
                                                    class="form-sub-label-container" style="vertical-align:top"><input
                                                        readonly="" value="{{ $data['municipality'] }}" type="text"
                                                        id="input_4_city" name="municipality"
                                                        class="form-textbox validate[] form-address-city"
                                                        autoComplete="section-input_4 address-level2"
                                                        data-component="city"
                                                        aria-labelledby="label_4 sublabel_4_city" /><label
                                                        class="form-sub-label" for="input_4_city" id="sublabel_4_city"
                                                        style="min-height:13px"
                                                        aria-hidden="false">Municipality</label></span></span><span
                                                class="form-address-line form-address-state-line jsTest-address-lineField "><span
                                                    class="form-sub-label-container" style="vertical-align:top"><input
                                                        readonly="" value="{{ $data['province'] }}" type="text"
                                                        id="input_4_state" name="province"
                                                        class="form-textbox validate[] form-address-state"
                                                        autoComplete="section-input_4 address-level1"
                                                        aria-labelledby="label_4 sublabel_4_state" /><label
                                                        class="form-sub-label" for="input_4_state" id="sublabel_4_state"
                                                        style="min-height:13px" aria-hidden="false">State /
                                                        Province</label></span></span></div>
                                        <div class="form-address-line-wrapper jsTest-address-line-wrapperField"><span
                                                class="form-address-line form-address-zip-line jsTest-address-lineField "><span
                                                    class="form-sub-label-container" style="vertical-align:top"><input
                                                        readonly="" value="{{ $data['postal'] }}" type="text"
                                                        id="input_4_postal" name="postal"
                                                        class="form-textbox validate[] form-address-postal"
                                                        autoComplete="section-input_4 postal-code" data-component="zip"
                                                        aria-labelledby="label_4 sublabel_4_postal" pattern="[0-9]{1,7}"
                                                        maxlength="7" /><label class="form-sub-label"
                                                        for="input_4_postal" id="sublabel_4_postal"
                                                        style="min-height:13px" aria-hidden="false">Postal / Zip
                                                        Code</label></span></span></div>
                                    </div>
                                </div>
                            </li>
                            <li class="form-line form-line-column form-col-1 jf-" data-type="control_phone"
                                id="id_5"><label class="form-label form-label-top form-label-auto" id="label_5"
                                    for="input_5_full"> Phone Number </label>
                                <div id="cid_5" class="form-input-wide jf-" data-layout="half"> <span
                                        class="form-sub-label-container" style="vertical-align:top"> <input
                                            readonly="" type="tel" value="{{ $data['phonenumber'] }}"
                                            id="input_5_full" name="phonenumber" maxlength="13"
                                            class="mask-phone-number form-textbox validate[, Fill Mask]"
                                            autoComplete="section-input_5 tel" style="width:310px" data-masked="true"
                                            aria-labelledby="label_5" /></span>
                                </div>
                            </li>
                            <li class="form-line form-line-column form-col-2 jf-" data-type="control_email"
                                id="id_6"><label class="form-label form-label-top form-label-auto" id="label_6"
                                    for="input_6" aria-hidden="false"> E-mail
                                </label>
                                <div id="cid_6" class="form-input-wide jf-" data-layout="half"> <span
                                        class="form-sub-label-container" style="vertical-align:top"><input readonly=""
                                            type="email" id="input_6" name="email"
                                            class="form-textbox validate[, Email]" style="width:310px" size="310"
                                            value="{{ $data['email'] }}" data-component="email"
                                            aria-labelledby="label_6 sublabel_input_6" /><label class="form-sub-label"
                                            for="input_6" id="sublabel_input_6" style="min-height:13px"
                                            aria-hidden="false">example@example.com</label></span>
                                </div>
                            </li>
                            <li class="form-line jf-" data-type="control_textarea" id="id_32"><label
                                    class="form-label form-label-top form-label-auto" id="label_32" for="input_32"
                                    aria-hidden="false"> Purpose </label>
                                <div id="cid_32" class="form-input-wide jf-" data-layout="full">
                                    <textarea readonly="" id="input_32"  maxlength="500" class="form-textarea validate[]"
                                        name="purpose" style="width:648px;height:163px" data-component="textarea" aria-labelledby="label_32">{{ $data['purpose'] }}</textarea>
                                </div>
                            </li>

                            <li class="form-line jf-" data-type="control_textarea" id="id_32"><label
                                    class="form-label form-label-top form-label-auto" id="label_32" for="input_32"
                                    aria-hidden="false"> Remarks </label>
                                <div id="cid_32" class="form-input-wide jf-" data-layout="full">
                                    <textarea readonly="" id="input_32"  maxlength="500" class="form-textarea validate[]"
                                        name="purpose" style="width:648px;height:163px" data-component="textarea" aria-labelledby="label_32">{{ $data['remarks'] }}</textarea>
                                </div>
                            </li>
                            <li class="form-line" data-type="control_button" id="id_25">
                                <div id="cid_25" class="form-input-wide" data-layout="full">
                                    <div class="d-flex justify-content-center m-4">
                                        <a href="/dashboard">
                                            <button type="button" class="btn btn-primary m-1">
                                                <i class="fa-solid fa-arrow-left fa-xl m-1" style="color: #a5c5fd;"></i>
                                                <span class=" fs-4">Back</span>
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
