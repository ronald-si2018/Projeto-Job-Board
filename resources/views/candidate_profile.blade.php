@extends('index_template')

@section('header')
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/style_II.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/responsive2.css')}}" />
@stop

@section('titulo')
Candidate-Profile
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
                        <h2>candidate-Profile</h2>
                    </div>
                    <div class="jp_tittle_breadcrumb_main_wrapper">
                        <div class="jp_tittle_breadcrumb_wrapper">
                            <ul>
                                <li><a href="#">Home</a> <i class="fa fa-angle-right"></i></li>
                                <li><a href="#">Pages</a> <i class="fa fa-angle-right"></i></li>
                                <li>candidate-Profile</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- jp Tittle Wrapper End -->
<!-- jp profile Wrapper Start -->
<div class="jp_cp_profile_main_wrapper">
  <div class="container">
     <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
           <div class="jp_cp_left_side_wrapper">
              <div class="jp_cp_left_pro_wallpaper">
                 <img src="{{URL::asset('images/content/cp1.png')}}" alt="profile_img">
                 <h2>Farhan Shaikh</h2>
                 <p>UI/UX Designer in Dewas</p>
                 <ul>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                </ul>
            </div>
            <div class="jp_cp_rd_wrapper">
             <ul>
                <li><a href="#"><i class="fa fa-download"></i> &nbsp;Download Resume</a></li>
                <li><a href="#"><i class="fa fa-phone"></i> &nbsp;Contact candidate</a></li>
            </ul>
        </div>
    </div>
    <div class="jp_add_resume_wrapper jp_job_location_wrapper jp_cp_left_ad_res">
        <div class="jp_add_resume_img_overlay"></div>
        <div class="jp_add_resume_cont">
            <img src="{{URL::asset('images/content/resume_logo.png')}}" alt="logo" />
            <h4>Get Best Matched Jobs On your Email. Add Resume NOW!</h4>
            <ul>
                <li><a href="#"><i class="fa fa-plus-circle"></i> &nbsp;ADD RESUME</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
   <div class="jp_cp_right_side_wrapper">
      <div class="jp_cp_right_side_inner_wrapper">
         <h2>PERSONAL DETAILS</h2>
         <table>
            <tbody>
                <tr>
                    <td class="td-w25">Full Name</td>
                    <td class="td-w10">:</td>
                    <td class="td-w65">Farhan Shaikh</td>
                </tr>
                <tr>
                    <td class="td-w25">Father's Name</td>
                    <td class="td-w10">:</td>
                    <td class="td-w65">------</td>
                </tr>
                <tr>
                    <td class="td-w25">Address</td>
                    <td class="td-w10">:</td>
                    <td class="td-w65">Street 110-B Kalani Bag, Dewas, M.P. INDIA</td>
                </tr>
                <tr>
                    <td class="td-w25">Zip Code</td>
                    <td class="td-w10">:</td>
                    <td class="td-w65">12345</td>
                </tr>
                <tr>
                    <td class="td-w25">Phone</td>
                    <td class="td-w10">:</td>
                    <td class="td-w65">+0 123456789 , +0 123456789</td>
                </tr>
                <tr>
                    <td class="td-w25">Email</td>
                    <td class="td-w10">:</td>
                    <td class="td-w65">support@example.com</td>
                </tr>
                <tr>
                    <td class="td-w25">Website</td>
                    <td class="td-w10">:</td>
                    <td class="td-w65">http://example.com</td>
                </tr>

            </tbody>
        </table>
    </div>
</div>
<div class="row">
  <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
     <div class="jp_cp_accor_heading_wrapper">
        <h2>Education</h2>
        <p>Proin gravida nibh vel velit quet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulpuate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt.</p>
    </div>
</div>
<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
 <div class="accordion_wrapper abt_page_2_wrapper">
    <div class="panel-group" id="accordion_threeLeft">


       <!-- /.panel-default -->
       <div class="panel panel-default">
          <div class="panel-heading bell">
             <h4 class="panel-title">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion_threeLeft" href="#collapseTwentyLeftThree" aria-expanded="false">
                  DIPLOMA IN COMPUTER 
              </a>
          </h4>
      </div>
      <div id="collapseTwentyLeftThree" class="panel-collapse collapse" aria-expanded="false" role="tablist">
         <div class="panel-body">
            Praesent in nisl egestas mauris aliquam luctus. Ut auctor faucibus orci, nec semper purus ultrices idorbi nec lorem risus orbi vitae felis gravida Pellentesque id eros quis massa convallis feugiat eu quis urna.
        </div>
    </div>
</div>
<div class="panel panel-default">
  <div class="panel-heading bell">
     <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion_threeLeft" href="#collapseTwentyLeftThree2" aria-expanded="false">
          HIGHER SECONDRY EDUCATION 
      </a>
  </h4>
</div>
<div id="collapseTwentyLeftThree2" class="panel-collapse collapse" aria-expanded="false" role="tablist">
 <div class="panel-body">
    Praesent in nisl egestas mauris aliquam luctus. Ut auctor faucibus orci, nec semper purus ultrices idorbi nec lorem risus orbi vitae felis gravida Pellentesque id eros quis massa convallis feugiat eu quis urna.
</div>
</div>
</div>
<div class="panel panel-default">
  <div class="panel-heading bell">
     <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion_threeLeft" href="#collapseTwentyLeftThree3" aria-expanded="false">
          HIGH SCHOOL DEGREE
      </a>
  </h4>
</div>
<div id="collapseTwentyLeftThree3" class="panel-collapse collapse" aria-expanded="false" role="tablist">
 <div class="panel-body">
    Praesent in nisl egestas mauris aliquam luctus. Ut auctor faucibus orci, nec semper purus ultrices idorbi nec lorem risus orbi vitae felis gravida Pellentesque id eros quis massa convallis feugiat eu quis urna.
</div>
</div>
</div>
<!-- /.panel-default -->
</div>
<!--end of /.panel-group-->
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- jp profile Wrapper End -->
<!-- jp Newsletter Wrapper Start -->
<div class="jp_main_footer_img_wrapper">
    <div class="jp_newsletter_img_overlay_wrapper"></div>
    <div class="jp_newsletter_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="jp_newsletter_text">
                        <img src="{{URL::asset('images/content/news_logo.png')}}" class="img-responsive" alt="news_logo" />
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="jp_newsletter_field">
                        <i class="fa fa-envelope-o"></i><input type="text" placeholder="Enter Your Email"><button type="submit">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jp Newsletter Wrapper End -->
@stop
 