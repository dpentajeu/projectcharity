<section id="about" class="container content-section text-center">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <h2>We remember MH17</h2>
            <p>A Malaysia Airlines flight from Amsterdam to Kuala Lumpur, Malaysia, crashed Thursday 17 July 2014 in eastern Ukraine.</p>
            <p>We face this tragedy together, regardless of differences in race or religion.</p>                
        </div>
    </div>
</section>

<section id="tribute" class="content-section text-center">
    <div class="download-section">
        <div class="container">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Wall of Tribute</h2>
                <h6>Your comment goes to the heart of the next of kin of the victims.</h6>
                <div class="fb-comments" data-href="http://masmh17.com" data-width="600" data-numposts="15" data-colorscheme="dark"></div>
            </div>
        </div>
    </div>
</section>

<section id="news" class="container content-section text-center">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <h2>Follow breaking news</h2>                
            <ul class="list-inline banner-social-buttons">
                <li>
                    <a href="javascript:void(0);" data-target="#twitter" class="mh17-tab btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                </li>
                <li>
                    <a href="javascript:void(0);" data-target="#instagram" class="mh17-tab btn btn-default btn-lg"><i class="fa fa-instagram fa-fw"></i> <span class="network-name">Instagram</span></a>
                </li>
                <!-- <li>
                    <a href="javascript:void(0);" data-target="#reuters" class="mh17-tab btn btn-default btn-lg"><i class="fa fa-rss fa-fw"></i> <span class="network-name">Reuters</span></a>
                </li> -->
            </ul>
        </div>
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 mh17-tab-content">
            <div class="mh17-tab-pane" id="twitter" style="display: none;">
                <a class="twitter-timeline" href="https://twitter.com/search?q=%23mh17%2C+%23prayformh17" data-widget-id="490787683350749184">Tweets about "#mh17, #prayformh17"</a>
                <script type="text/javascript">!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
            </div>
            <div class="mh17-tab-pane" id="instagram" style="display: none;">
                <iframe src="http://www.intagme.com/in/?h=bWgxN3xzbHw1MDB8MnwzfHx5ZXN8NXx1bmRlZmluZWR8eWVz" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:515px; height: 515px" ></iframe>
            </div>
            <div class="mh17-tab-pane" id="reuters" style="display: none;">
                <script src="http://nmp.newsgator.com/NGBuzz/buzz.ashx?buzzId=81503&apiToken=AAA11919E8A84EB8986088D0B39F3E0B&trkP=&trkM=94EB6FAB-58C5-EE96-F3DB-C2444C40C1BA" type="text/javascript"></script>
            </div>
            <h6>© Website development credits to Pentajeu Sdn Bhd</h6>
        </div>
    </div>
</section>

<script type="text/javascript">
    (function ($) {
        var tag = '#twitter';
        if (tag) {
            $(tag).css('display','block');
            $('a[data-target="'+tag+'"]').addClass('active');
        }
        $('#news ul.list-inline > li').click(function (e) {
            var curr = tag, $a = $(this).find('a');
            $(curr).css('display','none');
            $('#news ul.list-inline > li').each(function (i,e) {
                $(e).find('a').removeClass('active');
            });
            tag = $a.data().target;
            $a.addClass('active');
            $(tag).css('display','block');
        });
    })(jQuery);
</script>