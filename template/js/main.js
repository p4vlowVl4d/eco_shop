document.addEventListener('DOMContentLoaded', function(){
	setTimeout(function(){
		document.getElementById('preload').style.display = 'none';
	}, 800);

});

setTimeout(function(){
	document.getElementById('preload').style.display = 'none';
}, 600);

// $('.plus').on('click',function(){
// 	var count = $('.count-prod').attr('data-count');
// 	count++;
// 	$('.count-prod').attr('data-count', count);
// 	$('.count-prod').html(count);
// });
// $('.minus').on('click',function(){
// 	var count = $('.count-prod').attr('data-count');
// 	count--;
// 	$('.count-prod').attr('data-count', count);
// 	$('.count-prod').html(count);
// });
$('.cart').on('click', function(){
	var id = $(this).attr('data-id');
	// var count = $('.count-prod').attr('data-count');
	$.post('/cart/addAjax/'+id,{},function(data){
		$('.cart-count').html(data);

	});
	return false;
});
$('.addToCart').on('click', function(){
	var id = $(this).attr('data-id');
	// var count = $('.count-prod').attr('data-count');
	$.post('/cart/addAjax/'+id,{},function(data){
		$('.cart-count').html(data);

	});
	return false;
});
$('.delInCart').on('click', function(){
	var id = $(this).attr('data-id');
	$.post('/cart/delAjax/'+id,{},function(data){
		$('.cart-count').html(data);
		$('tr[data-id='+id+']').detach();
	});
});
