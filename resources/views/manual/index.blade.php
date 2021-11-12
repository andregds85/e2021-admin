@extends('layouts4.app')
@section('content')

<!-- topo !-->
<div class="card mb-3">
    <div class="card-body">
      <h5 class="card-title"><b>Manual para a criação de usuários  </b></h5>
      <h6 class="card-title"><b></b></h6>
        <BR>
        
    </div>
  </div>



  <!-- Passo 1 !-->
  <div class="card mb-3">
      <div class="card-body">
        <h5 class="card-title"><b>Perfil Administrador</b></h5>
        <h6 class="card-title"><b></b></h6>
          <BR>
        <p class="card-text"><b>Grupo:admin </b></p>
        <p class="card-text">Perfil:Administrador </p>
        <p class="card-text">Não Escolher a macro </p>
        <p class="card-text">Não Escolher o Hospital </p>


      </div>
    </div>



    <!-- Passo 2 !-->
    <div class="card mb-3">
        <div class="card-body">
          <h5 class="card-title"><b>Perfil Municipal</b></h5><br>
          <h6 class="card-title"><b>Grupo: Municipio</b></h6>
            <BR>
          <p class="card-text"><b>Escolher a Macro </b></p>
          <p class="card-text">Escolher o Hospital </p>
        </div>
      </div>

    <!-- Passo 3 !-->
    <div class="card mb-3">
        <div class="card-body">
          <h5 class="card-title"><b>Perfil de  Regulação</b></h5><br>
          <h6 class="card-title"><b>Grupo: Regulação</b></h6>
            <BR>
          <p class="card-text"><b>Hospital: Não selecionar </b></p>
          <p class="card-text"> Macro: Seleciona a Macro </p>
        </div>
      </div>

    <!-- Passo 4 !-->
    <div class="card mb-3">
        <div class="card-body">
          <h5 class="card-title"><b>Perfil do Municipio</b></h5>
          <h6 class="card-title"><b></b></h6>
            <BR>
          <p class="card-text"><b>Definir </b></p>
          <p class="card-text">Falta definir</p>
        </div>
      </div>

@endsection



