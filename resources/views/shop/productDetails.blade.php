@extends('layout.layout')

@php
$css= '<link rel="stylesheet" href="' . asset('assets/css/variables/variable4.css') . '" />';
$header='flase';
$footer='flase';
@endphp

@section('content')

    <!-- ..::Header Section Start Here::.. -->
    <header id="rtsHeader">
        <div class="header-topbar header-topbar3 header-topbar4">
            <div class="container header-container">
                <div class="header-top-inner">
                    <h3 class="welcome-text"><i class="rt-truck"></i> Free shipping for all orders of <span
                            class="value">150$</span></h3>
                    <div class="topbar-action">
                        <a href="#" class="action-item mr--40"><i class="rt-store"></i> Store Location<span
                                class="separator"></span></a>
                        <a href="#" class="action-item"><i class="rt-location-dot"></i> Track Order</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar-wrapper">
            <div class="navbar-part navbar-part3 navbar-part4">
                <div class="container">
                    <div class="navbar-inner navbar-inner5">
                        <div class="navbar-search-area">
                            <div class="search-input-inner">
                                <select class="custom-select">
                                    <option value="hide">All Catagory</option>
                                    <option value="all">All</option>
                                    <option value="men">Men</option>
                                    <option value="women">Women</option>
                                    <option value="shoes">Shoes</option>
                                    <option value="shoes">Glasses</option>
                                    <option value="shoes">Bags</option>
                                    <option value="shoes">Assesories</option>
                                </select>
                                <div class="input-div">
                                    <div class="search-input-icon"><i class="rt-search mr--10"></i>Search</div>
                                    <input class="search-input input5" type="text" placeholder="Keyword here...">
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('index') }}" class="logo"><img src="{{ asset('assets/images/logo2.png') }}" alt="weiboo-logo"></a>
                        <div class="navbar-select-area">
                            <select class="topbar-select custom-select">
                                <option value="eng">Eng</option>
                                <option value="esp">esp</option>
                                <option value="ban">Ban</option>
                            </select>
                            <select class="topbar-select custom-select last-child">
                                <option value="usd">USD</option>
                                <option value="eur">Euro</option>
                                <option value="tk">Taka</option>
                            </select>
                        </div>
                        <div class="header-action-items header-action-items1">
                            <div class="search-part">
                                <div class="search-icon action-item icon"><i class="rt-search"></i></div>
                                <div class="search-input-area">
                                    <div class="container">
                                        <div class="search-input-inner inner-2">
                                            <div class="input-div">
                                                <input class="search-input input4" type="text"
                                                    placeholder="Search by keyword or #">
                                            </div>
                                            <div class="search-close-icon"><i class="rt-xmark"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cart action-item">
                                <div class="cart-nav">
                                    <div class="cart-icon icon"><i class="rt-cart"></i><span
                                            class="wishlist-dot icon-dot">3</span></div>
                                </div>
                            </div>
                            <div class="wishlist action-item">
                                <div class="favourite-icon icon"><a href="{{ route('wishlist') }}"><i class="rt-heart"></i></a>
                                </div>
                            </div>
                            <a href="{{ route('login') }}" class="account"><i class="rt-user-2"></i></a>
                        </div>
                        <div class="hamburger"><span></span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar-sticky lower-navbar-sticky lower-navbar-sticky4">
            <div class="navbar-part navbar-part2 lower-navbar lower-navbar4">
                <div class="container">
                    <div class="navbar-inner">
                        <a href="{{ route('index') }}" class="logo"><img src="{{ asset('assets/images/logo4.svg') }}" alt="umart-logo"></a>
                        <div class="navbar-coupon-code">
                            <div class="icon"><img src="{{ asset('assets/images/icons/percent-tag.png') }}" alt="tag-icon"></div>
                            <div class="content">
                                <span class="title">COUPON CODE</span>
                                <span class="code">WEIBOO45%</span>
                            </div>
                        </div>
                        <div class="rts-menu">
                            <nav class="menus menu-toggle">
                                <ul class="nav__menu">
                                    <li class="has-dropdown"><a class="menu-item active1" href="#">Home <i
                                                class="rt-plus"></i></a>
                                        <ul class="dropdown-ul">
                                            <li class="dropdown-li"><a class="dropdown-link" href="{{ route('index') }}">Main
                                                Home</a>
                                            </li>
                                            <li class="dropdown-li"><a class="dropdown-link"
                                                    href="{{ route('indexTwo') }}">Fashion
                                                    Home</a>
                                            </li>
                                            <li class="dropdown-li"><a class="dropdown-link"
                                                    href="{{ route('indexNine') }}">Fashion
                                                    Home Two</a>
                                            </li>
                                            <li class="dropdown-li"><a class="dropdown-link"
                                                    href="{{ route('indexThree') }}">Furniture
                                                    Home</a>
                                            </li>
                                            <li class="dropdown-li"><a class="dropdown-link"
                                                    href="{{ route('indexFour') }}">Decor
                                                    Home</a>
                                            </li>
                                            <li class="dropdown-li"><a class="dropdown-link active"
                                                    href="{{ route('indexFive') }}">Electronics
                                                    Home</a>
                                            </li>
                                            <li class="dropdown-li"><a class="dropdown-link"
                                                    href="{{ route('indexSix') }}">Grocery
                                                    Home</a>
                                            </li>
                                            <li class="dropdown-li"><a class="dropdown-link"
                                                    href="{{ route('indexSeven') }}">Footwear
                                                    Home</a>
                                            </li>
                                            <li class="dropdown-li"><a class="dropdown-link"
                                                href="{{ route('indexEight') }}">Gaming
                                                Home</a>
                                            </li>
                                            <li class="dropdown-li"><a class="dropdown-link"
                                                href="{{ route('indexTen') }}">Sunglass
                                                Home</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="has-dropdown"><a class="menu-item" href="#">Shop <i
                                                class="rt-plus"></i></a>
                                        <ul class="dropdown-ul mega-dropdown">
                                            <li class="mega-dropdown-li">
                                                <ul class="mega-dropdown-ul">
                                                    <li class="dropdown-li"><a class="dropdown-link"
                                                            href="{{ route('shop') }}">Shop</a>
                                                    </li>
                                                    <li class="dropdown-li"><a class="dropdown-link"
                                                            href="{{ route('sidebarLeft') }}">Left Sidebar Shop</a>
                                                    </li>
                                                    <li class="dropdown-li"><a class="dropdown-link"
                                                            href="{{ route('sidebarRight') }}">Right Sidebar Shop</a>
                                                    </li>
                                                    <li class="dropdown-li"><a class="dropdown-link"
                                                            href="{{ route('fullWidthShop') }}">Full Width Shop</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="mega-dropdown-li">
                                                <ul class="mega-dropdown-ul">
                                                    <li class="dropdown-li"><a class="dropdown-link"
                                                            href="{{ route('productDetails') }}">Single Product Layout
                                                            One</a>
                                                    </li>
                                                    <li class="dropdown-li"><a class="dropdown-link"
                                                            href="{{ route('productDetails2') }}">Single Product Layout
                                                            Two</a>
                                                    </li>
                                                    <li class="dropdown-li"><a class="dropdown-link"
                                                            href="{{ route('variableProducts') }}">Variable Product</a>
                                                    </li>
                                                    <li class="dropdown-li"><a class="dropdown-link"
                                                            href="{{ route('groupedProducts') }}">Grouped Product</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="mega-dropdown-li last-child">
                                                <ul class="mega-dropdown-ul">
                                                    <li class="dropdown-li"><a class="dropdown-link"
                                                            href="{{ route('cart') }}">Cart</a>
                                                    </li>
                                                    <li class="dropdown-li"><a class="dropdown-link"
                                                            href="{{ route('checkOut') }}">Checkout</a>
                                                    </li>
                                                    <li class="dropdown-li"><a class="dropdown-link"
                                                            href="{{ route('account') }}">My Account</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="has-dropdown"><a class="menu-item" href="#">Pages <i
                                                class="rt-plus"></i></a>
                                        <ul class="dropdown-ul">
                                            <li class="dropdown-li"><a class="dropdown-link" href="{{ route('about') }}">About</a>
                                            </li>
                                            <li class="dropdown-li"><a class="dropdown-link" href="{{ route('faq') }}">FAQ's</a>
                                            </li>
                                            <li class="dropdown-li"><a class="dropdown-link" href="{{ route('errorPage') }}">Error
                                                    404</a></li>

                                        </ul>
                                    </li>

                                    <li class="has-dropdown"><a class="menu-item" href="#">Blog <i
                                                class="rt-plus"></i></a>
                                        <ul class="dropdown-ul">
                                            <li class="dropdown-li"><a class="dropdown-link" href="{{ route('news') }}">Blog</a>
                                            </li>
                                            <li class="dropdown-li"><a class="dropdown-link" href="{{ route('newsGrid') }}">Blog
                                                    Grid</a></li>
                                            <li class="dropdown-li"><a class="dropdown-link"
                                                    href="{{ route('newsDetails') }}">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="menu-item" href="{{ route('contact') }}">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="contact-info ml-auto">
                            <span class="title">Get Support</span>
                            <a href="mailto:pixcelsthemes@gmail.com" class="email-address info">info@webexample.com</a>
                        </div>
                        <div class="hamburger"><span></span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cart-bar">
            <div class="cart-header">
                <h3 class="cart-heading">MY CART (3 ITEMS)</h3>
                <div class="close-cart"><i class="fal fa-times"></i></div>
            </div>
            <div class="product-area">
                <div class="product-item">
                    <div class="product-detail">
                        <div class="product-thumb"><img src="{{ asset('assets/images/slider/image1.jpg') }}" alt="product-thumb"></div>
                        <div class="item-wrapper">
                            <span class="product-name">Parachute Jacket</span>
                            <div class="item-wrapper">
                                <span class="product-variation"><span class="color">Green /</span>
                                    <span class="size">XL</span></span>
                            </div>
                            <div class="item-wrapper">
                                <span class="product-qnty">3 ×</span>
                                <span class="product-price">$198.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="cart-edit">
                        <div class="quantity-edit">
                            <button class="button"><i class="fal fa-minus minus"></i></button>
                            <input type="text" class="input" value="3" />
                            <button class="button plus">+<i class="fal fa-plus plus"></i></button>
                        </div>
                        <div class="item-wrapper d-flex mr--5 align-items-center">
                            <a href="#" class="product-edit"><i class="fal fa-edit"></i></a>
                            <a href="#" class="delete-cart"><i class="fal fa-times"></i></a>
                        </div>
                    </div>
                </div>
                <div class="product-item">
                    <div class="product-detail">
                        <div class="product-thumb"><img src="{{ asset('assets/images/slider/image2.jpg') }}" alt="product-thumb"></div>
                        <div class="item-wrapper">
                            <span class="product-name">Narrow Trouser</span>
                            <div class="item-wrapper">
                                <span class="product-variation"><span class="color">Green /</span>
                                    <span class="size">XL</span></span>
                            </div>
                            <div class="item-wrapper">
                                <span class="product-qnty">2 ×</span>
                                <span class="product-price">$88.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="cart-edit">
                        <div class="quantity-edit">
                            <button class="button"><i class="fal fa-minus minus"></i></button>
                            <input type="text" class="input" value="2" />
                            <button class="button plus">+<i class="fal fa-plus plus"></i></button>
                        </div>
                        <div class="item-wrapper d-flex mr--5 align-items-center">
                            <a href="#" class="product-edit"><i class="fal fa-edit"></i></a>
                            <a href="#" class="delete-cart"><i class="fal fa-times"></i></a>
                        </div>
                    </div>
                </div>
                <div class="product-item last-child">
                    <div class="product-detail">
                        <div class="product-thumb"><img src="{{ asset('assets/images/slider/image5.jpg') }}" alt="product-thumb"></div>
                        <div class="item-wrapper">
                            <span class="product-name">Bellyless Hoodie</span>
                            <div class="item-wrapper">
                                <span class="product-variation"><span class="color">Green /</span>
                                    <span class="size">XL</span></span>
                            </div>
                            <div class="item-wrapper">
                                <span class="product-qnty">1 ×</span>
                                <span class="product-price">$289.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="cart-edit">
                        <div class="quantity-edit">
                            <button class="button"><i class="fal fa-minus minus"></i></button>
                            <input type="text" class="input" value="2" />
                            <button class="button plus">+<i class="fal fa-plus plus"></i></button>
                        </div>
                        <div class="item-wrapper d-flex mr--5 align-items-center">
                            <a href="#" class="product-edit"><i class="fal fa-edit"></i></a>
                            <a href="#" class="delete-cart"><i class="fal fa-times"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cart-bottom-area">
                <span class="spend-shipping"><i class="fal fa-truck"></i> SPENT <span class="amount">$199.00</span> MORE
                    FOR FREE SHIPPING</span>
                <span class="total-price">TOTAL: <span class="price">$556</span></span>
                <a href="{{ route('checkOut') }}" class="checkout-btn cart-btn">PROCEED TO CHECKOUT</a>
                <a href="{{ route('cart') }}" class="view-btn cart-btn">VIEW CART</a>
            </div>
        </div>
        <!-- slide-bar start -->
        <aside class="slide-bar">
            <div class="offset-sidebar">
                <a class="hamburger-1 mobile-hamburger-1 mobile-hamburger-2 ml--30" href="#"><span><i class="rt-xmark"></i></span></a>
            </div>
            <!-- offset-sidebar start -->
            <div class="offset-sidebar-main">
                <div class="offset-widget mb-40">
                    <div class="info-widget">
                        <img src="{{ asset('assets/images/logo1.svg') }}" alt="">
                        <p class="mb-30">
                            We must explain to you how all seds this mistakens idea denouncing pleasures and praising
                            account.
                        </p>
                    </div>
                    <div class="info-widget info-widget2">
                        <h4 class="offset-title mb-20">Get In Touch </h4>
                        <ul>
                            <li class="info phone"><a href="tel:78090790890208806803">780 907 908 90, 208 806 803</a>
                            </li>
                            <li class="info email"><a href="email:pixcelsthemes@gmail.com">pixcelsthemes@gmail.com</a></li>
                            <li class="info web"><a href="www.webexample.com">www.webexample.com</a></li>
                            <li class="info location">13/A, New Pro State, NYC</li>
                        </ul>
                        <div class="offset-social-link">
                            <h4 class="offset-title mb-20">Follow Us </h4>
                            <ul class="social-icon">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fab fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- offset-sidebar end -->
            <!-- side-mobile-menu start -->
            <nav class="side-mobile-menu side-mobile-menu1 side-mobile-menu2">
                <ul id="mobile-menu-active">
                    <li class="has-dropdown firstlvl">
                        <a class="mm-link" href="{{ route('index') }}">Home <i class="rt-angle-down"></i></a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('index') }}">Main Home</a></li>
                            <li><a href="{{ route('indexTwo') }}">Fashion Home</a></li>
                            <li><a href="{{ route('indexNine') }}">Fashion Home Two</a></li>
                            <li><a href="{{ route('indexThree') }}">Furniture Home</a></li>
                            <li><a href="{{ route('indexFour') }}">Decor Home</a></li>
                            <li><a href="{{ route('indexFive') }}">Electronics Home</a></li>
                            <li><a href="{{ route('indexSix') }}">Grocery Home</a></li>
                            <li><a href="{{ route('indexSeven') }}">Footwear Home</a></li>
                            <li><a href="{{ route('indexEight') }}">Gaming Home</a></li>
                            <li><a href="{{ route('indexTen') }}">Sunglass Home</a></li>
                        </ul>
                    </li>
                    <li class="has-dropdown firstlvl">
                        <a class="mm-link" href="{{ route('shop') }}">Shop <i class="rt-angle-down"></i></a>
                        <ul class="sub-menu mega-dropdown-mobile">
                            <li class="mega-dropdown-li">
                                <ul class="mega-dropdown-ul mm-show">
                                    <li class="dropdown-li"><a class="dropdown-link" href="{{ route('shop') }}">Shop</a>
                                    </li>
                                    <li class="dropdown-li"><a class="dropdown-link" href="{{ route('sidebarLeft') }}">Left
                                            Sidebar
                                            Shop</a>
                                    </li>
                                    <li class="dropdown-li"><a class="dropdown-link" href="{{ route('sidebarRight') }}">Right
                                            Sidebar
                                            Shop</a>
                                    </li>
                                    <li class="dropdown-li"><a class="dropdown-link" href="{{ route('fullWidthShop') }}">Full
                                            Width Shop</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="mega-dropdown-li">
                                <ul class="mega-dropdown-ul mm-show">
                                    <li class="dropdown-li"><a class="dropdown-link" href="{{ route('productDetails') }}">Single
                                            Product
                                            Layout
                                            One</a>
                                    </li>
                                    <li class="dropdown-li"><a class="dropdown-link" href="{{ route('productDetails2') }}">Single
                                            Product Layout
                                            Two</a>
                                    </li>
                                    <li class="dropdown-li"><a class="dropdown-link"
                                            href="{{ route('variableProducts') }}">Variable Product</a>
                                    </li>
                                    <li class="dropdown-li"><a class="dropdown-link"
                                            href="{{ route('groupedProducts') }}">Grouped Product</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="mega-dropdown-li">
                                <ul class="mega-dropdown-ul mm-show">
                                    <li class="dropdown-li"><a class="dropdown-link" href="{{ route('cart') }}">Cart
                                        </a>
                                    </li>
                                    <li class="dropdown-li"><a class="dropdown-link" href="{{ route('checkOut') }}">Checkout</a>
                                    </li>
                                    <li class="dropdown-li"><a class="dropdown-link" href="{{ route('account') }}">My
                                            Account</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="has-dropdown firstlvl">
                        <a class="mm-link" href="{{ route('index') }}">Pages <i class="rt-angle-down"></i></a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('about') }}">About</a></li>
                            <li><a href="{{ route('faq') }}">FAQ's</a></li>
                            <li><a href="{{ route('errorPage') }}">Error 404</a></li>
                        </ul>
                    </li>
                    <li class="has-dropdown firstlvl">
                        <a class="mm-link" href="{{ route('news') }}">Blog <i class="rt-angle-down"></i></a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('news') }}">Blog</a></li>
                            <li><a href="{{ route('newsGrid') }}">Blog Grid</a></li>
                            <li><a href="{{ route('newsDetails') }}">Blog Details</a></li>
                        </ul>
                    </li>
                    <li><a class="mm-link" href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </nav>
            <div class="header-action-items header-action-items1 header-action-items-side">
                <div class="search-part">
                    <div class="search-icon action-item icon"><i class="rt-search"></i></div>
                    <div class="search-input-area">
                        <div class="container">
                            <div class="search-input-inner">
                                <select id="custom-select">
                                    <option value="hide">All Catagory</option>
                                    <option value="all">All</option>
                                    <option value="men">Men</option>
                                    <option value="women">Women</option>
                                    <option value="shoes">Shoes</option>
                                    <option value="shoes">Glasses</option>
                                    <option value="shoes">Bags</option>
                                    <option value="shoes">Assesories</option>
                                </select>
                                <div class="input-div">
                                    <div class="search-input-icon"><i class="rt-search mr--10"></i></div>
                                    <input class="search-input" type="text" placeholder="Search by keyword or #">
                                </div>
                                <div class="search-close-icon"><i class="rt-xmark"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cart action-item">
                    <div class="cart-nav">
                        <div class="cart-icon icon"><i class="rt-cart"></i><span class="wishlist-dot icon-dot">3</span>
                        </div>
                    </div>
                </div>
                <div class="wishlist action-item">
                    <div class="favourite-icon icon"><i class="rt-heart"></i><span class="cart-dot icon-dot">0</span>
                    </div>
                </div>
                <a href="{{ route('login') }}" class="account"><i class="rt-user-2"></i></a>
            </div>
            <!-- side-mobile-menu end -->
        </aside>
    </header>
    <!-- ..::Header Section End Here::.. -->

    <!-- ..::Banner Section Start Here::.. -->
    <div class="banner banner-4">
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    <div class="swiper bannerSlider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="{{ route('productDetails') }}" class="product-box product-box-large">
                                    <div class="contents">
                                        <span class="pretitle">Weekend Discount</span>
                                        <h1 class="product-title">Big screens in <br>
                                            incredibly slim <br>
                                            <span>designs...</span></h1>
                                        <span class="product-price">
                                            <span>Starts From</span>
                                            $499.99
                                        </span>
                                    </div>
                                    <div class="product-thumb"><img src="{{ asset('assets/images/products/home4/laptop.webp') }}"
                                            alt="product-thumb"></div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <div class="product-box product-box-large">
                                    <div class="contents">
                                        <span class="pretitle">Weekend Discount</span>
                                        <h1 class="product-title">Big screens in <br>
                                            incredibly slim <br>
                                            <span>designs...</span></h1>
                                        <span class="product-price">
                                            <span>Starts From</span>
                                            $499.99
                                        </span>
                                    </div>
                                    <div class="product-thumb"><img src="{{ asset('assets/images/products/home4/laptop.webp') }}"
                                            alt="product-thumb"></div>
                                </div>
                            </div>
                        </div>
                        <div class="slider-navigation">
                            <div class="swiper-button-prev slider-btn prev"><i class="fal fa-long-arrow-up"></i></div>
                            <div class="swiper-button-next slider-btn next"><i class="fal fa-long-arrow-down"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="row">
                        <div class="col-xl-12">
                            <a href="{{ route('productDetails') }}" class="product-box product-box-medium">
                                <div class="contents">
                                    <span class="pretitle">-45% Offer</span>
                                    <h1 class="product-title">New
                                        <span>Smartphone</span></h1>
                                    <p>Don't miss the last opportunity</p>
                                </div>
                                <div class="product-thumb"><img src="{{ asset('assets/images/products/home4/iphone-13.webp') }}"
                                        alt="product-thumb"></div>
                            </a>
                        </div>
                        <div class="col-xl-12">
                            <a href="{{ route('productDetails') }}" class="product-box product-box-medium product-box-medium2">
                                <div class="contents">
                                    <span class="pretitle">Great Stores</span>
                                    <h1 class="product-title">Call for up to 30% off</h1>
                                    <div class="view-collections go-btn">View Collections <i
                                            class="fal fa-long-arrow-right"></i></div>
                                </div>
                                <div class="product-thumb"><img src="{{ asset('assets/images/products/home4/headphone.webp') }}"
                                        alt="product-thumb"></div>
                            </a>
                        </div>
                        <div class="col-xl-12">
                            <a href="{{ route('productDetails') }}"
                                class="product-box product-box-medium product-box-medium3 product-box-bg">
                                <div class="contents">
                                    <span class="pretitle">SUPER DISCOUNT</span>
                                    <h1 class="product-title">Home Speaker</h1>
                                    <div class="view-collections go-btn">Shop Now <i
                                            class="fal fa-long-arrow-right"></i></div>
                                </div>
                                <div class="product-thumb"><img src="{{ asset('assets/images/products/home4/speaker.webp') }}"
                                        alt="product-thumb"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ..::Banner Section End Here::.. -->

    <!-- ..::Newsletter Section Start Here::.. -->
    <div class="rts-services-section section-gap">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="service-item">
                        <div class="service-icon"><img src="{{ asset('assets/images/icons/shipment.svg') }}" alt="service-icon"></div>
                        <div class="contents">
                            <h3 class="service-title">International Shipment</h3>
                            <p>Orders are shipped seamlessly
                                between countries</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="service-item">
                        <div class="service-icon"><img src="{{ asset('assets/images/icons/support.svg') }}" alt="service-icon">
                        </div>
                        <div class="contents">
                            <h3 class="service-title">Online Support 24/7</h3>
                            <p>Orders are shipped seamlessly
                                between countries</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="service-item">
                        <div class="service-icon"><img src="{{ asset('assets/images/icons/return.svg') }}" alt="service-icon">
                        </div>
                        <div class="contents">
                            <h3 class="service-title">Money Return</h3>
                            <p>Orders are shipped seamlessly
                                between countries</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="service-item">
                        <div class="service-icon"><img src="{{ asset('assets/images/icons/discount.svg') }}" alt="service-icon"></div>
                        <div class="contents">
                            <h3 class="service-title">Member Discount</h3>
                            <p>Orders are shipped seamlessly
                                between countries</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ..::Newsletter Section End Here::.. -->

    <!-- ..::Featured Products Section Start Here::.. -->
    <div class="rts-featured_products-section section-5 section-gap">
        <div class="container">
            <div class="section-header section-header4">
                <span class="section-title section-title-2 mb--5
                ">Featured Products</span>
                <a href="shop-main" class="go-btn">All Products <i class="fal fa-long-arrow-right"></i></a>
            </div>
            <div class="products-area">
                <div class="swiper rts-fiveSlide">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="product-item product-item4">
                                <a href="{{ route('index') }}" class="product-image">
                                    <img src="{{ asset('assets/images/products/home4/1.png') }}" alt="product-image">
                                </a>
                                <div class="bottom-content">
                                    <span class="product-catagory">Electronics</span>
                                    <a href="{{ route('index') }}" class="product-name">Pronix Smart Laptop</a>
                                    <div class="flex-wrap">
                                        <div class="action-wrap">
                                            <span class="product-price">$230,00</span>
                                            <a href="{{ route('index') }}" class="addto-cart"><i class="fal fa-shopping-cart"></i>
                                                Add
                                                To
                                                Cart</a>
                                        </div>
                                        <button class="wishlist-btn"><i class="rt-heart"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-item product-item4">
                                <a href="{{ route('index') }}" class="product-image">
                                    <img src="{{ asset('assets/images/products/home4/2.png') }}" alt="product-image">
                                </a>
                                <div class="bottom-content">
                                    <span class="product-catagory">Electronics</span>
                                    <a href="{{ route('index') }}" class="product-name">Pronix Smart Laptop</a>
                                    <div class="flex-wrap">
                                        <div class="action-wrap">
                                            <span class="product-price">$230,00</span>
                                            <a href="{{ route('index') }}" class="addto-cart"><i class="fal fa-shopping-cart"></i>
                                                Add
                                                To
                                                Cart</a>
                                        </div>
                                        <button class="wishlist-btn"><i class="rt-heart"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-item product-item4">
                                <a href="{{ route('index') }}" class="product-image">
                                    <img src="{{ asset('assets/images/products/home4/3.png') }}" alt="product-image">
                                </a>
                                <div class="bottom-content">
                                    <span class="product-catagory">Electronics</span>
                                    <a href="{{ route('index') }}" class="product-name">Pronix Camera</a>
                                    <div class="flex-wrap">
                                        <div class="action-wrap">
                                            <span class="product-price">$230,00</span>
                                            <a href="{{ route('index') }}" class="addto-cart"><i class="fal fa-shopping-cart"></i>
                                                Add
                                                To
                                                Cart</a>
                                        </div>
                                        <button class="wishlist-btn"><i class="rt-heart"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-item product-item4">
                                <a href="{{ route('index') }}" class="product-image">
                                    <img src="{{ asset('assets/images/products/home4/5.png') }}" alt="product-image">
                                </a>
                                <div class="bottom-content">
                                    <span class="product-catagory">Electronics</span>
                                    <a href="{{ route('index') }}" class="product-name">Extra Powerful PC Cooler</a>
                                    <div class="flex-wrap">
                                        <div class="action-wrap">
                                            <span class="product-price">$230,00</span>
                                            <a href="{{ route('index') }}" class="addto-cart"><i class="fal fa-shopping-cart"></i>
                                                Add
                                                To
                                                Cart</a>
                                        </div>
                                        <button class="wishlist-btn"><i class="rt-heart"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-item product-item4">
                                <a href="{{ route('index') }}" class="product-image">
                                    <img src="{{ asset('assets/images/products/home4/6.png') }}" alt="product-image">
                                </a>
                                <div class="bottom-content">
                                    <span class="product-catagory">Electronics</span>
                                    <a href="{{ route('index') }}" class="product-name">Extra Powerful PC Cooler</a>
                                    <div class="flex-wrap">
                                        <div class="action-wrap">
                                            <span class="product-price">$230,00</span>
                                            <a href="{{ route('index') }}" class="addto-cart"><i class="fal fa-shopping-cart"></i>
                                                Add
                                                To
                                                Cart</a>
                                        </div>
                                        <button class="wishlist-btn"><i class="rt-heart"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pagination-area">
                        <div class="swiper-pag"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ..::Featured Products Section End Here::.. -->

    <!-- ..::Posters Section Start Here::.. -->
    <div class="rts-posters-section section-5 section-gap">
        <div class="container">
            <div class="row">
                <div class="col-xl-3">
                    <a href="{{ route('index') }}" class="product-box product-box-medium product-box-medium2">
                        <div class="contents">
                            <span class="pretitle">Great Stores</span>
                            <h1 class="product-title">Last Call for up <br> to 30% off</h1>
                            <div class="view-collections go-btn">View Collections <i
                                    class="fal fa-long-arrow-right"></i></div>
                        </div>
                        <div class="product-thumb"><img src="{{ asset('assets/images/products/home4/pot.png') }}" alt="product-thumb">
                        </div>
                    </a>
                </div>
                <div class="col-xl-6">
                    <a href="{{ route('index') }}" class="product-box product-box-medium mid">
                        <div class="contents">
                            <span class="pretitle">-45% Offer</span>
                            <h1 class="product-title">New
                                <span>Smartphone</span></h1>
                            <p>Don't miss the last opportunity</p>
                        </div>
                        <div class="product-thumb"><img src="{{ asset('assets/images/products/home4/phones.png') }}"
                                alt="product-thumb"></div>
                    </a>
                </div>
                <div class="col-xl-3">
                    <a href="{{ route('index    ') }}" class="product-box product-box-medium product-box-medium3">
                        <div class="contents">
                            <span class="pretitle">ELECTRONICS</span>
                            <h1 class="product-title">Home Speaker</h1>
                            <div class="view-collections go-btn">Shop Now <i class="fal fa-long-arrow-right"></i></div>
                        </div>
                        <div class="product-thumb"><img src="{{ asset('assets/images/products/home4/machine.png') }}"
                                alt="product-thumb"></div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- ..::Posters Section End Here::.. -->

    <!-- ..::Deal Section Start Here::.. -->
    <div class="rts-deal-section section-gap">
        <div class="container position-relative">
            <div class="section-header section-header4">
                <div class="flex-wrapper">
                    <span class="section-title section-title-2 mb--5
                ">Super Deals Of The Week</span>
                    <div class="countdown" id="countdown">
                        <ul>
                            <li><span id="days"></span>D</li>
                            <li><span id="hours"></span>H</li>
                            <li><span id="minutes"></span>M</li>
                            <li><span id="seconds"></span>S</li>
                        </ul>
                    </div>
                </div>
                <a href="shop-main" class="go-btn">All Products <i class="fal fa-long-arrow-right"></i></a>
            </div>
            <div class="swiper oneSlide">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="deal-box">
                            <div class="deal-box-inner">
                                <div class="deal-product">
                                    <div class="filter-buttons">
                                        <div class="filter-btn" data-show=".one"><img
                                                src="{{ asset('assets/images/products/home4/deal/1.png') }}" alt="filter-image"></div>
                                        <div class="filter-btn" data-show=".two"><img
                                                src="{{ asset('assets/images/products/home4/deal/2.png') }}" alt="filter-image"></div>
                                        <div class="filter-btn" data-show=".three"><img
                                                src="{{ asset('assets/images/products/home4/deal/3.png') }}" alt="filter-image"></div>
                                        <div class="filter-btn last-child" data-show=".four"><img
                                                src="{{ asset('assets/images/products/home4/deal/4.png') }}" alt="filter-image"></div>
                                    </div>
                                    <div class="product-area">
                                        <div class="product detail-product one filterd-items">
                                            <div class="product-thumb"><img
                                                    src="{{ asset('assets/images/products/home4/deal/product.png') }}"
                                                    alt="product-thumb"></div>
                                            <div class="contents">
                                                <div class="rating-area">
                                                    <div class="rating-stars-group">
                                                        <div class="rating-star"><i class="fas fa-star"></i></div>
                                                        <div class="rating-star"><i class="fas fa-star"></i></div>
                                                        <div class="rating-star"><i class="fas fa-star"></i></div>
                                                        <div class="rating-star"><i class="fas fa-star"></i></div>
                                                        <div class="rating-star"><i class="fas fa-star"></i></div>
                                                        <span class="rating-qnty">(120 Reviews)</span>
                                                    </div>
                                                </div>
                                                <h2 class="product-title">Dragon Touch Max10 Tablet
                                                    Android 10.0 OS</h2>
                                                <span class="product-price">$129.99 <span
                                                        class="old-price">$349.99</span></span>
                                                <div class="product-buttons">
                                                    <button class="select-option-btn"><i
                                                            class="fal fa-shopping-cart mr--5"></i> Select
                                                        Option</button>
                                                    <button class="wishlist-btn"><i class="rt-heart"></i></button>
                                                    <button class="exchange-btn"><i
                                                            class="fal fa-exchange"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product detail-product two filterd-items hide">
                                            <div class="product-thumb"><img
                                                    src="{{ asset('assets/images/products/home4/deal/product.png') }}"
                                                    alt="product-thumb"></div>
                                            <div class="contents">
                                                <div class="rating-area">
                                                    <div class="rating-stars-group">
                                                        <div class="rating-star"><i class="fas fa-star"></i></div>
                                                        <div class="rating-star"><i class="fas fa-star"></i></div>
                                                        <div class="rating-star"><i class="fas fa-star"></i></div>
                                                        <div class="rating-star"><i class="fas fa-star"></i></div>
                                                        <div class="rating-star"><i class="fas fa-star"></i></div>
                                                        <span class="rating-qnty">(120 Reviews)</span>
                                                    </div>
                                                </div>
                                                <h2 class="product-title">Dragon Touch Max10 Tablet
                                                    Android 10.0 OS</h2>
                                                <span class="product-price">$129.99 <span
                                                        class="old-price">$349.99</span></span>
                                                <div class="product-buttons">
                                                    <button class="select-option-btn"><i
                                                            class="fal fa-shopping-cart mr--5"></i> Select
                                                        Option</button>
                                                    <button class="wishlist-btn"><i class="rt-heart"></i></button>
                                                    <button class="exchange-btn"><i
                                                            class="fal fa-exchange"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product detail-product three filterd-items hide">
                                            <div class="product-thumb"><img
                                                    src="{{ asset('assets/images/products/home4/deal/product.png') }}"
                                                    alt="product-thumb"></div>
                                            <div class="contents">
                                                <div class="rating-area">
                                                    <div class="rating-stars-group">
                                                        <div class="rating-star"><i class="fas fa-star"></i></div>
                                                        <div class="rating-star"><i class="fas fa-star"></i></div>
                                                        <div class="rating-star"><i class="fas fa-star"></i></div>
                                                        <div class="rating-star"><i class="fas fa-star"></i></div>
                                                        <div class="rating-star"><i class="fas fa-star"></i></div>
                                                        <span class="rating-qnty">(120 Reviews)</span>
                                                    </div>
                                                </div>
                                                <h2 class="product-title">Dragon Touch Max10 Tablet
                                                    Android 10.0 OS</h2>
                                                <span class="product-price">$129.99 <span
                                                        class="old-price">$349.99</span></span>
                                                <div class="product-buttons">
                                                    <button class="select-option-btn"><i
                                                            class="fal fa-shopping-cart mr--5"></i> Select
                                                        Option</button>
                                                    <button class="wishlist-btn"><i class="rt-heart"></i></button>
                                                    <button class="exchange-btn"><i
                                                            class="fal fa-exchange"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product detail-product four filterd-items hide">
                                            <div class="product-thumb"><img
                                                    src="{{ asset('assets/images/products/home4/deal/product.png') }}"
                                                    alt="product-thumb"></div>
                                            <div class="contents">
                                                <div class="rating-area">
                                                    <div class="rating-stars-group">
                                                        <div class="rating-star"><i class="fas fa-star"></i></div>
                                                        <div class="rating-star"><i class="fas fa-star"></i></div>
                                                        <div class="rating-star"><i class="fas fa-star"></i></div>
                                                        <div class="rating-star"><i class="fas fa-star"></i></div>
                                                        <div class="rating-star"><i class="fas fa-star"></i></div>
                                                        <span class="rating-qnty">(120 Reviews)</span>
                                                    </div>
                                                </div>
                                                <h2 class="product-title">Dragon Touch Max10 Tablet
                                                    Android 10.0 OS</h2>
                                                <span class="product-price">$129.99 <span
                                                        class="old-price">$349.99</span></span>
                                                <div class="product-buttons">
                                                    <button class="select-option-btn"><i
                                                            class="fal fa-shopping-cart mr--5"></i> Select
                                                        Option</button>
                                                    <button class="wishlist-btn"><i class="rt-heart"></i></button>
                                                    <button class="exchange-btn"><i
                                                            class="fal fa-exchange"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="side-box">
                                    <div class="product">
                                        <div class="product-thumb"><img
                                                src="{{ asset('assets/images/products/home4/deal/side-product.png') }}"
                                                alt="product-thumb"></div>
                                        <div class="contents">
                                            <span class="product-catagory">Electronics</span>
                                            <h2 class="product-title">Samsung Ultra Wide 92” Monitor</h2>
                                            <span class="product-price">$230,00<span
                                                    class="old-price">$460,00</span></span>
                                            <button class="cart-btn"><i class="fal fa-shopping-cart"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-navigation">
            <div class="swiper-button-prev slider-btn prev"><i class="fal fa-long-arrow-left"></i></div>
            <div class="swiper-button-next slider-btn next"><i class="fal fa-long-arrow-right"></i></div>
        </div>
    </div>
    <!-- ..::Deal Section End Here::.. -->

    <!-- ..::Newsletter Section Start Here::.. -->
    <div class="rts-best-catagory-section section-gap">
        <div class="container">
            <div class="section-header section-header4">
                <span class="section-title section-title-2 mb--5
                ">Best Category</span>
                <a href="shop-main" class="go-btn">Other Category <i class="fal fa-long-arrow-right"></i></a>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="catagory-card">
                        <div class="contents">
                            <h3 class="catagory-title">Cell Phones</h3>
                            <ul class="catagory-lists">
                                <li><a href="{{ route('index') }}">iPhone <i class="fal fa-angle-right"></i></a></li>
                                <li><a href="{{ route('index') }}">Phone Accessories <i class="fal fa-angle-right"></i></a>
                                </li>
                                <li><a href="{{ route('index') }}">Phone Cases <i class="fal fa-angle-right"></i></a></li>
                                <li><a href="{{ route('index') }}">Postpaid Phones <i class="fal fa-angle-right"></i></a></li>
                            </ul>
                            <a href="{{ route('index') }}" class="all-btn">All Cell Phones <i
                                    class="fal fa-long-arrow-right ml--5"></i></a>
                        </div>
                        <div class="category-thumb"><img src="{{ asset('assets/images/products/home4/catagory/1.png') }}"
                                alt="category-thumb"></div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="catagory-card">
                        <div class="contents">
                            <h3 class="catagory-title">Headphones</h3>
                            <ul class="catagory-lists">
                                <li><a href="{{ route('category') }}">Noise Canceling <i class="fal fa-angle-right"></i></a></li>
                                <li><a href="{{ route('category') }}">Over-EAR <i class="fal fa-angle-right"></i></a></li>
                                <li><a href="{{ route('category') }}">Premium Headphones <i class="fal fa-angle-right"></i></a>
                                </li>
                                <li><a href="{{ route('category') }}">Sports & Fitness <i class="fal fa-angle-right"></i></a></li>
                            </ul>
                            <a href="{{ route('category') }}" class="all-btn">Headphones <i
                                    class="fal fa-long-arrow-right ml--5"></i></a>
                        </div>
                        <div class="category-thumb"><img src="{{ asset('assets/images/products/home4/catagory/2.png') }}"
                                alt="category-thumb"></div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="catagory-card">
                        <div class="contents">
                            <h3 class="catagory-title">Watches</h3>
                            <ul class="catagory-lists">
                                <li><a href="{{ route('category') }}">Sport Watches <i class="fal fa-angle-right"></i></a></li>
                                <li><a href="{{ route('category') }}">Timex Watches <i class="fal fa-angle-right"></i></a></li>
                                <li><a href="{{ route('category') }}">Watch Brands <i class="fal fa-angle-right"></i></a></li>
                                <li><a href="{{ route('category') }}">Women Watches <i class="fal fa-angle-right"></i></a></li>
                            </ul>
                            <a href="{{ route('category') }}" class="all-btn">All Watches <i
                                    class="fal fa-long-arrow-right ml--5"></i></a>
                        </div>
                        <div class="category-thumb"><img src="{{ asset('assets/images/products/home4/catagory/3.png') }}"
                                alt="category-thumb"></div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="catagory-card">
                        <div class="contents">
                            <h3 class="catagory-title">Monitors</h3>
                            <ul class="catagory-lists">
                                <li><a href="{{ route('category') }}">Gaming <i class="fal fa-angle-right"></i></a></li>
                                <li><a href="{{ route('category') }}">Ultra Wide <i class="fal fa-angle-right"></i></a></li>
                                <li><a href="{{ route('category') }}">Office <i class="fal fa-angle-right"></i></a></li>
                                <li><a href="{{ route('category') }}">TV <i class="fal fa-angle-right"></i></a></li>
                            </ul>
                            <a href="{{ route('category') }}" class="all-btn">All Monitors <i
                                    class="fal fa-long-arrow-right ml--5"></i></a>
                        </div>
                        <div class="category-thumb"><img src="{{ asset('assets/images/products/home4/catagory/4.png') }}"
                                alt="category-thumb"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ..::Newsletter Section End Here::.. -->

    <!-- ..::Feeds Section Start Here::.. -->
    <div class="rts-feeds-section rts-feeds-section2 section-gap">
        <div class="container">
            <div class="section-header section-header4">
                <span class="section-title section-title-2 mb--5
                ">Blog & Insights</span>
                <a href="shop-main" class="go-btn">Other Category <i class="fal fa-long-arrow-right"></i></a>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-4 col-md-6">
                    <div class="feed-item">
                        <a href="{{ route('newsDetails') }}" class="feed-image"><img src="{{ asset('assets/images/post/feed4.jpg') }}"
                                alt="feed-image"></a>
                        <div class="contents">
                            <div class="feed-info">
                                <a href="{{ route('category') }}" class="feed-catagory">Electronics</a>
                            </div>
                            <h2 class="feed-title"><a href="{{ route('newsDetails') }}">The post-pandemic consumer is embracing
                                    secondhand clothes</a></h2>
                            <div class="author">
                                <div class="author-dp"><img src="{{ asset('assets/images/items/author1.png') }}" alt="author-dp"></div>
                                <div class="content">
                                    <h4 class="author-name">Alonso D. Dowson</h4>
                                    <span class="title">Author</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="feed-item">
                        <a href="{{ route('newsDetails') }}" class="feed-image"><img src="{{ asset('assets/images/post/feed5.jpg') }}"
                                alt="feed-image"></a>
                        <div class="contents">
                            <div class="feed-info">
                                <a href="{{ route('category') }}" class="feed-catagory">Electronics</a>
                            </div>
                            <h2 class="feed-title"><a href="{{ route('newsDetails') }}">The post-pandemic consumer is embracing
                                    secondhand clothes</a></h2>
                            <div class="author">
                                <div class="author-dp"><img src="{{ asset('assets/images/items/author1.png') }}" alt="author-dp"></div>
                                <div class="content">
                                    <h4 class="author-name">Alonso D. Dowson</h4>
                                    <span class="title">Author</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="feed-item last-child">
                        <a href="{{ route('newsDetails') }}" class="feed-image"><img src="{{ asset('assets/images/post/feed6.jpg') }}"
                                alt="feed-image"></a>
                        <div class="contents">
                            <div class="feed-info">
                                <a href="{{ route('category') }}" class="feed-catagory">Electronics</a>
                            </div>
                            <h2 class="feed-title"><a href="{{ route('newsDetails') }}">The post-pandemic consumer is embracing
                                    secondhand clothes</a></h2>
                            <div class="author">
                                <div class="author-dp"><img src="{{ asset('assets/images/items/author1.png') }}" alt="author-dp"></div>
                                <div class="content">
                                    <h4 class="author-name">Alonso D. Dowson</h4>
                                    <span class="title">Author</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ..::Feeds Section End Here::.. -->

    <!-- ..::brands Section Start Here::.. -->
    <div class="rts-brands-section">
        <div class="container">
            <div class="recent-products-header section-header section-header2">
                <span class="section-pretitle mb--10">Sponsors</span>
                <span class="section-title-2">100+ Happy Users</span>
            </div>
            <div class="brands-section-inner">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-15 col-md-4 col-sm-6 col-xs-6 col-xxs-6">
                        <div class="brand-item">
                            <a href="#0" class="front"><img src="{{ asset('assets/images/brands/1.png') }}" alt="brand"></a>
                        </div>
                    </div>
                    <div class="col-lg-15 col-md-4 col-sm-6 col-xs-6 col-xxs-6">
                        <div class="brand-item">
                            <a href="#0" class="front"><img src="{{ asset('assets/images/brands/2.png') }}" alt="brand"></a>
                        </div>
                    </div>
                    <div class="col-lg-15 col-md-4 col-sm-6 col-xs-6 col-xxs-6">
                        <div class="brand-item">
                            <a href="#0" class="front"><img src="{{ asset('assets/images/brands/3.png') }}" alt="brand"></a>
                        </div>
                    </div>
                    <div class="col-lg-15 col-md-4 col-sm-6 col-xs-6 col-xxs-6">
                        <div class="brand-item">
                            <a href="#0" class="front"><img src="{{ asset('assets/images/brands/4.png') }}" alt="brand"></a>
                        </div>
                    </div>
                    <div class="col-lg-15 col-md-4 col-sm-6 col-xs-6 col-xxs-6">
                        <div class="brand-item">
                            <a href="#0" class="front"><img src="{{ asset('assets/images/brands/5.png') }}" alt="brand"></a>
                        </div>
                    </div>
                    <div class="col-lg-15 col-md-4 col-sm-6 col-xs-6 col-xxs-6">
                        <div class="brand-item">
                            <a href="#0" class="front"><img src="{{ asset('assets/images/brands/6.png') }}" alt="brand"></a>
                        </div>
                    </div>
                    <div class="col-lg-15 col-md-4 col-sm-6 col-xs-6 col-xxs-6">
                        <div class="brand-item">
                            <a href="#0" class="front"><img src="{{ asset('assets/images/brands/7.png') }}" alt="brand"></a>
                        </div>
                    </div>
                    <div class="col-lg-15 col-md-4 col-sm-6 col-xs-6 col-xxs-6">
                        <div class="brand-item">
                            <a href="#0" class="front"><img src="{{ asset('assets/images/brands/8.png') }}" alt="brand"></a>
                        </div>
                    </div>
                    <div class="col-lg-15 col-md-4 col-sm-6 col-xs-6 col-xxs-6">
                        <div class="brand-item">
                            <a href="#0" class="front"><img src="{{ asset('assets/images/brands/9.png') }}" alt="brand"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ..::brands Section End Here::.. -->

    <!-- ..::Newsletter Popup Start Here::.. -->
    <div class="rts-newsletter-popup">
        <div class="newsletter-close-btn"><i class="fal fa-times"></i></div>
        <div class="newsletter-inner">
            <h3 class="newsletter-heading">Get Weekly Newsletter</h3>
            <p>Priyoshop has brought to you the Hijab 3 Pieces Combo Pack
                PS23. It is a completely modern design</p>
            <form>
                <div class="input-area">
                    <div class="input-div"><input type="text" placeholder="Your name">
                        <div class="input-icon"><i class="far fa-user"></i></div>
                    </div>
                    <div class="input-div"><input type="email" placeholder="Email address" required>
                        <div class="input-icon"><i class="far fa-envelope"></i></div>
                    </div>
                </div>
                <button type="submit" class="subscribe-btn">Subscribe Now <i
                        class="fal fa-long-arrow-right ml--5"></i></button>
            </form>
        </div>
    </div>
    <!-- ..::Newsletter Popup End Here::.. -->

    <!-- ..::Product-details Section Start Here::.. -->
    <div class="product-details-popup-wrapper">
        <div class="rts-product-details-section rts-product-details-section2 product-details-popup-section">
            <div class="product-details-popup">
                <button class="product-details-close-btn"><i class="fal fa-times"></i></button>
                <div class="details-product-area">
                    <div class="product-thumb-area">
                        <div class="cursor"></div>
                        <div class="thumb-wrapper one filterd-items figure">
                            <div class="product-thumb zoom" onmousemove="zoom(event)"
                                style="background-image: url('{{ asset('assets/images/products/product-details.jpg') }}')"><img
                                    src="{{ asset('assets/images/products/product-details.jpg') }}" alt="product-thumb">
                            </div>
                        </div>
                        <div class="thumb-wrapper two filterd-items hide">
                            <div class="product-thumb zoom" onmousemove="zoom(event)"
                                style="background-image: url('{{ asset('assets/images/products/product-filt2.jpg') }}')"><img
                                    src="{{ asset('assets/images/products/product-filt2.jpg') }}" alt="product-thumb">
                            </div>
                        </div>
                        <div class="thumb-wrapper three filterd-items hide">
                            <div class="product-thumb zoom" onmousemove="zoom(event)"
                                style="background-image: url('{{ asset('assets/images/products/product-filt3.jpg') }}')"><img
                                    src="{{ asset('assets/images/products/product-filt3.jpg') }}" alt="product-thumb">
                            </div>
                        </div>
                        <div class="product-thumb-filter-group">
                            <div class="thumb-filter filter-btn active" data-show=".one"><img
                                    src="{{ asset('assets/images/products/product-filt1.jpg') }}" alt="product-thumb-filter"></div>
                            <div class="thumb-filter filter-btn" data-show=".two"><img
                                    src="{{ asset('assets/images/products/product-filt2.jpg') }}" alt="product-thumb-filter"></div>
                            <div class="thumb-filter filter-btn" data-show=".three"><img
                                    src="{{ asset('assets/images/products/product-filt3.jpg') }}" alt="product-thumb-filter"></div>
                        </div>
                    </div>
                    <div class="contents">
                        <div class="product-status">
                            <span class="product-catagory">Dress</span>
                            <div class="rating-stars-group">
                                <div class="rating-star"><i class="fas fa-star"></i></div>
                                <div class="rating-star"><i class="fas fa-star"></i></div>
                                <div class="rating-star"><i class="fas fa-star-half-alt"></i></div>
                                <span>10 Reviews</span>
                            </div>
                        </div>
                        <h2 class="product-title">Wide Cotton Tunic Dress <span class="stock">In Stock</span></h2>
                        <span class="product-price"><span class="old-price">$9.35</span> $7.25</span>
                        <p>
                            Priyoshop has brought to you the Hijab 3 Pieces Combo Pack PS23. It is a
                            completely modern design and you feel comfortable to put on this hijab.
                            Buy it at the best price.
                        </p>
                        <div class="product-bottom-action">
                            <div class="cart-edit">
                                <div class="quantity-edit action-item">
                                    <button class="button minus"><i class="fal fa-minus minus"></i></button>
                                    <input type="text" class="input" value="01" />
                                    <button class="button plus">+<i class="fal fa-plus plus"></i></button>
                                </div>
                            </div>
                            <a href="{{ route('cart') }}" class="addto-cart-btn action-item"><i class="rt-basket-shopping"></i>
                                Add To
                                Cart</a>
                            <a href="{{ route('wishlist') }}" class="wishlist-btn action-item"><i class="rt-heart"></i></a>
                        </div>
                        <div class="product-uniques">
                            <span class="sku product-unipue"><span>SKU: </span> BO1D0MX8SJ</span>
                            <span class="catagorys product-unipue"><span>Categories: </span> T-Shirts, Tops, Mens</span>
                            <span class="tags product-unipue"><span>Tags: </span> fashion, t-shirts, Men</span>
                        </div>
                        <div class="share-social">
                            <span>Share:</span>
                            <a class="platform" href="http://facebook.com" target="_blank"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="platform" href="http://twitter.com" target="_blank"><i
                                    class="fab fa-twitter"></i></a>
                            <a class="platform" href="http://behance.com" target="_blank"><i
                                    class="fab fa-behance"></i></a>
                            <a class="platform" href="http://youtube.com" target="_blank"><i
                                    class="fab fa-youtube"></i></a>
                            <a class="platform" href="http://linkedin.com" target="_blank"><i
                                    class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ..::Product-details Section End Here::.. -->

    <!-- ..::Footer Start Here::.. -->
    <div class="footer footer-3 footer-4">
        <div class="container">
            <div class="footer-inner">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-sm-6 box-widget-col">
                        <div class="footer-widget footer-box-widget">
                            <div class="footer-logo"><img src="{{ asset('assets/images/logo2.png') }}" alt="footer-logo"></div>
                            <p>Solid is the information & experience
                                directed at an end-user</p>
                            <div class="quick-contact">
                                <div class="phone contact-item">
                                    <div class="icon"><img src="{{ asset('assets/images/icons/24clock2.png') }}" alt="chat-icon">
                                    </div>
                                    <div class="contact-info">
                                        <a href="tel:0020500" class="service-time info">0020 500 - CALL - 000</a>
                                        <span class="title">Mon - Fri: 9:00-20:00</span>
                                    </div>
                                </div>
                                <div class="email contact-item">
                                    <div class="icon"><img src="{{ asset('assets/images/icons/mail2.png') }}" alt="phone-icon">
                                    </div>
                                    <div class="contact-info">
                                        <a href="mailto:pixcelsthemes@gmail.com"
                                            class="email-address info">pixcelsthemes@gmail.com</a>
                                        <span class="title">Get Support</span>
                                    </div>
                                </div>
                            </div>
                            <ul class="social-links-footer2">
                                <li><a class="platform fb" target="_blank" href="http://facebook.com"><i
                                            class="fab fa-facebook"></i></a>
                                </li>
                                <li><a class="platform yt" target="_blank" href="http://youtube.com"><i
                                            class="fab fa-youtube"></i></a>
                                </li>
                                <li><a class="platform ttr" target="_blank" href="http://twitter.com"><i
                                            class="fab fa-twitter"></i></a>
                                </li>
                                <li><a class="platform lkd" target="_blank" href="http://linkedin.com"><i
                                            class="fab fa-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-sm-6">
                        <div class="footer-widget">
                            <h3 class="footer-widget-title">About Us</h3>
                            <p class="widget-text">Elegant pink origami design three type
                                of dimensional view and decoration co
                                Great for adding a decorative touch to
                                any room’s decor.</p>
                            <a href="#0" class="getin-touch">Get In Touch <i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-13 col-md-6 col-sm-6">
                        <div class="footer-widget">
                            <h3 class="footer-widget-title">Information</h3>
                            <ul class="widget-items cata-widget">
                                <li class="widget-list-item"><a href="#0">Custom Service</a></li>
                                <li class="widget-list-item"><a href="#0">FAQs</a></li>
                                <li class="widget-list-item"><a href="#0">Ordering Tracking</a></li>
                                <li class="widget-list-item"><a href="#0">Contacts</a></li>
                                <li class="widget-list-item"><a href="#0">Events</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-13 col-md-6 col-sm-6">
                        <h3 class="footer-widget-title">My Account</h3>
                        <ul class="footer-widget">
                            <li class="widget-list-item"><a href="#0">Delivery Infomation</a></li>
                            <li class="widget-list-item"><a href="#0">Privacy Policy</a></li>
                            <li class="widget-list-item"><a href="#0">Discount</a></li>
                            <li class="widget-list-item"><a href="#0">Custom Service</a></li>
                            <li class="widget-list-item"><a href="#0">Terms & Condition</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-25 col-md-6 col-sm-6">
                        <h3 class="footer-widget-title">Get Newsletter</h3>
                        <div class="footer-widget newsletter-widget">
                            <p class="widget-text">Get 10% off your first order! Hurry up</p>
                            <div class="input-div">
                                <input type="email" placeholder="Enter email address">
                            </div>
                            <a href="#0" class="subscribe-btn">Subscribe Now <i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="footer-bottombar">
                    <div class="app-download">
                        <span class="download-text">Order faster with our App!</span>
                        <a href="http://appstore.com" target="_blank" class="download-store"><img
                                src="{{ asset('assets/images/items/appstore.jpg') }}" alt=""></a>
                        <a href="https://play.google.com/store/apps" target="_blank" class="download-store"><img
                                src="{{ asset('assets/images/items/playstore.jpg') }}" alt=""></a>
                    </div>
                    <div class="payment-methods"><img src="{{ asset('assets/images/footer/payment2.svg') }}" alt="payment-methods">
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom-area">
            <div class="container">
                <div class="footer-bottom-inner">
                    <span class="copyright">Copyright & Design By <a href="http://PixcelsThemes.com" class="brand"
                            target="_blank">PixcelsThemes</a> -2024</span>
                </div>
            </div>
        </div>
    </div>
    <!-- ..::Footer End Here::.. -->

@endsection