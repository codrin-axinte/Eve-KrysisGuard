<template>
    <div class="nk-box-1 bg-dark-2">
        <h2 class="nk-title h3 text-center" v-text="ore.name"></h2>
        <div class="form-horizontal">
            <input class="form-control"
                   type="number"
                   name="amount"
                   min="0"
                   v-model="amount"
                   @change="changePrice">
            <label>Price:&nbsp; <span v-text="price"></span>&nbsp;IKS</label>
        </div>
        <div class="nk-gap-1"></div>
        <ul>
            <li>Unit Price: {{ ore.unit_price }} IKS</li>
            <li>Last Update: {{ ore.updated_at }}</li>
        </ul>
        <div class="nk-gap-2"></div>
    </div>
</template>

<script>
    export default {
        name: "calculator",
        props: {
            ore: Object
        },
        data() {
            return {
                amount: 0
            }
        },
        methods: {
          changePrice(){
              this.$emit("priceChanged", {ore: this.ore, price: this.price});
          }
        },
        computed: {
            price(){
                return this.amount * this.$props.ore.unit_price;
            }
        }
    }
</script>

<style scoped>

</style>