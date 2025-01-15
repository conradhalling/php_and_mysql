<?php
declare(strict_types=1);

include 'classes/Account.php';
include 'classes/Customer.php';

$accounts = [
    new Account(number: 20489446, type: 'Checking', balance: -20),
    new Account(number: 20148896, type: 'Savings', balance: 380),
];

$customer = new Customer(
    forename: 'Ivy',
    surname: 'Stone',
    email: 'ivy@eg.link',
    password: 'Jup!t3r2684',
    accounts: $accounts
);
?>

<?php include 'includes/header.php'; ?>
<h2>Name: <strong><?= $customer->getFullName() ?></strong></h2>

<table>
    <tr>
        <th>Account Number</th>
        <th>Account Type</th>
        <th>Balance</th>
    </tr>
    <?php foreach ($customer->accounts as $account) { ?>
        <tr>
            <td><?= $account->number ?></td>
            <td><?= $account->type ?></td>
            <?php if ($account->getBalance() >= 0) { ?>
                <td class="credit">$<?= $account->getBalance() ?></td>
            <?php } else { ?>
                <td class="overdrawn">$<?= $account->getBalance() ?></td>
            <?php } ?>
        </tr>
    <?php } ?>
</table>
<?php include 'includes/footer.php'; ?>

