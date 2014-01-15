function search_click(){
    console.log('get click');
    var search = $('#search').val();
    console.log(search);
    $.ajax({
        url: "search.php",
        type: "POST",
        data: {search: search},
        dataType: "json",
        success: function(response) {
            console.log(response);
        },
        error: function() {
            alert('failed');
        }
    })
}