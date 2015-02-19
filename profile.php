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

                <h5 class="left-nav-title">Информация об акаунте</h5>
                <ul class="nav nav-pills nav-stacked custom-nav">
                    <li><a href="#"><i class="fa fa-cog"></i> <span>Заблокировать</span></a></li>
                    <li><a href="#"><i class="fa fa-sign-out"></i> <span>Выход</span></a></li>
                </ul>
            </div>

            <!--sidebar nav start-->
            <ul class="nav nav-pills nav-stacked custom-nav">
                <li class="menu-list nav-active"><a href=""><i class="fa fa-home"></i> <span>Реестр детей</span></a>
                    <ul class="sub-menu-list">
                        <li class="active"><a href="good.html"><i class="fa fa-search"></i> <span>Обзор</span></a></li>
                        <li><a href="children_new.php"><i class="fa fa-plus"></i> <span>Добавить ребенка</span></a></li>
                    </ul>
                </li>
                <li><a href="request.html"><i class="fa fa-envelope"></i> <span>Реестр заявок</span></a></li>
                <li><a href="index.html"><i class="fa fa-sign-out"></i> <span>Выход</span></a></li>

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
            <h3 id="headernames">Фамилия Имя Отчество</h3>
            <ul class="breadcrumb">
                <li><a href="good.html"> Реестр детей</a></li>
                <li class="active">Информация о ребенке</li>
            </ul>

        </div>
        <!-- page heading end-->

        <!--body wrapper start-->
        <div class="wrapper">

            <div class="row">
                <form>

                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12">

                            <div class="panel">
                                <header class="panel-heading">Информация о ребенке </header>
                                <div class="panel-body">
                                    <div class="profile-desk">

                                            <div class="form-group">
                                                <label for="nameinp">Имя</label>
                                                <input type="text" class="form-control" id="nameinp" required="">
                                            </div>
                                            <div class="form-group">
                                                <label for="fioinp">Фамилия</label>
                                                <input type="text" class="form-control" id="fioinp" required="">
                                            </div>
                                            <div class="form-group">
                                                <label for="lastinp">Отчество</label>
                                                <input type="text" class="form-control" id="lastinp" required="">
                                            </div>
                                        <div class="form-group">
                                            <label for="svid">Свидетельство о рождении / паспорт</label>
                                            <input type="text" class="form-control" id="svid" required="">
                                        </div>
                                            <div class="form-group">
                                                <div id="celdr"></div>
                                            </div>
                                        <div class="form-group">
                                            <label for="adrregs">Адрес регистрации</label>
                                            <input type="text" class="form-control" id="adrregs" required="">
                                        </div>
                                        <div class="form-group">
                                            <label for="adrfact">Адрес фактический</label>
                                            <input type="text" class="form-control" id="adrfact" required="">
                                        </div>
                                        <div class="form-group">
                                            <label for="scholl">Учебное заведение</label>
                                            <div id="scholl"></div>
                                        </div>
                                        <div class="form-group">
                                            <label for="classname">Класс</label>
                                            <input type="text" class="form-control" id="classname" required="">
                                        </div>



                                    </div>
                                </div>
                            </div>

                    </div>
                </div>

                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel">
                                <header class="panel-heading">Льготная категория </header>
                                <div class="panel-body">
                                    <div class="profile-desk">

                                        <div id="lgotkat"></div>
                                    </div>
                                    </div>
                                </div>

                            <div class="panel">
                                <header class="panel-heading">Информация о законном представителе </header>
                                <div class="panel-body">
                                    <div class="profile-desk">
                                        <label for="fioroditelya">Отношение и ФИО </label>
                                        <input type="text" class="form-control" id="fioroditelya">
                                    </div>
                                    <div class="profile-desk">
                                        <label for="workstation">Место работы </label>
                                        <input type="text" class="form-control" id="workstation">
                                    </div>

                                </div>
                            </div>
                            <div class="panel">
                                <header class="panel-heading">Контактные телефоны</header>
                                <div class="panel-body">
                                    <div class="profile-desk">
                                        <div class="form-group">
                                            <label for="rabotainp">Рабочий</label>
                                            <input type="text" class="form-control" id="rabotainp" >
                                        </div>
                                        <div class="form-group">
                                            <label for="homeinp">Домашний</label>
                                            <input type="text" class="form-control" id="homeinp" >
                                        </div>
                                        <div class="form-group">
                                            <label for="mobilinp">Сотовый</label>
                                            <input type="text" class="form-control" id="mobilinp" >
                                        </div>
                                        <div class="form-group">
                                            <label for="emailinp">Адрес электронной почти</label>
                                            <input type="text" class="form-control" id="emailinp">
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-body">
                                <div class="profile-desk">
                                    <div class="btn-group btn-group-justified">
                                        <a class="btn btn-success btn-lg" onclick="sendsave()" >Сохранить</a>
                                        <a class="btn btn-danger btn-lg"  href="#">Отменить</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-body">
                                <section class="panel">
                                    <header class="panel-heading custom-tab dark-tab">
                                        <ul class="nav nav-tabs">
                                            <li class="active">
                                                <a href="#home2" data-toggle="tab">Заявки</a>
                                            </li>
                                            <li class="">
                                                <a href="#contact2" data-toggle="tab">Контракты</a>
                                            </li>
                                        </ul>
                                    </header>
                                    <div class="panel-body">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="home2">
                                                <div id="mer"></div>
                                            </div>
                                           <div class="tab-pane" id="contact2">
                                               Контракты
                                           </div>
                                        </div>
                                    </div>
                                </section>

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


