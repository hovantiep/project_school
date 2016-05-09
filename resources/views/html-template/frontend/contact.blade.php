@extends('frontend.layouts.master')
@section('slide')
@endsection
@section('content')
    <script>
        $("span.menu").click(function () {
            $(" ul.nav").slideToggle("slow", function () {
            });
        });
    </script>
    <div class="banner-middle">
        <!-- contact -->
        <div class="contact">
            <h2>Our Location</h2>

            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d6563.625586558159!2d106.23971050000003!3d10.7433263!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1svi!2s!4v1462428605054"
                        width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="mail-info-grids">
                <div class="col-md-6 mail-info-grid">
                    <h3>Contact Information</h3>

                    <p>In pharetra dui vitae odio maximus vulputate. Nul
                        am finibus dui more neque dui vitae odio maximu.
                        In pharetra dui vitae odio maximus vulputate. Null
                        finibus dui more neque.odio maximus vulputate.
                        Nulla odio maximus vulputate. Nulla odio maxi.
                    </p>
                    <h6>The Company Name agi.
                        <span>756 gt globel Place,</span>
                        CD-Road,M 07 435.
                    </h6>

                    <p>Telephone: +1 234 567 9871
                        <span>FAX: +1 234 567 9871</span>
                        E-mail: <a href="mailto:info@example.com">mail@example.com</a>
                    </p>
                </div>
                <div class="col-md-6 contact-form">
                    <form>
                        <input type="text" placeholder="Name" required="">
                        <input type="text" placeholder="Email" required="">
                        <input type="text" placeholder="Subject" required="">
                        <textarea placeholder="Message" required=""></textarea>
                        <input type="submit" value="SEND">
                    </form>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- //contact -->
    </div>
@endsection