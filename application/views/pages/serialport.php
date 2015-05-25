<html>
<body>
<p></p>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript">
function btnClick (clicked_id) {
    $.ajax({
      url:"script", //the page containing php script
      type: "POST", //request type
      data: ({Command:clicked_id}),
      success:function(result){
        alert(clicked_id);
     }
   });
}
</script>
<button type="button" onclick="btnClick(this.id)" id="{000FF00FF}">LED On</button>
<button type="button" onclick="btnClick(this.id)" id="{000000000}">LED Off</button>
</body>
</html>