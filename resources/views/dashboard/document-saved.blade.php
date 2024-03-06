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
                                <div class="nk-block-between g-3">
                                    <div class="nk-block-head-content">
                                        <h3 class="nk-block-title page-title">Saved Document</h3>
                                        <div class="nk-block-des text-soft">
                                            <p>List of documents you saved for later.</p>
                                        </div>
                                    </div>
                                    <div class="nk-block-head-content">
                                        <a href="#" class="btn btn-primary d-none d-sm-inline-flex"><em
                                                class="icon ni ni-plus"></em><span>Create New</span></a>
                                        <a href="#" class="btn btn-icon btn-primary d-inline-flex d-sm-none"><em
                                                class="icon ni ni-plus"></em></a>
                                    </div>
                                </div>
                            </div><!-- .nk-block-head -->
                            <div class="nk-block">
                                <div class="card card-stretch">
                                    <div class="card-inner-group">
                                        <div class="card-inner">
                                            <div class="card-title-group">
                                                <ul class="nav nav-tabs nav-tabs-s2">
                                                    <li class="nav-item">
                                                        <a class="nav-link py-1 active" data-bs-toggle="tab"
                                                            href="#recentDocuments">Recents</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link py-1" data-bs-toggle="tab"
                                                            href="#trashDocuments">Trash</a>
                                                    </li>
                                                </ul>
                                                <div class="card-tools me-n1">
                                                    <ul class="btn-toolbar gx-1">
                                                        <li>
                                                            <a href="#"
                                                                class="search-toggle toggle-search btn btn-icon"
                                                                data-target="search"><em
                                                                    class="icon ni ni-search"></em></a>
                                                        </li><!-- li -->
                                                        <li class="btn-toolbar-sep"></li><!-- li -->
                                                        <li>
                                                            <div class="dropdown">
                                                                <button class="btn btn-icon btn-trigger text-base"
                                                                    type="button" data-bs-toggle="dropdown">
                                                                    <em class="icon ni ni-filter-alt"></em>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <div class="dropdown-content">
                                                                        <ul class="link-check">
                                                                            <li>
                                                                                <a href="#"><em
                                                                                        class="icon ni ni-calendar-check"></em><span>Date
                                                                                        Created</span></a>
                                                                            </li>
                                                                            <li class="active">
                                                                                <a href="#"><em
                                                                                        class="icon ni ni-edit"></em><span>Last
                                                                                        Modified</span></a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#"><em
                                                                                        class="icon ni ni-text-a"></em><span>Alphabetical</span></a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li><!-- li -->
                                                    </ul><!-- .btn-toolbar -->
                                                </div><!-- .card-tools -->
                                                <div class="card-search search-wrap" data-search="search">
                                                    <div class="search-content">
                                                        <a href="#"
                                                            class="search-back btn btn-icon toggle-search"
                                                            data-target="search"><em
                                                                class="icon ni ni-arrow-left"></em></a>
                                                        <input type="text"
                                                            class="form-control border-transparent form-focus-none"
                                                            placeholder="Quick search by transaction">
                                                        <button class="search-submit btn btn-icon"><em
                                                                class="icon ni ni-search"></em></button>
                                                    </div>
                                                </div><!-- .card-search -->
                                            </div><!-- .card-title-group -->
                                        </div><!-- .card-inner -->
                                        <div class="card-inner p-0">
                                            <div class="tab-content">
                                                <div class="tab-pane fade show active" id="recentDocuments">
                                                    <div class="nk-tb-list nk-tb-tnx">
                                                        <div class="nk-tb-item nk-tb-head">
                                                            <div class="nk-tb-col">
                                                                <h6 class="overline-title">Name</h6>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-sm">
                                                                <h6 class="overline-title">Type</h6>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-md">
                                                                <h6 class="overline-title">Last Modified</h6>
                                                            </div>
                                                            <div class="nk-tb-col"></div>
                                                        </div>
                                                        <div class="nk-tb-item">
                                                            <div class="nk-tb-col">
                                                                <div class="caption-text">The Impact of Artificial
                                                                    Intelligence on the Future of Work</div>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-sm">
                                                                <div class="badge badge-dim bg-dark rounded-pill">
                                                                    Document</div>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-md">
                                                                <div class="sub-text d-inline-flex flex-wrap gx-2">
                                                                    <div>Feb 15,2023 </div>
                                                                    <div>02:31 PM</div>
                                                                </div>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-end">
                                                                <div class="dropdown">
                                                                    <button
                                                                        class="btn btn-sm btn-icon btn-trigger me-n1"
                                                                        type="button" data-bs-toggle="dropdown">
                                                                        <em class="icon ni ni-more-h"></em>
                                                                    </button>
                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <div class="dropdown-content">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li>
                                                                                    <a href="#"><em
                                                                                            class="icon ni ni-eye"></em><span>View
                                                                                            Document</span></a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#"><em
                                                                                            class="icon ni ni-edit"></em><span>Rename</span></a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#"><em
                                                                                            class="icon ni ni-trash"></em><span>Move
                                                                                            to Trash</span></a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- .nk-tb-item -->
                                                        <div class="nk-tb-item">
                                                            <div class="nk-tb-col">
                                                                <div class="caption-text">How to Boost Your Online
                                                                    Presence with Social Media Marketing</div>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-sm">
                                                                <div class="badge badge-dim bg-info rounded-pill">
                                                                    Social Media</div>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-md">
                                                                <div class="sub-text d-inline-flex flex-wrap gx-2">
                                                                    <div>Feb 15,2023 </div>
                                                                    <div>02:31 PM</div>
                                                                </div>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-end">
                                                                <div class="dropdown">
                                                                    <button
                                                                        class="btn btn-sm btn-icon btn-trigger me-n1"
                                                                        type="button" data-bs-toggle="dropdown">
                                                                        <em class="icon ni ni-more-h"></em>
                                                                    </button>
                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <div class="dropdown-content">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li>
                                                                                    <a href="#"><em
                                                                                            class="icon ni ni-eye"></em><span>View
                                                                                            Document</span></a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#"><em
                                                                                            class="icon ni ni-edit"></em><span>Rename</span></a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#"><em
                                                                                            class="icon ni ni-trash"></em><span>Move
                                                                                            to Trash</span></a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- .nk-tb-item -->
                                                        <div class="nk-tb-item">
                                                            <div class="nk-tb-col">
                                                                <div class="caption-text">Top 10 Tips for Effective
                                                                    Time Management in the Workplace</div>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-sm">
                                                                <div class="badge badge-dim bg-primary rounded-pill">
                                                                    Blog Content</div>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-md">
                                                                <div class="sub-text d-inline-flex flex-wrap gx-2">
                                                                    <div>Feb 15,2023 </div>
                                                                    <div>02:31 PM</div>
                                                                </div>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-end">
                                                                <div class="dropdown">
                                                                    <button
                                                                        class="btn btn-sm btn-icon btn-trigger me-n1"
                                                                        type="button" data-bs-toggle="dropdown">
                                                                        <em class="icon ni ni-more-h"></em>
                                                                    </button>
                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <div class="dropdown-content">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li>
                                                                                    <a href="#"><em
                                                                                            class="icon ni ni-eye"></em><span>View
                                                                                            Document</span></a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#"><em
                                                                                            class="icon ni ni-edit"></em><span>Rename</span></a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#"><em
                                                                                            class="icon ni ni-trash"></em><span>Move
                                                                                            to Trash</span></a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- .nk-tb-item -->
                                                        <div class="nk-tb-item">
                                                            <div class="nk-tb-col">
                                                                <div class="caption-text">Exploring the Latest
                                                                    Breakthroughs and Innovations</div>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-sm">
                                                                <div class="badge badge-dim bg-warning rounded-pill">
                                                                    Facebook Caption</div>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-md">
                                                                <div class="sub-text d-inline-flex flex-wrap gx-2">
                                                                    <div>Feb 15,2023 </div>
                                                                    <div>02:31 PM</div>
                                                                </div>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-end">
                                                                <div class="dropdown">
                                                                    <button
                                                                        class="btn btn-sm btn-icon btn-trigger me-n1"
                                                                        type="button" data-bs-toggle="dropdown">
                                                                        <em class="icon ni ni-more-h"></em>
                                                                    </button>
                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <div class="dropdown-content">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li>
                                                                                    <a href="#"><em
                                                                                            class="icon ni ni-eye"></em><span>View
                                                                                            Document</span></a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#"><em
                                                                                            class="icon ni ni-edit"></em><span>Rename</span></a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#"><em
                                                                                            class="icon ni ni-trash"></em><span>Move
                                                                                            to Trash</span></a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- .nk-tb-item -->
                                                        <div class="nk-tb-item">
                                                            <div class="nk-tb-col">
                                                                <div class="caption-text">Revolutionizing Industries
                                                                    and Changing Way of Transact</div>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-sm">
                                                                <div class="badge badge-dim bg-secondary rounded-pill">
                                                                    Google Ads</div>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-md">
                                                                <div class="sub-text d-inline-flex flex-wrap gx-2">
                                                                    <div>Feb 15,2023 </div>
                                                                    <div>02:31 PM</div>
                                                                </div>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-end">
                                                                <div class="dropdown">
                                                                    <button
                                                                        class="btn btn-sm btn-icon btn-trigger me-n1"
                                                                        type="button" data-bs-toggle="dropdown">
                                                                        <em class="icon ni ni-more-h"></em>
                                                                    </button>
                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <div class="dropdown-content">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li>
                                                                                    <a href="#"><em
                                                                                            class="icon ni ni-eye"></em><span>View
                                                                                            Document</span></a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#"><em
                                                                                            class="icon ni ni-edit"></em><span>Rename</span></a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#"><em
                                                                                            class="icon ni ni-trash"></em><span>Move
                                                                                            to Trash</span></a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- .nk-tb-item -->
                                                        <div class="nk-tb-item">
                                                            <div class="nk-tb-col">
                                                                <div class="caption-text">Connecting Our World and
                                                                    Shaping the Future of Smart Living</div>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-sm">
                                                                <div class="badge badge-dim bg-danger rounded-pill">
                                                                    YouTube Title</div>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-md">
                                                                <div class="sub-text d-inline-flex flex-wrap gx-2">
                                                                    <div>Feb 15,2023 </div>
                                                                    <div>02:31 PM</div>
                                                                </div>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-end">
                                                                <div class="dropdown">
                                                                    <button
                                                                        class="btn btn-sm btn-icon btn-trigger me-n1"
                                                                        type="button" data-bs-toggle="dropdown">
                                                                        <em class="icon ni ni-more-h"></em>
                                                                    </button>
                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <div class="dropdown-content">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li>
                                                                                    <a href="#"><em
                                                                                            class="icon ni ni-eye"></em><span>View
                                                                                            Document</span></a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#"><em
                                                                                            class="icon ni ni-edit"></em><span>Rename</span></a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#"><em
                                                                                            class="icon ni ni-trash"></em><span>Move
                                                                                            to Trash</span></a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- .nk-tb-item -->
                                                        <div class="nk-tb-item">
                                                            <div class="nk-tb-col">
                                                                <div class="caption-text">Harnessing the Scalability
                                                                    and Efficiency of the Cloud</div>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-sm">
                                                                <div class="badge badge-dim bg-gray rounded-pill">
                                                                    Website Copy</div>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-md">
                                                                <div class="sub-text d-inline-flex flex-wrap gx-2">
                                                                    <div>Feb 15,2023 </div>
                                                                    <div>02:31 PM</div>
                                                                </div>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-end">
                                                                <div class="dropdown">
                                                                    <button
                                                                        class="btn btn-sm btn-icon btn-trigger me-n1"
                                                                        type="button" data-bs-toggle="dropdown">
                                                                        <em class="icon ni ni-more-h"></em>
                                                                    </button>
                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <div class="dropdown-content">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li>
                                                                                    <a href="#"><em
                                                                                            class="icon ni ni-eye"></em><span>View
                                                                                            Document</span></a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#"><em
                                                                                            class="icon ni ni-edit"></em><span>Rename</span></a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#"><em
                                                                                            class="icon ni ni-trash"></em><span>Move
                                                                                            to Trash</span></a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- .nk-tb-item -->
                                                        <div class="nk-tb-item">
                                                            <div class="nk-tb-col">
                                                                <div class="caption-text">Exploring the Latest
                                                                    Developments in Electric Vehicles and Autonomous
                                                                    Cars</div>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-sm">
                                                                <div class="badge badge-dim bg-primary rounded-pill">
                                                                    Blog Content</div>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-md">
                                                                <div class="sub-text d-inline-flex flex-wrap gx-2">
                                                                    <div>Feb 15,2023 </div>
                                                                    <div>02:31 PM</div>
                                                                </div>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-end">
                                                                <div class="dropdown">
                                                                    <button
                                                                        class="btn btn-sm btn-icon btn-trigger me-n1"
                                                                        type="button" data-bs-toggle="dropdown">
                                                                        <em class="icon ni ni-more-h"></em>
                                                                    </button>
                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <div class="dropdown-content">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li>
                                                                                    <a href="#"><em
                                                                                            class="icon ni ni-eye"></em><span>View
                                                                                            Document</span></a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#"><em
                                                                                            class="icon ni ni-edit"></em><span>Rename</span></a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#"><em
                                                                                            class="icon ni ni-trash"></em><span>Move
                                                                                            to Trash</span></a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- .nk-tb-item -->
                                                        <div class="nk-tb-item">
                                                            <div class="nk-tb-col">
                                                                <div class="caption-text">Protecting Data and Privacy
                                                                    in an Ever-Changing Landscape</div>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-sm">
                                                                <div class="badge badge-dim bg-success rounded-pill">
                                                                    Pros &amp; Cons</div>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-md">
                                                                <div class="sub-text d-inline-flex flex-wrap gx-2">
                                                                    <div>Feb 15,2023 </div>
                                                                    <div>02:31 PM</div>
                                                                </div>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-end">
                                                                <div class="dropdown">
                                                                    <button
                                                                        class="btn btn-sm btn-icon btn-trigger me-n1"
                                                                        type="button" data-bs-toggle="dropdown">
                                                                        <em class="icon ni ni-more-h"></em>
                                                                    </button>
                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <div class="dropdown-content">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li>
                                                                                    <a href="#"><em
                                                                                            class="icon ni ni-eye"></em><span>View
                                                                                            Document</span></a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#"><em
                                                                                            class="icon ni ni-edit"></em><span>Rename</span></a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#"><em
                                                                                            class="icon ni ni-trash"></em><span>Move
                                                                                            to Trash</span></a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- .nk-tb-item -->
                                                        <div class="nk-tb-item">
                                                            <div class="nk-tb-col">
                                                                <div class="caption-text">How Technology is
                                                                    Transforming Industries and Redefining Job Roles
                                                                </div>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-sm">
                                                                <div class="badge badge-dim bg-primary rounded-pill">
                                                                    Blog Conclusion</div>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-md">
                                                                <div class="sub-text d-inline-flex flex-wrap gx-2">
                                                                    <div>Feb 15,2023 </div>
                                                                    <div>02:31 PM</div>
                                                                </div>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-end">
                                                                <div class="dropdown">
                                                                    <button
                                                                        class="btn btn-sm btn-icon btn-trigger me-n1"
                                                                        type="button" data-bs-toggle="dropdown">
                                                                        <em class="icon ni ni-more-h"></em>
                                                                    </button>
                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <div class="dropdown-content">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li>
                                                                                    <a href="#"><em
                                                                                            class="icon ni ni-eye"></em><span>View
                                                                                            Document</span></a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#"><em
                                                                                            class="icon ni ni-edit"></em><span>Rename</span></a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#"><em
                                                                                            class="icon ni ni-trash"></em><span>Move
                                                                                            to Trash</span></a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- .nk-tb-item -->
                                                    </div><!-- .nk-tb-list -->
                                                </div><!-- .tab-pane -->
                                                <div class="tab-pane fade" id="trashDocuments">
                                                    <div class="row justify-content-center py-5">
                                                        <div class="col-md-7 col-lg-4">
                                                            <div class="mb-3 text-center">
                                                                <img src="{{ asset('images/copywriter/illustrations/no-documents.svg') }}"
                                                                    alt="" />
                                                            </div>
                                                            <div class="nk-block-head text-center">
                                                                <div class="nk-block-head-content">
                                                                    <h3 class="nk-block-title mb-2">No documents in
                                                                        trash.</h3>
                                                                    <p>All files have been permanently removed from the
                                                                        trash folder and cannot be retrieved.</p>
                                                                </div>
                                                            </div>
                                                            <div class="text-center">
                                                                <a class="btn btn-primary"
                                                                    href="{{ url('/templates') }}">Explore
                                                                    Templates</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- .tab-pane -->
                                            </div><!-- .tab-content -->
                                        </div><!-- .card-inner -->
                                        <div class="card-inner">
                                            <ul class="pagination justify-content-center justify-content-md-start">
                                                <li class="page-item"><a class="page-link" href="#">Prev</a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><span class="page-link"><em
                                                            class="icon ni ni-more-h"></em></span></li>
                                                <li class="page-item"><a class="page-link" href="#">6</a></li>
                                                <li class="page-item"><a class="page-link" href="#">7</a></li>
                                                <li class="page-item"><a class="page-link" href="#">Next</a>
                                                </li>
                                            </ul>
                                        </div><!-- .card-inner -->
                                    </div><!-- .card-inner-group -->
                                </div><!-- .card -->
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
