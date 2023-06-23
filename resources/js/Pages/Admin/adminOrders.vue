<template>
    <AdminLayout>
        <div class="orders">
            <h1 class="orders__title">Orders</h1>

            <table class="orders__table">
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Customer Name</th>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th>Total Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="order in orders" :key="order.id">
                        <td>{{ order.orderId }}</td>
                        <td>{{ order.customerName }}</td>
                        <td>{{ order.product }}</td>
                        <td>{{ order.quantity }}</td>
                        <td>{{ order.totalPrice }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </AdminLayout>
</template>
<script>
import AdminLayout from "../../Layouts/AdminLayout.vue";

export default {
    components: {
        AdminLayout,
    },
    props: {
        orders: {
            type: Object,
            required: true,
        },
    },
};
</script>
<style>
/*  */

.orders {
    padding: 20px;
}

.orders__title {
    font-size: 24px;
    margin-bottom: 20px;
}

.orders__table {
    width: 100%;
}

.orders__table th {
    font-weight: bold;
    padding: 10px;
    background-color: #f5f5f5;
}

.orders__table td {
    padding: 10px;
    border-bottom: 1px solid #ddd;
}
</style>
