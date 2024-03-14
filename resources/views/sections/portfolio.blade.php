<!-- portfolio section -->
<section class="section" id="portfolio">
    <div class="container text-center">
        {{-- begin:section title --}}
        {!! $section?->contents[0]?->title !!}
        {{-- end:section title --}}

        {{-- begin:section subtitle --}}
        {!! $section?->contents[0]?->sub_title !!}
        {{-- end:section subtitle --}}

        <!-- row -->
        <div class="row">
            @forelse ($section?->contents[0]->slides as $slide)
                <div class="col-md-4">
                    <a href="#" class="portfolio-card">
                        <img src="{{ asset($slide->slide_url) }}" class="{{ $slide->slide_class }}" alt="Preview proyect">
                        <span class="portfolio-card-overlay">
                            <span class="portfolio-card-caption">
                                {{-- begin:section title --}}
                                {!! $slide->slide_title !!}
                                {{-- end:section title --}}

                                {{-- begin:section subtitle --}}
                                {!! $slide->slide_description !!}
                                {{-- end:section subtitle --}}
                            </span>
                        </span>
                    </a>
                </div>
                @if ($slide->slide == 1)
                    <br>                    
                @endif
            @empty
                <p>
                    No hay contenido.
                </p>
            @endforelse
        </div>
        <!-- end of row -->

    </div><!-- end of container -->
</section> <!-- end of portfolio section -->
