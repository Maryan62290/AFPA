$(document).ready(function(){
    $("select").change(function(){
       
         
                var s = $('#men option:selected').val();
                var p = $('#men option:selected').val();
                var b = $('#men option:selected').val();
                
                if (s == "Sandwich"){
                    $(".menu").hide();
                    $(".sandwich ").css("display","block")
                 }
                else if(p == "Pizza"){
                    $(".menu").hide();
                    $(".pizza").css("display","block");
                }
                else if(b == "Burger"){    
                    $(".menu").hide();
                    $(".burger").css("display","block");
                 }
            }).change();
            
            $("#btn").on("click", afficher)

            function afficher(){
                
                var nbr = $("input[type='number']").val();
                var swand = $(".sandwich").is(":visible");
                var pizza = $(".pizza").is(":visible");
                var burger = $(".burger").is(":visible");

                    if(swand == true ){
                        
                        var platRadioBtn = [];
                        $.each($("input[name='options']:checked"), function() {
                        platRadioBtn.push($(this).val());
                        console.log("Commande " + nbr + " sandwich au " +  platRadioBtn   );
                        
                    });
                    }
                    else if(pizza == true ){
                        
                        var platPizza = [];
                        $.each($("input[name='option']:checked"), function() {
                        platPizza.push($(this).val());
                        console.log("Commande " + nbr + " Pizza " +  platPizza  );
                        

                    });
                    }
                    else if(burger == true){
                        
                        var platBurger = [];
                        $.each($("input[name='opt']:checked"), function() {
                           platBurger.push($(this).val());
                           console.log("Commande " + nbr + " Burger " +  platBurger  );
                           
                    });
                    }

             }
 });










            
       