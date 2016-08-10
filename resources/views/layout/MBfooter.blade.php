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
                      "<button  class=css_btn_class onclick=delID("+(i+1)+");>刪除</button>" 
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
    function delID(i) {
        ID = document.getElementById(i+"_3").innerHTML;
        $(function() {
            $.ajax({
            method: "POST",
            url: "member_del",
            data: {
                id: ID
            },
            success: function(response) {
                alert(response);
            }
            });
        });
    }
</script>