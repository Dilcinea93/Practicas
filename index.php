<script>
	 $.ajax({url: "cls/ajax/ajax-quotation.php";
                    async: false,
                    success: function(result) {

                    content+="<table id='containers_info' border='1' width='30'><tr>";
                    	for(var i=0;i<4;i++){ 
                    content+="<td style='border:4px solid black;'>";
                    
                         content+="<table style='border:2px solid green;'><tr><td><label class='labels_total'>CONTAINERS DE "+result.con_des+"</label></td></tr>";
                    content+="<tr><td ><label class='labels_total'>PESO"+result.con_peso+" "+unitvolu+"</label></td></tr>";
                    content+="<tr><td ><label class='labels_total'>VOLUMEN" +result.con_volu+" "+unitvolu+"</label></td></tr>";
                    content+="<tr><td ><label class='labels_total'><span class='verde span-container'>DESCRIPCION<strong>TANTOS"+result.con_des+"45 PIES</strong></span></label></td></tr>";
                    content+="</table>";
                    }
                    
content+="</td></tr></table>";
                    }
                });

</script>