<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<title>Senha de Atendimento ESCG</title>
	<link rel="stylesheet" href="">
	<style>
	   * {
        margin: 0;
        padding: 0;
    	}
		html,body{
	    width: 100%;
	    height:100%;
		}
		header {
		background: #3498DB;
        color: #FFFFFF;
        font-family: 'Indie Flower', cursive;
        display: table;
        height: 100%;
        width: 100%;
		}

		#t1,#t2,#t3,#t4,#t5 {
			border-width: medium;
			border-style: solid;
  			border-color: #00f;
  			text-align: center;
  			vertical-align: middle;
		}
		#t2 h1 {
			font-size: 180px;
			font-family: 
		}

		#t5 h4 {
			font-size: 60px;
			font-family: 
		}


			</style>
		
</head>
<body>

	<header>
			<div class="row ">
				<div id="t1"  style="padding-top: 5%" class="col-2">
					<h4>
						Senha Anterior	<br>
					</h4>
					<h2>
						05P <br> FUNSA
					</h2>
					<hr>
					<h4>
						Próxima Senha	<br>
					</h4>
					<h2>
						07N <br> FUNSA
					</h2>
				
				</div>	
				<div id="t2" class="col-10">
					<h4>
						SENHA <br>
					</h4>
					<h1>
						{{ $painel[0]->senha.' '.$painel[0]->tipo }} <br> {{ $painel[0]->secao }}
					</h1>
				</div>
				
			</div>
			<div class="row">
				<div id="t4" style="padding-top: 5%" class="col-3">
					<h4>Data e Hora</h4>
					<h3><?php echo date("d/m/Y", strtotime(now()));?></h3>
					<h1><SPAN ID="Clock">00:00:00</SPAN></h1>
				</div>
				<div id="t5" class="col-9">
					<h4>Atendimento: 
					@if ($painel[0]->tipo == 'P')
						Prioridade
					@else
						Normal
					@endif
					</h4>
					<h4>Seção: {{ $painel[0]->secao }}</h4>
					<h4>Militar: {{ $painel[0]->atendente }}</h4>
				</div>
			</div>
	</header>

	<SCRIPT LANGUAGE="JavaScript">
<!--
  var Elem = document.getElementById("Clock");
  function Horario(){ 
    var Hoje = new Date(); 
    var Horas = Hoje.getHours(); 
    if(Horas < 10){ 
      Horas = "0"+Horas; 
    } 
    var Minutos = Hoje.getMinutes(); 
    if(Minutos < 10){ 
      Minutos = "0"+Minutos; 
    } 
    var Segundos = Hoje.getSeconds(); 
    if(Segundos < 10){ 
      Segundos = "0"+Segundos; 
    } 
    Elem.innerHTML = Horas+":"+Minutos+":"+Segundos; 
    } 
    window.setInterval("Horario()",1000);
//-->
</SCRIPT>
	    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>