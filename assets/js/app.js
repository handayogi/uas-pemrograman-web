document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById("user-form");
    const btn = document.getElementById("btn");
    const usernameInput = document.getElementById("username");
    const emailInput = document.getElementById("email");
    const passwordInput = document.getElementById("password");
    const confirmPasswordInput = document.getElementById("confirmPassword");

    // Event 1: Ketika tombol "Sign Up" diklik dengan input yang valid
    btn.addEventListener("click", (e) => {
        e.preventDefault();
        if (validateForm()) {
            alert("Form Submitted Successfully!");
            clearFormInputs(); // Panggil fungsi untuk mengosongkan input
        }
    });

    // Event 2: Validasi inputan email
    emailInput.addEventListener("input", () => {
        const emailValue = emailInput.value.trim();
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if (!emailPattern.test(emailValue)) {
            emailInput.style.borderColor = "red";
        } else {
            emailInput.style.borderColor = "green";
        }
    });

    // Event 3: Validasi inputan confirm password sesuai dengan password
    confirmPasswordInput.addEventListener("input", () => {
        const passwordValue = passwordInput.value;
        const confirmPasswordValue = confirmPasswordInput.value;

        if (passwordValue !== confirmPasswordValue) {
            confirmPasswordInput.style.borderColor = "red";
        } else {
            confirmPasswordInput.style.borderColor = "green";
        }
    });

    // Fungsi untuk validasi form
    const validateForm = () => {
        const usernameValue = usernameInput.value.trim();
        const emailValue = emailInput.value.trim();
        const passwordValue = passwordInput.value;
        const confirmPasswordValue = confirmPasswordInput.value;

        if (!usernameValue) {
            alert("Please enter a username.");
            return false;
        }

        if (!emailValue || !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(emailValue)) {
            alert("Invalid email address.");
            return false;
        }

        if (!passwordValue || passwordValue.length < 8) {
            alert("Password must be at least 8 characters long.");
            return false;
        }

        if (passwordValue !== confirmPasswordValue) {
            alert("Passwords do not match.");
            return false;
        }

        return true;
    };

    // Fungsi untuk mengosongkan input setelah form berhasil disubmit
    const clearFormInputs = () => {
        usernameInput.value = "";
        emailInput.value = "";
        passwordInput.value = "";
        confirmPasswordInput.value = "";

        // Reset warna border
        usernameInput.style.borderColor = "";
        emailInput.style.borderColor = "";
        passwordInput.style.borderColor = "";
        confirmPasswordInput.style.borderColor = "";
    };

    // Dummy data to simulate server response
    const dummyData = [
        { username: "john_doe", email: "john@example.com", status: "Active" },
        { username: "jane_smith", email: "jane@example.com", status: "Inactive" },
        { username: "alice_williams", email: "alice@example.com", status: "Active" },
    ];

    // Function to populate table with dummy data
    function populateTable() {
        const tableBody = document.getElementById("user-table").getElementsByTagName("tbody")[0];
        dummyData.forEach((user) => {
            const row = document.createElement("tr");
            row.innerHTML = `
                <td>${user.username}</td>
                <td>${user.email}</td>
                <td>${user.status}</td>
            `;
            tableBody.appendChild(row);
        });
    }

    // Populate the table when the page loads
    window.onload = populateTable;
});