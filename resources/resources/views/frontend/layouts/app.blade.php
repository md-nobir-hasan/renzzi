@php
    $categories = App\Models\Category::all();
@endphp

<!DOCTYPE html>
<html dir="ltr" lang="bn">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>{{ $site_info->title ?? 'E-WEB - MD NOBIR HASAN' }} </title>
    <base />
    <meta name="description" content="ebusiness" />
    <meta name="keywords" content="ebusiness Care, ebusiness Shop , ebusiness Care Product Online , Online Shopping " />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="{{ $site_info->logo }}" rel="icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}">
    @stack('custom-css')
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-WXRDR8R');
    </script>
    <!-- End Google Tag Manager -->
    <!-- Meta Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '472292044430428');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=472292044430428&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->
</head>


<body class="common-home">
    {{-- notification  --}}
    @include('frontend.partials.notification')
    {{-- End notification  --}}

    {{-- menu navbar toggle  --}}
    <div class="menu-nav-bar">
        <div class="wrapper-container">
            <div id="nav-toggler"><span></span></div>
        </div>
    </div>
    {{-- End menue navbar toggle  --}}

    <!-- Topbar Start -->
    @include('frontend.partials.navbar')
    <!-- Topbar End -->


    <!-- Navbar Start -->
    @include('frontend.partials.side-menue')
    <!-- Navbar End -->

    {{-- Shopping card  --}}
    @include('frontend.partials.shopping-card')
    {{-- End shopping card  --}}

    {{-- Shopping card  --}}
    @include('frontend.partials.mini-cart')
    {{-- End shopping card  --}}

    <div class="toastr-div">

    </div>
    @yield('page_conent')



    <footer class="footer">
        <div class="">
            <div class="wrapper-container py-4 mt-5" style="background-color: #f9ece0">
                <div class="row">
                    <div class="col-lg-4 col-md-4 "><h5 class="m-0"><i class="fa-solid fa-car" style="color: #c03f08;"></i> Free Shipping</h5></div>
                    <div class="col-lg-4 col-md-4 mt-3 mt-md-0 mt-lg-0"><h5 class="m-0"><i class="fa-solid fa-phone" style="color: #c03f08;"></i> 24/7 Support</h5></div>
                    <div class="col-lg-4 col-md-4 mt-3 mt-md-0 mt-lg-0"><h5 class="m-0"><i class="fa-solid fa-coins" style="color: #c03f08;"></i> Money Back Guarantee</h5></div>
                </div>
            </div>
            <div class="bg-black">
                <div class="row pt-4 mx-2">
                    <div class="col-lg-3 col-md-6 col-sm-6 ">
                        <h5 class="title " style="color: #f9ffd9;">Contact us</h5>
                        <ul>
                            <li>
                                <i class="fa fa-location" style="color: #c03f08 !important;"></i><a class="text-secondary fs" href="javascript:void(0)"> <small><strong>Location:</strong> {{ $site_info->address }}</small></a></li>
                            <li>
                            <li>
                                <i class="fa fa-phone" style="color: #c03f08 !important;"></i><a class="text-secondary fs" href="tel:{{ $site_contact_info->phone }}"> <small><strong>Call Us:</strong> {{ $site_contact_info->phone }}</small></a></li>
                            <li>
                                <i class="fa fa-envelope" style="color: #c03f08 !important;"></i><a class="text-secondary fs" href="mailto:{{ $site_contact_info->email }}"> <small><strong>Email:</strong> {{ $site_contact_info->email }}</small></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 mt-3 mt-sm-0 mt-md-0 mt-lg-0">
                        <h5 class="title " style="color: #f9ffd9;">Company information</h5>
                        <ul class="">
                            <li><a class="text-secondary" href="javascript:void(0)"><small>Refund and Return Policy</small></a></li>
                            <li><a class="text-secondary" href="javascript:void(0)"><small>Terms and Conditions</small></a></li>
                            <li><a class="text-secondary" href="javascript:void(0)"><small>Cashback Terms &amp; Conditions</small></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 mt-3 mt-lg-0">
                        <h5 class="title " style="color: #f9ffd9;">Customer Care</h5>
                        <ul class="">
                            <li><a class="text-secondary" href="javascript:void(0)"><small>Contact Us</small></a></li>
                            <li><a class="text-secondary" href="javascript:void(0)"><small>About Us</small></a></li>
                            <li><a class="text-secondary" href="javascript:void(0)"><small>Shipping &amp; Delivery</small></a></li>
                            <li><a class="text-secondary" href="javascript:void(0)"><small>Privacy Policy</small></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 mt-3 mt-lg-0">
                        <h5 class="title text-light" style="color: #f9ffd9 !important;">Quick links</h5>
                        <ul class="">
                            <li><a class="text-secondary" href="javascript:void(0)"><small>Refund and Return Policy</small></a></li>
                            <li><a class="text-secondary" href="javascript:void(0)"><small>Terms and Conditions</small></a></li>
                            <li><a class="text-secondary" href="javascript:void(0)"><small>Cashback Terms &amp; Conditions</small></a>
                            <li><a class="text-secondary" href="javascript:void(0)"><small>Cashback Terms &amp; Conditions</small></a>
                            </li>
                        </ul>
                    </div>
                    <div class="copy-right pt-3">
                        <p><a href="{{ url('/') }}"><strong><small style="color: #c03f08 !important;">{{ $site_info->name }}</small></strong></a> | <small>All Rights Reserved</small></a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="overlay"></div>
    <div class="footer-bottom-bar">
        <div class="bottom-bar d-flex flex-wrap justify-content-around">
            <a href="#" class="bottom-item offer">
                <div class="bottom-item-icon">
                    <i class="fa fa-bookmark text-light" aria-hidden="true"></i>
                </div>
                <span class="text text-light">Offers</span>
            </a>
            {{-- href="https://m.me/babycare.bangladesh" --}}
            <a href="javascript::void(0)" class="bottom-item barnd">
                <div class="bottom-item-icon">
                    <i class="fa-brands fa-facebook-messenger text-light"></i>
                </div>
                <span class="text text-light">Messenger</span>
            </a>
            <div class="bottom-item cart mc-toggler" id="cart_mobile">
                <a href="{{ route('checkout') }}">
                    <div class="bottom-item-icon">
                        <i class="fa fa-shopping-cart shopping-cart text-light"></i>
                    </div>
                    <span class="text text-light">Cart</span>
                    <span class="value count-mobile bg-warning">0</span>
                </a>
            </div>
        </div>
    </div>
    <div id="fb-root"></div>


    <div class="fb-customerchat" attribution=setup_tool page_id="377420772353763" theme_color="#005662">
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    {{--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>--}}
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    {{-- jquery  --}}
    <script>
        // Language conversation
        var bn2en = n => n.replace(/[০-৯]/g, d => "০১২৩৪৫৬৭৮৯".indexOf(d));
        var en2bn = n => n.replace(/\d/g, d => "০১২৩৪৫৬৭৮৯" [d]);
        //  Toaster object
        var toastr = {
            count: 0,
            toaster_append(msg, class_name) {
                $('.toastr-div').append(`<div class="toastr ${class_name} mt-2">
                                                    <span class="toaster-msg">${msg}</span>
                                                </div>`);
            },
            success(msg) {
                let class_name = 'toastr' + this.count;
                this.toaster_append(msg, class_name);

                $('.' + class_name).fadeIn(1000);
                setTimeout(() => {
                    $('.' + class_name).fadeOut(1000);
                }, 2500);
                this.count++;
            },
            error(msg) {
                let class_name = 'toastr' + this.count;
                this.toaster_append(msg, class_name);

                $('.' + class_name).css({
                    backgroundColor: 'red'
                });
                $('.' + class_name).fadeIn(1000);
                setTimeout(() => {
                    $('.' + class_name).fadeOut(1000);
                }, 2500);
                this.count++;
            }
        }
        // End Toaster object
    </script>
    
    <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <script>
        var width = screen.width;
        if(width<767){
            $('#cart i').removeClass('shopping-cart');
        }
         if(width>767){
            $('#cart_mobile i').removeClass('shopping-cart');
        }
        
    </script>
    {{-- End jquery  --}}
    <script>
        //load  add to card product
        let count_mobile = document.querySelector('.count-mobile');
        let count = document.querySelectorAll('.count');
        let counts = document.querySelector('.count');
        if (localStorage.getItem('product_storage')) {
            let product_number = Object.keys(JSON.parse(localStorage.getItem('product_storage'))).length;
            count_mobile.innerText = product_number;
            counts.innerText = product_number + ' item(s)';
        }
        window.addEventListener('load', function() {
            // side navbar tigger
            let side_nav_tigger = document.querySelector('.menu-nav-bar');
            let check = false;
            side_nav_tigger.addEventListener('click', function() {
                let side_nav = document.getElementById('side_nav');
                if (check) {
                    side_nav.style.left = '-360px';
                    check = false;
                } else {
                    side_nav.style.left = '0';
                    check = true;
                }
            });

            //add to card
            let add_to_card_btn = document.querySelectorAll('.add-to-cart');

            add_to_card_btn.forEach(item => {
                item.addEventListener('click', function(event) {
                    event.preventDefault();
                    let product_id = this.getAttribute('id');
                    let title = document.querySelector(`.title${product_id}`).textContent;
                    let img = document.querySelector(`.img${product_id}`).getAttribute('src');
                    let price = document.querySelector(`.price${product_id}`).textContent;
                    let dis_price = document.querySelector(`.dis-price${product_id}`).textContent;

                    if (localStorage.getItem('product_storage')) {
                        let product_storage = JSON.parse(localStorage.getItem('product_storage'));
                        if (product_storage[product_id]) {
                            toastr.error('This product already added to your card')
                        } else {
                            product_storage[product_id] = {
                                'title': title,
                                'img': img,
                                'price': price,
                                'dis_price': dis_price
                            };
                            localStorage.setItem('product_storage', JSON.stringify(
                                product_storage));
                            count.forEach(item => {
                                item.innerText = Object.keys(product_storage).length +
                                    ' item(s)';
                            })
                            count_mobile.innerText = Object.keys(product_storage).length;
                            // toastr.success('This product added to your card')
                            addToCartAnimation(item);
                        }
                    } else {
                        let product_storage = {};
                        product_storage[product_id] = {
                            'title': title,
                            'img': img,
                            'price': price,
                            'dis_price': dis_price
                        };
                        localStorage.setItem('product_storage', JSON.stringify(product_storage));
                        count.forEach(item => {
                            item.innerText = Object.keys(product_storage).length +
                                ' item(s)';
                        });
                        count_mobile.innerText = Object.keys(product_storage).length;
                        // toastr.success('This product added to your card')
                        addToCartAnimation(item);
                    }
                });
            });

        });
        
        // add to cart animation
        //(use only two class '.add-to-cart', '.shopping-cart' and find image )
        function addToCartAnimation(This){
            // $(This).on('click', function () {
                var cart = $('.shopping-cart');
                var imgtodrag = $(This).parent().prev().find("img");
                if (imgtodrag) {
                    var imgclone = imgtodrag.clone()
                        .offset({
                        top: imgtodrag.offset().top,
                        left: imgtodrag.offset().left
                    })
                        .css({
                        'opacity': '0.5',
                            'position': 'absolute',
                            'height': '150px',
                            'width': '150px',
                            'z-index': '100'
                    })
                        .appendTo($('body'))
                        .animate({
                        'top': cart.offset().top + 10,
                            'left': cart.offset().left+0,
                            'width': 75,
                            'height': 75
                    }, 1000);
                    
                    setTimeout(function () {
                        cart.effect("shake", {
                            times: 2
                        }, 200);
                    }, 1500);
        
                    imgclone.animate({
                        'width': 0,
                        'height': 0
                    }, function () {
                        $(this).detach()
                    });
                }
            // });
        }
         //End add to cart animation
    </script>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WXRDR8R" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    {{-- //gtag() configuration --}}
    <script async src="https://www.googletagmanager.com/gtag/js?id=MEASUREMENT_ID"></script>


    @stack('custom-js')
</body>
<!-- Mirrored from www.babycare.com.bd/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Dec 2022 18:12:30 GMT -->

</html>
