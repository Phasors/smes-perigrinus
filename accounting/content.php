<?php
require_once 'db.php';
$acc->check_sess();
$acc->persist_log();
$acc->logout();

?>
<?php include('header.php'); ?>
<main role="main" class="col-md-9 ml-md-auto col-lg-10 pt-3 px-4">
          <div class="table-responsive">
            <table class="table table-striped table-sm" id="tab">
              <thead>
                <tr>
                  <th>Type</th>
                  <th>Price</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
								<tr>
									<td>Tuition Fee per unit</td>
									<td>12</td>
									<td></td>
								</tr>
								<tr>
									<td>Laboratory Fee</td>
									<td>12</td>
									<td></td>
								</tr>
								<tr>
									<td>Lecture Fee</td>
									<td>12</td>
									<td></td>
								</tr>
								<tr>
									<td>Newspaper</td>
									<td>12</td>
									<td></td>
								</tr>
								<tr>
									<td>Clinic</td>
									<td>12</td>
									<td></td>
								</tr>
								<tr>
									<td>Library</td>
									<td>12</td>
									<td></td>
								</tr>
								<tr>
									<td>Maintenance</td>
									<td>12</td>
									<td></td>
								</tr>
              </tbody>
            </table>
          </div>
        </main>
      </div>
    </div>

<?php include('footer.php'); ?>
