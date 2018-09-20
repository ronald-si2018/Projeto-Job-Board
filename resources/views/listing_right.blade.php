@extends('index_template')

@section('header')
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/style_II.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/responsive2.css')}}" />
@stop

@section('titulo')
Anúncio de emprego
@stop



@section('conteudo')

<!-- jp listing sidebar Wrapper Start -->
<div class="jp_listing_sidebar_main_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="jp_listing_heading_wrapper">
                    <h2>We found <span>357</span> Matches for you.</h2>
                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="jp_listing_tabs_wrapper">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="gc_causes_select_box_wrapper">
                                    <div class="gc_causes_select_box">
                                        <select>
                                            <option>Ordenar por defeito</option>
                                            <option>Ordenar por defeito</option>
                                            <option>Ordenar por defeito</option>
                                        </select><i class="fa fa-angle-down"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="gc_causes_view_tabs_wrapper">
                                    <div class="gc_causes_view_tabs">
                                        <ul class="nav nav-pills">
                                            <li class="active"><a data-toggle="pill" href="#grid"><i class="fa fa-th-large"></i></a></li>
                                            <li><a data-toggle="pill" href="#list"><i class="fa fa-list"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                <div class="gc_causes_search_box_wrapper gc_causes_search_box_wrapper2">
                                    <div class="gc_causes_search_box">
                                        <p>Você está assistindo &nbsp;<span>01 a 20</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="tab-content">
                            <div id="grid" class="tab-pane fade in active">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
                                            <div class="jp_job_post_main_wrapper jp_job_post_grid_main_wrapper">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="jp_job_post_side_img">
                                                            <img src="{{URL::asset('images/content/job_post_img1.jpg')}}" alt="post_img" />
                                                        </div>
                                                        <div class="jp_job_post_right_cont jp_job_post_grid_right_cont">
                                                            <h4>Desenvolvedor de HTML (1 - 2 anos de experiência)</h4>
                                                            <p>Webstrot Technology Pvt. Ltd.</p>
                                                            <ul>
                                                                <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k PA.</li>
                                                                <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="jp_job_post_right_btn_wrapper jp_job_post_grid_right_btn_wrapper">
                                                            <ul>
                                                                <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                <li><a href="#">Meio período</a></li>
                                                                <li><a href="#">Aplique</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="jp_job_post_keyword_wrapper">
                                                <ul>
                                                    <li><i class="fa fa-tags"></i>Palavras-chave :</li>
                                                    <li><a href="#">Desenhista da ui,</a></li>
                                                    <li><a href="#">Desenvolvedor,</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
                                            <div class="jp_job_post_main_wrapper jp_job_post_grid_main_wrapper">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="jp_job_post_side_img">
                                                            <img src="{{URL::asset('images/content/job_post_img2.jpg')}}" alt="post_img" />
                                                        </div>
                                                        <div class="jp_job_post_right_cont jp_job_post_grid_right_cont">
                                                            <h4>Desenvolvedor de HTML (1 - 2 anos de experiência)</h4>
                                                            <p>Webstrot Technology Pvt. Ltd.</p>
                                                            <ul>
                                                                <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="jp_job_post_right_btn_wrapper jp_job_post_grid_right_btn_wrapper">
                                                            <ul>
                                                                <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                <li><a href="#">Meio período</a></li>
                                                                <li><a href="#">Aplique</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="jp_job_post_keyword_wrapper">
                                                <ul>
                                                    <li><i class="fa fa-tags"></i>Palavras-chave :</li>
                                                    <li><a href="#">Desenhista da ui,</a></li>
                                                    <li><a href="#">Desenvolvedor,</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
                                            <div class="jp_job_post_main_wrapper jp_job_post_grid_main_wrapper">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="jp_job_post_side_img">
                                                            <img src="{{URL::asset('images/content/job_post_img3.jpg')}}" alt="post_img" />
                                                        </div>
                                                        <div class="jp_job_post_right_cont jp_job_post_grid_right_cont">
                                                            <h4>Desenvolvedor de HTML (1 - 2 anos de experiência)</h4>
                                                            <p>Webstrot Technology Pvt. Ltd.</p>
                                                            <ul>
                                                                <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="jp_job_post_right_btn_wrapper jp_job_post_grid_right_btn_wrapper">
                                                            <ul>
                                                                <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                <li><a href="#">Meio período</a></li>
                                                                <li><a href="#">Aplique</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="jp_job_post_keyword_wrapper">
                                                <ul>
                                                    <li><i class="fa fa-tags"></i>Palavras-chave :</li>
                                                    <li><a href="#">Desenhista da ui,</a></li>
                                                    <li><a href="#">Desenvolvedor,</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
                                            <div class="jp_job_post_main_wrapper jp_job_post_grid_main_wrapper">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="jp_job_post_side_img">
                                                            <img src="{{URL::asset('images/content/job_post_img4.jpg')}}" alt="post_img" />
                                                        </div>
                                                        <div class="jp_job_post_right_cont jp_job_post_grid_right_cont">
                                                            <h4>Desenvolvedor de HTML (1 - 2 anos de experiência)</h4>
                                                            <p>Webstrot Technology Pvt. Ltd.</p>
                                                            <ul>
                                                                <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="jp_job_post_right_btn_wrapper jp_job_post_grid_right_btn_wrapper">
                                                            <ul>
                                                                <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                <li><a href="#">Meio período</a></li>
                                                                <li><a href="#">Aplique</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="jp_job_post_keyword_wrapper">
                                                <ul>
                                                    <li><i class="fa fa-tags"></i>Palavras-chave :</li>
                                                    <li><a href="#">Desenhista da ui,</a></li>
                                                    <li><a href="#">Desenvolvedor,</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
                                            <div class="jp_job_post_main_wrapper jp_job_post_grid_main_wrapper">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="jp_job_post_side_img">
                                                            <img src="{{URL::asset('images/content/job_post_img5.jpg')}}" alt="post_img" />
                                                        </div>
                                                        <div class="jp_job_post_right_cont jp_job_post_grid_right_cont">
                                                            <h4>Desenvolvedor de HTML (1 - 2 anos de experiência)</h4>
                                                            <p>Webstrot Technology Pvt. Ltd.</p>
                                                            <ul>
                                                                <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="jp_job_post_right_btn_wrapper jp_job_post_grid_right_btn_wrapper">
                                                            <ul>
                                                                <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                <li><a href="#">Meio período</a></li>
                                                                <li><a href="#">Aplique</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="jp_job_post_keyword_wrapper">
                                                <ul>
                                                    <li><i class="fa fa-tags"></i>Palavras-chave :</li>
                                                    <li><a href="#">desenhista da ui,</a></li>
                                                    <li><a href="#">desenvolvedor,</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
                                            <div class="jp_job_post_main_wrapper jp_job_post_grid_main_wrapper">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="jp_job_post_side_img">
                                                            <img src="{{URL::asset('images/content/job_post_img1.jpg')}}" alt="post_img" />
                                                        </div>
                                                        <div class="jp_job_post_right_cont jp_job_post_grid_right_cont">
                                                            <h4>Desenvolvedor de HTML (1 - 2 anos de experiência)</h4>
                                                            <p>Webstrot Technology Pvt. Ltd.</p>
                                                            <ul>
                                                                <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="jp_job_post_right_btn_wrapper jp_job_post_grid_right_btn_wrapper">
                                                            <ul>
                                                                <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                <li><a href="#">Meio período</a></li>
                                                                <li><a href="#">Aplique</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="jp_job_post_keyword_wrapper">
                                                <ul>
                                                    <li><i class="fa fa-tags"></i>Palavras-chave :</li>
                                                    <li><a href="#">desenhista da ui,</a></li>
                                                    <li><a href="#">desenvolvedor,</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
                                            <div class="jp_job_post_main_wrapper jp_job_post_grid_main_wrapper">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="jp_job_post_side_img">
                                                            <img src="{{URL::asset('images/content/job_post_img2.jpg')}}" alt="post_img" />
                                                        </div>
                                                        <div class="jp_job_post_right_cont jp_job_post_grid_right_cont">
                                                            <h4>Desenvolvedor de HTML (1 - 2 anos de experiência)</h4>
                                                            <p>Webstrot Technology Pvt. Ltd.</p>
                                                            <ul>
                                                                <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="jp_job_post_right_btn_wrapper jp_job_post_grid_right_btn_wrapper">
                                                            <ul>
                                                                <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                <li><a href="#">Meio período</a></li>
                                                                <li><a href="#">Aplique</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="jp_job_post_keyword_wrapper">
                                                <ul>
                                                    <li><i class="fa fa-tags"></i>Palavras-chave :</li>
                                                    <li><a href="#">desenhista da ui,</a></li>
                                                    <li><a href="#">desenvolvedor,</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
                                            <div class="jp_job_post_main_wrapper jp_job_post_grid_main_wrapper">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="jp_job_post_side_img">
                                                            <img src="{{URL::asset('images/content/job_post_img3.jpg')}}" alt="post_img" />
                                                        </div>
                                                        <div class="jp_job_post_right_cont jp_job_post_grid_right_cont">
                                                            <h4>Desenvolvedor de HTML (1 - 2 anos de experiência)</h4>
                                                            <p>Webstrot Technology Pvt. Ltd.</p>
                                                            <ul>
                                                                <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="jp_job_post_right_btn_wrapper jp_job_post_grid_right_btn_wrapper">
                                                            <ul>
                                                                <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                <li><a href="#">Meio período</a></li>
                                                                <li><a href="#">Aplique</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="jp_job_post_keyword_wrapper">
                                                <ul>
                                                    <li><i class="fa fa-tags"></i>Palavras-chave :</li>
                                                    <li><a href="#">desenhista da ui,</a></li>
                                                    <li><a href="#">desenvolvedor,</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
                                            <div class="jp_job_post_main_wrapper jp_job_post_grid_main_wrapper">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="jp_job_post_side_img">
                                                            <img src="{{URL::asset('images/content/job_post_img4.jpg')}}" alt="post_img" />
                                                        </div>
                                                        <div class="jp_job_post_right_cont jp_job_post_grid_right_cont">
                                                            <h4>Desenvolvedor de HTML (1 - 2 anos de experiência)</h4>
                                                            <p>Webstrot Technology Pvt. Ltd.</p>
                                                            <ul>
                                                                <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="jp_job_post_right_btn_wrapper jp_job_post_grid_right_btn_wrapper">
                                                            <ul>
                                                                <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                <li><a href="#">Meio período</a></li>
                                                                <li><a href="#">Aplique</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="jp_job_post_keyword_wrapper">
                                                <ul>
                                                    <li><i class="fa fa-tags"></i>Palavras-chave :</li>
                                                    <li><a href="#">desenhista da ui,</a></li>
                                                    <li><a href="#">desenvolvedor,</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
                                            <div class="jp_job_post_main_wrapper jp_job_post_grid_main_wrapper">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="jp_job_post_side_img">
                                                            <img src="{{URL::asset('images/content/job_post_img5.jpg')}}" alt="post_img" />
                                                        </div>
                                                        <div class="jp_job_post_right_cont jp_job_post_grid_right_cont">
                                                            <h4>Desenvolvedor de HTML (1 - 2 anos de experiência)</h4>
                                                            <p>Webstrot Technology Pvt. Ltd.</p>
                                                            <ul>
                                                                <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="jp_job_post_right_btn_wrapper jp_job_post_grid_right_btn_wrapper">
                                                            <ul>
                                                                <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                <li><a href="#">Meio período</a></li>
                                                                <li><a href="#">Aplique</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="jp_job_post_keyword_wrapper">
                                                <ul>
                                                    <li><i class="fa fa-tags"></i>Palavras-chave :</li>
                                                    <li><a href="#">desenhista da ui,</a></li>
                                                    <li><a href="#">desenvolvedor,</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
                                            <div class="jp_job_post_main_wrapper jp_job_post_grid_main_wrapper">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="jp_job_post_side_img">
                                                            <img src="{{URL::asset('images/content/job_post_img1.jpg')}}" alt="post_img" />
                                                        </div>
                                                        <div class="jp_job_post_right_cont jp_job_post_grid_right_cont">
                                                            <h4>Desenvolvedor de HTML (1 - 2 anos de experiência)</h4>
                                                            <p>Webstrot Technology Pvt. Ltd.</p>
                                                            <ul>
                                                                <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="jp_job_post_right_btn_wrapper jp_job_post_grid_right_btn_wrapper">
                                                            <ul>
                                                                <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                <li><a href="#">Meio período</a></li>
                                                                <li><a href="#">Aplique</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="jp_job_post_keyword_wrapper">
                                                <ul>
                                                    <li><i class="fa fa-tags"></i>Palavras-chave :</li>
                                                    <li><a href="#">desenhista da ui,</a></li>
                                                    <li><a href="#">desenvolvedor,</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
                                            <div class="jp_job_post_main_wrapper jp_job_post_grid_main_wrapper">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="jp_job_post_side_img">
                                                            <img src="{{URL::asset('images/content/job_post_img2.jpg')}}" alt="post_img" />
                                                        </div>
                                                        <div class="jp_job_post_right_cont jp_job_post_grid_right_cont">
                                                            <h4>Desenvolvedor de HTML (1 - 2 anos de experiência)</h4>
                                                            <p>Webstrot Technology Pvt. Ltd.</p>
                                                            <ul>
                                                                <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="jp_job_post_right_btn_wrapper jp_job_post_grid_right_btn_wrapper">
                                                            <ul>
                                                                <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                <li><a href="#">Meio período</a></li>
                                                                <li><a href="#">Aplique</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="jp_job_post_keyword_wrapper">
                                                <ul>
                                                    <li><i class="fa fa-tags"></i>Palavras-chave :</li>
                                                    <li><a href="#">desenhista da ui,</a></li>
                                                    <li><a href="#">desenvolvedor,</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
                                            <div class="jp_job_post_main_wrapper jp_job_post_grid_main_wrapper">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="jp_job_post_side_img">
                                                            <img src="{{URL::asset('images/content/job_post_img3.jpg')}}" alt="post_img" />
                                                        </div>
                                                        <div class="jp_job_post_right_cont jp_job_post_grid_right_cont">
                                                            <h4>Desenvolvedor de HTML (1 - 2 anos de experiência)</h4>
                                                            <p>Webstrot Technology Pvt. Ltd.</p>
                                                            <ul>
                                                                <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="jp_job_post_right_btn_wrapper jp_job_post_grid_right_btn_wrapper">
                                                            <ul>
                                                                <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                <li><a href="#">Meio período</a></li>
                                                                <li><a href="#">Aplique</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="jp_job_post_keyword_wrapper">
                                                <ul>
                                                    <li><i class="fa fa-tags"></i>Palavras-chave :</li>
                                                    <li><a href="#">Desenhista da ui,</a></li>
                                                    <li><a href="#">Desenvolvedor,</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
                                            <div class="jp_job_post_main_wrapper jp_job_post_grid_main_wrapper">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="jp_job_post_side_img">
                                                            <img src="{{URL::asset('images/content/job_post_img4.jpg')}}" alt="post_img" />
                                                        </div>
                                                        <div class="jp_job_post_right_cont jp_job_post_grid_right_cont">
                                                            <h4>Desenvolvedor de HTML (1 - 2 anos de experiência)</h4>
                                                            <p>Webstrot Technology Pvt. Ltd.</p>
                                                            <ul>
                                                                <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="jp_job_post_right_btn_wrapper jp_job_post_grid_right_btn_wrapper">
                                                            <ul>
                                                                <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                <li><a href="#">Meio período</a></li>
                                                                <li><a href="#">Aplique</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="jp_job_post_keyword_wrapper">
                                                <ul>
                                                    <li><i class="fa fa-tags"></i>Palavras-chave :</li>
                                                    <li><a href="#">Desenhista da ui,</a></li>
                                                    <li><a href="#">Desenvolvedor,</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
                                            <div class="jp_job_post_main_wrapper jp_job_post_grid_main_wrapper">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="jp_job_post_side_img">
                                                            <img src="{{URL::asset('images/content/job_post_img5.jpg')}}" alt="post_img" />
                                                        </div>
                                                        <div class="jp_job_post_right_cont jp_job_post_grid_right_cont">
                                                            <h4>Desenvolvedor de HTML (1 - 2 anos de experiência)</h4>
                                                            <p>Webstrot Technology Pvt. Ltd.</p>
                                                            <ul>
                                                                <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="jp_job_post_right_btn_wrapper jp_job_post_grid_right_btn_wrapper">
                                                            <ul>
                                                                <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                <li><a href="#">Meio período</a></li>
                                                                <li><a href="#">Aplique</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="jp_job_post_keyword_wrapper">
                                                <ul>
                                                    <li><i class="fa fa-tags"></i>Palavras-chave :</li>
                                                    <li><a href="#">Desenhista da ui,</a></li>
                                                    <li><a href="#">Desenvolvedor,</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
                                            <div class="jp_job_post_main_wrapper jp_job_post_grid_main_wrapper">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="jp_job_post_side_img">
                                                            <img src="{{URL::asset('images/content/job_post_img4.jpg')}}" alt="post_img" />
                                                        </div>
                                                        <div class="jp_job_post_right_cont jp_job_post_grid_right_cont">
                                                            <h4>Desenvolvedor de HTML (1 - 2 anos de experiência)</h4>
                                                            <p>Webstrot Technology Pvt. Ltd.</p>
                                                            <ul>
                                                                <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="jp_job_post_right_btn_wrapper jp_job_post_grid_right_btn_wrapper">
                                                            <ul>
                                                                <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                <li><a href="#">Meio período</a></li>
                                                                <li><a href="#">Aplique</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="jp_job_post_keyword_wrapper">
                                                <ul>
                                                    <li><i class="fa fa-tags"></i>Palavras-chave :</li>
                                                    <li><a href="#">Desenhista da ui,</a></li>
                                                    <li><a href="#">Desenvolvedor,</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hidden-sm hidden-xs">
                                        <div class="pager_wrapper gc_blog_pagination">
                                            <ul class="pagination">
                                                <li><a href="#">Priv.</a></li>
                                                <li><a href="#">1</a></li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                                <li class="hidden-xs"><a href="#">4</a></li>
                                                <li><a href="#">Próximo</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="list" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
                                            <div class="jp_job_post_main_wrapper">
                                                <div class="row">
                                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                        <div class="jp_job_post_side_img">
                                                            <img src="{{URL::asset('images/content/job_post_img5.jpg')}}" alt="post_img" />
                                                        </div>
                                                        <div class="jp_job_post_right_cont">
                                                            <h4>Desenvolvedor de HTML (1 - 2 anos de experiência)</h4>
                                                            <p>Webstrot Technology Pvt. Ltd.</p>
                                                            <ul>
                                                                <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                        <div class="jp_job_post_right_btn_wrapper">
                                                            <ul>
                                                                <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                <li><a href="#">Meio período</a></li>
                                                                <li><a href="#">Aplique</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="jp_job_post_keyword_wrapper">
                                                <ul>
                                                    <li><i class="fa fa-tags"></i>Palavras-chave :</li>
                                                    <li><a href="#">desenhista da ui,</a></li>
                                                    <li><a href="#">desenvolvedor,</a></li>
                                                    <li><a href="#">senior</a></li>
                                                    <li><a href="#">Empresa de TI,</a></li>
                                                    <li><a href="#">desenhar,</a></li>
                                                    <li><a href="#">Central de Atendimento</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
                                            <div class="jp_job_post_main_wrapper">
                                                <div class="row">
                                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                        <div class="jp_job_post_side_img">
                                                            <img src="{{URL::asset('images/content/job_post_img2.jpg')}}" alt="post_img" />
                                                        </div>
                                                        <div class="jp_job_post_right_cont">
                                                            <h4>Desenvolvedor de HTML (1 - 2 anos de experiência)</h4>
                                                            <p>Webstrot Technology Pvt. Ltd.</p>
                                                            <ul>
                                                                <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                        <div class="jp_job_post_right_btn_wrapper">
                                                            <ul>
                                                                <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                <li><a href="#">Meio período</a></li>
                                                                <li><a href="#">Aplique</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="jp_job_post_keyword_wrapper">
                                                <ul>
                                                    <li><i class="fa fa-tags"></i>Palavras-chave :</li>
                                                    <li><a href="#">desenhista da ui,</a></li>
                                                    <li><a href="#">desenvolvedor,</a></li>
                                                    <li><a href="#">senior</a></li>
                                                    <li><a href="#">Empresa de TI,</a></li>
                                                    <li><a href="#">desenhar,</a></li>
                                                    <li><a href="#">Central de Atendimento</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
                                            <div class="jp_job_post_main_wrapper">
                                                <div class="row">
                                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                        <div class="jp_job_post_side_img">
                                                            <img src="{{URL::asset('images/content/job_post_img3.jpg')}}" alt="post_img" />
                                                        </div>
                                                        <div class="jp_job_post_right_cont">
                                                            <h4>Desenvolvedor de HTML (1 - 2 anos de experiência)</h4>
                                                            <p>Webstrot Technology Pvt. Ltd.</p>
                                                            <ul>
                                                                <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                        <div class="jp_job_post_right_btn_wrapper">
                                                            <ul>
                                                                <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                <li><a href="#">Meio período</a></li>
                                                                <li><a href="#">Aplique</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="jp_job_post_keyword_wrapper">
                                                <ul>
                                                    <li><i class="fa fa-tags"></i>Palavras-chave :</li>
                                                    <li><a href="#">desenhista da ui,</a></li>
                                                    <li><a href="#">desenvolvedor,</a></li>
                                                    <li><a href="#">senior</a></li>
                                                    <li><a href="#">Empresa de TI,</a></li>
                                                    <li><a href="#">desenhar,</a></li>
                                                    <li><a href="#">Central de Atendimento</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
                                            <div class="jp_job_post_main_wrapper">
                                                <div class="row">
                                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                        <div class="jp_job_post_side_img">
                                                            <img src="{{URL::asset('images/content/job_post_img4.jpg')}}" alt="post_img" />
                                                        </div>
                                                        <div class="jp_job_post_right_cont">
                                                            <h4>Desenvolvedor de HTML (1 - 2 anos de experiência)</h4>
                                                            <p>Webstrot Technology Pvt. Ltd.</p>
                                                            <ul>
                                                                <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                        <div class="jp_job_post_right_btn_wrapper">
                                                            <ul>
                                                                <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                <li><a href="#">Meio período</a></li>
                                                                <li><a href="#">Aplique</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="jp_job_post_keyword_wrapper">
                                                <ul>
                                                    <li><i class="fa fa-tags"></i>Palavras-chave :</li>
                                                    <li><a href="#">desenhista da ui,</a></li>
                                                    <li><a href="#">desenvolvedor,</a></li>
                                                    <li><a href="#">senior</a></li>
                                                    <li><a href="#">Empresa de TI,</a></li>
                                                    <li><a href="#">desenhar,</a></li>
                                                    <li><a href="#">Central de Atendimento</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
                                            <div class="jp_job_post_main_wrapper">
                                                <div class="row">
                                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                        <div class="jp_job_post_side_img">
                                                            <img src="{{URL::asset('images/content/job_post_img5.jpg')}}" alt="post_img" />
                                                        </div>
                                                        <div class="jp_job_post_right_cont">
                                                            <h4>Desenvolvedor de HTML (1 - 2 anos de experiência)</h4>
                                                            <p>Webstrot Technology Pvt. Ltd.</p>
                                                            <ul>
                                                                <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                        <div class="jp_job_post_right_btn_wrapper">
                                                            <ul>
                                                                <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                <li><a href="#">Meio período</a></li>
                                                                <li><a href="#">Aplique</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="jp_job_post_keyword_wrapper">
                                                <ul>
                                                    <li><i class="fa fa-tags"></i>Palavras-chave :</li>
                                                    <li><a href="#">desenhista da ui,</a></li>
                                                    <li><a href="#">desenvolvedor,</a></li>
                                                    <li><a href="#">senior</a></li>
                                                    <li><a href="#">Empresa de TI,</a></li>
                                                    <li><a href="#">desenhar,</a></li>
                                                    <li><a href="#">Central de Atendimento</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
                                            <div class="jp_job_post_main_wrapper">
                                                <div class="row">
                                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                        <div class="jp_job_post_side_img">
                                                            <img src="{{URL::asset('images/content/job_post_img1.jpg')}}" alt="post_img" />
                                                        </div>
                                                        <div class="jp_job_post_right_cont">
                                                            <h4>Desenvolvedor de HTML (1 - 2 anos de experiência)</h4>
                                                            <p>Webstrot Technology Pvt. Ltd.</p>
                                                            <ul>
                                                                <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                        <div class="jp_job_post_right_btn_wrapper">
                                                            <ul>
                                                                <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                <li><a href="#">Meio período</a></li>
                                                                <li><a href="#">Aplique</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="jp_job_post_keyword_wrapper">
                                                <ul>
                                                    <li><i class="fa fa-tags"></i>Palavras-chave :</li>
                                                    <li><a href="#">desenhista da ui,</a></li>
                                                    <li><a href="#">desenvolvedor,</a></li>
                                                    <li><a href="#">senior</a></li>
                                                    <li><a href="#">Empresa de TI,</a></li>
                                                    <li><a href="#">desenhar,</a></li>
                                                    <li><a href="#">Central de Atendimento</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
                                            <div class="jp_job_post_main_wrapper">
                                                <div class="row">
                                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                        <div class="jp_job_post_side_img">
                                                            <img src="{{URL::asset('images/content/job_post_img2.jpg')}}" alt="post_img" />
                                                        </div>
                                                        <div class="jp_job_post_right_cont">
                                                            <h4>Desenvolvedor de HTML (1 - 2 anos de experiência)</h4>
                                                            <p>Webstrot Technology Pvt. Ltd.</p>
                                                            <ul>
                                                                <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                        <div class="jp_job_post_right_btn_wrapper">
                                                            <ul>
                                                                <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                <li><a href="#">Meio período</a></li>
                                                                <li><a href="#">Aplique</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="jp_job_post_keyword_wrapper">
                                                <ul>
                                                    <li><i class="fa fa-tags"></i>Palavras-chave :</li>
                                                    <li><a href="#">desenhista da ui,</a></li>
                                                    <li><a href="#">desenvolvedor,</a></li>
                                                    <li><a href="#">senior</a></li>
                                                    <li><a href="#">Empresa de TI,</a></li>
                                                    <li><a href="#">desenhar,</a></li>
                                                    <li><a href="#">Central de Atendimento</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
                                            <div class="jp_job_post_main_wrapper">
                                                <div class="row">
                                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                        <div class="jp_job_post_side_img">
                                                            <img src="{{URL::asset('images/content/job_post_img3.jpg')}}" alt="post_img" />
                                                        </div>
                                                        <div class="jp_job_post_right_cont">
                                                            <h4>Desenvolvedor de HTML (1 - 2 anos de experiência)</h4>
                                                            <p>Webstrot Technology Pvt. Ltd.</p>
                                                            <ul>
                                                                <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                        <div class="jp_job_post_right_btn_wrapper">
                                                            <ul>
                                                                <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                <li><a href="#">Meio período</a></li>
                                                                <li><a href="#">Aplique</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="jp_job_post_keyword_wrapper">
                                                <ul>
                                                    <li><i class="fa fa-tags"></i>Palavras-chave :</li>
                                                    <li><a href="#">desenhista da ui,</a></li>
                                                    <li><a href="#">desenvolvedor,</a></li>
                                                    <li><a href="#">senior</a></li>
                                                    <li><a href="#">Empresa de TI,</a></li>
                                                    <li><a href="#">desenhar,</a></li>
                                                    <li><a href="#">Central de Atendimento</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
                                            <div class="jp_job_post_main_wrapper">
                                                <div class="row">
                                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                        <div class="jp_job_post_side_img">
                                                            <img src="{{URL::asset('images/content/job_post_img4.jpg')}}" alt="post_img" />
                                                        </div>
                                                        <div class="jp_job_post_right_cont">
                                                            <h4>Desenvolvedor de HTML (1 - 2 anos de experiência)</h4>
                                                            <p>Webstrot Technology Pvt. Ltd.</p>
                                                            <ul>
                                                                <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                        <div class="jp_job_post_right_btn_wrapper">
                                                            <ul>
                                                                <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                <li><a href="#">Meio período</a></li>
                                                                <li><a href="#">Aplique</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="jp_job_post_keyword_wrapper">
                                                <ul>
                                                    <li><i class="fa fa-tags"></i>Palavras-chave :</li>
                                                    <li><a href="#">desenhista da ui,</a></li>
                                                    <li><a href="#">desenvolvedor,</a></li>
                                                    <li><a href="#">senior</a></li>
                                                    <li><a href="#">Empresa de TI,</a></li>
                                                    <li><a href="#">desenhar,</a></li>
                                                    <li><a href="#">Central de Atendimento</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
                                            <div class="jp_job_post_main_wrapper">
                                                <div class="row">
                                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                        <div class="jp_job_post_side_img">
                                                            <img src="{{URL::asset('images/content/job_post_img5.jpg')}}" alt="post_img" />
                                                        </div>
                                                        <div class="jp_job_post_right_cont">
                                                            <h4>Desenvolvedor de HTML (1 - 2 anos de experiência)</h4>
                                                            <p>Webstrot Technology Pvt. Ltd.</p>
                                                            <ul>
                                                                <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                                <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                        <div class="jp_job_post_right_btn_wrapper">
                                                            <ul>
                                                                <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                <li><a href="#">Meio período</a></li>
                                                                <li><a href="#">Aplique</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="jp_job_post_keyword_wrapper">
                                                <ul>
                                                    <li><i class="fa fa-tags"></i>Palavras-chave :</li>
                                                    <li><a href="#">desenhista da ui,</a></li>
                                                    <li><a href="#">desenvolvedor,</a></li>
                                                    <li><a href="#">Senior</a></li>
                                                    <li><a href="#">Empresa de TI,</a></li>
                                                    <li><a href="#">desenhar,</a></li>
                                                    <li><a href="#">Central de Atendimento</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hidden-sm hidden-xs">
                                        <div class="pager_wrapper gc_blog_pagination">
                                            <ul class="pagination">
                                                <li><a href="#">Priv.</a></li>
                                                <li><a href="#">1</a></li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                                <li class="hidden-xs"><a href="#">4</a></li>
                                                <li><a href="#">Próximo</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="jp_rightside_job_categories_wrapper">
                            <div class="jp_rightside_job_categories_heading">
                                <h4>Empregos por categoria</h4>
                            </div>
                            <div class="jp_rightside_job_categories_content">
                                <div class="handyman_sec1_wrapper">
                                    <div class="content">
                                        <div class="box">
                                            <p>
                                                <input type="checkbox" id="c101" name="cb">
                                                <label for="c101">Designer gráfico <span>(214)</span></label>

                                                <p>
                                                    <input type="checkbox" id="c102" name="cb">
                                                    <label for="c102">Engenharias <span>(514)</span></label>
                                                </p>
                                                <p>
                                                    <input type="checkbox" id="c103" name="cb">
                                                    <label for="c103">Empregos no Mainframe <span>(554)</span></label>
                                                </p>
                                                <p>
                                                    <input type="checkbox" id="c104" name="cb">
                                                    <label for="c104">Empregos legais <span>(457)</span></label>
                                                </p>
                                                <p>
                                                    <input type="checkbox" id="c105" name="cb">
                                                    <label for="c105">Empregos de TI <span>(1254)</span></label>
                                                </p>
                                                <p>
                                                    <input type="checkbox" id="c106" name="cb">
                                                    <label for="c106"> Trabalhos de I & D <span>(554)</span></label>
                                                </p>
                                                <p>
                                                    <input type="checkbox" id="c107" name="cb">
                                                    <label for="c107">Empregos no Governo <span>(350)</span></label>
                                                </p>
                                                <p>
                                                    <input type="checkbox" id="c108" name="cb">
                                                    <label for="c108">Empregos na PSU <span>(221)</span></label>
                                                </p>
                                            </div>
                                        </div>
                                        <ul>
                                            <li><i class="fa fa-plus-circle"></i> <a href="#">MOSTRE MAIS</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="jp_rightside_job_categories_wrapper jp_job_location_wrapper">
                                <div class="jp_rightside_job_categories_heading">
                                    <h4>Empregos por Localização</h4>
                                </div>
                                <div class="jp_rightside_job_categories_content">
                                    <div class="handyman_sec1_wrapper">
                                        <div class="content">
                                            <div class="box">
                                                <p>
                                                    <input type="checkbox" id="c109" name="cb">
                                                    <label for="c109">Emprego em Delhi  <span>(214)</span></label>

                                                    <p>
                                                        <input type="checkbox" id="c110" name="cb">
                                                        <label for="c110">Emprego em Mumbai <span>(514)</span></label>
                                                    </p>
                                                    <p>
                                                        <input type="checkbox" id="c111" name="cb">
                                                        <label for="c111">Emprego em Chennai <span>(554)</span></label>
                                                    </p>
                                                    <p>
                                                        <input type="checkbox" id="c112" name="cb">
                                                        <label for="c112">Emprego em Gurgaon <span>(457)</span></label>
                                                    </p>
                                                    <p>
                                                        <input type="checkbox" id="c113" name="cb">
                                                        <label for="c113">Empregos em Noida  <span>(1254)</span></label>
                                                    </p>
                                                    <p>
                                                        <input type="checkbox" id="c114" name="cb">
                                                        <label for="c114">Emprego em Calcutá <span>(554)</span></label>
                                                    </p>
                                                    <p>
                                                        <input type="checkbox" id="c115" name="cb">
                                                        <label for="c115">Emprego em Hyderabad <span>(350)</span></label>
                                                    </p>
                                                    <p>
                                                        <input type="checkbox" id="c116" name="cb">
                                                        <label for="c116">Emprego em Pune <span>(221)</span></label>
                                                    </p>
                                                </div>
                                            </div>
                                            <ul>
                                                <li><i class="fa fa-plus-circle"></i> <a href="#">MOSTRE MAIS</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="jp_rightside_job_categories_wrapper jp_job_location_wrapper">
                                    <div class="jp_rightside_job_categories_heading">
                                        <h4>Suas habilidades</h4>
                                    </div>
                                    <div class="jp_rightside_job_categories_content">
                                        <div class="handyman_sec1_wrapper">
                                            <div class="content">
                                                <div class="box">
                                                    <p>
                                                        <input type="checkbox" id="c117" name="cb">
                                                        <label for="c117">Javascript  <span>(214)</span></label>

                                                        <p>
                                                            <input type="checkbox" id="c118" name="cb">
                                                            <label for="c118">HTML5 <span>(514)</span></label>
                                                        </p>
                                                        <p>
                                                            <input type="checkbox" id="c119" name="cb">
                                                            <label for="c119">CSS3 <span>(554)</span></label>
                                                        </p>
                                                        <p>
                                                            <input type="checkbox" id="c120" name="cb">
                                                            <label for="c120">PHP  <span>(457)</span></label>
                                                        </p>
                                                        <p>
                                                            <input type="checkbox" id="c121" name="cb">
                                                            <label for="c121">Vendas   <span>(1254)</span></label>
                                                        </p>
                                                        <p>
                                                            <input type="checkbox" id="c122" name="cb">
                                                            <label for="c122">Marketing  <span>(554)</span></label>
                                                        </p>
                                                        <p>
                                                            <input type="checkbox" id="c123" name="cb">
                                                            <label for="c123">Mídias Sociais <span>(350)</span></label>
                                                        </p>
                                                        <p>
                                                            <input type="checkbox" id="c124" name="cb">
                                                            <label for="c124">Web Design <span>(221)</span></label>
                                                        </p>
                                                    </div>
                                                </div>
                                                <ul>
                                                    <li><i class="fa fa-plus-circle"></i> <a href="#">MOSTRE MAIS</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="jp_rightside_job_categories_wrapper jp_job_location_wrapper">
                                        <div class="jp_rightside_job_categories_heading">
                                            <h4>Salário</h4>
                                        </div>
                                        <div class="jp_rightside_job_categories_content">
                                            <div class="handyman_sec1_wrapper">
                                                <div class="content">
                                                    <div class="box">
                                                        <p>
                                                            <input type="checkbox" id="c125" name="cb">
                                                            <label for="c125">$1k - 2k  <span>(214)</span></label>

                                                            <p>
                                                                <input type="checkbox" id="c126" name="cb">
                                                                <label for="c126">$3k - 5k <span>(514)</span></label>
                                                            </p>
                                                            <p>
                                                                <input type="checkbox" id="c127" name="cb">
                                                                <label for="c127">$5k - 8k <span>(554)</span></label>
                                                            </p>
                                                            <p>
                                                                <input type="checkbox" id="c128" name="cb">
                                                                <label for="c128">$5k - 10k  <span>(457)</span></label>
                                                            </p>
                                                            <p>
                                                                <input type="checkbox" id="c129" name="cb">
                                                                <label for="c129">$10k - 20k   <span>(1254)</span></label>
                                                            </p>
                                                            <p>
                                                                <input type="checkbox" id="c130" name="cb">
                                                                <label for="c130">$20k - 30k  <span>(554)</span></label>
                                                            </p>
                                                            <p>
                                                                <input type="checkbox" id="c131" name="cb">
                                                                <label for="c131">$30k - 50k <span>(350)</span></label>
                                                            </p>
                                                            <p>
                                                                <input type="checkbox" id="c132" name="cb">
                                                                <label for="c132">$50k - 80k <span>(221)</span></label>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <ul>
                                                        <li><i class="fa fa-plus-circle"></i> <a href="#">MOSTRE MAIS</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="jp_rightside_job_categories_wrapper jp_job_location_wrapper">
                                            <div class="jp_rightside_job_categories_heading">
                                                <h4>Tipos</h4>
                                            </div>
                                            <div class="jp_rightside_job_categories_content">
                                                <div class="handyman_sec1_wrapper">
                                                    <div class="content">
                                                        <div class="box">
                                                            <p>
                                                                <input type="checkbox" id="c133" name="cb">
                                                                <label for="c133">Tipos  <span>(214)</span></label>

                                                                <p>
                                                                    <input type="checkbox" id="c134" name="cb">
                                                                    <label for="c134">Meio período <span>(514)</span></label>
                                                                </p>
                                                                <p>
                                                                    <input type="checkbox" id="c135" name="cb">
                                                                    <label for="c135">Contrato <span>(554)</span></label>
                                                                </p>
                                                                <p>
                                                                    <input type="checkbox" id="c136" name="cb">
                                                                    <label for="c136">Remotamente  <span>(457)</span></label>
                                                                </p>
                                                                <p>
                                                                    <input type="checkbox" id="c137" name="cb">
                                                                    <label for="c137">Temporário   <span>(1254)</span></label>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <ul>
                                                            <li><i class="fa fa-plus-circle"></i> <a href="#">MOSTRE MAIS</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="jp_add_resume_wrapper jp_job_location_wrapper">
                                                <div class="jp_add_resume_img_overlay"></div>
                                                <div class="jp_add_resume_cont">
                                                    <img src="{{URL::asset('images/content/resume_logo.png')}}" alt="logo" />
                                                    <h4>Obter melhores empregos correspondentes no seu e-mail. Adicione o currículo AGORA!</h4>
                                                    <ul>
                                                        <li><a href="#"><i class="fa fa-plus-circle"></i> &nbsp;ADICIONAR RESUMO</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 visible-sm visible-xs">
                                            <div class="pager_wrapper gc_blog_pagination">
                                                <ul class="pagination">
                                                    <li><a href="#">Priv.</a></li>
                                                    <li><a href="#">1</a></li>
                                                    <li><a href="#">2</a></li>
                                                    <li><a href="#">3</a></li>
                                                    <li class="hidden-xs"><a href="#">4</a></li>
                                                    <li><a href="#">Próximo</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @stop
