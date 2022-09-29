<template>
    <div>
        <button v-on:click.prevent="addProductToCart()">加入購物車</button>
    </div>
</template>

<script>
    export default {
        data(){

        },
        props:['productId', 'userId'],
        methods:{
            async addProductToCart(){

                if(this.userId == 0){
                    Swal.fire("請先登錄！")
                    return;
                }

                let response = await axios.post('/cart', {
                    'product_id': this.productId
                });

                console.log(response.data);
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
