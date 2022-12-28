<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Novikova Art</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicons/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('favicons/site.webmanifest') }}">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

{{--    <!-- Facebook and Twitter integration -->--}}
{{--    <meta property="og:title" content=""/>--}}
{{--    <meta property="og:image" content=""/>--}}
{{--    <meta property="og:url" content=""/>--}}
{{--    <meta property="og:site_name" content=""/>--}}
{{--    <meta property="og:description" content=""/>--}}
{{--    <meta name="twitter:title" content="" />--}}
{{--    <meta name="twitter:image" content="" />--}}
{{--    <meta name="twitter:url" content="" />--}}
{{--    <meta name="twitter:card" content="" />--}}

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="{{ asset('favicons/favicon.ico') }}">

    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{ asset('fonts/icomoon/styles.css') }}">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <!-- Flexslider  -->
    <link rel="stylesheet" href="{{ asset('css/flexslider.css') }}">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <!-- Theme style  -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Fancybox  -->
    <link rel="stylesheet" href="{{ asset('css/fancybox.css') }}">
    <!-- Add style  -->
    <link rel="stylesheet" href="{{ asset('css/add.css') }}">

    <!-- Modernizr JS -->
    <script src="{{ asset('js/modernizr-2.6.2.min.js') }}"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="{{ asset('js/respond.min.js') }}"></script>
    <![endif]-->

</head>
<body>

<x-modal id="tech-modal">
    <div class="modal-body"></div>
</x-modal>

