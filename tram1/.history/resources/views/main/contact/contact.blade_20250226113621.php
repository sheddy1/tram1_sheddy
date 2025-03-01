@section('contact')

<div class="contact">
    <span class="contact_input">
        <span class="contact_input_header"></span>

        <span class="contact_input_main">
            <span class="contact_input_main_box1">
                <span class="contact_input_main_box1_input">
                    <span class="contact_input_main_box1_input_name">
                        First Name
                        <text class="contact_input_main_box1_input_name_asterik">*</text>
                    </span>

                    <span class="contact_input_main_box1_input_input">
                        <input type="text" name="first_name" placeholder="Enter your first name"
                        class="contact_input_main_box1_input_input1">
                    </span>
                </span>

                <span class="contact_input_main_box1_input">
                    <span class="contact_input_main_box1_input_name">
                        Last Name
                        <text class="contact_input_main_box1_input_name_asterik">*</text>
                    </span>

                    <span class="contact_input_main_box1_input_input">
                        <input type="text" name="first_name" placeholder="Enter your last name"
                        class="contact_input_main_box1_input_input1">
                    </span>
                </span>
            </span>

            <span class="contact_input_main_box2">
                <span class="contact_input_main_box1_input_name">
                        Email
                        <text class="contact_input_main_box1_input_name_asterik">*</text>
                    </span>

                    <span class="contact_input_main_box1_input_input">
                        <input type="text" name="first_name" placeholder="Enter Your Email Address"
                        class="contact_input_main_box1_input_input2">
                    </span>
            </span>

            <span class="contact_input_main_box2">
                <span class="contact_input_main_box1_input_name">
                    Subject
                    <text class="contact_input_main_box1_input_name_asterik">*</text>
                </span>

                <span class="contact_input_main_box1_input_input">
                    <input type="text" name="first_name" placeholder="Enter Topic You Want to Talk About"
                    class="contact_input_main_box1_input_input2">
                </span>
            </span>

            <span class="contact_input_main_box3">
                <span class="contact_input_main_box1_input_name">
                    Message
                    <text class="contact_input_main_box1_input_name_asterik">*</text>
                </span>

                <span class="contact_input_main_box1_input_input">
                    {{--  <input type="text" name="first_name" placeholder="Enter Topic You Want to Talk About"
                    class="contact_input_main_box1_input_input2">  --}}
                    <textarea name="contact" id="" placeholder="Enter Your Message"
                    class="contact_input_main_box1_input_input2">
                    </textarea>
                </span>
            </span>

            <button class="contact_input_main_button">Submit</button>
        </span>
    </span>

    <span class="contact_details">
        <span class="contact_details_header">
            Contact Us
        </span>

        <span class="contact_details_header1">
            How Can We Help?
        </span>

        <span class="contact_details_info">
            To learn more about Adim Abua consulting services
            you can send us a message, after which we would reply
            back within the next 48 hours.
        </span>

        <span class="contact_details_detail">
            <span class="contact_details_detail_icon">
                <img src="{{ asset('images/location.png') }}"
                class="contact_details_detail_icon_image" alt="location">
            </span>

            <span class="contact_details_detail_txt">
                Plot 3 Abdullwahab Folawiyo  Street 7 BGT Plaza
                by Emadab Filling Station !st Aveniuw Gwasrimpa Abuja
            </span>
        </span>

        <span class="contact_details_detail">
            <span class="contact_details_detail_icon">
                <img src="{{ asset('images/email.png') }}"
                class="contact_details_detail_icon_image" alt="location">
            </span>

            <span class="contact_details_detail_txt">
                Therightnewsmedia@gmail.com
            </span>
        </span>

        <span class="contact_details_detail"></span>

        <span class="contact_details_header1"></span>
    </span>
</div>


@endsection
