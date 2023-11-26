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
                
                <style type="text/css" id="form-designer-style">
                    /* Injected CSS Code */
                    .form-label.form-label-auto {

                        display: inline-block;
                        float: left;
                        text-align: left;

                    }

                    /* Injected CSS Code */
                </style>

                <form class="jotform-form" action="/postappoinment" method="post" >
                    @csrf
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
                                    class="form-label form-label-left form-label-auto" id="requestor" for="requestor"
                                    aria-hidden="false"> Requestor </label>
                                @if (isset($data['user_id']))
                                    <?php $user = \App\Models\User::find($data['user_id']); ?>
                                    @if ($user)
                                        <div id="cid_8" class="form-input" data-layout="half"> <input type="text" readonly=""
                                                id="requestor" name="requestor" data-type="input-textbox"
                                                class="form-textbox" data-defaultvalue="" style="width:310px" size="310"
                                                data-component="textbox" aria-labelledby="requestor" value="{{ $user->firstname }} {{ $user->lastname }}" />

                                        </div>
                                    @endif
                                @endif
                            </li>
                            <li class="form-line" data-type="control_textbox" id="id_8"><label
                                    class="form-label form-label-left form-label-auto" id="label_8" for="input_8"
                                    aria-hidden="false"> Document </label>
                                <div id="cid_8" class="form-input" data-layout="half"> <input type="text" readonly=""
                                        id="input_8" name="document" data-type="input-textbox" class="form-textbox"
                                        data-defaultvalue="" style="width:310px" size="310" data-component="textbox"
                                        aria-labelledby="label_8" value="{{ $data['document'] }}" /> </div>
                            </li>
                            <li class="form-line jf-required" data-type="control_datetime" id="id_3"><label
                                    class="form-label form-label-left form-label-auto" id="label_3" for="lite_mode_3"
                                    aria-hidden="false"> Start Date<span class="form-required">*</span> </label>
                                    <div id="cid" class="form-input" data-layout="half">
                                        <div id="cid_8" data-layout="half" class="date" data-provide="datepicker"> 
                                            <input type="text" class="form-control" name="startdate" placeholder="Select a date" autocomplete="off">
                                            <div class="input-group-addon">
                                                <span class="glyphicon glyphicon-th"></span>
                                            </div>
                                        </div>
                                    </div>
                                    
                            </li>
                            <li class="form-line" data-type="control_datetime" id="id_4"><label
                                    class="form-label form-label-left form-label-auto" id="label_4" for="lite_mode_4"
                                    aria-hidden="false"> End Date </label>
                                <div id="cid4" class="form-input" data-layout="half">
                                    <div id="cid_8" data-layout="half" class="date" data-provide="datepicker"> 
                                        <input type="text" class="form-control" name="enddate" placeholder="Select a date" autocomplete="off">
                                        <div class="input-group-addon">
                                            <span class="glyphicon glyphicon-th"></span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="form-line jf-required" data-type="control_textarea" id="id_7"><label
                                    class="form-label form-label-left form-label-auto" id="label_7" for="input_7"
                                    aria-hidden="false"> Remarks<span class="form-required">*</span> </label>
                                <div id="cid_7" class="form-input jf-required" data-layout="full">
                                    <textarea id="input_7" class="form-textarea validate[required]" name="remarks" style="width:648px;height:163px"
                                        data-component="textarea" required="" aria-labelledby="label_7"></textarea>
                                </div>
                            </li>
                            <input type="hidden" name="user_id" value="{{$data['user_id']}}">
                            <input type="hidden" name="document_id" value="{{$data['id']}}">
                            <li class="form-line" data-type="control_button" id="id_2">
                                <div id="cid_2" class="form-input-wide" data-layout="full">
                                    <div data-align="auto"
                                        class="form-buttons-wrapper form-buttons-auto   jsTest-button-wrapperField"><button type="submit"
                                            class="form-submit-button form-submit-button-yellow-300 submit-button jf-form-buttons jsTest-submitField"
                                            data-component="button" data-content="">Create Schedule</button></div>
                                </div>
                            </li>
                        </ul>
                    </div>

                </form>


            </div>
        </div>
    </div>
@endsection
