
<!doctype html>
<head>
<!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css"> -->
    <style>
     .ui-menu { width: 150px; }
     </style>
</head>

     
<body>
<!-- <form id="cities" name="cities"> -->
   <ul id="menu" >
     <li><a href="#" tag="LDN">Lodon</a></li>
     <li><a href="#" tag="MAD">Madrid</a></li>
     <li><a href="#" tag="LYN">Lyon</a></li>
     <li><a href="#" tag="PAR">Paris</a></li>
   </ul>
    <br style="clear:both;">
    Selected menu tag (hidden field):
        <input type="text" id="tag" name="tag">
   
<!-- </form> -->
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
<script>
     $(function() {
     $( "#menu" ).menu({
         select:function(event, ui){
             console.log(ui.item);
             alert("Selected tag = "+$(ui.item).find('a').attr('tag'));
             $('#tag').val($(ui.item).find('a').attr('tag'));
         }
     });
});
</script>
</body>  

