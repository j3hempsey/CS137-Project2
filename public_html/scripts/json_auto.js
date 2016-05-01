//Below is the autocomplete for zip codes.
var QUERY_LEN_THRESH = 1;
$(document).ready(function() {
    $("#zip-code").keyup(function() {
        var query_val = $("#zip-code").val();
        if(query_val.length >= QUERY_LEN_THRESH) {
            $.get("../php/auto-complete-zip.php", { query_val : query_val } )
                .done(function(data) {
                    var results = $.parseJSON(data);
                    console.log("RESULTS:");
                    console.log(results);
                    $(results).each(function(key, value) {
                        $('#zip-results').append('<option value=\" + value + \">');
                    });
                });
        }
    });
});
