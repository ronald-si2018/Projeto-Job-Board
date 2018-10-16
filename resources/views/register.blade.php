@extends('index_template')

@section('header')
<link rel="stylesheet" type="text/css" href="{{URL::asset('css/style_II.css')}}" />
<link rel="stylesheet" type="text/css" href="{{URL::asset('css/responsive2.css')}}" />
@stop

@section('titulo')
Cadastre-se
@stop



@section('conteudo')

<!-- jp Tittle Wrapper Start -->
<div class="jp_tittle_main_wrapper">
	<div class="jp_tittle_img_overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="jp_tittle_heading_wrapper">
					<div class="jp_tittle_heading">
						<h2>Cadastre-se</h2>
					</div>
					<div class="jp_tittle_breadcrumb_main_wrapper">
						<div class="jp_tittle_breadcrumb_wrapper">
							<ul>
								<li><a href="#">Home</a> <i class="fa fa-angle-right"></i></li>
								<li>Cadastre-se</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- jp Tittle Wrapper End -->

<!-- jp register wrapper start -->
<div class="register_section">
	<!-- register_form_wrapper -->
	<div class="register_tab_wrapper">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div role="tabpanel">

						<!-- Nav tabs -->
						<ul id="tabOne" class="nav register-tabs">
							<li class="active"><a href="#contentOne-1" data-toggle="tab">Conta pessoal <br> <span>Pessoa física procurando um trabalhador</span></a>
							</li>
							<li><a href="#contentOne-2" data-toggle="tab">Conta empresarial<br> <span>Pessoa jurídica procurando um trabalhador</span></a>
							</li>
						</ul>

						<!-- Tab panes -->
						<div class="tab-content">
							<form id="fisica" method="post" action="{{action('UsuarioController@store')}}" accept-charset="UTF-8">
								{{ csrf_field() }}
								<div class="tab-pane fade in active register_left_form" id="contentOne-1">
									
									<div class="jp_regiter_top_heading">
										<p>Campos com * são obrigatórios </p>
									</div>
									<div class="row">
										<!--Form Group-->
										<div class="form-group col-md-6 col-sm-6 col-xs-12">
											<input type="text" name="name" id="name" value="{{old('name')}}" placeholder="Nome completo*">
										</div>
										<!--Form Group-->
										<div class="form-group col-md-6 col-sm-6 col-xs-12">
											<input type="email" name="email" id="email" value="{{old('email')}}" placeholder="Email*" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
										</div>
										<!--Form Group-->
										<div class="form-group col-md-6 col-sm-6 col-xs-12">
											<input type="password" name="password" id="password" value="{{old('password')}}" placeholder="Senha*">
										</div>
										<!--Form Group-->
										<div id="div_password" class="form-group col-md-6 col-sm-6 col-xs-12">
											<input type="password" name="password2" id="password2" value="{{old('password2')}}" placeholder="Confirmar Senha*">
											<span id='password_message'></span>
										</div>
										<div class="form-group col-md-6 col-sm-6 col-xs-12">
											<input type="text" name="date_birth" id="data" placeholder="Data Nascimento*" value={{old('date_birth')}}>
										</div>
										<div id="div_cpf" class="form-group col-md-4 col-sm-4 col-xs-12">
											<input type="text" name="cpf_cnpj" required="required" id="cpf" placeholder="CPF*" value={{old('cpf_cnpj')}}>
											<span id='cpf_message'></span>
										</div>
										<div class="form-group col-md-2 col-sm-2 col-xs-5">
											<select type="text" name="sexy" id="sexy" value="{{old('sexy')}}">
												<option selected="">Sexo*</option>
												<option value="Masculino">Masculino</option>
												<option value="Feminino">Feminino</option>
											</select>
										</div>
										<div class="form-group col-md-6 col-sm-6 col-xs-12">
											<input type="text" name="field-name" value="" placeholder="Endereço*">
										</div>
										<div class="form-group col-md-4 col-sm-4 col-xs-12">
											<input type="text" name="cep" id="cep" placeholder="Cep*">
										</div>
										<div class="form-group col-md-2 col-sm-2 col-xs-12">
											<input type="text" name="field-name" value="" placeholder="Numero*">
										</div>
										<div class="form-group col-md-6 col-sm-6 col-xs-12">
											<input type="text" name="field-name" value="" placeholder="Complemento*">
										</div>
										<div class="form-group col-md-4 col-sm-4 col-xs-12">
											<input type="text" name="field-name" value="" placeholder="Bairro*">
										</div>
										<div class="form-group col-md-2 col-sm-2 col-xs-5">

											<select type="text" name="field-name" value="">
												<option selected="">Estado*</option>
												<option value="1" >AC</option>
												<option value="2" >AL</option>
												<option value="3" >AP</option>
												<option value="4" >AM</option>
												<option value="5">BA</option>
												<option value="6" >CE</option>
												<option value="7">DF</option>
												<option value="8">ES</option>
												<option value="9">GO</option>
												<option value="10">MA</option>
												<option value="11">MT</option>
												<option value="12">MS</option>
												<option value="13">MG</option>
												<option value="14">PA</option>
												<option value="15">PB</option>
												<option value="16">PR</option>
												<option value="17">PE</option>
												<option value="18">PI</option>
												<option value="19">RJ</option>
												<option value="20">RN</option>
												<option value="21">RS</option>
												<option value="22">RO</option>
												<option value="23">RR</option>
												<option value="24">SC</option>
												<option value="25">SP</option>
												<option value="26">SE</option>
												<option value="27">TO</option>
											</select>
										</div>

										<div class="form-group col-md-6 col-sm-6 col-xs-12">

											<input type="text" name="field-name" value="" placeholder="Cidade*">

										</div>
										<div class="form-group col-md-6 col-sm-6 col-xs-12">
											<input type="text" name="phone1" id="telefone" value="{{old('phone1')}}" placeholder="Telefone*">
										</div>                                    
										<!--Form Group
										<div class="form-group col-md-6 col-sm-6 col-xs-12 custom_input">
											<input type="file" name="resume">
											<p>JPG, PNG - 300KB TAM MAX</p>
										</div>
										-->
										<div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<div class="check-box text-center">
												<input type="checkbox" name="shipping-option" id="concordo_1"> &ensp;
												<label for="concordo_1">Eu concordo com os <a href="#" class="check_box_anchr">Termos e Condições</a></label> <br>
												<span id='concordo_1_message'></span>
											</div>
										</div>
									</div>

									<div class="login_btn_wrapper register_btn_wrapper login_wrapper ">
										<a class="btn btn-primary login_btn send" href="#"> Cadastrar </a>
									</div>
									<div class="login_message">
										<p>já é um membro? <a href="login"> Entre aqui </a> </p>
									</div>
								</div>
							</form>

							<div class="tab-pane fade register_left_form" id="contentOne-2">

								<div class="jp_regiter_top_heading">
									<p>Campos com * são obrigatórios</p>
								</div>
								<div class="row clearfix">
									<!--Form Group-->
									<div class="form-group col-md-6 col-sm-6 col-xs-12">
										<input type="text" name="field-name" value="" placeholder="Seu nome*">
									</div>
									<!--Form Group-->
									<div class="form-group col-md-6 col-sm-6 col-xs-12">
										<input type="text" name="field-name" value="" placeholder="Email*">
									</div>
									<!--Form Group-->
									<div class="form-group col-md-6 col-sm-6 col-xs-12">

										<input type="password" name="field-name" value="" placeholder="senha*">
									</div>
									<!--Form Group-->
									<div class="form-group col-md-6 col-sm-6 col-xs-12">

										<input type="password" name="field-name" value="" placeholder="confirmar senha*">
									</div>

									<!--Form Group-->
									<div class="form-group col-md-6 col-sm-6 col-xs-12">

										<input type="text" name="field-name" value="" placeholder="telefone">
									</div>

									<!--Form Group-->
									<div class="form-group col-md-6 col-sm-6 col-xs-12">

										<input type="text" name="field-name" value="" placeholder="nome da empresa">

									</div>

									<!--Form Group-->
									<div class="form-group col-md-6 col-sm-6 col-xs-12">

										<input type="text" name="field-name" value="" placeholder="website">

									</div>
									<!--Form Group-->
									<div class="form-group col-md-6 col-sm-6 col-xs-12">

										<input type="text" name="field-name" value="" placeholder="Endereço">
									</div>

									<div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<div class="check-box text-center">
											<input type="checkbox" name="shipping-option" id="account-option_2"> &ensp;
											<label for="account-option_2">Eu concordo com os <a href="#" class="check_box_anchr">Termos e condições</a> governando o uso do emprego</label>
										</div>
									</div>
								</div>

								<div class="login_btn_wrapper register_btn_wrapper login_wrapper ">
									<a href="#" class="btn btn-primary login_btn"> cadastre </a>
								</div>
								<div class="login_message">
									<p>Já é um membro? <a href="#"> Entre aqui </a> </p>
								</div>

							</div>

						</div>
						<p class="btm_txt_register_form">Caso você esteja usando um computador público / compartilhado, recomendamos que você faça o logout para evitar qualquer acesso não autorizado a sua conta.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- jp register wrapper end -->
