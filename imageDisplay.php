<?php
require_once 'db_connect.php';

require_once 'head.php';
//require_once 'header.php';
$crime_id = $_GET['crime_id'];
?>
<input type="text" name="crime_id" id="crime_id" <?php echo 'value="'.$crime_id.'"'?>>

<div id="blueimp-gallery" class="blueimp-gallery">
    <div class="slides"></div>
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
</div>
<div id="links">
</div>

<script type="text/javascript">
$(document).ready(function(){
	function getProof(){
		var crime_id = $("#crime_id").val();
		console.log(crime_id);
		$.ajax({
	            async : true,
	            cache : false,
	            url:'API/getProofByCrimeId.php?crime_id='+crime_id,
	            type:'GET',
	            success:function(result) {
	            	var i = 1;
		            res = jQuery.parseJSON(result);
		            for(var row in res){
		            	console.log(res[row]['id']);
		            	var r = res[row];
		            	var id[];
		            	 id.append(r['id']);
		            	if(id.indexOf(r['id']) != -1){
			            	var a = $('<a class="proofLink" href="'+r['path']+'" title="'+i+'" >' );
			            	var img = $('<img src="'+r['path']+'" alt="'+i+'" height=50>' );
			            	$("#links").append(a);
			            	$(a).append(img);
			            	i++;
			            }
			            console.log(id);
		            }
	            }
	        });
		}
});
document.getElementById('links').onclick = function (event) {
    event = event || window.event;
    var target = event.target || event.srcElement,
        link = target.src ? target.parentNode : target,
        options = {index: link, event: event},
        links = this.getElementsByClassName('proofLink');
    blueimp.Gallery(links, options);
};

</script>
