$(document).ready(function(){
    $("#film").click(function(){
       $('.body').load("./page-admin/film.php");
    });

    $("#account").click(function(){
       $('.body').load("./page-admin/account.php");
    });

    $("#cinema").click(function(){
        $('.body').load("./page-admin/cinema.php");
     });

    $("#promotion-admin").click(function(){
        $('.body').load("./page-admin/promotion-info.php");
    });

    $("#drink").click(function(){
        $('.body').load("./page-admin/drink.php");
    });
});