</section>

<!-- Placed js at the end of the document so the pages load faster -->
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/jquery-ui-1.9.2.custom.min.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/modernizr.min.js"></script>
<script src="js/jquery.nicescroll.js"></script>

<!--Sparkline Chart-->
<script src="js/sparkline/jquery.sparkline.js"></script>
<script src="js/sparkline/sparkline-init.js"></script>


<!--common scripts for all pages-->
<script src="js/scripts.js"></script>

<script>
    var idses = getQueryVariable('id');
    webix.ready(function(){
        webix.ui({
            container:'celdr',
        view:'datepicker',name:'date',id:'date',labelWidth:115,label:'Дата рождения',stringResult:true

        });

        webix.ui({
            container:'scholl',
            view:'combo',
            id:'school',
            options:'scholl.php'
        });
        webix.ui({
            container:'lgotkat',
            view:'combo',
            id:'lgotkats',
            options:'lgotkat.php'
        });
        webix.ui({
            container:'mer',
            view:'datatable',
            minHeight:200,
            onContext:{},

            id:'datatable',
            editable:true,
            columns:[
                {id:'id',header:'№'},
                {id:'status', width:110,header:'Статус',template:function(obj){
                    switch (obj.status){
                        case "1":
                            return "В Очереди";
                            break;
                        case "2":
                            return "Принято";
                            break;
                        case "3":
                            return "Отказано";
                            break;
                        case "4":
                            return "Исполнено";
                            break;
                        default :
                            return "В очереди";
                            break;
                    }
                }},
                {id:'year',header:'Год'},
                {id:'date',header:"Дата&nbsp;подачи",width:200,format: webix.Date.dateToStr('%Y-%m-%d')},
                {id:'type',header:'Направление',fillspace:true,template:function(obj){
                    switch (obj.type){
                        case "1":
                            return "Лагеря с дневным пребыванием детей";
                            break;
                        case "2":
                            return "Лагеря труда и отдыха";
                            break;
                        case "4":
                            return "Лагеря палаточного типа";
                            break;
                        case "5":
                            return "Ханты-Мансийский автономный округ-Югра";
                            break;
                        case "6":
                            return "Тюменская область";
                            break;
                        case "7":
                            return "Свердловская область";
                            break;
                        case "8":
                            return "Краснодарский край г.Анапа";
                            break;
                        case "9":
                            return "Республика Адыгея";
                            break;
                        case "10":
                            return "Республика Болгария";
                            break;
                        default :
                            return "Заполнено не правильно";
                            break;

                    }
                }},
                {id:'time',header:'Время&nbsp;отдыха',width:200,template:function(obj){
                    switch (obj.time){
                        case "1":
                            return "Весенние каникулы";
                            break;
                        case "2":
                            return "Летние каникулы";
                            break;
                        case "3":
                            return "Осенние каникулы";
                            break;
                        case "4":
                            return "Зимние каникулы";
                            break;
                        default :
                            return "Заполнено не правильно";
                            break;

                    }
                }
                },
                {id:'timeobj',header:'Смена',template:function(obj){
                    switch (obj.timeobj){
                        case "1":
                            return "1 Смена";
                            break;
                        case "2":
                            return "2 Смена";
                            break;
                        case "3":
                            return "3 Смена";
                            break;
                        case "4":
                            return "4 Смена";
                            break;
                        default :
                            return " ";
                            break;

                    }
                }
                }

            ],
            url:'putevka.php?ides='+idses,select:"row",
            on:{
                onSelectChange:function(){
                    var selectedid;
                    selectedid = $$('datatable').getSelectedId(true).join();

                }

            }

        });
        webix.ui({
            view:"contextmenu",
            id:"cmenu",
            data:["В очереди","Принято","Отказано","Исполнено"],
            on:{
                onItemClick:function(id){
                    var context = this.getContext();
                    if(this.getItem(id).id=="В очереди")
                        webix.ajax("reqedit.php?id="+context.id+"&ogid=1");
                    else if(this.getItem(id).id=="Принято")
                        webix.ajax("reqedit.php?id="+context.id+"&ogid=2");
                    else if(this.getItem(id).id=="Отказано")
                        webix.ajax("reqedit.php?id="+context.id+"&ogid=3");
                    else if(this.getItem(id).id=="Исполнено")
                        webix.ajax("reqedit.php?id="+context.id+"&ogid=4");
                    $$("datatable").load('putevka.php?ides='+idses);



                }
            }


        });
        $$("cmenu").attachTo($$("datatable"));
        });




