<?php if (isset($param['loginSuccess']) && $param['loginSuccess']): ?>
  Du bist eingelogt!
<?php endif; ?>
<?php if (isset($param['loginSuccess']) && !$param['loginSuccess']): ?>
  Passwort oder Email fehlerhaft
<?php endif; ?>

<form action="login" method="post">
  <input type="text" name="email" />
  <input type="text" name="password" />
  <input type="submit" value="Login" />
</form>
