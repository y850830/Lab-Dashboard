@extends('layout.frame')
    <div id="wrapper">

    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">
                <div class = "title_class">實驗室</div>
            </li>
            <br>
            <li>
                <a href="http://localhost:8000/layout/forum" class = "sidebr_class">討論區管理</a>
            </li>
            <br>
            <li>
                <a href="http://localhost:8000/layout/member" class = "sidebr_class">人員管理</a>
            </li>
            <br>
            <li>
                <a href="http://localhost:8000/layout/log" class = "sidebr_class">Log資訊</a>
            </li>
        </ul>
    </div>
        <!-- /#sidebar-wrapper -->
    <div class="container">
        <div id="page-content-wrapper">
            <a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><i class="fa fa-bars" aria-hidden="true"></i></a>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Wellcome to Lab</h1>
                    </div>
                </div>
            </div>
        </div>
@section('context')
@endsection