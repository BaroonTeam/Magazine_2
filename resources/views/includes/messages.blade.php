@if (session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
@endif

@if (session('info'))
        <div class="alert alert-info">
            {{session('success')}}
        </div>
@endif

