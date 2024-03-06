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
                            <div class="nk-block">
                                <div class="d-flex flex-wrap align-items-center justify-content-between">
                                    <h4 class="mb-0">Words Generated</h4>
                                    <div class="caption-text text-dark">940 <span class="text-base">of 5000 words
                                            used.</span></div>
                                </div>
                                <div class="progress progress-md bg-primary bg-opacity-10 mt-3">
                                    <div class="progress-bar bg-primary" data-progress="55"></div>
                                </div>
                                <div class="fs-14px text-dark mt-2">To increase your limit, check our <a
                                        href="#">Pricing &amp; Plans</a>.</div>
                            </div><!-- .nk-block -->
                            <div class="nk-block">
                                <div class="nk-history">
                                    <div class="nk-history-item">
                                        <div class="nk-history-symbol">
                                            <div class="nk-history-symbol-dot"></div>
                                        </div>
                                        <div class="nk-history-content">
                                            <h5>19 Feb, 2023</h5>
                                        </div>
                                    </div>
                                    <div class="nk-history-item">
                                        <div class="nk-history-symbol">
                                            <div class="nk-history-symbol-dot"></div>
                                        </div>
                                        <div class="nk-history-content">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div
                                                        class="d-flex align-items-center justify-content-between mb-2">
                                                        <div class="d-flex align-items-center">
                                                            <div class="user-avatar xs text-primary bg-primary-dim">
                                                                <em class="icon ni ni-pen-fill"></em>
                                                            </div>
                                                            <h5 class="fs-14px fw-normal ms-2">Social Media Post</h5>
                                                        </div>
                                                        <button class="btn btn-sm clipboard-init mx-n2"
                                                            title="Copy to clipboard"
                                                            data-clipboard-target="#SocialMediaPost04"
                                                            data-clip-success="<em class='icon ni ni-copy-fill'></em><span>Copied</span>"
                                                            data-clip-text="<em class='icon ni ni-copy'></em><span>Copy</span>">
                                                            <span class="clipboard-text align-center"><em
                                                                    class='icon ni ni-copy'></em><span>Copy</span></span>
                                                        </button>
                                                    </div>
                                                    <p class="lead text-base" id="SocialMediaPost04"> Hey everyone!
                                                        Have you met ChatGPT? As an AI language model, I'm trained to
                                                        answer your questions and have a conversation with you! Ask me
                                                        anything, and let's get chatting! 😊 </p>
                                                    <ul class="nk-history-meta">
                                                        <li>5:22 PM</li>
                                                        <li>29 Words / 129 Characters</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- .nk-history-item -->
                                    <div class="nk-history-item">
                                        <div class="nk-history-symbol">
                                            <div class="nk-history-symbol-dot"></div>
                                        </div>
                                        <div class="nk-history-content">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div
                                                        class="d-flex align-items-center justify-content-between mb-2">
                                                        <div class="d-flex align-items-center">
                                                            <div class="user-avatar xs text-primary bg-primary-dim">
                                                                <em class="icon ni ni-pen-fill"></em>
                                                            </div>
                                                            <h5 class="fs-14px fw-normal ms-2">Social Media Post</h5>
                                                        </div>
                                                        <button class="btn btn-sm clipboard-init mx-n2"
                                                            title="Copy to clipboard"
                                                            data-clipboard-target="#SocialMediaPost03"
                                                            data-clip-success="<em class='icon ni ni-copy-fill'></em><span>Copied</span>"
                                                            data-clip-text="<em class='icon ni ni-copy'></em><span>Copy</span>">
                                                            <span class="clipboard-text align-center"><em
                                                                    class='icon ni ni-copy'></em><span>Copy</span></span>
                                                        </button>
                                                    </div>
                                                    <p class="lead text-base" id="SocialMediaPost03"> The power of
                                                        data is transforming the world, and OpenAI is leading the way.
                                                        By leveraging the latest in machine learning and artificial
                                                        intelligence, OpenAI is helping businesses and organizations
                                                        unlock the full potential of their data, driving innovation and
                                                        growth. </p>
                                                    <ul class="nk-history-meta">
                                                        <li>5:22 PM</li>
                                                        <li>43 Words / 224 Characters</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- .nk-history-item -->
                                    <a href="#" class="nk-history-item nk-history-expand">
                                        <div class="nk-history-symbol">
                                            <div class="nk-history-symbol-button">
                                                <em class="icon rotate-90 ni ni-code"></em>
                                            </div>
                                        </div>
                                        <div class="nk-history-content">
                                            <h6 class="nk-history-symbol-text">Show 3 more history</h6>
                                        </div>
                                    </a><!-- .nk-history-item -->
                                    <div class="nk-history-item">
                                        <div class="nk-history-symbol">
                                            <div class="nk-history-symbol-dot border-success"></div>
                                        </div>
                                        <div class="nk-history-content">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div
                                                        class="d-flex align-items-center justify-content-between mb-2">
                                                        <div class="d-flex align-items-center">
                                                            <div class="user-avatar xs text-success bg-success-dim">
                                                                <em class="icon ni ni-text2"></em>
                                                            </div>
                                                            <h5 class="fs-14px fw-normal ms-2">Website Copy</h5>
                                                        </div>
                                                        <button class="btn btn-sm clipboard-init mx-n2"
                                                            title="Copy to clipboard"
                                                            data-clipboard-target="#SocialMediaPost002"
                                                            data-clip-success="<em class='icon ni ni-copy-fill'></em><span>Copied</span>"
                                                            data-clip-text="<em class='icon ni ni-copy'></em><span>Copy</span>">
                                                            <span class="clipboard-text align-center"><em
                                                                    class='icon ni ni-copy'></em><span>Copy</span></span>
                                                        </button>
                                                    </div>
                                                    <p class="lead text-base" id="SocialMediaPost002"> Solve your
                                                        content challenges and get your sales, marketing and social
                                                        media campaigns off to a flawless start with our cutting edge
                                                        technology. We use Artificial Intelligence to create and edit
                                                        quality written content for you. </p>
                                                    <ul class="nk-history-meta">
                                                        <li>5:22 PM</li>
                                                        <li>27 Words / 154 Characters</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- .nk-history-item -->
                                    <div class="nk-history-item">
                                        <div class="nk-history-symbol">
                                            <div class="nk-history-symbol-dot border-success"></div>
                                        </div>
                                        <div class="nk-history-content">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div
                                                        class="d-flex align-items-center justify-content-between mb-2">
                                                        <div class="d-flex align-items-center">
                                                            <div class="user-avatar xs text-success bg-success-dim">
                                                                <em class="icon ni ni-text2"></em>
                                                            </div>
                                                            <h5 class="fs-14px fw-normal ms-2">Website Copy</h5>
                                                        </div>
                                                        <button class="btn btn-sm clipboard-init mx-n2"
                                                            title="Copy to clipboard"
                                                            data-clipboard-target="#SocialMediaPost01"
                                                            data-clip-success="<em class='icon ni ni-copy-fill'></em><span>Copied</span>"
                                                            data-clip-text="<em class='icon ni ni-copy'></em><span>Copy</span>">
                                                            <span class="clipboard-text align-center"><em
                                                                    class='icon ni ni-copy'></em><span>Copy</span></span>
                                                        </button>
                                                    </div>
                                                    <p class="lead text-base" id="SocialMediaPost01"> Generate better
                                                        content copies in seconds with the power of Artificial
                                                        Intelligence. Automatically generate smart, engaging content at
                                                        scale, without ever having to lift a finger. Say goodbye to
                                                        content marketing and SEO, with Copygen. </p>
                                                    <ul class="nk-history-meta">
                                                        <li>5:22 PM</li>
                                                        <li>24 Words / 142 Characters</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- .nk-history-item -->
                                    <a href="#" class="nk-history-item nk-history-expand">
                                        <div class="nk-history-symbol">
                                            <div class="nk-history-symbol-button">
                                                <em class="icon rotate-90 ni ni-code"></em>
                                            </div>
                                        </div>
                                        <div class="nk-history-content">
                                            <h6 class="nk-history-symbol-text">Show 3 more history</h6>
                                        </div>
                                    </a><!-- .nk-history-item -->
                                </div><!-- .nk-history -->
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
