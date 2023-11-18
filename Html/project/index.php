<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style> 
	/* Add spacing between shop name and menu */
..shop-info {
    display: flex; /* Use flexbox to align items horizontally */
    align-items: center; /* Vertically center align the items */
    justify-content: space-between; /* Distribute items along the container */
    margin-bottom: 20px;
    padding: 10px; /* Add some padding for spacing */
    border-bottom: 2px solid #333;
}

.shop-name {
    font-size: 100px; /* Increase the font size */
    font-weight: bold; /* Apply bold font style */
    font-family: "Arial", sans-serif; /* Apply a specific font family */
    text-transform: uppercase; /* Convert text to uppercase */
}
.rounded-implace {
    width: 200px;
    height: 200px;
    border-radius: 50%;
    margin-left: 700px;
    background-implace: url('https://th.bing.com/th/id/OIP.pA3QV9le3tWkxzb9gqli0gHaFj?pid=ImgDet&rs=1');
    background-size: cover;
    background-position: center;
    border-radius: 50%;
    animation: rotate 4s linear infinite; /* Apply the animation */
}

@keyframes rotate {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(360deg);
    }
}

.rounded-implaces {
    width: 200px;
    height: 200px;
    border-radius: 50%;
    margin-right: 500px;
    background-implace: url('https://res.cloudinary.com/swiggy/implace/upload/fl_lossy,f_auto,q_auto/c540zwp1j8fvw6oyrd');
    background-size: cover;
    background-position: center;
    border-radius: 50%;
    animation: rotate 4s linear infinite; /* Apply the animation */
}

@keyframes rotate {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(360deg);
    }
}


.menu-container {
    display: flex;
    flex-wrap: wrap;
    width: 100%;
    justify-content: center;
    gap: 20px;
    background-color: #f2f2f2;
}

.menu-item {
    display: inline-block;
    vertical-align: top;
    margin: 1em;
    border: 1px solid #ccc;
    padding: 10px;
    text-align: center;
    max-width: 250px;
    width: 100%; /* Adjust to make items take full container width */
    box-sizing: border-box;
}

/*.menu-item img {
    width: 100%;
    height: auto;
}*/
/* Add this CSS to your stylesheet */
.menu-item img {
    width: 100%;
    height: auto;
    transition: transform 0.2s; /* Add a smooth transition effect */
}

.menu-item img:hover {
    transform: scale(1.1); /* Scale the implace up by 10% on hover */
}


.menu-item-details {
    display: flex;
    flex-direction: column;
    text-align: left;
    margin-top: 10px;
    background-color: #ff69b4; /* Replace with your desired background color */
    padding: 10px; /* Add padding for better visual appearance */
}

.rating {
    color: orange;
}

#order-summary {
    background-color: #f2f2f2;
    padding: 20px;
    border-top: 1px solid #ddd;
    text-align: center;
}

#ordered-items {
    list-style: none;
    padding: 0;
}

#total-price {
    font-weight: bold;
}
</style>
    <title>Food Order</title>
