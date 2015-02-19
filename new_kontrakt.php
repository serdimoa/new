<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="description" content="Реестр детей">
  <meta name="author" content="SerDimoa">
  <link rel="shortcut icon" href="#" type="image/png">

  <title>Профиль</title>
    <script src="js/pace.min.js"></script>
    <link href="css/pace-theme-minimal.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="js/webix/webix.css" type="text/css">
    <script src="js/webix/webix.js" type="text/javascript"></script>

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
    <script>
        function getQueryVariable(variable)
        {
            var query = window.location.search.substring(1);
            var vars = query.split("&");
            for (var i=0;i<vars.length;i++) {
                var pair = vars[i].split("=");
                if(pair[0] == variable){return pair[1];}
            }
            return(false);
        }
    </script>

</head>

<body class="sticky-header">

<section>
    <!-- left side start-->
    <div class="left-side sticky-left-side">

        <!--logo and iconic logo start-->
        <div class="logo">
            <a href="good.html"><img src="images/logo.png" alt=""></a>
        </div>

        <div class="logo-icon text-center">
            <a href="good.html"><img src="images/logo_icon.png" alt=""></a>
        </div>
        <!--logo and iconic logo end-->


        <div class="left-side-inner">

            <!-- visible to small devices only -->
            <div class="visible-xs hidden-sm hidden-md hidden-lg">
                <div class="media logged-user">
                    <div class="media-body">
                        <h4 id="help"></h4>
                        <span>"Hello There..."</span>
                    </div>
                </div>

                <h5 class="left-nav-title">Информация об аккаунте</h5>
                <ul class="nav nav-pills nav-stacked custom-nav">
                    <li><a href="#"><i class="fa fa-cog"></i> <span>Заблокировать</span></a></li>
                    <li><a href="index.html"><i class="fa fa-sign-out"></i> <span>Выход</span></a></li>
                </ul>
            </div>

            <!--sidebar nav start-->
            <ul class="nav nav-pills nav-stacked custom-nav">
                <li class="menu-list"><a href=""><i class="fa fa-home"></i> <span>Реестр детей</span></a>
                    <ul class="sub-menu-list">
                        <li ><a href="good.html"><i class="fa fa-search"></i> <span>Обзор</span></a></li>
                        <li><a href="children_new.php"><i class="fa fa-plus"></i> <span>Добавить ребенка</span></a></li>
                    </ul>
                </li>
                <li><a href="request.html"><i class="fa fa-envelope"></i> <span>Реестр заявок</span></a></li>
                <li class="menu-list nav-active"><a href=""><i class="fa fa-home"></i> <span>Контракты</span></a>
                    <ul class="sub-menu-list">
                        <li > <a href="kontrakt.html"><i class="fa fa-book"></i> <span>Обзор</span></a></li>
                        <li class="active"><a href="new_kontrakt.php"><i class="fa fa-plus"></i> <span>Добавить Контракт</span></a></li>
                    </ul>
                </li>
                <li><a id="Myunidf" href="index.html"><i class="fa fa-sign-out"></i> <span>Выход</span></a></li>

            </ul>
            <!--sidebar nav end-->

        </div>
    </div>
    <!-- left side end-->

    <!-- main content start-->
    <div class="main-content" >

        <!-- header section start-->
        <div class="header-section">

        <!--toggle button start-->
        <a class="toggle-btn"><i class="fa fa-bars"></i></a>
        <!--toggle button end-->

        <!--notification menu start -->
            <div class="menu-right">
                <ul class="notification-menu">
                    <li>
                        <a href="#" class="btn btn-default dropdown-toggle info-number" data-toggle="dropdown">
                            <i class="fa fa-bell-o"></i>
                            <span class="badge">4</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-head pull-right">
                            <h5 class="title">Новые заявки</h5>
                            <ul class="dropdown-list normal-list">
                                <li class="new">
                                    <a href="">
                                        <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                        <span class="name">Server #1 overloaded.  </span>
                                        <em class="small">34 mins</em>
                                    </a>
                                </li>
                                <li class="new">
                                    <a href="">
                                        <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                        <span class="name">Server #3 overloaded.  </span>
                                        <em class="small">1 hrs</em>
                                    </a>
                                </li>
                                <li class="new">
                                    <a href="">
                                        <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                        <span class="name">Server #5 overloaded.  </span>
                                        <em class="small">4 hrs</em>
                                    </a>
                                </li>
                                <li class="new">
                                    <a href="">
                                        <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                        <span class="name">Server #31 overloaded.  </span>
                                        <em class="small">4 hrs</em>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" id="help1" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            John Doe
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                            <li><a href="#"><i class="fa fa-cog"></i>Заблокировать</a></li>
                            <li><a href="#"><i class="fa fa-sign-out"></i> Выйти</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
        <!--notification menu end -->

        </div>
        <!-- header section end-->

        <!-- page heading start-->
        <div class="page-heading">
            <h3>Добавление нового контракта</h3>
            <ul class="breadcrumb">
                <li><a href="good.html"> Реестр детей</a></li>
                <li class="active">Добавление нового контракта</li>
            </ul>

        </div>
        <!-- page heading end-->

        <!--body wrapper start-->
        <div class="wrapper">

            <div class="row">
                <form role="form">

                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">

                            <div class="panel">
                                <header class="panel-heading">Информация о контракте </header>
                                <div class="panel-body">
                                    <div class="profile-desk">

                                            <div class="form-group">
                                                <label for="nameinp">Оздоровительное учереждение</label>
                                                <input type="text" class="form-control" id="nameinp" required="">
                                            </div>
                                            <div class="form-group">
                                                <label for="fioinp">Количество путевок</label>
                                                <input type="number" class="form-control num" id="fioinp" required="">
                                            </div>
                                            <div class="form-group">
                                                <label for="lastinp">Цена контракта</label>
                                                <input type="number" class="form-control num" id="lastinp" required="">
                                            </div>
                                        <div class="form-group">
                                            <label for="svid">Дней прибытия</label>
                                            <input type="number" class="form-control num" id="svid" required="">
                                        </div>
                                            <div class="form-group">
                                                <div id="celdr"></div>
                                            </div>
                                        </div>
                                </div>
                            </div>

                    </div>
                </div>

                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">




                        </div>
                    </div>
                </div><div class="clearfix"></div>
                    <div class="col-md-6">
                    <div class="panel">
                        <div class="panel-body">
                            <div class="profile-desk">
                                <div class="btn-group btn-group-justified">
                                    <a class="btn btn-success btn-lg" onclick="sendsave()" >Добавить</a>
                                    <a class="btn btn-danger btn-lg"  href="#">Отменить</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </form>

            </div>

        </div>
        <!--body wrapper end-->

        <!--footer section start-->
        <footer class="">
            2015 &copy; AdminEx by АйтишА.РФ
        </footer>
        <!--footer section end-->


    </div>
    <!-- main content end-->
