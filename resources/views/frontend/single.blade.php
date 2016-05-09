@extends('frontend.layouts.master')
@section('slide')
@endsection
@section('content')
    <div class="banner-middle">
        <div class="strip"></div>

        <!-- banner-bottom-grids -->
        <div class="banner-bottom-grids">
            <!-- banner-bottom-left -->
            <div class="col-md-8 banner-bottom-left">
                <div class="banner-bottom-left-grids">
                    <div class="single-left-grid">
                        <img src="{{ asset('frontend/images/pic2.jpg') }}" alt=""/>
                        <h4>Aliquam dapibus tincidunt metus. Praesent justo dolor, lobortis quis, lobortis dignissim,
                            pulvinar ac, lorem.</h4>

                        <p class="text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum
                            molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi.
                            Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla
                            dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem.
                            Maecenas tristique orci ac sem. Duis ultricies pharetra magna. Donec accumsan malesuada
                            orci. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris
                            fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum
                            vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac
                            turpis. Integer rutrum ante eu lacus.</p>
                        <h4>Vestibulum urna nulla, ultrices ut suscipit vel, suscipit vitae nunc. Quisque nec velit et
                            nibh ultrices molestie.</h4>

                        <p class="text">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus
                            mus. Suspendisse sem neque.Cum sociis natoque penatibus et magnis dis parturient montes,
                            nascetur ridiculus mus. Suspendisse sem neque</p>

                        <div class="single-bottom">
                            <ul>
                                <li><a href="#">Designer inspiration</a></li>
                                <li>August 4 2010</li>
                                <li><a href="#">Admin</a></li>
                                <li><a href="#">5 Comments</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- post -->
                <div class="post">
                    <h3>Latest Posts</h3>

                    <div class="post-grids">
                        <div class="col-md-4 post-left">
                            <a href="single.html"><img src="{{ asset('frontend/images/p1.jpg') }}" alt=""/></a>
                        </div>
                        <div class="col-md-8 post-right">
                            <h4><a href="single.html">Silicon Valley Shows Signs of Dot-Com Frenzy</a></h4>

                            <p class="comments">August 4 2010, <a href="#">8 Comments</a></p>

                            <p class="text">Lorem ipsum ex vix illud nonummy, novum tation et his. At vix scripta
                                patrioque scribentur...</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="post-grids">
                        <div class="col-md-4 post-left">
                            <a href="single.html"><img src="{{ asset('frontend/images/p2.jpg') }}" alt=""/></a>
                        </div>
                        <div class="col-md-8 post-right">
                            <h4><a href="single.html">Silicon Valley Shows Signs of Dot-Com Frenzy</a></h4>

                            <p class="comments">August 4 2010, <a href="#">8 Comments</a></p>

                            <p class="text">Lorem ipsum ex vix illud nonummy, novum tation et his. At vix scripta
                                patrioque scribentur...</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="post-grids">
                        <div class="col-md-4 post-left">
                            <a href="single.html"><img src="{{ asset('frontend/images/p3.jpg') }}" alt=""/></a>
                        </div>
                        <div class="col-md-8 post-right">
                            <h4><a href="#">Silicon Valley Shows Signs of Dot-Com Frenzy</a></h4>

                            <p class="comments">August 4 2010, <a href="#">8 Comments</a></p>

                            <p class="text">Lorem ipsum ex vix illud nonummy, novum tation et his. At vix scripta
                                patrioque scribentur...</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <!-- //post -->
                <div class="respond">
                    <h4>Leave a comment</h4>

                    <form>
                        <input type="text" placeholder="Name" required="">
                        <input class="name" type="text" placeholder="Email" required="">
                        <textarea placeholder="Message" required=""></textarea>
                        <input type="submit" value="SEND">
                    </form>
                </div>
            </div>
            <!-- //banner-bottom-left -->
            <!-- banner-bottom-right -->
            <div class="col-md-4 banner-bottom-right">
                <div class="banner-bottom-left-grids">
                    <div class="search">
                        <form>
                            <input type="text" value="to search, type and hit enter" onfocus="this.value = '';"
                                   onblur="if (this.value == '') {this.value = 'to search, type and hit enter';}"
                                   required="">
                        </form>
                    </div>
                    <div class="advertisement">
                        <h3>Advertisement</h3>

                        <p>300 x 250</p>
                    </div>
                    <div class="sponsors">
                        <h3>Sponsors</h3>

                        <div class="sponsors-grids">
                            <div class="sponsors-grid-left">
                                <div class="sponsors-grid">
                                    <p>125 x 125</p>
                                </div>
                            </div>
                            <div class="sponsors-grid-left">
                                <div class="sponsors-grid">
                                    <p>125 x 125</p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="video">
                        <h3>Featured Video</h3>
                        <iframe src="https://player.vimeo.com/video/4717303" width="500" height="281" frameborder="0"
                                webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                    <div class="twitter">
                        <h3>Twitter</h3>

                        <div class="twitter-info">
                            <p>Genesis Child Themes at Theme Garden – December 5th --> <a href="#">http://bit.ly/ibXdjY
                                    #genesiswp <span>#themegarden</span></a>
                                <span class="time"><a href="#">31 minutes ago</a></span></p>
                        </div>
                        <div class="twitter-info">
                            <p>PhotoPro Genesis Child Theme by Creativity Included Launches at <a href="#">http://bit.ly/9fGbq0
                                    - http://eepurl.com/</a>
                                <span class="time"><a href="#">31 minutes ago</a></span></p>
                        </div>
                        <div class="twitter-info">
                            <p>Latest: Genesis Child Themes at Theme Garden – December 5th - Many of you are aware that
                                Jason Schuller of Press75 r... <a href="#">http://ht.ly/1akn8s</a>
                                <span class="time"><a href="#">31 minutes ago</a></span></p>
                        </div>
                        <div class="twitter-info">
                            <p>The Rockstar Guide to Getting More Traffic, Fame, and Success --> <a href="#">http://bit.ly/hCzF69</a>
                                <span class="time"><a href="#">31 minutes ago</a></span></p>
                        </div>
                    </div>
                    <div class="recent-posts">
                        <h3>Recent Posts</h3>
                        <ul>
                            <li><a href="#">Use Prose to Put the Focus on Your Words</a></li>
                            <li><a href="#">Images Add Life to Your Site</a></li>
                            <li><a href="#">What’s a Framework and Why Do I Need One?</a></li>
                            <li><a href="#">7 Tips for Capturing Short Attention Spans</a></li>
                            <li><a href="#">Making Your Blog a Great Place to Hang Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- banner-bottom-right -->
            <div class="clearfix"></div>
            <div class="up-arrow">
                <a class="scroll" href="#home">Back to Top</a>
            </div>
        </div>
        <!-- //banner-bottom-grids -->
    </div>
@endsection