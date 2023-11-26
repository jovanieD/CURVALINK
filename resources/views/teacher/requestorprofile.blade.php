@extends('layouts.teacher-dashboard')

@section('teacher')
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <div class="content-wrapper">

                <link type="text/css" rel="stylesheet" href="https://cdn01.jotfor.ms/themes/CSS/form-common.css?v=9b5ac39
" />
                <style type="text/css">
                    @media print {
                        * {
                            -webkit-print-color-adjust: exact !important;
                            color-adjust: exact !important;
                        }

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
                    href="https://cdn02.jotfor.ms/themes/CSS/5e6b428acc8c4e222d1beb91.css?v=3.3.48036&themeRevisionID=5f30e2a790832f3e96009402" />
                <link type="text/css" rel="stylesheet"
                    href="https://cdn03.jotfor.ms/css/styles/payment/payment_styles.css?3.3.48036" />
                <link type="text/css" rel="stylesheet"
                    href="https://cdn01.jotfor.ms/css/styles/payment/payment_feature.css?3.3.48036" />
                <link type="text/css" rel="stylesheet"
                    href="https://cdn02.jotfor.ms/stylebuilder/donationBox.css?v=3.3.48036">
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
                        background-color: #3b2f80;
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
                        background-color: #fff;
                    }

                    .supernova {
                        background-image: none;
                    }

                    #stage {
                        background-image: none;
                    }

                    ;

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
                    .form-label.form-label-auto {

                        display: block;
                        float: none;
                        text-align: left;
                        width: 100%;

                    }

                    .submit-button {
                        background-color: #3b2f80;
                        border: 0;
                    }

                    /* Injected CSS Code */
                </style>

                <form class="jotform-form" >
                    <div role="main" class="form-all">
                        <ul class="form-section page-section">
                            <li id="cid_9" class="form-input-wide" data-type="control_head">
                                <div class="form-header-group  header-large">
                                    <div class="header-text httal htvam">
                                        <h1 id="header_9" class="form-header" data-component="header">Requestor&#x27;s
                                            Information</h1>
                                    </div>
                                </div>
                            </li>
                            <li class="form-line form-line-column form-col-1" data-type="control_textbox" id="id_5">
                                <label class="form-label form-label-top form-label-auto" id="label_5" for="input_5"
                                    aria-hidden="false"> Student ID </label>
                                <div id="cid_5" class="form-input-wide" data-layout="half"> <input type="text"
                                        id="input_5" name="q5_studentId" data-type="input-textbox" class="form-textbox"
                                        data-defaultvalue="" style="width:310px" size="310" placeholder=" "
                                        data-component="textbox" aria-labelledby="label_5" value="{{$requestor['idnumber']}}" /> </div>
                            </li>
                            <li class="form-line" data-type="control_fullname" id="id_4"><label
                                    class="form-label form-label-top form-label-extended form-label-auto" id="label_4"
                                    for="first_4" aria-hidden="false"> Student Name </label>
                                <div id="cid_4" class="form-input-wide" data-layout="full">
                                    <div data-wrapper-react="true" class="extended"><span class="form-sub-label-container"
                                            style="vertical-align:top" data-input-type="first"><input type="text"
                                                id="first_4" name="q4_studentName[first]" class="form-textbox"
                                                data-defaultvalue="" size="10" data-component="first"
                                                aria-labelledby="label_4 sublabel_4_first" value="{{$requestor['firstname']}}" /><label
                                                class="form-sub-label" for="first_4" id="sublabel_4_first"
                                                style="min-height:13px" aria-hidden="false">First Name</label></span><span
                                            class="form-sub-label-container" style="vertical-align:top"
                                            data-input-type="middle"><input type="text" id="middle_4"
                                                name="q4_studentName[middle]" class="form-textbox" data-defaultvalue=""
                                                size="10" data-component="middle"
                                                aria-labelledby="label_4 sublabel_4_middle" value="{{$requestor['middlename']}}" /><label
                                                class="form-sub-label" for="middle_4" id="sublabel_4_middle"
                                                style="min-height:13px" aria-hidden="false">Middle
                                                Name</label></span><span class="form-sub-label-container"
                                            style="vertical-align:top" data-input-type="last"><input type="text"
                                                id="last_4" name="q4_studentName[last]" class="form-textbox"
                                                data-defaultvalue="" size="15" data-component="last"
                                                aria-labelledby="label_4 sublabel_4_last" value="{{$requestor['lastname']}}" /><label
                                                class="form-sub-label" for="last_4" id="sublabel_4_last"
                                                style="min-height:13px" aria-hidden="false">Last Name</label></span></div>
                                </div>
                            </li>
                            <li class="form-line" data-type="control_address" id="id_10"
                                data-compound-hint=",,,,Please Select,,Please Select,"><label
                                    class="form-label form-label-top form-label-auto" id="label_10"
                                    for="input_10_addr_line1" aria-hidden="false"> Address </label>
                                <div id="cid_10" class="form-input-wide" data-layout="full">
                                    <div summary="" class="form-address-table jsTest-addressField">
                                        <div class="form-address-line-wrapper jsTest-address-line-wrapperField"><span
                                                class="form-address-line form-address-street-line jsTest-address-lineField"><span
                                                    class="form-sub-label-container" style="vertical-align:top"><input
                                                        type="text" id="input_10_addr_line1"
                                                        name="q10_address[addr_line1]"
                                                        class="form-textbox form-address-line" data-defaultvalue=""
                                                        data-component="address_line_1"
                                                        aria-labelledby="label_10 sublabel_10_addr_line1" required=""
                                                        value="{{$requestor['address']}}" /><label class="form-sub-label"
                                                        for="input_10_addr_line1" id="sublabel_10_addr_line1"
                                                        style="min-height:13px" aria-hidden="false">Street
                                                        Address</label></span></span></div>

                                        <div class="form-address-line-wrapper jsTest-address-line-wrapperField"><span
                                                class="form-address-line form-address-city-line jsTest-address-lineField "><span
                                                    class="form-sub-label-container" style="vertical-align:top"><input
                                                        type="text" id="input_10_city" name="q10_address[city]"
                                                        class="form-textbox form-address-city" data-defaultvalue=""
                                                        data-component="city" aria-labelledby="label_10 sublabel_10_city"
                                                        required="" value="{{$requestor['municipality']}}" /><label class="form-sub-label"
                                                        for="input_10_city" id="sublabel_10_city" style="min-height:13px"
                                                        aria-hidden="false">Municipality</label></span></span><span
                                                class="form-address-line form-address-state-line jsTest-address-lineField "><span
                                                    class="form-sub-label-container" style="vertical-align:top"><input
                                                        type="text" id="input_10_state" name="q10_address[state]"
                                                        class="form-textbox form-address-state" data-defaultvalue=""
                                                        data-component="state"
                                                        aria-labelledby="label_10 sublabel_10_state" required=""
                                                        value="{{$requestor['province']}}" /><label class="form-sub-label"
                                                        for="input_10_state" id="sublabel_10_state"
                                                        style="min-height:13px" aria-hidden="false">
                                                        Province</label></span></span></div>
                                        <div class="form-address-line-wrapper jsTest-address-line-wrapperField"><span
                                                class="form-address-line form-address-zip-line jsTest-address-lineField "><span
                                                    class="form-sub-label-container" style="vertical-align:top"><input
                                                        type="text" id="input_10_postal" name="q10_address[postal]"
                                                        class="form-textbox form-address-postal" data-defaultvalue=""
                                                        data-component="zip" aria-labelledby="label_10 sublabel_10_postal"
                                                        required="" value="{{$requestor['postal']}}" /><label class="form-sub-label"
                                                        for="input_10_postal" id="sublabel_10_postal"
                                                        style="min-height:13px" aria-hidden="false">Postal / Zip
                                                        Code</label></span></span></div>
                                    </div>
                                </div>
                            </li>
                            <li class="form-line form-line-column form-col-1" data-type="control_dropdown"
                                id="id_7"><label class="form-label form-label-top form-label-auto" id="label_7"
                                    for="input_7" aria-hidden="false"> Gender </label>
                                <div id="cid_7" class="form-input-wide" data-layout="half"> <select
                                        class="form-dropdown" id="input_7" name="q7_listOf7" style="width:310px"
                                        data-component="dropdown" aria-label="Gender">
                                        <option value="" {{ $requestor['gender'] == '' ? 'selected' : '' }}>Please Select</option>
                                        <option value="Male" {{ $requestor['gender'] == 'Male' ? 'selected' : '' }}>Male</option>
                                        <option value="Female" {{ $requestor['gender'] == 'Female' ? 'selected' : '' }}>Female</option>
                                    </select> </div>
                            </li>
                            <li class="form-line form-line-column form-col-2" data-type="control_dropdown"
                                id="id_11"><label class="form-label form-label-top form-label-auto" id="label_11"
                                    for="input_11" aria-hidden="false"> Grade Level </label>
                                <div id="cid_11" class="form-input-wide" data-layout="half"> <select
                                        class="form-dropdown" id="input_11" name="q11_gradeLevel" style="width:310px"
                                        data-component="dropdown" aria-label="Grade Level">
                                        <option value="" {{ $requestor['gradelevel'] == '' ? 'selected' : '' }}>Please Select</option>
                                        <option value="Grade 7"  {{ $requestor['gradelevel'] == 'Grade 7' ? 'selected' : '' }}>Grade 7</option>
                                        <option value="Grade 8"  {{ $requestor['gradelevel'] == 'Grade 8' ? 'selected' : '' }}>Grade 8</option>
                                        <option value="Grade 9"  {{ $requestor['gradelevel'] == 'Grade 9' ? 'selected' : '' }}>Grade 9</option>
                                        <option value="Grade 10" {{ $requestor['gradelevel'] == 'Grade 10' ? 'selected' : '' }}>Grade 10</option>
                                        <option value="Grade 11" {{ $requestor['gradelevel'] == 'Grade 11' ? 'selected' : '' }}>Grade 11</option>
                                        <option value="Grade 12" {{ $requestor['gradelevel'] == 'Grade 12' ? 'selected' : '' }}>Grade 12</option>
                                        <option value="Alumnus"  {{ $requestor['gradelevel'] == 'Alumnus' ? 'selected' : '' }}>Alumnus</option>
                                    </select> </div>
                            </li>
                            <li class="form-line form-line-column form-col-3" data-type="control_email" id="id_6">
                                <label class="form-label form-label-top form-label-auto" id="label_6" for="input_6"
                                    aria-hidden="false"> Student E-mail </label>
                                <div id="cid_6" class="form-input-wide" data-layout="half"> <span
                                        class="form-sub-label-container" style="vertical-align:top"><input type="email"
                                            id="input_6" name="q6_studentEmail" class="form-textbox validate[Email]"
                                            data-defaultvalue="" style="width:310px" size="310"
                                            placeholder="ex: myname@example.com" data-component="email"
                                            aria-labelledby="label_6 sublabel_input_6" value="{{$requestor['email']}}" /><label
                                            class="form-sub-label" for="input_6" id="sublabel_input_6"
                                            style="min-height:13px" aria-hidden="false">example@example.com</label></span>
                                </div>
                            </li>
                            <li class="form-line" data-type="control_button" id="id_8">
                                <div id="cid_8" class="form-input-wide" data-layout="full">
                                    <div data-align="auto"
                                        class="form-buttons-wrapper form-buttons-auto   jsTest-button-wrapperField">
                                        <a href="/teacher/dashboard">
                                            <button type="button" class="btn btn-primary m-1">
                                                <i class="fa-solid fa-arrow-left fa-xl m-1" style="color: #a5c5fd;"></i>
                                                <span class=" fs-4">Back</span>
                                            </button>
                                        </a>
                            </li>
                            
                        </ul>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
