<header id="home" class="header">
    <div class="overlay"></div>
    <div class="header-content container">
        <h1 class="header-title">
            {{-- begin:section title --}}
            {!! $section?->contents[0]?->title !!}
            {{-- end:section title --}}

            {{-- begin:section subtitle --}}
            {!! $section?->contents[0]?->sub_title !!}
            {{-- end:section subtitle --}}
        </h1>
        {{-- begin:section body --}}
        {!! $section?->contents[0]?->body !!}
        {{-- end:section body --}}

        {{-- begin:section body --}}
        {!! $section?->contents[0]?->button !!}
        {{-- end:section body --}}
    </div>
</header>