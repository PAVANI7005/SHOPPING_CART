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

Preview/outpt:

![Image](https://github.com/user-attachments/assets/84642c14-6aad-4d53-8dcf-af71d16df7fe)

![Image](https://github.com/user-attachments/assets/197136c0-1a7d-4c7a-9ebc-065efd1998bd)

![Image](https://github.com/user-attachments/assets/0a12808b-7a11-4cdc-b9ab-a34d753b2ac1)

![Image](https://github.com/user-attachments/assets/288a46a6-688a-4f3c-a3f9-38e56065a695)

![Image](https://github.com/user-attachments/assets/49d48bd9-209a-4e23-9382-10d5d35875bb)

![Image](https://github.com/user-attachments/assets/622fed39-9702-45e1-858a-670496a39730)

![Image](https://github.com/user-attachments/assets/865be310-9829-4e6b-8abc-ee90da330282)

![Image](https://github.com/user-attachments/assets/f4b540b1-e449-47fc-b564-3c487d70f903)

![Image](https://github.com/user-attachments/assets/d814976d-b8db-4cd0-a9fa-53e580430125)

License
MIT License
OUTPUT:

![Image](https://github.com/user-attachments/assets/5d940dd6-d58f-4391-86a7-78274fc51f70)
