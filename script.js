$(document).ready(function() {

	//E-mail Ajax Send
	$("form").submit(function() { //Change
		var th = $(this);
		$.ajax({
			type: "POST",
			url: "mail.php", //Change
			data: th.serialize()
		}).done(function() {
			alert("Форма отправлена");
			setTimeout(function() {
				// Done Functions
				th.trigger("reset");
			}, 1000);
		});
		return false;
	});

})
$("form").submit(function() {
        var $self = $(this);
        var url1 = $self.attr('action'); 
        var url2 = $self.data('action');
        $.ajax({
            type: $self.attr('method'),
            url: url1,
            data: $self.serialize(),
            success: function(data) {
                //... 
            },
        });
        $.ajax({
            type: $self.attr('method'),
            url: url2,
            data: $self.serialize(),
            success: function(data) {
                //... 
            },
        });
        return false;
   });
$(document).ready(function() {

	//E-mail Ajax Send
	$("form").submit(function() { //Change
		var th = $(this);
		$.ajax({
			type: "POST",
			url: "mail.php", //Change
			data: th.serialize()
		}).done(function() {
			alert("Thank you!");
			setTimeout(function() {
				// Done Functions
				th.trigger("reset");
			}, 1000);
		});
		return false;
	});

});