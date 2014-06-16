$(document).ready(function()
{
	$('#alert-loading').html('Rendering...');
	$('#datas').DataTable();

	var $tbody = $('#datas tbody');

	$("#datas_filter input[type=search]").attr('autofocus', 'autofocus').on('keyup', function()
	{
		var val = $(this).val();
		if(val == '')
		{
			$tbody.removeHighlight();
		}
		else
		{
			$tbody.highlight(val);
		}
	});

	$('#alert-loading').fadeOut(300, function()
	{
		$('#list').fadeIn();
	});
});