</section>

<!-- Placed js at the end of the document so the pages load faster -->
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/jquery-ui-1.9.2.custom.min.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/modernizr.min.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/jquery.cookies.js"></script>




<!--google map-->
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&AMP;sensor=false"></script>


<!--common scripts for all pages-->
<script src="js/scripts.js"></script>

<script>
    webix.ready(function(){
        webix.ui({
            container:'celdr',
        view:'datepicker',name:'date',id:'date',labelWidth:115,label:"Дата контракта",stringResult:true

        });

        });




</script>
<script>
    function gid(eid){
        return document.getElementById(eid);
    }


    function sendsave(){
        webix.ajax("new_kontrakt_insert.php?nameinp="      +   gid('nameinp').value +
                                           "&fioinp="      +   gid('fioinp').value +
                                           "&lastinp="     +   gid('lastinp').value +
                                           "&svid="        +   gid('svid').value +
                                           "&date="        +   $$('date').getValue(),
            {success:function(text){
                if(text==0){
                    webix.alert({text: "Данные обновлены", callback:function(){
                        document.location.href = "good.html";

                    }});
                }else{
                    webix.alert({type:"alert-warning",text:"Повторите позже",callback:function(){
                        document.location.href = "good.html";

                    }});
                }
            }},

            {error:function(text, data, XmlHttpRequest){
                webix.alert({text:"Повторите позже"});
            }}
        );
    }
    gid('fioinp').onkeypress = function (e) {
        return !(/[А-Яа-яA-Za-z ]/.test(String.fromCharCode(e.charCode)));
    };
    gid('lastinp').onkeypress = function (e) {
        return !(/[А-Яа-яA-Za-z ]/.test(String.fromCharCode(e.charCode)));
    };
    gid('svid').onkeypress = function (e) {
        return !(/[А-Яа-яA-Za-z ]/.test(String.fromCharCode(e.charCode)));
    };
    var profile = $.cookie('logins');
    var idse =document.getElementById("help");
    var idse1 =document.getElementById("help1");
    idse.innerHTML = "<a href='#'>"+profile+"</a>";
    idse1.innerHTML = profile;
</script>

</body>
</html>
