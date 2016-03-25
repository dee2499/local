

<html>
   <head>
      <script src="jss/jquery-1.9.1.js"></script>
      <script src="jss/jquery.validate.min.js"></script>
      <script>
         $(function(){
         $("#frm").validate({rules:{
         fname:{required:true},
         	 },
	         submitdandler:function(form) {
	         	form.submit();
	        	 }
         	});
         });
      </script>
      <style>
         .error{color:red;}
      </style>
   </head>
   <body>
      <form name="frm" id="frm">
         <table>
            <tr>
               <td>fname</td>
               <td><input type="text" name="fname"></td>
            </tr>
            <tr>
               <td><input type="submit" name="submit" value="submit"></td>
            </tr>
         </table>
      </form>
   </body>
</html>

