<html>
   <head>
      <title>Ajax Example</title>
     
      <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
      </script>
      
      <script>
         function getMessage(){
            $.ajax({
               type:'POST',
               url:'/majaxp',
               data: {
        "_token": "{{ csrf_token() }}"
        },
               success:function(data){
                  $("#msg").html(data.msg);
               }
            });
         }
      </script>
   </head>
   
   <body>
      <div id = 'msg'>This message will be replaced using Ajax. 
       
      
         <button onclick="getMessage()">hi</button>
      
   </body>

</html>