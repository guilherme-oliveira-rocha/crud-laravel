
$("#cpf").mask("999.999.999-99");
$(document).on('input', '.mask-phone',function(){
	$(this).mask('(00) 00000-0000');
}); 

$(document).on('click', '.add-phone', function(event){
    event.preventDefault();
    $('.div-phone').append(`<div class="form-outline">
    <input class="form-control mask-phone form-control-lg" name="phone[]"/>
    <label class="form-label" for="phoneNumber">Phone Number</label>
  </div>`);
});

$(document).on('click', '.add-email', function(event){
	event.preventDefault();
	$('.div-email').append(`<div class="form-outline">
  <input type="email" id="emailAddress" class="form-control form-control-lg" name="email[]"/>
  <label class="form-label" for="emailAddress">Email</label>
</div>`);
});