<nav class="custom-navbar" data-spy="affix" data-offset-top="20">
    <div class="container">
        <a class="logo" href="#">{{ $configuration->brand }}</a>
        <ul class="nav">
            
            @forelse ($sections as $section)
                <li class="item">
                    <a class="link" href="#{{ $section->href }}">{{ $section->name }}</a>
                </li>
            @empty
                <li class="item">
                    <a class="link" href="#home">Home</a>
                </li>
            @endforelse
            
            <li class="item ml-md-3">
                <a target="_blank" href="{{ asset('CV_JORGE_USUGA.pdf') }}" class="btn btn-primary">VER CV</a>
            </li>
        </ul>
        <a href="javascript:void(0)" id="nav-toggle" class="hamburger hamburger--elastic">
            <div class="hamburger-box">
                <div class="hamburger-inner"></div>
            </div>
        </a>
    </div>
</nav>
