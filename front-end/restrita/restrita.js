$(document).ready(function () {

    $("#buyComum").click(function (e) {
        e.preventDefault();
        $.ajax({
            type: "GET",
            url: "http://localhost/projetoa/back-end/pokemon.php",
            data: {
                'raridade': "comum"
            },
            // dataType: "json",
            success: function (response) {
                alert(response);

                $("#pokcomun").html(
                    `
                    <label>`+ response.nome + `</label>
                    `
                );
            }
        });
    });

    $("#btnLoja").click(function (e){
        e.preventDefault();
        if($(".loja").css("visibility") == "visible"){
            $(".loja").css("visibility", "hidden")
        }else{
            $(".loja").css("visibility", "visible")
        }  
    });
    
    $("#btnEsq").click(function (e) { 
        e.preventDefault();
        if($("#menu1").css("display") == "block"){
            $("#menu1").css("display", "none");
            $("#menu5").css("display", "block");
            $("#pc1").css("display", "none");
            $("#pc5").css("display", "block");
        }else if($("#menu5").css("display") == "block"){
            $("#menu5").css("display", "none");
            $("#menu4").css("display", "block");
            $("#pc5").css("display", "none");
        $("#pc4").css("display", "block");
        }else if($("#menu4").css("display") == "block"){
            $("#menu4").css("display", "none");
            $("#menu3").css("display", "block");
            $("#pc4").css("display", "none");
            $("#pc3").css("display", "block");
        }else if($("#menu3").css("display") == "block"){
            $("#menu3").css("display", "none");
            $("#menu2").css("display", "block");
            $("#pc3").css("display", "none");
            $("#pc2").css("display", "block");
        }else if($("#menu2").css("display") == "block"){
            $("#menu2").css("display", "none");
            $("#menu1").css("display", "block");
            $("#pc2").css("display", "none");
            $("#pc1").css("display", "block");
        }
    });
    
    $("#btnDir").click(function (e) { 
    e.preventDefault();
    if($("#menu1").css("display") == "block"){
        $("#menu1").css("display", "none");
        $("#menu2").css("display", "block");
        $("#pc1").css("display", "none");
        $("#pc2").css("display", "block");
    }else if($("#menu2").css("display") == "block"){
        $("#menu2").css("display", "none");
        $("#menu3").css("display", "block");
        $("#pc2").css("display", "none");
        $("#pc3").css("display", "block");
    }else if($("#menu3").css("display") == "block"){
        $("#menu3").css("display", "none");
        $("#menu4").css("display", "block");
        $("#pc3").css("display", "none");
        $("#pc4").css("display", "block");
    }else if($("#menu4").css("display") == "block"){
        $("#menu4").css("display", "none");
        $("#menu5").css("display", "block");
        $("#pc4").css("display", "none");
        $("#pc5").css("display", "block");
    }else if($("#menu5").css("display") == "block"){
        $("#menu5").css("display", "none");
        $("#menu1").css("display", "block");
        $("#pc5").css("display", "none");
        $("#pc1").css("display", "block");
    }
    });
    
});