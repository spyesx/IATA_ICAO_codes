$(document).ready(function()
{
	$('#alert-loading').html('Rendering...');
	$('#datas').DataTable();
	$('#alert-loading').fadeOut(300, function(){
		$('#list').fadeIn();
	});
});
