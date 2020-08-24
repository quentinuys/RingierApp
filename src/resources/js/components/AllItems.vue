<template>
    <div>
        <h3 class="text-center">All Itemss</h3><br/>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Title</th>
                <th>Slug</th>
                <th>Description</th>
                <th>Date Online</th>
                <th>Date Offline</th>
                <th>Price</th>
                <th>Currency</th>
                <th>Category</th>
                <th>User</th>
                 <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="item in items" :key="item.id">
                <td>{{ item.title }}</td>
                <td>{{ item.slug }}</td>
                <td>{{ item.description }}</td>
                <td>{{ item.date_online }}</td>
                <td>{{ item.date_offline }}</td>
                <td>{{ item.price }}</td>
                <td>{{ item.currency }}</td>
                <td>{{ item.category }}</td>
                <td>{{ item.user }}</td>
                <td>
                    <div class="btn-group" role="group">
                        <router-link :to="{name: 'edit', params: { id: item.id }}" class="btn btn-primary">Edit
                        </router-link>
                        <button class="btn btn-danger" @click="deleteitem(item.id)">Delete</button>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                items: []
            }
        },
        created() {
            this.axios
                .get('http://localhost:8080/api/items')
                .then(response => {
                    this.items = response.data;
                });
        },
        methods: {
            deleteitem(id) {
                this.axios
                    .delete(`/http://localhost:8080/api/item/delete/${id}`)
                    .then(response => {
                        let i = this.items.map(item => item.id).indexOf(id); // find index of your object
                        this.items.splice(i, 1)
                    });
            }
        }
    }
</script>