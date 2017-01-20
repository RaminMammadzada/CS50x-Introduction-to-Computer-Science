<div class="container">
<table class="table table-bordered">

    <thead>
        <tr>
            <th>Symbol</th>
            <th>Name</th>
            <th>Shares</th>
            <th>Price</th>
            <th>TOTAL</th>
        </tr>
    </thead>

    <tbody>

    
    <?php foreach ($positions as $position): ?>

    <tr>
        <td class="success"><?= $position["symbol"] ?></td>
        <td class="danger"><?= $position["name"] ?></td>
        <td class="warning"><?= $position["shares"] ?></td>
        <td class="info"><?= $position["price"] ?></td>
        <td class="active"><?= $position["price"]*$position["shares"] ?></td>
    </tr>

<?php endforeach ?>
    
    </tbody>
    
    <tr>
        <td class="success"></td>
        <td class="danger">CASH</td>
        <td class="warning"></td>
        <td class="info"></td>
        <td> <?= htmlspecialchars($cash) ?></td>
        
    </tr>

    

</table>


</div>



