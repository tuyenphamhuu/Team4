jQuery(document).ready(function(){
    jQuery("#add-btn").click(function(){
     jQuery.ajax({
      type:"POST",
      url:"/ajaxAddProduct", //goi toi file ajax.php
      data:"color="+jQuery('input[name=Radios1]:checked').val()+"&sl="+jQuery("#example-number-input").val()+"&id="+jQuery("#idProduct").val()+"&name="+jQuery("#ProductName").val()+"&price="+jQuery("#NewPrice").val()+"&image="+jQuery("#image").val(),
      success:function(html){
         $('#exampleModal').modal('show');
      }
     });
    });
   });


   jQuery(document).ready(function(){
    jQuery("input[name=\'quantity\']").click(function(){
     var pri = '.price-'+this.id;
     var qua = '.quantity-'+this.id;
     jQuery.ajax({
      type:"POST",
      url:"/ajaxUpdateProduct", //goi toi file update.php
      data:"idcolor="+this.id+"&quantity="+jQuery(qua).val(),
      success:function(html){
         //$('#exampleModal').modal('show');
      }
     });
    });
    $(document).ready(function() {
         var needToRemove;
         var confirmModal = $('#exampleModal');
         $('.remove').click(function() {
             needToRemove = $(this).closest('tr');
             confirmModal.modal('hide');
         });
         $('.yes-remove').click(function() {
             confirmModal.modal('hide');
             needToRemove.remove();
         });
     });
 
    jQuery(".removeP").click(function(){
     jQuery.ajax({
      type:"POST",
      url:"/ajaxDeleteProduct", //goi toi file update.php
      data:"idcolor="+this.id,
      success:function(html){
 
      }
     });
    });
   });
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