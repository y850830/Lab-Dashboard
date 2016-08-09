     <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    

    <!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
    });
 
    for(var i = 0 ; i < MBcount ; i++){ 
        $("#test").append( 
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
                      "<button  class=css_btn_class>刪除</button>" 
                  ),
                  $("<td>").html( 
                      "<button id="+i+" class=css_btn_class data-toggle=modal data-target=#myModal onclick=setEdit("+(i+1)+");>編輯</button>" 
                  )  
              ) 
          );
    }
</script>