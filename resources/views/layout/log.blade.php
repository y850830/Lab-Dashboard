@extends('layout.LOframe')
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
                            <button class="css_btn_class" data-toggle=modal data-target=#newModal>新增成員</button>
                        </div>
                        <br>
                        <table class="MB_COLLAPSE" id="MB">
                          <thead>
                            <tr>
                              <th>人員姓名</th>
                              <th>聯絡資訊</th>
                              <th>ID</th>
                            </tr>
                          </thead>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
