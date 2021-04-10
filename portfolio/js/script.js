$(document).ready(function(){
    $("select").change(function(){
            
                var s = $('#men option:selected').val();
                var p = $('#men option:selected').val();
                var b = $('#men option:selected').val();

               

                if (s == "a"){
                    $(".sandwich ").css("display","block")(function(){
                    $(".menu").hide("pizza", "burger");
                        });
                    
                            
                          //  var sm = $("input[name='options']:checked").val();
                           // var nbr = $("input[type='number']").val();
                }
                else if(p == "s"){
                    $(".menu").hide("sandwich", "burger");
                    $(".pizza").css("display","block");
                   
                    $("#btn").click(function(){
                        $(".pizza").click();
                        var smUn = $("input[type='checkbox']:checked").val();
                        var nbrUn = $("input[type='number']").val();
                        
                        alert("votre menu est : " + nbrUn + " pizza  " + smUn + " " );
                    });
              
                }

                else if(b == "d"){
                    $(".menu").hide("pizza","sandwich");
                    $(".burger ").css("display","block");
                }
                $("#btn").on("click", afficher);
                function afficher(){
                    alert("votre menu est : " + nbr + " sandwitch avec " + sm + " " );
                } 
      
    }).change();
});
 



