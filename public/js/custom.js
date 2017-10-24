$('input[name=\'quantity\']').on('change keyup click', function() {
	var price = $('.price').text().substr(1);
  var quantity =  $('.quantity').val();
  
  $('.total').text(price * quantity);
  
  });