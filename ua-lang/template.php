<!doctype html>
<html lang="ua">
<head>
    <link rel="shortcut icon" href="/ua-lang/images/favicon.ico">
    <title>Інститут Комп`ютерних Технологій Університету "Україна"</title>

    <meta charset="utf-8">
    <link rel="stylesheet" href="/libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/libs/bootstrap/css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="/libs/lightbox/css/lightbox.css">

    <script src="/libs/lightbox/js/jquery-1.11.0.min.js"></script>
    <script src="/libs/lightbox/js/lightbox.min.js"></script>
</head>
<body>
    <nav class="navbar">
        <div class="navbar-inner">
            <a href="/about" class="brand">IKT</a>
            <ul class="nav">
                <li><a href="/">Головна</a></li>
                <li><a href="/abiturients">Абітурієнту</a></li>
                <li><a href="/projects">Проекти</a></li>
            </ul>
            <form class="navbar-form pull-right">
                <a href='/' class='btn btn-primary'>UA</a>
                <a href='/en/' class='btn'>en</a>
            </form>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="span9">
            <?php
                if(substr($_GET['path'],-5) != '.html'){
                    $_GET['path'] .= '.html';
                }
                if(file_exists($_GET['path'])){
                    include $_GET['path'];
                }else{
                    print '<h3>404 Сторінка Не Знайдена</h3>';
                }
            ?>
            </div>
            <div class="span3">
                <ul class="nav nav-list">
                    <li class="nav-header">Приймальна комісія</li>
                    <li><a href="tel:+380674065398"><i class="icon-comment"></i> +38 (067) 406 53 98</a></li>
                    <li><a href="tel:+380444092762"><i class="icon-comment"></i> +38 (044) 409 27 62</a></li>
                    <li><i class="icon-home"></i> м. Київ, вул. Львівська, 23</li>
                    <li class="divider"></li>
                    <li><a href="/">Головна</a></li>
                    <li class="divider"></li>
                    <li class="nav-header">Абітурієнтам</li>
                    <li><a href="/profs"><i class="icon-user"></i> ІТ професії, яким ми навчаємо</a></li>
                    <li><a href="/profs_present"><i class="icon-user"></i> Презентація ІКТ</a></li>
                    <li><a href="/special"><i class="icon-star"></i> Наші фішки</a></li>
                    <li class="divider"></li>
                    <li><a href="/concept_of_study"><i class="icon-pencil"></i> Концепція навчання</a></li>
                    <li><a href="/special#prices"><i class="icon-pencil"></i> Ціни на навчання</a></li>
                    <li><a href="/znizhki"><i class="icon-pencil"></i> <span class="text-error">Знижки</span></a></li>
                    <li><a href="/vstup2014"><i class="icon-info-sign"></i> Умови вступу 2015</a></li>       
                    <li><a href="/documents_to_enter"><i class="icon-info-sign"></i> Список документів</a></li>   
                    <li class="divider"></li>          
                    <li class="nav-header">Наші проекти</li>
                    <li><a href="/cources/java"><i class="icon-time"></i> Курси JAVA</a></li>
                    <li><a href="/protolabs"><i class="icon-time"></i> Protolabs</a></li>
                    <li><a href="/devclub"><i class="icon-time"></i> Dev Club</a></li>
                    <ul class="nav nav-list">
                        <li class="divider"></li>
                        <li class="nav-header">Напрями та Спеціальності</li>
                        <li><a href="/speciality/computer_sciences"><i class="icon-hand-right"></i> Комп`ютерні науки</a></li>
                        <li><a href="/speciality/software_engineering"><i class="icon-hand-right"></i> Програмна інженерія</a></li>
                        <li><a href="/speciality/computer_engineering"><i class="icon-hand-right"></i> Комп`ютерна інженерія</a></li>
                        <li><a href="/speciality/automatic_systems"><i class="icon-hand-right"></i> Програмне забезпечення систем</a></li>
                        <li><a href="/speciality/system_and_nets"><i class="icon-hand-right"></i> Комп`ютерні системи та мережі</a></li>
                        <li><a href="/speciality/computer_ecological_economic_monitoring"><i class="icon-hand-right"></i> Комп`ютерний еколого-економічний моніторинг</a></li>
                    </ul>
                    <li class="divider"></li>
                    <li class="nav-header">Про нас</li>
                    <li><a href="/about"><i class="icon-book"></i> Інститут</a></li>
                    <ul class="nav nav-list">
                        <li class="divider"></li>
                        <li class="nav-header">Кафедри</li>
                        <li><a href="/department/software_engineering"><i class="icon-hand-right"></i> Кафедра інформаційних технологій та програмування</a></li>
                        <li><a href="/department/computer_engineering"><i class="icon-hand-right"></i> Кафедра комп`ютерної інженерії</a></li>
                        <li><a href="/department/computer_science"><i class="icon-hand-right"></i> Комп`ютерних наук</a></li>
                    </ul>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>	
