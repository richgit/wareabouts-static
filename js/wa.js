
jQuery.preloadImages = function () {
    for (var i = 0; i < arguments.length; i++) {
        jQuery("<img>").attr("src", arguments[i]);
    }
}
$.preloadImages("/image/loading.gif");


$(document).ready(function () {

//    $("#generate-page-link").click(function () {
//        prompt("Copy to clipboard: Ctrl+C, Enter", "www.wareabouts.com/setcookie.php5?url=" + $(location).attr('href'));
//    });
//    $(".generate-image-link").click(function () {
//        prompt("Copy to clipboard: Ctrl+C, Enter", "www.wareabouts.com/setcookie.php5?url=" +
//            $(location).attr('href').split('#')[0] + "#" +
//            $(this).parent().parent('.imageContainer').attr('id'));
//    });

    // $("#search").autocomplete("/search/autocomplete_backend.php5", {autoFill: true, cacheLength: 10});
    bodyLoad();

});

// remove the registerOverlay call to disable the controlbar
hs.registerOverlay(
    {
        thumbnailId: null,
        overlayId: 'controlbar',
        position: 'top right',
        hideOnMouseOut: true
    }
);


hs.graphicsDir = '/highslide/graphics/';
hs.outlineType = 'rounded-white';

// adds utube graphic to videos and attaches function to log all image clicks
function bodyLoad(pageArea) {

    //alert("bodyLoad, pageArea=" + pageArea);
    $(document).ready(function () {


        if (pageArea == undefined) {
            pageArea = "";
            //$("#splash").fadeOut("slow");
        }
        ;

        $(pageArea + " a img").click(function () {
            $.post("/sitetracker/imageRequest.php5", { image: this.src});
        });

        $(".topWrapper")
            .add(".navigation")
            .add(".breadcrumbs")
            .add(".searchResultOuter")
            .add(".searchResultPostDesc")
            .add(".allPostYear")
            .add(".container-left .innertube")
            .add(".container-right .innertube")
            .find(pageArea + " a[href!='#']").click(function () {
                splash("Loading...");
            });

//$("div:contains('a')").css("color", "blue");

        $(pageArea + " img[src*='ytimg.com']").each(function () {
//            alert(this);
                $(this).after("<img border=\"0\" src=\"/image/utube_tab.gif\"</img>");

            }
        );

    });

}

function splash(text) {
    $("#splash").remove();
    $("#splashContainer").after("<div id=\"splash\"><h2>" + text + "</h2></div>");
    $("#splash").hide();
    $("#splash").slideDown("slow");
}

function openEmailPasswordBox(id) {
    closeEmailPasswordBox();
    $('#nme_' + id).val($.cookie('cookie_name'));
    $('#em_' + id).val($.cookie('cookie_email'));
    $('#comment_' + id).val("");
    $('#emailPasswordBox_' + id).hide();
    $('#emailPasswordBox_' + id).slideDown("slow");
}

function closeEmailPasswordBox() {
    $(".emailPasswordBox").slideUp("slow");
}

function emailPassword(dirName) {
    //alert("emailPassword called, dirName=" + dirName);

    // clear previous error messages
    $(".errorMessage").remove();
    $(".errorBox").removeClass("errorBox");
    var valid = true;

    // validate name
    nameField = document.getElementById('nme_' + dirName);
    if (isEmpty(nameField)) {
        $(nameField).addClass("errorBox");
        valid = false;
        $("#emailPasswordLink_" + dirName).before('<p class=\"errorMessage\">Name is invalid</p>');
    } else {
        commentName = nameField.value;
    }

    // validate comment
    commentField = document.getElementById('comment_' + dirName);
    commentText = commentField.value;

    // validate email
    emailField = document.getElementById('em_' + dirName);
    if (isEmpty(emailField) || !isValidEmail(emailField.value)) {
        $(emailField).addClass("errorBox");
        valid = false;
        $("#emailPasswordLink_" + dirName).before('<p class=\"errorMessage\">Email address is invalid</p>');
    } else {
        commentEmail = emailField.value;
    }

    if (valid) {
        $.cookie('cookie_name', commentName, {path: '/' });
        $.cookie('cookie_email', commentEmail, {path: '/' });
        closeEmailPasswordBox();
        $("#addCommentLink_" + dirName).before('<p></p>');
        //alert(dirName);
        $("#addCommentLink_" + dirName).prev('p').load('/include/emailPasswordRequest.php5?dirName=' + dirName + '&name=' + escape(commentName) + '&email=' + escape(commentEmail) + '&comment=' + escape(commentText));
    }
}

function openAddCommentBox(id) {
    closeAddCommentBox();
    $('#nme_' + id).val($.cookie('cookie_name'));
    $('#em_' + id).val($.cookie('cookie_email'));
    $('#comment_' + id).val("");
    $('#addCommentBox_' + id).hide();
    $('#addCommentBox_' + id).slideDown("slow");
}

function closeAddCommentBox() {
    $(".commentBox").slideUp("slow");
}

function addComment(imagePath, id, fileExt) {
    //alert("addComment called, imagePath=" + imagePath + ", id=" + id);

    // clear previous error messages
    $(".errorMessage").remove();
    $(".errorBox").removeClass("errorBox");
    var valid = true;

    // validate name
    nameField = document.getElementById('nme_' + id);
    if (isEmpty(nameField)) {
        $(nameField).addClass("errorBox");
        valid = false;
        $("#addCommentLink_" + id).before('<p class=\"errorMessage\">Name is invalid</p>');
    } else {
        commentName = nameField.value;
    }

    // validate comment
    commentField = document.getElementById('comment_' + id);
    if (isEmpty(commentField)) {
        $(commentField).addClass("errorBox");
        valid = false;
        $("#addCommentLink_" + id).before('<p class=\"errorMessage\">Comment is invalid</p>');
    } else {
        commentText = commentField.value;
    }

    // validate email
    emailField = document.getElementById('em_' + id);
    if (!isEmpty(emailField) && !isValidEmail(emailField.value)) {
        $(emailField).addClass("errorBox");
        valid = false;
        $("#addCommentLink_" + id).before('<p class=\"errorMessage\">Email address is invalid</p>');
    } else {
        commentEmail = emailField.value;
    }

    if (valid) {
        $.cookie('cookie_name', commentName, {path: '/' });
        $.cookie('cookie_email', commentEmail, {path: '/' });
        closeAddCommentBox();
        $("#addCommentLink_" + id).prev('img').before('<p></p>');
        $("#addCommentLink_" + id).prev('img').prev('p').load('/include/addComment.php5?image=' + imagePath + '&name=' + escape(commentName) + '&fileExt=' + fileExt + '&email=' + escape(commentEmail) + '&comment=' + escape(commentText));
    }
}


// this checks for a period (.) character anywhere after the 3rd character in the
// string. This is very cautious, allowing for one letter domain names e.g. a@b.com;
// and for @ characters anywhere after the first character
function isValidEmail(str) {
    return (str.indexOf(".") > 2) && (str.indexOf("@") > 0);
}

function isEmpty(aTextField) {
    if ((aTextField.value.length == 0) || (aTextField.value == null)) {
        return true;
    } else {
        return false;
    }
}
    


	
