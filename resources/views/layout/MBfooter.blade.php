     <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>

    <style>
    .footer {
        background-Color: black;
        margin-bottom: 0; 
    }
    
    .copy {
        color: White;
    }
</style>

<div class="footer row">
    <div class="row">
        <center>
            <p class="copy">
                國立虎尾科技大學 M.A.S.E Lab © All rights reserved. <br> 地址：632 雲林縣虎尾鎮文化路64號 No.64, Wunhua Rd., Huwei Township, Yunlin
                County 632, Taiwan<br> 製作群:黃立豪、陳威傑、蒙偉倫、葉晴尹、楊全還
            </p>
        </center>
    </div>
</div>
</div>
<!-- javascripts -->
<script src="{{URL::asset('js/jquery-ui-1.10.4.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/jquery-ui-1.9.2.custom.min.js')}}"></script>

<!-- bootstrap -->
<script src="{{URL::asset('js/bootstrap.min.js')}}"></script>

<!-- nice scroll -->
<script src="{{URL::asset('js/jquery.scrollTo.min.js')}}"></script>
<script src="{{URL::asset('js/jquery.nicescroll.js')}}" type="text/javascript"></script>

<!-- custom select -->
<script src="{{URL::asset('js/jquery.customSelect.min.js')}}"></script>

<!--custome script for all page-->
<script src="{{URL::asset('js/scripts.js')}}"></script>

{{-- <script>
    //carousel
    $(document).ready(function() {
        $("#owl-slider").owlCarousel({
          navigation : true,
          slideSpeed : 300,
          paginationSpeed : 400,
          singleItem : true
        });
    });
    //custom select box
    $(function(){
        $('select.styled').customSelect();
    });
</script> --}}
    

    <!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
    });
 
    for(var i = 0 ; i < MBcount ; i++){ 
        $("#MB").append( 
              $("<tr>").append( 
                 $("<td>").html( 
                      "<label id="+(i+1)+"_1>"+txtArr[i]['name']+"</label>" 
                  ), 
                 $("<td>").html( 
                      "<label id="+(i+1)+"_2>"+txtArr[i]['cellphone']+"</label>" 
                  ), 
                  $("<td>").html( 
                      "<label id="+(i+1)+"_3>"+txtArr[i]['ID']+"</label>" 
                  ),
                  $("<td>").html( 
                      "<a role=button class=button style=font-size: 20px; onclick=delCheck("+(i+1)+");>刪除</a>" 
                  ),
                  $("<td>").html( 
                      "<button  class=css_btn_class data-toggle=modal data-target=#editModal onclick=setEdit("+(i+1)+");>編輯</button>" 
                  )  
              ) 
          );
    }

    function setEdit(i){
        ID = document.getElementById(i+"_3").innerHTML;
        document.getElementById("ID").value = ID;     
    }

    function delCheck(i){
        var r = confirm("確定要刪除嗎?");
        if (r == true) {
            delID(i);
        } else {
        }
    }

    function delID(i) {
        ID = document.getElementById(i+"_3").innerHTML;
        location.href="member_del/"+ID;
    }
</script>