@extends('index_template')

@section('titulo')
Plataforma de Serviços
@stop


<!-- TESTE -->
@section('pesquisar')

<div class="jp_banner_heading_cont_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="jp_job_heading_wrapper">
                    <div class="jp_job_heading">
                        <h1><span>Plataforma de</span> Serviços</h1>
                        <p>Escolha o tipo de serviço que deseja contratar</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="jp_header_form_wrapper">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <input type="text" placeholder="Keyword e.g. (Job Title, Description, Tags)">
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="jp_form_location_wrapper">
                            <i class="fa fa-dot-circle-o first_icon"></i><select>
                                <option>Selecione o local</option>
                                <option>Selecione o local</option>
                                <option>Selecione o local</option>
                                <option>Selecione o local</option>
                                <option>Selecione o local</option>
                            </select><i class="fa fa-angle-down second_icon"></i>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="jp_form_exper_wrapper">
                            <i class="fa fa-dot-circle-o first_icon"></i><select>
                                <option>Experience</option>
                                <option>Experience</option>
                                <option>Experience</option>
                                <option>Experience</option>
                                <option>Experience</option>
                            </select><i class="fa fa-angle-down second_icon"></i>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                        <div class="jp_form_btn_wrapper">
                            <ul>
                                <li><a href="#"><i class="fa fa-search"></i> Procurar</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="jp_banner_main_jobs_wrapper">
                    <div class="jp_banner_main_jobs">
                        <ul>
                            <li><i class="fa fa-tags"></i> Palavras Chave :</li>
                            <li><a href="#">Pedreiro,</a></li>
                            <li><a href="#">cozinheiro,</a></li>
                            <li><a href="#">vereador,</a></li>
                            <li><a href="#">vendedor,</a></li>
                            <li><a href="#">design,</a></li>
                            <li><a href="#">help desk</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="jp_banner_jobs_categories_wrapper">
    <div class="container">
        <div class="jp_top_jobs_category_wrapper jp_job_cate_left_border jp_job_cate_left_border_bottom">
            <div class="jp_top_jobs_category">
                <i class="fa fa-code"></i>
                <h3><a href="#">Desenvolvedor</a></h3>
                <p>(240 serviços)</p>
            </div>
        </div>
        <div class="jp_top_jobs_category_wrapper jp_job_cate_left_border_bottom">
            <div class="jp_top_jobs_category">
                <i class="fa fa-laptop"></i>
                <h3><a href="#">Tecnologia</a></h3>
                <p>(504 serviços)</p>
            </div>
        </div>
        <div class="jp_top_jobs_category_wrapper jp_job_cate_left_border_bottom">
            <div class="jp_top_jobs_category">
                <i class="fa fa-bar-chart"></i>
                <h3><a href="#">Professor</a></h3>
                <p>(2250 serviços)</p>
            </div>
        </div>
        <div class="jp_top_jobs_category_wrapper jp_job_cate_left_border_res">
            <div class="jp_top_jobs_category">
                <i class="fa fa-medkit"></i>
                <h3><a href="#">Medicos</a></h3>
                <p>(202 serviços)</p>
            </div>
        </div>
        <div class="jp_top_jobs_category_wrapper">
            <div class="jp_top_jobs_category">
                <i class="fa fa-university"></i>
                <h3><a href="#">Personal</a></h3>
                <p>(1457 serviços)</p>
            </div>
        </div>
        <div class="jp_top_jobs_category_wrapper">
            <div class="jp_top_jobs_category">
                <i class="fa fa-th-large"></i>
                <h3><a href="#">Todos serviços</a></h3>
                <p>(2000+ serviços)</p>
            </div>
        </div>
    </div>
</div>

@stop

<!-- TESTE -->

@section('conteudo')

