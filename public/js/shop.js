/*
conrad roset shop.js
 */


$(function(){
//var $base_url = '/conradroset';
    
//shop - ficha producto
  
    if($("input[name='opt']").is(':checked')){
		var idp = $("input[name='opt']:checked").val();       
		var idp2 = idp.split('_');
		var id = idp2[0];
		var price = idp2[1];
		//$('input#price').val(price); 
		$('#product_price').html(price); 
    }  		
	
	$("input[name='opt']").click(function(){
		//cambiamos estilos
		$(this).addClass("selected");
		
		var idp = $("input[name='opt']:checked").val();       
		var idp2 = idp.split('_');
		var id = idp2[0];
		var price = idp2[1];
		//$('input#price').val(price);    
		$('#product_price').html(price); 
	  
	});



// cart
$('#cart_submit').css({ opacity: 0.3 });

//si hay algun elemento seleccionado 
//si hay modos de envio disponibles

	if ( $("input[name='shipping']:checked").val()  ) { 

		var cart_total = parseFloat($("#cart_total").val());
		var shipping = $("input[name='shipping']:checked").val();
		var values = shipping.split('_');
		var shipping_price = parseFloat(values[1]);
		var total_price =	cart_total + shipping_price;
		$('input#total_price').val(total_price);
		
		$('#cart_submit').removeAttr('disabled');
		$('#cart_submit').css({ opacity: 1 });	

		
	}	
	//$('#cart_submit').removeAttr('disabled');	
	
	//cargar modos de envío al cambiar país
	$("#shipping_country").change(function(){
		
		var countryid = $(this).val();
		var url = $base_url + "shop/loadshippingmethods/countryid/" + countryid;
		//alert(url);
		
		$('#loadmethods').load( url , function() {
  			//alert('Load was performed.');
  			//calcular el total del elemnto por defecto de entre los cargados con ajax
			
			if ( $("input[name='shipping']:checked").val().length ) { 

				var cart_total = parseFloat($("#cart_total").val());
				var shipping = $("input[name='shipping']:checked").val();
				$("input[name='shipping']:checked").closest("li").addClass("selected");
				var values = shipping.split('_');
				var shipping_price = parseFloat(values[1]);
				var total_price =	cart_total + shipping_price;
				//alert(total_price);
			 
				$('input#total_price').val(total_price);
				
				$('#cart_submit').removeAttr('disabled');
				$('#cart_submit').css({ opacity: 1 });	
			
			}else{
				$('#cart_submit').attr('disabled');
			}			
			//
		});
		
			
	});
	
	
    
	//cuando se hace click en un módo de envío actualizar precio
	$("input[name='shipping']").live('click',function() {
		//alert('ups');
		//$(this).parents("li").removeClass("selected");
		$("ol#shipping_methods li").removeClass("selected");
		$(this).closest("li").addClass("selected");
		
		var cart_total = parseFloat($("#cart_total").val());
        var shipping = $("input[name='shipping']:checked").val();
        var values = shipping.split('_');
        var shipping_price = parseFloat(values[1]);
		var total_price =	cart_total + shipping_price;
		//alert(total_price);
		 
		 $('input#total_price').val(total_price);
		  
         $('#cart_submit').removeAttr('disabled');
         $('#cart_submit').css({ opacity: 1 });

		
		
	}); 


});
