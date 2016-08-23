@extends('layout.FRmaster')
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
        var title ="";
        var txtArr = new Object();
        txtArr = [<?= implode(',',$mdata) ?>];
        FRcount = <?=count($mdata)?>;
    </script>
        <div class="container">
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <br>
                        <h1>討論區管理</h1>
                        <br>
                        <br>
                        <table class="TB_COLLAPSE" id = "FR">
                          <thead>
                            <tr>
                              <th>討論區名稱</th>
                              <th>規則大綱</th>
                            </tr>
                          </thead>
                        </table> 

                        {{-- edit --}}
                        <div id="editModal" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">內容編輯</h4>
                                </div>
                                <div class="modal-body">
                                    <div id ="MBedit" ></div>
                                    {{ Form::open(array('route' => 'forum_edit')) }}

                                        <div class="form-group">
                                        {{ Form::label('title', '討論區') }}
                                        {{ Form::text('title', '', ['class' => 'form-control']) }}
                                        </div>

                                        <div class="form-group">
                                        {{ Form::label('context', '內文') }} 
                                        {{ Form::textarea('context', '', ['class' => 'form-control']) }}
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
        </div>



@endsection