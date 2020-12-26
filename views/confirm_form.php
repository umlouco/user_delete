<div class="row">
<form action="<?php echo home_url( $wp->request ); ?>" method="post">
Sei sicuro di voler eliminare il tuo account? <br />
<input type="radio" name="user_delete" value="1"> Si <input type="radio" name="user_delete" value="0"> No <br />
<input type="submit" name="delete" value="Confermare">
</form>
</div>