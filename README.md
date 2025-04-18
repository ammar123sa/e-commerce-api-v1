<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-commerce-api-v1 README</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            line-height: 1.6;
            padding: 20px;
        }
        h1 {
            color: #333;
        }
        h2 {
            color: #444;
        }
        pre {
            background-color: #333;
            color: #fff;
            padding: 10px;
            border-radius: 5px;
            font-size: 14px;
            overflow-x: auto;
        }
        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    <h1>🛒 e-commerce-api-v1</h1>
    <p>A Laravel REST API for a simple e-commerce system. Handles user registration, product management, cart, orders, and payments.</p>

    <h2>🚀 Features</h2>
    <ul>
        <li>User authentication with Laravel Sanctum</li>
        <li>Product and category management</li>
        <li>Add/remove products to/from cart</li>
        <li>Place orders and make payments</li>
        <li>RESTful API using Laravel resource controllers</li>
    </ul>

    <h2>🧠 Database Relationships</h2>
    <pre>
User → hasMany → Orders  
Order → hasMany → OrderItems  
OrderItem → belongsTo → Product  
User → hasMany → Cart  
Order → hasOne → Payment
    </pre>

    <h2>⚙️ Requirements</h2>
    <ul>
        <li>PHP >= 8.1</li>
        <li>Composer</li>
        <li>Laravel >= 10</li>
        <li>MySQL or SQLite</li>
    </ul>

    <h2>🛠️ Installation</h2>
    <pre>
git clone https://github.com/ammar123sa/e-commerce-api-v1.git
cd e-commerce-api-v1
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
    </pre>

    <h2>🔐 Authentication</h2>
    <p>Uses Laravel Sanctum for token-based authentication. After logging in, include the token in your API requests:</p>
    <pre>
Authorization: Bearer {your_token_here}
    </pre>

    <h2>📦 API Endpoints (Sample)</h2>
    <table>
        <thead>
            <tr>
                <th>Method</th>
                <th>Endpoint</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>POST</td>
                <td>/api/register</td>
                <td>Register a new user</td>
            </tr>
            <tr>
                <td>POST</td>
                <td>/api/login</td>
                <td>Login user</td>
            </tr>
            <tr>
                <td>GET</td>
                <td>/api/products</td>
                <td>Fetch all products</td>
            </tr>
            <tr>
                <td>GET</td>
                <td>/api/categories</td>
                <td>Fetch all categories</td>
            </tr>
            <tr>
                <td>GET</td>
                <td>/api/cart</td>
                <td>View user's cart</td>
            </tr>
            <tr>
                <td>POST</td>
                <td>/api/orders</td>
                <td>Create a new order</td>
            </tr>
            <tr>
                <td>POST</td>
                <td>/api/orders/{id}/pay</td>
                <td>Make payment for an order</td>
            </tr>
            <tr>
                <td>GET</td>
                <td>/api/me</td>
                <td>Get authenticated user info</td>
            </tr>
        </tbody>
    </table>

    <h2>📂 Project Structure</h2>
    <ul>
        <li><code>/app/Http/Controllers/API</code> → API Controllers</li>
        <li><code>routes/api.php</code> → API routes</li>
        <li><code>app/Models/</code> → Eloquent models and relationships</li>
    </ul>

    <h2>👨‍💻 Developer</h2>
    <p>Built with ❤️ by <a href="https://github.com/ammar123sa">@ammar123sa</a></p>
    <p>Let the backend games begin.</p>

    <h2>📄 License</h2>
    <p>Open-sourced under the <a href="https://opensource.org/licenses/MIT">MIT license</a>.</p>

</body>
</html>
