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

    function setEdit(i){
        name = document.getElementById(i+"_1").innerHTML;
        cellphone = document.getElementById(i+"_2").innerHTML;
        ID = document.getElementById(i+"_3").innerHTML;
        console.log(name,cellphone,ID);
        document.getElementById("MBedit").innerHTML='<input type="text" value="'+name+'" id="Mname" /> <input type="text" value="'+cellphone+'" id="Mcellphone" /> <input type="text" value="'+ID+'" id="MID" />';
        
    }

    function mbEdit(branchNm) {

        var newdata = {
            "name":document.getElementById("Mname").value,
            "cellphone":document.getElementById("Mcellphone").value,
            "ID":document.getElementById("MID").value
        }

        var URL ="http://localhost:8000/member_edit"

        console.log(newdata);
         
        $.ajax(            
        {
            url:URL,
            cache: false,
            data:newdata,
            dataType:'josn',
            type:"POST",                    

            success: function(response)       
            {
                // alert("work");
            },
             
            error:  function(xhr, ajaxOptions, thrownError)
            { 
            // alert("error");
            // alert(xhr.status); 
            // alert(thrownError);  
            }
         
        });
    }
</script>