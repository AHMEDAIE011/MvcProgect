<div class="container">


<!-- ERROR EMAIL -->
    <?php if (app()->session->hasFlash('errors')) { ?>
        <?php if (isset(app()->session->getFlash('errors')['ErrorEmail'])) { ?>
            <p class="has-text-danger">
                <?php echo app()->session->getFlash('errors')['ErrorEmail']; ?>
            </p>
         <?php } ?>
    <?php } ?>
    <form method="post" action="/login">


        <div class="field">
            <label class="label">Email</label>
            <div class="control">
                <input class="input" type="email" name="email" value="<?php echo old('email'); ?>">
            </div>
            <?php if (app()->session->hasFlash('errors')) { ?>
                <?php if (isset(app()->session->getFlash('errors')['email'])) { ?>

            <p class="has-text-danger">
                <?php echo app()->session->getFlash('errors')['email'][0]; ?>
            </p>
            <?php } ?>
            <?php } ?>
        </div>

        <div class="field">
            <label class="label">Password</label>
            <div class="control">
                <input class="input" type="password" name="password">
            </div>
            <?php if (app()->session->hasFlash('errors')) { ?>
                <?php if (isset(app()->session->getFlash('errors')['password'])) { ?>

            <p class="has-text-danger">
                <?php echo app()->session->getFlash('errors')['password'][0]; ?>
            </p>
            <?php } ?>
            <?php } ?>
        </div>



        <div class="field">
            <div class="control">
                <button class="button is-link">Submit</button>
            </div>
        </div>
    </form>

</div>