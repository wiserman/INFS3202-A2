/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

window.onload = function () {
    var urlParams;
    (window.onload = function () {
        var match,
                pl = /\+/g, // Regex for replacing addition symbol with a space
                search = /([^&=]+)=?([^&]*)/g,
                decode = function (s) {
                    return decodeURIComponent(s.replace(pl, " "));
                },
                query = window.location.search.substring(1);

        urlParams = {};
        while ((match = search.exec(query)) !== null)
            urlParams[decode(match[1])] = decode(match[2]);
    })();
    if (!(typeof urlParams['i'] == 'undefined')) {
        if (urlParams['i'] == 'error') {
            $("#error_message").html("Incorrect email or password.");  
        }        
    }
};

function removeErrorMessage(){
    $("#error_message").html(""); 
}