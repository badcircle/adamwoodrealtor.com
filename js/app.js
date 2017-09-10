$(document).foundation();

$(document).ready(function() {
    var pageTitle = $("body").attr('class').substr(5);
    var activeLink = 'nav_'+pageTitle;
    $('.navigation').find("."+activeLink+" a").addClass("active");
});
