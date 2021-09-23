@if(session('success'))
    <div class="alert alert-success flash-alert" role="alert">
        {!! session('success') !!} 
    </div>                  
@endif

@if(session('error'))
    <div class="alert alert-danger flash-alert" role="alert">
       {!! session('error') !!}
    </div>
@endif
