@extends('index_template')
@section('header')

<link rel="stylesheet" type="text/css" href="{{URL::asset('css/style_II.css')}}" />
<link rel="stylesheet" type="text/css" href="{{URL::asset('css/responsive2.css')}}" />

@stop


@section('titulo')
Cadastre-se
@stop



@section('conteudo')

<div class="register_section">
    <!-- register_form_wrapper -->
    <div class="register_tab_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div role="tabpanel">

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane fade in active register_left_form" id="contentOne-1">

                                <div class="jp_regiter_top_heading">
                                    <p>Campos com * são obrigatórios </p>
                                </div>
                                <div class="row">
                                    <!--Form Group-->
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="field-name" value="" placeholder="Nome completo*">
                                    </div>

                                    <!--Form Group-->
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">

                                        <input type="email" name="field-name" value="" placeholder="Email*" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                                    </div>
                                    <!--Form Group-->
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">

                                        <input type="password" name="senha" id="senha" placeholder=" Senha*">
                                    </div>
                                    <!--Form Group-->
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <input type="password" name="confirmarSenha" id="confirmarSenha" placeholder="Confirmar senha*">
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="data" id="data" placeholder="Data Nascimento*">
                                    </div>
                                    <div class="form-group col-md-4 col-sm-4 col-xs-12">

                                        <input type="text" name="cpf" required="required" id="cpf" placeholder="CPF*" >
                                    </div>
                                    <div class="form-group col-md-2 col-sm-2 col-xs-5">
                                        <select type="text" name="field-name" value="">
                                            <option selected="">Sexo*</option>
                                            <option value="1">Masculino</option>
                                            <option value="2">Feminino</option>
                                        </select>

                                    </div>
                                    <!--Form Group-->
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

                                        <input type="text" name="field-name" value="" placeholder="Profissão*">

                                    </div>
                                    <!--Form Group-->

                                    <!--Form Group-->
                                    
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">

                                        <input type="text" name="field-name" id="telefone" placeholder="Telefone 1*">
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">

                                        <input type="text" name="field-name" id="telefone1" placeholder="Telefone 2">
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12 custom_input">
                                        <input type="file" name="resume">
                                        <br>
                                        <p>Envie-nos uma foto sua.</p>
                                    </div>
                                    <br>
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="check-box text-center">
                                            <input type="checkbox" name="shipping-option" id="account-option_1"> &ensp;
                                            <label for="account-option_1">Eu concordo com os <a href="#" class="check_box_anchr">Termos e Condições</a> que regem o ######</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="login_btn_wrapper register_btn_wrapper login_wrapper ">
                                    <a href="#" class="btn btn-primary login_btn onClick="validarSenha()""> Cadastrar </a>
                                </div>
                                <div class="login_message">
                                    <p>já é um membro?<a href="#"> Entre aqui </a> </p>
                                </div>
                            </div>

                            <div class="tab-pane fade register_left_form" id="contentOne-2">

                                <div class="jp_regiter_top_heading">
                                    <p>Fields with * are mandetory </p>
                                </div>
                                <div class="row clearfix">
                                    <!--Form Group-->
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="field-name" value="" placeholder="Username*">
                                    </div>
                                    <!--Form Group-->
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="field-name" value="" placeholder="Email*">
                                    </div>
                                    <!--Form Group-->
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">

                                        <input type="password" name="field-name" value="" placeholder="password*">
                                    </div>
                                    <!--Form Group-->
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">

                                        <input type="password" name="field-name" value="" placeholder="re-enter password*">
                                    </div>

                                    <!--Form Group-->
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">

                                        <input type="text" name="field-name" value="" placeholder="phone">
                                    </div>

                                    <!--Form Group-->
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">

                                        <input type="text" name="field-name" value="" placeholder="company name">

                                    </div>

                                    <!--Form Group-->
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">

                                        <input type="text" name="field-name" value="" placeholder="website">

                                    </div>
                                    <!--Form Group-->
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">

                                        <input type="text" name="field-name" value="" placeholder="address line">
                                    </div>

                                    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="check-box text-center">
                                            <input type="checkbox" name="shipping-option" id="account-option_2"> &ensp;
                                            <label for="account-option_2">Eu concordo com os <a href="#" class="check_box_anchr">Termos e condições</a> governando o uso do emprego</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="login_btn_wrapper register_btn_wrapper login_wrapper ">
                                    <a href="#" class="btn btn-primary login_btn"> register </a>
                                </div>
                                <div class="login_message">
                                    <p>Already a member? <a href="#"> Login Here </a> </p>
                                </div>

                            </div>

                        </div>
                        <p class="btm_txt_register_form">
                        Caso você esteja usando um computador público ou compartilhado, recomendamos que você faça o logout para evitar qualquer acesso não autorizado a sua conta.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop

@section('rodape')

@stop