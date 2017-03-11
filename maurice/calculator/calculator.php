<article><br>
	<form method="post">
		<table id="main">
			<tr>
				<td id="memory" colspan="5"> <?php
					include "memory.php";
				?> </td>
			</tr>
			<tr>
				<td id="screen" colspan="5"> <?php
					include "result.php";					
				?> </td>
			</tr>
			<tr>
			</tr>
			<tr>
				<td class="key"><input type="submit" value="%" name="press"/></td>
				<td class="key"><input type="submit" value="root" name="press"/></td>
				<td class="key"><input type="submit" value="pow" name="press"/></td>				
				<td id="C" class="operators" colspan="2"><input type="submit" value="C" name="press"/></td>
			</tr>
			<tr>
				<td class="key"><input type="submit" value="7" name="press"/></td>
				<td class="key"><input type="submit" value="8" name="press"/></td> 	   
				<td class="key"><input type="submit" value="9" name="press"/></td>
				<td class="mem"><input type="submit" value="MC" name="press"/></td>
				<td class="operators"><input type="submit" value="/" name="press"/></td>
			</tr>
			<tr>
				<td class="key"><input type="submit" value="4" name="press"/></td>
				<td class="key"><input type="submit" value="5" name="press"/></td>
				<td class="key"><input type="submit" value="6" name="press"/></td>
				<td class="mem"><input type="submit" value="MR" name="press"/></td>
				<td class="operators"><input type="submit" value="x" name="press"/></td>
			</tr>
			<tr>
				<td class="key"><input type="submit" value="1" name="press"/></td>
				<td class="key"><input type="submit" value="2" name="press"/></td>
				<td class="key"><input type="submit" value="3" name="press"/></td>
				<td class="mem"><input type="submit" value="M-" name="press"/></td>
				<td class="operators"><input type="submit" value="-" name="press"/></td>
			</tr>
			<tr>
				<td class="key"><input type="submit" value="." name="press"/></td>
				<td class="key"><input type="submit" value="0" name="press"/></td>
				<td class="key"><input type="submit" value="=" action="" method="post" name="press"/></td>
				<td class="mem"><input type="submit" value="M+" name="press"/></td>
				<td class="operators"><input type="submit" value="+" name="press"/></td>
			</tr>
			
		</table>			
	</form>
</article>