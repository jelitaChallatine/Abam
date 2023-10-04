<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
        <link
            href="https://fonts.cdnfonts.com/css/raleway-5"
            rel="stylesheet"
        />
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
        />
        <link rel="stylesheet" href="{{ asset('asset/css/footer.css') }}">
        <link
            href="https://fonts.cdnfonts.com/css/raleway-5"
            rel="stylesheet"
        />
        <link
            rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        />
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"
        ></script>
    </head>

    <body>
        <div class=" h-100" id="banner-atas" >
            <section>
                @yield('konten')
            </section>
        </div>
        <section>
            @include('.content/component/footer')
        </section>
    </body>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        // JavaScript code for dynamic layout
        $(document).ready(function () {
            // Check when the carousel slides
            $("#myCarousel").on("slide.bs.carousel", function (e) {
                const itemsPerSlide = 6; // Number of items to display on slides (excluding the first)
                const itemsTotal = $(".carousel-item").length;

                const $e = $(e.relatedTarget);
                const idx = $e.index();
                const items = $(".carousel-item");

                // Calculate the number of items to show on this slide
                const visibleItems = Math.min(
                    itemsPerSlide,
                    itemsTotal - idx * itemsPerSlide
                );

                // Reset the layout of all items in this slide
                items.removeClass("active");
                for (let i = 0; i < visibleItems; i++) {
                    items.eq(idx * itemsPerSlide + i).addClass("active");
                }
            });
        });
    </script>
