// $('input[name=\'quantity\']').on('change keyup click', function() {
//   var price = $('.price').text().substr(1);
//   var quantity =  $('.quantity').val();
  
//   $('.total').text(price * quantity);
  
// });

jQuery(document).ready(function(){
$("input[name=\'quantity\']").click(function() {
    var pri = '.price-'+this.id;
    var qua = '.quantity-'+this.id;
  var price = $(pri).text();
  var quantity =  $(qua).val();
 //alert(price); // or alert($(this).attr('id'));
  $('.total-'+this.id).text(price * quantity);


});


var sum = 0;
$('.total').each(function() {
    //price = $('.total').text();
    sum += Number($(this).text());
});
$('#total').text(sum);


$("input[name=\'quantity\']").click(function() {
var sum = 0;
$('.total').each(function() {
    //price = $('.total').text();
    sum += Number($(this).text());
});
$('#total').text(sum);
});

});