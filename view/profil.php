<?php $title = 'profil'; ?>

<?php ob_start(); ?>
<div class="row">
    <div class="col-12">
        <div class="card">

            <div class="card-body">
                <div class="card-title mb-4">
                    <div class="d-flex justify-content-start">
                        <div class="image-container">
                            <img src="https://www.gravatar.com/avatar/<?= $result['avatar'] ?>" id="imgProfile" style="width: 200px; height: 200px" class="img-thumbnail" />
                        </div>
                        <div class="ml-auto">
                            <input type="button" class="btn btn-primary d-none" id="btnDiscard" value="Discard Changes" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="tab-content ml-1" id="myTabContent">
                            <div class="tab-pane fade show active" id="basicInfo" role="tabpanel" aria-labelledby="basicInfo-tab">


                                <!-- <div class="row">
                                    <div class="col-sm-3 col-md-2 col-5">
                                        <label style="font-weight:bold;">Full Name</label>
                                    </div>
                                    <div class="col-md-8 col-6">
                                        Jane/John Doe
                                    </div>
                                </div> 
                                <hr />-->

                                <!-- <div class="row">
                                    <div class="col-sm-3 col-md-2 col-5">
                                        <label style="font-weight:bold;">Birth Date</label>
                                    </div>
                                    <div class="col-md-8 col-6">
                                        March 22, 1994
                                    </div>
                                </div>
                                <hr /> -->


                                <div class="row">
                                    <div class="col-sm-3 col-md-2 col-5">
                                        <label style="font-weight:bold;">User Name</label>
                                    </div>
                                    <div class="col-md-8 col-6">
                                    <?= $result['username'] ?>
                                    </div>
                                </div>
                                <hr />
                                <div class="row">
                                    <div class="col-sm-3 col-md-2 col-5">
                                        <label style="font-weight:bold;">E-mail</label>
                                    </div>
                                    <div class="col-md-8 col-6">
                                    <?= $result['email'] ?> 
                                    </div>
                                </div>
                                <hr />

                                <div class="row">
                                    <a href="./index.php?action=modifyprofile" class="btn btn-primary">modify your profile</a>
                                    <a href="./index.php?action=deleteprofile" class="btn btn-primary">delete your profile</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </div>
</div>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>