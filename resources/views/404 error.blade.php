@extends('index_template')

@section('titulo')
404 error
@stop

@section('header')
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
                            <h2>404 erro</h2>
                        </div>
                        <div class="jp_tittle_breadcrumb_main_wrapper">
                            <div class="jp_tittle_breadcrumb_wrapper">
                                <ul>
                                    <li><a href="#">Home</a> <i class="fa fa-angle-right"></i></li>
                                    <li><a href="#">Paginas</a> <i class="fa fa-angle-right"></i></li>
                                    <li>404 erro</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jp Tittle Wrapper End -->
	<!-- jp 404 error wrapper start -->
	  <div class="error_page">
        <div class="container">
            <div class="row">
			 
                    <div class="error_page_cntnt">
                        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
                    <div class="about_image_wrapper" style="width: 100%">
                        <a href="index.html"><img class="" width="max-width:100%" height="max-height:100%" src="C:\Users\Patrick Fernandes\Downloads\483835a9df59d4971a3935e6532eb73b.jpg"></a>
                    </div>
              
                        
                        
                    </div>
                </div>
			</div>
		</div>
	</div>
	<!-- jp 404 error wrapper end -->
	<!-- jp Newsletter Wrapper Start -->
    <div class="jp_main_footer_img_wrapper">
        <div class="jp_newsletter_img_overlay_wrapper"></div>
        <div class="jp_newsletter_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <div class="jp_newsletter_field">
                        </div>
                    </div>
                </div>
            </div>
        </div>
@stop


@section('rodape')
    <script src="{{url::asset('js/jquery.magnific-popup.js')}}"></script>
    <script src="{{url::asset('js/custom_II.js')}}"></script>
@stop