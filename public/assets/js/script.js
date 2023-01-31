(function ($) {
    "use strict";
    var $wrapper = $(".main-wrapper");
    var $pageWrapper = $(".page-wrapper");
    var $slimScrolls = $(".slimscroll");
    var Sidemenu = function () {
        this.$menuItem = $("#sidebar-menu a");
    };
    function init() {
        var $this = Sidemenu;
        $("#sidebar-menu a").on("click", function (e) {
            if ($(this).parent().hasClass("submenu")) {
                e.preventDefault();
            }
            if (!$(this).hasClass("subdrop")) {
                $("ul", $(this).parents("ul:first")).slideUp(350);
                $("a", $(this).parents("ul:first")).removeClass("subdrop");
                $(this).next("ul").slideDown(350);
                $(this).addClass("subdrop");
            } else if ($(this).hasClass("subdrop")) {
                $(this).removeClass("subdrop");
                $(this).next("ul").slideUp(350);
            }
        });
        $("#sidebar-menu ul li.submenu a.active")
            .parents("li:last")
            .children("a:first")
            .addClass("active")
            .trigger("click");
    }
    init();
    $("body").append('<div class="sidebar-overlay"></div>');
    $(document).on("click", "#mobile_btn", function () {
        $wrapper.toggleClass("slide-nav");
        $(".sidebar-overlay").toggleClass("opened");
        $("html").addClass("menu-opened");
        return false;
    });
    $(".sidebar-overlay").on("click", function () {
        $wrapper.removeClass("slide-nav");
        $(".sidebar-overlay").removeClass("opened");
        $("html").removeClass("menu-opened");
    });
    if ($(".page-wrapper").length > 0) {
        var height = $(window).height();
        $(".page-wrapper").css("min-height", height);
    }
    $(window).resize(function () {
        if ($(".page-wrapper").length > 0) {
            var height = $(window).height();
            $(".page-wrapper").css("min-height", height);
        }
    });
    if ($(".select").length > 0) {
        $(".select").select2({ minimumResultsForSearch: -1, width: "100%" });
    }
    if ($(".datetimepicker").length > 0) {
        $(".datetimepicker").datetimepicker({
            format: "DD/MM/YYYY",
            icons: {
                up: "fa fa-angle-up",
                down: "fa fa-angle-down",
                next: "fa fa-angle-right",
                previous: "fa fa-angle-left",
            },
        });
        $(".datetimepicker")
            .on("dp.show", function () {
                $(this)
                    .closest(".table-responsive")
                    .removeClass("table-responsive")
                    .addClass("temp");
            })
            .on("dp.hide", function () {
                $(this)
                    .closest(".temp")
                    .addClass("table-responsive")
                    .removeClass("temp");
            });
    }
    if ($('[data-toggle="tooltip"]').length > 0) {
        $('[data-toggle="tooltip"]').tooltip();
    }
    if ($(".datatable").length > 0) {
        $(".datatable").DataTable({ bFilter: false });
    }
    if ($(".clickable-row").length > 0) {
        $(document).on("click", ".clickable-row", function () {
            window.location = $(this).data("href");
        });
    }
    $(document).on("click", "#check_all", function () {
        $(".checkmail").click();
        return false;
    });
    if ($(".checkmail").length > 0) {
        $(".checkmail").each(function () {
            $(this).on("click", function () {
                if ($(this).closest("tr").hasClass("checked")) {
                    $(this).closest("tr").removeClass("checked");
                } else {
                    $(this).closest("tr").addClass("checked");
                }
            });
        });
    }
    $(document).on("click", ".mail-important", function () {
        $(this).find("i.fa").toggleClass("fa-star").toggleClass("fa-star-o");
    });
    if ($(".summernote").length > 0) {
        $(".summernote").summernote({
            height: 200,
            minHeight: null,
            maxHeight: null,
            focus: false,
        });
    }
    if ($(".proimage-thumb li a").length > 0) {
        var full_image = $(this).attr("href");
        $(".proimage-thumb li a").click(function () {
            full_image = $(this).attr("href");
            $(".pro-image img").attr("src", full_image);
            $(".pro-image img").parent().attr("href", full_image);
            return false;
        });
    }
    if ($("#pro_popup").length > 0) {
        $("#pro_popup").lightGallery({ thumbnail: true, selector: "a" });
    }
    if ($slimScrolls.length > 0) {
        $slimScrolls.slimScroll({
            height: "auto",
            width: "100%",
            position: "right",
            size: "7px",
            color: "#ccc",
            allowPageScroll: false,
            wheelStep: 10,
            touchScrollStep: 100,
        });
        var wHeight = $(window).height() - 60;
        $slimScrolls.height(wHeight);
        $(".sidebar .slimScrollDiv").height(wHeight);
        $(window).resize(function () {
            var rHeight = $(window).height() - 60;
            $slimScrolls.height(rHeight);
            $(".sidebar .slimScrollDiv").height(rHeight);
        });
    }
    $(document).on("click", "#toggle_btn", function () {
        if ($("body").hasClass("mini-sidebar")) {
            $("body").removeClass("mini-sidebar");
            $(".subdrop + ul").slideDown();
        } else {
            $("body").addClass("mini-sidebar");
            $(".subdrop + ul").slideUp();
        }
        setTimeout(function () {
            mA.redraw();
            mL.redraw();
        }, 300);
        return false;
    });
    $(document).on("mouseover", function (e) {
        e.stopPropagation();
        if (
            $("body").hasClass("mini-sidebar") &&
            $("#toggle_btn").is(":visible")
        ) {
            var targ = $(e.target).closest(".sidebar").length;
            if (targ) {
                $("body").addClass("expand-menu");
                $(".subdrop + ul").slideDown();
            } else {
                $("body").removeClass("expand-menu");
                $(".subdrop + ul").slideUp();
            }
            return false;
        }
    });

    $(document).ready(function(){
        $("#sub_catogory2").change(function(){
            if($(this).val() == "2"){
                $("#sub_category_type12").hide();
                $("#sub_category_type11").hide();
                $("#sub_category_type10").hide();
                $("#sub_category_type9").hide();
                $("#sub_category_type8").hide();
                $("#sub_category_type7").hide();
                $("#sub_category_type6").hide();
                $("#sub_category_type5").hide();
                $("#sub_category_type4").hide();
                $("#sub_category_type3").hide();
                $("#sub_category_type2").hide();
                $("#sub_category_type").show().is(":selected");
            }
            else if($(this).val() == "3" ){
                $("#sub_category_type12").hide();
                $("#sub_category_type11").hide();
                $("#sub_category_type10").hide();
                $("#sub_category_type9").hide();
                $("#sub_category_type8").hide();
                $("#sub_category_type7").hide();
                $("#sub_category_type6").hide();
                $("#sub_category_type5").hide();
                $("#sub_category_type4").hide();
                $("#sub_category_type3").hide();
                $("#sub_category_type2").show();
                $("#sub_category_type").hide();
            }
            else if($(this).val() == "4" ){
                $("#sub_category_type12").hide();
                $("#sub_category_type11").hide();
                $("#sub_category_type10").hide();
                $("#sub_category_type9").hide();
                $("#sub_category_type8").hide();
                $("#sub_category_type7").hide();
                $("#sub_category_type6").hide();
                $("#sub_category_type5").hide();
                $("#sub_category_type4").hide();
                $("#sub_category_type3").show();
                $("#sub_category_type2").hide();
                $("#sub_category_type").hide();
            }
            else if($(this).val() == "5" ){
                $("#sub_category_type12").hide();
                $("#sub_category_type11").hide();
                $("#sub_category_type10").hide();
                $("#sub_category_type9").hide();
                $("#sub_category_type8").hide();
                $("#sub_category_type7").hide();
                $("#sub_category_type6").hide();
                $("#sub_category_type5").hide();
                $("#sub_category_type4").show();
                $("#sub_category_type3").hide();
                $("#sub_category_type2").hide();
                $("#sub_category_type").hide();
            }
            else if($(this).val() == "6" ){
                $("#sub_category_type12").hide();
                $("#sub_category_type11").hide();
                $("#sub_category_type10").hide();
                $("#sub_category_type9").hide();
                $("#sub_category_type8").hide();
                $("#sub_category_type7").hide();
                $("#sub_category_type6").hide();
                $("#sub_category_type5").show();
                $("#sub_category_type4").hide();
                $("#sub_category_type3").hide();
                $("#sub_category_type2").hide();
                $("#sub_category_type").hide();
            }
            else if($(this).val() == "7" ){
                $("#sub_category_type12").hide();
                $("#sub_category_type11").hide();
                $("#sub_category_type10").hide();
                $("#sub_category_type9").hide();
                $("#sub_category_type8").hide();
                $("#sub_category_type7").hide();
                $("#sub_category_type6").show();
                $("#sub_category_type5").hide();
                $("#sub_category_type4").hide();
                $("#sub_category_type3").hide();
                $("#sub_category_type2").hide();
                $("#sub_category_type").hide();
            }
            else if($(this).val() == "8" ){
                $("#sub_category_type12").hide();
                $("#sub_category_type11").hide();
                $("#sub_category_type10").hide();
                $("#sub_category_type9").hide();
                $("#sub_category_type8").hide();
                $("#sub_category_type7").show();
                $("#sub_category_type6").hide();
                $("#sub_category_type5").hide();
                $("#sub_category_type4").hide();
                $("#sub_category_type3").hide();
                $("#sub_category_type2").hide();
                $("#sub_category_type").hide();
            }
            else if($(this).val() == "9" ){
                $("#sub_category_type12").hide();
                $("#sub_category_type11").hide();
                $("#sub_category_type10").hide();
                $("#sub_category_type9").hide();
                $("#sub_category_type8").show();
                $("#sub_category_type7").hide();
                $("#sub_category_type6").hide();
                $("#sub_category_type5").hide();
                $("#sub_category_type4").hide();
                $("#sub_category_type3").hide();
                $("#sub_category_type2").hide();
                $("#sub_category_type").hide();
            }
            else if($(this).val() == "10" ){
                $("#sub_category_type12").hide();
                $("#sub_category_type11").hide();
                $("#sub_category_type10").hide();
                $("#sub_category_type9").show();
                $("#sub_category_type8").hide();
                $("#sub_category_type7").hide();
                $("#sub_category_type6").hide();
                $("#sub_category_type5").hide();
                $("#sub_category_type4").hide();
                $("#sub_category_type3").hide();
                $("#sub_category_type2").hide();
                $("#sub_category_type").hide();
            }
            else if($(this).val() == "11" ){
                $("#sub_category_type12").hide();
                $("#sub_category_type11").hide();
                $("#sub_category_type10").show();
                $("#sub_category_type9").hide();
                $("#sub_category_type8").hide();
                $("#sub_category_type7").hide();
                $("#sub_category_type6").hide();
                $("#sub_category_type5").hide();
                $("#sub_category_type4").hide();
                $("#sub_category_type3").hide();
                $("#sub_category_type2").hide();
                $("#sub_category_type").hide();
            }
            else if($(this).val() == "12" ){
                $("#sub_category_type12").hide();
                $("#sub_category_type11").show();
                $("#sub_category_type10").hide();
                $("#sub_category_type9").hide();
                $("#sub_category_type8").hide();
                $("#sub_category_type7").hide();
                $("#sub_category_type6").hide();
                $("#sub_category_type5").hide();
                $("#sub_category_type4").hide();
                $("#sub_category_type3").hide();
                $("#sub_category_type2").hide();
                $("#sub_category_type").hide();
            }
            else{
                $("#sub_catogory12").hide();
                $("#sub_catogory11").hide();
                $("#sub_catogory10").hide();
                $("#sub_catogory9").hide();
                $("#sub_catogory8").hide();
                $("#sub_catogory7").hide();
                $("#sub_catogory6").hide();
                $("#sub_catogory5").hide();
                $("#sub_catogory4").hide();
                $("#sub_catogory3").hide();
                $("#sub_catogory2").hide();
                $("#sub_catogory").hide();
            }

        });
    });
    $(document).ready(function(){
        $("#category").change(function(){
            if($(this).val() == "1" ){
                $("#sub_catogory12").hide();
                $("#sub_catogory11").hide();
                $("#sub_catogory10").hide();
                $("#sub_catogory9").hide();
                $("#sub_catogory8").hide();
                $("#sub_catogory7").hide();
                $("#sub_catogory6").hide();
                $("#sub_catogory5").hide();
                $("#sub_catogory4").hide();
                $("#sub_catogory3").hide();
                $("#sub_catogory2").hide();
                $("#sub_catogory").show();
            }else if($(this).val() == "2" ){
                $("#sub_catogory12").hide();
                $("#sub_catogory11").hide();
                $("#sub_catogory10").hide();
                $("#sub_catogory9").hide();
                $("#sub_catogory8").hide();
                $("#sub_catogory7").hide();
                $("#sub_catogory6").hide();
                $("#sub_catogory5").hide();
                $("#sub_catogory4").hide();
                $("#sub_catogory3").hide();
                $("#sub_catogory2").show();
                $("#sub_catogory").show();
            }
            else if($(this).val() == "3" ){
                $("#sub_catogory12").hide();
                $("#sub_catogory11").hide();
                $("#sub_catogory10").hide();
                $("#sub_catogory9").hide();
                $("#sub_catogory8").hide();
                $("#sub_catogory7").hide();
                $("#sub_catogory6").hide();
                $("#sub_catogory5").hide();
                $("#sub_catogory4").hide();
                $("#sub_catogory3").show();
                $("#sub_catogory2").hide();
                $("#sub_catogory").show();
            }
            else if($(this).val() == "4" ){
                $("#sub_catogory12").hide();
                $("#sub_catogory11").hide();
                $("#sub_catogory10").hide();
                $("#sub_catogory9").hide();
                $("#sub_catogory8").hide();
                $("#sub_catogory7").hide();
                $("#sub_catogory6").hide();
                $("#sub_catogory5").hide();
                $("#sub_catogory4").show();
                $("#sub_catogory3").hide();
                $("#sub_catogory2").hide();
                $("#sub_catogory").show();
            }
            else if($(this).val() == "5" ){
                $("#sub_catogory12").hide();
                $("#sub_catogory11").hide();
                $("#sub_catogory10").hide();
                $("#sub_catogory9").hide();
                $("#sub_catogory8").hide();
                $("#sub_catogory7").hide();
                $("#sub_catogory6").hide();
                $("#sub_catogory5").show();
                $("#sub_catogory4").hide();
                $("#sub_catogory3").hide();
                $("#sub_catogory2").hide();
                $("#sub_catogory").show();
            }
            else if($(this).val() == "6" ){
                $("#sub_catogory12").hide();
                $("#sub_catogory11").hide();
                $("#sub_catogory10").hide();
                $("#sub_catogory9").hide();
                $("#sub_catogory8").hide();
                $("#sub_catogory7").hide();
                $("#sub_catogory6").show();
                $("#sub_catogory5").hide();
                $("#sub_catogory4").hide();
                $("#sub_catogory3").hide();
                $("#sub_catogory2").hide();
                $("#sub_catogory").show();
            }
            else if($(this).val() == "7" ){
                $("#sub_catogory12").hide();
                $("#sub_catogory11").hide();
                $("#sub_catogory10").hide();
                $("#sub_catogory9").hide();
                $("#sub_catogory8").hide();
                $("#sub_catogory7").show();
                $("#sub_catogory6").hide();
                $("#sub_catogory5").hide();
                $("#sub_catogory4").hide();
                $("#sub_catogory3").hide();
                $("#sub_catogory2").hide();
                $("#sub_catogory").show();
            }
            else if($(this).val() == "8" ){
                $("#sub_catogory12").hide();
                $("#sub_catogory11").hide();
                $("#sub_catogory10").hide();
                $("#sub_catogory9").hide();
                $("#sub_catogory8").show();
                $("#sub_catogory7").hide();
                $("#sub_catogory6").hide();
                $("#sub_catogory5").hide();
                $("#sub_catogory4").hide();
                $("#sub_catogory3").hide();
                $("#sub_catogory2").hide();
                $("#sub_catogory").show();
            }
            else if($(this).val() == "9" ){
                $("#sub_catogory12").hide();
                $("#sub_catogory11").hide();
                $("#sub_catogory10").hide();
                $("#sub_catogory9").show();
                $("#sub_catogory8").hide();
                $("#sub_catogory7").hide();
                $("#sub_catogory6").hide();
                $("#sub_catogory5").hide();
                $("#sub_catogory4").hide();
                $("#sub_catogory3").hide();
                $("#sub_catogory2").hide();
                $("#sub_catogory").show();
            }
            else if($(this).val() == "10" ){
                $("#sub_catogory12").hide();
                $("#sub_catogory11").hide();
                $("#sub_catogory10").show();
                $("#sub_catogory9").hide();
                $("#sub_catogory8").hide();
                $("#sub_catogory7").hide();
                $("#sub_catogory6").hide();
                $("#sub_catogory5").hide();
                $("#sub_catogory4").hide();
                $("#sub_catogory3").hide();
                $("#sub_catogory2").hide();
                $("#sub_catogory").show();
            }
            else if($(this).val() == "11" ){
                $("#sub_catogory12").hide();
                $("#sub_catogory11").show();
                $("#sub_catogory10").hide();
                $("#sub_catogory9").hide();
                $("#sub_catogory8").hide();
                $("#sub_catogory7").hide();
                $("#sub_catogory6").hide();
                $("#sub_catogory5").hide();
                $("#sub_catogory4").hide();
                $("#sub_catogory3").hide();
                $("#sub_catogory2").hide();
                $("#sub_catogory").show();
            }
            else if($(this).val() == "12" ){
                $("#sub_catogory12").show();
                $("#sub_catogory11").hide();
                $("#sub_catogory10").hide();
                $("#sub_catogory9").hide();
                $("#sub_catogory8").hide();
                $("#sub_catogory7").hide();
                $("#sub_catogory6").hide();
                $("#sub_catogory5").hide();
                $("#sub_catogory4").hide();
                $("#sub_catogory3").hide();
                $("#sub_catogory2").hide();
                $("#sub_catogory").show();
            }
            else{
                $("#sub_catogory12").hide();
                $("#sub_catogory11").hide();
                $("#sub_catogory10").hide();
                $("#sub_catogory9").hide();
                $("#sub_catogory8").hide();
                $("#sub_catogory7").hide();
                $("#sub_catogory6").hide();
                $("#sub_catogory5").hide();
                $("#sub_catogory4").hide();
                $("#sub_catogory3").hide();
                $("#sub_catogory2").hide();
                $("#sub_catogory").hide();
            }

        });
    });


})(jQuery);

// $('select').change(function(){
//     if (($('select#category option').val() == '1')) {
//        $('#sub_catogory').show();
//     } else {
//        $('#sub_catogory').hide();
//     }
//  });

