<script src = "jquery.js"></script>
    <script>
        $('document').ready(function(){
        let i = 0;
           $(".btn_add").click(function(e){
            e.preventDefault();
            if(i <5){
            $("#register").append(`<div class="row align-items mb-3"><div class="col">
              <input type="text" name= "firstname[]"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"> 
            </div>
            <div class="col">
            <input type="text" name= "middle[]"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"> 
            </div>
            <div class="col">
            <input type="text" name= "lastname[]"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"> 
            </div>
            <div class="col">
            <input type="text" name= "username[]"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"> 
            </div>
            <div class="col">
            <input type="text" name= "email[]"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"> 
            </div>
            <div class="col">
            <input type="text" name= "id[]"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"> 
            </div>
            <div class="col">
            <input type="text" name= "password[]"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"> 
            </div>
            <div class="col">
            <select  class="form-select form-select-sm" aria-label=".form-select-sm example" name="type[]">
               <option selected>Select Type:</option>
               <option value="Student">Student</option>
               <option value="Faculty">Faculty</option>
               <option value="Admin">Admin</option>
             </select>
            </div>
            </div>`);       
            i++;
            }

           });

            $(document).on('click','.clear', function(e){
              e.preventDefault();
              window.location.href = 'createaccount.php';
            });
        });

    </script>
