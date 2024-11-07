function searchBooks() {
    let query = document.getElementById('search').value;
    // AJAX call to fetch and display books
}

// Cart Management
let cart = [];

function addToCart(bookId) {
    // Add book to cart
    cart.push({id: bookId, quantity: 1});
    console.log('Book added to cart:', cart);
}
