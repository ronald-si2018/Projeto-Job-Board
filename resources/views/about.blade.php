@extends('index_template')

@section('titulo')
Sobre nós
@stop

@section('header')
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/style_II.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/responsive2.css')}}" />
@stop

@section('conteudo')
   <!-- Header Wrapper End -->
	  <!-- jp Tittle Wrapper Start -->
    <div class="jp_tittle_main_wrapper">
        <div class="jp_tittle_img_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="jp_tittle_heading_wrapper">
                        <div class="jp_tittle_heading">
                            <h2>Sobre-nós</h2>
                        </div>
                        <div class="jp_tittle_breadcrumb_main_wrapper">
                            <div class="jp_tittle_breadcrumb_wrapper">
                                <ul>
                                    <li><a href="#">Home</a> <i class="fa fa-angle-right"></i></li>
                                    <li><a href="#">Pages</a> <i class="fa fa-angle-right"></i></li>
                                    <li>Sobre-nós</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jp Tittle Wrapper End -->
	<!-- aboutus_section start-->
    <div class="aboutus_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
                    <div class="about_text_wrapper">
                        <div class="section_heading section_2_heading">
                            <h2>Quem <span>somos ?</span></h2>
                        </div>
                        <p>Somos uma empresa jovem que traz em seu dna o espírito empreendedor e inovador que as corporações buscam para o seu crescimento, apostamos no desenvolvimento de alta qualidade, exercido com satistação, sensibilidade, paixão e respeito ao próximo. </p>
                        <p>Temos como missão fornecer soluções que potencialize os resultados dos clientes, utilizando como pilares principais o empreendedorismo, a inovação e criatividade.</p>
                       
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
                    <div class="about_image_wrapper">
                        <img class="img-responsive" src="http://www.sos.co.id/wp-content/uploads/2018/06/Businessman-Presenting_F71340461_S.jpg" alt="about-img">
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                    <div class="about_text_wrapper abt_2_para">
                        <div class="section_heading section_2_heading">
                            <h2>Visão<span> valores e diferenciais</span></h2>
                        </div>
                        <p>Temos como visão consolidar a marca pela efetiva contribuição para o desenvolvimento de pessoas e organizações, temos como valores a ética, empreendedorismo, inovação, desenvolvimento humano, foco no cliente, bom humor, trabalho em equipe, nossos diferenciais de Mercado compreendem conciliar a razão e a emoção para entrega de resultados significativos, a flexibilidade para customizar soluções e a atuação em total parceria com o cliente para alavancagem de seus talentos e resultados!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- aboutus_section end -->
	<!-- jp best deal Wrapper Start -->
    <div class="jp_best_deal_main_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="jp_best_deal_heading_wrapper">
                        <div class="jp_best_deal_heading">
                            <h4>Melhores ofertas</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="jp_best_deal_main_cont_wrapper">
                        <div class="jp_best_deal_icon_sec">
                            <i class="flaticon-magnifying-glass"></i>
                        </div>
                        <div class="jp_best_deal_cont_sec">
                            <h4><a href="#">Procure trabalhos</a></h4>
                            <p>Ache o trabalho que precisa</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="jp_best_deal_main_cont_wrapper">
                        <div class="jp_best_deal_icon_sec">
                            <i class="flaticon-users"></i>
                        </div>
                        <div class="jp_best_deal_cont_sec">
                            <h4><a href="#">Aplique um trabalho</a></h4>
                            <p>Cuide de seus trabalhos</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="jp_best_deal_main_cont_wrapper jp_best_deal_main_cont_wrapper2">
                        <div class="jp_best_deal_icon_sec">
                            <i class="flaticon-shield"></i>
                        </div>
                        <div class="jp_best_deal_cont_sec">
                            <h4><a href="#">Segurança dos trabalhos</a></h4>
                            <p>Opções de segurança da conta</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="jp_best_deal_main_cont_wrapper jp_best_deal_main_cont_wrapper2">
                        <div class="jp_best_deal_icon_sec">
                            <i class="flaticon-notification"></i>
                        </div>
                        <div class="jp_best_deal_cont_sec">
                            <h4><a href="#">Notificações de trabalho</a></h4>
                            <p>Notificações relacionado a trabalhos pendentes ou requisitados</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="jp_best_deal_main_cont_wrapper jp_best_deal_main_cont_wrapper2">
                        <div class="jp_best_deal_icon_sec">
                            <i class="flaticon-wallet"></i>
                        </div>
                        <div class="jp_best_deal_cont_sec">
                            <h4><a href="#">Modos de pagamento</a></h4>
                            <p>Metodos de pagamento e recebimento</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="jp_best_deal_main_cont_wrapper jp_best_deal_main_cont_wrapper2">
                        <div class="jp_best_deal_icon_sec">
                            <i class="flaticon-people"></i>
                        </div>
                        <div class="jp_best_deal_cont_sec">
                            <h4><a href="#">Support</a></h4>
                            <p>Suporte para auxiliar em caso de dúvida</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jp best deal Wrapper End -->
    <!-- jp career Wrapper Start -->
    <div class="jp_career_main_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="jp_hiring_slider_main_wrapper">
                        <div class="jp_career_slider_heading_wrapper">
                            <h2>Aconselhamento de carreira</h2>
                        </div>
                        <div class="jp_career_slider_wrapper">
                            <div class="owl-carousel owl-theme">
                                <div class="item jp_recent_main">
                                    <div class="jp_career_main_box_wrapper">
                                        <div class="jp_career_img_wrapper">
                                            <img src="{{URL::asset('images/content/car_img1.jpg')}}" alt="career_img" />
                                        </div>
                                        <div class="jp_career_cont_wrapper">
                                            <p><i class="fa fa-calendar"></i>&nbsp;&nbsp; <a href="#">20 OCT, 2017</a></p>
                                            <h3><a href="#">Secretária</a></h3>
                                            <p>Uma pessoa que se encarrega de receber e redigir a correspondência de um superior hierárquico, organizar e gerir a agenda deste e vigiar, classificar e ordenar os documentos, as pastas e os processos num escritório.</p>
                                        </div>
                                    </div>
                              
                                </div>
                                <div class="item jp_recent_main">
                                    <div class="jp_career_main_box_wrapper">
                                        <div class="jp_career_img_wrapper">
                                            <img src="{{URL::asset('images/content/car_img2.jpg')}}" alt="career_img" />
                                        </div>
                                        <div class="jp_career_cont_wrapper">
                                            <p><i class="fa fa-calendar"></i>&nbsp;&nbsp; <a href="#">20 OCT, 2017</a></p>
                                            <h3><a href="#">Professora particular</a></h3>
                                            <p>Pessoa que se dedica ao ensino de uma determinada ciência ou arte.</p>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="item jp_recent_main">
                                    <div class="jp_career_main_box_wrapper">
                                        <div class="jp_career_img_wrapper">
                                            <img src="{{URL::asset('images/content/car_img3.jpg')}}" alt="career_img" />
                                        </div>
                                        <div class="jp_career_cont_wrapper">
                                            <p><i class="fa fa-calendar"></i>&nbsp;&nbsp; <a href="#">20 OCT, 2017</a></p>
                                            <h3><a href="#">Babá</a></h3>
                                            <p>Empregadas contratadas, fixas ou não, para cuidar de crianças menores de idade em períodos de ausência dos pais ou responsáveis..</p>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop