<footer class="site-footer bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="block-7">
                    <h3 class="footer-heading mb-4">About <strong class="text-info">Greywing</strong></h3>
                    <p>A limited company based in Nairobi, Kenya that provides professionally managed consultancy
                        organization
                        in hospitals and the healthcare sector.</p>
                </div>
            </div>
            <div class="col-lg-3 mx-auto mb-5 mb-lg-0">
                <h3 class="footer-heading mb-0">Services</h3>
                <?php
        wp_nav_menu( array(
            'theme_location'    => 'footer_menu',
            'depth'             => 1,
            'menu_class'        => 'nav flex-column',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>

            </div>
            <div class="col-md-6 col-lg-3">
                <div class="block-5 mb-5">
                    <h3 class="footer-heading mb-4">Contact Info</h3>
                    <ul class="list-unstyled">
                        <li class="address">Viewpark Towers, Nairobi, Kenya</li>
                        <li class="phone"><a href="tel://+254 715 150782">+254 715 150782</a></li>
                        <li class="phone"><a href="tel://+254 721 714498">+254 721 714498</a></li>
                        <li class="email"><a href="#">info@greywinghealthcare.com</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
            <div class="col-md-12">
                <p>

                    Copyright &copy;
                    <script>
                    document.write(new Date().getFullYear());
                    </script> All rights reserved

                </p>
            </div>
        </div>
    </div>
</footer>
</div>
<?php wp_footer();?>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
window.dataLayer = window.dataLayer || [];

function gtag() {
    dataLayer.push(arguments);
}
gtag('js', new Date());

gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js"
    data-cf-beacon='{"si":10,"rayId":"6336b178a8f5d3c7","version":"2021.2.0"}'></script>
</body>