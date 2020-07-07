<?php
require_once('layout/DashboardLayout.php');

$page = new DashboardLayout();
?>

<!DOCTYPE html>
<html>
<?php echo $page->pageHeader(); ?>
<body>
    <?php echo $page->sideBar(); ?>

      <!-- Page Content  -->
    <div id="content" class="content">

        <?php echo $page->mainContentHeader(); ?>

        <section class="p-5">
            <h2>Dear Firstname LASTNAME</h2>
            <p>Welcome to your dashboard</p>
        </section>

        <?php echo $page->footer(); ?>
    </div>
    <?php echo $page->footScripts(); ?>
</body>
</html>