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
                    <input type="text" name="first_name" placeholder="Enter Topic You Want to Tralk About"
                    class="contact_input_main_box1_input_input2">
                </span>
            </span>

            <span class="contact_input_main_box3"></span>

            <button class="contact_input_main_button"></button>
        </span>
    </span>

    <span class="contact_details"></span>
</div>


@endsection
