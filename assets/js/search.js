function search(search_value){
    $.ajax({
        url: '/event-driven-programing/model/searchEngine.php',
        type: 'POST',
        data: { 'search' : search_value },
        success: function(response){
            $('#results').html(response);
        }
    })
    }