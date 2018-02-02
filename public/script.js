$(function() {

    function displayMags(id, page) {

        $.ajax({
            url: "http://localhost:8000/ajax/" + id,
            method: "GET",
            data: {
                page : 1
            }
        }).done(function( data ) {

            // Liste des éléments
            var html = '';
            var titleMagasines = '';
            var monthList = [
                'Janvier',
                'Février',
                'Mars',
                'Avril',
                'Mai',
                'Juin',
                'Juillet',
                'Août',
                'Septembre',
                'Octobre',
                'Novembre',
                'Décembre'
            ]

            $.each(data.data, function(index, value){
                titleMagasines = value.titre;
                var date = new Date(value.moisParution.date);
                html += '<div class="col-12 col-lg-4">\n' +
                    '<h6>'+ value.titre +'</h6>\n' +
                    '                            <a href="#">\n' +
                    '                                <div class="magasines">\n' +
                    '                                    <div class="info_mag">\n' +
                    '                                        <span class="numero">n°' + value.numero + '</span>\n' +
                    '                                        <span class="mois-annee">' + monthList[date.getMonth()] + ' ' + date.getFullYear() + '</span>\n' +
                    '                                    </div>\n' +
                    '                                    <img src="' + value.couverture + '" alt="' + value.titre + '">\n' +
                    '                                </div>\n' +
                    '                            </a>\n' +
                    '                        </div>\n' +
                    '                       </div>';

            });
            $('#magasine-liste').html(html);


            // Pagination
            var paginationHtml = '';

            if ( page == 1 && data.pagination.pageTotal > 1 ) {
                paginationHtml +=
                    '<a id="next" href="ajax/' + id + '?page=' + (page + 1) + '">Suivant</a>';
            }
            if ( page > 1 && page < data.pagination.pageTotal ) {

                paginationHtml +=
                    '<a id="previous" href="ajax/' + id + '?page=' + (page - 1) + '">Précédent</a>\n' +
                    '<a id="next" href="ajax/' + id + '?page=' + (page + 1) + '">Suivant</a>';
            }
            if ( page > 1 && page == data.pagination.pageTotal ) {

                paginationHtml +=
                    '<a id="previous" href="ajax/' + id + '?page=' + (page - 1) + '">Précédent</a>';
            }

            $('#pagination').html(paginationHtml)



            if ( $('#select_magasines').val() != '0' ) {
                $('.titre-derniers-numeros h4').html(titleMagasines);
            } else {
                $('.titre-derniers-numeros h4').html('Les derniers magasines parus');
            }

        }).fail(function(data) {
            alert('Une erreur est survenue. Code erreur :' + data);
        });

    }


    // Script pour afficher la barre de recherche
    $(".search").hide();
    $(".fa-search").click(function(){

    $(".search").hide();

    $(".fa-search").on('click', function(){
        $(".search").fadeToggle("slow");
    });

    // Code ajax Librairie pour afficher les magasines au change du 'select'
    $('#select_magasines').on('change', function(e) {
        e.preventDefault();
        var id = $(this).val();

        displayMags(id, 1);
    });

    displayMags(0, 1);



}); // fin de function
  