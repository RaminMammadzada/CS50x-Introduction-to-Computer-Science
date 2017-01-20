<div class="container">
<table class="table table-bordered">

    <thead>
        <tr>
            <th>Symbol</th>
            <th>Name</th>
            <th>Shares</th>
            <th>Price</th>
            <th>TOTAL</th>
            <th>Operation</th>
            <th>Date</th>
        </tr>
    </thead>

    <tbody>

    
    <?php foreach ($positions as $position): ?>

    <tr>
        <td class="success"><?= $position["symbols"] ?></td>
        <td class="danger"><?= $position["names"] ?></td>
        <td class="warning"><?= $position["shares"] ?></td>
        <td class="info"><?= $position["prices"] ?></td>
        <td class="active"><?= $position["totals"]?></td>
        
        <?php if ($position["operations"]=="buy"): ?>
            <td class="danger">bought</td>
        <?php else: ?>
            <td class="danger">sold</td>
        <?php endif ?>
        
        <td class="danger"><?= $position["dates"] ?> </td>
    </tr>

<?php endforeach ?>
    
    </tbody>

</table>


</div>



