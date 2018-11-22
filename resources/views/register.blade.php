@extends('index_template')

@section('header')
<link rel="stylesheet" type="text/css" href="{{URL::asset('css/style_II.css')}}" />
<link rel="stylesheet" type="text/css" href="{{URL::asset('css/responsive2.css')}}" />
<link rel="stylesheet" type="text/css" href="{{URL::asset('css/util.css')}}" />
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
						<form id="fisica" method="post" action="{{action('UsuarioController@store')}}" accept-charset="UTF-8"> 
							<!-- Nav tabs -->
							<ul id="tabOne" class="nav register-tabs">
								<li class="active"><a href="#contentOne-1" data-toggle="tab">Conta pessoal <br> <span>Pessoa física procurando um trabalhador</span></a>
								</li>
								<li><a href="#contentOne-2" data-toggle="tab">Conta empresarial<br> <span>Pessoa jurídica procurando um trabalhador</span></a>
								</li>
							</ul>

							<!-- Tab panes -->
							<div class="tab-content">

								{{ csrf_field() }}
								<div class="tab-pane fade in active register_left_form" id="contentOne-1">
									
									<div class="jp_regiter_top_heading">
										<p id="p_message">Campos com * são obrigatórios </p>
									</div>
									<div class="row">
										<!--Form Group-->
										<div class="form-group col-md-6 col-sm-6 col-xs-12">
											<input type="text" name="name" id="name" value="{{old('name')}}" placeholder="Nome completo*">
											<span id='nome_message'></span>
										</div>
										<!--Form Group-->
										<div class="form-group col-md-6 col-sm-6 col-xs-12">
											<input type="email" name="email" id="email" value="{{old('email')}}" placeholder="Email*" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
											<span id='email_message'></span>
										</div>
										<!--Form Group-->
										<div class="form-group col-md-6 col-sm-6 col-xs-12">
											<input type="password" name="password" id="password" value="{{old('password')}}" placeholder="Senha*">
											<span id='password_message'></span>
										</div>
										<!--Form Group-->
										<div id="div_password" class="form-group col-md-6 col-sm-6 col-xs-12">
											<input type="password" name="password2" id="password2" value="{{old('password2')}}" placeholder="Confirmar Senha*">
											<span id='password2_message'></span>
										</div>
										<div class="form-group col-md-6 col-sm-6 col-xs-12">
											<input type="text" name="date_birth" id="data" placeholder="Data Nascimento*" value={{old('date_birth')}}>
											<span id='data_message'></span>
										</div>
										<div id="div_cpf" class="form-group col-md-4 col-sm-4 col-xs-12">
											<input type="text" name="cpf" required="required" id="cpf" placeholder="CPF*" value={{old('cpf_cnpj')}}>
											<span id='cpf_message'></span>
										</div>
										<div class="form-group col-md-2 col-sm-2 col-xs-5">
											<select type="text" name="sexy" id="sexy" value="{{old('sexy')}}">
												<option selected="">Sexo*</option>
												<option value="Masculino">Masculino</option>
												<option value="Feminino">Feminino</option>
											</select>
											<span id='sexo_message'></span>
										</div>
										<div class="form-group col-md-6 col-sm-6 col-xs-12">
											<input type="text" name="endereco" id="endereco" value="{{old('endereco')}}" placeholder="Endereço*">
											<span id='endereco_message'></span>
										</div>
										<div class="form-group col-md-4 col-sm-4 col-xs-12">
											<input type="text" name="cep" id="cep" value="{{old('cep')}}" placeholder="Cep*">
											<span id='cep_message'></span>
										</div>
										<div class="form-group col-md-2 col-sm-2 col-xs-12">
											<input type="text" name="numero" value="{{old('numero')}}" placeholder="Número">
										</div>
										<div class="form-group col-md-6 col-sm-6 col-xs-12">
											<input type="text" name="complemento" value="{{old('complemento')}}" placeholder="Complemento">
										</div>
										<div class="form-group col-md-4 col-sm-4 col-xs-12">
											<input type="text" name="bairro" id="bairro" value="{{old('bairro')}}" placeholder="Bairro*">
											<span id='bairro_message'></span>
										</div>
										<div class="form-group col-md-2 col-sm-2 col-xs-5">

											<select type="text" name="estado" id="estado" value="{{old('estado')}}">
												<option selected="">Estado*</option>
												<option value="AC" >AC</option>
												<option value="AL" >AL</option>
												<option value="AP" >AP</option>
												<option value="AM" >AM</option>
												<option value="BA">BA</option>
												<option value="CE" >CE</option>
												<option value="DF">DF</option>
												<option value="ES">ES</option>
												<option value="GO">GO</option>
												<option value="MA">MA</option>
												<option value="MT">MT</option>
												<option value="MS">MS</option>
												<option value="MG">MG</option>
												<option value="PA">PA</option>
												<option value="PB">PB</option>
												<option value="PR">PR</option>
												<option value="PE">PE</option>
												<option value="PI">PI</option>
												<option value="RJ">RJ</option>
												<option value="RN">RN</option>
												<option value="21">RS</option>
												<option value="RO">RO</option>
												<option value="RR">RR</option>
												<option value="24">SC</option>
												<option value="SP">SP</option>
												<option value="SE">SE</option>
												<option value="TO">TO</option>
											</select>
											<span id='estado_message'></span>
										</div>

										<div class="form-group col-md-6 col-sm-6 col-xs-12">
											<input type="text" name="cidade" id="cidade" value="{{old('cidade')}}" placeholder="Cidade*">
											<span id='cidade_message'></span>
										</div>
										<div class="form-group col-md-6 col-sm-6 col-xs-12">
											<input type="text" name="phone1" id="telefone" value="{{old('phone1')}}" placeholder="Telefone*">
											<span id='telefone_message'></span>
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
							<!-- </form> 

							<form id="juridica" method="post" action="{{action('UsuarioController@store')}}" accept-charset="UTF-8"> 
								{{ csrf_field() }}
							-->

							<div class="tab-pane fade register_left_form" id="contentOne-2">

								<div class="jp_regiter_top_heading">
									<p>Campos com * são obrigatórios</p>
								</div>
								<div class="row clearfix">
									<!--Form Group-->
									<div class="form-group col-md-6 col-sm-6 col-xs-12">
										<input type="text" name="name" id="name_ju" value="{{old('name')}}" placeholder="Nome da Empresa*">
										<span id='nome_message_ju'></span>
									</div>
									<!--Form Group-->
									<div class="form-group col-md-6 col-sm-6 col-xs-12">
										<input type="email" name="email" id="email_ju" value="{{old('email')}}" placeholder="Email*" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
										<span id='email_message_ju'></span>
									</div>
									<!--Form Group-->
									<div class="form-group col-md-6 col-sm-6 col-xs-12">
										<input type="password" name="password" id="password_ju" value="{{old('password')}}" placeholder="Senha*">
										<span id='password_message_ju'></span>
									</div>
									<!--Form Group-->
									<div id="div_password_ju" class="form-group col-md-6 col-sm-6 col-xs-12">
										<input type="password" name="password2" id="password2_ju" value="{{old('password2')}}" placeholder="Confirmar Senha*">
										<span id='password2_message_ju'></span>
									</div>

									<!--Form Group-->
									<div class="form-group col-md-6 col-sm-6 col-xs-12">
										<input type="text" name="phone1" id="telefone_ju" value="{{old('phone1')}}" placeholder="Telefone*">
										<span id='telefone_message_ju'></span>
									</div>

									<div id="div_cnpj" class="form-group col-md-4 col-sm-4 col-xs-12">
										<input type="text" name="cnpj" required="required" id="cnpj" placeholder="CNPJ*" value={{old('cpf_cnpj')}}>
										<span id='cnpj_message'></span>
									</div>

									<div class="form-group col-md-6 col-sm-6 col-xs-12">
										<input type="text" name="endereco" id="endereco_ju" value="{{old('endereco')}}" placeholder="Endereço*">
										<span id='endereco_message_ju'></span>
									</div>
									<div class="form-group col-md-4 col-sm-4 col-xs-12">
										<input type="text" name="cep" id="cep_ju" value="{{old('cep')}}" placeholder="Cep*">
										<span id='cep_message_ju'></span>
									</div>
									<div class="form-group col-md-2 col-sm-2 col-xs-12">
										<input type="text" name="numero" value="{{old('numero')}}" placeholder="Número">
									</div>
									<div class="form-group col-md-6 col-sm-6 col-xs-12">
										<input type="text" name="complemento" value="{{old('complemento')}}" placeholder="Complemento">
									</div>
									<div class="form-group col-md-4 col-sm-4 col-xs-12">
										<input type="text" name="bairro" id="bairro_ju" value="{{old('bairro')}}" placeholder="Bairro*">
										<span id='bairro_message'></span>
									</div>
									<div class="form-group col-md-2 col-sm-2 col-xs-5">

										<select type="text" name="estado" id="estado_ju" value="{{old('estado')}}">
											<option selected="">Estado*</option>
											<option value="AC" >AC</option>
											<option value="AL" >AL</option>
											<option value="AP" >AP</option>
											<option value="AM" >AM</option>
											<option value="BA">BA</option>
											<option value="CE" >CE</option>
											<option value="DF">DF</option>
											<option value="ES">ES</option>
											<option value="GO">GO</option>
											<option value="MA">MA</option>
											<option value="MT">MT</option>
											<option value="MS">MS</option>
											<option value="MG">MG</option>
											<option value="PA">PA</option>
											<option value="PB">PB</option>
											<option value="PR">PR</option>
											<option value="PE">PE</option>
											<option value="PI">PI</option>
											<option value="RJ">RJ</option>
											<option value="RN">RN</option>
											<option value="21">RS</option>
											<option value="RO">RO</option>
											<option value="RR">RR</option>
											<option value="24">SC</option>
											<option value="SP">SP</option>
											<option value="SE">SE</option>
											<option value="TO">TO</option>
										</select>
										<span id='estado_message_ju'></span>
									</div>

									<div class="form-group col-md-6 col-sm-6 col-xs-12">
										<input type="text" name="cidade" id="cidade_ju" value="{{old('cidade')}}" placeholder="Cidade*">
										<span id='cidade_message_ju'></span>
									</div>

									<div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<div class="check-box text-center">
											<input type="checkbox" name="shipping-option" id="concordo_2"> &ensp;
											<label for="account-option_2">Eu concordo com os <a href="#" class="check_box_anchr">Termos e condições</a></label> <br>
											<span id='concordo_2_message'></span>
										</div>
									</div>
								</div>

								<div class="login_btn_wrapper register_btn_wrapper login_wrapper ">
									<a class="btn btn-primary login_btn send ju" href="#"> Cadastrar </a>
								</div>
								<div class="login_message">
									<p>Já é um membro? <a href="#"> Entre aqui </a> </p>
								</div>

							</div>
						</form>
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