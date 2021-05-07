<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
      <title>Rename Tool!</title>
   </head>
   <body>
      <div class="container mt-4">
         <h2 class="text-center text-primary">Rename Tool</h2>
         <br>
         <div class="row justify-content-center">
            <div class="col-sm-6 col-lg-4 col-md-6">
               <div class="input-group mb-3">
                  <input id="string" autofocus type="text" class="form-control" placeholder="Enter your Text" aria-label="Recipient's username" aria-describedby="button-addon2">
                  <button class="btn btn-outline-primary" type="button" id="button-addon2"  data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="rename_f();">Rename</button>
               </div>
            </div>
         </div>
      </div>
      <!-- Vertically centered modal -->
      <!-- Modal -->
      <div class="modal fade modal-dialog modal-dialog-centered" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Copy your Text </h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                  <!--       here is text to copy-->
                  <div class="input-group mb-3">
                     <input id="text_renamed" type="text" class="form-control" placeholder="Copy your text" aria-label="Recipient's username" aria-describedby="button-addon2" readonly>
                     <button class="btn btn-outline-secondary" type="button" onclick="copyToClipboard();"  title="You can Use Ctrl + V to paste your copied item!">Copy</button>

                  </div>
               </div>

            </div>
         </div>
      </div>

      <!--  jquery-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
        <script>
          function rename_f()
          {
              var x = $("#string").val();
              $.ajax({
                type:"POST",
                url:"rename.php",
                data:"str="+x,
                success:function(data)
                {
                    $("#text_renamed").val(data);
                }
              });
          }

          // copy to clipboard function
          function copyToClipboard()
          {
            var $temp = $("<input>");
            $("body").append($temp);
            $temp.val($("#query").text()).select();
            document.execCommand("copy");
            $temp.remove();
          }
        </script>



      <!-- Optional JavaScript; choose one of the two! -->
      <!-- Option 1: Bootstrap Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
      <!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
         <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script> -->

   </body>
</html>
