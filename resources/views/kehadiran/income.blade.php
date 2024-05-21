<!-- input.html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Pembayaran</title>
</head>
<body>
    <h1>Input Pembayaran</h1>
    <form id="paymentForm">
        <label for="amount">Jumlah Pembayaran:</label>
        <input type="number" id="amount" required>
        <button type="submit">Tambah Pembayaran</button>
    </form>
    <a href="income.html">Lihat Total Income</a>

    <script type="text/javascript">
        document.getElementById('paymentForm').addEventListener('submit', function(event) {
            event.preventDefault();
            const amount = parseFloat(document.getElementById('amount').value);
            if (!isNaN(amount)) {
                let payments = JSON.parse(localStorage.getItem('payments')) || [];
                payments.push(amount);
                localStorage.setItem('payments', JSON.stringify(payments));
                document.getElementById('paymentForm').reset();
                alert('Pembayaran berhasil ditambahkan!');
            }
        });
    </script>
</body>
</html>
