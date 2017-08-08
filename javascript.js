<script type="text/javascript">
  $(document).ready(function(){
    $('#div1').slideUp(300).promise().done(function() {
       $('#div2').fadeIn(400, function() {
          //your next code here...
       });
    });
  });
</script>