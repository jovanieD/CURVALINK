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

                @if ($errors->any())
                    <div class=" d-flex justify-content-center">
                        <div class="alert alert-danger w-75">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif
                
                <form class="jotform-form" action="/request/goodmoral" method="POST" autocomplete="on">
                    @csrf
                    <div role="main" class="form-all">
                        <ul class="form-section page-section">
                            <li class="form-line" data-type="control_image" id="id_4">
                                <div id="cid_4" class="form-input-wide" data-layout="full">
                                    <div style="text-align:center"><img alt="Image-4" loading="lazy" class="form-image"
                                            style="border:0"
                                            src="https://www.jotform.com/uploads/Dasian/form_files/header.655ab28defafd5.11446063.png"
                                            tabindex="0" height="176px" width="659px" data-component="image"
                                            role="presentation" /></div>
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
                                    class="form-label form-label-top form-label-auto" aria-hidden="false"> LRN Number :<span
                                        class="form-required">*</span> </label>
                                <div id="cid_8" class="form-input-wide jf-required" data-layout="half"> <input
                                        type="text" name="idnumber"
                                        oninput="this.value = this.value.replace(/[^0-9]/g, '');"
                                        class="form-textbox validate[required, Email]" style="width:310px" size="310"
                                        required="" value="" /> </div>
                            </li>

                            <li class="form-line jf-required" data-type="control_address" id="id_4">
                                <div id="cid_4" class="form-input-wide jf-required" data-layout="full">
                                    <div summary="" class="form-address-table jsTest-addressField">
                                        <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
                                            <label for="gender" class="form-label">Department</label>
                                            <select class="form-select" id="department" name="department">
                                                <option disabled selected>Please select</option>
                                                <option value="Junior High School">Junior High School</option>
                                                <option value="Senior High School">Senior High School</option>
                                            </select>
                                        </div>

                                        <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
                                            <label for="schoolYear" class="form-label">Last School Year Attended</label>
                                            <select class="form-select" id="lastschoolyear" name="lastschoolyear">
                                                <option disabled selected>Please select</option>
                                                <option value="2010-2011">2010-2011</option>
                                                <option value="2011-2012">2011-2012</option>
                                                <option value="2012-2013">2012-2013</option>
                                                <option value="2013-2014">2013-2014</option>
                                                <option value="2014-2015">2014-2015</option>
                                                <option value="2015-2016">2015-2016</option>
                                                <option value="2016-2017">2016-2017</option>
                                                <option value="2017-2018">2017-2018</option>
                                                <option value="2018-2019">2018-2019</option>
                                                <option value="2019-2020">2019-2020</option>
                                                <option value="2020-2021">2020-2021</option>
                                                <option value="2021-2022">2021-2022</option>
                                                <option value="2022-2023">2022-2023</option>
                                            </select>

                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="form-line jf-required" data-type="control_fullname" id="id_9"><label
                                    class="form-label form-label-top form-label-extended form-label-auto" id="label_9"
                                    for="first_9" aria-hidden="false"> Name<span class="form-required">*</span> </label>
                                <div id="cid_9" class="form-input-wide jf-required" data-layout="full">
                                    <div data-wrapper-react="true" class="extended"><span class="form-sub-label-container"
                                            style="vertical-align:top" data-input-type="first"><input type="text"
                                                id="first_9" name="firstname" class="form-textbox validate[required]"
                                                required="" value="" /><label class="form-sub-label" for="first_9"
                                                style="min-height:13px" aria-hidden="false">First
                                                Name</label></span><span class="form-sub-label-container"
                                            style="vertical-align:top" data-input-type="middle"><input type="text"
                                                name="middlename" class="form-textbox" size="10"
                                                aria-labelledby="label_9 sublabel_9_middle" required="" /><label
                                                class="form-sub-label" for="middle_9" id="sublabel_9_middle"
                                                style="min-height:13px" aria-hidden="false">Middle
                                                Name</label></span><span class="form-sub-label-container"
                                            style="vertical-align:top" data-input-type="last"><input type="text"
                                                name="lastname" class="form-textbox validate[required]" size="15"
                                                aria-labelledby="label_9 sublabel_9_last" required=""
                                                value="" /><label class="form-sub-label" for="last_9"
                                                id="sublabel_9_last" style="min-height:13px" aria-hidden="false">Last
                                                Name</label></span></div>
                                </div>
                            </li>
                            <li class="form-line jf-required" data-type="control_radio" id="id_11"><label
                                    class="form-label form-label-top form-label-auto" id="label_11" for="input_11"
                                    aria-hidden="false"> Purpose :<span class="form-required">*</span> </label>
                                <div id="cid_11" class="form-input-wide jf-required" data-layout="full">
                                    <div class="form-single-column" role="group" aria-labelledby="label_11"
                                        data-component="radio"><span class="form-radio-item" style="clear:left"><span
                                                class="dragger-item"></span><input type="radio"
                                                aria-describedby="label_11" class="form-radio validate[required]"
                                                id="input_11_0" name="purpose" value="Transfer" required="" /><label
                                                for="input_11_0">Transfer</label></span><span class="form-radio-item"
                                            style="clear:left"><span class="dragger-item"></span><input type="radio"
                                                aria-describedby="label_11" class="form-radio validate[required]"
                                                id="input_11_1" name="purpose" value="Scholarship"
                                                required="" /><label id="label_input_11_1"
                                                for="input_11_1">Scholarship</label></span><span class="form-radio-item"d
                                            style="clear:left"><span class="dragger-item"></span><input type="radio"
                                                aria-describedby="label_11" class="form-radio validate[required]"
                                                id="input_11_2" name="purpose" value="Employment"
                                                required="" /><label id="label_input_11_2"
                                                for="input_11_2">Employment</label></span><span class="form-radio-item"
                                            style="clear:left"><span class="dragger-item"></span><input type="radio"
                                                aria-describedby="label_11" class="form-radio validate[required]"
                                                id="input_11_3" name="purpose" value="" required="" /><label
                                                id="label_input_11_3" for="input_11_3">Others</label></span></div>

                                    <input type="text" id="otherInput" name="purpose" placeholder="Enter other value"
                                        disabled>

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
                                                class="form-textbox validate[required]" data-defaultvalue=""
                                                size="10" data-component="first"
                                                aria-labelledby="label_17 sublabel_17_first" required=""
                                                value="" /><label class="form-sub-label" for="first_17"
                                                id="sublabel_17_first" style="min-height:13px" aria-hidden="false">First
                                                Name</label></span><span class="form-sub-label-container"
                                            style="vertical-align:top" data-input-type="last"><input type="text"
                                                id="last_17" name="requestorlastname"
                                                class="form-textbox validate[required]" data-defaultvalue=""
                                                size="15" data-component="last"
                                                aria-labelledby="label_17 sublabel_17_last" required=""
                                                value="" /><label class="form-sub-label" for="last_17"
                                                id="sublabel_17_last" style="min-height:13px" aria-hidden="false">Last
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
                                                        value="" /><label class="form-sub-label"
                                                        for="input_16_addr_line1" id="sublabel_16_addr_line1"
                                                        style="min-height:13px" aria-hidden="false">
                                                        Address</label></span></span></div>
                                        <div class="form-address-line-wrapper jsTest-address-line-wrapperField"><span
                                                class="form-address-line form-address-city-line jsTest-address-lineField "><span
                                                    class="form-sub-label-container" style="vertical-align:top"><input
                                                        type="text" id="input_16_city" name="requestorscity"
                                                        class="form-textbox validate[required] form-address-city"
                                                        data-defaultvalue="" data-component="city"
                                                        aria-labelledby="label_16 sublabel_16_city" required=""
                                                        value="" /><label class="form-sub-label"
                                                        for="input_16_city" id="sublabel_16_city" style="min-height:13px"
                                                        aria-hidden="false">City</label></span></span><span
                                                class="form-address-line form-address-state-line jsTest-address-lineField "><span
                                                    class="form-sub-label-container" style="vertical-align:top"><input
                                                        type="text" id="input_16_state" name="requestorsprovince"
                                                        class="form-textbox validate[required] form-address-state"
                                                        data-defaultvalue="" data-component="state"
                                                        aria-labelledby="label_16 sublabel_16_state" required=""
                                                        value="" /><label class="form-sub-label"
                                                        for="input_16_state" id="sublabel_16_state"
                                                        style="min-height:13px" aria-hidden="false">
                                                        Province</label></span></span></div>

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
