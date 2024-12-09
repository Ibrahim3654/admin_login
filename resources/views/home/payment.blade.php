<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment - TrendSwap</title>
    <link rel="stylesheet" href="{{ asset('style.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: 'Montserrat', sans-serif;
            overflow-x: hidden;
            background-color: #f9f9f9;
        }

        main {
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        h2 {
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            color: black;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        label {
            font-size: 14px;
            font-weight: bold;
            color: black;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
            font-family: 'Montserrat', sans-serif;
        }

        #confirm-payment {
            width: 100%;
            padding: 12px;
            border: 2px solid black;
            background-color: white;
            color: black;
            font-size: 16px;
            font-family: 'Montserrat', sans-serif;
            font-weight: bold;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        #confirm-payment:hover {
            background-color: black;
            color: white;
        }

        .error-message {
            color: red;
            font-size: 12px;
            margin-top: -10px;
            margin-bottom: 10px;
        }

        .success-message {
            text-align: center;
            font-size: 16px;
            font-weight: bold;
            color: green;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <main>
        <h2>Payment</h2>
        <form id="payment-form">
            <label for="card-number">Card Number</label>
            <input type="text" id="card-number" name="card-number" maxlength="16" placeholder="1234 5678 9012 3456" required>
            <div class="error-message" id="card-number-error"></div>

            <label for="expiry-date">Expiration Date</label>
            <input type="text" id="expiry-date" name="expiry-date" placeholder="MM/YY" maxlength="5" required>
            <div class="error-message" id="expiry-date-error"></div>

            <label for="cvc">CVC</label>
            <input type="text" id="cvc" name="cvc" maxlength="3" placeholder="123" required>
            <div class="error-message" id="cvc-error"></div>

            <button type="submit" id="confirm-payment">Confirm Payment</button>
        </form>
        <div class="success-message" id="success-message" style="display: none;">
            Thank you for your purchase! Redirecting to the home page...
        </div>
    </main>

    <script>
        function clearBasket() {
            localStorage.removeItem('basket'); 
        }

        document.getElementById('payment-form').addEventListener('submit', function(e) {
            e.preventDefault();

            const cardNumber = document.getElementById('card-number').value;
            const expiryDate = document.getElementById('expiry-date').value;
            const cvc = document.getElementById('cvc').value;

            let isValid = true;

            document.getElementById('card-number-error').textContent = '';
            document.getElementById('expiry-date-error').textContent = '';
            document.getElementById('cvc-error').textContent = '';

            if (!/^\d{16}$/.test(cardNumber)) {
                document.getElementById('card-number-error').textContent = 'Please enter a valid 16-digit card number.';
                isValid = false;
            }

            if (!/^(0[1-9]|1[0-2])\/\d{2}$/.test(expiryDate)) {
                document.getElementById('expiry-date-error').textContent = 'Please enter a valid expiration date (MM/YY).';
                isValid = false;
            }

            if (!/^\d{3}$/.test(cvc)) {
                document.getElementById('cvc-error').textContent = 'Please enter a valid 3-digit CVC.';
                isValid = false;
            }

            if (isValid) {
                clearBasket();

                const successMessage = document.getElementById('success-message');
                successMessage.style.display = 'block';

                setTimeout(() => {
                    window.location.href = "{{route('home.index')}}"; 
                }, 3000); 
            }
        });
    </script>
</body>
</html>