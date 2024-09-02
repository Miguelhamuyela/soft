@include('extra._culture.index')









<!-- main-footer -->
<footer class="main-footer">
    <div class="widget-section">
        <div class="pattern-layer">
            <div class="pattern-1" style="background-image: url(site/images/shape/shape-20.png);"></div>
            <div class="pattern-2" style="background-image: url(site/images/shape/shape-21.png);"></div>
        </div>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="logo-widget footer-widget">
                        <figure class="footer-logo"><a href="index.html"><img src="site/images/footer-logo.png"
                                    alt=""></a></figure>
                        <div class="text">
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elitsollicit udin netus quis ornare.
                                Massa pharetra in nec sed nunc.</p>
                            <p>nisl viverra massa imperdiet. Dui mattis quis congue fames.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="links-widget footer-widget ml_50">
                        <div class="widget-title">
                            <h3>Quick Link</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="links-list clearfix">
                                <li><a href="index.html">About Us</a></li>
                                <li><a href="index.html">Services</a></li>
                                <li><a href="index.html">Cause</a></li>
                                <li><a href="index.html">Pricing</a></li>
                                <li><a href="index.html">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="links-widget footer-widget ml_30">
                        <div class="widget-title">
                            <h3>Usefull Links</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="links-list clearfix">
                                <li><a href="index.html">Privacy Policy</a></li>
                                <li><a href="index.html">Terms & Condition</a></li>
                                <li><a href="index.html">Support</a></li>
                                <li><a href="index.html">Disclaimer</a></li>
                                <li><a href="index.html">Faq</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="contact-widget footer-widget">
                        <div class="widget-title">
                            <h3>Contact</h3>
                        </div>
                        <div class="widget-content">
                            <p>Tincidunt neque pretium lectus donec risus.</p>
                            <ul class="info-list clearfix">
                                <li><i class="icon-23"></i>New Hyde Park, NY 11040</li>
                                <li><i class="icon-3"></i><a href="mailto:example@info.com">example@info.com</a></li>
                                <li><i class="icon-2"></i><a href="tel:3336660000">333 666 0000</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom centred">
        <div class="auto-container">
            <div class="copyright">
                <p>Copyright 2023 by <a href="index.html">biztech</a> theme All Right ReservedSGSGDSS.</p>
            </div>
        </div>
    </div>
</footer>
<!-- main-footer end -->










<!--Scroll to top-->
<div class="scroll-to-top">
    <div>
        <div class="scroll-top-inner">
            <div class="scroll-bar">
                <div class="bar-inner"></div>
            </div>
            <div class="scroll-bar-text">Go To Top</div>
        </div>
    </div>
</div>
<!-- Scroll to top end -->

</div>


<!-- jequery plugins -->
<script src="site/js/jquery.js"></script>
<script src="site/js/popper.min.js"></script>
<script src="site/js/bootstrap.min.js"></script>
<script src="site/js/owl.js"></script>
<script src="site/js/wow.js"></script>
<script src="site/js/validation.js"></script>
<script src="site/js/jquery.fancybox.js"></script>
<script src="site/js/appear.js"></script>
<script src="site/js/scrollbar.js"></script>
<script src="site/js/isotope.js"></script>
<script src="site/js/jquery.nice-select.min.js"></script>
<script src="site/js/parallax-scroll.js"></script>

<!-- main-js -->
<script src="site/js/script.js"></script>

@if (session('helpCreate'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Mensagem enviada com sucesso!',
            showConfirmButton: true
        })
    </script>
@elseif (session('create'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Candidatura submetida com sucesso!',
            text: 'Consulte a caixa de entrada do email que informou!',
            showConfirmButton: true
        })
    </script>
@endif


<script src=/site/js/theme.core.min.js></script>
<script src=/site/js/theme.min.js></script>

@yield('JS')

</body>

</html>
