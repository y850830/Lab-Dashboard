     <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    

    <!-- Menu Toggle Script -->
    <script>
    var txtId = 1;
    $("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
    });
    
    //add input block in showBlock
    function addNew(){
        $("#NMB").append('<div id="div' + txtId + '"><input type="text" name="test[]" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="test[]" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="test[]" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" value="del" onclick="deltxt('+txtId+')"></div><div id="div' + txtId + '"><br></div>');
        txtId++;
    }
    //remove div
    function deltxt(id) {
        $("#div"+id).remove();
        $("#div"+id).remove();
        txtId--;
    }
    </script>