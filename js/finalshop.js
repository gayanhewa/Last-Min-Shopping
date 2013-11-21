/**
 * Created with JetBrains PhpStorm.
 * User: gayan
 * Date: 10/6/13
 * Time: 8:23 PM
 * To change this template use File | Settings | File Templates.
 */


var show_final = function () {

    Modalbox.show($('domexample'), {title: this.title, width: 300});
}

var cancel_finalshop = function (review) {
    Modalbox.hide();
    review.save();
}
var cancel_finalshop_onestep = function (review) {
    Modalbox.hide();
    form_submission();
}
var add_items = function () {
    var product_ids = {};
    var j = 0;
    $$("input:checkbox[name=products]:checked").each(function(i)
    {
        product_ids[j]= i.value;
        j = j + 1;
    });

    new Ajax.Request('/finalshop/index', {
        method : 'post',
        parameters : product_ids,
        onSuccess: function(response) {
           Modalbox.hide();
            review.save();
        }
    });

}

var add_items_onestep = function () {
    var product_ids = {};
    var j = 0;
    $$("input:checkbox[name=products]:checked").each(function(i)
    {
        product_ids[j]= i.value;
        j = j + 1;
    });

    new Ajax.Request('/finalshop/index', {
        method : 'post',
        parameters : product_ids,
        onSuccess: function(response) {
            Modalbox.hide();
            form_submission();
        }
    });

    form_submission();
}