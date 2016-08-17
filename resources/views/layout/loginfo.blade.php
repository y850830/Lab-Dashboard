@extends('layout.LFframe')
@section('content')
    <?php
        $i=0;
        $ldata = null;
        foreach ($loginfo as $key => $data) {
            $ldata[$i] = $data;
            $i++;
        }
    ?>
    <script>
        var ID=0;
        var txtArr = new Object();
        txtArr = [<?= implode(',',$ldata) ?>];
        LFcount = <?=count($ldata)?>;
    </script>
        <div class="container">
        <div id="page-content-wrapper">
            <a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><i class="fa fa-bars" aria-hidden="true"></i></a>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <br>
                        <h1>Log資訊</h1>
					    <br>
                        <br>
                        <table class="TB_COLLAPSE" id="LF">
                          <thead>
                            <tr>
                              <th>登入帳號</th>
                              <th>登入IP</th>
                              <th>登入時間</th>
                              <th>登出時間</th>
                            </tr>
                          </thead>
                        </table>  
                    </div>
                </div>
            </div>
        </div>

@endsection