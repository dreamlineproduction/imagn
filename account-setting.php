<?php include 'parts/modals.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Settings - Imagn</title>
    <link href="fucking-css/bootstrap.css" rel="stylesheet">
    <link href="fucking-css/main.css" rel="stylesheet">
    <link href="fucking-css/responsive.css" rel="stylesheet">
    <link href="webfonts/stylesheet.css" rel="stylesheet">

    <link rel="stylesheet" href="webfonts/stylesheet.css" type="text/css" charset="utf-8" />







</head>

<body>

    <?php include 'include/navbar1-after-login.php';?>
    <div class="supreme-container">

        <section class="profile-settings-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center mb-4 my-4">
                            <h1>Account Settings</h1>
                        </div>

                        <div class="row">
                            <div class="col-4">
                                <div class="list-group" id="list-tab" role="tablist">
                                    <a class="list-group-item list-group-item-action active" id="list-home-list"
                                        data-bs-toggle="list" href="#list-general" role="tab" aria-controls="general"><i
                                            class="fas fa-cog"></i> General</a>
                                    <a class="list-group-item list-group-item-action" id="list-profile-list"
                                        data-bs-toggle="list" href="#list-security" role="tab"
                                        aria-controls="security"><i class="fas fa-key"></i> Security and
                                        login</a>
                                    <a class="list-group-item list-group-item-action" id="list-messages-list"
                                        data-bs-toggle="list" href="#list-privacy" role="tab" aria-controls="privacy"><i
                                            class="fas fa-user-shield"></i> Privacy</a>

                                </div>
                            </div>
                            <div class="col-8">
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="list-general" role="tabpanel"
                                        aria-labelledby="list-general-list">...</div>
                                    <div class="tab-pane fade" id="list-security" role="tabpanel"
                                        aria-labelledby="list-security-list">...</div>
                                    <div class="tab-pane fade" id="list-privacy" role="tabpanel"
                                        aria-labelledby="list-privacy-list">...</div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>








    </div>
</body>

</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="fucking-js/bootstrap.bundle.js"></script>

<script src="fucking-js/custom.js"></script>
<script src="fucking-js/all.js"></script>
<script src="fucking-js/app.js"></script>
<script src="fucking-js/tag-input.js"></script>