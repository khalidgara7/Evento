<!DOCTYPE html>
<html lang="zxx" class="js">
@extends('layouts.head')
<body class="nk-body ui-rounder has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">

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
                            </div>

                    </div><!-- .container-fliud -->
                </div>
                <!-- main header @e -->
                <!-- content @s -->
                <div class="nk-content nk-content-fluid">
                    <div class="container-xl wide-xl">
                        <div class="nk-content-body">
                            <div class="nk-block-head nk-page-head nk-block-head-sm">
                                <div class="nk-block-head-between">
                                    <div class="nk-block-head-content">
                                        <h3 class="nk-block-title page-title">Welcome Back!</h3>
                                    </div>
                                </div>
                            </div><!-- .nk-page-head -->
                            <div class="nk-block">
                                <div class="row g-gs">
                                    <div class="col-sm-6 col-xxl-3">
                                        <div class="card card-full bg-primary">
                                            <div class="card-inner">
                                                <div class="d-flex align-items-center justify-content-between mb-1">
                                                    <div class="fs-6 text-white text-opacity-75 mb-0">Words Available
                                                    </div>
                                                    <a href="{{ url('/history') }}" class="link link-white">See
                                                        History</a>
                                                </div>
                                                <h5 class="fs-1 text-white">452 <small class="fs-3">words</small>
                                                </h5>
                                                <div class="fs-7 text-white text-opacity-75 mt-1"><span
                                                        class="text-white">1548</span>/2000 free words generated</div>
                                            </div>
                                        </div><!-- .card -->
                                    </div><!-- .col -->
                                    <div class="col-sm-6 col-xxl-3">
                                        <div class="card card-full bg-warning is-dark">
                                            <div class="card-inner">
                                                <div class="d-flex align-items-center justify-content-between mb-1">
                                                    <div class="fs-6 text-white text-opacity-75 mb-0">Drafts Available
                                                    </div>
                                                    <a href="{{ url('/document-drafts') }}"
                                                        class="link link-white">See All</a>
                                                </div>
                                                <h5 class="fs-1 text-white">3 <small class="fs-3">Drafts</small>
                                                </h5>
                                                <div class="fs-7 text-white text-opacity-75 mt-1"><span
                                                        class="text-white">7</span>/10 free drafts created</div>
                                            </div>
                                        </div><!-- .card -->
                                    </div><!-- .col -->
                                    <div class="col-sm-6 col-xxl-3">
                                        <div class="card card-full bg-info is-dark">
                                            <div class="card-inner">
                                                <div class="d-flex align-items-center justify-content-between mb-1">
                                                    <div class="fs-6 text-white text-opacity-75 mb-0">Documents
                                                        Available</div>
                                                    <a href="{{ url('/document-saved') }}"
                                                        class="link link-white">See All</a>
                                                </div>
                                                <h5 class="fs-1 text-white">6 <small class="fs-3">Documents</small>
                                                </h5>
                                                <div class="fs-7 text-white text-opacity-75 mt-1"><span
                                                        class="text-white">4</span>/10 free documents created</div>
                                            </div>
                                        </div><!-- .card -->
                                    </div><!-- .col -->
                                    <div class="col-sm-6 col-xxl-3">
                                        <div class="card card-full bg-danger is-dark">
                                            <div class="card-inner">
                                                <div class="d-flex align-items-center justify-content-between mb-1">
                                                    <div class="fs-6 text-white text-opacity-75 mb-0">Tools Available
                                                    </div>
                                                    <a href="{{ url('/templates') }}" class="link link-white">All
                                                        Tools</a>
                                                </div>
                                                <h5 class="fs-1 text-white">12 <small class="fs-3">Tools</small>
                                                </h5>
                                                <div class="fs-7 text-white text-opacity-75 mt-1"><span
                                                        class="text-white">4</span>/16 tools used to generate</div>
                                            </div>
                                        </div><!-- .card -->
                                    </div><!-- .col -->
                                </div><!-- .row -->
                            </div><!-- .nk-block -->
                            <div class="nk-block-head">
                                <div class="nk-block-between">
                                    <div class="nk-block-head-content">
                                        <h4 class="nk-block-title">Popular Templates</h4>
                                    </div>
                                    <div class="nk-block-head-content">
                                        <a href="{{ url('/templates') }}" class="link">Explore All</a>
                                    </div>
                                </div>
                            </div><!-- .nk-block-head -->
                            <div class="nk-block">
                                <div class="row g-gs">
                                    <div class="col-sm-6 col-xxl-3">
                                        <div class="card card-full">
                                            <div class="card-inner">
                                                <div class="user-avatar text-primary bg-primary-dim mb-3">
                                                    <em class="icon ni ni-bulb-fill"></em>
                                                </div>
                                                <h5 class="fs-4">Blog Ideas</h5>
                                                <p>Produce trendy blog ideas for your business that engages.</p>
                                            </div>
                                        </div><!-- .card -->
                                    </div><!-- .col -->
                                    <div class="col-sm-6 col-xxl-3">
                                        <div class="card card-full">
                                            <div class="card-inner">
                                                <div class="position-absolute end-0 top-0 me-4 mt-4">
                                                    <div class="badge text-bg-light rounded-pill text-uppercase">New
                                                    </div>
                                                </div>
                                                <div class="user-avatar text-blue bg-blue-dim mb-3">
                                                    <em class="icon ni ni-spark-fill"></em>
                                                </div>
                                                <h5 class="fs-4">Social Media Posts</h5>
                                                <p>Creative and engaging social media post for your brand.</p>
                                            </div>
                                        </div><!-- .card -->
                                    </div><!-- .col -->
                                    <div class="col-sm-6 col-xxl-3">
                                        <div class="card card-full">
                                            <div class="card-inner">
                                                <div class="user-avatar text-danger bg-danger-dim mb-3">
                                                    <em class="icon ni ni-youtube-fill"></em>
                                                </div>
                                                <h5 class="fs-4">YouTube Tags Generator</h5>
                                                <p>Generate SEO optimized keywords for your YouTube video.</p>
                                            </div>
                                        </div><!-- .card -->
                                    </div><!-- .col -->
                                    <div class="col-sm-6 col-xxl-3">
                                        <div class="card card-full">
                                            <div class="card-inner">
                                                <div class="user-avatar text-purple bg-purple-dim  mb-3">
                                                    <em class="icon ni ni-laptop"></em>
                                                </div>
                                                <h5 class="fs-4">Website Headlines/Copy</h5>
                                                <p>Generate professional copy for your website that converts users.</p>
                                            </div>
                                        </div><!-- .card -->
                                    </div><!-- .col -->
                                </div><!-- .row -->
                            </div><!-- .nk-block -->
                            <div class="nk-block-head">
                                <div class="nk-block-between">
                                    <div class="nk-block-head-content">
                                        <h4 class="nk-block-title">Recent Documents</h4>
                                    </div>
                                    <div class="nk-block-head-content">
                                        <a href="{{ url('/document-saved') }}" class="link"><span>See
                                                All</span> <em class="icon ni ni-chevron-right"></em></a>
                                    </div>
                                </div>
                            </div><!-- .nk-block-head -->
                            <div class="nk-block">
                                <div class="card">
                                    <table class="table">
                                        <thead>
                                            <tr class="nk-tb-item nk-tb-head">
                                                <th class="nk-tb-col nk-tb-col-check">
                                                    <div
                                                        class="custom-control custom-control-sm custom-checkbox notext">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="did-all">
                                                        <label class="custom-control-label" for="did-all"></label>
                                                    </div>
                                                </th>
                                                <th class="nk-tb-col">
                                                    <h6 class="overline-title">Name</h6>
                                                </th>
                                                <th class="nk-tb-col tb-col-sm">
                                                    <h6 class="overline-title">Type</h6>
                                                </th>
                                                <th class="nk-tb-col tb-col-md">
                                                    <h6 class="overline-title">Last Modified</h6>
                                                </th>
                                                <th class="nk-tb-col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="nk-tb-item">
                                                <td class="nk-tb-col nk-tb-col-check">
                                                    <div
                                                        class="custom-control custom-control-sm custom-checkbox notext">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="did-01">
                                                        <label class="custom-control-label" for="did-01"></label>
                                                    </div>
                                                </td>
                                                <td class="nk-tb-col">
                                                    <div class="caption-text">The Impact of Artificial Intelligence on
                                                        the Future of Work</div>
                                                </td>
                                                <td class="nk-tb-col tb-col-sm">
                                                    <div class="badge badge-dim bg-dark rounded-pill">Document</div>
                                                </td>
                                                <td class="nk-tb-col tb-col-md">
                                                    <div class="sub-text d-inline-flex flex-wrap gx-2">
                                                        <div>Feb 15,2023 </div>
                                                        <div>02:31 PM</div>
                                                    </div>
                                                </td>
                                                <td class="nk-tb-col tb-col-end">
                                                    <div class="dropdown">
                                                        <button class="btn btn-sm btn-icon btn-trigger me-n1"
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
                                                </td>
                                            </tr><!-- .nk-tb-item -->
                                            <tr class="nk-tb-item">
                                                <td class="nk-tb-col nk-tb-col-check">
                                                    <div
                                                        class="custom-control custom-control-sm custom-checkbox notext">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="did-02">
                                                        <label class="custom-control-label" for="did-02"></label>
                                                    </div>
                                                </td>
                                                <td class="nk-tb-col">
                                                    <div class="caption-text">How to Boost Your Online Presence with
                                                        Social Media Marketing</div>
                                                </td>
                                                <td class="nk-tb-col tb-col-sm">
                                                    <div class="badge badge-dim bg-info rounded-pill">Social Media
                                                    </div>
                                                </td>
                                                <td class="nk-tb-col tb-col-md">
                                                    <div class="sub-text d-inline-flex flex-wrap gx-2">
                                                        <div>Feb 15,2023 </div>
                                                        <div>02:31 PM</div>
                                                    </div>
                                                </td>
                                                <td class="nk-tb-col tb-col-end">
                                                    <div class="dropdown">
                                                        <button class="btn btn-sm btn-icon btn-trigger me-n1"
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
                                                </td>
                                            </tr><!-- .nk-tb-item -->
                                            <tr class="nk-tb-item">
                                                <td class="nk-tb-col nk-tb-col-check">
                                                    <div
                                                        class="custom-control custom-control-sm custom-checkbox notext">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="did-03">
                                                        <label class="custom-control-label" for="did-03"></label>
                                                    </div>
                                                </td>
                                                <td class="nk-tb-col">
                                                    <div class="caption-text">Top 10 Tips for Effective Time Management
                                                        in the Workplace</div>
                                                </td>
                                                <td class="nk-tb-col tb-col-sm">
                                                    <div class="badge badge-dim bg-primary rounded-pill">Blog Content
                                                    </div>
                                                </td>
                                                <td class="nk-tb-col tb-col-md">
                                                    <div class="sub-text d-inline-flex flex-wrap gx-2">
                                                        <div>Feb 15,2023 </div>
                                                        <div>02:31 PM</div>
                                                    </div>
                                                </td>
                                                <td class="nk-tb-col tb-col-end">
                                                    <div class="dropdown">
                                                        <button class="btn btn-sm btn-icon btn-trigger me-n1"
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
                                                </td>
                                            </tr><!-- .nk-tb-item -->
                                            <tr class="nk-tb-item">
                                                <td class="nk-tb-col nk-tb-col-check">
                                                    <div
                                                        class="custom-control custom-control-sm custom-checkbox notext">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="did-04">
                                                        <label class="custom-control-label" for="did-04"></label>
                                                    </div>
                                                </td>
                                                <td class="nk-tb-col">
                                                    <div class="caption-text">Transforming Healthcare with Big Data:
                                                        Exploring the Opportunities</div>
                                                </td>
                                                <td class="nk-tb-col tb-col-sm">
                                                    <div class="badge badge-dim bg-warning rounded-pill">Website Copy
                                                        &amp; SEO</div>
                                                </td>
                                                <td class="nk-tb-col tb-col-md">
                                                    <div class="sub-text d-inline-flex flex-wrap gx-2">
                                                        <div>Feb 15,2023 </div>
                                                        <div>02:31 PM</div>
                                                    </div>
                                                </td>
                                                <td class="nk-tb-col tb-col-end">
                                                    <div class="dropdown">
                                                        <button class="btn btn-sm btn-icon btn-trigger me-n1"
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
                                                </td>
                                            </tr><!-- .nk-tb-item -->
                                        </tbody>
                                    </table>
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
