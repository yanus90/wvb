export default {
    setBadgeQty() {
        $.get(window.my_ajax_object.ajax_url, { action: 'get_cart_qty' })
            .then(response => $('.badge-cart-counter').html(response.qty));
    },
}
