<?php

?>
<html>
	<head>
		<script src="http://localhost/sym/js/tinymce/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
    selector: "textarea",
    theme: "modern",
    plugins: [
        "advlist autolink lists link image charmap print preview hr anchor pagebreak",
        "searchreplace wordcount visualblocks visualchars code fullscreen",
        "insertdatetime media nonbreaking save table contextmenu directionality",
        "emoticons template paste textcolor colorpicker textpattern"
    ],
    toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
    toolbar2: "print preview media | forecolor backcolor emoticons",
    image_advtab: true,
    templates: [
        {title: 'Test template 1', content: 'Test 1'},
        {title: 'Test template 2', content: 'Test 2'}
    ]
});
</script>


	</head>
	<body>
	<?= form_open("index.php/Sym/muestracontenido") ?>
	<label>Titulo</label>
	<input name="titulo" type="text" size="50"/><br>
	<textarea name="contenido" style="width:100%"></textarea>
	<input name="fecha" type="date"/><br>
	<label>By</label> 
	<input name="persona" type="text"/><br>
	<input name="enviar" type="submit"/>
	
	</form>
	<hr />Contenido<hr>
	<div style="float: right">
				<?php foreach($contenidos->result() as $contenido) {?>
					<p><?php echo"$contenido->descripcion"; ?></p>
				<?php }?>
				</div>
	</body>
</html>
