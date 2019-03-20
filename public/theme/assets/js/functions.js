$(document).ready(function () {
    // Add your code here

});

$(document).on("click", "a:not([data-nd])", function () {
    var linkUrl = $(this).attr('href');
    loadPage(linkUrl, 0, null);
    return false;
});

$(window).bind('popstate', function () {
    var linkUrl = location.href;
    loadPage(linkUrl, 0, null);
});

/**
 * Send a GET or POST request dynamically
 *
 * @param   argUrl      Contains the page URL
 * @param   argParams   String or serialized params to be passed to the request
 * @param   argType     Decides the type of the request: 1 for POST; 0 for GET;
 * @return  string
 */
function loadPage(argUrl, argType, argParams) {
    loadingBar(1);

    if (argType == 1) {
        argType = "POST";
    } else {
        argType = "GET";

        // Store the url to the last page accessed
        if (argUrl != window.location) {
            window.history.pushState({path: argUrl}, '', argUrl);
        }
    }

    // Request the page
    $.ajax({
        url: argUrl,
        type: argType,
        data: argParams,
        success: function (data) {
            // Parse the output
            var result = jQuery.parseJSON(data);

            // Scroll the document at the top of the page
            $(document).scrollTop(0);

            // Update the document title
            document.title = result.title;

            // Update the document
            $('#header').replaceWith(result.header);
            $('#content').replaceWith(result.content);
            $('#footer').replaceWith(result.footer);

            // Reload functions
            reload();

            loadingBar(0);
        }
    });
}

/**
 * The loading bar animation
 *
 * @param   type    The type of animation, 1 for start, 0 for stop
 */
function loadingBar(type) {
    if (type) {
        $("#loading-bar").show();
        $("#loading-bar").width((50 + Math.random() * 30) + "%");
    } else {
        $("#loading-bar").width("100%").delay(50).fadeOut(300, function () {
            $(this).width("0");
        });
    }
}

/**
 * This function gets called every time a dynamic request is made
 */
function reload() {
}