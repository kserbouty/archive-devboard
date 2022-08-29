<?php



use Devboard\Service\AccountService;

$accounts = AccountService::getAccounts();

if (isset($_POST['username'])) {
    $account = array(
        'username' => $_POST['username']
    );
    AccountService::register($account);
}
?>

<section class="login-section">

    <div class="mx-auto mt-5">
        <div class="card-body">
            <h2 class="text-center">Welcome</h2>
            <div class="card mt-5">
                <div class="card-body mt-1">
                    <h5 class="card-title text-center mb-5">New Account</h5>
                    <p class="card-text">Enter your username to create a new account.</p>
                    <form method="post">
                        <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                        <div class="mt-5 mb-3 text-center">
                            <button type="submit" class="btn btn-primary">Sign Up</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php
    if (!empty($accounts)) {
        header('/', true);
    }
    ?>

</section>