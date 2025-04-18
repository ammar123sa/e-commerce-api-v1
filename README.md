<h1 align="center">🛒 Laravel E-Commerce API</h1>

<p align="center"><strong>A Laravel-based API for managing an online store including products, users, carts, orders, and payments.</strong></p>

<p align="center">
  <a href="https://github.com/ammar123sa/e-commerce-api-v1">
    <img src="https://img.shields.io/badge/GitHub-Repository-blue?style=for-the-badge&logo=github" alt="GitHub Repository">
  </a>
</p>

<hr/>

<h2>📝 Description</h2>

<p>This project is a <strong>Laravel-based RESTful API</strong> designed for e-commerce applications. It includes features like user authentication, product management, cart functionality, order processing, and payments. The API supports full CRUD operations and maintains clean relational database structures for scalability.</p>

<ul>
  <li><strong>Users</strong>: Registration, login, and user role management.</li>
  <li><strong>Products</strong>: With category assignment, stock, pricing, and description.</li>
  <li><strong>Cart</strong>: Users can add/remove products before placing an order.</li>
  <li><strong>Orders</strong>: Final step after cart checkout.</li>
  <li><strong>Payments</strong>: Linked to orders and tracks payment status.</li>
</ul>

<hr/>

<h2>🚀 Features</h2>

<ul>
  <li><strong>Authentication</strong>: Laravel Sanctum for secure login/register.</li>
  <li><strong>Product Management</strong>: Full CRUD support.</li>
  <li><strong>Category Linking</strong>: Products belong to categories.</li>
  <li><strong>Cart System</strong>: Manage cart before checkout.</li>
  <li><strong>Order Handling</strong>: Create orders from cart items.</li>
  <li><strong>Payment Flow</strong>: Simulate payment for placed orders.</li>
</ul>

<hr/>

<h2>🛠️ Installation</h2>

<ol>
  <li>Clone the repository:
    <pre><code>git clone https://github.com/ammar123sa/e-commerce-api-v1.git
cd e-commerce-api-v1</code></pre>
  </li>
  <li>Install dependencies:
    <pre><code>composer install</code></pre>
  </li>
  <li>Set up environment:
    <pre><code>cp .env.example .env
php artisan key:generate</code></pre>
  </li>
  <li>Run migrations:
    <pre><code>php artisan migrate</code></pre>
  </li>
  <li>Serve the app:
    <pre><code>php artisan serve</code></pre>
  </li>
</ol>

<hr/>

<h2>🧠 Database Relationships</h2>

<ul>
  <li><strong>Users</strong> have many <strong>Orders</strong> and <strong>Cart Items</strong>.</li>
  <li><strong>Orders</strong> have many <strong>Order Items</strong> and one <strong>Payment</strong>.</li>
  <li><strong>Order Items</strong> relate to <strong>Products</strong>.</li>
  <li><strong>Products</strong> belong to <strong>Categories</strong>.</li>
</ul>

<hr/>

<h2>📡 API Endpoints</h2>

<table>
  <thead>
    <tr>
      <th>Method</th>
      <th>Endpoint</th>
      <th>Description</th>
    </tr>
  </thead>
  <tbody>
    <tr><td>POST</td><td>/api/register</td><td>User registration</td></tr>
    <tr><td>POST</td><td>/api/login</td><td>User login</td></tr>
    <tr><td>GET</td><td>/api/products</td><td>List all products</td></tr>
    <tr><td>GET</td><td>/api/categories</td><td>List all categories</td></tr>
    <tr><td>GET</td><td>/api/cart</td><td>View user cart</td></tr>
    <tr><td>POST</td><td>/api/cart</td><td>Add item to cart</td></tr>
    <tr><td>DELETE</td><td>/api/cart/{id}</td><td>Remove item from cart</td></tr>
    <tr><td>POST</td><td>/api/orders</td><td>Create order from cart</td></tr>
    <tr><td>POST</td><td>/api/orders/{id}/pay</td><td>Pay for an order</td></tr>
    <tr><td>GET</td><td>/api/me</td><td>Get authenticated user info</td></tr>
  </tbody>
</table>

<hr/>

<h2>📂 Project Structure</h2>

<ul>
  <li><code>routes/api.php</code> - All API routes.</li>
  <li><code>app/Http/Controllers/API/</code> - API controllers for each module.</li>
  <li><code>app/Models/</code> - Eloquent models representing database tables.</li>
  <li><code>database/migrations/</code> - Migration files for creating tables.</li>
</ul>

<hr/>

<h2>👨‍💻 Developer</h2>

<p>Built with ❤️ by <a href="https://github.com/ammar123sa">@ammar123sa</a></p>

<hr/>

<h2>📄 License</h2>

<p>This project is open-sourced under the <a href="https://opensource.org/licenses/MIT">MIT License</a>.</p>
