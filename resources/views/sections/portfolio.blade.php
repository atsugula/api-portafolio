<!-- portfolio section -->
<section class="section" id="portfolio">
    <div class="container text-center">
        {{-- begin:section title --}}
        {!! $section?->contents[0]?->title !!}
        {{-- end:section title --}}

        {{-- begin:section subtitle --}}
        {!! $section?->contents[0]?->sub_title !!}
        {{-- end:section subtitle --}}

        @if ($section?->contents[0]?->slide != 0)
            <!-- row -->
            <div class="row">
                <div class="col-md-4">
                    <a href="#" class="portfolio-card">
                        <img src="assets/imgs/folio-1.jpg" class="portfolio-card-img"
                            alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
                        <span class="portfolio-card-overlay">
                            <span class="portfolio-card-caption">
                                <h4>Web Designing</h5>
                                    <p class="font-weight-normal">Category: Web Templates</p>
                            </span>
                        </span>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#" class="portfolio-card">
                        <img class="portfolio-card-img" src="assets/imgs/folio-2.jpg" class="img-responsive rounded"
                            alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
                        <span class="portfolio-card-overlay">
                            <span class="portfolio-card-caption">
                                <h4>Web Designing</h5>
                                    <p class="font-weight-normal">Category: Web Templates</p>
                            </span>
                        </span>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#" class="portfolio-card">
                        <img class="portfolio-card-img" src="assets/imgs/folio-3.jpg" class="img-responsive rounded"
                            alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
                        <span class="portfolio-card-overlay">
                            <span class="portfolio-card-caption">
                                <h4>Web Designing</h5>
                                    <p class="font-weight-normal">Category: Web Templates</p>
                            </span>
                        </span>
                    </a>
                </div>
            </div>
            <!-- end of row -->
        @else
            <p>
                No hay contenido.
            </p>
        @endif

    </div><!-- end of container -->
</section> <!-- end of portfolio section -->
