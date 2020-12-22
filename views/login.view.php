<div class="login-overlay">
    <div class="center-box login-form">
        <div class="mb-3">
            <span class="guitar-icon">
                <img src="../images/electric-guitar.svg">
                <div><h3>Guitar(t)ists</h3></div>
            </span>
        </div>

        <form method="POST" name="frmLogin" onsubmit="return false;">
            <div class="mb-3">
                <label for="email" class="form-label">Your email address</label>
                <input type="email" class="form-control" name="email" id="email" value="toby@codegorilla.nl" required />
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password" required />
            </div>

            <input type="hidden" name="crf_token" value="<?= createToken() ?>">

            <div class="mb-3">
                <div class="row">
                    <div class="col-md-6">
                        <input type="submit" class="btn btn-dark" value="Login" />
                    </div>
                    <div class="col-md-6">
                        <div id="login-message"></div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<script src="js/partials/login.js"></script>