@extends('layout.frame')
@section('content')
    <?php
        $i=0;
        $mdata = null;
        foreach ($post as $key => $data) {
            $mdata[$i] = $data;
            $i++;
        }
        $i=0;
    ?>
    <script>
        var name=0,cellphone=0,ID=0;
        var txtArr = new Object();
        txtArr = [<?= implode(',',$mdata) ?>];
        MBcount = <?=count($mdata)?>;
    </script>
        <div class="container">
        <div id="page-content-wrapper">
            <a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><i class="fa fa-bars" aria-hidden="true"></i></a>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                    	<br>
                        <h1>人員管理</h1>
                        <div style="top:45px;left:800px;position:absolute;">
                            <a href="http://localhost:8000/newmember" class="css_btn_class">新增成員</a>
                        </div>
                        <br>
                        <table class="MB_COLLAPSE" id="test">
                          <thead>
                            <tr>
                              <th>人員姓名</th>
                              <th>聯絡資訊</th>
                              <th>ID</th>
                            </tr>
                          </thead>
                        </table>
                            <div id="myModal" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">成員編輯</h4>
                                </div>
                                <div class="modal-body">
                                    <div id ="MBedit" ></div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">關閉</button>
                                    <button type="button" class="btn btn-default" onclick="mbEdit()">確認</button>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
