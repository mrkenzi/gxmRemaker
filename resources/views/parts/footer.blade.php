<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="copy">
                    <h6>Games x <span class="color">Mod</span></h6>
                    <p>Copyright &copy; <a href="#">GamexMod Site</a>
                        - <a href="http://www.dmca.com/Protection/Status.aspx?ID=ee1394ca-64c9-45df-9f93-cf61339f0ace"
                             title="DMCA.com Protection Status" class="dmca-badge">
                            <img src="//images.dmca.com/Badges/dmca_protected_sml_120l.png?ID=ee1394ca-64c9-45df-9f93-cf61339f0ace"
                                 alt="DMCA.com Protection Status"/>
                        </a>
                    </p>
                </div>

            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</footer>
<script
        src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
<script src="{{asset('js/jquery.themepunch.plugins.min.js')}}"></script>
<script src="{{asset('js/jquery.themepunch.revolution.min.js')}}"></script>

<script src="{{asset('js/jquery.prettyPhoto.js')}}"></script>
<!-- Parallax slider -->
<script src="{{asset('js/jquery.cslider.js')}}"></script>
<script src="{{asset('js/modernizr.custom.28468.js')}}"></script>
<!-- Filter for support page
<script src="/js/filter.js"></script>-->
<!-- Cycle slider -->
<script src="{{asset('js/cycle.js')}}"></script>
<!-- Flex slider -->
<script src="{{asset('js/jquery.flexslider-min.js')}}"></script>
<!-- Easing -->
<script src="{{asset('js/easing.js')}}"></script>
<!-- Respond JS for IE8 -->
<script src="{{asset('js/respond.min.js')}}"></script>
<!-- HTML5 Support for IE -->
<script src="{{asset('js/html5shiv.js')}}"></script>
<script src="{{asset('js/site.js')}}"></script>
<script src="{{asset('js/masonry.min.js')}}"></script>
<script>
    // Revolution Slider
    var revapi;
    $(document).ready(function () {
        revapi = jQuery('.tp-banner').revolution(
            {
                delay: 6000,
                startwidth: 1200,
                startheight: 500,
                hideThumbs: 200,
                shadow: 0,
                navigationType: "none",
                hideThumbsOnMobile: "on",
                hideArrowsOnMobile: "on",
                hideThumbsUnderResoluition: 0,
                touchenabled: "on",
                fullWidth: "on"
            });
        setTimeout(function () {
            var newGame = $('#new-games');
            newGame.masonry({
                itemSelector: '.new-game'
            });
        },2000);
        $(function(){
            // Enables popover
            $("[data-toggle=popover]").popover();
        });
    });
</script>