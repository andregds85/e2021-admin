@extends('limpo.app')
@extends('layouts4.valida')
@section('content')


<script language="JavaScript" type="text/javascript" src="../js/cidades-estados-1.4-utf8.js"></script>
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        
      
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
     
  

    <div class="container">



@if (count($errors) > 0)
  <div class="alert alert-danger">
    <strong>Ops!</strong> Houve algum problema com sua Entrada.<br><br>
    <ul>
       @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
       @endforeach
    </ul>
  </div>
@endif

<?php
$id=$_GET['id'];
echo $id;
?>




{!! Form::open(array('route' => 'users.store','method'=>'POST','class=was-validated')) !!}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nome:</strong>
            {!! Form::text('name', null, array('placeholder' => 'Nome','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Email:</strong>
            {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
        </div>
    </div>
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

    
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Grupo:(roles) </strong>
            {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple')) !!}
        </div>
    </div>
</div>



<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
                <label for="exampleInputCategoria">Hospital:(categorias_id)</label>
                <select class="form-control" name="categorias_id" id="categoria">

                <?php
                    use App\Models\Categoria;
                    $tabela = categoria::all();
                    $itensP = categoria::where('macro',$id)->get(); ?>

                ?>
                  <option value=""></option> 
                @foreach($itensP as $item)
                <option value='{{$item->id}}' >{{$item->id}}{{$item->name}}</option>
                @endforeach
                </select>
            </div>
        </div>
</div>



<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
                <label for="exampleInputCategoria">Macro</label>
                <select class="form-control" name="macro" id="categoria">

                <?php
                    use App\Models\macro;
                    $buscoMacro = macro::where('id',$id)->get(); ?>
                ?>

                @foreach($buscoMacro as $item)
                <option value='{{$item->id}}' >{{$item->id}}{{$item->nome}}</option>
                @endforeach

                </select>
            </div>
        </div>
</div>


<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
                <label for="exampleInputCategoria">Perfil</label>
                <select class="form-control" name="perfil" id="perfil">
                <option value=''>Selecione o Perfil</option>
                <option value='administrador'>Administrador</option>
                <option value='regulacao'>Regulacao</option>
                <option value='hospital'>Hospital</option>
                <option value='municipal'>Municipal</option>
                <option value='regulador'>Médico Regulador</option>
                </select>
            </div>
        </div>
</div>


<div class="row">
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>CPF:</strong>
		            <input type="text" name="cpf" class="form-control" placeholder="Entre com o cpf">
           </div>
           </div>
           </div>


           <div class="row">
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Telefone:</strong>
		            <input type="text" name="telefone" class="form-control" placeholder="Entre com o telefone">
           </div>     
           </div>
           </div>

           
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
                <label for="exampleInputCategoria">Estado</label>
                <select class="form-control" name="estado" id="estado">
                <div class="invalid-feedback">Favor Selecionar Estado</div>


                </select>
            </div>
        </div>
</div>


<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
                <label for="exampleInputCategoria">Cidade</label>
                <select class="form-control" name="cidade" id="cidade">
                <div class="invalid-feedback">Favor Selecionar Cidade</div>

                </select>
            </div>
        </div>
</div>


</div>
    <script language="JavaScript" type="text/javascript" charset="utf-8">
      new dgCidadesEstados({
        cidade: document.getElementById('cidade'),
        estado: document.getElementById('estado')
      })
    </script>


  <!-- JavaScript (Opcional) -->
  <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


<div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Cadastrar</button>
</div>



{!! Form::close() !!}

@endsection