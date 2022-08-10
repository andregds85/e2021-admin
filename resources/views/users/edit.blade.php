@extends('limpo.app')
@extends('layouts4.valida')
@section('content')


<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Alterar Senha</h2>
        </div>
      
    </div>
</div>

@if (count($errors) > 0)
  <div class="alert alert-danger">
    <strong>Ops!</strong> Houve alguns Problemas com a sua entrada<br><br>
    <ul>
       @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
       @endforeach
    </ul>
  </div>
@endif


{!! Form::model($user, ['method' => 'PATCH','route' => ['users.update', $user->id]]) !!}
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Senha:</strong>
            {!! Form::password('password', array('placeholder' => 'Senha','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Confirmar Senha:</strong>
            {!! Form::password('confirm-password', array('placeholder' => 'Confirmar Senha','class' => 'form-control')) !!}
        </div>
    </div>





    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Alterar  Senha</button>
    </div>
</div>
{!! Form::close() !!}


<p class="text-center text-primary"><small>Usuários</small></p>
@endsection


