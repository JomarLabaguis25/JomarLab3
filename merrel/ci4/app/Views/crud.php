<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Table</title>
</head>
<style>
    body {
    font-family: Arial, sans-serif;
    margin: 20px;
}
h1 {
    text-align: center;
}
form {
    text-align: center;
    margin-bottom: 20px;
}
form input, form button {
    margin: 5px;
    padding: 5px;
}
table {
    width: 100%;
    border-collapse: collapse;
}
table, th, td {
    border: 1px solid #ccc;
}
th, td {
    padding: 8px;
    text-align: left;
}
th {
    background-color: #f2f2f2;
}
tr:nth-child(even) {
    background-color: #f2f2f2;
}
</style>
<body>
    <h1>Product List</h1>
    <form id="crud-form">
        <input type="text" id="name" placeholder="Name" required>
        <input type="text" id="description" placeholder="Description" required>
        <input type="file" id="image" placeholder="Image URL" required>
        <input type="number" id="price" placeholder="Price" required>
        <input type="text" id="category" placeholder="Category" required>
        <input type="number" id="quantity" placeholder="Quantity" required>
        <button type="submit">Add Product</button>
    </form>
    <table id="product-table">
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Image</th>
            <th>Price</th>
            <th>Category</th>
            <th>Quantity</th>
            <th>Action</th>
        </tr>
    </table>
    <script>
        const form = document.getElementById("crud");
const table = document.getElementById("productS");
let products = [];

form.addEventListener("submit", function (e) {
    e.preventDefault();
    
    const name = document.getElementById("name").value;
    const description = document.getElementById("description").value;
    const image = document.getElementById("image").value;
    const price = document.getElementById("price").value;
    const category = document.getElementById("category").value;
    const quantity = document.getElementById("quantity").value;
    
    products.push({ name, description, image, price, category, quantity });
    displayProducts();
    form.reset();
});

function displayProducts() {
    table.innerHTML = `
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Image</th>
            <th>Price</th>
            <th>Category</th>
            <th>Quantity</th>
            <th>Action</th>
        </tr>
    `;
    
    products.forEach((product, index) => {
        const row = document.createElement("tr");
        row.innerHTML = `
            <td>${product.name}</td>
            <td>${product.description}</td>
            <td><img src="${product.image}" alt="${product.name}" width="50"></td>
            <td>${product.price}</td>
            <td>${product.category}</td>
            <td>${product.quantity}</td>
            <td>
                <button onclick="editProduct(${index})">Edit</button>
                <button onclick="deleteProduct(${index})">Delete</button>
            </td>
        `;
        table.appendChild(row);
    });
}

function deleteProduct(index) {
    products.splice(index, 1);
    displayProducts();
}

function editProduct(index) {
    const product = products[index];
    document.getElementById("name").value = product.name;
    document.getElementById("description").value = product.description;
    document.getElementById("image").value = product.image;
    document.getElementById("price").value = product.price;
    document.getElementById("category").value = product.category;
    document.getElementById("quantity").value = product.quantity;
    deleteProduct(index);
}
    </script>
</body>
</html>