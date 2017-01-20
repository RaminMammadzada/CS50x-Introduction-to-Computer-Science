<form action="buy.php" method="post">
    <fieldset>
        <h3>Enter the symbol and share of the stock you want to buy </h3>
        <h3> (For a Google share input "goog" for share place, or for Yahoo share input "yhoo" for share place)</h3>
        <div class="form-group">
            <input autocomplete="off" autofocus class="form-control" name="symbol" placeholder="Symbol" type="text"/>
        </div>
        <div class="form-group">
            <input autocomplete="off" autofocus class="form-control" name="share" placeholder="Number of share" type="text"/>
        </div>
        <div class="form-group">
            <button class="btn btn-default" type="submit">
                <span aria-hidden="true" class="glyphicon"></span>
                Buy
            </button>
        </div>
    </fieldset>
</form>