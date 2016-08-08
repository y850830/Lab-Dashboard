@extends('layout.frame')
        <div class="container">
        <div id="page-content-wrapper">
            <a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><i class="fa fa-bars" aria-hidden="true"></i></a>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <br>
                        <h1>討論區管理</h1>
                        <br>
                        <br>
                        <table class="TB_COLLAPSE">
                          <thead>
                            <tr>
                              <th>討論區名稱</th>
                              <th>規則大綱</th>
                            </tr>
                          </thead>
                            <tr>
                              <td>TF foot</td>
                              <td>TF foot</td>
                              <td><a href="http://localhost:8000/layout" class="css_btn_class" id="menu-toggle">Toggle Menu</a></td>
                            </tr>
                          <tr>
                            <td>row 1</td>
                            <td>row 1</td>
                            <td><a href="http://localhost:8000/layout" class="css_btn_class" id="menu-toggle">Toggle Menu</a></td>
                          </tr>
                        </table>                          
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@section('context')

@endsection