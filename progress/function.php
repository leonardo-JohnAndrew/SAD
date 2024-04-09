<script src = "jquery.js"></script>
    <script>
        $('document').ready(function(){
        //let i = 0;
           $(".btn_add").click(function(e){
            e.preventDefault();
            $("#register").append(`<div class="row align-items"><div class="col input-group input-group-sm mb-3">
              <input type="text" name= "firstname[]"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="none"> 
            </div>
            <div class="col input-group input-group-sm mb-3">
            <input type="text" name= "middle[]"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="none"> 
            </div>
            <div class="col input-group input-group-sm mb-3">
            <input type="text" name= "lastname[]"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="none"> 
            </div>
            <div class="col input-group input-group-sm mb-3">
            <input type="text" name= "username[]"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="none"> 
            </div>
            <div class="col input-group input-group-sm mb-3">
            <input type="text" name= "email[]"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="none"> 
            </div>
            <div class="col input-group input-group-sm mb-3">
            <input type="text" name= "id[]"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="none"> 
            </div>
            <div class="col input-group input-group-sm mb-3">
            <input type="text" name= "password[]"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="none"> 
            </div>
            <div class="col input-group input-group-sm mb-3">
            <select  class="form-select form-select-sm" aria-label=".form-select-sm example" name="type[]" value="none">
               <option selected>Type:</option>
               <option value="Student">Student</option>
               <option value="Faculty">Faculty</option>
               <option value="Admin">Admin</option>
             </select>
            </div>
            </div>`);       

           });

            $(document).on('click','.clear', function(e){
              e.preventDefault();
              window.location.href = 'createaccounts.php';
            });
        });

    </script>
