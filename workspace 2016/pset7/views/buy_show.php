<?php if (isset($names) and isset($symbols) and isset($prices)): ?>
            <h4>A share of <?= htmlspecialchars($names) ?> (<?= htmlspecialchars($symbols) ?>) costs <b> $<?= htmlspecialchars($prices) ?></b>. </h4>
        <?php else: ?>
            <p><h2>Sorry !</h2> <p> The symbol not found! </p>
        <?php endif ?>