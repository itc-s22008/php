<script>
$('#chgmail').on('Click', function() {
	$.ajax ({
	   url: '4g-020c.php',
	   type: 'POST',
           dataType: 'json';
           contentType: 'application/json'	
	   data:JSON.stringify({"mail": $('#mail').vavl()}) 
}).done(function(data)) {
	$('#result').text(data.result)	;
})
});
</script>
