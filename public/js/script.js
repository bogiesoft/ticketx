        $(document).ready(function () {
       
            $("img").addClass("img-responsive");
            $('#summernote').summernote({
              height: 100,                 // set editor height
              minHeight: null,             // set minimum height of editor
              maxHeight: null,             // set maximum height of editor
              focus: true                  // set focus to editable area after initializing summernote
            });   
         
            window.setTimeout(function() {
                $(".alert").fadeTo(1500, 0).slideUp(500, function(){
                    $(this).remove(); 
                });
            }, 2000);
         
        });

        $(".delete").on("submit", function(){
            return confirm("Do you want to delete this item?");
        }); 
        
        $(".deleteuser").on("submit", function(){
            return confirm("WARNING: If you delete this user, all tickets and related comments to this user will be deleted. Are you sure?");
        });         

        $(".deletetickets").on("submit", function(){
            return confirm("WARNING: If you delete this tickets, all comments to this ticket will be deleted. Are you sure?");
        });         