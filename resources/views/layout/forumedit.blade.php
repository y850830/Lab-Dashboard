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
                        <label >Male</label>
                        <br>
                        <br>
                        <textarea style="width:750px;height:300px;">輸入你想要寫的內容...</textarea>

                        <div style="top:500px;left:20px;position:absolute;">
                            <a href='javascript:void(0);' class="css_btn_class">確認</a>
                        </div>                        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@section('context')

@endsection