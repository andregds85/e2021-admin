@extends('layouts4.app')
@section('content')

<?php

   $perfil=Auth::user()->perfil;
    if ($perfil=="administrador"){
    session_start();
    $_SESSION['a'] = 1;
      }else{
        echo redirect()->route('sair.index');
      
      }
?>


<div class="card mb-3">
  <div class="card-body">   
     <h5 class="card-title">Perfil:   <?php echo $perfil; ?> </h5> <br>

    <h5 class="card-title">Exportar Usuários  </h5>
    <p class="card-text">
   <a class="nav-link" href="{{ url('import_export') }}">Exportar Usuários</a>
    </p>
  </div>
</div>

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Gerenciamento de Usuários</h2>
        </div>
        <p class="card-text">
        <a class="nav-link" href="{{ url('macro') }}">Cadastrar Usuário</a>
       </p>
   </div>
 </div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif


<table class="table table-bordered">
 <tr>
   <th>x</th>

 </tr>
 @foreach ($data as $key => $user)
  <tr>
    <td>{{ ++$i }}
    {{ $user->name }}
    {{ $user->email }}
    
      @if(!empty($user->getRoleNames()))
        @foreach($user->getRoleNames() as $v)
           <label class="badge badge-success">{{ $v }}</label>
        @endforeach
      @endif
    
    
       <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Mostrar</a>
       <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Editar</a>
        {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    </td>
  </tr>
 @endforeach
</table>


<div class="d-flex justify-content-center">

<?php echo $data->render(); ?>

</div>

<p class="text-center text-primary"><small>usuários</small></p>
@endsection