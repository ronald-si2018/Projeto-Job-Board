@extends('index_template')

@section('header')
    <link rel="stylesheet" type="text/css"href="{{URL::asset('css/style_II.css')}}" />
    <link rel="stylesheet" type="text/css"href="{{URL::asset('css/responsive2.css')}}" />

@stop


@section('titulo')
Pricing
@stop



@section('conteudo')
    <div class="jp_pricing_main_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="pricing_box1_wrapper pricing_border_box1_wrapper">
                        <div class="box1_heading_wrapper">
                            <h4>Plano Basico</h4>
                        </div>
                        <div class="price_box1_wrapper">
                            <div class="price_box1">
                                <h1>$<span>29</span></h1>
                            </div>
                        </div>
                        <div class="pricing_cont_wrapper">
                            <div class="pricing_cont">
                                <ul>
                                    <li><i class="fa fa-plus-circle"></i> &nbsp;&nbsp;5 Opções de Trabalho</li>
                                    <li><i class="fa fa-plus-circle"></i> &nbsp;&nbsp;2 Trabalhos em Destaque</li>
                                    <li><i class="fa fa-plus-circle"></i> &nbsp;&nbsp;1 Renovar Trabalho</li>
                                    <li><i class="fa fa-plus-circle"></i> &nbsp;&nbsp;10 Dias de duração</li>
                                    <li><i class="fa fa-plus-circle"></i> &nbsp;&nbsp; Alerta de Email</li>
                                </ul>
                            </div>
                        </div>
                        <div class="pricing_btn_wrapper">
                            <div class="pricing_btn1">
                                <ul>
                                    <li><a href="#"><i class="fa fa-plus-circle"></i> Iniciar </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="jp_pricing_label_wrapper">
                            <i class="fa fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="pricing_box1_wrapper pricing_border_box2_wrapper">
                        <div class="box1_heading_wrapper box2_heading_wrapper">
                            <h4>Plano Premium</h4>
                        </div>
                        <div class="price_box1_wrapper">
                            <div class="price_box2">
                                <h1>$<span>49</span></h1>
                            </div>
                        </div>
                        <div class="pricing_cont_wrapper">
                            <div class="pricing_cont">
                                <ul>
                                    <li><i class="fa fa-plus-circle"></i> &nbsp;&nbsp;5 Opções de Trabalho</li>
                                    <li><i class="fa fa-plus-circle"></i> &nbsp;&nbsp;2 Trabalhos em Destaque</li>
                                    <li><i class="fa fa-plus-circle"></i> &nbsp;&nbsp;1 Renovar Trabalho</li>
                                    <li><i class="fa fa-plus-circle"></i> &nbsp;&nbsp;10 Dias de Duração</li>
                                    <li><i class="fa fa-plus-circle"></i> &nbsp;&nbsp; Alerta de Email</li>
                                </ul>
                            </div>
                        </div>
                        <div class="pricing_btn_wrapper">
                            <div class="pricing_btn2">
                                <ul>
                                    <li><a href="#"><i class="fa fa-plus-circle"></i> Iniciar </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="jp_pricing_label_wrapper">
                            <i class="fa fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="pricing_box1_wrapper pricing_border_box3_wrapper">
                        <div class="box1_heading_wrapper box3_heading_wrapper">
                            <h4>Plano Avançado</h4>
                        </div>
                        <div class="price_box1_wrapper">
                            <div class="price_box3">
                                <h1>$<span>79</span></h1>
                            </div>
                        </div>
                        <div class="pricing_cont_wrapper">
                            <div class="pricing_cont">
                                <ul>
                                    <li><i class="fa fa-plus-circle"></i> &nbsp;&nbsp;5 Opções de Trabalho</li>
                                    <li><i class="fa fa-plus-circle"></i> &nbsp;&nbsp;2 Trabalhos em Destaque</li>
                                    <li><i class="fa fa-plus-circle"></i> &nbsp;&nbsp;1 Renovar Trabalho</li>
                                    <li><i class="fa fa-plus-circle"></i> &nbsp;&nbsp;10 Dias de Duração</li>
                                    <li><i class="fa fa-plus-circle"></i> &nbsp;&nbsp; Alerta de Email</li>
                                </ul>
                            </div>
                        </div>
                        <div class="pricing_btn_wrapper">
                            <div class="pricing_btn3">
                                <ul>
                                    <li><a href="#"><i class="fa fa-plus-circle"></i> Iniciar </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="jp_pricing_label_wrapper">
                            <i class="fa fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jp pricing Wrapper End -->
    <!-- jp pricing Info Start -->
    <div class="jp_pricing_info_main_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="jp_pricing_cont_heading">
                        <h2>Informações Adcionais :</h2>
                    </div>
                    <div class="jp_pricing_cont_wrapper">
                        <p> ADICIONAR INFORMAÇÕES CONFORME O BANCO".<br><br>



                      													</p>
                    </div>
                    <div class="jp_pricing_form_wrapper">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="jp_pricing_inputs_wrapper">
                                    <i class="fa fa-user"></i><input type="text" placeholder="Nome*">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="jp_pricing_inputs_wrapper jp_pricing_inputs2_wrapper">
                                    <i class="fa fa-envelope"></i><input type="text" placeholder="Email*">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="jp_pricing_select_wrapper">
                                    <i class="fa fa-usd first_icon"></i><select>
									<option>Selecione o Plano</option>
									<option>Selecione o Plano</option>
									<option>Selecione o Plano</option>
									<option>Selecione o Plano</option>
								</select><i class="fa fa-angle-down second_icon"></i>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="jp_pricing_form_btn_wrapper">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-plus-circle"></i>&nbsp; COMPRAR!</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