</head>
<body>
    <header>
        <div class="shop-info">
          <img src="https://wallpaperaccess.com/full/4622468.jpg" class="rounded-implace ">
             <img src="https://res.cloudinary.com/swiggy/implace/upload/fl_lossy,f_auto,q_auto/c540zwp1j8fvw6oyrd9i" class="rounded-implaces ">
            <span class="shop-name">frndz hotel</span>
        </div>

    </header>
     <form action="submit.php" method="POST">
    <h1>Menu</h1>
    <main id="menu">
         <li>
            <h2>Tea</h2>
            <p>Price: $8</p>
            <p>Rating: 4.2</p>
            <input type="image" src="https://th.bing.com/th/id/OIP.vaIjDiQOYetnKJsdIAo7YQHaE7?pid=ImgDet&rs=1" alt="Tea">
			<br>
			<input type="checkbox" name="item" value="Tea">
		</li>
        <!-- Menu items will be dynamically added here using JavaScript -->
    </main>
    <section id="order-summary">
       <form action="submit.php" method="POST">
        <h2>Your Order</h2>
        <ul id="ordered-items"></ul>
        <p id="total-price">Total: $0</p>
    </section>
    <footer>
        <button type="submit" id="place-order-btn" >Place Or
        der</button>
    </footer>
     </form>
    <script>
	const menuItems = [
 { name: 'tea', price: 8, rating: 4.2, implaceUrl: 'https://th.bing.com/th/id/OIP.vaIjDiQOYetnKJsdIAo7YQHaE7?pid=ImgDet&rs=1' },
 { name: 'Cofe', price: 8, rating: 4.2, implaceUrl: 'https://th.bing.com/th/id/OIP.fYqo-qbw7F_NRe5pg3y_gQHaE8?pid=ImgDet&rs=1' },
 { name: 'idly', price: 12, rating: 4.8, implaceUrl: 'https://th.bing.com/th/id/OIP.GVHVnM9auFQcC1RiqJx4mAHaE7?pid=ImgDet&rs=1' },
{ name: 'pongal', price: 10, rating: 4.5, implaceUrl: 'https://th.bing.com/th/id/OIP.j8j87FVG7v9bEcdAUWBQzAHaE8?pid=ImgDet&rs=1' },
    { name: 'Dosa', price: 8, rating: 4.2, implaceUrl: 'https://th.bing.com/th/id/OIP.jldq3CQYkKgrg-zsABHNtAHaE7?pid=ImgDet&rs=1' },
    { name: 'podi Dosa', price: 8, rating: 4.2, implaceUrl: 'https://th.bing.com/th/id/R.72c0e3e2f6c79aea3ff8afcfd8513b40?rik=%2bQV9cBLS1XeVWQ&riu=http%3a%2f%2f4.bp.blogspot.com%2f-UhOZnFrW6oE%2fVgja-KyH3aI%2fAAAAAAAAMr4%2f9TNHNNjiV3E%2fs1600%2fII1A2926.JPG&ehk=a8Ti%2bcgLuxTyM%2f5XsTxr7SH2bt7QVd10aqdqiFxcVIg%3d&risl=&pid=ImgRaw&r=0' },
     { name: 'Masala-Dosa', price: 8, rating: 4.2, implaceUrl: 'https://th.bing.com/th/id/OIP.XSCo5S6kP3o-7-jVqH4vGgHaE8?pid=ImgDet&rs=1' },
    { name: 'uthappam', price: 8, rating: 4.2, implaceUrl: 'https://vaya.in/recipes/wp-content/uploads/2018/02/Uthappam.jpg' },
       { name: 'poori', price: 8, rating: 4.2, implaceUrl: 'https://i1.wp.com/www.cookingfromheart.com/wp-content/uploads/2016/04/poori-3.jpg?resize=800%2C533' },
         { name: 'vada', price: 8, rating: 4.2, implaceUrl: 'https://th.bing.com/th/id/R.ee7b3b36ecfef5d597ca25f1bae953f0?rik=Pa725sPSRa2MMA&riu=http%3a%2f%2fhealthyliving.natureloc.com%2fwp-content%2fuploads%2f2015%2f10%2fSoft-and-spicy-Uzhunnu-vada-or-Urad-dal-vada.jpg&ehk=DG5W%2bQEC6XTahc8xk4UHyrR8jttlT0W1ofoFsYfFkQk%3d&risl=&pid=ImgRaw&r=0' },
       
];

const menuContainer = document.getElementById('menu');
const orderedItemsList = document.getElementById('ordered-items');
const totalPriceElement = document.getElementById('total-price');
const placeOrderButton = document.getElementById('place-order-btn');

menuItems.forEach(item => {
    const menuItemElement = document.createElement('div');
    menuItemElement.className = 'menu-item';
    menuItemElement.innerHTML = `
        <img src="${item.implaceUrl}" alt="${item.name}">
        <h2>${item.name}</h2>
        <p>Price: $${item.price}</p>
        <p class="rating">Rating: ${item.rating}</p>
        <input type="checkbox" id="${item.name.toLowerCase()}-checkbox">
    `;
    menuContainer.appendChild(menuItemElement);
});

// Handle order placement
placeOrderButton.addEventListener('click', () => {
    const selectedItems = menuItems.filter(item => {
        const checkbox = document.getElementById(item.name.toLowerCase() + '-checkbox');
        return checkbox.checked;
    });

    if (selectedItems.length > 0) {
        // Display ordered items and calculate total price
        orderedItemsList.innerHTML = '';
        let totalPrice = 0;
        selectedItems.forEach(item => {
            const listItem = document.createElement('li');
            listItem.textContent = `${item.name} - $${item.price}`;
            orderedItemsList.appendChild(listItem);
            totalPrice += item.price;
        });

        totalPriceElement.textContent = `Total: $${totalPrice}`;
    } else {
        alert('Please select at least one item.');
    }document.addEventListener("DOMContentLoaded", function() {
    const form = document.getElementById("orderForm"); // Replace "orderForm" with the actual ID of your form
    
    form.addEventListener("submit", async function(event) {
        event.preventDefault();
        
        const selectedItems = [];
        const checkboxes = form.querySelectorAll("input[type='checkbox']:checked");
        checkboxes.forEach(checkbox => {
            selectedItems.push(checkbox.value);
        });
        
        const totalPrice = document.getElementById("total-price").value; // Replace "totalPrice" with the actual ID of your total price input
        
        const formData = new FormData();
        formData.append("selected-items", JSON.stringify(selectedItems));
        formData.append("total-price", totalPrice);
        
        try {
            const response = await fetch("submit.php", {
                method: "POST",
                body: formData
            });
            
            if (response.ok) {
                const result = await response.text();
                alert(result); // Display success message or error message
                window.location.href = "index.php"; // Redirect to index.php
            } else {
                throw new Error("Something went wrong");
            }
        } catch (error) {
            console.error(error);
            alert("An error occurred. Please try again.");
        }
    });
});


});
	</script>
</body>
</html>