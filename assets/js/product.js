document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById("product-form");
    const responseMessage = document.querySelector(".response-message");

    // Mengambil informasi browser dan IP
    let userBrowser = navigator.userAgent;
    let userIP = "";

    async function fetchIP() {
        const response = await fetch("https://api64.ipify.org?format=json");
        const data = await response.json();
        userIP = data.ip;
    }

    fetchIP();

    // Menampilkan product sebagai cards
    function displayProducts(products) {
        const productDisplay = document.getElementById("product-display");
        productDisplay.innerHTML = products
            .map(
                (product) => `
            <div class="product-card">
                <div class="product-details">
                    <p><strong>Code:</strong> ${product.product_code}</p>
                    <p><strong>Name:</strong> ${product.product_name}</p>
                    <p><strong>Category:</strong> ${product.product_category}</p>
                    <p><strong>Price:</strong> $${product.product_price}</p>
                </div>
                <div class="product-actions">
                    <button class="edit" onclick="editProduct(${product.id}, '${product.product_code}', '${product.product_name}', '${product.product_category}', '${product.product_price}')">Edit</button>
                    <button class="delete" onclick="deleteProduct(${product.id})">Delete</button>
                </div>
            </div>
            `
            )
            .join("");
    }

    // Mengambil daftar produk
    function fetchProducts() {
        fetch("../controller/process.php")
            .then((response) => response.json())
            .then((data) => displayProducts(data));
    }

    // Submit form with AJAX (add or update product)
    form.addEventListener("submit", async (e) => {
        e.preventDefault();

        const formData = new FormData(form);
        const action = form.dataset.action || "add"; // "add" or "edit"
        formData.append("action", action);
        formData.append("browser", userBrowser);
        formData.append("ip", userIP);

        if (action === "edit") {
            const productId = form.dataset.id;
            formData.append("id", productId);
        }

        fetch("../controller/process.php", {
            method: "POST",
            body: formData,
        })
            .then(response => response.text())
            .then(message => {
                responseMessage.textContent = message;
                form.reset();
                delete form.dataset.action; // Clear action
                delete form.dataset.id; // Clear product ID
                fetchProducts();
            });
    });

    // Edit product
    window.editProduct = (id, code, name, category, price) => {
        document.getElementById("code").value = code;
        document.getElementById("name").value = name;
        document.getElementById("category").value = category;
        document.getElementById("price").value = price;

        form.dataset.action = "edit";
        form.dataset.id = id;
    };

    // Delete product
    window.deleteProduct = id => {
        const formData = new FormData();
        formData.append("action", "delete");
        formData.append("id", id);

        fetch("../controller/process.php", {
            method: "POST",
            body: formData,
        })
            .then(response => response.text())
            .then(message => {
                responseMessage.textContent = message;
                fetchProducts();
            });
    };

    // Initialize product list
    fetchProducts();
});
