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

    for(var i = 0 ; i < LFcount ; i++){ 
        $("#LF").append( 
            $("<tr>").append( 
                $("<td>").html( 
                    "<label id="+(i+1)+"_1>"+txtArr[i]['account']+"</label>" 
                ), 
                $("<td>").html( 
                    "<label id="+(i+1)+"_2>"+txtArr[i]['IP']+"</label>" 
                ),
                $("<td>").html( 
                    "<label id="+(i+1)+"_2>"+txtArr[i]['created_at']+"</label>" 
                ),  
                $("<td>").html( created_at
                    "<label id="+(i+1)+"_2>"+txtArr[i]['updated_at']+"</label>" 
                )   
            ) 
        );
    }
        
</script>