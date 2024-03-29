<!-- about section -->
<section class="section pt-0" id="about">
    <!-- container -->
    <div class="container text-center">
        <!-- about wrapper -->
        <div class="about">
            <div class="about-img-holder">
                <img src="assets/imgs/man.png" class="about-img"
                    alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
            </div>
            <div class="about-caption">
                {{-- begin:section title --}}
                {!! $section?->contents[0]?->title !!}
                {{-- end:section title --}}

                {{-- begin:section subtitle --}}
                {!! $section?->contents[0]?->sub_title !!}
                {{-- end:section subtitle --}}

                {{-- begin:section body --}}
                {!! $section?->contents[0]?->body !!}
                {{-- end:section body --}}

                {{-- begin:section body --}}
                {!! $section?->contents[0]?->button !!}
                {{-- end:section body --}}

            </div>
        </div><!-- end of about wrapper -->
    </div><!-- end of container -->
</section> <!-- end of about section -->