@stop

@section('rodape')

<script type="text/javascript">
	//var test = true;
	//var aux = null;
	//console.log("entrou: " + test);
	$(document).ready(function(){
		$("a.btn.btn-primary.login_btn.send").click(function(){
			if($('#concordo_1').is(":checked"))
				document.getElementById("fisica").submit();
			else
				$('#concordo_1_message').html('Você precisa aceitar os Termos e Condições').css('color', 'red','paddingLeft','0.3em');
		}); 

		function forceLower(strInput) {
			strInput.value=strInput.value.toLowerCase();
		}
	});

	$('#password2').on('keyup', function () {
		//console.log("apertou: " + test);
		if ($('#password').val() == $('#password2').val()) {
			$('#password_message').html('').css('color', 'red');
			//aux = test = $('#password_message').detach();
			//console.log("removeu: " + test);
		} else{
			//console.log("e ai? " + test);
			//$('#password2').val().length > $('#password').val().length
			//if((!test) && (aux!= null)){ 
			//	//console.log("aux: " + aux);
			//	aux.appendTo( "#div_password" );
			//	test = true;
			//}
			$('#password_message').html('As senhas devem ser iguais').css('color', 'red','paddingLeft','0.3em');
			//console.log("false: " + test);
			//test = false;
		}
	});
