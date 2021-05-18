<script>
    window.Laravel = {!! json_encode([
        'csrfToken' => csrf_token(),
        'baseUrl' => url('/'),
        'routes' => collect(\Route::getRoutes())->mapWithKeys(function ($route) { return [$route->getName() => $route->uri()]; })
    ]) !!};
</script>
{{--  --}}
 {{-- checkung current user --}}
 @if(Auth::check()) 
    <script>
        window.User = {!! Auth::user() !!}
    </script>
@else 
    <script>
        window.User = null
    </script>
@endif

