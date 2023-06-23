<template>
    <AdminLayout>
        <div class="users">
            <h1 class="users__title">Users</h1>

            <table class="users__table">
                <thead>
                    <tr>
                        <th>User ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="user in users" :key="user.id">
                        <td>{{ user.id }}</td>
                        <td>{{ user.name }}</td>
                        <td>{{ user.email }}</td>
                        <td>{{ user.role }}</td>
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
        users: {
            type: Object,
            required: true,
        },
    },
};
</script>
<style>
/*  */

.users {
    padding: 20px;
}

.users__title {
    font-size: 24px;
    margin-bottom: 20px;
}

.users__table {
    width: 100%;
}

.users__table th {
    font-weight: bold;
    padding: 10px;
    background-color: #f5f5f5;
}

.users__table td {
    padding: 10px;
    border-bottom: 1px solid #ddd;
}
</style>
