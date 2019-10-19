@extends('user.layout.main')

@section('content')
<div class="home">
        <div class="home_slider_container">
            
            <!-- Home Slider -->
            <div class="owl-carousel owl-theme home_slider">
                
                <!-- Home Slider Item -->
                <div class="owl-item">
                    <div class="home_slider_background" style="background-image:url(images/home_slider_1.jpg)"></div>
                    <div class="home_slider_content">
                        <div class="container">
                            <div class="row">
                                <div class="col text-center">
                                    <div class="home_slider_title">The Premium System Education</div>
                                    <div class="home_slider_subtitle">Future Of Education Technology</div>
                                    <div class="home_slider_form_container">
                                        <form action="#" id="home_search_form_1" class="home_search_form d-flex flex-lg-row flex-column align-items-center justify-content-between">
                                            <div class="d-flex flex-row align-items-center justify-content-start">
                                                <input type="search" class="home_search_input" placeholder="Keyword Search" required="required">
                                                <select class="dropdown_item_select home_search_input">
                                                    <option>Category Courses</option>
                                                    <option>Category</option>
                                                    <option>Category</option>
                                                </select>
                                                <select class="dropdown_item_select home_search_input">
                                                    <option>Select Price Type</option>
                                                    <option>Price Type</option>
                                                    <option>Price Type</option>
                                                </select>
                                            </div>
                                            <button type="submit" class="home_search_button">search</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Home Slider Item -->
                <div class="owl-item">
                    <div class="home_slider_background" style="background-image:url(images/home_slider_1.jpg)"></div>
                    <div class="home_slider_content">
                        <div class="container">
                            <div class="row">
                                <div class="col text-center">
                                    <div class="home_slider_title">The Premium System Education</div>
                                    <div class="home_slider_subtitle">Future Of Education Technology</div>
                                    <div class="home_slider_form_container">
                                        <form action="#" id="home_search_form_2" class="home_search_form d-flex flex-lg-row flex-column align-items-center justify-content-between">
                                            <div class="d-flex flex-row align-items-center justify-content-start">
                                                <input type="search" class="home_search_input" placeholder="Keyword Search" required="required">
                                                <select class="dropdown_item_select home_search_input">
                                                    <option>Category Courses</option>
                                                    <option>Category</option>
                                                    <option>Category</option>
                                                </select>
                                                <select class="dropdown_item_select home_search_input">
                                                    <option>Select Price Type</option>
                                                    <option>Price Type</option>
                                                    <option>Price Type</option>
                                                </select>
                                            </div>
                                            <button type="submit" class="home_search_button">search</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Home Slider Item -->
                <div class="owl-item">
                    <div class="home_slider_background" style="background-image:url(images/home_slider_1.jpg)"></div>
                    <div class="home_slider_content">
                        <div class="container">
                            <div class="row">
                                <div class="col text-center">
                                    <div class="home_slider_title">The Premium System Education</div>
                                    <div class="home_slider_subtitle">Future Of Education Technology</div>
                                    <div class="home_slider_form_container">
                                        <form action="#" id="home_search_form_3" class="home_search_form d-flex flex-lg-row flex-column align-items-center justify-content-between">
                                            <div class="d-flex flex-row align-items-center justify-content-start">
                                                <input type="search" class="home_search_input" placeholder="Keyword Search" required="required">
                                                <select class="dropdown_item_select home_search_input">
                                                    <option>Category Courses</option>
                                                    <option>Category</option>
                                                    <option>Category</option>
                                                </select>
                                                <select class="dropdown_item_select home_search_input">
                                                    <option>Select Price Type</option>
                                                    <option>Price Type</option>
                                                    <option>Price Type</option>
                                                </select>
                                            </div>
                                            <button type="submit" class="home_search_button">search</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Home Slider Nav -->

        <div class="home_slider_nav home_slider_prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
        <div class="home_slider_nav home_slider_next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
    </div>

    <!-- Features -->

    <div class="features">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title_container text-center">
                        <h2 class="section_title">Welcome To Unicat E-Learning</h2>
                        <div class="section_subtitle"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel gravida arcu. Vestibulum feugiat, sapien ultrices fermentum congue, quam velit venenatis sem</p></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-2">
                <div id="filter">
                    //filter
                    <div class="list-todo">
                        <h5 class="filter-by">Loc theo cap hoc</h5>
                        <div >
                            <div class="item todo-item">
                                <div class="form-check form-check-inline">
                                    <input class="inp-cbx todo d-none" id="cbx1" type="checkbox"/>
                                    <label class="cbx" for="cbx1">
                                        <span>
                                            <svg width="12px" height="10px" viewbox="0 0 12 10">
                                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                            </svg>
                                        </span>
                                        <span>cap 1</span>
                                    </label>
                                </div>
                            </div>
                            <div class="item todo-item">
                                <div class="form-check form-check-inline">
                                    <input class="inp-cbx todo d-none" id="cbx2" type="checkbox"/>
                                    <label class="cbx" for="cbx2">
                                        <span>
                                            <svg width="12px" height="10px" viewbox="0 0 12 10">
                                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                            </svg>
                                        </span>
                                        <span>cap 2</span>
                                    </label>
                                </div>
                            </div>
                            <div class="item todo-item">
                                <div class="form-check form-check-inline">
                                    <input class="inp-cbx todo d-none" id="cbx3" type="checkbox"/>
                                    <label class="cbx" for="cbx3">
                                        <span>
                                            <svg width="12px" height="10px" viewbox="0 0 12 10">
                                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                            </svg>
                                        </span>
                                        <span>cap 3</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list-todo">
                        <h5 class="filter-by">Loc theo mon hoc</h5>
                        <div >
                            <div class="item todo-item">
                                <div class="form-check form-check-inline">
                                    <input class="inp-cbx todo d-none" id="cbx4" type="checkbox"/>
                                    <label class="cbx" for="cbx4">
                                        <span>
                                            <svg width="12px" height="10px" viewbox="0 0 12 10">
                                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                            </svg>
                                        </span>
                                        <span>Toán</span>
                                    </label>
                                </div>
                            </div>
                            <div class="item todo-item">
                                <div class="form-check form-check-inline">
                                    <input class="inp-cbx todo d-none" id="cbx5" type="checkbox"/>
                                    <label class="cbx" for="cbx5">
                                        <span>
                                            <svg width="12px" height="10px" viewbox="0 0 12 10">
                                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                            </svg>
                                        </span>
                                        <span>Văn</span>
                                    </label>
                                </div>
                            </div>
                            <div class="item todo-item">
                                <div class="form-check form-check-inline">
                                    <input class="inp-cbx todo d-none" id="cbx6" type="checkbox"/>
                                    <label class="cbx" for="cbx6">
                                        <span>
                                            <svg width="12px" height="10px" viewbox="0 0 12 10">
                                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                            </svg>
                                        </span>
                                        <span>Tiếng Anh</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-7">
                <div class="team">
                    <div class="team_background parallax-window" data-parallax="scroll" data-image-src="images/team_background.jpg" data-speed="0.8"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="section_title_container text-center">
                                    <h2 class="section_title">Top giáo viên môn Toán</h2>
                                    <div class="section_subtitle"><p>Những giáo viên tốt nhất được đánh giá bởi chúng tôi</p></div>
                                </div>
                            </div>
                        </div>
                        <div class="row team_row">
                            
                            <!-- Team Item -->
                            <div class="col-lg-4 col-md-6 team_col">
                                <div class="team_item">
                                    <div class="team_image"><img src="images/team_1.jpg" alt=""></div>
                                    <div class="team_body">
                                        <div class="team_title"><a href="#">Jacke Masito</a></div>
                                        <div class="team_subtitle">Marketing & Management</div>
                                        <div class="social_list">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Team Item -->
                            <div class="col-lg-4 col-md-6 team_col">
                                <div class="team_item">
                                    <div class="team_image"><img src="images/team_2.jpg" alt=""></div>
                                    <div class="team_body">
                                        <div class="team_title"><a href="#">William James</a></div>
                                        <div class="team_subtitle">Designer & Website</div>
                                        <div class="social_list">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Team Item -->
                            <div class="col-lg-4 col-md-6 team_col">
                                <div class="team_item">
                                    <div class="team_image"><img src="images/team_3.jpg" alt=""></div>
                                    <div class="team_body">
                                        <div class="team_title"><a href="#">John Tyler</a></div>
                                        <div class="team_subtitle">Quantum mechanics</div>
                                        <div class="social_list">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="team">
                    <div class="team_background parallax-window" data-parallax="scroll" data-image-src="images/team_background.jpg" data-speed="0.8"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="section_title_container text-center">
                                    <h2 class="section_title">Top giáo viên môn Văn</h2>
                                    <div class="section_subtitle"><p>Những giáo viên tốt nhất được đánh giá bởi chúng tôi</p></div>
                                </div>
                            </div>
                        </div>
                        <div class="row team_row">
                            
                            <!-- Team Item -->
                            <div class="col-lg-4 col-md-6 team_col">
                                <div class="team_item">
                                    <div class="team_image"><img src="images/team_1.jpg" alt=""></div>
                                    <div class="team_body">
                                        <div class="team_title"><a href="#">Jacke Masito</a></div>
                                        <div class="team_subtitle">Marketing & Management</div>
                                        <div class="social_list">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Team Item -->
                            <div class="col-lg-4 col-md-6 team_col">
                                <div class="team_item">
                                    <div class="team_image"><img src="images/team_2.jpg" alt=""></div>
                                    <div class="team_body">
                                        <div class="team_title"><a href="#">William James</a></div>
                                        <div class="team_subtitle">Designer & Website</div>
                                        <div class="social_list">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Team Item -->
                            <div class="col-lg-4 col-md-6 team_col">
                                <div class="team_item">
                                    <div class="team_image"><img src="images/team_3.jpg" alt=""></div>
                                    <div class="team_body">
                                        <div class="team_title"><a href="#">John Tyler</a></div>
                                        <div class="team_subtitle">Quantum mechanics</div>
                                        <div class="social_list">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div id="detail-user">
                    <div id="notification">
                        Lớp học của bạn sẽ diễn ra trong 15:00
                    </div>
                    <div id="profile">
                        proflie user
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Newsletter -->

    <div class="newsletter">
        <div class="newsletter_background parallax-window" data-parallax="scroll" data-image-src="images/newsletter.jpg" data-speed="0.8"></div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="newsletter_container d-flex flex-lg-row flex-column align-items-center justify-content-start">

                        <!-- Newsletter Content -->
                        <div class="newsletter_content text-lg-left text-center">
                            <div class="newsletter_title">sign up for news and offers</div>
                            <div class="newsletter_subtitle">Subcribe to lastest smartphones news & great deals we offer</div>
                        </div>

                        <!-- Newsletter Form -->
                        <div class="newsletter_form_container ml-lg-auto">
                            <form action="#" id="newsletter_form" class="newsletter_form d-flex flex-row align-items-center justify-content-center">
                                <input type="email" class="newsletter_input" placeholder="Your Email" required="required">
                                <button type="submit" class="newsletter_button">subscribe</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
