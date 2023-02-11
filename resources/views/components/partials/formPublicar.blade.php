				<!-- formulario envia los campos al documentos comentario.php para que se guarde en los post -->
				<form action="comentario.php" method="post" enctype="multipart/form-data">
				<div class="write-texarea-post">
						<textarea placeholder="¿Qué estas pensando, Erick?" name="content"></textarea>
						<button type="submit"><i class="fab fa-telegram-plane"></i></button>
				</div>
					<input type="text" name="idusuario" id="id" style="display: none;" value=<?php /* echo $idusuario */?>>
				
				<div class="add-post-links">
					<button type="button"><i class="fas fa-podcast"></i> Video en vivo</button>					
					<input type="file" name="fotos" id="fotosVideos"  accept="image/*,video/*" style="display: none;">
					<button type="button"><i class="fas fa-images"></i><label for="fotosVideos"> Fotos/Videos </label></button>
					<button type="button"><i class="fas fa-grin-beam-sweat"></i> Sentimiento/Actividad</button>
				</div>
				</form>				
				</div>
				<!-- previsualización de la imagen que se enviará a la base de datos -->
				<!-- funcion de previsualización el final del documento con javascript -->
				<div>
					<img src="" id="prev">
				</div>