var data = { action: 'bookingformsend', firstname: 'some value' };
jQuery.post(bookingformsend.ajax_url, data, function(response){
    console.log(response);
});

window.onload = function(){
(function(){
	
	jQuery("#dsFORM").submit(function(e){
		var firstname 		=  jQuery(".firstname").val();
		var lastname 		=  jQuery(".lastname").val();
		var contactnumber  	=  jQuery(".contactnumber").val();
		var email		  	=  jQuery(".email").val();
		var noofadults		=  jQuery(".noofadults").val();
		var noofchildren	=  jQuery(".noofchildren").val();
		var pmethod			=  jQuery(".pmethod").val();
		var dsmessage		=  jQuery(".dsmessage").text();
		
		var data = { action: 'bookingformsend',  firstname: firstname, lastname: lastname,contactnumber:contactnumber,email:email,noofadults: noofadults,noofchildren: noofchildren, pmethod: pmethod, dsmessage: dsmessage};
		jQuery.post(bookingformsend.ajax_url, data, function(response){
			console.log(response);
		});

			e.preventDefault();
	});
	
})();
}