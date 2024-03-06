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
                            <div class="card">
                                <div class="nk-editor">
                                    <div class="nk-editor-header">
                                        <div class="nk-editor-title">
                                            <h4 class="me-3 mb-0 line-clamp-1">2023-02-03 Untitled</h4>
                                            <ul class="d-inline-flex align-item-center">
                                                <li>
                                                    <button class="btn btn-sm btn-icon btn-trigger">
                                                        <em class="icon ni ni-pen"></em>
                                                    </button>
                                                </li>
                                                <li>
                                                    <button class="btn btn-sm btn-icon btn-trigger">
                                                        <em class="icon ni ni-star"></em>
                                                    </button>
                                                </li>
                                                <li class="d-xl-none">
                                                    <div class="dropdown">
                                                        <button class="btn btn-sm btn-icon btn-trigger" type="button"
                                                            data-bs-toggle="dropdown">
                                                            <em class="icon ni ni-download-cloud"></em>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                                            <div class="dropdown-content">
                                                                <ul class="link-list-opt">
                                                                    <li>
                                                                        <a href="#"><em
                                                                                class="icon ni ni-file-docs"></em><span>Docs</span></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#"><em
                                                                                class="icon ni ni-file-text"></em><span>Text</span></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="d-xl-none ms-1">
                                                    <button class="btn btn-sm btn-icon btn-primary">
                                                        <em class="icon ni ni-save"></em>
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="nk-editor-tools d-none d-xl-flex">
                                            <ul class="d-inline-flex gx-3 gx-lg-4 pe-4 pe-lg-5">
                                                <li>
                                                    <span class="sub-text text-nowrap">Words <span
                                                            class="text-dark">25</span></span>
                                                </li>
                                                <li>
                                                    <span class="sub-text text-nowrap">Characters <span
                                                            class="text-dark">84</span></span>
                                                </li>
                                            </ul>
                                            <ul class="d-inline-flex gx-3">
                                                <li>
                                                    <div class="dropdown">
                                                        <button class="btn btn-md btn-light rounded-pill"
                                                            type="button" data-bs-toggle="dropdown">
                                                            <span>Export</span>
                                                            <em class="icon ni ni-chevron-down"></em>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                                            <div class="dropdown-content">
                                                                <ul class="link-list-opt">
                                                                    <li>
                                                                        <a href="#"><em
                                                                                class="icon ni ni-file-doc"></em><span>Docs</span></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#"><em
                                                                                class="icon ni ni-file-text"></em><span>Text</span></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <button class="btn btn-md btn-primary rounded-pill"
                                                        type="button"> Save </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="nk-editor-main">
                                        <div class="nk-editor-base">
                                            <ul class="nav nav-tabs nav-sm nav-tabs-s1 px-3">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-bs-toggle="tab"
                                                        href="#AIWriter">AI Writer</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-bs-toggle="tab"
                                                        href="#History">History</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content mt-0">
                                                <div class="tab-pane fade show active" id="AIWriter">
                                                    <div class="p-3 ">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <div class="d-flex align-items-center">
                                                                <div
                                                                    class="user-avatar xs text-primary bg-primary-dim">
                                                                    <em class="icon ni ni-pen-fill"></em>
                                                                </div>
                                                                <h5 class="fs-14px fw-normal ms-2">Social Media Post
                                                                </h5>
                                                            </div>
                                                            <a href="#" class="link">Edit Prompt</a>
                                                        </div>
                                                        <div class="card bg-lighter shadow-none mt-3">
                                                            <div class="p-3">
                                                                <p class="small text-dark">Write a Facebook post about
                                                                    openai that revolutionizes the world through the
                                                                    power of data.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="p-3 border-top border-light">
                                                        <div class="row g-3">
                                                            <div class="col-12">
                                                                <div class="card">
                                                                    <div class="p-3">
                                                                        <div
                                                                            class="d-flex align-items-center justify-content-between mb-1">
                                                                            <div class="text-primary fs-12px">Variant 1
                                                                            </div>
                                                                            <ul class="d-flex align-items-center gx-1">
                                                                                <li><button
                                                                                        class="btn btn-sm btn-icon btn-trigger"><em
                                                                                            class="icon ni ni-chevrons-left"></em></button>
                                                                                </li>
                                                                                <li>
                                                                                    <button
                                                                                        class="btn btn-sm btn-icon clipboard-init"
                                                                                        title="Copy to clipboard"
                                                                                        data-clipboard-target="#SocialMediaPostNew01"
                                                                                        data-clip-success="<em class='icon ni ni-copy-fill'></em>"
                                                                                        data-clip-text="<em class='icon ni ni-copy'></em>">
                                                                                        <span
                                                                                            class="clipboard-text"><em
                                                                                                class='icon ni ni-copy'></em></span>
                                                                                    </button>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <p class="small text-dark"
                                                                            id="SocialMediaPostNew01">Hey everyone!
                                                                            Have you met ChatGPT? As an AI language
                                                                            model, I'm trained to answer your questions
                                                                            and have a conversation with you! Ask me
                                                                            anything, and let's get chatting! 😊</p>
                                                                        <div
                                                                            class="d-flex justify-content-between align-items-center fs-11px text-base">
                                                                            <span>42 Words</span>
                                                                        </div>
                                                                    </div>
                                                                </div><!-- .card -->
                                                            </div><!-- .col -->
                                                            <div class="col-12">
                                                                <div class="card">
                                                                    <div class="p-3">
                                                                        <div
                                                                            class="d-flex align-items-center justify-content-between mb-1">
                                                                            <div class="text-primary fs-12px">Variant 2
                                                                            </div>
                                                                            <ul class="d-flex align-items-center gx-1">
                                                                                <li><button
                                                                                        class="btn btn-sm btn-icon btn-trigger"><em
                                                                                            class="icon ni ni-chevrons-left"></em></button>
                                                                                </li>
                                                                                <li>
                                                                                    <button
                                                                                        class="btn btn-sm btn-icon clipboard-init"
                                                                                        title="Copy to clipboard"
                                                                                        data-clipboard-target="#SocialMediaPostNew02"
                                                                                        data-clip-success="<em class='icon ni ni-copy-fill'></em>"
                                                                                        data-clip-text="<em class='icon ni ni-copy'></em>">
                                                                                        <span
                                                                                            class="clipboard-text"><em
                                                                                                class='icon ni ni-copy'></em></span>
                                                                                    </button>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <p class="small text-dark"
                                                                            id="SocialMediaPostNew02">Are you tired of
                                                                            Googling for answers? Meet ChatGPT - your
                                                                            one-stop solution for all your queries! I'm
                                                                            an AI language model trained to provide you
                                                                            with accurate and informative responses. Try
                                                                            me out! 💬</p>
                                                                        <div
                                                                            class="d-flex justify-content-between align-items-center fs-11px text-base">
                                                                            <span>42 Words</span>
                                                                        </div>
                                                                    </div>
                                                                </div><!-- .card -->
                                                            </div><!-- .col -->
                                                            <div class="col-12">
                                                                <div class="card">
                                                                    <div class="p-3">
                                                                        <div
                                                                            class="d-flex align-items-center justify-content-between mb-1">
                                                                            <div class="text-primary fs-12px">Variant 3
                                                                            </div>
                                                                            <ul class="d-flex align-items-center gx-1">
                                                                                <li><button
                                                                                        class="btn btn-sm btn-icon btn-trigger"><em
                                                                                            class="icon ni ni-chevrons-left"></em></button>
                                                                                </li>
                                                                                <li>
                                                                                    <button
                                                                                        class="btn btn-sm btn-icon clipboard-init"
                                                                                        title="Copy to clipboard"
                                                                                        data-clipboard-target="#SocialMediaPostNew03"
                                                                                        data-clip-success="<em class='icon ni ni-copy-fill'></em>"
                                                                                        data-clip-text="<em class='icon ni ni-copy'></em>">
                                                                                        <span
                                                                                            class="clipboard-text"><em
                                                                                                class='icon ni ni-copy'></em></span>
                                                                                    </button>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <p class="small text-dark"
                                                                            id="SocialMediaPostNew03">OpenAI is
                                                                            changing the game for data-driven
                                                                            innovation. With its cutting-edge
                                                                            technology, we can harness the power of data
                                                                            in ways we never thought possible.</p>
                                                                        <div
                                                                            class="d-flex justify-content-between align-items-center fs-11px text-base">
                                                                            <span>42 Words</span>
                                                                        </div>
                                                                    </div>
                                                                </div><!-- .card -->
                                                            </div><!-- .col -->
                                                        </div><!-- .row -->
                                                    </div>
                                                </div><!-- .tab-pane -->
                                                <div class="tab-pane fade" id="History">
                                                    <div class="px-3 py-4">
                                                        <div class="d-flex flex-wrap justify-content-between mb-3">
                                                            <h6 class="mb-0 me-3">Generation History</h6>
                                                            <div class="fs-11px">
                                                                <span class="text-dark">1763</span> words left. <a
                                                                    href="#">Go Unlimited</a>
                                                            </div>
                                                        </div>
                                                        <div class="row g-4">
                                                            <div class="col-12">
                                                                <div class="card">
                                                                    <div class="p-3">
                                                                        <div
                                                                            class="d-flex align-items-center justify-content-between mb-2">
                                                                            <div
                                                                                class="badge badge-dim bg-primary rounded-pill align-center">
                                                                                <em
                                                                                    class="icon ni ni-pen-fill fs-11px"></em><span>Social
                                                                                    Media Post</span>
                                                                            </div>
                                                                            <ul class="d-flex align-items-center gx-1">
                                                                                <li><button
                                                                                        class="btn btn-sm btn-icon btn-trigger"><em
                                                                                            class="icon ni ni-chevrons-left"></em></button>
                                                                                </li>
                                                                                <li>
                                                                                    <button
                                                                                        class="btn btn-sm btn-icon clipboard-init"
                                                                                        title="Copy to clipboard"
                                                                                        data-clipboard-target="#SocialMediaPost03"
                                                                                        data-clip-success="<em class='icon ni ni-copy-fill'></em>"
                                                                                        data-clip-text="<em class='icon ni ni-copy'></em>">
                                                                                        <span
                                                                                            class="clipboard-text"><em
                                                                                                class='icon ni ni-copy'></em></span>
                                                                                    </button>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <p class="text-dark" id="SocialMediaPost01">
                                                                            Hey everyone! Have you met ChatGPT? As an AI
                                                                            language model, I'm trained to answer your
                                                                            questions and have a conversation with you!
                                                                            Ask me anything, and let's get chatting! 😊
                                                                        </p>
                                                                        <div
                                                                            class="d-flex justify-content-between align-items-center fs-11px text-base">
                                                                            <span>Feb 23, 2023 &nbsp; 05:23 PM</span>
                                                                            <span>42 Words</span>
                                                                        </div>
                                                                    </div>
                                                                </div><!-- .card -->
                                                            </div><!-- .col -->
                                                            <div class="col-12">
                                                                <div class="card">
                                                                    <div class="p-3">
                                                                        <div
                                                                            class="d-flex align-items-center justify-content-between mb-2">
                                                                            <div
                                                                                class="badge badge-dim bg-primary rounded-pill align-center">
                                                                                <em
                                                                                    class="icon ni ni-pen-fill fs-11px"></em><span>Social
                                                                                    Media Post</span>
                                                                            </div>
                                                                            <ul class="d-flex align-items-center gx-1">
                                                                                <li><button
                                                                                        class="btn btn-sm btn-icon btn-trigger"><em
                                                                                            class="icon ni ni-chevrons-left"></em></button>
                                                                                </li>
                                                                                <li>
                                                                                    <button
                                                                                        class="btn btn-sm btn-icon clipboard-init"
                                                                                        title="Copy to clipboard"
                                                                                        data-clipboard-target="#SocialMediaPost02"
                                                                                        data-clip-success="<em class='icon ni ni-copy-fill'></em>"
                                                                                        data-clip-text="<em class='icon ni ni-copy'></em>">
                                                                                        <span
                                                                                            class="clipboard-text"><em
                                                                                                class='icon ni ni-copy'></em></span>
                                                                                    </button>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <p class="text-dark" id="SocialMediaPost02">
                                                                            Are you tired of Googling for answers? Meet
                                                                            ChatGPT - your one-stop solution for all
                                                                            your queries! I'm an AI language model
                                                                            trained to provide you with accurate and
                                                                            informative responses. Try me out! 💬</p>
                                                                        <div
                                                                            class="d-flex justify-content-between align-items-center fs-11px text-base">
                                                                            <span>Feb 23, 2023 &nbsp; 05:23 PM</span>
                                                                            <span>42 Words</span>
                                                                        </div>
                                                                    </div>
                                                                </div><!-- .card -->
                                                            </div><!-- .col -->
                                                            <div class="col-12">
                                                                <div class="card">
                                                                    <div class="p-3">
                                                                        <div
                                                                            class="d-flex align-items-center justify-content-between mb-2">
                                                                            <div
                                                                                class="badge badge-dim bg-primary rounded-pill align-center">
                                                                                <em
                                                                                    class="icon ni ni-pen-fill fs-11px"></em><span>Social
                                                                                    Media Post</span>
                                                                            </div>
                                                                            <ul class="d-flex align-items-center gx-1">
                                                                                <li><button
                                                                                        class="btn btn-sm btn-icon btn-trigger"><em
                                                                                            class="icon ni ni-chevrons-left"></em></button>
                                                                                </li>
                                                                                <li>
                                                                                    <button
                                                                                        class="btn btn-sm btn-icon clipboard-init"
                                                                                        title="Copy to clipboard"
                                                                                        data-clipboard-target="#SocialMediaPost03"
                                                                                        data-clip-success="<em class='icon ni ni-copy-fill'></em>"
                                                                                        data-clip-text="<em class='icon ni ni-copy'></em>">
                                                                                        <span
                                                                                            class="clipboard-text"><em
                                                                                                class='icon ni ni-copy'></em></span>
                                                                                    </button>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <p class="text-dark" id="SocialMediaPost03">
                                                                            OpenAI is changing the game for data-driven
                                                                            innovation. With its cutting-edge
                                                                            technology, we can harness the power of data
                                                                            in ways we never thought possible.</p>
                                                                        <div
                                                                            class="d-flex justify-content-between align-items-center fs-11px text-base">
                                                                            <span>Feb 23, 2023 &nbsp; 05:23 PM</span>
                                                                            <span>42 Words</span>
                                                                        </div>
                                                                    </div>
                                                                </div><!-- .card -->
                                                            </div><!-- .col -->
                                                        </div><!-- .row -->
                                                    </div>
                                                </div><!-- .tab-pane -->
                                            </div><!-- .tab-content -->
                                        </div><!-- .nk-editor-base -->
                                        <div class="nk-editor-body">
                                            <div class="tinymce-toolbar nk-editor-style-clean nk-editor-full p-4 form-contol"
                                                id="editor-v1">
                                                <h1>The Importance of Business Metrics in Product Design Industry</h1>
                                                <h3>Introduction</h3>
                                                <p>In the product design industry, creating a successful product is a
                                                    top priority for any business. However, creating a product that
                                                    sells and brings in revenue is equally important. This is where
                                                    business metrics come into play. Business metrics are key
                                                    performance indicators (KPIs) that measure a company's success in
                                                    achieving its goals. In this blog post, we will discuss the
                                                    importance of business metrics in the product design industry.</p>
                                                <h3>Understanding Customer Needs</h3>
                                                <p>One of the most important aspects of product design is understanding
                                                    customer needs. Business metrics help companies gather data on
                                                    customer behavior, such as purchase history, product reviews, and
                                                    customer feedback. By analyzing this data, companies can determine
                                                    what products are in demand and what features customers are looking
                                                    for. This helps companies design products that meet customer needs,
                                                    which can increase sales and customer satisfaction.</p>
                                                <h3>Measuring Product Performance</h3>
                                                <p>Business metrics also help companies measure the performance of their
                                                    products. Metrics such as sales revenue, profit margin, and customer
                                                    retention rate can provide insight into how well a product is
                                                    performing in the market. By analyzing these metrics, companies can
                                                    make data-driven decisions about product design, pricing, and
                                                    marketing strategies. This can increase profitability and help
                                                    companies stay competitive in the market.</p>
                                                <h3>Identifying Areas for Improvement</h3>
                                                <p>Finally, business metrics can help companies identify areas for
                                                    improvement in their product design process. Metrics such as product
                                                    development cycle time, defect rate, and customer satisfaction can
                                                    help companies pinpoint areas where they can improve their
                                                    processes. By addressing these areas, companies can streamline their
                                                    product design process and improve the quality of their products.
                                                </p>
                                            </div> <!-- .js-editor -->
                                        </div><!-- .nk-editor-body -->
                                    </div><!-- .nk-editor-main -->
                                </div><!-- .nk-editor -->
                            </div>
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
    <link rel="stylesheet" href="asset('css/editors/tinymce.css?ver=3.2.3')">
    <script src="./assets/js/libs/editors/tinymce.js?ver=3.2.3"></script>
    <script src="./assets/js/editors.js?ver=3.2.3"></script>
</body>

</html>
