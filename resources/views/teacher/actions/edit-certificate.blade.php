@extends('layouts.teacher-dashboard')

@section('teacher')
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
                <form action="/certificaterequest/{{ $data['id'] }}/update" method="post" accept-charset="utf-8" autocomplete="on">
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

                            <li class="form-line jf-required" data-type="control_fullname" id="id_3"><label
                                    class="form-label form-label-top form-label-auto" id="label_3" for="first_3"
                                    aria-hidden="false"> Full Name </label>
                                <div id="cid_3" class="form-input-wide jf-required " data-layout="full">
                                    <div data-wrapper-react="true"><span class="form-sub-label-container"
                                            style="vertical-align:top" data-input-type="first"><input readonly=""  required=""
                                                type="text" id="first_3" name="firstname"
                                                class="form-textbox validate[]" autoComplete="section-input_3 given-name"
                                                size="10" data-component="first" value="{{ $data['firstname'] }}"
                                                aria-labelledby="label_3 sublabel_3_first" /><label class="form-sub-label"
                                                for="first_3" id="sublabel_3_first" style="min-height:13px"
                                                aria-hidden="false">First
                                                Name<span class="form-required">*</span></label></span><span
                                            class="form-sub-label-container" style="vertical-align:top"
                                            data-input-type="last"><input readonly=""  required="" type="text"
                                                value="{{ $data['lastname'] }}" id="last_3" name="lastname"
                                                class="form-textbox validate[]" autoComplete="section-input_3 family-name"
                                                size="15" placeholder="" data-component="last"
                                                aria-labelledby="label_3 sublabel_3_last" /><label class="form-sub-label"
                                                for="last_3" id="sublabel_3_last" style="min-height:13px"
                                                aria-hidden="false">Last
                                                Name<span class="form-required">*</span></label></span></div>
                                </div>
                            </li>
                            <li class="form-line jf-required " data-type="control_address" id="id_4"><label
                                    class="form-label form-label-top form-label-auto" id="label_4"
                                    for="input_4_addr_line1" aria-hidden="false"> Address<span
                                        class="form-required">*</span> </label>
                                <div id="cid_4" class="form-input-wide jf-required " data-layout="full">
                                    <div summary="" class="form-address-table jsTest-addressField">
                                        <div class="form-address-line-wrapper jsTest-address-line-wrapperField"><span
                                                class="form-address-line form-address-street-line jsTest-address-lineField"><span
                                                    class="form-sub-label-container" style="vertical-align:top"><input readonly="" 
                                                        required="" value="{{ $data['address'] }}" type="text"
                                                        id="input_4_addr_line1" name="address"
                                                        class="form-textbox validate[] form-address-line"
                                                        autoComplete="section-input_4 address-line1"
                                                        data-component="address_line_1"
                                                        aria-labelledby="label_4 sublabel_4_addr_line1" /><label
                                                        class="form-sub-label" for="input_4_addr_line1"
                                                        id="sublabel_4_addr_line1" style="min-height:13px"
                                                        aria-hidden="false">Street
                                                        Address<span class="form-required">*</span></label></span></span>
                                        </div>
                                        <div class="form-address-line-wrapper jsTest-address-line-wrapperField"><span
                                                class="form-address-line form-address-city-line jsTest-address-lineField "><span
                                                    class="form-sub-label-container" style="vertical-align:top"><input readonly="" 
                                                        required="" value="{{ $data['municipality'] }}" type="text"
                                                        id="input_4_city" name="municipality"
                                                        class="form-textbox validate[] form-address-city"
                                                        autoComplete="section-input_4 address-level2"
                                                        data-component="city"
                                                        aria-labelledby="label_4 sublabel_4_city" /><label
                                                        class="form-sub-label" for="input_4_city" id="sublabel_4_city"
                                                        style="min-height:13px" aria-hidden="false">Municipality<span
                                                            class="form-required">*</span></label></span></span><span
                                                class="form-address-line form-address-state-line jsTest-address-lineField "><span
                                                    class="form-sub-label-container" style="vertical-align:top"><input readonly="" 
                                                        required="" value="{{ $data['province'] }}" type="text"
                                                        id="input_4_state" name="province"
                                                        class="form-textbox validate[] form-address-state"
                                                        autoComplete="section-input_4 address-level1"
                                                        aria-labelledby="label_4 sublabel_4_state" /><label
                                                        class="form-sub-label" for="input_4_state" id="sublabel_4_state"
                                                        style="min-height:13px" aria-hidden="false">State /
                                                        Province<span class="form-required">*</span></label></span></span>
                                        </div>
                                        <div class="form-address-line-wrapper jsTest-address-line-wrapperField"><span
                                                class="form-address-line form-address-zip-line jsTest-address-lineField "><span
                                                    class="form-sub-label-container" style="vertical-align:top"><input readonly="" 
                                                        required="" value="{{ $data['postal'] }}" type="text"
                                                        id="input_4_postal" name="postal"
                                                        class="form-textbox validate[] form-address-postal"
                                                        autoComplete="section-input_4 postal-code" data-component="zip"
                                                        aria-labelledby="label_4 sublabel_4_postal" pattern="[0-9]{1,7}"
                                                        maxlength="4" /><label class="form-sub-label"
                                                        for="input_4_postal" id="sublabel_4_postal"
                                                        style="min-height:13px" aria-hidden="false">Postal / Zip
                                                        Code<span class="form-required">*</span></label></span></span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="form-line form-line-column form-col-1 jf-required " data-type="control_phone"
                                id="id_5"><label class="form-label form-label-top form-label-auto" id="label_5"
                                    for="input_5_full"> Phone Number <span class="form-required">*</span> </label>
                                <div id="cid_5" class="form-input-wide jf-required " data-layout="half"> <span
                                        class="form-sub-label-container" style="vertical-align:top"><input readonly=""  required=""
                                            type="tel" value="{{ $data['phonenumber'] }}" id="input_5_full"
                                            name="phonenumber" maxlength="13"
                                            class="mask-phone-number form-textbox validate[, Fill Mask]"
                                            autoComplete="section-input_5 tel" style="width:310px" data-masked="true"
                                            aria-labelledby="label_5" /></span>
                                </div>
                            </li>
                            <li class="form-line form-line-column form-col-2 jf-required " data-type="control_email"
                                id="id_6"><label class="form-label form-label-top form-label-auto" id="label_6"
                                    for="input_6" aria-hidden="false"> E-mail<span class="form-required">*</span>
                                </label>
                                <div id="cid_6" class="form-input-wide jf-required " data-layout="half"> <span
                                        class="form-sub-label-container" style="vertical-align:top"><input readonly=""  required=""
                                            type="email" id="input_6" name="email"
                                            class="form-textbox validate[, Email]" style="width:310px" size="310"
                                            value="{{ $data['email'] }}" data-component="email"
                                            aria-labelledby="label_6 sublabel_input_6" /><label class="form-sub-label"
                                            for="input_6" id="sublabel_input_6" style="min-height:13px"
                                            aria-hidden="false">example@example.com</label></span>
                                </div>
                            </li>
                            <li class="form-line jf-required " data-type="control_textarea" id="id_32"><label
                                    class="form-label form-label-top form-label-auto" id="label_32" for="input_32"
                                    aria-hidden="false"> Purpose <span class="form-required">*</span> </label>
                                <div id="cid_32" class="form-input-wide jf-required " data-layout="full">
                                    <textarea id="input_32" minlength="150" maxlength="500" class="form-textarea validate[]" name="purpose"
                                        style="width:648px;height:163px" data-component="textarea" aria-labelledby="label_32">{{ $data['purpose'] }}</textarea>
                                </div>
                            </li>
                            <li class="form-line" data-type="control_textarea" id="id_32"><label
                                    class="form-label form-label-top form-label-auto" id="label_32" for="input_32"
                                    aria-hidden="false"> Remarks </label>
                                <div id="cid_32" class="form-input-wide" data-layout="full">
                                    <textarea id="input_32" maxlength="300" class="form-textarea" name="remarks"
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
                                        <option value="Scheduled" {{ $data['status'] == 'Scheduled' ? 'selected' : '' }}>
                                            Scheduled</option>
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
                </form>

            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var phoneInput = document.getElementById('input_5_full');
            var postalInput = document.getElementById('input_4_postal');

            postalInput.addEventListener('input', function() {
                this.value = this.value.replace(/\D/g, ''); // Remove non-numeric characters
            });

            phoneInput.addEventListener('input', function() {
                this.value = this.value.replace(/\D/g, ''); // Remove non-numeric characters
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Purpose Textarea
            var purposeTextarea = document.getElementById('input_32');
            purposeTextarea.addEventListener('input', function() {
                var characterCount = this.value.length;
                var color = characterCount < 150 ? 'red' : 'green';
                this.style.color = color;
            });

            // Phone Number Input
            var phoneNumberInput = document.getElementById('input_5_full');
            phoneNumberInput.addEventListener('input', function() {
                var characterCount = this.value.length;
                var color = characterCount < 11 ? 'red' : 'green';
                this.style.color = color;
            });

            // Postal Code Input
            var postalCodeInput = document.getElementById('input_4_postal');
            postalCodeInput.addEventListener('input', function() {
                var characterCount = this.value.length;
                var color = characterCount < 4 ? 'red' : 'green';
                this.style.color = color;
            });
        });
    </script>
@endsection
