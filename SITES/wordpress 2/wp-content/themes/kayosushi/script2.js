$(function () {
    var myIndex = 0; //imagem que esta no momento a aparecer no "carousel"
    
    if ($(".img").length > 0){ //se existem .img's para o slideshow, executar o slideshow caso contrario nao chamar nada
        carousel();
    }
    
    function carousel() {
        var i;
        var x = document.getElementsByClassName("img");
        for (i = 0; i < x.length; i++) { //esconder todas as imagens
            x[i].style.display = "none";
        }
        myIndex++; //aumentar a imagem em que vamos
        if (myIndex > x.length) { //se aumentar passar o numero de imagens em que se vai, voltar a primeira
            myIndex = 1;
        }
        x[myIndex - 1].style.display = "block"; //mostrar a imagem em que se vai
        setTimeout(carousel, 3000); //definir um temporizador para voltar a chamar este codigo daqui a 7000 milisegundos(7 segundos)
    }
    
    
    $(document).mousemove(function (e) {
        var X = e.pageX;
        var Y = e.pageY;
        $('col').css('background', 'radial-gradient(circle at ' + X + 'px ' + Y + 'px, #211003, #000)');
    });
    
    //dentro deste bloco só executa quando a página está totalmente carregada
    $(".caixamenus.especiais").click(function () {
        $(".pop.especiais").show();
        $(".fundopop.especiais").show();
    });
    
    $(".caixamenus.almoco").click(function () {
        $(".pop.almoco").show();
        $(".fundopop.almoco").show();
    });
    
    $(".caixamenus.carta").click(function () {
        $(".pop.carta").show();
        $(".fundopop.carta").show();
    });
    
    
    $(".fecharpop").click(function () {
        $(".pop").hide();
        $(".fundopop").hide();
    });

    $("#clickme").click(function () {
        $("#book").slideDown("slow", function () {
            // Animation complete.
        });
    });
    
    var selectedClass = "";
    $(".toolbar>.btn").click(function () {
        selectedClass = $(this).attr("data-rel");
        $("#galeria").fadeTo(100, 0.1);
        $("#galeria div").not("." + selectedClass).fadeOut().removeClass('size');
        setTimeout(function () {
            $("." + selectedClass).fadeIn().addClass('size');
            $("#galeria").fadeTo(300, 1);
        }, 300);
    });
 
});

    
