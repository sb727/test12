<div>
    <form class="well well-span4" method="post" action="<?php echo site_url();?>/login/loginc">
        <h3 class="text-info">Login Here</h3>
        <br />
        <?php if(! is_null($msg)) echo $msg;?>
        <br/>
        <label>Username:</label>
        <input type="text" name="name"  />
        <label>Password:</label>
        <input type="password" name="pass"  />
        <br/>
        <br/>
        <div class="span4">
            <input type="submit" value="Login" class="btn btn-info pull-center"/>
        </div>
    </form>
</div>