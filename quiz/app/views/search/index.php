<html>
    <title>Login</title>
  <head>
  <link rel="stylesheet" type="text/css" href="style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
  </head>
     <body>

 <script>
function search()
{

  $('#sea').show();
   $('#seac').hide();
   }
  
</script>
   
     <script>
           
       function show_news_list()
			{
        var x = document.getElementById("inp1").value;
                   alert(x);
				                var row;
                         var cell1;
                          var cell2;
                         var cell3;
      
	              var $count=0;
                     alert("hello2");
                   $.ajax
	            ({
              // alert("hello3");
		      type:'POST',
		        url:'login_process.php',
	       	data:$("#frm5").serialize(),
	       	success:function(response)
				   {
              alert(response);
				    var da = JSON.parse(response);
            alert("after parsing");
				    alert(da.date);
				    var table1=document.getElementById("tab1");
					for(i=0;i<da.date.length;i++)
					{
					var row=table1.insertRow(1);
					cell1=row.insertCell(0);
					cell2=row.insertCell(1);
					cell3=row.insertCell(2);
					cell1.innerHTML=da.date[i];
          cell2.innerHTML=da.eng[i];
         cell3.innerHTML=da.hindi[i];
						}
					  
				  },
    	});
   			}
       
			
			</script>		


     <div style="display:none" id="sea" >
      <form method="post" id="frm5" style="">
	         
           <div style="background:white;margin:5px;padding:10px;"><input type="text" name="dat1" id="inp1"> <label class=""></label></div>
           	<label class="">NEWS LIST</label>
           <label></label>
           <table style="width:100%" id="tab1">
                     <tr id="tr1">
                  <th id="dat">Date</th>
                  <th id="eng">Title </th>
            <th id="hin">Body</th>
            
                    </tr>
                 </table>
            <input type="button" value="SHOW" onclick="show_news_list()" id="btn_sign_up">
           </form>
     </div>
     <input type="button" value="SHOW" onclick="search()" id="seac">
      </body>
  
 
</html>
