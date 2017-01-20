
<?php if (isset($shares) and isset($symbols)): ?>
            <h4>The number of shared sold: <?= htmlspecialchars($shares) ?>  </h4>
            <h4>The company: <?= htmlspecialchars($names) ?> .</h4>
            <h4>The symbol of that stock: <?= htmlspecialchars($symbols) ?></h4>
            <h4>Your current cash: <?= htmlspecialchars($cashes) ?></h4>
        <?php else: ?>
            <p><h2>Sorry !</h2> <p> The symbol not found! </p>
        <?php endif ?>