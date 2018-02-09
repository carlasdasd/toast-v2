$(function(){
var textfield = $("input[name=user]");
            $('button[type="submit"]').click(function(e) {
                e.preventDefault();
                //little validation just to check username
                if (textfield.val() != "") {
                    //$("body").scrollTo("#output");
                    $("#output").addClass("alert alert-success animated fadeInUp").html("Welcome back " + "<span style='text-transform:uppercase'>" + textfield.val() + "</span>");
                    $("#output").removeClass(' alert-danger');
                    $("input").css({
                    "height":"0",
                    "padding":"0",
                    "margin":"0",
                    "opacity":"0"
                    });
                    //change button text 
                    $('button[type="submit"]').html("continue")
                    .removeClass("btn-info")
                    .addClass("btn-default").click(function(){
                    $("input").css({
                    "height":"auto",
                    "padding":"10px",
                    "opacity":"1"
                    }).val("");
                    });
                    
                    //show avatar
                    $(".avatar").css({
                        "background-image": "url('http://api.randomuser.me/0.3.2/portraits/women/35.jpg')"
                    });
                } else {
                    //remove success mesage replaced with error message
                    $("#output").removeClass(' alert alert-success');
                    $("#output").addClass("alert alert-danger animated fadeInUp").html("sorry enter a username ");
                }
                //console.log(textfield.val());

            });
});

$(document).ready(function () {
                $("#sidebar").mCustomScrollbar({
                    theme: "minimal"
                });

                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar, #content').toggleClass('active');
                    $('.collapse.in').toggleClass('in');
                    $('a[aria-expanded=true]').attr('aria-expanded', 'false');
                });
            });
$(document).ready(function() {
    
    var max_fields      = 10;
    var wrapper         = $(".form-reg"); 
    var add_button      = $(".add_form_field"); 
    var x = 1; 
    var a = 1;
    $(add_button).click(function(e){ 
        e.preventDefault();
        if(x < max_fields){ 
            x++; 
            $(wrapper).append('<div><div class="col-md-6"><div class="box"><div class="box-header"><p class="display-inline">Activity</p> <button href="#" class=" btn btn-danger delete btn-sm pull-right">-</button><div class="row" id="field"><div class="col-md-7" ><input autocomplete="off" class="form-control" id="field1" name="prof1" type="text" placeholder="Type something" data-items="8"/></div><div class="col-md-2 add"><button class="btn btn-sm btn-primary add-more">+</button></div></div></div></div></div></div>   '); //add input box
            
                var next = 1;
                $(".add-more").click(function(e){
                    e.preventDefault();
                    var addto = "#field" + next;
                    next = next + 1;
                    var newIn = '<br /><br /><input autocomplete="off" class="span3" id="field' + next + '" name="field' + next + '" type="text" data-provide="typeahead" data-items="8">';
                    var newInput = $(newIn);
                    $(addto).after(newInput);
                    $("#field" + next).attr('data-source',$(addto).attr('data-source'));
                    $("#count").val(next);  
                });
        }
		else
		{
		alert('You Reached the limits')
		}
    });
    
    
    $(wrapper).on("click",".btn-danger", function(e){ 
        e.preventDefault(); $(this).parents('.row .box').remove(); x--;
    })

});

$(document).ready(function() {
            



});
