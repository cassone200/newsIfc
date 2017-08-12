var dados = $.getJSON("js/dados.json",function(data){ return data;}, "json");

function getNoticia(codigo) {

    var html = '';

    var total_noticia = dados.length;

    if (codigo > 0) {

        var array_categoria = $.grep(dados, function (v) {
            return v.categoria === codigo;
        });

        for (var i = 0; i < array_categoria.length; i++) {

            html += '<div class="col-xs-4"><a onclick="openNoticia(' + array_categoria[i].codigo + ')"  ><img class="img_noticia" src="' + array_categoria[i].img + '"> <label class="titulo">' + array_categoria[i].titulo + '</label><label class="titulo">' + array_categoria[i].sub_titulo + '</label></a></div>';

        }

    }
    else {

        for (var i = 0; i < dados.length; i++) {

            html += '<div class="col-xs-4"><a onclick="openNoticia(' + dados[i].codigo + ')"  ><img class="img_noticia" src="' + dados[i].img + '"><label class="titulo">' + dados[i].titulo + '</label><label class="titulo">' + dados[i].sub_titulo + '</label></a></div>';

        }
    }

    $("#conteudo").html(html);

}

function openNoticia(codigo) {
    console.log(codigo);


    $("#conteudo").html("<h2>" + dados[codigo].titulo + "</h2>");
    $("#conteudo").append("<h4>" + dados[codigo].sub_titulo + "</h4>");
    $("#conteudo").append("<p>" + dados[codigo].noticia + "</p>");
    $("#conteudo").append("<blockquote>" + dados[codigo].autor + "</blockquote>");


    //$("#conteudo").html(html);

}