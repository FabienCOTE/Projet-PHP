//Exécuter JQuery après le chargement de la page HTML
$(document).ready(function () {
    $('.cardy').hover(
            function () {
                $(this).children('p').css('display', 'none');
            },
            function () {
                $(this).children('p').css('display', 'block');
            }
    );
});