<div class="jp_counter_main_wrapper">
    <div class="container">
        <div class="gc_counter_cont_wrapper">
            <div class="count-description">
                <span class="timer">2540</span><i class="fa fa-plus"></i>
                <h5 class="con1">Jobs Available</h5>
            </div>
        </div>
        <div class="gc_counter_cont_wrapper2">
            <div class="count-description">
                <span class="timer">7325</span><i class="fa fa-plus"></i>
                <h5 class="con2">Members</h5>
            </div>
        </div>
        <div class="gc_counter_cont_wrapper3">
            <div class="count-description">
                <span class="timer">1924</span><i class="fa fa-plus"></i>
                <h5 class="con3">Resumes</h5>
            </div>
        </div>
        <div class="gc_counter_cont_wrapper4">
            <div class="count-description">
                <span class="timer">4275</span><i class="fa fa-plus"></i>
                <h5 class="con4">Company</h5>
            </div>
        </div>
    </div>
</div>


<!-- jp Best deals Wrapper Start -->

<div class="jp_best_deals_main_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                <div class="jp_best_deal_slider_main_wrapper">
                    <div class="jp_best_deal_heading_wrapper">
                        <h2>Principais Serviços</h2>
                    </div>
                    <div class="jp_best_deal_slider_wrapper">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="jp_best_deal_main_cont_wrapper">
                                            <div class="jp_best_deal_icon_sec">
                                                <i class="flaticon-magnifying-glass"></i>
                                            </div>
                                            <div class="jp_best_deal_cont_sec">
                                                <h4><a href="#">Search a Jobs</a></h4>
                                                <p>Proin gravida nibh vel velit auctr akshay Aenean sollicitudin...</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="jp_best_deal_main_cont_wrapper jp_best_deal_main_cont_wrapper1">
                                            <div class="jp_best_deal_icon_sec">
                                                <i class="flaticon-users"></i>
                                            </div>
                                            <div class="jp_best_deal_cont_sec">
                                                <h4><a href="#">Apply a Good Job</a></h4>
                                                <p>Proin gravida nibh vel velit auctr akshay Aenean sollicitudin...</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="jp_best_deal_main_cont_wrapper jp_best_deal_main_cont_wrapper2">
                                            <div class="jp_best_deal_icon_sec">
                                                <i class="flaticon-shield"></i>
                                            </div>
                                            <div class="jp_best_deal_cont_sec">
                                                <h4><a href="#">Job Security</a></h4>
                                                <p>Proin gravida nibh vel velit auctr akshay Aenean sollicitudin...</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="jp_best_deal_main_cont_wrapper jp_best_deal_main_cont_wrapper2">
                                            <div class="jp_best_deal_icon_sec">
                                                <i class="flaticon-notification"></i>
                                            </div>
                                            <div class="jp_best_deal_cont_sec">
                                                <h4><a href="#">Job Notifications</a></h4>
                                                <p>Proin gravida nibh vel velit auctr akshay Aenean sollicitudin...</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="jp_best_deal_main_cont_wrapper">
                                            <div class="jp_best_deal_icon_sec">
                                                <i class="flaticon-magnifying-glass"></i>
                                            </div>
                                            <div class="jp_best_deal_cont_sec">
                                                <h4><a href="#">Search a Jobs</a></h4>
                                                <p>Proin gravida nibh vel velit auctr akshay Aenean sollicitudin...</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="jp_best_deal_main_cont_wrapper jp_best_deal_main_cont_wrapper1">
                                            <div class="jp_best_deal_icon_sec">
                                                <i class="flaticon-users"></i>
                                            </div>
                                            <div class="jp_best_deal_cont_sec">
                                                <h4><a href="#">Apply a Good Job</a></h4>
                                                <p>Proin gravida nibh vel velit auctr akshay Aenean sollicitudin...</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="jp_best_deal_main_cont_wrapper jp_best_deal_main_cont_wrapper2">
                                            <div class="jp_best_deal_icon_sec">
                                                <i class="flaticon-shield"></i>
                                            </div>
                                            <div class="jp_best_deal_cont_sec">
                                                <h4><a href="#">Job Security</a></h4>
                                                <p>Proin gravida nibh vel velit auctr akshay Aenean sollicitudin...</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="jp_best_deal_main_cont_wrapper jp_best_deal_main_cont_wrapper2">
                                            <div class="jp_best_deal_icon_sec">
                                                <i class="flaticon-notification"></i>
                                            </div>
                                            <div class="jp_best_deal_cont_sec">
                                                <h4><a href="#">Job Notifications</a></h4>
                                                <p>Proin gravida nibh vel velit auctr akshay Aenean sollicitudin...</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="jp_best_deal_main_cont_wrapper">
                                            <div class="jp_best_deal_icon_sec">
                                                <i class="flaticon-magnifying-glass"></i>
                                            </div>
                                            <div class="jp_best_deal_cont_sec">
                                                <h4><a href="#">Search a Jobs</a></h4>
                                                <p>Proin gravida nibh vel velit auctr akshay Aenean sollicitudin...</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="jp_best_deal_main_cont_wrapper jp_best_deal_main_cont_wrapper1">
                                            <div class="jp_best_deal_icon_sec">
                                                <i class="flaticon-users"></i>
                                            </div>
                                            <div class="jp_best_deal_cont_sec">
                                                <h4><a href="#">Apply a Good Job</a></h4>
                                                <p>Proin gravida nibh vel velit auctr akshay Aenean sollicitudin...</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="jp_best_deal_main_cont_wrapper jp_best_deal_main_cont_wrapper2">
                                            <div class="jp_best_deal_icon_sec">
                                                <i class="flaticon-shield"></i>
                                            </div>
                                            <div class="jp_best_deal_cont_sec">
                                                <h4><a href="#">Job Security</a></h4>
                                                <p>Proin gravida nibh vel velit auctr akshay Aenean sollicitudin...</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="jp_best_deal_main_cont_wrapper jp_best_deal_main_cont_wrapper2">
                                            <div class="jp_best_deal_icon_sec">
                                                <i class="flaticon-notification"></i>
                                            </div>
                                            <div class="jp_best_deal_cont_sec">
                                                <h4><a href="#">Job Notifications</a></h4>
                                                <p>Proin gravida nibh vel velit auctr akshay Aenean sollicitudin...</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="jp_rightside_career_wrapper jp_best_deal_right_sec_wrapper">
                    <div class="jp_rightside_career_heading">
                        <h4>Recent Resumes</h4>
                    </div>
                    <div class="jp_rightside_career_main_content">
                        <div class="jp_rightside_career_content_wrapper jp_best_deal_right_content">
                            <div class="jp_rightside_career_img">
                                <img src="{{URL::asset('images/content/client_img1.jpg')}}" alt="career_img" />
                            </div>
                            <div class="jp_rightside_career_img_cont">
                                <h4>Akshay Handge</h4>
                                <p><i class="fa fa-folder-open-o"></i> &nbsp;Developer</p>
                            </div>
                        </div>
                        <div class="jp_rightside_career_content_wrapper jp_best_deal_right_content">
                            <div class="jp_rightside_career_img">
                                <img src="{{URL::asset('images/content/client_img2.jpg')}}" alt="career_img" />
                            </div>
                            <div class="jp_rightside_career_img_cont">
                                <h4>Akshay Handge</h4>
                                <p><i class="fa fa-folder-open-o"></i> &nbsp;UI Designer</p>
                            </div>
                        </div>
                        <div class="jp_rightside_career_content_wrapper jp_best_deal_right_content">
                            <div class="jp_rightside_career_img">
                                <img src="{{URL::asset('images/content/client_img3.jpg')}}" alt="career_img" />
                            </div>
                            <div class="jp_rightside_career_img_cont">
                                <h4>Jacklen Fandores</h4>
                                <p><i class="fa fa-folder-open-o"></i> &nbsp;Web Designer</p>
                            </div>
                        </div>
                        <div class="jp_rightside_career_btn">
                            <a href="#"><i class="fa fa-plus-circle"></i> View All</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- jp Best deals Wrapper End -->
@stop

