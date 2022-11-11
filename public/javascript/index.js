function incrementQuantity(e, key) {
    e.preventDefault()
    var quantity_label = document.getElementById(`quantity_label_${key}`)
    var decrement_button = document.getElementById(`decrement_button_${key}`)
    decrement_button.removeAttribute('disabled')
    quantity_label.value = Number(quantity_label.value) + 1
}

function decrementQuantity(e, key) {
    e.preventDefault()
    var quantity_label = document.getElementById(`quantity_label_${key}`)
    var decrement_button = document.getElementById(`decrement_button_${key}`)
    quantity_label.value = Number(quantity_label.value) - 1
    if (quantity_label.value == '1') {
        decrement_button.setAttribute('disabled', true)
    }
}

async function incrementCart(key, price) {
    var quantity_label = document.getElementById(`quantity_label_${key}`)
    var cart_item_label = document.getElementById(`cart_item_label_${key}`)
    var decrement_button = document.getElementById(`decrement_button_${key}`)
    var price_label = document.getElementById(`price_label_${key}`)
    var subtotal_label = document.getElementById('subtotal');
    var tax_label = document.getElementById('tax');
    var total_label = document.getElementById('total');

    decrement_button.removeAttribute('disabled')
    var quantity = Number(quantity_label.value) + 1

    var data = {
        quantity: quantity,
        cart_item_id: cart_item_label.value
    }

    quantity_label.value = quantity
    price_label.innerText = (price * quantity_label.value / 100).toFixed(2)
    subtotal_label.innerText = ((Number(subtotal_label.innerText) * 100 + price) / 100).toFixed(2)
    tax_label.innerText = (Number(subtotal_label.innerText) * 100 * 0.085 / 100).toFixed(2)
    total_label.innerText = (Number(subtotal_label.innerText) * 108.5 / 100).toFixed(2)

    var response = await fetch('/api/update_item', {
        method: "POST",
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(data)
    })

    if (!response.ok) {
        var quantity = Number(quantity_label.value) - 1
        quantity_label.value = quantity
        price_label.innerText = (price * quantity_label.value / 100).toFixed(2)
        subtotal_label.innerText = ((Number(subtotal_label.innerText) * 100 - price) / 100).toFixed(2)
        tax_label.innerText = (Number(subtotal_label.innerText) * 100 * 0.085 / 100).toFixed(2)
        total_label.innerText = (Number(subtotal_label.innerText) * 108.5 / 100).toFixed(2)
        if (quantity_label.value == 1) {
            decrement_button.setAttribute('disabled', true);
        }
    }
    
}

async function decrementCart(key, price) {
    var quantity_label = document.getElementById(`quantity_label_${key}`)
    var cart_item_label = document.getElementById(`cart_item_label_${key}`)
    var decrement_button = document.getElementById(`decrement_button_${key}`)
    var price_label = document.getElementById(`price_label_${key}`)
    var subtotal_label = document.getElementById('subtotal');
    var tax_label = document.getElementById('tax');
    var total_label = document.getElementById('total');

    var quantity = Number(quantity_label.value) - 1

    quantity_label.value = quantity
    price_label.innerText = (price * quantity_label.value / 100).toFixed(2)
    subtotal_label.innerText = ((Number(subtotal_label.innerText) * 100 - price) / 100).toFixed(2)
    tax_label.innerText = (Number(subtotal_label.innerText) * 100 * 0.085 / 100).toFixed(2)
    total_label.innerText = (Number(subtotal_label.innerText) * 108.5 / 100).toFixed(2)

    if (quantity_label.value == 1) {
        decrement_button.setAttribute('disabled', true);
    }

    var data = {
        quantity: quantity_label.value,
        cart_item_id: cart_item_label.value
    }

    var response = await fetch('/api/update_item', {
        method: "POST",
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(data)
    })

    if (!response.ok) {
        var quantity = Number(quantity_label.value) + 1

        quantity_label.value = quantity
        price_label.innerText = (price * quantity_label.value / 100).toFixed(2)
        subtotal_label.innerText = ((Number(subtotal_label.innerText) * 100 + price) / 100).toFixed(2)
        tax_label.innerText = (Number(subtotal_label.innerText) * 100 * 0.085 / 100).toFixed(2)
        total_label.innerText = (Number(subtotal_label.innerText) * 108.5 / 100).toFixed(2)

        if (quantity_label.value == 1) {
            decrement_button.setAttribute('disabled', true);
        }
    }
}
