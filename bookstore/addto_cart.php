<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add to Cart Form with Pop-up and Go to Cart</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        /* Custom Styles */
        body {
            background-color: #f8f9fa;
        }
        .product-card {
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            background-color: #fff;
            margin-bottom: 20px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
        }
        .product-img {
            width: 100%;
            height: auto;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        .product-card-body {
            padding: 20px;
        }
        .product-title {
            font-size: 1.25rem;
            font-weight: bold;
        }
        .product-price {
            font-size: 1.5rem;
            color: #28a745;
            font-weight: bold;
        }
        .cart-form .form-group label {
            font-size: 0.9rem;
            font-weight: bold;
        }
        .cart-form .form-control {
            font-size: 1rem;
            padding: 0.5rem;
        }
        .add-to-cart-btn {
            width: 100%;
            font-size: 1.1rem;
            padding: 10px;
            background-color: #007bff;
            border: none;
            color: #fff;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }
        .add-to-cart-btn:hover {
            background-color: #0056b3;
        }
        /* Cart Section */
        .cart-section {
            margin-top: 50px;
        }
        .cart-item {
            padding: 10px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4">
            <!-- Product Card -->
            <div class="product-card">
                <!-- Product Image -->
                <img src="https://via.placeholder.com/400x300" alt="Product" class="product-img" loading="lazy">
                <div class="product-card-body">
                    <!-- Product Name -->
                    <h5 class="product-title">Awesome Product</h5>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non urna nec urna efficitur.</p>
                    <!-- Product Price -->
                    <p class="product-price">$19.99</p>

                    <!-- Add to Cart Form -->
                    <form class="cart-form" id="cartForm">
                        <div class="form-group">
                            <label for="quantity">Quantity</label>
                            <input type="number" class="form-control" id="quantity" name="quantity" value="1" min="1" required>
                        </div>
                        <button type="submit" class="add-to-cart-btn">Add to Cart</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap Modal -->
<div class="modal fade" id="cartModal" tabindex="-1" aria-labelledby="cartModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cartModalLabel">Added to Cart</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p id="cartMessage">You have successfully added <span id="cartQuantity"></span> item(s) to the cart.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="goToCartBtn">Go to Cart</button>
            </div>
        </div>
    </div>
</div>

<!-- Cart Section (For demo purposes) -->
<div class="cart-section" id="cartSection" style="display:none;">
    <h4>Your Cart</h4>
    <div id="cartItems"></div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<!-- JavaScript for form submission, modal display, and "Go to Cart" functionality -->
<script>
    let cart = [];

    // Handle form submission and show modal
    document.querySelector('#cartForm').addEventListener('submit', function(event) {
        event.preventDefault();  // Prevent default form submission
        
        const quantity = document.querySelector('#quantity').value;
        
        // Show confirmation message in the modal
        document.querySelector('#cartQuantity').textContent = quantity;
        
        // Show the modal
        const cartModal = new bootstrap.Modal(document.getElementById('cartModal'));
        cartModal.show();
        
        // Store item in the cart (for demo purposes)
        cart.push({
            name: 'Awesome Product',
            price: '$19.99',
            quantity: quantity
        });
    });

    // Go to Cart button functionality
    document.querySelector('#goToCartBtn').addEventListener('click', function() {
        // Hide the product card and show the cart section
        document.querySelector('.container').style.display = 'none';
        document.querySelector('#cartSection').style.display = 'block';

        // Populate the cart section with the cart items
        const cartItemsDiv = document.querySelector('#cartItems');
        cartItemsDiv.innerHTML = '';  // Clear existing items
        cart.forEach(item => {
            const cartItemDiv = document.createElement('div');
            cartItemDiv.classList.add('cart-item');
            cartItemDiv.innerHTML = `
                <strong>${item.name}</strong> - ${item.price} x ${item.quantity}
            `;
            cartItemsDiv.appendChild(cartItemDiv);
        });
    });
</script>

</body>
</html>
