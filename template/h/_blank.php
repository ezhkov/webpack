<?php
$title = "Внутренняя страница";
$page = "common";
include('templates/header.php');
?>
<site-body :page-data="pageData">
    <div class="wrapper">
        <div class="content">
            <div class="content__inner">
                <nav class="breadcrumbs">
                    <a href="#" class="breadcrumbs__item">Главная</a>
                    <a class="breadcrumbs__item">Внутренняя страница</a>
                </nav>
            </div>
            <aside class="content__aside">

            </aside>
        </div>
    </div>
</site-body>
<?php
include('templates/footer.php');
?>
