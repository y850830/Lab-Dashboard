     <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    
<script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    
        for(var i = 0 ; i < FRcount ; i++){ 
            $("#FR").append( 
                $("<tr>").append( 
                    $("<td>").html( 
                        "<label id="+(i+1)+"_1>"+txtArr[i]['title']+"</label>" 
                    ), 
                    $("<td>").html( 
                        "<label id="+(i+1)+"_2>"+txtArr[i]['context']+"</label>" 
                    ),
                    $("<td>").html( 
                        "<button  class=css_btn_class data-toggle=modal data-target=#editModal onclick=setEdit("+(i+1)+");>編輯</button>" 
                    )  
                ) 
            );
        }
        function setEdit(i){
            title = document.getElementById(i+"_1").innerHTML;
            document.getElementById("title").value = title;     
        }
</script>