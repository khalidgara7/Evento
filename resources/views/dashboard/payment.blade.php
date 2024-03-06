<!DOCTYPE html>
<html lang="zxx" class="js">
@extends('layouts.head')

<body class="nk-body ui-rounder npc-general ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            @extends('layouts.sidebar')
            <!-- wrap @s -->
            <div class="nk-wrap nk-wrap-nosidebar">
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="nk-split nk-split-page nk-split-lg">
                        <div
                            class="nk-split-content bg-lighter w-50 d-flex align-items-center justify-content-center justify-content-lg-end p-4 p-sm-5">
                            <div class="wide-xs w-100">
                                <div class="d-flex">
                                    <a class="pe-2 d-flex align-items-center" href="{{ url('/index') }}">
                                        <em class="icon ni ni-arrow-left text-base"></em>
                                        <div class="logo-link ms-3">
                                            <img class="logo-light logo-img" src="{{ asset('images/logo.png') }}"
                                                srcset="./images/logo2x.png 2x" alt="logo">
                                            <img class="logo-dark logo-img" src="{{ asset('images/logo-dark.png') }}"
                                                srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
                                        </div>
                                    </a>
                                </div>
                                <div class="pt-4">
                                    <div class="fs-4 fw-normal mb-1">Subscribe to Unlimited (Yearly)</div>
                                    <h3 class="display-4 fw-semibold">$225 <span
                                            class="caption-text text-base fw-normal"> per year</span></h3>
                                    <div class="fs-5 fw-normal mt-2">A yearly pro plan for dashlite</div>
                                </div>
                                <ul class="mt-4 gy-4 pb-2">
                                    <li class="d-flex justify-content-between">
                                        <div class="">
                                            <div class="caption-text">Unlimited (Yearly)</div>
                                            <span class="sub-text">Qty 1Billed yearly</span>
                                        </div>
                                        <div class="caption-text">$225.00</div>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <div class="">
                                            <div class="caption-text">Subtotal</div>
                                        </div>
                                        <div class="caption-text">$225.00</div>
                                    </li>
                                </ul>
                                <div class="border-top border-bottom py-3">
                                    <button class="btn btn-white btn-outline-light btn-md"> Add promotion code </button>
                                </div>
                                <div class="d-flex justify-content-between pt-2 pb-lg-5 mb-lg-5">
                                    <div class="caption-text">Total</div>
                                    <div class="caption-text">$225.00</div>
                                </div>
                                <div class="d-flex flex-wrap align-items-center justify-content-between mt-5 pt-lg-5">
                                    <div class="text-base fs-14px">Powered By Stripe</div>
                                    <ul class="nav nav-sm mx-n1">
                                        <li class="nav-item"><a class="nav-link px-1" href="#">Terms</a></li>
                                        <li class="nav-item"><a class="nav-link px-1" href="#">Privacy</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div
                            class="nk-split-content bg-white w-50 d-flex align-items-center justify-content-center justify-content-lg-start p-4 p-sm-5">
                            <div class="wide-xs w-100">
                                <h3 class="mb-3">Pay with card</h3>
                                <div class="row g-3">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label class="form-label" for="email">Email</label>
                                            <div class="form-control-wrap">
                                                <input class="form-control" type="email" id="email"
                                                    placeholder="Enter email address" />
                                            </div>
                                        </div><!-- .form-group -->
                                    </div><!-- .col -->
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label class="form-label" for="card-number">Card information</label>
                                            <div class="form-control-wrap">
                                                <div class="d-flex flex-wrap border border-light rounded">
                                                    <div
                                                        class="w-100 border-bottom border-light d-flex align-items-center">
                                                        <input class="form-control-plaintext px-3" type="text"
                                                            id="card-number" placeholder="1234 1234 1234 1234" />
                                                        <ul class="d-flex pe-3 gx-1 flex-shrink-0">
                                                            <li class="h-1rem d-inline-flex">
                                                                <img src="{{ asset('images/copywriter/icons/card/visa.png') }}"
                                                                    alt="" class="h-100" />
                                                            </li>
                                                            <li class="h-1rem d-inline-flex">
                                                                <img src="{{ asset('images/copywriter/icons/card/mastercard.png') }}"
                                                                    alt="" class="h-100" />
                                                            </li>
                                                            <li class="h-1rem d-inline-flex">
                                                                <img src="{{ asset('images/copywriter/icons/card/amex.png') }}"
                                                                    alt="" class="h-100" />
                                                            </li>
                                                            <li class="h-1rem d-inline-flex">
                                                                <img src="{{ asset('images/copywriter/icons/card/diners.png') }}"
                                                                    alt="" class="h-100" />
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="w-50 border-end border-light">
                                                        <input class="form-control-plaintext px-3 date-picker-ym"
                                                            type="text" id="card-exp-date" placeholder="MM/YY" />
                                                    </div>
                                                    <div class="w-50">
                                                        <input class="form-control-plaintext px-3" type="text"
                                                            id="card-ccv" placeholder="123" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- .form-group -->
                                    </div><!-- .col -->
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label class="form-label" for="name">Name on card</label>
                                            <div class="form-control-wrap">
                                                <input class="form-control" type="text" id="name"
                                                    placeholder="Full Name" />
                                            </div>
                                        </div><!-- .form-group -->
                                    </div><!-- .col -->
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label class="form-label">Country</label>
                                            <div class="form-control-wrap">
                                                <select class="js-select2 form-select" data-search="true"
                                                    data-sort="false">
                                                    <option value="AE">United Arab Emirates</option>
                                                    <option value="GB">United Kingdom</option>
                                                    <option value="US">United States</option>
                                                    <option value="SE">Sweden</option>
                                                    <option value="CH">Switzerland</option>
                                                </select>
                                            </div>
                                        </div><!-- .form-group -->
                                    </div><!-- .col -->
                                    <div class="col-12">
                                        <div class="p-2 border border-light rounded-2 my-1">
                                            <div class="form-check flex-nowrap">
                                                <input class="form-check-input mt-0 flex-shrink-0" type="checkbox"
                                                    value="" id="savecard">
                                                <label class="form-check-label" for="savecard">
                                                    <h6 class="mb-1">Securely save my information for 1-click
                                                        checkout</h6>
                                                    <p class="fs-12px lh-sm">Pay faster on Genious.AI and everywhere
                                                        Link is accepted.</p>
                                                </label>
                                            </div>
                                        </div>
                                    </div><!-- .col -->
                                    <div class="col-12">
                                        <div class="form-group">
                                            <button class="btn btn-primary btn-block">Subscribe</button>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-note"> By confirming your subscription, you allow Genious.AI
                                            to charge your card for this payment and future payments in accordance with
                                            their terms. You can always cancel your subscription. </div>
                                    </div>
                                </div><!-- .row -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- wrap @e -->
            </div>
            <!-- content @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="{{ asset('js/bundle.js') }}"></script>
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

</html>
