@extends('index_template')

@section('titulo')
Blog-Right
@stop

@section('header')
    <link rel="stylesheet" type="text/css" href="{{url::asset('css/magnific-popup.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{url::asset('css/style_II.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{url::asset('css/responsive2.css')}}" />
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
                            <h2>Categorias de blogs</h2>
                        </div>
                        <div class="jp_tittle_breadcrumb_main_wrapper">
                            <div class="jp_tittle_breadcrumb_wrapper">
                                <ul>
                                    <li><a href="#">Home</a> <i class="fa fa-angle-right"></i></li>
                                    <li><a href="#">Paginas</a> <i class="fa fa-angle-right"></i></li>
                                    <li>Blog</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jp Tittle Wrapper End -->
    <!-- jp blog_cate section Wrapper Start -->
    <div class="jp_blog_cate_main_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="jp_blog_cate_left_main_wrapper">
                                <div class="jp_first_blog_post_main_wrapper">
                                    <div class="jp_first_blog_post_img">
                                        <img src="{{url::asset('images/content/blog_img1.jpg')}}" class="img-responsive" alt="blog_img" />
                                    </div>
                                    <div class="jp_first_blog_post_cont_wrapper">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-calendar"></i> &nbsp;&nbsp;20 OCT, 2017</a></li>
                                            <li><a href="#"><i class="fa fa-clone"></i> &nbsp;&nbsp;Isto é trabalho</a></li>
                                        </ul>
                                        <h3><a href="#">Ei cara, é hora de trabalhar agora!</a></h3>
                                        <p>Trabalho perfeito, com o uso das melhores ferramentas, funcionarios a atendimento que há no mercado atualmente,rapido atendimento e na solução do problema..</p>
                                    </div>
                                    <div class="jp_first_blog_bottom_cont_wrapper">
                                        <div class="jp_blog_bottom_left_cont">
                                            <ul>
                                                <li><img src="{{url::asset('images/content/blog_small_img.jpg')}}" alt="small_img" class="img-circle" />&nbsp;&nbsp; Jhon Doe</li>
                                            </ul>
                                        </div>
                                        <div class="jp_blog_bottom_right_cont">
                                            <p class="hidden-xs"><a href="#" class="hidden-xs"><i class="fa fa-comments"></i></a></p>
                                            <ul>
                                                <li>Compartilhe :</li>
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                <li class="hidden-xs"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                <li class="hidden-xs"><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="jp_blog_cate_left_main_wrapper jp_blog_cate_left_main_wrapper2">
                                <div class="jp_first_blog_post_main_wrapper">
                                    <div class="jp_first_blog_post_slider">
                                        <div class="owl-carousel owl-theme">
                                            <div class="item">
                                                <img src="{{url::asset('images/content/blog_img1.jpg')}}" class="img-responsive" alt="blog_img" />
                                            </div>
                                            <div class="item">
                                                <img src="{{url::asset('images/content/blog_img2.jpg')}}" class="img-responsive" alt="blog_img" />
                                            </div>
                                            <div class="item">
                                                <img src="{{url::asset('images/content/blog_img3.jpg')}}" class="img-responsive" alt="blog_img" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="jp_first_blog_post_cont_wrapper">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-calendar"></i> &nbsp;&nbsp;20 OCT, 2017</a></li>
                                            <li><a href="#"><i class="fa fa-clone"></i> &nbsp;&nbsp;Isto é trabalho</a></li>
                                        </ul>
                                        <h3><a href="#">Ei cara, é hora de trabalhar agora!</a></h3>
                                        <p>Trabalho perfeito, com o uso das melhores ferramentas, funcionarios a atendimento que há no mercado atualmente,rapido atendimento e na solução do problema..</p>
                                    </div>
                                    <div class="jp_first_blog_bottom_cont_wrapper">
                                        <div class="jp_blog_bottom_left_cont">
                                            <ul>
                                                <li><img src="{{url::asset('images/content/blog_small_img.jpg')}}" alt="small_img" class="img-circle" />&nbsp;&nbsp; Jhon Doe</li>
                                            </ul>
                                        </div>
                                        <div class="jp_blog_bottom_right_cont">
                                            <p class="hidden-xs"><a href="#" class="hidden-xs"><i class="fa fa-comments"></i></a></p>
                                            <ul>
                                                <li>Compartilhe :</li>
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                <li class="hidden-xs"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                <li class="hidden-xs"><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="jp_blog_cate_left_main_wrapper jp_blog_cate_left_main_wrapper2">
                                <div class="jp_first_blog_post_main_wrapper">
                                    <div class="jp_first_blog_post_cont_wrapper jp_first_blog_post_cont_wrapper2">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-calendar"></i> &nbsp;&nbsp;20 OCT, 2017</a></li>
                                            <li><a href="#"><i class="fa fa-clone"></i> &nbsp;&nbsp;Isto é trabalho</a></li>
                                        </ul>
                                        <h3><a href="#">Ei cara, é hora de trabalhar agora!</a></h3>
                                        <p>Trabalho perfeito, com o uso das melhores ferramentas, funcionarios a atendimento que há no mercado atualmente,rapido atendimento e na solução do problema..</p>
                                    </div>
                                    <div class="jp_first_blog_bottom_cont_wrapper">
                                        <div class="jp_blog_bottom_left_cont">
                                            <ul>
                                                <li><img src="{{url::asset('images/content/blog_small_img.jpg')}}" alt="small_img" class="img-circle" />&nbsp;&nbsp; Jhon Doe</li>
                                            </ul>
                                        </div>
                                        <div class="jp_blog_bottom_right_cont">
                                            <p class="hidden-xs"><a href="#" class="hidden-xs"><i class="fa fa-comments"></i></a></p>
                                            <ul>
                                                <li>Compartilhe :</li>
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                <li class="hidden-xs"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                <li class="hidden-xs"><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="jp_blog_cate_left_main_wrapper jp_blog_cate_left_main_wrapper2 jp_blog_cate_left_video_img_wrapper">
                                <div class="jp_first_blog_post_main_wrapper">
                                    <div class="et_progress_video_wrapper">
                                        <div class="et_progress_video">
                                            <img src="{{url::asset('images/content/blog_img4.jpg')}}" class="img-responsive" alt="service_img" />
                                            <div class="et_progress_video_cont_overlay">
                                                <div class="et_progress_video_text"><a class="popup-youtube" href="https://www.youtube.com/embed/xImpyYRVGOc"><img src="{{url::asset('images/content/play.png')}}" alt="video"></a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="jp_first_blog_post_cont_wrapper">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-calendar"></i> &nbsp;&nbsp;20 OCT, 2017</a></li>
                                            <li><a href="#"><i class="fa fa-clone"></i> &nbsp;&nbsp;Isto é trabalho</a></li>
                                        </ul>
                                        <h3><a href="#">Ei cara, é hora de trabalhar agora!</a></h3>
                                        <p>Trabalho perfeito, com o uso das melhores ferramentas, funcionarios a atendimento que há no mercado atualmente,rapido atendimento e na solução do problema..</p>
                                    </div>
                                    <div class="jp_first_blog_bottom_cont_wrapper">
                                        <div class="jp_blog_bottom_left_cont">
                                            <ul>
                                                <li><img src="{{url::asset('images/content/blog_small_img.jpg')}}" alt="small_img" class="img-circle" />&nbsp;&nbsp; Jhon Doe</li>
                                            </ul>
                                        </div>
                                        <div class="jp_blog_bottom_right_cont">
                                            <p class="hidden-xs"><a href="#" class="hidden-xs"><i class="fa fa-comments"></i></a></p>
                                            <ul>
                                                <li>Compartilhe :</li>
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                <li class="hidden-xs"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                <li class="hidden-xs"><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="jp_blog_cate_left_main_wrapper jp_blog_cate_left_main_wrapper2">
                                <div class="jp_first_blog_post_main_wrapper">
                                    <div class="jp_first_blog_post_img">
                                        <img src="{{url::asset('images/content/blog_img3.jpg')}}" class="img-responsive" alt="blog_img" />
                                    </div>
                                    <div class="jp_first_blog_post_cont_wrapper">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-calendar"></i> &nbsp;&nbsp;20 OCT, 2017</a></li>
                                            <li><a href="#"><i class="fa fa-clone"></i> &nbsp;&nbsp;Isto é trabalho</a></li>
                                        </ul>
                                        <h3><a href="#">Ei cara, é hora de trabalhar agora!</a></h3>
                                        <p>Trabalho perfeito, com o uso das melhores ferramentas, funcionarios a atendimento que há no mercado atualmente,rapido atendimento e na solução do problema..</p>
                                    </div>
                                    <div class="jp_first_blog_bottom_cont_wrapper">
                                        <div class="jp_blog_bottom_left_cont">
                                            <ul>
                                                <li><img src="{{url::asset('images/content/blog_small_img.jpg')}}" alt="small_img" class="img-circle" />&nbsp;&nbsp; Jhon Doe</li>
                                            </ul>
                                        </div>
                                        <div class="jp_blog_bottom_right_cont">
                                            <p class="hidden-xs"><a href="#" class="hidden-xs"><i class="fa fa-comments"></i></a></p>
                                            <ul>
                                                <li>Compartilhe :</li>
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                <li class="hidden-xs"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                <li class="hidden-xs"><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
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
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 margin_top">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="jp_rightside_job_categories_wrapper jp_blog_right_box_search">
                                <div class="jp_rightside_job_categories_heading">
                                    <h4>Pesquisa</h4>
                                </div>
                                <div class="jp_blog_right_search_wrapper">
                                    <input type="text" placeholder="Search">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="jp_rightside_job_categories_wrapper jp_blog_right_box">
                                <div class="jp_rightside_job_categories_heading">
                                    <h4>Trabalhos por categoria</h4>
                                </div>
                                <div class="jp_rightside_job_categories_content">
                                    <ul>
                                        <li><i class="fa fa-caret-right"></i> <a href="#">Design gráfico <span>(214)</span></a></li>
                                        <li><i class="fa fa-caret-right"></i> <a href="#">Trabalhos de engenharia <span>(514)</span></a></li>
                                        <li><i class="fa fa-caret-right"></i> <a href="#">Trabalho de estrutura principal <span>(554)</span></a></li>
                                        <li><i class="fa fa-caret-right"></i> <a href="#">Trabalhos Legais <span>(457)</span></a></li>
                                        <li><i class="fa fa-caret-right"></i> <a href="#">Isto é trabalho <span>(1254)</span></a></li>
                                        <li><i class="fa fa-caret-right"></i> <a href="#">Trabalhos R&D  <span>(554)</span></a></li>
                                        <li><i class="fa fa-caret-right"></i> <a href="#">Trabalhos governamentais <span>(350)</span></a></li>
                                        <li><i class="fa fa-caret-right"></i> <a href="#">Trabalhos PSU  <span>(221)</span></a></li>
                                        <li><i class="fa fa-plus-circle"></i> <a href="#">Veja todas as categorias</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="jp_rightside_career_wrapper jp_blog_right_box">
                                <div class="jp_rightside_career_heading">
                                    <h4>Aconselhamento de carreira</h4>
                                </div>
                                <div class="jp_rightside_career_main_content">
                                    <div class="jp_rightside_career_content_wrapper">
                                        <div class="jp_rightside_career_img">
                                            <img src="{{url::asset('images/content/career_img1.jpg')}}" alt="career_img" />
                                        </div>
                                        <div class="jp_rightside_career_img_cont">
                                            <h4>Trabalho OCT - 2017</h4>
                                            <p><i class="fa fa-calendar-o"></i> &nbsp;20 OCT, 2017</p>
                                        </div>
                                    </div>
                                    <div class="jp_rightside_career_content_wrapper">
                                        <div class="jp_rightside_career_img">
                                            <img src="{{url::asset('images/content/career_img2.jpg')}}" alt="career_img" />
                                        </div>
                                        <div class="jp_rightside_career_img_cont">
                                            <h4>Trabalho OCT - 2017</h4>
                                            <p><i class="fa fa-calendar-o"></i> &nbsp;20 OCT, 2017</p>
                                        </div>
                                    </div>
                                    <div class="jp_rightside_career_content_wrapper">
                                        <div class="jp_rightside_career_img">
                                            <img src="{{url::asset('images/content/career_img3.jpg')}}" alt="career_img" />
                                        </div>
                                        <div class="jp_rightside_career_img_cont">
                                            <h4>Trabalho OCT - 2017</h4>
                                            <p><i class="fa fa-calendar-o"></i> &nbsp;20 OCT, 2017</p>
                                        </div>
                                    </div>
                                    <div class="jp_rightside_career_btn">
                                        <a href="#"><i class="fa fa-plus-circle"></i> Veja tudo</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="jp_spotlight_main_wrapper">
                                <div class="spotlight_header_wrapper">
                                    <h4>Trabalhos famosos</h4>
                                </div>
                                <div class="jp_spotlight_slider_wrapper">
                                    <div class="owl-carousel owl-theme">
                                        <div class="item">
                                            <div class="jp_spotlight_slider_img_Wrapper">
                                                <img src="{{url::asset('images/content/spotlight_img.jpg')}}" alt="spotlight_img" />
                                            </div>
                                            <div class="jp_spotlight_slider_cont_Wrapper">
                                                <h4>Desenvolvedor HTML (1 - 2 Yrs Exp.)</h4>
                                                <p>Tecnologia Webstrot  Ltd.</p>
                                                <ul>
                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                </ul>
                                            </div>
                                            <div class="jp_spotlight_slider_btn_wrapper">
                                                <div class="jp_spotlight_slider_btn">
                                                    <ul>
                                                        <li><a href="#"><i class="fa fa-plus-circle"></i> &nbsp;Aplique agora</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="jp_spotlight_slider_img_Wrapper">
                                                <img src="{{url::asset('images/content/spotlight_img.jpg')}}" alt="spotlight_img" />
                                            </div>
                                            <div class="jp_spotlight_slider_cont_Wrapper">
                                                <h4>Desenvolvedor HTML (1 - 2 Yrs Exp.)</h4>
                                                <p>Tecnologia Webstrot  Ltd.</p>
                                                <ul>
                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                </ul>
                                            </div>
                                            <div class="jp_spotlight_slider_btn_wrapper">
                                                <div class="jp_spotlight_slider_btn">
                                                    <ul>
                                                        <li><a href="#"><i class="fa fa-plus-circle"></i> &nbsp;Aplique agora</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="jp_spotlight_slider_img_Wrapper">
                                                <img src="{{url::asset('images/content/spotlight_img.jpg')}}" alt="spotlight_img" />
                                            </div>
                                            <div class="jp_spotlight_slider_cont_Wrapper">
                                                <h4>Desenvolvedor HTML (1 - 2 Yrs Exp.)</h4>
                                                <p>Tecnologia Webstrot  Ltd.</p>
                                                <ul>
                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; $12K - 15k P.A.</li>
                                                    <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li>
                                                </ul>
                                            </div>
                                            <div class="jp_spotlight_slider_btn_wrapper">
                                                <div class="jp_spotlight_slider_btn">
                                                    <ul>
                                                        <li><a href="#"><i class="fa fa-plus-circle"></i> &nbsp;Aplique agora</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="jp_rightside_job_categories_wrapper jp_blog_right_box">
                                <div class="jp_rightside_job_categories_heading">
                                    <h4>Trabalhos por localização</h4>
                                </div>
                                <div class="jp_rightside_job_categories_content">
                                    <ul>
                                        <li><i class="fa fa-caret-right"></i> <a href="#">Trabalhos em Delhi <span>(214)</span></a></li>
                                        <li><i class="fa fa-caret-right"></i> <a href="#">Trabalhos em Mumbai  <span>(514)</span></a></li>
                                        <li><i class="fa fa-caret-right"></i> <a href="#">Trabalhos em Chennai  <span>(554)</span></a></li>
                                        <li><i class="fa fa-caret-right"></i> <a href="#">Trabalhos em Gurgaon <span>(457)</span></a></li>
                                        <li><i class="fa fa-caret-right"></i> <a href="#">Trabalhos em Noida  <span>(1254)</span></a></li>
                                        <li><i class="fa fa-caret-right"></i> <a href="#">Trabalhos em Kolkata <span>(554)</span></a></li>
                                        <li><i class="fa fa-caret-right"></i> <a href="#">Trabalhos em Hyderabad  <span>(350)</span></a></li>
                                        <li><i class="fa fa-caret-right"></i> <a href="#">Trabalhos em Pune <span>(221)</span></a></li>
                                        <li><i class="fa fa-plus-circle"></i> <a href="#">Veja todas categorias</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="jp_rightside_career_wrapper jp_best_deal_right_sec_wrapper">
                                <div class="jp_rightside_career_heading">
                                    <h4>Curriculos recentes</h4>
                                </div>
                                <div class="jp_rightside_career_main_content">
                                    <div class="jp_rightside_career_content_wrapper jp_best_deal_right_content">
                                        <div class="jp_rightside_career_img">
                                            <img src="{{url::asset('images/content/client_img1.jpg')}}" alt="career_img" />
                                        </div>
                                        <div class="jp_rightside_career_img_cont">
                                            <h4>Akshay Handge</h4>
                                            <p><i class="fa fa-folder-open-o"></i> &nbsp;Desenvolvedor</p>
                                        </div>
                                    </div>
                                    <div class="jp_rightside_career_content_wrapper jp_best_deal_right_content">
                                        <div class="jp_rightside_career_img">
                                            <img src="{{url::asset('images/content/client_img2.jpg')}}" alt="career_img" />
                                        </div>
                                        <div class="jp_rightside_career_img_cont">
                                            <h4>Akshay Handge</h4>
                                            <p><i class="fa fa-folder-open-o"></i> &nbsp;UI Designer</p>
                                        </div>
                                    </div>
                                    <div class="jp_rightside_career_content_wrapper jp_best_deal_right_content">
                                        <div class="jp_rightside_career_img">
                                            <img src="{{url::asset('images/content/client_img3.jpg')}}" alt="career_img" />
                                        </div>
                                        <div class="jp_rightside_career_img_cont">
                                            <h4>Jacklen Fandores</h4>
                                            <p><i class="fa fa-folder-open-o"></i> &nbsp;Web Designer</p>
                                        </div>
                                    </div>
                                    <div class="jp_rightside_career_btn">
                                        <a href="#"><i class="fa fa-plus-circle"></i> Veja tudo</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="jp_add_resume_wrapper jp_blog_right_box">
                                <div class="jp_add_resume_img_overlay"></div>
                                <div class="jp_add_resume_cont">
                                    <img src="{{url::asset('images/content/resume_logo.png')}}" alt="logo" />
                                    <h4>Receba os melhores trabalhos agora no seu email,adicione curriculo agora!</h4>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-plus-circle"></i> &nbsp;Adicione curriculo</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 visible-sm visible-xs">
                            <div class="pager_wrapper gc_blog_pagination">
                                <ul class="pagination">
                                    <li><a href="#">Anterior.</a></li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li class="hidden-xs"><a href="#">4</a></li>
                                    <li><a href="#">Proximo</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        

@stop

@section('rodape')
	<script src="{{url::asset('js/jquery.magnific-popup.js')}}"></script>
    <script src="{{url::asset('js/custom_II.js')}}"></script>
    <script>
        // Magnific popup-video//
        	$('.popup-youtube').magnificPopup({
                disableOn: 700,
                type: 'iframe',
                mainClass: 'mfp-fade',
                removalDelay: 160,
                preloader: false,
        
                fixedContentPos: false
            });
    </script>
@stop