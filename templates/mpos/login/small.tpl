{if $smarty.session.AUTHENTICATED|default:"0" == 0}
<div class="login_small">
  <form action="{$smarty.server.SCRIPT_NAME}" method="post" id="loginForm">
    <input type="hidden" name="page" value="login" />
    {if $GLOBAL.csrf.enabled && $GLOBAL.csrf.forms.login}<input type="hidden" name="ctoken" value="{$CTOKEN|escape}" />{/if}
    <input type="hidden" name="to" value="{$smarty.server.SCRIPT_NAME}?page=dashboard" />
    <fieldset2 class="small">
      <label>Username</label>
      <input type="text" name="username" size="22" maxlength="100" required />
      <fieldset2 class="small">
        <label>Password</label>
        <input type="password" name="password" size="22" maxlength="100" required />
      </fieldset2>
    </fieldset2>
    <input type="submit" value="Login" class="alt_btn" />
  </form>
</div>
{/if}
