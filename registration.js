
var email_address = $('#email').val();
var name = $('#name').val();
var password = $('#password').val();

$('#submit').click(function(){
	$.ajax({
        type:'POST',
        url: 'diary.php',
        async: true,
        data:
        {
          email: email_address,
          name: name,
          password: password,

        },
        success: function(data)
        {
          if (data.success)
        	 alert(data.success);
          else
            alert(data.errors)
        }
    //     },
    //     error: function(jqXHR, textStatus, errorThrown) {
    //       alert("error");
    // }
});   
});