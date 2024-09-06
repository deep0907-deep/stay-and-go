<?php include 'header.php'; ?>

<!-- BODY-LOGIN -->
<section class="body-page page-v1 page-v2">
    <div class="container">
        <div class="content">
            <h2 class="sky-h3">REGISTER FORM</h2>
            <h5 class="p-v1">If you no have account in The Lotus Hotel! Register and feeling</h5>
            <form action="reg.php" method="post" >
                <div class="form-group">
                    <input type="text" class="form-control" name="username" value="" placeholder="User Name *">
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" value="" required="required" title=""
                        placeholder="Email *">
                </div>
                <div class="form-group">
                    <input id="password-field" type="password" class="form-control" name="password"
                        placeholder="Password *">
                    <span data-toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                </div>
                <div class="form-group">
                    <input id="password-field1" type="password" class="form-control" name="cpassword"
                        placeholder="Confirm Password *">
                    <span data-toggle="#password-field1" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                </div>
                <button type="submit" class="btn btn-default">REGISTER</button>
            </form>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>