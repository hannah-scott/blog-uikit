$(document)
    .on("click",".nav-post", function(event){

    // Read in fname and append file type
    _fname = $(this).context.innerHTML;
    console.log(_fname);
    
    // If a file was given, go get it
    if (_fname.length > 0) {
        var data = {
            fname: _fname,
        };

        $.ajax({
            type: 'GET',
            url: '/ajax/change-blog.php',
            data: data,
            dataType: 'json',
            async: true,
        })
        .done(function ajaxDone(data) {
            // Call done and refresh browser
            console.log("done");
            window.location="/";
        })
        .fail(function ajaxFailed(e) {
            // This failed 
            console.log(e);
        })
        .always(function ajaxAlwaysDoThis(data) {
            // Always do
            console.log('Always');
        })
    } else {
        // Quit out
    }
})
