@extends('layouts.template')

@section('titulo')
Cadastro de Militar no Painel de Senhas do ESCG
@endsection

@section('css')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

@endsection

@section('conteudo')

<div class="row" >
	<div class="col-12">
		<h4>
			CADASTRO
		</h4>
	</div>
</div>
<hr>

<div class="container-fluid" style="width: 70%">
  <form action="{{ route('militar.store') }}" method="post">
    {!! csrf_field() !!}
  <div class="row">
    <div class="col-4">
      <div class="form-group">
      <label for="p_grad">Posto/Grad</label>
      <select class="form-control" id="p_grad" name="p_grad">
        <option>Selecione</option>
        <option value="Cel">Cel</option>
        <option value="T.Cel">T.Cel</option>
        <option value="Maj">Maj</option>
        <option value="Cap">Cap</option>
        <option value="1T">1T</option>
        <option value="2T">2T</option>
        <option value="SO">SO</option>
        <option value="1S">1S</option>
        <option value="2S">2S</option>
        <option value="3S">3S</option>
        <option value="CB">CB</option>
        <option value="S1">S1</option>
        <option value="S2">S2</option>
      </select>
      </div>
    </div>

    <div class="col-4">
      <div class="form-group">
      <label for="secao">Seção</label>
      <select class="form-control" id="secao" name="secao">
        <option>Selecione</option>
        <option value="FUNSA">FUNSA</option>
        <option value="JUNTA">JUNTA</option>
        <option value="LABORATÓRIO">LABORATÓRIO</option>
        <option value="SAME">SAME</option>
      </select>
      </div>
    </div>

    <div class="col-4">
      <div class="form-group">
      <label for="tipo">Permissões</label>
      <select class="form-control" id="tipo" name="tipo">
        <option>Selecione</option>
        <option value="0">Administrador</option>
        <option value="1">Atendimento</option>
        <option value="2">Adm/Atend</option>
      </select>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-12">
      <div class="form-group">
        <label for="nome">Nome de Guerra</label>
        <input type="text" class="form-control" id="nome" name="nome">
        <small id="nome" class="form-text text-muted">Digite o nome de guerra do militar.</small>
      </div>
    </div>
  </div>

<div class="row justify-content-md-center">
  <div class="col-md-auto">
    <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-save"></i><span> Salvar</span></button>
  </div>
</div>

</form>
</div>


    

<!--SEÇÕES DE CONFIGURAÇÃO-->
@section('scripts')

<script>
	$(document).ready( function () {
	    $('#militares').DataTable();
	} );
</script>

@endsection <!--termina seção de scripts-->


@endsection <!--termina seção de conteúdo-->