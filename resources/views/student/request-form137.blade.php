@extends('layouts.student-dashboard')

@section('student')
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <div class="content-wrapper">

                <link type="text/css" rel="stylesheet" href="https://cdn01.jotfor.ms/themes/CSS/form-common.css?v=944ae2f
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
                    href="https://cdn02.jotfor.ms/themes/CSS/5e6b428acc8c4e222d1beb91.css?v=3.3.47738" />
                <link type="text/css" rel="stylesheet"
                    href="https://cdn03.jotfor.ms/css/styles/payment/payment_styles.css?3.3.47738" />
                <link type="text/css" rel="stylesheet"
                    href="https://cdn01.jotfor.ms/css/styles/payment/payment_feature.css?3.3.47738" />
                <link type="text/css" rel="stylesheet"
                    href="https://cdn02.jotfor.ms/stylebuilder/donationBox.css?v=3.3.47738">
                <style type="text/css" id="form-designer-style">
                    /* Injected CSS Code */
                    .form-label.form-label-auto {

                        display: block;
                        float: none;
                        text-align: left;
                        width: 100%;

                    }

                    /* Injected CSS Code */
                </style>

                <form class="jotform-form" action="" method="" autocomplete="on">
                    <div role="main" class="form-all">
                        <ul class="form-section page-section">
                            <li class="form-line" data-type="control_image" id="id_3">
                                <div id="cid_3" class="form-input-wide" data-layout="full">
                                    <div style="text-align:center"><img alt="Image-3" loading="lazy" class="form-image"
                                            style="border:0"
                                            src="https://www.jotform.com/uploads/Dasian/form_files/header.652c906c3bab83.64799975.png"
                                            tabindex="0" height="176px" width="659px" data-component="image"
                                            role="presentation" /></div>
                                </div>
                            </li>
                            <li class="form-line" data-type="control_divider" id="id_4">
                                <div id="cid_4" class="form-input-wide" data-layout="full">
                                    <div class="divider" data-component="divider"
                                        style="border-bottom-width:1px;border-bottom-style:solid;border-color:#080808;height:1px;margin-left:0px;margin-right:0px;margin-top:5px;margin-bottom:5px">
                                    </div>
                                </div>
                            </li>
                            <li class="form-line" data-type="control_datetime" id="id_5"><label
                                    class="form-label form-label-top form-label-auto" id="label_5" for="lite_mode_5"
                                    aria-hidden="true"> </label>
                                <div id="cid_5" class="form-input-wide" data-layout="half">
                                    <div data-wrapper-react="true">
                                        <div style="display:none"><span class="form-sub-label-container"
                                                style="vertical-align:top"><input type="tel"
                                                    class="form-textbox validate[limitDate]" id="month_5" name="name"
                                                    size="2" data-maxlength="2" data-age="" maxLength="2"
                                                    value="11" autoComplete="off"
                                                    aria-labelledby="label_5 sublabel_5_month" /><span class="date-separate"
                                                    aria-hidden="true"> /</span><label class="form-sub-label" for="month_5"
                                                    id="sublabel_5_month" style="min-height:13px"
                                                    aria-hidden="false">Month</label></span><span
                                                class="form-sub-label-container" style="vertical-align:top"><input
                                                    type="tel" class="currentDate form-textbox validate[limitDate]"
                                                    id="day_5" name="q5_date[day]" size="2" data-maxlength="2"
                                                    data-age="" maxLength="2" value="19" autoComplete="off"
                                                    aria-labelledby="label_5 sublabel_5_day" /><span class="date-separate"
                                                    aria-hidden="true"> /</span><label class="form-sub-label"
                                                    for="day_5" id="sublabel_5_day" style="min-height:13px"
                                                    aria-hidden="false">Day</label></span><span
                                                class="form-sub-label-container" style="vertical-align:top"><input
                                                    type="tel" class="form-textbox validate[limitDate]"
                                                    id="year_5" name="q5_date[year]" size="4"
                                                    data-maxlength="4" data-age="" maxLength="4" value="2023"
                                                    autoComplete="off" aria-labelledby="label_5 sublabel_5_year" /><label
                                                    class="form-sub-label" for="year_5" id="sublabel_5_year"
                                                    style="min-height:13px" aria-hidden="false">Year</label></span></div>
                                        <span class="form-sub-label-container" style="vertical-align:top"><input
                                                type="text" class="form-textbox validate[limitDate, validateLiteDate]"
                                                id="lite_mode_5" size="12" data-maxlength="12" maxLength="12"
                                                data-age="" value="11/19/2023" data-format="mmddyyyy"
                                                data-seperator="/" placeholder="MM/DD/YYYY" data-placeholder="MM/DD/YYYY"
                                                autoComplete="off" aria-labelledby="label_5 sublabel_5_litemode" /><img
                                                class=" newDefaultTheme-dateIcon icon-liteMode" alt="Pick a Date"
                                                id="input_5_pick" src="https://cdn.jotfor.ms/images/calendar.png"
                                                data-component="datetime" aria-hidden="true" data-allow-time="No"
                                                data-version="v2" /><label class="form-sub-label" for="lite_mode_5"
                                                id="sublabel_5_litemode" style="min-height:13px"
                                                aria-hidden="false">Date</label></span>
                                    </div>
                                </div>
                            </li>
                            <li class="form-line" data-type="control_inline" id="id_18">
                                <div id="cid_18" class="form-input-wide" data-layout="full">
                                    <div id="FITB_18" class="FITB formRender">
                                        <p><span style="color:#000000;background-color:transparent">THE PRINCIPAL / SCHOOL
                                                REGISTRAR</span><br /> <span data-type="textbox"
                                                data-grouptype="control_textbox" class="FITB-inptCont"
                                                data-blot-id="shorttext-1"><input type="text" class="form-textbox "
                                                    name="q18_input18[shorttext-1]" id="18_shorttext-1" required /><label
                                                    for="18_shorttext-1">Full Name</label></span> </p>
                                    </div>
                                </div>
                            </li>
                            <li class="form-line" data-type="control_text" id="id_12">
                                <div id="cid_12" class="form-input-wide" data-layout="full">
                                    <div id="text_12" class="form-html" data-component="text" tabindex="0">
                                        <p style="text-align: justify;">Sir/ Madam:</p>
                                        <p> At your earliest convenience, please furnish this school with a certified copy
                                            of SF10 – Learner’s Permanent Record of the following student/s who is/are
                                            temporarily enrolled in our school.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="form-line" data-type="control_fullname" id="id_13"><label
                                    class="form-label form-label-top form-label-extended form-label-auto" id="label_13"
                                    for="prefix_13" aria-hidden="false"> Name </label>
                                <div id="cid_13" class="form-input-wide" data-layout="full">
                                    <div data-wrapper-react="true" class="extended"><span
                                            class="form-sub-label-container" style="vertical-align:top"
                                            data-input-type="prefix"><input type="text" id="prefix_13"
                                                name="q13_name[prefix]" class="form-textbox" data-defaultvalue=""
                                                size="4" data-component="prefix"
                                                aria-labelledby="label_13 sublabel_13_prefix" value="" /><label
                                                class="form-sub-label" for="prefix_13" id="sublabel_13_prefix"
                                                style="min-height:13px" aria-hidden="false">Name of
                                                Student/s</label></span><span class="form-sub-label-container"
                                            style="vertical-align:top" data-input-type="first"><input type="text"
                                                id="first_13" name="q13_name[first]" class="form-textbox"
                                                data-defaultvalue="" size="10" data-component="first"
                                                aria-labelledby="label_13 sublabel_13_first" value="" /><label
                                                class="form-sub-label" for="first_13" id="sublabel_13_first"
                                                style="min-height:13px" aria-hidden="false">Grade &amp;
                                                Section</label></span><span class="form-sub-label-container"
                                            style="vertical-align:top" data-input-type="middle"><input type="text"
                                                id="middle_13" name="q13_name[middle]" class="form-textbox"
                                                data-defaultvalue="" size="10" data-component="middle"
                                                aria-labelledby="label_13 sublabel_13_middle" value="" /><label
                                                class="form-sub-label" for="middle_13" id="sublabel_13_middle"
                                                style="min-height:13px" aria-hidden="false">School
                                                Year</label></span><span class="form-sub-label-container"
                                            style="vertical-align:top" data-input-type="last"><input type="text"
                                                id="last_13" name="q13_name[last]" class="form-textbox"
                                                data-defaultvalue="" size="15" data-component="last"
                                                aria-labelledby="label_13 sublabel_13_last" value="" /><label
                                                class="form-sub-label" for="last_13" id="sublabel_13_last"
                                                style="min-height:13px" aria-hidden="false">Adviser</label></span></div>
                                </div>
                            </li>
                            <li class="form-line" data-type="control_text" id="id_14">
                                <div id="cid_14" class="form-input-wide" data-layout="full">
                                    <div id="text_14" class="form-html" data-component="text" tabindex="0">
                                        <p style="text-align: justify;"> If for some reason/s forms cannot be released,
                                            please inform us so we maybe of help to you. Thank you.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="form-line" data-type="control_inline" id="id_17">
                                <div id="cid_17" class="form-input-wide" data-layout="full">
                                    <div id="FITB_17" class="FITB formRender">
                                        <p>Very truly yours,<br /> <span data-type="textbox"
                                                data-grouptype="control_textbox" class="FITB-inptCont"
                                                data-blot-id="shorttext-1"><input type="text" class="form-textbox "
                                                    name="q17_input17[shorttext-1]" id="17_shorttext-1" required /><label
                                                    for="17_shorttext-1">Full Name</label></span></p>
                                    </div>
                                </div>
                            </li>
                            <li class="form-line" data-type="control_radio" id="id_23"><label
                                    class="form-label form-label-top form-label-auto" id="label_23" for="input_23"
                                    aria-hidden="true"> </label>
                                <div id="cid_23" class="form-input-wide" data-layout="full">
                                    <div class="form-single-column" role="group" aria-labelledby="label_23"
                                        data-component="radio"><span class="form-radio-item" style="clear:left"><span
                                                class="dragger-item"></span><input type="radio"
                                                aria-describedby="label_23" class="form-radio" id="input_23_0"
                                                name="q23_typeA23" value="First Request" /><label id="label_input_23_0"
                                                for="input_23_0">First Request</label></span><span class="form-radio-item"
                                            style="clear:left"><span class="dragger-item"></span><input type="radio"
                                                aria-describedby="label_23" class="form-radio" id="input_23_1"
                                                name="q23_typeA23" value="Second Request" /><label id="label_input_23_1"
                                                for="input_23_1">Second Request</label></span><span
                                            class="form-radio-item" style="clear:left"><span
                                                class="dragger-item"></span><input type="radio"
                                                aria-describedby="label_23" class="form-radio" id="input_23_2"
                                                name="q23_typeA23" value="Third Request" /><label id="label_input_23_2"
                                                for="input_23_2">Third
                                                Request</label></span><span class="form-radio-item"
                                            style="clear:left"><span class="dragger-item"></span><input type="radio"
                                                aria-describedby="label_23" class="form-radio" id="input_23_3"
                                                name="q23_typeA23" value="Urgent" /><label id="label_input_23_3"
                                                for="input_23_3">Urgent</label></span></div>
                                </div>
                            </li>
                            <li class="form-line" data-type="control_text" id="id_22">
                                <div id="cid_22" class="form-input-wide" data-layout="full">
                                    <div id="text_22" class="form-html" data-component="text" tabindex="0">
                                        <p>Note: <em><strong>The bearer is authorized to hand-carry the requested
                                                    form.</strong></em></p>
                                    </div>
                                </div>
                            </li>
                            <li class="form-line" data-type="control_button" id="id_2">
                                <div id="cid_2" class="form-input-wide" data-layout="full">
                                    <div data-align="auto"
                                        class="form-buttons-wrapper form-buttons-auto   jsTest-button-wrapperField"><button
                                            id="input_2" type="submit"
                                            class="form-submit-button form-submit-button-yellow-300 submit-button jf-form-buttons jsTest-submitField"
                                            data-component="button" data-content="">Submit</button></div>
                                </div>
                            </li>
                            <li style="display:none">Should be Empty: <input type="text" name="website"
                                    value="" /></li>
                        </ul>
                    </div>
            </div>
        </div>
    </div>
@endsection
