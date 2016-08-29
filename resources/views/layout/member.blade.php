@extends('layout.MBmaster')
@section('content')
   <?php
        $i=0;
        $mdata = null;
        foreach ($post as $key => $data) {
            $mdata[$i] = $data;
            $i++;
        }
    ?>
    <script>
        var ID=0;
        var txtArr = new Object();
        txtArr = [<?= implode(',',$mdata) ?>];
        MBcount = <?=count($mdata)?>;
    </script>
        <div class="container">
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                    	<br>
                        <h1>人員管理</h1>
                        <div style="top:45px;left:800px;position:absolute;">
                            <a role="button" class="button button-thirdary" style="position: relative;font-size: 20px;left: 87%" data-toggle=modal data-target=#newModal>新增成員</a>
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

                            {{-- edit MB --}}
                            <div id="editModal" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">成員編輯</h4>
                                </div>
                                <div class="modal-body">
                                    <div id ="MBedit" ></div>
                                    {{ Form::open(array('route' => 'member_edit')) }}

                                        <div class="form-group">
                                        {{ Form::label('name', '人員姓名') }}
                                        {{ Form::text('name', '', ['class' => 'form-control']) }}
                                        </div>

                                        <div class="form-group">
                                        {{ Form::label('cellphone', '聯絡資訊') }}
                                        {{ Form::text('cellphone', '', ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                        {{ Form::label('ID', 'ID') }}
                                        {{ Form::text('ID','', ['class' => 'form-control']) }}
                                        </div>

                                        <button class="btn btn-success" type="submit">確認</button>

                                    {{ Form::close() }}
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">關閉</button>
                                </div>
                                </div>
                            </div>
                            </div>
                                {{-- new MB --}}
                                <div id="newModal" class="modal fade" role="dialog">
                                <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">成員新增</h4>
                                </div>
                                <div class="modal-body">
                                    <div id ="MBedit" ></div>
                                    {{ Form::open(array('route' => 'member_new')) }}

                                        <div class="form-group">
                                        {{ Form::label('Nname', '人員姓名') }}
                                        {{ Form::text('Nname', '', ['class' => 'form-control']) }}
                                        </div>

                                        <div class="form-group">
                                        {{ Form::label('Ncellphone', '聯絡資訊') }}
                                        {{ Form::text('Ncellphone', '', ['class' => 'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                        {{ Form::label('NID', 'ID') }}
                                        {{ Form::text('NID','', ['class' => 'form-control']) }}
                                        </div>

                                        <button class="btn btn-success" type="submit">確認</button>

                                    {{ Form::close() }}
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">關閉</button>
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
