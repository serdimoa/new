<?php
/**
 * Created by PhpStorm.
 * User: SerDimoa
 * Date: 03.01.15
 * Time: 16:01
 */
session_start();
if (!$_SESSION["login"]) {
    header('Location: index.php');
    exit();
} else {
    echo("<!DOCTYPE HTML>
    <html>
    <head>
        <meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
        <link rel='stylesheet' href='js/webix/webix.css' type='text/css'>
        <script src='js/webix/webix.js' type='text/javascript'></script>

    </head>
    <body>

    <script type='text/javascript' charset='utf-8'>
        webix.debug = true;
        var dates;
        var elementadd = [{
        view:'fieldset',label:'Основная информация',  body:{rows:[
        {view:'text',name:'name',label:'Имя'},
        {view:'text',name:'firstname',label:'Фамилия'},
        {view:'text',name:'surname',label:'Отчество'},
        {view:'datepicker',name:'date',id:'date',labelWidth:115,label:'Дата рождения',stringResult:true},
        {view:'button',click:'submit_form',label:'Создать'}
        ]}}];

        var menu = [{id:1,name:'Реестр детей',url:'nes.php'},
                    {id:2,name:'Заявки',url:'nes.php'},
                    {id:3,name:'Поиск',url:'nes.php'},
                    {id:4,name:'Контракты',url:'nes.php'},
                    {id:5,name:'Регистрация ребенка',url:'children_new.php'}];
webix.ui({
         id:'a1',
               rows:[{
               padding:0,type:'space', responsive:'a1', cols:[
//               Menu
               {
               view:'list',template:'#name#', data:menu,on:
                    {'onItemClick': function(id)
                        {
                            var urls=this.getItem(id);
                            document.location.href = urls.url;
                        }
                    },width:200,minHeight:1000,scroll:false
               },

//               Menu end
//               add new
                {view:'form',id:'form',name:'elementadd' ,minWidth:300,borderless:true, elements:elementadd,
                 rules:{
                 'name':webix.rules.isNotEmpty,
                 'firstname':webix.rules.isNotEmpty,
                 'surname':webix.rules.isNotEmpty,
                 'date':webix.rules.isNotEmpty
                 },
                 on:
                            submit_form = function() {
                            var form = $$('form');
                            var name = document.getElementById('name').value;
                            var firstname = document.getElementById('firstname').value;
                            var surname = document.getElementById('surname').value;
                            var date = $$('date').getValue();

                            if(form.validate()){
                            webix.ajax('children_new_insert.php?name_post='+name+'&firstname_post='+firstname+
                            '&surname_post='+surname+'&date_post='+date,function(int){
                            var text = int;
                            switch (text){
                                case '1':
                                    webix.message('OK');
                                    break;
                                case '2':
                                    webix.message('NO');
                                    break;
                            }
                            });
                            }


                            }
                 }



]}]}).show();
</script>
</body>");
}
?>