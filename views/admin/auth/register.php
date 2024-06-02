<div class="container">
    <?php if (app()->session->hasFlash('success')) { ?>
    <p class="has-text-success">
        <?php echo app()->session->getFlash('success'); ?>
    </p>
    <?php } ?>
    <form method="post" action="/signup">
        <div class="field">
            <label class="label">Full name</label>
            <div class="control">
                <input class="input" type="text" name="name" value="<?php echo old('name'); ?>">
            </div>
            <?php if (app()->session->hasFlash('errors')) { ?>
                <?php if (isset(app()->session->getFlash('errors')['name'])) { ?>
            <p class="has-text-danger"><?php echo app()->session->getFlash('errors')['name'][0]; ?></p>
            <?php }
                } ?>
        </div>

        <div class="field">
            <label class="label">Username</label>
            <div class="control">
                <input class="input" type="text" name="username" value="<?php echo old('username'); ?>">
            </div>
            <?php if (app()->session->hasFlash('errors')) { ?>
                <?php if (isset(app()->session->getFlash('errors')['username'])) { ?>

            <p class="has-text-danger">
                <?php echo app()->session->getFlash('errors')['username'][0]; ?>
            </p>
            <?php } ?>
            <?php } ?>
        </div>

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
            <label class="label">Confirm password</label>
            <div class="control">
                <input class="input" type="password" name="password_confirmation">
            </div>
            <?php if (app()->session->hasFlash('errors')) { ?>
                <?php if (isset(app()->session->getFlash('errors')['password_confirmation'])) { ?>

            <p class="has-text-danger">
                <?php echo app()->session->getFlash('errors')['password_confirmation'][0]; ?>
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