</script>
<script>
    function gid(eid){
        return document.getElementById(eid);
    }
    var ids = getQueryVariable('id');
    webix.ready(function(){


        webix.ajax('getprofile.php?id='+ids,function(text){
            var jsons = jQuery.parseJSON(text);


            gid('headernames').innerHTML = jsons[0].firstname+' '+jsons[0].name+' '+jsons[0].surname;
            gid('nameinp').value = jsons[0].name;
            gid('fioinp').value = jsons[0].firstname;
            gid('lastinp').value = jsons[0].surname;
            gid('svid').value = jsons[0].doc;
            gid('adrregs').value = jsons[0].adr;
            gid('adrfact').value = jsons[0].adrfact;
            gid('classname').value = jsons[0].class;
            gid('fioroditelya').value = jsons[0].fioroditelya;
            gid('workstation').value = jsons[0].workstation;
            gid('rabotainp').value = jsons[0].rabota;
            gid('homeinp').value = jsons[0].home;
            gid('mobilinp').value = jsons[0].mobile;
            gid('emailinp').value = jsons[0].email;
            $$('date').setValue(jsons[0].date);
            $$('school').setValue(jsons[0].scholl);
            $$('lgotkats').setValue(jsons[0].katlgot);




        } );
    });
    function sendsave(){
        webix.ajax("updatedb.php?nameinp="      +   gid('nameinp').value +
                                "&fioinp="      +   gid('fioinp').value +
                                "&lastinp="     +   gid('lastinp').value +
                                "&svid="        +   gid('svid').value +
                                "&adrregs="     +   gid('adrregs').value +
                                "&adrfact="     +   gid('adrfact').value +
                                "&classname="   +   gid('classname').value +
                                "&fioroditelya="+   gid('fioroditelya').value +
                                "&workstation=" +   gid('workstation').value +
                                "&rabotainp="   +   gid('rabotainp').value +
                                "&homeinp="     +   gid('homeinp').value +
                                "&mobilinp="    +   gid('mobilinp').value +
                                "&emailinp="    +   gid('emailinp').value +
                                "&date="        +   $$('date').getValue() +
                                "&school="      +   $$('school').getValue() +
                                "&lgotkats="    +   $$('lgotkats').getValue()+
                                "&ids="         +   ids,
            {success:function(text){
                if(text==0){
                    webix.alert({text:"Данные обновлены"});
                }else{
                    webix.alert({type:"alert-warning",text:"Повторите позже"});
                }}},

            {error:function(text, data, XmlHttpRequest){
                webix.alert({text:"Повторите позже"});
            }}
        );
    }

</script>

</body>
</html>
