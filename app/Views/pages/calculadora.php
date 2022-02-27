<form method="GET" action="/Calculadora/calculo">
		<input type="text" name="digito1" id="digito1" autocomplete="off" value="<?php echo (isset($digito1)?$digito1:0) ?>">
		<select name="operador" id="operador">
			<option value="+" <?php echo isset($operador) && $operador=='+' ? 'selected':'' ?>>Sumar</option>
			<option value="-" <?php echo isset($operador) && $operador=='-' ? 'selected':'' ?>>Restar</option>
			<option value="*" <?php echo isset($operador) && $operador=='*' ? 'selected':'' ?>>Multiplicar</option>
			<option value="/" <?php echo isset($operador) && $operador=='/' ? 'selected':'' ?>>Dividir</option>
		</select>
		<input type="text" name="digito2" id="digito2" autocomplete="off" value="<?php echo (isset($digito2)?$digito2:0) ?>">
		<input type="submit" name="submit" value="Cálculo">
		<?php if (isset($resultado)): ?>
			<strong>
				<?php echo $resultado ?>
			</strong>			
		<?php endif ?>
	</form>
</body>