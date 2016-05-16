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
        if (urlParams['i'] == 'email_exists') {
            $("#error_message").html("There is already an account using that email.");           
        }
        if (urlParams['i'] == 'error') {
            $("#error_message").html("Something went wrong, please try again.");  
        }        
    }
};
function removeErrorMessage(){
    $("#error_message").html(""); 
}

function isAValidEmailAddress(emailAddress) {
    return /(.+)@(.+){2,}\.(.+){2,}/.test(emailAddress);
}
var app = angular.module('myApp', []);
app.controller('myCtrl', function ($scope) {
    $scope.isDisabled = true;
    $scope.checkValid = function () {
        var email = angular.element(document.querySelector('#email'));
        var pass1 = angular.element(document.querySelector('#pass1'));
        var pass2 = angular.element(document.querySelector('#pass2'));
        if (email.hasClass('has-success') && pass1.hasClass('has-success') && pass2.hasClass('has-success')) {
            $scope.isDisabled = false;
        } else {
            $scope.isDisabled = true;
        }
    };
    $scope.emailCheck = function () {
        var email = angular.element(document.querySelector('#email'));
        var email_glyph = angular.element(document.querySelector('#email_glyph'));
        var email_para = angular.element(document.querySelector('#email_para'));
        if (isAValidEmailAddress($scope.myEmail) == 0) {
            email.removeClass('has-success');
            email_glyph.removeClass('glyphicon-ok');
            email.addClass('has-error');
            email_glyph.addClass('glyphicon-remove');
            email_para.removeClass('ng-hide');
        }
        if (isAValidEmailAddress($scope.myEmail) == 1) {
            email.removeClass('has-error');
            email_glyph.removeClass('glyphicon-remove');
            email_para.addClass('ng-hide');
            if ($scope.myEmail != null && $scope.myEmail != "") {
                email.addClass('has-success');
                email_glyph.addClass('glyphicon-ok');
            }
        }
        if ($scope.myEmail != null && $scope.myEmail == "") {
            email.removeClass('has-error');
            email_glyph.removeClass('glyphicon-remove');
            email_para.addClass('ng-hide');
            email.removeClass('has-success');
            email_glyph.removeClass('glyphicon-ok');
        }
        $scope.checkValid();
    };
    $scope.passCheck = function () {
        //pass1
        var pass1 = angular.element(document.querySelector('#pass1'));
        var pass1_glyph = angular.element(document.querySelector('#pass1_glyph'));
        var pass1_para = angular.element(document.querySelector('#pass1_para'));
        //pass2
        var pass2 = angular.element(document.querySelector('#pass2'));
        var pass2_glyph = angular.element(document.querySelector('#pass2_glyph'));
        var pass2_para = angular.element(document.querySelector('#pass2_para'));
        if ($scope.pass1 != null) {
            if ($scope.pass1.length < 8 && $scope.pass1 != "") {
                pass1.removeClass('has-success');
                pass1_glyph.removeClass('glyphicon-ok');
                pass1.addClass('has-error');
                pass1_glyph.addClass('glyphicon-remove');
                pass1_para.removeClass('ng-hide');
            }
            if ($scope.pass1.length >= 8) {
                pass1.removeClass('has-error');
                pass1_glyph.removeClass('glyphicon-remove');
                pass1.addClass('has-success');
                pass1_glyph.addClass('glyphicon-ok');
                pass1_para.addClass('ng-hide');
            }
            if ($scope.pass1 == "") {
                pass1.removeClass('has-error');
                pass1_glyph.removeClass('glyphicon-remove');
                pass1.removeClass('has-success');
                pass1_glyph.removeClass('glyphicon-ok');
                pass1_para.addClass('ng-hide');
            }
        }
        if ($scope.pass2 != null && $scope.pass1 != null && $scope.pass1 != "") {
            if ($scope.pass2 != "") {
                if ($scope.pass1 != $scope.pass2) {
                    pass2.removeClass('has-success');
                    pass2_glyph.removeClass('glyphicon-ok');
                    pass2.addClass('has-error');
                    pass2_glyph.addClass('glyphicon-error');
                    pass2_para.removeClass('ng-hide');
                }
                if ($scope.pass1 == $scope.pass2) {
                    pass2.removeClass('has-error');
                    pass2_glyph.removeClass('glyphicon-error');
                    pass2_para.addClass('ng-hide');
                    pass2.addClass('has-success');
                    pass2_glyph.addClass('glyphicon-ok');
                }
            }
        }
        if ($scope.pass2 == "") {
            pass2.removeClass('has-success');
            pass2_glyph.removeClass('glyphicon-ok');
            pass2.removeClass('has-error');
            pass2_glyph.removeClass('glyphicon-error');
            pass2_para.addClass('ng-hide');
        }
        $scope.checkValid();
    };
});

