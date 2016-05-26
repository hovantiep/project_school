<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!--<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">-->
    <link href="{{ asset('template/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template/fonts/glyphicons-halflings-regular.woff') }}">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="{{ asset('template/h-menu/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('template/v-menu/styles.css') }}">
    <link href="{{ asset('template/bxslider/jquery.bxslider.css') }}" rel="stylesheet"/>
    <link href="{{ asset('template/scrollup/css/scrollup.css') }}" rel="stylesheet"/>
    <link href="{{ asset('template/css/style.css') }}" rel="stylesheet"/>

    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->
    <!--<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>-->
    <script src="{{ asset('template/js/jquery.min.js') }}"></script>
    <script src="{{ asset('template/v-menu/script.js') }}"></script>
    <script src="{{ asset('template/h-menu/script.js') }}"></script>
    <script src="{{ asset('template/bxslider/jquery.bxslider.min.js') }}"></script>
    <script src="{{ asset('template/bxslider/plugins/jquery.fitvids.js') }}"></script>

    {{-- CK EDITOR and CK FINDER --}}
    <script src="{{ url('backend/fck_editor/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ url('backend/fck_editor/ckfinder/ckfinder.js') }}"></script>
    <script type="text/javascript">
        var baseURL = "{{ url('/') }}";
    </script>
    <script src="{{ url('backend/fck_editor/func_ckfinder.js') }}"></script>
    {{-- END CK EDITOR and CK FINDER --}}

</head>
<body>
<div class="container">

    <!--Header-->
    <header class="row">
        <div class="col-md-3">
            <a href="#"><img src="{{ asset('template/img/logo.png') }}" class="img-responsive" alt="logo"></a>
        </div>
        <div class="col-md-9">
            Ads
        </div>
    </header>
    <!--End Header-->

    <!--Main menu-->
    <div class="row">
        <div id="menu" style="z-index: 9;">
            <nav id='h-menu' style="z-index: 8;">
                <ul>
                    <li><a href='#'><span>Home</span></a></li>
                    <li class='active has-sub'><a href='#'><span>Products</span></a>
                        <ul>
                            <li class='has-sub'><a href='#'><span>Product 1</span></a>
                                <ul>
                                    <li><a href='#'><span>Sub Product</span></a></li>
                                    <li class='last'><a href='#'><span>Sub Product</span></a></li>
                                </ul>
                            </li>
                            <li class='has-sub'><a href='#'><span>Product 2</span></a>
                                <ul>
                                    <li><a href='#'><span>Sub Product</span></a></li>
                                    <li class='last'><a href='#'><span>Sub Product</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href='#'><span>About</span></a></li>
                    <li class='last'><a href='#'><span>Contact</span></a></li>
                </ul>
            </nav>
        </div>
    </div>
    <!--End Main menu-->

    <!--Content-->
    <div class="row">
        <div class="col-md-6">
            ad
        </div>
        <div class="col-md-6">
            asd
        </div>
        <div class="col-md-12">
            <form action="" method="POST" class="form-horizontal" role="form">
                <div class="form-group">
                    <legend>Form title</legend>
                </div>
                <div class="form-group">
                    <label for="">Cau hoi</label>
                    <textarea class="form-control" name="question" id=""></textarea>
                    <script type="text/javascript">ckeditor('question','config_3')</script>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <label for="">Dap an A</label>
                        <textarea class="form-control" name="0" id=""></textarea>
                        <script type="text/javascript">ckeditor('0','config_4')</script>
                    </div>
                </div>
                <div class="col-md-5 col-md-offset-2">
                    <div class="form-group">
                        <label for="">Dap an B</label>
                        <textarea class="form-control" name="1" id=""></textarea>
                        <script type="text/javascript">ckeditor('1','config_4')</script>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <label for="">Dap an C</label>
                        <textarea class="form-control" name="2" id=""></textarea>
                        <script type="text/javascript">ckeditor('2','config_4')</script>
                    </div>
                </div>
                <div class="col-md-5 col-md-offset-2">
                    <div class="form-group">
                        <label for="">Dap an D</label>
                        <textarea class="form-control" name="3" id=""></textarea>
                        <script type="text/javascript">ckeditor('3','config_4')</script>
                    </div>
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <button type="button" class="btn btn-info">Save and New</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                </div>
                {{ csrf_field() }}
            </form>
        </div>
    </div>
    <!--End Content-->

    <!--Footer-->
    <footer class="row">
        <div class="col-md-4 text-left">
            <ul>
                <li><a href="#">Giới thiệu</a></li>
                <li><a href="#">Liên hệ</a></li>
                <li><a href="#">Bản quyền</a></li>
            </ul>
        </div>

        <div class="col-md-3 text-center">
            <p>2016 &copy Copyright Hovantiep</p>

            <p>Powered By Bootstrap 3</p>
        </div>
        <div class="col-md-4 text-left">
            <p>Email: TheHalfHeart@gmail.com</p>

            <p>Điện thoại: 0979.306.603</p>

            <p>Skype: TheHalfHeart</p>

            <p>Facebook: fb.com/thehalfheart</p>

            <p>Lời nhắn:</p>

            <p class="text-justify">Freetuts.net là một website học lập trình miễn phí được mình xây dựng vào giữa năm
                2014, tính thời thời điểm
                này website đã có khoảng 500 bài viết và hơn 100 video hướng dẫn học lập trình online.
                Nhưng chưa dừng lại ở đó, trong năm mới 2016 này mình sẽ cố gắng ra nhiều bài viết hơn nữa để không phụ
                lòng
                của các bạn. Xin chân thành cám ơn.</p>
        </div>
        <a href="#" class="scrollup"></a>
    </footer>
    <!--End Footer-->
</div>


<!--<script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>-->
<script src="{{ asset('template/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('template/scrollup/js/scrollup.js') }}"></script>
<script src="{{ asset('template/bxslider/configs.js') }}"></script>

</body>
</html>