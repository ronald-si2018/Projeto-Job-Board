@extends('index_template')

@section('header')
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/style_II.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/responsive2.css')}}" />
@stop

@section('titulo')
Company_Listing_single
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
                            <h2>Add-Posting</h2>
                        </div>
                        <div class="jp_tittle_breadcrumb_main_wrapper">
                            <div class="jp_tittle_breadcrumb_wrapper">
                                <ul>
                                    <li><a href="#">Home</a> <i class="fa fa-angle-right"></i></li>
                                    <li>Add-Posting</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jp Tittle Wrapper End -->
    <!-- jp ad post Wrapper Start -->
	<div class="jp_adp_main_section_wrapper">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="jp_adp_form_heading_wrapper">
						<h2>Job Details</h2>
					</div>
					<div class="jp_adp_form_wrapper">
						<input type="text" placeholder="Job Title">
					</div>
					<div class="jp_adp_form_wrapper">
						<select>
							<option>Job Location</option>
							<option>Job Location</option>
							<option>Job Location</option>
							<option>Job Location</option>
						</select>
					</div>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-md-6 col-xs-12">
							<div class="jp_adp_form_wrapper">
								<input type="text" placeholder="Salary Min">
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-md-6 col-xs-12">
							<div class="jp_adp_form_wrapper">
								<input type="text" placeholder="Salary Max">
							</div>
						</div>
					</div>
					<div class="jp_adp_form_wrapper">
						<input type="text" placeholder="Notic Period">
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 bottom_line_Wrapper">
					<div class="jp_adp_form_heading_wrapper">
						<p>Fields with * are mandetory</p>
					</div>
					<div class="jp_adp_form_wrapper">
						<select>
							<option>Job Category</option>
							<option>Job Category</option>
							<option>Job Category</option>
							<option>Job Category</option>
						</select>
					</div>
					<div class="jp_adp_form_wrapper">
						<select>
							<option>Job Type</option>
							<option>Job Type</option>
							<option>Job Type</option>
							<option>Job Type</option>
						</select>
					</div>
					<div class="jp_adp_form_wrapper">
						<input type="text" placeholder="Skills required">
					</div>
					<div class="jp_adp_form_wrapper">
						<input type="text" placeholder="Joining facilities">
					</div>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="jp_adp_textarea_main_wrapper">
						<textarea rows="7" placeholder="Job Description"></textarea>
					</div>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="jp_adp_choose_resume">
						<p>Company Post</p>
						<div class="custom-input">
						  <span><i class="fa fa-upload"></i> &nbsp;Upload Job Post</span>
						  <input type="file" name="resume" id="resume" />
						</div>
					</div>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="jp_adp_choose_resume_bottom_btn_post">
						<ul>
							<li><a href="#"><i class="fa fa-plus-circle"></i>&nbsp; Post a job</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
    <!-- jp ad post Wrapper End -->
@stop