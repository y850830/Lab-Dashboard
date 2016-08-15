<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>Simple Sidebar</title>

    @include('layout.head')

</head>
<body>
    <div id="wrapper">

    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">
                <div class = "title_class">實驗室</div>
            </li>
            <br>
            <li>
                <a href="http://localhost:8000/forum" class = "sidebr_class">討論區管理</a>
            </li>
            <br>
            <li>
                <a href="http://localhost:8000/member" class = "sidebr_class">人員管理</a>
            </li>
            <br>
            <li>
                <a href="http://localhost:8000/log" class = "sidebr_class">Log資訊</a>
            </li>
        </ul>
    </div>
        <!-- /#sidebar-wrapper -->
    <div class="container">
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Wellcome to Lab</h1>
                    </div>
                </div>
            </div>
        </div>
<footer>
</footer>

</body>
</html>