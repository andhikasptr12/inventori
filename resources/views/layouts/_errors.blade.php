@if(count($errors))

<div class="alert alert-warning-alwert dismissible fade show" role="alert">
    @foreach ($errors->all() as$erorr)

    <strong>{{ $erorr }}</strong>
    <button type="button" class="close" data-dismis="alert" aria-label="close">
        <span aria-hidden="true">&times;</span>
    </button>
    @endforeach

</div>

@endif