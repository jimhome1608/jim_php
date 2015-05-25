<html>
<body>
<p></p>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript">
function btnClick (sender_id) {
	command_data = "{".concat(sender_id,"00FF00}");
    $.ajax({
      url:"script", //the page containing php script
      type: "POST", //request type
      data: ({Command:command_data}),
      success:function(result){
        alert(result);
     }
   });
}
</script>
<button type="button" onclick="btnClick(this.id)" id="000">LED 000</button>
<button type="button" onclick="btnClick(this.id)" id="100">LED 100</button>
</body>
</html>