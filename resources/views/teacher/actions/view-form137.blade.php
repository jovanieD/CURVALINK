@extends('layouts.teacher-dashboard')

@section('teacher')
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

                <form class="jotform-form" action="/request/form137" method="POST" autocomplete="on">
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
                            <li class="form-line" data-type="control_divider" id="id_4">
                                <div id="cid_4" class="form-input-wide" data-layout="full">
                                    <div class="divider" data-component="divider"
                                        style="border-bottom-width:1px;border-bottom-style:solid;border-color:#080808;height:1px;margin-left:0px;margin-right:0px;margin-top:5px;margin-bottom:5px">
                                    </div>
                                </div>
                            </li>
                            <li class="form-line" data-type="control_inline" id="id_18">
                                <div id="cid_18" class="form-input-wide" data-layout="full">
                                    <div id="FITB_18" class="FITB formRender">
                                        <p><span style="color:#000000;background-color:transparent">THE PRINCIPAL / SCHOOL
                                                REGISTRAR</span><br /> <span data-type="textbox"
                                                data-grouptype="control_textbox" class="FITB-inptCont"
                                                data-blot-id="shorttext-1"><input readonly=""
                                                    value="{{ $data['principalname'] }}" type="text"
                                                    class="form-textbox " name="principalname" id="18_shorttext-1"
                                                    required /></span> </p>
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
                                    <div data-wrapper-react="true" class="extended"><span class="form-sub-label-container"
                                            style="vertical-align:top" data-input-type="prefix"><input readonly=""
                                                value="{{ $data['name'] }}" type="text" id="prefix_13" name="name"
                                                class="form-textbox" data-defaultvalue="" size="4"
                                                data-component="prefix" aria-labelledby="label_13 sublabel_13_prefix"
                                                value="" /><label class="form-sub-label" for="prefix_13"
                                                id="sublabel_13_prefix" style="min-height:13px" aria-hidden="false">Name
                                                of
                                                Student/s</label></span><span class="form-sub-label-container"
                                            style="vertical-align:top" data-input-type="first"><input readonly=""
                                                value="{{ $data['grade'] }}" type="text" id="first_13"
                                                name="grade" class="form-textbox" data-defaultvalue="" size="10"
                                                data-component="first" aria-labelledby="label_13 sublabel_13_first"
                                                value="" /><label class="form-sub-label" for="first_13"
                                                id="sublabel_13_first" style="min-height:13px" aria-hidden="false">Grade
                                                &amp;
                                                Section</label></span><span class="form-sub-label-container"
                                            style="vertical-align:top" data-input-type="middle">
                                            
                                            {{-- <input
                                                readonly=""type="text" id="middle_13" name="schoolyear" 
                                                class="form-textbox" data-defaultvalue="" size="10"
                                                data-component="middle" aria-labelledby="label_13 sublabel_13_middle"
                                                value="{{ $data['schoolyear'] }}" /><label class="form-sub-label" for="middle_13"
                                                id="sublabel_13_middle" style="min-height:13px"
                                                aria-hidden="false">School
                                                Year</label></span> --}}
                                                
                                                <span class="form-sub-label-container"
                                            style="vertical-align:top" data-input-type="last"><input readonly=""
                                                value="{{ $data['adviser'] }}" type="text" id="last_13"
                                                name="adviser" class="form-textbox" data-defaultvalue="" size="15"
                                                data-component="last" aria-labelledby="label_13 sublabel_13_last"
                                                value="" /><label class="form-sub-label" for="last_13"
                                                id="sublabel_13_last" style="min-height:13px"
                                                aria-hidden="false">Adviser</label></span></div>
                                </div>
                            </li>

                            <li class="form-line jf-required" data-type="control_address" id="id_4">
                                <div id="cid_4" class="form-input-wide jf-required" data-layout="full">
                                    <div summary="" class="form-address-table jsTest-addressField">
                                        <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
                                            <label for="gender" class="form-label">Department</label>
                                            <select class="form-select" id="department" name="department" required>
                                                <option disabled>Please select</option>
                                                <option value="Junior High School"
                                                    {{ $data['department'] == 'Junior High School' ? 'selected' : '' }}>
                                                    Junior High School</option>
                                                <option value="Senior High School"
                                                    {{ $data['department'] == 'Senior High School' ? 'selected' : '' }}>
                                                    Senior High School</option>
                                            </select>

                                        </div>

                                        <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
                                            <label for="schoolYear" class="form-label">Last School Year Attended</label>
                                            <select class="form-select" id="lastschoolyear" name="lastschoolyear" required>
                                                <option disabled selected>Please select</option>
                                                <option value="2010-2011" {{ $data['lastschoolyear'] == '2010-2011' ? 'selected' : '' }}>2010-2011</option>
                                                <option value="2011-2012" {{ $data['lastschoolyear'] == '2011-2012' ? 'selected' : '' }}>2011-2012</option>
                                                <option value="2012-2013" {{ $data['lastschoolyear'] == '2012-2013' ? 'selected' : '' }}>2012-2013</option>
                                                <option value="2013-2014" {{ $data['lastschoolyear'] == '2013-2014' ? 'selected' : '' }}>2013-2014</option>
                                                <option value="2014-2015" {{ $data['lastschoolyear'] == '2014-2015' ? 'selected' : '' }}>2014-2015</option>
                                                <option value="2015-2016" {{ $data['lastschoolyear'] == '2015-2016' ? 'selected' : '' }}>2015-2016</option>
                                                <option value="2016-2017" {{ $data['lastschoolyear'] == '2016-2017' ? 'selected' : '' }}>2016-2017</option>
                                                <option value="2017-2018" {{ $data['lastschoolyear'] == '2017-2018' ? 'selected' : '' }}>2017-2018</option>
                                                <option value="2018-2019" {{ $data['lastschoolyear'] == '2018-2019' ? 'selected' : '' }}>2018-2019</option>
                                                <option value="2019-2020" {{ $data['lastschoolyear'] == '2019-2020' ? 'selected' : '' }}>2019-2020</option>
                                                <option value="2020-2021" {{ $data['lastschoolyear'] == '2020-2021' ? 'selected' : '' }}>2020-2021</option>
                                                <option value="2021-2022" {{ $data['lastschoolyear'] == '2021-2022' ? 'selected' : '' }}>2021-2022</option>
                                                <option value="2022-2023" {{ $data['lastschoolyear'] == '2022-2023' ? 'selected' : '' }}>2022-2023</option>
                                            </select>
                                        </div>
                                    </div>
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
                                                data-blot-id="shorttext-1"><input readonly=""
                                                    value="{{ $data['requestorname'] }}" type="text"
                                                    class="form-textbox " name="requestorname" id="17_shorttext-1"
                                                    required /></span></p>
                                    </div>
                                </div>
                            </li>

                            <li class="form-line" data-type="control_inline" id="id_17">
                                <div id="cid_17" class="form-input-wide" data-layout="full">
                                    <div id="FITB_17" class="FITB formRender">
                                        <span data-type="textbox" data-grouptype="control_textbox" class="FITB-inptCont"
                                            data-blot-id="shorttext-1"><input readonly=""
                                                value="{{ $data['request'] }}" type="text" class="form-textbox "
                                                name="requestorname" id="17_shorttext-1" required /></span>
                                    </div>
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
                            <li class="form-line jf-" data-type="control_textarea" id="id_32"><label
                                    class="form-label form-label-top form-label-auto" id="label_32" for="input_32"
                                    aria-hidden="false"> Remarks </label>
                                <div id="cid_32" class="form-input-wide jf-" data-layout="full">
                                    <textarea readonly="" id="input_32"  maxlength="500" class="form-textarea validate[]"
                                        name="purpose" style="width:648px;height:163px" data-component="textarea" aria-labelledby="label_32">{{ $data['remarks'] }}</textarea>
                                </div>
                            </li>
                            <li class="form-line" data-type="control_button" id="id_2">
                                <div id="cid_2" class="form-input-wide" data-layout="full">
                                    <div data-align="auto"
                                        class="form-buttons-wrapper form-buttons-auto   jsTest-button-wrapperField"><a
                                            href="/teacher/dashboard">
                                            <button type="button" class="btn btn-primary m-1">
                                                <i class="fa-solid fa-arrow-left fa-xl m-1" style="color: #a5c5fd;"></i>
                                                <span class=" fs-4">Back</span>
                                            </button>
                                        </a></div>
                                </div>
                            </li>
                            <li style="display:none">Should be Empty: <input readonly=""type="text" name="website"
                                    value="" /></li>
                        </ul>
                    </div>
            </div>
        </div>
    </div>
@endsection
