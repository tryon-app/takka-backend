@extends('layouts.landing.app')

@section('title', bs_data($settings, 'business_name', 1))
@section('mobile_home_shell', true)

@section('content')
    <main class="takka-mobile-home" aria-label="Takka service marketplace home page">
        <section class="phone-shell">
            <div class="status-bar" aria-hidden="true">
                <strong>9:41</strong>
                <div class="status-icons">
                    <i class="las la-signal"></i>
                    <i class="las la-wifi"></i>
                    <span class="battery">100</span>
                </div>
            </div>

            <header class="app-header">
                <a href="{{ route('home') }}" class="brand-mark" aria-label="Takka home">
                    <span class="tap-logo" aria-hidden="true">
                        <i class="las la-hand-pointer"></i>
                    </span>
                    <span class="brand-copy">
                        <span class="brand-ar">تكة</span>
                        <span class="brand-en">TAKKA</span>
                    </span>
                </a>
                <label class="search-box" for="home-service-search">
                    <i class="las la-search" aria-hidden="true"></i>
                    <input id="home-service-search" type="search" placeholder="Search services..." autocomplete="off">
                </label>
                <button class="icon-button" type="button" aria-label="Notifications">
                    <i class="lar la-bell"></i>
                    <span></span>
                </button>
            </header>

            <section class="hero-card">
                <div class="hero-content">
                    <h1>Trusted help,<br>right when<br><span>you need it</span></h1>
                    <p>Request a service.<br>Receive offers from verified pros.</p>
                    <a href="#popular-services" class="primary-action">Request a Service</a>
                </div>
                <div class="hero-visual" aria-hidden="true">
                    <div class="hero-badge"><i class="las la-check"></i></div>
                    <div class="city-silhouette">
                        <span></span><span></span><span></span><span></span>
                    </div>
                    <img src="{{ asset('public/assets/landing/img/service/pop1.png') }}" alt="">
                </div>
                <div class="hero-features" aria-label="Service benefits">
                    <div>
                        <i class="las la-check"></i>
                        <span><strong>Verified Pros</strong><small>Background checked</small></span>
                    </div>
                    <div>
                        <i class="las la-tags"></i>
                        <span><strong>Fair Offers</strong><small>Compare &amp; choose</small></span>
                    </div>
                    <div>
                        <i class="las la-clock"></i>
                        <span><strong>On-time Support</strong><small>When you need it</small></span>
                    </div>
                </div>
            </section>

            <div class="pager-dots" aria-hidden="true"><span class="active"></span><span></span><span></span><span></span></div>

            <section class="content-section" aria-labelledby="categories-title">
                <div class="section-heading">
                    <h2 id="categories-title">Browse by Category</h2>
                    <a href="#">See All <i class="las la-angle-right"></i></a>
                </div>
                <div class="category-grid">
                    @php
                        $mockCategories = [
                            ['Home Services', 'las la-home', 'gold'],
                            ['Cleaning', 'las la-broom', 'blue'],
                            ['Maintenance', 'las la-wrench', 'green'],
                            ['Moving', 'las la-truck', 'purple'],
                            ['Beauty', 'las la-user-alt', 'pink'],
                            ['Plumbing', 'las la-faucet', 'teal'],
                            ['Electrical', 'las la-bolt', 'orange'],
                            ['Tutors', 'las la-graduation-cap', 'royal'],
                            ['Pest Control', 'las la-bug', 'lime'],
                            ['More', 'las la-th-large', 'gray'],
                        ];
                    @endphp
                    @foreach ($mockCategories as [$label, $icon, $tone])
                        <a href="#" class="category-tile {{ $tone }}">
                            <i class="{{ $icon }}" aria-hidden="true"></i>
                            <span>{{ $label }}</span>
                        </a>
                    @endforeach
                </div>
            </section>

            <section class="content-section popular-section" id="popular-services" aria-labelledby="popular-title">
                <div class="section-heading">
                    <h2 id="popular-title">Popular Services</h2>
                    <a href="#">See All <i class="las la-angle-right"></i></a>
                </div>
                <div class="service-row">
                    @php
                        $popularServices = [
                            ['Room Cleaning', '4.8', '320', 'Fast responses', 'Request Service', 'public/assets/landing/img/banner/4.png'],
                            ['Furniture Assembly', '4.7', '280', 'Multiple pros available', 'Get Offers', 'public/assets/landing/img/service/pop2.png'],
                            ['AC Repair', '4.9', '210', 'Verified professionals', 'Get Offers', 'public/assets/landing/img/service/pop1.png'],
                            ['Home Deep Cleaning', '4.8', '190', 'Trusted by customers', 'Request Service', 'public/assets/landing/img/banner/3.png'],
                        ];
                    @endphp
                    @foreach ($popularServices as [$title, $rating, $reviews, $note, $button, $image])
                        <article class="service-card">
                            <div class="service-image">
                                <img src="{{ asset($image) }}" alt="{{ $title }}">
                                <button type="button" aria-label="Save {{ $title }}"><i class="lar la-heart"></i></button>
                            </div>
                            <div class="service-info">
                                <h3>{{ $title }}</h3>
                                <p class="rating"><i class="las la-star"></i> {{ $rating }} <span>({{ $reviews }})</span></p>
                                <p>{{ $note }}</p>
                                <a href="#">{{ $button }}</a>
                            </div>
                        </article>
                    @endforeach
                </div>
            </section>

            <section class="trust-strip" aria-label="Trust highlights">
                <div><i class="las la-shield-alt"></i><span><strong>Verified Professionals</strong><small>Background checked</small></span></div>
                <div><i class="las la-tags"></i><span><strong>Fair &amp; Transparent</strong><small>Compare offers easily</small></span></div>
                <div><i class="las la-clock"></i><span><strong>On-time Support</strong><small>When you need it</small></span></div>
            </section>

            <nav class="bottom-nav" aria-label="Mobile navigation">
                <a class="active" href="#"><i class="las la-home"></i><span>Home</span></a>
                <a href="#categories-title"><i class="las la-th-large"></i><span>Categories</span></a>
                <a href="#"><i class="las la-shopping-bag"></i><span>Requests</span></a>
                <a href="#"><i class="lar la-bell"></i><em>2</em><span>Notifications</span></a>
                <a href="#"><i class="lar la-user"></i><span>Account</span></a>
            </nav>
        </section>
    </main>

    <style>
        body:has(.takka-mobile-home) {
            background: #f5f6f8;
            color: #111820;
            font-family: 'Inter', system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
        }

        body:has(.takka-mobile-home) .preloader,
        body:has(.takka-mobile-home) .navbar-top,
        body:has(.takka-mobile-home) header:not(.app-header),
        body:has(.takka-mobile-home) .subscribe-newsletter,
        body:has(.takka-mobile-home) footer {
            display: none !important;
        }

        .takka-mobile-home,
        .takka-mobile-home * {
            box-sizing: border-box;
        }

        .takka-mobile-home a {
            text-decoration: none;
        }

        .phone-shell {
            position: relative;
            width: min(100%, 430px);
            min-height: 100vh;
            margin: 0 auto;
            padding: 12px 18px 104px;
            overflow: hidden;
            background: #fff;
            box-shadow: 0 24px 80px rgba(17, 24, 39, .10);
        }

        .status-bar,
        .app-header,
        .status-icons,
        .brand-mark,
        .search-box,
        .hero-features,
        .hero-features div,
        .section-heading,
        .trust-strip,
        .trust-strip div,
        .bottom-nav {
            display: flex;
            align-items: center;
        }

        .status-bar {
            justify-content: space-between;
            height: 30px;
            color: #050505;
            font-size: 17px;
            letter-spacing: -.03em;
        }

        .status-icons {
            gap: 7px;
            font-size: 20px;
        }

        .battery {
            display: inline-flex;
            align-items: center;
            height: 22px;
            padding: 1px 5px;
            border-radius: 6px;
            background: #050505;
            color: #fff;
            font-size: 15px;
            font-weight: 800;
        }

        .app-header {
            gap: 12px;
            margin-top: 10px;
        }

        .brand-mark {
            flex: 0 0 auto;
            gap: 8px;
            color: #0f1720;
        }

        .tap-logo {
            position: relative;
            display: grid;
            width: 40px;
            height: 40px;
            place-items: center;
            border: 2px solid #101820;
            border-radius: 13px 13px 18px 18px;
            background: linear-gradient(145deg, #ffd51e, #ffb900);
            color: #101820;
            transform: rotate(24deg);
            box-shadow: inset 0 -3px 0 rgba(255, 255, 255, .35);
        }

        .tap-logo::before,
        .tap-logo::after {
            position: absolute;
            content: '';
            background: #f5b800;
            border-radius: 99px;
        }

        .tap-logo::before {
            width: 3px;
            height: 12px;
            top: -12px;
            left: 11px;
        }

        .tap-logo::after {
            width: 14px;
            height: 3px;
            top: -4px;
            left: -11px;
            transform: rotate(-38deg);
        }

        .tap-logo i {
            font-size: 28px;
            transform: rotate(-24deg);
        }

        .brand-copy {
            display: grid;
            line-height: .85;
        }

        .brand-ar {
            font-size: 25px;
            font-weight: 800;
            letter-spacing: -.04em;
        }

        .brand-en {
            margin-top: 6px;
            font-size: 10px;
            font-weight: 800;
            letter-spacing: .35em;
        }

        .search-box {
            flex: 1 1 auto;
            min-width: 0;
            height: 38px;
            gap: 8px;
            padding: 0 13px;
            border: 1px solid #d9dee7;
            border-radius: 18px;
            background: #fff;
            box-shadow: 0 10px 28px rgba(30, 41, 59, .05);
        }

        .search-box i {
            color: #6b7280;
            font-size: 22px;
        }

        .search-box input {
            width: 100%;
            min-width: 0;
            border: 0;
            outline: 0;
            color: #111827;
            font: 500 13px/1 'Inter', sans-serif;
        }

        .search-box input::placeholder {
            color: #687386;
        }

        .icon-button {
            position: relative;
            display: grid;
            flex: 0 0 34px;
            width: 34px;
            height: 34px;
            place-items: center;
            border: 0;
            background: transparent;
            color: #0c1118;
            font-size: 27px;
        }

        .icon-button span {
            position: absolute;
            top: 1px;
            right: 2px;
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: #ffc107;
        }

        .hero-card {
            position: relative;
            min-height: 214px;
            margin-top: 18px;
            padding: 18px 16px 14px;
            overflow: hidden;
            border: 1px solid #f3dba5;
            border-radius: 22px;
            background:
                radial-gradient(circle at 98% 8%, rgba(255, 193, 7, .18) 0 7px, transparent 8px),
                radial-gradient(circle at 70% 32%, rgba(255, 213, 79, .22) 0 18px, transparent 19px),
                linear-gradient(107deg, #fff8e8 0%, #fffef6 47%, #ffe9a9 100%);
        }

        .hero-content {
            position: relative;
            z-index: 3;
            width: 56%;
        }

        .hero-content h1 {
            margin: 0;
            color: #151d29;
            font-size: clamp(30px, 7.6vw, 42px);
            font-weight: 800;
            letter-spacing: -.055em;
            line-height: .98;
        }

        .hero-content h1 span {
            color: #f3b300;
        }

        .hero-content p {
            margin: 13px 0 13px;
            color: #1f2937;
            font-size: 13px;
            line-height: 1.35;
        }

        .primary-action {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 34px;
            padding: 0 17px;
            border-radius: 12px;
            background: #121922;
            color: #fff;
            font-size: 13px;
            font-weight: 800;
            box-shadow: 0 12px 24px rgba(15, 23, 42, .22);
        }

        .hero-visual {
            position: absolute;
            inset: 0 0 34px auto;
            z-index: 1;
            width: 54%;
        }

        .hero-visual::after {
            position: absolute;
            right: -36px;
            bottom: -22px;
            width: 176px;
            height: 176px;
            content: '';
            border-radius: 50%;
            background: rgba(244, 189, 34, .28);
        }

        .hero-visual img {
            position: absolute;
            right: -34px;
            bottom: 0;
            z-index: 2;
            width: 188px;
            height: 188px;
            object-fit: cover;
            object-position: 49% 20%;
            border-radius: 50% 0 0 50%;
            filter: saturate(.9) contrast(1.04);
        }

        .hero-badge {
            position: absolute;
            z-index: 3;
            top: 64px;
            left: 8px;
            display: grid;
            width: 56px;
            height: 62px;
            place-items: center;
            border-radius: 20px 20px 28px 28px;
            background: linear-gradient(160deg, #ffd22d, #f5ad00);
            color: #fff;
            font-size: 32px;
            box-shadow: 0 12px 30px rgba(245, 173, 0, .28);
            clip-path: polygon(50% 0, 96% 17%, 88% 82%, 50% 100%, 12% 82%, 4% 17%);
        }

        .city-silhouette {
            position: absolute;
            right: 0;
            bottom: 0;
            z-index: 1;
            display: flex;
            align-items: flex-end;
            gap: 8px;
            opacity: .32;
        }

        .city-silhouette span {
            display: block;
            width: 28px;
            border: 2px solid #e0a51a;
            border-bottom: 0;
            border-radius: 16px 16px 0 0;
        }

        .city-silhouette span:nth-child(1) { height: 56px; }
        .city-silhouette span:nth-child(2) { height: 76px; width: 16px; border-radius: 10px 10px 0 0; }
        .city-silhouette span:nth-child(3) { height: 66px; width: 48px; }
        .city-silhouette span:nth-child(4) { height: 44px; width: 38px; }

        .hero-features {
            position: absolute;
            right: 14px;
            bottom: 12px;
            left: 14px;
            z-index: 4;
            justify-content: space-between;
            gap: 8px;
        }

        .hero-features div {
            gap: 7px;
            min-width: 0;
        }

        .hero-features i,
        .trust-strip i {
            display: grid;
            flex: 0 0 24px;
            width: 24px;
            height: 24px;
            place-items: center;
            border-radius: 50%;
            background: #f5b800;
            color: #fff;
            font-size: 16px;
        }

        .hero-features strong,
        .hero-features small,
        .trust-strip strong,
        .trust-strip small {
            display: block;
            white-space: nowrap;
        }

        .hero-features strong {
            color: #111827;
            font-size: 10px;
            font-weight: 700;
        }

        .hero-features small {
            color: #1f2937;
            font-size: 9px;
        }

        .pager-dots {
            display: flex;
            justify-content: center;
            gap: 8px;
            margin: 12px 0 24px;
        }

        .pager-dots span {
            width: 7px;
            height: 7px;
            border-radius: 50%;
            background: #d6dbe2;
        }

        .pager-dots .active {
            background: #f5b800;
        }

        .content-section {
            margin-top: 22px;
        }

        .section-heading {
            justify-content: space-between;
            gap: 16px;
            margin-bottom: 14px;
        }

        .section-heading h2 {
            margin: 0;
            color: #0e131b;
            font-size: 20px;
            font-weight: 800;
            letter-spacing: -.045em;
        }

        .section-heading a {
            display: inline-flex;
            align-items: center;
            gap: 2px;
            color: #eca900;
            font-size: 14px;
            font-weight: 500;
            text-decoration: underline;
        }

        .category-grid {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 13px 16px;
        }

        .category-tile {
            display: grid;
            min-height: 66px;
            place-items: center;
            padding: 9px 4px 8px;
            border-radius: 15px;
            color: #111827;
            text-align: center;
            box-shadow: inset 0 0 26px rgba(255, 255, 255, .62);
        }

        .category-tile i {
            margin-bottom: 4px;
            font-size: 29px;
        }

        .category-tile span {
            font-size: 10px;
            font-weight: 500;
            line-height: 1.05;
        }

        .category-tile.gold { background: #fff7e7; }
        .category-tile.gold i { color: #f2b400; }
        .category-tile.blue { background: #f0f5ff; }
        .category-tile.blue i { color: #3d7bd6; }
        .category-tile.green { background: #f1f8ee; }
        .category-tile.green i { color: #58ab32; }
        .category-tile.purple { background: #f7effb; }
        .category-tile.purple i { color: #8e55c5; }
        .category-tile.pink { background: #fff0f5; }
        .category-tile.pink i { color: #e46b91; }
        .category-tile.teal { background: #eefafa; }
        .category-tile.teal i { color: #24b7b7; }
        .category-tile.orange { background: #fff6ee; }
        .category-tile.orange i { color: #ff9800; }
        .category-tile.royal { background: #f1f5ff; }
        .category-tile.royal i { color: #4074d7; }
        .category-tile.lime { background: #f3f8ef; }
        .category-tile.lime i { color: #55a630; }
        .category-tile.gray { background: #f7f7f7; }
        .category-tile.gray i { color: #808997; }

        .popular-section {
            margin-top: 28px;
        }

        .service-row {
            display: grid;
            grid-auto-columns: 45%;
            grid-auto-flow: column;
            gap: 12px;
            margin: 0 -18px;
            padding: 0 18px 8px;
            overflow-x: auto;
            scrollbar-width: none;
        }

        .service-row::-webkit-scrollbar {
            display: none;
        }

        .service-card {
            overflow: hidden;
            border: 1px solid #e3e7ef;
            border-radius: 15px;
            background: #fff;
            box-shadow: 0 10px 24px rgba(15, 23, 42, .06);
        }

        .service-image {
            position: relative;
            height: 74px;
            overflow: hidden;
        }

        .service-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .service-image button {
            position: absolute;
            top: 7px;
            right: 7px;
            display: grid;
            width: 25px;
            height: 25px;
            place-items: center;
            border: 1px solid #d8dde5;
            border-radius: 50%;
            background: #fff;
            color: #202734;
            font-size: 17px;
        }

        .service-info {
            padding: 9px 8px 8px;
        }

        .service-info h3 {
            min-height: 32px;
            margin: 0 0 4px;
            color: #111827;
            font-size: 14px;
            font-weight: 800;
            letter-spacing: -.035em;
            line-height: 1.04;
        }

        .service-info p {
            margin: 0 0 8px;
            color: #111827;
            font-size: 11px;
            line-height: 1.1;
        }

        .service-info .rating {
            margin-bottom: 7px;
            font-size: 12px;
        }

        .rating i {
            color: #f6b900;
        }

        .rating span {
            color: #536072;
        }

        .service-info a {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 28px;
            border-radius: 8px;
            background: linear-gradient(180deg, #ffd21a, #f4b800);
            color: #050505;
            font-size: 11px;
            font-weight: 700;
        }

        .trust-strip {
            justify-content: space-around;
            gap: 10px;
            margin-top: 16px;
            padding: 11px 14px;
            border-radius: 16px;
            background: #fff;
            box-shadow: 0 10px 35px rgba(15, 23, 42, .08);
        }

        .trust-strip div {
            gap: 8px;
        }

        .trust-strip i {
            flex-basis: 27px;
            width: 27px;
            height: 27px;
        }

        .trust-strip strong {
            color: #111827;
            font-size: 10px;
            font-weight: 700;
        }

        .trust-strip small {
            color: #334155;
            font-size: 9px;
        }

        .bottom-nav {
            position: fixed;
            right: max(0px, calc((100vw - 430px) / 2));
            bottom: 0;
            left: max(0px, calc((100vw - 430px) / 2));
            z-index: 10;
            justify-content: space-around;
            height: 72px;
            padding: 8px 10px 12px;
            border-top: 1px solid #edf0f4;
            background: rgba(255, 255, 255, .96);
            box-shadow: 0 -12px 30px rgba(15, 23, 42, .08);
            backdrop-filter: blur(18px);
        }

        .bottom-nav::after {
            position: absolute;
            bottom: 5px;
            left: 50%;
            width: 120px;
            height: 4px;
            content: '';
            border-radius: 999px;
            background: #050505;
            transform: translateX(-50%);
        }

        .bottom-nav a {
            position: relative;
            display: grid;
            min-width: 54px;
            place-items: center;
            color: #687386;
            font-size: 10px;
            line-height: 1;
        }

        .bottom-nav i {
            margin-bottom: 4px;
            font-size: 23px;
        }

        .bottom-nav .active {
            color: #f1b400;
        }

        .bottom-nav em {
            position: absolute;
            top: -2px;
            right: 12px;
            display: grid;
            width: 17px;
            height: 17px;
            place-items: center;
            border-radius: 50%;
            background: #f5c400;
            color: #0f172a;
            font-size: 10px;
            font-style: normal;
            font-weight: 800;
        }

        @media (max-width: 390px) {
            .phone-shell {
                padding-inline: 14px;
            }

            .brand-copy {
                display: none;
            }

            .hero-content {
                width: 58%;
            }

            .hero-content h1 {
                font-size: 28px;
            }

            .hero-visual img {
                right: -54px;
            }

            .category-grid {
                gap: 11px 10px;
            }

            .service-row {
                grid-auto-columns: 48%;
                margin-inline: -14px;
                padding-inline: 14px;
            }

            .trust-strip {
                align-items: flex-start;
                flex-direction: column;
            }
        }
    </style>
@endsection
