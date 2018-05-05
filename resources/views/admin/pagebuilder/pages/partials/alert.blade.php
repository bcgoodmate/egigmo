@if (session('status'))
    <div class="alert alert-success" role="alert">
        <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
        {{ session('status') }}
    </div>
@endif