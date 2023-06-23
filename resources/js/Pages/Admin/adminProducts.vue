<template>
    <AdminLayout>
        <div class="products">
            <h1 class="products__title">Products</h1>

            <table class="products__table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="product in products" :key="product.id">
                        <td>{{ product.title }}</td>
                        <td>{{ product.price }}</td>
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
        products: {
            type: Object,
            required: true,
        },
    },
};
</script>
<style>
/*  */

.products {
    padding: 20px;
}

.products__title {
    font-size: 24px;
    margin-bottom: 20px;
}

.products__table {
    width: 100%;
}

.products__table th {
    font-weight: bold;
    padding: 10px;
    background-color: #f5f5f5;
}

.products__table td {
    padding: 10px;
    border-bottom: 1px solid #ddd;
}
</style>
