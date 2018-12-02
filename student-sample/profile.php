
<?php include 'header.php'; ?>



<div id="content-body">

   <?php include 'profile/nav-pills.php'; ?>
 
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-personal" role="tabpanel" aria-labelledby="nav-personal-tab">
            <?php include 'profile/personal_data.php'; ?>
        </div>

        <div class="tab-pane fade" id="nav-family-back" role="tabpanel" aria-labelledby="nav-profile-tab">
            <?php include 'profile/family_back.php'; ?>
        </div>

        <div class="tab-pane fade" id="nav-educ-attn" role="tabpanel" aria-labelledby="nav-educ-attn-tab">
            <?php include 'profile/educ_attain.php'; ?>
        </div>

        <div class="tab-pane fade" id="change-pass" role="tabpanel" aria-labelledby="change-pass-tab">
            <?php include 'profile/change_pass.php'; ?>
        </div>
    </div>

</div> <!-- conter-body -->

<?php include 'footer.php';?>