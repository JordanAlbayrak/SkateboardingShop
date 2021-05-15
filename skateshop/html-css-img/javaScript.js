//<---------Global Variables------->
var name;
var quantity;
var price;
var total;

var TotalCostH = 0;
parseInt(TotalCostH);
var TotalCostL = 0;
parseInt(TotalCostL);
var TotalCostO = 0;
parseInt(TotalCostO);
var TotalCostS = 0;
parseInt(TotalCostS);
var GrandTotal = 0;
parseInt(GrandTotal);

var getH = localStorage.getItem("TotalH");
var getL = localStorage.getItem("TotalL");
var getO = localStorage.getItem("TotalO");
var getS = localStorage.getItem("TotalS");

var items;
var cost;

var id;

//<---------Refurbhised Message------->
$('input:submit').on({
    click: function(){
        if($('#name').val() != "" || $('#email').val() != "" || $('#type').val() != "..." || $('#model').val() != "" || $('#speed').val() != "0"){
            alert('Thank you for your form, we will contact you shortly');
        }
    }
});

//<---------- Cookies----------------->

var cookieList = function(Cart){
    var cookie = $.cookie(Cart);
    items = cookie ? cookie.split(',') : new Array();

    return {
        "add": function(val) {
            items.push(val);
            $.cookie(Cart, items.join('<br /><br />'));
        },
        /*"remove": function(val) {
          indx = items.indexOf(val);
          if(indx != -1){
            items.splice(indx, 1);
          }
          $.cookie(Cart, items.join(','));
        },*/
        "clear": function() {
            items = null;
            $.cookie(Cart, "");
        },
        "items": function() {
            return items;
        }
    }
}

var list = new cookieList("myItems");

//<----------Total From Page----------->

$('input.heavy').on({
    click: function(){
        var id = $(this).attr('id');
        window.price = "<br /> Price: " + id;
        $(this).each(function(){
            var amount = prompt("How many would you like to buy?");
            window.quantity = "<br /> Quantity: " + amount;
            $(this).attr('disabled', true);
            window.total = "<br /> Total: " + parseInt(id * amount);
            window.name = " Product: " + $(this).attr('name');
            TotalCostH += parseInt(id * amount);
            localStorage.setItem("TotalH", TotalCostH);
            getH = JSON.stringify(localStorage.getItem("TotalH"));
        });
        window.cost = [name + quantity + price + total + "$"];
        list.add(cost);
    }
});

$('input.light').on({
    click: function(){
        var id = $(this).attr('id');
        window.price = "<br /> Price: " + id;
        $(this).each(function(){
            var amount = prompt("How many would you like to buy?");
            window.quantity = "<br /> Quantity: " + amount;
            $(this).attr('disabled', true);
            window.total = "<br /> Total: " + parseInt(id * amount);
            window.name = " Product: " + $(this).attr('name');
            TotalCostL += parseInt(id * amount);
            localStorage.setItem("TotalL", TotalCostL);
            getL = JSON.stringify(localStorage.getItem("TotalL"));
        });
        window.cost = [name + quantity + price + total + "$"];
        list.add(cost);
    }
});

$('input.other').on({
    click: function(){
        var id = $(this).attr('id');
        window.price = "<br /> Price: " + id;
        $(this).each(function(){
            var amount = prompt("How many would you like to buy?");
            window.quantity = "<br /> Quantity: " + amount;
            $(this).attr('disabled', true);
            window.total = "<br /> Total: " + parseInt(id * amount);
            window.name = " Product: " + $(this).attr('name');
            TotalCostO += parseInt(id * amount);
            localStorage.setItem("TotalO", TotalCostO);
            getO = JSON.stringify(localStorage.getItem("TotalO"));
        });
        window.cost = [name + quantity + price + total + "$"];
        list.add(cost);
    }
});

$("input.shop").on({
    click:function(){
        var id = $(this).attr('id');
        window.price = "<br /> Price: " + id;
        $("input.shop").attr('disabled', true);
        $(this).each(function(){
            window.total = "<br/ > Total: " + parseInt(id);
            window.name = " Product: " + $(this).attr('name');
            TotalCostS += parseInt(id);
            localStorage.setItem("TotalS", TotalCostS);
            getS = JSON.stringify(localStorage.getItem("TotalS"));
        });
        window.cost = [name + price + total + "$"];
        list.add(cost);
    }
});

//<--------Show Text For Image-------->

$('p.tanks').on({
    mouseover: function(){
        id = $(this).attr("id");
        var Id = $(this);

        $.ajax({
            type: 'GET',
            url: 'Tanks.json',
            dataType: 'json',
            success: function(response){
                $.each(response, function(key, data){
                    $.each(data, function(key, tanks){
                        $.each(tanks, function(key, stats){
                            if(id == stats.name){
                                $(Id).html(stats.model + "<br>" + stats.type + "<br>" + stats.manufacturer + "<br>" + stats.gun + "<br>" + stats.speed + "<br>" + stats.cost);
                            }
                        });
                    });
                });
            }
        });

        $.ajax({
            type: 'GET',
            url: 'lightTankDescription.xml',
            dataType: 'xml',
            success: function(response){
                $(response).find('stats').each(function(){
                    //alert(id + "   " + $(this).find('name').text());
                    if(id == $(this).find('name').text()){
                        $(Id).html($(this).find('model').text() + "<br>" + $(this).find('type').text() + "<br>" + $(this).find('manufacturer').text() + "<br>" + $(this).find('gun').text() + "<br>" + $(this).find('speed').text() + "<br>" + $(this).find('cost').text());
                    }
                });
            }
        });

    },
    mouseout: function(){
        $(this).html("<img id='tanks' src='" + id + ".jpg' class='img-responsive Timg' style='width:100%' alt='Image'>");
    }
});

//<-------Check Cookie------>

GrandTotal = (JSON.parse(getH) + JSON.parse(getL) + JSON.parse(getO) + JSON.parse(getS));
localStorage.setItem("Total", GrandTotal);
var getGT = localStorage.getItem("Total");

function checkCookie() {
    if($.cookie("Cart") == null){
        $("p#List").text("Your cart is empty");
    }
    else if($.cookie("Cart") != null){
        $("p#List").text("");
    }
    $('p#List').append('<p>' + list.items() + '</p>');
    $("#clear").attr("disabled", false);
    $('p#List').append("Your total cost: " + getGT + "$");
    $("#Buy").attr("disabled", false);
}

$('#clear').on({
    click: function(){
        list.clear();
        localStorage.clear();
        $("p#List").text("Your cart is empty");
        $('p#List').append("<br /><br />Your total cost: 0$");
        $("#clear").attr("disabled", true);
    }
});

$("#Buy").on({
    click: function(){
        alert("Your order has been processed. Thanks you for shopping with Tanks-U")
        list.clear();
        localStorage.clear();
        $("p#List").text("Your cart is empty");
        $('p#List').append("<br /><br />Your total cost: 0$");
        $("#clear").attr("disabled", true);
    }
});