<footer class="footer-section">
    <div class="container">
        <div class="footer-text">
            <div class="row">
                <div class="col-lg-4">
                    <div class="ft-about">
                        <div class="logo">
                            <a href="{{ route('index') }}">
                                <img src="{{ asset('assets/img/footer-logo.png') }}" alt="">
                            </a>
                        </div>
                        <p>We inspire and reach millions of travelers<br /> across 90 local websites</p>
                        <div class="fa-social">
                            <a href="{{ route('index') }}"><i class="fa fa-facebook"></i></a>
                            <a href="{{ route('index') }}"><i class="fa fa-twitter"></i></a>
                            <a href="{{ route('index') }}"><i class="fa fa-tripadvisor"></i></a>
                            <a href="{{ route('index') }}"><i class="fa fa-instagram"></i></a>
                            <a href="{{ route('index') }}"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="ft-contact">
                        <h6>Contact Us</h6>
                        <ul>
                            <li>+88 01535 227285</li>
                            <li>mdsahadat432@gmail.com</li>
                            <li>856 Cordia Extension Apt. 356, Cox's Bazar</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="ft-newslatter">
                        <h6>New latest</h6>
                        <p>Get the latest updates and offers.</p>
                        <form action="#" class="fn-form">
                            <input type="text" placeholder="Email">
                            <button type="submit"><i class="fa fa-send"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <ul>
                        <li><a href="{{ route('index') }}">Contact</a></li>
                        <li><a href="{{ route('index') }}">Terms of use</a></li>
                        <li><a href="{{ route('index') }}">Privacy</a></li>
                        <li><a href="{{ route('index') }}">Environmental Policy</a></li>
                    </ul>
                </div>
                <div class="col-lg-5">
                    <div class="co-text">
                        <p>
                            Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This template is made with <i
                                class="fa fa-heart" aria-hidden="true"></i> by <a
                                href="{{ asset('https://www.mdsahadat.us') }}" target="_blank">MD Sahadat</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
