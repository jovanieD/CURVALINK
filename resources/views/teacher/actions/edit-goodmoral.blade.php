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
                <form class="jotform-form" action="/goodmoralrequest/{{ $data['id'] }}/update" method="POST" autocomplete="on">
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
                            <li id="cid_14" class="form-input-wide" data-type="control_head">
                                <div class="form-header-group  header-default">
                                    <div class="header-text httac htvam">
                                        <h2 id="header_14" class="form-header" data-component="header">Request for Good
                                            Moral</h2>
                                    </div>
                                </div>
                            </li>
                            <li class="form-line jf-required" data-type="control_email" id="id_8"><label
                                    class="form-label form-label-top form-label-auto" aria-hidden="false"> ID Number:<span
                                        class="form-required">*</span> </label>
                                <div id="cid_8" class="form-input-wide jf-required" data-layout="half"> <input
                                        type="text" name="idnumber" value="{{ $data['idnumber'] }}"
                                        oninput="this.value = this.value.replace(/[^0-9]/g, '');"
                                        class="form-textbox validate[required, Email]" style="width:310px" size="310"
                                        required="" /> </div>
                            </li>
                            <li class="form-line jf-required" data-type="control_fullname" id="id_9"><label
                                    class="form-label form-label-top form-label-extended form-label-auto" id="label_9"
                                    for="first_9" aria-hidden="false"> Name<span class="form-required">*</span> </label>
                                <div id="cid_9" class="form-input-wide jf-required" data-layout="full">
                                    <div data-wrapper-react="true" class="extended"><span class="form-sub-label-container"
                                            style="vertical-align:top" data-input-type="first"><input type="text"
                                                id="first_9" name="firstname" class="form-textbox validate[required]"
                                                required="" value="{{ $data['firstname'] }}" /><label
                                                class="form-sub-label" for="first_9" style="min-height:13px"
                                                aria-hidden="false">First
                                                Name</label></span><span class="form-sub-label-container"
                                            style="vertical-align:top" data-input-type="middle"><input
                                                value="{{ $data['middlename'] }}" type="text" name="middlename"
                                                class="form-textbox" size="10"
                                                aria-labelledby="label_9 sublabel_9_middle" required="" /><label
                                                class="form-sub-label" for="middle_9" id="sublabel_9_middle"
                                                style="min-height:13px" aria-hidden="false">Middle
                                                Name</label></span><span class="form-sub-label-container"
                                            style="vertical-align:top" data-input-type="last"><input
                                                value="{{ $data['lastname'] }}" type="text" name="lastname"
                                                class="form-textbox validate[required]" size="15"
                                                aria-labelledby="label_9 sublabel_9_last" required=""
                                                value="" /><label class="form-sub-label" for="last_9"
                                                id="sublabel_9_last" style="min-height:13px" aria-hidden="false">Last
                                                Name</label></span></div>
                                </div>
                            </li>
                            <li class="form-line jf-required" data-type="control_radio" id="id_11">
                                <label class="form-label form-label-top form-label-auto" id="label_11" for="input_11"
                                    aria-hidden="false"> Purpose :<span class="form-required">*</span> </label>
                                <div id="cid_11" class="form-input-wide jf-required" data-layout="full">
                                    <div class="form-single-column" role="group" aria-labelledby="label_11"
                                        data-component="radio">
                                        <span class="form-radio-item" style="clear:left">
                                            <span class="dragger-item"></span>
                                            <input type="radio" {{ $data['purpose'] == 'Transfer' ? 'checked' : '' }}
                                                aria-describedby="label_11" class="form-radio validate[required]"
                                                id="input_11_0" name="purpose" value="Transfer" required="" />
                                            <label for="input_11_0">Transfer</label>
                                        </span>
                                        <span class="form-radio-item" style="clear:left">
                                            <span class="dragger-item"></span>
                                            <input type="radio" {{ $data['purpose'] == 'Scholarship' ? 'checked' : '' }}
                                                aria-describedby="label_11" class="form-radio validate[required]"
                                                id="input_11_1" name="purpose" value="Scholarship" required="" />
                                            <label id="label_input_11_1" for="input_11_1">Scholarship</label>
                                        </span>
                                        <span class="form-radio-item" style="clear:left">
                                            <span class="dragger-item"></span>
                                            <input type="radio" {{ $data['purpose'] == 'Employment' ? 'checked' : '' }}
                                                aria-describedby="label_11" class="form-radio validate[required]"
                                                id="input_11_2" name="purpose" value="Employment" required="" />
                                            <label id="label_input_11_2" for="input_11_2">Employment</label>
                                        </span>
                                        <span class="form-radio-item" style="clear:left">
                                            <span class="dragger-item"></span>
                                            <input type="radio"
                                                {{ $data['purpose'] != 'Transfer' && $data['purpose'] != 'Scholarship' && $data['purpose'] != 'Employment' ? 'checked' : '' }}
                                                aria-describedby="label_11" class="form-radio validate[required]"
                                                id="input_11_3" name="purpose" value="" required="" />
                                            <label id="label_input_11_3" for="input_11_3">Others</label>
                                        </span>
                                    </div>

                                    <input type="text" id="otherInput" name="purpose" placeholder="Enter other value"
                                        {{ empty($data['purpose']) ? 'disabled' : '' }} value="{{ $data['purpose'] }}">
                                </div>
                            </li>

                            <li class="form-line jf-required" data-type="control_fullname" id="id_17"><label
                                    class="form-label form-label-top form-label-auto" id="label_17" for="first_17"
                                    aria-hidden="false"> Requestor's Information<span class="form-required">*</span>
                                </label>
                                <div id="cid_17" class="form-input-wide jf-required" data-layout="full">
                                    <div data-wrapper-react="true"><span class="form-sub-label-container"
                                            style="vertical-align:top" data-input-type="first"><input type="text"
                                                id="first_17" name="requestorfirstname"
                                                value="{{ $data['requestorfirstname'] }}"
                                                class="form-textbox validate[required]" data-defaultvalue=""
                                                size="10" data-component="first"
                                                aria-labelledby="label_17 sublabel_17_first" required="" /><label
                                                class="form-sub-label" for="first_17" id="sublabel_17_first"
                                                style="min-height:13px" aria-hidden="false">First
                                                Name</label></span><span class="form-sub-label-container"
                                            style="vertical-align:top" data-input-type="last"><input type="text"
                                                id="last_17" name="requestorlastname"
                                                class="form-textbox validate[required]" data-defaultvalue=""
                                                size="15" data-component="last"
                                                aria-labelledby="label_17 sublabel_17_last" required=""
                                                value="{{ $data['requestorlastname'] }}" /><label class="form-sub-label"
                                                for="last_17" id="sublabel_17_last" style="min-height:13px"
                                                aria-hidden="false">Last
                                                Name</label></span></div>
                                </div>
                            </li>
                            <li class="form-line jf-required" data-type="control_address" id="id_16"
                                data-compound-hint=",,,,Please Select,,Please Select,"><label
                                    class="form-label form-label-top form-label-auto" id="label_16"
                                    for="input_16_addr_line1" aria-hidden="false"> <span class="form-required">*</span>
                                </label>
                                <div id="cid_16" class="form-input-wide jf-required" data-layout="full">
                                    <div summary="" class="form-address-table jsTest-addressField">
                                        <div class="form-address-line-wrapper jsTest-address-line-wrapperField"><span
                                                class="form-address-line form-address-street-line jsTest-address-lineField"><span
                                                    class="form-sub-label-container" style="vertical-align:top"><input
                                                        type="text" id="input_16_addr_line1" name="requestorsaddress"
                                                        class="form-textbox validate[required] form-address-line"
                                                        data-defaultvalue="" data-component="address_line_1"
                                                        aria-labelledby="label_16 sublabel_16_addr_line1" required=""
                                                        value="{{ $data['requestorsaddress'] }}" /><label
                                                        class="form-sub-label" for="input_16_addr_line1"
                                                        id="sublabel_16_addr_line1" style="min-height:13px"
                                                        aria-hidden="false">
                                                        Address</label></span></span></div>
                                        <div class="form-address-line-wrapper jsTest-address-line-wrapperField"><span
                                                class="form-address-line form-address-city-line jsTest-address-lineField "><span
                                                    class="form-sub-label-container" style="vertical-align:top"><input
                                                        type="text" id="input_16_city" name="requestorscity"
                                                        class="form-textbox validate[required] form-address-city"
                                                        data-defaultvalue="" data-component="city"
                                                        aria-labelledby="label_16 sublabel_16_city" required=""
                                                        value="{{ $data['requestorscity'] }}" /><label
                                                        class="form-sub-label" for="input_16_city" id="sublabel_16_city"
                                                        style="min-height:13px"
                                                        aria-hidden="false">City</label></span></span><span
                                                class="form-address-line form-address-state-line jsTest-address-lineField "><span
                                                    class="form-sub-label-container" style="vertical-align:top"><input
                                                        type="text" id="input_16_state" name="requestorsprovince"
                                                        class="form-textbox validate[required] form-address-state"
                                                        data-defaultvalue="" data-component="state"
                                                        aria-labelledby="label_16 sublabel_16_state" required=""
                                                        value="{{ $data['requestorsprovince'] }}" /><label
                                                        class="form-sub-label" for="input_16_state"
                                                        id="sublabel_16_state" style="min-height:13px"
                                                        aria-hidden="false">
                                                        Province</label></span></span></div>

                                    </div>
                                </div>
                            </li>
                            
                            <li class="form-line " data-type="control_textarea" id="id_32"><label
                                class="form-label form-label-top form-label-auto" id="label_32" for="input_32"
                                aria-hidden="false"> Remarks </label>
                            <div id="cid_32" class="form-input-wide " data-layout="full">
                                <textarea id="input_32" maxlength="500" class="form-textarea" name="remarks"
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
                                    <option value="" {{ $data['status'] == '' ? 'selected' : '' }}>Please Select
                                    </option>
                                    <option value="Pending" {{ $data['status'] == 'Pending' ? 'selected' : '' }}>
                                        Pending</option>
                                    <option value="Process" {{ $data['status'] == 'Process' ? 'selected' : '' }}>
                                        Process</option>
                                    <option value="Decline" {{ $data['status'] == 'Decline' ? 'selected' : '' }}>
                                        Decline</option>
                                    {{-- <option value="Scheduled" {{ $data['status'] == 'Scheduled' ? 'selected' : '' }}>
                                        Scheduled</option> --}}
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
                                    <a href="/teacher/dashboard">
                                        <button type="button" class="btn btn-success m-1 text-white" data-bs-toggle="tooltip" data-bs-placement="top" title="Go Back">
                                            <i class="fa-solid fa-arrow-left fa-xl m-1"></i>
                                            <span class=" fs-4"></span>
                                        </button>
                                    </a>
                                    <button type="submit" class="btn btn-warning m-1" data-bs-toggle="modal">
                                        <i class="fa-solid fa-pen-to-square fa-xl"></i>
                                        <span class=" fs-4">Update</span>
                                    </button>
                                    {{-- @if ($data['status'] !== 'Schedule' && $data['status'] !== 'Decline') --}}
                                    <a href="/requestor/{{$data['user_id']}}">
                                        <button type="button" class="btn btn-success m-1 text-white" data-bs-toggle="tooltip" data-bs-placement="top" title="Next">
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

                    <script>
                        const othersRadio = document.getElementById('input_11_3');
                        const otherInput = document.getElementById('otherInput');

                        function handleRadioChange() {
                            otherInput.disabled = !othersRadio.checked;

                            if (!othersRadio.checked) {
                                otherInput.value = '';
                            }
                        }

                        const radioButtons = document.querySelectorAll('input[name="purpose"]');
                        radioButtons.forEach(function(radio) {
                            radio.addEventListener('change', handleRadioChange);
                        });

                        handleRadioChange();
                    </script>
                </form>
            </div>
        </div>
    </div>
@endsection
