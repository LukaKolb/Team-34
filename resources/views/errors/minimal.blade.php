@section('main')
    <h3 class="text-center my-5">@yield('code', 'woops') | <span class="text-black-50">@yield('message','an error occured')</span></h3>
    <p class="text-center my-5">
        <a href="/" class="btn btn-outline-secondary btn-lg mr-2">
            <i class="fas fa-home mr-1"></i>home
        </a>
        <a href="#!" class="btn btn-outline-secondary btn-lg ml-2" id="back">
            <i class="fas fa-undo mr-1"></i>back
        </a>
    </p>
@endsection
@section('script_after')
    <script>
        // Go back to the previous page
        $('#back').click(function () {
            window.history.back();
        });
        // Remove the right navigation
        $('nav .ml-auto').hide(); //werkt niet?
    </script>
@endsection
