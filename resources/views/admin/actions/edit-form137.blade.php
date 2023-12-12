@extends('layouts.teacher-dashboard')

@section('teacher')
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <div class="content-wrapper">

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
                    href="https://cdn02.jotfor.ms/themes/CSS/5e6b428acc8c4e222d1beb91.css?v=3.3.47868" />
                <link type="text/css" rel="stylesheet"
                    href="https://cdn03.jotfor.ms/css/styles/payment/payment_styles.css?3.3.47868" />
                <link type="text/css" rel="stylesheet"
                    href="https://cdn01.jotfor.ms/css/styles/payment/payment_feature.css?3.3.47868" />
                <link type="text/css" rel="stylesheet"
                    href="https://cdn02.jotfor.ms/stylebuilder/donationBox.css?v=3.3.47868">
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

                <form class="jotform-form" action="/admin_form137request/{{ $data['id'] }}/update" method="post"
                    name="form_232878061551055" id="232878061551055" accept-charset="utf-8" autocomplete="on">
                    @csrf
                    <div role="main" class="form-all">
                        <ul class="form-section page-section">
                            <li class="form-line" data-type="control_image" id="id_3">
                                <div id="cid_3" class="form-input-wide" data-layout="full">
                                    <div style="text-align:center"><img alt="Image-3" loading="lazy" class="form-image"
                                            style="border:0" src="{{ asset('images/header.png') }}" tabindex="0"
                                            height="176px" width="659px" data-component="image" role="presentation" />
                                    </div>
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
                                                data-blot-id="shorttext-1"><input type="text"
                                                    value="{{ $data['principalname'] }}" class="form-textbox "
                                                    name="principalname" id="18_shorttext-1" required="" /></span></p>
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
                            <li class="form-line jf-required" data-type="control_fullname" id="id_13"><label
                                    class="form-label form-label-top form-label-extended form-label-auto" id="label_13"
                                    for="prefix_13" aria-hidden="false"> Name<span class="form-required">*</span>
                                </label>
                                <div id="cid_13" class="form-input-wide jf-required" data-layout="full">
                                    <div data-wrapper-react="true" class="extended"><span class="form-sub-label-container"
                                            style="vertical-align:top" data-input-type="prefix"><input type="text"
                                                value="{{ $data['name'] }}" id="prefix_13" name="name"
                                                class="form-textbox" data-defaultvalue="" size="4"
                                                data-component="prefix" aria-labelledby="label_13 sublabel_13_prefix"
                                                required="" value="" /><label class="form-sub-label"
                                                for="prefix_13" id="sublabel_13_prefix" style="min-height:13px"
                                                aria-hidden="false">Name
                                                of Student/s</label></span><span class="form-sub-label-container"
                                            style="vertical-align:top" data-input-type="first"><input type="text"
                                                value="{{ $data['grade'] }}" id="first_13" name="grade"
                                                class="form-textbox validate[required]" data-defaultvalue=""
                                                size="10" data-component="first"
                                                aria-labelledby="label_13 sublabel_13_first" required=""
                                                value="" /><label class="form-sub-label" for="first_13"
                                                id="sublabel_13_first" style="min-height:13px" aria-hidden="false">Grade
                                                &amp; Section</label></span><span class="form-sub-label-container"
                                            style="vertical-align:top" data-input-type="middle"><input type="text"
                                                value="{{ $data['schoolyear'] }}" id="middle_13" name="schoolyear"
                                                class="form-textbox" data-defaultvalue="" size="10"
                                                data-component="middle" aria-labelledby="label_13 sublabel_13_middle"
                                                required="" value="" /><label class="form-sub-label"
                                                for="middle_13" id="sublabel_13_middle" style="min-height:13px"
                                                aria-hidden="false">School Year</label></span><span
                                            class="form-sub-label-container" style="vertical-align:top"
                                            data-input-type="last"><input type="text" id="last_13" name="adviser"
                                                value="{{ $data['adviser'] }}" class="form-textbox validate[required]"
                                                data-defaultvalue="" size="15" data-component="last"
                                                aria-labelledby="label_13 sublabel_13_last" required=""
                                                value="" /><label class="form-sub-label" for="last_13"
                                                id="sublabel_13_last" style="min-height:13px"
                                                aria-hidden="false">Adviser</label></span></div>
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
                            <li class="form-line jf-required" data-type="control_inline" id="id_17">
                                <div id="cid_17" class="form-input-wide jf-required" data-layout="full">
                                    <div id="FITB_17" class="FITB formRender">
                                        <p>Very truly yours,<br /> <span data-type="textbox"
                                                data-grouptype="control_textbox" class="FITB-inptCont"
                                                data-blot-id="shorttext-1"><input type="text"
                                                    value="{{ $data['requestorname'] }}"
                                                    class="form-textbox  validate[required]" name="requestorname"
                                                    id="17_shorttext-1" required /><label for="17_shorttext-1">Full
                                                    Name</label><span class="form-required">*</span></span></p>
                                    </div>
                                </div>
                            </li>
                            <li class="form-line jf-required" data-type="control_radio" id="id_23"><label
                                    class="form-label form-label-top form-label-auto" id="label_23" for="input_23"
                                    aria-hidden="false"> <span class="form-required">*</span> </label>
                                <div id="cid_23" class="form-input-wide jf-required" data-layout="full">
                                    <div class="form-single-column" role="group" aria-labelledby="label_23"
                                        data-component="radio"><span class="form-radio-item" style="clear:left"><span
                                                class="dragger-item"></span><input type="radio"
                                                aria-describedby="label_23" class="form-radio validate[required]"
                                                id="input_23_0" name="request" value="First Request" required=" "
                                                {{ $data['request'] == 'First Request' ? 'checked' : '' }} /><label
                                                id="label_input_23_0" for="input_23_0">First
                                                Request</label></span><span class="form-radio-item"
                                            style="clear:left"><span class="dragger-item"></span><input type="radio"
                                                aria-describedby="label_23" class="form-radio validate[required]"
                                                id="input_23_1" name="request" value="Second Request" required=""
                                                {{ $data['request'] == 'Second Request' ? 'checked' : 'tru' }} /><label
                                                id="label_input_23_1" for="input_23_1">Second
                                                Request</label></span><span class="form-radio-item"
                                            style="clear:left"><span class="dragger-item"></span><input type="radio"
                                                aria-describedby="label_23" class="form-radio validate[required]"
                                                id="input_23_2" name="request" value="Third Request" required=" "
                                                {{ $data['request'] == 'Third Request' ? 'checked' : '' }} /><label
                                                id="label_input_23_2" for="input_23_2">Third
                                                Request</label></span><span class="form-radio-item"
                                            style="clear:left"><span class="dragger-item"></span><input type="radio"
                                                aria-describedby="label_23" class="form-radio validate[required]"
                                                id="input_23_3" name="request" value="Urgent" required=" "
                                                {{ $data['request'] == 'Urgent' ? 'checked' : '' }} /><label
                                                id="label_input_23_3" for="input_23_3">Urgent</label></span></div>
                                </div>
                            </li>
                            <li class="form-line jf-" data-type="control_textarea" id="id_32"><label
                                    class="form-label form-label-top form-label-auto" id="label_32" for="input_32"
                                    aria-hidden="false"> Remarks </label>
                                <div id="cid_32" class="form-input-wide jf-" data-layout="full">
                                    <textarea id="input_32" maxlength="500" class="form-textarea validate[]" name="remarks"
                                        style="width:648px;height:163px" data-component="textarea" aria-labelledby="label_32">{{ $data['remarks'] }}</textarea>
                                </div>
                            </li>

                            <li class="form-line jf-required" data-type="control_dropdown" id="id_9">
                                <label class="form-label form-label-left form-label-auto" id="label_9" for="input_9"
                                    aria-hidden="false"> Change Status<span class="form-required">*</span> </label>
                                <div id="cid_9" class="form-input jf-required" data-layout="half">
                                    <select class="form-dropdown validate[required]" id="input_9" name="status"
                                        style="width:310px" data-component="dropdown" required=""
                                        aria-label="Type a question">
                                        @if ($data['status'] === 'Scheduled')
                                            <option disabled value="" selected>Please Select</option>
                                            <option value="Done">Done</option>
                                        @else
                                            <option disabled value="" selected>Please Select</option>
                                            <option value="Pending" {{ $data['status'] == 'Pending' ? 'selected' : '' }}>
                                                Pending</option>
                                            <option value="Process" {{ $data['status'] == 'Process' ? 'selected' : '' }}>
                                                Process</option>
                                            <option value="Decline" {{ $data['status'] == 'Decline' ? 'selected' : '' }}>
                                                Decline</option>
                                        @endif
                                    </select>
                                </div>
                            </li>


                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <li class="form-line" data-type="control_button" id="id_25">
                                <div id="cid_25" class="form-input-wide" data-layout="full">
                                    <hr>
                                    <div class="d-flex justify-content-center m-4">
                                        <a href="/admin/dashboard">
                                            <button type="button" class="btn btn-success m-1 text-white"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="Go Back">
                                                <i class="fa-solid fa-arrow-left fa-xl m-1"></i>
                                                <span class=" fs-4"></span>
                                            </button>
                                        </a>
                                        <button type="submit" class="btn btn-warning m-1" data-bs-toggle="modal">
                                            <i class="fa-solid fa-pen-to-square fa-xl"></i>
                                            <span class=" fs-4">Update</span>
                                        </button>
                                        {{-- @if ($data['status'] !== 'Schedule' && $data['status'] !== 'Decline') --}}
                                        <a href="/admin_requestor/{{ $data['user_id'] }}">
                                            <button type="button" class="btn btn-success m-1 text-white"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="Next">
                                                <i class="fa-solid fa-arrow-right fa-xl m-1"></i>
                                                <span class=" fs-4"></span>
                                            </button>
                                        </a>

                                        {{-- @endif --}}
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
