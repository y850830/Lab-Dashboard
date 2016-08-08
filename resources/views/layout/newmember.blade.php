@extends('layout.MBframe')
@section('content')
        <div class="container">
        <div id="page-content-wrapper">
            <a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><i class="fa fa-bars" aria-hidden="true"></i></a>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                    	<br>
                        <h1>人員管理</h1>
                            <div style="top:45px;left:800px;position:absolute;">
                            <a href='javascript:void(0);' class="css_btn_class" onclick="addNew();">新增</a>
                        </div>
                            <div style="top:45px;left:725px;position:absolute;">
                            <a href='javascript:void(0);' class="css_btn_class">確認</a>
                        </div>
                        <br>
                            <table class="NM_COLLAPSE">
                        <tr>
                            <td>人員姓名</td>
                            <td>聯絡資訊</td>
                            <td>ID</td>
                        </tr>
                        </table>
                        <div id="NMB"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
