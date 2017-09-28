<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html lang="en">

<head>
    @include('includes.head')
    <style>
        .red{
            color:red;
        }
        .form-area
        {
            background-color: #FAFAFA;
            padding: 10px 40px 60px;
            margin: 10px 0px 60px;
            border: 1px solid GREY;
        }
    </style>

    <script>

        $(document).ready(function(){
            $('#characterLeft').text('140 characters left');
            $('#message').keydown(function () {
                var max = 140;
                var len = $(this).val().length;
                if (len >= max) {
                    $('#characterLeft').text('You have reached the limit');
                    $('#characterLeft').addClass('red');
                    $('#btnSubmit').addClass('disabled');
                }
                else {
                    var ch = max - len;
                    $('#characterLeft').text(ch + ' characters left');
                    $('#btnSubmit').removeClass('disabled');
                    $('#characterLeft').removeClass('red');
                }
            });
        });
    </script>

</head>

<body>
<header class="row">
    @include('includes.header')

</header>

<div class="section section-breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>Contact Us</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="section section-map">


        <div class="col-sm-12" style="padding:0;">
            <!-- Map -->
            <div id="contact-us-map">
                <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe>
                <br />
                <small>
                    <a href=""></a>
                </small>
                </iframe>
            </div>
            <!-- End Map -->
        </div>


    </div>

    <div class="section">
        <div class="container">
            <div class="row">
                <h3>Get in Touch with Us</h3>
                </hr>
                <div class="col-sm-6">
                    <!-- Contact Info -->
                    <p class="contact-us-details">
                        <b>Address:</b> 123 Fake Street, LN1 2ST, London, United Kingdom<br/>
                        <b>Phone:</b> +44 123 654321<br/>
                        <b>Fax:</b> +44 123 654321<br/>
                        <b>Email:</b> <a href="mailto:getintoutch@yourcompanydomain.com">getintoutch@yourcompanydomain.com</a>
                    </p>
                    <!-- End Contact Info -->
                </div>
                <div class="col-sm-6">

                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="col-md-5">
            <div class="form-area">
                <form action="{{ Route('email')}}" method="post">
                    <br >
                    <h3>Contact Form</h3>
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" type="textarea" id="message" placeholder="Message" maxlength="140" rows="7"></textarea>

                    </div>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit" id="submit" name="submit" >Submit Form</button>
                </form>
            </div>
        </div>
    </div>


@include('includes.footer')
</body>
</html>