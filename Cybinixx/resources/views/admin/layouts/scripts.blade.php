<script src="{{ asset('admin') }}/assets/js/jquery.min.js"></script>
<script src="{{ asset('admin') }}/assets/js/popper.min.js"></script>
<script src="{{ asset('admin') }}/assets/js/bootstrap.min.js"></script>
<script src="{{ asset('admin') }}/assets/js/modernizr.min.js"></script>
<script src="{{ asset('admin') }}/assets/js/detect.js"></script>
<script src="{{ asset('admin') }}/assets/js/fastclick.js"></script>
<script src="{{ asset('admin') }}/assets/js/jquery.slimscroll.js"></script>
<script src="{{ asset('admin') }}/assets/js/jquery.blockUI.js"></script>
<script src="{{ asset('admin') }}/assets/js/waves.js"></script>
<script src="{{ asset('admin') }}/assets/js/jquery.nicescroll.js"></script>
<script src="{{ asset('admin') }}/assets/js/jquery.scrollTo.min.js"></script>
<script src="{{ asset('admin') }}/assets/plugins/skycons/skycons.min.js"></script>
<script src="{{ asset('admin') }}/assets/plugins/raphael/raphael-min.js"></script>
<script src="{{ asset('admin') }}/assets/plugins/morris/morris.min.js"></script>
<script src="{{ asset('admin') }}/assets/pages/dashborad.js"></script>
<!-- App js -->
<script src="{{ asset('admin') }}/assets/js/app.js"></script>
<script>
    /* BEGIN SVG WEATHER ICON */
    if (typeof Skycons !== 'undefined') {
        var icons = new Skycons({
                "color": "#fff"
            }, {
                "resizeClear": true
            }),
            list = [
                "clear-day", "clear-night", "partly-cloudy-day",
                "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
                "fog"
            ],
            i;

        for (i = list.length; i--;)
            icons.set(list[i], list[i]);
        icons.play();
    };

    // scroll

    $(document).ready(function() {

        $("#boxscroll").niceScroll({
            cursorborder: "",
            cursorcolor: "#cecece",
            boxzoom: true
        });
        $("#boxscroll2").niceScroll({
            cursorborder: "",
            cursorcolor: "#cecece",
            boxzoom: true
        });

    });
</script>
