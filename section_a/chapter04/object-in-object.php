<?php
declare(strict_types=1);

class Account
{
    public AccountNumber $number;
    public string $type;
    protected float $balance;

    public function __construct(AccountNumber $number, string $type, float $balance = 0.00)
    {
        $this->number = $number;
        $this->type = $type;
        $this->balance = $balance;
    }

    public function deposit(float $amount): float
    {
        $this->balance += $amount;
        return $this->balance;
    }

    public function withdraw(float $amount): float
    {
        $this->balance -= $amount;
        return $this->balance;
    }

    public function getBalance(): float
    {
        return $this->balance;
    }
}

class AccountNumber
{
    public int $accountNumber;
    public int $routingNumber;

    public function __construct(int $accountNumber, int $routingNumber)
    {
        $this->accountNumber = $accountNumber;
        $this->routingNumber = $routingNumber;
    }
}

// Create an object to store in the property.
$numbers = new AccountNumber(accountNumber: 12345678, routingNumber: 987654321);
$account = new Account(number: $numbers, type: 'Savings', balance: 10.00);
?>
<?php include 'includes/header.php'; ?>
<h2><?= $account->type ?></h2>
<p>
    Account <?= $account->number->accountNumber ?><br>
    Routing <?= $account->number->routingNumber ?>
</p>
<?php include 'includes/footer.php' ?>

