<?php if ($_SESSION['login']!='admin'){
  header('Location;/404');
}?>
<div class="container col-10">
	<div class="row">
			<h1>Панель Админа</h1>

			<table class="table table-bordered"><br>
			<tr>
				<td>id</td>
				<td>Год</td>
				<td>Проект</td>
				<td>Описание</td>
				<td>изменить</td>
				<td>удалить</td>
			</tr>
      <?php
					foreach($data as $row){?>

						<tr>
              <form class="" method="post" action="/adminpanel/redactionInfo">
                            <td><?php echo $row['id'];?> <input type="hidden" name="id" value="<?= $row['id']; ?>"></td>
                            <td><input type="text" name="year" class = "form-control" value="<?php echo $row['year'];?>"> </td>
                            <td><input type="text" name="site" class = "form-control" value="<?php echo $row['site'];?>"></td>
                            <td><input type="text" name="description" class = "form-control" value="<?php echo $row['description']; ?>"></td>
                            <td>
                            <input type="submit" name="upsubmit" class="form-control btn btn-dark" value="Изменить">
                            </form>
							</td>
							<td>
								<form method="post" class="col-fluid" action="/adminpanel/delete">
								<input type="text" class="form-control" style="display: none;" value='<?php echo $row['id'];?>' name = "id">
								<input type="submit" class="form-control btn btn-danger"  value="Удалить">
								</form>
							</td>
						</tr>
            <?php }?>

				<form method="post" action="/adminpanel/add">
				<td></td>
				<td><input type="text" name="year" class = "form-control" placeholder="Введите год"> </td>
				<td><input type="text" name="site" class = "form-control" placeholder="Введите проект"></td>
				<td><input type="text" name="description" class = "form-control" placeholder="Введите описание"></td>
				<td colspan="2">
				<input type="submit" class="form-control btn btn-dark" value="добавить">
				</form>
			</table>
		</div>
	</p>
</div>
