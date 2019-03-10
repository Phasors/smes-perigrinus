<?php
    require_once 'db.php';

    $accounts = $acc->get_accounts();
    $rows = [];
    foreach ($accounts as $account) {
        $id = $account['account_id'];
        $res = $acc->query("SELECT Accounts.account_name, IFNULL(SUM(debit), 0) AS db, IFNULL(SUM(credit),0) AS cb FROM
        accounting_journal INNER JOIN Accounts ON
        accounting_journal.account_id=Accounts.account_id WHERE accounting_journal.account_id = $id");
        while ($row = $res->fetch_array())
            $rows[] = $row;
    }
    echo json_encode($rows);
?>
