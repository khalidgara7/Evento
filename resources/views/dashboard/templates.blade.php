<!DOCTYPE html>
<html lang="zxx" class="js">

@extends('layouts.head')
<body class="nk-body ui-rounder has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            @extends('layouts.sidebar')
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                <div class="nk-header is-light nk-header-fixed is-light">
                    <div class="container-xl wide-xl">
                        <div class="nk-header-wrap">
                            <div class="nk-menu-trigger d-xl-none ms-n1 me-3">
                                <a href="#" class="nk-nav-toggle nk-quick-nav-icon"
                                    data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                            </div>
                            <div class="nk-header-brand d-xl-none">
                                <a href="{{ url('/index') }}" class="logo-link">
                                    <img class="logo-light logo-img" src="{{ asset('images/logo.png') }}"
                                        srcset="./images/logo2x.png 2x" alt="logo">
                                    <img class="logo-dark logo-img" src="{{ asset('images/logo-dark.png') }}"
                                        srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
                                </a>
                            </div><!-- .nk-header-brand -->
                            <div class="nk-header-menu is-light">
                                <div class="nk-header-menu-inner">
                                    <!-- Menu -->
                                    <ul class="nk-menu nk-menu-main">
                                        <li class="nk-menu-item has-sub">
                                            <a href="#" class="nk-menu-link nk-menu-toggle">
                                                <span class="nk-menu-text">Editor</span>
                                            </a>
                                            <ul class="nk-menu-sub">
                                                <li class="nk-menu-item">
                                                    <a href="{{ url('/document-editor') }}" class="nk-menu-link">
                                                        <span class="nk-menu-text">New</span>
                                                    </a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a href="{{ url('/document-editor-generate') }}"
                                                        class="nk-menu-link">
                                                        <span class="nk-menu-text">Generate</span>
                                                    </a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a href="{{ url('/document-editor-edit') }}"
                                                        class="nk-menu-link">
                                                        <span class="nk-menu-text">Edit</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nk-menu-item has-sub">
                                            <a href="#" class="nk-menu-link nk-menu-toggle">
                                                <span class="nk-menu-text">Documents</span>
                                            </a>
                                            <ul class="nk-menu-sub">
                                                <li class="nk-menu-item">
                                                    <a href="{{ url('/document-saved') }}" class="nk-menu-link">
                                                        <span class="nk-menu-text">Saved</span>
                                                    </a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a href="{{ url('/document-drafts') }}" class="nk-menu-link">
                                                        <span class="nk-menu-text">Drafts</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="{{ url('/templates') }}" class="nk-menu-link">
                                                <span class="nk-menu-text">Templates</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- Menu -->
                                </div>
                            </div><!-- .nk-header-menu -->
                            <div class="nk-header-tools">
                                <ul class="nk-quick-nav">
                                    <li class="dropdown notification-dropdown">
                                        <a href="#" class="dropdown-toggle nk-quick-nav-icon"
                                            data-bs-toggle="dropdown">
                                            <div class="icon-status icon-status-info"><em
                                                    class="icon ni ni-bell"></em></div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end">
                                            <div class="dropdown-head">
                                                <span class="sub-title nk-dropdown-title">Notifications</span>
                                                <a href="#">Mark All as Read</a>
                                            </div>
                                            <div class="dropdown-body">
                                                <div class="nk-notification">
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon">
                                                            <em
                                                                class="icon icon-circle bg-primary-dim ni ni-share"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">Iliash shared
                                                                <span>Dashlite-v2</span> with you.
                                                            </div>
                                                            <div class="nk-notification-time">Just now</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon">
                                                            <em class="icon icon-circle bg-info-dim ni ni-edit"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">Iliash
                                                                <span>invited</span> you to edit <span>DashLite</span>
                                                                folder
                                                            </div>
                                                            <div class="nk-notification-time">2 hrs ago</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon">
                                                            <em
                                                                class="icon icon-circle bg-primary-dim ni ni-share"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">You have shared
                                                                <span>project v2</span> with Parvez.
                                                            </div>
                                                            <div class="nk-notification-time">7 days ago</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon">
                                                            <em
                                                                class="icon icon-circle bg-success-dim ni ni-spark"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">Your
                                                                <span>Subscription</span> renew successfully.
                                                            </div>
                                                            <div class="nk-notification-time">2 month ago</div>
                                                        </div>
                                                    </div>
                                                </div><!-- .nk-notification -->
                                            </div><!-- .nk-dropdown-body -->
                                            <div class="dropdown-foot center">
                                                <a href="#">View All</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dropdown language-dropdown d-none d-sm-block me-n1">
                                        <a href="#" class="dropdown-toggle nk-quick-nav-icon"
                                            data-bs-toggle="dropdown">
                                            <div class="quick-icon border border-light">
                                                <img class="icon" src="{{ asset('images/flags/english-sq.png') }}"
                                                    alt="">
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <ul class="language-list">
                                                <li>
                                                    <a href="#" class="language-item">
                                                        <img src="{{ asset('images/flags/english.png') }}"
                                                            alt="" class="language-flag">
                                                        <span class="language-name">English</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="language-item">
                                                        <img src="{{ asset('images/flags/spanish.png') }}"
                                                            alt="" class="language-flag">
                                                        <span class="language-name">Español</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="language-item">
                                                        <img src="{{ asset('images/flags/french.png') }}"
                                                            alt="" class="language-flag">
                                                        <span class="language-name">Français</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="language-item">
                                                        <img src="{{ asset('images/flags/turkey.png') }}"
                                                            alt="" class="language-flag">
                                                        <span class="language-name">Türkçe</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li><!-- .dropdown -->
                                    <li class="dropdown user-dropdown">
                                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                                            <div class="user-toggle">
                                                <div class="user-avatar sm">
                                                    <em class="icon ni ni-user-alt"></em>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-end">
                                            <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                                <div class="user-card">
                                                    <div class="user-avatar">
                                                        <span>AB</span>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="lead-text">Abu Bin Ishtiyak</span>
                                                        <span class="sub-text">info@softnio.com</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="{{ url('/profile') }}"><em
                                                                class="icon ni ni-user-alt"></em><span>View
                                                                Profile</span></a></li>
                                                    <li><a href="{{ url('/history') }}"><em
                                                                class="icon ni ni-clock"></em><span>View
                                                                History</span></a></li>
                                                    <li><a class="dark-switch" href="#"><em
                                                                class="icon ni ni-moon"></em><span>Dark Mode</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="#"><em
                                                                class="icon ni ni-signout"></em><span>Sign
                                                                out</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div><!-- .nk-header-tools -->
                        </div><!-- .nk-header-wrap -->
                    </div><!-- .container-fliud -->
                </div>
                <!-- main header @e -->
                <!-- content @s -->
                <div class="nk-content nk-content-fluid">
                    <div class="container-xl wide-xl">
                        <div class="nk-content-body">
                            <div class="nk-block-head nk-block-head-sm">
                                <div class="nk-block-between">
                                    <div class="nk-block-head-content">
                                        <h3 class="nk-block-title page-title">Template Library</h3>
                                    </div><!-- .nk-block-head-content -->
                                    <div class="nk-block-head-content">
                                        <div class="toggle-wrap nk-block-tools-toggle">
                                            <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1"
                                                data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                            <div class="toggle-expand-content" data-content="pageMenu">
                                                <ul class="nk-block-tools g-3">
                                                    <li>
                                                        <a href="{{ url('/templates-list') }}"
                                                            class="btn btn-md btn-icon btn-outline-light"><em
                                                                class="icon ni ni-view-list-wd"></em></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('/templates') }}"
                                                            class="btn btn-md btn-icon btn-primary btn-dim"><em
                                                                class="icon ni ni-grid-fill"></em></a>
                                                    </li>
                                                    <li class="nk-block-tools-opt">
                                                        <div class="form-control-wrap">
                                                            <div class="form-icon form-icon-right">
                                                                <em class="icon ni ni-search"></em>
                                                            </div>
                                                            <input type="text" class="form-control"
                                                                placeholder="Search Template">
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div><!-- .nk-block-head-content -->
                                </div><!-- .nk-block-between -->
                            </div><!-- .nk-block-head -->
                            <div class="nk-block">
                                <ul class="filter-button-group mb-4 pb-1">
                                    <li><button class="filter-button active" type="button" data-filter="*"> All
                                        </button></li>
                                    <li><button class="filter-button" type="button" data-filter=".blog-content">
                                            Blog Content </button></li>
                                    <li><button class="filter-button" type="button" data-filter=".social-media">
                                            Social Media </button></li>
                                    <li><button class="filter-button" type="button" data-filter=".website-copy-seo">
                                            Website Copy &amp; SEO </button></li>
                                </ul>
                                <div class="row g-gs filter-container" data-animation="true">
                                    <div class="col-sm-6 col-xxl-3 filter-item blog-content"
                                        data-category="blog-content">
                                        <div class="card card-full">
                                            <div class="card-inner">
                                                <div class="user-avatar text-primary bg-primary-dim mb-3">
                                                    <em class="icon ni ni-bulb-fill"></em>
                                                </div>
                                                <h5 class="title">Blog Ideas</h5>
                                                <p class="sub-text">Produce trendy blog ideas for your business that
                                                    engages.</p>
                                            </div>
                                        </div><!-- .card -->
                                    </div><!-- .col -->
                                    <div class="col-sm-6 col-xxl-3 filter-item blog-content"
                                        data-category="blog-content">
                                        <div class="card card-full">
                                            <div class="card-inner">
                                                <div class="d-inline-flex position-absolute end-0 top-0 me-4 mt-4">
                                                    <div
                                                        class="badge border-0 text-bg-light rounded-pill text-uppercase">
                                                        New</div>
                                                </div>
                                                <div class="user-avatar text-primary bg-primary-dim mb-3">
                                                    <em class="icon ni ni-list-thumb-fill"></em>
                                                </div>
                                                <h5 class="title">Blog Post Outline</h5>
                                                <p class="sub-text">Create lists and outlines for your articles that
                                                    performs best.</p>
                                            </div>
                                        </div><!-- .card -->
                                    </div><!-- .col -->
                                    <div class="col-sm-6 col-xxl-3 filter-item blog-content"
                                        data-category="blog-content">
                                        <div class="card card-full">
                                            <div class="card-inner">
                                                <div class="d-inline-flex position-absolute end-0 top-0 me-4 mt-4">
                                                    <div
                                                        class="badge border-0 text-white bg-pink rounded-pill text-uppercase">
                                                        Popular</div>
                                                </div>
                                                <div class="user-avatar text-primary bg-primary-dim mb-3">
                                                    <em class="icon ni ni-pen-fill"></em>
                                                </div>
                                                <h5 class="title">Blog Post Writer</h5>
                                                <p class="sub-text">Write blog articles in minutes with the most
                                                    advanced AI writing pilot.</p>
                                            </div>
                                        </div><!-- .card -->
                                    </div><!-- .col -->
                                    <div class="col-sm-6 col-xxl-3 filter-item blog-content"
                                        data-category="blog-content">
                                        <div class="card card-full">
                                            <div class="card-inner">
                                                <div class="user-avatar text-primary bg-primary-dim mb-3">
                                                    <em class="icon ni ni-file-text-fill"></em>
                                                </div>
                                                <h5 class="title">Blog Paragraph Writer</h5>
                                                <p class="sub-text">Write human centric paragraph based on your blog
                                                    subheading.</p>
                                            </div>
                                        </div><!-- .card -->
                                    </div><!-- .col -->
                                    <div class="col-sm-6 col-xxl-3 filter-item blog-content"
                                        data-category="blog-content">
                                        <div class="card card-full">
                                            <div class="card-inner">
                                                <div class="user-avatar text-primary bg-primary-dim mb-3">
                                                    <em class="icon ni ni-clipboad-check-fill"></em>
                                                </div>
                                                <h5 class="title">Pros &amp; Cons</h5>
                                                <p class="sub-text">Write the pros and cons of a product, service or
                                                    website for your blog article.</p>
                                            </div>
                                        </div><!-- .card -->
                                    </div><!-- .col -->
                                    <div class="col-sm-6 col-xxl-3 filter-item blog-content"
                                        data-category="blog-content">
                                        <div class="card card-full">
                                            <div class="card-inner">
                                                <div class="user-avatar text-primary bg-primary-dim mb-3">
                                                    <em class="icon ni ni-flag-fill"></em>
                                                </div>
                                                <h5 class="title">Blog Conclusions</h5>
                                                <p class="sub-text">End your blog articles with an engaging conclusion
                                                    paragraph.</p>
                                            </div>
                                        </div><!-- .card -->
                                    </div><!-- .col -->
                                    <div class="col-sm-6 col-xxl-3 filter-item social-media"
                                        data-category="social-media">
                                        <div class="card card-full">
                                            <div class="card-inner">
                                                <div class="d-inline-flex position-absolute end-0 top-0 me-4 mt-4">
                                                    <div
                                                        class="badge border-0 text-bg-light rounded-pill text-uppercase">
                                                        New</div>
                                                </div>
                                                <div class="user-avatar text-blue bg-blue-dim mb-3">
                                                    <em class="icon ni ni-spark-fill"></em>
                                                </div>
                                                <h5 class="title">Social Media Posts</h5>
                                                <p class="sub-text">Creative and engaging social media post for your
                                                    brand.</p>
                                            </div>
                                        </div><!-- .card -->
                                    </div><!-- .col -->
                                    <div class="col-sm-6 col-xxl-3 filter-item social-media"
                                        data-category="social-media">
                                        <div class="card card-full">
                                            <div class="card-inner">
                                                <div class="user-avatar text-blue bg-blue-dim mb-3">
                                                    <em class="icon ni ni-facebook-circle"></em>
                                                </div>
                                                <h5 class="title">Facebook Headlines</h5>
                                                <p class="sub-text">Write catchy and convincing headlines to make your
                                                    Facebook Ads stand out.</p>
                                            </div>
                                        </div><!-- .card -->
                                    </div><!-- .col -->
                                    <div class="col-sm-6 col-xxl-3 filter-item social-media"
                                        data-category="social-media">
                                        <div class="card card-full">
                                            <div class="card-inner">
                                                <div class="d-inline-flex position-absolute end-0 top-0 me-4 mt-4">
                                                    <div
                                                        class="badge border-0 text-white bg-pink rounded-pill text-uppercase">
                                                        Popular</div>
                                                </div>
                                                <div class="user-avatar text-dark bg-dark-dim mb-3">
                                                    <em class="icon ni ni-google"></em>
                                                </div>
                                                <h5 class="title">Google Ads Description</h5>
                                                <p class="sub-text">Write a Google Ads description that stands out and
                                                    generates leads.</p>
                                            </div>
                                        </div><!-- .card -->
                                    </div><!-- .col -->
                                    <div class="col-sm-6 col-xxl-3 filter-item social-media"
                                        data-category="social-media">
                                        <div class="card card-full">
                                            <div class="card-inner">
                                                <div class="user-avatar text-danger bg-danger-dim mb-3">
                                                    <em class="icon ni ni-youtube-fill"></em>
                                                </div>
                                                <h5 class="title">YouTube Tags Generator</h5>
                                                <p class="sub-text">Generate SEO optimized tags/keywords for your
                                                    YouTube video.</p>
                                            </div>
                                        </div><!-- .card -->
                                    </div><!-- .col -->
                                    <div class="col-sm-6 col-xxl-3 filter-item social-media"
                                        data-category="social-media">
                                        <div class="card card-full">
                                            <div class="card-inner">
                                                <div class="user-avatar text-indigo bg-indigo-dim mb-3">
                                                    <em class="icon ni ni-linkedin-round"></em>
                                                </div>
                                                <h5 class="title">LinkedIn Posts</h5>
                                                <p class="sub-text">Create content for your LinkedIn profile that will
                                                    help you to grow.</p>
                                            </div>
                                        </div><!-- .card -->
                                    </div><!-- .col -->
                                    <div class="col-sm-6 col-xxl-3 filter-item social-media"
                                        data-category="social-media">
                                        <div class="card card-full">
                                            <div class="card-inner">
                                                <div class="user-avatar text-azure bg-azure-dim mb-3">
                                                    <em class="icon ni ni-twitter"></em>
                                                </div>
                                                <h5 class="title">Twitter Generator</h5>
                                                <p class="sub-text">Get ideas for tweets that will engage your
                                                    followers.</p>
                                            </div>
                                        </div><!-- .card -->
                                    </div><!-- .col -->
                                    <div class="col-sm-6 col-xxl-3 filter-item website-copy-seo"
                                        data-category="website-copy-seo">
                                        <div class="card card-full">
                                            <div class="card-inner">
                                                <div class="user-avatar text-purple bg-purple-dim mb-3">
                                                    <em class="icon ni ni-laptop"></em>
                                                </div>
                                                <h5 class="title">Website Headlines/Copy</h5>
                                                <p class="sub-text">Generate professional copy for your website that
                                                    converts users.</p>
                                            </div>
                                        </div><!-- .card -->
                                    </div><!-- .col -->
                                    <div class="col-sm-6 col-xxl-3 filter-item website-copy-seo"
                                        data-category="website-copy-seo">
                                        <div class="card card-full">
                                            <div class="card-inner">
                                                <div class="user-avatar text-purple bg-purple-dim mb-3">
                                                    <em class="icon ni ni-help-fill"></em>
                                                </div>
                                                <h5 class="title">FAQs Generator</h5>
                                                <p class="sub-text">Generate frequently asked questions based on your
                                                    product description.</p>
                                            </div>
                                        </div><!-- .card -->
                                    </div><!-- .col -->
                                    <div class="col-sm-6 col-xxl-3 filter-item website-copy-seo"
                                        data-category="website-copy-seo">
                                        <div class="card card-full">
                                            <div class="card-inner">
                                                <div class="user-avatar text-purple bg-purple-dim mb-3">
                                                    <em class="icon ni ni-building-fill"></em>
                                                </div>
                                                <h5 class="title">About Us</h5>
                                                <p class="sub-text">Generate content that is unique to represent about
                                                    your business.</p>
                                            </div>
                                        </div><!-- .card -->
                                    </div><!-- .col -->
                                    <div class="col-sm-6 col-xxl-3 filter-item website-copy-seo"
                                        data-category="website-copy-seo">
                                        <div class="card card-full">
                                            <div class="card-inner">
                                                <div class="user-avatar text-purple bg-purple-dim mb-3">
                                                    <em class="icon ni ni-quote-right"></em>
                                                </div>
                                                <h5 class="title">Testimonials/Reviews</h5>
                                                <p class="sub-text">Add authentic social proof to your website by
                                                    generating user testimonials.</p>
                                            </div>
                                        </div><!-- .card -->
                                    </div><!-- .col -->
                                </div><!-- .row -->
                            </div><!-- .nk-block -->
                        </div>
                    </div>
                </div>
                <!-- content @e -->
                <!-- footer @s -->
                <div class="nk-footer">
                    <div class="container-xl wide-xl">
                        <div class="nk-footer-wrap">
                            <div class="nk-footer-copyright"> &copy; 2023 DashLite. Template by <a
                                    href="https://softnio.com" target="_blank">Softnio</a>
                            </div>
                            <div class="nk-footer-links">
                                <ul class="nav nav-sm">
                                    <li class="nav-item dropup">
                                        <a herf=""
                                            class="dropdown-toggle dropdown-indicator has-indicator nav-link text-base"
                                            data-bs-toggle="dropdown" data-offset="0,10"><span>English</span></a>
                                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                            <ul class="language-list">
                                                <li>
                                                    <a href="#" class="language-item">
                                                        <span class="language-name">English</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="language-item">
                                                        <span class="language-name">Español</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="language-item">
                                                        <span class="language-name">Français</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="language-item">
                                                        <span class="language-name">Türkçe</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a data-bs-toggle="modal" href="#region" class="nav-link"><em
                                                class="icon ni ni-globe"></em><span class="ms-1">Select
                                                Region</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- select region modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="region">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="title mb-4">Select Your Countryy</h5>
                    <div class="nk-country-region">
                        <ul class="country-list text-center gy-2">
                            <li>
                                <a href="#" class="country-item">
                                    <img src="{{ asset('images/flags/arg.png') }}" alt=""
                                        class="country-flag">
                                    <span class="country-name">Argentina</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="{{ asset('images/flags/aus.png') }}" alt=""
                                        class="country-flag">
                                    <span class="country-name">Australia</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="{{ asset('images/flags/bangladesh.png') }}" alt=""
                                        class="country-flag">
                                    <span class="country-name">Bangladesh</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="{{ asset('images/flags/canada.png') }}" alt=""
                                        class="country-flag">
                                    <span class="country-name">Canada <small>(English)</small></span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="{{ asset('images/flags/china.png') }}" alt=""
                                        class="country-flag">
                                    <span class="country-name">Centrafricaine</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="{{ asset('images/flags/china.png') }}" alt=""
                                        class="country-flag">
                                    <span class="country-name">China</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="{{ asset('images/flags/french.png') }}" alt=""
                                        class="country-flag">
                                    <span class="country-name">France</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="{{ asset('images/flags/germany.png') }}" alt=""
                                        class="country-flag">
                                    <span class="country-name">Germany</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="{{ asset('images/flags/iran.png') }}" alt=""
                                        class="country-flag">
                                    <span class="country-name">Iran</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="{{ asset('images/flags/italy.png') }}" alt=""
                                        class="country-flag">
                                    <span class="country-name">Italy</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="{{ asset('images/flags/mexico.png') }}" alt=""
                                        class="country-flag">
                                    <span class="country-name">México</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="{{ asset('images/flags/philipine.png') }}" alt=""
                                        class="country-flag">
                                    <span class="country-name">Philippines</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="{{ asset('images/flags/portugal.png') }}" alt=""
                                        class="country-flag">
                                    <span class="country-name">Portugal</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="{{ asset('images/flags/s-africa.png') }}" alt=""
                                        class="country-flag">
                                    <span class="country-name">South Africa</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="{{ asset('images/flags/spanish.png') }}" alt=""
                                        class="country-flag">
                                    <span class="country-name">Spain</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="{{ asset('images/flags/switzerland.png') }}" alt=""
                                        class="country-flag">
                                    <span class="country-name">Switzerland</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="{{ asset('images/flags/uk.png') }}" alt=""
                                        class="country-flag">
                                    <span class="country-name">United Kingdom</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="{{ asset('images/flags/english.png') }}" alt=""
                                        class="country-flag">
                                    <span class="country-name">United State</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!-- .modal-content -->
        </div><!-- .modla-dialog -->
    </div><!-- .modal -->
    <!-- JavaScript -->
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="{{ asset('js/bundle.js') }}"></script>
</body>

</html>
