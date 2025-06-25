<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="pragma" content="no-cache" />
    <meta http-equiv="cache-control" content="max-age=604800" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Bootstrap e-commerce html template similar to Alibaba">
    <meta name="keywords" content="Online template, shop, theme, template, html, css, bootstrap 4">
    <title>HRMIS PGSDN - Confidential Data</title>
    <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">

    <!-- jQuery -->
    <script src="js/jquery-2.0.0.min.js" type="text/javascript"></script>

    <!-- Bootstrap4 files-->
    <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <link href="css/bootstrap3661.css?v=2.0" rel="stylesheet" type="text/css" />

    <!-- Font awesome 5 -->
    <link href="fonts/fontawesome/css/all.min3661.css?v=2.0" type="text/css" rel="stylesheet">

    <!-- custom style -->
    <link href="css/ui3661.css?v=2.0" rel="stylesheet" type="text/css" />
    <link href="css/responsive3661.css?v=2.0" rel="stylesheet" type="text/css" />

    <!-- custom javascript -->
    <script src="js/script3661.js?v=2.0" type="text/javascript"></script>

</head>

<body>

    <!-- REMOVE FOLLOWING LINK -->
    <a href="#" class="btn btn-dark rounded-pill"
        style="font-size:13px; z-index:100; position: fixed; bottom:10px; right:10px;">Back to the top</a>
    <!-- REMOVE  //END -->


    <header class="section-header">
        <section class="header-main border-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-2 col-lg-3 col-md-12">
                        <a href="../../index-2.html" class="brand-wrap">
                            <img class="logo" src="images/sdn.png">
                        </a> <!-- brand-wrap.// -->
                    </div>
                    <div class="col-xl-6 col-lg-5 col-md-6">
                        <form action="#" class="search-header">
                            <div class="input-group w-100">
                                <select class="custom-select border-right" name="category_name">
                                    <option value="">Series</option>
                                    <option value="year2022">2022</option>
                                    <option value="year2023">2023</option>
                                    <option value="year2024">2024</option>
                                    <option value="year2025">2025</option>
                                </select>
                                <input type="text" class="form-control" placeholder="Search">

                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit">
                                        <i class="fa fa-search"></i> Search
                                    </button>
                                </div>
                            </div>
                        </form> <!-- search-wrap .end// -->
                    </div> <!-- col.// -->
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="widgets-wrap float-md-right">
                            <div class="widget-header mr-3">
                                <a href="#" class="widget-view">
                                    <div class="icon-area">
                                        <i class="fa fa-comment-dots"></i>
                                        <span class="notify">1</span>
                                    </div>
                                    <small class="text"> Message </small>
                                </a>
                            </div>
                            <div class="widget-header">
                                <a href="{{ route('login') }}" class="widget-view">
                                    <div class="icon-area">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <small class="text"> Login </small>
                                </a>
                            </div>
                        </div> <!-- widgets-wrap.// -->
                    </div> <!-- col.// -->
                </div> <!-- row.// -->
            </div> <!-- container.// -->
        </section> <!-- header-main .// -->
    </header> <!-- section-header.// -->
</body>

</html>
