
$(function () {
	$("ul#menu li a").click(function () {
		chargerContenu($(this).data("target"));
	});

	setTimeout(function() {
		if(window.location.hash != "") {
			chargerContenu(window.location.hash.substr(1));
		}
		else {
			chargerContenu($("ul#menu li a").data("target"));
		}
	}, 100);

	$(window).resize(function() {
		$(".conteneurPage").last().css({
			left : $(window).width()/2-$(".conteneurPage").last().width()/2
		});
	});
});

function chargerContenu(idContenu)
{
	var autresConteneurs = $(".conteneurPage");
	if(autresConteneurs.last().data("contenu")!=idContenu)
	{
		var conteneur = $("#modeleConteneurPage")
						.clone()
						.attr({
							"id" : "",
							"data-contenu" : idContenu,
							"class" : "conteneurPage"
						});

		conteneur.find('.contenuPage').html(
			$("#contenu-" + idContenu).html()
		);

		conteneur.find('.titrePage').html(
			$("#contenu-" + idContenu).data('titre')
		)

		conteneur.css({
			position:"absolute",
			left : -1500,
			top : 130
		});

		$("#listeConteneurs").append(conteneur);

		(function (conteneur, autresConteneurs) {
			conteneur.animate({
				left : $(window).width()/2-conteneur.width()/2
			}, 400, "swing");

			autresConteneurs.animate({
				left : -1500,
			}, 400, "swing", function () { $(this).remove(); });
		} (conteneur, autresConteneurs))
	}

}