<div id="colorlib-page">
    <div class="container-wrap">
        <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
        <aside id="colorlib-aside" role="complementary" class="border js-fullheight">
            <div class="text-center">
                <div class="author-img" style="background-image: url({{ asset('images/about.jpg') }});"></div>
                <h1 id="colorlib-logo">Марина Новикова</h1>
                <span class="position">Дизайнер</span>
            </div>
            <nav id="colorlib-main-menu" role="navigation" class="navbar">
                <div id="navbar" class="collapse">
                    <ul>
                        @foreach($menu as $item)
                            <li {{ $loop->first ? 'class=active' : '' }} ><a href="#" data-nav-section="{{ $item['nav'] }}">{{ $item['name'] }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </nav>

            <div class="colorlib-footer">
                <p><small>&copy;Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <i class="icon-heart" aria-hidden="true"></i></p>
{{--                <ul>--}}
{{--                    <li><a href="#"><i class="icon-facebook2"></i></a></li>--}}
{{--                    <li><a href="#"><i class="icon-twitter2"></i></a></li>--}}
{{--                    <li><a href="#"><i class="icon-instagram"></i></a></li>--}}
{{--                    <li><a href="#"><i class="icon-linkedin2"></i></a></li>--}}
{{--                </ul>--}}
            </div>

        </aside>

        <div id="colorlib-main">
            <section id="colorlib-hero" class="js-fullheight" data-section="{{ $menu['key0']['nav'] }}">
                <div class="flexslider js-fullheight">
                    <ul class="slides">
                        @foreach($slides as $slide)
                            <li style="background-image: url({{ asset('images/slides/'.$slide->image) }});">
                                <div class="overlay"></div>
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-6 col-md-offset-3 col-md-pull-3 col-sm-12 col-xs-12 js-fullheight slider-text">
                                            <div class="slider-text-inner js-fullheight">
                                                <div class="desc">
                                                    <h1>{{ $slide->h1 }}</h1>
                                                    <h2>{{ $slide->h2 }}</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </section>

            <section class="colorlib-about" data-section="{{ $menu['key1']['nav'] }}">
                <div class="colorlib-narrow-content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row row-bottom-padded-sm animate-box" data-animate-effect="fadeInLeft">
                                <div class="col-md-12">
                                    <div class="about-desc">
                                        @include('blocks.head_section',['head' => $menu['key1']['name']])
                                        <h4>Меня зовут Новикова Марина.</h4>
                                        <p>Я графический дизайнер с 4-х летнем опытом работы в цифровом, графическом и веб дизайне.</p>
                                        <p>В своей работе использую следующие инструменты:</p>
                                        <ul>
                                            <li>Adobe (Illustrator, InDesign, Photoshop);</li>
                                            <li>Figma;</li>
                                            <li>Adobe After Effects;</li>
                                            <li>Вlender</li>
                                        </ul>
                                        <p>В основном занимаюсь цифровым дизайном, а именно: разработкой визуального стиля компании (логотипы), созданием брендов, отрисовкой баннеров (на разные тематики), макетов сайтов и приложений (визуальная часть), оформлением постов, историй, стикеров для социальных сетей, презентаций, инфографики для маркетплейсов (в том числе оформление рич-контента), созданием иллюстраций и персонажей (для книг, для настольных игр, визиток, сайтов и так далее), версткой макетов этикеток по брифу (или по заданному шаблону), оформлением постеров, плактов или приглашение (для любых мероприятий), обработка фотографий (ретушь) и цветокррекция</p>
                                        <h4>Преимущества работы со мной:</h4>
                                        <ul>
                                            <li>Создаю дизайны под различные устройства (десктоп, планшеты, смартфоны и так далее);</li>
                                            <li>Соблюдаю дедлайны как никто другой;</li>
                                            <li>Уровень английского Intermediate  (открыта к проектам с инностранными заказчиками);</li>
                                            <li>Большой опыт общения с заказчиками;</li>
                                            <li>Коммуникабельность, умение доносить свою точку зрения;</li>
                                            <li>Всегда открыта к новым и интересным проектам!</li>
                                        </ul>
                                        <p>Буду рада помочь Вам в создание дизайна для продвижения Вашей компании на российском и иностранном рынках!</p>
                                        <a href="{{ asset('resume.pdf') }}" target="_blank"><button class="btn btn-primary">Резюме во вложении</button></a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <?php $count = 0; ?>
                                @foreach($directions as $k => $item)
                                    <div class="col-md-4 animate-box" data-animate-effect="{{ $fadeIn[$count] }}">
                                        <div class="services color-{{ $k+1 }}">
                                            <span class="icon2"><i class="{{ $item->icon }}"></i></span>
                                            <h3>{{ $item->name }}</h3>
                                        </div>
                                    </div>
                                    @if ($count < count($directions))
                                        <?php $count++; ?>
                                    @else
                                        <?php $count = 0; ?>
                                    @endif
                                @endforeach
                            </div>
                            <div class="row">
                                <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                                    <div class="hire">
                                        <h2>Буду рада помочь Вам в создание дизайна<br>для продвижения Вашей компании на российском и иностранном рынках!</h2>
{{--                                        <a href="#" class="btn-hire">Hire me</a>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div id="colorlib-counter" class="colorlib-counters" style="background-image: url({{ asset('images/cover_bg_1.jpg') }});" data-stellar-background-ratio="0.5">
                <div class="overlay"></div>
                <div class="colorlib-narrow-content">
                    <div class="row">
                    </div>
                    <div class="row">
                        @foreach($pieces as $piece)
                            <div class="col-md-3 text-center animate-box">
                                <span class="colorlib-counter js-counter" data-from="0" data-to="{{ $piece->data }}" data-speed="5000" data-refresh-interval="50"></span>
                                <span class="colorlib-counter-label">{{ $piece->label }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <section class="colorlib-skills" data-section="{{ $menu['key2']['nav'] }}">
                <div class="colorlib-narrow-content">
                    @include('blocks.full_head_section',['head' => $menu['key2']['name']])
                    <div class="row">
                        <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                            <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
                        </div>
                        @foreach($skills as $k => $skill)
                            <div class="col-md-6 animate-box" data-animate-effect="{{ $k%2 ? 'fadeInRight' : 'fadeInLeft' }}">
                                <div class="progress-wrap">
                                    <h3>{{ $skill->name }}</h3>
                                    <div class="progress">
                                        <div class="progress-bar color-1" role="progressbar" aria-valuenow="{{ $skill->val }}"
                                             aria-valuemin="0" aria-valuemax="100" style="width:{{ $skill->val }}%">
                                            <span>{{ $skill->val }}%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>

            <section class="colorlib-education" data-section="{{ $menu['key3']['nav'] }}">
                <div class="colorlib-narrow-content">
                    @include('blocks.full_head_section',['head' => $menu['key3']['name']])
                    <div class="row">
                        <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                            <div class="fancy-collapse-panel">
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    @foreach($education as $k => $item)
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="heading{{ $k }}">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{ $k }}" aria-expanded="false" aria-controls="collapse{{ $k }}">{{ $item->name }}</a>
                                                </h4>
                                            </div>
                                            <div id="collapse{{ $k }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading{{ $k }}">
                                                <div class="panel-body">
                                                    <div class="row">
                                                        <p>{{ $item->description }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="colorlib-experience" data-section="{{ $menu['key4']['nav'] }}">
                <div class="colorlib-narrow-content">
                    @include('blocks.full_head_section',['head' => $menu['key4']['name']])
                    <div class="row">
                        <div class="col-md-12">
                            <div class="timeline-centered">
                                @foreach($experiences as $k => $experience)
                                    <article class="timeline-entry animate-box" data-animate-effect="fadeInLeft">
                                        <div class="timeline-entry-inner">
                                            <div class="timeline-icon color-{{ $k+1 }}"><i class="icon-pen2"></i></div>
                                            <div class="timeline-label">
                                                <h2>{{ $experience->company }} <span>{{ $experience->years }}</span></h2>
                                                <h3>{{ $experience->title }}</h3>
                                                {!! $experience->description !!}
                                            </div>
                                        </div>
                                    </article>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="colorlib-work" data-section="{{ $menu['key5']['nav'] }}">
                <div class="colorlib-narrow-content">
                    @include('blocks.full_head_section',['head' => $menu['key5']['name']])
                    <div class="row row-bottom-padded-sm animate-box" data-animate-effect="fadeInLeft">
                        <div class="col-md-12">
                            <p class="work-menu">
                                @foreach($directions as $direction)
                                    <span><a href="portfolio{{ $direction->id }}" class="direction {{ $loop->first ? 'active' : '' }}">{{ $direction->name }}</a></span>
                                @endforeach
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        @foreach($directions as $k => $direction)
                            <div id="portfolio{{ $direction->id }}" class="portfolio {{ !$k ? 'active' : '' }}">
                                @foreach($direction->works as $work)
                                    <div class="col-md-6 {{ !$k ? 'animate-box' : '' }}" {{ !$k ? 'data-animate-effect=fadeInLeft' : '' }}>
                                        <div class="project" style="background-image: url({{ asset('images/portfolio/'.$work->preview) }});">
                                            <a href="{{ asset('images/portfolio/'.$work->full) }}" class="img-preview"><img src="{{ asset('images/portfolio/'.$work->preview) }}" class="w-100" /></a>
{{--                                                <div class="desc">--}}
{{--                                                    <div class="con">--}}
{{--                                                        <h3>{{ $work->name }}</h3>--}}
{{--                                                        <span>{{ $work->descriptiom }}</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endforeach
                    </div>
{{--                    <div class="row">--}}
{{--                        <div class="col-md-12 animate-box">--}}
{{--                            <p><a href="#" class="btn btn-primary btn-lg btn-load-more">Load more <i class="icon-reload"></i></a></p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </section>

            <section class="colorlib-contact" data-section="{{ $menu['key6']['nav'] }}">
                <div class="colorlib-narrow-content">
                    @include('blocks.full_head_section',['head' => $menu['key6']['name']])
                    <div class="row">
                        <div class="col-md-5">
                            @include('blocks.contact',['icon' => 'icon-mail', 'isTel' => false, 'contact' => 'mmp2508@yandex.ru'])
                            @include('blocks.contact',['icon' => 'icon-phone', 'isTel' => true, 'contact' => '+7(964)624-47-81'])
                        </div>
                        <div class="col-md-7 col-md-push-1">
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1 col-md-pull-1 animate-box" data-animate-effect="fadeInRight">
                                    <form action="{{ route('feedback') }}" method="post" class="form">
                                        @csrf
                                        @include('blocks.input',[
                                            'type' => 'text',
                                            'name' => 'name',
                                            'placeholder' => 'Ваше имя'
                                        ])
                                        @include('blocks.input',[
                                            'type' => 'text',
                                            'name' => 'phone',
                                            'placeholder' => 'Ваш телефон'
                                        ])
                                        @include('blocks.input',[
                                            'type' => 'email',
                                            'name' => 'email',
                                            'placeholder' => 'Ваш e-mail'
                                        ])
                                        <div class="form-group">
                                            <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Ваше сообщение"></textarea>
                                            @include('blocks.error', ['name' => 'message'])
                                        </div>
                                        @include('blocks.checkbox',[
                                            'id' => 'agree-check',
                                            'checked' => true,
                                            'name' => 'agree',
                                            'label' => 'Даю согласие на обработку персональных данных',
                                        ])
                                        <div class="form-group">
                                            <button type="submit" disabled class="btn btn-primary btn-send-message">Отправить</button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div><!-- end:colorlib-main -->
    </div><!-- end:container-wrap -->
</div><!-- end:colorlib-page -->

<!-- jQuery -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<!-- jQuery Easing -->
<script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- Waypoints -->
<script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
<!-- Flexslider -->
<script src="{{ asset('js/jquery.flexslider-min.js') }}"></script>
<!-- Owl carousel -->
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<!-- Counters -->
<script src="{{ asset('js/jquery.countTo.js') }}"></script>
<!-- Fancybox -->
<script src="{{ asset('js/fancybox.min.js') }}"></script>
<!-- Maskedinput -->
<script src="{{ asset('js/jquery.maskedinput.js') }}"></script>
<!-- feedback -->
<script src="{{ asset('js/feedback.js') }}"></script>
<!-- MAIN JS -->
<script src="{{ asset('js/main.js') }}"></script>

</body>
</html>