</script>

<script>
	$('#cpf').on('keyup', function () {
		var cpf = $('#cpf').val();
		cpf = cpf.replace(/\./g,''); //remove todos os pontos
		cpf = cpf.replace('-', '');
        if (!vercpf(cpf))
        {
            errors = "1";
            if (errors){
            	$('#cpf_message').html('CPF inválido').css('color', 'red');
            }
            document.retorno = (errors == '');
        }
    });

    function vercpf(cpf) {
        if (cpf.length != 11 ||
            cpf == "00000000000" ||
            cpf == "11111111111" ||
            cpf == "22222222222" ||
            cpf == "33333333333" ||
            cpf == "44444444444" ||
            cpf == "55555555555" ||
            cpf == "66666666666" ||
            cpf == "77777777777" ||
            cpf == "88888888888" ||
            cpf == "99999999999")
            return false;

        add = 0;

        for (i = 0; i < 9; i++)
                add += parseInt(cpf.charAt(i)) * (10 - i);
        rev = 11 - (add % 11);
        if (rev == 10 || rev == 11)
            rev = 0;
        if (rev != parseInt(cpf.charAt(9)))
            return false;
        add = 0;
                for (i = 0; i < 10; i++)
                add += parseInt(cpf.charAt(i)) * (11 - i);
        rev = 11 - (add % 11);
        if (rev == 10 || rev == 11)
            rev = 0;
        if (rev != parseInt(cpf.charAt(10)))
            return false;
        $('#cpf_message').html('').css('color', 'red');
        //alert('O CPF INFORMADO É VÁLIDO.');
        return true;
    }

</script>
@stop