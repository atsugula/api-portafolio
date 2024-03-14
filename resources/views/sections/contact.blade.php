<!-- contact section -->
<section class="section" id="contact">
    <div class="container text-center">
        {{-- begin:section title --}}
        {!! $section?->contents[0]?->title !!}
        {{-- end:section title --}}

        {{-- begin:section subtitle --}}
        {!! $section?->contents[0]?->sub_title !!}
        {{-- end:section subtitle --}}
        
        <!-- contact form -->
        {{-- begin:section body --}}
        {!! $section?->contents[0]?->body !!}
        {{-- end:section body --}}
        <!-- end of contact form -->
    </div><!-- end of container -->
</section><!-- end of contact section -->