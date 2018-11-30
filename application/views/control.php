<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

<a href="<?= base_url()?>Admin/add_room?>" class="btn btn-success">Add Room</a>
	<table class="table table-inverse">
	<tr>
		<th>Room_ID</th>
		<th>User_ID</th>
		<th>Check</th>
		<th>Type</th>
		<th>From</th>
		<th>To</th>
		<th>Food</th>
		<th>Services</th>
		<th>Pay Type</th>
		<th>Number Card</th>
		<th>Delete</th>
		<th>Edit</th>
		<th><a href="<?= base_url()?>Login/logout">Logout</th>
	</tr>
	
	<?php foreach ($room as $value):?> 
	<tr>
		<td><?php echo $value->room_id; ?></td>
		<td><a href="<?= base_url()?>Admin/info_user/<?php echo $value->user_id; ?>"><?php echo $value->user_id; ?></a></td>
		<td><?php echo $value->Check; ?></td>
		<td><?php echo $value->Type; ?></td>
		<td><?php echo $value->res_from; ?></td>
		<td><?php echo $value->res_to; ?></td>	
		<td><?php echo $value->Food; ?></td>
		<td><?php echo $value->Services; ?></td>
		<td><?php echo $value->pay; ?></td>
		<td><?php echo $value->num_card; ?></td>
		<!-- <td><a href="<?= base_url()?>Admin/delete_room/<?php echo $value->room_id?>" class="btn btn-success">Delete</a></td> -->
		<td><a onclick="del1(<?= $value->room_id?>)" href="javascript:void()" style="background-color: red" class="btn btn-warning" role="button">Delete</a></td>
		<td><a href="<?= base_url()?>Admin/edit_room/<?php echo $value->room_id?>" class="btn btn-success">Edit</a></td>
	</tr>

	<?php endforeach ?>	
	</table>

<script>
      function del1(roomId) 
      {
        if(confirm('are you sure'))
          window.location.href='<?= base_url()?>Admin/delete_room/'+roomId;
      }
    </script>