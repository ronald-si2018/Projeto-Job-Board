@extends('index_template')

@section('header')
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/style_II.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/responsive2.css')}}" />
@stop

@section('titulo')
Listing Single
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
                            <h2>HTML Developer (1-2 Yrs Exp.)</h2>
                        </div>
                        <div class="jp_tittle_breadcrumb_main_wrapper">
                            <div class="jp_tittle_breadcrumb_wrapper">
                                <ul>
                                    <li><a href="#">Home</a> <i class="fa fa-angle-right"></i></li>
                                    <li><a href="#">Jobs</a> <i class="fa fa-angle-right"></i></li>
                                    <li><a href="#">Developer</a> <i class="fa fa-angle-right"></i></li>
                                    <li>HTML Developer (1-2 Yrs Exp.)</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jp Tittle Wrapper End -->
    <!-- jp listing Single cont Wrapper Start -->
    <div class="jp_listing_single_main_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="jp_listing_left_sidebar_wrapper">
                        <div class="jp_job_des">
                            <h2>Descrição de Trabalho</h2>
                            <p>Descreva aqui seu trabalho.</p>
                            <ul>
                                <li><i class="fa fa-globe"></i>&nbsp;&nbsp; <a href="#">www.example.com</a></li>
                                <li><i class="fa fa-file-pdf-o"></i>&nbsp;&nbsp; <a href="#">Download Info</a></li>

                            </ul>
                        </div>
                        <div class="jp_job_res">
                            <h2>Resposabilidades</h2>
                            <p>INSIRA AQUI SUAS RESPONSABILIDADES



                            </p>
                            <ul>
                                <li><i class="fa fa-caret-right"></i>&nbsp;&nbsp; 																	</li>
                                <li><i class="fa fa-caret-right"></i>&nbsp;&nbsp; 																	</li>
                                <li><i class="fa fa-caret-right"></i>&nbsp;&nbsp; 																	</li>
                                <li><i class="fa fa-caret-right"></i>&nbsp;&nbsp; 
                                </li>
                            </ul>
                        </div>
                        <div class="jp_job_res jp_job_qua">
                            <h2>Qualificações</h2>
                            <ul>
                                <li><i class="fa fa-caret-right"></i>&nbsp;&nbsp; 
                                </li>
                                <li><i class="fa fa-caret-right"></i>&nbsp;&nbsp; 
                                </li>
                                <li><i class="fa fa-caret-right"></i>&nbsp;&nbsp; 										</li>
                                <li><i class="fa fa-caret-right"></i>&nbsp;&nbsp; 										</li>
                            </ul>
                        </div>
                        <div class="jp_job_apply">
                            <h2>Como aplicar</h2>
                            <p>	


                            	</p>
                        </div>
                        <div class="jp_job_map">
                            <h2>Localização</h2>
                            <div id="map" style="width:100%; float:left; height:300px;"></div>
                        </div>
                    </div>
                    <div class="jp_listing_left_bottom_sidebar_wrapper">
                        <div class="jp_listing_left_bottom_sidebar_social_wrapper">
                            <ul class="hidden-xs">
                                <li>COMPARTILHAR :</li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li class="hidden-xs"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li class="hidden-xs"><a href="#"><i class="fa fa-vimeo"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="jp_listing_left_bottom_sidebar_key_wrapper">
                        <ul>
                            <li><i class="fa fa-tags"></i>Keywords :</li>
                            <li><a href="#">ui designer,</a></li>
                            <li><a href="#">developer,</a></li>
                            <li><a href="#">senior</a></li>
                            <li><a href="#">it company,</a></li>
                            <li><a href="#">design,</a></li>
                            <li><a href="#">call center</a></li>
                        </ul>
                    </div>
                    <div class="jp_listing_related_heading_wrapper">
                        <h2>Empregos relacionados</h2>
                        <div class="jp_listing_related_slider_wrapper">
                            <div class="owl-carousel owl-theme">
                                <div class="item">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img">
                                                                <img src="{{URL::asset('images/content/job_post_img1.jpg')}}" alt="post_img" />
                                                            </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
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
                                                                    <li><a href="#">Part Time</a></li>
                                                                    <li><a href="#">Apply</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">ui designer,</a></li>
                                                        <li><a href="#">developer,</a></li>
                                                        <li><a href="#">senior</a></li>
                                                        <li><a href="#">it company,</a></li>
                                                        <li><a href="#">design,</a></li>
                                                        <li><a href="#">call center</a></li>
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
                                                                <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
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
                                                                    <li><a href="#">Part Time</a></li>
                                                                    <li><a href="#">Apply</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">ui designer,</a></li>
                                                        <li><a href="#">developer,</a></li>
                                                        <li><a href="#">senior</a></li>
                                                        <li><a href="#">it company,</a></li>
                                                        <li><a href="#">design,</a></li>
                                                        <li><a href="#">call center</a></li>
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
                                                                <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
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
                                                                    <li><a href="#">Part Time</a></li>
                                                                    <li><a href="#">Apply</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">ui designer,</a></li>
                                                        <li><a href="#">developer,</a></li>
                                                        <li><a href="#">senior</a></li>
                                                        <li><a href="#">it company,</a></li>
                                                        <li><a href="#">design,</a></li>
                                                        <li><a href="#">call center</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img">
                                                                <img src="{{URL::asset('images/content/job_post_img1.jpg')}}" alt="post_img" />
                                                            </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
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
                                                                    <li><a href="#">Part Time</a></li>
                                                                    <li><a href="#">Apply</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">ui designer,</a></li>
                                                        <li><a href="#">developer,</a></li>
                                                        <li><a href="#">senior</a></li>
                                                        <li><a href="#">it company,</a></li>
                                                        <li><a href="#">design,</a></li>
                                                        <li><a href="#">call center</a></li>
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
                                                                <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
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
                                                                    <li><a href="#">Part Time</a></li>
                                                                    <li><a href="#">Apply</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">ui designer,</a></li>
                                                        <li><a href="#">developer,</a></li>
                                                        <li><a href="#">senior</a></li>
                                                        <li><a href="#">it company,</a></li>
                                                        <li><a href="#">design,</a></li>
                                                        <li><a href="#">call center</a></li>
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
                                                                <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
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
                                                                    <li><a href="#">Part Time</a></li>
                                                                    <li><a href="#">Apply</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">ui designer,</a></li>
                                                        <li><a href="#">developer,</a></li>
                                                        <li><a href="#">senior</a></li>
                                                        <li><a href="#">it company,</a></li>
                                                        <li><a href="#">design,</a></li>
                                                        <li><a href="#">call center</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img">
                                                                <img src="{{URL::asset('images/content/job_post_img1.jpg')}}" alt="post_img" />
                                                            </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
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
                                                                    <li><a href="#">Part Time</a></li>
                                                                    <li><a href="#">Apply</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">ui designer,</a></li>
                                                        <li><a href="#">developer,</a></li>
                                                        <li><a href="#">senior</a></li>
                                                        <li><a href="#">it company,</a></li>
                                                        <li><a href="#">design,</a></li>
                                                        <li><a href="#">call center</a></li>
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
                                                                <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
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
                                                                    <li><a href="#">Part Time</a></li>
                                                                    <li><a href="#">Apply</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">ui designer,</a></li>
                                                        <li><a href="#">developer,</a></li>
                                                        <li><a href="#">senior</a></li>
                                                        <li><a href="#">it company,</a></li>
                                                        <li><a href="#">design,</a></li>
                                                        <li><a href="#">call center</a></li>
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
                                                                <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
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
                                                                    <li><a href="#">Part Time</a></li>
                                                                    <li><a href="#">Apply</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-tags"></i>Keywords :</li>
                                                        <li><a href="#">ui designer,</a></li>
                                                        <li><a href="#">developer,</a></li>
                                                        <li><a href="#">senior</a></li>
                                                        <li><a href="#">it company,</a></li>
                                                        <li><a href="#">design,</a></li>
                                                        <li><a href="#">call center</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="jp_rightside_job_categories_wrapper jp_rightside_listing_single_wrapper">
                                <div class="jp_rightside_job_categories_heading">
                                    <h4>Visão geral do trabalho</h4>
                                </div>
                                <div class="jp_jop_overview_img_wrapper">
                                    <div class="jp_jop_overview_img">
                                        <img src="{{URL::asset('images/content/job_post_img1.jpg')}}" alt="post_img" />
                                    </div>
                                </div>
                                <div class="jp_job_listing_single_post_right_cont">
                                    <div class="jp_job_listing_single_post_right_cont_wrapper">
                                        <h4>HTML Developer (1 - 2 Yrs Exp.)</h4>
                                        <p>Webstrot Technology Pvt. Ltd.</p>
                                    </div>
                                </div>
                                <div class="jp_job_post_right_overview_btn_wrapper">
                                    <div class="jp_job_post_right_overview_btn">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                            <li><a href="#">Part Time</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="jp_listing_overview_list_outside_main_wrapper">
                                    <div class="jp_listing_overview_list_main_wrapper">
                                        <div class="jp_listing_list_icon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <div class="jp_listing_list_icon_cont_wrapper">
                                            <ul>
                                                <li>Date Posted:</li>
                                                <li>Octomber 02, 2017</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="jp_listing_overview_list_main_wrapper jp_listing_overview_list_main_wrapper2">
                                        <div class="jp_listing_list_icon">
                                            <i class="fa fa-map-marker"></i>
                                        </div>
                                        <div class="jp_listing_list_icon_cont_wrapper">
                                            <ul>
                                                <li>Location:</li>
                                                <li>Los Angeles Califonia PO, 455001</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="jp_listing_overview_list_main_wrapper jp_listing_overview_list_main_wrapper2">
                                        <div class="jp_listing_list_icon">
                                            <i class="fa fa-info-circle"></i>
                                        </div>
                                        <div class="jp_listing_list_icon_cont_wrapper">
                                            <ul>
                                                <li>Job Title:</li>
                                                <li>HTML Developer</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="jp_listing_overview_list_main_wrapper jp_listing_overview_list_main_wrapper2">
                                        <div class="jp_listing_list_icon">
                                            <i class="fa fa-clock-o"></i>
                                        </div>
                                        <div class="jp_listing_list_icon_cont_wrapper">
                                            <ul>
                                                <li>Hours:</li>
                                                <li>40h / Week</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="jp_listing_overview_list_main_wrapper jp_listing_overview_list_main_wrapper2">
                                        <div class="jp_listing_list_icon">
                                            <i class="fa fa-money"></i>
                                        </div>
                                        <div class="jp_listing_list_icon_cont_wrapper">
                                            <ul>
                                                <li>Salary:</li>
                                                <li>$12K - 15k P.A.</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="jp_listing_overview_list_main_wrapper jp_listing_overview_list_main_wrapper2">
                                        <div class="jp_listing_list_icon">
                                            <i class="fa fa-th-large"></i>
                                        </div>
                                        <div class="jp_listing_list_icon_cont_wrapper">
                                            <ul>
                                                <li>Category:</li>
                                                <li>Developer</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="jp_listing_overview_list_main_wrapper jp_listing_overview_list_main_wrapper2">
                                        <div class="jp_listing_list_icon">
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="jp_listing_list_icon_cont_wrapper">
                                            <ul>
                                                <li>Experience:</li>
                                                <li>1+ Years Experience</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="jp_listing_right_bar_btn_wrapper">
                                        <div class="jp_listing_right_bar_btn">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-plus-circle"></i> &nbsp;Apply With Facebook</a></li>
                                                <li><a href="#"><i class="fa fa-plus-circle"></i> &nbsp;Apply NOw!</a></li>
                                            </ul>
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
    <!-- jp listing Single cont Wrapper End -->
 
 @stop