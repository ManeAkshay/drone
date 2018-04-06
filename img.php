
<input type="text" name="crime_id" id="crime_id" <?php echo 'value="'.$crime_id.'"'?> style="display: none;">
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
    var id = [];
    function imgProof(){
        var crime_id = $("#crime_id").val();
        $.ajax({
                async : true,
                cache : false,
                url:'API/getProofByCrimeId.php?crime_id='+crime_id,
                type:'GET',
                success:function(result) {
                    var i = 1;
                    
                    res = jQuery.parseJSON(result);
                    console.log(result);
                    for(var row in res['proof']){
                        //console.log(res['proof'][row]['id']);
                        var r = res['proof'][row];
                        if(id.indexOf(r['id']) == -1){
                            id.push(r['id']);
                            //console.log(id);
                            var a = $('<a href="'+r['path']+'" title="'+i+'" >'  );
                            var img = $('<img src="'+r['path']+'" alt="'+i+'" height=50>' );
                            $("#links").append(a);
                            $(a).append(img);
                            i++;
                        }
                    }

                    var lat = res['location']['latitude'];
                    var lon = res['location']['longitude']; 
                    $('#location').text(lat+' , '+lon);
                }
            });
        document.getElementById('links').onclick = function (event) {
        event = event || window.event;
        var target = event.target || event.srcElement,
            link = target.src ? target.parentNode : target,
            options = {index: link, event: event},
            links = this.getElementsByTagName('a');
            blueimp.Gallery(links, options);
        };
    }

$(document).ready(function(){
    imgProof();
    setInterval("imgProof()", 2000);
    });

</script>
