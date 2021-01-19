<!-- Favicon -->
<link rel="icon" type="image/png" href="{{ url('frontend/images/logopw.png') }}" />
<!-- Bootstrap -->
<link
    rel="stylesheet"
    href="{{ url('frontend/libraries/bootstrap/css/bootstrap.css') }}"
/>
<!-- Fontawesome -->
<script
    src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.js"
    integrity="sha256-2JRzNxMJiS0aHOJjG+liqsEOuBb6++9cY4dSOyiijX4="
    crossorigin="anonymous"
></script>
<!-- Google Font -->
<link rel="preconnect" href="https://fonts.gstatic.com" />
<link
    href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&family=Roboto+Condensed:ital,wght@0,400;0,700;1,400&display=swap"
    rel="stylesheet"
/>
<!-- Slick css -->
<link
    rel="stylesheet"
    type="text/css"
    href="{{ url('frontend/libraries/slick/slick/slick.css') }}"
/>
<link
    rel="stylesheet"
    type="text/css"
    href="{{ url('frontend/libraries/slick/slick/slick-theme.css') }}"
/>
<link rel="stylesheet" href="{{ url('frontend/styles/main.css') }}" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    $(document).ready(function () {
    $("a").on("click", function (event) {
        if (this.hash !== "") {
        event.preventDefault();

        var hash = this.hash;
        $("html, body").animate(
            {
            scrollTop: $(hash).offset().top,
            },
            800,
            function () {
            window.location.hash = hash;
            }
        );
        }
    });
    });
</script>
<script>
    $(document).ready(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 50) {
        $("#back-to-top").fadeIn();
        } else {
        $("#back-to-top").fadeOut();
        }
    });
    $("#back-to-top").click(function () {
        $("body,html").animate(
        {
            scrollTop: 0,
        },
        400
        );
        return false;
    });
    });
</script>