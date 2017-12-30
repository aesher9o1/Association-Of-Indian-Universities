function script() {
    var url  ="json/A.json";
    var v;
    $.ajax({
        url: url,

        dataType: 'json',
        success: function (data) {
            v = data;

            v.sort(function(a, b) {
                return a.details> b.details;
            });
            return v;
        },
        error: function(msg){
            console.log(msg.responseText);
        }

    });


}
