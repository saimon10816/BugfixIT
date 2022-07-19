<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{asset('assets/favicon.png')}}">
    <link rel="apple-touch-icon" href="{{asset('apple-touch-icon.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('apple-touch-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('apple-touch-icon-114x114.png')}}">

    <title>Bugfix IT BD Limited</title>

    <!-- Styles -->
    <link
        href={{asset('https://fonts.googleapis.com/css?family=Montserrat:500,600,700&display=swap')}} rel="stylesheet">
    <link href={{asset('https://fonts.googleapis.com/css?family=Poppins:300,400,400i&display=swap')}} rel="stylesheet">
    <link href={{asset('css/style.css')}} rel="stylesheet" media="screen">
</head>
<body>
<div class="animsition">
    <div class="loader">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>

    <!-- Content CLick Capture-->

    <div class="click-capture"></div>

    <!-- Sidebar Menu-->

    <div class="menu">
        <span class="close-menu icon-cross2 right-boxed"></span>
        <ul class="menu-list right-boxed">
            <li data-menuanchor="home">
                <a href="home">Home</a>
            </li>
            <li data-menuanchor="specialization">
                <a href="specialization">Specialization</a>
            </li>
            <li data-menuanchor="projects">
                <a href="projects">Projects</a>
            </li>
            <li data-menuanchor="team">
                <a href="team">Our Team</a>
            </li>
            <li data-menuanchor="partners">
                <a href="partners">Partners</a>
            </li>
            <li data-menuanchor="testimonials">
                <a href="testimonials">Testimonials</a>
            </li>
            <li data-menuanchor="contact">
                <a href="contact">Contact</a>
            </li>
        </ul>
        <div class="menu-footer right-boxed">
            <div class="social-list">
                <a href="https://twitter.com/Bugfixitbd" class="icon ion-social-twitter"></a>
                <a href="https://www.facebook.com/bugfixitbd" class="icon ion-social-facebook"></a>
                {{--                <a href="" class="icon ion-social-googleplus"></a>--}}
                <a href="https://www.linkedin.com/in/bugfixitbd/" class="icon ion-social-linkedin"></a>
                {{--                <a href="" class="icon ion-social-dribbble-outline"></a>--}}
            </div>
            <div class="copy">© Bugfix IT BD Limited 2022. All Rights Reserved</div>
        </div>
    </div>

    <!-- Navbar -->

    <header class="navbar navbar-fullpage boxed">
        <div class="navbar-bg"></div>
        <a class="brand" href="#">
            <link href="{{asset('php artisan storage:linkimages/brand.png')}}" rel="icon">
            <div class="brand-info">
                <div class="brand-name">Bugfix IT BD Limited</div>
            </div>
        </a>

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse"
                aria-expanded="false">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <div class="contacts d-none d-md-block">
            <div class="contact-item">
                +880 1303-797027
            </div>
            <div class="contact-item spacer">
                /
            </div>
            <div class="contact-item">
                <a href="mailto:contact@Ramsay.com">bugfixitbd@gmail.com</a>
            </div>
        </div>
    </header>
    <div class="copy-bottom white boxed">© Bugfix IT BD Limited 2022.</div>
    <div class="social-list social-list-bottom boxed">
        <a href="https://twitter.com/Bugfixitbd" class="icon ion-social-twitter"></a>
        <a href="https://www.facebook.com/bugfixitbd" class="icon ion-social-facebook"></a>
        {{--                <a href="" class="icon ion-social-googleplus"></a>--}}
        <a href="https://www.linkedin.com/in/bugfixitbd/" class="icon ion-social-linkedin"></a>
        {{--                <a href="" class="icon ion-social-dribbble-outline"></a>--}}
    </div>
    <div class="pagepiling">
        <div data-anchor="home" class="pp-scrollable text-white section section-1">
            <div class="scroll-wrap">
                <div class="section-bg"></div>
                <div class="scrollable-content">
                    <div class="vertical-centred">
                        <div class="boxed boxed-inner">
                            <div class="boxed">
                                <div class="container">
                                    <div class="intro">
                                        <div class="row">
                                            <div class="col-md-8 col-lg-6">
                                                <h1 class="display-2 text-white  wow fadeIn" data-wow-delay="0.1s"><span
                                                        class="text-primary">{{$home->title}}</span> {!! $home->subtitle !!}
                                                </h1>
                                                <a class="popup-youtube"
                                                   href="{!! $home->link !!}"><span
                                                        class="icon ion-ios-play"></span>Watch video </a>
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
        <div data-anchor="specialization" class="pp-scrollable section section-2">
            <div class="scroll-wrap">
                <div class="scrollable-content">
                    <div class="vertical-title text-white d-none d-lg-block"><span>what we do</span></div>
                    <div class="vertical-centred">
                        <div class="boxed boxed-inner">
                            <div class="boxed">
                                <div class="container">
                                    <div class="intro">
                                        <h2 class="title mb-5 pb-5"><span class="text-primary">Our</span> specialization
                                        </h2>
                                        <div class="row-specialization row">
                                            @if(count($specializationLists) > 0)
                                                @foreach($specializationLists as $specializationList)

                                                    <div class="col-specialization col-md-6 col-lg-4">
                                                        <span class="{{$specializationList->icon}}"></span>
                                                        <h4 class="text-uppercase">{{$specializationList->heading}}</h4>
                                                        <p>{!! $specializationList->description !!}</p>
                                                    </div>

                                                @endforeach
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div data-anchor="projects" class="pp-scrollable section section-3">
            <div class="scroll-wrap">
                <div class="section-bg bg-about"></div>
                <div class="scrollable-content">
                    <div class="vertical-title-3 text-white  d-none d-lg-block"><span>projects</span>
                    </div>
                    <div class="vertical-centred">
                        <div class="boxed boxed-inner">
                            <div class="boxed">
                                <div class="container">
                                    <div class="intro">
                                        <h2 class="title mb-5 pb-5"><span class="text-primary">Our</span> Projects
                                        </h2>
                                        <div class="row align-items-center">
                                            @if(count($projectLists) > 0)
                                                @foreach($projectLists as $projectList)

                                                    <div class="form-group col-md-4 mt-4">
                                                        <div class="mb-9">

                                                            <div class="agency-single-team">
                                                                <div class="image">
                                                                    <img src="{{$projectList->projectImage}}" alt="">
                                                                </div>
                                                                <div class="hover-area text-center">
                                                                    <h4 class="xs-title"><a
                                                                            href="https://www.kingkorahsan.com">{{$projectList->projectName}}</a>
                                                                    </h4>
                                                                    <span>Client: {{$projectList->projectBy}}</span>
                                                                    <p>{!! $projectList->projectBrief !!}</p>
                                                                </div><!-- .hover-area END -->
                                                            </div><!-- .agency-single-team END -->
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div data-anchor="team" class="pp-scrollable text-white section section-4">
            <div class="scroll-wrap">
                <div class="section-bg mask"></div>
                <div class="scrollable-content">
                    <div class="vertical-title-2 d-none d-lg-block"><span>our team</span></div>
                    <div class="vertical-centred">
                        <div class="boxed boxed-inner">
                            <div class="boxed">
                                <div class="container">
                                    <div class="intro">
                                        <h2 class="title mb-5 pb-5"><span class="text-primary">Our</span> Team
                                        </h2>
                                        <div class="row row-resume">
                                            @if(count($messageLists) > 0)
                                                @foreach($messageLists as $messageList)
                                                    @if($loop->iteration % 2 == 0)

                                                        <div class="col-md-6 pt-md-5 mt-md-5 fadeY fadeY-2">
                                                            <h2 class="resume-header title"><img alt=""
                                                                                                 src="{{$messageList->image}}"
                                                                                                 class="responsive">
                                                            </h2>
                                                            <div class="col-resume">
                                                                <div class="resume-content">
                                                                    <div class="resume-inner">
                                                                        <div class="resume-row">
                                                                            <h5>{{$messageList->name}}</h5>

                                                                            <h6 class="resume-type">{{$messageList->designation}}</h6>

                                                                            <p class="resume-text">{!! $messageList->message !!}</p>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    @else

                                                        <div class="col-md-6 fadeY fadeY-1">
                                                            <h2 class="resume-header title"><img alt=""
                                                                                                 src="{{$messageList->image}}"
                                                                                                 class="responsive">
                                                            </h2>
                                                            <div class="col-resume">
                                                                <div class="resume-content">
                                                                    <div class="resume-inner">
                                                                        <div class="resume-row">
                                                                            <h5>{{$messageList->name}}</h5>

                                                                            <h6 class="resume-type">{{$messageList->designation}}</h6>

                                                                            <p class="resume-text">{!! $messageList->message !!}</p>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--        <div data-anchor="page6" class="pp-scrollable text-white section section-6">--}}
        {{--            <div class="scroll-wrap">--}}
        {{--                <div class="bg-changer">--}}
        {{--                    <div class="section-bg"></div>--}}
        {{--                    <div class="section-bg"></div>--}}
        {{--                    <div class="section-bg"></div>--}}
        {{--                    <div class="section-bg"></div>--}}
        {{--                </div>--}}
        {{--                <div class="scrollable-content">--}}
        {{--                    <div class="vertical-title-4  d-none d-lg-block">my works</div>--}}
        {{--                    <div class="vertical-centred">--}}
        {{--                        <div class="boxed boxed-inner">--}}
        {{--                            <div class="boxed">--}}
        {{--                                <div class="container">--}}
        {{--                                    <div class="intro">--}}
        {{--                                        <div class="row">--}}
        {{--                                            <div class="col-md-12">--}}
        {{--                                                <div class="project-row">--}}
        {{--                                                    <a class="active" href="project-detail.html">--}}
        {{--                                                        <span class="project-number">01</span>--}}
        {{--                                                        <h2 class="project-title">Abstract Skat</h2>--}}
        {{--                                                        <div class="project-category">Illustration--}}
        {{--                                                        </div>--}}
        {{--                                                    </a>--}}
        {{--                                                </div>--}}
        {{--                                                <div class="project-row">--}}
        {{--                                                    <a href="project-detail.html">--}}
        {{--                                                        <span class="project-number">02</span>--}}
        {{--                                                        <h2 class="project-title">Borato Prism</h2>--}}
        {{--                                                        <div class="project-category">Branding</div>--}}
        {{--                                                    </a>--}}
        {{--                                                </div>--}}
        {{--                                                <div class="project-row">--}}
        {{--                                                    <a href="project-detail.html">--}}
        {{--                                                        <span class="project-number">03</span>--}}
        {{--                                                        <h2 class="project-title">Brole Mobile--}}
        {{--                                                            App</h2>--}}
        {{--                                                        <div class="project-category">Mobile--}}
        {{--                                                            Design--}}
        {{--                                                        </div>--}}
        {{--                                                    </a>--}}
        {{--                                                </div>--}}
        {{--                                                <div class="project-row">--}}
        {{--                                                    <a href="project-detail.html">--}}
        {{--                                                        <span class="project-number">04</span>--}}
        {{--                                                        <h2 class="project-title">Bauhaus--}}
        {{--                                                            Studio</h2>--}}
        {{--                                                        <div class="project-category">House Design--}}
        {{--                                                        </div>--}}
        {{--                                                    </a>--}}
        {{--                                                </div>--}}
        {{--                                                <div class="view-all view-all-projects">--}}
        {{--                                                    <a href="projects.html">--}}
        {{--                                                        View all projects--}}
        {{--                                                    </a>--}}
        {{--                                                </div>--}}
        {{--                                            </div>--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}
        {{--                            </div>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </div>--}}
        <div data-anchor="partners" class="pp-scrollable section section-5">
            <div class="scroll-wrap">
                <div class="scrollable-content">
                    <div class="vertical-title-5 text-white d-none d-lg-block"><span>partners</span>
                    </div>
                    <div class="vertical-centred">
                        <div class="boxed boxed-inner">
                            <div class="boxed">
                                <div class="container">
                                    <div class="intro">
                                        <h2 class="title text-white"><span class="text-primary">Trusted</span>
                                            from
                                            Clients</h2>
                                        <div class="row row-partners">
                                            @if(count($partnerLists) > 0)
                                                @foreach($partnerLists as $partnerList)
                                                    <div class="col-sm-6 col-md-4 col-xl-3 col-partner">
                                                        <div class="partner-inner"><img alt=""
                                                                                        src="{{$partnerList->partnerIcon}}">
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div data-anchor="testimonials" class="pp-scrollable text-white section section-7">
            <div class="scroll-wrap">
                <div class="section-bg"></div>
                <div class="bg-quote"></div>
                <div class="scrollable-content">
                    <div class="vertical-title-6  d-none d-lg-block"><span>testimonials</span></div>
                    <div class="vertical-centred">
                        <div class="boxed boxed-inner">
                            <div class="boxed">
                                <div class="container">
                                    <div class="intro">
                                        <h2 class="title mb-5 pb-5"><span class="text-primary">Our</span> Commendations
                                        </h2>
                                        <div class="review-carousel owl-carousel">
                                            <div class="review-carousel-item">
                                                @if(count($testimonialLists) > 0)
                                                    @foreach($testimonialLists as $testimonialList)
                                                        <div class="review-carousel-item">
                                                            <div class="review-row">
                                                                <div class="row">
                                                                    <div class="col-md-5">
                                                                        <div class="review-author">
                                                                            <div
                                                                                class="author-name">{{$testimonialList->authorName}}
                                                                            </div>
                                                                            <i>{{$testimonialList->authorBy}}</i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-7 text">
                                                                        <p>{!! $testimonialList->quote !!}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                @endif
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
        <div data-anchor="contact" class="pp-scrollable section section-8">
            <div class="scroll-wrap">
                <div class="section-bg"></div>
                <div class="scrollable-content">
                    <div class="vertical-title-7 text-white d-none d-lg-block"><span>contact</span>
                    </div>
                    <div class="vertical-centred">
                        <div class="boxed boxed-inner">
                            <div class="boxed">
                                <div class="container">
                                    <div class="intro overflow-hidden">
                                        <h2 class="title mb-5 pb-5"><span class="text-primary">Contact</span> us at
                                        </h2>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h5 class="text-muted">4B, H-19, Cemex Anha Palace, Shekhertek 8 (Main
                                                    Road), Adabor, Mohammadpur</h5>
                                                <h2 class="title"><span class="text-primary">Dhaka</span>,
                                                    Bangladesh</h2>
                                                <section class="contact-address">
                                                    <h3><a class="mail"
                                                           href="mailto:info@bugfixitbd.com">
                                                            info@bugfixitbd.com</a></h3>
                                                    <h3><span class="phone">+88 01303 797027</span>
                                                    </h3>
                                                </section>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="contact-info">
                                                    <form action="{{route('home.contact.store')}}" method="post"
                                                          enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="form-group col-sm-6">
                                                                <input type="text" name="contactName" required=""
                                                                       placeholder="Name*" aria-required="true">
                                                            </div>
                                                            <div class="form-group col-sm-6">
                                                                <input type="email" required="" name="contactEmail"
                                                                       placeholder="Email*">
                                                            </div>
                                                            <div class="form-group col-sm-12">
                                                                <input type="text" name="contactSubject"
                                                                       placeholder="Subject (Optional)">
                                                            </div>
                                                            <div class="form-group col-sm-12">
                                                                <textarea name="contactMessage" required=""
                                                                          placeholder="Message*"></textarea>
                                                            </div>
                                                            <div class="form-group form-group-message col-sm-12">
                                                                <span id="success" class="text-primary">Thank You, your message is successfully sent!</span>
                                                                <span id="error" class="text-primary">Sorry, something went wrong </span>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <button type="submit" class="btn">Contact me</button>
                                                            </div>
                                                        </div>
                                                    </form>
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
        </div>
    </div>
</div>
<!-- jQuery -->

<script src={{asset('js/jquery.min.js')}}></script>
<script src={{asset('js/wow.min.js')}}></script>
<script src={{asset('js/smoothscroll.js')}}></script>
<script src={{asset('js/animsition.js')}}></script>
<script src={{asset('js/jquery.validate.min.js')}}></script>
<script src={{asset('js/jquery.magnific-popup.min.js')}}></script>
<script src={{asset('js/owl.carousel.min.js')}}></script>
<script src={{asset('js/jquery.pagepiling.min.js')}}></script>

<!-- Scripts -->
<script src={{asset('js/scripts.js')}}></script>
</body>
</html>
