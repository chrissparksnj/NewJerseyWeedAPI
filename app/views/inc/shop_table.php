
<style>

   #data{
       font-size: .8rem;
   }
    
</style>


<div class="container">
    <div class="columns is-centered display compact">
    <table id='data' class="table">
        <thead>
            <th>Store Name</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Website</th>
        </thead>
        <tbody>
            <?php  foreach($data as $shop) : ?>
            <tr>

                <td><?php echo $shop->store_name; ?></td>
                <td><?php echo $shop->phone; ?></td>
                <td><?php echo trim($shop->address, '"'); ?></td>
                <td><a href='<?php echo $shop->website;?>'><?php echo $shop->website; ?></a></td>

            </tr>
            <?php endforeach ?>

        </tbody>

    </table>
</div>
</div>
</div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src='//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js'></script>
<script>
$(document).ready(function() {

    $('#data').DataTable({
        "lengthMenu": false,
        "compact": true
    });

    $(".dataTables_length").hide()
    $(".current").css({"background-color":"red"})

})
</script>

