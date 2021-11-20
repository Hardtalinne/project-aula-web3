@if ($mensagem = Session::get('success'))
    <div class="alert alert-success">
        <strong>{{ $mensagem }}</strong>
    </div>
@endif

@if ($mensagem = Session::get('error'))
    <div class="alert alert-danger">
        <strong>{{ $mensagem }}</strong>
    </div>
@endif

@if ($mensagem = Session::get('warning'))
    <div class="alert alert-warning">
        <strong>{{ $mensagem }}</strong>
    </div>
@endif

@if ($mensagem = Session::get('info'))
    <div class="alert alert-info">
        <strong>{{ $mensagem }}</strong>
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Verifique os erros abaixo....</strong>
    </div>
@endif
