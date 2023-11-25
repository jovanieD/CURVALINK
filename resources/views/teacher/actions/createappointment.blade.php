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
                    href="https://cdn02.jotfor.ms/themes/CSS/5e6b428acc8c4e222d1beb91.css?v=3.3.47995" />
                <link type="text/css" rel="stylesheet"
                    href="https://cdn03.jotfor.ms/css/styles/payment/payment_styles.css?3.3.47995" />
                <link type="text/css" rel="stylesheet"
                    href="https://cdn01.jotfor.ms/css/styles/payment/payment_feature.css?3.3.47995" />
                <link type="text/css" rel="stylesheet"
                    href="https://cdn02.jotfor.ms/stylebuilder/donationBox.css?v=3.3.47995">
                <style type="text/css" id="form-designer-style">
                    /* Injected CSS Code */
                    .form-label.form-label-auto {

                        display: inline-block;
                        float: left;
                        text-align: left;

                    }

                    /* Injected CSS Code */
                </style>

                <form class="jotform-form"
                    onsubmit="return typeof testSubmitFunction !== 'undefined' && testSubmitFunction();"
                    action="https://submit.jotform.com/submit/233268672651058" method="post" name="form_233268672651058"
                    id="233268672651058" accept-charset="utf-8" autocomplete="on"><input type="hidden" name="formID"
                        value="233268672651058" /><input type="hidden" id="JWTContainer" value="" /><input
                        type="hidden" id="cardinalOrderNumber" value="" /><input type="hidden"
                        id="jsExecutionTracker" name="jsExecutionTracker" value="build-date-1700801641113" /><input
                        type="hidden" id="submitSource" name="submitSource" value="unknown" /><input type="hidden"
                        id="buildDate" name="buildDate" value="1700801641113" />
                    <div role="main" class="form-all">
                        <ul class="form-section page-section">
                            <li id="cid_1" class="form-input-wide" data-type="control_head">
                                <div class="form-header-group  header-large">
                                    <div class="header-text httal htvam">
                                        <h1 id="header_1" class="form-header" data-component="header">Create Appointments
                                        </h1>
                                        <div id="subHeader_1" class="form-subHeader">Schedule Release of Document</div>
                                    </div>
                                </div>
                            </li>
                            <li class="form-line" data-type="control_textbox" id="id_8"><label
                                    class="form-label form-label-left form-label-auto" id="label_8" for="input_8"
                                    aria-hidden="false"> Document </label>
                                <div id="cid_8" class="form-input" data-layout="half"> <input type="text"
                                        id="input_8" name="q8_document" data-type="input-textbox" class="form-textbox"
                                        data-defaultvalue="" style="width:310px" size="310" data-component="textbox"
                                        aria-labelledby="label_8" value="" /> </div>
                            </li>
                            <li class="form-line jf-required" data-type="control_datetime" id="id_3"><label
                                    class="form-label form-label-left form-label-auto" id="label_3" for="lite_mode_3"
                                    aria-hidden="false"> Start Date<span class="form-required">*</span> </label>
                                <div id="cid_3" class="form-input jf-required" data-layout="half">
                                    <div data-wrapper-react="true">
                                        <div style="display:none"><span class="form-sub-label-container"
                                                style="vertical-align:top"><input type="tel"
                                                    class="form-textbox validate[required, limitDate]" id="year_3"
                                                    name="q3_date[year]" size="4" data-maxlength="4"
                                                    data-age="" maxLength="4" value="" required=""
                                                    autoComplete="off" aria-labelledby="label_3 sublabel_3_year" /><span
                                                    class="date-separate" aria-hidden="true"> -</span><label
                                                    class="form-sub-label" for="year_3" id="sublabel_3_year"
                                                    style="min-height:13px" aria-hidden="false">Year</label></span><span
                                                class="form-sub-label-container" style="vertical-align:top"><input
                                                    type="tel" class="form-textbox validate[required, limitDate]"
                                                    id="month_3" name="q3_date[month]" size="2"
                                                    data-maxlength="2" data-age="" maxLength="2" value=""
                                                    required="" autoComplete="off"
                                                    aria-labelledby="label_3 sublabel_3_month" /><span
                                                    class="date-separate" aria-hidden="true"> -</span><label
                                                    class="form-sub-label" for="month_3" id="sublabel_3_month"
                                                    style="min-height:13px" aria-hidden="false">Month</label></span><span
                                                class="form-sub-label-container" style="vertical-align:top"><input
                                                    type="tel" class="form-textbox validate[required, limitDate]"
                                                    id="day_3" name="q3_date[day]" size="2" data-maxlength="2"
                                                    data-age="" maxLength="2" value="" required=""
                                                    autoComplete="off" aria-labelledby="label_3 sublabel_3_day" /><label
                                                    class="form-sub-label" for="day_3" id="sublabel_3_day"
                                                    style="min-height:13px" aria-hidden="false">Day</label></span></div>
                                        <span class="form-sub-label-container" style="vertical-align:top"><input
                                                type="text"
                                                class="form-textbox validate[required, limitDate, validateLiteDate]"
                                                id="lite_mode_3" size="12" data-maxlength="12" maxLength="12"
                                                data-age="" value="" required="" data-format="yyyymmdd"
                                                data-seperator="-" placeholder="YYYY-MM-DD" data-placeholder="YYYY-MM-DD"
                                                autoComplete="off" aria-labelledby="label_3" /><img
                                                class=" newDefaultTheme-dateIcon icon-liteMode" alt="Pick a Date"
                                                id="input_3_pick" src="https://cdn.jotfor.ms/images/calendar.png"
                                                data-component="datetime" aria-hidden="true" data-allow-time="No"
                                                data-version="v2" /><label class="form-sub-label is-empty"
                                                for="lite_mode_3" id="sublabel_3_litemode" style="min-height:13px"
                                                aria-hidden="false"></label></span>
                                    </div>
                                </div>
                            </li>
                            <li class="form-line" data-type="control_datetime" id="id_4"><label
                                    class="form-label form-label-left form-label-auto" id="label_4" for="lite_mode_4"
                                    aria-hidden="false"> End Date </label>
                                <div id="cid_4" class="form-input" data-layout="half">
                                    <div data-wrapper-react="true">
                                        <div style="display:none"><span class="form-sub-label-container"
                                                style="vertical-align:top"><input type="tel"
                                                    class="form-textbox validate[limitDate]" id="year_4"
                                                    name="q4_date4[year]" size="4" data-maxlength="4"
                                                    data-age="" maxLength="4" value="" autoComplete="off"
                                                    aria-labelledby="label_4 sublabel_4_year" /><span
                                                    class="date-separate" aria-hidden="true"> -</span><label
                                                    class="form-sub-label" for="year_4" id="sublabel_4_year"
                                                    style="min-height:13px" aria-hidden="false">Year</label></span><span
                                                class="form-sub-label-container" style="vertical-align:top"><input
                                                    type="tel" class="form-textbox validate[limitDate]"
                                                    id="month_4" name="q4_date4[month]" size="2"
                                                    data-maxlength="2" data-age="" maxLength="2" value=""
                                                    autoComplete="off" aria-labelledby="label_4 sublabel_4_month" /><span
                                                    class="date-separate" aria-hidden="true"> -</span><label
                                                    class="form-sub-label" for="month_4" id="sublabel_4_month"
                                                    style="min-height:13px" aria-hidden="false">Month</label></span><span
                                                class="form-sub-label-container" style="vertical-align:top"><input
                                                    type="tel" class="form-textbox validate[limitDate]"
                                                    id="day_4" name="q4_date4[day]" size="2"
                                                    data-maxlength="2" data-age="" maxLength="2" value=""
                                                    autoComplete="off" aria-labelledby="label_4 sublabel_4_day" /><label
                                                    class="form-sub-label" for="day_4" id="sublabel_4_day"
                                                    style="min-height:13px" aria-hidden="false">Day</label></span></div>
                                        <span class="form-sub-label-container" style="vertical-align:top"><input
                                                type="text" class="form-textbox validate[limitDate, validateLiteDate]"
                                                id="lite_mode_4" size="12" data-maxlength="12" maxLength="12"
                                                data-age="" value="" data-format="yyyymmdd" data-seperator="-"
                                                placeholder="YYYY-MM-DD" data-placeholder="YYYY-MM-DD" autoComplete="off"
                                                aria-labelledby="label_4" /><img
                                                class=" newDefaultTheme-dateIcon icon-liteMode" alt="Pick a Date"
                                                id="input_4_pick" src="https://cdn.jotfor.ms/images/calendar.png"
                                                data-component="datetime" aria-hidden="true" data-allow-time="No"
                                                data-version="v2" /><label class="form-sub-label is-empty"
                                                for="lite_mode_4" id="sublabel_4_litemode" style="min-height:13px"
                                                aria-hidden="false"></label></span>
                                    </div>
                                </div>
                            </li>
                            <li class="form-line jf-required" data-type="control_textarea" id="id_7"><label
                                    class="form-label form-label-left form-label-auto" id="label_7" for="input_7"
                                    aria-hidden="false"> Remarks<span class="form-required">*</span> </label>
                                <div id="cid_7" class="form-input jf-required" data-layout="full">
                                    <textarea id="input_7" class="form-textarea validate[required]" name="q7_remarks" style="width:648px;height:163px"
                                        data-component="textarea" required="" aria-labelledby="label_7"></textarea>
                                </div>
                            </li>
                            <li class="form-line" data-type="control_button" id="id_2">
                                <div id="cid_2" class="form-input-wide" data-layout="full">
                                    <div data-align="auto"
                                        class="form-buttons-wrapper form-buttons-auto   jsTest-button-wrapperField"><button
                                            id="input_2" type="submit"
                                            class="form-submit-button form-submit-button-yellow-300 submit-button jf-form-buttons jsTest-submitField"
                                            data-component="button" data-content="">Create Schedule</button></div>
                                </div>
                            </li>
                            <li style="display:none">Should be Empty: <input type="text" name="website"
                                    value="" /></li>
                        </ul>
                    </div>

                </form>
     

            </div>
        </div>
    </div>
@endsection
