/* Article FructCode.com */
$( document ).ready(function() {
    $("#btn").click(
		function(){
			sendAjaxForm('result_form', 'ajax_form', 'action_ajax_form.php');
			return false; 
		}
	);
});
 
function sendAjaxForm(result_form, ajax_form, url) {
    $.ajax({
        url:     url,
        type:     "POST",
        dataType: "html",
        data: $("#"+ajax_form).serialize(),
        success: function(response) { //Данные отправлены успешно
        	result = $.parseJSON(response);
			if (result.check.indexOf('Error') >= 0)
			{
				$('#result_form').html(result.check);
			}
			else
			{
				document.getElementById('ajax_form').hidden = true;
				$('#result_form').html('Hello, ' + result.name + '! You have been successfully registered!');
			}
    	}
 	});
}