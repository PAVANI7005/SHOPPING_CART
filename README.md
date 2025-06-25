# SHOPPING_CART
A simple web-based chocolate catalog application with user registration and login functionality using HTML, CSS, JavaScript, and PHP.

# Chocolate Catalog Web Application 🍫

A simple web-based chocolate catalog application with user registration and login functionality using HTML, CSS, JavaScript, and PHP.

## Features

- 🔐 User Registration & Login (with basic credential storage)
- 🛍️ Chocolate Product Catalog
- 🛒 Add to Cart feature (using `localStorage`)
- 🌐 Stylish glassmorphism-inspired UI design

## File Structure
├── index.html # Landing page with links to register or log in
├── register.html # User registration form
├── register.php # Backend PHP handler to save user data
├── login.html # User login form
├── action_page.php # Login handler to verify credentials
├── menu.html # Main menu page after login
├── catalog.html # Chocolate catalog with add-to-cart functionality
├── users.txt # Plain text file storing registered users
├── profile.png # (Optional) Profile icon for login page
├── [images] # Chocolate product images (dairy.jpg, cele.webp, etc.)

## How to Use

1. Clone or download the repository:

  ```bash
  git clone https://github.com/your-username/chocolate-catalog.git

2.Place the folder in your local PHP server (e.g., htdocs for XAMPP or www for WAMP).

3.Start your local PHP server and open:

  http://localhost/chocolate-catalog/index.html

4.Register a new account, then log in.

5.Browse the catalog and add products to your cart.

Notes
  =>User data is saved in users.txt in a basic format (username,email,hashed-password). This is for learning purposes only and not secure for production.

  =>The cart is stored in localStorage, meaning it's client-side only and resets per browser/device.

  =>PHP must be enabled for the backend registration and login functionality to work.
License
MIT License
