@extends('layouts.template')

@section('titulo')
Lista de Militares Cadastrados no Painel de Senhas do ESCG
@endsection

@section('css')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
<!--<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

@endsection

@section('conteudo')

<div class="row" >
	<div class="col-11">
		<h4>
			LISTA DE MILITARES CADASTRADOS
		</h4>
	</div>
	<div class="col-1">
		<a href="{{ route('militar.create') }}" class="btn btn-primary">NOVO</a>
	</div>
</div>
<hr>

    <table class="table table-striped" id="militares">
        <thead>
          <center><tr>
            <th style="text-align: center;">Nº</th>
            <th style="text-align: center;">Militar</th>
            <th style="text-align: center;">Seção</th>
            <th style="text-align: center;">Tipo</th>
            <th style="text-align: center;">Data de Criação</th>
            <th style="text-align: center;">Ações</th>
          </tr></center>
        </thead>
        <tbody>
          @foreach ($militar as $mil)
            <center><tr>
              <th style="width: 5%; text-align: center;" scope="row">{{ $mil->id }}</th>
              <td style="width: 20%; text-align: center;" >{{ $mil->p_grad.' '.$mil->nome }}</td>
              <td style="width: 20%; text-align: center;" >{{ $mil->secao }}</td>
              <td style="width: 5%; text-align: center;" >
              	@if ($mil->tipo == 0)
              		ADM
              	@elseif ($mil->tipo == 1)
              		ATEND
              	@elseif ($mil->tipo == 2)
              		ADM/ATEND
              	@endif
              </td>
              <td style="width: 20%; text-align: center;">{{ date('d/m/Y H:i', strtotime($mil->created_at)) }}</td>
              <td style="width: 30%; text-align: center;" >
                <ul class="list-inline list-small">
                  <li title="Excluir">
                      <form action="{{ route('militar.destroy', ['militar' => $mil->id]) }}" onsubmit="return confirm('\nTem certeza que deseja excluir este militar?'); return false;" method="post">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i><span> Excluir</span></button>
                      </form>
                    </li>
                </ul>
              </td>
            </tr></center>
          @endforeach
        </tbody>
      </table>

<!--SEÇÕES DE CONFIGURAÇÃO-->
@section('scripts')

<script>
	$(document).ready( function () {
	    $('#militares').DataTable();
	} );
</script>

@endsection <!--termina seção de scripts-->


@endsection <!--termina seção de conteúdo-->